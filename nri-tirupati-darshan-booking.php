<?php
$pageTitle = "NRI Tirupati Darshan Travel Support | Divine Balaji Travels";
$pageDescription = "Plan Tirupati travel as an NRI with airport pickup, hotel options, private transfers and Darshan guidance. Eligibility and availability remain subject to applicable TTD rules.";
$activeMenu = 'services';
include './includes/header.php';
?>
<style>
    /* Keep the existing section-title appearance while using semantic H2s. */
    .nri-semantic-section-heading {
        font-size: 30px;
        font-weight: 800;
        text-transform: uppercase;
        padding-top: 20px;
        position: relative;
        margin: 0;
    }
    .nri-semantic-section-heading::after {
        content: "";
        position: absolute;
        width: 30px;
        border: 2px solid #f90;
        border-radius: 2px;
        left: 0;
        right: 0;
        bottom: -8px;
        margin: 0 auto;
    }
    .x_slider_bottom_box_heading {
        display: inline-block;
        padding-left: 20px;
        font-size: 18px;
        font-weight: 600;
        line-height: 1.2;
    }
    .nri-form-heading {
        font-size: 15px;
        font-weight: 600;
        color: #fff;
        text-transform: uppercase;
        line-height: 50px;
    }
    @media (max-width: 1199px) {
        .x_slider_bottom_box_heading {
            padding-left: 0;
            width: 100%;
            padding-top: 32px;
        }
    }
</style>
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
                                        NRI Tirupati Darshan Booking
                                        <br />
                                        <span class="ttd-color">Travel Assistance for NRI Devotees</span>
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
                                                    <div class="nri-form-heading">Enquire Balaji Darshan Package</div>
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
                <div class="nri-form-heading">Enquire Balaji Darshan Package</div>
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
        <div class="x_slider_bottom_box_heading"><a href="javascript:void(0);">Plan Your Trip</a></div>
    </div>
    <div class="x_slider_bottom_box_wrapper"> <i class="flaticon-checklist"></i>
        <div class="x_slider_bottom_box_heading"><a href="javascript:void(0);">Choose a Package</a></div>
    </div>
    <div class="x_slider_bottom_box_wrapper"> <i class="flaticon-world"></i>
        <div class="x_slider_bottom_box_heading"><a href="javascript:void(0);">Divine Darshan</a></div>
    </div>
    <div class="x_slider_bottom_box_wrapper"> <i class="fa fa-headphones"></i>
        <div class="x_slider_bottom_box_heading"><a href="javascript:void(0);">24/7 Customer Support</a></div>
    </div>
</div>





<div class="x_contact_title_main_wrapper float_left padding_tb_100" style="padding: 20px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style=" padding-bottom: 20px;">
                <div class="x_offer_car_heading_wrapper x_offer_car_heading_wrapper_contact float_left">

                    <h2 class="nri-semantic-section-heading">NRI Tirupati Darshan Package Options</h2>

                    <h3>Single Day NRI Darshan</h3>

                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="carlisting-wrap">
                    <div class="carlisting-inner-wrap">
                        <div class="carlisting-photo">
                            <img loading="lazy" width="190" height="100" decoding="async" class="img-fluid" src="assets/images/c1.png" alt="one day Chennai to Tirupati package">
                        </div>
                        <div class="carlisting-name">
                            <h4>ETIOS</h4>
                            <p>1 TO 4 Persons</p>
                        </div>
                        <div class="carlisting-notes">
                            <ul>
                                <li>Vehicle Rentals</li>
                                <li>Permit, Parking,</li>
                                <li>Diesel, Driver fare</li>
                            </ul>
                        </div>
                        <div class="carlisting-pricing">
                            <p class="car_price"><i class="fa fa-rupee"></i> 7,000/-</p>
                            <p><strong>Note:</strong> After 10.00 Pm Driver Fare will add extra 500/-</p>
                        </div>
                        <div class="carlisting-book">
                            <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="carlisting-wrap">
                    <div class="carlisting-inner-wrap">
                        <div class="carlisting-photo">
                            <img loading="lazy" width="190" height="100" decoding="async" class="img-fluid" src="assets/images/c2.png" alt="one day Chennai to Tirupati package">
                        </div>
                        <div class="carlisting-name">
                            <h4>INNOVA</h4>
                            <p>1 TO 6 Persons</p>
                        </div>
                        <div class="carlisting-notes">
                            <ul>
                                <li>Vehicle Rentals</li>
                                <li>Permit, Parking,</li>
                                <li>Diesel, Driver fare</li>
                            </ul>
                        </div>
                        <div class="carlisting-pricing">
                            <p class="car_price"><i class="fa fa-rupee"></i> 9,000/-</p>
                            <p><strong>Note:</strong> After 10.00 Pm Driver Fare will add extra 500/-</p>
                        </div>
                        <div class="carlisting-book">
                            <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="carlisting-wrap">
                    <div class="carlisting-inner-wrap">
                        <div class="carlisting-photo">
                            <img loading="lazy" width="190" height="100" decoding="async" class="img-fluid" src="assets/images/c2.png" alt="one day Chennai to Tirupati package">
                        </div>
                        <div class="carlisting-name">
                            <h4>INNOVA CRYSTA</h4>
                            <p>1 TO 6 Persons</p>
                        </div>
                        <div class="carlisting-notes">
                            <ul>
                                <li>Vehicle Rentals</li>
                                <li>Permit, Parking,</li>
                                <li>Diesel, Driver fare</li>
                            </ul>
                        </div>
                        <div class="carlisting-pricing">
                            <p class="car_price"><i class="fa fa-rupee"></i> 10,000/-</p>
                            <p><strong>Note:</strong> After 10.00 Pm Driver Fare will add extra 500/-</p>
                        </div>
                        <div class="carlisting-book">
                            <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="carlisting-wrap">
                    <div class="carlisting-inner-wrap">
                        <div class="carlisting-photo">
                            <img loading="lazy" width="190" height="100" decoding="async" class="img-fluid" src="assets/images/c4.png" alt="one day Chennai to Tirupati package">
                        </div>
                        <div class="carlisting-name">
                            <h4>TEMPO AC</h4>
                            <p>1 TO 12 Persons</p>
                        </div>
                        <div class="carlisting-notes">
                            <ul>
                                <li>Vehicle Rentals</li>
                                <li>Permit, Parking,</li>
                                <li>Diesel, Driver fare</li>
                            </ul>
                        </div>
                        <div class="carlisting-pricing">
                            <p class="car_price"><i class="fa fa-rupee"></i> 14,000/-</p>
                            <p><strong>Note:</strong> After 10.00 Pm Driver Fare will add extra 500/-</p>
                        </div>
                        <div class="carlisting-book">
                            <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="carlisting-wrap">
                    <div class="carlisting-inner-wrap">
                        <div class="carlisting-photo">
                            <img loading="lazy" width="190" height="100" decoding="async" class="img-fluid" src="assets/images/c4.png" alt="one day Chennai to Tirupati package">
                        </div>
                        <div class="carlisting-name">
                            <h4>URBANIA</h4>
                            <p>1 TO 12 Persons</p>
                        </div>
                        <div class="carlisting-notes">
                            <ul>
                                <li>Vehicle Rentals</li>
                                <li>Permit, Parking,</li>
                                <li>Diesel, Driver fare</li>
                            </ul>
                        </div>
                        <div class="carlisting-pricing">
                            <p class="car_price"><i class="fa fa-rupee"></i> 22,000/-</p>
                            <p><strong>Note:</strong> After 10.00 Pm Driver Fare will add extra 500/-</p>
                        </div>
                        <div class="carlisting-book">
                            <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


            </div>

            <!--<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="item">
                        <div class="btc_team_slider_cont_main_wrapper" style="padding: 10px; margin-top: 0px;">
                            <div class="btc_team_img_wrapper" style="padding-bottom: 20px;">
                                <img loading="lazy" width="330" height="220" decoding="async" class="w-100" src="assets/images/etios.png" alt="one day Chennai to Tirupati package">
                                <div class="x_team_label_wrapper">
                                    <p>ETIOS</p>
                                </div>
                            </div>
                            <div class="card-new">
                                <p style="font-size: 18px;">Vehicle Name: ETIOS</p>
                                <p>Person: 1 TO 4 PPL</p>
                                <p>Price: 7,000/-</p>
                            </div>
                            <div class="contect_btn contect_btn_contact" style=" background: darkblue; padding: 10px;">
                                <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
                    <div class="item">
                        <div class="btc_team_slider_cont_main_wrapper" style="padding: 10px; margin-top: 0px;">
                            <div class="btc_team_img_wrapper" style="padding-bottom: 20px;">
                                <picture><source srcset="assets/images/innova.webp" type="image/webp"><img loading="lazy" width="700" height="467" decoding="async" class="w-100" src="assets/images/innova.jpg" alt="one day Chennai to Tirupati package"></picture>
                                <div class="x_team_label_wrapper">
                                    <p>Innova</p>
                                </div>
                            </div>
                            <div class="card-new">
                                <p style="font-size: 18px;">Vehicle Name: INNOVA</p>
                                <p>Person: 1 TO 6 PPL</p>
                                <p>Price: 9,000/-</p>
                            </div>
                            <div class="contect_btn contect_btn_contact" style=" background: darkblue; padding: 10px;">
                                <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
                    <div class="item">
                        <div class="btc_team_slider_cont_main_wrapper" style="padding: 10px; margin-top: 0px;">
                            <div class="btc_team_img_wrapper" style="padding-bottom: 20px;">
                                <picture><source srcset="assets/images/innova.webp" type="image/webp"><img loading="lazy" width="700" height="467" decoding="async" class="w-100" src="assets/images/innova.jpg" alt="one day Chennai to Tirupati package"></picture>
                                <div class="x_team_label_wrapper">
                                    <p>Innova Crysta</p>
                                </div>
                            </div>
                            <div class="card-new">
                                <p style="font-size: 18px;">Vehicle Name: Innova Crysta</p>
                                <p>Person: 1 TO 6 PPL</p>
                                <p>Price: 10,000/-</p>
                            </div>
                            <div class="contect_btn contect_btn_contact" style=" background: darkblue; padding: 10px;">
                                <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>-->

        </div>
        <!--<div class="row" style="justify-content: center;">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
                    <div class="item">
                        <div class="btc_team_slider_cont_main_wrapper" style="padding: 10px; margin-top: 0px;">
                            <div class="btc_team_img_wrapper" style="padding-bottom: 20px;">
                                <picture><source srcset="assets/images/tempo.webp" type="image/webp"><img loading="lazy" width="330" height="220" decoding="async" class="w-100" src="assets/images/tempo.png" alt="one day Chennai to Tirupati package"></picture>
                                <div class="x_team_label_wrapper">
                                    <p>Tempo AC</p>
                                </div>
                            </div>
                            <div class="card-new">
                                <p style="font-size: 18px;">Vehicle Name: Tempo AC</p>
                                <p>Person: 1 TO 12 PPL</p>
                                <p>Price: 14,000/-</p>
                            </div>
                            <div class="contect_btn contect_btn_contact" style=" background: darkblue; padding: 10px;">
                                <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
                    <div class="item">
                        <div class="btc_team_slider_cont_main_wrapper" style="padding: 10px; margin-top: 0px;">
                            <div class="btc_team_img_wrapper" style="padding-bottom: 20px;">
                                <img loading="lazy" width="330" height="220" decoding="async" class="w-100" src="assets/images/urbania.png" alt="one day Chennai to Tirupati package">
                                <div class="x_team_label_wrapper">
                                    <p>Urbania</p>
                                </div>
                            </div>
                            <div class="card-new">
                                <p style="font-size: 18px;">Vehicle Name: Urbania</p>
                                <p>Person: 1 TO 12 PPL</p>
                                <p>Price: 22,000/-</p>
                            </div>
                            <div class="contect_btn contect_btn_contact" style=" background: darkblue; padding: 10px;">
                                <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>-->
    </div>
</div>
<div class="x_contact_title_main_wrapper float_left padding_tb_100" style="padding: 20px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style=" padding-bottom: 20px;">
                <div class="x_offer_car_heading_wrapper x_offer_car_heading_wrapper_contact float_left">

                    <h3>2 Day NRI Darshan</h3>

                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="carlisting-wrap">
                    <div class="carlisting-inner-wrap">
                        <div class="carlisting-photo">
                            <img loading="lazy" width="190" height="100" decoding="async" class="img-fluid" src="assets/images/c1.png" alt="one day Chennai to Tirupati package">
                        </div>
                        <div class="carlisting-name">
                            <h4>ETIOS</h4>
                            <p>1 TO 4 Persons</p>
                        </div>
                        <div class="carlisting-notes">
                            <ul>
                                <li>Vehicle Rentals</li>
                                <li>Permit, Parking,</li>
                                <li>Diesel, Driver fare</li>
                            </ul>
                        </div>
                        <div class="carlisting-pricing">
                            <p class="car_price"><i class="fa fa-rupee"></i> 9,000/-</p>
                            <p><strong>Note:</strong> After 10.00 Pm Driver Fare will add extra 500/-</p>
                        </div>
                        <div class="carlisting-book">
                            <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="carlisting-wrap">
                    <div class="carlisting-inner-wrap">
                        <div class="carlisting-photo">
                            <img loading="lazy" width="190" height="100" decoding="async" class="img-fluid" src="assets/images/c2.png" alt="one day Chennai to Tirupati package">
                        </div>
                        <div class="carlisting-name">
                            <h4>INNOVA</h4>
                            <p>1 TO 6 Persons</p>
                        </div>
                        <div class="carlisting-notes">
                            <ul>
                                <li>Vehicle Rentals</li>
                                <li>Permit, Parking,</li>
                                <li>Diesel, Driver fare</li>
                            </ul>
                        </div>
                        <div class="carlisting-pricing">
                            <p class="car_price"><i class="fa fa-rupee"></i> 12,000/-</p>
                            <p><strong>Note:</strong> After 10.00 Pm Driver Fare will add extra 500/-</p>
                        </div>
                        <div class="carlisting-book">
                            <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="carlisting-wrap">
                    <div class="carlisting-inner-wrap">
                        <div class="carlisting-photo">
                            <img loading="lazy" width="190" height="100" decoding="async" class="img-fluid" src="assets/images/c2.png" alt="one day Chennai to Tirupati package">
                        </div>
                        <div class="carlisting-name">
                            <h4>INNOVA CRYSTA</h4>
                            <p>1 TO 6 Persons</p>
                        </div>
                        <div class="carlisting-notes">
                            <ul>
                                <li>Vehicle Rentals</li>
                                <li>Permit, Parking,</li>
                                <li>Diesel, Driver fare</li>
                            </ul>
                        </div>
                        <div class="carlisting-pricing">
                            <p class="car_price"><i class="fa fa-rupee"></i> 14,000/-</p>
                            <p><strong>Note:</strong> After 10.00 Pm Driver Fare will add extra 500/-</p>
                        </div>
                        <div class="carlisting-book">
                            <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="carlisting-wrap">
                    <div class="carlisting-inner-wrap">
                        <div class="carlisting-photo">
                            <img loading="lazy" width="190" height="100" decoding="async" class="img-fluid" src="assets/images/c4.png" alt="one day Chennai to Tirupati package">
                        </div>
                        <div class="carlisting-name">
                            <h4>TEMPO AC</h4>
                            <p>1 TO 12 Persons</p>
                        </div>
                        <div class="carlisting-notes">
                            <ul>
                                <li>Vehicle Rentals</li>
                                <li>Permit, Parking,</li>
                                <li>Diesel, Driver fare</li>
                            </ul>
                        </div>
                        <div class="carlisting-pricing">
                            <p class="car_price"><i class="fa fa-rupee"></i> 20,000/-</p>
                            <p><strong>Note:</strong> After 10.00 Pm Driver Fare will add extra 500/-</p>
                        </div>
                        <div class="carlisting-book">
                            <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="carlisting-wrap">
                    <div class="carlisting-inner-wrap">
                        <div class="carlisting-photo">
                            <img loading="lazy" width="190" height="100" decoding="async" class="img-fluid" src="assets/images/c4.png" alt="one day Chennai to Tirupati package">
                        </div>
                        <div class="carlisting-name">
                            <h4>URBANIA</h4>
                            <p>1 TO 12 Persons</p>
                        </div>
                        <div class="carlisting-notes">
                            <ul>
                                <li>Vehicle Rentals</li>
                                <li>Permit, Parking,</li>
                                <li>Diesel, Driver fare</li>
                            </ul>
                        </div>
                        <div class="carlisting-pricing">
                            <p class="car_price"><i class="fa fa-rupee"></i> 30,000/-</p>
                            <p><strong>Note:</strong> After 10.00 Pm Driver Fare will add extra 500/-</p>
                        </div>
                        <div class="carlisting-book">
                            <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


            </div>

            <!--<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="item">
                        <div class="btc_team_slider_cont_main_wrapper" style="padding: 10px; margin-top: 0px;">
                            <div class="btc_team_img_wrapper" style="padding-bottom: 20px;">
                                <img loading="lazy" width="330" height="220" decoding="async" class="w-100" src="assets/images/etios.png" alt="one day Chennai to Tirupati package">
                                <div class="x_team_label_wrapper">
                                    <p>ETIOS</p>
                                </div>
                            </div>
                            <div class="card-new">
                                <p style="font-size: 18px;">Vehicle Name: ETIOS</p>
                                <p>Person: 1 TO 4 PPL</p>
                                <p>Price: 9,000/-</p>
                            </div>
                            <div class="contect_btn contect_btn_contact" style=" background: darkblue; padding: 10px;">
                                <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
                    <div class="item">
                        <div class="btc_team_slider_cont_main_wrapper" style="padding: 10px; margin-top: 0px;">
                            <div class="btc_team_img_wrapper" style="padding-bottom: 20px;">
                                <picture><source srcset="assets/images/innova.webp" type="image/webp"><img loading="lazy" width="700" height="467" decoding="async" class="w-100" src="assets/images/innova.jpg" alt="one day Chennai to Tirupati package"></picture>
                                <div class="x_team_label_wrapper">
                                    <p>Innova</p>
                                </div>
                            </div>
                            <div class="card-new">
                                <p style="font-size: 18px;">Vehicle Name: INNOVA</p>
                                <p>Person: 1 TO 6 PPL</p>
                                <p>Price: 12,000/-</p>
                            </div>
                            <div class="contect_btn contect_btn_contact" style=" background: darkblue; padding: 10px;">
                                <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
                    <div class="item">
                        <div class="btc_team_slider_cont_main_wrapper" style="padding: 10px; margin-top: 0px;">
                            <div class="btc_team_img_wrapper" style="padding-bottom: 20px;">
                                <picture><source srcset="assets/images/innova.webp" type="image/webp"><img loading="lazy" width="700" height="467" decoding="async" class="w-100" src="assets/images/innova.jpg" alt="one day Chennai to Tirupati package"></picture>
                                <div class="x_team_label_wrapper">
                                    <p>Innova Crysta</p>
                                </div>
                            </div>
                            <div class="card-new">
                                <p style="font-size: 18px;">Vehicle Name: Innova Crysta</p>
                                <p>Person: 1 TO 6 PPL</p>
                                <p>Price: 14,000/-</p>
                            </div>
                            <div class="contect_btn contect_btn_contact" style=" background: darkblue; padding: 10px;">
                                <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>-->

        </div>
        <!--<div class="row" style="justify-content: center;">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
                    <div class="item">
                        <div class="btc_team_slider_cont_main_wrapper" style="padding: 10px; margin-top: 0px;">
                            <div class="btc_team_img_wrapper" style="padding-bottom: 20px;">
                                <picture><source srcset="assets/images/tempo.webp" type="image/webp"><img loading="lazy" width="330" height="220" decoding="async" class="w-100" src="assets/images/tempo.png" alt="one day Chennai to Tirupati package"></picture>
                                <div class="x_team_label_wrapper">
                                    <p>Tempo AC</p>
                                </div>
                            </div>
                            <div class="card-new">
                                <p style="font-size: 18px;">Vehicle Name: Tempo AC</p>
                                <p>Person: 1 TO 12 PPL</p>
                                <p>Price: 20,000/-</p>
                            </div>
                            <div class="contect_btn contect_btn_contact" style=" background: darkblue; padding: 10px;">
                                <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 full_width">
                    <div class="item">
                        <div class="btc_team_slider_cont_main_wrapper" style="padding: 10px; margin-top: 0px;">
                            <div class="btc_team_img_wrapper" style="padding-bottom: 20px;">
                                <img loading="lazy" width="330" height="220" decoding="async" class="w-100" src="assets/images/urbania.png" alt="one day Chennai to Tirupati package">
                                <div class="x_team_label_wrapper">
                                    <p>Urbania</p>
                                </div>
                            </div>
                            <div class="card-new">
                                <p style="font-size: 18px;">Vehicle Name: Urbania</p>
                                <p>Person: 1 TO 12 PPL</p>
                                <p>Price: 30,000/-</p>
                            </div>
                            <div class="contect_btn contect_btn_contact" style=" background: darkblue; padding: 10px;">
                                <a class="car-btn" href="#">Book Now <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>-->
    </div>
</div>














<div class="x_offer_car_main_wrapper float_left padding_tb_100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="x_offer_car_heading_wrapper float_left">
                    <h4>Divine Experience for NRI'S in Tirumala</h4>
                    <h2 class="nri-semantic-section-heading">Tirumala NRI Darshan Packages</h2>
                    <br />
                    <p>Discover the spiritual magnificence of Tirumala with our exclusive "NRI Special Darshan"
                        packages, thoughtfully designed to provide a seamless and soul-enriching temple visit for
                        Non-Resident Indians (NRIs). Reconnect with your spiritual roots and experience the divine
                        grace of Lord Venkateswara through our tailored services.</p>
                    <p>TTD's NRI and Supadam arrangements can change. Eligibility, required documents, applicable
                        ticket charges and reporting arrangements must be confirmed against the latest official TTD
                        instructions before travel via the <a href="https://ttdevasthanams.ap.gov.in/" target="_blank"
                        rel="noopener">official TTD portal</a>. The ₹300 amount commonly associated with Special Entry
                        Darshan should not be treated as a guaranteed NRI ticket price.</p>
                    <p>Divine Balaji Travels provides private travel coordination, transport and planning assistance.
                        We do not issue official TTD tickets and cannot guarantee ticket availability or darshan.</p>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <div class="x_offer_car_heading_wrapper float_left">
                    <h2 class="nri-semantic-section-heading">Tirumala NRI Darshan Guidelines</h2>
                    <h3>Important Guidelines for NRI Darshan</h3>
                    <br />
                    <ul>
                        <li>
                            <p>
                                → &nbsp; Carry the passport, visa, OCI and other documents currently required by TTD,
                                where applicable.
                            </p>
                        </li>
                        <li>
                            <p>
                                → &nbsp; If TTD applies an arrival-date window, officials will verify it from the
                                immigration record. Confirm the current window before travelling.
                            </p>
                        </li>
                        <li>
                            <p>
                                → &nbsp; Complete any form and pay any official charge required by TTD at the
                                designated counter or portal.
                            </p>
                        </li>
                        <li>
                            <p>
                                → &nbsp; Eligibility of accompanying family members is determined by TTD; resident
                                Indian relatives may not qualify for an NRI-specific arrangement.
                            </p>
                        </li>
                        <li>
                            <p>
                                → &nbsp; OCI cardholders should carry the current OCI and passport documents required
                                by TTD for verification.
                            </p>
                        </li>
                        <li>
                            <p>
                                → &nbsp; Additional ID proofs are recommended for a smooth verification process.
                            </p>
                        </li>
                        <li>
                            <p>
                                → &nbsp; Children's eligibility and ticket requirements vary by category and must be
                                confirmed with TTD.
                            </p>
                        </li>
                        <li>
                            <p>
                                → &nbsp; For offerings at the temple, coin exchange rates are as follows:
                                <br />
                                Coin offering rates: Rs. 1/kg = Rs. 202, Rs. 5/kg = Rs. 565, Rs. 2/kg = Rs. 332.
                            </p>
                        </li>
                    </ul>
                    <p>
                        Our dedicated team at Divine Balaji Travels offers private travel coordination for NRI pilgrims,
                        <br /> including transportation, guidance and customized Tirupati packages. We do not issue
                        official TTD tickets.
                    </p>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <div class="x_offer_car_heading_wrapper float_left">
                    <h3>Tirumala NRI Darshan Timings</h3>
                    <br />
                    <p>Supadam and NRI reporting arrangements are operationally variable. Follow the time and entry
                        instructions printed on the official TTD ticket or stated in the current TTD notice. Availability,
                        queue access and waiting time are not guaranteed.</p>
                    <ul>
                        <li>
                            <p>
                                → &nbsp; Infants and their parents
                            </p>
                        </li>
                        <li>
                            <p>
                                → &nbsp; Physically challenged devotees
                            </p>
                        </li>
                        <li>
                            <p>
                                → &nbsp; Other authorized categories
                            </p>
                        </li>
                    </ul>
                    <p>This arrangement minimizes waiting time and ensures a smoother, more convenient darshan
                        experience for NRIs visiting the Tirumala Balaji Temple.</p>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="x_offer_car_heading_wrapper float_left">
                    <h2 class="nri-semantic-section-heading">NRI Darshan Process</h2>
                    <h3>Step-by-Step NRI Darshan Process</h3>
                    <br />
                    <ul>
                        <li>
                            <p>
                                1. Follow the current TTD instructions for the designated NRI/Supadam reporting point.
                            </p>
                        </li>
                        <li>
                            <p>
                                2. Complete any NRI form that TTD currently requires with your personal and travel-document
                                details.
                            </p>
                        </li>
                        <li>
                            <p>
                                3. Submit the filled form along with:
                            </p>
                            <ul>
                                <li>
                                    <p>
                                        → &nbsp; Original passport and any current visa/OCI documents required by TTD
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        → &nbsp; Copies of the documents requested by TTD
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <p>
                                4. TTD officials will verify your documents and determine eligibility.
                            </p>
                        </li>
                        <li>
                            <p>
                                5. If approved, follow the current TTD instructions for ticket purchase or entry.
                            </p>
                        </li>
                        <li>
                            <p>
                                6. Follow the entry and queue instructions issued by TTD for your category.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="x_offer_car_heading_wrapper float_left">
                    <h2 class="nri-semantic-section-heading">Why Choose Divine Balaji Travels</h2>
                    <br />
                    <p>At Divine Balaji Travels, we aim to provide a smooth and spiritually uplifting
experience for NRIs visiting Tirumala. Our services include:</p>
                    <ul>
                        <li>
                            <p>
                                → &nbsp; Expert guidance throughout your darshan journey
                            </p>
                        </li>
                        <li>
                            <p>
                                → &nbsp; Reliable transportation services from nearby locations
                            </p>
                        </li>
                        <li>
                            <p>
                                → &nbsp; Tailored packages to meet your travel and spiritual needs
                            </p>
                        </li>
                    </ul>
                    <p>
                        Experience the divine blessings of Lord Venkateswara with peace of mind and ease. Let us
                        make your pilgrimage to Tirumala truly memorable!
                    </p>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="x_offer_car_heading_wrapper float_left">
                    <h2 class="nri-semantic-section-heading">Frequently Asked Questions</h2>
                    <br />

                    <div class="nri-faq-accordion">
                        <div class="nri-faq-item is-open">
                            <h4><button type="button" class="nri-faq-trigger" aria-expanded="true" aria-controls="nri-faq-panel-1" id="nri-faq-header-1">1. Who is eligible for NRI darshan at Tirumala?</button></h4>
                            <div id="nri-faq-panel-1" class="nri-faq-panel" role="region" aria-labelledby="nri-faq-header-1">
                                <p>Eligibility is determined by TTD. NRIs, foreign nationals and OCI cardholders should
                                    present the current documents required by TTD for verification.</p>
                            </div>
                        </div>

                        <div class="nri-faq-item">
                            <h4><button type="button" class="nri-faq-trigger" aria-expanded="false" aria-controls="nri-faq-panel-2" id="nri-faq-header-2">2. Is prior booking required for NRI
                                Darshan?</button></h4>
                            <div id="nri-faq-panel-2" class="nri-faq-panel" role="region" aria-labelledby="nri-faq-header-2" aria-hidden="true">
                                <p>Advance booking and counter availability vary by TTD category and date. Follow the
                                    current official TTD instructions before travelling.</p>
                            </div>
                        </div>

                        <div class="nri-faq-item">
                            <h4><button type="button" class="nri-faq-trigger" aria-expanded="false" aria-controls="nri-faq-panel-3" id="nri-faq-header-3">What is the cost of the NRI Darshan
                                ticket?</button></h4>
                            <div id="nri-faq-panel-3" class="nri-faq-panel" role="region" aria-labelledby="nri-faq-header-3" aria-hidden="true">
                                <p>Check the current official TTD portal for the applicable ticket charge. Do not rely on
                                    a fixed amount on this page.</p>
                            </div>
                        </div>

                        <div class="nri-faq-item">
                            <h4><button type="button" class="nri-faq-trigger" aria-expanded="false" aria-controls="nri-faq-panel-4" id="nri-faq-header-4">4. Can friends or family accompany NRIs for
                                the darshan?</button></h4>
                            <div id="nri-faq-panel-4" class="nri-faq-panel" role="region" aria-labelledby="nri-faq-header-4" aria-hidden="true">
                                <p>Accompanying-family eligibility is decided by TTD for the applicable category. Confirm
                                    the current rule before travelling.</p>
                            </div>
                        </div>

                        <div class="nri-faq-item">
                            <h4><button type="button" class="nri-faq-trigger" aria-expanded="false" aria-controls="nri-faq-panel-5" id="nri-faq-header-5">5. What are the NRI darshan
                                timings?</button></h4>
                            <div id="nri-faq-panel-5" class="nri-faq-panel" role="region" aria-labelledby="nri-faq-header-5" aria-hidden="true">
                                <p>Follow the reporting time printed on the official TTD ticket or stated in the current
                                    TTD notice. Timings can change.</p>
                            </div>
                        </div>

                        <div class="nri-faq-item">
                            <h4><button type="button" class="nri-faq-trigger" aria-expanded="false" aria-controls="nri-faq-panel-6" id="nri-faq-header-6">6. Are children allowed for NRI
                                darshan?</button></h4>
                            <div id="nri-faq-panel-6" class="nri-faq-panel" role="region" aria-labelledby="nri-faq-header-6" aria-hidden="true">
                                <p>Children's eligibility and ticket requirements vary by category. Confirm the current
                                    rule directly with TTD.</p>
                            </div>
                        </div>

                        <div class="nri-faq-item">
                            <h4><button type="button" class="nri-faq-trigger" aria-expanded="false" aria-controls="nri-faq-panel-7" id="nri-faq-header-7">7. What documents are required for the
                                darshan?</button></h4>
                            <div id="nri-faq-panel-7" class="nri-faq-panel" role="region" aria-labelledby="nri-faq-header-7" aria-hidden="true">
                                <p>Carry the passport, visa, OCI and any other documents currently requested by TTD.
                                    Requirements must be confirmed before travel.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var items = document.querySelectorAll('.nri-faq-item');
    items.forEach(function (item) {
        var btn = item.querySelector('.nri-faq-trigger');
        var panel = document.getElementById(btn.getAttribute('aria-controls'));
        btn.addEventListener('click', function () {
            var expanded = btn.getAttribute('aria-expanded') === 'true';
            items.forEach(function (other) {
                var otherBtn = other.querySelector('.nri-faq-trigger');
                var otherPanel = document.getElementById(otherBtn.getAttribute('aria-controls'));
                other.classList.remove('is-open');
                otherBtn.setAttribute('aria-expanded', 'false');
                otherPanel.setAttribute('aria-hidden', 'true');
            });
            if (!expanded) {
                item.classList.add('is-open');
                btn.setAttribute('aria-expanded', 'true');
                panel.setAttribute('aria-hidden', 'false');
            }
        });
    });
});
</script>

<div class="x_offer_car_main_wrapper float_left" style="padding-bottom: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="x_offer_car_heading_wrapper float_left">
                    <h4>Testimonials</h4>
                    <h2 class="nri-semantic-section-heading">Reviews from NRI Devotees</h2>
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
