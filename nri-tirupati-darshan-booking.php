<?php
$pageTitle = "NRI Tirupati Darshan Booking | Special Entry for NRI Devotees";
$pageDescription = "Book Tirupati darshan for NRI devotees with special entry assistance, airport pickup, hotel stay and complete travel support.";
$activeMenu = 'services';
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
                    <h3>Tirumala NRI Darshan Packages</h3>
                    <br />
                    <p>Discover the spiritual magnificence of Tirumala with our exclusive "NRI Special Darshan"
                        packages, thoughtfully designed to provide a seamless and soul-enriching temple visit for
                        Non-Resident Indians (NRIs). Reconnect with your spiritual roots and experience the divine
                        grace of Lord Venkateswara through our tailored services.</p>
                    <p>Our Supadam Entry Darshan for NRIs allows privileged access to the sanctum sanctorum with a
                        special entry ticket priced at INR 300 per person. There’s no need for advance booking;
                        simply arrive at the designated counter with valid documents (passport, visa, and OCI card)
                        for verification. Once cleared, NRIs can proceed for darshan via the Supadam entry gate,
                        reserved for foreign devotees and NRIs.</p>
                    <p>This guided, on-the-spot process ensures a smooth experience, enabling you to fully
                        immerse yourself in the spiritual bliss of Tirumala.</p>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <div class="x_offer_car_heading_wrapper float_left">
                    <h3>Important Guidelines for NRI Darshan</h3>
                    <br />
                    <ul>
                        <li>
                            <p>
                                → &nbsp; Carry valid passport and visa documents for verification.
                            </p>
                        </li>
                        <li>
                            <p>
                                → &nbsp; The visa entry date must be within 30 days prior to your Tirumala visit.
                            </p>
                        </li>
                        <li>
                            <p>
                                → &nbsp; NRI pilgrims are required to fill a form and pay INR 300 per person at the
                                Supadam counter.
                            </p>
                        </li>
                        <li>
                            <p>
                                → &nbsp; The facility is strictly for NRIs; friends or relatives who are residents
                                of India are not permitted.
                            </p>
                        </li>
                        <li>
                            <p>
                                → &nbsp; OCI cardholders must present both their OCI card and passport for
                                verification.
                            </p>
                        </li>
                        <li>
                            <p>
                                → &nbsp; Additional ID proofs are recommended for a smooth verification process.
                            </p>
                        </li>
                        <li>
                            <p>
                                → &nbsp; Children below 12 years of age are exempt from ticket requirements.
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
                        Our dedicated team at Venkateshwara Travels offers complete assistance for NRI pilgrims,
                        <br /> including transportation, guidance, and customized Tirupati packages.
                    </p>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <div class="x_offer_car_heading_wrapper float_left">
                    <h3>Tirumala NRI Darshan Timings</h3>
                    <br />
                    <p>The Supadam Entry for NRIs is available daily from 12:00 PM to 6:00 PM. While there is no
                        exclusive quota, NRIs can benefit from quicker access through the Supadam queue alongside
                        other privileged categories such as:</p>
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
                    <h3>Step-by-Step NRI Darshan Process</h3>
                    <br />
                    <ul>
                        <li>
                            <p>
                                1. Report to the Special Darshan Complex at Tirumala for NRI registration.
                            </p>
                        </li>
                        <li>
                            <p>
                                2. Complete the NRI darshan form with your personal, passport, and visa details.
                            </p>
                        </li>
                        <li>
                            <p>
                                3. Submit the filled form along with:
                            </p>
                            <ul>
                                <li>
                                    <p>
                                        → &nbsp; Original passport
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        → &nbsp; A photocopy of your passport
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <p>
                                4. TTD officials will verify your documents and approve your darshan request.
                            </p>
                        </li>
                        <li>
                            <p>
                                5. Once approved, proceed to the designated counter to purchase the darshan ticket.
                            </p>
                        </li>
                        <li>
                            <p>
                                6. Complete the process and proceed to the darshan queue through Supadam Entry.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="x_offer_car_heading_wrapper float_left">
                    <h3>Why Choose Us?</h3>
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
                    <h3>Frequently Asked Questions (FAQ's)</h3>
                    <br />

                    <div class="nri-faq-accordion">
                        <div class="nri-faq-item is-open">
                            <h4><button type="button" class="nri-faq-trigger" aria-expanded="true" aria-controls="nri-faq-panel-1" id="nri-faq-header-1">1. Who is eligible for NRI darshan at Tirumala?</button></h4>
                            <div id="nri-faq-panel-1" class="nri-faq-panel" role="region" aria-labelledby="nri-faq-header-1">
                                <p>Only Non-Resident Indians (NRIs) and OCI cardholders are eligible for NRI darshan. Valid
                                    documents like a passport, visa, and OCI card must be presented.</p>
                            </div>
                        </div>

                        <div class="nri-faq-item">
                            <h4><button type="button" class="nri-faq-trigger" aria-expanded="false" aria-controls="nri-faq-panel-2" id="nri-faq-header-2">2. Is prior booking required for NRI
                                Darshan?</button></h4>
                            <div id="nri-faq-panel-2" class="nri-faq-panel" role="region" aria-labelledby="nri-faq-header-2" aria-hidden="true">
                                <p>No, prior booking is not required. Tickets can be purchased on the spot at the Supadam
                                    entry counter after verification.</p>
                            </div>
                        </div>

                        <div class="nri-faq-item">
                            <h4><button type="button" class="nri-faq-trigger" aria-expanded="false" aria-controls="nri-faq-panel-3" id="nri-faq-header-3">What is the cost of the NRI Darshan
                                ticket?</button></h4>
                            <div id="nri-faq-panel-3" class="nri-faq-panel" role="region" aria-labelledby="nri-faq-header-3" aria-hidden="true">
                                <p>The ticket costs INR 300 per person.</p>
                            </div>
                        </div>

                        <div class="nri-faq-item">
                            <h4><button type="button" class="nri-faq-trigger" aria-expanded="false" aria-controls="nri-faq-panel-4" id="nri-faq-header-4">4. Can friends or family accompany NRIs for
                                the darshan?</button></h4>
                            <div id="nri-faq-panel-4" class="nri-faq-panel" role="region" aria-labelledby="nri-faq-header-4" aria-hidden="true">
                                <p>No, the facility is strictly for NRIs. Friends or relatives residing in India are not
                                    permitted.</p>
                            </div>
                        </div>

                        <div class="nri-faq-item">
                            <h4><button type="button" class="nri-faq-trigger" aria-expanded="false" aria-controls="nri-faq-panel-5" id="nri-faq-header-5">5. What are the NRI darshan
                                timings?</button></h4>
                            <div id="nri-faq-panel-5" class="nri-faq-panel" role="region" aria-labelledby="nri-faq-header-5" aria-hidden="true">
                                <p>NRI Darshan via Supadam Entry is available daily from 12:00 PM to 6:00 PM.</p>
                            </div>
                        </div>

                        <div class="nri-faq-item">
                            <h4><button type="button" class="nri-faq-trigger" aria-expanded="false" aria-controls="nri-faq-panel-6" id="nri-faq-header-6">6. Are children allowed for NRI
                                darshan?</button></h4>
                            <div id="nri-faq-panel-6" class="nri-faq-panel" role="region" aria-labelledby="nri-faq-header-6" aria-hidden="true">
                                <p>Yes, children below 12 years of age are exempt from ticket requirements.</p>
                            </div>
                        </div>

                        <div class="nri-faq-item">
                            <h4><button type="button" class="nri-faq-trigger" aria-expanded="false" aria-controls="nri-faq-panel-7" id="nri-faq-header-7">7. What documents are required for the
                                darshan?</button></h4>
                            <div id="nri-faq-panel-7" class="nri-faq-panel" role="region" aria-labelledby="nri-faq-header-7" aria-hidden="true">
                                <p>NRIs must carry a valid passport, visa, and OCI card (if applicable). Additional ID
                                    proofs are recommended for verification.</p>
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