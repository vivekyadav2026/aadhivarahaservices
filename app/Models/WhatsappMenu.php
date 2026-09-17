<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class WhatsappMenu
{
    public static function findByKey($key)
    {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("SELECT * FROM whatsapp_menus WHERE menu_key = ? LIMIT 1");
        $stmt->execute([$key]);
        return $stmt->fetch();
    }

    public static function findById($id)
    {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("SELECT * FROM whatsapp_menus WHERE id = ? LIMIT 1");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function getChildren($parentId)
    {
        $db = Database::getInstance()->getConnection();
        if ($parentId === null) {
            $stmt = $db->prepare("SELECT * FROM whatsapp_menus WHERE parent_id IS NULL AND status = 1 ORDER BY sort_order ASC");
            $stmt->execute();
        } else {
            $stmt = $db->prepare("SELECT * FROM whatsapp_menus WHERE parent_id = ? AND status = 1 ORDER BY sort_order ASC");
            $stmt->execute([$parentId]);
        }
        return $stmt->fetchAll();
    }
}
