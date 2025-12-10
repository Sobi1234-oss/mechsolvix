<section class="ind-serv-section-light clients-section">

    <div class="css-wave-container top-wave">
        <div class="wave wave-1"></div>
        <div class="wave wave-2"></div>
    </div>

    <div class="container ind-serv-container-fluid">

        <div class="section-header text-center">
            <h5 class="section-subtitle"></h5>
            <h2 class="section-title">
                Partnering Excellence: <span class="title-accent">Serving the Giants</span>
            </h2>
            <p class="section-tagline">Trusted partner to leading Oil, Gas and Petrochemical Industries across the Middle East.</p>
        </div>

        <div class="clients-grid">
            <div class="client-card">
                <img src="img/clients/client1.png" alt="SABIC" class="client-logo">
            </div>

            <div class="client-card">
                <img src="img/clients/client2.png" alt="ARAMCO" class="client-logo">
            </div>

            <div class="client-card">
                <img src="img/clients/client3.png" alt="SASREF" class="client-logo">
            </div>

            <div class="client-card">
                <img src="img/clients/client4.png" alt="SAMREF" class="client-logo">
            </div>

            <div class="client-card">
                <img src="img/clients/client5.png" alt="YASREF" class="client-logo">
            </div>

            <div class="client-card">
                <img src="img/clients/client6.png" alt="SATORP" class="client-logo">
            </div>

            <div class="client-card">
                <img src="img/clients/client7.png" alt="SADARA" class="client-logo">
            </div>

            <div class="client-card">
                <img src="img/clients/client8.png" alt="SIPCHEM" alt="SIPCHEM" class="client-logo">
            </div>
        </div>

        <div class="clients-achievement">
            <div class="achievement-badge">
                <i class="fas fa-award"></i>
                <span>8+ Industry Leaders</span>
            </div>
            <div class="achievement-badge">
                <i class="fas fa-handshake"></i>
                <span>Proven Reliability</span>
            </div>
            <div class="achievement-badge">
                <i class="fas fa-star"></i>
                <span>Premium Service Rating</span>
            </div>
        </div>
    </div>

    <div class="css-wave-container bottom-wave">
        <div class="wave wave-1"></div>
        <div class="wave wave-2"></div>
    </div>
</section>

<style>
    /* --- Shared Color Variables --- */
    :root {
        --primary-blue: #3b82f6;
        --secondary-dark: #0f172a;
        --light-bg: #f0f4f8;
        --white-bg: #ffffff;
        --light-blue-bg: #e0f7fa;
        --wave-bg: #d1ecf1;
        --medium-slate: #5e6a77;
        --icon-accent-color: #007bff;
    }

    /* Apply Raleway font (Note: assumes link in head) */
    body {
        font-family: 'Raleway', sans-serif;
    }

    /* --- Clients Section: Adopting 'ind-serv-section-light' styling for background/waves --- */
    .clients-section {
        position: relative;
        padding: 100px 0;
        background-color: var(--light-blue-bg);
        overflow: hidden;
    }
    .ind-serv-section-light {
        padding-top: 150px;
        padding-bottom: 150px;
    }


    /* --- Deep CSS Waves Generation --- */
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

    .container {
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 20;
    }

    .ind-serv-container-fluid {
        z-index: 20;
    }


    /* Section Header */
    .section-header {
        margin-bottom: 50px;
        text-align: center !important;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }

    .section-subtitle {
        color: var(--primary-blue);
        font-size: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-bottom: 10px;
        opacity: 0.9;
        display: block;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 900;
        color: var(--medium-slate);
        margin: 0 0 10px 0;
        line-height: 1.1;
        text-shadow: none;
    }

    .title-accent {
        color: var(--icon-accent-color);
        display: inline-block;
    }

    .section-tagline {
        font-size: 1.1rem;
        color: var(--medium-slate);
        font-weight: 400;
        margin-top: 5px;
        max-width: 100%;
    }

    /* Clients Grid */
    .clients-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
        margin: 0 auto;
        max-width: 1250px;
    }

    /* Client Card - BIGGER LOGOS */
    .client-card {
        position: relative;
        background: var(--white-bg);
        border-radius: 10px;
        border: 2px solid transparent;
        height: 250px; /* INCREASED HEIGHT for bigger logos */
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        box-shadow:
            0 8px 25px rgba(0, 0, 0, 0.1);
    }

    /* Hover Effects */
    .client-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow:
            0 20px 40px rgba(0, 0, 0, 0.2),
            0 0 50px rgba(59, 130, 246, 0.3);
        border-color: var(--primary-blue);
    }

    /* Client Logo - FILLS ENTIRE BOX */
    .client-logo {
        width: 100%;
        height: 100%;
        object-fit: contain;
        padding: 20px; /* REDUCED PADDING to make logo BIGGER */
        filter: grayscale(80%) brightness(1) contrast(1.1);
        opacity: 0.8;
        transition: all 0.4s ease;
    }

    /* Hover effect on logo */
    .client-card:hover .client-logo {
        transform: scale(1.05);
        filter: grayscale(0%) brightness(1.1) contrast(1.1);
        opacity: 1;
    }

    /* Achievement Badges */
    .clients-achievement {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
        margin-top: 60px;
        position: relative;
        z-index: 20;
    }

    .achievement-badge {
        display: flex;
        align-items: center;
        gap: 12px;
        background: var(--white-bg);
        border: 1px solid var(--primary-blue);
        border-radius: 50px;
        padding: 14px 30px;
        color: var(--secondary-dark);
        font-size: 1rem;
        font-weight: 600;
        transition: all 0.3s ease;
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .achievement-badge:hover {
        background: var(--primary-blue);
        color: var(--white-bg);
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(59, 130, 246, 0.4);
    }

    .achievement-badge i {
        color: var(--primary-blue);
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }

    .achievement-badge:hover i {
        color: var(--white-bg);
        transform: scale(1.2) rotate(5deg);
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .section-title {
            font-size: 2.2rem;
        }
        .clients-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .client-card {
            height: 220px; /* Adjusted height for 3-column view */
        }
    }

    @media (max-width: 992px) {
        .ind-serv-section-light {
            padding-top: 100px;
            padding-bottom: 100px;
        }
        .section-title {
            font-size: 1.8rem;
        }
        .section-tagline {
            font-size: 1rem;
        }
        .clients-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            max-width: 650px;
        }
        .client-card {
            height: 200px; /* Adjusted height for 2-column view */
        }
    }

    @media (max-width: 768px) {
        .clients-grid {
            gap: 15px;
        }
        .client-card {
            height: 180px;
        }
    }

    @media (max-width: 576px) {
        .section-title {
            font-size: 1.5rem;
        }
        .clients-grid {
            grid-template-columns: 1fr;
            max-width: 100%;
            padding: 0 10px;
        }
        .client-card {
            height: 160px; /* Adjusted height for single column mobile view */
        }
        .clients-achievement {
            margin-top: 30px;
            flex-direction: column;
            align-items: stretch;
            gap: 10px;
        }
        .section-header {
            margin-top: 50px !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        // Ensure initial card opacity is set to 0 and position is offset for animation
        document.querySelectorAll('.client-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)'; /* Increased offset for drama */
            card.style.transition = 'opacity 0.6s cubic-bezier(0.17, 0.88, 0.32, 1.27), transform 0.6s cubic-bezier(0.17, 0.88, 0.32, 1.27)';
        });

        // Simple Intersection Observer for scroll-down animation
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.2 /* Trigger when 20% of the element is visible */
        };

        const cardObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    // Stagger the animation slightly
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 100);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Attach observer to all client cards
        document.querySelectorAll('.client-card').forEach(card => {
            cardObserver.observe(card);
        });

        // Animation for Header (Ensures header fades in after page load)
        const header = document.querySelector('.section-header');
        if (header) {
            header.style.opacity = '0';
            header.style.transform = 'translateY(-15px)';
            header.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';

            setTimeout(() => {
                header.style.opacity = '1';
                header.style.transform = 'translateY(0)';
            }, 100);
        }

        // Animation for Achievement Badges
        const badges = document.querySelectorAll('.achievement-badge');
        badges.forEach((badge, index) => {
            badge.style.opacity = '0';
            badge.style.transform = 'translateY(20px)';
            badge.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';

            setTimeout(() => {
                badge.style.opacity = '1';
                badge.style.transform = 'translateY(0)';
            }, 800 + (index * 150)); /* Staggered fade-up effect */
        });
    });
</script>
