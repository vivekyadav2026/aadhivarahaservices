# WhatsApp Cloud API Setup Guide

This guide explains how to set up the Meta WhatsApp Cloud API for the Aadhivaraha Services chatbot.

## 1. Meta Developer App
1. Go to [Meta for Developers](https://developers.facebook.com/).
2. Log in and go to **My Apps**.
3. Click **Create App**, select **Other**, then **Business**.
4. Name the app (e.g., "Aadhivaraha Services WhatsApp") and create it.

## 2. WhatsApp Cloud API Setup
1. Once the app is created, scroll down to **WhatsApp** and click **Set up**.
2. Select your Meta Business Account (or create one if you don't have one).

## 3. Test Phone Number & Access Token
1. In the left menu, go to **WhatsApp > API Setup**.
2. Meta provides a temporary **Test Phone Number** automatically.
3. You will also see a **Temporary Access Token**, **Phone Number ID**, and **WhatsApp Business Account ID**.
4. Update these values in your `.env` file for testing:
    ```env
    WHATSAPP_ACCESS_TOKEN=your_temporary_access_token
    WHATSAPP_PHONE_NUMBER_ID=your_phone_number_id
    WHATSAPP_BUSINESS_ACCOUNT_ID=your_waba_id
    ```

## 4. Webhook Configuration
1. Go to **WhatsApp > Configuration**.
2. Under **Webhook**, click **Edit**.
3. **Callback URL:** `https://yourdomain.com/api/whatsapp/webhook.php` (must be HTTPS!).
4. **Verify Token:** Create a secure token (e.g., `aadhivaraha_secure_2026`) and enter it here.
5. Make sure you update your `.env` file with the same Verify Token:
    ```env
    WHATSAPP_VERIFY_TOKEN=aadhivaraha_secure_2026
    ```
6. Click **Verify and Save**.

## 5. Webhook Subscriptions
1. Once the webhook is verified, click **Manage** under Webhook fields.
2. Subscribe to the **messages** field. This ensures your script receives incoming messages.

## 6. Database Setup
1. Create a MySQL database (e.g., `aadhivaraha_db`).
2. Update the `DB_*` variables in your `.env` file.
3. Run the migrations script by navigating to `https://yourdomain.com/database/migrate.php` in your browser (or run `php database/migrate.php` in the terminal).
4. Run the seeder by navigating to `https://yourdomain.com/database/seeders/WhatsAppMenuSeeder.php` (or run `php database/seeders/WhatsAppMenuSeeder.php`).

## 7. Production Setup
1. Once testing is successful, you can add a real phone number in **WhatsApp > API Setup**.
2. To get a permanent access token (so the temporary one doesn't expire every 24h), you must create a System User in your Business Settings and generate a permanent token.
3. Replace the `WHATSAPP_ACCESS_TOKEN` in `.env` with the permanent token.

## 8. Troubleshooting
- **Webhook fails to verify?** Check if the Verify Token in `.env` matches the one in Meta perfectly. Ensure your server is accessible via HTTPS.
- **Messages not receiving?** Check if you subscribed to the `messages` field in Meta Developer dashboard.
- **Database error?** Ensure `.env` is properly formatted without extra spaces and the database is created.
