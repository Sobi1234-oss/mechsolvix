<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<section class="hseq-clean-section">

    <div class="container">

        <!-- SECTION HEADING -->
        <div class="section-header">
            <h2 class="section-title">
                HSEQ <span>Commitment</span>
            </h2>
            <p class="section-subtitle">
                Our commitment to Health, Safety, Environment, and Quality
                ensures responsible operations, safe workplaces,
                and excellence in every engineering project.
            </p>
        </div>

        <!-- TOP CONTENT -->
        <div class="row align-items-center hseq-top">

            <div class="col-lg-5 text-center mb-4 mb-lg-0">
                <img src="img/hseqbg.jpg" loading="lazy" alt="HSEQ Image" class="hseq-image">
            </div>

            <div class="col-lg-7">
                <div class="hseq-content-box">

                    <h3 class="hseq-main-title">
                        Zero Harm. Zero Accidents.
                    </h3>

                    <p>
                        Mechsolvix follows a strict HSEQ framework
                        designed to protect people, assets, and the environment.
                        Our systems focus on proactive risk management,
                        operational discipline, and sustainable practices.
                    </p>

                    <p>
                        By integrating international standards,
                        digital monitoring, and continuous improvement,
                        we ensure compliance, efficiency,
                        and long-term value for our clients and stakeholders.
                    </p>

                </div>
            </div>

        </div>

        <!-- BOTTOM BOXES -->
        <div class="row hseq-bottom-boxes">

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="hseq-white-box">
                    <h4>Health</h4>
                    <p>
                        Mechsolvix ensures a healthy work environment
                        through regular medical checkups,
                        employee health programs, and wellness initiatives.
                        Our focus is to keep teams fit, motivated,
                        and protected at all times.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="hseq-white-box">
                    <h4>Safety</h4>
                    <p>
                        We identify and mitigate risks across all operations
                        by implementing safe work procedures,
                        continuous safety training,
                        and routine audits to maintain
                        zero-accident workplaces.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="hseq-white-box">
                    <h4>Quality</h4>
                    <p>
                        Delivering high-quality engineering solutions
                        is our priority.
                        Our robust quality systems,
                        detailed inspections,
                        and continuous improvement processes
                        ensure compliance with international standards.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
/* BASE */
.hseq-clean-section {
    background: #ffffff;
    padding: 80px 0 70px;
    font-family: 'Raleway', sans-serif;
}

/* SECTION HEADER - CENTERED ON MOBILE */
.section-header {
    max-width: 720px;
    margin-bottom: 55px;
    margin-left: 30px;
    text-align: left; /* Desktop: left aligned */
}

/* ✅ MOBILE: Center header */
@media (max-width: 768px) {
    .section-header {
        text-align: center; /* Center on mobile */
        margin-left: auto;
        margin-right: auto;
        padding: 0 15px;
    }
}

.section-title {
    font-size: 2.4rem;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 12px;
}

.section-title span {
    color: #38bdf8;
}

.section-subtitle {
    font-size: 1.05rem;
    color: #64748b;
    line-height: 1.6;
}

/* IMAGE */
.hseq-image {
    width: 100%;
    max-width: 420px;
    height: 420px;
    object-fit: cover;
    border-radius: 22px;
    box-shadow: 0 12px 35px rgba(0,0,0,0.2);
}

/* TOP CONTENT BOX */
.hseq-content-box {
    background: #ffffff;
    padding: 40px;
    border-radius: 16px;
    box-shadow: 0 10px 35px rgba(0,0,0,0.08);
}

.hseq-main-title {
    font-size: 1.9rem;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 14px;
}

.hseq-content-box p {
    font-size: 1.02rem;
    color: #334155;
    line-height: 1.6;
    margin-bottom: 14px;
}

/* BOTTOM WHITE BOXES */
.hseq-bottom-boxes {
    margin-top: 60px;
}

.hseq-white-box {
    background: #ffffff;
    padding: 30px 28px;
    border-radius: 16px;
    height: 100%;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.hseq-white-box h4 {
    font-size: 1.35rem;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 12px;
}

.hseq-white-box p {
    font-size: 0.95rem;
    color: #475569;
    line-height: 1.6;
}

.hseq-white-box:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 55px rgba(56,189,248,0.25);
}

/* ✅ TABLET RESPONSIVE */
@media (max-width: 992px) {
    .hseq-clean-section {
        padding: 60px 0 50px;
    }

    .hseq-image {
        max-width: 360px;
        height: 360px;
        margin-bottom: 30px;
    }

    .hseq-content-box {
        padding: 30px;
    }

    .hseq-bottom-boxes {
        margin-top: 50px;
    }

    .section-header {
        margin-bottom: 40px;
    }

    .section-title {
        font-size: 2.1rem;
    }
}

/* ✅ MOBILE RESPONSIVE */
@media (max-width: 768px) {
    .hseq-clean-section {
        padding: 40px 0 40px;
    }

    .section-title {
        font-size: 1.9rem;
    }

    .section-subtitle {
        font-size: 1rem;
        padding: 0 10px;
    }

    .hseq-main-title {
        font-size: 1.6rem;
        text-align: center; /* Center on mobile */
    }

    .hseq-content-box {
        padding: 25px;
        margin: 0 15px;
        text-align: center; /* Center content on mobile */
    }

    .hseq-content-box p {
        font-size: 1rem;
        text-align: justify; /* Better readability */
    }

    .hseq-image {
        max-width: 320px;
        height: 320px;
        margin: 0 auto 25px;
    }

    .hseq-bottom-boxes {
        margin-top: 40px;
    }

    .hseq-white-box {
        padding: 25px;
        margin: 0 15px 20px;
        text-align: center;
    }

    .hseq-white-box h4 {
        font-size: 1.3rem;
    }

    .hseq-white-box p {
        font-size: 0.95rem;
        text-align: justify;
    }
}

/* ✅ SMALL MOBILE */
@media (max-width: 576px) {
    .section-title {
        font-size: 1.7rem;
    }

    .section-subtitle {
        font-size: 0.95rem;
    }

    .hseq-image {
        max-width: 280px;
        height: 280px;
    }

    .hseq-content-box {
        padding: 20px;
        margin: 0 10px;
    }

    .hseq-main-title {
        font-size: 1.5rem;
    }

    .hseq-content-box p {
        font-size: 0.95rem;
    }

    .hseq-white-box {
        padding: 20px;
        margin: 0 10px 15px;
    }

    .hseq-white-box h4 {
        font-size: 1.25rem;
    }

    .hseq-white-box p {
        font-size: 0.9rem;
    }
}

/* ✅ EXTRA SMALL DEVICES */
@media (max-width: 400px) {
    .hseq-image {
        max-width: 250px;
        height: 250px;
    }

    .section-title {
        font-size: 1.6rem;
    }

    .hseq-main-title {
        font-size: 1.4rem;
    }

    .hseq-content-box p {
        font-size: 0.9rem;
    }

    .hseq-white-box p {
        font-size: 0.85rem;
    }
}
</style>
