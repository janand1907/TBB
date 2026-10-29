<?php
declare(strict_types=1);

function admin_slug(string $value): string
{
    $value = strtolower(trim(preg_replace('/[^a-z0-9]+/i', '-', $value) ?? ''));
    return trim($value, '-') ?: 'post';
}

function admin_layout_start(string $title, string $active, array $user): void
{
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?> | Divine Balaji Travels</title>
        <?php if ($active === 'seo'): ?><link rel="stylesheet" href="/admin/seo/seo.css?v=1"><?php endif; ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <style>
            :root{--orange:#e07728;--ink:#202020;--cream:#f8f4ec;--line:#eadfce}
            *{box-sizing:border-box}
            body{margin:0;background:var(--cream);color:var(--ink);font:15px/1.55 Poppins,Arial,sans-serif}
            .top{background:#fff;border-top:4px solid var(--orange);padding:15px 5%;display:flex;justify-content:space-between;align-items:center}
            .brand{font-weight:700;font-size:20px}
            .brand span{color:var(--orange)}
            nav a{color:#333;text-decoration:none;margin-left:20px;font-weight:600}
            nav a.on,nav a:hover{color:var(--orange)}
            .wrap{max-width:1320px;margin:32px auto;padding:0 22px}
            .bar{display:flex;justify-content:space-between;gap:16px;align-items:center;margin-bottom:22px}
            .bar p{color:#71695f;margin:7px 0 0}
            h1{font-size:28px;margin:0}
            .card{background:#fff;border:1px solid var(--line);border-radius:10px;padding:24px;box-shadow:0 4px 16px #5e43230d}
            .btn{background:var(--orange);border:0;border-radius:5px;color:#fff;cursor:pointer;padding:9px 13px;font:600 13px Poppins;text-decoration:none;display:inline-flex;align-items:center;justify-content:center;white-space:nowrap;min-height:38px}
            .btn:hover{filter:brightness(.96)}
            .btn.alt{background:#fff;color:var(--orange);border:1px solid var(--orange)}
            label{font-weight:600;display:block;margin:15px 0 6px}
            input,textarea,select{width:100%;border:1px solid #d7cabc;border-radius:5px;padding:10px;font:15px Poppins;background:#fff}
            textarea{min-height:150px}
            .form-group{display:grid;gap:6px;margin:0 0 16px;min-width:0}
            .form-group:last-child{margin-bottom:0}
            .form-group label{margin:0}
            .form-group input,.form-group textarea,.form-group select{margin:0;min-width:0}
            .field-hint{font-size:12px;font-weight:400;color:#71695f}
            table{width:100%;border-collapse:collapse}
            th,td{padding:13px 10px;border-bottom:1px solid var(--line);text-align:left;vertical-align:top}
            th{font-size:13px;white-space:nowrap;color:#494139}
            td{font-size:13px}
            .notice{padding:12px;background:#eff8ee;color:#23612c;border-radius:5px;margin-bottom:16px}
            .grid{display:grid;grid-template-columns:2fr 1fr;gap:22px}
            .posts-filter{display:grid;grid-template-columns:minmax(260px,1fr) minmax(230px,.48fr);gap:22px;align-items:start}
            .posts-filter label:first-child{margin-top:0}
            .posts-filter__side{display:grid;gap:12px}
            .posts-filter__side label{margin:0 0 5px}
            .posts-filter__side .btn{justify-self:start}
            .posts-table-wrap{overflow-x:auto}
            .posts-table{min-width:1020px;table-layout:fixed}
            .posts-table th:nth-child(1){width:17%}
            .posts-table th:nth-child(2){width:15%}
            .posts-table th:nth-child(3){width:9%}
            .posts-table th:nth-child(4){width:10%}
            .posts-table th:nth-child(5){width:8%}
            .posts-table th:nth-child(6),.posts-table th:nth-child(7){width:11%}
            .posts-table th:nth-child(8){width:19%}
            .posts-table td{overflow-wrap:anywhere}
            .post-actions{display:flex;flex-wrap:wrap;gap:7px;align-items:center}
            .post-actions form{display:flex;flex-wrap:wrap;gap:7px;margin:0}
            .post-actions a{display:inline-flex;align-items:center;min-height:36px;font-weight:600;color:#8b4215}
            .status-pill{display:inline-block;border-radius:20px;padding:4px 9px;background:#f2eee8;color:#574c40;font-size:12px;font-weight:700;text-transform:capitalize}
            .status-pill--published{background:#e7f5eb;color:#23612c}
            .status-pill--draft{background:#fff4dc;color:#855b10}
            .status-pill--archived{background:#f3e9e7;color:#8b3730}
            @media(max-width:760px){.grid{grid-template-columns:1fr}.top{display:block}.posts-filter{grid-template-columns:1fr}.posts-filter__side{grid-template-columns:1fr 1fr}.posts-filter__side .btn{grid-column:1/-1}nav a{margin:10px 12px 0 0;display:inline-block}}
            @media(max-width:520px){.wrap{padding:0 14px;margin:22px auto}.bar{align-items:flex-start;flex-direction:column}.card{padding:17px}.posts-filter__side{grid-template-columns:1fr}}
        </style>
    </head>
    <body>
        <header class="top">
            <div class="brand">Divine <span>Balaji</span> Travels <small>Blog Admin</small></div>
            <nav>
                <a class="<?= $active==='dashboard'?'on':'' ?>" href="/admin/dashboard.php">Dashboard</a>
                <a class="<?= $active==='posts'?'on':'' ?>" href="/admin/posts.php">Posts</a>
                <a class="<?= $active==='categories'?'on':'' ?>" href="/admin/categories.php">Categories</a>
                <?php if (in_array($user['role'], ['administrator', 'seo_manager', 'editor', 'author'], true)): ?>
                <a class="<?= $active==='seo'?'on':'' ?>" href="/admin/seo/">SEO</a>
                <?php endif; ?>
                <a href="/admin/logout.php">Sign out</a>
            </nav>
        </header>
        <main class="wrap">
    <?php
}

function admin_layout_end(): void
{
    echo '</main></body></html>';
}
