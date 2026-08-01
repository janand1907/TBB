<?php
$pageTitle = 'Shirdi Tour Package from Chennai by Direct Flight | VIP Darshan';
$pageDescription = 'Book Shirdi tour package from Chennai by direct flight. Includes VIP Darshan, hotel stay, meals & airport transfers. Call now for best price.';
$activeMenu = 'services';
include 'includes/header.php';
?>
<?php include 'includes/script.php'; ?>
<?php $answer = $_SESSION["answer"] ?? ''; ?>
<link rel="stylesheet" type="text/css" href="assets/css/legacy/shirdi.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/css/intlTelInput.css">
<style>

    .hs_navigation_header_wrapper .drop-menu {
        z-index: 2001;
        width: 270px !important;
    }

    .hero-banner {
        position: relative;
        z-index: 1;
    }

    /* .hs_navigation_header_wrapper {
        margin-bottom: 30px !important;
    } */

    .x_top_header_wrapper {
        padding-bottom: 5px !important;
    }

    /* Hero */

    /* Hero banner (copied from Srivani page) */
    .hero-banner {
        position: relative;
        background: linear-gradient(135deg, rgba(10, 25, 50, 0.78), rgba(14, 36, 68, 0.72)), url('assets/images/sai.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-blend-mode: multiply;
        color: #f8fbff;
        min-height: 90vh;
        display: flex;
        align-items: center;
        padding: 100px 18px 50px;
        text-align: left;
    }

    .phone-wrapper .iti--allow-dropdown input[type=tel] {
        padding-left: 122px !important;
        width: 100%;
        height: 42px;
        border-radius: 10px;
        border: 1px solid #cbd5e1;
        padding: 9px 11px 9px 150px;
        background: #fefefe;
        box-shadow: inset 0 1px 2px rgba(15, 23, 42, 0.03);
        font-size: 0.95rem;
        color: #0f172a;
    }

    .hero-form input,
    .hero-form textarea {
        width: 100% !important;
        padding: 10px 12px;
        border: 1px solid #cbd5e1;
        border-radius: 10px;
        font-size: 0.95rem;
        background: #fefefe;
        color: #0f172a;
        box-shadow: inset 0 1px 2px rgba(15, 23, 42, 0.03);
    }

    .hero-form textarea {
        min-height: 56px;
        resize: vertical;
    }

    .hero-form input.error,
    .hero-form textarea.error,
    .mhc-form input.error {
        border-color: #d1433b;
        box-shadow: 0 0 0 2px rgba(209, 67, 59, 0.15);
    }

    @keyframes spin {
        to {
            transform: translateY(-50%) rotate(360deg);
        }
    }

    

    .featured-row {
        background: #fffcf0 !important;
        font-weight: 700;
    }

    

</style>


<section class="hero-banner" style="border-radius: 0; margin-bottom:0;">
    <div class="hero-inner">
        <div class="hero-copy">
            <div class="rating-row">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>(4.9/5 Rating)</span>
            </div>
            <h1>Shirdi Tour Package <br /> from Chennai by Direct Flight</h1>
            <div class="duration">(1 Night / 2 Days)</div>
            <div class="subhead">VIP Darshan Assistance Available</div>

            <div class="feature-grid">
                <div class="feature-item">
                    <i class="fa-solid fa-car-side"></i>
                    <p>Individual AC Transport</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-headset"></i>
                    <p>3 Star Hotel at Shirdi</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-utensils"></i>
                    <p>Complimentary Breakfast</p>
                </div>
                <div class="feature-item">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                    <p>Offline VIP Darshan Guidelines</p>
                </div>
            </div>

            <div class="cta-row">
                <div class="price-box">
                    <div class="label"><i class="fas fa-star"></i> Starting From</div>
                    <div class="amount">Rs. 21,900 <span style="font-size: 1.05rem; font-weight: 600;">/ Person</span>
                    </div>
                    <p class="note">Final price depends on date & availability</p>
                </div>

                <div class="cta-buttons desktop">
                    <a class="cta-btn call" href="javascript:void();" style="cursor: default;">
                        <i class="flaticon-phone-call"></i>
                        Call Now
                    </a>
                    <a class="cta-btn wa" target="_blank"
                        href="//web.whatsapp.com/send?phone=+919994751079&text=A_A¨A«">
                        <img src="assets/images/whats.png" style="width: 16px;" alt="WhatsApp">
                        WhatsApp Us
                    </a>
                </div>
                <div class="cta-buttons mobile">
                    <a class="cta-btn call" href="tel:+919994751079">
                        <i class="flaticon-phone-call"></i>
                        Call Now
                    </a>
                    <a class="cta-btn wa" target="_blank" href="https://wa.me/919994751079"> <img src="assets/images/whats.png"
                            style="width: 16px;" alt="WhatsApp">WhatsApp Us</a>
                </div>
            </div>
        </div>

        <div class="hero-form-card">
            <div class="form-heading">
                <div>
                    <h3>Quick Enquiry</h3>
                </div>
            </div>
            <form class="hero-form" method="post" action="con_enq.php" novalidate>
                <div class="form-group">
                    <div class="icon-input">
                        <i class="fa-regular fa-user form-icon" aria-hidden="true"></i>
                        <input autocomplete="name" id="hf-name" type="text" name="name" placeholder="Full Name *">
                    </div>
                    <div class="field-error" data-for="hf-name"></div>
                </div>
                <div class="form-group">
                    <div class="icon-input phone-wrapper">
                        <i class="fa-brands fa-whatsapp form-icon" aria-hidden="true"></i>
                        <input autocomplete="tel" id="hf-whatsapp-input" class="whatsapp-input" type="tel" placeholder="WhatsApp Number *">
                        <input type="hidden" id="hf-whatsapp-full" name="mobile">
                    </div>
                    <div class="field-error" data-for="hf-whatsapp-input"></div>
                </div>

                <div class="form-group">
                    <div class="icon-input">
                        <i class="fa-regular fa-envelope form-icon" aria-hidden="true"></i>
                        <input autocomplete="email" id="hf-email" type="email" name="email" placeholder="Email ID (Optional)">
                    </div>
                    <div class="field-error" data-for="hf-email"></div>
                </div>

                <div class="form-row">
                    <div class="form-group" style=" margin-left: 4px;">
                        <div class="icon-input">
                            <i class="fa-regular fa-calendar form-icon" aria-hidden="true"></i>
                            <input id="hf-date" type="text" name="date" placeholder="Travel Date *"
                                onfocus="this.type='date'" onblur="if(!this.value){this.type='text'}">
                        </div>
                        <div class="field-error" data-for="hf-date"></div>
                    </div>
                    <div class="form-group" style=" margin-left: 4px;">
                        <div class="icon-input">
                            <i class="fa-solid fa-user-group form-icon" aria-hidden="true"></i>
                            <input id="hf-travellers" type="number" name="peoples" placeholder="Travellers *" min="1">
                        </div>
                        <div class="field-error" data-for="hf-travellers"></div>
                    </div>
                </div>


                <div class="form-group" style=" margin-bottom: 0;">
                    <div class="icon-input textarea">
                        <i class="fa-regular fa-comment-dots form-icon" aria-hidden="true"></i>
                        <textarea id="hf-message" name="message" placeholder="Message / Special Request"></textarea>
                    </div>
                    <div class="field-error" data-for="hf-message"></div>
                </div>

                <div class="form-group" style=" text-align: left;">
                    <?= $first_num . "" . $operator . "" . $second_num . " = ?"; ?>
                    <input id="hf-captcha" type="number" name="answer" />
                    <div class="field-error" data-for="hf-captcha"></div>
                </div>

                <button type="submit" class="submit-btn">ENQUIRE NOW</button>
                <div class="helper-text">Our expert will contact you shortly.</div>
            </form>
        </div>
    </div>
</section>

<!-- Mobile highlights card (visible on mobile) -->
<div class="mobile-hero-card" style=" padding-top: 100px;   margin-bottom: 20px;">
    <div class="mhc-top">
        <div class="mhc-pill"><i class="fa-solid fa-star"></i> 4.9/5 Based on 5,300+ Reviews</div>
        <h3 style="  font-size: 24px;">Shirdi Tour Package From Chennai by Direct Flight</h3>
        <p class="mhc-subhead">VIP Darshan Assistance - AC Transport - 3-Star Stay</p>
        <div class="mhc-price" style="font-size: 24px;">Starting from <span>Rs. 21,900/-</span></div>
    </div>

    <div class="mhc-form-card">
        <div class="mhc-form-title">Quick Enquiry for Booking</div>
        <form class="mhc-form" method="post" action="con_enq.php" novalidate>
            <input autocomplete="name" id="mhc-name" type="text" name="name" placeholder="Your Name *">
            <div class="field-error" data-for="mhc-name"></div>
            <input autocomplete="tel" id="mhc-whatsapp" type="tel" placeholder="Your WhatsApp Number *" maxlength="10">
            <input type="hidden" id="mhc-mobile" name="mobile">
            <input type="hidden" name="form_source" value="mhc">
            <div class="field-error" data-for="mhc-whatsapp"></div>
            <button type="submit">CHECK AVAILABILITY</button>
        </form>
        <!--<div class="mhc-note"><i class="fa-solid fa-bolt"></i> Only 5 slots left for this week!</div>-->
    </div>

    <div class="mhc-icons">
        <div><i class="fa-solid fa-shield-heart"></i><span>Safe Journey</span></div>
        <div><i class="fa-solid fa-hotel"></i><span>3-Star Stay</span></div>
        <div><i class="fa-solid fa-bell-concierge"></i><span>VIP Darshan</span></div>
        <div><i class="fa-solid fa-van-shuttle"></i><span>Home Pickup</span></div>
    </div>
</div>



</div>




<!-- <div class="search-frame">
    <div class="search-grid">
        <div class="field"><label>From</label>
            <select style="    width: 100% !important;">
                <option>Chennai</option>
            </select>
        </div>
        <div class="field"><label>To</label>
            <select>
                <option>Tirupati</option>
            </select>
        </div>
        <div class="field">
            <label>No. of Pax</label>
            <select id="pax" onchange="calculatePackage()" style="width: 100%;">
                <option value="1" selected>1 Person</option>
                <option value="2">2 Persons</option>
                <option value="3">3 Persons</option>
                <option value="4">4 Persons</option>
            </select>
        </div>
        <div class="field">
            <label>Vehicle Type</label>
            <select id="vehicle" onchange="calculatePackage()">
                <option value="sedan">Sedan (4 Seater)</option>
                <option value="suv">SUV Innova (7 Seater)</option>
            </select>
        </div>
        <div class="field">
            <label>Hotel Type</label>
            <select id="hotel" onchange="calculatePackage()">
                <option value="3star">3 Star (Premium)</option>
                <option value="4star">4 Star (Luxury)</option>
            </select>
        </div>
        <div class="price-card">
            <small>Package Estimate</small>
            <strong id="total-display">Rs. 114,000</strong>
        </div>
    </div>

</div> -->

<div class="trust-strip-new">
    <p><i class="fas fa-star" style="color:#f59e0b;"></i> Trusted by 5,000+ Devotees <span
            style="color:#9ca3af;">|</span> No Hidden Charges <span style="color:#9ca3af;">|</span> Dedicated Support
        Team
    </p>
</div>
<section class="why-choose" style=" box-shadow: none; padding-bottom: 40px;">
    <div class="choose-container">
        <div class="choose-title">Why Choose Us?</div>
        <div class="choose-accent"></div>
        <div class="choose-grid">
            <div class="choose-card">
                <i class="fa-solid fa-map-location-dot choose-icon"></i>
                <p class="choose-text">Chennai Airport - Shirdi Airport - Chennai Airport</p>
            </div>
            <div class="choose-card">
                <i class="fa-solid fa-car-side choose-icon"></i>
                <p class="choose-text">Private AC Transport (Family Friendly)</p>
            </div>
            <div class="choose-card">
                <i class="fa-solid fa-hotel choose-icon"></i>
                <p class="choose-text">3-Star Hotel at Shirdi</p>
            </div>
            <div class="choose-card">
                <i class="fa-solid fa-mug-saucer choose-icon"></i>
                <p class="choose-text">Complimentary Breakfast</p>
            </div>
            <div class="choose-card">
                <i class="fa-solid fa-mobile-screen-button choose-icon"></i>
                <p class="choose-text">VIP Darshan Assistance</p>
            </div>
        </div>
    </div>
</section>





<style>
    .shirdi-block {
        max-width: 1200px;
        margin: 20px auto 40px;
        padding: 0 16px;
    }

    .sb-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 12px;
    }

    .sb-card {
        background: #ffffff;
        border: 1px solid #e6eaf2;
        border-radius: 14px;
        padding: 16px;
        box-shadow: 0 10px 22px rgba(0, 0, 0, 0.05);
    }

    .sb-card.note-highlight {
        background: #fff8e8;
        border: 1px solid #f2d6a2;
    }

    .sb-head {
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 800;
        color: #1f2a44;
        margin-bottom: 10px;
    }

    .sb-head i {
        color: #0d6efd;
    }

    .sb-day {
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.3px;
        font-size: 13px;
        margin-bottom: 8px;
        color: #c44a00;
    }

    .sb-list {
        list-style: none;
        padding-left: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 8px;
        color: #1f2a44;
        font-size: 14px;
    }

    .sb-list li {
        display: flex;
        align-items: flex-start;
        gap: 8px;
        line-height: 1.5;
    }

    .sb-bullet {
        color: #ff9900;
        font-size: 12px;
        margin-top: 4px;
    }

    .sb-chips {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        margin-top: 10px;
    }

    .sb-chip {
        padding: 6px 10px;
        background: #f1f5f9;
        border-radius: 8px;
        font-size: 12px;
        color: #0f172a;
        border: 1px solid #e6eaf2;
    }

    .sb-note {
        margin-top: 8px;
        font-size: 12px;
        color: #6b7280;
        font-style: italic;
    }

    .sb-check {
        color: #16a34a;
        margin-top: 3px;
    }

    .sb-cross {
        color: #d63a55;
        margin-top: 3px;
    }

    .sb-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 13px;
    }

    .sb-table th,
    .sb-table td {
        padding: 8px;
        border: 1px solid #e6eaf2;
        text-align: left;
    }

    .sb-table th {
        background: #eef5ff;
        color: #1f2a44;
        font-weight: 700;
    }

    .sb-muted {
        color: #6b7280;
        font-size: 12px;
        margin-top: 6px;
    }

    .sb-terms-icon {
        color: #f5a524;
        margin-top: 4px;
    }

    .sb-note-icon {
        color: #d97706;
        margin-top: 3px;
    }

    .sidebar-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 12px;
        align-items: stretch;
        margin-top: 12px;
    }

    .sidebar-grid>* {
        margin: 0;
    }

    @media (min-width: 992px) {
        .sidebar {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 12px;
            align-items: stretch;
        }

        .sidebar>* {
            margin: 0 !important;
        }

        .sidebar-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }
</style>

<div class="shirdi-block">
    <div class="sb-card" style=" margin-bottom: 10px;">
        <div class="sb-head"><i class="fa-solid fa-route"></i> Itinerary Details - 2 Days Shirdi VIP Darshan Tour
            Package</div>
        <div class="sb-grid">
            <div>
                <div class="sb-day">Day 1</div>
                <ul class="sb-list">
                    <li><i class="fa-solid fa-plane-departure sb-bullet"></i><span>13.30 hrs - Departure from Chennai to
                            Shirdi</span></li>
                    <li><i class="fa-solid fa-plane-arrival sb-bullet"></i><span>15.20 hrs - Arrival at Shirdi
                            Airport</span></li>
                    <li><i class="fa-solid fa-car-side sb-bullet"></i><span>Proceed to Shirdi Hotel</span></li>
                    <li><i class="fa-solid fa-bed sb-bullet"></i><span>Hotel check-in</span></li>
                    <li><i class="fa-solid fa-praying-hands sb-bullet"></i><span>Thereafter, proceed for Darshan</span>
                    </li>
                </ul>
            </div>
            <div>
                <div class="sb-day" style="color:#0f6d77;">Day 2</div>
                <ul class="sb-list">
                    <li><i class="fa-solid fa-utensils sb-bullet"></i><span>08.00 hrs - Breakfast</span></li>
                    <li><i class="fa-solid fa-bag-shopping sb-bullet"></i><span>Mukh Darshan &amp; Shopping</span></li>
                    <li><i class="fa-solid fa-key sb-bullet"></i><span>12.00 hrs - Hotel check-out</span></li>
                    <li><i class="fa-solid fa-plane-departure sb-bullet"></i><span>Proceed to Shirdi Airport</span></li>
                    <li><i class="fa-solid fa-plane-up sb-bullet"></i><span>15.50 hrs - Departure from Shirdi to
                            Chennai</span></li>
                    <li><i class="fa-solid fa-plane-arrival sb-bullet"></i><span>17.45 hrs - Arrival at Chennai
                            Airport</span></li>
                </ul>
            </div>
        </div>
        <div class="sb-head"> Places covered in Shirdi:</div>
        <div class="sb-chips">
            <div class="sb-chip"><i class="fa-solid fa-om" style="margin-right: 6px;"></i> Sai Baba Samadhi Mandir</div>
            <div class="sb-chip"><i class="fa-solid fa-tree" style="margin-right: 6px;"></i> Gurusthan (Holy Neem Tree)
            </div>
            <div class="sb-chip"><i class="fa-solid fa-landmark" style="margin-right: 6px;"></i> Dixit Wada Museum</div>
            <div class="sb-chip"><i class="fa-solid fa-gopuram" style="margin-right: 6px;"></i> Dattatreya Mandir</div>
            <div class="sb-chip"><i class="fa-solid fa-fire" style="margin-right: 6px;"></i> Nanda Deep</div>
            <div class="sb-chip"><i class="fa-solid fa-torii-gate" style="margin-right: 6px;"></i> Maruti Mandir</div>
            <div class="sb-chip"><i class="fa-solid fa-hand-holding-heart" style="margin-right: 6px;"></i> Baba's
                Chavadi</div>
            <div class="sb-chip"><i class="fa-solid fa-mosque" style="margin-right: 6px;"></i> Dwarakamai Masjid</div>
            <div class="sb-chip"><i class="fa-solid fa-house" style="margin-right: 6px;"></i> Abdul Baba Cottage</div>
            <div class="sb-chip"><i class="fa-solid fa-house-chimney" style="margin-right: 6px;"></i> House of Laxmibai
                Shinde</div>
        </div>
        <div class="sb-note">After darshan, return to the hotel. Dinner and night halt at Shirdi.</div>
    </div>

    <div class="sb-grid">
        <div class="sb-card">
            <div class="sb-head" style="color:#16a34a;"><i class="fa-solid fa-circle-check"></i> Package Inclusions
            </div>
            <ul class="sb-list">
                <li><i class="fa-solid fa-circle-check sb-check"></i><span>Two-way Economy Class Air Tickets (Chennai /
                        Shirdi / Chennai)</span></li>
                <li><i class="fa-solid fa-circle-check sb-check"></i><span>Transportation in A/C Luxury Vehicle (Shirdi
                        Airport / Hotel / Airport)</span></li>
                <li><i class="fa-solid fa-circle-check sb-check"></i><span>Star Hotel Accommodation in Shirdi</span>
                </li>
                <li><i class="fa-solid fa-circle-check sb-check"></i><span>Breakfast and Dinner</span></li>
            </ul>
        </div>
        <div class="sb-card">
            <div class="sb-head" style="color:#d63a55;"><i class="fa-solid fa-circle-xmark"></i> Package Exclusions
            </div>
            <ul class="sb-list">
                <li><i class="fa-regular fa-circle-xmark sb-cross"></i><span>Lunch</span></li>
                <li><i class="fa-regular fa-circle-xmark sb-cross"></i><span>Entrance Fees &amp; Special Darshan
                        Charges</span></li>
                <li><i class="fa-regular fa-circle-xmark sb-cross"></i><span>Local Auto Expenses, Room Service,
                        Tips</span></li>
                <li><i class="fa-regular fa-circle-xmark sb-cross"></i><span>Phone Calls, Laundry, Insurance</span></li>
                <li><i class="fa-regular fa-circle-xmark sb-cross"></i><span>Personal Expenses &amp; Additional
                        Unforeseen Events</span></li>
            </ul>
        </div>
    </div>

    <div class="sb-grid" style="margin-top:12px;">
        <div class="sb-card">
            <div class="sb-head" style="color:#d97706;"><i class="fa-solid fa-credit-card"></i> Payment Terms</div>
            <ul class="sb-list">
                <li><i class="fa-solid fa-circle-check sb-check"></i><span>50% at the time of booking</span></li>
                <li><i class="fa-solid fa-circle-check sb-check"></i><span>Balance amount to be paid 10 days prior to
                        departure</span></li>
            </ul>
        </div>
        <div class="sb-card">
            <div class="sb-head" style="color:#0f6d77;"><i class="fa-solid fa-ban"></i> Cancellation Policy</div>
            <table class="sb-table">
                <thead>
                    <tr>
                        <th>Timeframe before departure</th>
                        <th>Charges</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>More than 45 days</td>
                        <td>No cancellation charges</td>
                    </tr>
                    <tr>
                        <td>Between 45 and 30 days</td>
                        <td>50% of total tour cost</td>
                    </tr>
                    <tr>
                        <td>Between 30 and 15 days</td>
                        <td>75% of total tour cost</td>
                    </tr>
                    <tr>
                        <td>Less than 15 days</td>
                        <td>90% of total tour cost</td>
                    </tr>
                </tbody>
            </table>
            <div class="sb-muted">*Flight ticket cancellation charges will be as per airline policy.</div>
        </div>
    </div>

    <div class="sb-card" style="margin-top:12px;">
        <div class="sb-head" style="color:#b45309;"><i class="fa-solid fa-scale-balanced"></i> Terms &amp; Conditions
        </div>
        <ul class="sb-list">
            <li><i class="fa-solid fa-circle-exclamation sb-terms-icon"></i><span>Due to natural hazards, transportation
                    cancellations, accidents, breakdown of machinery or equipment, transport failure, weather
                    conditions, sickness, landslides, political closures, or any untoward incidents, Divine Balaji Travels is not responsible.</span></li>
            <li><i class="fa-solid fa-circle-exclamation sb-terms-icon"></i><span>Any loss, injury, or damage to person
                    or property arising from accommodation, transportation, strikes, riots, thefts, epidemics, medical
                    or customs regulations, or causes beyond control, Divine Balaji Travels is not
                    responsible.</span></li>
            <li><i class="fa-solid fa-circle-exclamation sb-terms-icon"></i><span>Due to bad weather or technical
                    issues, flight cancellations, date changes, or time changes (directly or indirectly), all additional
                    expenses must be borne by the client.</span></li>
        </ul>
        <div class="sb-card note-highlight" style="margin-top:12px;">
            <div class="sb-head" style="color:#b86b15;"><i class="fa-solid fa-circle-info"></i> Important Notes</div>
            <ul class="sb-list">
                <li><i class="fa-solid fa-mobile-screen sb-note-icon"></i><span>Mobile phones, cameras, and electronic
                        items
                        are not permitted inside the temple premises.</span></li>
                <li><i class="fa-solid fa-user-shield sb-note-icon"></i><span>Divine Balaji Travels is not
                        responsible for personal belongings.</span></li>
                <li><i class="fa-solid fa-chair sb-note-icon"></i><span>Passenger seats are auto-assigned by the
                        airlines. Seat selection is subject to airline policy and additional charges, if
                        applicable.</span>
                </li>
            </ul>
        </div>
    </div>


</div>
<div class="container-v2" style="  padding-bottom: 30px;">
    <div class="sidebar sidebar-grid">
        <div class="enquiry-box desktop">
            <h3>Quick Enquiry</h3>
            <p>Have questions? Contact us for instant booking assistance.</p>
            <a href="javascript:void();" class="enquiry-btn" style=" cursor: default;"><i
                    class="flaticon-phone-call"></i> &nbsp; Call: +91 9994751079</a>
            <a target="_blank" href="//web.whatsapp.com/send?phone=+919994751079&text=Лил"
                class="enquiry-btn whatsapp"><i class="flaticon-whatsapp" style=" vertical-align: middle;"></i>&nbsp;
                WhatsApp Enquiry</a>
        </div>

        <section class="card-lite dress-card">
            <div class="card-lite__header">
                <div class="card-lite__title">Dress Code</div>
                <div class="card-lite__pill">Temple Guidelines</div>
            </div>
            <div class="card-lite__body">
                <p><img src="assets/images/men.png" alt="Men icon"
                        style="width: 28px; height: 28px; object-fit: contain; margin-right: 8px; vertical-align: middle;"><b>Men
                        :</b> Dhoti or Pyjamas with Upper Cloth.</p>
                <p><img src="assets/images/wen.png" alt="Women icon"
                        style="width: 28px; height: 28px; object-fit: contain; margin-right: 8px; vertical-align: middle;"><b>Women
                        :</b> Saree, Half Saree, or Churidar with Pyjama and Upper Cloth.</p>
            </div>
        </section>

        <section class="alert-card">
            <h3>ID Proof (Mandatory)</h3>
            <p>Please bring original ID proof while entering the Darshan.</p>
            <ul style="margin-left: 24px;">
                <li><i class="fa-solid fa-circle-check" aria-hidden="true"
                        style="margin-right: 8px; font-size: 16px;"></i>Aadhaar Card</li>
                <li><i class="fa-solid fa-circle-check" aria-hidden="true"
                        style="margin-right: 8px; font-size: 16px;"></i>Passport</li>
            </ul>
            <p class="alert-card__subhead"><i class="fa-solid fa-circle-exclamation" aria-hidden="true"
                    style="margin-right: 8px; font-size: 16px;"></i>Important:</p>
            <ul style="margin-left: 24px;">
                <li><i class="fa-solid fa-circle-check" aria-hidden="true"
                        style="margin-right: 8px; font-size: 14px;"></i>Without original ID proof, Darshan will not be
                    allowed.</li>
                <li><i class="fa-solid fa-circle-check" aria-hidden="true"
                        style="margin-right: 8px; font-size: 14px;"></i>Shirdi Counter accepts Indian Debit/Credit
                    Cards only.</li>
                <li><i class="fa-solid fa-circle-check" aria-hidden="true"
                        style="margin-right: 8px; font-size: 14px;"></i>No cash or international cards accepted.</li>
            </ul>
        </section>

        <div class="enquiry-box mobile">
            <h3>Quick Enquiry</h3>
            <p>Have questions? Contact us for instant booking assistance.</p>
            <a href="tel:+919994751079" class="enquiry-btn"><i class="flaticon-phone-call"></i> &nbsp; Call: +91
                9994751079</a>
            <a href="https://wa.me/919994751079" class="enquiry-btn whatsapp"><i class="flaticon-whatsapp"
                    style=" vertical-align: middle;"></i>&nbsp; WhatsApp Enquiry</a>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/js/utils.min.js"></script>
<script>

    document.addEventListener('DOMContentLoaded', function () {
        const heroForm = document.querySelector('.hero-form');
        const phoneInput = document.querySelector('#hf-whatsapp-input');
        const combinedMobileInput = document.querySelector('#hf-whatsapp-full');
        const emailInput = heroForm ? heroForm.querySelector('input[name="email"]') : null;
        const dateInput = document.querySelector('#hf-date');
        const nameInput = document.querySelector('#hf-name');
        const travellersInput = document.querySelector('#hf-travellers');
        const captchaInput = document.querySelector('#hf-captcha');
        const submitBtn = heroForm ? heroForm.querySelector('.submit-btn') : null;
        const mhcForm = document.querySelector('.mhc-form');
        const mhcNameInput = document.querySelector('#mhc-name');
        const mhcPhoneInput = document.querySelector('#mhc-whatsapp');
        const mhcMobileInput = document.querySelector('#mhc-mobile');
        const mhcSubmitBtn = mhcForm ? mhcForm.querySelector('button[type="submit"]') : null;
        let itiInstance = null;
        let mhcItiInstance = null;

        const isValidEmail = (val) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val);

        const showError = (id, message) => {
            const err = document.querySelector(`.field-error[data-for="${id}"]`);
            const input = document.getElementById(id);
            if (err) {
                err.textContent = message || '';
                err.classList.toggle('show', !!message);
            }
            if (input) {
                input.classList.toggle('error', !!message);
            }
        };

        const clearErrors = (root) => {
            const scope = root || document;
            scope.querySelectorAll('.field-error').forEach(el => el.classList.remove('show'));
            scope.querySelectorAll('input.error, textarea.error').forEach(el => el.classList.remove('error'));
        };

        const setLoading = (flag) => {
            if (submitBtn) {
                submitBtn.classList.toggle('loading', flag);
                submitBtn.disabled = flag;
            }
        };

        const setMhcLoading = (flag) => {
            if (mhcSubmitBtn) {
                mhcSubmitBtn.disabled = flag;
            }
        };

        if (dateInput) {
            const today = new Date();
            const yyyy = today.getFullYear();
            const mm = String(today.getMonth() + 1).padStart(2, '0');
            const dd = String(today.getDate()).padStart(2, '0');
            dateInput.setAttribute('min', `${yyyy}-${mm}-${dd}`);
        }

        if (phoneInput && window.intlTelInput) {
            itiInstance = window.intlTelInput(phoneInput, {
                initialCountry: 'auto',
                separateDialCode: true,
                autoPlaceholder: 'polite',
                preferredCountries: ['in', 'ae', 'us', 'gb', 'sg', 'sa', 'au'],
                geoIpLookup: function (callback) {
                // Option A: ipapi.co (simple)
                fetch("https://ipapi.co/json/")
                  .then((res) => res.json())
                  .then((data) => callback((data && data.country_code) ? data.country_code.toLowerCase() : ''))
                  .catch(() => callback("in")); // fallback
                },
                utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/js/utils.min.js'
            });
            phoneInput.addEventListener('input', function () {
                phoneInput.value = phoneInput.value.replace(/\D/g, '').slice(0, 10);
            });
        }

        if (mhcPhoneInput && window.intlTelInput) {
            mhcItiInstance = window.intlTelInput(mhcPhoneInput, {
                initialCountry: 'auto',
                separateDialCode: true,
                autoPlaceholder: 'polite',
                preferredCountries: ['in', 'ae', 'us', 'gb', 'sg', 'sa', 'au'],
                geoIpLookup: function (callback) {
                // Option A: ipapi.co (simple)
                fetch("https://ipapi.co/json/")
                  .then((res) => res.json())
                  .then((data) => callback((data && data.country_code) ? data.country_code.toLowerCase() : ''))
                  .catch(() => callback("in")); // fallback
                },
                utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/js/utils.min.js'
            });
            mhcPhoneInput.addEventListener('input', function () {
                mhcPhoneInput.value = mhcPhoneInput.value.replace(/\D/g, '').slice(0, 10);
            });
        }

        if (heroForm) {
            heroForm.addEventListener('submit', function (e) {
                e.preventDefault();
                clearErrors(heroForm);

                const nameVal = nameInput ? nameInput.value.trim() : '';
                const emailVal = emailInput ? emailInput.value.trim() : '';
                const dateVal = dateInput ? dateInput.value.trim() : '';
                const travVal = travellersInput ? travellersInput.value.trim() : '';
                const captchaVal = captchaInput ? captchaInput.value.trim() : '';
                const number = phoneInput ? phoneInput.value.replace(/\D/g, '').slice(0, 10) : '';
                if (phoneInput) phoneInput.value = number;

                let hasError = false;
                if (!nameVal) {
                    showError('hf-name', 'Full Name is required.');
                    hasError = true;
                }
                if (!number) {
                    showError('hf-whatsapp-input', 'WhatsApp number is required.');
                    hasError = true;
                } else if (number.length !== 10) {
                    showError('hf-whatsapp-input', 'Enter a valid 10-digit WhatsApp number.');
                    hasError = true;
                }
                if (!dateVal) {
                    showError('hf-date', 'Travel date is required.');
                    hasError = true;
                }
                if (!travVal) {
                    showError('hf-travellers', 'Travellers is required.');
                    hasError = true;
                }
                if (emailVal && !isValidEmail(emailVal)) {
                    showError('hf-email', 'Enter a valid email address.');
                    hasError = true;
                }
                if (!captchaVal) {
                    showError('hf-captcha', 'Answer is required.');
                    hasError = true;
                }
                if (hasError) return;
                setLoading(true);

                let code = '';

                if (itiInstance) {
                    const dialCode = itiInstance.getSelectedCountryData()?.dialCode;
                    code = dialCode ? `+${dialCode}` : '';
                }

                if (combinedMobileInput) {
                    combinedMobileInput.value = number ? `${code} ${number}`.trim() : '';
                }

                const formData = new FormData(heroForm);
                fetch(heroForm.action, {
                    method: 'POST',
                    body: formData
                }).then(async resp => {
                    let data = null;
                    try {
                        data = await resp.json();
                    } catch (err) {
                        data = null;
                    }
                    if (resp.ok) {
                        window.location.href = 'https://tirupatibalajibooking.com/thanks.php';
                        return;
                    }

                    if (resp.status === 422 && data && data.errors) {
                        const fieldMap = {
                            name: 'hf-name',
                            mobile: 'hf-whatsapp-input',
                            email: 'hf-email',
                            date: 'hf-date',
                            peoples: 'hf-travellers',
                            answer: 'hf-captcha'
                        };
                        Object.keys(data.errors).forEach((field) => {
                            const id = fieldMap[field];
                            if (id) {
                                showError(id, data.errors[field]);
                            }
                        });
                    } else {
                        showError('hf-name', 'Unable to submit right now. Please try again.');
                    }
                }).catch(() => {
                    showError('hf-name', 'Unable to submit right now. Please try again.');
                }).finally(() => setLoading(false));
            });
        }

        if (mhcForm) {
            mhcForm.addEventListener('submit', function (e) {
                e.preventDefault();
                clearErrors(mhcForm);

                const nameVal = mhcNameInput ? mhcNameInput.value.trim() : '';
                const number = mhcPhoneInput ? mhcPhoneInput.value.replace(/\D/g, '').slice(0, 10) : '';
                if (mhcPhoneInput) mhcPhoneInput.value = number;

                let hasError = false;
                if (!nameVal) {
                    showError('mhc-name', 'Full Name is required.');
                    hasError = true;
                }
                if (!number) {
                    showError('mhc-whatsapp', 'WhatsApp number is required.');
                    hasError = true;
                } else if (number.length !== 10) {
                    showError('mhc-whatsapp', 'Enter a valid 10-digit WhatsApp number.');
                    hasError = true;
                }
                if (hasError) return;
                setMhcLoading(true);

                let code = '';

                if (mhcItiInstance) {
                    const dialCode = mhcItiInstance.getSelectedCountryData()?.dialCode;
                    code = dialCode ? `+${dialCode}` : '';
                }

                if (mhcMobileInput) {
                    mhcMobileInput.value = number ? `${code} ${number}`.trim() : '';
                }

                const formData = new FormData(mhcForm);
                fetch(mhcForm.action, {
                    method: 'POST',
                    body: formData
                }).then(async resp => {
                    let data = null;
                    try {
                        data = await resp.json();
                    } catch (err) {
                        data = null;
                    }
                    if (resp.ok) {
                        window.location.href = 'https://tirupatibalajibooking.com/thanks.php';
                        return;
                    }

                    if (resp.status === 422 && data && data.errors) {
                        const fieldMap = {
                            name: 'mhc-name',
                            mobile: 'mhc-whatsapp'
                        };
                        Object.keys(data.errors).forEach((field) => {
                            const id = fieldMap[field];
                            if (id) {
                                showError(id, data.errors[field]);
                            }
                        });
                    } else {
                        showError('mhc-name', 'Unable to submit right now. Please try again.');
                    }
                }).catch(() => {
                    showError('mhc-name', 'Unable to submit right now. Please try again.');
                }).finally(() => setMhcLoading(false));
            });
        }
    });

    // function calculatePackage() {
    //     const pax = parseInt(document.getElementById('pax').value, 10);
    //     const hotel = document.getElementById('hotel').value;
    //     const rates = {
    //         1: 14000,
    //         2: 16000,
    //         3: 17500,
    //         4: 20000
    //     };
    //     let total = rates[pax] || rates[2];
    //     if (hotel === '4star') {
    //         const roomCount = Math.ceil(pax / 2);
    //         total += (roomCount * 2500);
    //     }
    //     document.getElementById('total-display').innerText = "Rs. " + total.toLocaleString('en-IN');
    // }
    // window.addEventListener('load', calculatePackage);
</script>

<?php include './includes/footer.php'; ?>
