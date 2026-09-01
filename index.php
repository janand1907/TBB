<?php
ob_start();
// error_reporting(E_ALL) + error-log-config.php (display_errors=Off,
// log_errors=On): warnings are captured server-side in logs/php-errors.log
// instead of being silently discarded or shown to visitors.
error_reporting(E_ALL);
require_once __DIR__ . '/includes/error-log-config.php';
$pageTitle = 'Tirupati Tour Packages from Chennai & Hyderabad | Car & Hotels';
$pageDescription = 'Tirupati tour packages from Chennai and Hyderabad with private car travel, hotel stay, pickup, trip planning and return drop support for devotees.';
$pageCanonical = 'https://www.divinebalajitravels.com';
$activeMenu = 'home';
$includeDefaultSchema = false;
$extraHeadLinks = <<<'HTML'
  <!-- Performance: hero background is a CSS background-image, invisible to
       the HTML preload scanner until CSSOM is built - preload it directly
       so the LCP image fetch starts immediately instead of after ~19 stylesheets. -->
  <link rel="preload" as="image" href="assets/srivani-image/nri-hyderabad-by-fligh/hero.webp" fetchpriority="high">

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
  <link rel="preload" href="assets/css/modern/style.css?ver=2.3" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="assets/css/modern/style.css?ver=2.3"></noscript>
  

 

<link rel="preload" href="assets/css/legacy/shared-enquiry-form.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="assets/css/legacy/shared-enquiry-form.css"></noscript>

   <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TravelAgency",
  "name": "Divine Balaji Travels",
  "url": "https://www.divinebalajitravels.com/",
  "logo": "https://www.divinebalajitravels.com/assets/images/logo/logo.jpg",
   "description": "Tirupati tour packages from Chennai and Hyderabad with private travel, hotel stay options, pickup, trip planning and return drop support for devotees.",
  "telephone": "+91-9994751079",
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
  "serviceType": [
    "Tirupati Tour Packages",
    "Chennai to Tirupati Travel Packages",
    "Hyderabad to Tirupati Travel Packages",
    "NRI Tirupati Travel Assistance"
  ],
  "sameAs": [
    "https://wa.me/919994751079"
  ]
}
</script>

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Tirupati Tour Packages from Chennai & Hyderabad",
  "description": "Tirupati travel packages from Chennai and Hyderabad with private transport, hotel stay options, trip planning and return drop support for devotees.",
  "touristType": [
    "Domestic Travellers",
    "NRI Devotees",
    "International Travellers"
  ],
  "provider": {
    "@type": "TravelAgency",
    "name": "Divine Balaji Travels",
    "url": "https://www.divinebalajitravels.com/",
    "logo": "https://www.divinebalajitravels.com/assets/images/logo/logo.jpg"
  },
  "itinerary": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "TouristTrip",
        "name": "Chennai to Tirupati Travel Package"
      },
      {
        "@type": "TouristTrip",
        "name": "Hyderabad to Tirupati Travel Package"
      },
      {
        "@type": "TouristTrip",
        "name": "NRI Tirupati Travel Package"
      }
    ]
  }
}
</script>

   <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "https://www.divinebalajitravels.com/#faq",
  "mainEntity": [

    {
      "@type": "Question",
      "name": "What is the Tirupati tour package price from Chennai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Package price depends on travel date, number of travellers, vehicle type and hotel preference. Contact us for the latest quote."
      }
    },

    {
      "@type": "Question",
      "name": "Do you offer Tirupati packages from Hyderabad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide Tirupati travel packages from Hyderabad with transfers, trip planning and hotel stay options."
      }
    },

    {
      "@type": "Question",
      "name": "Do you provide Chennai to Tirupati private car packages?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, private AC car travel packages are available from Chennai with pickup and return drop support."
      }
    },

    {
      "@type": "Question",
      "name": "Can NRI travellers use your Tirupati package service?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, our packages are suitable for NRI and international travellers visiting from overseas locations."
      }
    },

    {
      "@type": "Question",
      "name": "How long does the Tirupati trip take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most travellers choose a one day or two day plan depending on pickup location, stay preference and return timing."
      }
    },

    {
      "@type": "Question",
      "name": "How can I book a Tirupati travel package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can submit an enquiry form or contact us on WhatsApp with your travel date and number of travellers."
      }
    },

    {
      "@type": "Question",
      "name": "Do your packages include hotel stay?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Hotel stay options are available in selected packages based on room category and traveller preference."
      }
    },

    {
      "@type": "Question",
      "name": "Which countries do you support for overseas travellers?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We assist travellers from Malaysia, Singapore, Sri Lanka, the UK and other countries visiting Tirupati."
      }
    },

    {
      "@type": "Question",
      "name": "How are temple tickets handled?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Temple schedules, tickets and eligibility are managed only through official authorities. As part of the complete travel package, assistance may be available when requested."
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
      "name": "Tirupati Tour Packages",
      "item": "https://www.divinebalajitravels.com/"
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
style="background: url('assets/srivani-image/nri-hyderabad-by-fligh/hero.webp') center/cover no-repeat;">

    <div class="srivani-container-unique">

        <!-- LEFT -->
        <div class="zenvix-left-wrap-721">

            <!-- TRUST BADGE -->
            <div class="zenvix-badge-box-721">

                <div class="zenvix-badge-line2-721">
                    <i class="fa-solid fa-circle-check"></i>
                    Trusted Tirupati Travel Packages from Chennai & Hyderabad
                </div>

                <div class="zenvix-badge-line1-721">
                    <span class="zenvix-stars-721">★★★★★</span>
                    <span class="zenvix-review-721">
                        Rated by happy travellers with reliable pilgrimage travel support
                    </span>
                </div>

            </div>

            <!-- HEADING -->
            <h1 class="zenvix-title-721">
                Tirupati Tour Packages from Chennai & Hyderabad
            </h1>

            <!-- SUB TEXT -->
            <p class="zenvix-highlight-text-721">
                Complete Tirupati pilgrimage travel packages with private car travel, flight-based plans, hotel stay and trip coordination.
            </p>

            <!-- DESCRIPTION -->
            <p class="zenvix-subtext-721">
                Get package details, itinerary options and pricing instantly on WhatsApp.
            </p>

            <!-- FEATURE BOX -->
            <div class="zenvix-feature-box-721">

                <p class="zenvix-feature-desc-721">
                    Serving domestic and international travellers from Malaysia, Singapore, Sri Lanka, UK and other countries.
                </p>

                <div class="zenvix-feature-grid-721">

                    <div class="zenvix-feature-item-721">
                        <i class="fa-solid fa-check"></i>
                        Chennai to Tirupati private car packages
                    </div>

                    <div class="zenvix-feature-item-721">
                        <i class="fa-solid fa-check"></i>
                        Hyderabad to Tirupati travel packages
                    </div>

                    <div class="zenvix-feature-item-721">
                        <i class="fa-solid fa-check"></i>
                        Airport pickup and drop assistance
                    </div>

                    <div class="zenvix-feature-item-721">
                        <i class="fa-solid fa-check"></i>
                        Hotel stay and itinerary planning
                    </div>

                    <div class="zenvix-feature-item-721">
                        <i class="fa-solid fa-check"></i>
                        Family, senior citizen and NRI friendly support
                    </div>

                </div>

            </div>

            <!-- BUTTONS -->
            <div class="zenvix-btn-group-721">

                <a href="https://wa.me/919994751079?text=Hi,%20I%20am%20planning%20a%20Tirupati%20trip.%0A%0APlease%20share%20travel%20package%20details,%20pricing,%20vehicle%20options%20and%20itinerary.%0A%0ATravel%20Details:%0A%E2%80%A2%20Travel%20Date:%0A%E2%80%A2%20Number%20of%20Persons:%0A%E2%80%A2%20Departure:%20Chennai%20/%20Hyderabad"
                target="_blank"
                class="zenvix-btn-721 zenvix-btn-primary">

                    <i class="fa-brands fa-whatsapp"></i>
                    Get Details on WhatsApp
                </a>

                <a href="https://wa.me/919994751079"
                target="_blank"
                class="zenvix-btn-721 zenvix-btn-secondary">

                    <i class="fa-brands fa-whatsapp"></i>
                    Chat on WhatsApp
                </a>

                <a href="#itinerary-section"
                id="viewItineraryBtn"
                class="zenvix-btn-721 zenvix-btn-outline">

                    <i class="fa-solid fa-box-open"></i>
                    View Packages
                </a>

            </div>

            <!-- DISCLAIMER -->
            <p class="zenvix-note-721">
                We are an independent private travel company. Temple schedules, tickets and eligibility are managed only through official authorities.
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

                <textarea id="hf-message" name="message" rows="4" placeholder="Travel Requirement (Optional)"></textarea>
                <div class="field-error" data-for="hf-message"></div>

                <div class="srivani-captcha-question" id="hf-captcha-question">
                    <?= htmlspecialchars($captcha_question, ENT_QUOTES, 'UTF-8') ?>
                </div>

                <input id="hf-captcha" type="text" name="answer" placeholder="Captcha Answer">
                <div class="field-error" data-for="hf-captcha"></div>

                <button type="submit" class="srivani-submit-btn-unique">
                    Get Package Details
                </button>

            </form>

        </div>

    </div>

</section>


   <section class="veltrix-darshan-shell">
    <div class="veltrix-darshan-container">

        <!-- Heading -->
        <h2 class="veltrix-darshan-title">
            <i class="fas fa-hand-holding-heart"></i>
            Trusted Tirupati Tour Packages from Chennai & Hyderabad
        </h2>

        <!-- Paragraph 1 -->
        <p class="veltrix-darshan-text">
            Planning a Tirupati trip from Chennai or Hyderabad? Divine Balaji Travels provides complete pilgrimage travel packages with private car transport, hotel stay options, airport pickup, itinerary planning and return drop support. We offer Chennai to Tirupati car packages and Hyderabad to Tirupati travel plans for families, senior citizens, group travellers and NRI devotees.
        </p>

        <!-- Highlight Box -->
        <div class="veltrix-darshan-highlight">
            <i class="fas fa-info-circle"></i>
            <strong>
                Get complete details on package pricing, travel plans, vehicle options and hotel stay before confirmation.
            </strong>
        </div>

        <!-- Paragraph 2 -->
        <p class="veltrix-darshan-text">
            Our services are designed for devotees looking for transparent pricing, comfortable travel and smooth coordination. We also assist travellers from Malaysia, Singapore, Sri Lanka, the UK and other countries visiting Tirupati through Chennai or Hyderabad.
        </p>

        <!-- CTA Highlight -->
        <div class="veltrix-darshan-cta">
            <i class="fas fa-check-circle"></i>
            <strong>
                Enquire easily on WhatsApp and receive suitable Tirupati package options from our team.
            </strong>
        </div>

          </div>
</section>
    

 <section id="itinerary-section" class="aurixa-darshan-shell">
    <div class="aurixa-container">

        <h2 class="aurixa-title">
            Tirupati Tour Packages from Chennai by Car & Hyderabad Travel Plans
        </h2>

        <p class="aurixa-subtitle">
            Choose from Chennai and Hyderabad Tirupati travel packages based on your travel date, budget, vehicle preference and stay requirement.
        </p>

        <!-- Row 1 -->
        <div class="aurixa-grid">

            <!-- Chennai Package -->
            <div class="aurixa-card">

                <div class="aurixa-icon">
                    <i class="fas fa-car"></i>
                </div>

                <h3>Chennai to Tirupati Package (By Car)</h3>

                <p>
                    Comfortable Chennai to Tirupati travel package with private AC car transport, pickup, hotel stay options and return drop support for a smooth pilgrimage trip.
                </p>

                <strong>
                    Includes private car, route planning and optional hotel stay
                </strong>

                <p class="aurixa-muted">
                    Best for families and devotees travelling from Chennai
                </p>

                <a href="https://www.divinebalajitravels.com/srivani-vip-break-darshan-from-chennai.php"
                   class="aurixa-btn"
                   target="_blank">
                   👉 View Chennai Package
                </a>

                <p class="aurixa-link">
                    International traveller?
                    <a href="https://www.divinebalajitravels.com/tirupati-nri-darshan-package-from-chennai.php" target="_blank">
                        View NRI Chennai Package
                    </a>
                </p>

            </div>

            <!-- Hyderabad Package -->
            <div class="aurixa-card">

                <div class="aurixa-icon">
                    <i class="fas fa-plane"></i>
                </div>

                <h3>Hyderabad to Tirupati Package</h3>

                <p>
                    Tirupati package from Hyderabad with convenient travel planning, pickup support, hotel stay options and smooth trip coordination.
                </p>

                <strong>
                    Includes travel planning, transfers and optional stay support
                </strong>

                <p class="aurixa-muted">
                    Ideal for devotees travelling from Hyderabad
                </p>

                <a href="https://www.divinebalajitravels.com/srivani-vip-break-darshan-from-hyderabad.php"
                   class="aurixa-btn"
                   target="_blank">
                   👉 View Hyderabad Package
                </a>

                <p class="aurixa-link">
                    International traveller?
                    <a href="https://www.divinebalajitravels.com/tirupati-nri-darshan-package-from-hyderabad-by-flight.php" target="_blank">
                        View NRI Hyderabad Package
                    </a>
                </p>

            </div>

        </div>

        <!-- Row 2 -->
        <div class="aurixa-grid">

            <!-- NRI Chennai -->
            <div class="aurixa-card">

                <div class="aurixa-icon">
                    <i class="fas fa-globe"></i>
                </div>

                <h3>NRI Tirupati Package from Chennai</h3>

                <p>
                    Specially designed Tirupati travel package for NRI and overseas devotees arriving in Chennai with airport pickup, private car travel and trip coordination.
                </p>

                <strong>
                    Includes airport pickup, private vehicle and travel support
                </strong>

                <a href="https://www.divinebalajitravels.com/tirupati-nri-darshan-package-from-chennai.php"
                   class="aurixa-btn"
                   target="_blank">
                   👉 View NRI Chennai Package
                </a>

            </div>

            <!-- NRI Hyderabad -->
            <div class="aurixa-card">

                <div class="aurixa-icon">
                    <i class="fas fa-globe-asia"></i>
                </div>

                <h3>NRI Tirupati Package from Hyderabad</h3>

                <p>
                    Tirupati package for NRI devotees travelling through Hyderabad with airport transfers, travel planning and comfortable trip support.
                </p>

                <strong>
                    Includes pickup, itinerary planning and travel coordination
                </strong>

                <a href="https://www.divinebalajitravels.com/tirupati-nri-darshan-package-from-hyderabad-by-flight.php"
                   class="aurixa-btn"
                   target="_blank">
                   👉 View NRI Hyderabad Package
                </a>

            </div>

        </div>

           </div>
</section>


   <section class="velmora-why-shell">
    <div class="velmora-why-container">

        <h2 class="velmora-why-title">
            Why Choose Our Tirupati Tour Packages
        </h2>

        <p class="velmora-why-subtitle">
            Trusted by devotees travelling from Chennai, Hyderabad and overseas locations for comfortable Tirupati pilgrimage trips with complete travel support.
        </p>

        <div class="velmora-why-grid">

            <div class="velmora-why-card">
                <i class="fas fa-trophy"></i>
                <p>Dedicated support for domestic and international travellers</p>
            </div>

            <div class="velmora-why-card">
                <i class="fas fa-file-alt"></i>
                <p>Clear package details, pricing and travel guidance</p>
            </div>

            <div class="velmora-why-card">
                <i class="fas fa-car"></i>
                <p>Reliable Chennai to Tirupati private car travel arrangements</p>
            </div>

            <div class="velmora-why-card">
                <i class="fas fa-plane"></i>
                <p>Convenient Hyderabad to Tirupati travel planning</p>
            </div>

            <div class="velmora-why-card">
                <i class="fas fa-bolt"></i>
                <p>Fast response and transparent communication</p>
            </div>

            <div class="velmora-why-card">
                <i class="fas fa-globe"></i>
                <p>Specialized support for travellers from Malaysia, Singapore, Sri Lanka, UK and other countries</p>
            </div>

            <div class="velmora-why-card">
                <i class="fas fa-hotel"></i>
                <p>Hotel stay options and complete itinerary coordination</p>
            </div>

            <div class="velmora-why-card">
                <i class="fas fa-handshake"></i>
                <p>Experienced team assisting your trip from pickup to return drop</p>
            </div>

        </div>

           </div>
</section>

   <section class="velmora-tiru-wrapper">
    <div class="velmora-tiru-box">

        <h2 class="velmora-tiru-title">
            Chennai to Tirupati by Car – Comfortable & Flexible Travel
        </h2>

        <p class="velmora-tiru-text">
            Chennai to Tirupati private car travel is one of the most preferred options for devotees seeking comfort, flexibility and convenient departure timing for their pilgrimage trip.
        </p>

        <p class="velmora-tiru-text">
            We provide Chennai to Tirupati travel packages with Sedan, SUV and premium vehicle options suitable for families, senior citizens, groups and international travellers arriving at Chennai Airport.
        </p>

        <div class="velmora-tiru-highlight">
            <i class="fas fa-route"></i>
            <span>
                Approximate road travel duration is 4 to 5 hours through safe and planned routes, subject to traffic conditions.
            </span>
        </div>

        <p class="velmora-tiru-text" style="font-size:13px; margin-top:14px;">
            Pickup and return drop can be arranged from Chennai Airport, hotels or residences based on your selected package.
        </p>

    </div>
</section>



   <section class="vqxz-nriassist-sec-74821">
    <div class="vqxz-nriassist-wrap-74821">

        <!-- LEFT CONTENT -->
        <div class="vqxz-nriassist-left-74821">

            <h2 class="vqxz-nriassist-title-74821">
                Tirupati Travel Support for NRI & International Devotees
            </h2>

            <p class="vqxz-nriassist-text-74821">
                We provide dedicated Tirupati travel assistance for NRI devotees and international travellers visiting from Malaysia, Singapore, Sri Lanka, the UK and other countries.
            </p>

            <p class="vqxz-nriassist-text-74821">
                Our services may include airport pickup, private vehicle travel, hotel stay options, itinerary planning and smooth trip coordination through Chennai or Hyderabad.
            </p>

            <p class="vqxz-nriassist-highlight-74821">
                Ideal for overseas devotees looking for a comfortable Tirupati pilgrimage trip with reliable support.
            </p>

                    </div>

        <!-- RIGHT IMAGE -->
        <div class="vqxz-nriassist-right-74821">

            <div class="vqxz-nriassist-imgbox-74821">
                <img loading="lazy" width="1536" height="1024" decoding="async" src="assets/srivani-image/home/NRIAssistance.webp"
                     alt="Tirupati travel support for NRI and international devotees from Malaysia Singapore Sri Lanka UK">
            </div>

        </div>

    </div>
</section>


   

  
    <section class="zvqx-testimonial-sec-83472">
        <div class="zvqx-testimonial-container-83472">

            
            <h2 class="zvqx-testimonial-heading-83472">
            What Our Devotees Say
            </h2>
            <p class="zvqx-testimonial-top-83472">
            Trusted by devotees from India, Malaysia, Singapore, Sri Lanka & UK
            </p>


            <div class="zvqx-testimonial-grid-83472">

            <!-- Card 1 -->
            <div class="zvqx-testimonial-card-83472">
                <div class="zvqx-stars-83472">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
                <p class="zvqx-text-83472">
                "Excellent service and smooth darshan experience. Everything was well coordinated even with travel delays."
                </p>
                <h4 class="zvqx-name-83472">— Muthuraman (Singapore)</h4>
            </div>

            <!-- Card 2 -->
            <div class="zvqx-testimonial-card-83472">
                <div class="zvqx-stars-83472">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
                <p class="zvqx-text-83472">
                "Very professional and reliable team. Highly recommended for NRI devotees visiting Tirupati."
                </p>
                <h4 class="zvqx-name-83472">— Sharmila Manogaran (UAE)</h4>
            </div>

            <!-- Card 3 -->
            <div class="zvqx-testimonial-card-83472">
                <div class="zvqx-stars-83472">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                </div>
                <p class="zvqx-text-83472">
                "One of the best darshan experiences. The team handled everything perfectly."
                </p>
                <h4 class="zvqx-name-83472">— Mallikarjuna Kaveti (India)</h4>
            </div>

            </div>
        </div>
    </section>




    <section class="velora-faq-shell">
    <div class="velora-faq-container">

        <h2 class="velora-faq-title">Frequently Asked Questions</h2>

        <!-- FAQ 1 -->
        <div class="velora-faq-item">
            <button class="velora-faq-question">
                <i class="fas fa-rupee-sign"></i>
                What is the Tirupati tour package price from Chennai?
                <span>+</span>
            </button>
            <div class="velora-faq-answer">
                Package price depends on travel date, number of travellers, vehicle type and hotel preference. Contact us for the latest quote.
            </div>
        </div>

        <!-- FAQ 2 -->
        <div class="velora-faq-item">
            <button class="velora-faq-question">
                <i class="fas fa-plane"></i>
                Do you offer Tirupati packages from Hyderabad?
                <span>+</span>
            </button>
            <div class="velora-faq-answer">
                Yes, we provide Tirupati travel packages from Hyderabad with transfers, trip planning and hotel stay options.
            </div>
        </div>

        <!-- FAQ 3 -->
        <div class="velora-faq-item">
            <button class="velora-faq-question">
                <i class="fas fa-car"></i>
                Do you provide Chennai to Tirupati private car packages?
                <span>+</span>
            </button>
            <div class="velora-faq-answer">
                Yes, private AC car travel packages are available from Chennai with pickup and return drop support.
            </div>
        </div>

        <!-- FAQ 4 -->
        <div class="velora-faq-item">
            <button class="velora-faq-question">
                <i class="fas fa-passport"></i>
                Can NRI travellers use your Tirupati package service?
                <span>+</span>
            </button>
            <div class="velora-faq-answer">
                Yes, our packages are suitable for NRI and international travellers visiting from overseas locations.
            </div>
        </div>

        <!-- FAQ 5 -->
        <div class="velora-faq-item">
            <button class="velora-faq-question">
                <i class="fas fa-clock"></i>
                How long does the Tirupati trip take?
                <span>+</span>
            </button>
            <div class="velora-faq-answer">
                Most travellers choose a one day or two day plan depending on pickup location, stay preference and return timing.
            </div>
        </div>

        <!-- FAQ 6 -->
        <div class="velora-faq-item">
            <button class="velora-faq-question">
                <i class="fas fa-calendar-check"></i>
                How can I book a Tirupati travel package?
                <span>+</span>
            </button>
            <div class="velora-faq-answer">
                You can submit an enquiry form or contact us on WhatsApp with your travel date and number of travellers.
            </div>
        </div>

        <!-- FAQ 7 -->
        <div class="velora-faq-item">
            <button class="velora-faq-question">
                <i class="fas fa-hotel"></i>
                Do your packages include hotel stay?
                <span>+</span>
            </button>
            <div class="velora-faq-answer">
                Hotel stay options are available in selected packages based on room category and traveller preference.
            </div>
        </div>

        <!-- FAQ 8 -->
        <div class="velora-faq-item">
            <button class="velora-faq-question">
                <i class="fas fa-globe"></i>
                Which countries do you support for overseas travellers?
                <span>+</span>
            </button>
            <div class="velora-faq-answer">
                We assist travellers from Malaysia, Singapore, Sri Lanka, the UK and other countries visiting Tirupati.
            </div>
        </div>

        <!-- FAQ 9 -->
        <div class="velora-faq-item">
            <button class="velora-faq-question">
                <i class="fas fa-gopuram"></i>
                How are temple tickets handled?
                <span>+</span>
            </button>
            <div class="velora-faq-answer">
                Temple schedules, tickets and eligibility are managed only through official authorities. As part of the complete travel package, assistance may be available when requested.
            </div>
        </div>

    </div>
</section>

    <script>
    const faqItems = document.querySelectorAll(".velora-faq-item");

    faqItems.forEach(item => {
        const btn = item.querySelector(".velora-faq-question");

        btn.addEventListener("click", () => {
        item.classList.toggle("active");
        });
    });
    </script>



   <section class="zavrix-darshan-cta-991">
    <div class="zavrix-darshan-box-991">

        <h2 class="zavrix-darshan-title-991">
            Plan Your Tirupati Tour Package Today
        </h2>

        <p class="zavrix-darshan-desc-991">
            Get Tirupati travel package details from Chennai or Hyderabad with private transport, hotel stay options, trip planning and return drop support. Contact us for pricing and itinerary options.
        </p>

        <div class="zavrix-darshan-btns-991">

            <a href="https://wa.me/919994751079?text=Hi,%20I%20am%20planning%20a%20Tirupati%20trip.%0A%0APlease%20share%20travel%20package%20details,%20pricing,%20vehicle%20options%20and%20itinerary.%0A%0ATravel%20Details:%0A%E2%80%A2%20Travel%20Date:%0A%E2%80%A2%20Number%20of%20Persons:%0A%E2%80%A2%20Departure:%20Chennai%20/%20Hyderabad"
               class="zavrix-btn-991 primary-btn"
               target="_blank">

                <i class="fab fa-whatsapp"></i>
                Get Details on WhatsApp
            </a>

            <a href="https://wa.me/919994751079"
               class="zavrix-btn-991 secondary-btn"
               target="_blank">

                <i class="fab fa-whatsapp"></i>
                Chat on WhatsApp
            </a>

        </div>

        <p style="font-size:13px; margin-top:18px; color:#666;">
            Temple schedules, tickets and eligibility are managed only through official authorities. We operate as an independent private travel company.
        </p>

    </div>
</section>



    <!-- Floating Contact Icons -->
    <div class="zenora-floating-orbit-zx91">

      <!-- WhatsApp -->
      <a href="https://wa.me/919994751079" target="_blank" class="zenora-orbit-whatsapp-zx91">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Icon" width="26" height="26" decoding="async">
      </a>

      <!-- Enquiry -->
      <a href="#" class="zenora-orbit-enquiry-zx91 js-enquiry-open">
        <img src="assets/images/enquiry-icon.webp" alt="Enquiry Icon" width="44" height="44" decoding="async">
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


