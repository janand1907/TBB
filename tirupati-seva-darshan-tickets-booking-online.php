<?php
$pageTitle = "Tirupati Seva Darshan Tickets Booking Online | Seva Package";
$pageDescription = "Book Tirupati seva darshan tickets online with our private darshan tour package including car travel, pickup and trip assistance.";
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
                                            Tirupati Seva Darshan Tickets
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

                        <h3>Seva Darshan Tickets</h3>
                        <br />
                        <p>Seva Darshan tickets are a specific category of paid darshan tickets that allow pilgrims to
                            participate in or witness a specific daily, weekly, or annual ritual (seva) performed for
                            the deity. These are different from the general darshan queues like Sarva Darshan (free) or
                            Special Entry Darshan (₹300) which are primarily for a quick glimpse of the main deity.</p>
                        <p><span style="font-weight: 600;">Types of Sevas</span></p>
                        <p>The Tirumala Tirupati Devasthanams (TTD) performs numerous sevas, each with its own
                            significance, schedule, and ticket price. Some of the most popular sevas include:</p>
                        <ul>
                            <li>
                                <p class="pl-20">
                                    <span style="font-weight: 600;">1. Suprabhatam:</span> This is the morning ritual to
                                    wake up the deity.
                                </p>
                                <p class="pl-20"><span style="font-weight: 600;">2. Thomala Seva:</span> The ritual of
                                    adorning the Lord with fresh flowers and garlands.</p>
                                <p class="pl-20"><span style="font-weight: 600;">3. Archana:</span> Chanting the 1,000
                                    divine names of Lord Venkateswara.</p>
                                <p class="pl-20"><span style="font-weight: 600;">4. Kalyanotsavam:</span> The symbolic
                                    wedding ceremony of the Lord with his consorts. This is one of the most sought-after
                                    sevas.</p>
                                <p class="pl-20"><span style="font-weight: 600;">5. Dolotsavam (Unjal Seva):</span> The
                                    ritual of placing the Lord in a swing.</p>
                                <p class="pl-20"><span style="font-weight: 600;">6. Sahasra Deepalankara Seva:</span>
                                    The ritual of lighting 1,000 diyas (lamps) in front of the deity.</p>
                            </li>
                        </ul>
                        <p>There are also weekly sevas performed on specific days, such as:</p>
                        <ul>
                            <li>
                                <p class="pl-20">
                                    <i class="fa fa-check"></i>&nbsp;&nbsp; <b>Visesha Puja (Mondays)</b>
                                </p>
                            </li>
                            <li>
                                <p class="pl-20">
                                    <i class="fa fa-check"></i>&nbsp;&nbsp; <b>Ashtadala Pada Padmaradhana
                                        (Tuesdays)</b>
                                </p>
                            </li>
                            <li>
                                <p class="pl-20">
                                    <i class="fa fa-check"></i>&nbsp;&nbsp; <b>Sahasrakalasa Abhishekam (Wednesdays)</b>
                                </p>
                            </li>
                            <li>
                                <p class="pl-20">
                                    <i class="fa fa-check"></i>&nbsp;&nbsp; <b>Tiruppavada Seva (Thursdays)</b>
                                </p>
                            </li>
                            <li>
                                <p class="pl-20">
                                    <i class="fa fa-check"></i>&nbsp;&nbsp; <b>Abhishekam (Fridays)</b>
                                </p>
                            </li>
                        </ul>
                        <p><b>How to Book Seva Darshan Tickets</b></p>
                        <p>Booking Seva Darshan tickets is highly competitive and is almost exclusively done online. TTD
                            releases a limited quota of tickets for these rituals on its official website.</p>
                        <ul>
                            <li>
                                <p class="pl-20">
                                    <b>1. Online Booking is the Main Method:</b> You must book through the official TTD
                                    website
                                    or app. The tickets are typically released as part of a monthly quota, usually 60 to
                                    90 days in advance.
                                </p>
                            </li>
                            <li>
                                <p class="pl-20"><b>2. Lottery System:</b> For some high-demand sevas (like Suprabhatam,
                                    Thomala, Archana), a virtual lottery system is used. Devotees can register for the
                                    lottery, and a limited number of tickets are allotted to the winners.</p>
                            </li>
                            <li>
                                <p class="pl-20"><b>3. Ticket Price:</b> The cost of Seva Darshan tickets varies widely,
                                    ranging from ₹200 to several thousand rupees, depending on the specific ritual. The
                                    tickets may be priced per person or per couple (for sevas like Kalyanotsavam).</p>
                            </li>
                            <li>
                                <p class="pl-20"><b>4. Limited Availability:</b> The number of tickets for each seva is
                                    very limited to maintain the sanctity of the ritual. This is why they sell out very
                                    quickly.</p>
                            </li>
                        </ul>
                        <p><b>Important Notes:</b></p>
                        <ul>
                            <li>
                                <p class="pl-20"><b>1. No Offline Booking:</b> For most daily sevas, there are no
                                    offline booking counters. The entire process is online.
                                </p>
                            </li>
                            <li>
                                <p class="pl-20"><b>2. Darshan Included:</b> A key benefit of booking a Seva ticket is
                                    that it includes a darshan of the main deity, often from a closer and more
                                    privileged location.
                                </p>
                            </li>
                            <li>
                                <p class="pl-20"> <b>3. Dress Code:</b> The strict traditional dress code is mandatory
                                    for all Seva Darshan ticket holders.
                                </p>
                            </li>
                            <li>
                                <p class="pl-20"> <b>4. Non-Refundable:</b> Like other TTD tickets, Seva Darshan tickets
                                    are generally non-cancellable, non-refundable, and non-transferable.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>

<?php include './includes/footer.php'; ?>
