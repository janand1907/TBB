<?php
$pageTitle = "Tirupati Hotel Accommodation Booking Online | Stay Near Temple";
$pageDescription = "Book hotel accommodation near Tirupati temple online with our darshan tour packages including car travel and complete trip support.";
$activeMenu = null;
include './header.php';
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
                                            Accommodation Services for
                                            <br />
                                            <span class="ttd-color">Tirupati Darshan Tour </span>Package
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

                        <h3>Accomdation Services</h3>
                        <br />
                        <p>2, How to Get Accommodation in Tirupati ?</p>
                        <p><span style="font-weight: 600;">Accommodation on Tirumala Hill (Managed by TTD)</span></p>
                        <p>For accommodation on the hill, which is the most convenient option for darshan, the primary
                            method is through the Tirumala Tirupati Devasthanams (TTD).</p>
                        <p><b>1. Offline Booking (Current Booking)</b></p>
                        <ul>
                            <li>
                                <p class="pl-20">
                                    <b> → &nbsp; Central Reservation Office (CRO):</b> The main offline room allotment
                                    counter
                                    is at the CRO Office in Tirumala. It is recommended to arrive early in the morning
                                    (e.g., 5-6 AM) as rooms are issued on a first-come, first-served basis and can run
                                    out quickly, especially during peak seasons.
                                </p>
                            </li>
                            <li>
                                <p class="pl-20">
                                    <b> → &nbsp; New Registration Centers:</b> TTD has also set up additional counters
                                    to ease the process. These may be located at places like the GNC tollgate, Balaji
                                    bus station, Kausthubham rest house, and Ram Bhagicha rest house.
                                </p>
                            </li>
                            <li>
                                <p class="pl-20">
                                    <b> → &nbsp; Procedure:</b>
                                </p>
                                <p class="pl-20">
                                    1. Visit a counter with a valid ID proof (Aadhaar card is preferred).
                                </p>
                                <p class="pl-20">
                                    2. Your details will be registered, and your face may be scanned. You will be put on
                                    a waiting list.
                                </p>
                                <p class="pl-20">
                                    3. Once a room becomes available, you will receive an SMS with the room allotment
                                    details and the sub-enquiry office where you need to check in.
                                </p>
                                <p class="pl-20">
                                    4. You must report to the specified location within 30 minutes to get the room keys.
                                </p>

                            </li>
                            <li>
                                <p class="pl-20">
                                    <b> → &nbsp; Important Notes:</b>
                                </p>
                                <p class="pl-20">
                                    1. Rooms are typically allotted for one day (24 hours). An extension may be
                                    possible, but it is not guaranteed.
                                </p>
                                <p class="pl-20">
                                    2. A caution deposit is collected, which is refunded upon vacating the room.
                                </p>
                                <p class="pl-20">
                                    3. Rooms are not allotted to a single person, unmarried couples, or minors.
                                </p>
                                <p class="pl-20">
                                    4. Carrying your original ID proof is mandatory.
                                </p>

                            </li>

                        </ul>
                        <h3>Accommodation in Tirupati Town (at the foothills)</h3>
                        <p>If you prefer to stay in the town of Tirupati, you have more flexibility with both
                            TTD-managed complexes and private hotels.</p>
                        <p><b>1. TTD-Managed Complexes (Offline Booking)</b> TTD operates large complexes in Tirupati
                            that
                            offer affordable and well-maintained rooms. While some of these are moving to an online-only
                            booking model, some still offer current booking.</p>
                        <ul>
                            <li>
                                <p class="pl-20">
                                    <i class="fa fa-check"></i>&nbsp;&nbsp; <b>Vishnu Nivasam Complex:</b> Located
                                    opposite the Tirupati Railway Station, this complex is a popular choice for
                                    pilgrims. It often has a mix of online and offline bookings, with a portion of the
                                    rooms (around 50%) available at the current booking counter on a first-come,
                                    first-served basis.
                                </p>
                            </li>
                            <li>
                                <p class="pl-20">
                                    <i class="fa fa-check"></i>&nbsp;&nbsp; <b>Srinivasam Complex:</b> Situated opposite
                                    the Tirupati Main Bus Station, this complex is another major TTD accommodation
                                    center. While it primarily operates on an online booking system, it's worth checking
                                    with the counter for any last-minute availability, though this is not a reliable
                                    method.
                                </p>
                            </li>

                        </ul>
                        <p><b>2. Private Hotels</b></p>
                        <p>Tirupati has a vast number of private hotels, ranging from budget-friendly options to luxury
                            hotels. These can be booked both offline (by walking in) and online through various travel
                            websites.</p>
                        <ul>
                            <li>
                                <p class="pl-20">
                                    <i class="fa fa-check"></i>&nbsp;&nbsp; <b>How to Book Offline:</b> You can simply
                                    walk into any hotel and inquire about room availability. This is a good option if
                                    you are flexible with your choices.
                                </p>
                            </li>
                            <li>
                                <p class="pl-20">
                                    <i class="fa fa-check"></i>&nbsp;&nbsp; <b>How to Find a Hotel:</b> You will find
                                    many hotels near the railway station and bus stand, as well as throughout the city.
                                    You can use online maps or local directories to find hotels in your preferred
                                    location.
                                </p>
                            </li>

                        </ul>


                        <h3>General Tips for Accommodation:</h3>


                        <p><b>1. Book in Advance:</b> To avoid any hassle, especially during festivals, weekends, or
                            holidays, it is highly recommended to book your accommodation online through the official
                            TTD website or through a private hotel booking portal well in advance.</p>
                        <p><b>2.Carry ID Proof:</b> Always carry a valid photo ID for every member of your group, as it
                            is a mandatory requirement for check-in at both TTD and private accommodations.</p>
                        <p><b>3. Check-in and Check-out:</b> Be aware of the specific check-in and check-out timings for
                            your accommodation to avoid any extra charges or cancellation of your booking.</p>

                    </div>
                </div>


            </div>
        </div>
    </div>

<?php include './footer.php'; ?>