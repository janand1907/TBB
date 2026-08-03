<?php
ob_start();
// error_reporting(E_ALL) + error-log-config.php (display_errors=Off,
// log_errors=On): warnings are captured server-side in logs/php-errors.log
// instead of being silently discarded or shown to visitors.
error_reporting(E_ALL);
require_once __DIR__ . '/includes/error-log-config.php';
$pageTitle = 'Chennai to Tirupati Tour Package for NRI | Car & Hotel';
$pageDescription = 'Chennai to Tirupati tour package for NRI devotees with airport pickup, private car, hotel stay, Tirupati travel planning and return drop support.';
$pageCanonical = 'https://www.tirupatibalajibooking.com/srivani-vip-darshan-from-chennai-for-nri.php';
$activeMenu = null;
$includeDefaultSchema = false;
$extraHeadLinks = <<<'HTML'
  <!-- Performance: hero background is a CSS background-image, invisible to
       the HTML preload scanner until CSSOM is built - preload it directly
       so the LCP image fetch starts immediately instead of after ~19 stylesheets. -->
  <link rel="preload" as="image" href="assets/srivani-image/srivani-chennai-for-nri/hero.webp" fetchpriority="high">

   <!-- ✅ Google Font  -->
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"></noscript>

  <!-- ✅ Font Awesome -->
  <link rel="stylesheet" href="assets/css/modern/fa6-subset.css">

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/css/intlTelInput.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/css/intlTelInput.css"></noscript>

  <!-- Bootstrap Icon CSS -->
 
  <!--  Style CSS  -->
  <link rel="stylesheet" href="assets/css/modern/style.css?ver=2.3">
  

 

  <link rel="stylesheet" href="assets/css/legacy/shared-enquiry-form.css">

  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TravelAgency",
  "name": "Divine Balaji Travels",
  "url": "https://www.tirupatibalajibooking.com/srivani-vip-darshan-from-chennai-for-nri.php",
  "description": "Chennai to Tirupati travel package for NRI devotees with airport pickup, private car travel, hotel stay options, trip planning and return drop support for international travellers.",
  "areaServed": [
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
    },
    {
      "@type": "Country",
      "name": "India"
    }
  ],
  "serviceType": "Chennai to Tirupati Travel Package",
  "provider": {
    "@type": "Organization",
    "name": "Divine Balaji Travels",
    "url": "https://www.tirupatibalajibooking.com",
    "logo": "https://www.tirupatibalajibooking.com/assets/images/logo/logo.jpg"
  }
}
</script>

 <script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"TouristTrip",
  "name":"Srivani VIP Darshan from Chennai for NRI",
  "provider":{
    "@type":"TravelAgency",
    "name":"Divine Balaji Travels",
    "url":"https://www.tirupatibalajibooking.com/",
    "logo": "https://www.tirupatibalajibooking.com/assets/images/logo/logo.jpg"
  },
  "url":"https://www.tirupatibalajibooking.com/srivani-vip-darshan-from-chennai-for-nri.php",
  "description":"Private Tirupati pilgrimage package for NRI travellers from Chennai with travel support and coordination."
}
</script>

    <!-- FAQ Schema Script -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "https://www.tirupatibalajibooking.com/srivani-vip-darshan-from-chennai-for-nri.php#faq",
  "mainEntity": [

    {
      "@type": "Question",
      "name": "Can NRI travellers use this Chennai to Tirupati travel package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, this service is suitable for NRI devotees and international travellers visiting Chennai and planning a Tirupati trip."
      }
    },

    {
      "@type": "Question",
      "name": "What is included in the package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Packages may include Chennai pickup, private AC car travel, hotel stay options, itinerary planning and return drop support depending on the plan selected."
      }
    },

    {
      "@type": "Question",
      "name": "How can I get package pricing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Pricing depends on travel date, number of travellers, vehicle type and hotel preference. Contact us through WhatsApp or enquiry form for the latest quote."
      }
    },

    {
      "@type": "Question",
      "name": "How do I confirm my Tirupati trip?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Share your travel date, pickup point and number of travellers. Our team will provide package options and next steps for confirmation."
      }
    },

    {
      "@type": "Question",
      "name": "How long does the Chennai to Tirupati trip take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most travellers choose a one day or two day plan depending on arrival schedule, hotel stay preference and return timing."
      }
    },

    {
      "@type": "Question",
      "name": "Do you provide Chennai airport pickup?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, pickup can be arranged from Chennai International Airport, hotels or residences based on your travel plan."
      }
    },

    {
      "@type": "Question",
      "name": "How are temple darshan tickets handled?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Temple darshan schedules, tickets and eligibility are managed only through official authorities and are subject to their rules and availability. As part of our complete travel package, when requested by the customer, our team can check ticket availability on the official temple website and assist in attempting the booking process using the customer’s required proof details. Ticket confirmation and availability are controlled only by the official authorities."
      }
    },

    {
      "@type": "Question",
      "name": "Is this service only for Malaysia or Singapore travellers?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, this package is available for NRI devotees and international travellers from Malaysia, Singapore, Sri Lanka, the UK and other countries."
      }
    },

    {
      "@type": "Question",
      "name": "Can families and senior citizens use this package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, families, senior citizens and group travellers can choose suitable vehicle and hotel options based on comfort needs."
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
      "name": "NRI Travel Packages",
      "item": "https://www.tirupatibalajibooking.com/nri-travel-packages.php"
    },

    {
      "@type": "ListItem",
      "position": 3,
      "name": "Chennai to Tirupati Travel Package for NRI",
      "item": "https://www.tirupatibalajibooking.com/srivani-vip-darshan-from-chennai-for-nri.php"
    }

  ]
}
</script>
HTML;
$loadLegacyWidgets = false; // no datepicker/select2/owl/bxslider/magnific-popup on this page
include 'includes/header.php';
?>
<?php include 'includes/script.php'; ?>



 <!-- Banner Section -->
<section class="srivani-hero-wrapper-unique"
  style="background: url('assets/srivani-image/srivani-chennai-for-nri/hero.webp') center/cover no-repeat;">

  <div class="srivani-container-unique">

    <!-- LEFT -->
    <div class="ultra91-left-wrap">

      <!-- TRUST BADGE -->
      <div class="ultra91-badge-box">

        <div class="ultra91-badge-line1">
          <span class="ultra91-stars">★★★★★</span>
          <strong>Rated 4.6</strong> based on customer reviews
        </div>

        <div class="ultra91-badge-line2">
          <i class="fa-solid fa-circle-check"></i>
          Trusted by travellers from Malaysia, Singapore, Sri Lanka & UK
        </div>

        <div class="ultra91-badge-line3">
          <i class="fa-solid fa-circle-check"></i>
          Private airport pickup, hotel stay & Tirupati trip support
        </div>

      </div>

      <!-- MAIN HEADING -->
      <h1 class="ultra91-title">
        Chennai to Tirupati Travel Package for NRI Devotees
      </h1>

      <!-- SUBHEADING -->
      <h2 class="ultra91-subtitle">
        Complete pilgrimage travel support with Chennai airport pickup, private car, hotel stay and return drop assistance.
      </h2>

      <!-- FEATURES -->
      <div class="ultra91-features">

        <div class="ultra91-feature-item">
          <i class="fa-solid fa-circle-check"></i>
          Chennai Airport / Hotel Pickup Available
        </div>

        <div class="ultra91-feature-item">
          <i class="fa-solid fa-circle-check"></i>
          Private Car Travel to Tirupati
        </div>

        <div class="ultra91-feature-item">
          <i class="fa-solid fa-circle-check"></i>
          Hotel Stay & Trip Coordination
        </div>

        <div class="ultra91-feature-item">
          <i class="fa-solid fa-circle-check"></i>
          Dedicated Support for International Travellers
        </div>

      </div>

      <!-- BUTTONS -->
      <div class="ultra91-btn-group">

        <a href="https://wa.me/919994751079" target="_blank" class="ultra91-btn ultra91-btn-green">
          <i class="fa-brands fa-whatsapp"></i>
          Chat on WhatsApp
        </a>

        <a href="#itinerary-section" id="viewItineraryBtn" class="ultra91-btn ultra91-btn-blue">
          <i class="fa-solid fa-route"></i>
          View Packages
        </a>

      </div>

      <!-- DISCLAIMER -->
      <p style="font-size:12px; color:#fff; margin-top:12px; line-height:1.6;">
        We are an independent private travel company. Temple darshan schedules, tickets and eligibility are managed only through official authorities.
      </p>

    </div>

    <!-- RIGHT FORM -->
    <div class="srivani-form-wrapper-unique">

      <h3 class="srivani-form-title-unique">Quick Enquiry</h3>

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

        <textarea id="hf-message" name="message" rows="4" placeholder="Travel Requirement (Optional)"></textarea>
        <div class="field-error" data-for="hf-message"></div>

        <div class="srivani-captcha-question" id="hf-captcha-question">
          <?= htmlspecialchars($captcha_question, ENT_QUOTES, 'UTF-8') ?>
        </div>

        <input id="hf-captcha" type="text" name="answer" placeholder="Captcha Answer">
        <div class="field-error" data-for="hf-captcha"></div>

        <button type="submit" class="srivani-submit-btn-unique">
          Get Travel Details
        </button>

        <p style="font-size:12px; color:#777; margin-top:8px; text-align:center;">
          Secure enquiry form. We respond with travel package details only.
        </p>

      </form>

    </div>

  </div>

</section>



<!-- Chennai to Tirupati Travel Package for NRI -->
<section class="novyra-srivani-shell">
  <div class="novyra-srivani-card">

    <h2 class="novyra-srivani-heading">
      Chennai to Tirupati Travel Package for NRI Devotees
      <span>(Malaysia, Singapore, Sri Lanka, UK)</span>
    </h2>

    <div class="novyra-srivani-divider"></div>

    <p class="novyra-srivani-para">
      <i class="fas fa-plane-arrival"></i>
      Travelling to Chennai from Malaysia, Singapore, Sri Lanka or the UK and planning a Tirupati visit?
    </p>

    <p class="novyra-srivani-para">
      <i class="fas fa-car"></i>
      We provide complete Chennai to Tirupati pilgrimage travel packages including airport pickup, private car transport, hotel stay options, trip scheduling and return drop support.
    </p>

    <p class="novyra-srivani-para">
      <i class="fas fa-users"></i>
      Suitable for families, senior citizens, solo travellers and international devotees looking for a comfortable Tirupati journey.
    </p>

    <p class="novyra-srivani-special">
      <i class="fas fa-star"></i>
      Dedicated support for NRI travellers with smooth coordination from Chennai arrival until trip completion.
    </p>

    <p style="font-size:12px; color:#666; margin-top:15px; line-height:1.6;">
      We are an independent private travel company. Temple darshan schedules, tickets and eligibility are managed only through official authorities.
    </p>

  </div>
</section>


 <!-- What is Included in Chennai to Tirupati Travel Package -->
<section class="srivani-zenyx-wrapper">
  <div class="srivani-zenyx-container">

    <h2 class="srivani-zenyx-title">
      What is Included in Chennai to Tirupati Travel Package
    </h2>

    <div class="srivani-zenyx-grid">

      <div class="srivani-zenyx-card">
        <i class="fas fa-hotel"></i>
        <p>Hotel Stay Options with Breakfast (as per package selected)</p>
      </div>

      <div class="srivani-zenyx-card">
        <i class="fas fa-car"></i>
        <p>Private AC Car Travel (Sedan / SUV / Premium Vehicle Options)</p>
      </div>

      <div class="srivani-zenyx-card">
        <i class="fas fa-road"></i>
        <p>Permit, Fuel and Driver Charges</p>
      </div>

      <div class="srivani-zenyx-card">
        <i class="fas fa-receipt"></i>
        <p>Toll, Parking and Route Charges</p>
      </div>

      <div class="srivani-zenyx-card">
        <i class="fas fa-user-tie"></i>
        <p>Driver Assistance and Trip Guidance</p>
      </div>

      <div class="srivani-zenyx-card">
        <i class="fas fa-gopuram"></i>
        <p>Local Temple Visit Support in Tirupati (time permitting)</p>
      </div>

    </div>

    <p style="font-size:12px; color:#666; margin-top:18px; text-align:center; line-height:1.6;">
      We are an independent private travel company. Temple darshan schedules, tickets and eligibility are managed only through official authorities.
    </p>

  </div>
</section>


  <!-- Chennai to Tirupati Travel Package Itinerary (2 Days) -->
<section id="itinerary-section" class="Chennai-to-Tirupati-Srivani-VIP-Darshan-Itinerary-two-days">

  <div class="Chennai-to-Tirupati-Srivani-VIP-Darshan-Itinerary-two-days-container">

    <h2 class="Chennai-to-Tirupati-Srivani-VIP-Darshan-Itinerary-two-days-title">
      Chennai to Tirupati Travel Package Itinerary (2 Days)
    </h2>

    <p class="Chennai-to-Tirupati-Srivani-VIP-Darshan-Itinerary-two-days-subtitle">
      Travel schedule can be adjusted based on your arrival time, temple schedules, crowd conditions and preferred return plan.
    </p>

    <div class="Chennai-to-Tirupati-Srivani-VIP-Darshan-Itinerary-two-days-timeline">

      <!-- Day 1 -->
      <div class="Chennai-to-Tirupati-Srivani-VIP-Darshan-Itinerary-two-days-item">

        <div class="Chennai-to-Tirupati-Srivani-VIP-Darshan-Itinerary-two-days-dot"></div>

        <div class="Chennai-to-Tirupati-Srivani-VIP-Darshan-Itinerary-two-days-content">

          <h3 class="Chennai-to-Tirupati-Srivani-VIP-Darshan-Itinerary-two-days-day">
            Day 1 – Arrival, Travel & Local Visit
          </h3>

          <ul>

            <li>
              <i class="fa fa-plane"></i>
              Pickup from Chennai Airport, hotel or residence and travel to Tirupati by private AC car (approximately 4–5 hours).
            </li>

            <li>
              <i class="fa fa-gopuram"></i>
              Visit local temples in Tirupati based on available time and traveller preference.
            </li>

            <li>
              <i class="fa fa-hotel"></i>
              Hotel check-in at selected accommodation (3★ / 4★ / 5★ options subject to package choice).
            </li>

            <li>
              <i class="fa fa-clock"></i>
              Evening free time for rest, local sightseeing or temple visit planning.
            </li>

            <li>
              <i class="fa fa-bed"></i>
              Overnight stay at hotel.
            </li>

          </ul>

        </div>
      </div>

      <!-- Day 2 -->
      <div class="Chennai-to-Tirupati-Srivani-VIP-Darshan-Itinerary-two-days-item">

        <div class="Chennai-to-Tirupati-Srivani-VIP-Darshan-Itinerary-two-days-dot"></div>

        <div class="Chennai-to-Tirupati-Srivani-VIP-Darshan-Itinerary-two-days-content">

          <h3 class="Chennai-to-Tirupati-Srivani-VIP-Darshan-Itinerary-two-days-day">
            Day 2 – Temple Visit & Return Journey
          </h3>

          <ul>

            <li>
              <i class="fa fa-coffee"></i>
              Breakfast at hotel.
            </li>

            <li>
              <i class="fa fa-sign-out-alt"></i>
              Hotel checkout based on travel schedule.
            </li>

            <li>
              <i class="fa fa-place-of-worship"></i>
              Continue temple visit or local sightseeing based on official schedules and available time.
            </li>

            <li>
              <i class="fa fa-car"></i>
              Return drop to Chennai Airport, hotel or residence after trip completion.
            </li>

            <li>
              <i class="fa fa-smile"></i>
              Complete your pilgrimage journey with comfortable return support.
            </li>

          </ul>

        </div>
      </div>

    </div>

    <p style="font-size:12px; color:#666; margin-top:18px; text-align:center; line-height:1.6;">
      We are an independent private travel company. Temple darshan schedules, tickets and eligibility are managed only through official authorities.
    </p>

  </div>

</section>
        
  <!-- Chennai to Tirupati Travel Package Price for NRI Devotees -->
<section class="zxv-prodarshan-wrapper-98123">

  <div class="zxv-prodarshan-container-98123">

    <h2 class="zxv-main-heading-98123">
      Chennai to Tirupati Travel Package Price for NRI Devotees
    </h2>

    <p class="zxv-subtext-98123">
      Looking for Chennai to Tirupati package pricing from Chennai Airport or city pickup? Contact us for the latest travel plans and package options.
    </p>

    <p class="zxv-highlight-line-98123">
      Choose your package based on number of travellers, vehicle preference and hotel category.
    </p>

    <p class="zxv-description-line-98123">
      Complete pilgrimage travel packages with private car transport, hotel stay options, trip coordination and return drop support.
    </p>

    <!-- Sedan -->
    <div class="zxv-package-block-98123">

      <h3 class="zxv-package-title-98123">
        <span></span> Sedan Car Package – Ideal for 1 to 4 Travellers
      </h3>

      <div class="zxv-table-box-98123">

        <table>
          <thead>
            <tr>
              <th>Travellers</th>
              <th>Vehicle</th>
              <th>Hotel</th>
              <th>Room Type</th>
              <th>Starting Price</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>1 Traveller</td>
              <td>Sedan</td>
              <td>3 Star</td>
              <td>1 Room</td>
              <td class="zxv-price-98123">₹11,500</td>
            </tr>

            <tr>
              <td>2 Travellers</td>
              <td>Sedan</td>
              <td>3 Star</td>
              <td>1 Room</td>
              <td class="zxv-price-98123">₹12,500</td>
            </tr>

            <tr>
              <td>3 Travellers</td>
              <td>Sedan</td>
              <td>3 Star</td>
              <td>1 Triple Room</td>
              <td class="zxv-price-98123">₹14,000</td>
            </tr>

            <tr>
              <td>4 Travellers</td>
              <td>Sedan</td>
              <td>3 Star</td>
              <td>2 Rooms</td>
              <td class="zxv-price-98123">₹15,000</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>

    <!-- SUV -->
    <div class="zxv-package-block-98123">

      <h3 class="zxv-package-title-98123">
        <span></span> SUV / Innova Package – Comfortable for Families & Groups
      </h3>

      <div class="zxv-table-box-98123">

        <table>
          <thead>
            <tr>
              <th>Travellers</th>
              <th>Vehicle</th>
              <th>Hotel</th>
              <th>Room Type</th>
              <th>Starting Price</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>1 Traveller</td>
              <td>SUV</td>
              <td>3 Star</td>
              <td>1 Room</td>
              <td class="zxv-price-98123">₹12,500</td>
            </tr>

            <tr>
              <td>2 Travellers</td>
              <td>SUV</td>
              <td>3 Star</td>
              <td>1 Room</td>
              <td class="zxv-price-98123">₹14,000</td>
            </tr>

            <tr>
              <td>3 Travellers</td>
              <td>SUV</td>
              <td>3 Star</td>
              <td>1 Triple Room</td>
              <td class="zxv-price-98123">₹15,000</td>
            </tr>

            <tr>
              <td>4 Travellers</td>
              <td>SUV</td>
              <td>3 Star</td>
              <td>2 Rooms</td>
              <td class="zxv-price-98123">₹17,500</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>

    <!-- Notes -->
    <div class="zxv-notes-box-98123">

      <h4>Important Pricing Notes:</h4>

      <ul>
        <li><i class="fa-solid fa-circle-check"></i> Pricing is based on total travellers per vehicle</li>
        <li><i class="fa-solid fa-circle-check"></i> Final package cost may vary based on hotel category, travel date and pickup location</li>
        <li><i class="fa-solid fa-circle-check"></i> Extra charges may apply for additional bed or premium stay requests</li>
        <li><i class="fa-solid fa-circle-check"></i> Custom family and group packages available</li>
        <li><i class="fa-solid fa-circle-check"></i> Contact us on WhatsApp for updated package quote</li>
      </ul>

    </div>

    <p class="zxv-footer-line-98123">
      <i class="fa-solid fa-hand-point-right"></i>
      Temple darshan schedules, tickets and eligibility are managed only through official authorities.
    </p>

  </div>

</section>


    <!-- Chennai to Tirupati Travel Information & Package Exclusions -->
<section class="nxp9-split-sec">

  <div class="nxp9-container">

    <!-- LEFT SIDE -->
    <div class="nxp9-left">

      <h2 class="nxp9-heading">
        Chennai to Tirupati Travel Planning from Chennai
      </h2>

      <p class="nxp9-text">
        Planning a Tirupati visit from Chennai for NRI or international travellers?
      </p>

      <p class="nxp9-text">
        We provide private car transport, hotel stay options, itinerary planning and complete trip coordination for a smooth pilgrimage journey.
      </p>

      <p class="nxp9-text">
        Temple darshan schedules, ticket availability and eligibility are managed only through official authorities.
      </p>

    </div>

    <!-- RIGHT SIDE -->
    <div class="nxp9-right">

      <div class="nxp9-card">

        <h3 class="nxp9-title">
          Package Exclusions
        </h3>

        <div class="nxp9-list">

          <div class="nxp9-item">
            <span class="nxp9-icon"><i>✕</i></span>
            <p>Personal Expenses</p>
          </div>

          <div class="nxp9-item">
            <span class="nxp9-icon"><i>✕</i></span>
            <p>Temple tickets, donations or official entry charges (if applicable)</p>
          </div>

          <div class="nxp9-item">
            <span class="nxp9-icon"><i>✕</i></span>
            <p>Extra Food Orders</p>
          </div>

          <div class="nxp9-item">
            <span class="nxp9-icon"><i>✕</i></span>
            <p>Optional Attraction / Temple Entry Fees (if any)</p>
          </div>

          <div class="nxp9-item">
            <span class="nxp9-icon"><i>✕</i></span>
            <p>Extra KM Charges & Late Night Driving Charges (if applicable)</p>
          </div>

          <div class="nxp9-item">
            <span class="nxp9-icon"><i>✕</i></span>
            <p>Flight Tickets</p>
          </div>

        </div>

      </div>

    </div>

  </div>

</section>


    <!-- Chennai to Tirupati Travel Assistance from Chennai -->
<section class="zxq9-srivani-vip-wrap">

  <div class="zxq9-srivani-vip-box">

    <h2 class="zxq9-srivani-vip-title">
      <i class="fas fa-gopuram"></i>
      Plan Your Chennai to Tirupati Travel Package
    </h2>

    <p style="font-size:16px; line-height:1.7; margin:15px 0 22px; color:#555;">
      Travelling from abroad or within India and planning a Tirupati visit from Chennai?  
      Contact us for private car travel, airport pickup, hotel stay options and complete pilgrimage trip support.
    </p>

    <div class="zxq9-srivani-vip-btn-group">

      <a href="https://wa.me/919994751079?text=Hi,%20I%20am%20planning%20a%20Tirupati%20trip%20from%20Chennai.%0A%0APlease%20share%20travel%20package%20details,%20vehicle%20options,%20hotel%20stay%20and%20itinerary.%0A%0ATravel%20Details:%0A*%20Expected%20Travel%20Date:%0A*%20Number%20of%20Persons:%0A*%20Pickup:%20Chennai%20Airport%20/%20Hotel%20/%20Home" 
         target="_blank" 
         class="zxq9-btn zxq9-btn-primary">

        <i class="fa-brands fa-whatsapp"></i>
        Get Travel Details on WhatsApp
      </a>

      <a href="https://wa.me/919994751079" 
         target="_blank" 
         class="zxq9-btn zxq9-btn-success">

        <i class="fa-brands fa-whatsapp"></i>
        Chat on WhatsApp
      </a>

    </div>

    <p style="font-size:12px; color:#777; margin-top:18px; line-height:1.6;">
      We are an independent private travel company. Temple darshan schedules, tickets and eligibility are managed only through official authorities.
    </p>

  </div>

</section>


<!-- How to Plan Chennai to Tirupati Travel Package -->
<section class="qzx-srivani-flow-sec">

  <div class="qzx-srivani-flow-container">

    <h2 class="qzx-srivani-flow-title">
      <i class="fas fa-route"></i>
      How to Plan Your Chennai to Tirupati Trip
    </h2>

    <div class="qzx-srivani-flow-grid">

      <!-- STEP 1 -->
      <div class="qzx-srivani-step-box">
        <div class="qzx-step-circle">1</div>
        <p>Contact us on WhatsApp or submit your enquiry form</p>
      </div>

      <!-- STEP 2 -->
      <div class="qzx-srivani-step-box">
        <div class="qzx-step-circle">2</div>
        <p>Share your travel date, pickup point and number of travellers</p>
      </div>

      <!-- STEP 3 -->
      <div class="qzx-srivani-step-box">
        <div class="qzx-step-circle">3</div>
        <p>Receive package options with vehicle, hotel stay and itinerary details</p>
      </div>

      <!-- STEP 4 -->
      <div class="qzx-srivani-step-box">
        <div class="qzx-step-circle">4</div>
        <p>Confirm your trip and enjoy complete travel support until return drop</p>
      </div>

    </div>

    <p style="font-size:12px; color:#777; margin-top:18px; line-height:1.6; text-align:center;">
      We are an independent private travel company. Temple darshan schedules, tickets and eligibility are managed only through official authorities.
    </p>

  </div>

</section>



  <!-- Why NRI Travellers Choose Our Chennai to Tirupati Package -->
<section class="zxq-nri-tirupati-sec">

  <div class="zxq-nri-container">

    <h2 class="zxq-nri-title">
      <i class="fas fa-plane-arrival"></i>
      Why NRI Travellers Choose Our Chennai to Tirupati Package
    </h2>

    <div class="zxq-nri-grid">

      <div class="zxq-nri-card">
        <div class="zxq-nri-icon"><i class="fas fa-globe"></i></div>
        <p>Dedicated support for NRI and international travellers</p>
      </div>

      <div class="zxq-nri-card">
        <div class="zxq-nri-icon"><i class="fas fa-comments"></i></div>
        <p>Clear communication before and during the trip</p>
      </div>

      <div class="zxq-nri-card">
        <div class="zxq-nri-icon"><i class="fas fa-taxi"></i></div>
        <p>Flexible pickup from Chennai Airport, hotel or residence</p>
      </div>

      <div class="zxq-nri-card">
        <div class="zxq-nri-icon"><i class="fas fa-star"></i></div>
        <p>Trusted service backed by genuine customer experiences</p>
      </div>

      <div class="zxq-nri-card">
        <div class="zxq-nri-icon"><i class="fas fa-route"></i></div>
        <p>Smooth travel planning with hotel and return support</p>
      </div>

    </div>

    <div class="zxq-nri-footer">
      <i class="fas fa-hands-praying"></i>
      Comfortable Tirupati pilgrimage travel package from Chennai for overseas visitors
    </div>

    <p style="font-size:12px; color:#777; margin-top:15px; line-height:1.6; text-align:center;">
      We are an independent private travel company. Temple darshan schedules, tickets and eligibility are managed only through official authorities.
    </p>

  </div>

</section>

    <!-- Why NRI Devotees Choose Our Tirupati Darshan Package -->
    <section class="zx91-testimonial-ultra-wrap">

      <div class="zx91-testimonial-ultra-container">

        <!-- TOP TRUST POINTS -->
        <div class="zx91-trust-badges">
          <div class="zx91-badge">
            <i class="fas fa-globe-asia"></i>
            Trusted by devotees from Singapore, Malaysia & Sri Lanka
          </div>
          <div class="zx91-badge">
            <i class="fas fa-check-circle"></i>
            500+ successful darshan trips completed
          </div>
        </div>

        <!-- TITLE -->
        <h2 class="zx91-testimonial-title">
          <i class="fas fa-star"></i>
          What Our Devotees Say
        </h2>

        <p class="zx91-subtitle">
          Trusted by International Travelers
        </p>

        <!-- TESTIMONIAL GRID -->
        <div class="zx91-testimonial-grid">

          <!-- CARD 1 -->
          <div class="zx91-card">
            <div class="zx91-stars">★★★★★</div>
            <p class="zx91-text">
              "One of the best darshan experiences I’ve had. Everything was arranged smoothly, and the team handled even last-minute changes due to my flight delay. Highly professional and flexible service."
            </p>
            <div class="zx91-user">
              <strong>Mallikarjuna Kaveti</strong>
              <span>International Devotee</span>
            </div>
          </div>

          <!-- CARD 2 -->
          <div class="zx91-card">
            <div class="zx91-stars">★★★★★</div>
            <p class="zx91-text">
              "Excellent service and very reliable. The coordination was perfect from start to finish. I strongly recommend this package for families and group travelers."
            </p>
            <div class="zx91-user">
              <strong>Muthuraman</strong>
              <span>Singapore </span>
            </div>
          </div>

          <!-- CARD 3 -->
          <div class="zx91-card">
            <div class="zx91-stars">★★★★★</div>
            <p class="zx91-text">
              "Best travel service for Tirupati darshan. Everything was well organized and hassle-free. Highly recommended for NRI devotees."
            </p>
            <div class="zx91-user">
              <strong>Sharmila Manogaran</strong>
              <span>UAE / NRI Devotee</span>
            </div>
          </div>

        </div>

      </div>

    </section>


    <!-- Travel Support for Malaysia, Singapore & Sri Lanka Devotees -->
    <section class="zxqv-nri-support-wrap-83921">
      <div class="zxqv-nri-container-83921">

        <h2 class="zxqv-nri-title-83921">
          Travel Support for Malaysia, Singapore & Sri Lanka Devotees
        </h2>

        <p class="zxqv-nri-subtitle-83921">
          We understand the needs of NRI devotees traveling from Malaysia, Singapore, and Sri Lanka to Chennai for Tirupati darshan.
        </p>

        <div class="zxqv-nri-feature-row-83921">

          <div class="zxqv-nri-feature-card-83921">
            <i class="fa-solid fa-circle-check"></i>
            <span>Assistance for first-time Tirupati visitors</span>
          </div>

          <div class="zxqv-nri-feature-card-83921">
            <i class="fa-solid fa-circle-check"></i>
            <span>Guidance on darshan process</span>
          </div>

          <div class="zxqv-nri-feature-card-83921">
            <i class="fa-solid fa-circle-check"></i>
            <span>Flexible travel timing based on arrival</span>
          </div>

          <div class="zxqv-nri-feature-card-83921">
            <i class="fa-solid fa-circle-check"></i>
            <span>End-to-end coordination from Chennai</span>
          </div>

        </div>

      </div>
    </section>


   <!-- Chennai to Tirupati Travel Package from Chennai for NRI Travellers -->
<section class="nxr-srivani-nri-sec-59173">

  <div class="nxr-srivani-nri-box-59173">

    <h2 class="nxr-srivani-nri-title-59173">
      Chennai to Tirupati Travel Package for NRI Travellers
    </h2>

    <div class="nxr-srivani-nri-content-59173">

      <p class="nxr-srivani-nri-desc-59173">
        We provide complete Chennai to Tirupati pilgrimage travel packages for NRI and international travellers, including visitors from Malaysia, Singapore, Sri Lanka, the UK and other countries. Our service is suitable for:
      </p>

      <ul class="nxr-srivani-nri-list-59173">

        <li><i class="fa-solid fa-diamond"></i> Tirupati travel package from Chennai for overseas visitors</li>

        <li><i class="fa-solid fa-diamond"></i> Chennai Airport pickup and Tirupati private car travel</li>

        <li><i class="fa-solid fa-diamond"></i> Family Tirupati package with hotel stay options</li>

        <li><i class="fa-solid fa-diamond"></i> One day and two day Tirupati trip plans from Chennai</li>

        <li><i class="fa-solid fa-diamond"></i> Tirupati travel support for Malaysia and Singapore travellers</li>

        <li><i class="fa-solid fa-diamond"></i> Comfortable Tirupati package for Sri Lanka and UK visitors</li>

        <li><i class="fa-solid fa-diamond"></i> Private pilgrimage package with return drop support</li>

      </ul>

      <p style="font-size:12px; color:#777; margin-top:15px; line-height:1.6;">
        We are an independent private travel company. Temple darshan schedules, tickets and eligibility are managed only through official authorities.
      </p>

    </div>

  </div>

</section>

  <!-- Frequently Asked Questions – NRI Chennai to Tirupati Travel Package -->
<section class="xynr-faq-shell-77291">

  <div class="xynr-faq-container-77291">

    <h2 class="xynr-faq-heading-77291">
      Frequently Asked Questions – NRI Chennai to Tirupati Travel Package
    </h2>

    <p class="xynr-faq-subtext-77291">
      Our Chennai to Tirupati service is designed for NRI and international travellers looking for a smooth pilgrimage trip with private transport, hotel stay options and dedicated travel support.
    </p>

    <!-- FAQ ITEM -->
    <div class="xynr-faq-item-77291">
      <button class="xynr-faq-question-77291">
        <i class="fa-solid fa-circle-question"></i>
        Can NRI travellers use this Chennai to Tirupati travel package?
      </button>
      <div class="xynr-faq-answer-77291">
        Yes, our service is suitable for NRI devotees and international travellers visiting Chennai and planning a Tirupati trip.
      </div>
    </div>

    <div class="xynr-faq-item-77291">
      <button class="xynr-faq-question-77291">
        <i class="fa-solid fa-circle-question"></i>
        What is included in the package?
      </button>
      <div class="xynr-faq-answer-77291">
        Packages may include Chennai pickup, private AC car travel, hotel stay options, itinerary planning and return drop support depending on the plan selected.
      </div>
    </div>

    <div class="xynr-faq-item-77291">
      <button class="xynr-faq-question-77291">
        <i class="fa-solid fa-circle-question"></i>
        How can I get package pricing?
      </button>
      <div class="xynr-faq-answer-77291">
        Pricing depends on travel date, number of travellers, vehicle type and hotel preference. Contact us on WhatsApp or enquiry form for the latest quote.
      </div>
    </div>

    <div class="xynr-faq-item-77291">
      <button class="xynr-faq-question-77291">
        <i class="fa-solid fa-circle-question"></i>
        How do I confirm my Tirupati trip?
      </button>
      <div class="xynr-faq-answer-77291">
        Share your travel date, pickup point and number of travellers. Our team will provide package options and next steps for confirmation.
      </div>
    </div>

    <div class="xynr-faq-item-77291">
      <button class="xynr-faq-question-77291">
        <i class="fa-solid fa-circle-question"></i>
        How long does the Chennai to Tirupati trip take?
      </button>
      <div class="xynr-faq-answer-77291">
        Most travellers choose a one day or two day plan depending on arrival schedule, hotel stay preference and return timing.
      </div>
    </div>

    <div class="xynr-faq-item-77291">
      <button class="xynr-faq-question-77291">
        <i class="fa-solid fa-circle-question"></i>
        Do you provide Chennai airport pickup?
      </button>
      <div class="xynr-faq-answer-77291">
        Yes, pickup can be arranged from Chennai International Airport, hotels or residences based on your travel plan.
      </div>
    </div>

    <div class="xynr-faq-item-77291">
      <button class="xynr-faq-question-77291">
        <i class="fa-solid fa-circle-question"></i>
        How are temple darshan tickets handled?
      </button>
      <div class="xynr-faq-answer-77291">
            As part of our complete travel package, when requested by the customer, our team can check ticket availability on the official temple website and assist in attempting the booking process using the customer’s required proof details. Ticket confirmation and availability are controlled only by the official authorities.
      </div>
    </div>

  </div>

</section>
    <!-- JS -->
    <script>
      const faqItems = document.querySelectorAll(".xynr-faq-item-77291");

      faqItems.forEach(item => {
        const btn = item.querySelector(".xynr-faq-question-77291");

        btn.addEventListener("click", () => {
          item.classList.toggle("active");

          faqItems.forEach(other => {
            if (other !== item) {
              other.classList.remove("active");
            }
          });
        });
      });
    </script>


   <!-- Plan Your Chennai to Tirupati Travel Package Today -->
<section class="zrnx-srivani-cta-wrap-91827">

  <div class="zrnx-srivani-cta-container-91827">

    <!-- Heading -->
    <h2 class="zrnx-srivani-cta-title-91827">
      Plan Your Chennai to Tirupati Travel Package Today
    </h2>

    <!-- Subtitle -->
    <p class="zrnx-srivani-cta-subtitle-91827">
      Dedicated travel support for NRI devotees and international travellers visiting Chennai. Get private car, hotel stay and Tirupati trip planning assistance.
    </p>

    <!-- Buttons -->
    <div class="zrnx-srivani-cta-btns-91827">

      <a href="https://wa.me/919994751079?text=Hi,%20I%20am%20planning%20a%20Tirupati%20trip%20from%20Chennai.%0A%0APlease%20share%20travel%20package%20details,%20vehicle%20options,%20hotel%20stay%20and%20itinerary.%0A%0ATravel%20Details:%0A*%20Expected%20Travel%20Date:%0A*%20Number%20of%20Persons:%0A*%20Arrival:%20Chennai%20Airport%20/%20Hotel%20/%20Home"
         target="_blank"
         class="zrnx-btn-primary-91827">

        <i class="fa-brands fa-whatsapp"></i>
        Get Travel Details on WhatsApp
      </a>

      <a href="https://wa.me/919994751079"
         target="_blank"
         class="zrnx-btn-secondary-91827">

        <i class="fa-brands fa-whatsapp"></i>
        Chat on WhatsApp
      </a>

    </div>

    <!-- Points -->
    <div class="zrnx-srivani-cta-points-91827">

      <p>
        <i class="fa-solid fa-check"></i>
        Fast WhatsApp response during working hours
      </p>

      <p>
        <i class="fa-solid fa-check"></i>
        Trusted by domestic and international travellers
      </p>

      <p>
        <i class="fa-solid fa-check"></i>
        Custom family and group package options
      </p>

    </div>

    <!-- Disclaimer -->
    <p style="font-size:12px; color:#777; margin-top:18px; line-height:1.6;">
      We are an independent private travel company. Temple darshan schedules, tickets and eligibility are managed only through official authorities.
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
            Check Availability & Get Details
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


