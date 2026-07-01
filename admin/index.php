<?php
/**
 * Admin Panel — Aadhivaraha Services
 * SMTP Settings, Test Email, and Admin Password Management
 * Access: /admin/
 */

session_start();

define('BASE_DIR',   dirname(__DIR__));
define('SMTP_FILE',  BASE_DIR . '/config/smtp.json');
define('ADMIN_FILE', BASE_DIR . '/config/admin.php');

// ---------- Helpers ----------

function loadSmtp(): array {
    if (!file_exists(SMTP_FILE)) return [];
    return json_decode(file_get_contents(SMTP_FILE), true) ?? [];
}

function saveSmtp(array $data): void {
    file_put_contents(SMTP_FILE, json_encode($data, JSON_PRETTY_PRINT));
}

function loadAdminHash(): string {
    if (!file_exists(ADMIN_FILE)) return password_hash('admin@2026@#$%', PASSWORD_DEFAULT);
    $cfg = include ADMIN_FILE;
    return $cfg['password_hash'] ?? '';
}

function saveAdminHash(string $hash): void {
    $content = "<?php\nreturn [\n    'password_hash' => " . var_export($hash, true) . "\n];\n";
    file_put_contents(ADMIN_FILE, $content);
}

function isLoggedIn(): bool {
    return !empty($_SESSION['av_admin_logged_in']);
}

// ---------- Actions ----------

$action  = $_POST['action']  ?? '';
$message = '';
$msgType = 'success'; // success | error

// LOGIN
if ($action === 'login') {
    $pass = $_POST['password'] ?? '';
    if (password_verify($pass, loadAdminHash())) {
        $_SESSION['av_admin_logged_in'] = true;
        header('Location: index.php');
        exit;
    } else {
        $message = 'Incorrect password. Please try again.';
        $msgType = 'error';
    }
}

// LOGOUT
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}

// SAVE SMTP
if ($action === 'save_smtp' && isLoggedIn()) {
    $data = [
        'host'       => trim($_POST['host']       ?? ''),
        'port'       => (int)($_POST['port']       ?? 587),
        'encryption' => trim($_POST['encryption']  ?? 'tls'),
        'username'   => trim($_POST['username']    ?? ''),
        'password'   => trim($_POST['password']    ?? ''),
        'from_email' => trim($_POST['from_email']  ?? ''),
        'from_name'  => trim($_POST['from_name']   ?? 'Aadhivaraha Services'),
    ];

    // If password field left blank, keep existing password
    $existing = loadSmtp();
    if ($data['password'] === '' && !empty($existing['password'])) {
        $data['password'] = $existing['password'];
    }

    saveSmtp($data);
    $message = 'SMTP settings saved successfully.';
}

// SEND TEST EMAIL
if ($action === 'test_email' && isLoggedIn()) {
    $testTo = trim($_POST['test_to'] ?? '');
    if (!filter_var($testTo, FILTER_VALIDATE_EMAIL)) {
        $message = 'Please enter a valid email address for the test.';
        $msgType = 'error';
    } else {
        $vendorAutoload = BASE_DIR . '/vendor/autoload.php';
        if (!file_exists($vendorAutoload)) {
            $message = 'PHPMailer is not installed. Please run: composer install (see instructions below).';
            $msgType = 'error';
        } else {
            try {
                require_once BASE_DIR . '/includes/Mailer.php';
                $mailer = new Mailer();
                if (!$mailer->isConfigured()) {
                    $message = 'SMTP settings are incomplete. Please save your settings first.';
                    $msgType = 'error';
                } else {
                    $result = $mailer->send(
                        $testTo,
                        'Test Email — Aadhivaraha Services',
                        "Hello!\n\nThis is a test email from Aadhivaraha Services website.\n\nIf you received this, your SMTP settings are working correctly.\n\n— Aadhivaraha Services Admin Panel"
                    );
                    if ($result['success']) {
                        $message = "Test email sent successfully to {$testTo}. Please check your inbox.";
                    } else {
                        $message = 'SMTP Error: ' . $result['error'];
                        $msgType = 'error';
                    }
                }
            } catch (Exception $e) {
                $message = 'Error: ' . $e->getMessage();
                $msgType = 'error';
            }
        }
    }
}

// CHANGE PASSWORD
if ($action === 'change_password' && isLoggedIn()) {
    $current = $_POST['current_password'] ?? '';
    $newPass = $_POST['new_password']     ?? '';
    $confirm = $_POST['confirm_password'] ?? '';

    if (!password_verify($current, loadAdminHash())) {
        $message = 'Current password is incorrect.';
        $msgType = 'error';
    } elseif (strlen($newPass) < 6) {
        $message = 'New password must be at least 6 characters.';
        $msgType = 'error';
    } elseif ($newPass !== $confirm) {
        $message = 'New passwords do not match.';
        $msgType = 'error';
    } else {
        saveAdminHash(password_hash($newPass, PASSWORD_DEFAULT));
        $message = 'Admin password changed successfully.';
    }
}

// Load SMTP config for display
$smtp          = loadSmtp();
$vendorExists  = file_exists(BASE_DIR . '/vendor/autoload.php');
$smtpOk        = !empty($smtp['host']) && !empty($smtp['username']) && !empty($smtp['password']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel — Aadhivaraha Services</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --bg:        #0b0f1a;
    --surface:   #111827;
    --surface2:  #1a2236;
    --border:    rgba(255,255,255,0.08);
    --primary:   #f97316;
    --primary-d: #ea580c;
    --blue:      #3b82f6;
    --green:     #10b981;
    --red:       #ef4444;
    --text:      #f1f5f9;
    --muted:     #94a3b8;
    --radius:    12px;
  }

  body {
    font-family: 'Inter', sans-serif;
    background: var(--bg);
    color: var(--text);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
  }

  /* ── Login Page ── */
  .login-wrap {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 24px;
    background: radial-gradient(ellipse at 50% 0%, rgba(249,115,22,0.12) 0%, transparent 70%);
  }
  .login-card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 20px;
    padding: 48px 40px;
    width: 100%;
    max-width: 420px;
    text-align: center;
  }
  .login-logo {
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: var(--primary);
    margin-bottom: 6px;
  }
  .login-sub { font-size: 12px; color: var(--muted); margin-bottom: 36px; }
  .lock-icon {
    width: 64px; height: 64px;
    background: linear-gradient(135deg, var(--primary), var(--primary-d));
    border-radius: 16px;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 28px;
  }
  .login-title { font-size: 24px; font-weight: 700; margin-bottom: 8px; }
  .login-desc  { font-size: 14px; color: var(--muted); margin-bottom: 32px; }

  /* ── Layout ── */
  .admin-header {
    background: var(--surface);
    border-bottom: 1px solid var(--border);
    padding: 16px 32px;
    display: flex; align-items: center; justify-content: space-between;
    position: sticky; top: 0; z-index: 100;
  }
  .admin-logo { font-size: 15px; font-weight: 800; color: var(--primary); letter-spacing: 0.5px; }
  .admin-logo span { color: var(--text); }
  .admin-badge {
    background: var(--surface2);
    border: 1px solid var(--border);
    border-radius: 6px;
    padding: 4px 10px;
    font-size: 11px;
    color: var(--muted);
    font-weight: 600;
  }
  .logout-btn {
    display: flex; align-items: center; gap: 6px;
    font-size: 13px; font-weight: 500; color: var(--muted);
    text-decoration: none; padding: 6px 14px;
    border: 1px solid var(--border);
    border-radius: 8px;
    transition: all .2s;
  }
  .logout-btn:hover { color: var(--red); border-color: var(--red); background: rgba(239,68,68,0.06); }

  .admin-body { flex: 1; padding: 32px; max-width: 1000px; margin: 0 auto; width: 100%; }

  /* Status bar */
  .status-bar {
    display: flex; align-items: center; gap: 12px; flex-wrap: wrap;
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: 14px 20px;
    margin-bottom: 28px;
  }
  .status-pill {
    display: inline-flex; align-items: center; gap: 6px;
    font-size: 12px; font-weight: 600;
    padding: 4px 10px; border-radius: 20px;
  }
  .status-pill.ok    { background: rgba(16,185,129,.12); color: var(--green); }
  .status-pill.warn  { background: rgba(239,68,68,.12);  color: var(--red);   }
  .status-pill.info  { background: rgba(59,130,246,.12); color: var(--blue);  }
  .status-dot { width: 6px; height: 6px; border-radius: 50%; background: currentColor; }

  /* Tabs */
  .tabs { display: flex; gap: 4px; margin-bottom: 28px; }
  .tab-btn {
    padding: 10px 20px; border-radius: 8px;
    font-size: 13px; font-weight: 600;
    border: none; cursor: pointer;
    color: var(--muted); background: transparent;
    transition: all .2s;
  }
  .tab-btn:hover { background: var(--surface2); color: var(--text); }
  .tab-btn.active { background: var(--primary); color: #fff; }

  .tab-panel { display: none; }
  .tab-panel.active { display: block; }

  /* Cards */
  .card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: 28px;
    margin-bottom: 24px;
  }
  .card-title {
    font-size: 16px; font-weight: 700;
    margin-bottom: 6px;
    display: flex; align-items: center; gap: 8px;
  }
  .card-desc { font-size: 13px; color: var(--muted); margin-bottom: 24px; }

  /* Form */
  .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
  .form-group { display: flex; flex-direction: column; gap: 6px; }
  .form-group.full { grid-column: 1 / -1; }
  label { font-size: 12px; font-weight: 600; color: var(--muted); text-transform: uppercase; letter-spacing: 0.5px; }
  .input-wrap { position: relative; }
  .input-wrap svg { position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: var(--muted); pointer-events: none; }
  input, select {
    width: 100%;
    background: var(--surface2);
    border: 1px solid var(--border);
    border-radius: 8px;
    color: var(--text);
    font-size: 14px;
    font-family: 'Inter', sans-serif;
    padding: 10px 12px 10px 38px;
    transition: border-color .2s;
    outline: none;
  }
  input.no-icon, select { padding-left: 12px; }
  input:focus, select:focus { border-color: var(--primary); }
  input[type="password"] { letter-spacing: 2px; }
  select option { background: var(--surface2); }

  .divider { border: none; border-top: 1px solid var(--border); margin: 24px 0; }

  /* Buttons */
  .btn-row { display: flex; gap: 12px; flex-wrap: wrap; margin-top: 24px; }
  .btn {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 10px 22px; border-radius: 8px;
    font-size: 14px; font-weight: 600;
    border: none; cursor: pointer;
    font-family: 'Inter', sans-serif;
    transition: all .2s;
  }
  .btn-primary   { background: var(--primary);  color: #fff; }
  .btn-primary:hover { background: var(--primary-d); transform: translateY(-1px); }
  .btn-outline {
    background: transparent; color: var(--text);
    border: 1px solid var(--border);
  }
  .btn-outline:hover { border-color: var(--primary); color: var(--primary); }
  .btn-blue { background: var(--blue); color: #fff; }
  .btn-blue:hover { background: #2563eb; transform: translateY(-1px); }

  /* Alert / Message */
  .alert {
    display: flex; align-items: flex-start; gap: 12px;
    padding: 14px 18px; border-radius: 10px;
    font-size: 14px; font-weight: 500;
    margin-bottom: 24px;
  }
  .alert.success { background: rgba(16,185,129,.1); border: 1px solid rgba(16,185,129,.3); color: var(--green); }
  .alert.error   { background: rgba(239,68,68,.1);  border: 1px solid rgba(239,68,68,.3);  color: var(--red);   }
  .alert svg { flex-shrink: 0; margin-top: 1px; }

  /* Instruction box */
  .code-box {
    background: #0d1117;
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 14px 18px;
    font-family: 'Courier New', monospace;
    font-size: 13px;
    color: #7dd3fc;
    margin-top: 10px;
  }
  .info-box {
    background: rgba(59,130,246,.07);
    border: 1px solid rgba(59,130,246,.2);
    border-radius: 10px;
    padding: 16px 18px;
    font-size: 13px;
    color: #93c5fd;
    margin-top: 12px;
    line-height: 1.7;
  }
  .info-box strong { color: var(--blue); }

  /* Responsive */
  @media(max-width:600px) {
    .form-grid { grid-template-columns: 1fr; }
    .admin-body { padding: 16px; }
    .admin-header { padding: 12px 16px; }
  }
</style>
</head>
<body>

<?php if (!isLoggedIn()): ?>
<!-- ==================== LOGIN PAGE ==================== -->
<div class="login-wrap">
  <div class="login-card">
    <div class="login-logo">Aadhivaraha Services</div>
    <div class="login-sub">Admin Panel</div>
    <div class="lock-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
    </div>
    <h1 class="login-title">Admin Login</h1>
    <p class="login-desc">Enter your admin password to access the panel.</p>

    <?php if ($message): ?>
    <div class="alert error" style="text-align:left;">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
      <?= htmlspecialchars($message) ?>
    </div>
    <?php endif; ?>

    <form method="POST">
      <input type="hidden" name="action" value="login">
      <div class="form-group" style="margin-bottom:20px; text-align:left;">
        <label>Password</label>
        <div class="input-wrap">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
          <input type="password" name="password" placeholder="Enter admin password" required autofocus>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" style="width:100%; justify-content:center;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>
        Login
      </button>
    </form>
    
  </div>
</div>

<?php else: ?>
<!-- ==================== ADMIN DASHBOARD ==================== -->
<header class="admin-header">
  <div>
    <div class="admin-logo">AADHIVARAHA <span>SERVICES</span></div>
  </div>
  <div style="display:flex;align-items:center;gap:12px;">
    <span class="admin-badge">Admin Panel</span>
    <a href="?logout=1" class="logout-btn">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
      Logout
    </a>
  </div>
</header>

<div class="admin-body">

  <!-- Status Bar -->
  <div class="status-bar">
    <strong style="font-size:13px;">System Status:</strong>
    <?php if ($vendorExists): ?>
      <span class="status-pill ok"><span class="status-dot"></span> PHPMailer Installed</span>
    <?php else: ?>
      <span class="status-pill warn"><span class="status-dot"></span> PHPMailer Not Installed</span>
    <?php endif; ?>
    <?php if ($smtpOk): ?>
      <span class="status-pill ok"><span class="status-dot"></span> SMTP Configured</span>
    <?php else: ?>
      <span class="status-pill warn"><span class="status-dot"></span> SMTP Not Configured</span>
    <?php endif; ?>
    <span class="status-pill info"><span class="status-dot"></span> PHP <?= PHP_VERSION ?></span>
  </div>

  <!-- Alert -->
  <?php if ($message): ?>
  <div class="alert <?= $msgType ?>">
    <?php if ($msgType === 'success'): ?>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
    <?php else: ?>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
    <?php endif; ?>
    <?= htmlspecialchars($message) ?>
  </div>
  <?php endif; ?>

  <!-- Tabs -->
  <div class="tabs">
    <button class="tab-btn active" onclick="switchTab('smtp',this)">
      ✉️ SMTP Settings
    </button>
    <button class="tab-btn" onclick="switchTab('test',this)">
      🚀 Test Email
    </button>
    <button class="tab-btn" onclick="switchTab('setup',this)">
      ⚙️ Setup Guide
    </button>
    <button class="tab-btn" onclick="switchTab('password',this)">
      🔒 Change Password
    </button>
  </div>

  <!-- ── TAB 1: SMTP Settings ── -->
  <div id="tab-smtp" class="tab-panel active">
    <div class="card">
      <div class="card-title">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
        SMTP Configuration
      </div>
      <div class="card-desc">These settings are used to send all enquiry and contact form emails from your website.</div>

      <form method="POST">
        <input type="hidden" name="action" value="save_smtp">
        <div class="form-grid">

          <div class="form-group">
            <label>SMTP Host</label>
            <div class="input-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
              <input type="text" name="host" placeholder="e.g. smtp.gmail.com" value="<?= htmlspecialchars($smtp['host'] ?? '') ?>">
            </div>
          </div>

          <div class="form-group">
            <label>SMTP Port</label>
            <div class="input-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
              <input type="number" name="port" placeholder="587" value="<?= htmlspecialchars($smtp['port'] ?? '587') ?>">
            </div>
          </div>

          <div class="form-group">
            <label>Encryption</label>
            <select name="encryption" class="no-icon">
              <option value="tls"  <?= ($smtp['encryption'] ?? 'tls') === 'tls'  ? 'selected' : '' ?>>TLS (Port 587) — Recommended</option>
              <option value="ssl"  <?= ($smtp['encryption'] ?? '')     === 'ssl'  ? 'selected' : '' ?>>SSL (Port 465)</option>
              <option value="none" <?= ($smtp['encryption'] ?? '')     === 'none' ? 'selected' : '' ?>>None (Port 25)</option>
            </select>
          </div>

          <div class="form-group">
            <label>SMTP Username</label>
            <div class="input-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
              <input type="email" name="username" placeholder="e.g. aadhivarahaservices@gmail.com" value="<?= htmlspecialchars($smtp['username'] ?? '') ?>">
            </div>
          </div>

          <div class="form-group full">
            <label>SMTP Password / App Password</label>
            <div class="input-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
              <input type="password" name="password" placeholder="Leave blank to keep existing password" id="smtpPass">
            </div>
            <div style="display:flex;align-items:center;gap:8px;margin-top:4px;">
              <input type="checkbox" id="showPass" onchange="document.getElementById('smtpPass').type=this.checked?'text':'password'" style="width:auto;padding:0;accent-color:var(--primary);">
              <label for="showPass" style="text-transform:none;letter-spacing:0;font-size:12px;color:var(--muted);">Show password</label>
            </div>
          </div>

          <div class="form-group">
            <label>From Email</label>
            <div class="input-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
              <input type="email" name="from_email" placeholder="e.g. aadhivarahaservices@gmail.com" value="<?= htmlspecialchars($smtp['from_email'] ?? '') ?>">
            </div>
          </div>

          <div class="form-group">
            <label>From Name</label>
            <div class="input-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              <input type="text" name="from_name" placeholder="Aadhivaraha Services" value="<?= htmlspecialchars($smtp['from_name'] ?? 'Aadhivaraha Services') ?>">
            </div>
          </div>

        </div>

        <div class="btn-row">
          <button type="submit" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
            Save SMTP Settings
          </button>
          <button type="button" class="btn btn-outline" onclick="fillGmailDefaults()">
            ↗ Auto-fill Gmail Defaults
          </button>
        </div>
      </form>
    </div>

    <!-- Gmail quick reference -->
    <div class="card">
      <div class="card-title" style="font-size:14px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
        Gmail Quick Reference
      </div>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:12px;margin-top:4px;">
        <?php foreach([
          ['Host','smtp.gmail.com'],['Port','587'],['Encryption','TLS'],['Username','Your Gmail ID'],['Password','16-char App Password']
        ] as [$k,$v]): ?>
        <div style="background:var(--surface2);border:1px solid var(--border);border-radius:8px;padding:12px;">
          <div style="font-size:10px;font-weight:700;text-transform:uppercase;color:var(--muted);margin-bottom:4px;"><?=$k?></div>
          <div style="font-size:13px;font-weight:600;color:var(--text);"><?=$v?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <!-- ── TAB 2: Test Email ── -->
  <div id="tab-test" class="tab-panel">
    <div class="card">
      <div class="card-title">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
        Send Test Email
      </div>
      <div class="card-desc">Send a test email to verify your SMTP settings are working correctly.</div>

      <?php if (!$smtpOk): ?>
      <div class="alert error">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
        SMTP settings are not configured yet. Please go to the SMTP Settings tab first.
      </div>
      <?php endif; ?>

      <?php if (!$vendorExists): ?>
      <div class="alert error">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
        PHPMailer is not installed. Please run <strong>composer install</strong> first (see Setup Guide tab).
      </div>
      <?php endif; ?>

      <form method="POST">
        <input type="hidden" name="action" value="test_email">
        <div class="form-group" style="max-width:420px;">
          <label>Send Test Email To</label>
          <div class="input-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            <input type="email" name="test_to" placeholder="Enter your email to receive the test" value="<?= htmlspecialchars($smtp['username'] ?? '') ?>">
          </div>
        </div>
        <div class="btn-row">
          <button type="submit" class="btn btn-blue" <?= (!$smtpOk || !$vendorExists) ? 'disabled style="opacity:.5;cursor:not-allowed;"' : '' ?>>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
            Send Test Email
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- ── TAB 3: Setup Guide ── -->
  <div id="tab-setup" class="tab-panel">
    <div class="card">
      <div class="card-title">⚙️ Step 1 — Install PHPMailer</div>
      <div class="card-desc">PHPMailer is required for SMTP email sending. Run this command once in your website's root folder.</div>
      <?php if ($vendorExists): ?>
        <div class="alert success">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
          PHPMailer is already installed.
        </div>
      <?php else: ?>
        <p style="font-size:13px;color:var(--muted);margin-bottom:8px;">Open Command Prompt / Terminal in <code style="color:var(--primary);">C:\xampp\htdocs\aadhivarahaservices\</code> and run:</p>
        <div class="code-box">composer install</div>
        <div class="info-box" style="margin-top:12px;">
          <strong>Don't have Composer?</strong> Download it from <strong>getcomposer.org</strong> → run the installer → then run the command above.
        </div>
      <?php endif; ?>
    </div>

    <div class="card">
      <div class="card-title">📱 Step 2 — Get Gmail App Password</div>
      <div class="card-desc">Required if you're using Gmail SMTP. Regular Gmail passwords won't work.</div>
      <ol style="font-size:13px;color:var(--muted);line-height:2.2;padding-left:20px;">
        <li>Go to <strong style="color:var(--text);">myaccount.google.com</strong> → Security</li>
        <li>Enable <strong style="color:var(--text);">2-Step Verification</strong> (if not done)</li>
        <li>Search for <strong style="color:var(--text);">"App Passwords"</strong> in the search bar</li>
        <li>App name: type <strong style="color:var(--text);">Website</strong> → Click <strong style="color:var(--text);">Create</strong></li>
        <li>Copy the <strong style="color:var(--primary);">16-character password</strong> shown</li>
        <li>Paste it in the <strong style="color:var(--text);">SMTP Password</strong> field above</li>
      </ol>
    </div>

    <div class="card">
      <div class="card-title">✅ Step 3 — Configure &amp; Test</div>
      <ol style="font-size:13px;color:var(--muted);line-height:2.2;padding-left:20px;">
        <li>Go to <strong style="color:var(--text);">SMTP Settings</strong> tab → fill in all fields → click <strong style="color:var(--text);">Save</strong></li>
        <li>Go to <strong style="color:var(--text);">Test Email</strong> tab → enter your email → click <strong style="color:var(--text);">Send Test Email</strong></li>
        <li>Check your inbox — if received, ✅ all contact form emails will now work!</li>
      </ol>
    </div>
  </div>

  <!-- ── TAB 4: Change Password ── -->
  <div id="tab-password" class="tab-panel">
    <div class="card">
      <div class="card-title">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
        Change Admin Password
      </div>
      <div class="card-desc">Update the password used to access this admin panel.</div>
      <form method="POST" style="max-width:420px;">
        <input type="hidden" name="action" value="change_password">
        <div class="form-group" style="margin-bottom:16px;">
          <label>Current Password</label>
          <div class="input-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            <input type="password" name="current_password" placeholder="Enter current password" required>
          </div>
        </div>
        <div class="form-group" style="margin-bottom:16px;">
          <label>New Password</label>
          <div class="input-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            <input type="password" name="new_password" placeholder="Min. 6 characters" required>
          </div>
        </div>
        <div class="form-group" style="margin-bottom:24px;">
          <label>Confirm New Password</label>
          <div class="input-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            <input type="password" name="confirm_password" placeholder="Repeat new password" required>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
          Update Password
        </button>
      </form>
    </div>
  </div>

</div><!-- /.admin-body -->

<?php endif; ?>

<script>
function switchTab(name, btn) {
  document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
  document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
  document.getElementById('tab-' + name).classList.add('active');
  btn.classList.add('active');
}

function fillGmailDefaults() {
  const fields = {
    host: 'smtp.gmail.com',
    port: '587',
    encryption: 'tls'
  };
  for (const [name, val] of Object.entries(fields)) {
    const el = document.querySelector('[name="' + name + '"]');
    if (el) { el.value = val; el.dispatchEvent(new Event('change')); }
  }
  // Select TLS in dropdown
  const enc = document.querySelector('[name="encryption"]');
  if (enc) enc.value = 'tls';
}

// Persist active tab across page reloads via sessionStorage
(function() {
  const saved = sessionStorage.getItem('av_admin_tab');
  if (saved) {
    const btn = document.querySelector('.tab-btn[onclick*="' + saved + '"]');
    if (btn) switchTab(saved, btn);
  }
  document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const match = btn.getAttribute('onclick').match(/'([^']+)'/);
      if (match) sessionStorage.setItem('av_admin_tab', match[1]);
    });
  });
})();
</script>
</body>
</html>
