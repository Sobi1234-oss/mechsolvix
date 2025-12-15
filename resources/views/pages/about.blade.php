@extends('layouts.app')

@section('title', 'About Mechsolvix')

@section('content')

<div class="container-fluid page-header-mechsolvix py-5" style="
    background: linear-gradient(rgba(36, 64, 95, 0.573), rgba(30, 86, 120, 0.5)),
                url('img/clientsbg.jpg') no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-3 mt-4">About Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">
                    About Us
                </li>
            </ol>
        </nav>
    </div>
</div>


{{-- 1. COMPANY OVERVIEW SECTION --}}
<section class="mechsolvix-company-overview-section py-5">
    <div class="container py-lg-5">
        {{-- Section Header - Left Aligned with Badge --}}
        <div class="row mb-5">
            <div class="col-lg-11 mx-auto text-start">
                <div class="mechsolvix-section-header">
                    <span class="mechsolvix-section-badge">OUR STORY</span>
                    <h2 class="mechsolvix-section-title">Mechsolvix: Your Partner for <span class="mechsolvix-text-accent-blue">Guaranteed Success!</span></h2>
                    <p class="mechsolvix-section-subtitle">Engineering Solutions and Unified Services in Jeddah, Saudi Arabia</p>
                </div>
            </div>
        </div>

        <div class="row align-items-start g-5">
            <div class="col-lg-11 mx-auto">
                <div class="mechsolvix-company-content-center">

                    <p class="mechsolvix-company-tagline lead fw-bold">
                        Mechsolvix is an engineering consultancy firm based in <strong>Jeddah, Saudi Arabia</strong>. We deliver high-quality designs and practical solutions across the Kingdom.
                    </p>

                    <div class="mechsolvix-clearfix mb-5">
                        <img src="img/about3.png" alt="Mechsolvix Design Process" class="mechsolvix-company-image-left-large">
                        <div class="mechsolvix-image-content-wrapper">
                            <p class="mechsolvix-company-intro mt-3">
                                We proudly serve clients in both the public and private sectors across the Kingdom. Our team operates with <strong>cutting-edge engineering technologies and scientific methodologies</strong> to deliver reliable and precise project outcomes in all regions of Saudi Arabia.
                            </p>

                            <p class="mechsolvix-company-intro">
                                Our methodologies integrate advanced tools such as <strong>Building Information Modeling (BIM)</strong> for multidisciplinary coordination, <strong>Finite Element Analysis (FEA)</strong> for structural optimization, and <strong>Computational Fluid Dynamics (CFD)</strong> for thermal and ventilation studies. These tools are combined with a rigorous, data-driven approach, ensuring every design is thoroughly tested and validated against global engineering standards and local climate challenges before any construction begins.
                            </p>
                        </div>
                    </div>

                    <div class="mechsolvix-clearfix mt-5 mb-5">
                        <img src="img/about2.jpg" alt="Mechsolvix Consultancy Services" class="mechsolvix-company-image-right-large">
                        <div class="mechsolvix-image-content-wrapper">
                            <p class="mechsolvix-company-simple-content mt-3">
                                We strive to be a <strong>distinguished engineering firm</strong> in the region by enhancing the quality of life for our clients and employees alike, through applying the highest engineering standards in our projects and operations. This focus means we integrate <strong>sustainable design practices</strong> and <strong>human-centric engineering</strong>, ensuring our structures are not only robust but also energy-efficient, comfortable, and contribute positively to the urban environment.
                            </p>
                            <p class="mechsolvix-company-simple-content">
                                We aim to expand our services globally, building upon our reputation for <strong>unwavering quality</strong> and <strong>ethical practice</strong>. Our work is meaningful — it impacts not just the current generation but also <strong>generations to come</strong>, creating a legacy that will outlive us all by developing essential, resilient infrastructure that supports long-term economic and social growth in the Kingdom and beyond.
                            </p>
                        </div>
                    </div>

                    <div style="clear: both;"></div>

                    {{-- Excellence Section with Left-aligned Heading --}}
                    <div class="mechsolvix-excellence-section mt-5">
                        <div class="mechsolvix-section-header">
                            <span class="mechsolvix-section-badge">OUR EXCELLENCE</span>
                            <h3 class="mechsolvix-section-subheading">Our Focus on Excellence</h3>
                        </div>

                        <ul class="mechsolvix-company-services-list list-unstyled mt-4">
                            <li><i class="fas fa-check-circle me-2" style="color: #38bdf8;"></i> <strong>Precision in Design and Execution:</strong> We focus on the finest details to ensure projects are executed in full compliance with the highest engineering quality standards.</li>
                            <li><i class="fas fa-check-circle me-2" style="color: #38bdf8;"></i> <strong>Client Satisfaction is Our Priority:</strong> Our success is measured by our clients' satisfaction, committing us to exceptional service delivery.</li>
                            <li><i class="fas fa-check-circle me-2" style="color: #38bdf8;"></i> <strong>Integrated Solutions:</strong> We offer design, supervision, and project management to ensure your project's success from concept to execution.</li>
                            <li><i class="fas fa-check-circle me-2" style="color: #38bdf8;"></i> <strong>Reliable Consultations:</strong> We provide reliable consultations and accurate reports, ensuring complete clarity in all aspects of the project.</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

{{-- 2. WHY CHOOSE US SECTION WITH BACKGROUND IMAGE - UPDATED HEADING --}}
<section class="mechsolvix-why-choose-us-bg-section position-relative">
    <!-- Background Image with Overlay -->
    <div class="mechsolvix-bg-image-overlay" style="
        background-image: url('img/trustedbg.jpg');
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    "></div>

    <div class="mechsolvix-overlay-dark" style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(8, 20, 40, 0.75);
        z-index: 2;
    "></div>

    <div class="container py-5 position-relative" style="z-index: 3;">
        {{-- Section Header - Left Aligned with Badge --}}
        <div class="row mb-5">
            <div class="col-lg-11 mx-auto text-start">
                <div class="mechsolvix-section-header">
                    <span class="mechsolvix-section-badge-light">WHY CHOOSE US</span>
                    <h2 class="mechsolvix-section-title-light">What Makes Us <span class="mechsolvix-text-accent-blue">Different</span></h2>
                    <p class="mechsolvix-section-subtitle-light">We stand out through our commitment to excellence, innovation, and client satisfaction.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-11 mx-auto">
                <div class="mechsolvix-why-choose-list-bg">
                    <div class="mechsolvix-choose-item-bg mechsolvix-compact-item">
                        <i class="fas fa-cogs mechsolvix-choose-icon-bg"></i>
                        <div class="mechsolvix-choose-content-bg">
                            <h4>Technical Excellence</h4>
                            <p>Advanced BIM, FEA, and CFD tools with certified professionals.</p>
                        </div>
                    </div>

                    <div class="mechsolvix-choose-item-bg mechsolvix-compact-item">
                        <i class="fas fa-chart-line mechsolvix-choose-icon-bg"></i>
                        <div class="mechsolvix-choose-content-bg">
                            <h4>Project Management</h4>
                            <p>Meticulous planning for on-time, within-budget delivery.</p>
                        </div>
                    </div>

                    <div class="mechsolvix-choose-item-bg mechsolvix-compact-item">
                        <i class="fas fa-shield-alt mechsolvix-choose-icon-bg"></i>
                        <div class="mechsolvix-choose-content-bg">
                            <h4>Safety & Compliance</h4>
                            <p>Zero-incident safety with full regulatory compliance.</p>
                        </div>
                    </div>

                    <div class="mechsolvix-choose-item-bg mechsolvix-compact-item">
                        <i class="fas fa-hands-helping mechsolvix-choose-icon-bg"></i>
                        <div class="mechsolvix-choose-content-bg">
                            <h4>Client Partnership</h4>
                            <p>Long-term relationships with transparent communication.</p>
                        </div>
                    </div>

                    <div class="mechsolvix-choose-item-bg mechsolvix-compact-item">
                        <i class="fas fa-leaf mechsolvix-choose-icon-bg"></i>
                        <div class="mechsolvix-choose-content-bg">
                            <h4>Sustainable Solutions</h4>
                            <p>Green building principles and sustainable materials.</p>
                        </div>
                    </div>

                    <div class="mechsolvix-choose-item-bg mechsolvix-compact-item">
                        <i class="fas fa-award mechsolvix-choose-icon-bg"></i>
                        <div class="mechsolvix-choose-content-bg">
                            <h4>Proven Track Record</h4>
                            <p>500+ completed projects with 98% client retention.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 3. CORE VALUES SECTION --}}
<section class="mechsolvix-core-values-section py-5">
    <div class="container py-lg-5">
        {{-- Section Header - Left Aligned with Badge --}}
        <div class="row mb-5">
            <div class="col-lg-11 mx-auto text-start">
                <div class="mechsolvix-section-header">
                    <span class="mechsolvix-section-badge">OUR FOUNDATION</span>
                    <h2 class="mechsolvix-section-title">Core <span class="mechsolvix-text-accent-blue">Values</span></h2>
                    <p class="mechsolvix-section-subtitle">Our work is guided by uncompromised principles that ensure integrity, quality, and lasting partnerships with our clients.</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-11 mx-auto">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="mechsolvix-value-card h-100">
                            <div class="mechsolvix-value-icon-box">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h5 class="mechsolvix-value-title mt-3">Integrity & Trust</h5>
                            <p class="mechsolvix-value-text">We maintain the highest level of ethical standards and transparency in all our consultations and project dealings.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="mechsolvix-value-card h-100">
                            <div class="mechsolvix-value-icon-box">
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="mechsolvix-value-title mt-3">Unwavering Quality</h5>
                            <p class="mechsolvix-value-text">A commitment to delivering projects and designs that exceed industry benchmarks and client expectations every time.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="mechsolvix-value-card h-100">
                            <div class="mechsolvix-value-icon-box">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h5 class="mechsolvix-value-title mt-3">Innovation</h5>
                            <p class="mechsolvix-value-text">We embrace cutting-edge technology and creative engineering solutions to achieve efficiency and precision.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="mechsolvix-value-card h-100">
                            <div class="mechsolvix-value-icon-box">
                                <i class="fas fa-tree"></i>
                            </div>
                            <h5 class="mechsolvix-value-title mt-3">Sustainability</h5>
                            <p class="mechsolvix-value-text">A dedication to incorporating sustainable practices and environmentally responsible designs in every project.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 4. STATISTICS SECTION --}}
<section class="mechsolvix-statistics-section py-5" style="background: #f8fafc;">
    <div class="container py-lg-5">
        {{-- Section Header - Left Aligned with Badge --}}
        <div class="row mb-5">
            <div class="col-lg-11 mx-auto text-start">
                <div class="mechsolvix-section-header">
                    <span class="mechsolvix-section-badge">OUR ACHIEVEMENTS</span>
                    <h2 class="mechsolvix-section-title">Our Projects Speak for <span class="mechsolvix-text-accent-blue">Themselves</span></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-11 mx-auto">
                <div class="row text-center">
                    <div class="col-6 col-md-3 mb-4">
                        <h3 class="display-5 fw-bold mb-0" style="color: #38bdf8;">100+</h3>
                        <p class="mechsolvix-text-dark-navy mb-0">Residential Projects</p>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <h3 class="display-5 fw-bold mb-0" style="color: #38bdf8;">95+</h3>
                        <p class="mechsolvix-text-dark-navy mb-0">Investment Projects</p>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <h3 class="display-5 fw-bold mb-0" style="color: #38bdf8;">300+</h3>
                        <p class="mechsolvix-text-dark-navy mb-0">Legal Settlements</p>
                    </div>
                    <div class="col-6 col-md-3 mb-4">
                        <h3 class="display-5 fw-bold mb-0" style="color: #38bdf8;">75+</h3>
                        <p class="mechsolvix-text-dark-navy mb-0">Ministry of Justice Cost</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Import Raleway Font */
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap');

/* Base Styles */
:root {
    --mechsolvix-primary-blue: #56c9ff;
    --mechsolvix-sky-blue: #38bdf8;
    --mechsolvix-dark-sky-blue: #0ea5e9;
    --mechsolvix-white: #ffffff;
    --mechsolvix-light-gray: #f8fafc;
    --mechsolvix-medium-gray: #94a3b8;
    --mechsolvix-dark-navy: #1e293b;
    --mechsolvix-slate-text: #64748b;
    --mechsolvix-slate-dark: #1e293b;
}

body {
    font-family: 'Raleway', sans-serif !important;
}

/* ============================================ */
/* PAGE HEADER - INCREASED HEIGHT AND LOWER TEXT */
/* ============================================ */
.page-header-mechsolvix {
    min-height: 380px !important; /* Increased height */
    display: flex;
    align-items: center;
    background-attachment: fixed !important;
    padding-top: 80px !important; /* Push content lower */
    padding-bottom: 80px !important;
}

.page-header-mechsolvix .container {
    padding-top: 40px; /* More space above heading */
    padding-bottom: 40px;
}

.page-header-mechsolvix .display-3 {
    font-size: 3.5rem;
    font-weight: 800;
    margin-top: 30px; /* Push heading lower */
}

/* Breadcrumb styling */
.page-header-mechsolvix .breadcrumb {
    margin-top: 20px;
}

.page-header-mechsolvix .breadcrumb-item a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
}

.page-header-mechsolvix .breadcrumb-item a:hover {
    color: var(--mechsolvix-sky-blue);
}

.page-header-mechsolvix .breadcrumb-item.active {
    color: var(--mechsolvix-sky-blue);
}

/* ============================================ */
/* CONTAINER WIDTH */
/* ============================================ */
.container {
    max-width: 1200px !important;
}

/* ============================================ */
/* SECTION SPACING */
/* ============================================ */
.mechsolvix-company-overview-section,
.mechsolvix-core-values-section,
.mechsolvix-statistics-section {
    padding-top: 5rem; /* Increased padding */
    padding-bottom: 5rem;
}

/* ============================================ */
/* SECTION HEADER STYLES - LEFT ALIGNED */
/* ============================================ */
.mechsolvix-section-header {
    margin-bottom: 3rem;
}

.mechsolvix-section-badge {
    background: var(--mechsolvix-primary-blue);
    color: white;
    padding: 0.5rem 1.5rem; /* Slightly larger */
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 700;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-bottom: 1rem;
    display: inline-block;
}

.mechsolvix-section-badge-light {
    background: var(--mechsolvix-sky-blue);
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 700;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-bottom: 1rem;
    display: inline-block;
}

.mechsolvix-section-title {
    font-size: 2.2rem; /* Slightly larger */
    font-weight: 800;
    color: var(--mechsolvix-dark-navy);
    margin-bottom: 0.75rem;
    line-height: 1.2;
}

.mechsolvix-section-title-light {
    font-size: 2.2rem;
    font-weight: 800;
    color: white;
    margin-bottom: 0.75rem;
    line-height: 1.2;
}

.mechsolvix-section-subheading {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--mechsolvix-dark-sky-blue);
    margin-bottom: 1rem;
}

.mechsolvix-section-subtitle {
    font-size: 1.05rem;
    color: var(--mechsolvix-slate-text);
    max-width: 850px;
    margin: 0;
    line-height: 1.6;
}

.mechsolvix-section-subtitle-light {
    font-size: 1.05rem;
    color: rgba(255, 255, 255, 0.9);
    max-width: 850px;
    margin: 0;
    line-height: 1.6;
}

.mechsolvix-text-accent-blue {
    color: var(--mechsolvix-sky-blue) !important;
}

/* ============================================ */
/* COMPANY OVERVIEW SECTION */
/* ============================================ */
.mechsolvix-company-content-center {
    text-align: left;
}

.mechsolvix-company-tagline {
    font-size: 1.15rem;
    color: var(--mechsolvix-slate-text);
    line-height: 1.7;
    border-left: 5px solid var(--mechsolvix-sky-blue); /* Thicker border */
    padding-left: 20px;
    margin: 30px 0;
}

.mechsolvix-company-intro, .mechsolvix-company-simple-content {
    font-size: 1.08rem;
    color: var(--mechsolvix-slate-text);
    line-height: 1.75;
    margin-bottom: 18px;
}

/* Image Styles */
.mechsolvix-company-image-left-large {
    float: left;
    margin-right: 35px;
    margin-bottom: 25px;
    width: 48%;
    height: 340px; /* Increased height */
    object-fit: cover;
    border-radius: 12px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.15);
}

.mechsolvix-company-image-right-large {
    float: right;
    margin-left: 35px;
    margin-bottom: 25px;
    width: 48%;
    height: 340px; /* Increased height */
    object-fit: cover;
    border-radius: 12px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.15);
}

.mechsolvix-image-content-wrapper {
    overflow: hidden;
}

.mechsolvix-clearfix::after {
    content: "";
    display: table;
    clear: both;
}

.mechsolvix-company-services-list li {
    margin-bottom: 15px;
    color: var(--mechsolvix-slate-text);
    font-size: 1.08rem;
    display: flex;
    align-items: flex-start;
    padding: 8px 0;
}

.mechsolvix-company-services-list i {
    margin-top: 4px;
    font-size: 1.05rem;
}

/* ============================================ */
/* WHY CHOOSE US SECTION */
/* ============================================ */
.mechsolvix-why-choose-us-bg-section {
    position: relative;
    padding: 70px 0; /* Increased padding */
    overflow: hidden;
}

.mechsolvix-bg-image-overlay {
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
}

.mechsolvix-overlay-dark {
    background: rgba(8, 20, 40, 0.75);
}

.mechsolvix-why-choose-list-bg {
    max-width: 950px;
    margin: 0 auto;
}

.mechsolvix-choose-item-bg {
    display: flex;
    align-items: center;
    margin-bottom: 18px;
    padding: 20px 22px; /* Increased padding */
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(12px);
    border-radius: 10px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border: 1px solid rgba(255, 255, 255, 0.2);
    height: auto;
}

.mechsolvix-choose-item-bg.mechsolvix-compact-item {
    min-height: auto;
}

.mechsolvix-choose-item-bg:hover {
    transform: translateX(10px); /* Slightly more movement */
    box-shadow: 0 10px 25px rgba(56, 189, 248, 0.2);
    border-color: var(--mechsolvix-sky-blue);
}

.mechsolvix-choose-icon-bg {
    width: 55px; /* Slightly larger */
    height: 55px;
    background: linear-gradient(135deg, var(--mechsolvix-sky-blue), var(--mechsolvix-dark-sky-blue));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.3rem;
    margin-right: 20px;
    flex-shrink: 0;
    box-shadow: 0 6px 18px rgba(56, 189, 248, 0.25);
}

.mechsolvix-choose-content-bg {
    flex: 1;
}

.mechsolvix-choose-content-bg h4 {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--mechsolvix-dark-navy);
    margin-bottom: 8px;
    line-height: 1.3;
}

.mechsolvix-choose-content-bg p {
    color: var(--mechsolvix-slate-text);
    font-size: 1rem;
    line-height: 1.5;
    margin: 0;
}

/* ============================================ */
/* CORE VALUES SECTION */
/* ============================================ */
.mechsolvix-value-card {
    background: var(--mechsolvix-white);
    border-radius: 12px;
    padding: 35px 30px; /* Increased padding */
    box-shadow: 0 12px 30px rgba(0,0,0,0.1);
    border-bottom: 5px solid var(--mechsolvix-sky-blue); /* Thicker border */
    transition: all 0.3s ease;
    height: 100%;
}

.mechsolvix-value-card:hover {
    transform: translateY(-8px); /* More movement */
    box-shadow: 0 20px 40px rgba(56, 189, 248, 0.2);
}

.mechsolvix-value-icon-box {
    width: 75px; /* Slightly larger */
    height: 75px;
    background: rgba(56, 189, 248, 0.15); /* More visible background */
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    color: var(--mechsolvix-sky-blue);
    font-size: 2rem; /* Larger icon */
}

.mechsolvix-value-title {
    font-size: 1.35rem;
    font-weight: 700;
    color: var(--mechsolvix-slate-dark);
    margin: 25px 0 18px;
}

.mechsolvix-value-text {
    color: var(--mechsolvix-slate-text);
    font-size: 1.05rem;
    line-height: 1.6;
}

/* ============================================ */
/* STATISTICS SECTION */
/* ============================================ */
.mechsolvix-statistics-section {
    background: #f8fafc;
}

.mechsolvix-text-dark-navy {
    color: var(--mechsolvix-dark-navy);
    font-weight: 600;
}

/* ============================================ */
/* RESPONSIVE DESIGN */
/* ============================================ */
@media (max-width: 1200px) {
    .container {
        max-width: 100% !important;
        padding-left: 30px;
        padding-right: 30px;
    }

    .page-header-mechsolvix {
        min-height: 320px !important;
        padding-top: 60px !important;
        padding-bottom: 60px !important;
    }

    .page-header-mechsolvix .display-3 {
        font-size: 3rem;
    }

    .mechsolvix-company-image-left-large,
    .mechsolvix-company-image-right-large {
        width: 46%;
        height: 320px;
    }
}

@media (max-width: 992px) {
    .container {
        padding-left: 25px;
        padding-right: 25px;
    }

    .page-header-mechsolvix {
        min-height: 280px !important;
        padding-top: 50px !important;
        padding-bottom: 50px !important;
    }

    .page-header-mechsolvix .display-3 {
        font-size: 2.5rem;
        margin-top: 20px;
    }

    .mechsolvix-section-title,
    .mechsolvix-section-title-light {
        font-size: 2rem;
    }

    .mechsolvix-company-image-left-large,
    .mechsolvix-company-image-right-large {
        width: 44%;
        height: 300px;
    }

    .mechsolvix-choose-icon-bg {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
        margin-right: 18px;
    }

    .mechsolvix-choose-content-bg h4 {
        font-size: 1.15rem;
    }

    .mechsolvix-value-card {
        padding: 30px 25px;
    }
}

@media (max-width: 768px) {
    .page-header-mechsolvix {
        min-height: 240px !important;
        padding-top: 40px !important;
        padding-bottom: 40px !important;
        background-attachment: scroll !important;
    }

    .page-header-mechsolvix .display-3 {
        font-size: 2.2rem;
        margin-top: 15px;
    }

    .mechsolvix-section-title,
    .mechsolvix-section-title-light {
        font-size: 1.8rem;
    }

    .mechsolvix-section-subheading {
        font-size: 1.3rem;
    }

    .mechsolvix-company-image-left-large,
    .mechsolvix-company-image-right-large {
        float: none;
        margin: 0 auto 25px;
        width: 100%;
        height: 280px;
        max-width: 650px;
    }

    .mechsolvix-choose-item-bg {
        flex-direction: column;
        text-align: center;
        padding: 18px;
        margin-bottom: 15px;
    }

    .mechsolvix-choose-icon-bg {
        margin-right: 0;
        margin-bottom: 12px;
        margin-left: auto;
        margin-right: auto;
    }

    .mechsolvix-value-card {
        padding: 25px 20px;
    }

    .mechsolvix-why-choose-us-bg-section {
        padding: 60px 0;
    }
}

@media (max-width: 576px) {
    .page-header-mechsolvix {
        min-height: 200px !important;
        padding-top: 30px !important;
        padding-bottom: 30px !important;
    }

    .page-header-mechsolvix .display-3 {
        font-size: 1.9rem;
        margin-top: 10px;
    }

    .mechsolvix-section-title,
    .mechsolvix-section-title-light {
        font-size: 1.6rem;
    }

    .mechsolvix-section-subheading {
        font-size: 1.2rem;
    }

    .mechsolvix-company-tagline {
        font-size: 1.05rem;
    }

    .mechsolvix-company-image-left-large,
    .mechsolvix-company-image-right-large {
        height: 240px;
    }

    .mechsolvix-choose-content-bg h4 {
        font-size: 1.05rem;
    }

    .mechsolvix-choose-content-bg p {
        font-size: 0.9rem;
    }

    .mechsolvix-value-card {
        padding: 22px 18px;
    }

    .mechsolvix-value-title {
        font-size: 1.2rem;
    }

    .mechsolvix-value-text {
        font-size: 0.95rem;
    }
}
</style>
@endsection
