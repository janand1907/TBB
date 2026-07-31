<?php
ob_start();
// error_reporting(E_ALL) + error-log-config.php (display_errors=Off,
// log_errors=On): warnings are captured server-side in logs/php-errors.log
// instead of being silently discarded or shown to visitors.
error_reporting(E_ALL);
require_once __DIR__ . '/error-log-config.php';
$pageTitle = 'Tirupati Package from Malaysia via Chennai | Car & Hotel';
$pageDescription = 'Tirupati package from Malaysia via Chennai with airport pickup, private car, hotel stay, trip planning and return support.';
$pageCanonical = 'https://www.tirupatibalajibooking.com/tirupati-srivani-vip-darshan-malaysia-chennai.php';
$activeMenu = null;
$includeDefaultSchema = false;
$extraHeadLinks = <<<'HTML'
    <link rel="alternate" hreflang="en-my"
    href="https://www.tirupatibalajibooking.com/tirupati-srivani-vip-darshan-malaysia-chennai.php" />

    <link rel="alternate" hreflang="x-default"
    href="https://www.tirupatibalajibooking.com/tirupati-srivani-vip-darshan-malaysia-chennai.php" />
  
    <meta name="geo.region" content="IN-TN">
    <meta name="geo.placename" content="Chennai">

    <style>
.vip-cost-section {
    margin: 40px 0;
    text-align: center;
}

.vip-cost-section .section-title {
    font-size: 22px;
    font-weight: 700;
    color: #c58a00;
    margin-bottom: 15px;
}

.vip-cost-box {
    background: #fff8ef;
    border: 1px solid #f3c98b;
    border-radius: 10px;
    padding: 20px;
    max-width: 800px;
    margin: 0 auto;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
}

.vip-cost-box p {
    font-size: 15px;
    color: #333;
    line-height: 1.6;
    margin: 0;
}
</style>
    
    <style>
.cta-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
    margin-top: 20px;
}

.cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 14px 28px;
    border-radius: 50px;
    font-size: 15px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

/* WhatsApp */
.cta-whatsapp {
    background-color: #25D366;
    color: #fff;
}

/* Form */
.cta-form {
    background-color: #333;
    color: #fff;
}

.cta-btn:hover {
    transform: translateY(-2px);
}
</style>
    
    

    <style>
    .booking-guide-section {
        padding: 40px 20px;
        background-color: #ffffff;
        font-family: 'Segoe UI', Arial, sans-serif;
    }

    .guide-container {
        max-width: 850px;
        margin: 0 auto;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        border: 1px solid #eee;
    }

    .booking-guide-section h2 {
        background: linear-gradient(135deg, #ff9800, #f57c00);
        color: #fff;
        margin: 0;
        padding: 25px;
        text-align: center;
        font-size: 1.6rem;
    }

    .guide-content {
        padding: 30px;
        background: #fff;
    }

    .intro-text {
        font-size: 1.1rem;
        color: #444;
        margin-bottom: 25px;
        text-align: center;
    }

    /* Steps Visualizer */
    .steps-grid {
        display: flex;
        justify-content: space-between;
        gap: 15px;
        margin-bottom: 30px;
    }

    .step-item {
        flex: 1;
        text-align: center;
        background: #fff8ef;
        padding: 15px;
        border-radius: 10px;
        border: 1px dashed #ff9800;
    }

    .step-number {
        display: inline-block;
        width: 30px;
        height: 30px;
        background: #ff9800;
        color: white;
        border-radius: 50%;
        line-height: 30px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .experience-note {
        border-top: 1px solid #eee;
        padding-top: 20px;
        text-align: center;
        font-style: italic;
        color: #666;
    }

    /* Buttons */
    .action-buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 25px;
    }

    .btn-whatsapp, .btn-form {
        padding: 12px 25px;
        text-decoration: none;
        border-radius: 5px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-whatsapp {
        background-color: #25D366;
        color: white;
    }

    .btn-form {
        background-color: #333;
        color: white;
    }

    .btn-whatsapp:hover, .btn-form:hover {
        opacity: 0.9;
        transform: translateY(-2px);
    }

    /* Responsive for Mobile */
    @media (max-width: 600px) {
        .steps-grid {
            flex-direction: column;
        }
        .action-buttons {
            flex-direction: column;
        }
    }
</style>
    
    
    <style>
.cta-wrapper {
    text-align: center;
    margin-top: 20px;
}

.cta-wrapper a {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background-color: #ff6a00;
    color: #ffffff;
    padding: 14px 26px;
    border-radius: 6px;
    font-weight: 600;
    text-decoration: none;
    font-size: 16px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    transition: all 0.3s ease;
}

.cta-wrapper a:hover {
    background-color: #e65c00;
    transform: translateY(-2px);
}

.cta-wrapper i {
    font-size: 18px;
}
</style>

      
      <!-- ✅ Google Font  -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

      <!-- ✅ Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/css/intlTelInput.css">
      <!-- Bootstrap Icon CSS -->
      <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
      
      <!--  Style CSS  -->
      <link rel="stylesheet" href="assets/css/style.css?ver=2.3">
  
  
      <link rel="stylesheet" href="css/shared-enquiry-form.css">

      <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [

    {
      "@type": "Question",
      "name": "Can devotees from Malaysia travel to Tirupati via Chennai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, many devotees travelling from Malaysia choose Chennai as an arrival city before continuing to Tirupati by road."
      }
    },

    {
      "@type": "Question",
      "name": "Why do travellers choose the Chennai route?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Chennai is preferred by many travellers because it offers convenient airport access and practical onward road travel to Tirupati."
      }
    },

    {
      "@type": "Question",
      "name": "Can the trip be completed on the same day?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Some travellers choose same-day plans, while others prefer overnight stay options depending on temple schedule, official ticket availability and travel timing."
      }
    },

    {
      "@type": "Question",
      "name": "What is the Tirupati package price from Malaysia?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Package cost depends on travel date, number of travellers, vehicle type, hotel preference and selected itinerary. Contact us for the latest quote."
      }
    },

    {
      "@type": "Question",
      "name": "How can I enquire about Tirupati packages from Malaysia?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can contact us through WhatsApp or enquiry form with your travel dates and number of travellers."
      }
    },

    {
      "@type": "Question",
      "name": "What is included in Chennai route packages?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Package options may include Chennai pickup, private AC car travel, hotel stay choices, trip planning and return drop support."
      }
    },

    {
      "@type": "Question",
      "name": "Do you provide Chennai Airport pickup?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, pickup can be arranged from Chennai Airport, hotels or residences based on the selected package plan."
      }
    },

    {
      "@type": "Question",
      "name": "Is this route suitable for senior citizens?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Many families choose Chennai road travel because private vehicle options can be comfortable for senior citizens."
      }
    },

    {
      "@type": "Question",
      "name": "How are temple tickets handled?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Temple schedules, tickets and eligibility are managed only through official authorities. Assistance may be available as part of complete travel packages when requested."
      }
    },

    {
      "@type": "Question",
      "name": "Can families and groups use this package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, suitable vehicle options are available for couples, families and group travellers."
      }
    }

  ]
}
</script>

       <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "Chennai to Tirupati Travel Package by Road",
  "description": "Tirupati pilgrimage travel package from Chennai by road with private vehicle travel, pickup support and itinerary assistance for devotees travelling from Malaysia.",
  "touristType": "Pilgrimage",
  "provider": {
    "@type": "Organization",
    "name": "Divine Balaji Travels",
    "url": "https://www.tirupatibalajibooking.com/tirupati-srivani-vip-darshan-malaysia-chennai.php",
    "logo": "https://www.tirupatibalajibooking.com/images/logo/logo.jpg"
  }
  
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
      "name": "Tirupati Package from Malaysia via Chennai",
      "item": "https://www.tirupatibalajibooking.com/tirupati-srivani-vip-darshan-malaysia-chennai.php"
    }

  ]
}
</script>

  
HTML;
include 'header.php';
?>
<?php include 'script.php'; ?>



<!-- Banner Section -->
<section class="srivani-hero-wrapper-unique">

  <div class="srivani-container-unique">

    <!-- LEFT -->
    <div class="hero-left-new">

      <!-- Rating -->
      <div class="hero-rating-new">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <span>Rated by happy travellers based on customer reviews</span>
      </div>

      <!-- Title -->
      <h1 class="hero-title-new">
        Tirupati Travel Package from Malaysia via Chennai
      </h1>

           <!-- Description -->
      <p class="hero-desc-new">
        Tirupati pilgrimage travel package for devotees from Malaysia with Chennai airport pickup, private car travel, hotel stay options and complete trip support.
      </p>

      <!-- Features -->
      <div class="hero-features-new">

        <div class="feature-box-new">
          <i class="fa-solid fa-plane-arrival"></i>
          <p>Chennai Airport Pickup</p>
        </div>

        <div class="feature-box-new">
          <i class="fa-solid fa-car"></i>
          <p>Private Car to Tirupati</p>
        </div>

        <div class="feature-box-new">
          <i class="fa-solid fa-hotel"></i>
          <p>Hotel Stay Options</p>
        </div>

        <div class="feature-box-new">
          <i class="fa-solid fa-user-group"></i>
          <p>Family Friendly Travel</p>
        </div>

      </div>

      <!-- Buttons -->
      <div class="hero-buttons-new">

        <a href="https://wa.me/919994751079?text=Hi,%20I%20am%20travelling%20from%20Malaysia%20and%20planning%20a%20Tirupati%20trip.%20Please%20share%20package%20price,%20vehicle%20options%20and%20details."
           class="btn-primary-new"
           target="_blank">

          <i class="fa-brands fa-whatsapp"></i>
          Get Package Details on WhatsApp
        </a>

        <a href="https://wa.me/919994751079"
           target="_blank"
           class="btn-whatsapp-new">

          <i class="fa-brands fa-whatsapp"></i>
          WhatsApp for Assistance
        </a>

        <a href="#itinerary-section"
           id="viewItineraryBtn"
           class="btn-link-new">

          <i class="fa-solid fa-map-location-dot"></i>
          View Itinerary
        </a>

      </div>

      <!-- Disclaimer -->
      <p style="font-size:13px; margin-top:14px; color:#666;">
        Temple schedules, tickets and eligibility are managed only through official authorities. We operate as an independent private travel company.
      </p>

    </div>

    <!-- RIGHT FORM -->
    <div class="srivani-form-wrapper-unique">

      <h3 class="srivani-form-title-unique">
        Malaysia Devotee Enquiry
      </h3>

      <form class="hero-form" method="post" action="con_enq.php" novalidate>

        <input autocomplete="name" id="hf-name" type="text" name="name" placeholder="Full Name">
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

        <textarea id="hf-message" name="message" rows="4" placeholder="Flight Details / Travel Request"></textarea>
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



<!-- Chennai Road Route vs Hyderabad Travel Option -->
<section class="mxr-route-section">
  <div class="mxr-container">

    <h2 class="mxr-title">
      Chennai Road Travel vs Hyderabad Travel Option
    </h2>

    <div class="mxr-compare-box">

      <!-- Feature Labels -->
      <div class="mxr-features">
        <div class="mxr-row"><span>Feature</span></div>
        <div class="mxr-row"><span>Travel Mode</span></div>
        <div class="mxr-row"><span>Approx. Transit Time</span></div>
        <div class="mxr-row"><span>Travel Flexibility</span></div>
      </div>

      <!-- Chennai Column -->
      <div class="mxr-column mxr-chennai">

        <h3>
          <i class="icon-road"></i>
          Chennai (By Road)
        </h3>

        <div class="mxr-row">
          <p>Private Car Travel</p>
        </div>

        <div class="mxr-row">
          <p>Approx. 4 to 5 Hours</p>
        </div>

        <div class="mxr-row">
          <p class="mxr-high">High (Flexible Pickup Timing)</p>
        </div>

      </div>

      <!-- Hyderabad Column -->
      <div class="mxr-column mxr-hyderabad">

        <h3>
          <i class="icon-plane"></i>
          Hyderabad
        </h3>

        <div class="mxr-row">
          <p>Travel Package Options Available</p>
        </div>

        <div class="mxr-row">
          <p>Depends on Selected Route</p>
        </div>

        <div class="mxr-row">
          <p class="mxr-low">Based on Schedule & Availability</p>
        </div>

      </div>

    </div>

    <p class="mxr-footer">
      Need a Hyderabad travel option?
      <a href="https://www.tirupatibalajibooking.com/tirupati-package-from-hyderabad.php" target="_blank">
        View Hyderabad Tirupati Package
      </a>
    </p>

    <p style="font-size:13px; color:#666; margin-top:15px;">
      Travel duration may vary based on traffic, route conditions and selected package plan.
    </p>

  </div>
</section>

<!-- Chennai to Tirupati Travel Option for Malaysia Devotees -->
<section class="nx-mal-align-sec">
  <div class="nx-mal-align-container">

    <!-- HEADER -->
    <div class="nx-mal-align-header">
      <h2>
        <i class="fas fa-plane-departure"></i>
        Chennai to Tirupati Travel Option for Malaysia Devotees
      </h2>
    </div>

    <!-- FOUR CARD GRID -->
    <div class="nx-mal-align-grid">

      <!-- Card 1 -->
      <div class="nx-mal-align-box">
        <i class="fas fa-star"></i>
        <p>
          For devotees travelling from <strong>Kuala Lumpur (KUL)</strong> and arriving at Chennai (MAA), Chennai is a convenient gateway city for planning a Tirupati pilgrimage trip.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="nx-mal-align-box">
        <i class="fas fa-star"></i>
        <p>
          Our travel packages can include airport pickup, private vehicle transfer, hotel stay options and comfortable road travel support.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="nx-mal-align-box">
        <i class="fas fa-star"></i>
        <p>
          Many overseas devotees prefer Chennai arrival because it offers a practical route for continuing the journey to Tirupati by road.
        </p>
      </div>

      <!-- Card 4 -->
      <div class="nx-mal-align-box">
        <i class="fas fa-star"></i>
        <p>
          Suitable for families, senior citizens and group travellers looking for a smooth and comfortable pilgrimage experience.
        </p>
      </div>

    </div>

    <!-- Bottom Full Width Info -->
    <div class="nx-mal-align-box nx-full-width" style="margin-top:28px;">
      <i class="fas fa-route"></i>
      <p>
        Travel time may vary based on arrival schedule, traffic conditions and selected package plan.
      </p>
    </div>

    <!-- Disclaimer -->
    <p style="font-size:13px; color:#666; margin-top:22px; text-align:center; clear:both;">
      Temple schedules, tickets and eligibility are managed only through official authorities.
    </p>

  </div>
</section>


 <!-- Why Chennai Road Route is a Convenient Option for Tirupati Travel -->
<section class="qx-mal-chn-route-sec">
  <div class="qx-mal-chn-route-wrap">

    <div class="qx-mal-chn-route-grid">

      <!-- LEFT CONTENT -->
      <div class="qx-mal-chn-route-left">

        <h2>
          Why Chennai Road Route is a Convenient Option for Tirupati Travel
        </h2>

        <p>
          Chennai to Tirupati road travel is a popular choice for devotees looking for a practical and comfortable journey with flexible pickup timing and direct private vehicle travel.
        </p>

        <p>
          Compared with multi-step transit plans, road travel can be simpler for families, senior citizens and overseas travellers arriving at Chennai Airport.
        </p>

        <p>
          Our travel packages are planned to help customers reach Tirupati comfortably based on their selected schedule and package type.
        </p>

      </div>

      <!-- RIGHT FEATURES -->
      <div class="qx-mal-chn-route-right">

        <div class="qx-mal-chn-route-card">
          <i class="fas fa-check-circle"></i>
          <span>Comfortable highway travel suitable for families</span>
        </div>

        <div class="qx-mal-chn-route-card">
          <i class="fas fa-check-circle"></i>
          <span>Flexible pickup from Chennai Airport or hotel</span>
        </div>

        <div class="qx-mal-chn-route-card">
          <i class="fas fa-check-circle"></i>
          <span>Approx. 4 to 5 hour road travel time</span>
        </div>

        <div class="qx-mal-chn-route-card">
          <i class="fas fa-check-circle"></i>
          <span>Private vehicle options for smooth travel</span>
        </div>

      </div>

    </div>

    <!-- Bottom Note -->
    <p style="font-size:13px; color:#666; text-align:center; margin-top:24px;">
      Travel time may vary based on traffic, weather conditions and route status.
    </p>

  </div>
</section>


 <!-- Tirupati Travel Package from Malaysia -->
<section class="malaysia-package-section">
  <div class="package-container">

    <h2>
      Tirupati Travel Package from Malaysia via Chennai
    </h2>

    <div class="package-content">

      <!-- Highlight Text -->
      <p class="highlight-text">
        Comfortable Tirupati pilgrimage travel packages for devotees travelling from Malaysia via Chennai with complete trip support.
      </p>

      <!-- Paragraph -->
      <p>
        Popular package options may include <strong>Chennai airport pickup</strong>,
        <strong>private AC car travel</strong>, hotel stay options, trip planning,
        and return support based on the selected itinerary.
      </p>

      <p>
        This Chennai route is preferred by many Malaysia devotees looking for a practical and comfortable Tirupati pilgrimage journey.
      </p>

      <!-- Note Box -->
      <div class="note-box">
        <p>
          Package inclusions may vary based on travel schedule, accommodation category and customization requests.
        </p>
      </div>

      <!-- CTA -->
      <div class="cta-wrapper">

        <a href="https://wa.me/919994751079?text=Hi,%20I%20am%20travelling%20from%20Malaysia%20and%20planning%20a%20Tirupati%20trip.%20Please%20share%20package%20details,%20travel%20options%20and%20itinerary."
           target="_blank">

          <i class="fa-brands fa-whatsapp"></i>
          Get Package Details from Malaysia
        </a>

      </div>

      <!-- Disclaimer -->
      <p style="font-size:13px; color:#666; text-align:center; margin-top:18px;">
        Temple schedules, tickets and eligibility are managed only through official authorities.
      </p>

    </div>

  </div>
</section>

<style>
    .malaysia-package-section {
        padding: 40px 20px;
        background-color: #fff9f0; /* Soft orange/yellow tint */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
    }

    .package-container {
        max-width: 800px;
        margin: 0 auto;
        border: 2px solid #ff9800; /* Orange theme */
        border-radius: 12px;
        background: #ffffff;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        overflow: hidden;
    }

    .malaysia-package-section h2 {
        background-color: #ff9800;
        color: white;
        margin: 0;
        padding: 20px;
        font-size: 24px;
        text-align: center;
        text-transform: uppercase;
    }

    .package-content {
        padding: 30px;
    }

    .highlight-text {
        font-size: 1.1rem;
        color: #333;
        border-left: 5px solid #ff9800;
        padding-left: 15px;
    }

    .note-box {
        background-color: #f1f1f1;
        padding: 15px;
        border-radius: 8px;
        font-style: italic;
        font-size: 0.95rem;
        margin-top: 20px;
        color: #555;
    }

    .cta-wrapper {
        text-align: center;
        margin-top: 25px;
    }

    .whatsapp-btn {
        background-color: #25D366;
        color: white;
        padding: 12px 25px;
        text-decoration: none;
        border-radius: 50px;
        font-weight: bold;
        transition: 0.3s;
        display: inline-block;
    }

    .whatsapp-btn:hover {
        background-color: #128C7E;
        transform: translateY(-2px);
    }
</style>
  
    <!-- HEADER -->

  
 <!-- Chennai to Tirupati Flexible Travel Schedule -->
<section id="itinerary-section" class="zxv-malaysia-chennai-schedule-sec">
  <div class="zxv-container">

    <!-- HEADER -->
    <div class="zxv-header-box">

      <h2 class="zxv-main-title">
        Chennai to Tirupati Flexible Travel Schedule
      </h2>

      <p class="zxv-sub-text">
        Sample same-day or extended travel schedule for devotees travelling from Chennai to Tirupati by road. Final timings may vary based on temple schedules, official ticket availability, traffic and chosen package plan.
      </p>

      <p class="zxv-note-text">
        Note: Darshan timing and trip duration depend on official procedures and travel conditions. Some travellers may choose one day plans, while others may prefer overnight stay options.
      </p>

    </div>

    <!-- TIMELINE -->
    <div class="zxv-timeline-wrap">

      <!-- ITEM 1 -->
      <div class="zxv-timeline-item">
        <div class="zxv-icon"><i class="fa-solid fa-car"></i></div>
        <div class="zxv-content">
          <h3>Early Morning – Pickup from Chennai</h3>
          <p>
            Pickup can be arranged from home, hotel or Chennai Airport and departure towards Tirupati by private vehicle.
          </p>
        </div>
      </div>

      <!-- ITEM 2 -->
      <div class="zxv-timeline-item">
        <div class="zxv-icon"><i class="fa-solid fa-mug-hot"></i></div>
        <div class="zxv-content">
          <h3>During Journey – Breakfast / Refreshment Stop</h3>
          <p>
            Refreshment stop can be planned during the road journey based on travel preference.
          </p>
        </div>
      </div>

      <!-- ITEM 3 -->
      <div class="zxv-timeline-item">
        <div class="zxv-icon"><i class="fa-solid fa-ticket"></i></div>
        <div class="zxv-content">
          <h3>Arrival – Temple Schedule Coordination</h3>
          <p>
            Temple darshan timing, tickets and eligibility are managed only through official authorities and subject to availability.
          </p>
        </div>
      </div>

      <!-- ITEM 4 -->
      <div class="zxv-timeline-item">
        <div class="zxv-icon"><i class="fa-solid fa-gopuram"></i></div>
        <div class="zxv-content">
          <h3>Optional Local Temple Visit</h3>
          <p>
            Depending on available time, travellers may visit nearby temples in Tirupati as part of the trip plan.
          </p>
        </div>
      </div>

      <!-- ITEM 5 -->
      <div class="zxv-timeline-item">
        <div class="zxv-icon"><i class="fa-solid fa-utensils"></i></div>
        <div class="zxv-content">
          <h3>Meal Break</h3>
          <p>
            Lunch or refreshment break can be arranged during the journey based on schedule.
          </p>
        </div>
      </div>

      <!-- ITEM 6 -->
      <div class="zxv-timeline-item">
        <div class="zxv-icon"><i class="fa-solid fa-mountain-city"></i></div>
        <div class="zxv-content">
          <h3>Travel Based on Final Schedule</h3>
          <p>
            Trip timing may continue the same day or extend to the next day depending on darshan schedule and selected package.
          </p>
        </div>
      </div>

      <!-- ITEM 7 -->
      <div class="zxv-timeline-item zxv-success">
        <div class="zxv-icon"><i class="fa-solid fa-star"></i></div>
        <div class="zxv-content">
          <h3>Comfortable Pilgrimage Experience</h3>
          <p>
            Our team assists with travel coordination, pickup, vehicle support and return planning.
          </p>
        </div>
      </div>

      <!-- ITEM 8 -->
      <div class="zxv-timeline-item zxv-dark">
        <div class="zxv-icon"><i class="fa-solid fa-location-dot"></i></div>
        <div class="zxv-content">
          <h3>Return to Chennai</h3>
          <p>
            Return drop to airport, hotel or home can be arranged based on the final itinerary.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>


 <!-- Choosing a Convenient Route for Tirupati Travel -->
<section class="zxq-mal-chn-elite-sec">
  <div class="zxq-mal-chn-elite-wrap">

    <div class="zxq-mal-chn-elite-head">
      <h2>
        <i class="fas fa-route"></i>
        Choosing a Convenient Route for Tirupati Travel
      </h2>
    </div>

    <div class="zxq-mal-chn-elite-content">

      <p>
        Travellers can choose different routes to reach Tirupati depending on arrival city, travel preference, timing and overall trip plan.
      </p>

      <p>
        The Chennai route is often preferred by devotees arriving from Malaysia because it offers a practical option for continuing the journey by road.
      </p>

      <p>
        Hyderabad can also be considered based on airline schedules, travel convenience and selected package requirements.
      </p>

      <p>
        Our team can help you choose a suitable route based on your arrival details, family needs and travel comfort.
      </p>

    </div>

  </div>
</section>


 <!-- Who May Prefer Chennai Route for Tirupati Travel -->
<section class="zxq-mal-chn-who-sec">
  <div class="zxq-mal-chn-wrap">

    <h2 class="zxq-mal-chn-title">
      Who May Prefer Chennai Route for Tirupati Travel?
    </h2>

    <div class="zxq-mal-chn-grid">

      <!-- Item 1 -->
      <div class="zxq-mal-chn-card">
        <div class="zxq-mal-chn-icon">
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="zxq-mal-chn-content">
          <h3>Short Visits</h3>
          <p>Travellers planning a one day or two day India visit.</p>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="zxq-mal-chn-card">
        <div class="zxq-mal-chn-icon">
          <i class="fas fa-users"></i>
        </div>
        <div class="zxq-mal-chn-content">
          <h3>Family Groups</h3>
          <p>Families travelling with children or senior citizens.</p>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="zxq-mal-chn-card">
        <div class="zxq-mal-chn-icon">
          <i class="fas fa-car-side"></i>
        </div>
        <div class="zxq-mal-chn-content">
          <h3>Road Travel Preference</h3>
          <p>Devotees who prefer private road travel after arriving in Chennai.</p>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="zxq-mal-chn-card">
        <div class="zxq-mal-chn-icon">
          <i class="fas fa-globe"></i>
        </div>
        <div class="zxq-mal-chn-content">
          <h3>Malaysia Travellers</h3>
          <p>Overseas devotees arriving in Chennai from Malaysia and nearby regions.</p>
        </div>
      </div>

    </div>

    <p style="font-size:13px; color:#666; text-align:center; margin-top:20px;">
      Route choice depends on arrival city, travel comfort, schedule and selected package plan.
    </p>

  </div>
</section>
  
  <!-- Malaysia Traveller Information Section -->
<section style="font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif; max-width:800px; margin:20px auto; padding:20px; border-left:5px solid #FF8C00; background-color:#fffaf5; border-radius:8px; box-shadow:0 2px 10px rgba(0,0,0,0.05);">

  <h2 style="color:#E67E22; margin-top:0; display:flex; align-items:center; gap:10px; line-height:1.4;">
    <span style="font-size:1.2em;">🟠</span>
    Why Choose This Tirupati Package from Malaysia
  </h2>

  <p style="line-height:1.7; color:#444; font-size:1.05rem; margin-bottom:14px;">
    For devotees travelling from <strong>Malaysia</strong>, this Tirupati travel package via Chennai is a practical and comfortable option with smooth onward road travel after arrival.
  </p>

  <p style="line-height:1.7; color:#444; font-size:1.05rem; margin-bottom:14px;">
    Package options may include airport pickup, private car travel, hotel stay choices, itinerary planning and return support based on your selected travel plan.
  </p>

  <p style="line-height:1.7; color:#444; font-size:1.05rem; margin-bottom:0;">
    Suitable for families, senior citizens and first-time visitors looking for a convenient Tirupati pilgrimage journey.
  </p>

</section>


 

  <!-- Chennai to Tirupati Distance and Travel Time -->
  <section class="xtp-travel-section">
    <div class="xtp-travel-box">

      <h2 class="xtp-travel-title">
        Chennai to Tirupati Distance and Travel Time
      </h2>

      <div class="xtp-travel-card">

        <div class="xtp-row">
          <div class="xtp-left">
            <i class="fa-solid fa-location-dot"></i>
            <span>Distance:</span>
          </div>
          <div class="xtp-right">135 – 150 KM</div>
        </div>

        <div class="xtp-divider"></div>

        <div class="xtp-row">
          <div class="xtp-left">
            <i class="fa-solid fa-clock"></i>
            <span>Travel Time:</span>
          </div>
          <div class="xtp-right">3 to 4 Hours</div>
        </div>

        <div class="xtp-divider"></div>

        <div class="xtp-row">
          <div class="xtp-left">
            <i class="fa-solid fa-route"></i>
            <span>Route:</span>
          </div>
          <div class="xtp-right">
            Chennai → Tiruvallur → Nagari → Tirupati
          </div>
        </div>

      </div>

    </div>
  </section>
  
  
  <div class="vip-cost-section">

  <h2 class="section-title">
    Tirupati Travel Package Details from Chennai
  </h2>

  <div class="vip-cost-box">

    <p>
      Tirupati travel packages from Chennai may vary based on travel date, vehicle type, hotel preference and selected itinerary. Our Chennai route packages are designed to provide a comfortable and well-planned pilgrimage journey for devotees travelling from Malaysia.
    </p>

    <p>
      Package options can include airport pickup, private car travel, stay arrangements and return support depending on your travel requirement.
    </p>

  </div>

</div>
  
 <section class="booking-guide-section">
  <div class="guide-container">

    <h2>
      How to Plan Your Tirupati Trip from Malaysia
    </h2>

    <div class="guide-content">

      <!-- Intro -->
      <p class="intro-text">
        You can easily enquire about Tirupati travel packages from Malaysia through WhatsApp or our enquiry form. This service is designed for devotees looking for a comfortable pilgrimage trip via Chennai with complete travel support.
      </p>

      <p class="intro-text">
        Our team can share package options, travel planning guidance, pickup details and required travel information based on your preferred dates.
      </p>

      <!-- Steps -->
      <div class="steps-grid">

        <div class="step-item">
          <span class="step-number">1</span>
          <p>Contact us via WhatsApp or enquiry form</p>
        </div>

        <div class="step-item">
          <span class="step-number">2</span>
          <p>Share travel dates and number of travellers</p>
        </div>

        <div class="step-item">
          <span class="step-number">3</span>
          <p>Receive package options and itinerary details</p>
        </div>

        <div class="step-item">
          <span class="step-number">4</span>
          <p>Confirm your preferred package plan</p>
        </div>

      </div>

      <!-- Note -->
      <div class="experience-note">

        <p>
          This Tirupati package from Malaysia is suitable for families, senior citizens, group travellers and first-time visitors looking for a smooth journey.
        </p>

        <p>
          Temple schedules, tickets and eligibility are managed only through official authorities.
        </p>

      </div>

      <!-- CTA Buttons -->
      <div class="cta-buttons">

        <a href="https://wa.me/919994751079?text=Hi,%20I%20am%20travelling%20from%20Malaysia%20and%20planning%20a%20Tirupati%20trip.%20Please%20share%20package%20details,%20travel%20options%20and%20itinerary."
           class="cta-btn cta-whatsapp"
           target="_blank">

          <i class="fa-brands fa-whatsapp"></i>
          Get Details on WhatsApp
        </a>

        <a href="#"
           class="cta-btn cta-form zenora-orbit-enquiry-zx91 js-enquiry-open">

          Get Package Details
        </a>

      </div>

    </div>
  </div>
</section>


 <!-- Frequently Asked Questions – Chennai Route -->
<section class="zxq-malaysia-chennai-faq">
  <div class="zxq-faq-wrapper">

    <h2 class="zxq-faq-heading">
      Frequently Asked Questions – Chennai Route
    </h2>

    <!-- Item 1 -->
    <div class="zxq-faq-card">
      <div class="zxq-icon"><i>1</i></div>
      <div class="zxq-content">
        <h3>Can devotees from Malaysia travel to Tirupati via Chennai?</h3>
        <p>
          Yes, many devotees travelling from Malaysia choose Chennai as an arrival city before continuing to Tirupati by road.
        </p>
      </div>
    </div>

    <!-- Item 2 -->
    <div class="zxq-faq-card">
      <div class="zxq-icon"><i>2</i></div>
      <div class="zxq-content">
        <h3>Why do travellers choose the Chennai route?</h3>
        <p>
          Chennai is preferred by many travellers because it offers convenient airport access and practical onward road travel to Tirupati.
        </p>
      </div>
    </div>

    <!-- Item 3 -->
    <div class="zxq-faq-card">
      <div class="zxq-icon"><i>3</i></div>
      <div class="zxq-content">
        <h3>Can the trip be completed on the same day?</h3>
        <p>
          Some travellers choose same-day plans, while others prefer overnight stay options depending on temple schedule, official ticket availability and travel timing.
        </p>
      </div>
    </div>

    <!-- Item 4 -->
    <div class="zxq-faq-card">
      <div class="zxq-icon"><i>4</i></div>
      <div class="zxq-content">
        <h3>What is the Tirupati package price from Malaysia?</h3>
        <p>
          Package cost depends on travel date, number of travellers, vehicle type, hotel preference and selected itinerary. Contact us for the latest quote.
        </p>
      </div>
    </div>

    <!-- Item 5 -->
    <div class="zxq-faq-card">
      <div class="zxq-icon"><i>5</i></div>
      <div class="zxq-content">
        <h3>How can I enquire about Tirupati packages from Malaysia?</h3>
        <p>
          You can contact us through WhatsApp or enquiry form with your travel dates and number of travellers.
        </p>
      </div>
    </div>

    <!-- Item 6 -->
    <div class="zxq-faq-card">
      <div class="zxq-icon"><i>6</i></div>
      <div class="zxq-content">
        <h3>What is included in Chennai route packages?</h3>
        <p>
          Package options may include Chennai pickup, private AC car travel, hotel stay choices, trip planning and return drop support.
        </p>
      </div>
    </div>

    <!-- Item 7 -->
    <div class="zxq-faq-card">
      <div class="zxq-icon"><i>7</i></div>
      <div class="zxq-content">
        <h3>Do you provide Chennai Airport pickup?</h3>
        <p>
          Yes, pickup can be arranged from Chennai Airport, hotels or residences based on the selected package plan.
        </p>
      </div>
    </div>

    <!-- Item 8 -->
    <div class="zxq-faq-card">
      <div class="zxq-icon"><i>8</i></div>
      <div class="zxq-content">
        <h3>Is this route suitable for senior citizens?</h3>
        <p>
          Many families choose Chennai road travel because private vehicle options can be comfortable for senior citizens.
        </p>
      </div>
    </div>

    <!-- Item 9 -->
    <div class="zxq-faq-card">
      <div class="zxq-icon"><i>9</i></div>
      <div class="zxq-content">
        <h3>How are temple tickets handled?</h3>
        <p>
          Temple schedules, tickets and eligibility are managed only through official authorities. Assistance may be available as part of complete travel packages when requested.
        </p>
      </div>
    </div>

    <!-- Item 10 -->
    <div class="zxq-faq-card">
      <div class="zxq-icon"><i>10</i></div>
      <div class="zxq-content">
        <h3>Can families and groups use this package?</h3>
        <p>
          Yes, suitable vehicle options are available for couples, families and group travellers.
        </p>
      </div>
    </div>

    <!-- Compare Link -->
    <div class="zxq-compare-box">
      <p>
        Compare travel options:
        <a href="https://www.tirupatibalajibooking.com/tirupati-package-from-hyderabad.php" target="_blank">
          Chennai Route vs Hyderabad Route
        </a>
      </p>
    </div>

  </div>
</section>
  <script>
    const faqCards = document.querySelectorAll('.zxq-faq-card');

    faqCards.forEach(card => {
      card.addEventListener('click', () => {

        faqCards.forEach(item => {
          if(item !== card) item.classList.remove('active');
        });

        card.classList.toggle('active');
      });
    });
  </script>






<section class="zv9-malaysia-chennai-wrap">
  <div class="zv9-inner-box">

    <h2 class="zv9-title">
      Coverage Areas & International Support Hubs
    </h2>

    <p class="zv9-description">
      Our <strong>spiritual coordination services</strong> provide comprehensive road transit help for devotees from 
      <strong>Kuala Lumpur, Selangor, and Penang</strong>, as well as those traveling from 
      <strong>Johor Bahru and Ipoh</strong> via Chennai. By managing Chennai airport logistics and 
      <strong>official donation procedures</strong>, we ensure a sacred experience for Malaysia's Hindu pilgrims.
    </p>

    <div class="zv9-location-grid">

      <div class="zv9-location-card">
        <i>1</i>
        <span>Kuala Lumpur</span>
      </div>

      <div class="zv9-location-card">
        <i>2</i>
        <span>Selangor</span>
      </div>

      <div class="zv9-location-card">
        <i>3</i>
        <span>Penang</span>
      </div>

      <div class="zv9-location-card">
        <i>4</i>
        <span>Johor Bahru</span>
      </div>

      <div class="zv9-location-card">
        <i>5</i>
        <span>Ipoh</span>
      </div>

    </div>

  </div>
</section>





<section class="bttrp-hero-sec-unique">
  <div class="bttrp-hero-container-unique">

    <h2 class="bttrp-hero-title-unique">
      <i class="fa-solid fa-road"></i>
      Chennai to Tirupati Road Travel Package
    </h2>

    <p class="bttrp-hero-subtitle-unique">
      Plan your Tirupati pilgrimage trip from Chennai with private road travel, pickup support and comfortable package options based on your schedule.
    </p>

    <a href="https://wa.me/919994751079?text=Hi,%20I%20am%20travelling%20from%20Malaysia%20and%20planning%20a%20Tirupati%20trip.%20Please%20share%20package%20details,%20travel%20options%20and%20itinerary."
       class="bttrp-cta-btn-unique"
       target="_blank">

      <i class="fa-brands fa-whatsapp"></i>
      Get Tirupati Package Details from Malaysia
    </a>

    <p class="bttrp-alt-link-wrap-unique">
      Looking for another route option?

      <a href="https://www.tirupatibalajibooking.com/tirupati-package-from-hyderabad.php"
         class="bttrp-alt-link-unique"
         target="_blank">

        Hyderabad Tirupati Travel Package
      </a>
    </p>

    <p style="font-size:13px; color:#666; margin-top:14px;">
      Temple schedules, tickets and eligibility are managed only through official authorities.
    </p>

  </div>
</section>






  <!-- Floating Contact Icons -->
  <div class="zenora-floating-orbit-zx91">

    <!-- WhatsApp -->
    <a href="https://wa.me/919994751079" target="_blank" class="zenora-orbit-whatsapp-zx91">
      <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp support for Malaysia devotees Tirupati darshan">
    </a>

    <!-- Enquiry -->
    <a href="#" class="zenora-orbit-enquiry-zx91 js-enquiry-open">
      <img src="https://cdn-icons-png.flaticon.com/512/3059/3059441.png" alt="Tirupati Srivani VIp Break Darshan enquiry for Malaysia devotees">
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
  <script src="js/enquiry-forms.js"></script>









  <?php 
  include 'footer.php'; 
  ?>


