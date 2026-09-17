<?php

require __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

use App\Services\WhatsApp\WhatsAppCloudApiService;
use App\Models\WhatsappMenu;
use App\Models\WhatsappConversation;
use App\Models\WhatsappMessage;
use App\Models\WhatsappLead;

class WhatsAppWebhookController
{
    private $api;

    public function __construct()
    {
        $this->api = new WhatsAppCloudApiService();
    }

    public function handle()
    {
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            $this->verify();
        } elseif ($method === 'POST') {
            $this->receive();
        } else {
            http_response_code(405);
            echo "Method Not Allowed";
        }
    }

    private function verify()
    {
        $verifyToken = $_ENV['WHATSAPP_VERIFY_TOKEN'];

        $mode = $_GET['hub_mode'] ?? '';
        $token = $_GET['hub_verify_token'] ?? '';
        $challenge = $_GET['hub_challenge'] ?? '';

        if ($mode === 'subscribe' && $token === $verifyToken) {
            http_response_code(200);
            echo $challenge;
            exit;
        } else {
            http_response_code(403);
            echo "Forbidden";
            exit;
        }
    }

    private function receive()
    {
        $payload = file_get_contents('php://input');
        $data = json_decode($payload, true);

        if (!$data || !isset($data['object']) || $data['object'] !== 'whatsapp_business_account') {
            http_response_code(400);
            exit;
        }

        // Acknowledge receipt immediately to avoid Meta retries
        http_response_code(200);
        
        // Disable output buffering and close connection so we can process in background if FPM supports it
        if (function_exists('fastcgi_finish_request')) {
            fastcgi_finish_request();
        }

        foreach ($data['entry'] as $entry) {
            foreach ($entry['changes'] as $change) {
                if ($change['value']['messaging_product'] !== 'whatsapp') continue;
                if (!isset($change['value']['messages'])) continue;

                $message = $change['value']['messages'][0];
                $contact = $change['value']['contacts'][0] ?? null;

                $this->processIncomingMessage($message, $contact, $payload);
            }
        }
    }

    private function processIncomingMessage($message, $contact, $rawPayload)
    {
        $messageId = $message['id'];
        $phone = $message['from'];
        $whatsappUserId = $contact['wa_id'] ?? null;
        $name = $contact['profile']['name'] ?? null;

        if (WhatsappMessage::exists($messageId)) {
            return; // Duplicate
        }

        $conversation = WhatsappConversation::findByPhone($phone);
        if (!$conversation) {
            $conversation = WhatsappConversation::create([
                'phone' => $phone,
                'whatsapp_user_id' => $whatsappUserId
            ]);
        }

        // Mark as read
        $this->api->markMessageAsRead($messageId);

        if ($message['type'] === 'text') {
            $text = trim(strtolower($message['text']['body']));
            WhatsappMessage::create([
                'conversation_id' => $conversation['id'],
                'phone' => $phone,
                'direction' => 'inbound',
                'message_type' => 'text',
                'message_text' => $text,
                'message_id' => $messageId,
                'payload' => $rawPayload
            ]);
            $this->handleTextMessage($conversation, $text, $name);
        } elseif ($message['type'] === 'interactive') {
            $interactive = $message['interactive'];
            $interactiveId = '';
            $interactiveType = $interactive['type'];
            
            if ($interactiveType === 'button_reply') {
                $interactiveId = $interactive['button_reply']['id'];
            } elseif ($interactiveType === 'list_reply') {
                $interactiveId = $interactive['list_reply']['id'];
            }

            WhatsappMessage::create([
                'conversation_id' => $conversation['id'],
                'phone' => $phone,
                'direction' => 'inbound',
                'message_type' => 'interactive',
                'interactive_id' => $interactiveId,
                'message_id' => $messageId,
                'payload' => $rawPayload
            ]);
            $this->processInteractiveResponse($conversation, $interactiveId, $name);
        } else {
            // Unsupported message type
            $this->api->sendTextMessage($phone, "Sorry, I can only understand text and menu selections.");
        }
    }

    private function handleTextMessage($conversation, $text, $name)
    {
        $phone = $conversation['phone'];
        $greetings = ['hi', 'hello', 'hii', 'hey', 'start', 'menu'];

        if (in_array($text, $greetings)) {
            // Reset state
            WhatsappConversation::update($phone, ['current_state' => null, 'current_menu_id' => null]);
            $this->sendMenu($phone, 'root');
            return;
        }

        // Check if in "Talk to Agent" flow
        if ($conversation['current_state'] === 'waiting_for_name') {
            WhatsappConversation::update($phone, ['current_state' => 'waiting_for_service', 'last_message' => $text]);
            $this->api->sendTextMessage($phone, "What service do you need?");
            return;
        }

        if ($conversation['current_state'] === 'waiting_for_service') {
            $prevName = $conversation['last_message'];
            WhatsappConversation::update($phone, ['current_state' => 'waiting_for_desc', 'last_message' => json_encode(['name' => $prevName, 'service' => $text])]);
            $this->api->sendTextMessage($phone, "Please briefly describe your requirement.");
            return;
        }

        if ($conversation['current_state'] === 'waiting_for_desc') {
            $data = json_decode($conversation['last_message'], true);
            WhatsappLead::create([
                'name' => $data['name'],
                'phone' => $phone,
                'service' => $data['service'],
                'message' => $text
            ]);
            WhatsappConversation::update($phone, ['current_state' => null]);
            $this->api->sendTextMessage($phone, "Thank you. Your request has been received. Our team will contact you shortly.");
            return;
        }

        // Unknown text
        $this->api->sendTextMessage($phone, "Sorry, I didn't understand that.\n\nPlease select an option from the menu below.");
        $this->sendMenu($phone, 'root');
    }

    private function processInteractiveResponse($conversation, $interactiveId, $name)
    {
        $phone = $conversation['phone'];

        if ($interactiveId === 'root' || strpos($interactiveId, 'main_menu') !== false) {
            WhatsappConversation::update($phone, ['current_state' => null]);
            $this->sendMenu($phone, 'root');
            return;
        }
        
        if (strpos($interactiveId, 'talk_agent') !== false || $interactiveId === 'apply_now') {
            WhatsappConversation::update($phone, ['current_state' => 'waiting_for_name', 'last_message' => '']);
            $this->api->sendTextMessage($phone, "Sure. Please share your name.");
            return;
        }

        $menu = WhatsappMenu::findByKey($interactiveId);
        if (!$menu) {
            $this->sendMenu($phone, 'root');
            return;
        }

        WhatsappConversation::update($phone, ['current_menu_id' => $menu['id'], 'current_state' => null]);
        $this->sendMenu($phone, $menu['menu_key']);
    }

    private function sendMenu($phone, $menuKey)
    {
        $menu = WhatsappMenu::findByKey($menuKey);
        if (!$menu) return;

        $children = WhatsappMenu::getChildren($menu['id']);

        if ($menu['message_type'] === 'response') {
            $buttons = [];
            $buttons['apply_now'] = "Apply Now";
            $buttons['talk_agent'] = "Talk to Agent";
            $buttons['root'] = "Main Menu";
            $this->api->sendButtonMessage($phone, $menu['response_message'], $buttons);
        } elseif ($menu['message_type'] === 'menu' || $menu['message_type'] === 'list') {
            if (count($children) <= 3 && count($children) > 0) {
                $buttons = [];
                foreach ($children as $child) {
                    $buttons[$child['menu_key']] = $child['title'];
                }
                $this->api->sendButtonMessage($phone, $menu['response_message'] ?? 'Please choose an option:', $buttons);
            } elseif (count($children) > 3) {
                $rows = [];
                foreach ($children as $child) {
                    $rows[$child['menu_key']] = $child['title'];
                }

                if ($menu['parent_id'] !== null) {
                    $parent = WhatsappMenu::findById($menu['parent_id']);
                    if ($parent) {
                        $rows[$parent['menu_key']] = "🔙 Back";
                    }
                }

                $this->api->sendListMessage($phone, $menu['response_message'] ?? 'Please choose a service:', $menu['button_text'] ?? 'Options', ['Services' => $rows]);
            }
        }
    }
}

$controller = new WhatsAppWebhookController();
$controller->handle();
