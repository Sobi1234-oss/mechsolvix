<header id="main-header" class="transparent-header">
    <nav class="navbar navbar-expand-lg main-nav">
        <div class="container">

            <a href="{{ url('/') }}"
                class="navbar-brand d-flex flex-column align-items-center text-center header-logo-block"
                style="white-space:nowrap;">

                <img src="img/logo.png" alt="Company Logo" class="header-logo-img">

                <span class="header-logo-main-text">
                    <span style="color:#ffffff;">Mech</span>
                    <span style="color:#00aaff;">Solvix</span>
                </span>

                <span class="header-logo-arabic-title">
                    ميكسولفيكس
                </span>

                <small class="header-logo-arabic-tagline">
                    للحلول الهندسية والخدمات المتكاملة
                </small>

                <small class="header-logo-english-tagline">
                    Engineering & Integrated Solutions
                </small>

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto text-uppercase fw-semibold align-items-lg-center">

                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/about') }}"
                            class="nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/services') }}"
                            class="nav-link {{ Request::is('services') ? 'active' : '' }}">Services</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/our-clients') }}"
                            class="nav-link {{ Request::is('our-clients') || Request::is('clients/*') ? 'active' : '' }}">Our
                            Clients</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/gallery') }}" class="nav-link {{ Request::is('gallery') ? 'active' : '' }}">
                            Gallery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/contact') }}"
                            class="nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                    </li>

                </ul>

                <a href="tel:+01234567890" class="btn btn-blue ms-3 d-none d-lg-inline-block">
                    <i class="fas fa-phone-alt me-2"></i> Get Quote
                </a>
            </div>

        </div>
    </nav>
</header>

<style>
    /* --- BASE STYLES --- */

    /* TRANSPARENT FULL-WIDTH HEADER - SMALLER HEIGHT */
    #main-header.transparent-header {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 2000;
        background: rgba(0, 0, 0, 0.08);
        /* More transparent */
        backdrop-filter: blur(10px);
        /* Reduced blur */
        transition: all 0.35s ease;
    }

    /* ON SCROLL — DARKER GLASS - SMALLER HEIGHT */
    #main-header.scrolled {
        background: rgba(0, 0, 0, 0.65);
        /* More transparent than before */
        backdrop-filter: blur(12px);
        /* Reduced blur */
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.25);
        /* Smaller shadow */
        padding: 0;
        /* Remove any padding */
    }

    /* NAVBAR - REDUCED HEIGHT */
    .main-nav {
        padding: 8px 0;
        /* Reduced from 18px - MAKES HEADER SMALLER */
        min-height: 60px;
        /* Smaller minimum height */
    }

    /* NAV LINKS */
    .nav-link {
        color: rgba(255, 255, 255, 0.9) !important;
        /* Brighter text */
        padding: 8px 16px !important;
        /* Reduced padding */
        position: relative;
        transition: all 0.25s ease;
        font-size: 0.9rem;
        /* Smaller font */
    }

    /* ACTIVE LIGHT BLUE COLOR */
    .nav-link.active {
        color: #00aaff !important;
    }

    /* UNDERLINE INDICATOR - THINNER */
    .nav-link.active::after,
    .nav-link:hover::after {
        content: "";
        position: absolute;
        bottom: -2px;
        /* Moved closer to text */
        left: 50%;
        transform: translateX(-50%);
        width: 50%;
        /* Shorter underline */
        height: 2px;
        /* Thinner line */
        background: #00aaff;
        border-radius: 2px;
        opacity: 1;
    }

    .nav-link::after {
        opacity: 0;
        width: 0;
        transition: all 0.35s ease;
    }

    /* HOVER */
    .nav-link:hover {
        color: #00aaff !important;
    }

    .nav-link:hover::after {
        width: 50%;
        /* Shorter underline */
        opacity: 1;
    }

    /* BUTTON - SMALLER */
    .btn-blue {
        background: #00aaff;
        color: #fff;
        padding: 8px 18px;
        /* Reduced padding */
        border-radius: 25px;
        /* Slightly less rounded */
        font-weight: 600;
        font-size: 0.85rem;
        /* Smaller font */
        transition: 0.3s ease;
        border: none;
    }

    .btn-blue:hover {
        background: #0088cc;
        color: #fff;
        transform: translateY(-1px);
        /* Smaller movement */
    }

    /* TOGGLER - SMALLER */
    .navbar-toggler {
        border: 1px solid rgba(255, 255, 255, 0.4);
        padding: 4px 8px;
        margin-right: 10px;
    }

    .navbar-toggler-icon {
        width: 1.2em;
        height: 1.2em;
        filter: invert(1);
    }

    /* --- LOGO STYLING (Desktop) - SMALLER --- */

    .header-logo-block {
        margin-top: -8px;
        /* Reduced negative margin */
        padding-left: 10px;
    }

    .header-logo-img {
        height: 40px;
        /* Smaller logo */
        width: auto;
        object-fit: contain;
        margin-bottom: -4px;
    }

    .header-logo-main-text {
        font-size: 0.85rem;
        /* Smaller font */
        font-weight: 700;
        line-height: 1;
        margin-bottom: -2px;
    }

    .header-logo-arabic-title {
        font-size: 0.75rem;
        /* Smaller font */
        font-weight: 600;
        color: #fff;
        line-height: 1;
        margin-bottom: -2px;
    }

    .header-logo-arabic-tagline,
    .header-logo-english-tagline {
        font-size: 0.65rem;
        /* Smaller font */
        line-height: 1;
    }

    .header-logo-english-tagline {
        color: #90c8ff;
    }

    .header-logo-arabic-tagline {
        color: rgba(255, 255, 255, 0.85);
        margin-bottom: -2px;
    }

    /* --- RESPONSIVENESS (Mobile/Tablet Adjustments) --- */

    /* Small & Medium Screens (Max 991px - applies to tablet and mobile) */
    @media (max-width: 991px) {

        /* Overall Menu Appearance */
        #navMenu {
            background: rgba(0, 0, 0, 0.85);
            backdrop-filter: blur(12px);
            padding: 15px;
            border-radius: 0 0 8px 8px;
            margin-top: 8px;
        }

        .nav-link {
            padding: 10px 0 !important;
            font-size: 16px;
            /* Smaller font on mobile */
        }

        /* Logo scaling for Mobile/Tablet */
        .header-logo-block {
            align-items: center !important;
            text-align: center !important;
            margin-top: 0;
            padding: 0;
            margin-left: 15px;
        }

        .header-logo-img {
            height: 35px;
            /* Smaller on mobile */
            margin-bottom: 0;
        }

        .header-logo-main-text {
            font-size: 0.8rem;
            /* Smaller on mobile */
            line-height: 1.1;
            margin-bottom: 0;
        }

        .header-logo-arabic-title {
            font-size: 0.7rem;
            /* Smaller on mobile */
            line-height: 1.1;
            margin-bottom: 0;
        }

        /* Hide taglines on smaller screens to save vertical space */
        .header-logo-arabic-tagline,
        .header-logo-english-tagline {
            display: none;
        }

        /* Reduce header height on mobile */
        .main-nav {
            padding: 6px 0;
            min-height: 50px;
        }
    }

    /* Extra Small Screens (Max 576px - dedicated mobile fixes) */
    @media (max-width: 576px) {
        .main-nav {
            padding: 5px 0;
            /* Very small padding */
            min-height: 45px;
            /* Even smaller height */
        }

        .header-logo-block {
            margin-left: 8px;
        }

        .header-logo-img {
            height: 30px;
            /* Smaller logo */
        }

        .header-logo-main-text {
            font-size: 0.75rem;
            /* Smaller text */
        }

        .header-logo-arabic-title {
            font-size: 0.65rem;
            /* Smaller text */
        }

        /* Adjust collapsed menu */
        #navMenu {
            padding: 12px;
            margin-top: 5px;
        }

        .nav-link {
            padding: 8px 0 !important;
            font-size: 15px;
        }

        .navbar-toggler {
            padding: 3px 6px;
            margin-right: 5px;
        }
    }

    /* Optional: Smooth scroll offset for fixed header */
    html {
        scroll-padding-top: 70px;
        /* Adjust based on your header height */
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const header = document.getElementById("main-header");

    // Initialize scroll state
    if (window.scrollY > 20) {
        header.classList.add("scrolled");
    }

    // Scroll event listener
    document.addEventListener("scroll", () => {
        if (window.scrollY > 20) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });

    // Optional: Close mobile menu when clicking a link
    const navLinks = document.querySelectorAll('.nav-link');
    const navMenu = document.getElementById('navMenu');

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 992) { // Mobile/tablet breakpoint
                const bsCollapse = new bootstrap.Collapse(navMenu, {
                    toggle: false
                });
                bsCollapse.hide();
            }
        });
    });
});
</script>
