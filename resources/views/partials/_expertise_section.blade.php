<section class="expertise-vision-section-compacted">
    <div class="css-wave-container top-wave">
        <div class="wave wave-1"></div>
        <div class="wave wave-2"></div>
    </div>

    <div class="container py-3">
        <div class="row">
            <div class="col-12 text-center mb-3 pt-4">
                <h2 class="section-title-expertise-slate">With Our Expertise... We Drive Industrial Performance</h2>
            </div>
        </div>

        <div class="row justify-content-center pt-2 pb-5">

            <div class="col-md-4 mb-3 mb-md-0 side-card-down">
                <div class="expertise-card">
                    <div class="card-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="card-title">Reliability & Safety Focus</h3>
                    <p class="card-text">
                        We prioritize stringent safety protocols and asset reliability in every operation, ensuring compliance and maximizing uptime for your critical infrastructure.
                    </p>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0 staggered-less-up">
                <div class="expertise-card">
                    <div class="card-icon">
                        <i class="fas fa-link"></i>
                    </div>
                    <h3 class="card-title">Integrated Solutions</h3>
                    <p class="card-text">
                        We provide unified services spanning mechanical, maintenance, and support fields, streamlining your supply chain and delivering cohesive project execution.
                    </p>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0 side-card-down">
                 <div class="expertise-card">
                    <div class="card-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="card-title">Certified Quality</h3>
                    <p class="card-text">
                        Our work meets international quality standards and specific client specifications, backed by certified professionals and rigorous inspection procedures.
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
    /* Import Raleway Font */
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap');

    /* Define variables for easy color change */
    :root {
        --bg-light-blue: #e0f7fa;
        --wave-bg: #d1ecf1;
        --icon-accent-color: #007bff;
        --slate-color: #708090;
        --dark-text-color: #0a1525;
        --white-color: #ffffff;
    }

    /* --- UTILITY CLASSES FOR CARD POSITIONING --- */
    .staggered-less-up {
        margin-top: -30px; /* Reduced negative margin (was -60px) to bring the middle card down */
    }
    .side-card-down {
        margin-top: 20px; /* New positive margin to push side cards down */
    }

    @media (max-width: 768px) {
        .staggered-less-up, .side-card-down {
            margin-top: 0; /* Reset staggering on small screens */
        }
    }
    /* ------------------------------------------- */

    /* 1. SECTION CONTAINER & BACKGROUND - COMPACTED */
    .expertise-vision-section-compacted {
        position: relative;
        background-color: var(--bg-light-blue);
        /* Retained padding for wave and staggered content space */
        padding-top: 120px;
        padding-bottom: 80px;
        color: var(--dark-text-color);
        font-family: 'Raleway', sans-serif !important;
        overflow: hidden;
    }

    /* Remove old wave divs */
    .expertise-wave-top-compact, .expertise-wave-bottom-compact {
        display: none;
    }

    /* --- Deep CSS Waves Generation (Unchanged) --- */
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

    /* Individual Wave Styling */
    .wave {
        position: absolute;
        width: 150%;
        height: 150%;
        left: -25%;
        border-radius: 45% 55% 0 0 / 100% 100% 0 0;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
        transform-origin: 50% 100%;
    }

    /* Top Waves (Transitioning from White to Light Blue BG) */
    .top-wave .wave-1 {
        background: var(--wave-bg);
        bottom: 0;
        height: 120%;
        transform: rotate(0deg) translateY(45px);
        z-index: 12;
        opacity: 0.9;
    }
    .top-wave .wave-2 {
        background: var(--white-color);
        bottom: 0;
        height: 100%;
        border-radius: 40% 60% 0 0 / 100% 100% 0 0;
        transform: rotate(0deg) translateY(75px);
        z-index: 13;
    }

    /* Bottom Waves (Transitioning from Light Blue BG to White) */
    .bottom-wave .wave-1 {
        background: var(--wave-bg);
        top: 0;
        height: 120%;
        transform: rotate(180deg) translateY(45px);
        z-index: 12;
        opacity: 0.9;
    }
    .bottom-wave .wave-2 {
        background: var(--white-color);
        top: 0;
        height: 100%;
        border-radius: 40% 60% 0 0 / 100% 100% 0 0;
        transform: rotate(180deg) translateY(75px);
        z-index: 13;
    }


    /* 3. TEXT & TITLE STYLES */
    .section-title-expertise-slate {
        font-size: 2rem;
        font-weight: 800;
        color: var(--slate-color);
        margin-bottom: 20px;
        line-height: 1.2;
        font-family: 'Raleway', sans-serif !important;
    }

    /* 4. CARD STYLES */
    .expertise-card {
        text-align: center;
        padding: 20px 15px;
        background: var(--white-color);
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s, box-shadow 0.3s;
        height: 100%;
        font-family: 'Raleway', sans-serif !important;
    }

    .expertise-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--slate-color);
        margin-top: 15px;
        margin-bottom: 10px;
        font-family: 'Raleway', sans-serif !important;
    }

    .card-text {
        font-size: 1rem;
        line-height: 1.5;
        color: var(--slate-color);
        font-family: 'Raleway', sans-serif !important;
    }

    /* 5. ICON STYLES (Circles) */
    .card-icon {
        width: 60px;
        height: 60px;
        background-color: rgba(0, 123, 255, 0.1);
        border: 2px solid var(--icon-accent-color);
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: var(--icon-accent-color);
        margin-bottom: 10px;
        transition: background-color 0.3s, color 0.3s;
    }

    .expertise-card:hover .card-icon {
        background-color: var(--icon-accent-color);
        color: var(--white-color);
    }

    /* 📱 Responsive Adjustments */
    @media (max-width: 992px) {
        .section-title-expertise-slate {
            font-size: 2rem;
        }
        .card-title {
            font-size: 1.4rem;
        }
    }

    @media (max-width: 768px) {
        .expertise-vision-section-compacted {
            padding: 15px 0;
            padding-top: 50px;
            padding-bottom: 50px;
        }
        .section-title-expertise-slate {
            font-size: 1.6rem;
            padding-top: 5px;
            margin-bottom: 15px;
        }
        .expertise-card {
            padding: 15px 10px;
        }
        .card-icon {
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
        }
    }
    /* Mobile heading spacing fix */
@media (max-width: 768px) {
    .section-title-expertise-slate {
        margin-top: 30px !important;  /* Increase gap below wave */
        padding-top: 10px !important;
    }
}

</style>
