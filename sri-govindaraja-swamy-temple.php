<?php
$pageTitle = "Sri Govindaraja Swamy Temple Tirupati | Darshan Package";
$pageDescription = "Visit Sri Govindaraja Swamy Temple in Tirupati with a private darshan tour package including car travel, pickup and trip planning.";
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

                        <h3>Sri Govindaraja Swamy Temple</h3>
                        <br />
                        <p>The Sri Govindaraja Swamy Temple is a prominent and historically significant temple located
                            in the heart of Tirupati, Andhra Pradesh, India. It's an essential part of a pilgrimage to
                            Tirupati and is managed by the Tirumala Tirupati Devasthanams (TTD).</p>
                    </div>
                </div>


                <div class="col-md-12 mt-4">
                    <div class="x_offer_car_heading_wrapper float_left">
                        <h3>History and Significance</h3>
                    </div>
                </div>

                <div class="col-md-6 mt-4">
                    <div class="x_offer_car_heading_wrapper float_left">
                        <p>The temple was consecrated in 1130 AD by the revered Sri Vaishnava saint, Ramanujacharya.
                            Before that, the main deity was Sri Parthasarathi Swamy. The temple complex is one of the
                            earliest structures in Tirupati and the city itself has been built around it.</p>
                        <p>According to a popular legend, Lord Govindaraja Swamy is considered the elder brother of
                            Lord Venkateswara (Balaji) of Tirumala. He is believed to have managed the finances for the
                            celestial marriage of Lord Venkateswara with Goddess Padmavathi. Due to this role, he is
                            revered as the deity of wealth and prosperity, and devotees believe that worshipping him can
                            help them acquire and manage wealth effectively.</p>

                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="">
                        <img src="assets/images/sri-govindaraja-swamy-temple.png"
                            alt="best Tirumala Tirupati tour operators from Chennai " style="width: 100%;">
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="x_offer_car_heading_wrapper float_left">
                        <p>
                        <p>The temple's architecture is a magnificent example of the Dravidian style, featuring a
                            towering, seven-storied Rajagopuram (main entrance tower) that can be seen from a distance.
                            The temple complex also houses a number of sub-shrines dedicated to other deities, including
                            Sri Kalyana Venkateswara Swamy, Sri Parthasarathi Swamy, and Sri Pundarikavalli Thayar
                            (Goddess Lakshmi).</p>
                        </p>
                    </div>
                </div>



            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_offer_car_heading_wrapper float_left">
                        <p><b style="border-bottom: 2px solid #ff9900;padding-bottom: 4px;">Darshan and Seva Timings</b>
                        </p>
                        <p>The temple generally opens in the morning and closes at night. The timings for darshan and
                            various sevas can be found on the TTD's official website. While timings can be subject to
                            change on festival days, a general schedule is as follows:</p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;<b>Temple Opening: 5:00 AM</b>
                        </p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;<b>Morning Darshan/Sevas: 5:00 AM to
                                12:30 PM (includes Suprabhatam, Viswaroopa Darshanam, Thomala Seva, and Sarva
                                Darshan)</b></p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;<b>Afternoon Darshan: 1:30 PM to 4:45
                                PM (Sarva Darshan)</b></p>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;<b>Evening Darshan: 6:00 PM to 8:30 PM
                                (Sarva Darshan)</b>
                        <p class="pl-20"><i class="fa fa-hand-o-right"></i> &nbsp;<b>Temple Closing: 9:00 PM to 9:30 PM
                                (after Ekantha Seva)</b>
                        </p>
                        <p>Note: There may be brief breaks for offering Naivedyam (food offerings to the deity) during
                            the day.</p>


                        <p><b style="border-bottom: 2px solid #ff9900;padding-bottom: 4px;">Getting There</b>
                        </p>
                        <p>The Sri Govindaraja Swamy Temple is located very close to the Tirupati railway and bus
                            stations, making it easily accessible for pilgrims.</p>

                        <p class="pl-20">
                            <b> → &nbsp; By Bus:</b> The Andhra Pradesh State Road Transport Corporation (APSRTC) runs
                            frequent buses between Tirupati and Tiruchanur.
                        </p>
                        <p class="pl-20"><b> → &nbsp; By Rail:</b> It is at a walkable distance from the Tirupati
                            Railway Station (TPTY).</p>
                        <p class="pl-20"><b> → &nbsp; By Bus:</b> The temple is about 1 km from the main Tirupati bus
                            station.</p>
                        <p class="pl-20"><b>→ &nbsp; By Road:</b> Taxis and auto-rickshaws are readily available in
                            Tirupati to reach the temple.</p>


                        <p><b style="border-bottom: 2px solid #ff9900;padding-bottom: 4px;">Important Festivals</b></p>
                        <p>The temple celebrates a number of festivals with great devotion. The most significant of
                            these are:</p>
                        <p class="pl-20"><b> → &nbsp; Brahmotsavam:</b> The annual Brahmotsavam is the most important
                            festival, celebrated with grand processions and rituals.</p>
                        <p class="pl-20"><b> → &nbsp; Vaikuntha Ekadasi:</b> This auspicious day is observed with
                            special prayers and sevas.</p>
                        <p class="pl-20"><b> → &nbsp; Teppotsavam (Float Festival):</b> The processional deity is taken
                            out on a float in the temple tank.</p>

                        <p>For the most accurate and current information on darshan timings, online booking for sevas,
                            and any special events, it's always best to check the official TTD website.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include './includes/footer.php'; ?>