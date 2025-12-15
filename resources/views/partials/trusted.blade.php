<section class="trusted-parallax-section">

    <!-- OVERLAY -->
    <div class="trusted-overlay"></div>

    <div class="container trusted-content-container">
        <div class="row">

            <!-- LEFT CONTENT -->
            <div class="col-lg-12">
                <div class="trusted-glass-box">

                    <!-- HEADING -->
                    <h2 class="trusted-title">
                        MechSolvix<br>
                        <span class="trusted-highlight">Trusted Partner</span><br>
                        <span class="trusted-subtitle">
                            Engineering • Industrial • Construction • Interior Solutions
                        </span>
                    </h2>

                    <p class="desktop-only">
                        <strong>MechSolvix</strong>, based in Saudi Arabia,
                        delivers comprehensive construction, electrical,
                        mechanical, and industrial support services
                        across major industrial sectors.
                    </p>

                    <p class="mobile-summary d-lg-none">
                        <strong>MechSolvix</strong>, based in Saudi Arabia, delivers comprehensive
                        construction, electrical, mechanical, and industrial support services
                        with skilled manpower, modern equipment, and disciplined execution.
                    </p>

                    <p class="d-none d-lg-block">
                        With skilled manpower, modern equipment,
                        and disciplined execution,
                        we support industrial plants,
                        construction projects,
                        and maintenance operations
                        with reliability and precision.
                    </p>

                    <p class="d-none d-lg-block">
                        Our team provides tailored solutions in project planning,
                        supervision, quality assurance, and interior design.
                        We emphasize safety, efficiency, and innovation
                        in every stage of the project, ensuring client satisfaction.
                    </p>

                    <p class="d-none d-lg-block">
                        MechSolvix also offers consultancy services, feasibility studies,
                        and advanced technological solutions including BIM modeling
                        and 3D visualization to optimize project delivery.
                    </p>

                    <!-- Mobile Read More Button -->
                    <div class="mobile-read-more d-lg-none text-center mt-4">
                        <button class="read-more-btn">
                            Read More <i class="fas fa-chevron-down ms-2"></i>
                        </button>
                    </div>

                    <!-- Mobile Hidden Content -->
                    <div class="mobile-hidden-content d-none">
                        <p>
                            With skilled manpower, modern equipment,
                            and disciplined execution,
                            we support industrial plants,
                            construction projects,
                            and maintenance operations
                            with reliability and precision.
                        </p>

                        <p>
                            Our team provides tailored solutions in project planning,
                            supervision, quality assurance, and interior design.
                            We emphasize safety, efficiency, and innovation
                            in every stage of the project, ensuring client satisfaction.
                        </p>

                        <p>
                            MechSolvix also offers consultancy services, feasibility studies,
                            and advanced technological solutions including BIM modeling
                            and 3D visualization to optimize project delivery.
                        </p>

                        <div class="text-center mt-3">
                            <button class="read-less-btn">
                                Read Less <i class="fas fa-chevron-up ms-2"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>

<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600;700;800;900&display=swap');

/* SECTION */
.trusted-parallax-section {
    position: relative;
    min-height: 95vh;
    background-image: url('img/interior.jpg'); /* 🔴 CHANGE IMAGE */
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    display: flex;
    align-items: center;
    font-family: 'Raleway', sans-serif;
}

/* OVERLAY */
.trusted-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to right,
        rgba(8, 20, 40, 0.75),
        rgba(8, 20, 40, 0.35),
        rgba(8, 20, 40, 0.1)
    );
    z-index: 1;
}

/* CONTENT */
.trusted-content-container {
    position: relative;
    z-index: 2;
    width: 100%;
}

/* GLASS BOX */
.trusted-glass-box {
    background: rgba(255, 255, 255, 0.95);
    padding: 50px 48px;
    border-radius: 22px;
    max-width: 900px; /* Increased width */
    margin: 0 auto;
    box-shadow: 0 25px 70px rgba(0,0,0,0.35);
}

/* HEADING */
.trusted-title {
    font-size: 2.4rem;
    font-weight: 900;
    line-height: 1.1;
    color: #334155;
    margin-bottom: 20px;
    text-align: center;
}

.trusted-highlight {
    display: block;
    color: #38bdf8;
    font-size: 2rem;
    line-height: 1.1;
}

.trusted-subtitle {
    display: block;
    color: #38bdf8;
    font-size: 1.4rem;
    font-weight: 700;
    margin-top: 6px;
}

/* TEXT */
.trusted-glass-box p {
    font-size: 1.05rem;
    line-height: 1.7;
    color: #334155;
    margin-bottom: 16px;
}

/* Mobile summary paragraph */
.trusted-glass-box .mobile-summary {
    text-align: center;
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 20px;
}

/* Mobile Read More/Less Buttons */
.read-more-btn, .read-less-btn {
    background: #38bdf8;
    color: white;
    border: none;
    padding: 10px 24px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.95rem;
    cursor: pointer;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.read-more-btn:hover, .read-less-btn:hover {
    background: #0ea5e9;
    transform: translateY(-2px);
}

.mobile-hidden-content {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #e2e8f0;
}

.mobile-hidden-content p {
    text-align: justify;
    font-size: 0.95rem;
}

/* ✅ TABLET RESPONSIVE */
@media (max-width: 992px) {
    .trusted-parallax-section {
        background-attachment: scroll;
        padding: 60px 0;
        min-height: auto;
    }

    .trusted-title {
        font-size: 2rem;
    }

    .trusted-highlight {
        font-size: 1.7rem;
    }

    .trusted-subtitle {
        font-size: 1.25rem;
    }

    .trusted-glass-box {
        padding: 36px 32px;
        max-width: 90%;
    }

    .trusted-glass-box p {
        font-size: 1rem;
    }
}

/* ✅ MOBILE RESPONSIVE */
@media (max-width: 768px) {
    .trusted-parallax-section {
        padding: 40px 0;
    }

    .trusted-glass-box {
        padding: 30px 25px;
        max-width: 95%;
        margin: 0 15px;
    }

    .trusted-title {
        font-size: 1.8rem;
    }

    .trusted-highlight {
        font-size: 1.5rem;
    }

    .trusted-subtitle {
        font-size: 1.1rem;
        text-align: center;
    }

    .trusted-glass-box p {
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 14px;
    }

    .trusted-glass-box .mobile-summary {
        font-size: 0.95rem;
    }
}

/* ✅ SMALL MOBILE */
@media (max-width: 576px) {
    .trusted-parallax-section {
        padding: 30px 0;
    }

    .trusted-glass-box {
        padding: 25px 20px;
        max-width: 100%;
        margin: 0 10px;
    }

    .trusted-title {
        font-size: 1.6rem;
    }

    .trusted-highlight {
        font-size: 1.3rem;
    }

    .trusted-subtitle {
        font-size: 1rem;
    }

    .trusted-glass-box p {
        font-size: 0.9rem;
        line-height: 1.5;
        margin-bottom: 12px;
    }

    .trusted-glass-box .mobile-summary {
        font-size: 0.9rem;
    }

    .read-more-btn, .read-less-btn {
        padding: 8px 20px;
        font-size: 0.9rem;
    }
}

/* ✅ EXTRA SMALL DEVICES */
@media (max-width: 400px) {
    .trusted-title {
        font-size: 1.5rem;
    }

    .trusted-highlight {
        font-size: 1.2rem;
    }

    .trusted-subtitle {
        font-size: 0.95rem;
    }

    .trusted-glass-box {
        padding: 20px 15px;
    }

    .trusted-glass-box p {
        font-size: 0.85rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const readMoreBtn = document.querySelector('.read-more-btn');
    const readLessBtn = document.querySelector('.read-less-btn');
    const mobileHiddenContent = document.querySelector('.mobile-hidden-content');
    const mobileSummary = document.querySelector('.mobile-summary');

    if (readMoreBtn) {
        readMoreBtn.addEventListener('click', function() {
            mobileHiddenContent.classList.remove('d-none');
            mobileHiddenContent.classList.add('d-block');
            mobileSummary.style.display = 'none';
            readMoreBtn.style.display = 'none';
        });
    }

    if (readLessBtn) {
        readLessBtn.addEventListener('click', function() {
            mobileHiddenContent.classList.remove('d-block');
            mobileHiddenContent.classList.add('d-none');
            mobileSummary.style.display = 'block';
            readMoreBtn.style.display = 'block';

            // Scroll back to top of content
            document.querySelector('.trusted-glass-box').scrollIntoView({
                behavior: 'smooth'
            });
        });
    }
});
</script>
