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
                        <a href="{{ url('/') }}"
                            class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
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
                            class="nav-link {{ Request::is('our-clients') || Request::is('clients/*') ? 'active' : '' }}">Our Clients</a>
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

/* TRANSPARENT FULL-WIDTH HEADER */
#main-header.transparent-header {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 2000;
    background: rgba(0, 0, 0, 0.15);
    backdrop-filter: blur(12px);
    transition: all 0.35s ease;
}

/* ON SCROLL — DARKER GLASS */
#main-header.scrolled {
    background: rgba(0, 0, 0, 0.75);
    backdrop-filter: blur(18px);
    box-shadow: 0 4px 25px rgba(0, 0, 0, 0.35);
}

/* NAVBAR */
.main-nav {
    padding: 18px 0;
}

/* NAV LINKS */
.nav-link {
    color: rgba(255,255,255,0.85) !important;
    padding: 10px 18px !important;
    position: relative;
    transition: all 0.25s ease;
}

/* ACTIVE LIGHT BLUE COLOR */
.nav-link.active {
    color: #00aaff !important;
}

/* UNDERLINE INDICATOR */
.nav-link.active::after,
.nav-link:hover::after {
    content: "";
    position: absolute;
    bottom: -4px;
    left: 50%;
    transform: translateX(-50%);
    width: 60%;
    height: 3px;
    background: #00aaff;
    border-radius: 3px;
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
    width: 60%;
    opacity: 1;
}

/* BUTTON */
.btn-blue {
    background:#00aaff;
    color:#fff;
    padding:10px 22px;
    border-radius:30px;
    font-weight:bold;
    transition:0.3s ease;
}
.btn-blue:hover {
    background:#0088cc;
    color:#fff;
    transform: translateY(-2px);
}

/* TOGGLER */
.navbar-toggler {
    border-color: rgba(255,255,255,0.5);
}
.navbar-toggler-icon {
    filter: invert(1);
}


/* --- LOGO STYLING (Desktop) --- */

.header-logo-block {
    margin-top: -18px;
}
.header-logo-img {
    height: 55px;
    width: auto;
    object-fit: contain;
    margin-bottom: -6px;
}
.header-logo-main-text {
    font-size: 1.05rem;
    font-weight: 700;
    line-height: 1;
    margin-bottom: -4px;
}
.header-logo-arabic-title {
    font-size: 0.95rem;
    font-weight: 600;
    color: #fff;
    line-height: 1;
    margin-bottom: -3px;
}
.header-logo-arabic-tagline,
.header-logo-english-tagline {
    font-size: 0.75rem;
    line-height: 1;
}
.header-logo-english-tagline {
    color: #90c8ff;
}
.header-logo-arabic-tagline {
    color: rgba(255,255,255,0.85);
    margin-bottom: -3px;
}


/* --- RESPONSIVENESS (Mobile/Tablet Adjustments) --- */

/* Small & Medium Screens (Max 991px - applies to tablet and mobile) */
@media (max-width: 991px) {

    /* Overall Menu Appearance */
    #navMenu {
        background: rgba(0,0,0,0.8);
        backdrop-filter: blur(15px);
        padding: 20px;
        border-radius: 0 0 10px 10px;
    }
    .nav-link {
        padding: 12px 0 !important;
        font-size: 18px;
    }

    /* Logo scaling for Mobile/Tablet */

    .header-logo-block {
        /* Keep content centered relative to each other */
        align-items: center !important;
        text-align: center !important;

        margin-top: 0;
        padding: 5px 0;

        /* Nudge logo to the right to balance space with toggler button */
        margin-left: 20px;
    }

    .header-logo-img {
        height: 40px; /* INCREASED SIZE: Slightly larger logo image */
        margin-bottom: -2px;
    }

    .header-logo-main-text {
        font-size: 0.95rem; /* INCREASED SIZE: Larger company name */
        line-height: 1.1;
        margin-bottom: 0;
    }

    .header-logo-arabic-title {
        font-size: 0.85rem; /* INCREASED SIZE: Larger Arabic title */
        line-height: 1.1;
        margin-bottom: 0;
    }

    /* Hide taglines on smaller screens to save vertical space */
    .header-logo-arabic-tagline,
    .header-logo-english-tagline {
        display: none;
    }
}


/* Extra Small Screens (Max 576px - dedicated mobile fixes) */
@media (max-width: 576px) {
    .main-nav {
        padding: 10px 0; /* Reduced header padding */
    }
    .header-logo-block {
        margin-left: 10px; /* Smaller nudge on very small screens */
    }
    .header-logo-img {
        height: 35px; /* INCREASED SIZE: Slightly larger logo image */
    }
    .header-logo-main-text {
        font-size: 0.85rem; /* INCREASED SIZE: Larger company name */
    }
    .header-logo-arabic-title {
        font-size: 0.75rem; /* INCREASED SIZE: Larger Arabic title */
    }
}
</style>
<script>
document.addEventListener("scroll", () => {
    const header = document.getElementById("main-header");
    if (window.scrollY > 40) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});
</script>
