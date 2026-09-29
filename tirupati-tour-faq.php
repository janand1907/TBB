<?php
$pageTitle = "Tirupati Darshan Booking FAQs | Tickets, NRI & Package Questions";
$pageDescription = "Answers to common questions about Tirupati darshan ticket booking, NRI darshan, Srivani tickets, infant darshan and tour package planning.";
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
                                            Tirupati Darshan Booking FAQs
                                            <br />
                                            <span class="ttd-color">Travel &amp; Package Questions</span>
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
    <div class="x_offer_car_main_wrapper float_left padding_tb_100"
        style="padding-bottom: 60px; background: lavenderblush;">
        <div class="container">
            <div>
                <h3 class="h3-new">How to Book Tirupati Tickets Without Online?</h3>
                <p class="ptb-10" style="text-align: center;
    font-size: 18px; margin: 24px;">Booking tickets for Tirupati darshan without using the official online booking
                    system is
                    possible through several offline options. These options generally fall into the following
                    categories:</p>
            </div>
            <div class="row">


                <div class="col-md-12">
                    <!-- <div class="x_offer_car_heading_wrapper float_left"> -->

                    <button class="accordion"><b>1. Free Darshan (Sarva Darshan) with Time-Slot Tokens:</b></button>
                    <div class="panel">
                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; This is the free darshan option for devotees
                                who visit without a prior online booking.
                            </li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp;You must collect a time-slot token (known as an
                                SSD Token) from designated counters in
                                Tirupati before proceeding to Tirumala.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp;The tokens are issued on a first-come,
                                first-served basis and are limited in number.
                                It is highly advisable to arrive early in the morning to secure a token, especially
                                during weekends and festival seasons.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp;Locations to collect these tokens in Tirupati
                                include:</li>
                            <p class="pl-50">1. Bhudevi Complex (Alipiri)</p>
                            <p class="pl-50">2. Srinivasam Complex (Opposite Tirupati Main Bus Station)</p>
                            <p class="pl-50">3. Vishnu Nivasam Complex (Opposite Tirupati Railway Station)</p>
                            <p class="pl-50">4. Govindaraja Swamy Choultries (Behind Tirupati Railway Station)</p>
                            </p>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp;Be prepared for a long waiting time, which can
                                range from 6 to 12 hours or even more, depending on the crowd.</li>
                        </ul>
                    </div>

                    <button class="accordion mt-20"><b>2. Divya Darshan (for Pilgrims Walking to Tirumala):</b></button>
                    <div class="panel">
                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; This option is specifically for devotees who
                                choose to walk to Tirumala via the Alipiri or Srivari Mettu footpaths.
                            </li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Tokens for Divya Darshan are issued at
                                counters along these routes, allowing for a quicker darshan compared to the general
                                Sarva Darshan queues.</li>

                        </ul>
                    </div>

                    <button class="accordion mt-20"><b>3. Current Booking Counters for Special Entry Darshan (₹300
                            Tickets):</b></button>
                    <div class="panel">
                        <ul class="unorder">


                            <li><i class="fa fa-hand-o-right"></i>&nbsp; While the ₹300 Special Entry Darshan is
                                primarily booked online, on occasion, Tirumala Tirupati Devasthanams (TTD) may release a
                                limited number of offline tickets at designated counters in Tirupati.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; This is not a guaranteed method, and
                                availability can be very limited.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Counters for current booking are sometimes
                                located at the Srinivasam Complex. It's best to check with the TTD information centers
                                for any last-minute availability.</li>


                        </ul>
                    </div>
                    <button class="accordion mt-20"><b>4. Special Categories of Darshan:</b></button>
                    <div class="panel">
                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Infant Darshan: Parents with an infant below
                                one year of age are eligible for a free, quicker darshan. You will need to show the
                                infant's birth certificate or hospital discharge summary, along with the parents'
                                Aadhaar cards.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Senior Citizen & Differently-Abled Darshan:
                                Special queues are available for senior citizens (above 65 years) and differently-abled
                                individuals. These queues have shorter waiting times, and darshan is free. You will need
                                to provide valid ID proof.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; NRI Darshan: NRIs with a valid work visa or
                                foreigners can get a Special Entry Darshan (₹300 ticket) on arrival at Tirumala,
                                provided they have a valid passport and the darshan is within 30 days of their arrival.
                            </li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; VIP Break Darshan: This is a special darshan
                                category that is typically arranged through recommendation letters from high-ranking
                                officials. The letters must be submitted a day in advance at the JEO Camp office in
                                Tirumala. This is also not a guaranteed process, and a confirmation message is sent to
                                the registered mobile number if the request is approved.</li>

                        </ul>
                    </div>
                    <button class="accordion mt-20"><b>Important Notes:</b></button>
                    <div class="panel">
                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; ID Proof is Mandatory: For all offline booking
                                methods, you must carry a valid photo ID proof, such as an Aadhaar card, driving
                                license, or passport.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Check TTD Information: It is always recommended
                                to check with the official TTD information centers in Tirupati for the most current
                                information regarding ticket availability and counter timings, as these can change based
                                on the crowd and festival seasons.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Dress Code: A strict traditional dress code is
                                enforced for darshan. Men are required to wear a dhoti, pyjama, or kurta. Women must
                                wear a saree, half-saree, or chudidhar with a dupatta</li>


                        </ul>
                    </div>

                    <!-- </div> -->


                </div>

            </div>
        </div>
        <div class="container">
            <div>
                <h3 class="h3-new">How To Book NRI Darshan?</h3>
                <p class="ptb-10" style="text-align: center;
    font-size: 18px; margin: 24px;">Booking a darshan ticket for Non-Resident Indians (NRIs) at Tirumala is a special
                    offline process. There is no advance online booking for this category. Here's a detailed guide on
                    how to get your NRI Darshan ticket:</p>
            </div>
            <div class="row">


                <div class="col-md-12">
                    <!-- <div class="x_offer_car_heading_wrapper float_left"> -->

                    <button class="accordion"><b>Eligibility and Requirements</b></button>
                    <div class="panel">
                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Who is eligible? The NRI darshan is a special
                                facility for Non-Resident Indians and foreign nationals. You must have a valid passport
                                from a country other than India, a valid visa, or an Overseas Citizen of India (OCI)
                                card.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Arrival in India: A key requirement is that
                                your arrival in India must be within 30 days of your darshan date. TTD officials will
                                check the immigration stamp on your passport for verification.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Accompanying family: Spouses and children who
                                also reside abroad are generally eligible. However, Indian citizens who are not NRIs
                                (e.g., parents, relatives, or friends living in India) are not permitted to use this
                                special darshan facility. Children under 12 years of age can enter for free, but you
                                should have a valid age proof.</li>

                        </ul>
                    </div>

                    <button class="accordion mt-20"><b>Booking Process (Offline)</b></button>
                    <div class="panel">
                        <p style="padding-top: 10px;">The booking process is entirely offline and must be done in person
                            at Tirumala.</p>

                        <p><b>1. Reporting Location: You need to go to the Supatham Entry Point near the Vaikuntam Queue
                                Complex (VQC-1) at Tirumala. This is the designated counter for NRIs and foreign
                                nationals.
                            </b></p>
                        <p><b>2. Required Documents: You must carry the following original and photocopied documents for
                                verification:</b></p>
                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Your original passport.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; A photocopy of your passport, including the
                                visa page and the page with the recent Indian immigration stamp (showing your arrival
                                date).</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; For OCI cardholders, the original OCI card and
                                a photocopy.</li>
                        </ul>
                        <p><b>3. Registration and Verification:</b></p>
                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; At the counter, you will need to fill out a
                                form with your personal, passport, and visa details.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; A TTD official will verify all your
                                documents to ensure you meet the eligibility criteria (especially the 30-day arrival
                                rule).</li>
                        </ul>
                        <p><b> 4. Ticket Purchase:</b></p>
                        <ul></ul>
                        <li><i class="fa fa-hand-o-right"></i>&nbsp; Once your documents are verified and approved, you
                            can purchase the special darshan ticket.</li>
                        <li><i class="fa fa-hand-o-right"></i>&nbsp; The ticket costs ₹300 per person.</li>
                        </ul>
                        <p><b>5. Darshan:</b></p>

                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp;After purchasing the ticket, you will be
                                directed to the dedicated queue for NRI darshan, which is typically merged with the
                                Special Entry Darshan (₹300) queue. This queue is designed for a quicker darshan
                                experience.</li>
                        </ul>


                    </div>

                    <button class="accordion mt-20"><b>Important Notes and Guidelines</b></button>
                    <div class="panel">
                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Timings: The reporting time for NRI darshan is
                                typically from 12:00 PM to 6:00 PM daily. However, it is advisable to check for any
                                changes in timings. It is also recommended to arrive a little early to allow for the
                                verification process.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Dress Code: A strict traditional dress code is
                                enforced for darshan.</li>
                            <p class="pl-50">1. Men: Must wear a dhoti, pyjama, or kurta with an upper cloth.</p>
                            <p class="pl-50">2. Women: Must wear a saree, half-saree, or chudidhar with a dupatta.</p>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Electronics: Electronic gadgets such as mobile
                                phones and cameras are not permitted inside the temple. You must deposit them at the
                                free luggage counters before entering the queue.</li>
                        </ul>
                    </div>
                    <p style="padding-top: 20px;text-align: center;-"><b>Darshan Time:</b> The darshan for this category
                        typically takes
                        around 3-4 hours, depending on the
                        crowd.</p>

                    <!-- </div> -->


                </div>

            </div>
        </div>


        <div class="container">
            <div>
                <h3 class="h3-new">How To Book Infant Darshan ?</h3>
                <p class="ptb-10" style="text-align: center;
    font-size: 18px; margin: 24px;">Booking infant darshan in Tirupati is a special provision offered by the Tirumala
                    Tirupati Devasthanams (TTD) to ensure a smooth and quick pilgrimage for families with very young
                    children. This facility is entirely an offline process and does not require any advance booking.
                    <br />Here is a step-by-step guide on how to avail Infant Darshan:
                </p>

            </div>
            <div class="row">


                <div class="col-md-12">
                    <!-- <div class="x_offer_car_heading_wrapper float_left"> -->

                    <button class="accordion"><b>Eligibility and Rules</b></button>
                    <div class="panel">
                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Age Limit: The infant must be under one year of
                                age. This is a strict rule, and TTD officials will verify the child's age.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Accompanying Family: Only the parents of the
                                infant are allowed to accompany the child. Siblings below 12 years of age may also be
                                permitted. Grandparents or other relatives are generally not allowed to use this special
                                entry.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Cost: The Infant Darshan is free of cost.</li>

                        </ul>
                    </div>

                    <button class="accordion mt-20"><b>Documents Required</b></button>
                    <div class="panel">
                        <p style="padding-top: 10px;">You must carry the following original and photocopied documents
                            for verification:</p>

                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; For the Infant: The original birth certificate
                                or a hospital discharge summary. This is the most crucial document to prove the child's
                                age.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; For the Parents: The original Aadhaar card of
                                both the mother and father.</li>

                        </ul>

                    </div>

                    <button class="accordion mt-20"><b>Booking Process (Offline)</b></button>
                    <div class="panel">
                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Reporting Location: You need to go to the
                                Supatham Entry Point in Tirumala. This is the designated gate for special darshan
                                categories, including infants. It is located near the Vaikuntam Queue Complex (VQC-1).
                            </li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Reporting Time: The typical reporting time for
                                Infant Darshan is from 12:00 PM to 6:00 PM. However, it is always a good idea to confirm
                                the latest timings with TTD information centers, as they can change during festivals or
                                on special days.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Verification: At the Supatham entrance, TTD
                                officials will verify your documents to confirm the infant's age and the identity of the
                                parents.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Entry and Darshan: Once your documents are
                                verified, you will be given a free darshan ticket and directed to a special queue. This
                                queue is significantly shorter than the general queues, allowing for a quicker darshan
                                experience.</li>
                        </ul>
                    </div>
                    <button class="accordion mt-20"><b>Important Notes and Tips</b></button>
                    <div class="panel">

                        <p style="padding-top: 20px;">1. Dress Code: A strict traditional dress code is mandatory for
                            darshan. Men must wear a
                            dhoti, pyjama, or kurta. Women must wear a saree, half-saree, or chudidhar with a dupatta.
                        </p>
                        <p>2. Electronics: Mobile phones, cameras, and other electronic devices are strictly prohibited
                            inside the temple. You must deposit them at the free luggage counters before entering the
                            queue.</p>
                        <p>3. Avoid Peak Seasons: To ensure a more comfortable experience for your infant, it's
                            advisable to avoid visiting Tirumala during major festivals, public holidays, and weekends,
                            as even the special queues can get crowded.</p>
                        <p>4. Essentials: Remember to carry all the necessary items for your baby, such as diapers,
                            wipes, feeding bottles, and food. TTD provides baby care facilities with nursing and
                            changing areas.</p>

                    </div>

                    <!-- </div> -->


                </div>

            </div>
        </div>



        <div class="container">
            <div>
                <h3 class="h3-new">How To Book Srivani Trust Tickets ?</h3>
                <p class="ptb-10" style="text-align: center;font-size: 18px; margin: 24px;">Booking darshan tickets
                    through the Srivani Trust Tirupati Break darshan online
                    Booking is a popular option for devotees who wish to make a donation to the TTD's temple
                    construction and renovation projects while also securing a quicker and more convenient darshan. The
                    process involves a mandatory donation followed by booking the darshan ticket.</p>

            </div>
            <div class="row">


                <div class="col-md-12">
                    <!-- <div class="x_offer_car_heading_wrapper float_left"> -->

                    <button class="accordion"><b>Online Booking is the Primary Method</b></button>
                    <div class="panel">


                        <p style="padding-top:20px;">The most common and recommended way to book Srivani Trust darshan
                            is through the official TTD website. This process is divided into two main steps: making the
                            donation and then booking the darshan slot.</p>

                        <p><b>1. Visit the Official TTD Website:</b></p>
                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp;Go to the official TTD online booking portal:
                                https://ttdevasthanams.ap.gov.in/.</li>
                        </ul>

                        <p><b>2. Make the Donation:</b></p>
                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Log in using your registered mobile number and
                                OTP.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Navigate to the 'SRIVANI Trust Donations'
                                section.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; You must donate a minimum of ₹10,000 per person
                                to the trust. This donation is non-refundable.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; You will receive a donation receipt after
                                successful payment. This receipt is crucial for the next step.</li>
                        </ul>

                        <p><b> 3. Book the Darshan Ticket:</b></p>
                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; After making the donation, go to the 'Donor
                                Privileges' section (you may need to log out and log back in for this option to appear).
                            </li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Select your preferred darshan date and time
                                slot from the available quota.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; The darshan ticket itself costs an additional
                                ₹500 per person.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Make the payment for the darshan tickets and
                                download your confirmed ticket.</li>

                        </ul>
                    </div>

                    <button class="accordion mt-20"><b>Important points for online booking:</b></button>
                    <div class="panel">
                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; Tickets are released in monthly quotas, often
                                60-90 days in advance. Be sure to check the TTD website or official announcements for
                                the exact dates and times of the quota release.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; The tickets are in high demand and sell out
                                very quickly, so it's essential to be ready to book as soon as the quota is live.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; One donation of ₹10,000 entitles you to one
                                darshan ticket. If you are booking for multiple people, you will need to donate ₹10,000
                                for each person.</li>
                        </ul>

                    </div>

                    <button class="accordion mt-20"><b>Offline Booking (Limited Quota)</b></button>
                    <div class="panel">
                        <p style="padding-top: 20px;">While online booking is the primary method, TTD also provides a
                            limited offline quota for
                            Srivani darshan. This is typically for pilgrims who are already in Tirumala or Tirupati and
                            want to book a ticket for the next day.</p>
                        <p><b>1. At Tirumala:</b></p>
                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; A daily quota of tickets is available at the
                                JEO Camp office in Tirumala (often around 800 tickets).</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; The counter opens early in the morning (around
                                8 AM), but devotees often start queuing much earlier (e.g., 6 AM) due to high demand.
                            </li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; You will need to be physically present with
                                your original Aadhaar card (or other valid ID) and its photocopy.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; You will make the donation of ₹10,000 per
                                person and pay the ₹500 darshan ticket fee at the counter.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; A darshan slot will be allotted for the next
                                day.
                        </ul>
                        <p><b>2. At Tirupati Airport:</b></p>
                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; TTD has a counter at the Tirupati Airport
                                arrivals
                                terminal where a limited quota of tickets (around 200 per day) is available.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; This facility is exclusively for pilgrims
                                arriving
                                by air on the same day.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; You must present your same-day flight boarding
                                pass
                                and a valid ID to book the tickets.</li>
                        </ul>
                    </div>
                    <button class="accordion mt-20"><b>Darshan and Entry Process</b></button>
                    <div class="panel">

                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; <b>Reporting Location:</b> Srivani darshan
                                ticket holders must report at the Supatham Entry Point near the Vaikuntam Queue Complex
                                (VQC-1) at Tirumala.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; <b>Darshan Timings:</b> Srivani darshan is
                                often facilitated as part of the VIP Break Darshan. As per recent reports, TTD has been
                                moving to an evening darshan slot (e.g., 4:30 PM) for Srivani donors to provide a more
                                streamlined experience. You should always check the exact timing on your ticket.</li>

                            <li><i class="fa fa-hand-o-right"></i>&nbsp; <b>Dress Code:</b> The strict traditional dress
                                code is mandatory. Men must wear a dhoti, pyjama, or kurta. Women must wear a saree,
                                half-saree, or chudidhar with a dupatta.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; <b>Documents:</b> You must carry the printed
                                darshan ticket and the original ID card used for booking.</li>

                        </ul>
                    </div>
                    <button class="accordion mt-20"><b>Benefits of Srivani Darshan</b></button>
                    <div class="panel">
                        <ul class="unorder">
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; <b>Quicker Darshan:</b> It offers a
                                significantly
                                shorter waiting time compared to the general Sarva Darshan.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; <b>Contribution to a Cause:</b> Your donation
                                supports the noble cause of building and renovating temples.</li>
                            <li><i class="fa fa-hand-o-right"></i>&nbsp; <b>VIP Break Darshan Access:</b> Srivani donors
                                are
                                given privileges similar to VIP Break Darshan, including access to a special queue and a
                                closer view of the deity.</li>
                            <p>If you More Enquires For Tirupati-VVIP-Srivani-Breakdarsha-Tickets-Booking-online-Process
                                Please Contact Via WhatsApp and Chat Our team will Assist you.</p>
                        </ul>
                    </div>

                    <!-- </div> -->


                </div>

            </div>
        </div>




    </div>
    <div class="x_offer_car_main_wrapper float_left padding_tb_100" style="padding-bottom: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="x_offer_car_heading_wrapper float_left">

                        <h3>How to Book One Day Tirupati Tour Package From Chennai ?</h3>
                        <br />
                        <p>Booking a one-day Tirupati tour package from Chennai is a very popular option for devotees.
                            It's a quick and efficient way to make a pilgrimage without needing to arrange individual components like transportation, darshan arrangements, and meals.</p>
                        <p>Booking a private car package is an excellent option for families or groups who prefer a more
                            personalized and flexible experience.</p>
                        <p><b>1. Door-to-Door Service:</b> Most private car packages offer doorstep pickup and drop-off
                            within Chennai city limits, which is highly convenient.</p>
                        <p><b>2. Flexibility:</b> While following a set itinerary, you have more flexibility in terms of
                            timings and can make quick stops if needed.</p>
                        <p><b>3. Package Inclusions:</b> Car packages typically include:</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i>&nbsp;Round-trip A/C car (e.g., Etios,
                            Innova, Tempo Traveller).</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i>&nbsp;A ₹300 Special Entry Darshan ticket for
                            each person.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i>&nbsp;Meals (breakfast and lunch).</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i>&nbsp;Toll, parking, and driver charges.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i>&nbsp;Assistance with darshan, tonsure (if
                            required), and other rituals.</p>


                        <h3>8, How To Book Tirupati Tour Packages ?</h3>
                        <br />
                        <p>Booking a Tirupati tour package is a convenient way to visit the temple without having to
                            worry about arranging transport, accommodation, and darshan tickets separately. Several
                            government and private operators offer these packages, with various options to suit
                            different budgets and travel needs.</p>

                        <p>1, IRCTC (Indian Railway Catering and Tourism Corporation)</p>
                        <p>2, State Tourism Corporations (APSRTC & KSRTC)</p>
                        <p>3, Private Tour Operators</p>
                        <p>A large number of private travel agencies and tour operators, both online and local, offer
                            Tirupati tour packages. These can be a good choice for those seeking more customized or
                            flexible options.</p>


                        <p><b>1. Types of Packages:</b> Private operators offer a range of packages, including:</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i>&nbsp;Car Packages: These are great for
                            families or small groups, offering a more private and personalized experience with
                            door-to-door pickup and drop-off.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i>&nbsp;Bus Packages: Many private operators
                            run daily bus tours from major cities. These are often more budget-friendly and include all
                            essentials like darshan tickets and meals.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i>&nbsp;Customized Packages: If you want to
                            include other temples or specific sightseeing spots, many private operators can tailor a
                            package to your needs.</p>
                        <p><b>2. How to Book:</b></p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i>&nbsp;Online Travel Agencies: Websites like
                            divinebalajitravels.com have a dedicated section for pilgrimage packages, where you can
                            compare different operators and book online.</p>


                        <h3>General Tips for Booking Tour Packages:</h3>
                        <br />
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i>&nbsp;<b>Verify Inclusions:</b> Always read
                            the fine print to understand what is included in the package. Check if the darshan ticket,
                            meals, accommodation, and any other entry fees are covered.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i>&nbsp;<b>Darshan Type:</b> Confirm which type
                            of darshan is included (e.g., Special Entry Darshan, VIP Break Darshan).</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i>&nbsp;<b>ID Proof:</b> Ensure you have the
                            original and a photocopy of the ID proof you provided during the booking, as it is required
                            for darshan entry.</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i>&nbsp;<b>Dress Code:</b> All tour packages
                            will require you to adhere to the strict traditional dress code for darshan.</p>



                    </div>
                </div>


            </div>
        </div>
    </div>

<?php include './includes/footer.php'; ?>
