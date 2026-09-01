<?php
ob_start();
// error_reporting(E_ALL) + error-log-config.php (display_errors=Off,
// log_errors=On): warnings are captured server-side in logs/php-errors.log
// instead of being silently discarded or shown to visitors.
error_reporting(E_ALL);
require_once __DIR__ . '/includes/error-log-config.php';
$pageTitle = 'Hyderabad to Tirupati Travel Package by Flight for NRIs';
$pageDescription = 'Hyderabad to Tirupati NRI travel package by flight with itinerary support, travel assistance and guidance for foreign passport holders and international travellers.';
$pageCanonical = 'https://www.divinebalajitravels.com/tirupati-nri-darshan-package-from-hyderabad-by-flight.php';
$activeMenu = null;
$includeDefaultSchema = false;
$extraHeadLinks = <<<'HTML'
  <!-- Performance: hero background is a CSS background-image, invisible to
       the HTML preload scanner until CSSOM is built - preload it directly
       so the LCP image fetch starts immediately instead of after ~19 stylesheets. -->
  <link rel="preload" as="image" href="assets/srivani-image/hyderabad-by-flight-nris/hero.webp" fetchpriority="high">

   <!-- ✅ Google Font  -->
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"></noscript>

  <!-- ✅ Font Awesome -->
  <!-- fa6-subset.css: critical subset already inlined in header.php -->
  <link rel="preload" href="assets/css/modern/fa6-subset.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="assets/css/modern/fa6-subset.css"></noscript>

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/css/intlTelInput.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/css/intlTelInput.css"></noscript>

  <!-- Bootstrap Icon CSS -->
 
  <!--  Style CSS  -->
  <!-- modern/style.css: critical subset already inlined in header.php -->
  <link rel="preload" href="assets/css/modern/style.css?ver=2.4" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="assets/css/modern/style.css?ver=2.4"></noscript>
  

 

<link rel="preload" href="assets/css/legacy/shared-enquiry-form.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="assets/css/legacy/shared-enquiry-form.css"></noscript>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "Hyderabad to Tirupati Travel Assistance by Flight",
  "url": "https://www.divinebalajitravels.com/tirupati-nri-darshan-package-from-hyderabad-by-flight.php",
  "description": "Hyderabad to Tirupati travel assistance by flight with itinerary guidance, airport coordination, travel support and help for international travellers and passport holders.",
  "areaServed": [
    {
      "@type": "City",
      "name": "Hyderabad"
    },
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
  "serviceType": "Travel Planning and Transport Assistance",
  "telephone": "+91-9994751079"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Hyderabad to Tirupati Travel Package by Flight",
  "description": "Hyderabad to Tirupati travel package by flight with itinerary support, hotel options, local transfers and trip coordination assistance.",
  "touristType": [
    "Domestic Travellers",
    "International Travellers"
  ],
  "provider": {
    "@type": "Organization",
    "name": "Divine Balaji Travels",
    "url": "https://www.divinebalajitravels.com/tirupati-nri-darshan-package-from-hyderabad-by-flight.php",
    "logo": "https://www.divinebalajitravels.com/assets/images/logo/logo.jpg"
  },
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Hyderabad to Tirupati travel and hotel check-in"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Temple visit as per official procedures and local travel"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Return journey to Hyderabad"
      }
    ]
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
      "name": "How are travel package plans decided?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Travel plans usually depend on travel date, flight schedules, hotel preference and number of travellers."
      }
    },

    {
      "@type": "Question",
      "name": "Who can use this package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "This package is suitable for domestic travellers, international visitors and passport holders planning a Tirupati trip."
      }
    },

    {
      "@type": "Question",
      "name": "How can I enquire about Hyderabad to Tirupati travel?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can contact us on WhatsApp and share your travel date, number of persons and preferred schedule."
      }
    },

    {
      "@type": "Question",
      "name": "Is flight travel more convenient than road travel?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Many travellers prefer flight travel for quicker transit and reduced travel fatigue."
      }
    },

    {
      "@type": "Question",
      "name": "Are flight tickets included automatically?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Flight tickets depend on the selected plan and airline availability."
      }
    },

    {
      "@type": "Question",
      "name": "Can a same-day trip be planned?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Same-day plans may be possible depending on travel schedules, timing and overall itinerary."
      }
    },

    {
      "@type": "Question",
      "name": "Which airport is generally used for Tirupati travel?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Tirupati Airport is commonly used, with pickup and drop options available based on your package."
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
      "item": "https://www.divinebalajitravels.com/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Tirupati Travel Packages",
      "item": "https://www.divinebalajitravels.com/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Hyderabad to Tirupati Travel Package by Flight",
      "item": "https://www.divinebalajitravels.com/tirupati-nri-darshan-package-from-hyderabad-by-flight.php"
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
<section class="srivani-hero-wrapper-unique" style="background: url('assets/srivani-image/hyderabad-by-flight-nris/hero.webp') center/cover no-repeat;">

  <div class="srivani-container-unique">

    <!-- LEFT CONTENT -->
    <div class="zxv91-hero-left">

      <!-- TRUST BADGE -->
      <div class="zxv91-trust-badge">

        <div class="zxv91-badge-top">
          <span class="zxv91-stars">★★★★★</span>
          <span class="zxv91-rating">
            Rated 4.6 / 5 based on verified customer reviews
          </span>
        </div>

        <div class="zxv91-badge-features">
          <div>
            <i class="fa-solid fa-circle-check"></i>
            Preferred by international travellers | Responsive support | Clear guidance
          </div>
        </div>

      </div>

      <!-- MAIN TITLE -->
      <h1 class="zxv91-main-title">
        Hyderabad to Tirupati NRI Travel Package by Flight
      </h1>

      <!-- DESCRIPTION -->
      <p class="zxv91-desc" style="color:#facc15;">
        Travel package from Hyderabad to Tirupati by flight with itinerary support, airport coordination and guidance for international travellers and passport holders.
      </p>

      <!-- BENEFITS -->
      <p class="zxv91-bottom-note">
        ✔ Faster travel planning with flight route |
        ✔ Guidance for visitor procedures |
        ✔ Support from arrival to return journey
      </p>

      <!-- BUTTONS -->
      <div class="zxv91-btn-group">

        <a href="https://wa.me/919994751079?text=Hello,%20I%20need%20Hyderabad%20to%20Tirupati%20travel%20package%20details%20by%20flight.%20Please%20share%20plans,%20availability%20and%20journey%20details."
           target="_blank"
           class="zxv91-btn zxv91-btn-red">
          <i class="fa-brands fa-whatsapp"></i>
          Check Package Details
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

      <!-- ALERT -->
      <div class="zxv91-alert">
        Travel schedules may fill quickly during weekends and holidays. Advance enquiry recommended.
      </div>

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

        <textarea id="hf-message" name="message" rows="4" placeholder="Travel Details / Special Request"></textarea>
        <div class="field-error" data-for="hf-message"></div>

        <div class="srivani-captcha-question" id="hf-captcha-question"><?= htmlspecialchars($captcha_question, ENT_QUOTES, 'UTF-8') ?></div>

        <input id="hf-captcha" type="text" name="answer" placeholder="Captcha Answer">
        <div class="field-error" data-for="hf-captcha"></div>

        <button type="submit" class="srivani-submit-btn-unique">
          Submit Enquiry
        </button>

      </form>

      <p style="font-size:12px; color:#666; margin-top:10px; text-align:center;">
        Temple schedules, tickets and eligibility are managed only through official authorities.
      </p>

    </div>

  </div>

</section>



  <section class="vxn-nri-tirupati-sec-8841">
  <div class="vxn-nri-container-8841">

    <h2 class="vxn-nri-heading-8841">
      <i class="fa-solid fa-plane-departure"></i>
      Hyderabad to Tirupati Travel Package by Flight
    </h2>

    <p class="vxn-nri-text-8841">
      <i class="fa-solid fa-circle-check"></i>
      This Hyderabad to Tirupati flight travel package is a convenient option for travellers who prefer faster transit, planned schedules and a smooth temple visit.
    </p>

    <p class="vxn-nri-text-8841">
      <i class="fa-solid fa-passport"></i>
      Suitable for international travellers and passport holders visiting India, with guidance on travel procedures and required documents.
    </p>

    <p class="vxn-nri-text-8841">
      <i class="fa-solid fa-hand-holding-heart"></i>
      We provide end-to-end travel support including airport pickup, hotel stay options, Tirupati transfers, itinerary planning and coordination throughout the trip.
    </p>

  </div>
</section>
<section class="veltrix-nri-pro-8842">
  <div class="veltrix-nri-container-8842">

    <div class="veltrix-nri-grid-8842">

      <!-- LEFT SIDE -->
      <div class="veltrix-nri-left-8842">

        <h2 class="veltrix-nri-main-title-8842">
          <i class="fa-solid fa-plane-departure"></i>
          Hyderabad to Tirupati Flight Travel – Complete Details
        </h2>

        <p>
          This Hyderabad to Tirupati flight travel package includes journey planning, itinerary guidance, airport coordination and on-ground support at Tirupati.
        </p>

        <p>
          Suitable for international travellers, passport holders, OCI card holders and visitors looking for a comfortable and organized temple trip.
        </p>

        <p>
          Travel plans may include Hyderabad to Tirupati round-trip flight options, local transfers and assistance based on your selected schedule.
        </p>

      </div>

      <!-- RIGHT SIDE -->
      <div class="veltrix-nri-right-8842">

        <div class="veltrix-nri-box-8842">
          <h3>
            <i class="fa-solid fa-user-check"></i>
            Suitable Travellers
          </h3>

          <ul>
            <li><i class="fa-solid fa-check"></i> Foreign passport holders</li>
            <li><i class="fa-solid fa-check"></i> International visitors</li>
            <li><i class="fa-solid fa-check"></i> OCI / PIO card holders</li>
          </ul>
        </div>

        <div class="veltrix-nri-box-8842">
          <h3>
            <i class="fa-solid fa-file-lines"></i>
            Commonly Required Documents
          </h3>

          <ul>
            <li><i class="fa-solid fa-check"></i> Original passport</li>
            <li><i class="fa-solid fa-check"></i> Valid visa / OCI (if applicable)</li>
            <li><i class="fa-solid fa-check"></i> Travel proof when required</li>
          </ul>
        </div>

      </div>

    </div>

  </div>
</section>

   <section class="zyphora-nri-flight-sec-9912">
  <div class="zyphora-nri-flight-wrap-9912">

    <!-- MAIN HEADING -->
    <h2 class="zyphora-nri-flight-title-9912">
      <i class="fa-solid fa-plane-departure"></i>
      Why Choose Hyderabad to Tirupati Travel by Flight?
    </h2>

    <!-- GRID BOX -->
    <div class="zyphora-nri-flight-grid-9912">

      <div class="zyphora-nri-flight-card-9912">

        <h3>
          Hyderabad to Tirupati by flight is a convenient option for travellers who prefer faster transit, planned schedules and a smoother journey.
        </h3>

        <p>
          Suitable for international travellers, families, senior citizens and visitors looking for a comfortable temple trip with organized travel support.
        </p>

        <ul>
          <li><i class="fa-solid fa-check"></i> Faster travel compared with long road journeys</li>
          <li><i class="fa-solid fa-check"></i> Reduced travel fatigue and easier scheduling</li>
          <li><i class="fa-solid fa-check"></i> Airport pickup and local transfer options available</li>
          <li><i class="fa-solid fa-check"></i> Clear itinerary planning for a smooth visit</li>
          <li><i class="fa-solid fa-check"></i> Helpful for first-time visitors and family groups</li>
        </ul>

      </div>

    </div>

  </div>
</section>

    <section class="zyphora-nri-profile-7712">
        <div class="zyphora-nri-container-7712">

            <h2 class="zyphora-nri-heading-7712">
            <i class="fa-solid fa-users-viewfinder"></i>
            Who Typically Books This Package?
            </h2>

            <div class="zyphora-nri-grid-7712">

            <div class="zyphora-nri-card-7712">
                <i class="fa-solid fa-plane-arrival"></i>
                <p>NRIs visiting India for a few days</p>
            </div>

            <div class="zyphora-nri-card-7712">
                <i class="fa-solid fa-earth-asia"></i>
                <p>Families from Malaysia, Singapore, Sri Lanka, UK</p>
            </div>

            <div class="zyphora-nri-card-7712">
                <i class="fa-solid fa-road-circle-xmark"></i>
                <p>Devotees who want to avoid long road journeys</p>
            </div>

            <div class="zyphora-nri-card-7712">
                <i class="fa-solid fa-map-location-dot"></i>
                <p>First-time visitors needing clear guidance</p>
            </div>

            <div class="zyphora-nri-card-7712">
                <i class="fa-solid fa-person-cane"></i>
                <p>Elderly travelers preferring comfortable travel</p>
            </div>

            </div>

        </div>
    </section>


    <section class="zyphora-nri-choose-7719">
  <div class="zyphora-nri-choose-container-7719">

    <h2 class="zyphora-nri-choose-title-7719">
      <i class="fa-solid fa-circle-check"></i>
      Why Travellers Choose Our Hyderabad to Tirupati Support
    </h2>

    <p class="zyphora-nri-choose-desc-7719">
      Receive clear guidance, organized travel planning and responsive assistance for a smooth Tirupati trip without unnecessary confusion or delays.
    </p>

    <div class="zyphora-nri-choose-grid-7719">

      <div class="zyphora-nri-choose-card-7719">
        <i class="fa-solid fa-user-shield"></i>
        <span>Experienced team for travel coordination</span>
      </div>

      <div class="zyphora-nri-choose-card-7719">
        <i class="fa-solid fa-file-circle-check"></i>
        <span>Guidance on common documents and travel steps</span>
      </div>

      <div class="zyphora-nri-choose-card-7719">
        <i class="fa-solid fa-route"></i>
        <span>Clear support for itinerary and transfers</span>
      </div>

      <div class="zyphora-nri-choose-card-7719">
        <i class="fa-solid fa-bolt"></i>
        <span>Quick responses and timely updates</span>
      </div>

      <div class="zyphora-nri-choose-card-7719">
        <i class="fa-solid fa-globe"></i>
        <span>Preferred by travellers from multiple countries</span>
      </div>

    </div>

  </div>
</section>



   <section class="zxora-darshan-flow-9912">
  <div class="zxora-darshan-wrap-9912">

    <div class="zxora-darshan-head-9912">
      <h2>
        <i class="fa-solid fa-gear"></i>
        How the Travel Process is Managed
      </h2>

      <p>
        Your Hyderabad to Tirupati journey is organized step-by-step for a smooth and comfortable travel experience.
      </p>

      <p class="zxora-subtext-9912">
        From departure planning to return travel, each stage is coordinated carefully to help travellers enjoy a well-managed visit.
      </p>
    </div>

    <div class="zxora-darshan-steps-9912">

      <div class="zxora-step-9912">
        <span>01</span>
        <p>Travel planning based on your arrival schedule</p>
      </div>

      <div class="zxora-step-9912">
        <span>02</span>
        <p>Flight booking guidance when requested</p>
      </div>

      <div class="zxora-step-9912">
        <span>03</span>
        <p>Pickup and local transfer arrangements</p>
      </div>

      <div class="zxora-step-9912">
        <span>04</span>
        <p>Guidance for visit procedures and timing</p>
      </div>

      <div class="zxora-step-9912">
        <span>05</span>
        <p>Ongoing support throughout the trip</p>
      </div>

    </div>

  </div>
</section>



   <section class="zxora-nri-cost-sec-9907">
  <div class="zxora-nri-cost-wrap-9907">

    <!-- HEADER -->
    <div class="zxora-nri-cost-head-9907">
      <h2>Travel Package Details from Hyderabad</h2>

      <p class="zxora-sub-9907">
        Hyderabad to Tirupati travel plans may vary based on travel date, flight schedules, hotel preference and number of travellers.
      </p>

      <p class="zxora-alert-9907">
        Advance enquiry is recommended during weekends, holidays and peak travel seasons for better scheduling options.
      </p>

      <div class="zxora-price-box-9907">
        <span>PACKAGE OPTIONS</span>
        <h3>Flexible Plans</h3>
        <p>customized based on requirements</p>
      </div>

      <p class="zxora-sub-9907">
        Contact us to receive suitable travel plans, itinerary options and support details based on your journey needs.
      </p>
    </div>

    <!-- CONTENT -->
    <div class="zxora-nri-grid-9907">

      <!-- INCLUDES -->
      <div class="zxora-card-9907">
        <h4>May Include:</h4>
        <ul>
          <li><i class="fa-solid fa-check"></i> Travel guidance and trip planning</li>
          <li><i class="fa-solid fa-check"></i> Hyderabad to Tirupati flight assistance on request</li>
          <li><i class="fa-solid fa-check"></i> Airport pickup and drop options</li>
          <li><i class="fa-solid fa-check"></i> Hotel stay support</li>
          <li><i class="fa-solid fa-check"></i> Local transport arrangements</li>
          <li><i class="fa-solid fa-check"></i> Itinerary coordination</li>
          <li><i class="fa-solid fa-check"></i> Traveller assistance throughout the trip</li>
        </ul>
      </div>

      <!-- NOTES -->
      <div class="zxora-card-9907">
        <h4>Important Notes:</h4>
        <ul class="zxora-exclude-9907">
          <li><i class="fa-solid fa-xmark"></i> Temple schedules are controlled by official authorities</li>
          <li><i class="fa-solid fa-xmark"></i> Flight tickets depend on airline availability</li>
          <li><i class="fa-solid fa-xmark"></i> Meals and personal expenses may be separate</li>
          <li><i class="fa-solid fa-xmark"></i> Final plan depends on selected requirements</li>
        </ul>
      </div>

    </div>

    <!-- CTA -->
    <a href="https://wa.me/919994751079?text=Hello,%20Please%20share%20Hyderabad%20to%20Tirupati%20travel%20package%20details,%20available%20plans%20and%20itinerary."
       target="_blank"
       class="zxora-cta-9907">
      👍 Get travel plan details instantly on WhatsApp
    </a>

  </div>
</section>



    <section class="zxvra-nri-itin-sec-7721" id="itinerary-section">
  <div class="zxvra-nri-itin-wrap-7721">

    <!-- Heading -->
    <div class="zxvra-nri-itin-head-7721">
      <h2><i class="fa-solid fa-gopuram"></i> Hyderabad to Tirupati Travel Itinerary by Flight</h2>
      <p>
        This sample Hyderabad to Tirupati flight itinerary is designed for a smooth journey with organized transfers, comfortable travel and clear scheduling.
      </p>
    </div>

    <!-- Cards -->
    <div class="zxvra-nri-itin-grid-7721">

      <!-- Card 1 -->
      <div class="zxvra-nri-card-7721">
        <h3>Day 1: Hyderabad to Tirupati</h3>
        <ul>
          <li><i class="fa-solid fa-plane-departure"></i> Flight from Hyderabad to Tirupati</li>
          <li><i class="fa-solid fa-handshake-angle"></i> Airport pickup assistance</li>
          <li><i class="fa-solid fa-hotel"></i> Hotel check-in and rest</li>
          <li><i class="fa-solid fa-file-circle-check"></i> Trip briefing and schedule guidance</li>
        </ul>
      </div>

      <!-- Card 2 -->
      <div class="zxvra-nri-card-7721 active">
        <h3>Day 2: Temple Visit & Local Travel</h3>
        <ul>
          <li><i class="fa-solid fa-car-side"></i> Early transfer for temple visit</li>
          <li><i class="fa-solid fa-gopuram"></i> Visit as per official procedures and timings</li>
          <li><i class="fa-solid fa-passport"></i> Guidance for commonly required documents</li>
          <li><i class="fa-solid fa-bolt"></i> Coordinated local travel support</li>
          <li><i class="fa-solid fa-arrow-rotate-left"></i> Return to Tirupati</li>
        </ul>
      </div>

      <!-- Card 3 -->
      <div class="zxvra-nri-card-7721">
        <h3>Return Journey</h3>
        <ul>
          <li><i class="fa-solid fa-plane-arrival"></i> Drop at Tirupati airport</li>
          <li><i class="fa-solid fa-plane"></i> Return flight to Hyderabad</li>
          <li><i class="fa-solid fa-circle-check"></i> Trip completion</li>
        </ul>
      </div>

    </div>

    <!-- Bottom Note -->
    <div class="zxvra-nri-itin-foot-7721">
      <p>
        Final schedules may vary based on flight timings, crowd conditions and official temple procedures.
      </p>
    </div>

  </div>
</section>


   <section class="nxz-ultra-pack-sec">
  <div class="nxz-ultra-pack-container">

    <!-- INCLUDED -->
    <div class="nxz-ultra-pack-box nxz-included-box">
      <h3 class="nxz-ultra-pack-title">
        <i class="fas fa-check-circle"></i>
        Package Features
      </h3>

      <ul class="nxz-ultra-pack-list">
        <li><i class="fas fa-check"></i> Travel planning assistance</li>
        <li><i class="fas fa-check"></i> Hyderabad to Tirupati journey guidance</li>
        <li><i class="fas fa-check"></i> Airport pickup and drop options</li>
        <li><i class="fas fa-check"></i> Hotel stay support</li>
        <li><i class="fas fa-check"></i> Local transport arrangements</li>
        <li><i class="fas fa-check"></i> Itinerary coordination</li>
        <li><i class="fas fa-check"></i> Traveller support throughout the trip</li>
      </ul>
    </div>

    <!-- NOT INCLUDED -->
    <div class="nxz-ultra-pack-box nxz-not-box">
      <h3 class="nxz-ultra-pack-title">
        <i class="fas fa-times-circle"></i>
        Important Notes
      </h3>

      <ul class="nxz-ultra-pack-list">
        <li><i class="fas fa-times"></i> Temple schedules are subject to official authorities</li>
        <li><i class="fas fa-times"></i> Flight tickets depend on airline availability</li>
        <li><i class="fas fa-times"></i> Meals and personal expenses may be separate</li>
        <li><i class="fas fa-times"></i> Optional upgrades depend on selected plan</li>
      </ul>
    </div>

  </div>
</section>



   


    <section class="qx7-devotee-ultra-sec">
  <div class="qx7-devotee-ultra-container">

    <h2 class="qx7-devotee-ultra-title">
      <i class="fas fa-comment-dots"></i>
      What Devotees Say
    </h2>

    <div class="qx7-devotee-ultra-grid">

      <!-- CARD 1 -->
      <div class="qx7-devotee-card">
        <p class="qx7-devotee-text">
          “Everything was handled clearly from start to finish. No confusion at Tirupati.”
        </p>
        <span class="qx7-devotee-user">— Visitor from Singapore</span>
      </div>

      <!-- CARD 2 -->
      <div class="qx7-devotee-card">
        <p class="qx7-devotee-text">
          “Best option for NRIs with limited time. Very smooth coordination.”
        </p>
        <span class="qx7-devotee-user">— Visitor from Malaysia</span>
      </div>

      <!-- CARD 3 -->
      <div class="qx7-devotee-card">
        <p class="qx7-devotee-text">
          “Travel and darshan both were well managed.”
        </p>
        <span class="qx7-devotee-user">— Visitor from UK</span>
      </div>

    </div>

  </div>
</section>





<section class="zxqra-faq-sec-7721">
  <div class="zxqra-faq-container-7721">

    <div class="zxqra-faq-header-7721">
      <h2>Frequently Asked Questions</h2>
    </div>

    <div class="zxqra-faq-wrapper-7721">

      <!-- ITEM -->
      <div class="zxqra-faq-item-7721">
        <button class="zxqra-faq-question-7721">
          <i class="fa-solid fa-circle-question"></i>
          How are travel package plans decided?
        </button>
        <div class="zxqra-faq-answer-7721">
          <p>Travel plans usually depend on travel date, flight schedules, hotel preference and number of travellers.</p>
        </div>
      </div>

      <div class="zxqra-faq-item-7721">
        <button class="zxqra-faq-question-7721">
          <i class="fa-solid fa-circle-question"></i>
          Who can use this package?
        </button>
        <div class="zxqra-faq-answer-7721">
          <p>This package is suitable for domestic travellers, international visitors and passport holders planning a Tirupati trip.</p>
        </div>
      </div>

      <div class="zxqra-faq-item-7721">
        <button class="zxqra-faq-question-7721">
          <i class="fa-solid fa-circle-question"></i>
          How can I enquire about Hyderabad to Tirupati travel?
        </button>
        <div class="zxqra-faq-answer-7721">
          <p>You can contact us on WhatsApp and share your travel date, number of persons and preferred schedule.</p>
        </div>
      </div>

      <div class="zxqra-faq-item-7721">
        <button class="zxqra-faq-question-7721">
          <i class="fa-solid fa-circle-question"></i>
          Is flight travel more convenient than road travel?
        </button>
        <div class="zxqra-faq-answer-7721">
          <p>Many travellers prefer flight travel for quicker transit and reduced travel fatigue.</p>
        </div>
      </div>

      <div class="zxqra-faq-item-7721">
        <button class="zxqra-faq-question-7721">
          <i class="fa-solid fa-circle-question"></i>
          Are flight tickets included automatically?
        </button>
        <div class="zxqra-faq-answer-7721">
          <p>Flight tickets depend on the selected plan and airline availability.</p>
        </div>
      </div>

      <div class="zxqra-faq-item-7721">
        <button class="zxqra-faq-question-7721">
          <i class="fa-solid fa-circle-question"></i>
          Can a same-day trip be planned?
        </button>
        <div class="zxqra-faq-answer-7721">
          <p>Same-day plans may be possible depending on travel schedules, timing and overall itinerary.</p>
        </div>
      </div>

      <div class="zxqra-faq-item-7721">
        <button class="zxqra-faq-question-7721">
          <i class="fa-solid fa-circle-question"></i>
          Which airport is generally used for Tirupati travel?
        </button>
        <div class="zxqra-faq-answer-7721">
          <p>Tirupati Airport is commonly used, with pickup and drop options available based on your package.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
  const faqItems = document.querySelectorAll(".zxqra-faq-item-7721");

  faqItems.forEach(item => {
    const btn = item.querySelector(".zxqra-faq-question-7721");

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




<section class="zylora-nri-whatsapp-cta-9917">
  <div class="zylora-nri-container-9917">

    <!-- Row 1 -->
    <h2 class="zylora-nri-heading-9917">
      Hyderabad to Tirupati Travel by Flight – Check Travel Options
    </h2>

    <!-- Row 2 -->
    <p class="zylora-nri-subtext-9917">
      Get travel plans, schedule options and complete journey details instantly on WhatsApp.
    </p>

    <!-- Row 3 -->
    <strong class="zylora-nri-highlight-9917">
      👉 Receive itinerary support and package information quickly
    </strong>

    <!-- Row 4 Buttons -->
    <div class="zylora-nri-btn-group-9917">
      <a href="https://wa.me/919994751079?text=Hello,%20Please%20share%20Hyderabad%20to%20Tirupati%20flight%20travel%20options,%20schedule%20and%20package%20details."
         target="_blank"
         class="zylora-btn-primary-9917">
        <i class="fab fa-whatsapp"></i> Check Travel Details
      </a>

      <a href="https://wa.me/919994751079"
         target="_blank"
         class="zylora-btn-secondary-9917">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>
    </div>

    <!-- Row 5 -->
    <p class="zylora-nri-trust-9917">
      Preferred by domestic and international travellers for organized trip planning and responsive support.
    </p>

    <!-- Row 6 -->
    <strong class="zylora-nri-warning-9917">
      ⚡ Weekend and holiday schedules may fill early — advance enquiry is recommended.
    </strong>

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
  <script src="assets/js/enquiry-forms.js?v=20260901"></script>




  <?php 
  include 'includes/footer.php'; 
  ?>



 