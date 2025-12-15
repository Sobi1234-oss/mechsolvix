<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<section class="mechsolvix-about-section final-layout no-waves">

    <div class="container py-5">
        <div class="row align-items-start"> <!-- Changed from align-items-center to align-items-start -->

            <!-- LEFT CONTENT - Will show first on mobile -->
            <div class="col-lg-7 col-md-12 order-lg-1 order-2"
                data-aos="fade-up"
                data-aos-duration="900">

                <div class="mechsolvix-content-wrapper">

                    <div class="mechsolvix-section-heading-wrapper mb-4">
                        <span class="mechsolvix-section-badge">About Us</span>
                        <h2 class="mechsolvix-section-title">
                            Trusted Engineering <br> Solutions Since Day One
                        </h2>
                    </div>

                    <div class="mechsolvix-text-content-block">
                        <p>
                            <strong>Mechsolvix Engineering Solution</strong> is a premier professional engineering consultancy
                            dedicated to delivering **innovative, reliable, and regulatory-compliant solutions** across Saudi Arabia's industrial and construction sectors. We bridge advanced technical expertise with rigorous practical execution to meet the most complex project demands.
                        </p>

                        <!-- Mobile Image - Shows after first paragraph on mobile -->
                        <div class="mechsolvix-mobile-image-container d-lg-none d-block my-4">
                            <div class="mechsolvix-image-card">
                                <div class="mechsolvix-image-badges">
                                    <span>Industrial Design</span>
                                    <span>BIM & Execution</span>
                                    <span>Supervision</span>
                                </div>
                                <img src="img/about.jpg" loading="lazy" alt="Engineering Expertise">
                            </div>
                            <div class="mechsolvix-image-quote mt-3">
                                <p>
                                    Delivering precision-driven engineering solutions through expert supervision,
                                    advanced BIM coordination, and disciplined execution.
                                </p>
                            </div>
                        </div>

                        <div class="mechsolvix-key-pillars mb-4 mt-4">
                            <div class="mechsolvix-pillar" data-aos="fade-right" data-aos-delay="300">
                                <span>15+</span>
                                <p>Years of Combined Industry Experience</p>
                            </div>
                            <div class="mechsolvix-pillar" data-aos="fade-right" data-aos-delay="400">
                                <span>100%</span>
                                <p>Commitment to Safety and Compliance</p>
                            </div>
                            <div class="mechsolvix-pillar" data-aos="fade-right" data-aos-delay="500">
                                <span>KSA</span>
                                <p>Delivering Projects Across Saudi Arabia</p>
                            </div>
                        </div>

                        <p>
                            Our comprehensive service portfolio includes **specialized engineering design, precise BIM coordination, vigilant project supervision, and robust execution support.** This integrated approach ensures seamless consistency, maximum accuracy, and predictable, high-level performance throughout every project lifecycle.
                        </p>

                        <p>
                            We maintain rigorous standards of **quality, safety, and sustainability**. Our certified engineers and project managers are committed to deploying long-term, value-driven solutions, establishing Mechsolvix as a trusted partner for critical industrial outcomes.
                        </p>
                    </div>

                    <a href="/about-us" class="mechsolvix-read-more-link">
                        Discover Our Mission and Values →
                    </a>

                </div>
            </div>

            <!-- RIGHT IMAGE - Hidden on mobile, shows on desktop -->
            <div class="col-lg-5 col-md-12 mt-5 mt-lg-0 mechsolvix-image-column order-lg-2 order-1"
                data-aos="fade-left"
                data-aos-duration="1000">

                <div class="mechsolvix-desktop-image-container d-none d-lg-block">
                    <div class="mechsolvix-image-wrapper">
                        <div class="mechsolvix-image-card">
                            <div class="mechsolvix-image-badges">
                                <span>Industrial Design</span>
                                <span>BIM & Execution</span>
                                <span>Supervision</span>
                            </div>
                            <img src="img/about.jpg" alt="Engineering Expertise">
                        </div>
                    </div>

                    <div class="mechsolvix-image-quote">
                        <p>
                            Delivering precision-driven engineering solutions through expert supervision,
                            advanced BIM coordination, and disciplined execution.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>

<style>
    /* Import Font for consistency */
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;900&display=swap');

    /* Define CSS Variables and base styles for the specific section */
    .mechsolvix-about-section {
        --mechsolvix-sky-blue: #38bdf8;
        --mechsolvix-dark-slate: #1e293b;
        --mechsolvix-medium-slate: #475569;
        --mechsolvix-light-gray: #f8fafc;
        --mechsolvix-deep-blue: #0ea5e9;

        background: #ffffff;
        font-family: 'Raleway', sans-serif;
        padding: 80px 0; /* Increased padding for more height */
    }

    /* CONTENT WRAPPER */
    .mechsolvix-about-section .mechsolvix-content-wrapper {
        max-width: 820px;
    }

    /* HEADING - ALWAYS LEFT ALIGNED */
    .mechsolvix-about-section .mechsolvix-section-heading-wrapper {
        text-align: left;
        border-left: 4px solid var(--mechsolvix-sky-blue);
        padding-left: 16px;
        margin-bottom: 2rem;
    }

    .mechsolvix-about-section .mechsolvix-section-badge {
        font-size: 0.85rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--mechsolvix-sky-blue);
        font-weight: 700;
        display: inline-block;
        margin-bottom: 8px;
    }

    .mechsolvix-about-section .mechsolvix-section-title {
        font-size: 2.4rem;
        font-weight: 900;
        color: var(--mechsolvix-dark-slate);
        line-height: 1.2;
        margin-top: 6px;
        text-align: left;
    }

    /* TEXT - LEFT ALIGNED */
    .mechsolvix-about-section .mechsolvix-text-content-block p {
        font-size: 1.05rem;
        line-height: 1.7;
        color: var(--mechsolvix-medium-slate);
        margin-bottom: 18px;
        text-align: left;
    }

    /* KEY PILLARS STYLING */
    .mechsolvix-about-section .mechsolvix-key-pillars {
        display: flex;
        justify-content: space-between;
        gap: 15px;
        padding: 15px 20px;
        border: 1px solid #e2e8f0;
        background-color: var(--mechsolvix-light-gray);
        border-radius: 8px;
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .mechsolvix-about-section .mechsolvix-key-pillars .mechsolvix-pillar {
        text-align: center;
        flex-grow: 1;
        padding: 10px 0;
        min-width: 100px;
    }

    .mechsolvix-about-section .mechsolvix-key-pillars .mechsolvix-pillar span {
        display: block;
        font-size: 1.8rem;
        font-weight: 900;
        color: var(--mechsolvix-sky-blue);
        line-height: 1;
    }

    .mechsolvix-about-section .mechsolvix-key-pillars .mechsolvix-pillar p {
        font-size: 0.85rem;
        color: var(--mechsolvix-dark-slate);
        font-weight: 600;
        margin-top: 5px;
        margin-bottom: 0;
        line-height: 1.3;
        text-align: center;
    }

    /* LINK */
    .mechsolvix-about-section .mechsolvix-read-more-link {
        font-weight: 700;
        color: var(--mechsolvix-sky-blue);
        text-decoration: none;
        display: inline-block;
        margin-top: 10px;
        text-align: left;
    }

    .mechsolvix-about-section .mechsolvix-read-more-link:hover {
        color: #0284c7;
    }

    /* IMAGE WRAPPER */
    .mechsolvix-about-section .mechsolvix-image-wrapper {
        max-width: 450px;
        width: 100%;
        margin-left: auto;
        margin-right: 0;
        padding-left: 20px;
        box-sizing: border-box;
    }

    /* IMAGE CARD */
    .mechsolvix-about-section .mechsolvix-image-card {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 18px 40px rgba(0,0,0,0.18);
        margin-bottom: 25px;
        height: 360px; margin-top:80px;/* Slightly increased height */
    }

    .mechsolvix-about-section .mechsolvix-image-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .mechsolvix-about-section .mechsolvix-image-card:hover img {
        transform: scale(1.05);
    }

    /* BADGES */
    .mechsolvix-about-section .mechsolvix-image-badges {
        position: absolute;
        top: 14px;
        left: 14px;
        display: flex;
        gap: 8px;
        z-index: 2;
    }

    .mechsolvix-about-section .mechsolvix-image-badges span {
        background: rgba(56,189,248,0.9);
        color: #fff;
        font-size: 0.75rem;
        font-weight: 700;
        padding: 6px 12px;
        border-radius: 20px;
    }

    /* BELOW IMAGE TEXT - QUOTE STYLE */
    .mechsolvix-about-section .mechsolvix-image-quote {
        margin-top: 0;
        text-align: left;
        padding: 15px 20px;
        border-left: 5px solid var(--mechsolvix-deep-blue);
        background-color: var(--mechsolvix-light-gray);
        border-radius: 4px;
        color: var(--mechsolvix-dark-slate);
        font-style: italic;
        max-width: 400px;
        margin-left: auto;
        margin-right: 0;
    }

    .mechsolvix-about-section .mechsolvix-image-quote p {
        font-size: 1rem;
        font-weight: 600;
        line-height: 1.5;
        color: var(--mechsolvix-dark-slate);
        margin-bottom: 0;
        text-align: left;
    }

    /* MOBILE IMAGE CONTAINER */
    .mechsolvix-about-section .mechsolvix-mobile-image-container {
        width: 100%;
        margin: 20px 0;
    }

    .mechsolvix-about-section .mechsolvix-mobile-image-container .mechsolvix-image-card {
        height: 280px;
        margin-bottom: 0;
    }

    /* IMAGE COLUMN - POSITIONED BOTTOM LEFT */
    .mechsolvix-about-section .mechsolvix-image-column {
        display: flex;
        align-items: flex-end; /* Aligns content to bottom */
        margin-top: 0; /* Remove top margin */
    }

    .mechsolvix-about-section .mechsolvix-desktop-image-container {
        width: 100%;
        margin-bottom: 0; /* Remove bottom margin to stick to bottom */
    }

    /* RESPONSIVE ADJUSTMENTS */
    @media (min-width: 992px) {
        /* Make sure content starts from top */
        .mechsolvix-about-section .row.align-items-start {
            min-height: 600px; /* Increased minimum height */
        }

        /* Position image at bottom left */
        .mechsolvix-about-section .mechsolvix-image-column {
            height: 100%;
            padding-left: 30px;
        }

        .mechsolvix-about-section .mechsolvix-desktop-image-container {
            position: relative;
            bottom: 0;
        }
    }

    /* TABLET */
    @media (max-width: 991px) {
        .mechsolvix-about-section {
            padding: 60px 0; /* Reduced padding on tablet */
        }

        .mechsolvix-about-section .mechsolvix-image-wrapper {
            max-width: 100%;
            padding-left: 15px;
            padding-right: 15px;
            margin: auto;
        }

        .mechsolvix-about-section .mechsolvix-image-quote {
            max-width: 100%;
            margin-left: 15px;
            margin-right: 15px;
        }

        /* Keep heading left-aligned on tablet */
        .mechsolvix-about-section .mechsolvix-section-heading-wrapper {
            border-left: 4px solid var(--mechsolvix-sky-blue);
            padding-left: 16px;
            border-top: none;
            padding-top: 0;
            margin-top: 0;
        }

        .mechsolvix-about-section .mechsolvix-section-title {
            font-size: 2rem;
        }
    }

    /* MOBILE */
    @media (max-width: 768px) {
        .mechsolvix-about-section {
            padding: 50px 0; /* Reduced padding on mobile */
        }

        .mechsolvix-about-section .mechsolvix-section-title {
            font-size: 1.9rem;
            text-align: left; /* Keep left-aligned on mobile */
        }

        .mechsolvix-about-section .mechsolvix-section-badge {
            text-align: left; /* Keep left-aligned on mobile */
            display: block;
        }

        .mechsolvix-about-section .mechsolvix-key-pillars {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .mechsolvix-about-section .mechsolvix-mobile-image-container {
            text-align: center;
        }

        .mechsolvix-about-section .mechsolvix-mobile-image-container .mechsolvix-image-card {
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .mechsolvix-about-section .mechsolvix-mobile-image-container .mechsolvix-image-quote {
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
            text-align: left; /* Keep left-aligned on mobile */
            border-left: 5px solid var(--mechsolvix-deep-blue);
            border-top: none;
            padding: 15px;
        }

        /* Keep text left-aligned on mobile */
        .mechsolvix-about-section .mechsolvix-text-content-block {
            text-align: left;
        }

        .mechsolvix-about-section .mechsolvix-text-content-block p {
            text-align: left;
        }

        /* Keep read more link left-aligned */
        .mechsolvix-about-section .mechsolvix-read-more-link {
            text-align: left;
            display: inline-block;
        }
    }

    /* SMALL MOBILE */
    @media (max-width: 576px) {
        .mechsolvix-about-section {
            padding: 40px 0; /* Reduced padding on small mobile */
        }

        .mechsolvix-about-section .mechsolvix-section-title {
            font-size: 1.7rem;
        }

        .mechsolvix-about-section .mechsolvix-key-pillars .mechsolvix-pillar span {
            font-size: 1.5rem;
        }

        .mechsolvix-about-section .mechsolvix-key-pillars .mechsolvix-pillar p {
            font-size: 0.8rem;
        }

        .mechsolvix-about-section .mechsolvix-mobile-image-container .mechsolvix-image-card {
            height: 220px;
        }

        .mechsolvix-about-section .mechsolvix-text-content-block p {
            font-size: 1rem;
        }
    }
</style>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        once: true,
        offset: 120,
        easing: 'ease-in-out'
    });
</script>
