<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $description ?? 'WanderLux Travel Agency — Curated luxury travel experiences worldwide. Explore dream destinations with expert guidance.' }}">
    <title>{{ $title ?? 'WanderLux' }} | WanderLux Travel Agency</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* ===== GLOBAL RESET & BASE ===== */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --navy:      #0f1e3c;
            --navy-mid:  #162547;
            --teal:      #0aa3a3;
            --teal-lt:   #12c8c8;
            --gold:      #f5b731;
            --gold-lt:   #ffd166;
            --cream:     #fdf9f3;
            --slate:     #4a5568;
            --white:     #ffffff;
            --radius-lg: 20px;
            --radius-xl: 32px;
            --shadow-lg: 0 20px 60px rgba(0,0,0,.15);
            --trans:     0.3s cubic-bezier(.4,0,.2,1);
        }
        html { scroll-behavior: smooth; }
        body { font-family: 'Outfit', sans-serif; background: var(--cream); color: var(--navy); overflow-x: hidden; }

        /* ===== NAVBAR ===== */
        .navbar {
            position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
            display: flex; align-items: center; justify-content: space-between;
            padding: 0 5%;
            height: 72px;
            background: rgba(15,30,60,.85);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(255,255,255,.08);
            transition: background var(--trans), box-shadow var(--trans);
        }
        .navbar.scrolled {
            background: rgba(15,30,60,.97);
            box-shadow: 0 4px 30px rgba(0,0,0,.3);
        }
        .nav-logo {
            display: flex; align-items: center; gap: 10px;
            text-decoration: none;
        }
        .nav-logo-icon {
            width: 40px; height: 40px;
            background: linear-gradient(135deg, var(--teal), var(--teal-lt));
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 20px;
        }
        .nav-logo-text { font-family: 'Playfair Display', serif; font-size: 1.5rem; font-weight: 700; color: var(--white); letter-spacing: -.5px; }
        .nav-logo-text span { color: var(--gold); }
        .nav-links { display: flex; align-items: center; gap: 8px; }
        .nav-link {
            text-decoration: none;
            color: rgba(255,255,255,.8);
            font-size: .95rem; font-weight: 500;
            padding: 8px 18px;
            border-radius: 50px;
            transition: all var(--trans);
            position: relative;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--white);
            background: rgba(255,255,255,.1);
        }
        .nav-link.active::after {
            content: '';
            position: absolute; bottom: 4px; left: 50%; transform: translateX(-50%);
            width: 4px; height: 4px;
            background: var(--teal-lt);
            border-radius: 50%;
        }
        .nav-cta {
            background: linear-gradient(135deg, var(--teal), var(--teal-lt));
            color: var(--white) !important;
            padding: 9px 22px !important;
            font-weight: 600 !important;
            box-shadow: 0 4px 20px rgba(10,163,163,.4);
        }
        .nav-cta:hover {
            background: linear-gradient(135deg, var(--teal-lt), var(--teal)) !important;
            box-shadow: 0 6px 28px rgba(10,163,163,.55) !important;
            transform: translateY(-1px);
        }
        .hamburger { display: none; flex-direction: column; gap: 5px; cursor: pointer; padding: 5px; }
        .hamburger span { display: block; width: 24px; height: 2px; background: var(--white); border-radius: 2px; transition: var(--trans); }

        /* ===== FOOTER ===== */
        footer {
            background: var(--navy);
            color: rgba(255,255,255,.7);
            padding: 60px 5% 30px;
        }
        .footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 48px; margin-bottom: 48px; }
        .footer-brand p { font-size: .9rem; line-height: 1.7; margin-top: 14px; color: rgba(255,255,255,.55); }
        .footer-social { display: flex; gap: 12px; margin-top: 20px; }
        .footer-social a {
            width: 38px; height: 38px;
            border-radius: 10px;
            background: rgba(255,255,255,.08);
            display: flex; align-items: center; justify-content: center;
            text-decoration: none; font-size: 1rem;
            color: rgba(255,255,255,.7);
            transition: all var(--trans);
        }
        .footer-social a:hover { background: var(--teal); color: var(--white); transform: translateY(-2px); }
        .footer-col h4 { color: var(--white); font-size: 1rem; font-weight: 600; margin-bottom: 18px; }
        .footer-col ul { list-style: none; }
        .footer-col ul li { margin-bottom: 10px; }
        .footer-col ul li a { color: rgba(255,255,255,.55); text-decoration: none; font-size: .9rem; transition: color var(--trans); }
        .footer-col ul li a:hover { color: var(--teal-lt); }
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,.08);
            padding-top: 24px;
            display: flex; align-items: center; justify-content: space-between;
            font-size: .85rem; color: rgba(255,255,255,.4);
        }

        /* ===== UTILITY ===== */
        .section-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: linear-gradient(135deg, rgba(10,163,163,.12), rgba(18,200,200,.08));
            border: 1px solid rgba(10,163,163,.25);
            color: var(--teal);
            font-size: .82rem; font-weight: 600; letter-spacing: .8px; text-transform: uppercase;
            padding: 6px 16px; border-radius: 50px;
            margin-bottom: 16px;
        }
        .section-title { font-family: 'Playfair Display', serif; font-size: clamp(2rem, 4vw, 3rem); font-weight: 700; color: var(--navy); line-height: 1.2; }
        .section-subtitle { font-size: 1.05rem; color: var(--slate); line-height: 1.7; max-width: 560px; }
        .btn-primary {
            display: inline-flex; align-items: center; gap: 10px;
            background: linear-gradient(135deg, var(--teal), var(--teal-lt));
            color: var(--white);
            font-family: 'Outfit', sans-serif; font-size: 1rem; font-weight: 600;
            padding: 14px 32px; border-radius: 50px; text-decoration: none; border: none; cursor: pointer;
            box-shadow: 0 8px 30px rgba(10,163,163,.4);
            transition: all var(--trans);
        }
        .btn-primary:hover { transform: translateY(-3px); box-shadow: 0 14px 40px rgba(10,163,163,.55); }
        .btn-outline {
            display: inline-flex; align-items: center; gap: 10px;
            background: transparent;
            color: var(--navy);
            font-family: 'Outfit', sans-serif; font-size: 1rem; font-weight: 600;
            padding: 13px 32px; border-radius: 50px; text-decoration: none;
            border: 2px solid rgba(15,30,60,.2); cursor: pointer;
            transition: all var(--trans);
        }
        .btn-outline:hover { border-color: var(--teal); color: var(--teal); transform: translateY(-2px); }
        main { padding-top: 72px; min-height: 80vh; }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .nav-links { display: none; flex-direction: column; position: absolute; top: 72px; left: 0; right: 0; background: rgba(15,30,60,.98); padding: 20px; gap: 4px; border-bottom: 1px solid rgba(255,255,255,.08); }
            .nav-links.open { display: flex; }
            .hamburger { display: flex; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 600px) {
            .footer-grid { grid-template-columns: 1fr; }
            .footer-bottom { flex-direction: column; gap: 8px; text-align: center; }
        }
    </style>
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar" id="mainNav">
    <a href="{{ route('travel.home') }}" class="nav-logo">
        <div class="nav-logo-icon">✈️</div>
        <div class="nav-logo-text">Wander<span>Lux</span></div>
    </a>

    <div class="nav-links" id="navLinks">
        <a href="{{ route('travel.home') }}" class="nav-link {{ request()->routeIs('travel.home') ? 'active' : '' }}" id="nav-home">Home</a>
        <a href="{{ route('travel.services') }}" class="nav-link {{ request()->routeIs('travel.services') ? 'active' : '' }}" id="nav-services">Services</a>
        <a href="{{ route('travel.contact') }}" class="nav-link nav-cta {{ request()->routeIs('travel.contact') ? 'active' : '' }}" id="nav-contact">Contact Us</a>
    </div>

    <div class="hamburger" id="hamburger" onclick="toggleMenu()" aria-label="Toggle menu">
        <span></span><span></span><span></span>
    </div>
</nav>

<!-- ===== MAIN CONTENT ===== -->
<main>
    {{ $slot }}
</main>

<!-- ===== FOOTER ===== -->
<footer>
    <div class="footer-grid">
        <div class="footer-brand">
            <a href="{{ route('travel.home') }}" class="nav-logo" style="text-decoration:none;">
                <div class="nav-logo-icon">✈️</div>
                <div class="nav-logo-text">Wander<span>Lux</span></div>
            </a>
            <p>Crafting unforgettable journeys since 2010. We turn your travel dreams into extraordinary realities with personalized luxury experiences.</p>
            <div class="footer-social">
                <a href="#" title="Facebook">📘</a>
                <a href="#" title="Instagram">📸</a>
                <a href="#" title="Twitter">🐦</a>
                <a href="#" title="YouTube">▶️</a>
            </div>
        </div>
        <div class="footer-col">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="{{ route('travel.home') }}">Home</a></li>
                <li><a href="{{ route('travel.services') }}">Services</a></li>
                <li><a href="{{ route('travel.contact') }}">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Destinations</h4>
            <ul>
                <li><a href="#">Maldives</a></li>
                <li><a href="#">Santorini</a></li>
                <li><a href="#">Bali</a></li>
                <li><a href="#">Tokyo</a></li>
                <li><a href="#">Paris</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Contact</h4>
            <ul>
                <li><a href="tel:+18001234567">📞 +1 800 123 4567</a></li>
                <li><a href="mailto:hello@wanderlux.com">✉️ hello@wanderlux.com</a></li>
                <li><a href="#">📍 123 Travel St, NYC</a></li>
                <li><a href="#">🕒 Mon–Fri, 9am–6pm</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <span>© {{ date('Y') }} WanderLux Travel Agency. All rights reserved.</span>
        <span>Crafted with ❤️ for travelers worldwide</span>
    </div>
</footer>

<script>
    // Navbar scroll effect
    const nav = document.getElementById('mainNav');
    window.addEventListener('scroll', () => {
        nav.classList.toggle('scrolled', window.scrollY > 30);
    });

    // Mobile menu toggle
    function toggleMenu() {
        document.getElementById('navLinks').classList.toggle('open');
    }
</script>
</body>
</html>
