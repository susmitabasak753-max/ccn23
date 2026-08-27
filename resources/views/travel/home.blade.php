<x-layouts.travel title="Home" description="WanderLux — Luxury travel experiences crafted just for you. Explore breathtaking destinations worldwide.">

<style>
/* ===== HERO ===== */
.hero {
    position: relative;
    height: 100vh; min-height: 600px;
    display: flex; align-items: center;
    overflow: hidden;
}
.hero-bg {
    position: absolute; inset: 0;
    background: url('/images/travel_hero.jpg') center/cover no-repeat;
    transform: scale(1.05);
    animation: heroZoom 12s ease-in-out infinite alternate;
}
@keyframes heroZoom { from { transform: scale(1.05); } to { transform: scale(1.12); } }
.hero-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(135deg, rgba(15,30,60,.75) 0%, rgba(15,30,60,.4) 60%, transparent 100%);
}
.hero-content {
    position: relative; z-index: 2;
    max-width: 1200px; margin: 0 auto;
    padding: 0 5%;
    animation: fadeInUp .9s ease both;
}
@keyframes fadeInUp { from { opacity:0; transform:translateY(40px); } to { opacity:1; transform:none; } }
.hero-badge {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(255,255,255,.15);
    border: 1px solid rgba(255,255,255,.25);
    backdrop-filter: blur(8px);
    color: #fff; font-size: .8rem; font-weight: 600; letter-spacing: 1px; text-transform: uppercase;
    padding: 7px 18px; border-radius: 50px; margin-bottom: 24px;
}
.hero-badge span { width: 8px; height: 8px; background: var(--gold); border-radius: 50%; animation: pulse 1.5s infinite; }
@keyframes pulse { 0%,100% { opacity:1; transform:scale(1); } 50% { opacity:.5; transform:scale(.8); } }
.hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2.8rem, 6vw, 5rem);
    font-weight: 700; color: #fff; line-height: 1.1; margin-bottom: 24px;
}
.hero h1 em { color: var(--gold); font-style: italic; }
.hero p { font-size: clamp(1rem, 2vw, 1.2rem); color: rgba(255,255,255,.85); max-width: 540px; line-height: 1.7; margin-bottom: 40px; }
.hero-actions { display: flex; gap: 16px; flex-wrap: wrap; }
.btn-hero-primary {
    display: inline-flex; align-items: center; gap: 10px;
    background: linear-gradient(135deg, var(--teal), var(--teal-lt));
    color: #fff; font-size: 1.05rem; font-weight: 600;
    padding: 16px 36px; border-radius: 50px; text-decoration: none;
    box-shadow: 0 10px 35px rgba(10,163,163,.5);
    transition: all .3s ease;
}
.btn-hero-primary:hover { transform: translateY(-3px); box-shadow: 0 16px 45px rgba(10,163,163,.65); }
.btn-hero-outline {
    display: inline-flex; align-items: center; gap: 10px;
    background: rgba(255,255,255,.12); border: 2px solid rgba(255,255,255,.35);
    backdrop-filter: blur(8px);
    color: #fff; font-size: 1.05rem; font-weight: 600;
    padding: 14px 36px; border-radius: 50px; text-decoration: none;
    transition: all .3s ease;
}
.btn-hero-outline:hover { background: rgba(255,255,255,.22); transform: translateY(-3px); }
.hero-scroll {
    position: absolute; bottom: 36px; left: 50%; transform: translateX(-50%);
    z-index: 2; display: flex; flex-direction: column; align-items: center; gap: 8px;
    color: rgba(255,255,255,.6); font-size: .78rem; letter-spacing: 1px; text-transform: uppercase;
    animation: bounce 2s infinite;
}
@keyframes bounce { 0%,100% { transform: translateX(-50%) translateY(0); } 50% { transform: translateX(-50%) translateY(8px); } }
.hero-scroll::after {
    content: '↓'; font-size: 1.2rem; color: rgba(255,255,255,.5);
}

/* ===== SEARCH BAR ===== */
.search-section {
    background: #fff;
    padding: 0;
    position: relative; z-index: 10;
    margin-top: -40px;
}
.search-card {
    max-width: 960px; margin: 0 auto;
    background: #fff;
    border-radius: var(--radius-xl);
    box-shadow: 0 20px 80px rgba(0,0,0,.14);
    padding: 32px 36px;
    display: grid; grid-template-columns: 1fr 1fr 1fr auto;
    gap: 20px; align-items: end;
}
.search-field label { display: block; font-size: .78rem; font-weight: 600; color: var(--slate); letter-spacing: .6px; text-transform: uppercase; margin-bottom: 8px; }
.search-field input, .search-field select {
    width: 100%; padding: 12px 16px;
    border: 2px solid #e8eaf0; border-radius: 12px;
    font-family: 'Outfit', sans-serif; font-size: .95rem; color: var(--navy);
    background: #f8f9fc;
    transition: border-color .25s;
    outline: none;
}
.search-field input:focus, .search-field select:focus { border-color: var(--teal); background: #fff; }
.search-btn {
    background: linear-gradient(135deg, var(--teal), var(--teal-lt));
    color: #fff; border: none; cursor: pointer;
    font-family: 'Outfit', sans-serif; font-size: 1rem; font-weight: 600;
    padding: 13px 28px; border-radius: 12px;
    box-shadow: 0 6px 24px rgba(10,163,163,.4);
    transition: all .3s; white-space: nowrap;
}
.search-btn:hover { transform: translateY(-2px); box-shadow: 0 10px 32px rgba(10,163,163,.55); }

/* ===== STATS ===== */
.stats-section { background: linear-gradient(135deg, var(--navy), var(--navy-mid)); padding: 60px 5%; }
.stats-grid { max-width: 1000px; margin: 0 auto; display: grid; grid-template-columns: repeat(4,1fr); gap: 40px; text-align: center; }
.stat-item h3 { font-family: 'Playfair Display', serif; font-size: 2.8rem; font-weight: 700; color: var(--gold); }
.stat-item p { font-size: .9rem; color: rgba(255,255,255,.65); margin-top: 6px; letter-spacing: .5px; }

/* ===== DESTINATIONS ===== */
.destinations-section { padding: 100px 5%; background: var(--cream); }
.section-header { text-align: center; margin-bottom: 60px; }
.section-header .section-subtitle { margin: 14px auto 0; }
.destinations-grid { max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(3,1fr); gap: 28px; }
.dest-card {
    border-radius: var(--radius-lg); overflow: hidden;
    box-shadow: 0 8px 40px rgba(0,0,0,.1);
    background: #fff; cursor: pointer;
    transition: all .35s ease;
    position: relative;
}
.dest-card:hover { transform: translateY(-10px); box-shadow: 0 24px 60px rgba(0,0,0,.18); }
.dest-img {
    height: 260px; position: relative; overflow: hidden;
    background: linear-gradient(135deg, var(--navy), var(--teal));
    display: flex; align-items: center; justify-content: center;
    font-size: 80px;
}
.dest-img::after {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,.6) 0%, transparent 60%);
}
.dest-flag { position: absolute; bottom: 16px; left: 16px; z-index: 1; font-size: 2rem; }
.dest-rating {
    position: absolute; top: 16px; right: 16px; z-index: 1;
    background: rgba(255,255,255,.9); backdrop-filter: blur(6px);
    color: var(--navy); font-size: .8rem; font-weight: 700;
    padding: 5px 12px; border-radius: 50px;
}
.dest-body { padding: 24px; }
.dest-body h3 { font-size: 1.3rem; font-weight: 700; color: var(--navy); margin-bottom: 6px; }
.dest-body p { font-size: .9rem; color: var(--slate); line-height: 1.6; margin-bottom: 16px; }
.dest-footer { display: flex; align-items: center; justify-content: space-between; }
.dest-price { font-size: 1.3rem; font-weight: 800; color: var(--teal); }
.dest-price small { font-size: .75rem; color: var(--slate); font-weight: 400; }
.dest-link {
    background: linear-gradient(135deg, var(--teal), var(--teal-lt));
    color: #fff; font-size: .85rem; font-weight: 600;
    padding: 8px 20px; border-radius: 50px; text-decoration: none;
    transition: all .25s;
}
.dest-link:hover { transform: scale(1.05); }

/* ===== WHY US ===== */
.why-section { padding: 100px 5%; background: #fff; }
.why-inner { max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
.why-visual {
    position: relative; height: 480px;
    background: linear-gradient(135deg, rgba(10,163,163,.08), rgba(245,183,49,.06));
    border-radius: var(--radius-xl); border: 1px solid rgba(10,163,163,.12);
    display: flex; align-items: center; justify-content: center;
    font-size: 8rem;
}
.why-float {
    position: absolute;
    background: #fff; border-radius: 16px;
    box-shadow: 0 10px 40px rgba(0,0,0,.12);
    padding: 16px 20px;
    display: flex; align-items: center; gap: 12px;
    animation: float 4s ease-in-out infinite;
}
@keyframes float { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
.why-float.f1 { top: 30px; left: -20px; animation-delay: 0s; }
.why-float.f2 { bottom: 60px; right: -20px; animation-delay: 2s; }
.why-float .icon { font-size: 1.6rem; }
.why-float .txt strong { display: block; font-size: .95rem; font-weight: 700; color: var(--navy); }
.why-float .txt span { font-size: .8rem; color: var(--slate); }
.why-content h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 700; color: var(--navy); margin-bottom: 20px; }
.why-content p { color: var(--slate); line-height: 1.7; margin-bottom: 36px; }
.why-features { display: flex; flex-direction: column; gap: 20px; }
.why-feat { display: flex; gap: 16px; align-items: flex-start; }
.why-feat-icon {
    width: 50px; height: 50px; border-radius: 14px; flex-shrink: 0;
    background: linear-gradient(135deg, rgba(10,163,163,.12), rgba(18,200,200,.06));
    display: flex; align-items: center; justify-content: center; font-size: 1.4rem;
}
.why-feat-txt h4 { font-size: 1rem; font-weight: 700; color: var(--navy); margin-bottom: 4px; }
.why-feat-txt p { font-size: .88rem; color: var(--slate); line-height: 1.5; }

/* ===== CTA BANNER ===== */
.cta-section {
    margin: 0 5% 80px; border-radius: var(--radius-xl);
    background: linear-gradient(135deg, var(--navy) 0%, #1a3a6e 50%, var(--navy-mid) 100%);
    padding: 80px 60px;
    text-align: center; position: relative; overflow: hidden;
}
.cta-section::before {
    content: '✈️'; position: absolute; font-size: 200px; opacity: .04;
    top: 50%; left: 50%; transform: translate(-50%,-50%);
}
.cta-section h2 { font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 700; color: #fff; margin-bottom: 16px; }
.cta-section p { color: rgba(255,255,255,.75); font-size: 1.05rem; margin-bottom: 36px; }
.cta-actions { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
.btn-cta {
    display: inline-flex; align-items: center; gap: 10px;
    background: linear-gradient(135deg, var(--gold), var(--gold-lt));
    color: var(--navy); font-weight: 700; font-size: 1.05rem;
    padding: 16px 36px; border-radius: 50px; text-decoration: none;
    box-shadow: 0 8px 30px rgba(245,183,49,.4);
    transition: all .3s;
}
.btn-cta:hover { transform: translateY(-3px); box-shadow: 0 14px 40px rgba(245,183,49,.55); }

@media (max-width: 1024px) {
    .search-card { grid-template-columns: 1fr 1fr; }
    .destinations-grid { grid-template-columns: 1fr 1fr; }
    .stats-grid { grid-template-columns: repeat(2,1fr); gap: 30px; }
    .why-inner { grid-template-columns: 1fr; gap: 40px; }
    .why-visual { height: 300px; }
}
@media (max-width: 640px) {
    .search-card { grid-template-columns: 1fr; padding: 24px; }
    .destinations-grid { grid-template-columns: 1fr; }
    .cta-section { padding: 50px 24px; }
}
</style>

<!-- HERO -->
<section class="hero" id="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="hero-badge"><span></span> Premium Travel Experiences</div>
        <h1>Discover Your<br><em>Dream Destination</em></h1>
        <p>Curated luxury journeys to the world's most breathtaking places. Let us craft a perfect adventure tailored just for you.</p>
        <div class="hero-actions">
            <a href="{{ route('travel.services') }}" class="btn-hero-primary">🗺️ Explore Services</a>
            <a href="{{ route('travel.contact') }}" class="btn-hero-outline">📞 Talk to an Expert</a>
        </div>
    </div>
    <div class="hero-scroll">Scroll</div>
</section>

<!-- SEARCH BAR -->
<section class="search-section">
    <div style="max-width:1200px;margin:0 auto;padding:0 5%;transform:translateY(-50%)">
        <div class="search-card">
            <div class="search-field">
                <label>🌍 Destination</label>
                <input type="text" placeholder="Where to go?" id="dest-input">
            </div>
            <div class="search-field">
                <label>📅 Check-In</label>
                <input type="date" id="checkin-input">
            </div>
            <div class="search-field">
                <label>👥 Travelers</label>
                <select id="travelers-select">
                    <option>1 Traveler</option>
                    <option>2 Travelers</option>
                    <option>3–4 Travelers</option>
                    <option>5+ Travelers</option>
                </select>
            </div>
            <button class="search-btn" onclick="handleSearch()" id="search-btn">🔍 Search</button>
        </div>
    </div>
</section>

<!-- STATS -->
<section class="stats-section">
    <div class="stats-grid">
        <div class="stat-item">
            <h3 data-count="12000">0</h3>
            <p>Happy Travelers</p>
        </div>
        <div class="stat-item">
            <h3 data-count="85">0</h3>
            <p>Countries Covered</p>
        </div>
        <div class="stat-item">
            <h3 data-count="340">0</h3>
            <p>Tour Packages</p>
        </div>
        <div class="stat-item">
            <h3 data-count="15">0</h3>
            <p>Years of Excellence</p>
        </div>
    </div>
</section>

<!-- DESTINATIONS -->
<section class="destinations-section" id="destinations">
    <div class="section-header">
        <div class="section-badge">✈️ Popular Destinations</div>
        <h2 class="section-title">Handpicked Dream Escapes</h2>
        <p class="section-subtitle">From tropical shores to ancient cities — find the journey that speaks to your soul.</p>
    </div>
    <div class="destinations-grid">
        @php
        $destinations = [
            ['emoji'=>'🏝️','flag'=>'🇲🇻','name'=>'Maldives','desc'=>'Crystal lagoons, overwater villas, and pristine white-sand beaches in paradise.','price'=>'2,499','rating'=>'⭐ 4.9'],
            ['emoji'=>'🏛️','flag'=>'🇬🇷','name'=>'Santorini, Greece','desc'=>'Iconic blue-domed churches, dramatic caldera views, and legendary sunsets.','price'=>'1,899','rating'=>'⭐ 4.8'],
            ['emoji'=>'🌸','flag'=>'🇯🇵','name'=>'Kyoto, Japan','desc'=>'Ancient temples, blooming cherry blossoms, and timeless Japanese culture.','price'=>'2,199','rating'=>'⭐ 4.9'],
            ['emoji'=>'🌿','flag'=>'🇮🇩','name'=>'Bali, Indonesia','desc'=>'Terraced rice fields, sacred temples, vibrant arts, and healing wellness retreats.','price'=>'1,299','rating'=>'⭐ 4.8'],
            ['emoji'=>'🗼','flag'=>'🇫🇷','name'=>'Paris, France','desc'=>'The city of love — world-class cuisine, art, fashion, and the iconic Eiffel Tower.','price'=>'1,699','rating'=>'⭐ 4.7'],
            ['emoji'=>'🦁','flag'=>'🇰🇪','name'=>'Maasai Mara, Kenya','desc'=>'Witness the spectacular Great Migration on an unforgettable African safari.','price'=>'3,299','rating'=>'⭐ 5.0'],
        ];
        @endphp
        @foreach($destinations as $d)
        <div class="dest-card">
            <div class="dest-img">
                {{ $d['emoji'] }}
                <div class="dest-flag">{{ $d['flag'] }}</div>
                <div class="dest-rating">{{ $d['rating'] }}</div>
            </div>
            <div class="dest-body">
                <h3>{{ $d['name'] }}</h3>
                <p>{{ $d['desc'] }}</p>
                <div class="dest-footer">
                    <div class="dest-price">From ${{ $d['price'] }} <small>/ person</small></div>
                    <a href="{{ route('travel.contact') }}" class="dest-link">Book Now →</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- WHY US -->
<section class="why-section" id="why-us">
    <div class="why-inner">
        <div class="why-visual">
            🌐
            <div class="why-float f1">
                <div class="icon">🏆</div>
                <div class="txt">
                    <strong>Award Winning</strong>
                    <span>Best Luxury Agency 2024</span>
                </div>
            </div>
            <div class="why-float f2">
                <div class="icon">⭐</div>
                <div class="txt">
                    <strong>4.9 / 5 Rating</strong>
                    <span>From 12,000+ reviews</span>
                </div>
            </div>
        </div>
        <div class="why-content">
            <div class="section-badge">💎 Why WanderLux</div>
            <h2>Travel Smarter,<br>Live Richer</h2>
            <p>We go beyond booking flights and hotels. Our expert travel designers create bespoke itineraries that match your lifestyle, budget, and dreams — so every moment becomes a memory.</p>
            <div class="why-features">
                <div class="why-feat">
                    <div class="why-feat-icon">🔒</div>
                    <div class="why-feat-txt">
                        <h4>100% Secure Booking</h4>
                        <p>SSL-secured payments and full money-back guarantee for peace of mind.</p>
                    </div>
                </div>
                <div class="why-feat">
                    <div class="why-feat-icon">🎯</div>
                    <div class="why-feat-txt">
                        <h4>Personalized Itineraries</h4>
                        <p>Every trip crafted uniquely for you — no cookie-cutter packages.</p>
                    </div>
                </div>
                <div class="why-feat">
                    <div class="why-feat-icon">📞</div>
                    <div class="why-feat-txt">
                        <h4>24/7 Concierge Support</h4>
                        <p>Our team is always available, wherever you are in the world.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA BANNER -->
<section class="cta-section">
    <h2>Ready for Your Next Adventure?</h2>
    <p>Speak with one of our travel experts today and turn your dream into reality.</p>
    <div class="cta-actions">
        <a href="{{ route('travel.contact') }}" class="btn-cta">✈️ Plan My Trip</a>
        <a href="{{ route('travel.services') }}" class="btn-hero-outline" style="color:#fff;border-color:rgba(255,255,255,.35);">View All Services →</a>
    </div>
</section>

<script>
// Animated counters
function animateCounters() {
    document.querySelectorAll('[data-count]').forEach(el => {
        const target = +el.dataset.count;
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;
        const timer = setInterval(() => {
            current += step;
            if (current >= target) { current = target; clearInterval(timer); }
            el.textContent = target >= 1000
                ? Math.floor(current).toLocaleString() + '+'
                : Math.floor(current) + '+';
        }, 16);
    });
}
const statsObs = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) { animateCounters(); statsObs.disconnect(); } });
}, { threshold: 0.3 });
statsObs.observe(document.querySelector('.stats-section'));

function handleSearch() {
    const dest = document.getElementById('dest-input').value.trim();
    if (!dest) { document.getElementById('dest-input').focus(); return; }
    window.location.href = '{{ route("travel.contact") }}?destination=' + encodeURIComponent(dest);
}
</script>

</x-layouts.travel>
