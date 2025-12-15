<section class="eng-services-modern-section">
    <div class="container">

        <!-- SECTION HEADER (UNCHANGED) -->
        <div class="eng-services-header-left">
            <span class="eng-services-tagline">What We Deliver</span>
            <h2>
                Smart & Reliable <br>
                <span>Engineering Services</span>
            </h2>
            <p>
                Our expertise covers the complete project lifecycle — from planning
                and design to execution and supervision — ensuring efficiency,
                safety, and long-term operational value.
            </p>
        </div>

        <!-- ROW 1 -->
        <div class="eng-service-row">
            <div class="eng-service-box">
                <div class="eng-service-image">
                    <img src="img/about_section1.png" loading="lazy" alt="Engineering Supervision">
                </div>
                <div class="eng-service-content">
                    <h3>Engineering Supervision</h3>
                    <p>
                        We provide on-site engineering supervision to ensure strict
                        compliance with approved drawings, specifications, and safety standards.
                    </p>
                    <ul>
                        <li>On-site technical control</li>
                        <li>Quality & safety inspections</li>
                        <li>Progress verification</li>
                        <li>Contractor coordination</li>
                    </ul>
                </div>
            </div>

            <div class="eng-service-box">
                <div class="eng-service-image">
                    <img src="img/carousel3.jpg" loading="lazy" alt="Project Management">
                </div>
                <div class="eng-service-content">
                    <h3>Project Management</h3>
                    <p>
                        We manage projects with a structured approach focused on
                        time control, cost efficiency, and transparent reporting.
                    </p>
                    <ul>
                        <li>Planning & scheduling</li>
                        <li>Cost & budget control</li>
                        <li>Risk management</li>
                        <li>Stakeholder coordination</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ROW 2 -->
        <div class="eng-service-row">
            <div class="eng-service-box">
                <div class="eng-service-image">
                    <img src="img/civil.jpg" loading="lazy" alt="A & E Design">
                </div>
                <div class="eng-service-content">
                    <h3>Architectural & Engineering Design</h3>
                    <p>
                        Integrated architectural, structural, and MEP designs
                        developed using modern tools and industry best practices.
                    </p>
                    <ul>
                        <li>Architectural & structural design</li>
                        <li>MEP coordination</li>
                        <li>Code-compliant solutions</li>
                        <li>Design optimization</li>
                    </ul>
                </div>
            </div>

            <div class="eng-service-box">
                <div class="eng-service-image">
                    <img src="img/about.png" loading="lazy" alt="Feasibility Studies">
                </div>
                <div class="eng-service-content">
                    <h3>Feasibility Studies</h3>
                    <p>
                        Technical and financial feasibility studies that support
                        confident investment and development decisions.
                    </p>
                    <ul>
                        <li>Technical analysis</li>
                        <li>Financial & ROI evaluation</li>
                        <li>Risk assessment</li>
                        <li>Implementation strategy</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ROW 3 -->
        <div class="eng-service-row">
            <div class="eng-service-box">
                <div class="eng-service-image">
                    <img src="img/interior.jpg" loading="lazy" alt="Interior Design">
                </div>
                <div class="eng-service-content">
                    <h3>Interior Design</h3>
                    <p>
                        Functional and aesthetic interior solutions designed to
                        enhance usability, comfort, and visual appeal.
                    </p>
                    <ul>
                        <li>Space planning</li>
                        <li>Material selection</li>
                        <li>Lighting & finishes</li>
                        <li>Execution support</li>
                    </ul>
                </div>
            </div>

            <div class="eng-service-box">
                <div class="eng-service-image">
                    <img src="img/services/building.png" loading="lazy" alt="BIM Modeling">
                </div>
                <div class="eng-service-content">
                    <h3>BIM Modeling</h3>
                    <p>
                        Advanced BIM solutions for clash detection, coordination,
                        and enhanced project visualization.
                    </p>
                    <ul>
                        <li>3D modeling & coordination</li>
                        <li>Clash detection</li>
                        <li>Construction visualization</li>
                        <li>Data-driven planning</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- VIEW MORE BUTTON -->
        <div class="eng-services-btn-wrapper">
            <a href="#" class="eng-view-more-btn">View More Services</a>
        </div>

    </div>
</section>

<style>
/* SECTION */
.eng-services-modern-section {
    background: #ffffff;
    padding: 90px 0;
    font-family: 'Raleway', sans-serif;
}

/* HEADER – UNCHANGED */
.eng-services-header-left {
    max-width: 650px;
    margin-bottom: 70px;
    margin-left: 20px;
}

.eng-services-tagline {
    display: inline-block;
    font-size: 0.85rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    font-weight: 700;
    color: #38bdf8;
    margin-bottom: 8px;
}

.eng-services-header-left h2 {
    font-size: 2.6rem;
    font-weight: 800;
    color: #0f172a;
    line-height: 1.15;
    margin-bottom: 12px;
}

.eng-services-header-left h2 span {
    color: #38bdf8;
}

.eng-services-header-left p {
    font-size: 1.05rem;
    color: #475569;
    line-height: 1.6;
}

/* GRID ROW */
.eng-service-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 45px;
    margin-bottom: 55px;
}

/* SERVICE BOX (HEIGHT INCREASE ONLY) */
.eng-service-box {
    display: flex;
    gap: 25px;
    background: #f8fafc;
    border-radius: 18px;
    padding: 34px;        /* increased */
    min-height: 300px;    /* increased */
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
    transition: transform 0.35s ease, box-shadow 0.35s ease;
    position: relative;
    overflow: hidden;
}

.eng-service-box:hover {
    transform: translateY(-6px);
    box-shadow: 0 22px 50px rgba(0,0,0,0.12);
}

/* ✅ HOVER EFFECT - TEXT PORTION TURNS SKYBLUE */
.eng-service-box:hover .eng-service-content {
    background: rgba(56, 189, 248, 0.05);
    padding: 15px;
    border-radius: 12px;
    margin: -15px;
    transition: all 0.3s ease;
}

.eng-service-box:hover .eng-service-content h3 {
    color: #0ea5e9; /* Sky blue color on hover */
    transition: color 0.3s ease;
}

.eng-service-box:hover .eng-service-content p {
    color: #0f172a; /* Darker color for better contrast */
    transition: color 0.3s ease;
}

.eng-service-box:hover .eng-service-content ul li {
    color: #334155;
    transition: color 0.3s ease;
}

.eng-service-box:hover .eng-service-content ul li::before {
    color: #0ea5e9; /* Sky blue checkmarks on hover */
    transition: color 0.3s ease;
}

/* IMAGE */
.eng-service-image {
    flex: 0 0 40%;
    overflow: hidden;
    border-radius: 14px;
}

.eng-service-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* CONTENT */
.eng-service-content {
    flex: 1;
    transition: all 0.3s ease;
}

.eng-service-content h3 {
    font-size: 1.55rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 10px;
    transition: color 0.3s ease;
}

.eng-service-content p {
    font-size: 0.95rem;
    color: #475569;
    line-height: 1.6;
    margin-bottom: 10px;
    transition: color 0.3s ease;
}

.eng-service-content ul {
    list-style: none;
    padding: 0;
    margin-top: 8px;
}

.eng-service-content ul li {
    font-size: 0.9rem;
    color: #334155;
    margin-bottom: 6px;
    padding-left: 18px;
    position: relative;
    transition: color 0.3s ease;
}

.eng-service-content ul li::before {
    content: "✔";
    position: absolute;
    left: 0;
    color: #38bdf8;
    font-weight: bold;
    transition: color 0.3s ease;
}

/* VIEW MORE BUTTON */
.eng-services-btn-wrapper {
    text-align: center;
    margin-top: 60px;
}

.eng-view-more-btn {
    display: inline-block;
    background: #38bdf8;
    color: #ffffff;
    padding: 14px 38px;
    border-radius: 50px;
    font-size: 1rem;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.3s ease;
}

.eng-view-more-btn:hover {
    background: #0ea5e9;
    transform: translateY(-3px);
}

/* ✅ TABLET RESPONSIVE */
@media (max-width: 992px) {
    .eng-services-modern-section {
        padding: 70px 0;
    }

    .eng-service-row {
        grid-template-columns: 1fr;
        gap: 30px;
    }

    .eng-service-box {
        flex-direction: column;
        min-height: auto;
        padding: 30px;
    }

    .eng-service-image {
        width: 100%;
        height: 220px;
        margin-bottom: 20px;
    }

    .eng-services-header-left {
        margin-left: 0;
        text-align: center;
        max-width: 100%;
        margin-bottom: 50px;
    }

    .eng-services-header-left h2 {
        font-size: 2.2rem;
    }
}

/* ✅ MOBILE RESPONSIVE */
@media (max-width: 768px) {
    .eng-services-modern-section {
        padding: 50px 0;
    }

    .eng-services-header-left h2 {
        font-size: 1.9rem;
    }

    .eng-services-header-left p {
        font-size: 1rem;
        padding: 0 15px;
    }

    .eng-service-row {
        gap: 25px;
        margin-bottom: 35px;
    }

    .eng-service-box {
        padding: 25px;
        margin: 0 15px;
    }

    .eng-service-content h3 {
        font-size: 1.4rem;
        text-align: center;
    }

    .eng-service-content p {
        font-size: 0.9rem;
        text-align: center;
    }

    .eng-service-content ul {
        text-align: left;
        padding: 0 15px;
    }

    /* ✅ Mobile hover effect adjustment */
    .eng-service-box:hover .eng-service-content {
        padding: 10px;
        margin: -10px;
    }

    .eng-view-more-btn {
        padding: 12px 30px;
        font-size: 0.95rem;
    }
}

/* ✅ SMALL MOBILE */
@media (max-width: 576px) {
    .eng-services-header-left h2 {
        font-size: 1.7rem;
    }

    .eng-services-tagline {
        font-size: 0.8rem;
    }

    .eng-service-box {
        padding: 20px;
        margin: 0 10px;
    }

    .eng-service-image {
        height: 180px;
    }

    .eng-service-content h3 {
        font-size: 1.3rem;
    }

    .eng-service-content ul {
        padding: 0 10px;
    }

    .eng-service-content ul li {
        font-size: 0.85rem;
    }

    .eng-view-more-btn {
        padding: 10px 25px;
        font-size: 0.9rem;
    }
}

/* ✅ EXTRA SMALL DEVICES */
@media (max-width: 400px) {
    .eng-service-content h3 {
        font-size: 1.2rem;
    }

    .eng-service-content p {
        font-size: 0.85rem;
    }

    .eng-service-content ul li {
        font-size: 0.8rem;
    }
}
</style>
