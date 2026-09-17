<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class WhatsappLead
{
    public static function create($data)
    {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("INSERT INTO whatsapp_leads (name, phone, service, message, status) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([
            $data['name'] ?? null,
            $data['phone'],
            $data['service'] ?? null,
            $data['message'] ?? null,
            'open'
        ]);
        return $db->lastInsertId();
    }
}
