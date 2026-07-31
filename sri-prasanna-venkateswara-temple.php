<?php
$pageTitle = "Sri Prasanna Venkateswara Temple, Appalayagunta | Darshan Package";
$pageDescription = "Plan a visit to Sri Prasanna Venkateswara Temple with a private darshan tour package including car travel and trip planning support.";
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
                                            Tirumala Darshan for
                                            <br />
                                            <span class="ttd-color">Special Darshan Tour </span>Package
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

                        <h3>Sri Prasanna Venkateswara Temple</h3>
                        <br />
                        <p>The Sri Prasanna Venkateswara Swamy Temple is a significant and historically rich temple
                            located in the village of Appalayagunta, near Tirupati. It is managed by the Tirumala
                            Tirupati Devasthanams (TTD) and is a must-visit for pilgrims.</p>
                    </div>
                </div>


                <div class="col-md-12 mt-4">
                    <div class="x_offer_car_heading_wrapper float_left">
                        <h3>History and Significance</h3>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="x_offer_car_heading_wrapper float_left">
                        <p>
                            The temple was built in 1232 AD by the King of Karvetinagaram, Sri Venkata Perumal Raju
                            Brahmadeva Maharaj. It is believed that Lord Venkateswara, after his marriage to Goddess
                            Padmavathi, graced this place with his presence to bless the saints who had gathered for the
                            divine wedding.</p>
                        <p>The main deity of the temple, Lord Prasanna Venkateswara Swamy, is unique because his right
                            hand is in the Abhaya Mudra (blessing posture), while his left hand rests on his hip (Kati
                            Mudra). This posture, known as "Abhaya Hasta," signifies that the Lord is ready to grant
                            blessings to his devotees, and the term "Prasanna" itself means "pleasant" or "calm."

                        </p>
                        <p>The temple complex also houses sub-shrines for Goddess Padmavathi and Goddess Sri Andal.
                            Opposite the main temple, there is a separate shrine dedicated to Lord Anjaneya Swamy
                            (Hanuman).</p>

                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="" style="padding-top: 20px;">
                        <img src="images/sri-prasanna-venkateswara-temple.png"
                            alt="best Tirumala Tirupati tour operators from Chennai " style="width: 100%;">
                    </div>
                </div>




            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_offer_car_heading_wrapper float_left">
                        <p><b style="border-bottom: 2px solid #ff9900;padding-bottom: 4px;">Temple Timings</b>
                        </p>
                        <p>The temple is generally open for darshan from morning until evening, with a brief break in
                            the afternoon. The timings can vary, but a general schedule is:</p>


                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;<b>Temple Opening: 6:00 AM</b>
                        </p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;<b>Morning Darshan: 6:15 AM to 10:30
                                AM</b>
                        </p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;<b>Afternoon Darshan: 11:00 AM to 5:30
                                PM</b>
                        </p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;<b>Evening Darshan: 6:00 PM to 7:30
                                PM</b>
                        </p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;<b>Temple Closing: 8:00 PM</b>
                        </p>

                        <p><b style="border-bottom: 2px solid #ff9900;padding-bottom: 4px;">Getting There</b>
                        </p>

                        <p>The Sri Prasanna Venkateswara Swamy Temple is located in Appalayagunta, approximately 16 to
                            18 km from Tirupati city.</p>


                        <p class="pl-20">
                            <b> → &nbsp; By Bus:</b> You can take a local bus from the Tirupati Central Bus Station.
                            Buses
                            heading towards Piler or other nearby towns often pass through Appalayagunta.
                        </p>
                        <p class="pl-20"><b> → &nbsp; By Taxi/Auto-rickshaw:</b> Taxis and auto-rickshaws are a
                            convenient
                            option. The journey from Tirupati takes about 30-40 minutes.</p>

                        <p class="pl-20"><b> → &nbsp; By Rail:</b> The nearest major railway station is Tirupati (TPTY).
                        </p>
                        <p class="pl-20"><b> → &nbsp; By Air:</b> The nearest airport is Tirupati Airport (TIR).</p>


                        <p><b style="border-bottom: 2px solid #ff9900;padding-bottom: 4px;">Important Festivals</b>
                        </p>

                        <p>The temple celebrates several festivals throughout the year, with the most significant being
                            the annual Brahmotsavam and Teppotsavam (Float Festival). Other important events include
                            Kalyanotsavam, which is performed on a monthly basis on the day of the Sravana Nakshatram
                            (star).</p>
                        <p>For the most accurate and up-to-date information on timings, sevas, and festivals, it is
                            highly recommended to check the official TTD website.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include './includes/footer.php'; ?>