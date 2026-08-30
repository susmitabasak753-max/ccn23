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
    
    <script>
        // Inline theme initialization to avoid flash of incorrect theme
        if (localStorage.getItem('wanderlux_theme') === 'dark' || (!('wanderlux_theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

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
        body { font-family: 'Outfit', sans-serif; background: var(--cream); color: var(--navy); overflow-x: hidden; transition: background 0.3s ease, color 0.3s ease; }

        /* ===== NAVBAR ===== */
        .navbar {
            position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
            display: flex; align-items: center; justify-content: space-between;
            padding: 0 5%;
            height: 76px;
            background: rgba(15,30,60,.88);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255,255,255,.09);
            transition: background var(--trans), box-shadow var(--trans), height var(--trans);
        }
        .navbar.scrolled {
            height: 68px;
            background: rgba(15,30,60,.98);
            box-shadow: 0 4px 30px rgba(0,0,0,.35);
        }
        .nav-logo {
            display: flex; align-items: center; gap: 10px;
            text-decoration: none;
            flex-shrink: 0;
        }
        .nav-logo-icon {
            width: 42px; height: 42px;
            background: linear-gradient(135deg, var(--teal), var(--teal-lt));
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 22px;
            box-shadow: 0 4px 16px rgba(10,163,163,.3);
            transition: transform var(--trans);
        }
        .nav-logo:hover .nav-logo-icon {
            transform: rotate(-6deg) scale(1.05);
        }
        .nav-logo-text { font-family: 'Playfair Display', serif; font-size: 1.55rem; font-weight: 700; color: var(--white); letter-spacing: -.5px; }
        .nav-logo-text span { color: var(--gold); }

        /* Nav links group */
        .nav-links { display: flex; align-items: center; gap: 4px; }
        .nav-item { position: relative; }

        .nav-link {
            text-decoration: none;
            color: rgba(255,255,255,.82);
            font-size: .95rem; font-weight: 500;
            padding: 8px 16px;
            border-radius: 50px;
            transition: all var(--trans);
            position: relative;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--white);
            background: rgba(255,255,255,.1);
        }
        .nav-link.active::after {
            content: '';
            position: absolute; bottom: 3px; left: 50%; transform: translateX(-50%);
            width: 5px; height: 5px;
            background: var(--teal-lt);
            border-radius: 50%;
            box-shadow: 0 0 8px var(--teal-lt);
        }

        .dropdown-chevron {
            transition: transform var(--trans);
            opacity: .7;
        }
        .nav-item-dropdown:hover .dropdown-chevron,
        .nav-item-dropdown.active .dropdown-chevron {
            transform: rotate(180deg);
            opacity: 1;
        }

        /* ===== DROPDOWN MENUS (Desktop) ===== */
        .dropdown-menu {
            position: absolute;
            top: calc(100% + 10px);
            left: 50%;
            transform: translateX(-50%) translateY(10px);
            min-width: 290px;
            background: rgba(15, 30, 60, 0.97);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 18px;
            padding: 10px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.45);
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: all 0.25s cubic-bezier(.4,0,.2,1);
            z-index: 1001;
        }
        .dropdown-menu::before {
            content: '';
            position: absolute;
            top: -6px;
            left: 50%;
            transform: translateX(-50%) rotate(45deg);
            width: 12px;
            height: 12px;
            background: rgba(15, 30, 60, 0.97);
            border-left: 1px solid rgba(255, 255, 255, 0.12);
            border-top: 1px solid rgba(255, 255, 255, 0.12);
        }
        .nav-item-dropdown:hover .dropdown-menu,
        .nav-item-dropdown:focus-within .dropdown-menu {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
            transform: translateX(-50%) translateY(0);
        }

        .dropdown-header {
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: rgba(255,255,255,.45);
            padding: 8px 14px 6px;
        }
        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 14px;
            border-radius: 12px;
            text-decoration: none;
            color: rgba(255,255,255,.85);
            transition: all var(--trans);
        }
        .dropdown-item:hover {
            background: rgba(255,255,255,.1);
            color: var(--white);
            transform: translateX(4px);
        }
        .dropdown-item-icon {
            font-size: 1.25rem;
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background: rgba(255,255,255,.07);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: background var(--trans);
        }
        .dropdown-item:hover .dropdown-item-icon {
            background: rgba(10,163,163,.25);
        }
        .dropdown-item-info {
            display: flex;
            flex-direction: column;
        }
        .dropdown-item-info strong {
            font-size: .9rem;
            font-weight: 600;
            color: var(--white);
        }
        .dropdown-item-info small {
            font-size: .75rem;
            color: rgba(255,255,255,.55);
            margin-top: 1px;
        }

        /* Hotline Pill in Navbar */
        .nav-hotline {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 7px 14px;
            border-radius: 50px;
            background: rgba(255,255,255,.06);
            border: 1px solid rgba(255,255,255,.12);
            color: rgba(255,255,255,.85);
            text-decoration: none;
            font-size: .85rem;
            font-weight: 600;
            transition: all var(--trans);
            margin-left: 6px;
        }
        .nav-hotline:hover {
            background: rgba(255,255,255,.12);
            color: var(--gold);
            border-color: rgba(245,183,49,.4);
        }
        .hotline-icon {
            font-size: .95rem;
        }

        .nav-cta {
            background: linear-gradient(135deg, var(--teal), var(--teal-lt));
            color: var(--white) !important;
            padding: 9px 22px !important;
            font-weight: 600 !important;
            box-shadow: 0 4px 20px rgba(10,163,163,.4);
            margin-left: 6px;
        }
        .nav-cta:hover {
            background: linear-gradient(135deg, var(--teal-lt), var(--teal)) !important;
            box-shadow: 0 6px 28px rgba(10,163,163,.55) !important;
            transform: translateY(-1px);
        }

        /* ===== THEME TOGGLE SWITCH ===== */
        .theme-toggle-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid rgba(255,255,255,.2);
            background: rgba(255,255,255,.1);
            backdrop-filter: blur(8px);
            color: #fff;
            cursor: pointer;
            font-size: 1.1rem;
            transition: all var(--trans);
            outline: none;
            margin-left: 6px;
            flex-shrink: 0;
        }
        .theme-toggle-btn:hover {
            background: rgba(255,255,255,.22);
            transform: scale(1.08) rotate(15deg);
            border-color: var(--gold);
            box-shadow: 0 0 16px rgba(245,183,49,.3);
        }
        .theme-icon-sun { display: none; }
        .theme-icon-moon { display: inline-block; }

        html.dark .theme-icon-sun { display: inline-block; }
        html.dark .theme-icon-moon { display: none; }

        .nav-right-actions {
            display: none;
            align-items: center;
            gap: 10px;
        }

        .hamburger { display: none; flex-direction: column; gap: 5px; cursor: pointer; padding: 5px; }
        .hamburger span { display: block; width: 24px; height: 2px; background: var(--white); border-radius: 2px; transition: var(--trans); }

        /* ===== FOOTER ===== */
        footer {
            background: var(--navy);
            color: rgba(255,255,255,.7);
            padding: 60px 5% 30px;
            transition: background var(--trans);
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
        .section-title { font-family: 'Playfair Display', serif; font-size: clamp(2rem, 4vw, 3rem); font-weight: 700; color: var(--navy); line-height: 1.2; transition: color var(--trans); }
        .section-subtitle { font-size: 1.05rem; color: var(--slate); line-height: 1.7; max-width: 560px; transition: color var(--trans); }
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
        main { padding-top: 76px; min-height: 80vh; }

        /* ===== DARK MODE OVERRIDES ===== */
        html.dark {
            --cream:     #080e1a;
            --navy:      #f1f5f9;
            --navy-mid:  #cbd5e1;
            --slate:     #94a3b8;
            --white:     #ffffff;
        }

        html.dark body {
            background: #080e1a;
            color: #f1f5f9;
        }

        html.dark footer {
            background: #050912;
            border-top: 1px solid rgba(255,255,255,.05);
        }

        html.dark .section-title {
            color: #f8fafc !important;
        }

        html.dark .section-subtitle {
            color: #94a3b8 !important;
        }

        html.dark .btn-outline {
            color: #f8fafc;
            border-color: rgba(255,255,255,.2);
        }
        html.dark .btn-outline:hover {
            border-color: var(--teal-lt);
            color: var(--teal-lt);
        }

        html.dark .search-section,
        html.dark .why-section,
        html.dark .services-section {
            background: #080e1a !important;
        }

        html.dark .search-card,
        html.dark .dest-card,
        html.dark .why-float,
        html.dark .intro-card,
        html.dark .service-card,
        html.dark .process-card,
        html.dark .pricing-card,
        html.dark .info-card,
        html.dark .form-card,
        html.dark .faq-item {
            background: #101b2f !important;
            border: 1px solid rgba(255,255,255,.08) !important;
            box-shadow: 0 10px 40px rgba(0,0,0,.45) !important;
            color: #f1f5f9;
        }

        html.dark .search-card {
            box-shadow: 0 20px 80px rgba(0,0,0,.6) !important;
        }

        html.dark .search-field label,
        html.dark .form-group label {
            color: #94a3b8 !important;
        }

        html.dark .search-field input,
        html.dark .search-field select,
        html.dark .form-group input,
        html.dark .form-group select,
        html.dark .form-group textarea {
            background: #091120 !important;
            border-color: #1a2942 !important;
            color: #f8fafc !important;
        }

        html.dark .search-field input:focus,
        html.dark .search-field select:focus,
        html.dark .form-group input:focus,
        html.dark .form-group select:focus,
        html.dark .form-group textarea:focus {
            border-color: var(--teal-lt) !important;
        }

        html.dark .dest-body h3,
        html.dark .why-content h2,
        html.dark .why-feat-txt h4,
        html.dark .why-float .txt strong,
        html.dark .intro-text h2,
        html.dark .intro-card-txt h4,
        html.dark .service-card h3,
        html.dark .process-card h3,
        html.dark .pricing-card h3,
        html.dark .contact-info-header h2,
        html.dark .info-card-txt strong,
        html.dark .form-card h3,
        html.dark .faq-question {
            color: #f8fafc !important;
        }

        html.dark .dest-body p,
        html.dark .dest-price small,
        html.dark .why-content p,
        html.dark .why-feat-txt p,
        html.dark .why-float .txt span,
        html.dark .intro-text p,
        html.dark .intro-card-txt p,
        html.dark .service-card p,
        html.dark .process-card p,
        html.dark .pricing-card p,
        html.dark .contact-info-header p,
        html.dark .info-card-txt span,
        html.dark .form-card > p,
        html.dark .faq-answer p {
            color: #94a3b8 !important;
        }

        html.dark .dest-rating {
            background: rgba(15,30,60,.9) !important;
            color: #ffd166 !important;
            border: 1px solid rgba(255,255,255,.1);
        }

        html.dark .service-tag {
            background: rgba(255,255,255,.08) !important;
            color: #94a3b8 !important;
        }

        html.dark .service-card.featured {
            background: linear-gradient(135deg, #0e2040, #153264) !important;
        }

        html.dark .why-visual {
            background: linear-gradient(135deg, rgba(10,163,163,.12), rgba(245,183,49,.08)) !important;
            border-color: rgba(255,255,255,.08) !important;
        }

        html.dark .destinations-section,
        html.dark .services-intro,
        html.dark .contact-section,
        html.dark .process-section {
            background: #080e1a !important;
        }

        html.dark .pricing-section {
            background: #050a14 !important;
        }

        html.dark .hours-card {
            background: #101b2f !important;
            border-color: rgba(255,255,255,.08) !important;
        }

        html.dark .faq-item.active .faq-question {
            color: var(--teal-lt) !important;
        }

        /* ===== RESPONSIVE NAVBAR ===== */
        @media (max-width: 1080px) {
            .nav-hotline { display: none; }
        }

        @media (max-width: 960px) {
            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 76px; left: 0; right: 0;
                background: rgba(15,30,60,.98);
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
                padding: 20px 5% 30px;
                gap: 6px;
                border-bottom: 1px solid rgba(255,255,255,.1);
                max-height: calc(100vh - 76px);
                overflow-y: auto;
            }
            .nav-links.open { display: flex; }
            .nav-item { width: 100%; }
            .nav-link { width: 100%; justify-content: space-between; padding: 12px 18px; border-radius: 12px; }
            .nav-right-actions { display: flex; }
            .hamburger { display: flex; }
            .nav-links .theme-toggle-btn { display: none; }

            /* Mobile Dropdowns */
            .dropdown-menu {
                position: static;
                transform: none;
                opacity: 1;
                visibility: visible;
                pointer-events: auto;
                background: rgba(255,255,255,.05);
                border: 1px solid rgba(255,255,255,.08);
                box-shadow: none;
                border-radius: 12px;
                margin: 4px 0 10px 10px;
                display: none;
            }
            .dropdown-menu::before { display: none; }
            .nav-item-dropdown.mobile-open .dropdown-menu {
                display: block;
            }
            .nav-item-dropdown.mobile-open .dropdown-chevron {
                transform: rotate(180deg);
            }
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
    <a href="{{ route('home') }}" class="nav-logo">
        <div class="nav-logo-icon">✈️</div>
        <div class="nav-logo-text">Wander<span>Lux</span></div>
    </a>

    <div class="nav-links" id="navLinks">
        <!-- Home -->
        <div class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') || request()->routeIs('travel.home') ? 'active' : '' }}" id="nav-home">Home</a>
        </div>

        <!-- Destinations Dropdown -->
        <div class="nav-item nav-item-dropdown" id="destDropdown">
            <a href="{{ route('home') }}#destinations" class="nav-link nav-dropdown-trigger" onclick="handleDropdownClick(event, 'destDropdown')">
                Destinations
                <svg class="dropdown-chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </a>
            <div class="dropdown-menu">
                <div class="dropdown-header">Explore Top Escapes</div>
                <a href="{{ route('home') }}#destinations" class="dropdown-item">
                    <span class="dropdown-item-icon">🏝️</span>
                    <div class="dropdown-item-info">
                        <strong>Maldives</strong>
                        <small>Overwater luxury villas</small>
                    </div>
                </a>
                <a href="{{ route('home') }}#destinations" class="dropdown-item">
                    <span class="dropdown-item-icon">🏛️</span>
                    <div class="dropdown-item-info">
                        <strong>Santorini, Greece</strong>
                        <small>Iconic sunset caldera</small>
                    </div>
                </a>
                <a href="{{ route('home') }}#destinations" class="dropdown-item">
                    <span class="dropdown-item-icon">🌸</span>
                    <div class="dropdown-item-info">
                        <strong>Kyoto, Japan</strong>
                        <small>Temples & cherry blossoms</small>
                    </div>
                </a>
                <a href="{{ route('home') }}#destinations" class="dropdown-item">
                    <span class="dropdown-item-icon">🌿</span>
                    <div class="dropdown-item-info">
                        <strong>Bali, Indonesia</strong>
                        <small>Tropical wellness retreats</small>
                    </div>
                </a>
                <a href="{{ route('home') }}#destinations" class="dropdown-item">
                    <span class="dropdown-item-icon">🗼</span>
                    <div class="dropdown-item-info">
                        <strong>Paris, France</strong>
                        <small>Art, culture & romance</small>
                    </div>
                </a>
                <a href="{{ route('home') }}#destinations" class="dropdown-item">
                    <span class="dropdown-item-icon">🦁</span>
                    <div class="dropdown-item-info">
                        <strong>Maasai Mara, Kenya</strong>
                        <small>Exclusive wild safari</small>
                    </div>
                </a>
            </div>
        </div>

        <!-- Services Dropdown -->
        <div class="nav-item nav-item-dropdown" id="servicesDropdown">
            <a href="{{ route('travel.services') }}" class="nav-link nav-dropdown-trigger {{ request()->routeIs('travel.services') ? 'active' : '' }}" onclick="handleDropdownClick(event, 'servicesDropdown')">
                Services
                <svg class="dropdown-chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </a>
            <div class="dropdown-menu">
                <div class="dropdown-header">Travel Services & Packages</div>
                <a href="{{ route('travel.services') }}" class="dropdown-item">
                    <span class="dropdown-item-icon">✨</span>
                    <div class="dropdown-item-info">
                        <strong>All Services Overview</strong>
                        <small>Explore our full travel catalog</small>
                    </div>
                </a>
                <a href="{{ route('travel.services') }}#packages" class="dropdown-item">
                    <span class="dropdown-item-icon">💎</span>
                    <div class="dropdown-item-info">
                        <strong>Custom Luxury Packages</strong>
                        <small>Bespoke itineraries & VIP concierge</small>
                    </div>
                </a>
                <a href="{{ route('travel.services') }}#packages" class="dropdown-item">
                    <span class="dropdown-item-icon">💍</span>
                    <div class="dropdown-item-info">
                        <strong>Honeymoon & Romance</strong>
                        <small>Intimate private getaways</small>
                    </div>
                </a>
                <a href="{{ route('travel.services') }}#packages" class="dropdown-item">
                    <span class="dropdown-item-icon">🧗</span>
                    <div class="dropdown-item-info">
                        <strong>Adventure & Safari</strong>
                        <small>Wildlife expeditions & trekking</small>
                    </div>
                </a>
            </div>
        </div>

        <!-- About Us -->
        <div class="nav-item">
            <a href="{{ route('home') }}#why-us" class="nav-link" id="nav-about">About Us</a>
        </div>

        <!-- Contact Us CTA -->
        <div class="nav-item">
            <a href="{{ route('travel.contact') }}" class="nav-link nav-cta {{ request()->routeIs('travel.contact') ? 'active' : '' }}" id="nav-contact">Contact Us</a>
        </div>

        <!-- Hotline Pill -->
        <a href="tel:+18001234567" class="nav-hotline" title="Call 24/7 Concierge Hotline">
            <span class="hotline-icon">📞</span>
            <span>+1 800 123 4567</span>
        </a>

        <!-- Desktop Theme Switch -->
        <button type="button" class="theme-toggle-btn" aria-label="Toggle dark/light mode" title="Toggle theme">
            <span class="theme-icon-sun">☀️</span>
            <span class="theme-icon-moon">🌙</span>
        </button>
    </div>

    <!-- Mobile Navigation Actions -->
    <div class="nav-right-actions">
        <button type="button" class="theme-toggle-btn" aria-label="Toggle dark/light mode" title="Toggle theme">
            <span class="theme-icon-sun">☀️</span>
            <span class="theme-icon-moon">🌙</span>
        </button>
        <div class="hamburger" id="hamburger" onclick="toggleMenu()" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </div>
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
            <a href="{{ route('home') }}" class="nav-logo" style="text-decoration:none;">
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
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('travel.services') }}">Services</a></li>
                <li><a href="{{ route('home') }}#destinations">Destinations</a></li>
                <li><a href="{{ route('home') }}#why-us">About Us</a></li>
                <li><a href="{{ route('travel.contact') }}">Contact Us</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Destinations</h4>
            <ul>
                <li><a href="{{ route('home') }}#destinations">Maldives</a></li>
                <li><a href="{{ route('home') }}#destinations">Santorini</a></li>
                <li><a href="{{ route('home') }}#destinations">Bali</a></li>
                <li><a href="{{ route('home') }}#destinations">Kyoto</a></li>
                <li><a href="{{ route('home') }}#destinations">Paris</a></li>
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
    // Theme Toggle Functionality
    function toggleTheme() {
        const isDark = document.documentElement.classList.toggle('dark');
        localStorage.setItem('wanderlux_theme', isDark ? 'dark' : 'light');
    }

    document.querySelectorAll('.theme-toggle-btn').forEach(btn => {
        btn.addEventListener('click', toggleTheme);
    });

    // Navbar scroll effect
    const nav = document.getElementById('mainNav');
    window.addEventListener('scroll', () => {
        nav.classList.toggle('scrolled', window.scrollY > 30);
    });

    // Mobile menu toggle
    function toggleMenu() {
        document.getElementById('navLinks').classList.toggle('open');
    }

    // Mobile dropdown toggle
    function handleDropdownClick(e, dropdownId) {
        if (window.innerWidth <= 960) {
            e.preventDefault();
            const dropdown = document.getElementById(dropdownId);
            dropdown.classList.toggle('mobile-open');
        }
    }

    // Close mobile menu on clicking links inside dropdowns
    document.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', () => {
            if (window.innerWidth <= 960) {
                document.getElementById('navLinks').classList.remove('open');
            }
        });
    });
</script>
</body>
</html>
