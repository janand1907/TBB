<?php
$pageTitle = "Famous Temples Near Tirupati | Temple Tour Guide";
$pageDescription = "Explore famous temples near Tirupati including Sri Padmavathi, Govindaraja Swamy, ISKCON and more, with private car travel and darshan planning support.";
$activeMenu = 'temples';
include './includes/header.php';
?>
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
                                        <h1 class="TTDtitle" data-animation="animated fadeInLeft">
                                            Tirumala Darshan for NRI
                                            <br />
                                            <span class="ttd-color">TIRUPATI BALAJI DARSHAN </span>PACKAGE
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
                                                        <h3>Enquire Balaji Darshan Package</h3>
                                                    </div>
                                                    <form method="post" action="con_enq.php" novalidate>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-sec-header">
                                                                    <input aria-label="Darshan Date" type="text" name="date"
                                                                        placeholder="Darshan Date"
                                                                        class="form-control datepicker" readonly="true">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="x_slider_select">
                                                                    <select aria-label="Select No of Peoples" class="myselect" name="peoples">
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

                                                                    <input autocomplete="tel" aria-label="Enter Your Mobile No" type="text" name="mobile"
                                                                        placeholder="Enter Your Mobile No">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="x_slider_form_input_wrapper float_left">

                                                                    <input aria-label="Pickup Address" type="text" name="pickup"
                                                                        placeholder="Pickup Address">
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

                        <form method="post" action="con_enq.php" novalidate>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-sec-header">

                                        <div class="form-sec-header">
                                            <input aria-label="Darshan Date" type="text" name="date" placeholder="Darshan Date"
                                                class="form-control datepicker" readonly="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="x_slider_select">
                                        <select aria-label="Select No of Peoples" class="myselect" name="peoples">
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
                </div>
            </div>
        </div>
    </div>
    <!-- xs Slider bottom title Start -->
    <div class="x_slider_bottom_title_main_wrapper">
        <div class="x_slider_bottom_box_wrapper"> <i class="flaticon-magnifying-glass"></i>
            <h3><a href="javascript:void(0);">Plan Your Trip</a></h3>
        </div>
        <div class="x_slider_bottom_box_wrapper"> <i class="flaticon-checklist"></i>
            <h3><a href="javascript:void(0);">Choose a Package</a></h3>
        </div>
        <div class="x_slider_bottom_box_wrapper"> <i class="flaticon-world"></i>
            <h3><a href="javascript:void(0);">Divine Darshan</a></h3>
        </div>
        <div class="x_slider_bottom_box_wrapper"> <i class="fa fa-headphones"></i>
            <h3><a href="javascript:void(0);">24/7 Customer Support</a></h3>
        </div>
    </div>
    <div class="x_contact_title_main_wrapper float_left padding_tb_100" style="padding: 20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style=" padding-bottom: 20px;">
                    <div class="x_offer_car_heading_wrapper x_offer_car_heading_wrapper_contact float_left">

                        <h3>Famous Temples near by Tirupati</h3>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-20">
                    <div class="card-item">
                        <div class="img-wrap ">
                            <a data-fancybox="gallery1" data-caption="Sri Padmavathi Amman Temple"
                                href="sri-padmavathi-amman-temple.php"
                                class="d-block image-overlay-block position-relative">
                                <picture><source srcset="assets/images/padmavathi-amman-temple-1.webp" type="image/webp"><img loading="lazy" width="330" height="220" decoding="async" src="assets/images/padmavathi-amman-temple-1.png" class="w-100"
                                    alt="Sri Padmavathi Amman Temple" style="height: 220px;"></picture>
                            </a>
                        </div>

                        <div class="card-body card-new p-4">
                            <p class="text-white mb-1">
                                <a class="temple-tit" data-caption="Sri Padmavathi Amman Temple"
                                    href="sri-padmavathi-amman-temple.php">
                                    Sri Padmavathi Amman Temple </a>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-20">
                    <div class="card-item">
                        <div class="img-wrap ">
                            <a data-fancybox="gallery1" data-caption="Sri Padmavathi Amman Temple"
                                href="sri-govindaraja-swamy-temple.php"
                                class="d-block image-overlay-block position-relative">
                                <picture><source srcset="assets/images/sri-govindaraja-swamy-temple.webp" type="image/webp"><img loading="lazy" width="330" height="220" decoding="async" src="assets/images/sri-govindaraja-swamy-temple.png" class="w-100"
                                    alt="Sri Padmavathi Amman Temple" style="height: 220px;"></picture>
                            </a>
                        </div>

                        <div class="card-body card-new p-4">
                            <p class="text-white mb-1">
                                <a class="temple-tit" data-caption="Sri Padmavathi Amman Temple"
                                    href="sri-govindaraja-swamy-temple.php">
                                    Sri Govindaraja Swamy Temple </a>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-20">
                    <div class="card-item">
                        <div class="img-wrap ">
                            <a data-fancybox="gallery1" data-caption="Sri Padmavathi Amman Temple"
                                href="kalyana-venkateswara-temple-srinivasa-mangapuram.php"
                                class="d-block image-overlay-block position-relative">
                                <picture><source srcset="assets/images/kalyana-venkateswara-temple.webp" type="image/webp"><img loading="lazy" width="330" height="220" decoding="async" src="assets/images/kalyana-venkateswara-temple.png" class="w-100"
                                    alt="Sri Padmavathi Amman Temple" style="height: 220px;"></picture>
                            </a>
                        </div>

                        <div class="card-body card-new p-4">
                            <p class="text-white mb-1">
                                <a class="temple-tit" data-caption="Sri Padmavathi Amman Temple"
                                    href="kalyana-venkateswara-temple-srinivasa-mangapuram.php">
                                    Kalyana Venkateswara Temple - Srinivasa Mangapuram </a>
                            </p>

                        </div>
                    </div>

                </div>


            </div>
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-20">
                    <div class="card-item">
                        <div class="img-wrap ">
                            <a data-fancybox="gallery1" data-caption="Sri Padmavathi Amman Temple"
                                href="iskon-temple.php" class="d-block image-overlay-block position-relative">
                                <picture><source srcset="assets/images/iskcon-temple.webp" type="image/webp"><img loading="lazy" width="330" height="220" decoding="async" src="assets/images/iskcon-temple.png" class="w-100" alt="Sri Padmavathi Amman Temple"
                                    style="height: 220px;"></picture>
                            </a>
                        </div>

                        <div class="card-body card-new p-4">
                            <p class="text-white mb-1">
                                <a class="temple-tit" data-caption="Sri Padmavathi Amman Temple"
                                    href="iskon-temple.php">
                                    ISKCON Temple </a>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-20">
                    <div class="card-item">
                        <div class="img-wrap ">
                            <a data-fancybox="gallery1" data-caption="Sri Padmavathi Amman Temple"
                                href="sri-kapileswara-swamy-temple.php"
                                class="d-block image-overlay-block position-relative">
                                <picture><source srcset="assets/images/sri-kapileswara-swamy-temple.webp" type="image/webp"><img loading="lazy" width="330" height="220" decoding="async" src="assets/images/sri-kapileswara-swamy-temple.png" class="w-100"
                                    alt="Sri Padmavathi Amman Temple" style="height: 220px;"></picture>
                            </a>
                        </div>

                        <div class="card-body card-new p-4">
                            <p class="text-white mb-1">
                                <a class="temple-tit" data-caption="Sri Padmavathi Amman Temple"
                                    href="sri-kapileswara-swamy-temple.php">
                                    Sri Kapileswara Swamy Temple </a>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-20">
                    <div class="card-item">
                        <div class="img-wrap ">
                            <a data-fancybox="gallery1" data-caption="Sri Padmavathi Amman Temple"
                                href="sri-kalyana-venkateshwara-swamy-temple-narayanavanam-temple.php"
                                class="d-block image-overlay-block position-relative">
                                <picture><source srcset="assets/images/narayanavanam-temple.webp" type="image/webp"><img loading="lazy" width="330" height="220" decoding="async" src="assets/images/narayanavanam-temple.png" class="w-100"
                                    alt="Sri Padmavathi Amman Temple" style="height: 220px;"></picture>
                            </a>
                        </div>

                        <div class="card-body card-new p-4">
                            <p class="text-white mb-1">
                                <a class="temple-tit" data-caption="Sri Padmavathi Amman Temple"
                                    href="sri-kalyana-venkateshwara-swamy-temple-narayanavanam-temple.php">
                                    Sri Kalyana Venkateshwara Swamy Temple - Narayanavanam Temple </a>
                            </p>

                        </div>
                    </div>

                </div>


            </div>
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-20">
                    <div class="card-item">
                        <div class="img-wrap ">
                            <a data-fancybox="gallery1" data-caption="Sri Padmavathi Amman Temple"
                                href="sri-prasanna-venkateswara-temple.php"
                                class="d-block image-overlay-block position-relative">
                                <picture><source srcset="assets/images/sri-prasanna-venkateswara-temple.webp" type="image/webp"><img loading="lazy" width="330" height="220" decoding="async" src="assets/images/sri-prasanna-venkateswara-temple.png" class="w-100"
                                    alt="Sri Padmavathi Amman Temple" style="height: 220px;"></picture>
                            </a>
                        </div>

                        <div class="card-body card-new p-4">
                            <p class="text-white mb-1">
                                <a class="temple-tit" data-caption="Sri Padmavathi Amman Temple"
                                    href="sri-prasanna-venkateswara-temple.php">
                                    Sri Prasanna Venkateswara Temple </a>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-20">
                    <div class="card-item">
                        <div class="img-wrap ">
                            <a data-fancybox="gallery1" data-caption="Sri Padmavathi Amman Temple"
                                href="sri-varasiddhi-vinayaka-temple-kanipakam.php"
                                class="d-block image-overlay-block position-relative">
                                <picture><source srcset="assets/images/sri-varasiddhi-vinayaka-temple.webp" type="image/webp"><img loading="lazy" width="330" height="220" decoding="async" src="assets/images/sri-varasiddhi-vinayaka-temple.png" class="w-100"
                                    alt="Sri Padmavathi Amman Temple" style="height: 220px;"></picture>
                            </a>
                        </div>

                        <div class="card-body card-new p-4">
                            <p class="text-white mb-1">
                                <a class="temple-tit" data-caption="Sri Padmavathi Amman Temple"
                                    href="sri-varasiddhi-vinayaka-temple-kanipakam.php">
                                    Sri Varasiddhi Vinayaka Temple – Kanipakam </a>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb-20">
                    <div class="card-item">
                        <div class="img-wrap ">
                            <a data-fancybox="gallery1" data-caption="Sri Padmavathi Amman Temple"
                                href="sri-vedanarayana-temple-nagalapuram.php"
                                class="d-block image-overlay-block position-relative">
                                <picture><source srcset="assets/images/sri-vedanarayana-temple.webp" type="image/webp"><img loading="lazy" width="330" height="220" decoding="async" src="assets/images/sri-vedanarayana-temple.png" class="w-100"
                                    alt="Sri Padmavathi Amman Temple" style="height: 220px;"></picture>
                            </a>
                        </div>

                        <div class="card-body card-new p-4">
                            <p class="text-white mb-1">
                                <a class="temple-tit" data-caption="Sri Padmavathi Amman Temple"
                                    href="sri-vedanarayana-temple-nagalapuram.php">
                                    Sri Vedanarayana Temple – Nagalapuram </a>
                            </p>

                        </div>
                    </div>

                </div>


            </div>
            <div class="row" style="justify-content: center;">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width mb-20">
                    <div class="card-item">
                        <div class="img-wrap ">
                            <a data-fancybox="gallery1" data-caption="Sri Padmavathi Amman Temple"
                                href="vakula-matha-temple.php" class="d-block image-overlay-block position-relative">
                                <picture><source srcset="assets/images/vakula-matha-temple.webp" type="image/webp"><img loading="lazy" width="330" height="220" decoding="async" src="assets/images/vakula-matha-temple.png" class="w-100"
                                    alt="Sri Padmavathi Amman Temple" style="height: 220px;"></picture>
                            </a>
                        </div>

                        <div class="card-body card-new p-4">
                            <p class="text-white mb-1">
                                <a class="temple-tit" data-caption="Sri Padmavathi Amman Temple"
                                    href="vakula-matha-temple.php">
                                    Vakula Matha Temple </a>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width mb-20">
                    <div class="card-item">
                        <div class="img-wrap ">
                            <a data-fancybox="gallery1" data-caption="Sri Padmavathi Amman Temple"
                                href="pallikondeswara-swamy-temple-surutapalli.php"
                                class="d-block image-overlay-block position-relative">
                                <picture><source srcset="assets/images/pallikondeswara-swamy-temple-surutapalli.webp" type="image/webp"><img loading="lazy" width="330" height="220" decoding="async" src="assets/images/pallikondeswara-swamy-temple-surutapalli.png" class="w-100"
                                    alt="Sri Padmavathi Amman Temple" style="height: 220px;"></picture>
                            </a>
                        </div>

                        <div class="card-body card-new p-4">
                            <p class="text-white mb-1">
                                <a class="temple-tit" data-caption="Sri Padmavathi Amman Temple"
                                    href="pallikondeswara-swamy-temple-surutapalli.php">
                                    Pallikondeswara Swamy Temple - Surutapalli </a>
                            </p>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>






    <div class="x_offer_car_main_wrapper float_left" style="padding-bottom: 40px;">
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
                                <div class="card valign-wrapper">
                                    <div class="card-content center-align valign">
                                        <div class="testi_slide_star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p>“ Very Good Service Tirupati Balaji Travels On Time Pick and Drop Driver is
                                            Very Kind and support with us ”</p>
                                        <p class="card-title"> Dhanalaskhmi <span> Chennai </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card valign-wrapper">
                                    <div class="card-content center-align valign">
                                        <div class="testi_slide_star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p>“ Trip was Well planned , arranged by the team.
                                            One major drawback in Tamil Nadu is language problem. I think team has to
                                            arrange for drivers, guide who can speak Tamil , English and any other
                                            indian language ”</p>
                                        <p class="card-title"> Sunil Kumar <span> Mumbai </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card valign-wrapper">
                                    <div class="card-content center-align valign">
                                        <div class="testi_slide_star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p>“ The best experience of touring in Balaji Darshan. Services were very good,
                                            hotels, vehicle, especially the driver. Keep up the good work. ”</p>
                                        <p class="card-title"> Subha <span> Delhi </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card valign-wrapper">
                                    <div class="card-content center-align valign">
                                        <div class="testi_slide_star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p>“ Best Tour Operator i am very impressive to going Tirupati temples around
                                            Chennai with 2day ”</p>
                                        <p class="card-title"> Gaurav Maid <span> Gujarat </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include './includes/footer.php'; ?>