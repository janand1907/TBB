<?php
session_start();
$first_num = rand(1, 10);
$second_num = rand(1, 10);
$operator = '+';
$answer = $first_num + $second_num;
$_SESSION["answer"] = $answer;
$captcha_question = "Captcha: {$first_num} {$operator} {$second_num} = ?";

// Per-page values a page sets before including this file:
//   $pageTitle        (required)  <title> text
//   $pageDescription  (required)  meta description
//   $pageCanonical    (optional)  full canonical URL; falls back to the
//                                 current request path if not set
//   $pageOgImage      (optional)  full URL of the Open Graph / Twitter Card
//                                 image; falls back to the site logo
//   $activeMenu       (optional)  'home' | 'about' | 'services' | 'temples' | 'contact'
//                                 marks the matching nav item as the current page
//   $extraHeadLinks   (optional)  raw HTML string of additional <link>/<script>/
//                                 JSON-LD tags a specific page needs beyond the
//                                 shared CSS chain below (e.g. assets/css/style.css,
//                                 shared-enquiry-form.css, CDN fonts, page-specific
//                                 schema.org data). Echoed right before </head>.
//   $includeDefaultSchema (optional, default true) set false on pages that
//                                 provide their own schema.org JSON-LD via
//                                 $extraHeadLinks, to avoid emitting two
//                                 conflicting TravelAgency blocks.
//   $showLeadPopup    (optional, default true) set false on pages that must
//                                 not show the global lead popup (includes/lead-popup.php),
//                                 e.g. thanks.php, privacy-and-cookies-policy.php, refund-policy.php.
//   $loadLegacyWidgets (optional, default true) set false on pages that use
//                                 none of: jquery-ui datepicker, select2, owl.carousel,
//                                 bxSlider, magnific-popup, nice-select - skips their
//                                 CSS/JS entirely (currently the modern hero-form pages
//                                 that don't have the legacy widget's datepicker field).
$pageTitle = $pageTitle ?? 'Tirupati Balaji Travels | Tirupati Darshan Package';
$pageDescription = $pageDescription ?? 'Divine Balaji Travels offers Tirupati tour packages from Chennai and Hyderabad with private car travel, hotel stay and complete trip assistance.';
$pageCanonical = $pageCanonical ?? ('https://www.divinebalajitravels.com/' . basename($_SERVER['PHP_SELF']));
$pageOgImage = $pageOgImage ?? 'https://www.divinebalajitravels.com/assets/images/logo/logo_main.png';
$activeMenu = $activeMenu ?? null;
$extraHeadLinks = $extraHeadLinks ?? '';
$includeDefaultSchema = $includeDefaultSchema ?? true;
$showLeadPopup = $showLeadPopup ?? true;
$loadLegacyWidgets = $loadLegacyWidgets ?? true;
?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--[endif]-->

<head>
    <meta charset="utf-8" />
    <!-- Performance: critical-path CSS, inlined so first paint doesn't wait on
         any stylesheet request. Generated from real CSS coverage captured
         across both page archetypes (legacy widget pages + modern hero-form
         pages) at a 360x640 mobile viewport, 1s after DOMContentLoaded (long
         enough to include the auto-opening lead popup). Covers: fa6-subset.css,
         modern/style.css, bootstrap.min.css, font-awesome.css, reset.css and
         style.css (critical subset only - the full files still load, deferred,
         below); shared-enquiry-form.css, fonts.css, flaticon.css, custom.css,
         lead-popup.css and shared-topbar.css (small enough to inline in full,
         so their separate <link> tags are removed entirely, not deferred).
         Regenerate assets/css/critical.css if any of those files change. -->
    <style><?php echo file_get_contents(__DIR__ . '/../assets/css/critical.css'); ?></style>
    <!-- Performance: warm up connections to domains used site-wide (fonts,
         CDN icon/JS libraries) and by individual pages' $extraHeadLinks. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <!-- Lighthouse "Network dependency tree": top 2 preconnect candidates by
         est. savings (chat widget + ad conversion pixel). Capped at 5 total
         preconnects (Lighthouse's own "no more than 4-5" guidance) - the
         other 2 candidates get the cheaper dns-prefetch-only hint instead. -->
    <link rel="preconnect" href="https://api.artibot.ai" crossorigin>
    <link rel="preconnect" href="https://googleads.g.doubleclick.net" crossorigin>
    <link rel="dns-prefetch" href="https://www.google-analytics.com">
    <link rel="dns-prefetch" href="https://stats.g.doubleclick.net">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
    <meta name="keywords"
        content="chennai to tirupati packages, tirupati tour packages from chennai, chennai to tirupati car rental, chennai to tirupati one day package, chennai to tirupati car packages, apsrtc tirupati package from chennai, chennai to tirupati darshan package by car, chennai to tirupati travels, chennai to tirupati one day tour package." />
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= htmlspecialchars($pageCanonical, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!-- Open Graph / Twitter Card -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Divine Balaji Travels" />
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
    <meta property="og:url" content="<?= htmlspecialchars($pageCanonical, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
    <meta property="og:image" content="<?= htmlspecialchars($pageOgImage, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
    <meta name="twitter:image" content="<?= htmlspecialchars($pageOgImage, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
    <?= $extraHeadLinks ?>
    <!--Template style -->
    <!-- Performance: animate.css only supplies the scroll-triggered sticky-nav
         "fadeInDown" class (xpedia.js) - not needed for first paint, so it's
         fetched via preload and swapped to a real stylesheet once loaded
         instead of blocking render. -->
    <link rel="preload" href="assets/css/legacy/animate.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" type="text/css" href="assets/css/legacy/animate.css" /></noscript>
    <!-- All 10 of these are inlined above (bootstrap/font-awesome/reset/style
         as a critical subset; fonts/flaticon/custom/lead-popup/shared-topbar
         in full) - they're deferred here too, in their ORIGINAL relative
         order, purely so the final cascade once everything loads is
         byte-for-byte identical to before. Skipping the reload for the
         fully-inlined ones would leave their rules permanently "stuck" ahead
         of files that load later (e.g. style.css), which inverts an
         intentional override (custom.css's desktop-fixed nav rule depends on
         loading after style.css) - confirmed by testing, not theoretical. -->
    <link rel="preload" href="assets/css/legacy/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" type="text/css" href="assets/css/legacy/bootstrap.min.css" /></noscript>
    <link rel="preload" href="assets/css/legacy/fonts.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" type="text/css" href="assets/css/legacy/fonts.css" /></noscript>
    <link rel="preload" href="assets/css/legacy/flaticon.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" type="text/css" href="assets/css/legacy/flaticon.css" /></noscript>
    <link rel="preload" href="assets/css/legacy/font-awesome.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" type="text/css" href="assets/css/legacy/font-awesome.css" /></noscript>
    <?php if ($loadLegacyWidgets): ?>
    <link rel="stylesheet" type="text/css" href="assets/css/legacy/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/legacy/nice-select.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/legacy/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/legacy/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/legacy/magnific-popup.css" />
    <?php endif; ?>
    <link rel="preload" href="assets/css/legacy/reset.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" type="text/css" href="assets/css/legacy/reset.css" /></noscript>
    <link rel="preload" href="assets/css/legacy/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" type="text/css" href="assets/css/legacy/style.css" /></noscript>
    <link rel="preload" href="assets/css/legacy/responsive.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" type="text/css" href="assets/css/legacy/responsive.css" /></noscript>
    <link rel="preload" href="assets/css/legacy/custom.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" type="text/css" href="assets/css/legacy/custom.css" /></noscript>
    <link rel="preload" href="assets/css/lead-popup.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" type="text/css" href="assets/css/lead-popup.css" /></noscript>
    <?php if ($loadLegacyWidgets): ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <?php endif; ?>
    <link rel="preload" href="assets/css/legacy/shared-topbar.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="assets/css/legacy/shared-topbar.css"></noscript>
    <!--favicon-->
    <!-- <link rel="shortcut icon" type="image/png" href="assets/images/tirupati_package.png" /> -->
    <link rel="icon" type="image/png" href="assets/images/favicon-32.png" />
    <link rel="apple-touch-icon" href="assets/images/favicon-180.png" />


    <!-- Global site tag (gtag.js) - Google Analytics + Google Ads (consolidated,
         one library load covers both properties; see includes/footer.php for
         the phone-conversion config call, which depends on this shim). -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-188854373-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-188854373-1');
        gtag('config', 'AW-437360014');
    </script>

    <?php if ($includeDefaultSchema): ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "TravelAgency",
            "name": "Tirupati Balaji Travels",
            "image": "https://divinebalajitravels.com/assets/images/logo/logo_main.png",
            "@id": "https://divinebalajitravels.com",
            "url": "https://divinebalajitravels.com/",
            "telephone": "+91-99947-51079",
            "priceRange": "5000",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "",
                "addressLocality": "Chennai",
                "postalCode": "600042",
                "addressCountry": "IN"
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday",
                    "Sunday"
                ],
                "opens": "00:00",
                "closes": "23:59"
            }
        }
    </script>
    <?php endif; ?>

    <!-- Smartlook session recording: disabled site-wide (matches the majority
         of pages prior to header consolidation). Uncomment to re-enable.
    <script type='text/javascript'>
        window.smartlook || (function (d) {
            var o = smartlook = function () {
                o.api.push(arguments)
            },
                h = d.getElementsByTagName('head')[0];
            var c = d.createElement('script');
            o.api = new Array();
            c.async = true;
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.src = 'https://web-sdk.smartlook.com/recorder.js';
            h.appendChild(c);
        })(document);
        smartlook('init', '3c004c88bd780e88afb5996fed4b9b4b2d117cbd', {
            region: 'eu'
        });
    </script>
    -->
</head>




<body>
    <!-- x top header_wrapper Start -->
    <div class="x_top_header_wrapper float_left">
        <div class="container">
            <div class="x_top_header_left_side_wrapper float_left">
                <p>Call Us : <a style="color:#fff;font-weight:500;" href="tel:9994751079">+91-99947-51079</a></p>
            </div>
            <div class="x_top_header_right_side_wrapper float_left">
                <div class="x_top_header_social_icon_wrapper">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="x_top_header_all_select_box_wrapper">
                    <ul>
                        <li class="login"> <a href="mailto:divinebalajitravels@gmail.com"><i class="fa fa-envelope"></i>
                                &nbsp;&nbsp;divinebalajitravels@gmail.com</a>
                        </li>
                        <li class="register"> <a href="tel:9994751079"><i class="fa fa-whatsapp"></i>
                                &nbsp;&nbsp;+919994751079</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- x top header_wrapper End -->
    <!-- hs Navigation Start -->
    <div class="hs_navigation_header_wrapper">
        <div class="container">
            <div class="row">
                <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="hs_logo_wrapper d-none d-sm-none d-xs-none d-md-block">
                        <a href="./">
                            <picture>
                                <source srcset="assets/images/logo/logo_main.webp" type="image/webp">
                                <img src="assets/images/logo/logo_main.png" class="img-responsive" alt="Tirupati Balaji Booking Logo" title="Tirupati Balaji Booking" width="2137" height="384" decoding="async" />
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">

                    <nav class="hs_main_menu d-none d-sm-none d-xs-none d-md-block">
                        <ul>
                            <li>
                                <div class="dropdown-wrapper menu-button"> <a class="menu-button<?= $activeMenu === 'home' ? ' is-active' : '' ?>"
                                        href="/">Home</a>

                                </div>
                            </li>

                            <li> <a class="menu-button single_menu<?= $activeMenu === 'about' ? ' is-active' : '' ?>" href="/about-us.php">About</a>
                            </li>

                            <li>
                                <div class="dropdown-wrapper menu-button">
                                    <a class="menu-button<?= $activeMenu === 'services' ? ' is-active' : '' ?>" href="javascript:void(0);">Services</a>
                                    <div class="drop-menu">
                                        <a class="menu-button" href="/nri-tirupati-darshan-booking.php">NRI Darshan</a>
                                        <a class="menu-button"
                                            href="/srivani-vip-break-darshan-from-chennai.php">Srivani VIP Darshan Package</a>
                                        <a class="menu-button"
                                            href="/shirdi-tour-package-from-chennai-by-direct-flight.php">Shirdi Darshan Package</a>
                                    </div>

                                </div>
                            </li>
                            <!-- Near me Tirupati Temple menu (temporarily hidden)
                            <li>
                                <div class="dropdown-wrapper menu-button">
                                    <a class="menu-button<?= $activeMenu === 'temples' ? ' is-active' : '' ?>" href="/famous-temples-near-by-tirupati.php">Near me Tirupati Temple</a>
                                    <div class="drop-menu drop-menu-1">
                                        <a class="menu-button" href="/sri-padmavathi-amman-temple.php">Sri Padmavathi Amman Temple</a>
                                        <a class="menu-button" href="/sri-govindaraja-swamy-temple.php">Sri Govindaraja Swamy Temple</a>
                                        <a class="menu-button" href="/kalyana-venkateswara-temple-srinivasa-mangapuram.php">Kalyana Venkateswara Temple</a>
                                        <a class="menu-button" href="/iskon-temple.php">ISKCON Temple</a>
                                        <a class="menu-button" href="/sri-kapileswara-swamy-temple.php">Sri Kapileswara Swamy Temple</a>
                                        <a class="menu-button" href="/sri-kalyana-venkateshwara-swamy-temple-narayanavanam-temple.php">Sri Kalyana Venkateshwara Swamy</a>
                                        <a class="menu-button" href="/sri-prasanna-venkateswara-temple.php">Sri Prasanna Venkateswara Temple</a>
                                        <a class="menu-button" href="/sri-varasiddhi-vinayaka-temple-kanipakam.php">Sri Varasiddhi Vinayaka Temple</a>
                                        <a class="menu-button" href="/sri-vedanarayana-temple-nagalapuram.php">Sri Vedanarayana Temple</a>
                                        <a class="menu-button" href="/vakula-matha-temple.php">Vakula Matha Temple</a>
                                        <a class="menu-button" href="/pallikondeswara-swamy-temple-surutapalli.php">Pallikondeswara Swamy Temple</a>
                                    </div>
                                </div>
                            </li>
                            -->
                            <li> <a class="menu-button single_menu<?= $activeMenu === 'contact' ? ' is-active' : '' ?>" href="/contact-us.php">Contact </a>
                            </li>
                        </ul>
                    </nav>
                    <header class="mobail_menu d-none d-block d-xs-block d-sm-block d-md-none d-lg-none d-xl-none">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-10 col-sm-10 col-10 pl-0">
                                    <div class="hs_logo">
                                        <a href="./">
                                            <picture>
                                                <source srcset="assets/images/logo/logo_main.webp" type="image/webp">
                                                <img src="assets/images/logo/logo_main.png" alt="Tirupati Balaji Booking Logo" title="Tirupati Balaji Booking" width="2137" height="384" decoding="async">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-2 pr-0">
                                    <div class="cd-dropdown-wrapper">
                                        <a class="house_toggle" href="#0">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="511.63px" height="511.631px" viewBox="0 0 511.63 511.631"
                                                style="enable-background:new 0 0 511.63 511.631;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M493.356,274.088H18.274c-4.952,0-9.233,1.811-12.851,5.428C1.809,283.129,0,287.417,0,292.362v36.545
                                                                    c0,4.948,1.809,9.236,5.424,12.847c3.621,3.617,7.904,5.432,12.851,5.432h475.082c4.944,0,9.232-1.814,12.85-5.432
                                                                    c3.614-3.61,5.425-7.898,5.425-12.847v-36.545c0-4.945-1.811-9.233-5.425-12.847C502.588,275.895,498.3,274.088,493.356,274.088z" />
                                                        <path
                                                            d="M493.356,383.721H18.274c-4.952,0-9.233,1.81-12.851,5.427C1.809,392.762,0,397.046,0,401.994v36.546
                                                                    c0,4.948,1.809,9.232,5.424,12.854c3.621,3.61,7.904,5.421,12.851,5.421h475.082c4.944,0,9.232-1.811,12.85-5.421
                                                                    c3.614-3.621,5.425-7.905,5.425-12.854v-36.546c0-4.948-1.811-9.232-5.425-12.847C502.588,385.53,498.3,383.721,493.356,383.721z" />
                                                        <path
                                                            d="M506.206,60.241c-3.617-3.612-7.905-5.424-12.85-5.424H18.274c-4.952,0-9.233,1.812-12.851,5.424
                                                                    C1.809,63.858,0,68.143,0,73.091v36.547c0,4.948,1.809,9.229,5.424,12.847c3.621,3.616,7.904,5.424,12.851,5.424h475.082
                                                                    c4.944,0,9.232-1.809,12.85-5.424c3.614-3.617,5.425-7.898,5.425-12.847V73.091C511.63,68.143,509.82,63.861,506.206,60.241z" />
                                                        <path d="M493.356,164.456H18.274c-4.952,0-9.233,1.807-12.851,5.424C1.809,173.495,0,177.778,0,182.727v36.547
                                                                    c0,4.947,1.809,9.233,5.424,12.845c3.621,3.617,7.904,5.429,12.851,5.429h475.082c4.944,0,9.232-1.812,12.85-5.429
                                                                    c3.614-3.612,5.425-7.898,5.425-12.845v-36.547c0-4.952-1.811-9.231-5.425-12.847C502.588,166.263,498.3,164.456,493.356,164.456z
                                                                    " />
                                                    </g>
                                                </g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                                <g></g>
                                            </svg>
                                        </a>
                                        <!-- .cd-dropdown -->
                                    </div>
                                    <nav class="cd-dropdown">

                                        <a href="#0" class="cd-close">Close</a>
                                        <ul class="cd-dropdown-content">

                                            <li> <a href="/">Home</a></li>

                                            <li> <a href="/about-us.php">About</a>
                                            </li>

                                            <li class="has-children">
                                                <a href="javascript:void(0);">Services</a>
                                                <ul class="cd-secondary-dropdown is-hidden">
                                                    <li class="go-back">
                                                        <a href="#0">Menu</a>
                                                    </li>
                                                    <li>
                                                        <a href="/nri-tirupati-darshan-booking.php">NRI Darshan</a>
                                                        <a href="/srivani-vip-break-darshan-from-chennai.php">Srivani VIP Darshan Package</a>
                                                        <a href="/shirdi-tour-package-from-chennai-by-direct-flight.php">Shirdi Darshan Package</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- <li><a href="/famous-temples-near-by-tirupati.php">Near me Tirupati Temple</a></li> -->
                                            <li> <a href="/contact-us.php">Contact</a>
                                            </li>

                                        </ul>

                                        <!-- .cd-dropdown-content -->
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- .cd-dropdown-wrapper -->
                    </header>
                </div>
            </div>
        </div>
    </div>
    <!-- hs Navigation End -->
