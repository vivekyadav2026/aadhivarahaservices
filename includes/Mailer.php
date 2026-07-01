<?php
/**
 * Mailer.php — Aadhivaraha Services
 * Sends emails via PHPMailer using SMTP settings stored in config/smtp.json
 */

// Load PHPMailer from Composer autoload
$autoload = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoload)) {
    throw new RuntimeException('PHPMailer not installed. Run: composer install');
}
require_once $autoload;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
    private array $cfg;

    public function __construct()
    {
        $cfgFile = __DIR__ . '/../config/smtp.json';
        if (!file_exists($cfgFile)) {
            throw new RuntimeException('SMTP config file not found.');
        }
        $this->cfg = json_decode(file_get_contents($cfgFile), true);
    }

    /**
     * Send a plain-text email.
     *
     * @param string $to      Recipient email address
     * @param string $subject Email subject
     * @param string $body    Plain text body
     * @param string $replyTo Optional reply-to address
     * @return array ['success' => bool, 'error' => string]
     */
    public function send(string $to, string $subject, string $body, string $replyTo = ''): array
    {
        $cfg = $this->cfg;

        if (empty($cfg['host']) || empty($cfg['username']) || empty($cfg['password'])) {
            return ['success' => false, 'error' => 'SMTP is not configured. Please set up SMTP settings in the admin panel.'];
        }

        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->CharSet    = 'UTF-8';
            $mail->Encoding   = 'base64';
            $mail->Host       = $cfg['host'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $cfg['username'];
            $mail->Password   = $cfg['password'];
            $mail->Port       = (int)($cfg['port'] ?? 587);

            // Encryption
            $enc = strtolower($cfg['encryption'] ?? 'tls');
            if ($enc === 'ssl') {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            } elseif ($enc === 'tls') {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            } else {
                $mail->SMTPAutoTLS = false;
                $mail->SMTPSecure  = '';
            }

            // Sender
            $fromEmail = $cfg['from_email'] ?: $cfg['username'];
            $fromName  = $cfg['from_name']  ?: 'Aadhivaraha Services';
            $mail->setFrom($fromEmail, $fromName);

            // Reply-To
            if (!empty($replyTo)) {
                $mail->addReplyTo($replyTo);
            }

            // Recipient
            $mail->addAddress($to);

            // Content
            $mail->isHTML(false);
            $mail->Subject = $subject;
            $mail->Body    = $body;

            $mail->send();
            return ['success' => true, 'error' => ''];

        } catch (Exception $e) {
            return ['success' => false, 'error' => $mail->ErrorInfo];
        }
    }

    /**
     * Get current SMTP config (password masked).
     */
    public function getConfig(): array
    {
        $cfg = $this->cfg;
        if (!empty($cfg['password'])) {
            $cfg['password'] = '••••••••';
        }
        return $cfg;
    }

    /**
     * Check if SMTP is configured.
     */
    public function isConfigured(): bool
    {
        return !empty($this->cfg['host']) && !empty($this->cfg['username']) && !empty($this->cfg['password']);
    }
}
