<?php
session_start();
require "db_connect.php"; // must connect to database 'excellent'

// If already logged in → go to admin panel
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: admin.php");
    exit;
}

$error = "";

// When login form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login_id   = trim($_POST['login_id'] ?? '');
    $login_pass = trim($_POST['login_pass'] ?? '');

    if ($login_id === '' || $login_pass === '') {
        $error = "Please enter both ID and Password.";
    } else {
        // Get admin row from DB
        $stmt = $conn->prepare("SELECT admin_passwd FROM admin_password WHERE admin_id = ?");
        $stmt->bind_param("s", $login_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            $db_pass = $row['admin_passwd'];

            // If you store plain text password:
            if ($login_pass === $db_pass) {
                // If you use password_hash() then use: password_verify($login_pass, $db_pass)
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_id'] = $login_id;
                header("Location: admin.php");
                exit;
            } else {
                $error = "Invalid ID or Password.";
            }
        } else {
            $error = "Admin ID not found.";
        }

        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login | Excellent-Service</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    :root {
        --primary: #2563eb;
        --primary-dark: #1d4ed8;
        --bg: #f3f4f6;
        --card-bg: #ffffff;
        --border: #d1d5db;
        --text-main: #111827;
        --text-muted: #6b7280;
        --danger: #dc2626;
    }
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    }
    body {
        min-height: 100vh;
        background: var(--bg);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 16px;
    }
    .wrapper { width: 100%; max-width: 420px; }
    .brand { text-align: center; margin-bottom: 12px; }
    .brand-title {
        font-size: 1.4rem;
        font-weight: 700;
        color: var(--text-main);
    }
    .brand-title span { color: var(--primary); }
    .brand-sub {
        font-size: 0.85rem;
        color: var(--text-muted);
        margin-top: 2px;
    }
    .card {
        background: var(--card-bg);
        border-radius: 10px;
        border: 1px solid var(--border);
        padding: 18px 20px 16px;
        box-shadow: 0 4px 18px rgba(15, 23, 42, 0.08);
    }
    .card-header { margin-bottom: 10px; }
    .card-header h2 {
        font-size: 1.05rem;
        font-weight: 600;
        color: var(--text-main);
        margin-bottom: 3px;
    }
    .card-header p {
        font-size: 0.85rem;
        color: var(--text-muted);
    }
    .error {
        background: #fee2e2;
        border: 1px solid #fecaca;
        color: var(--danger);
        padding: 7px 9px;
        border-radius: 6px;
        font-size: 0.8rem;
        margin-bottom: 10px;
    }
    .field { margin-bottom: 10px; }
    label {
        display: block;
        font-size: 0.82rem;
        color: var(--text-main);
        margin-bottom: 3px;
    }
    .input-wrapper { position: relative; }
    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 7px 8px;
        padding-right: 60px;
        font-size: 0.9rem;
        border-radius: 6px;
        border: 1px solid #cbd5e1;
        outline: none;
        background: #f9fafb;
    }
    input[type="text"]:focus,
    input[type="password"]:focus {
        border-color: var(--primary);
        background: #ffffff;
    }
    .toggle-password {
        position: absolute;
        right: 8px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 0.75rem;
        color: var(--text-muted);
        cursor: pointer;
        user-select: none;
    }
    .btn {
        width: 100%;
        margin-top: 6px;
        padding: 8px 0;
        border-radius: 6px;
        border: none;
        background: var(--primary);
        color: #ffffff;
        font-size: 0.9rem;
        font-weight: 500;
        cursor: pointer;
        transition: background 0.15s ease;
    }
    .btn:hover { background: var(--primary-dark); }

    .extra-links {
        margin-top: 8px;
        display: flex;
        justify-content: space-between;
        font-size: 0.8rem;
    }
    .extra-links a {
        color: var(--primary);
        text-decoration: none;
    }
    .extra-links a:hover {
        text-decoration: underline;
    }

    @media (max-width: 480px) {
        .card { padding: 16px; }
        .brand-title { font-size: 1.25rem; }
    }
</style>
</head>
<body>
  <div class="wrapper">
    <div class="brand">
      <div class="brand-title">
        Excellent-<span>Service</span>
      </div>
      <div class="brand-sub">Admin Login · Packers & Movers</div>
    </div>

    <div class="card">
      <div class="card-header">
        <h2>Admin Login</h2>
        <p>Enter your admin ID and password to access the dashboard.</p>
      </div>

      <?php if ($error): ?>
        <div class="error">
          <?php echo htmlspecialchars($error); ?>
        </div>
      <?php endif; ?>

      <form method="POST" autocomplete="off">
        <div class="field">
          <label for="login_id">Admin ID</label>
          <div class="input-wrapper">
            <input type="text" id="login_id" name="login_id" placeholder="Your admin ID" required>
          </div>
        </div>

        <div class="field">
          <label for="login_pass">Password</label>
          <div class="input-wrapper">
            <input type="password" id="login_pass" name="login_pass" placeholder="Your password" required>
            <span class="toggle-password" id="togglePass">Show</span>
          </div>
        </div>

        <button class="btn" type="submit">Login</button>
      </form>

      <div class="extra-links">
        <span></span>
        <!-- <a href="forgot_password.php">Forgot password?</a> -->
      </div>
    </div>
  </div>

<script>
  // Show / hide password
  const passInput = document.getElementById('login_pass');
  const toggle = document.getElementById('togglePass');

  toggle.addEventListener('click', () => {
    if (passInput.type === 'password') {
      passInput.type = 'text';
      toggle.textContent = 'Hide';
    } else {
      passInput.type = 'password';
      toggle.textContent = 'Show';
    }
  });
</script>
</body>
</html>
