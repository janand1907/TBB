<?php
ob_start();
// error_reporting(E_ALL) + error-log-config.php (display_errors=Off,
// log_errors=On): warnings are captured server-side in logs/php-errors.log
// instead of being silently discarded or shown to visitors.
error_reporting(E_ALL);
require_once __DIR__ . '/includes/error-log-config.php';
$pageTitle = 'Tirupati Package from Hyderabad | NRI & International Travel';
$pageDescription = 'Tirupati package from Hyderabad for NRI and international travellers with airport pickup, hotel stay, travel support and trip planning.';
$pageCanonical = 'https://www.tirupatibalajibooking.com/srivani-vip-break-darshan-from-hyderabad.php';
$activeMenu = null;
$includeDefaultSchema = false;
$extraHeadLinks = <<<'HTML'
  
   <!-- ✅ Google Font  -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- ✅ Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/css/intlTelInput.css">
  <!-- Bootstrap Icon CSS -->
  <link href="assets/css/modern/bootstrap-icons.css" rel="stylesheet">
  
  <!--  Style CSS  -->
  <link rel="stylesheet" href="assets/css/modern/style.css?ver=2.3">
  
  
  <link rel="stylesheet" href="assets/css/legacy/shared-enquiry-form.css">

   <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TravelAgency",
  "name": "Divine Balaji Travels",
  "url": "https://www.tirupatibalajibooking.com/srivani-vip-break-darshan-from-hyderabad.php",
  "logo": "https://www.tirupatibalajibooking.com/assets/images/logo/logo.jpg",
  "description": "Tirupati travel package from Hyderabad with pickup support, hotel stay options, private transport and trip planning for Indian and international travellers.",
  "areaServed": [
    {
      "@type": "Country",
      "name": "India"
    },
    {
      "@type": "Country",
      "name": "Malaysia"
    },
    {
      "@type": "Country",
      "name": "Singapore"
    },
    {
      "@type": "Country",
      "name": "Sri Lanka"
    },
    {
      "@type": "Country",
      "name": "United Kingdom"
    }
  ],
  "availableLanguage": [
    "English",
    "Tamil"
  ],
  "telephone": "+91-99947-51079",
  "email": "ttdpackages@gmail.com",
  "address": {
    "@type": "PostalAddress",
    "addressCountry": "IN"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Hyderabad to Tirupati Travel Package",
  "description": "Tirupati travel package from Hyderabad with transport support, hotel stay options and itinerary planning for devotees and travellers.",
  "touristType": [
    "Indian Travellers",
    "NRI Travellers",
    "International Travellers"
  ],
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Departure from Hyderabad"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Arrival and pickup support"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Travel to Tirupati as per itinerary"
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Optional nearby temple visit if time permits"
      },
      {
        "@type": "ListItem",
        "position": 5,
        "name": "Return journey as per selected schedule"
      }
    ]
  }
  
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Hyderabad to Tirupati Travel Package",
  "provider": {
    "@type": "TravelAgency",
    "name": "Divine Balaji Travels",
    "url": "https://www.tirupatibalajibooking.com/srivani-vip-break-darshan-from-hyderabad.php",
    "logo": "https://www.tirupatibalajibooking.com/assets/images/logo/logo.jpg"
  },
  "areaServed": [
    {
      "@type": "Country",
      "name": "India"
    },
    {
      "@type": "Country",
      "name": "Malaysia"
    },
    {
      "@type": "Country",
      "name": "Singapore"
    },
    {
      "@type": "Country",
      "name": "Sri Lanka"
    },
    {
      "@type": "Country",
      "name": "United Kingdom"
    }
  ],
  "serviceType": "Tirupati Travel Package",
  "description": "Travel package from Hyderabad to Tirupati with pickup support, private transport, hotel stay options and itinerary planning."
  
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [

    {
      "@type": "Question",
      "name": "Is this package available for travellers from Malaysia, Singapore or USA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. This package is suitable for international travellers arriving in Hyderabad from overseas locations."
      }
    },

    {
      "@type": "Question",
      "name": "Is Hyderabad arrival required?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "This package is designed for travellers who prefer to start their Tirupati trip from Hyderabad."
      }
    },

    {
      "@type": "Question",
      "name": "What does the package usually include?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Package options may include pickup support, private travel, hotel stay choices and itinerary planning depending on the selected plan."
      }
    },

    {
      "@type": "Question",
      "name": "How are temple tickets or schedules handled?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Temple schedules, tickets and eligibility are managed only through official authorities and subject to their current procedures."
      }
    },

    {
      "@type": "Question",
      "name": "Can families and senior citizens use this package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Many families and senior citizens choose private travel packages for a comfortable journey."
      }
    },

    {
      "@type": "Question",
      "name": "How can I get package details?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can contact us through WhatsApp or enquiry form with your travel date and number of travellers."
      }
    }

  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://www.tirupatibalajibooking.com/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Tirupati Packages",
      "item": "https://www.tirupatibalajibooking.com/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Hyderabad to Tirupati Darshan Package",
      "item": "https://www.tirupatibalajibooking.com/srivani-vip-break-darshan-from-hyderabad.php"
    }
  ]
}
</script>
HTML;
include 'includes/header.php';
?>
<?php include 'includes/script.php'; ?>
  <section class="srivani-hero-wrapper-unique">

  <div class="srivani-container-unique">

    <!-- LEFT -->
    <div class="srivani-left-content-unique">

      <!-- Reduced Top Space -->
      <div class="srivani-top-row-unique" style="margin-top:0; padding-top:0;">

        <!-- REVIEW BOX -->
        <div class="srivani-review-box-unique" style="margin-top:0;">

          <div class="srivani-review-top-unique">
            <span class="srivani-stars-unique">★★★★★</span>

            <span class="srivani-review-heading-unique">
              <strong>Rated 4.6★</strong> based on customer reviews
            </span>
          </div>

        </div>

      </div>

      <!-- MAIN TITLE -->
      <h1 class="srivani-main-title-unique" style="margin-top:12px;">
        Tirupati Package from Hyderabad for International Travellers
      </h1>

      <!-- Highlight -->
      <div class="srivani-highlight-text-unique">
        Suitable for devotees travelling from Malaysia, Singapore, USA, Canada, Sri Lanka and other overseas locations.
      </div>

      <!-- FEATURES -->
      <div class="srivani-features-grid-unique">

        <div class="srivani-feature-card-unique">
          <i class="fa-solid fa-plane-arrival srivani-feature-icon-unique"></i>
          Airport Pickup Support
        </div>

        <div class="srivani-feature-card-unique">
          <i class="fa-solid fa-car srivani-feature-icon-unique"></i>
          Comfortable Travel
        </div>

        <div class="srivani-feature-card-unique">
          <i class="fa-solid fa-hotel srivani-feature-icon-unique"></i>
          Hotel Stay Options
        </div>

        <div class="srivani-feature-card-unique">
          <i class="fa-solid fa-clipboard-list srivani-feature-icon-unique"></i>
          Trip Planning Help
        </div>

      </div>

      <!-- BUTTONS -->
      <div class="srivani-buttons-group-unique">

        <a href="https://wa.me/919994751079?text=Hello,%20I%20am%20planning%20a%20Tirupati%20trip%20from%20overseas.%20Please%20share%20package%20details,%20travel%20options%20and%20itinerary."
           class="srivani-btn-primary-unique"
           target="_blank">

          <i class="fa-brands fa-whatsapp"></i>
          Get Package Details on WhatsApp
        </a>

        <a href="https://wa.me/919994751079"
           target="_blank"
           class="srivani-btn-whatsapp-unique">

          <i class="fa-brands fa-whatsapp"></i>
          WhatsApp Now
        </a>

        <a href="#itinerary-section"
           id="viewItineraryBtn"
           class="srivani-btn-outline-unique">

          <i class="fa-solid fa-map-location-dot"></i>
          View Itinerary
        </a>

      </div>

      <!-- NOTE -->
      <p class="srivani-limited-note-unique">
        Travel schedules may vary based on package plan and official procedures.
      </p>

      <!-- DISCLAIMER -->
      <p style="font-size:13px; color:#666; margin-top:10px;">
        Temple schedules, tickets and eligibility are managed only through official authorities.
      </p>

    </div>

    <!-- RIGHT FORM -->
    <div class="srivani-form-wrapper-unique">

      <h3 class="srivani-form-title-unique">
        Quick Enquiry
      </h3>

      <form class="hero-form" method="post" action="con_enq.php" novalidate>

        <input autocomplete="name" id="hf-name" type="text" name="name" placeholder="Your Name">
        <div class="field-error" data-for="hf-name"></div>

        <input autocomplete="tel" id="hf-whatsapp" type="tel" placeholder="WhatsApp Number" maxlength="12">
        <input type="hidden" id="hf-mobile" name="mobile">
        <div class="field-error" data-for="hf-whatsapp"></div>

        <input autocomplete="email" id="hf-email" type="email" name="email" placeholder="Email ID (Optional)">
        <div class="field-error" data-for="hf-email"></div>

        <div class="srivani-form-row-unique">

          <div class="srivani-field-wrap">
            <input id="hf-travellers" type="number" name="peoples" min="1" placeholder="No. of Travellers">
            <div class="field-error" data-for="hf-travellers"></div>
          </div>

          <div class="srivani-field-wrap">
            <input id="hf-date" type="date" name="date">
            <div class="field-error" data-for="hf-date"></div>
          </div>

        </div>

        <textarea id="hf-message" name="message" rows="4" placeholder="Travel Request (Optional)"></textarea>
        <div class="field-error" data-for="hf-message"></div>

        <div class="srivani-captcha-question" id="hf-captcha-question">
          <?= htmlspecialchars($captcha_question, ENT_QUOTES, 'UTF-8') ?>
        </div>

        <input id="hf-captcha" type="text" name="answer" placeholder="Captcha Answer">
        <div class="field-error" data-for="hf-captcha"></div>

        <button type="submit" class="srivani-submit-btn-unique">
          Submit Enquiry
        </button>

      </form>

    </div>

  </div>

</section>


<!-- Features -->
<section class="tt-feature-section">
  <div class="tt-feature-container">

    <div class="tt-feature-item">
      <div class="tt-feature-icon">
        <i class="fa-solid fa-globe"></i>
      </div>
      <h3 class="tt-feature-title">
        Suitable for International Travellers
      </h3>
    </div>

    <div class="tt-feature-item">
      <div class="tt-feature-icon">
        <i class="fa-solid fa-clipboard-list"></i>
      </div>
      <h3 class="tt-feature-title">
        Clear Travel Planning Support
      </h3>
    </div>

    <div class="tt-feature-item">
      <div class="tt-feature-icon">
        <i class="fa-solid fa-headset"></i>
      </div>
      <h3 class="tt-feature-title">
        Dedicated Customer Assistance
      </h3>
    </div>

    <div class="tt-feature-item">
      <div class="tt-feature-icon">
        <i class="fa-solid fa-car-side"></i>
      </div>
      <h3 class="tt-feature-title">
        Hyderabad Pickup Options
      </h3>
    </div>

  </div>
</section>



 <!-- International Traveller Support Section -->
<section class="zenith-srivani-orbit-section">

  <div class="zenith-srivani-orbit-container">

    <!-- Left Content Block -->
    <div class="zenith-srivani-orbit-content">

      <h2 class="zenith-srivani-orbit-title">
        Tirupati Travel Support from Hyderabad
      </h2>

      <p class="zenith-srivani-orbit-paragraph">
        We provide Tirupati travel package assistance for international travellers arriving in Hyderabad. This service is suitable for devotees travelling from Malaysia, Singapore, USA, Canada, Sri Lanka and other overseas locations.
      </p>

      <p class="zenith-srivani-orbit-paragraph">
        Package options may include airport pickup, private transportation, hotel stay choices, itinerary planning and on-trip support for a comfortable pilgrimage journey.
      </p>

      <p class="parag-landing-page">
        Also available:
      </p>

      👉 <a href="https://www.tirupatibalajibooking.com/srivani-vip-break-darshan-from-chennai.php"
            class="zenith-srivani-orbit-tag"
            target="_blank">

        Tirupati Package from Chennai
      </a>

      <p class="zenith-srivani-orbit-paragraph">
        Temple schedules, tickets and eligibility are managed only through official authorities. Travel assistance may be available as part of complete package plans when requested.
      </p>

    </div>

    <!-- Right Decorative Info Panel -->
    <div class="zenith-srivani-orbit-sidepanel">

      <div class="zenith-srivani-orbit-sidecard">

        <span class="zenith-srivani-orbit-fee-label">
          Popular Package Inclusions
        </span>

        <h3 class="zenith-srivani-orbit-fee-amount">
          Pickup + Travel
        </h3>

        <p class="zenith-srivani-orbit-fee-breakup">
          Vehicle support, stay options and trip planning based on selected package.
        </p>

      </div>

    </div>

  </div>

</section>


  <!-- 4-Step Booking Process Section -->
<section class="xplora-booking-process">
  <div class="xplora-booking-container">

    <!-- Heading -->
    <h2 class="xplora-booking-title">
      Simple 4-Step Travel Planning Process
    </h2>

    <!-- Grid Boxes -->
    <div class="xplora-booking-grid">

      <!-- Step 1 -->
      <div class="xplora-step-box">
        <div class="xplora-step-number">01</div>
        <h3 class="xplora-step-title">
          Plan Your Arrival to Hyderabad
        </h3>
        <p class="xplora-step-desc">
          Share your expected arrival date and travel preference for package planning.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="xplora-step-box">
        <div class="xplora-step-number">02</div>
        <h3 class="xplora-step-title">
          Share Traveller Details
        </h3>
        <p class="xplora-step-desc">
          Share number of travellers, pickup point and accommodation preference.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="xplora-step-box">
        <div class="xplora-step-number">03</div>
        <h3 class="xplora-step-title">
          Receive Package Options
        </h3>
        <p class="xplora-step-desc">
          Our team will share suitable travel plans, vehicle options and itinerary details.
        </p>
      </div>

      <!-- Step 4 -->
      <div class="xplora-step-box">
        <div class="xplora-step-number">04</div>
        <h3 class="xplora-step-title">
          Confirm & Travel Comfortably
        </h3>
        <p class="xplora-step-desc">
          Pickup and onward travel are arranged based on your selected package plan.
        </p>
      </div>

    </div>

    <!-- Bottom Note -->
    <p style="font-size:13px; color:#666; text-align:center; margin-top:18px;">
      Temple schedules, tickets and eligibility are managed only through official authorities.
    </p>

  </div>
</section>


  <!-- Check Travel Package Availability -->
<section class="vip-break-slot-section">
  <div class="vip-break-slot-container">

    <!-- Heading Row -->
    <h2 class="vip-break-heading">
      Check Tirupati Package Availability
    </h2>

    <!-- Description Row -->
    <p class="vip-break-description">
      Travel dates, vehicle options and package schedules may vary based on season and availability.
    </p>

    <!-- Buttons Row -->
    <div class="vip-break-buttons">

      <a href="https://wa.me/919994751079?text=Hello,%20I%20am%20planning%20a%20Tirupati%20trip%20from%20overseas.%20Please%20share%20package%20details,%20travel%20options%20and%20itinerary."
         class="vip-btn vip-btn-check"
         target="_blank">

        <i class="fa-brands fa-whatsapp"></i>
        Check Availability on WhatsApp
      </a>

      <a href="https://wa.me/919994751079"
         class="vip-btn vip-btn-whatsapp"
         target="_blank">

        <i class="fa-brands fa-whatsapp"></i>
        WhatsApp for Assistance
      </a>

    </div>

    <!-- Note -->
    <p style="font-size:13px; color:#666; margin-top:14px;">
      Temple schedules, tickets and eligibility are managed only through official authorities.
    </p>

  </div>
</section>




  <!-- Travel Information Section -->
<section class="svb-darshan-unique-section">
  <div class="svb-darshan-unique-container">

    <!-- Left Side -->
    <div class="svb-darshan-unique-left">

      <h2 class="svb-darshan-unique-heading">
        Tirupati Travel Package from Hyderabad
      </h2>

      <p class="svb-darshan-unique-text">
        This package is designed for devotees arriving in Hyderabad and planning a comfortable onward journey to Tirupati with organized travel support.
      </p>

      <p class="svb-darshan-unique-text">
        Package options may include airport pickup, private transportation, hotel stay choices, itinerary planning and return support based on your selected plan.
      </p>

      <p class="svb-darshan-unique-text">
        Temple schedules, tickets and eligibility are managed only through official authorities.
      </p>

    </div>

    <!-- Right Side -->
    <div class="svb-darshan-unique-right">

      <h2 class="svb-darshan-unique-heading">
        Who Can Choose This Package?
      </h2>

      <ul class="svb-darshan-unique-list">
        <li><i></i> International / overseas travellers</li>
        <li><i></i> Families and group travellers</li>
        <li><i></i> Devotees arriving in Hyderabad</li>
        <li><i></i> Travellers seeking organized pickup and travel support</li>
      </ul>

    </div>

  </div>
</section>


 <!-- Package Inclusions & Exclusions Section -->
<section class="svb-package-section">
  <div class="svb-package-container">

    <h2 class="svb-package-title">
      Package Inclusions and Exclusions
    </h2>

    <div class="svb-package-columns">

      <!-- Left Column: Inclusions -->
      <div class="svb-package-left">

        <h3 class="svb-package-subtitle">
          Package Inclusions
        </h3>

        <ul class="svb-package-list">
          <li><i class="svb-icon fa-solid fa-bed"></i>Accommodation options based on selected package</li>
          <li><i class="svb-icon fa-solid fa-utensils"></i>Meals as per hotel plan where applicable</li>
          <li><i class="svb-icon fa-solid fa-car"></i>Transfers and travel support as per itinerary</li>
          <li><i class="svb-icon fa-solid fa-route"></i>Toll, parking and driver charges where applicable</li>
        </ul>

      </div>

      <!-- Right Column: Exclusions -->
      <div class="svb-package-right">

        <h3 class="svb-package-subtitle">
          Package Exclusions
        </h3>

        <ul class="svb-package-list">
          <li><i class="svb-icon fa-solid fa-ticket-alt"></i>Temple schedules, tickets and eligibility handled by official authorities</li>
          <li><i class="svb-icon fa-solid fa-plane"></i>Flight fare, airline seat selection or airline meals unless specified</li>
          <li><i class="svb-icon fa-solid fa-location-dot"></i>Additional travel outside confirmed itinerary</li>
          <li><i class="svb-icon fa-solid fa-user"></i>Personal expenses or optional add-on services</li>
          <li><i class="svb-icon fa-solid fa-receipt"></i>Items not specifically mentioned in confirmed package plan</li>
        </ul>

      </div>

    </div>

  </div>
</section>



  <!-- Hyderabad to Tirupati Travel – Sample 1 Day Itinerary Section -->
<section id="itinerary-section" class="xqv-tirupati-vip-break-001">
  <div class="xqv-tirupati-container-001">

    <!-- Heading -->
    <h2 class="xqv-tirupati-title-001">
      Hyderabad to Tirupati Travel – Sample 1 Day Itinerary
    </h2>

    <p class="xqv-tirupati-subtext-001">
      Flexible travel schedule based on timing and selected package plan
    </p>

    <!-- Timeline Steps -->
    <div class="xqv-tirupati-timeline-001">

      <!-- Step 1 -->
      <div class="xqv-tirupati-step-001">
        <div class="xqv-tirupati-icon-001">
          <i class="fas fa-plane-departure"></i>
        </div>
        <div class="xqv-tirupati-content-001">
          <strong>Morning – Departure & Arrival</strong><br>
          Travel from Hyderabad to Tirupati based on the selected route and schedule.
        </div>
      </div>

      <!-- Step 2 -->
      <div class="xqv-tirupati-step-001">
        <div class="xqv-tirupati-icon-001">
          <i class="fas fa-car"></i>
        </div>
        <div class="xqv-tirupati-content-001">
          <strong>Pickup & Local Transfer</strong><br>
          Pickup support can be arranged from airport, railway station or agreed location.
        </div>
      </div>

      <!-- Step 3 -->
      <div class="xqv-tirupati-step-001">
        <div class="xqv-tirupati-icon-001">
          <i class="fas fa-hotel"></i>
        </div>
        <div class="xqv-tirupati-content-001">
          <strong>Refreshment / Hotel Stop</strong><br>
          Fresh-up or short rest stop may be arranged depending on package inclusions and timing.
        </div>
      </div>

      <!-- Step 4 -->
      <div class="xqv-tirupati-step-001">
        <div class="xqv-tirupati-icon-001">
          <i class="fas fa-place-of-worship"></i>
        </div>
        <div class="xqv-tirupati-content-001">
          <strong>Tirupati Temple Visit</strong><br>
          Temple visit timing depends on official schedules, eligibility and availability.
        </div>
      </div>

      <!-- Step 5 -->
      <div class="xqv-tirupati-step-001">
        <div class="xqv-tirupati-icon-001">
          <i class="fas fa-pray"></i>
        </div>
        <div class="xqv-tirupati-content-001">
          <strong>Optional Nearby Temple Visit</strong><br>
          Nearby temple visits may be included if time permits.
        </div>
      </div>

      <!-- Step 6 -->
      <div class="xqv-tirupati-step-001">
        <div class="xqv-tirupati-icon-001">
          <i class="fas fa-plane-arrival"></i>
        </div>
        <div class="xqv-tirupati-content-001">
          <strong>Return Journey</strong><br>
          Return drop arranged based on final itinerary and selected travel mode.
        </div>
      </div>

      <!-- Step 7 -->
      <div class="xqv-tirupati-step-001">
        <div class="xqv-tirupati-icon-001">
          <i class="fas fa-star"></i>
        </div>
        <div class="xqv-tirupati-content-001">
          <strong>Trip Completion</strong><br>
          Your pilgrimage trip concludes with comfortable return support.
        </div>
      </div>

      <!-- Step 8 -->
      <div class="xqv-tirupati-step-001">
        <div class="xqv-tirupati-icon-001">
          <i class="fas fa-exclamation-circle"></i>
        </div>
        <div class="xqv-tirupati-content-001">
          <strong>Important Note</strong><br>
          Final itinerary may vary based on travel timing, traffic, official procedures and package plan.
        </div>
      </div>

    </div>
  </div>
</section>



  <!-- Darshan Booking Assistance Section
  <section class="svb-darshan-assist-section">
    <div class="svb-darshan-container">

      <h2 class="svb-darshan-heading">
        Darshan Booking Assistance
      </h2>

      <div class="svb-darshan-grid">

        <div class="svb-darshan-block svb-darshan-block-1">
          <p>
            Our team assists international devotees with the Srivani Trust donation and ticket coordination process required for VIP Break Darshan eligibility.
          </p>
          <ul class="svb-darshan-list-2col">
            <li><i class="svb-darshan-icon"></i> Srivani Trust donation & ticket guidance</li>
            <li><i class="svb-darshan-icon"></i> Darshan slot coordination</li>
            <li><i class="svb-darshan-icon"></i> Travel support from Hyderabad </li>
            <li><i class="svb-darshan-icon"></i> Guidance for temple procedures</li>
          </ul>
        </div>

        <div class="svb-darshan-block svb-darshan-block-2">
          <ul>
            <li>📝 <strong>Booking Process:</strong> Tickets are issued online at 9:00 AM every day on a trial basis. ⚠️ Offline tickets are no longer available.</li>
            <li>⏰ <strong>Darshan Timings:</strong> Darshan is scheduled at 4:00 PM on the same day. The entire process usually takes about 45 minutes to 1 hour.</li>
            <li>❌ <strong>Unsuccessful Bookings:</strong> If a ticket cannot be redeemed, your ₹10,500 darshan fee remains in the online portal. You can choose to view the darshan on the following day.</li>
            <li>🌏 <strong>NRI/Non-NRI Alternatives:</strong> If returning same day without VIP ticket: NRI visitors can use ₹300/- Darshan; Non-NRI visitors use SSD early next morning.</li>
            <li>💰 <strong>Refund Policy:</strong> The ₹10,500 total darshan fee is strictly non-refundable. Your payment is valid for one year and can be used for darshan at any time within this period.</li>
            <li style="color:rgb(164, 33, 33)">🛎️ <strong style="color:rgb(164, 33, 33)">Booking Assistance:</strong> We can process the payment and book the ticket on your behalf as a service, for which service charges apply. Alternatively, you may choose to handle the booking yourself at your own risk.</li>
          </ul>
        </div>

      </div>
    </div>
  </section>  -->



  <!-- Required ID Proof Details Section 
  <section class="tdv-darshan-main">
    <div class="tdv-darshan-wrapper">

      <div class="tdv-row-top">
        <h2 class="tdv-heading-top">Required ID Proof Details</h2>
        <div class="tdv-buttons-group">
          <button class="tdv-proof-btn">Valid Passport</button>
          <button class="tdv-proof-btn">Visa Details</button>
          <button class="tdv-proof-btn">Travel Arrival Proof</button>
        </div>
      </div>

      <div class="tdv-row-bottom">

        <div class="tdv-col-left">
          <h3>About Our Company</h3>
          <p>
            We provide travel and darshan assistance services for devotees visiting Tirupati. Our focus is helping international pilgrims organise their Tirupati VIP Darshan journey with clear guidance and structured arrangements.
          </p>
        </div>

        <div class="tdv-col-right">
          <h3>Why Devotees Trust Us</h3>
          <ul>
            <li> Clear darshan coordination process</li>
            <li> Assistance for international pilgrims</li>
            <li> Private travel from Hyderabad </li>
            <li> Transparent donation guidance</li>
            <li> Dedicated support for overseas devotees</li>
          </ul>
        </div>

      </div>

    </div>
  </section> -->



  <!-- Immediate Assistance Section -->
  <section class="imt-assist-section">
    <div class="imt-assist-container">

      <!-- Heading Row -->
      <h2 class="imt-assist-heading">Need Immediate Assistance?</h2>

      <!-- Description Row -->
      <p class="imt-assist-desc">
        Contact our support team for darshan slot availability and travel guidance.
      </p>

      <!-- Contact Info Row (all in one row) -->
      <div class="imt-assist-contacts">

        <a href="tel:+919994751079" class="imt-contact-item">
          <i class="imt-contact-icon fas fa-phone"></i>
          <span class="imt-contact-text">Phone: +91-99947-51079</span>
        </a>

        <a href="https://wa.me/919994751079" target="_blank" class="imt-contact-item">
          <i class="imt-contact-icon fab fa-whatsapp"></i>
          <span class="imt-contact-text">WhatsApp: +91-99947-51079</span>
        </a>

        <a href="mailto:ttdpackages@gmail.com" class="imt-contact-item">
          <i class="imt-contact-icon fas fa-envelope"></i>
          <span class="imt-contact-text">Email: ttdpackages@gmail.com</span>
        </a>

      </div>

    </div>
  </section>



  <!-- Devotee Testimonials Section -->
  <section class="dv-testimonial-section">
    <div class="dv-testimonial-container">

      <!-- Heading -->
      <h2 class="dv-testimonial-heading">What Our Devotees Say</h2>
      <p class="dv-testimonial-subtext">
        Trusted by devotees from India, Singapore & Malaysia
      </p>

      <!-- Testimonials Grid -->
      <div class="dv-testimonial-grid">

        <!-- Card 1 -->
        <div class="dv-testimonial-box">
          <div class="dv-testimonial-stars">★★★★★</div>
          <h3 class="dv-testimonial-title">Excellent Service & Highly Recommended</h3>
          <p class="dv-testimonial-text">
            Best travel experience with excellent service. Everything was well managed and smooth. Highly recommended.

          </p>
          <strong class="dv-testimonial-author">— Sharmila Manogaran (UAE)</strong>
        </div>

        <!-- Card 2 -->
        <div class="dv-testimonial-box">
          <div class="dv-testimonial-stars">★★★★★</div>
          <h3 class="dv-testimonial-title">Well Organized Tirupati Visit</h3>
          <p class="dv-testimonial-text">
            The entire Tirupati trip was well organized. The team handled everything patiently and guided us clearly throughout the process.

          </p>
          <strong class="dv-testimonial-author">— S Ramaratnam (Singapore)</strong>
        </div>

        <!-- Card 3 -->
        <div class="dv-testimonial-box">
          <div class="dv-testimonial-stars">★★★★★</div>
          <h3 class="dv-testimonial-title">Smooth Chennai to Tirupati Journey</h3>
          <p class="dv-testimonial-text">
            Excellent coordination and smooth pickup and drop from Chennai. A wonderful Tirupati trip experience.
          </p>
          <strong class="dv-testimonial-author">— Ajay Sinha (Malaysia)</strong>
        </div>

      </div>
    </div>
  </section>


  <!-- Travel Tips Section -->
  <section class="xti-global-devotee-tips-section">
    <div class="xti-global-devotee-tips-container">

      <!-- Row 1 - Heading -->
      <div class="xti-global-devotee-tips-heading-wrap">
        <h2 class="xti-global-devotee-tips-heading">
          Travel Tips for International Devotees
        </h2>
      </div>

      <!-- Row 2 -->
      <div class="xti-global-devotee-tips-grid">
        <div class="xti-global-devotee-tips-card">
          <i class="xti-global-devotee-tips-icon">⏰</i>
          <p>
            Plan arrival in Hyderabad early morning to ensure smooth transit to Tirupati.
          </p>
        </div>
      </div>

      <!-- Row 3 -->
      <div class="xti-global-devotee-tips-grid">
        <div class="xti-global-devotee-tips-card">
          <i class="xti-global-devotee-tips-icon">🛂</i>
          <p>
            Always carry your original passport during the temple visit.
          </p>
        </div>
      </div>

      <!-- Row 4 -->
      <div class="xti-global-devotee-tips-grid">
        <div class="xti-global-devotee-tips-card">
          <i class="xti-global-devotee-tips-icon">👕</i>
          <p>
            Follow temple dress code (Dhoti/Kurta for men, Saree/Chudidar for women).
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- FAQ Section -->
<section class="svbfaq-main-section">

  <div class="svbfaq-container">

    <h2 class="svbfaq-title">
      Frequently Asked Questions
    </h2>

    <div class="svbfaq-list">

      <div class="svbfaq-card">
        <h3 class="svbfaq-question">
          Is this package available for travellers from Malaysia, Singapore or USA?
        </h3>
        <p class="svbfaq-answer">
          Yes. This package is suitable for international travellers arriving in Hyderabad from overseas locations.
        </p>
      </div>

      <div class="svbfaq-card">
        <h3 class="svbfaq-question">
          Is Hyderabad arrival required?
        </h3>
        <p class="svbfaq-answer">
          This package is designed for travellers who prefer to start their Tirupati trip from Hyderabad.
        </p>
      </div>

      <div class="svbfaq-card">
        <h3 class="svbfaq-question">
          What does the package usually include?
        </h3>
        <p class="svbfaq-answer">
          Package options may include pickup support, private travel, hotel stay choices and itinerary planning depending on the selected plan.
        </p>
      </div>

      <div class="svbfaq-card">
        <h3 class="svbfaq-question">
          How are temple tickets or schedules handled?
        </h3>
        <p class="svbfaq-answer">
          Temple schedules, tickets and eligibility are managed only through official authorities and subject to their current procedures.
        </p>
      </div>

      <div class="svbfaq-card">
        <h3 class="svbfaq-question">
          Can families and senior citizens use this package?
        </h3>
        <p class="svbfaq-answer">
          Yes. Many families and senior citizens choose private travel packages for a comfortable journey.
        </p>
      </div>

      <div class="svbfaq-card">
        <h3 class="svbfaq-question">
          How can I get package details?
        </h3>
        <p class="svbfaq-answer">
          You can contact us through WhatsApp or enquiry form with your travel date and number of travellers.
        </p>
      </div>

    </div>

  </div>

</section>



  <!-- Tirupati Travel CTA Section -->
<section class="srnvp-cta-wrapper">

  <div class="srnvp-cta-container">

    <h2 class="srnvp-cta-title">
      Plan Your Tirupati Trip from Hyderabad
    </h2>

    <p class="srnvp-cta-desc">
      If you are travelling from overseas and planning a Tirupati pilgrimage, contact us to check package options, travel schedules and itinerary details.
    </p>

    <div class="srnvp-cta-buttons">

      <a href="https://wa.me/919994751079?text=Hello,%20I%20am%20planning%20a%20Tirupati%20trip%20from%20overseas.%20Please%20share%20package%20details,%20travel%20options%20and%20itinerary."
         class="srnvp-btn-primary"
         target="_blank">

        <i class="fab fa-whatsapp"></i>
        Get Package Details on WhatsApp
      </a>

      <a href="https://wa.me/919994751079"
         class="srnvp-btn-whatsapp"
         target="_blank">

        <i class="fab fa-whatsapp"></i>
        WhatsApp for Assistance
      </a>

    </div>

    <div class="srnvp-trust-text">
      <i class="fas fa-users"></i>
      Trusted by travellers from India and overseas locations.
    </div>

    <p style="font-size:13px; color:#666; margin-top:14px;">
      Temple schedules, tickets and eligibility are managed only through official authorities.
    </p>

  </div>

</section>



  <!-- Floating Contact Icons -->
  <div class="zenora-floating-orbit-zx91">

    <!-- WhatsApp -->
    <a href="https://wa.me/919994751079" target="_blank" class="zenora-orbit-whatsapp-zx91">
      <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Icon">
    </a>

    <!-- Enquiry -->
    <a href="#" class="zenora-orbit-enquiry-zx91 js-enquiry-open">
      <img src="https://cdn-icons-png.flaticon.com/512/3059/3059441.png" alt="Enquiry Icon">
    </a>


    <!-- Up Arrow -->
    <!-- <a href="#top" class="zenora-orbit-call-zx91">
      <img src="https://cdn-icons-png.flaticon.com/512/892/892692.png" alt="Up Arrow Icon">
    </a> -->

  </div>




  <!-- ENQUIRY POPUP -->
  <section id="enquiryModal" class="enquiry-modal">
    <div class="enquiry-modal-content">

      <span class="enquiry-close">&times;</span>

      <div class="enquiry-header">

        <h2>Quick Enquiry</h2>
      </div>

      <form class="enquiry-form" method="post" action="con_enq.php" novalidate>

        <div class="input-group">
          <input autocomplete="name" id="ep-name" type="text" name="name" required>
          <label for="ep-name">Your Name</label>
          <div class="field-error" data-for="ep-name"></div>
        </div>

        <div class="input-group phone-group">
          <input autocomplete="tel" id="ep-whatsapp" type="tel" maxlength="12" required>
          <input type="hidden" id="ep-mobile" name="mobile">
          <label for="ep-whatsapp">WhatsApp Number</label>
          <div class="field-error" data-for="ep-whatsapp"></div>
        </div>

        <div class="input-group">
          <input autocomplete="email" id="ep-email" type="email" name="email" required>
          <label for="ep-email">Email Address(optional)</label>
          <div class="field-error" data-for="ep-email"></div>
        </div>

        <!-- New Fields Start -->
        <div class="input-group">
          <input id="ep-travellers" type="text" name="peoples" required>
          <label for="ep-travellers">No. of Devotees</label>
          <div class="field-error" data-for="ep-travellers"></div>
        </div>

        <div class="input-group">
          <input id="ep-date" type="date" name="date" required>
          <div class="field-error" data-for="ep-date"></div>

        </div>

        <div class="input-group">
          <textarea id="ep-message" name="message" rows="3"></textarea>
          <label for="ep-message">Special Request (Optional)</label>
          <div class="field-error" data-for="ep-message"></div>
        </div>
        <!-- New Fields End -->

        <div class="captcha-question" id="ep-captcha-question"><?= htmlspecialchars($captcha_question, ENT_QUOTES, 'UTF-8') ?></div>
        <div class="input-group">
          <input id="ep-captcha" type="text" name="answer" required>
          <label for="ep-captcha">Captcha Answer</label>
          <div class="field-error" data-for="ep-captcha"></div>
        </div>

        <button type="submit" class="enquiry-submit">
          Submit Enquiry
        </button>



      </form>

    </div>
  </section>
  <script>
    document.addEventListener("DOMContentLoaded", function() {

      const modal = document.getElementById("enquiryModal");
      const closeBtn = document.querySelector(".enquiry-close");
      const openBtns = document.querySelectorAll(".js-enquiry-open");

      // OPEN POPUP
      openBtns.forEach(btn => {
        btn.addEventListener("click", function(e) {
          e.preventDefault();
          modal.style.display = "flex";
        });
      });

      // CLOSE POPUP (X)
      closeBtn.addEventListener("click", function() {
        modal.style.display = "none";
      });

      // CLOSE ON OUTSIDE CLICK
      modal.addEventListener("click", function(e) {
        if (e.target === modal) {
          modal.style.display = "none";
        }
      });

    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/js/intlTelInput.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/js/utils.min.js"></script>
  <script src="assets/js/enquiry-forms.js"></script>



  
  <?php 
  include 'includes/footer.php'; 
  ?>




