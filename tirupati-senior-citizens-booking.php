<?php
$pageTitle = "Tirupati Darshan Package for Senior Citizens | Comfortable Travel";
$pageDescription = "Book a comfortable Tirupati darshan package for senior citizens with private car travel, assistance and complete trip planning support.";
$activeMenu = null;
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
                                            Tirupati Darshan Packages
                                            <br />
                                            <span class="ttd-color">for Senior Citizens</span>
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

    <div class="x_offer_car_main_wrapper float_left padding_tb_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="x_offer_car_heading_wrapper float_left">
                        <!-- <h4>Divine Experience for NRI'S in Tirumala</h4> -->
                        <h2 style="font-size:30px;font-weight:800;line-height:33px;margin:0">How to Book Tirupati Senior Citizen Darshan</h2>
                        <br />
                        <p>Booking this category of darshan is handled through the official Tirumala Tirupati
                            Devasthanams (TTD) portal. TTD's current guidance states that a senior citizen must have
                            completed 65 years of age. Quota, eligibility and access remain subject to TTD.</p>
                        <p>Here is a step-by-step guide to the booking process, based on the information available from
                            TTD:</p>
                        <h3 style="display:block;font-size:16px;font-weight:600;line-height:1.5;margin:0 0 10px;text-transform:none">Step 1: Access the Official TTD Website</h3>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp; Use the official TTD online
                            services portal: https://ttdevasthanams.ap.gov.in/.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;<b>Important:</b> Avoid third-party
                            websites and travel agents that claim to book these tickets.
                            The official TTD website is the only authorized platform.</p>
                        <h3 style="display:block;font-size:16px;font-weight:600;line-height:1.5;margin:0 0 10px;text-transform:none">Step 2: Register or Log In</h3>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;You will need to have a registered
                            account on the TTD website.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;If you don't have one, you'll need to
                            register using a mobile number and an OTP (One-Time Password) for verification.</p>
                        <h3 style="display:block;font-size:16px;font-weight:600;line-height:1.5;margin:0 0 10px;text-transform:none">Step 3: Check for Quota Release</h3>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;The quota is released online by TTD
                            according to its current announcement and booking schedule.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;The current TTD guidance reports a
                            quota of 1,000 per day, but availability can change.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;You must book the tickets on a
                            "first-come, first-served" basis when the quota is released.</p>
                        <h3 style="display:block;font-size:16px;font-weight:600;line-height:1.5;margin:0 0 10px;text-transform:none">Step 4: Select the Darshan Date and Time</h3>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;Once logged in, navigate to the
                            "Special Darshan for Physically Disabled and Aged" section under Pilgrim Services.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;Select the desired date for your
                            darshan. Available dates will be highlighted.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;Choose the time shown in the
                            current TTD booking interface. The current TTD category page lists 3:00 PM Monday–Saturday;
                            verify the live schedule before travelling.</p>
                        <h3 style="display:block;font-size:16px;font-weight:600;line-height:1.5;margin:0 0 10px;text-transform:none">Step 5: Fill in Pilgrim Details and Upload Documents</h3>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;You will need to enter the details of
                            the senior citizen. The age must be 65 years or above.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;The current TTD category page lists
                            Aadhaar as the mandatory senior-citizen document. Follow the live TTD requirements rather
                            than assuming alternative IDs will be accepted.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;The current TTD guidance permits the
                            spouse as attendant where applicable. Follow the live booking instructions for the spouse's
                            details and documents.</p>
                        <h3 style="display:block;font-size:16px;font-weight:600;line-height:1.5;margin:0 0 10px;text-transform:none">Step 6: Complete the Booking</h3>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;After filling in all the required
                            details and uploading the documents, you can complete the booking.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;Any applicable charge or complimentary
                            component is determined by TTD and should be confirmed in the current booking flow.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;Once the booking is successful, you
                            will receive a confirmation, and you can download the darshan ticket. It's recommended to
                            print this ticket.</p>

                        <h3 style="display:block;font-size:16px;font-weight:600;line-height:1.5;margin:0 0 10px;text-transform:none">Important Rules and Guidelines</h3>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;<b>Proof of Age:</b> The original ID
                            proof submitted during the online booking process must be carried on the day of darshan. It
                            will be verified at the entry point.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;<b>Reporting Time:</b> Follow the
                            reporting location and time printed on the official TTD ticket or stated in the current TTD
                            notice.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;<b>Frequency:</b> Booking frequency
                            and rebooking restrictions are subject to the current TTD rules; confirm before making a new
                            booking.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;<b>Booking Channel:</b> Use the
                            official online TTD portal when the quota is offered. Do not assume offline availability.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;<b>Special Circumstances:</b> The
                            schedule and availability of this darshan may be subject to change or cancellation during
                            special occasions, festivals, or in cases of a high rush of pilgrims.</p>
                        <p>For the most accurate and up-to-date information, always refer to the official TTD website
                            and its announcements.</p>

                    </div>
                </div>

            </div>
        </div>
    </div>
<?php include './includes/footer.php'; ?>
