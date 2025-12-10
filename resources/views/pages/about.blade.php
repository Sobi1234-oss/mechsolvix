@extends('layouts.app')

@section('title', 'About Mechsolvix')

@section('content')

<div class="container-fluid page-header py-5" style="
    background: linear-gradient(rgba(0, 78, 141, 0.8), rgba(0, 78, 141, 0.679)),
                url('img/aboutbg.jpg') no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-3 mt-5">About Mechsolvix</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>

{{-- 1. COMPANY OVERVIEW SECTION (FULL WIDTH) --}}
<section class="section-with-waves company-overview-section section-spacing">
    <div class="css-wave-container top-wave"><div class="wave wave-1"></div><div class="wave wave-2"></div></div>

    <div class="container py-lg-5" style="position: relative; z-index: 30;">
        <div class="row align-items-start g-5">

            <div class="col-lg-12">
                <div class="company-content-center">

                    <div class="company-label text-accent-blue mb-2">
                        ENGINEERING SOLUTIONS AND UNIFIED SERVICES
                    </div>

                    <h2 class="company-heading">
                        {{-- Heading text color set to slate via CSS --}}
                        <span class="d-block " style="color:rgb(42, 96, 195)">Mechsolvix: Your Partner for</span>
                        <span class="text-accent-blue">Guaranteed Success!</span>
                    </h2>

                    <p class="company-tagline lead fw-bold mt-4">
                        Mechsolvix is an engineering consultancy firm based in **Jeddah, Saudi Arabia**. We deliver high-quality designs and practical solutions across the Kingdom.
                    </p>

                    <div class="clearfix">
                        <img src="img/constructions-3.jpg" alt="Mechsolvix Design Process" class="company-image-left">
                       <p class="company-intro mt-3">
    We proudly serve clients in both the public and private sectors across the Kingdom. Our team operates with **cutting-edge engineering technologies and scientific methodologies** to deliver reliable and precise project outcomes in all regions of Saudi Arabia.
</p>

{{-- Added paragraph for more detail --}}
<p class="company-intro">
    Our methodologies integrate advanced tools such as **Building Information Modeling (BIM)** for multidisciplinary coordination, **Finite Element Analysis (FEA)** for structural optimization, and **Computational Fluid Dynamics (CFD)** for thermal and ventilation studies. These tools are combined with a rigorous, data-driven approach, ensuring every design is thoroughly tested and validated against global engineering standards and local climate challenges before any construction begins.
</p>
                    </div>

                    <div class="clearfix mt-4">
                        <img src="img/about2.jpg" alt="Mechsolvix Consultancy Services" class="company-image-right">
                        <p class="company-simple-content mt-3">
    We strive to be a **distinguished engineering firm** in the region by enhancing the quality of life for our clients and employees alike, through applying the highest engineering standards in our projects and operations. This focus means we integrate **sustainable design practices** and **human-centric engineering**, ensuring our structures are not only robust but also energy-efficient, comfortable, and contribute positively to the urban environment.
</p>
{{-- Added paragraph for more detail on legacy and global aims --}}
<p class="company-simple-content">
    We aim to expand our services globally, building upon our reputation for **unwavering quality** and **ethical practice**. Our work is meaningful — it impacts not just the current generation but also **generations to come**, creating a legacy that will outlive us all by developing essential, resilient infrastructure that supports long-term economic and social growth in the Kingdom and beyond.
</p>
                    </div>

                    <div style="clear: both;"></div>


                    <h5 class="text-primary-blue fw-bold mb-3 border-bottom border-1 pb-2 mt-5">
                        Our Focus on Excellence
                    </h5>

                    <ul class="company-services-list list-unstyled mt-4">
                        <li><i class="fas fa-check-circle me-2 text-accent-blue"></i> **Precision in Design and Execution:** We focus on the finest details to ensure projects are executed in full compliance with the highest engineering quality standards.</li>
                        <li><i class="fas fa-check-circle me-2 text-accent-blue"></i> **Client Satisfaction is Our Priority:** Our success is measured by our clients' satisfaction, committing us to exceptional service delivery.</li>
                        <li><i class="fas fa-check-circle me-2 text-accent-blue"></i> **Integrated Solutions:** We offer design, supervision, and project management to ensure your project's success from concept to execution.</li>
                        <li><i class="fas fa-check-circle me-2 text-accent-blue"></i> **Reliable Consultations:** We provide reliable consultations and accurate reports, ensuring complete clarity in all aspects of the project.</li>
                    </ul>

                </div>
            </div>

            <div class="col-lg-12">
                <div class="additional-company-info pt-4 mt-5">
                    <h5 class="text-primary-blue fw-bold mb-3 border-bottom border-1 pb-2">
                        Our Projects Speak for Themselves
                    </h5>

                    <div class="row text-center mt-4">
                        <div class="col-6 col-md-3 mb-4">
                            <h3 class="display-5 fw-bold text-accent-blue mb-0">100+</h3>
                            <p class="text-dark-navy mb-0">Residential Projects</p>
                        </div>
                        <div class="col-6 col-md-3 mb-4">
                            <h3 class="display-5 fw-bold text-accent-blue mb-0">95+</h3>
                            <p class="text-dark-navy mb-0">Investment Projects</p>
                        </div>
                        <div class="col-6 col-md-3 mb-4">
                            <h3 class="display-5 fw-bold text-accent-blue mb-0">300+</h3>
                            <p class="text-dark-navy mb-0">Legal Settlements</p>
                        </div>
                        <div class="col-6 col-md-3 mb-4">
                            <h3 class="display-5 fw-bold text-accent-blue mb-0">75+</h3>
                            <p class="text-dark-navy mb-0">Ministry of Justice Cost</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="css-wave-container bottom-wave"><div class="wave wave-1"></div><div class="wave wave-2"></div></div>
</section>

{{-- 2. MISSION & VISION SECTION (FULL WIDTH - MODIFIED CARDS) --}}
<section class="section-with-waves mission-vision-section section-spacing">
    <div class="css-wave-container top-wave"><div class="wave wave-1"></div><div class="wave wave-2"></div></div>

    <div class="container py-lg-5" style="position: relative; z-index: 30;">
        <div class="row g-5">

            <div class="col-lg-6">
                <div class="mission-vision-card mission-card h-100">
                    <h3 class="mission-vision-title">
                        <i class="fas fa-bullseye me-2 icon-blue"></i> Our Mission
                    </h3>
                    <p class="mission-vision-text">
                        To be a **distinguished engineering consultancy firm** in the MENA region by enhancing the quality of life for our clients and employees alike, through applying the highest engineering standards in our projects and operations.
                    </p>
                    <ul class="list-unstyled commitment-list">
                        <li><i class="fas fa-check-circle me-2 icon-orange"></i> Apply the Highest Engineering Standards</li>
                        <li><i class="fas fa-check-circle me-2 icon-orange"></i> Enhance Quality of Life for Clients & Employees</li>
                        <li><i class="fas fa-check-circle me-2 icon-orange"></i> Achieve Seamless Project Delivery</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="mission-vision-card vision-card h-100">
                    <h3 class="mission-vision-title">
                        <i class="fas fa-eye me-2 icon-blue"></i> Our Vision
                    </h3>
                    <p class="mission-vision-text">
                        We aim to **expand our services globally** and ensure our work creates a legacy that will outlive us all—impacting not just the current generation but also generations to come.
                    </p>
                    <ul class="list-unstyled commitment-list">
                        <li><i class="fas fa-check-circle me-2 icon-orange"></i> Expand Services to Global Markets</li>
                        <li><i class="fas fa-check-circle me-2 icon-orange"></i> Create a Lasting Legacy of Quality</li>
                        <li><i class="fas fa-check-circle me-2 icon-orange"></i> Serve as a Strategic Partner in Development</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="css-wave-container bottom-wave"><div class="wave wave-1"></div><div class="wave wave-2"></div></div>
</section>

{{-- 3. HSEQ SECTION (FULL WIDTH) --}}
<section class="section-with-waves hseq-section section-spacing">
    <div class="css-wave-container top-wave"><div class="wave wave-1"></div><div class="wave wave-2"></div></div>

    <div class="container" style="position: relative; z-index: 30;">
        <div class="row align-items-center mb-5 justify-content-center">

            <div class="col-lg-5 col-md-6 text-center mb-4">
                <img src="img/hseqbg.jpg" alt="HSE & Quality Commitment" class="hseq-left-image">
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="hseq-content-box">

                   <h2 class="hseq-title" style="color:#334155; margin-top:20px;">
    Mechsolvix's<br>
    <span class="hseq-highlight" style="color:#334155;">HSE & Quality</span><br>
    <span class="hseq-subtitle" style="color:#334155;">Integrated Standards</span>
</h2>


                    <p class="hseq-text">
                        **Mechsolvix Company** adheres to the highest global standards for **Health, Safety, Environment, and Quality (HSEQ)** in all our consultancy and supervision projects. Our core policy is **Zero Compromise** on safety and technical compliance to ensure the well-being of our teams and the integrity of our designs.
                    </p>

                    <p class="hseq-text">
                        Our commitment ensures that every design is not only innovative but also **inherently safe, environmentally responsible, and compliant** with all local Saudi Arabian regulations and international best practices. We are dedicated to providing clear, reliable reports and documentation that meets the stringent requirements of public and private sector clients.
                    </p>
                </div>
            </div>

        </div>

        <div class="row mt-5 hseq-policies-row">

            <div class="col-lg-12">
                <h4 class="hseq-policies-heading mb-4">Key Operational Pillars</h4>
                <div class="row g-4 justify-content-center">

                    <div class="col-md-4">
                        <div class="policy-card-new h-100">
                            <i class="fas fa-drafting-compass policy-icon"></i>
                            <h6 class="policy-title">Design Precision & Compliance</h6>
                            <p class="policy-text-new mb-0">We utilize advanced engineering software and methodologies to ensure every design is technically flawless and in full compliance with local building codes and international standards.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="policy-card-new h-100">
                            <i class="fas fa-search-dollar policy-icon"></i>
                            <h6 class="policy-title">Project Integrity & Oversight</h6>
                            <p class="policy-text-new mb-0">Our supervision services guarantee that project execution strictly follows design specifications, managing quality, cost, and schedule risks effectively.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="policy-card-new h-100">
                            <i class="fas fa-handshake policy-icon"></i>
                            <h6 class="policy-title">Client-Centric Collaboration</h6>
                            <p class="policy-text-new mb-0">We prioritize clear communication and active collaboration with clients to deliver bespoke solutions that meet unique functional and aesthetic requirements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="css-wave-container bottom-wave"><div class="wave wave-1"></div><div class="wave wave-2"></div></div>
</section>

{{-- 4. CORE VALUES SECTION (FULL WIDTH - MODIFIED HEADING) --}}
<section class="section-with-waves core-values-section section-spacing">
    <div class="css-wave-container top-wave"><div class="wave wave-1"></div><div class="wave wave-2"></div></div>

    <div class="container py-lg-5 text-center" style="position: relative; z-index: 30;">
        <div class="text-center mb-5">
            {{-- Heading size changed to h3 (smaller) and color is slate --}}
           <h2 class="fw-bold mb-3">
    <span style="color:#475569;"> Our Core Values</span>
</h2>

            <p class="lead text-dark-navy mx-auto" style="max-width: 800px;">
                Our work is guided by uncompromised principles that ensure integrity, quality, and lasting partnerships with our clients.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="value-card h-100">
                    <div class="value-icon-box bg-accent-blue-light">
                        <i class="fas fa-hand-holding-heart value-icon text-accent-blue"></i>
                    </div>
                    <h5 class="value-title text-primary-blue mt-3">Integrity & Trust</h5>
                    <p class="value-text">We maintain the highest level of ethical standards and transparency in all our consultations and project dealings.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="value-card h-100">
                    <div class="value-icon-box bg-accent-orange-light">
                        <i class="fas fa-star-of-life value-icon text-accent-orange"></i>
                    </div>
                    <h5 class="value-title text-primary-blue mt-3">Unwavering Quality</h5>
                    <p class="value-text">A commitment to delivering projects and designs that exceed industry benchmarks and client expectations every time.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="value-card h-100">
                    <div class="value-icon-box bg-accent-blue-light">
                        <i class="fas fa-lightbulb value-icon text-accent-blue"></i>
                    </div>
                    <h5 class="value-title text-primary-blue mt-3">Innovation & Technology</h5>
                    <p class="value-text">We embrace cutting-edge technology and creative engineering solutions to achieve efficiency and precision.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="value-card h-100">
                    <div class="value-icon-box bg-accent-orange-light">
                        <i class="fas fa-tree value-icon text-accent-orange"></i>
                    </div>
                    <h5 class="value-title text-primary-blue mt-3">Environmental Stewardship</h5>
                    <p class="value-text">A dedication to incorporating sustainable practices and environmentally responsible designs in every project.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="css-wave-container bottom-wave"><div class="wave wave-1"></div><div class="wave wave-2"></div></div>
</section>


<style>
    :root {
        --mech-blue-primary: #004e8d; /* Deep Blue */
        --mech-blue-accent: #378fc7; /* Lighter Accent Blue */
        --mech-orange-accent: #d9832c; /* Consistent Highlight Orange */
        --mech-text-dark: #343a40;
        --mech-bg-light: #F8F8F8; /* Light Gray Background */
        --mech-bg-section: #eef4f9; /* Soft Blue/Gray Section BG */
        --mech-card-bg: #FFFFFF;

        /* WAVE COLORS */
        --wave-bg: #d1ecf1;
        --light-blue-bg: #e0f7fa;

        /* NEW SLATE COLOR - UPDATED TO LIGHTER SHADE */
        --slate-text: #64748B; /* Lighter Slate Gray */
        --slate-dark: #1e293b; /* Darker Slate for headings */
    }

    /* COLOR UTILITIES */
    .text-primary-blue { color: var(--mech-blue-primary) !important; }
    .text-accent-blue { color: var(--mech-blue-accent) !important; }
    .text-accent-orange { color: var(--mech-orange-accent) !important; }
    .bg-light-soft { background: var(--mech-bg-section); }

    /* General text coloring - Updated to Lighter Slate */
    .company-label, .company-tagline, .company-intro, .company-simple-content,
    .additional-company-info p, .commitment-list li, .hseq-text,
    .value-text, .policy-text-new {
        color: var(--slate-text) !important;
    }
    .text-dark-navy { color: var(--slate-text) !important; }

    /* Global Section Styles remain the same for full-width light blue BG */
    .section-with-waves {
        position: relative;
        padding-top: 100px;
        padding-bottom: 100px;
        background-color: var(--light-blue-bg);
        overflow: hidden;
        margin: 0;
        width: 100%;
        border-radius: 0 !important;
        box-shadow: none !important;
    }
    .section-spacing { margin-top: 0 !important; margin-bottom: 0 !important; }

    /* Waves CSS remains the same */
    .css-wave-container { position: absolute; left: 0; width: 100%; height: 120px; z-index: 10; overflow: hidden; }
    .top-wave { top: 0; }
    .bottom-wave { bottom: 0; }
    .wave { position: absolute; width: 150%; height: 150%; left: -25%; border-radius: 45% 55% 0 0 / 100% 100% 0 0; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05); transform-origin: 50% 100%; }
    .top-wave .wave-1 { background: var(--wave-bg); bottom: 0; height: 120%; transform: rotate(0deg) translateY(45px); z-index: 12; opacity: 0.9; }
    .top-wave .wave-2 { background: var(--mech-bg-light); bottom: 0; height: 100%; border-radius: 40% 60% 0 0 / 100% 100% 0 0; transform: rotate(0deg) translateY(75px); z-index: 13; }
    .bottom-wave .wave-1 { background: var(--wave-bg); top: 0; height: 120%; transform: rotate(180deg) translateY(45px); z-index: 12; opacity: 0.9; }
    .bottom-wave .wave-2 { background: var(--mech-bg-light); top: 0; height: 100%; border-radius: 40% 60% 0 0 / 100% 100% 0 0; transform: rotate(180deg) translateY(75px); z-index: 13; }

    /* MISSION & VISION STYLES (MODIFIED) */
    .mission-vision-section {
        padding-top: 150px;
        padding-bottom: 150px;
    }
    .mission-vision-card {
        background: transparent !important;
        border-radius: 15px;
        padding: 30px;
        border: 1px solid var(--wave-bg); /* Soft border to define box */
        box-shadow: 0 4px 15px rgba(0,0,0,0.1); /* Light shadow */
        transition: none !important;cursor:pointer;
    }
    .mission-vision-card:hover {
        transform: none !important;
        box-shadow: 0 4px 20px rgba(0,0,0,0.15) !important;
    }
    .mission-vision-title {
        color: var(--slate-dark) !important; /* Slate Heading Color */
        font-weight: bold;
    }
    .mission-vision-text {
        color: var(--slate-text) !important;
    }
    .icon-blue { color: var(--mech-blue-primary) !important; }
    .icon-orange { color: var(--mech-orange-accent) !important; }

    /* COMPANY OVERVIEW STYLING (HEADING MODIFIED) */
    .company-content-center {
        text-align: left !important;
        max-width: none !important;
        margin: 0 !important;
        padding: 0 15px; /* Added slight padding for content alignment */cursor:pointer;
    }
    .company-heading { font-size: 3.5rem; }
    .company-heading .text-primary-blue, .company-heading .text-accent-blue {
        color: var(--slate-dark) !important; /* Slate for main company heading */
    }
    .company-tagline { border-left: 5px solid var(--mech-blue-accent) !important; padding-left: 15px !important; }

    /* UPDATED IMAGE FLOATING STYLES */
    .company-image-left {
        float: left;
        margin-right: 25px; /* Space between image and text */
        margin-bottom: 15px;
        width: 100%; /* Default for mobile/smaller screens */
        max-width: 300px; /* Max width on larger screens */
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        /* Ensure it clears any previous float context if necessary */
    }

    .company-image-right {
        float: right;
        margin-left: 25px; /* Space between image and text */
        margin-bottom: 15px;
        width: 100%;
        max-width: 300px;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    /* Media Query for larger screens to enforce floating for images */
    @media (min-width: 768px) {
        .company-image-left {
            max-width: 40%; /* Adjust as needed */
        }
        .company-image-right {
            max-width: 40%; /* Adjust as needed */
        }
    }
    /* Simple clearfix (ensure this is present in your main CSS or layout if you use .clearfix) */
    .clearfix::after {
        content: "";
        display: table;
        clear: both;
    }


    /* Core Values Heading Smaller and Slate */
    .core-values-section h2 {
        font-size: 2.5rem !important; /* Reduced size */
        color: var(--slate-dark) !important; /* Slate color */
    }
    .core-values-section p.lead {
        color: var(--slate-text) !important;
    }

    /* Policy Card styling for HSEQ */
    .policy-card-new {
        background: var(--mech-card-bg); /* Keeping white background for better contrast */
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        text-align: center;
    }
    .policy-title {
        color: var(--slate-dark);
        margin-top: 10px;
    }
    .policy-icon {
        font-size: 2rem;
        color: var(--mech-orange-accent);
    }

    /* HSEQ & Quality Text Alignment */
    .hseq-title, .hseq-content-box, .hseq-text {
        text-align: left !important;
    }
    .hseq-policies-heading { border-left: 4px solid var(--mech-orange-accent) !important; text-align: left !important; padding-left: 15px !important; }

    /* HSEQ Title and Highlight FIX */
    .hseq-title {
        font-size: 3rem; /* Added Font Size */
        font-weight: 700;
        line-height: 1.1;
        color: var(--slate-dark); /* Default title color */
        margin-bottom: 20px;
    }
    .hseq-highlight {
        color: var(--mech-orange-accent); /* Added Highlight Color */
        border-bottom: 3px solid var(--mech-blue-primary); /* Added Underline */
        padding-bottom: 5px;
        display: inline-block; /* Allows border-bottom to work correctly */
    }
    .hseq-subtitle {
        display: block;
        font-size: 1.5rem; /* Added Font Size */
        font-weight: 300;
        color: var(--slate-text);
        margin-top: 10px;
    }


    /* VALUE CARD STYLES */
    .value-card {
        background: var(--mech-card-bg);
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        border-bottom: 4px solid var(--mech-orange-accent);cursor:pointer;
    }
    .value-title {
        color: var(--slate-dark) !important; /* Slate title color */
    }

    /* HSEQ IMAGE (Adjusted for new layout) */
    .hseq-left-image {
        width: 100%;
        height: auto;
        max-width: 450px;
        max-height: 450px;
        object-fit: cover;
        border-radius: 22px;
        box-shadow: 0 12px 35px rgba(0,0,0,0.18);
        border: 6px solid var(--mech-blue-primary);
        transition: none !important;
    }

    /* CORE VALUES ICONS AND CARDS */
    .bg-accent-blue-light { background: rgba(55, 143, 199, 0.1); }
    .bg-accent-orange-light { background: rgba(217, 131, 44, 0.1); }
    .value-icon-box {
        width: 80px;
        height: 80px;
        line-height: 80px;
        border-radius: 50%;
        margin: 0 auto 15px auto;
        display: inline-block;
    }
    .value-icon {
        font-size: 2.2rem;
        vertical-align: middle;
    }

    /* ======================================================= */
    /* === MOBILE OPTIMIZATION (As per request) === */
    /* ======================================================= */
    @media (max-width: 768px) {
        /* ----------------------------------------------- */
        /* 1. Main Page Header (About Mechsolvix) */
        /* ----------------------------------------------- */
        .page-header {
            /* Top se zyaada neeche karne ke liye padding barha di */
            padding-top: 120px !important;
            padding-bottom: 80px !important;
        }

        /* Inner container padding reset */
        .page-header .container.text-center.py-5 {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .page-header .display-2 {
            /* Heading ka size chota kar diya */
            font-size: 2.5rem !important;
            margin-top: 0 !important;
            margin-bottom: 15px !important;
        }

        /* ----------------------------------------------- */
        /* 2. Global Section Spacing (Har section ki top padding) */
        /* ----------------------------------------------- */
        .section-with-waves {
            /* General section padding top barha diya */
            padding-top: 80px;
            padding-bottom: 80px;
        }

        /* Mission & Vision Section ki Top Padding */
        .mission-vision-section {
            padding-top: 120px;
            padding-bottom: 120px;
        }

        /* ----------------------------------------------- */
        /* 3. Company Overview Heading (H2) aur Label ko Neechy karna (New Change) */
        /* ----------------------------------------------- */
        .company-overview-section .company-content-center {
            /* Mobile view mein content ko upar se space de di */
            padding-top: 50px !important;
        }
        .company-heading {
            /* Heading size chota kar diya */
            font-size: 2.2rem !important;
        }

        /* ----------------------------------------------- */
        /* 4. HSEQ Section Headings (H2) */
        /* ----------------------------------------------- */
        .hseq-title {
            /* HSEQ heading size chota kar diya */
            font-size: 2.5rem !important;
            margin-top: 0px !important; /* Image ke neeche proper spacing */
        }
        .hseq-subtitle {
            font-size: 1.1rem !important;
        }
        .hseq-left-image {
            max-width: 100%;
        }

        /* ----------------------------------------------- */
        /* 5. Core Values Section Heading (H2) ko Neechy karna (New Change) */
        /* ----------------------------------------------- */
        .core-values-section h2 {
            /* Core Values heading size chota kar diya */
            font-size: 2rem !important;
        }
        .core-values-section .text-center.mb-5 {
            /* Core Values heading ko mobile me upar se zyaada space de di */
            margin-top: 50px !important;
            margin-bottom: 30px !important;
        }
    }
    @media (max-width: 768px) {
    .page-header {
        background-attachment: scroll !important;
        background-position: center !important;
        background-size: cover !important;
    }
}
</style>
@endsection
