<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class WhatsappConversation
{
    public static function findByPhone($phone)
    {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("SELECT * FROM whatsapp_conversations WHERE phone = ? LIMIT 1");
        $stmt->execute([$phone]);
        return $stmt->fetch();
    }

    public static function create($data)
    {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("INSERT INTO whatsapp_conversations (phone, whatsapp_user_id, current_menu_id, current_state, last_message, last_interaction_at) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $data['phone'],
            $data['whatsapp_user_id'] ?? null,
            $data['current_menu_id'] ?? null,
            $data['current_state'] ?? null,
            $data['last_message'] ?? null,
            date('Y-m-d H:i:s')
        ]);
        return self::findByPhone($data['phone']);
    }

    public static function update($phone, $data)
    {
        $db = Database::getInstance()->getConnection();
        $fields = [];
        $values = [];
        foreach ($data as $key => $val) {
            $fields[] = "$key = ?";
            $values[] = $val;
        }
        $fields[] = "last_interaction_at = ?";
        $values[] = date('Y-m-d H:i:s');
        $values[] = $phone;

        $sql = "UPDATE whatsapp_conversations SET " . implode(', ', $fields) . " WHERE phone = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute($values);
    }
}
