<section class="industrial-about-production-mechsolvix">
    <div class="css-wave-container top-wave">
        <div class="wave wave-1"></div>
        <div class="wave wave-2"></div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-xl-11 col-lg-12 text-center">
                <div class="header-content-box-outside-left centered-heading">
                    <h2 class="main-headline-outside-mechsolvix">
                        <span class="company-name-outside-mechsolvix">About Mechsolvix Engineering Solution</span>
                        <span class="headline-tagline-outside-mechsolvix">Unifying Design, Precision, and Execution!</span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-4">

            <div class="col-lg-5 col-md-6 order-md-1 visual-col">
                <div class="compact-visual-mechsolvix">
                    <div class="image-offset-wrapper centered-on-desktop">
                        <div class="image-container-lg-mechsolvix large-size">
                            <img src="img/about.jpg"
                                 alt="Engineering Consultancy"
                                 class="compact-image-lg">
                            <div class="image-overlay-text-mechsolvix">
                                <span>Precision in Design & Execution</span>
                            </div>
                        </div>
                    </div>

                    <div class="client-priority-badge-dark centered-on-desktop-badge">
                        <i class="fas fa-handshake"></i>
                        <h4>Client Satisfaction is Our Priority</h4>
                        <p>We provide reliable consultations and accurate reports, ensuring complete clarity in all aspects of the project.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-6 order-md-2 content-col">
                <div class="content-wrapper">
                    <h3 class="refactored-inner-heading-blue-no-box">Comprehensive Engineering Services</h3>

                    <div class="text-content-block-mechsolvix">
                        <p class="content-p-1">
                            **Mechsolvix Engineering Solution**, an engineering consultancy firm based in Jeddah, Saudi Arabia, serves clients across the Kingdom. We leverage **cutting-edge technologies** and scientific methodologies to deliver high-quality designs and practical solutions for clients in all regions.
                        </p>

                        <p class="content-p-2">
                            We offer **unified services** including design, supervision, and project management to ensure project success from concept to execution.
                        </p>

                        <p class="content-p-3">
                            We focus on the finest details to ensure projects are executed in full compliance with the **highest engineering quality standards**. Our integrated approach guarantees excellence through final execution.
                        </p>

                        <a href="#" class="learn-more-link-mechsolvix">Learn More About Us <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="css-wave-container bottom-wave">
        <div class="wave wave-1"></div>
        <div class="wave wave-2"></div>
    </div>
</section>
<style>
    /* Import Raleway Font */
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap');

    /* Custom Color Palette */
    :root {
        --dark-blue: #0a1525;
        --light-blue-bg: #e0f7fa;
        --wave-bg: #d1ecf1;
        --icon-accent-color: #007bff;
        --slate-color: #708090;
        --medium-slate: #5e6a77;
        --offset-accent-bg: #cbe3f7;
        --white-color: #ffffff;
        --shadow-dark: 0 10px 30px rgba(0, 0, 0, 0.1);
        --dark-bg-card: #cbe3f7;
        --dark-text-card: var(--dark-blue);
    }

    /* --- 1. SECTION CONTAINER & BACKGROUND --- */
    .industrial-about-production-mechsolvix {
        position: relative;
        background-color: var(--light-blue-bg);
        padding-top: 100px;
        padding-bottom: 100px;
        font-family: 'Raleway', sans-serif;
        overflow: hidden;
    }
    .expertise-wave-top-compact, .expertise-wave-bottom-compact {
        display: none;
    }

    /* --- New Deep CSS Waves Generation (Unchanged) --- */
    .css-wave-container {
        position: absolute;
        left: 0;
        width: 100%;
        height: 120px;
        z-index: 10;
        overflow: hidden;
    }
    .top-wave { top: 0; }
    .bottom-wave { bottom: 0; }
    .wave {
        position: absolute;
        width: 150%;
        height: 150%;
        left: -25%;
        border-radius: 45% 55% 0 0 / 100% 100% 0 0;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
        transform-origin: 50% 100%;
    }
    .top-wave .wave-1 { background: var(--wave-bg); bottom: 0; height: 120%; transform: rotate(0deg) translateY(45px); z-index: 12; opacity: 0.9; }
    .top-wave .wave-2 { background: var(--white-color); bottom: 0; height: 100%; border-radius: 40% 60% 0 0 / 100% 100% 0 0; transform: rotate(0deg) translateY(75px); z-index: 13; }
    .bottom-wave .wave-1 { background: var(--wave-bg); top: 0; height: 120%; transform: rotate(180deg) translateY(45px); z-index: 12; opacity: 0.9; }
    .bottom-wave .wave-2 { background: var(--white-color); top: 0; height: 100%; border-radius: 40% 60% 0 0 / 100% 100% 0 0; transform: rotate(180deg) translateY(75px); z-index: 13; }

    /* --- 2. HEADER STYLES (Center Aligned) --- */
    .header-content-box-outside-left.centered-heading {
        padding-bottom: 20px;
        text-align: center;
    }
    .company-name-outside-mechsolvix {
        display: block;
        font-size: 2.2rem;
        font-weight: 800;
        color: var(--medium-slate);
        margin-bottom: 4px;
        line-height: 1.2;
    }
    .headline-tagline-outside-mechsolvix {
        display: block;
        font-size: 1.2rem;
        color: var(--icon-accent-color);
        font-weight: 600;
        line-height: 1.3;
    }

    /* --- 3. MAIN CONTENT STYLES (Right Side) --- */
    .refactored-inner-heading-blue-no-box {
        font-size: 2rem;
        font-weight: 900;
        color: var(--medium-slate);
        margin-bottom: 20px;
        border-bottom: none;
        padding-bottom: 0;
        line-height: 1.1;
    }
    .text-content-block-mechsolvix {
        color: var(--medium-slate);
        line-height: 1.6;
        padding-right: 0;
    }
    .text-content-block-mechsolvix p {
        margin-bottom: 15px;
        font-size: 1.05rem; /* Default size for desktop */
        font-weight: 500;
    }
    .text-content-block-mechsolvix p strong {
        color: var(--medium-slate);
        font-weight: 800;
    }
    .learn-more-link-mechsolvix {
        display: inline-block;
        margin-top: 15px;
        color: var(--icon-accent-color);
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s;
    }
    .learn-more-link-mechsolvix:hover {
        color: var(--dark-blue);
    }

    /* --- 4. VISUAL STYLES (Left Side) --- */
    .image-offset-wrapper {
        position: relative;
        margin-bottom: 15px;
    }
    /* Adjusted for Left Alignment on Desktop */
    .image-offset-wrapper.centered-on-desktop {
        margin-right: auto;
        margin-left: 0; /* Align to the left of its column on large screens */
    }

    .image-offset-wrapper::before {
        content: '';
        position: absolute;
        top: 25px;
        left: 25px;
        /* DESKTOP CHANGE: Limited width to match the image container max-width below */
        width: 380px;
        height: 100%;
        background-color: var(--offset-accent-bg);
        border-radius: 12px;
        z-index: 1;
    }

    .image-container-lg-mechsolvix {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--shadow-dark);
        border: 4px solid var(--icon-accent-color);
        z-index: 2;
        /* DESKTOP: Max-width and height */
        max-width: 380px;
        height: 330px;
        margin-left: 0; /* Align to the left */
        margin-right: auto;
    }

    .compact-image-lg {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* --- Image Overlay Text Style --- */
    .image-overlay-text-mechsolvix {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 10px;
        background: rgba(0, 123, 255, 0.8);
        color: var(--white-color);
        font-weight: 700;
        text-align: center;
        font-size: 1.1rem;
    }


    .client-priority-badge-dark {
        max-width: 380px; /* Matched width to image container */
        margin-left: 0; /* Align to the left */
        margin-right: auto;
        margin-top: 10px;
        position: relative;
        z-index: 3;
    }

    /* 📱 Responsive adjustments */
    @media (min-width: 992px) {
        .content-col {
            padding-left: 40px;
        }
    }

    /* Tablet and Mobile (Max 991px) */
    @media (max-width: 991px) {
        /* Mobile/Tablet: Stack content on top, image below */
        .order-md-1 { order: 2 !important; } /* Image/Visual */
        .order-md-2 { order: 1 !important; } /* Content/Text */

        /* Reset image alignment to center for mobile/tablet */
        .image-offset-wrapper.centered-on-desktop {
            margin-right: auto;
            margin-left: auto;
        }

        /* Hide desktop offset effect and its fixed width on mobile */
        .image-offset-wrapper::before {
             display: none;
             width: 100%; /* Reset width for safety */
        }

        /* Image responsiveness and centering */
        .image-container-lg-mechsolvix {
            max-width: 100%;
            height: 220px; /* Reduced height on mobile/tablet */
            margin-top: 30px;
            margin-right: auto;
            margin-left: auto;
        }

        /* Smaller Image Overlay Text for Mobile Readability */
        .image-overlay-text-mechsolvix {
            font-size: 0.9rem;
            padding: 8px;
        }


        /* Smaller Text for Mobile Readability */
        .text-content-block-mechsolvix p {
            font-size: 0.95rem;
        }

        /* Section padding adjustment for mobile */
        .industrial-about-production-mechsolvix {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        /* Badge Centering */
        .client-priority-badge-dark {
             margin-right: auto;
             margin-left: auto;
             margin-top: 15px;
        }
    }

    /* Small Mobile (Max 576px) */
    @media (max-width: 576px) {
        .company-name-outside-mechsolvix {
            font-size: 1.6rem;
        }
        .headline-tagline-outside-mechsolvix {
            font-size: 1rem;
        }
        .refactored-inner-heading-blue-no-box {
            font-size: 1.5rem;
        }
    }
    /* Mobile: Move main heading downward */
@media (max-width: 768px) {
    .main-headline-outside-mechsolvix {
        margin-top: 40px !important;   /* Adjust gap */
        display: block;
    }
}

</style>
