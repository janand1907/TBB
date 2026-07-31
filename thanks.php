<?php
$pageTitle = 'Enquiry Submitted Successfully | Tirupati Balaji Booking';
$pageDescription = 'Best Tirupati Tour Package from Chennai: Booking Special Rs.300/- Tirupati Balaji & Padamavathi Temple darshan Package From Chennai. One Day Tirupati Tour';
$pageCanonical = 'https://www.tirupatibalajibooking.com/thanks.php';
$activeMenu = null;
$extraHeadLinks = <<<'HTML'
<style>
    section.thanks {
        padding: 40px 0;
        text-align: center;
        margin: 40px 0;
        position: relative;
    }

    section.thanks h1 {
        padding: 40px 0 0px !important;
        margin: 20px 0 0 0;
    }

    section.thanks p {
        padding: 15px 0 15px 0 !important
    }
</style>
HTML;
include 'header.php';
?>
    <section class="thanks">
        <div class="container">
            <h1>Thank you for your enquiry.</h1>
            <p>Our team will contact you shortly regarding your Tirupati Darshan booking.</p>
            <a class="btn btn-warning" href="index.php">Back to Home</a>
        </div>
    </section>


    <?php include 'footer.php'; ?>
