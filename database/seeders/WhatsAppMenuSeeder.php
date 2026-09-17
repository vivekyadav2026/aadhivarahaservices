<?php
require __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

use App\Core\Database;
use PDO;

$db = Database::getInstance()->getConnection();

$db->exec("SET FOREIGN_KEY_CHECKS = 0; TRUNCATE TABLE whatsapp_menus; SET FOREIGN_KEY_CHECKS = 1;");

function insertMenu($db, $menu) {
    $stmt = $db->prepare("INSERT INTO whatsapp_menus (parent_id, menu_key, title, description, response_message, message_type, button_text, sort_order) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $menu['parent_id'],
        $menu['menu_key'],
        $menu['title'],
        $menu['description'] ?? null,
        $menu['response_message'] ?? null,
        $menu['message_type'],
        $menu['button_text'] ?? null,
        $menu['sort_order'] ?? 0
    ]);
    return $db->lastInsertId();
}

$rootId = insertMenu($db, [
    'parent_id' => null,
    'menu_key' => 'root',
    'title' => 'Main Menu',
    'message_type' => 'menu',
    'response_message' => "Welcome to Aadhivaraha Services 👋\n\nHow can we help you?",
    'button_text' => 'View Services'
]);

$services = [
    ['key' => 'main_epfo', 'title' => 'EPFO & ESIC', 'desc' => 'PF, Pension & KYC services'],
    ['key' => 'main_gst', 'title' => 'GST Services', 'desc' => 'Registration & Returns'],
    ['key' => 'main_firm', 'title' => 'Firm Registration', 'desc' => 'Proprietorship, LLP, Pvt Ltd'],
    ['key' => 'main_dsc', 'title' => 'Digital Signature (DSC)', 'desc' => 'New & Renewal'],
    ['key' => 'main_labour', 'title' => 'Labour Licence', 'desc' => 'New, Renewal, Compliance'],
    ['key' => 'main_gem', 'title' => 'GeM Registration', 'desc' => 'Seller profile & bidding'],
    ['key' => 'main_tender', 'title' => 'Tender Support', 'desc' => 'Documentation & EMD'],
    ['key' => 'main_other', 'title' => 'Other Services', 'desc' => 'Explore other services'],
    ['key' => 'talk_agent', 'title' => 'Talk to Agent', 'desc' => 'Speak to our support team']
];

$mainMenuIds = [];
$sort = 1;
foreach ($services as $service) {
    $mainMenuIds[$service['key']] = insertMenu($db, [
        'parent_id' => $rootId,
        'menu_key' => $service['key'],
        'title' => $service['title'],
        'description' => $service['desc'],
        'message_type' => ($service['key'] === 'talk_agent') ? 'action' : 'menu',
        'sort_order' => $sort++
    ]);
}

// EPFO
$epfoServices = [
    ['key' => 'epfo_withdraw', 'title' => 'PF Withdrawal'],
    ['key' => 'epfo_uan', 'title' => 'UAN / KYC'],
    ['key' => 'epfo_link', 'title' => 'Aadhaar / PAN / Bank Linking'],
    ['key' => 'epfo_correct', 'title' => 'Name / DOB / Father Name Correction'],
    ['key' => 'epfo_transfer', 'title' => 'EPF Transfer'],
    ['key' => 'epfo_eps', 'title' => 'EPS / Pension'],
    ['key' => 'epfo_employer', 'title' => 'Employer EPF / ESIC'],
    ['key' => 'talk_agent_epfo', 'title' => 'Talk to Agent'],
    ['key' => 'main_menu_epfo', 'title' => 'Main Menu']
];
$sort = 1;
foreach ($epfoServices as $s) {
    $type = 'response';
    if (strpos($s['key'], 'talk_agent') !== false) $type = 'action';
    if (strpos($s['key'], 'main_menu') !== false) $type = 'action';
    
    insertMenu($db, [
        'parent_id' => $mainMenuIds['main_epfo'],
        'menu_key' => $s['key'],
        'title' => $s['title'],
        'message_type' => $type,
        'response_message' => "Title:\n" . $s['title'] . "\n\nWe can assist with " . $s['title'] . " and related documentation.\n\nRequired information may include:\n• UAN\n• Aadhaar\n• PAN\n• Bank details\n\nPlease choose an option:",
        'sort_order' => $sort++
    ]);
}

// GST
$gstServices = [
    ['key' => 'gst_registration', 'title' => 'GST Registration'],
    ['key' => 'gst_returns', 'title' => 'GST Return Filing'],
    ['key' => 'gst_amendment', 'title' => 'GST Amendment'],
    ['key' => 'gst_cancellation', 'title' => 'GST Cancellation'],
    ['key' => 'gst_compliance', 'title' => 'GST Compliance'],
    ['key' => 'talk_agent_gst', 'title' => 'Talk to Agent'],
    ['key' => 'main_menu_gst', 'title' => 'Main Menu']
];
$sort = 1;
foreach ($gstServices as $s) {
    $type = 'response';
    if (strpos($s['key'], 'talk_agent') !== false) $type = 'action';
    if (strpos($s['key'], 'main_menu') !== false) $type = 'action';

    $msg = "Title:\n" . $s['title'] . "\n\n" . $s['title'] . " assistance is available.\n\nRequired documents:\n• PAN Card\n• Aadhaar Card\n• Mobile Number\n• Email ID\n• Business Address Proof\n• Bank Details\n\nPlease choose an option:";

    insertMenu($db, [
        'parent_id' => $mainMenuIds['main_gst'],
        'menu_key' => $s['key'],
        'title' => $s['title'],
        'message_type' => $type,
        'response_message' => $msg,
        'sort_order' => $sort++
    ]);
}

// Firm
$firmServices = [
    ['key' => 'firm_prop', 'title' => 'Proprietorship'],
    ['key' => 'firm_partner', 'title' => 'Partnership Firm'],
    ['key' => 'firm_llp', 'title' => 'LLP Registration'],
    ['key' => 'firm_pvt', 'title' => 'Private Limited Company'],
    ['key' => 'talk_agent_firm', 'title' => 'Talk to Agent'],
    ['key' => 'main_menu_firm', 'title' => 'Main Menu']
];
$sort = 1;
foreach ($firmServices as $s) {
    $type = 'response';
    if (strpos($s['key'], 'talk_agent') !== false) $type = 'action';
    if (strpos($s['key'], 'main_menu') !== false) $type = 'action';
    insertMenu($db, ['parent_id' => $mainMenuIds['main_firm'], 'menu_key' => $s['key'], 'title' => $s['title'], 'message_type' => $type, 'response_message' => "Details for " . $s['title'] . ".", 'sort_order' => $sort++]);
}

// DSC
$dscServices = [
    ['key' => 'dsc_new', 'title' => 'New DSC'],
    ['key' => 'dsc_renewal', 'title' => 'DSC Renewal'],
    ['key' => 'dsc_token', 'title' => 'DSC Token'],
    ['key' => 'dsc_corp', 'title' => 'Corporate DSC'],
    ['key' => 'talk_agent_dsc', 'title' => 'Talk to Agent'],
    ['key' => 'main_menu_dsc', 'title' => 'Main Menu']
];
$sort = 1;
foreach ($dscServices as $s) {
    $type = 'response';
    if (strpos($s['key'], 'talk_agent') !== false) $type = 'action';
    if (strpos($s['key'], 'main_menu') !== false) $type = 'action';
    insertMenu($db, ['parent_id' => $mainMenuIds['main_dsc'], 'menu_key' => $s['key'], 'title' => $s['title'], 'message_type' => $type, 'response_message' => "Details for " . $s['title'] . ".", 'sort_order' => $sort++]);
}

// Labour
$labourServices = [
    ['key' => 'labour_new', 'title' => 'New Labour Licence'],
    ['key' => 'labour_renewal', 'title' => 'Renewal'],
    ['key' => 'labour_amend', 'title' => 'Amendment'],
    ['key' => 'labour_comp', 'title' => 'Compliance Support'],
    ['key' => 'talk_agent_labour', 'title' => 'Talk to Agent'],
    ['key' => 'main_menu_labour', 'title' => 'Main Menu']
];
$sort = 1;
foreach ($labourServices as $s) {
    $type = 'response';
    if (strpos($s['key'], 'talk_agent') !== false) $type = 'action';
    if (strpos($s['key'], 'main_menu') !== false) $type = 'action';
    insertMenu($db, ['parent_id' => $mainMenuIds['main_labour'], 'menu_key' => $s['key'], 'title' => $s['title'], 'message_type' => $type, 'response_message' => "Details for " . $s['title'] . ".", 'sort_order' => $sort++]);
}

// GeM
$gemServices = [
    ['key' => 'gem_seller', 'title' => 'Seller Registration'],
    ['key' => 'gem_profile', 'title' => 'Profile Update'],
    ['key' => 'gem_product', 'title' => 'Product Listing'],
    ['key' => 'gem_bid', 'title' => 'Bid / Tender Support'],
    ['key' => 'talk_agent_gem', 'title' => 'Talk to Agent'],
    ['key' => 'main_menu_gem', 'title' => 'Main Menu']
];
$sort = 1;
foreach ($gemServices as $s) {
    $type = 'response';
    if (strpos($s['key'], 'talk_agent') !== false) $type = 'action';
    if (strpos($s['key'], 'main_menu') !== false) $type = 'action';
    insertMenu($db, ['parent_id' => $mainMenuIds['main_gem'], 'menu_key' => $s['key'], 'title' => $s['title'], 'message_type' => $type, 'response_message' => "Details for " . $s['title'] . ".", 'sort_order' => $sort++]);
}

// Tender
$tenderServices = [
    ['key' => 'tender_search', 'title' => 'Tender Search'],
    ['key' => 'tender_doc', 'title' => 'Tender Documentation'],
    ['key' => 'tender_bid', 'title' => 'Bid Submission Support'],
    ['key' => 'tender_emd', 'title' => 'EMD / Tender Assistance'],
    ['key' => 'talk_agent_tender', 'title' => 'Talk to Agent'],
    ['key' => 'main_menu_tender', 'title' => 'Main Menu']
];
$sort = 1;
foreach ($tenderServices as $s) {
    $type = 'response';
    if (strpos($s['key'], 'talk_agent') !== false) $type = 'action';
    if (strpos($s['key'], 'main_menu') !== false) $type = 'action';
    insertMenu($db, ['parent_id' => $mainMenuIds['main_tender'], 'menu_key' => $s['key'], 'title' => $s['title'], 'message_type' => $type, 'response_message' => "Details for " . $s['title'] . ".", 'sort_order' => $sort++]);
}

echo "WhatsApp Menu Seeder completed successfully.\n";
