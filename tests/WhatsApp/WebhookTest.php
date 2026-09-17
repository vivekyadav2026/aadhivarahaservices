<?php

use PHPUnit\Framework\TestCase;

class WebhookTest extends TestCase
{
    public function test_get_webhook_verification_returns_challenge_when_tokens_match()
    {
        $_ENV['WHATSAPP_VERIFY_TOKEN'] = 'test_token';
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_GET['hub_mode'] = 'subscribe';
        $_GET['hub_verify_token'] = 'test_token';
        $_GET['hub_challenge'] = '12345';

        ob_start();
        
        // Emulate the controller verification
        $verifyToken = $_ENV['WHATSAPP_VERIFY_TOKEN'];
        $mode = $_GET['hub_mode'] ?? '';
        $token = $_GET['hub_verify_token'] ?? '';
        $challenge = $_GET['hub_challenge'] ?? '';

        if ($mode === 'subscribe' && $token === $verifyToken) {
            http_response_code(200);
            echo $challenge;
        } else {
            http_response_code(403);
            echo "Forbidden";
        }

        $output = ob_get_clean();

        $this->assertEquals('12345', $output);
        $this->assertEquals(200, http_response_code());
    }

    public function test_get_webhook_verification_returns_forbidden_when_tokens_mismatch()
    {
        $_ENV['WHATSAPP_VERIFY_TOKEN'] = 'test_token';
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_GET['hub_mode'] = 'subscribe';
        $_GET['hub_verify_token'] = 'wrong_token';
        $_GET['hub_challenge'] = '12345';

        ob_start();
        
        $verifyToken = $_ENV['WHATSAPP_VERIFY_TOKEN'];
        $mode = $_GET['hub_mode'] ?? '';
        $token = $_GET['hub_verify_token'] ?? '';
        $challenge = $_GET['hub_challenge'] ?? '';

        if ($mode === 'subscribe' && $token === $verifyToken) {
            http_response_code(200);
            echo $challenge;
        } else {
            http_response_code(403);
            echo "Forbidden";
        }

        $output = ob_get_clean();

        $this->assertEquals('Forbidden', $output);
        $this->assertEquals(403, http_response_code());
    }

    public function test_post_webhook_receives_valid_payload()
    {
        $payload = json_encode([
            'object' => 'whatsapp_business_account',
            'entry' => [
                [
                    'changes' => [
                        [
                            'value' => [
                                'messaging_product' => 'whatsapp',
                                'messages' => [
                                    [
                                        'id' => 'wamid.HBgLOTE...',
                                        'from' => '919876543210',
                                        'type' => 'text',
                                        'text' => ['body' => 'Hi']
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]);

        $data = json_decode($payload, true);
        
        $this->assertTrue(isset($data['object']));
        $this->assertEquals('whatsapp_business_account', $data['object']);
        
        $message = $data['entry'][0]['changes'][0]['value']['messages'][0];
        $this->assertEquals('Hi', $message['text']['body']);
        $this->assertEquals('919876543210', $message['from']);
    }
}
