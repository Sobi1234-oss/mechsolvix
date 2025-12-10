@extends('layouts.app')

@section('title', 'Our clients') {{-- Keeping Services title for consistency with the last request --}}

@section('content')

<div class="container-fluid page-header py-5" style="
    background: linear-gradient(rgba(0, 78, 141, 0.8), rgba(0, 78, 141, 0.8)),
                url('img/clientsbg.jpg') no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-3 mt-5">Our Clients</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item" aria-current="page">Our clients</li>
            </ol>
        </nav>
    </div>
</div>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <section class="ind-serv-section-light clients-section">

        <div class="css-wave-container top-wave">
            <div class="wave wave-1"></div>
            <div class="wave wave-2"></div>
        </div>

        <div class="container ind-serv-container-fluid">

            <div class="section-header text-center">
                <h5 class="section-subtitle">STRATEGIC ALLIANCES</h5>
                <h2 class="section-title">
                    Partnering Excellence: <span class="title-accent">Serving the Giants</span>
                </h2>
                <p class="section-tagline">Trusted partner to leading Oil, Gas and Petrochemical Industries across the Middle East.</p>
            </div>

            <div class="clients-grid">
                {{-- Retaining inline animation-delay for staggered fade-in (initial appearance) --}}
                <div class="client-card" style="animation-delay: 0.1s;">
                    <img src="img/clients/client1.png" alt="SABIC" class="client-logo">
                </div>
                <div class="client-card" style="animation-delay: 0.3s;">
                    <img src="img/clients/client2.png" alt="ARAMCO" class="client-logo">
                </div>
                <div class="client-card" style="animation-delay: 0.5s;">
                    <img src="img/clients/client3.png" alt="SASREF" class="client-logo">
                </div>
                <div class="client-card" style="animation-delay: 0.7s;">
                    <img src="img/clients/client4.png" alt="SAMREF" class="client-logo">
                </div>
                <div class="client-card" style="animation-delay: 0.9s;">
                    <img src="img/clients/client5.png" alt="YASREF" class="client-logo">
                </div>
                <div class="client-card" style="animation-delay: 1.1s;">
                    <img src="img/clients/client6.png" alt="SATORP" class="client-logo">
                </div>
                <div class="client-card" style="animation-delay: 1.3s;">
                    <img src="img/clients/client7.png" alt="SADARA" class="client-logo">
                </div>
                <div class="client-card" style="animation-delay: 1.5s;">
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
@include("partials.facts")
    <style>
        /* --- Shared Color Variables --- */
        :root {
            --primary-blue: #3b82f6;
            --secondary-dark: #0f172a;
            --white-bg: #ffffff;
            --light-blue-bg: #e0f7fa;
            --wave-bg: #d1ecf1;
            --medium-slate: #5e6a77;
            --icon-accent-color: #007bff;
        }

        /* Apply Raleway font */
        body {
            font-family: 'Raleway', sans-serif;
        }

        /* --- REMOVED Float/Hover Animation Keyframes (@keyframes softFloat) --- */

        /* --- Clients Section Styling --- */
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

        /* --- Deep CSS Waves Generation (REMAINED) --- */
        .css-wave-container { position: absolute; left: 0; width: 100%; height: 120px; z-index: 10; overflow: hidden; }
        .top-wave { top: 0; }
        .bottom-wave { bottom: 0; }
        .wave { position: absolute; width: 150%; height: 150%; left: -25%; border-radius: 45% 55% 0 0 / 100% 100% 0 0; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05); transform-origin: 50% 100%; }
        .top-wave .wave-1 { background: var(--wave-bg); bottom: 0; height: 120%; transform: rotate(0deg) translateY(45px); z-index: 12; opacity: 0.9; }
        .top-wave .wave-2 { background: var(--white-bg); bottom: 0; height: 100%; border-radius: 40% 60% 0 0 / 100% 100% 0 0; transform: rotate(0deg) translateY(75px); z-index: 13; }
        .bottom-wave .wave-1 { background: var(--wave-bg); top: 0; height: 120%; transform: rotate(180deg) translateY(45px); z-index: 12; opacity: 0.9; }
        .bottom-wave .wave-2 { background: var(--white-bg); top: 0; height: 100%; border-radius: 40% 60% 0 0 / 100% 100% 0 0; transform: rotate(180deg) translateY(75px); z-index: 13; }

        /* --- Section Header (REMAINED) --- */
        .container { max-width: 1300px; margin: 0 auto; padding: 0 20px; position: relative; z-index: 20; }
        .ind-serv-container-fluid { z-index: 20; }
        .section-header { margin-bottom: 70px; text-align: center !important; max-width: 900px; margin-left: auto; margin-right: auto; }
        .section-subtitle { color: var(--primary-blue); font-size: 1rem; font-weight: 700; text-transform: uppercase; letter-spacing: 3px; margin-bottom: 10px; opacity: 0.9; display: block; }
        .section-title { font-size: 3rem; font-weight: 900; color: var(--secondary-dark); margin: 0 0 10px 0; line-height: 1.1; }
        .title-accent { color: var(--icon-accent-color); display: inline-block; }
        .section-tagline { font-size: 1.2rem; color: var(--medium-slate); font-weight: 500; margin-top: 5px; max-width: 100%; }

        /* Clients Grid and Card Sizing (REMAINED LARGE) */
        .clients-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 35px;
            margin: 0 auto;
            max-width: 1300px;
        }

        /* Client Card - REMOVED CONTINUOUS ANIMATION */
        .client-card {
            position: relative;
            background: var(--white-bg);
            border-radius: 15px;
            border: 3px solid transparent;
            height: 280px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);

            /* REMOVED Continuous Float Animation: animation: softFloat 6s ease-in-out infinite alternate; */
            animation: none; /* Ensure no residual animation */
        }

        /* Hover Effects: Remain functional for pop-up interaction */
        .client-card:hover {
            transform: translateY(-15px) scale(1.04);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3), 0 0 60px rgba(59, 130, 246, 0.4);
            border-color: var(--primary-blue);
            animation: none;
        }

        /* Client Logo (COLOR RETAINED) */
        .client-logo {
            width: 100%; height: 100%; object-fit: contain; padding: 40px;
            filter: none; opacity: 1;
            transition: all 0.4s ease;
        }
        .client-card:hover .client-logo {
            transform: scale(1.07);
        }

        /* Achievement Badges (REMAINED) */
        .clients-achievement { display: flex; justify-content: center; gap: 40px; flex-wrap: wrap; margin-top: 80px; position: relative; z-index: 20; }
        .achievement-badge { display: flex; align-items: center; gap: 12px; background: var(--white-bg); border: 1px solid var(--primary-blue); border-radius: 50px; padding: 16px 35px; color: var(--secondary-dark); font-size: 1.1rem; font-weight: 700; transition: all 0.3s ease; cursor: pointer; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15); }
        .achievement-badge:hover { background: var(--primary-blue); color: var(--white-bg); transform: translateY(-7px); box-shadow: 0 12px 25px rgba(59, 130, 246, 0.5); }
        .achievement-badge i { color: var(--primary-blue); font-size: 1.2rem; transition: all 0.3s ease; }
        .achievement-badge:hover i { color: var(--white-bg); transform: scale(1.2) rotate(5deg); }
         @media (max-width: 768px) {
    .page-header {
        background-attachment: scroll !important;
        background-position: center !important;
        background-size: cover !important;
    }
}

        /* Responsive Design (REMAINED) */
        @media (max-width: 1200px) { .clients-grid { grid-template-columns: repeat(3, 1fr); } .client-card { height: 250px; } }
        @media (max-width: 992px) { .section-title { font-size: 2.5rem; } .clients-grid { grid-template-columns: repeat(2, 1fr); gap: 25px; max-width: 700px; } .client-card { height: 220px; } }
        @media (max-width: 768px) { .client-card { height: 180px; } }
        @media (max-width: 576px) { .section-title { font-size: 2rem; } .clients-grid { grid-template-columns: 1fr; padding: 0 10px; } .client-card { height: 160px; } .clients-achievement { margin-top: 40px; flex-direction: column; align-items: center; gap: 15px; } .achievement-badge { width: 90%; justify-content: center; } }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // Initial Scroll-up Animation for Client Cards (One-time fade/slide)
            document.querySelectorAll('.client-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(40px)'; // Initial offset for fade-up
                card.style.transition = 'opacity 0.6s cubic-bezier(0.17, 0.88, 0.32, 1.27), transform 0.6s cubic-bezier(0.17, 0.88, 0.32, 1.27)';
            });

            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.2
            };

            const cardObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        // Use the existing animation-delay style attribute for staggering the initial fade-in
                        const delayAttr = entry.target.style.animationDelay || '0s';
                        const delayMs = parseFloat(delayAttr) * 1000;

                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                            // The continuous float animation is permanently removed
                        }, delayMs);
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
                header.style.transform = 'translateY(-20px)';
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
                badge.style.transform = 'translateY(25px)';
                badge.style.transition = 'opacity 0.7s ease-out, transform 0.7s ease-out';

                setTimeout(() => {
                    badge.style.opacity = '1';
                    badge.style.transform = 'translateY(0)';
                }, 1000 + (index * 200)); /* Staggered fade-up effect after initial header animation */
            });
        });
    </script>
@endsection
