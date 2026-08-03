<?php
ob_start();
// error_reporting(E_ALL) + error-log-config.php (display_errors=Off,
// log_errors=On): warnings are captured server-side in logs/php-errors.log
// instead of being silently discarded or shown to visitors.
error_reporting(E_ALL);
require_once __DIR__ . '/includes/error-log-config.php';
$pageTitle = 'Tirupati Balaji VIP Darshan Tour Packages from Chennai';
$pageDescription = 'Tirupati Balaji VIP Darshan tour packages from Chennai with private car travel, pickup, hotel stay options and smooth pilgrimage trip support for devotees.';
$pageCanonical = 'https://www.tirupatibalajibooking.com/tirupati-balaji-vip-darshan-tour-packages-from-chennai.php';
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
  <link rel="stylesheet" href="assets/css/modern/style.css?ver=2.5">
  

 

  <link rel="stylesheet" href="assets/css/legacy/shared-enquiry-form.css">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "TravelAgency",
            "name": "Tirupati Balaji Travels",
            "image": "https://tirupatibalajibooking.com/assets/images/logo/logo.jpg",
            "@id": "https://tirupatibalajibooking.com",
            "url": "https://tirupatibalajibooking.com/tirupati-balaji-vip-darshan-tour-packages-from-chennai.php",
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

  
HTML;
include 'includes/header.php';
?>
<?php include 'includes/script.php'; ?>








<!-- hs Slider Start -->
<div class="slider-area float_left">
    <div id="carousel-example-generic" class="carousel slide" data-interval="false" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="carousel-captions caption-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="content">
                                    <h1 class="TTDtitle" data-animation="animated fadeInLeft">BEST TIRUPATI PACKAGE
                                        FROM CHENNAI -
                                        <span class="ttd-color">TIRUMALA TIRUPATI BALAJI DARSHAN </span>PACKAGE
                                    </h1>
                                    <p data-animation="animated bounceInUp" class="" style="
    color: #ff2a2d;
    font-weight: 800 !important;
    background: #fff;
    text-align: center;
    border: 2px solid #ff9900;
    padding: 10px;
    font-size: 18px;
">Chennai's Best Balaji Darshan Tour Packages More than 10,000 + Happy Customers <span></span>
                                    </p>
                                    <div class="hs_effect_btn">
                                        <ul>
                                            <li data-animation="animated flipInX"><a href="#bookings">FOR BOOKING<i
                                                        class="fa fa-arrow-right"></i></a>
                                            </li>
                                            <li data-animation="animated flipInX"><a href="tel:+919994751079">CALL
                                                    US NOW<i class="fa fa-arrow-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>

                            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 d-none d-sm-none d-md-none  d-lg-block d-xl-block"
                                id="booking">
                                <div class="content_tabs">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="x_slider_form_main_wrapper float_left"
                                                data-animation="animated fadeIn">
                                                <div class="x_slider_form_heading_wrapper float_left">
                                                    <h3><b>Enquire Balaji Darshan Package</b> </h3>
                                                </div>
                                                <form method="post" action="con_enq.php" novalidate>
                                                    <div class="row">

                                                        <div class="col-md-12">

                                                            <div class="form-sec-header">

                                                                <label class="cal-icon">
                                                                    <h3>May I Know What Date looking for Darshan ?
                                                                    </h3>
                                                                    <input aria-label="Choose Date" type="text" name="date"
                                                                        placeholder="Choose Date"
                                                                        class="form-control datepicker" readonly="true">
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="x_slider_select">
                                                                <select aria-label="Select No of Peoples" class="myselect" name="peoples">
                                                                    <!-- <option value="">Select No of Peoples</option>
                                                                        <option value="5500">1 People - AC Indica Car - Rs.5500</option>
                                                                        <option value="6000">2 People - AC Indica Car - Rs.6000</option>
                                                                        <option value="6500">3 People - AC Indica Car - Rs.6500</option>
                                                                        <option value="7000">4 People - AC Indica Car - Rs.7000</option>
                                                                        <option value="9000">5 People - AC Innova Car - Rs.9000</option>
                                                                        <option value="10000">6 People - AC Innova Car - Rs.10000</option>
                                                                        <option value="11000">7 People - AC Tavera Car - Rs.11000</option>
                                                                        <option value="19000">12 People - Tempo Traveller - Rs.19000</option>-->

                                                                    <option value="">Select No of Peoples</option>
                                                                    <option value="7,200">1 People - ETIOS Car -
                                                                        Rs.7,200</option>
                                                                    <option value="8,500">2 People - ETIOS Car - Rs.
                                                                        8,500</option>
                                                                    <option value="9,600">3 People - ETIOS Car -
                                                                        Rs.9,600</option>
                                                                    <option value="11,000">4 People - ETIOS Car -
                                                                        Rs.11,000</option>
                                                                    <option value="13,500">4 People - INNOVA Car -
                                                                        Rs.13,500</option>
                                                                    <option value="14,500">5 People - INNOVA Car -
                                                                        Rs.14,500</option>
                                                                    <option value="16,000">6 People - INNOVA Car -
                                                                        Rs.16,000</option>
                                                                    <option value="18,500">7 People - INNOVA Car -
                                                                        Rs.18,500</option>
                                                                    <option value="22,800">8 People - Tempo
                                                                        Traveller - Rs.22,800</option>
                                                                    <option value="24,400">9 People - Tempo
                                                                        Traveller - Rs.24,400</option>
                                                                    <option value="25,500">10 People - Tempo
                                                                        Traveller - Rs.25,500</option>
                                                                    <option value="26,500">11 People - Tempo
                                                                        Traveller - Rs.26,500</option>
                                                                    <option value="27,800">12 People - Tempo
                                                                        Traveller - Rs.27800</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="x_slider_form_input_wrapper float_left">

                                                                <input autocomplete="name" aria-label="Enter Your Name" type="text" name="name"
                                                                    placeholder="Enter Your Name" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="x_slider_form_input_wrapper float_left">

                                                                <input autocomplete="email" aria-label="Enter Your Email" type="text" name="email"
                                                                    placeholder="Enter Your Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="x_slider_form_input_wrapper float_left">

                                                                <input autocomplete="tel" aria-label="Enter Your Mobile Number with Country code" type="text" name="mobile"
                                                                    placeholder="Enter Your Mobile Number with Country code">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="x_slider_form_input_wrapper float_left">

                                                                <input aria-label="Pickup Address with location" type="text" name="pickup"
                                                                    placeholder="Pickup Address with location">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="x_slider_form_input_wrapper float_left">
                                                                <div class="col-md-5">
                                                                    <?php echo $first_num . "" . $operator . "" . $second_num . " ="; ?>
                                                                    <div class="col-md-7"> </div>
                                                                    <input type="number" name="answer" required="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-12">
                                                            <div class="col-md-12">
<div class="form-error" role="alert" aria-live="polite"></div>
</div>
<div class="x_slider_checkbox_bottom float_left">

                                                                <div class="x_slider_checout_right">
                                                                    <ul>
                                                                        <li><button type="submit"
                                                                                class="btn btn-warning">Book
                                                                                Now</button>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="carousel-item">
                    <div class="carousel-captions caption-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="content">
                                        <h2 data-animation="animated fadeInLeft">CHEAP CAR RENTAL IN<br>
your desired destination</h2>
                                        <p data-animation="animated bounceInUp">One of our top priorities is to adjust each package we offer to our
                                            <br>customer’s exact needs. Rental Cars / Bike / Jeeps <span>Starting @ $3 / Hrs</span>
                                        </p>
                                        <div class="hs_effect_btn">
                                            <ul>
                                                <li data-animation="animated flipInX"><a href="#">about us<i class="fa fa-arrow-right"></i></a>
                                                </li>
                                                <li data-animation="animated flipInX"><a href="#">contact<i class="fa fa-arrow-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 d-none d-sm-none d-md-none  d-lg-block d-xl-block">
                                    <div class="content_tabs">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="x_slider_form_main_wrapper float_left" data-animation="animated fadeIn">
                                                    <div class="x_slider_form_heading_wrapper float_left">
                                                        <h3>Tirupati Tour Packages Available</h3>
                                                    </div>
                                                    <form method="post" action="con_enq.php" novalidate>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                <div class="x_slider_form_input_wrapper float_left">

                                                                    <input autocomplete="name" aria-label="Enter Your Name" type="text" name="name" placeholder="Enter Your Name" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="x_slider_form_input_wrapper float_left">

                                                                    <input autocomplete="email" aria-label="Enter Your Email" type="text" name="email" placeholder="Enter Your Email">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="x_slider_form_input_wrapper float_left">

                                                                    <input autocomplete="tel" aria-label="Enter Your Mobile No" type="text" name="mobile" placeholder="Enter Your Mobile No">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">

                                                                <div class="form-sec-header">

                                                                    <label class="cal-icon">Pick-up Date
                                                                        <input aria-label="Tue 13 Mar 2020" type="text" name="date" placeholder="Tue 13 Mar 2020" class="form-control datepicker">
                                                                    </label>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="x_slider_select">
                                                                    <select aria-label="Select No of Peoples" class="myselect" name="peoples">
                                                                        <option value="">Select No of Peoples</option>
                                                                        <option value="5500">1 People - AC Indica Car - Rs.5500</option>
                                                                        <option value="6000">2 People - AC Indica Car - Rs.6000</option>
                                                                        <option value="6500">3 People - AC Indica Car - Rs.6500</option>
                                                                        <option value="7000">4 People - AC Indica Car - Rs.7000</option>
                                                                        <option value="9000">5 People - AC Innova Car - Rs.9000</option>
                                                                        <option value="10000">6 People - AC Innova Car - Rs.10000</option>
                                                                        <option value="11000">7 People - AC Tavera Car - Rs.11000</option>
                                                                        <option value="19000">12 People - Tempo Traveller - Rs.19000</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="x_slider_form_input_wrapper float_left">

                                                                    <input aria-label="Pickup Address" type="text" name="pickup" placeholder="Pickup Address">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="col-md-12">
<div class="form-error" role="alert" aria-live="polite"></div>
</div>
<div class="x_slider_checkbox_bottom float_left">

                                                                    <div class="x_slider_checout_right">
                                                                        <ul>
                                                                            <li><input type="submit" class="btn btn-warning" value="Book Now">
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span
                        class="number"></span>
                </li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""><span class="number"></span>
                </li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""><span class="number"></span>
                </li>
            </ol>
            <div class="carousel-nevigation">
                <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev"> <i
                        class="fa fa-angle-left"></i>
                </a>
                <a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <i
                        class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- hs Slider End -->
<div class="x_responsive_form_wrapper x_responsive_form_wrapper2 float_left d-block d-sm-block d-md-block  d-lg-none d-xl-none"
    id="bookings">
    <div class="container">
        <div class="x_slider_form_main_wrapper float_left">
            <div class="x_slider_form_heading_wrapper float_left">
                <h3>Enquire Balaji Darshan Package</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!--<div class="x_slider_form_input_wrapper float_left">
                            <h3>Pick-up Location</h3>
                            <input type="text" placeholder="City, Airport, Station, etc.">
                        </div>-->
                    <form method="post" action="con_enq.php" novalidate>
                        <div class="row">

                            <div class="col-md-12">

                                <div class="form-sec-header">

                                    <label class="cal-icon">Pick-up Date
                                        <input aria-label="Choose Date" type="text" name="date" placeholder="Choose Date"
                                            class="form-control datepicker" readonly="true">
                                    </label>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="x_slider_select">
                                    <select aria-label="Select No of Peoples" class="myselect" name="peoples">
                                        <!-- <option value="">Select No of Peoples</option>
                                                                        <option value="5500">1 People - AC Indica Car - Rs.5500</option>
                                                                        <option value="6000">2 People - AC Indica Car - Rs.6000</option>
                                                                        <option value="6500">3 People - AC Indica Car - Rs.6500</option>
                                                                        <option value="7000">4 People - AC Indica Car - Rs.7000</option>
                                                                        <option value="9000">5 People - AC Innova Car - Rs.9000</option>
                                                                        <option value="10000">6 People - AC Innova Car - Rs.10000</option>
                                                                        <option value="11000">7 People - AC Tavera Car - Rs.11000</option>
                                                                        <option value="19000">12 People - Tempo Traveller - Rs.19000</option>-->
                                        <option value="">Select No of Peoples</option>
                                        <option value="7,200">1 People - ETIOS Car - Rs.7,200</option>
                                        <option value="8,500">2 People - ETIOS Car - Rs. 8,500</option>
                                        <option value="9,600">3 People - ETIOS Car - Rs.9,600</option>
                                        <option value="11,000">4 People - ETIOS Car - Rs.11,000</option>
                                        <option value="13,500">4 People - INNOVA Car - Rs.13,500</option>
                                        <option value="14,500">5 People - INNOVA Car - Rs.14,500</option>
                                        <option value="16,000">6 People - INNOVA Car - Rs.16,000</option>
                                        <option value="18,500">7 People - INNOVA Car - Rs.18,500</option>
                                        <option value="22,800">8 People - Tempo Traveller - Rs.22,800</option>
                                        <option value="24,400">9 People - Tempo Traveller - Rs.24,400</option>
                                        <option value="25,500">10 People - Tempo Traveller - Rs.25,500</option>
                                        <option value="26,500">11 People - Tempo Traveller - Rs.26,500</option>
                                        <option value="27,800">12 People - Tempo Traveller - Rs.27800</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="x_slider_form_input_wrapper float_left">

                                    <input autocomplete="name" aria-label="Enter Your Name" type="text" name="name" placeholder="Enter Your Name" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="x_slider_form_input_wrapper float_left">

                                    <input autocomplete="email" aria-label="Enter Your Email" type="text" name="email" placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="x_slider_form_input_wrapper float_left">

                                    <input autocomplete="tel" aria-label="Enter Your Mobile No" type="text" name="mobile" placeholder="Enter Your Mobile No">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="x_slider_form_input_wrapper float_left">

                                    <input aria-label="Pickup Address" type="text" name="pickup" placeholder="Pickup Address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="x_slider_form_input_wrapper float_left">
                                    <div class="col-md-5">
                                        <?php echo $first_num . "" . $operator . "" . $second_num . " ="; ?>
                                        <div class="col-md-7"> </div>
                                        <input type="number" name="answer" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-12">
<div class="form-error" role="alert" aria-live="polite"></div>
</div>
<div class="x_slider_checkbox_bottom float_left">

                                    <div class="x_slider_checout_right">
                                        <ul>
                                            <li><input type="submit" class="btn btn-warning" value="Book Now">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--<div class="col-md-12">
                        <div class="x_slider_form_input_wrapper float_left">
                            <h3>Drop-off Location</h3>
                            <input type="text" placeholder="City, Airport, Station, etc.">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-sec-header">
                            <h3>Pick-up Date</h3>
                            <label class="cal-icon">Pick-up Date
                                <input type="text" placeholder="Tue 16 Jan 2018" class="form-control datepicker">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-sec-header">
                            <h3>Drop-Off Date</h3>
                            <label class="cal-icon">Pick-up Date
                                <input type="text" placeholder="Tue 16 Jan 2018" class="form-control datepicker">
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="x_slider_select">
                            <select class="myselect">
                                <option>09</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select> <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="x_slider_select x_slider_select2">
                            <select class="myselect">
                                <option>50</option>
                                <option>40</option>
                                <option>03</option>
                                <option>02</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="x_slider_select">
                            <select class="myselect">
                                <option>09</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select> <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="x_slider_select x_slider_select2">
                            <select class="myselect">
                                <option>50</option>
                                <option>40</option>
                                <option>03</option>
                                <option>02</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="x_slider_checkbox float_left">
                            <input type="checkbox" id="c5" name="cb">
                            <label for="c5">Driver age is between 30-65 &nbsp;<i class="fa fa-question-circle"></i>
                            </label>
                        </div>
                    </div>-->

            </div>
        </div>
    </div>
</div>
<!-- xs Slider bottom title Start -->
<div class="x_slider_bottom_title_main_wrapper">
    <div class="x_slider_bottom_box_wrapper"> <i class="flaticon-magnifying-glass"></i>
        <h3><a href="#">Plan Your Trip</a></h3>
        <!--<p>Proin gravida nibh vel velit auctor
                <br>aliquet. Aenean sollicitudin, lorem
                <br>quis bibendum auctor.</p>-->
    </div>
    <div class="x_slider_bottom_box_wrapper"> <i class="flaticon-checklist"></i>
        <h3><a href="#">Choose a Package</a></h3>
        <!--<p>Proin gravida nibh vel velit auctor
                <br>aliquet. Aenean sollicitudin, lorem
                <br>quis bibendum auctor.</p>-->
    </div>
    <div class="x_slider_bottom_box_wrapper"> <i class="flaticon-world"></i>
        <h3><a href="#">Divine Darshan</a></h3>
        <!--<p>Proin gravida nibh vel velit auctor
                <br>aliquet. Aenean sollicitudin, lorem
                <br>quis bibendum auctor.</p>-->
    </div>
    <div class="x_slider_bottom_box_wrapper"> <i class="fa fa-headphones"></i>
        <h3><a href="#">24/7 Customer Support</a></h3>
        <!--<p>Proin gravida nibh vel velit auctor
                <br>aliquet. Aenean sollicitudin, lorem
                <br>quis bibendum auctor.</p>-->
    </div>
</div>

<div class="x_offer_car_main_wrapper float_left padding_tb_100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center" style="font-size:18px;color:#fb1010;"> Note: Booking availability may open up to 90 days in advance as per official schedules and subject to availability. Early planning is recommended.

</p>
                <p
                    style="padding-top: 40px; padding-top: 10px;text-align: justify !important;color: #000;line-height: 2;">
                    We Operate Daily Balaji Assured <strong> One Day Chennai To Tirupati Packages</strong>. Our
                    Special Individual Packages are given below</p>
                <ul class="listss">
                    <li><a href="https://tirupatibalajibooking.com"><strong>1. Early Morning Around 5.00 to 5.30 Am
                                Door Step Boarding Point At Chennai Circle</strong></a></li>
                    <li><a href="https://tirupatibalajibooking.com"><strong>2. Rs.300/- Special Segara Darshan
                                Guidance</strong></a></li>
                    <li><a href="https://tirupatibalajibooking.com"><strong>3. Complementary Breakfast &
                                Lunch</strong></a></li>
                    <li><a href="https://tirupatibalajibooking.com"><strong>4. Tirupati Balaji Darshan & Padmavathy
                                Temple Darshan</strong></a></li>
                    <li><a href="https://tirupatibalajibooking.com"><strong>5. After Complete Blessing Darshan Tours
                                Ends With Balaji One Day Darshan Package From Chennai</strong></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- xs Slider bottom title End -->
<!-- xs offer car tabs Start -->
<div class="x_offer_car_main_wrapper float_left padding_tb_100" style="margin-top:-80px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="x_offer_car_heading_wrapper float_left">
                    <h4>What We Offer</h4>
                    <h3>Tirupati Balaji Darshan packages from Chennai</h3><br>
                    <!-- <p>Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero
                            <br>Vestibulum imperdiet nibh vel magna lacinia commodo ultricies,</p>-->
                    <p><strong>Chennai To Tirupati Package </strong> Includes: Free Door Step's Pick and Drop,
                        Breakfast and Lunch, Rs.300/- Special Segara Darshan Ticket, Tirupati Balaji Darshan,
                        Padamavathi Temple Darshan, A/C Cars, Professional Driver with Guide, Divine Balaji
                        <strong>One Day Tirupati Tour Package From Chennai</strong>. Finding the <strong>Best
                            Chennai to tirupati packages</strong> can be a demanding and daunting task. We provide
                        <strong>one day Chennai to Tirupati packages</strong> at the most affordable prices. What’s
                        more for you? Free pickup and drop services from your drop steps. What are you waiting for?
                        Call us now to book your seats.
                    </p>

                    <p>Located in the Indian state of Andhra Pradesh, Tirupati is a famous destination for Hindu
                        Pilgrims all across the world. The city is home to various sacred places and sanctums.
                        Nestled in the seventh peak of the Seshachalam Hills range Sri Venkateswara Temple is among
                        the most enticing places to visit in the city. The temple dedicated to Lord Venkateswara is
                        thronged by 30-40 million people every year. </p>

                    <p>Spread in the sprawling area of 460 acres is Tirumala Tirupati Devasthanam Garden in the
                        vicinity of Sri Venkateswara Temple, Talakona Waterfall is another popular tourist
                        destination. If you are looking for <strong>Tirumala Tirupati tour operators from
                            Chennai</strong>, your search comes to an end. </p>

                    <p>Finding the Best <strong>Tirupati packages from Chennai</strong> can leave you relieving and
                        enjoy the visit to the ‘Spiritual Capital.’ Your convenience and time is our utmost
                        priority, and experienced guides will help you find the best accommodation. Don’t stress
                        about permits, toll, and parking charges; we have got it covered in our packages. </p>
                    <p>
                        You can <strong>book a Tirupati darshan packages from Chennai</strong> for your family
                        members and children. Booking with an incompetent agency can be nerve-wracking, so always
                        look for an experienced agency who positions themselves as experts. While <strong>booking
                            Chennai to tirupati packages</strong>, make sure the amount you pay is explained. Any
                        good agency will walk you through the breakdown of cost, so you know what the total amount
                        constitutes. At times travel agencies may ask you to make an upfront payment or offer you an
                        exclusive deal; make sure you don’t pay extra. Your search for a <strong>one day Chennai to
                            Tirupati package</strong> isn’t about money but the kind of service your receive in lieu
                        of the amount paid. Choose the agency that is reputable and resolve all your concerns. </p>

                    <p>Planning one trip is the most intimidating task right from the beginning. There are a lot of
                        complications and other things you have to abide by. Hence, it is better off working with a
                        travel agency. This will help to save a lot of time and effort as they will organize your
                        trip more effectively. They may give you a glance at their customized plans based on your
                        interest and convenience. </p>

                    <p>Booking with the <strong>best Tirumala Tirupati tour operators from Chennai</strong> will
                        help you find the best accommodation since they are good with research and negotiate hotel
                        charges and other miscellaneous expenses. Simply finding the best tour operators provide you
                        with insights that aren’t available to individual travelers. </p>

                </div>
            </div>

            <div class="col-md-12">
                <div class="x_offer_tabs_wrapper">
                    <ul class="nav nav-tabs">

                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#home">Chennai to tirupati
                                Packages by Car</a>
                        </li>
                        <!-- <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#menu1"> ECONOMIC CARS</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu2"> premium cars</a>
                            </li> -->
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="home" class="tab-pane active">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="x_car_offer_main_boxes_wrapper float_left">
                                    <div class="x_car_offer_starts float_left"> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="x_car_offer_img float_left">
                                        <img loading="lazy" width="190" height="100" decoding="async" src="assets/images/c1.png" alt=" Car Bookings From Chennai to tirupati">
                                    </div>
                                    <div class="x_car_offer_price float_left">
                                        <div class="x_car_offer_price_inner">

                                            <h3>₹ 7,200</h3>

                                        </div>
                                    </div>
                                    <div class="x_car_offer_heading float_left">
                                        <h2>1 Person - A/C Dzire & Etios</h2>

                                    </div>
                                    <div class="x_car_offer_heading float_left">

                                    </div>
                                    <div class="x_car_offer_bottom_btn float_left">
                                        <ul>
                                            <li><a href="https://tirupatibalajibooking.com/">Book now</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="x_car_offer_main_boxes_wrapper float_left">
                                    <div class="x_car_offer_starts float_left"> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="x_car_offer_img float_left">
                                        <img loading="lazy" width="190" height="100" decoding="async" src="assets/images/c1.png" alt="Rs.300/- Special Segara Darshan Guidance ">
                                    </div>
                                    <div class="x_car_offer_price float_left">
                                        <div class="x_car_offer_price_inner">
                                            <h3>₹ 8,500</h3>

                                        </div>
                                    </div>
                                    <div class="x_car_offer_heading float_left">
                                        <h2>2 Persons - A/C Dzire & Etios</h2>

                                    </div>

                                    <div class="x_car_offer_bottom_btn float_left">
                                        <ul>
                                            <li><a href="https://tirupatibalajibooking.com/">Book now</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="x_car_offer_main_boxes_wrapper float_left">
                                    <div class="x_car_offer_starts float_left"> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="x_car_offer_img float_left">
                                        <img loading="lazy" width="190" height="100" decoding="async" src="assets/images/c1.png" alt="One Day Trip from Chennai to Tirupati packages">
                                    </div>
                                    <div class="x_car_offer_price float_left">
                                        <div class="x_car_offer_price_inner">
                                            <h3>₹ 9,600</h3>

                                        </div>
                                    </div>
                                    <div class="x_car_offer_heading float_left">
                                        <h2>3 Persons - A/C Dzire & Etios</h2>

                                    </div>
                                    <!--<div class="x_car_offer_heading float_left">
                                            <ul>
                                                <li> <a href="#"><i class="fa fa-users"></i> &nbsp;4</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-clone"></i> &nbsp;2</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-briefcase"></i> &nbsp;9</a>
                                                </li>
                                                <li>
                                                    <div class="nice-select" tabindex="0"> <span class="current"><i class="fa fa-bars"></i></span>
                                                        <ul class="list">
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Transmission</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-user-circle-o"></i> Minimum age</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>-->
                                    <div class="x_car_offer_bottom_btn float_left">
                                        <ul>
                                            <li><a href="https://tirupatibalajibooking.com/">Book now</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="x_car_offer_main_boxes_wrapper float_left">
                                    <div class="x_car_offer_starts float_left"> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="x_car_offer_img float_left">
                                        <img loading="lazy" width="190" height="100" decoding="async" src="assets/images/c1.png" alt="Tirumala tirupati Packages">
                                    </div>
                                    <div class="x_car_offer_price float_left">
                                        <div class="x_car_offer_price_inner">
                                            <h3>₹ 11,000</h3>

                                        </div>
                                    </div>
                                    <div class="x_car_offer_heading float_left">
                                        <h2>4 Persons - A/C Dzire & Etios</h2>

                                    </div>
                                    <!--<div class="x_car_offer_heading float_left">
                                            <ul>
                                                <li> <a href="#"><i class="fa fa-users"></i> &nbsp;4</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-clone"></i> &nbsp;2</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-briefcase"></i> &nbsp;9</a>
                                                </li>
                                                <li>
                                                    <div class="nice-select" tabindex="0"> <span class="current"><i class="fa fa-bars"></i></span>
                                                        <ul class="list">
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Transmission</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-user-circle-o"></i> Minimum age</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>-->
                                    <div class="x_car_offer_bottom_btn float_left">
                                        <ul>
                                            <li><a href="https://tirupatibalajibooking.com/">Book now</a>
                                            </li>
                                            <!--<li><a href="#">Details</a>
                                                </li>-->
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="x_car_offer_main_boxes_wrapper float_left">
                                    <div class="x_car_offer_starts float_left"> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="x_car_offer_img float_left">
                                        <img loading="lazy" width="190" height="100" decoding="async" src="assets/images/c2.png" alt="Rs.300 Special Entry Dharshan Guidance">
                                    </div>
                                    <div class="x_car_offer_price float_left">
                                        <div class="x_car_offer_price_inner">

                                            <h3>₹ 14,500</h3>

                                        </div>
                                    </div>
                                    <div class="x_car_offer_heading float_left">
                                        <h2>5 Person - A/C INNOVA </h2>

                                    </div>
                                    <div class="x_car_offer_heading float_left">
                                        <!--<ul>
                                                <li> <a href="#"><i class="fa fa-users"></i> &nbsp;4</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-clone"></i> &nbsp;2</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-briefcase"></i> &nbsp;9</a>
                                                </li>
                                                <li>
                                                    <div class="nice-select" tabindex="0"> <span class="current"><i class="fa fa-bars"></i></span>
                                                        <ul class="list">
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Transmission</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-user-circle-o"></i> Minimum age</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>-->
                                    </div>
                                    <div class="x_car_offer_bottom_btn float_left">
                                        <ul>
                                            <li><a href="https://tirupatibalajibooking.com/">Book now</a>
                                            </li>
                                            <!--<li><a href="#">Details</a>
                                                </li>-->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="x_car_offer_main_boxes_wrapper float_left">
                                    <div class="x_car_offer_starts float_left"> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="x_car_offer_img float_left">
                                        <img loading="lazy" width="190" height="100" decoding="async" src="assets/images/c2.png" alt="TIRUPATI BALAJI DARSHAN PACKAGES FROM CHENNAI">
                                    </div>
                                    <div class="x_car_offer_price float_left">
                                        <div class="x_car_offer_price_inner">
                                            <h3>₹ 16,000</h3>

                                        </div>
                                    </div>
                                    <div class="x_car_offer_heading float_left">
                                        <h2>6 Persons - A/C Innova </h2>

                                    </div>
                                    <!--<div class="x_car_offer_heading float_left">
                                            <ul>
                                                <li> <a href="#"><i class="fa fa-users"></i> &nbsp;4</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-clone"></i> &nbsp;2</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-briefcase"></i> &nbsp;9</a>
                                                </li>
                                                <li>
                                                    <div class="nice-select" tabindex="0"> <span class="current"><i class="fa fa-bars"></i></span>
                                                        <ul class="list">
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Transmission</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-user-circle-o"></i> Minimum age</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>-->
                                    <div class="x_car_offer_bottom_btn float_left">
                                        <ul>
                                            <li><a href="https://tirupatibalajibooking.com/">Book now</a>
                                            </li>
                                            <!--<li><a href="#">Details</a>
                                                </li>-->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="x_car_offer_main_boxes_wrapper float_left">
                                    <div class="x_car_offer_starts float_left"> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="x_car_offer_img float_left">
                                        <img loading="lazy" width="190" height="100" decoding="async" src="assets/images/c2.png" alt="
Chennai To Tirupati Package
">
                                    </div>
                                    <div class="x_car_offer_price float_left">
                                        <div class="x_car_offer_price_inner">
                                            <h3>₹ 18,500 </h3>

                                        </div>
                                    </div>
                                    <div class="x_car_offer_heading float_left">
                                        <h2>7 Persons - A/C Innova</h2>

                                    </div>
                                    <!--<div class="x_car_offer_heading float_left">
                                            <ul>
                                                <li> <a href="#"><i class="fa fa-users"></i> &nbsp;4</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-clone"></i> &nbsp;2</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-briefcase"></i> &nbsp;9</a>
                                                </li>
                                                <li>
                                                    <div class="nice-select" tabindex="0"> <span class="current"><i class="fa fa-bars"></i></span>
                                                        <ul class="list">
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Transmission</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-user-circle-o"></i> Minimum age</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>-->
                                    <div class="x_car_offer_bottom_btn float_left">
                                        <ul>
                                            <li><a href="https://tirupatibalajibooking.com/">Book now</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="x_car_offer_main_boxes_wrapper float_left">
                                    <div class="x_car_offer_starts float_left"> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="x_car_offer_img float_left">
                                        <img loading="lazy" width="190" height="100" decoding="async" src="assets/images/c4.png" alt="
Chennai To Tirupati dharshan packages">
                                    </div>
                                    <div class="x_car_offer_price float_left">
                                        <div class="x_car_offer_price_inner">
                                            <h3>₹ 22,800</h3>

                                        </div>
                                    </div>
                                    <div class="x_car_offer_heading float_left">
                                        <h2>8 Persons - A/C Tempo </h2>

                                    </div>

                                    <!--<div class="x_car_offer_heading float_left">
                                            <ul>
                                                <li> <a href="#"><i class="fa fa-users"></i> &nbsp;4</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-clone"></i> &nbsp;2</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-briefcase"></i> &nbsp;9</a>
                                                </li>
                                                <li>
                                                    <div class="nice-select" tabindex="0"> <span class="current"><i class="fa fa-bars"></i></span>
                                                        <ul class="list">
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Transmission</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-user-circle-o"></i> Minimum age</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>-->
                                    <div class="x_car_offer_bottom_btn float_left">
                                        <ul>
                                            <li><a href="https://tirupatibalajibooking.com/">Book now</a>
                                            </li>
                                            <!--<li><a href="#">Details</a>
                                                </li>-->
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="x_car_offer_main_boxes_wrapper float_left">
                                    <div class="x_car_offer_starts float_left"> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="x_car_offer_img float_left">
                                        <img loading="lazy" width="190" height="100" decoding="async" src="assets/images/c4.png" alt="One Day Tirupati Tour Package From Chennai">
                                    </div>
                                    <div class="x_car_offer_price float_left">
                                        <div class="x_car_offer_price_inner">

                                            <h3>₹ 24,400</h3>

                                        </div>
                                    </div>
                                    <div class="x_car_offer_heading float_left">
                                        <h2>9 Person - A/C Tempo </h2>

                                    </div>

                                    <div class="x_car_offer_bottom_btn float_left">
                                        <ul>
                                            <li><a href="https://tirupatibalajibooking.com/">Book now</a>
                                            </li>
                                            <!--<li><a href="#">Details</a>
                                                </li>-->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="x_car_offer_main_boxes_wrapper float_left">
                                    <div class="x_car_offer_starts float_left"> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="x_car_offer_img float_left">
                                        <img loading="lazy" width="190" height="100" decoding="async" src="assets/images/c4.png" alt="Best Chennai to tirupati packages">
                                    </div>
                                    <div class="x_car_offer_price float_left">
                                        <div class="x_car_offer_price_inner">
                                            <h3>₹ 25,500</h3>

                                        </div>
                                    </div>
                                    <div class="x_car_offer_heading float_left">
                                        <h2>10 Persons - A/C Tempo </h2>

                                    </div>
                                    <!--<div class="x_car_offer_heading float_left">
                                            <ul>
                                                <li> <a href="#"><i class="fa fa-users"></i> &nbsp;4</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-clone"></i> &nbsp;2</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-briefcase"></i> &nbsp;9</a>
                                                </li>
                                                <li>
                                                    <div class="nice-select" tabindex="0"> <span class="current"><i class="fa fa-bars"></i></span>
                                                        <ul class="list">
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Transmission</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-user-circle-o"></i> Minimum age</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>-->
                                    <div class="x_car_offer_bottom_btn float_left">
                                        <ul>
                                            <li><a href="https://tirupatibalajibooking.com/">Book now</a>
                                            </li>
                                            <!--<li><a href="#">Details</a>
                                                </li>-->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="x_car_offer_main_boxes_wrapper float_left">
                                    <div class="x_car_offer_starts float_left"> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="x_car_offer_img float_left">
                                        <img loading="lazy" width="190" height="100" decoding="async" src="assets/images/c4.png" alt="Tirumala Tirupati tour operators from Chennai">
                                    </div>
                                    <div class="x_car_offer_price float_left">
                                        <div class="x_car_offer_price_inner">
                                            <h3>₹ 26,500 </h3>

                                        </div>
                                    </div>
                                    <div class="x_car_offer_heading float_left">
                                        <h2>11 Persons - A/C Tempo </h2>

                                    </div>
                                    <!--<div class="x_car_offer_heading float_left">
                                            <ul>
                                                <li> <a href="#"><i class="fa fa-users"></i> &nbsp;4</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-clone"></i> &nbsp;2</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-briefcase"></i> &nbsp;9</a>
                                                </li>
                                                <li>
                                                    <div class="nice-select" tabindex="0"> <span class="current"><i class="fa fa-bars"></i></span>
                                                        <ul class="list">
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Transmission</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-user-circle-o"></i> Minimum age</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>-->
                                    <div class="x_car_offer_bottom_btn float_left">
                                        <ul>
                                            <li><a href="https://tirupatibalajibooking.com/">Book now</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="x_car_offer_main_boxes_wrapper float_left">
                                    <div class="x_car_offer_starts float_left"> <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="x_car_offer_img float_left">
                                        <img loading="lazy" width="190" height="100" decoding="async" src="assets/images/c4.png" alt="Tirupati packages from Chennai">
                                    </div>
                                    <div class="x_car_offer_price float_left">
                                        <div class="x_car_offer_price_inner">
                                            <h3>₹ 27,800</h3>

                                        </div>
                                    </div>
                                    <div class="x_car_offer_heading float_left">
                                        <h2>12 Persons - A/C Tempo </h2>

                                    </div>

                                    <!--<div class="x_car_offer_heading float_left">
                                            <ul>
                                                <li> <a href="#"><i class="fa fa-users"></i> &nbsp;4</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-clone"></i> &nbsp;2</a>
                                                </li>
                                                <li> <a href="#"><i class="fa fa-briefcase"></i> &nbsp;9</a>
                                                </li>
                                                <li>
                                                    <div class="nice-select" tabindex="0"> <span class="current"><i class="fa fa-bars"></i></span>
                                                        <ul class="list">
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-code-fork"></i> Transmission</a>
                                                            </li>
                                                            <li class="dpopy_li"><a href="#"><i class="fa fa-user-circle-o"></i> Minimum age</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>-->
                                    <div class="x_car_offer_bottom_btn float_left">
                                        <ul>
                                            <li><a href="https://tirupatibalajibooking.com/">Book now</a>
                                            </li>
                                            <!--<li><a href="#">Details</a>
                                                </li>-->
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- xs offer car tabs End -->
<!-- btc team Wrapper Start -->
<div class="btc_team_main_wrapper">
    <div class="btc_team_img_overlay"></div>
    <div class="container">
        <div class="btc_team_left_wrapper">
            <h3>Highlights of Chennai to tirupati Packages </h3>
            <p>Our drivers are experienced with routes and all the sightseeing places in Tirupati. Our team of
                planners is ready to help you around the clock. Book your one day Tirupati Package from Chennai now
            </p>
        </div>
        <div class="btc_team_right_wrapper">
            <div class="btc_team_slider_wrapper">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="btc_team_slider_cont_main_wrapper">
                            <div class="btc_team_img_wrapper">
                                <img loading="lazy" width="240" height="211" decoding="async" src="assets/images/t1.jpg" alt="book a Tirupati darshan packages from Chennai ">
                                <div class="x_team_label_wrapper">
                                    <p>Exclusive</p>
                                </div>
                            </div>
                            <div class="btc_team_img_cont_wrapper">
                                <h4><a href="#">One Day Tirupati Packages</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="btc_team_slider_cont_main_wrapper">
                            <div class="btc_team_img_wrapper">
                                <img loading="lazy" width="240" height="211" decoding="async" src="assets/images/t2.jpg" alt="team_img1">
                                <div class="x_team_label_wrapper">
                                    <p>Exclusive</p>
                                </div>
                            </div>
                            <div class="btc_team_img_cont_wrapper">
                                <h4><a href="#"> Tirumala Tirupati Package </a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="btc_team_slider_cont_main_wrapper">
                            <div class="btc_team_img_wrapper">
                                <img loading="lazy" width="240" height="211" decoding="async" src="assets/images/t3.jpg" alt="booking Chennai to tirupati packages">
                                <div class="x_team_label_wrapper">
                                    <p>Exclusive</p>
                                </div>
                            </div>
                            <div class="btc_team_img_cont_wrapper">
                                <h4><a href="#">Rs.300/- Special Entry Darshan Guidance </a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="btc_team_slider_cont_main_wrapper">
                            <div class="btc_team_img_wrapper">
                                <img loading="lazy" width="245" height="220" decoding="async" src="assets/images/t4.jpg" alt="one day Chennai to Tirupati package">
                                <div class="x_team_label_wrapper">
                                    <p>Exclusive</p>
                                </div>
                            </div>
                            <div class="btc_team_img_cont_wrapper">
                                <h4><a href="#">Shree Balaji Segara Darshanam </a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- btc team Wrapper End -->
<!-- x counter Wrapper Start -->
<div class="x_counter_main_wrapper">
    <div class="x_counter_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="x_counter_car_heading_wrapper float_left">
                    <h3>One Day Tirumala Tirupati Balaji Darshan Package from Chennai</h3><br>
                    <h4>How it works?</h4>
                    <p>We have Exclusive Booking for Daily Tirupati Darshan Packages From chennai
                        <br>24/7 Available All Type of Vehicles Free Pick and Drop at Your Door Step's
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="x_cou_main_box_wrapper">
                    <div class="x_icon"> <i class="flaticon-airplane-shape"></i>
                    </div>
                    <h5><span>1.</span> <a href="#">pick destination</a></h5>
                    <p>We Pick up All Major Locations From Chennai</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="x_cou_main_box_wrapper">
                    <div class="x_icon"> <i class="flaticon-calendar"></i>
                    </div>
                    <h5><span>2.</span> <a href="#">select term</a></h5>
                    <p> Hurry Choose a Exclusive Date Plan a Darshan</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="x_cou_main_box_wrapper">
                    <div class="x_icon"> <i class="flaticon-sedan-car-front"></i>
                    </div>
                    <h5><span>3.</span> <a href="#">choose a car</a></h5>
                    <p>Select a Members and Chooase a Perfect Car </p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="x_cou_main_box_wrapper x_cou_main_box_wrapper_last">
                    <div class="x_icon"> <i class="flaticon-emoticon-square-smiling-face-with-closed-eyes"></i>
                    </div>
                    <h5><span>4.</span> <a href="#">enjoy the ride</a></h5>
                    <p>Peaceful Divine Balaji and Padmavathi Darshan </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- x counter Wrapper End -->
<!-- x booking Wrapper Start -->
<!-- <div class="x_booking_main_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="x_book_logo_wrapper float_left">
                        <img loading="lazy" width="144" height="43" decoding="async" src="assets/images/white_logo.png" alt="logo">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="x_book_logo_heading_wrapper float_left">
                        <h3>Book on AutoRez Now!</h3>
                        <p>The Most User Centric Rental Theme on the Market.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="x_book_logo_btn float_left">
                        <ul>
                            <li><a href="#">See All Cars <i class="fa fa-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- x booking Wrapper End -->
<!-- xs offer car tabs Start -->
<div class="x_offer_car_main_wrapper float_left padding_tb_100" style="padding-bottom: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="x_offer_car_heading_wrapper float_left">
                    <h4>Testimonials</h4>
                    <h3>Top Reviews</h3>
                    <p style="text-align: center !important;">We have more than 10,000 + Happy Customers to Serve a
                        Service for all Devotees </p><br>
                </div>
            </div>
            <div class="col-md-12">
                <div class="screenshot">
                    <div class="owl-carousel screen nplr screen-loop">
                        <div>
                            <div class="card  valign-wrapper">
                                <!-- Client's image -->
                                <!-- <div class="card-image">
                                        <img loading="lazy" width="128" height="128" decoding="async" src="assets/images/client_1.jpg" alt="img">
                                    </div> -->
                                <!-- /Client's image -->
                                <div class="card-content center-align valign">
                                    <div class="testi_slide_star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <!-- Client's Feedback -->
                                    <p>“ Very Good Service Tirupati Balaji Travels On Time Pick and Drop Driver is
                                        Very Kind and support with us ”</p>
                                    <!-- /Client's Feedback -->
                                    <!-- Client's Name -->
                                    <p class="card-title"> Dhanalaskhmi <span> Chennai </span>
                                    </p>
                                    <!-- /Client's Name -->
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card  valign-wrapper">
                                <!-- Client's image -->
                                <!-- <div class="card-image">
                                        <img loading="lazy" width="70" height="70" decoding="async" src="assets/images/client_2.jpg" alt="img">
                                    </div> -->
                                <!-- /Client's image -->
                                <div class="card-content center-align valign">
                                    <div class="testi_slide_star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <!-- Client's Feedback -->
                                    <p>“ Trip was Well planned , arranged by the team.
                                        One major drawback in Tamil Nadu is language problem. I think team has to
                                        arrange for drivers, guide who can speak Tamil , English and any other
                                        indian language ”</p>
                                    <!-- /Client's Feedback -->
                                    <!-- Client's Name -->
                                    <p class="card-title"> Sunil Kumar <span> Mumbai </span>
                                    </p>
                                    <!-- /Client's Name -->
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card  valign-wrapper">
                                <!-- Client's image -->
                                <!-- <div class="card-image">
                                        <img loading="lazy" width="70" height="70" decoding="async" src="assets/images/client_3.jpg" alt="img">
                                    </div> -->
                                <!-- /Client's image -->
                                <div class="card-content center-align valign">
                                    <div class="testi_slide_star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <!-- Client's Feedback -->
                                    <p>“ The best experience of touring in Balaji Darshan. Services were very good,
                                        hotels, vehicle, especially the driver. Keep up the good work. ”</p>
                                    <!-- /Client's Feedback -->
                                    <!-- Client's Name -->
                                    <p class="card-title"> Subha <span> Delhi </span>
                                    </p>
                                    <!-- /Client's Name -->
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card  valign-wrapper">
                                <!-- Client's image -->
                                <!-- <div class="card-image">
                                        <img loading="lazy" width="77" height="85" decoding="async" src="assets/images/client_4.jpg" alt="img">
                                    </div> -->
                                <!-- /Client's image -->
                                <div class="card-content center-align valign">
                                    <div class="testi_slide_star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <!-- Client's Feedback -->
                                    <p>“ Best Tour Operator i am very impressive to going Tirupati temples around
                                        Chennai with 2day ”</p>
                                    <!-- /Client's Feedback -->
                                    <!-- Client's Name -->
                                    <p class="card-title"> Gaurav Maid <span> Gujarat </span>
                                    </p>
                                    <!-- /Client's Name -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- btc team Wrapper Start -->
<div class="x_why_main_wrapper">
    <div class="x_why_img_overlay"></div>
    <div class="container">
        <div class="x_why_left_main_wrapper">
            <picture><source srcset="assets/images/w1.webp" type="image/webp"><img loading="lazy" width="1017" height="445" decoding="async" src="assets/images/w1.png" alt="best Tirumala Tirupati tour operators from Chennai "></picture>
        </div>
        <div class="x_why_right_main_wrapper">
            <h3> Why Choose Our Chennai to Tirupati Travel Package?</h3>
            <!--<ul class="why_choose_us">
                    <li> The above prices include Breakfast, Lunch, and Rs.300 Special Entry Ticket.</li>
                    <li>The package also includes Permit Tax, Service Tax, Toll Gate, Car Parking & &nbsp;&nbsp; Driver Bata.</li>
                    <li>Each Special Entry Ticket will get you 1 Laddus free.</li>
                    <li>The package also includes Permit Tax, Service Tax, Toll Gate, Car Parking & &nbsp;&nbsp; Driver Bata.</li>
                    <li>Our drivers will guide you for Darshan, Tonsure, Thulaparam etc. as per your needs.</li>
                    <li>The package covers two temples – Tirupati Balaji Temple & Alamelumangapuram Temple.</li>
                    <li>If you want to include Kalahasti Temple there will be an addition of Rs.750.</li>
                    <li>The timings may change depending on darshan timings available. But the tour will be completed in one day.</li>
                    <li>The A/C will not work in the hill region from Tirumala to Tirupati due to the climb. Please cooperate with us.</li>
                </ul>-->
            <p style="text-align: justify;">We are pioneers of the tour and travel industry, <strong>booking one day
                    Chennai to Tirupati packages</strong> for thousands of customers. What makes us exceptional is
                the affordable services and the exquisite service that makes the customer’s journey more peaceful
                and serene. </p>

            <p style="text-align: justify;">Darshan Tickets and Car rentals can burn a hole in your pocket. Don’t
                fret. We have got this covered in our <strong>Chennai to Tirupati dharshan packages</strong>. Not
                only this, any additional charge such as toll, parking, and permits is all-inclusive in the package.
                We don’t ask for an additional amount later or hidden cost included in packages. Our experts will
                break down every little detail of the tour, and you can reach them anytime. This is pertinent for
                two reasons. One, while planning the trip, the traveler can easily comprehend if the tickets are
                ready and if the accommodation details are shared at the destination secondly if you face any issue
                that needs urgent attention to the tour and travel company during the trip. We have a new model of
                all the latest cars like Innova/Innova Crysta, Etios/ Desire, Tavera, Tempo Traveller with Air
                Conditioned. Expect a free pick up and drop facility within the city limits. </p>

            <p style="text-align: justify;">While you final your <strong>Tirupati darshan package from
                    Chennai</strong>, search for the travel company that abides by all the legalities of the
                industry and are licensed to carry these services, and last look for their reviews on search engines
                but don’t completely rely on the same. At times, companies post fake reviews; instead, look for
                <strong>Tirumala Tirupati tour operators from Chennai</strong> that are common among your friends
                and family.
            </p>
            <!-- <ul>
                    <li><a href="#">read more <i class="fa fa-arrow-right"></i></a>
                    </li>
                </ul>-->
        </div>
    </div>
</div>

<!--<section class="feat">
        <div class="container-fluid">
            <div class="row">
                <h2>Some Features that Made us Unique at Tirupati Balaji Booking</h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="btc_team_slider_cont_main_wrapper">

                        <div class="btc_ln_img_cont_wrapper float_left">
                            <h4><a href="#">ASSURED DARSHAN</a></h4>

                            <p>All our Tirupati packages includes Special VIP Darshan Tickets.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="btc_team_slider_cont_main_wrapper">

                        <div class="btc_ln_img_cont_wrapper float_left">
                            <h4><a href="#">BREAKFAST AND DINNER</a></h4>

                            <p>Our Tirupati Tour packages includes Breakfast and Lunch.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="btc_team_slider_cont_main_wrapper">

                        <div class="btc_ln_img_cont_wrapper float_left">
                            <h4><a href="#">PICK-UP AND DROP</a></h4>

                            <p>Our Packages includes pick up and drop you at your doorstep</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="btc_team_slider_cont_main_wrapper">

                        <div class="btc_ln_img_cont_wrapper float_left">
                            <h4><a href="#">LOWEST PRICES</a></h4>

                            <p>Our packages is lowest price and the highest value.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="btc_team_slider_cont_main_wrapper">

                        <div class="btc_ln_img_cont_wrapper float_left">
                            <h4><a href="#">24X7 CUSTOMER SUPPORT</a></h4>

                            <p>We are 24/7 available to guide your tirupati travel needs from Chennai.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="btc_team_slider_cont_main_wrapper">

                        <div class="btc_ln_img_cont_wrapper float_left">
                            <h4><a href="#">ALL INCLUSIVE PACKAGES</a></h4>

                            <p>All our Tirupati packages also include parking, tollgate, driver beta and fuels</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="btc_team_slider_cont_main_wrapper">

                        <div class="btc_ln_img_cont_wrapper float_left">
                            <h4><a href="#">GET EARLY CHECK-IN</a></h4>

                            <p>We assured early check-in and check out at temple.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="btc_team_slider_cont_main_wrapper">

                        <div class="btc_ln_img_cont_wrapper float_left">
                            <h4><a href="#">BEST TRAVEL GUIDE</a></h4>

                            <p>Our driver will guide you to get Wonderful tirupati trip.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>-->
<?php include './includes/footer.php'; ?>
</html>