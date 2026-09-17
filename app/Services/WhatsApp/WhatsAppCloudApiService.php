<?php

namespace App\Services\WhatsApp;

class WhatsAppCloudApiService
{
    private $accessToken;
    private $phoneNumberId;
    private $apiVersion;
    private $baseUrl;

    public function __construct()
    {
        $config = require __DIR__ . '/../../../config/whatsapp.php';
        $this->accessToken = $config['access_token'];
        $this->phoneNumberId = $config['phone_number_id'];
        $this->apiVersion = $config['api_version'];
        $this->baseUrl = "https://graph.facebook.com/{$this->apiVersion}/{$this->phoneNumberId}/messages";
    }

    public function sendTextMessage($to, $message)
    {
        return $this->sendRequest([
            'messaging_product' => 'whatsapp',
            'recipient_type' => 'individual',
            'to' => $to,
            'type' => 'text',
            'text' => ['body' => $message]
        ]);
    }

    public function sendButtonMessage($to, $bodyText, $buttons)
    {
        $actionButtons = [];
        foreach ($buttons as $id => $title) {
            $actionButtons[] = [
                'type' => 'reply',
                'reply' => [
                    'id' => $id,
                    'title' => substr($title, 0, 20) // API limit is 20 chars for button title
                ]
            ];
        }

        return $this->sendRequest([
            'messaging_product' => 'whatsapp',
            'recipient_type' => 'individual',
            'to' => $to,
            'type' => 'interactive',
            'interactive' => [
                'type' => 'button',
                'body' => ['text' => $bodyText],
                'action' => [
                    'buttons' => $actionButtons
                ]
            ]
        ]);
    }

    public function sendListMessage($to, $bodyText, $buttonText, $sections)
    {
        $formattedSections = [];
        foreach ($sections as $title => $rows) {
            $formattedRows = [];
            foreach ($rows as $id => $rowTitle) {
                $formattedRows[] = [
                    'id' => $id,
                    'title' => substr($rowTitle, 0, 24)
                ];
            }
            $formattedSections[] = [
                'title' => substr($title, 0, 24),
                'rows' => $formattedRows
            ];
        }

        return $this->sendRequest([
            'messaging_product' => 'whatsapp',
            'recipient_type' => 'individual',
            'to' => $to,
            'type' => 'interactive',
            'interactive' => [
                'type' => 'list',
                'body' => ['text' => $bodyText],
                'action' => [
                    'button' => substr($buttonText, 0, 20),
                    'sections' => $formattedSections
                ]
            ]
        ]);
    }

    public function markMessageAsRead($messageId)
    {
        return $this->sendRequest([
            'messaging_product' => 'whatsapp',
            'status' => 'read',
            'message_id' => $messageId
        ]);
    }

    private function sendRequest($payload)
    {
        $ch = curl_init($this->baseUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $this->accessToken,
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        
        if ($error) {
            error_log("WhatsApp API Error: $error");
            return false;
        }

        $decoded = json_decode($response, true);
        if ($httpCode >= 400) {
            error_log("WhatsApp API HTTP Error $httpCode: " . $response);
            return false;
        }

        return $decoded;
    }
}
