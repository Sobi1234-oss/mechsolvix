<section class="mission-vision-bg-section">
    <div class="overlay-dark"></div>

    <div class="container position-relative">
        <div class="row align-items-start">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6 text-white content-right-shift">

                <!-- TAGLINE -->
                <div class="tagline-wrapper mb-4">
                    <span class="tagline-small">Driven by Innovation</span>
                    <h2 class="tagline-main">
                        Shaping Tomorrow, <br>
                        Through Smart Engineering
                    </h2>
                </div>

                <!-- BOX WRAPPER -->
                <div class="mission-vision-wrapper">

                    <div class="white-glass-box">
                        <h3 class="box-title">Our Mission</h3>
                        <p>
                            Our mission is to deliver dependable and high-quality engineering
                            solutions that strengthen industrial operations and project performance.
                            We focus on safety-driven execution, technical accuracy,
                            and efficient project delivery.
                            By combining engineering expertise with disciplined supervision,
                            we ensure reliability, compliance, and long-term value
                            for every client we serve.
                        </p>
                    </div>

                    <div class="white-glass-box">
                        <h3 class="box-title">Our Vision</h3>
                        <p>
                            Our vision is to become a recognized leader in engineering services
                            through innovation, digital integration, and sustainable practices.
                            We aim to leverage modern tools such as BIM,
                            advanced project planning, and smart supervision
                            to set new standards in quality, safety, and operational excellence.
                            Our goal is to shape future-ready infrastructure
                            with integrity and technical brilliance.
                        </p>
                    </div>

                </div>
            </div>

            <!-- RIGHT SIDE BIG BOX -->
            <div class="col-lg-6 d-flex justify-content-end">
                <div class="why-choose-box">
                    <h4>Why Clients Choose Us ?</h4>

                    <p>
                        Clients choose us because we combine strong engineering fundamentals
                        with disciplined execution and transparent project control.
                        Our approach is built on precision, accountability,
                        and a deep understanding of site realities.
                    </p>

                    <p>
                        From planning to execution, we focus on minimizing risks,
                        optimizing resources, and maintaining strict safety
                        and quality standards. Our experienced leadership,
                        structured workflows, and technology-driven coordination
                        ensure predictable outcomes and long-term project success.
                    </p>

                    <div class="choose-points">
                        <span>✔ Experienced Engineering Leadership</span>
                        <span>✔ Structured Project Execution</span>
                        <span>✔ Safety & Quality Driven Approach</span>
                        <span>✔ BIM & Digital Coordination</span>
                        <span>✔ Reliable On-Site Supervision</span>
                        <span>✔ Transparent Client Communication</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600;700;800&display=swap');

/* 🔹 PARALLAX ENABLED */
.mission-vision-bg-section {
    position: relative;
    background-image: url('img/vission2.png ');
    background-size: cover;
    background-position: center;
    background-attachment: fixed; /* ✅ PARALLAX */
    padding: 80px 0;
    font-family: 'Raleway', sans-serif;
}

/* Overlay same */
.overlay-dark {
    position: absolute;
    inset: 0;
    background: rgba(6, 20, 40, 0.45);
    z-index: 1;
}

.mission-vision-bg-section .container {
    position: relative;
    z-index: 2;
}

/* ✅ HEADING SPACE FIX */
.content-right-shift {
    padding-left: 20px;
}

/* ✅ TAGLINE WITH MORE LEFT SPACE */
.tagline-wrapper {
    border-left: 4px solid #38bdf8;
    padding-left: 20px; /* Increased from 14px to 20px */
    margin-top: -5px;
    margin-left: 10px; /* Added left margin for more space */
}

.tagline-small {
    color: #38bdf8;
    font-size: 0.85rem;
    letter-spacing: 2px;
    font-weight: 600;
}

.tagline-main {
    font-size: 2.2rem;
    font-weight: 800;
    color: #fff;
    margin-top: 6px;
}

/* BOX WRAPPER */
.mission-vision-wrapper {
    display: flex;
    flex-direction: column;
    gap: 26px;
    padding-left: 10px; /* Added padding to move boxes slightly right */
}

/* ✅ WHITE GLASS BOXES WITH CENTER ALIGNMENT ON MOBILE */
.white-glass-box {
    background: rgba(255, 255, 255, 0.94);
    border-radius: 12px;
    padding: 22px 24px;
    max-width: 680px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
    margin-left: 10px; /* Added left margin */
}

.box-title {
    font-size: 1.45rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 10px;
}

.white-glass-box p {
    font-size: 0.95rem;
    line-height: 1.65;
    color: #334155;
}

/* WHY CHOOSE */
.why-choose-box {
    background: rgba(255, 255, 255, 0.18);
    backdrop-filter: blur(7px);
    border-left: 5px solid #38bdf8;
    padding: 32px;
    max-width: 520px;
    border-radius: 18px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.35);
    margin-top: 130px;
}

.why-choose-box h4 {
    color: #fff;
    font-size: 1.6rem;
    margin-bottom: 14px;
}

.why-choose-box p {
    color: #e2e8f0;
    font-size: 0.98rem;
}

.choose-points {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 8px;
    color: #e2e8f0;
    font-size: 0.9rem;
    margin-top: 10px;
}

/* ✅ TABLET RESPONSIVE */
@media (max-width: 992px) {
    .mission-vision-bg-section {
        background-attachment: scroll; /* mobile fix */
    }

    .content-right-shift {
        padding-left: 0;
    }

    /* ✅ CENTER BOXES ON TABLET */
    .mission-vision-wrapper {
        padding-left: 0;
        align-items: center; /* Center boxes horizontally */
    }

    .white-glass-box {
        margin-left: 0;
        max-width: 90%; /* Slightly reduce width for better centering */
    }

    .why-choose-box {
        margin-top: 40px;
        max-width: 90%; /* Reduced width for centering */
        margin-left: auto;
        margin-right: auto; /* Center the box */
    }
}

/* ✅ MOBILE RESPONSIVE */
@media (max-width: 768px) {
    .mission-vision-bg-section {
        padding: 60px 0;
    }

    /* ✅ CENTER EVERYTHING ON MOBILE */
    .content-right-shift {
        padding-left: 15px;
        padding-right: 15px;
        text-align: center; /* Center text on mobile */
    }

    .tagline-wrapper {
        border-left: none; /* Remove left border on mobile */
        padding-left: 0;
        margin-left: 0;
        text-align: center;
        border-top: 3px solid #38bdf8; /* Add top border for mobile */
        padding-top: 15px;
        margin-top: 0;
    }

    .tagline-main {
        font-size: 1.9rem;
    }

    /* ✅ FULLY CENTERED BOXES ON MOBILE */
    .mission-vision-wrapper {
        align-items: center;
        padding-left: 0;
        gap: 20px;
    }

    .white-glass-box {
        max-width: 100%; /* Full width on mobile */
        margin-left: 0;
        padding: 20px;
        text-align: left; /* Keep text left aligned inside boxes */
    }

    .why-choose-box {
        max-width: 100%; /* Full width on mobile */
        margin-top: 30px;
        padding: 25px;
        text-align: left; /* Keep text left aligned inside box */
    }

    .choose-points {
        grid-template-columns: 1fr; /* Single column on mobile */
    }
}

@media (max-width: 576px) {
    .tagline-main {
        font-size: 1.7rem;
    }

    .white-glass-box,
    .why-choose-box {
        padding: 18px;
    }

    .box-title {
        font-size: 1.3rem;
    }

    .why-choose-box h4 {
        font-size: 1.4rem;
    }

    .white-glass-box p,
    .why-choose-box p {
        font-size: 0.9rem;
    }
}
</style>
