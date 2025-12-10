<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<section class="ind-serv-section-light hseq-section-wave">

    <div class="css-wave-container top-wave">
        <div class="wave wave-1"></div>
        <div class="wave wave-2"></div>
    </div>

    <div class="container hseq-content-container">
        <div class="row align-items-center">

            <div class="col-lg-5 col-md-6 text-center mb-4" data-aos="zoom-in">
                <img src="img/hseqbg.jpg" alt="HSEQ Image" class="hseq-left-image">
            </div>

            <div class="col-lg-7 col-md-6" data-aos="fade-left">
                <div class="hseq-content-box bg-white-content">

                    <h2 class="hseq-title">
                        MechSolvix<br>
                        <span class="hseq-highlight">HSEQ Commitment</span><br>
                        <span class="hseq-subtitle">Environment</span>
                    </h2>

                    <p class="hseq-text">
                        MechSolvix is committed to a **'Zero Harm, Zero Accidents'** environmental policy.
                        We minimize environmental impact, reduce energy consumption, manage waste responsibly,
                        and ensure sustainable practices in every project we undertake. Our dedication to the planet is paramount.
                    </p>

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
    /* Custom Variables (Consistent with previous sections) */
    :root {
        --primary-blue: #3b82f6; /* Bright Blue Accent */
        --light-blue-bg: #e0f7fa; /* The light background color */
        --wave-bg: #d1ecf1;
        --white-bg: #ffffff;
        --dark-blue: #003c80; /* Original dark blue */
        --highlight-color: #2c71d9; /* Used for HSEQ Highlight */
        --slate-text: #334155; /* Dark Slate for body text and new heading color */
    }

    /* Apply Raleway font */
    body {
        font-family: 'Raleway', sans-serif;
    }

    /* --- SECTION SETUP --- */
    .hseq-section-wave {
        position: relative;
        overflow: hidden;
        background-color: var(--light-blue-bg);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Global Section Padding (Adjusted for waves) */
    .ind-serv-section-light {
        padding-top: 150px;
        padding-bottom: 150px;
    }

    /* Ensure content container is above waves */
    .hseq-content-container {
        position: relative;
        z-index: 20;
    }


    /* --- DEEP CSS WAVES GENERATION (COPIED FROM PREVIOUS SECTION) --- */
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
    .top-wave .wave-2 { background: var(--white-bg); bottom: 0; height: 100%; border-radius: 40% 60% 0 0 / 100% 100% 0 0; transform: rotate(0deg) translateY(75px); z-index: 13; }
    .bottom-wave .wave-1 { background: var(--wave-bg); top: 0; height: 120%; transform: rotate(180deg) translateY(45px); z-index: 12; opacity: 0.9; }
    .bottom-wave .wave-2 { background: var(--white-bg); top: 0; height: 100%; border-radius: 40% 60% 0 0 / 100% 100% 0 0; transform: rotate(180deg) translateY(75px); z-index: 13; }
    /* --- End Wave Generation CSS --- */


    /* IMAGE */
    .hseq-left-image {
        width: 100%;
        max-width: 430px;
        height: 430px;
        object-fit: cover;
        border-radius: 22px;
        box-shadow: 0 12px 35px rgba(0,0,0,0.25);
        transition: transform 0.5s ease;
    }

    .hseq-left-image:hover {
        transform: scale(1.06);
    }

    /* CONTENT BOX */
    .hseq-content-box {
        padding: 40px;
        border-radius: 14px;
        background: var(--white-bg);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    }

    /* HEADINGS - SIZES SMALLER & SLATE COLOR APPLIED */
    .hseq-title {
        font-size: 2.2rem; /* Reduced size (was 2.8rem) */
        font-weight: 900;
        line-height: 1.1; /* Reduced line height */
        color: var(--slate-text); /* Changed to Slate color */
        margin-bottom: 15px; /* Reduced margin */
    }

    .hseq-highlight {
        color: var(--highlight-color);
        display: block;
        font-size: 1.8rem; /* Reduced size (was 2.5rem) */
        line-height: 1.1; /* Reduced line height */
    }

    .hseq-subtitle {
        color: var(--primary-blue);
        font-size: 1.3rem; /* Reduced size (was 1.5rem) */
        font-weight: 700;
        margin-top: 10px;
        display: block;
        line-height: 1.1; /* Reduced line height */
    }

    /* TEXT - SMALLER LINE HEIGHT */
    .hseq-text {
        color: var(--slate-text);
        font-size: 1.05rem;
        line-height: 1.5; /* Reduced line height (was 1.75) */
        margin-top: 10px;
        font-weight: 500;
        margin-bottom: 20px; /* Reduced margin */
    }

    /* REMOVED: .hseq-link-button styling */


    /* AOS Animation Smoothness */
    [data-aos] {
        transition-duration: 1.2s !important;
    }

    /* RESPONSIVE FIXES */
    @media (max-width: 992px) {
        .ind-serv-section-light {
            padding-top: 100px;
            padding-bottom: 100px;
        }
        .hseq-left-image {
            max-width: 400px;
            height: 400px;
            margin-bottom: 30px !important;
        }
        .hseq-title {
            font-size: 2rem; /* Adjusted for tablet */
        }
        .hseq-highlight {
            font-size: 1.7rem; /* Adjusted for tablet */
        }
        .hseq-content-box {
            padding: 30px;
        }
    }

    @media (max-width: 768px) {
        .hseq-left-image {
            max-width: 300px;
            height: 300px;
            border-radius: 16px;
        }
        .hseq-title {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }
        .hseq-highlight {
            font-size: 1.6rem;
        }
        .hseq-subtitle {
            font-size: 1.2rem;
        }
        .hseq-text {
            font-size: 1rem;
            line-height: 1.4; /* Mobile line height reduction */
            margin-bottom: 15px;
        }
        .hseq-content-box {
            padding: 20px;
        }
    }

    @media (max-width: 576px) {
        .hseq-left-image {
            max-width: 100%;
            height: auto;
            max-height: 300px;
        }
        .hseq-title {
            font-size: 1.6rem;
        }
        .hseq-highlight {
            font-size: 1.4rem;
        }
    }
</style>
