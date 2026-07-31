<?php
$pageTitle = 'Srivani Break Darshan Booking | Tirupati VIP Darshan Package from Chennai';
$pageDescription = 'Book Srivani Break Darshan Booking with Tirupati VIP Darshan Package from Chennai. Same-day darshan, AC transport, and complete assistance included.';
$activeMenu = null;
include 'includes/header.php';
?>
<?php include 'includes/script.php'; ?>
<?php $answer = $_SESSION["answer"] ?? ''; ?>
<link rel="stylesheet" type="text/css" href="css/srivani.css" />
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

    @media (min-width: 1200px) {
        .container {
            max-width: 1200px !important;
        }
    }

    /* .hs_navigation_header_wrapper {
        margin-bottom: 30px !important;
    } */

    .x_top_header_wrapper {
        padding-bottom: 5px !important;
    }

    /* Hero */

    /* New hero banner (from index (3).html) */
    .hero-banner {
        position: relative;
        background: linear-gradient(135deg, rgba(10, 25, 50, 0.78), rgba(14, 36, 68, 0.72)), url('images/slider1.jpg');
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

    .hero-banner .hero-inner {
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 70% 30%;
        gap: 2px;
        align-items: center;
        min-height: 80vh;
    }

    .hero-copy {
        display: flex;
        flex-direction: column;
        gap: 16px;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .hero-banner .rating-row {
        display: flex;
        align-items: center;
        gap: 8px;
        justify-content: center;
        font-size: 0.9rem;
    }

    .hero-banner h1 {
        font-family: 'Montserrat', sans-serif;
        font-weight: 800;
        font-size: 40px;
        line-height: 1.15;
        margin: 0;
        text-align: center;
        color: #f8fbff;
    }

    .hero-banner .feature-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        text-align: center;
    }

    .hero-banner .feature-item i {
        font-size: 2.4rem;
        color: #ffd166;
    }

    .hero-banner .feature-item img {
        width: 64px;
        height: 64px;
        object-fit: contain;
        filter: drop-shadow(0 12px 24px rgba(0, 0, 0, 0.22));
    }

    .hero-banner .cta-row {
        display: flex;
        flex-direction: row;
        align-items: stretch;
        justify-content: center;
        gap: 18px;
        width: 100%;
        max-width: 800px;
        margin-top: 16px;
    }

    .choose-card {
        background: #ffffff;
        border: 1px solid #dfe6ef;
        border-radius: 12px;
        padding: 22px 18px;
        text-align: center;
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.04);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .choose-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 28px rgba(14, 36, 68, 0.12);
    }

    .choose-icon-wrap {
        width: 82px;
        height: 82px;
        border-radius: 22px;
        background: radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.9), rgba(226, 237, 255, 0.95) 55%, rgba(209, 227, 255, 0.9));
        border: 1px solid #d7e5ff;
        display: grid;
        place-items: center;
        box-shadow: 0 14px 28px rgba(14, 36, 68, 0.16), 0 4px 10px rgba(14, 36, 68, 0.08);
    }

    .choose-icon-img {
        width: 60px;
        height: 60px;
        object-fit: contain;
        filter: drop-shadow(0 10px 18px rgba(12, 46, 92, 0.28));
    }

    .booking-options {
        background: #f8fafc;
        padding: 38px 16px 26px;
        text-align: center;
    }

    .booking-options__inner {
        max-width: 1160px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .booking-options__title {
        text-transform: uppercase;
        letter-spacing: 1.2px;
        color: #6b7280;
        font-weight: 800;
        font-size: 0.95rem;
    }

    .booking-options__cards {
        display: flex;
        justify-content: center;
        gap: 18px;
        flex-wrap: wrap;
    }

    .booking-option-card {
        background: #1f2937;
        color: #ffffff;
        border-radius: 16px;
        padding: 22px 26px 20px;
        min-width: 260px;
        max-width: 360px;
        width: 100%;
        box-shadow: 0 18px 35px rgba(15, 23, 42, 0.15);
        display: grid;
        place-items: center;
        gap: 8px;
    }

    .booking-option__icon {
        font-size: 28px;
        line-height: 1;
    }

    .booking-option-card--advance .booking-option__icon {
        color: #60a5fa;
    }

    .booking-option-card--current .booking-option__icon {
        color: #f59e0b;
    }

    .booking-option__heading {
        margin: 0;
        font-size: 1.08rem;
        font-weight: 800;
    }

    .booking-option__text {
        margin: 0;
        font-size: 0.95rem;
        color: #e5e7eb;
    }

    .booking-options__note {
        margin: 2px 0 0;
        font-size: 0.9rem;
        color: #9ca3af;
        font-style: italic;
    }

    @media (max-width: 640px) {
        .booking-options {
            padding: 32px 14px 22px;
        }

        .booking-option-card {
            min-width: 100%;
        }
    }

    .phone-wrapper .iti--allow-dropdown input[type=tel] {
        padding-left: 122px !important;
        width: 100%;
        height: 42px;
        border-radius: 10px;
        border: 1px solid #cbd5e1;
        padding: 9px 11px 9px 114px;
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

    @keyframes spin {
        to {
            transform: translateY(-50%) rotate(360deg);
        }
    }

    .hero-form input.error,
    .hero-form textarea.error,
    .mhc-form input.error {
        border-color: #d1433b;
        box-shadow: 0 0 0 2px rgba(209, 67, 59, 0.15);
    }

    @media (max-width: 768px) {

        .hero-copy {
            /* align-items: center; */
            /* text-align: center; */
        }
    }

    .featured-row {
        background: #fffcf0 !important;
        font-weight: 700;
    }

    .alert-card {
        background: linear-gradient(135deg, #fff4f4 0%, #fff9f9 100%);
        border: 1px solid #ffb4b4;
        color: #8b1b1b;
        border-radius: 14px;
        padding: 18px;
        box-shadow: 0 10px 24px rgba(0, 0, 0, 0.12);
        margin-bottom: 20px;
    }

    .alert-card h3 {
        color: #c62828;
        margin-top: 0;
        margin-bottom: 8px;
        font-weight: 700;
    }

    .alert-card p {
        font-size: 13px;
        margin: 6px 0;
        color: #8b1b1b;
    }

    .alert-card ul {
        padding-left: 18px;
        margin: 6px 0 10px 0;
        font-size: 13px;
        color: #8b1b1b;
        list-style: none;
        padding-left: 0;
    }

    .note-card {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
        align-items: center;
        background: #ffffff;
        color: #1f2937;
        border-radius: 16px;
        padding: 22px;
        box-shadow: 0 16px 36px rgba(255, 153, 0, 0.18);
        margin-bottom: 24px;
        border: 1px solid #ffcf99;
        overflow: hidden;
    }

    .note-card__content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 10px;
    }

    .note-card__list {
        list-style: none;
        padding-left: 0;
        margin: 8px 0 0 0;
        display: grid;
        gap: 10px;
    }

    .note-card__item {
        display: grid;
        grid-template-columns: 36px 1fr;
        align-items: flex-start;
        gap: 12px;
        font-size: 14px;
        line-height: 1.6;
        color: #1f2937;
    }

    .note-card__item-icon {
        width: 36px;
        height: 36px;
        border-radius: 12px;
        background: linear-gradient(135deg, #0b3b4c, #0f6d77);
        color: #fff;
        display: grid;
        place-items: center;
        box-shadow: 0 10px 22px rgba(0, 35, 71, 0.16);
        font-size: 14px;
    }

    .note-card__item span {
        display: block;
    }

    @media (max-width: 768px) {
        .note-card {
            grid-template-columns: 1fr;
            padding: 18px;
        }
    }

    
    .detail-box{
background:#fff;
padding:32px;
border-radius:16px;
box-shadow:0 6px 18px rgba(0,0,0,.05);
max-width:1200px;
margin:auto;
}

.detail-box p{
max-width:1000px;
line-height:1.8;
}

.detail-content-section{
    background: transparent;
    padding: 20px 0 10px 0;
    margin: 0;
}

.detail-content-section .container{
    padding: 0;
}

.detail-box{
    background: #ffffff;
    max-width: 1200px;
    margin: 0 auto;
    padding: 28px 35px;
    border-radius: 18px;
    box-shadow: 0 4px 14px rgba(0,0,0,0.04);
}
.price-box{
    text-align:left;
}

.price-box .note{
    display:flex;
    align-items:flex-start;
    gap:8px;
    margin:6px 0;
    text-align:left;
}

.price-box .note i{
    margin-top:3px;
    min-width:16px;
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
            <h1>Srivani Break Darshan Booking – Tirupati VIP Darshan Package from Chennai</h1>
            <!-- <div class="duration">(1 Night / 2 Days)</div> -->
            <p class="subhead">Same-Day Srivani Break Darshan Booking Assistance Available with Tirupati VIP Darshan Package</p>

            <div class="feature-grid">
                <div class="feature-item">
                    <img src="images/hero-icons/transport.svg" alt="Individual AC Transport">
                    <p>Individual AC Transport</p>
                </div>
                <div class="feature-item">
                    <img src="images/hero-icons/hotel.svg" alt="Refreshment Hotel at Tirupati">
                    <p>Refreshment Hotel at Tirupati</p>
                </div>
                <div class="feature-item">
                    <img src="images/hero-icons/meals.svg" alt="Pure Veg Breakfast & Lunch">
                    <p>Pure Veg Breakfast & Lunch</p>
                </div>
                <div class="feature-item">
                    <img src="images/hero-icons/guidelines.svg" alt="Booking Guidelines">
                    <p>Booking Guidelines</p>
                </div>
            </div>

            <div class="cta-row">
               <div class="price-box">
    <p class="note"><i class="fas fa-check-circle"></i> Tirupati Tour Packages Available</p>
    <p class="note"><i class="fas fa-check-circle"></i> Quick support for date, package & travel planning</p>
    <p class="note"><i class="fas fa-check-circle"></i> Comfortable travel for families & seniors</p>
</div>

                <div class="cta-buttons desktop">
                    <a class="cta-btn call" href="javascript:void();" style="cursor: default;">
                        <i class="flaticon-phone-call"></i>
                        Call Now
                    </a>
                    <a class="cta-btn wa" target="_blank" href="//web.whatsapp.com/send?phone=+919994751079&text=�">
                        <img src="images/whats.png" style="width: 16px;" alt="WhatsApp btn">
                        Enquire Now
                    </a>
                </div>
                <div class="cta-buttons mobile">
                    <a class="cta-btn call" href="tel:+919994751079">
                        <i class="flaticon-phone-call"></i>
                        Call Now
                    </a>
                    <a class="cta-btn wa" target="_blank" href="https://wa.me/919994751079"> <img src="images/whats.png"
                            style="width: 16px;" alt="WhatsApp">Enquire Now</a>
                </div>
            </div>
        </div>

        <div class="hero-form-card">
            <div class="form-heading">
                <!-- <span class="form-emoji" aria-hidden="true"><i class="fa-regular fa-envelope-open"></i></span> -->
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
                        <input id="hf-whatsapp" type="tel" name="mobile" placeholder="WhatsApp Number *" inputmode="numeric" maxlength="10" autocomplete="tel-national">
                    </div>
                    <div class="field-error" data-for="hf-whatsapp"></div>
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

                <div class="form-group">
                    <?= $first_num . "" . $operator . "" . $second_num . " = ?"; ?>
                    <input id="hf-captcha" type="number" name="answer" />
                    <div class="field-error" data-for="hf-captcha"></div>
                </div>

                <button type="submit" class="submit-btn">Enquire Now</button>
                <div class="helper-text">Our expert will contact you shortly.</div>
            </form>
        </div>
    </div>
</section>

<!-- Mobile highlights card (visible on mobile) -->
<div class="mobile-highlights-card" style="padding-top: 100px; margin-bottom: 20px;">
    <div class="mhc-top">
        <div class="mhc-pill"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> ( 4.9/5
            Rating )</div>
        <h3 style=" font-size: 24px;">Srivani VVIP Break Darshan Tour Package From Chennai</h3>
        <p class="mhc-subhead">🚗 AC Transport | 🏨 Hotel Stay | 🥗 Meals | 👑 VVIP Darshan</p>
        <div class="mhc-price" style="  font-size: 20px;">Tirupati VIP Darshan Package</div>
    </div>

    <div class="mhc-form-card">
        <div class="mhc-form-title">Quick Enquiry for Booking</div>
        <form class="mhc-form" method="post" action="con_enq.php" novalidate>
            <input autocomplete="name" id="mhc-name" type="text" name="name" placeholder="Full Name *">
            <div class="field-error" data-for="mhc-name"></div>
            <input id="mhc-whatsapp" type="tel" name="mobile" placeholder="WhatsApp Number *" inputmode="numeric" maxlength="10" autocomplete="tel-national"
                style="margin-bottom: 10px !important;">
            <input type="hidden" name="form_source" value="mhc">
            <div class="field-error" data-for="mhc-whatsapp"></div>
            <button type="submit">Enquire Now</button>
        </form>
        <!-- <div class="mhc-note"><i class="fa-solid fa-bolt"></i> Only 5 slots left for this week!</div> -->
    </div>

    <div class="mhc-icons">
        <div><i class="fa-solid fa-road-circle-check"></i><span>Safe Journey</span></div>
        <div><i class="fa-solid fa-bed"></i><span>3-5 Star Stays</span></div>
        <div><i class="fa-solid fa-crown"></i><span>VVIP Darshan</span></div>
        <div><i class="fa-solid fa-utensils"></i><span>Meals</span></div>
    </div>
</div>

</div>



<div class="trust-strip-new">
    <p><i class="fas fa-star" style="color:#f59e0b;"></i> Trusted by 5,000+ Devotees <span
            style="color:#9ca3af;">|</span> No Hidden Charges <span style="color:#9ca3af;">|</span> Dedicated Support
        Team</p>
</div>

<section class="detail-content-section">
    <div class="container">
        <div class="detail-box">
            <h2>Chennai to Tirupati Travel Package</h2>
            <p>
    Divine Balaji Travels offers a professionally arranged Chennai to Tirupati pilgrimage trip designed for devotees seeking a peaceful, comfortable and well-managed travel experience. The package includes private AC transport, refreshment stop, pure vegetarian meal arrangements and smooth pickup to return drop coordination. Ideal for families, senior citizens, couples and group travellers who prefer organised travel with timely support. Our experienced team focuses on comfort, cleanliness, punctuality and a well-coordinated Tirupati journey with trusted service from start to finish.
</p>

            <div class="advance-note">
<strong>Travel Tip:</strong> Plan your Tirupati VIP Darshan 90 days in advance for a smooth and comfortable darshan experience.</div>

        </div>
    </div>
</section>


<section class="why-choose" style=" box-shadow: none; padding-bottom: 40px;">
    <div class="choose-container">
        <h2 class="choose-title">Why Choose Us?</h2>
        <div class="choose-accent"></div>
        <p class="choose-subtext">
    We offer trusted Srivani Break Darshan Booking with complete Tirupati VIP Darshan Package support.
</p>
        
        <div class="choose-grid">
            <div class="choose-card">
                <div class="choose-icon-wrap">
                    <img src="images/choose-icons/travel.png" alt="Chennai to Tirupati Travel Service"
                        class="choose-icon-img">
                </div>
                <p class="choose-text">Chennai to Tirupati Travel Service</p>
            </div>
            <div class="choose-card">
                <div class="choose-icon-wrap">
                    <img src="images/choose-icons/location.png" alt="Private AC Transport" class="choose-icon-img">
                </div>
                <p class="choose-text">Private AC Transport (Safe & Family Friendly)</p>
            </div>
            <div class="choose-card">
                <div class="choose-icon-wrap">
                    <img src="images/choose-icons/medal.png" alt="Lord Balaji and Padmavathi Darshan Assistance"
                        class="choose-icon-img">
                </div>
                <p class="choose-text">Lord Balaji & Padmavathi Darshan Assistance</p>
            </div>
            <div class="choose-card">
                <div class="choose-icon-wrap">
                    <img src="images/choose-icons/star.png" alt="Hotel Booking Options" class="choose-icon-img">
                </div>
                <p class="choose-text">Hotel Booking - 3, 4, 5 Star Options</p>
            </div>
            <div class="choose-card">
                <div class="choose-icon-wrap">
                    <img src="images/choose-icons/crown.png" alt="VVIP Darshan Assistance" class="choose-icon-img">
                </div>
                <p class="choose-text">VVIP Darshan Assistance & Guidance</p>
            </div>
        </div>
    </div>
</section>

<div class="container-v2">
    <div class="main-content">
        <h2><i class="fa-solid fa-route itinerary-icon"></i>1 Day Srivani Break Darshan Booking – Tirupati VIP Darshan Package</h2>
        <h3 style="margin-top: 12px;"><i class="fa-solid fa-sun itinerary-icon"></i> Day 1: Chennai to Tirupati –
            Tirumala Darshan</h3>
        <div class="itinerary-step"><span class="itinerary-icon"><i class="fa-solid fa-circle-check"></i></span><b
                style="width: auto;">5:00 AM</b> Trip starts from Chennai pickup location</div>
        <div class="itinerary-step"><span class="itinerary-icon"><i class="fa-solid fa-circle-check"></i></span><b
                style="width: auto;">6:30 AM</b> Breakfast at a Pure Vegetarian Hotel</div>
        <div class="itinerary-step"><span class="itinerary-icon"><i class="fa-solid fa-ticket-simple"></i></span><b
                style="width: auto;">9:00 AM</b> ₹10,500 Srivani Break Darshan Ticket (Same Day Darshan)</div>
        <p
            style="font-size: 13px; color: #64748b; padding: 12px; background: #fffcf0; border: 1px solid #ffeeba; border-radius: 8px; margin-top: 12px;">
            <b>Note:</b> Only <b>800 tickets per day</b> are issued via the official TTD portal on a first-come,
            first-served basis.
        </p>
        <div class="itinerary-step"><span class="itinerary-icon"><i class="fa-solid fa-circle-check"></i></span><b
                style="width: auto;">10:00 AM</b> Visit Padmavathi Temple for Darshan</div>
        <div class="itinerary-step"><span class="itinerary-icon"><i class="fa-solid fa-circle-check"></i></span><b
                style="width: auto;">1:00 PM</b> Lunch at a Pure Vegetarian Hotel</div>
        <div class="itinerary-step"><span class="itinerary-icon"><i class="fa-solid fa-circle-check"></i></span><b
                style="width: auto;">3:30 PM</b> Report at Tirumala for VIP Break Darshan (Lord Balaji)</div>
        <div class="itinerary-step"><span class="itinerary-icon"><i class="fa-solid fa-circle-check"></i></span><b
                style="width: auto;">11:00 PM</b> Drop-off at Chennai</div>
        <div class="itinerary-step"><span class="itinerary-icon"><i class="fa-solid fa-hand-holding-heart"></i></span>
            <b style="width: auto;">Trip concludes</b> with the blessings of Lord Balaji and Goddess Padmavathi
        </div>
        </section>


        <section class="note-card">
            <div class="note-card__content">
                <div class="note-card__header">
                    <div class="note-card__icon"><i class="fa-solid fa-headset"></i></div>
                    <h3>Booking Assistance</h3>
                </div>
                <ul class="note-card__list">
                    <li class="note-card__item">
                        <div class="note-card__item-icon"><i class="fa-solid fa-ticket-simple"></i></div>
                        <span>📝 <b>Booking Process:</b> Tickets are issued online at 9:00 AM every day on a trial
                            basis. ⚠️ Offline tickets are no longer available.</span>
                    </li>
                    <li class="note-card__item">
                        <div class="note-card__item-icon"><i class="fa-solid fa-clock"></i></div>
                        <span>⏰ <b>Darshan Timings:</b> Darshan is scheduled at 4:00 PM on the same day. The entire
                            process usually takes about 45 minutes to 1 hour.</span>
                    </li>
                    <li class="note-card__item">
                        <div class="note-card__item-icon"><i class="fa-solid fa-circle-xmark"></i></div>
                        <span>❌ <b>Unsuccessful Bookings:</b> If a ticket cannot be redeemed, your ₹10,000 remains in
                            the online portal. You can choose to view the darshan on the following day.</span>
                    </li>
                    <li class="note-card__item">
                        <div class="note-card__item-icon"><i class="fa-solid fa-earth-asia"></i></div>
                        <span><b>If you must return the same day:</b><br>🌏 NRI visitors: ₹300/- Darshan<br>👤
                            <b>Non-NRI visitors:</b> SSD (Sarvadarshanam) early the next morning</span>
                    </li>
                    <li class="note-card__item">
                        <div class="note-card__item-icon"><i class="fa-solid fa-rotate-left"></i></div>
                        <span>💰 <b>Refund Policy:</b> The ₹10,000 payment is strictly non-refundable.<br>✅ Your payment
                            is valid for one year and can be used for darshan at any time within this period.</span>
                    </li>
                    <li class="note-card__item">
                        <div class="note-card__item-icon"><i class="fa-solid fa-headset"></i></div>
                        <span>🛎️ <b>Booking Assistance:</b> We can process the payment and book the ticket on your
                            behalf as a service, for which service charges apply. Alternatively, you may choose to
                            handle the booking yourself at your own risk.</span>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <div class="sidebar">
        <div class="enquiry-box desktop">
            <h3>Quick Enquiry</h3>
            <p>Have questions? Contact us for instant booking assistance.</p>
            <a href="javascript:void();" class="enquiry-btn" style=" cursor: default;"><i
                    class="flaticon-phone-call"></i> &nbsp; Call: +91
                9994751079</a>
            <a target="_blank" href="//web.whatsapp.com/send?phone=+919994751079&text=�" class="enquiry-btn whatsapp"><i
                    class="flaticon-whatsapp" style=" vertical-align: middle;"></i>&nbsp; WhatsApp Enquiry</a>
        </div>
        <div class="enquiry-box mobile">
            <h3>Quick Enquiry</h3>
            <p>Have questions? Contact us for instant booking assistance.</p>
            <a href="tel:+919994751079" class="enquiry-btn"><i class="flaticon-phone-call"></i> &nbsp; Call: +91
                9994751079</a>
            <a href="https://wa.me/919994751079" class="enquiry-btn whatsapp"><i class="flaticon-whatsapp"
                    style=" vertical-align: middle;"></i>&nbsp; WhatsApp Enquiry</a>
        </div>

        <section class="card-lite dress-card">
            <div class="card-lite__header">
                <div class="card-lite__title">Dress Code</div>
                <div class="card-lite__pill">Temple Guidelines</div>
            </div>
            <div class="card-lite__body">
                <p><img src="images/men.png" alt="Men icon"
                        style="width: 28px; height: 28px; object-fit: contain; margin-right: 8px; vertical-align: middle;">
                    <b>Men :</b> Dhoti or Pyjamas with Upper Cloth.
                </p>
                <p><img src="images/wen.png" alt="Women icon"
                        style="width: 28px; height: 28px; object-fit: contain; margin-right: 8px; vertical-align: middle;">
                    <b>Women :</b> Saree, Half Saree, or Churidar with Pyjama and Upper Cloth.
                </p>
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
                <!-- <li><i class="fa-solid fa-circle-check" aria-hidden="true"
                        style="margin-right: 8px; font-size: 14px;"></i>Srivani Counter accepts Indian Debit/Credit
                    Cards only.</li> -->
                <li><i class="fa-solid fa-circle-check" aria-hidden="true"
                        style="margin-right: 8px; font-size: 14px;"></i>No cash or international cards accepted.</li>
            </ul>
        </section>

        <section class="inclusions-card">
            <div class="inclusions-title"> INCLUSIONS 🌟
            </div>
            <ul class="inclusion-list">
                <li><i class="fa-solid fa-circle-check inclusion-icon" aria-hidden="true"></i>AC Car for 1 Day with
                    polite & trained driver 🚗</li>
                <li><i class="fa-solid fa-circle-check inclusion-icon" aria-hidden="true"></i>All tolls, parking, and
                    fuel charges included ⛽</li>
            </ul>

            <div class="inclusions-title" style="margin-top: 6px;"> EXCLUSIONS 🚫</div>
            <ul class="exclusion-list">
                <li><i class="fa-regular fa-circle-xmark exclusion-icon" aria-hidden="true"></i>Food during transit 🍱
                </li>
                <li><i class="fa-regular fa-circle-xmark exclusion-icon" aria-hidden="true"></i>Srivani VVIP Break
                    Darshan donation / entry fees</li>
                <li><i class="fa-regular fa-circle-xmark exclusion-icon" aria-hidden="true"></i>Sightseeing entry
                    tickets (if any, payable directly) 🎟️</li>
                <li><i class="fa-regular fa-circle-xmark exclusion-icon" aria-hidden="true"></i>Laundry services 🧺</li>
                <li><i class="fa-regular fa-circle-xmark exclusion-icon" aria-hidden="true"></i>Room service / extra
                    charges 🛎️</li>
            </ul>
        </section>
    </div>
</div>

<section class="booking-options">
    <div class="booking-options__inner">
        <div class="booking-options__title">Booking Options Available</div>
        <div class="booking-options__cards">
            <div class="booking-option-card booking-option-card--advance">
                <div class="booking-option__icon"><i class="fa-regular fa-calendar"></i></div>
                <h3 class="booking-option__heading">Advance Booking</h3>
                <p class="booking-option__text">Planned darshan (future date)</p>
            </div>
            <div class="booking-option-card booking-option-card--current">
                <div class="booking-option__icon"><i class="fa-solid fa-bolt"></i></div>
                <h3 class="booking-option__heading">Current Booking</h3>
                <p class="booking-option__text">Same-day</p>
            </div>
        </div>
        <p class="booking-options__note">Subject to TTD rules &amp; Srivani availability.</p>
    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/js/utils.min.js"></script>
<script>

    document.addEventListener('DOMContentLoaded', function () {
        const heroForm = document.querySelector('.hero-form');
        const phoneInput = document.querySelector('#hf-whatsapp');
        const emailInput = heroForm ? heroForm.querySelector('input[name="email"]') : null;
        const dateInput = document.querySelector('#hf-date');
        const nameInput = document.querySelector('#hf-name');
        const travellersInput = document.querySelector('#hf-travellers');
        const captchaInput = document.querySelector('#hf-captcha');
        const submitBtn = heroForm ? heroForm.querySelector('.submit-btn') : null;
        const mhcForm = document.querySelector('.mhc-form');
        const mhcNameInput = document.querySelector('#mhc-name');
        const mhcPhoneInput = document.querySelector('#mhc-whatsapp');
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
                    showError('hf-whatsapp', 'WhatsApp number is required.');
                    hasError = true;
                } else if (number.length !== 10) {
                    showError('hf-whatsapp', 'Enter a valid 10-digit WhatsApp number.');
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

                if (itiInstance && typeof itiInstance.getSelectedCountryData === 'function') {
                    const data = itiInstance.getSelectedCountryData();
                    if (data && data.dialCode) {
                        code = `+${data.dialCode}`;
                    }
                }

                const formData = new FormData(heroForm);
                formData.set('ajax', '1');
                formData.set('mobile', `${code} ${number}`.trim() || number);
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
                        window.location.href = 'thanks.php';
                        return;
                    }

                    if (resp.status === 422 && data && data.errors) {
                        const fieldMap = {
                            name: 'hf-name',
                            mobile: 'hf-whatsapp',
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
                    showError('mhc-whatsapp', 'WhatsApp Number is required.');
                    hasError = true;
                } else if (number.length !== 10) {
                    showError('mhc-whatsapp', 'Enter a valid 10-digit WhatsApp Number.');
                    hasError = true;
                }
                if (hasError) return;
                setMhcLoading(true);

                let code = '';

                if (mhcItiInstance && typeof mhcItiInstance.getSelectedCountryData === 'function') {
                    const data = mhcItiInstance.getSelectedCountryData();
                    if (data && data.dialCode) {
                        code = `+${data.dialCode}`;
                    }
                }

                const formData = new FormData(mhcForm);
                formData.set('ajax', '1');
                formData.set('mobile', `${code} ${number}`.trim() || number);
                
                
                // console.log(Object.fromEntries(formData));
                // return false;
                
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
                        window.location.href = 'thanks.php';
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
