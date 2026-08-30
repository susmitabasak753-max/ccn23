<x-layouts.travel title="Contact Us" description="Contact WanderLux Travel Agency — Get a free consultation, plan your dream trip, or reach out to our 24/7 travel experts.">

<style>
/* ===== PAGE HERO ===== */
.page-hero {
    background: linear-gradient(135deg, var(--navy) 0%, #1a3a6e 60%, #0f2d55 100%);
    padding: 100px 5% 80px;
    text-align: center; position: relative; overflow: hidden;
}
.page-hero::before {
    content: ''; position: absolute; inset: 0;
    background: radial-gradient(circle at 30% 50%, rgba(10,163,163,.15) 0%, transparent 60%),
                radial-gradient(circle at 80% 20%, rgba(245,183,49,.08) 0%, transparent 50%);
}
.page-hero-content { position: relative; z-index: 1; animation: fadeInUp .8s ease both; }
@keyframes fadeInUp { from { opacity:0; transform:translateY(30px); } to { opacity:1; transform:none; } }
.page-hero h1 { font-family: 'Playfair Display', serif; font-size: clamp(2.2rem,5vw,3.8rem); font-weight: 700; color: #fff; margin-bottom: 16px; }
.page-hero p { font-size: 1.1rem; color: rgba(255,255,255,.75); max-width: 560px; margin: 0 auto; line-height: 1.7; }
.breadcrumb { display: flex; align-items: center; justify-content: center; gap: 8px; font-size: .85rem; color: rgba(255,255,255,.5); margin-bottom: 20px; }
.breadcrumb a { color: var(--teal-lt); text-decoration: none; }
.breadcrumb a:hover { text-decoration: underline; }

/* ===== CONTACT SECTION ===== */
.contact-section { padding: 90px 5%; background: var(--cream); }
.contact-inner { max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1.5fr; gap: 64px; align-items: start; }

/* === Contact Info Cards === */
.contact-info-col { display: flex; flex-direction: column; gap: 20px; }
.contact-info-header { margin-bottom: 8px; }
.contact-info-header h2 { font-family: 'Playfair Display', serif; font-size: 2rem; font-weight: 700; color: var(--navy); margin-bottom: 10px; }
.contact-info-header p { font-size: .95rem; color: var(--slate); line-height: 1.7; }

.info-card {
    background: #fff; border-radius: 18px;
    padding: 24px 26px;
    display: flex; gap: 18px; align-items: flex-start;
    box-shadow: 0 4px 24px rgba(0,0,0,.07);
    border: 1px solid rgba(10,163,163,.08);
    transition: all .3s ease;
}
.info-card:hover { transform: translateX(6px); box-shadow: 0 10px 36px rgba(10,163,163,.14); border-color: rgba(10,163,163,.2); }
.info-card-icon {
    width: 52px; height: 52px; flex-shrink: 0;
    border-radius: 14px;
    background: linear-gradient(135deg, var(--teal), var(--teal-lt));
    display: flex; align-items: center; justify-content: center;
    font-size: 1.4rem;
    box-shadow: 0 6px 20px rgba(10,163,163,.35);
}
.info-card-txt strong { display: block; font-size: 1rem; font-weight: 700; color: var(--navy); margin-bottom: 4px; }
.info-card-txt span { font-size: .88rem; color: var(--slate); line-height: 1.5; }
.info-card-txt a { color: var(--teal); text-decoration: none; }
.info-card-txt a:hover { text-decoration: underline; }

.hours-card {
    background: linear-gradient(135deg, var(--navy), var(--navy-mid));
    border-radius: 18px; padding: 28px;
    border: 1px solid rgba(255,255,255,.05);
}
.hours-card h4 { color: #fff; font-size: 1rem; font-weight: 700; margin-bottom: 16px; }
.hours-row { display: flex; justify-content: space-between; align-items: center; padding: 9px 0; border-bottom: 1px solid rgba(255,255,255,.07); }
.hours-row:last-child { border: none; }
.hours-row span:first-child { font-size: .88rem; color: rgba(255,255,255,.65); }
.hours-row span:last-child { font-size: .88rem; color: var(--teal-lt); font-weight: 600; }

/* === Contact Form === */
.contact-form-col {}
.form-card {
    background: #fff; border-radius: var(--radius-xl);
    padding: 48px 44px;
    box-shadow: 0 20px 80px rgba(0,0,0,.10);
    border: 1px solid rgba(0,0,0,.04);
}
.form-card h3 { font-family: 'Playfair Display', serif; font-size: 1.8rem; font-weight: 700; color: var(--navy); margin-bottom: 8px; }
.form-card > p { font-size: .92rem; color: var(--slate); margin-bottom: 32px; line-height: 1.6; }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
.form-group { margin-bottom: 22px; }
.form-group label { display: block; font-size: .8rem; font-weight: 700; color: var(--navy); letter-spacing: .5px; text-transform: uppercase; margin-bottom: 8px; }
.form-group input,
.form-group select,
.form-group textarea {
    width: 100%; padding: 13px 18px;
    border: 2px solid #e8eaf0; border-radius: 12px;
    font-family: 'Outfit', sans-serif; font-size: .95rem; color: var(--navy);
    background: #f8f9fc; outline: none;
    transition: all .25s ease;
    resize: none;
}
.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus { border-color: var(--teal); background: #fff; box-shadow: 0 0 0 4px rgba(10,163,163,.1); }
.form-group textarea { height: 130px; }
.form-group input.error, .form-group select.error, .form-group textarea.error { border-color: #e53e3e; background: #fff5f5; }
.error-msg { font-size: .78rem; color: #e53e3e; margin-top: 5px; display: none; }
.error-msg.show { display: block; }

.btn-submit {
    width: 100%; padding: 16px;
    background: linear-gradient(135deg, var(--teal), var(--teal-lt));
    color: #fff; border: none; cursor: pointer;
    font-family: 'Outfit', sans-serif; font-size: 1.05rem; font-weight: 700;
    border-radius: 50px;
    box-shadow: 0 8px 30px rgba(10,163,163,.4);
    transition: all .3s ease;
    display: flex; align-items: center; justify-content: center; gap: 10px;
    letter-spacing: .3px;
}
.btn-submit:hover { transform: translateY(-3px); box-shadow: 0 14px 40px rgba(10,163,163,.55); }
.btn-submit:active { transform: translateY(0); }
.btn-submit.loading { opacity: .75; pointer-events: none; }

.form-note { text-align: center; font-size: .8rem; color: var(--slate); margin-top: 16px; }

/* === Success Message === */
.success-banner {
    display: none;
    background: linear-gradient(135deg, #e6fffa, #f0fff4);
    border: 1px solid rgba(10,163,163,.3); border-radius: 14px;
    padding: 20px 24px; margin-bottom: 28px;
    text-align: center;
}
.success-banner.show { display: block; animation: fadeInUp .4s ease; }
.success-banner h4 { color: var(--teal); font-size: 1.1rem; font-weight: 700; margin-bottom: 6px; }
.success-banner p { font-size: .9rem; color: var(--slate); }

/* ===== MAP SECTION ===== */
.map-section { padding: 0 5% 90px; background: var(--cream); }
.map-inner { max-width: 1200px; margin: 0 auto; }
.map-inner h3 { font-family: 'Playfair Display', serif; font-size: 1.8rem; font-weight: 700; color: var(--navy); margin-bottom: 24px; text-align: center; }
.map-placeholder {
    background: linear-gradient(135deg, var(--navy), var(--navy-mid));
    border-radius: var(--radius-xl); height: 380px;
    display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 16px;
    font-size: 5rem; color: rgba(255,255,255,.15);
    position: relative; overflow: hidden;
}
.map-placeholder::before {
    content: ''; position: absolute; inset: 0;
    background: radial-gradient(circle at 50% 50%, rgba(10,163,163,.15) 0%, transparent 70%);
}
.map-pin {
    position: absolute; display: flex; flex-direction: column; align-items: center; gap: 4px;
    cursor: pointer;
}
.map-pin .pin-icon { font-size: 2.5rem; animation: bounce 2s infinite; }
@keyframes bounce { 0%,100% { transform:translateY(0); } 50% { transform:translateY(-8px); } }
.map-pin .pin-label {
    background: rgba(255,255,255,.95); color: var(--navy);
    font-size: .75rem; font-weight: 700; padding: 4px 12px; border-radius: 50px;
    white-space: nowrap; box-shadow: 0 4px 16px rgba(0,0,0,.15);
}

/* ===== FAQ ===== */
.faq-section { padding: 80px 5%; background: #fff; }
.faq-section .section-header { text-align: center; margin-bottom: 48px; }
.faq-grid { max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; gap: 12px; }
.faq-item {
    background: var(--cream); border-radius: 14px;
    border: 1px solid rgba(0,0,0,.06);
    overflow: hidden; transition: all .3s;
}
.faq-item.open { border-color: rgba(10,163,163,.25); box-shadow: 0 6px 24px rgba(10,163,163,.1); }
.faq-q {
    padding: 20px 24px; display: flex; justify-content: space-between; align-items: center;
    cursor: pointer; gap: 16px;
}
.faq-q h4 { font-size: .97rem; font-weight: 600; color: var(--navy); }
.faq-toggle {
    width: 32px; height: 32px; border-radius: 50%; flex-shrink: 0;
    background: rgba(10,163,163,.1); color: var(--teal);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.1rem; font-weight: 700; transition: all .3s;
}
.faq-item.open .faq-toggle { background: var(--teal); color: #fff; transform: rotate(45deg); }
.faq-a {
    max-height: 0; overflow: hidden;
    transition: max-height .4s ease, padding .3s;
    padding: 0 24px;
}
.faq-item.open .faq-a { max-height: 200px; padding: 0 24px 20px; }
.faq-a p { font-size: .9rem; color: var(--slate); line-height: 1.7; }

@media (max-width: 960px) {
    .contact-inner { grid-template-columns: 1fr; gap: 40px; }
    .form-card { padding: 32px 24px; }
}
@media (max-width: 600px) {
    .form-row { grid-template-columns: 1fr; }
}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="{{ route('travel.home') }}">Home</a>
            <span>›</span>
            <span>Contact Us</span>
        </div>
        <div class="section-badge" style="margin-bottom:20px;">📬 Get In Touch</div>
        <h1>Let's Plan Your<br>Perfect Journey</h1>
        <p>Our travel experts are ready to turn your dream vacation into reality. Reach out — we respond within 24 hours.</p>
    </div>
</section>

<!-- CONTACT MAIN -->
<section class="contact-section">
    <div class="contact-inner">

        <!-- INFO COLUMN -->
        <div class="contact-info-col">
            <div class="contact-info-header">
                <div class="section-badge">📍 Find Us</div>
                <h2>We're Here to Help You Travel Better</h2>
                <p>Whether you have a question, need advice, or are ready to book — our team is just a message away.</p>
            </div>

            <div class="info-card">
                <div class="info-card-icon">📞</div>
                <div class="info-card-txt">
                    <strong>Phone & WhatsApp</strong>
                    <span><a href="tel:+18001234567">+1 800 123 4567</a><br>Available Mon–Fri, 9am–6pm EST</span>
                </div>
            </div>

            <div class="info-card">
                <div class="info-card-icon">✉️</div>
                <div class="info-card-txt">
                    <strong>Email Us</strong>
                    <span><a href="mailto:hello@wanderlux.com">hello@wanderlux.com</a><br>We reply within 24 hours</span>
                </div>
            </div>

            <div class="info-card">
                <div class="info-card-icon">📍</div>
                <div class="info-card-txt">
                    <strong>Visit Our Office</strong>
                    <span>123 Travel Boulevard, Suite 500<br>New York, NY 10001, USA</span>
                </div>
            </div>

            <div class="hours-card">
                <h4>🕒 Office Hours</h4>
                <div class="hours-row"><span>Monday – Friday</span><span>9:00 AM – 6:00 PM</span></div>
                <div class="hours-row"><span>Saturday</span><span>10:00 AM – 4:00 PM</span></div>
                <div class="hours-row"><span>Sunday</span><span>Closed</span></div>
                <div class="hours-row"><span>Emergency Support</span><span>24 / 7 Available</span></div>
            </div>
        </div>

        <!-- FORM COLUMN -->
        <div class="contact-form-col">
            <div class="form-card">
                <h3>Send Us a Message</h3>
                <p>Fill in the details below and one of our travel experts will get back to you with a custom proposal.</p>

                <div class="success-banner" id="successBanner">
                    <h4>🎉 Message Sent Successfully!</h4>
                    <p>Thank you! Our travel expert will contact you within 24 hours to start planning your dream trip.</p>
                </div>

                <form id="contactForm" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name">First Name *</label>
                            <input type="text" id="first-name" name="first_name" placeholder="John" required>
                            <div class="error-msg" id="err-first">Please enter your first name.</div>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name *</label>
                            <input type="text" id="last-name" name="last_name" placeholder="Doe" required>
                            <div class="error-msg" id="err-last">Please enter your last name.</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email-field">Email Address *</label>
                            <input type="email" id="email-field" name="email" placeholder="john@example.com" required>
                            <div class="error-msg" id="err-email">Please enter a valid email.</div>
                        </div>
                        <div class="form-group">
                            <label for="phone-field">Phone Number</label>
                            <input type="tel" id="phone-field" name="phone" placeholder="+1 234 567 890">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="destination-field">Dream Destination</label>
                            <input type="text" id="destination-field" name="destination" placeholder="e.g. Maldives, Bali..."
                                value="{{ request('destination') }}">
                        </div>
                        <div class="form-group">
                            <label for="service-select">Service Interested In</label>
                            <select id="service-select" name="service">
                                <option value="">Select a service...</option>
                                <option>Luxury Escape</option>
                                <option>Honeymoon Package</option>
                                <option>Adventure Tour</option>
                                <option>Family Vacation</option>
                                <option>Group Travel</option>
                                <option>Custom Itinerary</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="travel-date">Preferred Travel Date</label>
                            <input type="date" id="travel-date" name="travel_date">
                        </div>
                        <div class="form-group">
                            <label for="budget-select">Approx. Budget</label>
                            <select id="budget-select" name="budget">
                                <option value="">Select range...</option>
                                <option>Under ৳1,000</option>
                                <option>৳1,000 – ৳2,500</option>
                                <option>৳2,500 – ৳5,000</option>
                                <option>৳5,000 – ৳10,000</option>
                                <option>৳10,000+</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message-field">Your Message *</label>
                        <textarea id="message-field" name="message" placeholder="Tell us about your dream trip — destinations, travel style, special requirements, or any questions you have..." required></textarea>
                        <div class="error-msg" id="err-message">Please write a short message.</div>
                    </div>

                    <button type="submit" class="btn-submit" id="submitBtn">
                        <span id="btnText">✈️ Send My Enquiry</span>
                    </button>
                    <p class="form-note">🔒 Your information is kept confidential and never shared with third parties.</p>
                </form>
            </div>
        </div>

    </div>
</section>

<!-- MAP SECTION -->
<section class="map-section">
    <div class="map-inner">
        <h3>Find Our Office</h3>
        <div class="map-placeholder">
            🗺️
            <div class="map-pin" style="top:45%;left:48%;">
                <div class="pin-icon">📍</div>
                <div class="pin-label">WanderLux HQ — New York</div>
            </div>
            <div class="map-pin" style="top:30%;left:30%;animation-delay:.5s;">
                <div class="pin-icon">🌍</div>
                <div class="pin-label">London Office</div>
            </div>
            <div class="map-pin" style="top:55%;left:70%;animation-delay:1s;">
                <div class="pin-icon">🌏</div>
                <div class="pin-label">Dubai Office</div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="faq-section">
    <div class="section-header">
        <div class="section-badge">❓ FAQ</div>
        <h2 class="section-title">Frequently Asked Questions</h2>
        <p class="section-subtitle" style="margin:14px auto 0;">Everything you need to know before planning your trip.</p>
    </div>
    <div class="faq-grid">
        @php
        $faqs = [
            ['q'=>'How far in advance should I book my trip?','a'=>'We recommend booking at least 3–6 months in advance for peak-season travel. However, our team can arrange last-minute trips as well — just contact us and we\'ll do our best!'],
            ['q'=>'Do you offer travel insurance?','a'=>'Yes! All our packages include optional comprehensive travel insurance covering medical emergencies, trip cancellations, lost baggage, and more. We highly recommend it for international travel.'],
            ['q'=>'Can I customize an existing package?','a'=>'Absolutely. Every package can be tailored to your preferences — from the accommodation category to specific activities, dining options, and travel dates. Just let us know your wishes.'],
            ['q'=>'What payment methods do you accept?','a'=>'We accept all major credit/debit cards (Visa, Mastercard, Amex), bank transfers, and PayPal. A 30% deposit is required to confirm your booking, with the balance due 30 days before departure.'],
            ['q'=>'Is 24/7 support available during the trip?','a'=>'Yes! All our Premium and Elite package clients get a dedicated 24/7 concierge number. For Essential packages, our team is available during business hours with emergency support around the clock.'],
        ];
        @endphp
        @foreach($faqs as $i => $faq)
        <div class="faq-item" id="faq-{{ $i }}">
            <div class="faq-q" onclick="toggleFaq({{ $i }})">
                <h4>{{ $faq['q'] }}</h4>
                <div class="faq-toggle">+</div>
            </div>
            <div class="faq-a">
                <p>{{ $faq['a'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

<script>
// Form validation and submission
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    let valid = true;

    const firstName = document.getElementById('first-name');
    const lastName  = document.getElementById('last-name');
    const email     = document.getElementById('email-field');
    const message   = document.getElementById('message-field');

    const validate = (field, errId, condition) => {
        if (!condition) {
            field.classList.add('error');
            document.getElementById(errId).classList.add('show');
            valid = false;
        } else {
            field.classList.remove('error');
            document.getElementById(errId).classList.remove('show');
        }
    };

    validate(firstName, 'err-first',   firstName.value.trim().length > 0);
    validate(lastName,  'err-last',    lastName.value.trim().length > 0);
    validate(email,     'err-email',   /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value));
    validate(message,   'err-message', message.value.trim().length > 10);

    if (!valid) return;

    // Simulate sending
    const btn  = document.getElementById('submitBtn');
    const txt  = document.getElementById('btnText');
    btn.classList.add('loading');
    txt.textContent = '⏳ Sending…';

    setTimeout(() => {
        btn.classList.remove('loading');
        txt.textContent = '✈️ Send My Enquiry';
        document.getElementById('successBanner').classList.add('show');
        document.getElementById('contactForm').reset();
        document.getElementById('successBanner').scrollIntoView({ behavior: 'smooth', block: 'center' });
    }, 1800);
});

// FAQ accordion
function toggleFaq(idx) {
    const item = document.getElementById('faq-' + idx);
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(el => el.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
}
// Open first FAQ by default
toggleFaq(0);
</script>

</x-layouts.travel>
