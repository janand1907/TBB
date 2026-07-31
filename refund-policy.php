<?php
$pageTitle = "Refund Policy | Divine Balaji Travels";
$pageDescription = "Read the refund and cancellation policy for Tirupati darshan tour packages booked through Divine Balaji Travels.";
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
    <div class="x_offer_car_main_wrapper float_left padding_tb_100" style="padding-bottom: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="x_offer_car_heading_wrapper float_left">

                        <h3>Payment Options</h3>
                        <br />
                        <p>1. How to Get Refund ?</p>
                        <p>The refund policy for tirupatibalajibooking.com is authorise company name : Divine Balaji Travels, specializing in Tirupati tours and South India. Our standardized and can vary
                            significantly from one company to another. It is absolutely essential to read and understand
                            the specific terms and conditions provided by the operator before you make any payment.
                        </p>
                        <p> Here is a general overview of what you can expect from most private tour operators' refund
                            policies:</p>

                        <p><b>1. Darshan Tickets are Non-Refundable</b></p>
                        <p>This is the most critical and consistent point across all tour operators. The Special Entry
                            Darshan (₹300) tickets, which are a core part of most packages, are booked through the
                            official TTD website. Once TTD issues these tickets in the pilgrim's name, they are
                            non-cancellable, non-transferable, and non-refundable. If you cancel your tour, the amount
                            paid for the darshan ticket will not be returned to you.
                        </p>
                        <p><b>2. Tiered Cancellation Policy</b></p>
                        <p> For the other components of the package (transportation, accommodation, guide fees, etc.),
                            private operators typically have a tiered refund policy based on how far in advance you
                            cancel. The closer you get to the travel date, the less of a refund you will receive.
                        </p>

                        <p>A common example of a tiered structure is:</p>

                        <p class="pl-20">→ &nbsp;<b>30 days or more before the tour:</b> You may receive a full refund
                            minus a small processing fee or a fixed percentage of the total cost (e.g., 10%).</p>
                        <p class="pl-20">→ &nbsp;<b>15 to 30 days before the tour:</b> The cancellation fee increases,
                            and you might receive a refund of 50-70% of the remaining amount after deducting the darshan
                            ticket cost.</p>
                        <p class="pl-20">→ &nbsp;<b>7 to 15 days before the tour:</b> The cancellation charges are much
                            higher, and the refund may be minimal, often around 25-50% of the remaining amount.</p>
                        <p class="pl-20">→ &nbsp;<b>Less than 7 days before the tour:</b> Many operators have a "no
                            refund" policy for cancellations within this window.</p>


                        <p><b>3. "No-Show" Policy</b></p>
                        <p>If you fail to show up for your tour without any prior notice, it is considered a "no-show,"
                            and you will not be entitled to any refund.
                        </p>



                        <p><b>4. Exceptions and Special Cases</b></p>
                        <p class="pl-20">→ &nbsp;<b>Force Majeure:</b> In case of unforeseen circumstances beyond the
                            control of the operator (e.g., natural calamities, government regulations, riots), the
                            policy may change. Some operators may offer a full refund, while Our Exclusive Tour Packages
                            may provide a voucher for a future booking. This will be outlined in their terms and
                            conditions.</p>
                        <p class="pl-20">→ &nbsp;<b>Operator Cancellation:</b> If the tour operator has to cancel the
                            trip due to operational reasons or other issues (e.g., vehicle breakdown), they are
                            generally obligated to provide a full refund Within 30 to 45 business days.</p>
                        <p class="pl-20">→ &nbsp;<b>Booking Without Darshan:</b> If you book a package that only
                            includes a car rental or accommodation without a darshan ticket, the refund policy for that
                            component may be more lenient.</p>
                        <p class="pl-20">→ &nbsp;<b>Up to 45 days before arrival:</b> 10% of tour cost</p>
                        <p class="pl-20">→ &nbsp;<b>44 - 30 days before arrival:</b> up to 30% of tour cost</p>
                        <p class="pl-20">→ &nbsp;<b>29 - 15 days before arrival:</b> up to 50% of tour cost</p>
                        <p class="pl-20">→ &nbsp;<b>14 - 7 days before arrival:</b> up to 70% of tour cost</p>
                        <p class="pl-20">→ &nbsp;<b>Less than 7 days before arrival:</b> No refund</p>



                        <p><b>How to Find the Refund Policy:</b></p>
                        <p class="pl-20">→ &nbsp;<b>Website:</b> The cancellation and refund policy is usually detailed
                            in the "Terms and Conditions," "FAQ," or a dedicated "Cancellation Policy" section on the
                            Our Standalone website.</p>
                        <p class="pl-20">→ &nbsp;<b>Booking Confirmation:</b> The Invoice and Proposed Itinerary will be
                            mentioned in the booking confirmation email or WhatsApp that the Sales Manager sends you.
                        </p>
                        <p>If you More Enquires For Your Refund : please mailus : mailtotourbooking@gmail.com We will
                            Respond usually We may require more than 72 hours also few queries. Because we sincerely
                            manually checking all aspects for each and every booking. So sometimes will get delayed
                            reply from our ends.</p>




                    </div>


                </div>

            </div>
        </div>


    </div>

<?php include './includes/footer.php'; ?>