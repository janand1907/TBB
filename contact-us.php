<?php
$pageTitle = "Contact Us | Divine Balaji Travels - Tirupati Tour Packages";
$pageDescription = "Get in touch with Divine Balaji Travels for Tirupati darshan packages, bookings and enquiries. Call +91-99947-51079 or send us a message.";
$activeMenu = 'contact';
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
                                            Tirumala Darshan for
                                            <br />
                                            <span class="ttd-color">Seva Darshan Tour </span>Package
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
                    <h3>Tirupati Darshan Packages Available</h3>
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
    <div class="x_offer_car_main_wrapper float_left padding_tb_100" style="padding-bottom: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="x_offer_car_heading_wrapper float_left">

                        <div class="tab">
                            <button class="tablinks active" onclick="openCity(event, 'Request Form')">Request
                                Form</button>
                            <button class="tablinks" onclick="openCity(event, 'Refund Request')">Refund
                                Request</button>
                            <button class="tablinks"
                                onclick="openCity(event, 'Feedback and Suggestion')">Feedback and
                                Suggestion</button>
                            <button class="tablinks"
                                onclick="openCity(event, 'Complaints')">Complaints</button>
                        </div>

                        <div id="Request Form" class="tabcontent" style="display: block;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div
                                            class="x_offer_car_heading_wrapper x_offer_car_heading_wrapper_contact float_left">
                                            <h4 style="padding-top: 20px;">get in touch</h4>
                                            <h3>Request Form</h3>

                                        </div>
                                    </div>
                                    <div class="col-xl-5 offset-xl-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form1">
                                            <input type="text" placeholder="Full Name *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="text" placeholder="Whatsapp Number *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 offset-xl-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="email" placeholder="Email Address *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="text" placeholder="Location *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 offset-xl-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="text" placeholder="Tour Packages No of PPL *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="text" placeholder="Others *">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="contect_btn contect_btn_contact">
                                            <ul>
                                                <li><a href="#">Send Message <i class="fa fa-arrow-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row box-shadow">
                                    <div class="col-md-12" style="padding: 20px 0;">
                                        <h4 class="h4-mail">
  <a href="mailto:divinebalajitravels@gmail.com">Email : divinebalajitravels@gmail.com</a>
</h4>
                                        <h4 class="h4-reg">Address : Core 1, 2nd Floor, Pacifica Tech Park,<br>
    Rajiv Gandhi Salai, Navalur,<br>
    Chennai, Tamilnadu - 600130.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="Refund Request" class="tabcontent">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div
                                            class="x_offer_car_heading_wrapper x_offer_car_heading_wrapper_contact float_left">
                                            <h4 style="padding-top: 20px;">get in touch</h4>
                                            <h3>Refund Request</h3>

                                        </div>
                                    </div>
                                    <div class="col-xl-5 offset-xl-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form1">
                                            <input type="text" placeholder="Full Name *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="text" placeholder="Whatsapp Number *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 offset-xl-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="email" placeholder="Email Address *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="text" placeholder="Invoice Number *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 offset-xl-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="text" placeholder="Any Proof Attachment Location *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="text" placeholder="Package Details *">
                                        </div>
                                    </div>
                                    <div class="col-xl-10 offset-xl-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="text" placeholder="Others">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="contect_btn contect_btn_contact">
                                            <ul>
                                                <li><a href="#">Send Message <i class="fa fa-arrow-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row box-shadow">
                                    <div class="col-md-12" style="padding: 20px 0;">
                                        <h4 class="h4-mail">
  <a href="mailto:divinebalajitravels@gmail.com">Email : divinebalajitravels@gmail.com</a>
</h4>
                                        <h4 class="h4-reg">Register Address : No.2, MainRoad, Sitharkadu, Mayiladuthurai
                                            - 609003.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="Feedback and Suggestion" class="tabcontent">

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div
                                            class="x_offer_car_heading_wrapper x_offer_car_heading_wrapper_contact float_left">
                                            <h4 style="padding-top: 20px;">get in touch</h4>
                                            <h3>Feedback and Suggestion</h3>

                                        </div>
                                    </div>
                                    <div class="col-xl-5 offset-xl-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form1">
                                            <input type="text" placeholder="Full Name *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="text" placeholder="Whatsapp Number *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 offset-xl-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="email" placeholder="Email Address *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="text" placeholder="Feedback and Suggestions: *">
                                        </div>
                                    </div>


                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="contect_btn contect_btn_contact">
                                            <ul>
                                                <li><a href="#">Send Message <i class="fa fa-arrow-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row box-shadow">
                                    <div class="col-md-12" style="padding: 20px 0;">
                                       <h4 class="h4-mail">
  <a href="mailto:divinebalajitravels@gmail.com">Email : divinebalajitravels@gmail.com</a>
</h4>
                                        <h4 class="h4-reg">Register Address : No.2, MainRoad, Sitharkadu, Mayiladuthurai
                                            - 609003.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="Complaints" class="tabcontent">

                            <div class="container">
                                <div class="row" style="padding-bottom: 20px;">
                                    <div class="col-md-12">
                                        <div
                                            class="x_offer_car_heading_wrapper x_offer_car_heading_wrapper_contact float_left">
                                            <h4 style="padding-top: 20px;">get in touch</h4>
                                            <h3>Complaints</h3>

                                        </div>
                                    </div>
                                    <div class="col-xl-5 offset-xl-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form1">
                                            <input type="text" placeholder="Full Name *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="text" placeholder="Whatsapp Number *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 offset-xl-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="email" placeholder="Email Address *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="text" placeholder="Driver Complaints *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 offset-xl-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="text" placeholder="Vehicle Complaints *">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="text" placeholder="Food Complaints *">
                                        </div>
                                    </div>
                                    <div class="col-xl-10 offset-xl-1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="contect_form2">
                                            <input type="text" placeholder="Others">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="contect_btn contect_btn_contact">
                                            <ul>
                                                <li><a href="#">Send Message <i class="fa fa-arrow-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row box-shadow">
                                    <div class="col-md-12" style="padding: 20px 0;">
                                        <h4 class="h4-mail">
  <a href="mailto:divinebalajitravels@gmail.com">Email : divinebalajitravels@gmail.com</a>
</h4>


                                        <h4 class="h4-reg">Register Address : No.2, MainRoad, Sitharkadu, Mayiladuthurai
                                            - 609003.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


<style>
    /* Email style */
.h4-mail {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 8px;
}

.h4-mail a {
  color: #2563eb; /* blue */
  text-decoration: none;
  background: #f0f7ff;
  padding: 6px 12px;
  border-radius: 6px;
  border: 1px solid #c7ddff;
  display: inline-block;
  transition: 0.3s ease;
}

.h4-mail a:hover {
  background: #2563eb;
  color: #fff;
  border-color: #2563eb;
}
</style>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].classList.remove("active");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("active");
}
</script>

<?php include './includes/footer.php'; ?>
