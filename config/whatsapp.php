<?php
return [
    'access_token' => $_ENV['WHATSAPP_ACCESS_TOKEN'] ?? '',
    'phone_number_id' => $_ENV['WHATSAPP_PHONE_NUMBER_ID'] ?? '',
    'business_account_id' => $_ENV['WHATSAPP_BUSINESS_ACCOUNT_ID'] ?? '',
    'api_version' => $_ENV['WHATSAPP_API_VERSION'] ?? 'v20.0',
    'verify_token' => $_ENV['WHATSAPP_VERIFY_TOKEN'] ?? '',
];
