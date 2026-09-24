<?php
ob_start();
require_once __DIR__ . '/includes/error-log-config.php';

$pageTitle = 'Tirupati VIP Darshan Packages | Srivani VIP Break Darshan';
$pageDescription = 'Book Tirupati VIP Darshan Packages and Srivani VIP Break Darshan tour packages from Hyderabad, Mumbai, Bangalore and Delhi with flight or car travel options.';
$pageCanonical = 'https://www.divinebalajitravels.com/tirupati-vip-darshan-packages';
$activeMenu = 'vip-packages';
$loadLegacyWidgets = false;
$extraHeadLinks = '<link rel="stylesheet" href="assets/css/modern/vip-package-pages.css">' .
    file_get_contents(__DIR__ . '/includes/tirupati-vip-darshan-packages-schema.html');

include 'includes/header.php';
?>
<main class="vip-package-page vip-source-content">
<?php include __DIR__ . '/includes/tirupati-vip-darshan-packages-source-content.html'; ?>
</main>
<?php include 'includes/footer.php'; ?>
