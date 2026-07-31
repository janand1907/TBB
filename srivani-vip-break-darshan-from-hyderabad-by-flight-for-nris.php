<?php
ob_start();
// error_reporting(E_ALL) + error-log-config.php (display_errors=Off,
// log_errors=On): warnings are captured server-side in logs/php-errors.log
// instead of being silently discarded or shown to visitors.
error_reporting(E_ALL);
require_once __DIR__ . '/includes/error-log-config.php';
$pageTitle = 'Tirupati Package from Hyderabad by Flight for NRI Travellers';
$pageDescription = 'Tirupati package from Hyderabad by flight for NRI travellers with airport pickup, hotel stay, travel support and itinerary planning.';
$pageCanonical = 'https://www.tirupatibalajibooking.com/srivani-vip-break-darshan-from-hyderabad-by-flight-for-nris.php';
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
  "@type": "ProfessionalService",
  "name": "Hyderabad to Tirupati Travel Package for NRI Travellers",
  "url": "https://www.tirupatibalajibooking.com/srivani-vip-break-darshan-from-hyderabad-by-flight-for-nris.php",
  "description": "Travel package assistance for NRI and international travellers planning a Hyderabad to Tirupati trip with transport coordination, stay options and itinerary support.",
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
  "serviceType": "Tirupati Travel Assistance",
  "telephone": "+91-9994751079",
  "provider": {
    "@type": "Organization",
    "name": "Divine Balaji Travels",
    "url": "https://www.tirupatibalajibooking.com/",
    "logo": "https://www.tirupatibalajibooking.com/images/logo/logo.jpg"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Hyderabad to Tirupati Travel Package by Flight for NRI Travellers",
  "description": "Travel package for NRI and international travellers planning a Hyderabad to Tirupati trip with flight-based travel, local transfers, stay options and itinerary assistance.",
  "url": "https://www.tirupatibalajibooking.com/srivani-vip-break-darshan-from-hyderabad-by-flight-for-nris.php",
  "touristType": [
    "NRI Travellers",
    "International Travellers",
    "Family Travellers",
    "Pilgrimage Travellers"
  ],
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Travel from Hyderabad to Tirupati based on selected flight schedule"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Pickup, local transfer and stay as per selected package"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Temple visit subject to official schedules and eligibility"
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Return transfer and onward journey"
      }
    ]
  },
  "provider": {
    "@type": "Organization",
    "name": "Divine Balaji Travels",
    "url": "https://www.tirupatibalajibooking.com/",
    "logo": "https://www.tirupatibalajibooking.com/images/logo/logo.jpg"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [

    {
      "@type": "Question",
      "name": "How can I book a Tirupati package from Hyderabad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can contact us on WhatsApp or submit the enquiry form with your travel date and number of travellers."
      }
    },

    {
      "@type": "Question",
      "name": "Is this package suitable for NRI travellers?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, this package is suitable for NRI and international travellers visiting India."
      }
    },

    {
      "@type": "Question",
      "name": "How many days are usually required for the trip?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Many travellers choose a one day or two day plan depending on schedule and preferences."
      }
    },

    {
      "@type": "Question",
      "name": "Do you provide travel assistance?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Selected packages may include pickup support, hotel stay, transfers and itinerary coordination."
      }
    },

    {
      "@type": "Question",
      "name": "How is package pricing decided?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Pricing depends on travel date, number of travellers, hotel preference and transport choices."
      }
    },

    {
      "@type": "Question",
      "name": "Is this package suitable for short India visits?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, many travellers choose organized packages during short visits for better time management."
      }
    },

    {
      "@type": "Question",
      "name": "What is the best way to confirm travel details?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Share your preferred date and traveller count on WhatsApp to receive suitable package options."
      }
    },

    {
      "@type": "Question",
      "name": "What is included in the package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Inclusions vary by plan and may include travel, stay, transfers and trip coordination."
      }
    },

    {
      "@type": "Question",
      "name": "How early should I enquire?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Early enquiry is recommended for preferred travel dates, especially during busy seasons."
      }
    },

    {
      "@type": "Question",
      "name": "How are temple schedules or tickets handled?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Temple schedules, tickets and eligibility are managed only through official authorities and current procedures."
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
      "name": "Tirupati Travel Packages",
      "item": "https://www.tirupatibalajibooking.com/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Hyderabad to Tirupati Package for NRI Travellers",
      "item": "https://www.tirupatibalajibooking.com/srivani-vip-break-darshan-from-hyderabad-by-flight-for-nris.php"
    }
  ]
}
</script>
HTML;
include 'includes/header.php';
?>
<?php include 'includes/script.php'; ?>
  <!-- Banner Section -->
<section class="srivani-hero-wrapper-unique" style="background: url('assets/srivani-image/hyderabad-by-flight-nris/hero.webp') center/cover no-repeat;">

  <div class="srivani-container-unique">

    <!-- LEFT CONTENT -->
    <div class="zxv91-hero-left">

      <!-- TRUST BADGE -->
      <div class="zxv91-trust-badge">

        <!-- TOP LINE -->
        <div class="zxv91-badge-top">
          <span class="zxv91-stars">★★★★★</span>
          <span class="zxv91-rating">
            Rated 4.6★ based on customer reviews
          </span>
        </div>

        <!-- FEATURES -->
        <div class="zxv91-badge-features">

          <div>
            <i class="fa-solid fa-circle-check"></i>
            Chosen by travellers from overseas locations
          </div>

          <div>
            <i class="fa-solid fa-circle-check"></i>
            Dedicated support from arrival to trip completion
          </div>

        </div>

      </div>

      <!-- MAIN TITLE -->
      <h1 class="zxv91-main-title">
        Tirupati Package from Hyderabad by Flight for NRI Travellers
      </h1>

      <!-- DESCRIPTION -->
      <p class="zxv91-desc">
        Comfortable Tirupati travel package for NRI and international travellers starting from Hyderabad.
      </p>

      <!-- HIGHLIGHT TEXT -->
      <h2 class="zxv91-highlight">
        Includes flight-based travel planning, airport pickup support, hotel stay options and itinerary assistance.
      </h2>

      <!-- NOTE -->
      <p class="zxv91-bottom-note">
        ✔ Quick WhatsApp response &nbsp; | &nbsp; ✔ Flexible package plans &nbsp; | &nbsp; ✔ Trusted travel support
      </p>

      <!-- BUTTONS -->
      <div class="zxv91-btn-group">

        <a href="https://wa.me/919994751079?text=Hi,%20I%20am%20planning%20a%20Tirupati%20trip%20from%20overseas.%20Please%20share%20package%20details,%20travel%20options%20and%20itinerary."
           target="_blank"
           class="zxv91-btn zxv91-btn-red">

          <i class="fa-brands fa-whatsapp"></i>
          Get Package Details on WhatsApp
        </a>

        <a href="https://wa.me/919994751079"
           target="_blank"
           class="zxv91-btn zxv91-btn-green">

          <i class="fa-brands fa-whatsapp"></i>
          Chat on WhatsApp
        </a>

        <a href="#itinerary-section"
           id="viewItineraryBtn"
           class="zxv91-btn zxv91-btn-orange">

          <i class="fa-solid fa-route"></i>
          View Itinerary
        </a>

      </div>

      <!-- INFO ALERT -->
      <div class="zxv91-alert">
        Travel schedules may vary based on season, package plan and official procedures.
      </div>

      <!-- DISCLAIMER -->
      <p style="font-size:13px; color:#f1f1f1; margin-top:12px;">
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


    <section class="aurex-srivani-sec-9921">
  <div class="aurex-srivani-container-9921">

    <!-- Heading -->
    <h2 class="aurex-srivani-title-9921">
      Tirupati Package from Hyderabad by Flight for NRI Travellers
    </h2>

    <!-- Grid -->
    <div class="aurex-srivani-grid-9921">

      <div class="aurex-srivani-card-9921">
        <i class="fa-solid fa-plane-departure"></i>
        <p>
          Suitable for travellers who prefer flight-based travel from Hyderabad with convenient onward arrangements.
        </p>
      </div>

      <div class="aurex-srivani-card-9921">
        <i class="fa-solid fa-clock"></i>
        <p>
          Helps save travel time with planned schedules based on your selected package.
        </p>
      </div>

      <div class="aurex-srivani-card-9921">
        <i class="fa-solid fa-globe"></i>
        <p>
          Chosen by travellers from Malaysia, Singapore, Sri Lanka, the UK and other overseas locations.
        </p>
      </div>

      <div class="aurex-srivani-card-9921">
        <i class="fa-solid fa-handshake-angle"></i>
        <p>
          Package options may include airport pickup, hotel stay, transfers and itinerary support.
        </p>
      </div>

      <div class="aurex-srivani-card-9921">
        <i class="fa-solid fa-calendar-check"></i>
        <p>
          Early enquiry is recommended for preferred travel dates during busy seasons.
        </p>
      </div>

    </div>

    <!-- Note -->
    <p style="font-size:13px; color:#666; text-align:center; margin-top:18px;">
      Temple schedules, tickets and eligibility are managed only through official authorities.
    </p>

  </div>
</section>




   <section class="zorex-nri-fit-4821">
  <div class="zorex-nri-box-4821">

    <h2 class="zorex-nri-title-4821">
      <i class="fa-solid fa-plane"></i>
      IS THIS PACKAGE RIGHT FOR YOU?
    </h2>

    <div class="zorex-nri-card-4821">

      <p class="zorex-nri-subtitle-4821">
        This Hyderabad to Tirupati package may be suitable if:
      </p>

      <ul class="zorex-nri-list-4821">
        <li><i class="fa-solid fa-circle-check"></i> You are travelling from overseas</li>
        <li><i class="fa-solid fa-circle-check"></i> You have limited time during your India visit</li>
        <li><i class="fa-solid fa-circle-check"></i> You prefer flight travel over long road journeys</li>
        <li><i class="fa-solid fa-circle-check"></i> You prefer organized pickup and travel support</li>
        <li><i class="fa-solid fa-circle-check"></i> You want a planned and comfortable itinerary</li>
      </ul>

      <div class="zorex-nri-highlight-4821">
        <i class="fa-solid fa-hand-point-right"></i>
        Contact us to check suitable package options for your travel date.
      </div>

    </div>

  </div>
</section>



    <section class="virexa-srivani-sec-8412">
  <div class="virexa-srivani-wrap-8412">

    <h2 class="virexa-srivani-title-8412">
      <i class="fa-solid fa-star"></i>
      WHY CHOOSE OUR TIRUPATI PACKAGE
    </h2>

    <div class="virexa-srivani-grid-8412">

      <div class="virexa-srivani-item-8412">
        <i class="fa-solid fa-circle-check"></i>
        <p>Well-planned travel packages from Hyderabad with convenient coordination</p>
      </div>

      <div class="virexa-srivani-item-8412">
        <i class="fa-solid fa-circle-check"></i>
        <p>Suitable for Indian, NRI and international travellers</p>
      </div>

      <div class="virexa-srivani-item-8412">
        <i class="fa-solid fa-circle-check"></i>
        <p>Helpful support for travellers from Malaysia, Singapore, Sri Lanka and the UK</p>
      </div>

      <div class="virexa-srivani-item-8412">
        <i class="fa-solid fa-circle-check"></i>
        <p>Pickup, transfers and itinerary assistance based on selected plan</p>
      </div>

      <div class="virexa-srivani-item-8412">
        <i class="fa-solid fa-circle-check"></i>
        <p>Hotel stay options available in selected packages</p>
      </div>

      <div class="virexa-srivani-item-8412">
        <i class="fa-solid fa-circle-check"></i>
        <p>Clear communication before and during travel</p>
      </div>

      <div class="virexa-srivani-item-8412">
        <i class="fa-solid fa-circle-check"></i>
        <p>Comfortable travel arrangements for families and senior citizens</p>
      </div>

      <div class="virexa-srivani-item-8412">
        <i class="fa-solid fa-circle-check"></i>
        <p>Responsive assistance for travel enquiries and planning</p>
      </div>

    </div>

    <!-- Note -->
    <p style="font-size:13px; color:#666; text-align:center; margin-top:18px;">
      Temple schedules, tickets and eligibility are managed only through official authorities.
    </p>

  </div>
</section>


  <section class="veltrix-pricing-sec-7621">
  <div class="veltrix-pricing-wrap-7621">

    <h2 class="veltrix-title-7621">
      <i class="fa-solid fa-suitcase-rolling"></i>
      PACKAGE DETAILS & TRAVEL INFORMATION
    </h2>

    <p class="veltrix-subtitle-7621">
      Hyderabad to Tirupati travel package by flight – plan your trip with clear options and support
    </p>

    <div class="veltrix-grid-7621">

      <!-- LEFT -->
      <div class="veltrix-left-7621">

        <div class="veltrix-price-box-7621">

          <p class="veltrix-start-7621">
            <i class="fa-solid fa-circle-info"></i>
            Package options are shared based on your travel requirements.
          </p>

          <ul>
            <li><i class="fa-solid fa-plane"></i> Flight schedules depend on airline availability</li>
            <li><i class="fa-solid fa-hotel"></i> Hotel stay options available in selected plans</li>
            <li><i class="fa-solid fa-car"></i> Transfers and local travel based on itinerary</li>
          </ul>

          <p class="veltrix-highlight-7621">
            <i class="fa-solid fa-circle-check"></i>
            Clear package details with no hidden surprises
          </p>

        </div>

        <p class="veltrix-alert-7621">
          <i class="fa-solid fa-calendar-days"></i>
          Early enquiry is recommended for preferred travel dates during busy seasons.
        </p>

      </div>

      <!-- RIGHT -->
      <div class="veltrix-condition-box-7621">

        <p class="veltrix-cond-title-7621">
          <i class="fa-solid fa-hand-point-right"></i>
          Final package plan may depend on:
        </p>

        <ul>
          <li><i class="fa-solid fa-calendar-days"></i> Travel date</li>
          <li><i class="fa-solid fa-plane-departure"></i> Flight timing availability</li>
          <li><i class="fa-solid fa-users"></i> Number of travellers</li>
          <li><i class="fa-solid fa-bed"></i> Stay preference</li>
        </ul>

        <a href="https://wa.me/919994751079"
           target="_blank"
           class="veltrix-btn-7621">

          <i class="fa-brands fa-whatsapp"></i>
          Contact us on WhatsApp for package details
        </a>

      </div>

    </div>

    <!-- Note -->
    <p style="font-size:13px; color:#666; text-align:center; margin-top:18px;">
      Temple schedules, tickets and eligibility are managed only through official authorities.
    </p>

  </div>
</section>



 <section class="vx-detailed-itinerary-9001" id="itinerary-section">
  <div class="vx-container-9001">

    <!-- ROW 1: TITLE -->
    <div class="vx-title-wrap-9001">
      <h2 class="vx-title-9001">
        <i class="fa-solid fa-map-location-dot"></i> SAMPLE ITINERARY
      </h2>
    </div>

    <!-- ROW 2: GRID -->
    <div class="vx-grid-9001">

      <!-- LEFT BOX -->
      <div class="vx-card-9001">
        <h3 class="vx-card-title-9001">
          <i class="fa-solid fa-plane-departure"></i> Day 1: Hyderabad to Tirupati Travel
        </h3>

        <ul class="vx-list-9001">
          <li><i class="fa-solid fa-circle-check"></i> Arrival in Hyderabad or start from local pickup point</li>
          <li><i class="fa-solid fa-circle-check"></i> Travel to Tirupati based on selected route and schedule</li>
          <li><i class="fa-solid fa-circle-check"></i> Pickup and transfer assistance where applicable</li>
          <li><i class="fa-solid fa-circle-check"></i> Hotel check-in or refreshment stop based on plan</li>
          <li><i class="fa-solid fa-circle-check"></i> Preparation for next day temple visit</li>
        </ul>
      </div>

      <!-- RIGHT BOX -->
      <div class="vx-card-9001">
        <h3 class="vx-card-title-9001">
          <i class="fa-solid fa-gopuram"></i> Day 2: Temple Visit & Return
        </h3>

        <ul class="vx-list-9001">
          <li><i class="fa-solid fa-circle-check"></i> Morning transfer as per itinerary timing</li>
          <li><i class="fa-solid fa-circle-check"></i> Temple visit subject to official schedules and eligibility</li>
          <li><i class="fa-solid fa-circle-check"></i> Return to hotel, station or airport</li>
          <li><i class="fa-solid fa-circle-check"></i> Onward journey support as per selected package</li>
          <li><i class="fa-solid fa-circle-check"></i> Trip concludes comfortably</li>
        </ul>
      </div>

    </div>

    <!-- NOTE -->
    <p style="font-size:13px; color:#666; text-align:center; margin-top:18px;">
      Final itinerary may vary based on travel timing, package plan and official procedures.
    </p>

  </div>
</section>


 <section class="zxqv-pack-sec-99281">
  <div class="zxqv-pack-container-99281">

    <!-- LEFT -->
    <div class="zxqv-pack-box-99281">
      <h2 class="zxqv-pack-title-99281">
        <i class="fas fa-box"></i> PACKAGE INCLUSIONS
      </h2>

      <ul class="zxqv-pack-list-99281">
        <li><i class="fas fa-check"></i> Travel planning from Hyderabad to Tirupati</li>
        <li><i class="fas fa-check"></i> Pickup and drop support where applicable</li>
        <li><i class="fas fa-check"></i> Hotel stay options as per selected package</li>
        <li><i class="fas fa-check"></i> Local vehicle arrangements based on itinerary</li>
        <li><i class="fas fa-check"></i> Trip coordination and schedule assistance</li>
        <li><i class="fas fa-check"></i> Customer support during travel</li>
      </ul>
    </div>

    <!-- RIGHT -->
    <div class="zxqv-pack-box-99281">
      <h2 class="zxqv-pack-title-99281 zxqv-pack-title-red-99281">
        <i class="fas fa-times"></i> PACKAGE EXCLUSIONS
      </h2>

      <ul class="zxqv-pack-list-99281 zxqv-pack-list-red-99281">
        <li><i class="fas fa-times"></i> Personal expenses</li>
        <li><i class="fas fa-times"></i> Additional sightseeing outside itinerary</li>
        <li><i class="fas fa-times"></i> Premium upgrades unless confirmed</li>
        <li><i class="fas fa-times"></i> Meals unless specifically included</li>
        <li><i class="fas fa-times"></i> Items not mentioned in final package confirmation</li>
        <li><i class="fas fa-times"></i> Temple schedules, tickets and eligibility handled by official authorities</li>
      </ul>
    </div>

  </div>
</section>


 <section class="nrxv-nri-support-sec-55321">
  <div class="nrxv-nri-support-wrap-55321">

    <!-- TITLE -->
    <h2 class="nrxv-nri-title-55321">
      <i class="fas fa-globe-asia"></i>
      SUPPORT FOR NRI & INTERNATIONAL TRAVELLERS
    </h2>

    <!-- DESCRIPTION -->
    <p class="nrxv-nri-desc-55321">
      This Hyderabad to Tirupati package is suitable for NRI and international travellers looking for a comfortable and organized trip.
    </p>

    <p class="nrxv-nri-subtext-55321">
      We regularly assist travellers from:
    </p>

    <!-- COUNTRY TAGS -->
    <div class="nrxv-nri-tags-55321">
      <span>Malaysia</span>
      <span>Singapore</span>
      <span>Sri Lanka</span>
      <span>United Kingdom</span>
      <span>Other Countries</span>
    </div>

    <!-- SUPPORT BOX -->
    <div class="nrxv-nri-box-55321">
      <h3>Our team can help with:</h3>

      <ul>
        <li><i class="fas fa-check-circle"></i> Travel planning before arrival</li>
        <li><i class="fas fa-check-circle"></i> Pickup and itinerary coordination</li>
        <li><i class="fas fa-check-circle"></i> Hotel and local travel arrangements</li>
        <li><i class="fas fa-check-circle"></i> Guidance throughout the trip</li>
      </ul>
    </div>

    <!-- Note -->
    <p style="font-size:13px; color:#666; text-align:center; margin-top:18px;">
      Temple schedules, tickets and eligibility are managed only through official authorities.
    </p>

  </div>
</section>
  <section class="qxtr-testi-sec-99127">
    <div class="qxtr-testi-wrap-99127">

        <h2 class="qxtr-testi-title-99127">
        <i class="fas fa-comment-dots"></i> CUSTOMER TESTIMONIALS
        </h2>

        <div class="qxtr-testi-grid-99127">

        <!-- CARD 1 -->
        <div class="qxtr-testi-card-99127">
            <div class="qxtr-stars-99127">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            </div>
            <p class="qxtr-testi-text-99127">
            “Very smooth experience. Everything was arranged perfectly from airport pickup to darshan.”
            </p>
            <h4 class="qxtr-testi-name-99127">— Rajesh (Malaysia)</h4>
        </div>

        <!-- CARD 2 -->
        <div class="qxtr-testi-card-99127">
            <div class="qxtr-stars-99127">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            </div>
            <p class="qxtr-testi-text-99127">
            “Highly recommended for NRI travellers. No confusion, everything handled professionally.”
            </p>
            <h4 class="qxtr-testi-name-99127">— Kavitha (Singapore)</h4>
        </div>

        <!-- CARD 3 -->
        <div class="qxtr-testi-card-99127">
            <div class="qxtr-stars-99127">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            </div>
            <p class="qxtr-testi-text-99127">
            “Excellent coordination and quick response. Darshan was very well organized.”
            </p>
            <h4 class="qxtr-testi-name-99127">— Arun (UK)</h4>
        </div>

        </div>
    </div>
  </section>


<section class="vx-faq-9021">
  <div class="vx-faq-container-9021">

    <div class="vx-faq-title-9021">
      <h2><i class="fa-solid fa-circle-question"></i> Frequently Asked Questions</h2>
    </div>

    <div class="vx-faq-item-9021">
      <button class="vx-faq-question-9021">
        <i class="fa-solid fa-plus"></i>
        How can I book a Tirupati package from Hyderabad?
      </button>
      <div class="vx-faq-answer-9021">
        You can contact us on WhatsApp or submit the enquiry form with your travel date and number of travellers.
      </div>
    </div>

    <div class="vx-faq-item-9021">
      <button class="vx-faq-question-9021">
        <i class="fa-solid fa-plus"></i>
        Is this package suitable for NRI travellers?
      </button>
      <div class="vx-faq-answer-9021">
        Yes, this package is suitable for NRI and international travellers visiting India.
      </div>
    </div>

    <div class="vx-faq-item-9021">
      <button class="vx-faq-question-9021">
        <i class="fa-solid fa-plus"></i>
        How many days are usually required for the trip?
      </button>
      <div class="vx-faq-answer-9021">
        Many travellers choose a one day or two day plan depending on schedule and preferences.
      </div>
    </div>

    <div class="vx-faq-item-9021">
      <button class="vx-faq-question-9021">
        <i class="fa-solid fa-plus"></i>
        Do you provide travel assistance?
      </button>
      <div class="vx-faq-answer-9021">
        Selected packages may include pickup support, hotel stay, transfers and itinerary coordination.
      </div>
    </div>

    <div class="vx-faq-item-9021">
      <button class="vx-faq-question-9021">
        <i class="fa-solid fa-plus"></i>
        How is package pricing decided?
      </button>
      <div class="vx-faq-answer-9021">
        Pricing depends on travel date, number of travellers, hotel preference and transport choices.
      </div>
    </div>

    <div class="vx-faq-item-9021">
      <button class="vx-faq-question-9021">
        <i class="fa-solid fa-plus"></i>
        Is this package suitable for short India visits?
      </button>
      <div class="vx-faq-answer-9021">
        Yes, many travellers choose organized packages during short visits for better time management.
      </div>
    </div>

    <div class="vx-faq-item-9021">
      <button class="vx-faq-question-9021">
        <i class="fa-solid fa-plus"></i>
        What is the best way to confirm travel details?
      </button>
      <div class="vx-faq-answer-9021">
        Share your preferred date and traveller count on WhatsApp to receive suitable package options.
      </div>
    </div>

    <div class="vx-faq-item-9021">
      <button class="vx-faq-question-9021">
        <i class="fa-solid fa-plus"></i>
        What is included in the package?
      </button>
      <div class="vx-faq-answer-9021">
        Inclusions vary by plan and may include travel, stay, transfers and trip coordination.
      </div>
    </div>

    <div class="vx-faq-item-9021">
      <button class="vx-faq-question-9021">
        <i class="fa-solid fa-plus"></i>
        How early should I enquire?
      </button>
      <div class="vx-faq-answer-9021">
        Early enquiry is recommended for preferred travel dates, especially during busy seasons.
      </div>
    </div>

    <div class="vx-faq-item-9021">
      <button class="vx-faq-question-9021">
        <i class="fa-solid fa-plus"></i>
        How are temple schedules or tickets handled?
      </button>
      <div class="vx-faq-answer-9021">
        Temple schedules, tickets and eligibility are managed only through official authorities and current procedures.
      </div>
    </div>

  </div>
</section>
<script>
  document.querySelectorAll(".vx-faq-question-9021").forEach(btn => {
    btn.addEventListener("click", () => {
      const item = btn.parentElement;
      item.classList.toggle("active");

      document.querySelectorAll(".vx-faq-item-9021").forEach(other => {
        if (other !== item) other.classList.remove("active");
      });
    });
  });
</script>




<section class="zrva-srivani-sec-78214">
  <div class="zrva-srivani-wrap-78214">

    <!-- Heading -->
    <h2 class="zrva-srivani-title-78214">
      Hyderabad to Tirupati Package by Flight for NRI Travellers
    </h2>

    <!-- Description -->
    <p class="zrva-srivani-desc-78214">
      Plan your Tirupati trip from Hyderabad with package options that may include travel support, stay arrangements and itinerary assistance.
    </p>

    <!-- Highlight -->
    <div class="zrva-srivani-highlight-78214">
      Travel dates may fill quickly during weekends, holidays and festival seasons.
    </div>

    <!-- Buttons -->
    <div class="zrva-srivani-btns-78214">

      <a href="https://wa.me/919994751079?text=Hello,%20I%20need%20Hyderabad%20to%20Tirupati%20package%20details.%20Please%20share%20available%20options."
         target="_blank"
         class="zrva-btn-78214">
        <i class="fab fa-whatsapp"></i>
        Check Package Details
      </a>

     

    </div>

    <!-- Note -->
    <p style="font-size:13px; color:#666; text-align:center; margin-top:16px;">
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
  <script src="js/enquiry-forms.js"></script>




  <?php 
  include 'includes/footer.php'; 
  ?>



 