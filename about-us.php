<?php
ob_start();
// error_reporting(E_ALL) + error-log-config.php (display_errors=Off,
// log_errors=On): warnings are captured server-side in logs/php-errors.log
// instead of being silently discarded or shown to visitors.
error_reporting(E_ALL);
require_once __DIR__ . '/includes/error-log-config.php';
$pageTitle = 'About Divine Balaji Travels | Tirupati Tour Packages from Chennai';
$pageDescription = 'Learn about Divine Balaji Travels, offering Tirupati tour packages from Chennai with private travel, hotel stay and pilgrimage support services.';
$pageCanonical = 'https://www.tirupatibalajibooking.com/about-us.php';
$activeMenu = 'about';
$includeDefaultSchema = false;
$extraHeadLinks = <<<'HTML'
 
   <!-- ✅ Google Font  -->
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"></noscript>

  <!-- ✅ Font Awesome -->
  <link rel="stylesheet" href="assets/css/modern/fa6-subset.css">

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/css/intlTelInput.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/css/intlTelInput.css"></noscript>

  <!-- Bootstrap Icon CSS -->
 
  <!--  Style CSS  -->
  <link rel="stylesheet" href="assets/css/modern/style.css?ver=2.4">
  

 

  <link rel="stylesheet" href="assets/css/legacy/shared-enquiry-form.css">

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TravelAgency",
  "name": "Divine Balaji Travels",
  "url": "https://www.tirupatibalajibooking.com/",
  "logo": "https://www.tirupatibalajibooking.com/assets/images/logo/logo.jpg",
  "image": "https://www.tirupatibalajibooking.com/assets/images/logo/logo.jpg",
  "telephone": "+91-99947-51079",
  "email": "divinebalajitravels@gmail.com",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Core 1, 2nd Floor, Pacifica Tech Park, Rajiv Gandhi Salai, Navalur",
    "addressLocality": "Chennai",
    "addressRegion": "Tamil Nadu",
    "postalCode": "600130",
    "addressCountry": "IN"
  },
  "sameAs": [
    "https://www.tirupatibalajibooking.com/"
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "name": "About Divine Balaji Travels",
  "url": "https://www.tirupatibalajibooking.com/about-us.php",
  "description": "Learn about Divine Balaji Travels, offering Tirupati tour packages from Chennai with private travel, hotel stay and pilgrimage support services.",
  "mainEntity": {
    "@type": "TravelAgency",
    "name": "Divine Balaji Travels"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Tirupati Balaji Booking",
  "url": "https://www.tirupatibalajibooking.com/",
  "publisher": {
    "@type": "Organization",
    "name": "Divine Balaji Travels"
  }
}
</script>

<!-- 4. Breadcrumb Schema -->
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
      "name": "About Us",
      "item": "https://www.tirupatibalajibooking.com/about-us.php"
    }
  ]
}
</script>

    
HTML;
$loadLegacyWidgets = false; // no datepicker/select2/owl/bxslider/magnific-popup on this page
include 'includes/header.php';
?>
<?php include 'includes/script.php'; ?>





<section class="zento-about-sec">
  <div class="zento-about-box">

    <!-- Heading -->
    <div class="zento-about-head">
      <div class="zento-icon-wrap">
        <i class="zento-icon">★</i>
      </div>
      <h1>About Us</h1>
    </div>

    <!-- Content -->
    <div class="zento-about-content">
      <p>
        Welcome to tirupatibalajibooking.com, proudly owned and operated by Divine Balaji Travels, an independent private travel company dedicated to organizing comfortable, reliable, and well-planned Tirupati pilgrimage tour packages for devotees.
      </p>

      <p>
        We specialize exclusively in Tirupati travel packages, temple tours, and pilgrimage travel services for customers travelling from Chennai and other cities. Our mission is to help devotees complete their spiritual journey smoothly with proper travel planning, transparent support, and dependable service.
      </p>
    </div>

  </div>
</section>




<section class="nxq-who-section">
  <div class="nxq-who-container">

    <!-- Row 1 -->
    <div class="nxq-row nxq-head">
      <i class="nxq-icon">✦</i>
      <h2>Who We Are</h2>
    </div>

    <!-- Row 2 -->
    <div class="nxq-row">
      <p>
        Divine Balaji Travels was established with the aim of providing devotees a stress-free and organized way to visit Tirupati Balaji Temple without the confusion of handling transport, accommodation, darshan planning, and trip coordination separately.
      </p>
    </div>

    <div class="nxq-row">
      <p>
        We offer complete end-to-end pilgrimage travel support so customers can focus on their spiritual journey while we manage the travel arrangements professionally.


      </p>
    </div>

  

  </div>
</section>
 


<section class="xevra-specialize-sec">
  <div class="xevra-specialize-wrap">

    <div class="xevra-specialize-head">
      <i class="fas fa-route"></i>
      <h2>What We Specialize In</h2>
    </div>

    <p class="xevra-specialize-sub">
      We focus only on pilgrimage travel services and Tirupati package operations for:
    </p>

    <ul class="xevra-specialize-list">
      <li><i class="fas fa-users"></i> Families</li>
      <li><i class="fas fa-user-shield"></i> Senior Citizens</li>
      <li><i class="fas fa-heart"></i> Couples</li>
      <li><i class="fas fa-user-friends"></i> Group Travellers</li>
      <li><i class="fas fa-map-marked-alt"></i> First-Time Visitors</li>
      <li><i class="fas fa-clock"></i> One-Day Tirupati Packages</li>
      <li><i class="fas fa-suitcase"></i> Customized Family Travel Plans</li>
    </ul>

    <div class="xevra-specialize-note">
      <strong>
        We are not a general tourism company and do not operate unrelated holiday tour packages.
      </strong>
    </div>

  </div>
</section>




<section class="tvsr-services-sec">
  <div class="tvsr-services-container">

    <div class="tvsr-services-header">
      <h2><i class="tvsr-icon">✦</i> Our Services Include</h2>
      <p>
        Depending on package selection and availability, our services may include:
      </p>
    </div>

    <div class="tvsr-services-grid">

      <div class="tvsr-service-item"><i class="tvsr-dot">•</i> Pickup and Drop Transportation</div>
      <div class="tvsr-service-item"><i class="tvsr-dot">•</i> Private / Shared Travel Vehicles</div>
      <div class="tvsr-service-item"><i class="tvsr-dot">•</i> Chennai to Tirupati Tour Packages</div>
      <div class="tvsr-service-item"><i class="tvsr-dot">•</i> Trip Planning and Scheduling</div>
      <div class="tvsr-service-item"><i class="tvsr-dot">•</i> Hotel Stay Assistance</div>
      <div class="tvsr-service-item"><i class="tvsr-dot">•</i> Darshan Travel Coordination</div>
      <div class="tvsr-service-item"><i class="tvsr-dot">•</i> Return Journey Support</div>
      <div class="tvsr-service-item"><i class="tvsr-dot">•</i> Family Pilgrimage Packages</div>
      <div class="tvsr-service-item"><i class="tvsr-dot">•</i> Customer Guidance Throughout Journey</div>

    </div>

    <div class="tvsr-services-footer">
      <strong>
        Our goal is to make every journey peaceful, timely, comfortable, and convenient.
      </strong>
    </div>

  </div>
</section>



<section class="dtsa-pro-section">

  <div class="dtsa-pro-wrapper">

    <!-- LEFT SIDE ACCENT -->
    <div class="dtsa-pro-accent"></div>

    <!-- CONTENT -->
    <div class="dtsa-pro-content">

      <div class="dtsa-pro-header">
        <i class="dtsa-pro-icon fa-solid fa-ticket"></i>
        <h2>Darshan Ticket Assistance</h2>
      </div>
       <div class="dtsa-grid-container">

    <div class="dtsa-grid-box">
      <p>
        As part of selected travel packages, we may assist in checking darshan ticket availability
        through officially available channels for smoother trip planning.
      </p>
    </div>

    <div class="dtsa-grid-box">
      <p>
        We do not provide standalone ticket-only booking services where transport and travel arrangements
        are handled separately by customers.
      </p>
    </div>

    <div class="dtsa-grid-box">
      <p>
        Our focus remains complete pilgrimage package management.
      </p>
    </div>

  </div>

    </div>

  </div>

</section>


<section class="dbt-whychoose-sec">
  <div class="dbt-whychoose-container">

    <div class="dbt-whychoose-header">
      <h2><i class="dbt-icon">✦</i> Why Choose Divine Balaji Travels</h2>
      <p>We ensure a smooth, reliable and comfortable Tirupati pilgrimage experience.</p>
    </div>

    <div class="dbt-whychoose-grid">

      <div class="dbt-whychoose-card">
        <i class="dbt-card-icon">✔</i>
        <span>Trusted Tirupati Travel Specialists</span>
      </div>

      <div class="dbt-whychoose-card">
        <i class="dbt-card-icon">✔</i>
        <span>Complete Journey Coordination</span>
      </div>

      <div class="dbt-whychoose-card">
        <i class="dbt-card-icon">✔</i>
        <span>Responsive Customer Support</span>
      </div>

      <div class="dbt-whychoose-card">
        <i class="dbt-card-icon">✔</i>
        <span>Comfortable Travel Planning</span>
      </div>

      <div class="dbt-whychoose-card">
        <i class="dbt-card-icon">✔</i>
        <span>Transparent Private Service</span>
      </div>

      <div class="dbt-whychoose-card">
        <i class="dbt-card-icon">✔</i>
        <span>Chennai-Based Convenience</span>
      </div>

      <div class="dbt-whychoose-card">
        <i class="dbt-card-icon">✔</i>
        <span>Family Friendly Packages</span>
      </div>

      <div class="dbt-whychoose-card">
        <i class="dbt-card-icon">✔</i>
        <span>Reliable Pilgrimage Assistance</span>
      </div>

    </div>

  </div>
</section>





<section class="dbt-disclaimer-sec">
  <div class="dbt-disclaimer-container">

    <div class="dbt-disclaimer-box">

      <div class="dbt-disclaimer-title">
        <i class="dbt-disclaimer-icon">⚠</i>
        <h2>Important Disclaimer</h2>
      </div>

      <div class="dbt-disclaimer-text">
        <p><strong>tirupatibalajibooking.com</strong> is owned and operated by Divine Balaji Travels.</p>

        <p>We are an independent private travel company and are not affiliated with TTD, Tirumala Tirupati Devasthanams, Tirupati Temple, or any government authority.</p>

        <p>We do not claim to represent any official temple administration.</p>
      </div>

    </div>

  </div>
</section>



<section class="dbt-commit-sec">
  <div class="dbt-commit-container">

    <!-- Header -->
    <div class="dbt-commit-header">
      <h2><i class="dbt-icon">✦</i> Our Commitment</h2>
      <p>
        We understand that Tirupati travel is not just a trip — it is an emotional and spiritual journey for devotees and families. That is why we focus on:
      </p>
    </div>

    <!-- Cards -->
    <div class="dbt-commit-grid">

      <div class="dbt-commit-card">
        <i class="dbt-card-icon">✔</i>
        <h3>Respectful Customer Service</h3>
      </div>

      <div class="dbt-commit-card">
        <i class="dbt-card-icon">✔</i>
        <h3>Timely Travel Coordination</h3>
      </div>

      <div class="dbt-commit-card">
        <i class="dbt-card-icon">✔</i>
        <h3>Safe and Organized Trips</h3>
      </div>

      <div class="dbt-commit-card">
        <i class="dbt-card-icon">✔</i>
        <h3>Honest Communication</h3>
      </div>

      <div class="dbt-commit-card">
        <i class="dbt-card-icon">✔</i>
        <h3>Better Pilgrimage Experience</h3>
      </div>

    </div>

  </div>
</section>




<section class="dbt-contact-section">
  <div class="dbt-contact-wrapper">

    <h2 class="dbt-contact-title">Contact Information</h2>

    <h3 class="dbt-company-name">Divine Balaji Travels</h3>

    <p class="dbt-address-label">REGISTERED ADDRESS:</p>

    <p class="dbt-address-text">
      Core 1, 2nd Floor, Pacifica Tech Park,<br>
      Rajiv Gandhi Salai, Navalur,<br>
      Chennai, Tamilnadu - 600130
    </p>

   <div class="dbt-contact-info-row">

      <div class="dbt-contact-item">
        <i class="dbt-icon-phone"></i>
        <a href="tel:+919994751079" class="dbt-contact-link">
          +91-99947-51079
        </a>
      </div>

      <div class="dbt-contact-item">
        <i class="dbt-icon-mail"></i>
        <a href="mailto:divinebalajitravels@gmail.com" class="dbt-contact-link">
          divinebalajitravels@gmail.com
        </a>
      </div>

    </div>

    <p class="dbt-description-text">
      For Tirupati package enquiries, family bookings, one-day trips, or travel assistance, feel free to contact us.
    </p>

    <p class="dbt-highlight-text">
      We are happy to help you plan your Balaji darshan journey comfortably and peacefully.
    </p>

  </div>
</section>




<section class="vtx-vision-sec">

  <div class="vtx-vision-container">

    <!-- Header -->
    <div class="vtx-vision-header">
      
      <h2>Our Vision</h2>
    </div>

    <!-- Content Box -->
    <div class="vtx-vision-box">
      <p>
        "To become one of the most trusted private Tirupati travel service providers by delivering reliable pilgrimage travel experiences with devotion, discipline, and customer satisfaction."
      </p>
    </div>

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
