<?php
declare(strict_types=1);

session_start();
require_once __DIR__ . '/../includes/blog-config.php';

function admin_user(): ?array
{
    return $_SESSION['blog_admin_user'] ?? null;
}

function require_admin(): array
{
    $user = admin_user();
    if (!$user) {
        header('Location: /admin/login.php');
        exit;
    }
    return $user;
}

function csrf_token(): string
{
    if (empty($_SESSION['blog_csrf'])) {
        $_SESSION['blog_csrf'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['blog_csrf'];
}

function verify_csrf(?string $token): void
{
    if (!$token || !hash_equals($_SESSION['blog_csrf'] ?? '', $token)) {
        http_response_code(419);
        exit('Invalid security token. Please go back and try again.');
    }
}
