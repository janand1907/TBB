<?php
$pageTitle = "Tirupati Special Darshan Tickets Online | Booking Assistance";
$pageDescription = "Book Tirupati special entry darshan tickets online with our private darshan tour package including car travel and trip planning support.";
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
                                            Tirupati Special Darshan Tickets
                                            <br />
                                            <span class="ttd-color">Booking Assistance</span>
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

                        <h3>Special Darshan Guidance</h3>
                        <br />
                        <p style="font-weight: 600;">How To Book Special Entry Darshan?</p>
                        <p>Special Entry Darshan, also known as Seeghra Darshan (meaning "quick darshan"), is a popular
                            and convenient option for pilgrims visiting Tirumala. The ticket for this darshan costs ₹300
                            per person and is primarily booked online. Here's a detailed guide on how to book it.</p>
                        <p style="font-weight: 600; "><b>Online Booking is the Primary Method</b></p>
                        <p>The Tirumala Tirupati Devasthanams (TTD) has moved almost entirely to an online system for
                            booking Special Entry Darshan tickets. There are very limited to no offline counters for
                            this category, so online booking is highly recommended.</p>
                    </div>
                </div>

                <div class="col-md-12 mt-4">
                    <div class="x_offer_car_heading_wrapper float_left">
                        <h3>Steps for Online Booking:</h3>
                        <br />
                        <p><span style="font-weight: 600;">1. Visit the Official Website:</span> Go to the official TTD
                            website or booking portal. It's crucial to use only the official site to avoid fraudulent
                            websites.</p>
                        <ul>
                            <li>
                                <p class="pl-20">
                                    → &nbsp; The official TTD online booking portal is
                                    https://ttdevasthanams.ap.gov.in/.
                                </p>
                            </li>
                        </ul>
                        <p><span style="font-weight: 600;">2. Wait in the Virtual Queue:</span> TTD often uses a virtual
                            queue system to manage the high volume of traffic when tickets are released. Be patient and
                            wait for your turn to access the booking page.</p>
                        <p><span style="font-weight: 600;">3. Login with a Mobile Number:</span></p>
                        <ul>
                            <li>
                                <p class="pl-20">
                                    → &nbsp; Enter your mobile number and the CAPTCHA code.
                                </p>
                                <p class="pl-20">
                                    → &nbsp; Click "Generate OTP" to receive a 6-digit one-time password on your phone
                                </p>
                                <p class="pl-20">
                                    → &nbsp; Enter the OTP to log in to the portal.
                                </p>
                            </li>
                        </ul>
                        <p><span style="font-weight: 600;">4. Check Availability:</span></p>
                        <ul>
                            <li>
                                <p class="pl-20">
                                    → &nbsp; You will be redirected to the availability page for Special Entry Darshan.
                                </p>
                                <p class="pl-20">
                                    → &nbsp; The tickets are released in a monthly quota, usually 60 to 90 days in
                                    advance.
                                </p>
                                <p class="pl-20">
                                    → &nbsp; Availability is limited and tickets sell out very quickly, often within
                                    minutes of being released. It is recommended to be ready with your details as soon
                                    as the quota is live.
                                </p>
                                <p class="pl-20">
                                    → &nbsp; Select your preferred date and time slot from the available options.
                                </p>
                            </li>
                        </ul>
                        <p><span style="font-weight: 600;">5. Enter Pilgrim Details:</span></p>
                        <ul>
                            <li>
                                <p class="pl-20">
                                    → &nbsp; You can book tickets for a maximum of 6 people in a single transaction.
                                </p>
                                <p class="pl-20">
                                    → &nbsp; Enter the details of each pilgrim:

                                </p>
                                <p class="pl-50 fw-600">
                                    1.Full Name <br />2.Age<br />3.Gender<br />4.Valid Photo ID proof (Aadhaar Card,
                                    Voter ID, or Passport for NRIs). Aadhaar is the most commonly used and preferred ID.
                                </p>
                                <p class="pl-20">
                                    → &nbsp; Children below 12 years of age do not require a ticket but must carry age
                                    proof (like a birth certificate or school ID).
                                </p>
                            </li>
                        </ul>
                        <p><span style="font-weight: 600;">6. Make Payment:</span></p>
                        <ul>
                            <li>
                                <p class="pl-20">
                                    → &nbsp; Review all the details you have entered.
                                </p>
                                <p class="pl-20">
                                    → &nbsp; Proceed to the payment page. The cost is ₹300 per person.

                                </p>
                                <p class="pl-20">
                                    → &nbsp; You can pay using credit/debit cards, net banking, or UPI.
                                </p>
                            </li>
                        </ul>
                        <p><span style="font-weight: 600;">7. Download Your Ticket:</span></p>
                        <ul>
                            <li>
                                <p class="pl-20">
                                    → &nbsp; After a successful payment, you will be redirected to a page where you can
                                    download your Special Entry Darshan ticket.
                                </p>
                                <p class="pl-20">
                                    → &nbsp; You will also receive a confirmation SMS with a link to download the
                                    ticket.

                                </p>
                                <p class="pl-20">
                                    → &nbsp; It is important to download and print the ticket or save a digital copy on
                                    your phone.
                                </p>
                            </li>
                        </ul>
                        <p><span style="font-weight: 600;">Offline/Current Booking (Limited Availability) – Not
                                Available at the Moment</span> </p>
                        <p><span style="font-weight: 600;">Important Notes and Guidelines</span></p>
                        <ul>
                            <li>
                                <p class="pl-20">
                                    <span style="font-weight: 600;">1.ID Proof is Mandatory:</span> You must carry the
                                    original ID proof that you used for booking the ticket. TTD officials will verify it
                                    at the time of entry.
                                </p>
                                <p class="pl-20">
                                    <span style="font-weight: 600;">2.Dress Code:</span> A strict traditional dress code
                                    is enforced. Men should wear a dhoti, pyjama, or kurta. Women must wear a saree,
                                    half-saree, or chudidhar with a dupatta.
                                </p>
                                <p class="pl-20">
                                    <span style="font-weight: 600;">3.Reporting Time and Location:</span> Your ticket
                                    will specify the reporting time and location (usually the ATC parking area in
                                    Tirumala). You must report on time, and you will not be allowed to enter the queue
                                    more than one hour after your designated time slot.
                                </p>
                            </li>
                        </ul>
                        <p style="padding-bottom: 30px;"><span style="font-weight: 600;">Laddu Prasadam:</span> Each
                            Special Entry Darshan ticket
                            entitles you to a specific number of free laddus, and you can purchase additional laddus if
                            needed.</p>

                    </div>
                </div>

            </div>
        </div>
    </div>

<?php include './includes/footer.php'; ?>
