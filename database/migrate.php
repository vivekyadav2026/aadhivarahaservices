<?php
require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

use App\Core\Database;

try {
    $db = Database::getInstance()->getConnection();
    
    $sql = file_get_contents(__DIR__ . '/migrations/01_create_whatsapp_tables.sql');
    $db->exec($sql);
    
    echo "Migrations ran successfully.\n";
} catch (Exception $e) {
    die("Migration failed: " . $e->getMessage() . "\n");
}
