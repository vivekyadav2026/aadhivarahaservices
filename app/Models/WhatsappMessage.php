<?php

namespace App\Models;

use App\Core\Database;

class WhatsappMessage
{
    public static function create($data)
    {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("INSERT INTO whatsapp_messages (conversation_id, phone, direction, message_type, message_text, message_id, interactive_id, status, payload) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $data['conversation_id'],
            $data['phone'],
            $data['direction'],
            $data['message_type'],
            $data['message_text'] ?? null,
            $data['message_id'] ?? null,
            $data['interactive_id'] ?? null,
            $data['status'] ?? null,
            $data['payload'] ?? null
        ]);
        return $db->lastInsertId();
    }

    public static function exists($messageId)
    {
        if (!$messageId) return false;
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("SELECT id FROM whatsapp_messages WHERE message_id = ? LIMIT 1");
        $stmt->execute([$messageId]);
        return $stmt->fetch() !== false;
    }
}
