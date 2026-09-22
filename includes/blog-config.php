<?php
declare(strict_types=1);

// Keep credentials outside public_html in production. See docs/BLOG_ADMIN_SETUP.md.
function blog_database_config(): array
{
    $privateConfig = dirname(__DIR__) . '/../tbb-blog-config.php';
    if (is_file($privateConfig)) {
        $config = require $privateConfig;
        if (is_array($config)) {
            return $config;
        }
    }

    return [
        'driver' => getenv('BLOG_DB_DRIVER') ?: 'mysql',
        'host' => getenv('BLOG_DB_HOST') ?: '127.0.0.1',
        'name' => getenv('BLOG_DB_NAME') ?: '',
        'user' => getenv('BLOG_DB_USER') ?: '',
        'password' => getenv('BLOG_DB_PASSWORD') ?: '',
        'charset' => 'utf8mb4',
    ];
}

function blog_db(): PDO
{
    static $pdo = null;
    if ($pdo instanceof PDO) {
        return $pdo;
    }

    $config = blog_database_config();
    if ($config['name'] === '' || (($config['driver'] ?? 'mysql') !== 'sqlite' && $config['user'] === '')) {
        throw new RuntimeException('Blog database is not configured.');
    }

    $driver = $config['driver'] ?? 'mysql';
    $dsn = $driver === 'sqlite'
        ? 'sqlite:' . $config['name']
        : sprintf('mysql:host=%s;dbname=%s;charset=%s', $config['host'], $config['name'], $config['charset']);
    $pdo = new PDO($dsn, $config['user'], $config['password'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
    if ($driver === 'mysql') {
        $pdo->exec('SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci');
    }
    return $pdo;
}
