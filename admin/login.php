<?php
declare(strict_types=1);
require_once __DIR__ . '/bootstrap.php';

if (admin_user()) {
    header('Location: /admin/dashboard.php');
    exit;
}

$error = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf($_POST['csrf'] ?? null);
    try {
        $stmt = blog_db()->prepare('SELECT id, name, email, password_hash, role FROM users WHERE email = ? AND status = "active" LIMIT 1');
        $stmt->execute([trim((string)($_POST['email'] ?? ''))]);
        $user = $stmt->fetch();
        if ($user && password_verify((string)($_POST['password'] ?? ''), $user['password_hash'])) {
            session_regenerate_id(true);
            unset($user['password_hash']);
            $_SESSION['blog_admin_user'] = $user;
            // CURRENT_TIMESTAMP is supported by both the local SQLite test database and MySQL.
            blog_db()->prepare('UPDATE users SET last_login_at = CURRENT_TIMESTAMP WHERE id = ?')->execute([$user['id']]);
            header('Location: /admin/dashboard.php');
            exit;
        }
        $error = 'The email or password is incorrect.';
    } catch (Throwable $exception) {
        $error = 'The admin database is not ready yet. Please complete the setup instructions.';
    }
}
?><!doctype html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Blog Admin Login | Divine Balaji Travels</title>
<style>body{font-family:Arial,sans-serif;background:#f6f1e8;margin:0;color:#24211d}.box{max-width:420px;margin:12vh auto;background:#fff;padding:32px;border-radius:10px;box-shadow:0 8px 30px #0001}h1{margin-top:0;font-size:26px}label{display:block;margin:18px 0 6px;font-weight:bold}input{box-sizing:border-box;width:100%;padding:12px;border:1px solid #ccc;border-radius:5px;font-size:16px}button{margin-top:24px;width:100%;padding:13px;background:#8a541d;color:#fff;border:0;border-radius:5px;font-size:16px;cursor:pointer}.error{background:#fff0f0;color:#a21d1d;padding:10px;border-radius:5px}</style></head>
<body><main class="box"><h1>Divine Balaji Travels</h1><p>Blog administration</p><?php if ($error): ?><p class="error"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?><form method="post"><input type="hidden" name="csrf" value="<?= htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8') ?>"><label for="email">Email</label><input id="email" name="email" type="email" required autocomplete="username"><label for="password">Password</label><input id="password" name="password" type="password" required autocomplete="current-password"><button type="submit">Sign in</button></form></main></body></html>
