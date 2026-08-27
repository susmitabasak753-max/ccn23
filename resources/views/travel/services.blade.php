<x-layouts.travel title="Services" description="WanderLux Travel Services — Luxury packages, honeymoon getaways, adventure tours, group travel, and custom itineraries.">

<style>
/* ===== PAGE HERO ===== */
.page-hero {
    background: linear-gradient(135deg, var(--navy) 0%, #1a3a6e 60%, #0f2d55 100%);
    padding: 100px 5% 80px;
    text-align: center; position: relative; overflow: hidden;
}
.page-hero::before {
    content: ''; position: absolute; inset: 0;
    background: radial-gradient(circle at 70% 50%, rgba(10,163,163,.15) 0%, transparent 60%),
                radial-gradient(circle at 20% 80%, rgba(245,183,49,.08) 0%, transparent 50%);
}
.page-hero-content { position: relative; z-index: 1; animation: fadeInUp .8s ease both; }
@keyframes fadeInUp { from { opacity:0; transform:translateY(30px); } to { opacity:1; transform:none; } }
.page-hero h1 { font-family: 'Playfair Display', serif; font-size: clamp(2.2rem,5vw,3.8rem); font-weight: 700; color: #fff; margin-bottom: 16px; }
.page-hero p { font-size: 1.1rem; color: rgba(255,255,255,.75); max-width: 560px; margin: 0 auto; line-height: 1.7; }
.breadcrumb { display: flex; align-items: center; justify-content: center; gap: 8px; font-size: .85rem; color: rgba(255,255,255,.5); margin-bottom: 20px; }
.breadcrumb a { color: var(--teal-lt); text-decoration: none; }
.breadcrumb a:hover { text-decoration: underline; }

/* ===== SERVICES INTRO ===== */
.services-intro { padding: 80px 5%; background: var(--cream); }
.intro-grid { max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
.intro-text h2 { font-family: 'Playfair Display', serif; font-size: 2.4rem; font-weight: 700; color: var(--navy); margin-bottom: 16px; line-height: 1.2; }
.intro-text p { color: var(--slate); line-height: 1.7; margin-bottom: 24px; }
.intro-cards { display: flex; flex-direction: column; gap: 16px; }
.intro-card {
    display: flex; gap: 16px; align-items: flex-start;
    background: #fff; padding: 20px 24px; border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0,0,0,.06); border: 1px solid rgba(10,163,163,.08);
    transition: all .3s; cursor: default;
}
.intro-card:hover { transform: translateX(6px); box-shadow: 0 8px 30px rgba(10,163,163,.15); border-color: rgba(10,163,163,.2); }
.intro-card-icon { width: 48px; height: 48px; border-radius: 12px; background: linear-gradient(135deg, rgba(10,163,163,.12), rgba(18,200,200,.06)); display: flex; align-items: center; justify-content: center; font-size: 1.4rem; flex-shrink: 0; }
.intro-card-txt h4 { font-size: .95rem; font-weight: 700; color: var(--navy); margin-bottom: 4px; }
.intro-card-txt p { font-size: .85rem; color: var(--slate); line-height: 1.5; }

/* ===== MAIN SERVICES GRID ===== */
.services-section { padding: 80px 5% 100px; background: #fff; }
.services-section .section-header { text-align: center; margin-bottom: 60px; }
.services-grid { max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(3,1fr); gap: 32px; }
.service-card {
    background: var(--cream); border-radius: var(--radius-lg);
    padding: 40px 32px; border: 1px solid rgba(0,0,0,.05);
    position: relative; overflow: hidden;
    transition: all .35s ease; cursor: default;
}
.service-card::before {
    content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px;
    background: linear-gradient(90deg, var(--teal), var(--teal-lt));
    transform: scaleX(0); transform-origin: left;
    transition: transform .35s ease;
}
.service-card:hover { transform: translateY(-8px); box-shadow: 0 20px 60px rgba(0,0,0,.12); background: #fff; }
.service-card:hover::before { transform: scaleX(1); }
.service-card.featured { background: linear-gradient(135deg, var(--navy), var(--navy-mid)); color: #fff; border-color: transparent; }
.service-card.featured::before { background: linear-gradient(90deg, var(--gold), var(--gold-lt)); }
.service-card.featured h3, .service-card.featured p, .service-card.featured .service-tag { color: rgba(255,255,255,.85); }
.service-card.featured h3 { color: #fff; }
.service-card.featured .svc-badge { background: rgba(245,183,49,.2); color: var(--gold); }
.service-icon { font-size: 3rem; margin-bottom: 20px; }
.service-card h3 { font-size: 1.3rem; font-weight: 700; color: var(--navy); margin-bottom: 12px; }
.service-card p { font-size: .9rem; color: var(--slate); line-height: 1.7; margin-bottom: 20px; }
.svc-badge {
    display: inline-block; background: rgba(10,163,163,.1); color: var(--teal);
    font-size: .75rem; font-weight: 700; letter-spacing: .5px; text-transform: uppercase;
    padding: 4px 12px; border-radius: 50px; margin-bottom: 16px;
}
.service-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 24px; }
.service-tag { background: rgba(0,0,0,.05); color: var(--slate); font-size: .78rem; font-weight: 500; padding: 4px 12px; border-radius: 50px; }
.service-link {
    display: inline-flex; align-items: center; gap: 8px;
    color: var(--teal); font-size: .9rem; font-weight: 600; text-decoration: none;
    transition: gap .25s;
}
.service-link:hover { gap: 14px; }
.service-card.featured .service-link { color: var(--gold); }

/* ===== PROCESS ===== */
.process-section { padding: 100px 5%; background: var(--cream); }
.process-section .section-header { text-align: center; margin-bottom: 60px; }
.process-steps { max-width: 1000px; margin: 0 auto; display: grid; grid-template-columns: repeat(4,1fr); gap: 16px; position: relative; }
.process-steps::before {
    content: ''; position: absolute;
    top: 36px; left: 12.5%; right: 12.5%;
    height: 2px; background: linear-gradient(90deg, var(--teal), var(--teal-lt));
    z-index: 0;
}
.step { text-align: center; position: relative; z-index: 1; }
.step-num {
    width: 72px; height: 72px; border-radius: 50%; margin: 0 auto 20px;
    background: linear-gradient(135deg, var(--teal), var(--teal-lt));
    display: flex; align-items: center; justify-content: center;
    font-size: 1.5rem; color: #fff; font-weight: 800;
    box-shadow: 0 8px 30px rgba(10,163,163,.35);
    position: relative;
}
.step h4 { font-size: 1rem; font-weight: 700; color: var(--navy); margin-bottom: 8px; }
.step p { font-size: .85rem; color: var(--slate); line-height: 1.6; }

/* ===== PRICING ===== */
.pricing-section { padding: 100px 5%; background: #fff; }
.pricing-section .section-header { text-align: center; margin-bottom: 60px; }
.pricing-grid { max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: repeat(3,1fr); gap: 28px; }
.price-card {
    background: var(--cream); border-radius: var(--radius-lg);
    padding: 40px 32px; text-align: center;
    border: 2px solid rgba(0,0,0,.05);
    transition: all .35s;
    position: relative; overflow: hidden;
}
.price-card:hover { transform: translateY(-8px); box-shadow: 0 20px 60px rgba(0,0,0,.1); }
.price-card.popular {
    background: linear-gradient(135deg, var(--navy), var(--navy-mid));
    border-color: var(--teal);
    transform: scale(1.04);
}
.price-card.popular:hover { transform: scale(1.04) translateY(-8px); }
.popular-badge {
    position: absolute; top: 20px; right: -28px;
    background: linear-gradient(135deg, var(--gold), var(--gold-lt));
    color: var(--navy); font-size: .72rem; font-weight: 800; letter-spacing: .8px; text-transform: uppercase;
    padding: 6px 40px; transform: rotate(35deg);
}
.price-tier { font-size: .8rem; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; color: var(--teal); margin-bottom: 12px; }
.price-card.popular .price-tier { color: var(--teal-lt); }
.price-card h3 { font-family: 'Playfair Display', serif; font-size: 1.5rem; font-weight: 700; color: var(--navy); margin-bottom: 8px; }
.price-card.popular h3 { color: #fff; }
.price-amount { font-size: 3rem; font-weight: 800; color: var(--navy); line-height: 1; margin: 20px 0 4px; }
.price-card.popular .price-amount { color: var(--gold); }
.price-period { font-size: .85rem; color: var(--slate); margin-bottom: 28px; }
.price-card.popular .price-period { color: rgba(255,255,255,.55); }
.price-features { list-style: none; margin-bottom: 32px; }
.price-features li { font-size: .9rem; color: var(--slate); padding: 9px 0; border-bottom: 1px solid rgba(0,0,0,.05); display: flex; align-items: center; gap: 10px; }
.price-card.popular .price-features li { color: rgba(255,255,255,.75); border-color: rgba(255,255,255,.08); }
.price-features li::before { content: '✓'; color: var(--teal); font-weight: 700; }
.price-card.popular .price-features li::before { color: var(--teal-lt); }
.btn-price {
    display: block; width: 100%; padding: 14px;
    background: linear-gradient(135deg, var(--teal), var(--teal-lt));
    color: #fff; font-weight: 600; font-size: 1rem; text-align: center;
    border-radius: 50px; text-decoration: none;
    box-shadow: 0 6px 24px rgba(10,163,163,.35);
    transition: all .3s;
}
.btn-price:hover { transform: translateY(-2px); box-shadow: 0 10px 32px rgba(10,163,163,.5); }
.btn-price-outline {
    display: block; width: 100%; padding: 13px;
    background: transparent; border: 2px solid rgba(255,255,255,.25);
    color: #fff; font-weight: 600; font-size: 1rem; text-align: center;
    border-radius: 50px; text-decoration: none; transition: all .3s;
}
.btn-price-outline:hover { background: rgba(255,255,255,.1); transform: translateY(-2px); }

@media (max-width: 1024px) {
    .services-grid { grid-template-columns: 1fr 1fr; }
    .pricing-grid { grid-template-columns: 1fr; max-width: 440px; }
    .price-card.popular { transform: none; }
    .process-steps { grid-template-columns: 1fr 1fr; }
    .process-steps::before { display: none; }
    .intro-grid { grid-template-columns: 1fr; gap: 40px; }
}
@media (max-width: 640px) {
    .services-grid { grid-template-columns: 1fr; }
    .process-steps { grid-template-columns: 1fr; }
}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="{{ route('travel.home') }}">Home</a>
            <span>›</span>
            <span>Services</span>
        </div>
        <div class="section-badge" style="margin-bottom:20px;">💼 What We Offer</div>
        <h1>World-Class Travel Services</h1>
        <p>From intimate escapes to grand expeditions — every journey is crafted with passion, precision, and unmatched expertise.</p>
    </div>
</section>

<!-- INTRO -->
<section class="services-intro">
    <div class="intro-grid">
        <div class="intro-text">
            <div class="section-badge">🌟 Our Promise</div>
            <h2>Experiences That Go Beyond the Ordinary</h2>
            <p>At WanderLux, we believe travel is more than a destination — it's a transformation. Our team of expert travel designers works closely with you to understand your vision, then builds an itinerary that exceeds every expectation.</p>
            <a href="{{ route('travel.contact') }}" class="btn-primary">Get a Free Consultation →</a>
        </div>
        <div class="intro-cards">
            <div class="intro-card">
                <div class="intro-card-icon">✈️</div>
                <div class="intro-card-txt">
                    <h4>Flight Arrangements</h4>
                    <p>Business class, first class, or budget — we find the best options for your journey.</p>
                </div>
            </div>
            <div class="intro-card">
                <div class="intro-card-icon">🏨</div>
                <div class="intro-card-txt">
                    <h4>Premium Accommodations</h4>
                    <p>Handpicked hotels, resorts, and private villas that match your style.</p>
                </div>
            </div>
            <div class="intro-card">
                <div class="intro-card-icon">🎭</div>
                <div class="intro-card-txt">
                    <h4>Local Experiences</h4>
                    <p>Authentic cultural activities, private tours, and exclusive access unavailable elsewhere.</p>
                </div>
            </div>
            <div class="intro-card">
                <div class="intro-card-icon">🛡️</div>
                <div class="intro-card-txt">
                    <h4>Travel Insurance</h4>
                    <p>Comprehensive coverage so you can explore with complete peace of mind.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAIN SERVICES -->
<section class="services-section">
    <div class="section-header">
        <div class="section-badge">🗺️ Our Services</div>
        <h2 class="section-title">Everything You Need to Travel in Style</h2>
        <p class="section-subtitle" style="margin:14px auto 0;">Tailored packages for every kind of traveler and every kind of adventure.</p>
    </div>
    <div class="services-grid">
        @php
        $services = [
            ['icon'=>'💎','badge'=>'Signature','title'=>'Luxury Escapes','desc'=>'Five-star experiences with private transfers, butler service, and VIP access to exclusive destinations and events worldwide.','tags'=>['5-Star Hotels','Private Jets','VIP Access'],'featured'=>false],
            ['icon'=>'💍','badge'=>'Most Popular','title'=>'Honeymoon Packages','desc'=>'Romantic retreats designed for newlyweds — from overwater bungalows in the Maldives to sunset dinners in Santorini.','tags'=>['Romantic','Customized','All-Inclusive'],'featured'=>true],
            ['icon'=>'🧗','badge'=>'Thrill Seekers','title'=>'Adventure Tours','desc'=>'Trek Himalayan peaks, dive the Great Barrier Reef, or safari through Kenya — for those who crave the extraordinary.','tags'=>['Trekking','Safari','Diving'],'featured'=>false],
            ['icon'=>'👨‍👩‍👧‍👦','badge'=>'Family','title'=>'Family Vacations','desc'=>'Child-friendly itineraries with kid-safe activities, family suites, and experiences that delight every generation.','tags'=>['Family Friendly','All Ages','Flexible'],'featured'=>false],
            ['icon'=>'🎒','badge'=>'Corporate','title'=>'Group Travel','desc'=>'Seamless group coordination for corporate retreats, incentive trips, destination weddings, and reunion getaways.','tags'=>['Group Rates','Coordination','Events'],'featured'=>false],
            ['icon'=>'🗺️','badge'=>'Bespoke','title'=>'Custom Itineraries','desc'=>'Tell us your dream — we design a 100% bespoke journey from scratch, matching every detail to your unique desires.','tags'=>['Personalized','Flexible','Any Budget'],'featured'=>false],
        ];
        @endphp
        @foreach($services as $svc)
        <div class="service-card {{ $svc['featured'] ? 'featured' : '' }}">
            <div class="svc-badge">{{ $svc['badge'] }}</div>
            <div class="service-icon">{{ $svc['icon'] }}</div>
            <h3>{{ $svc['title'] }}</h3>
            <p>{{ $svc['desc'] }}</p>
            <div class="service-tags">
                @foreach($svc['tags'] as $tag)
                <span class="service-tag">{{ $tag }}</span>
                @endforeach
            </div>
            <a href="{{ route('travel.contact') }}" class="service-link">Enquire Now →</a>
        </div>
        @endforeach
    </div>
</section>

<!-- PROCESS -->
<section class="process-section">
    <div class="section-header">
        <div class="section-badge">🔄 How It Works</div>
        <h2 class="section-title">Your Journey in 4 Simple Steps</h2>
        <p class="section-subtitle" style="margin:14px auto 0;">From consultation to departure — we make it effortless.</p>
    </div>
    <div class="process-steps">
        <div class="step">
            <div class="step-num">1</div>
            <h4>Tell Us Your Dream</h4>
            <p>Share your travel wishes, dates, budget, and any special requirements with our experts.</p>
        </div>
        <div class="step">
            <div class="step-num">2</div>
            <h4>We Design Your Trip</h4>
            <p>Our designers craft a personalized itinerary with the perfect balance of adventure and comfort.</p>
        </div>
        <div class="step">
            <div class="step-num">3</div>
            <h4>Approve & Confirm</h4>
            <p>Review your itinerary, request tweaks if needed, then confirm and make your secure booking.</p>
        </div>
        <div class="step">
            <div class="step-num">4</div>
            <h4>Travel & Enjoy!</h4>
            <p>Pack your bags! We handle everything else. Our team is available 24/7 throughout your trip.</p>
        </div>
    </div>
</section>

<!-- PRICING -->
<section class="pricing-section">
    <div class="section-header">
        <div class="section-badge">💰 Pricing Plans</div>
        <h2 class="section-title">Transparent, Flexible Packages</h2>
        <p class="section-subtitle" style="margin:14px auto 0;">Choose a plan that fits your travel style and budget.</p>
    </div>
    <div class="pricing-grid">
        <!-- Explorer -->
        <div class="price-card">
            <div class="price-tier">Explorer</div>
            <h3>Essentials Pack</h3>
            <div class="price-amount">$999</div>
            <div class="price-period">per person / week</div>
            <ul class="price-features">
                <li>Economy Class Flights</li>
                <li>3-Star Hotels</li>
                <li>Standard Transfers</li>
                <li>Travel Insurance</li>
                <li>Digital Itinerary</li>
            </ul>
            <a href="{{ route('travel.contact') }}" class="btn-price" id="plan-explorer">Get Started</a>
        </div>
        <!-- Premium -->
        <div class="price-card popular">
            <div class="popular-badge">Best Value</div>
            <div class="price-tier">Premium</div>
            <h3>Signature Pack</h3>
            <div class="price-amount">$2,499</div>
            <div class="price-period">per person / week</div>
            <ul class="price-features">
                <li>Business Class Flights</li>
                <li>5-Star Resort/Hotel</li>
                <li>Private Transfers</li>
                <li>Comprehensive Insurance</li>
                <li>Personal Travel Guide</li>
                <li>24/7 Concierge</li>
            </ul>
            <a href="{{ route('travel.contact') }}" class="btn-price-outline" id="plan-premium">Book Now</a>
        </div>
        <!-- Ultra Luxury -->
        <div class="price-card">
            <div class="price-tier">Ultra Luxury</div>
            <h3>Elite Pack</h3>
            <div class="price-amount">$5,999</div>
            <div class="price-period">per person / week</div>
            <ul class="price-features">
                <li>First Class / Private Jet</li>
                <li>Private Villas & Suites</li>
                <li>Yacht & Helicopter Tours</li>
                <li>Full Concierge Service</li>
                <li>Michelin-Star Dining</li>
                <li>Exclusive VIP Access</li>
            </ul>
            <a href="{{ route('travel.contact') }}" class="btn-price" id="plan-elite">Enquire Now</a>
        </div>
    </div>
</section>

</x-layouts.travel>
