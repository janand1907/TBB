<?php
ob_start();
require_once __DIR__ . '/includes/error-log-config.php';

$pageTitle = 'Tirupati Package from Hyderabad by Flight – 2 Days | 1N/2D';
$pageDescription = 'Book a 1 Night 2 Days Tirupati package from Hyderabad by flight with hotel, private AC cab, temple visits and Srikalahasti. Starting reference price Rs. 35,229 for 2 PAX. Darshan tickets are not included unless stated in the final quotation.';
$pageCanonical = 'https://www.divinebalajitravels.com/hyderabad-tirupati-flight-package-two-days';
$activeMenu = 'vip-packages';
$loadLegacyWidgets = false;
$extraHeadLinks = '<link rel="stylesheet" href="assets/css/modern/vip-package-pages.css">' .
    file_get_contents(__DIR__ . '/includes/hyderabad-tirupati-flight-package-two-days-schema.html');

include 'includes/header.php';
?>
<main class="vip-package-page vip-source-content">
<?php require_once __DIR__ . '/includes/vip-source-renderer.php'; render_vip_source_content(__DIR__ . '/includes/hyderabad-tirupati-flight-package-two-days-source-content.html'); render_vip_enquiry_panel('Enquire About the Hyderabad to Tirupati Package', 'Share your basic travel details and our team can check the available flight, hotel, private cab and sightseeing options for your selected travel date.'); ?>
</main>
<?php include 'includes/footer.php'; ?>
