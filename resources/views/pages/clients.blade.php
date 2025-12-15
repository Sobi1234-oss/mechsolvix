@extends('layouts.app')

@section('title', 'Our Clients')

@section('content')

<div class="container-fluid page-header-mechsolvix py-5" style="
    background: linear-gradient(rgba(36, 64, 95, 0.573), rgba(30, 86, 120, 0.5)),
                url('img/about.png') no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-3 mt-4">Our Clients</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">
                    Our Clients
                </li>
            </ol>
        </nav>
    </div>
</div>

<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<section class="mechsolvix-clients-section">
    <div class="container">
        {{-- Section Header - Left Aligned with Badge --}}
        <div class="row mb-5">
            <div class="col-lg-11 mx-auto text-start">
                <div class="mechsolvix-section-header">
                    <span class="mechsolvix-section-badge">STRATEGIC ALLIANCES</span>
                    <h2 class="mechsolvix-section-title">
                        Partnering Excellence: <span class="mechsolvix-text-accent-blue">Serving the Giants</span>
                    </h2>
                    <p class="mechsolvix-section-subtitle">Trusted partner to leading Oil, Gas and Petrochemical Industries across the Middle East.</p>
                </div>
            </div>
        </div>

        {{-- Clients Grid - 4 per row on desktop --}}
        <div class="mechsolvix-clients-grid">
            <div class="mechsolvix-client-card">
                <img src="img/clients/client1.png" alt="SABIC" class="mechsolvix-client-logo">
            </div>
            <div class="mechsolvix-client-card">
                <img src="img/clients/client2.png" alt="ARAMCO" class="mechsolvix-client-logo">
            </div>
            <div class="mechsolvix-client-card">
                <img src="img/clients/client3.png" alt="SASREF" class="mechsolvix-client-logo">
            </div>
            <div class="mechsolvix-client-card">
                <img src="img/clients/client4.png" alt="SAMREF" class="mechsolvix-client-logo">
            </div>
            <div class="mechsolvix-client-card">
                <img src="img/clients/client5.png" alt="YASREF" class="mechsolvix-client-logo">
            </div>
            <div class="mechsolvix-client-card">
                <img src="img/clients/client6.png" alt="SATORP" class="mechsolvix-client-logo">
            </div>
            <div class="mechsolvix-client-card">
                <img src="img/clients/client7.png" alt="SADARA" class="mechsolvix-client-logo">
            </div>
            <div class="mechsolvix-client-card">
                <img src="img/clients/client8.png" alt="SIPCHEM" class="mechsolvix-client-logo">
            </div>
        </div>

        {{-- Achievement Badges --}}
        <div class="mechsolvix-achievement-badges">
            <div class="mechsolvix-achievement-badge">
                <div class="mechsolvix-badge-icon">
                    <i class="fas fa-award"></i>
                </div>
                <div class="mechsolvix-badge-content">
                    <h4>8+</h4>
                    <p>Industry Leaders</p>
                </div>
            </div>
            <div class="mechsolvix-achievement-badge">
                <div class="mechsolvix-badge-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="mechsolvix-badge-content">
                    <h4>Proven</h4>
                    <p>Reliability</p>
                </div>
            </div>
            <div class="mechsolvix-achievement-badge">
                <div class="mechsolvix-badge-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="mechsolvix-badge-content">
                    <h4>Premium</h4>
                    <p>Service Rating</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include("partials.facts")

<style>
/* Import Font for consistency */
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap');

/* CSS Variables */
:root {
    --mechsolvix-sky-blue: #38bdf8;
    --mechsolvix-dark-navy: #0f172a;
    --mechsolvix-slate-text: #64748b;
    --mechsolvix-white: #ffffff;
    --mechsolvix-light-gray: #f8fafc;
    --mechsolvix-medium-gray: #e2e8f0;
}

/* Apply Raleway font */
body {
    font-family: 'Raleway', sans-serif !important;
}

/* ============================================ */
/* CLIENTS SECTION - CLEAN WHITE BACKGROUND */
/* ============================================ */
.mechsolvix-clients-section {
    background: var(--mechsolvix-white);
    padding: 80px 0;
    position: relative;
}

.container {
    max-width: 1200px !important;
}

/* ============================================ */
/* SECTION HEADER - LEFT ALIGNED */
/* ============================================ */
.mechsolvix-section-header {
    margin-bottom: 50px;
    text-align: left;
    max-width: 800px;
}

.mechsolvix-section-badge {
    background: var(--mechsolvix-sky-blue);
    color: white;
    padding: 0.4rem 1.25rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-bottom: 1rem;
    display: inline-block;
}

.mechsolvix-section-title {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--mechsolvix-dark-navy);
    margin-bottom: 15px;
    line-height: 1.2;
}

.mechsolvix-text-accent-blue {
    color: var(--mechsolvix-sky-blue) !important;
}

.mechsolvix-section-subtitle {
    font-size: 1.1rem;
    color: var(--mechsolvix-slate-text);
    line-height: 1.6;
    margin: 0;
}

/* ============================================ */
/* CLIENTS GRID - 4 PER ROW ON DESKTOP */
/* ============================================ */
.mechsolvix-clients-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin: 0 auto;
}

.mechsolvix-client-card {
    background: var(--mechsolvix-white);
    border-radius: 12px;
    border: 1px solid var(--mechsolvix-medium-gray);
    height: 180px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    padding: 20px;
}

.mechsolvix-client-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(56, 189, 248, 0.15);
    border-color: var(--mechsolvix-sky-blue);
}

.mechsolvix-client-logo {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transition: all 0.3s ease;
}

.mechsolvix-client-card:hover .mechsolvix-client-logo {
    transform: scale(1.05);
}

/* ============================================ */
/* ACHIEVEMENT BADGES */
/* ============================================ */
.mechsolvix-achievement-badges {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
    margin-top: 60px;
}

.mechsolvix-achievement-badge {
    display: flex;
    align-items: center;
    gap: 15px;
    background: var(--mechsolvix-light-gray);
    border-radius: 12px;
    padding: 20px 25px;
    min-width: 200px;
    transition: all 0.3s ease;
    cursor: pointer;
    border: 1px solid transparent;
}

.mechsolvix-achievement-badge:hover {
    background: var(--mechsolvix-white);
    border-color: var(--mechsolvix-sky-blue);
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(56, 189, 248, 0.15);
}

.mechsolvix-badge-icon {
    width: 50px;
    height: 50px;
    background: rgba(56, 189, 248, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--mechsolvix-sky-blue);
    font-size: 1.3rem;
    flex-shrink: 0;
}

.mechsolvix-badge-content h4 {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--mechsolvix-dark-navy);
    margin-bottom: 5px;
    line-height: 1;
}

.mechsolvix-badge-content p {
    font-size: 0.9rem;
    color: var(--mechsolvix-slate-text);
    margin: 0;
    line-height: 1.4;
}

/* ============================================ */
/* PAGE HEADER STYLING */
/* ============================================ */
.page-header-mechsolvix {
    min-height: 380px !important;
    display: flex;
    align-items: center;
    background-attachment: fixed !important;
    padding-top: 80px !important;
    padding-bottom: 80px !important;
}

.page-header-mechsolvix .container {
    padding-top: 40px;
    padding-bottom: 40px;
}

.page-header-mechsolvix .display-3 {
    font-size: 3.5rem;
    font-weight: 800;
    margin-top: 30px;
}

.page-header-mechsolvix .breadcrumb-item a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
}

.page-header-mechsolvix .breadcrumb-item a:hover {
    color: var(--mechsolvix-sky-blue);
}

.page-header-mechsolvix .breadcrumb-item.active {
    color: var(--mechsolvix-sky-blue);
}

/* ============================================ */
/* RESPONSIVE DESIGN */
/* ============================================ */

/* LARGE TABLET (992px - 1199px) */
@media (max-width: 1199px) {
    .container {
        max-width: 100% !important;
        padding-left: 30px;
        padding-right: 30px;
    }

    .mechsolvix-section-title {
        font-size: 2.2rem;
    }

    .mechsolvix-clients-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .mechsolvix-client-card {
        height: 160px;
    }

    .page-header-mechsolvix {
        min-height: 320px !important;
        padding-top: 60px !important;
        padding-bottom: 60px !important;
    }

    .page-header-mechsolvix .display-3 {
        font-size: 3rem;
    }
}

/* TABLET (768px - 991px) */
@media (max-width: 991px) {
    .mechsolvix-clients-section {
        padding: 60px 0;
    }

    .mechsolvix-section-title {
        font-size: 2rem;
    }

    .mechsolvix-section-subtitle {
        font-size: 1rem;
    }

    .mechsolvix-clients-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        max-width: 600px;
        margin: 0 auto;
    }

    .mechsolvix-client-card {
        height: 150px;
    }

    .mechsolvix-achievement-badges {
        gap: 20px;
        margin-top: 50px;
    }

    .mechsolvix-achievement-badge {
        min-width: 180px;
        padding: 18px 22px;
    }

    .page-header-mechsolvix {
        min-height: 280px !important;
        padding-top: 50px !important;
        padding-bottom: 50px !important;
    }

    .page-header-mechsolvix .display-3 {
        font-size: 2.5rem;
        margin-top: 20px;
    }
}

/* MOBILE (576px - 767px) */
@media (max-width: 767px) {
    .mechsolvix-clients-section {
        padding: 50px 0;
    }

    .mechsolvix-section-header {
        margin-bottom: 40px;
        padding: 0 10px;
    }

    .mechsolvix-section-title {
        font-size: 1.8rem;
    }

    .mechsolvix-clients-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        padding: 0 10px;
    }

    .mechsolvix-client-card {
        height: 140px;
        padding: 15px;
    }

    .mechsolvix-achievement-badges {
        flex-direction: column;
        align-items: center;
        gap: 15px;
        margin-top: 40px;
        padding: 0 20px;
    }

    .mechsolvix-achievement-badge {
        width: 100%;
        max-width: 300px;
        justify-content: flex-start;
    }

    .page-header-mechsolvix {
        min-height: 240px !important;
        padding-top: 40px !important;
        padding-bottom: 40px !important;
        background-attachment: scroll !important;
    }

    .page-header-mechsolvix .display-3 {
        font-size: 2.2rem;
        margin-top: 15px;
    }
}

/* SMALL MOBILE (Below 576px) */
@media (max-width: 575px) {
    .mechsolvix-clients-section {
        padding: 40px 0;
    }

    .mechsolvix-section-title {
        font-size: 1.6rem;
    }

    .mechsolvix-section-subtitle {
        font-size: 0.95rem;
    }

    .mechsolvix-clients-grid {
        grid-template-columns: 1fr;
        gap: 12px;
        max-width: 350px;
        margin: 0 auto;
    }

    .mechsolvix-client-card {
        height: 130px;
    }

    .mechsolvix-achievement-badges {
        margin-top: 30px;
        padding: 0 15px;
    }

    .mechsolvix-achievement-badge {
        padding: 15px 20px;
    }

    .mechsolvix-badge-icon {
        width: 45px;
        height: 45px;
        font-size: 1.2rem;
    }

    .mechsolvix-badge-content h4 {
        font-size: 1.2rem;
    }

    .page-header-mechsolvix {
        min-height: 200px !important;
        padding-top: 30px !important;
        padding-bottom: 30px !important;
    }

    .page-header-mechsolvix .display-3 {
        font-size: 1.9rem;
        margin-top: 10px;
    }
}

/* EXTRA SMALL DEVICES (Below 400px) */
@media (max-width: 400px) {
    .mechsolvix-section-title {
        font-size: 1.5rem;
    }

    .mechsolvix-clients-grid {
        padding: 0 5px;
    }

    .mechsolvix-client-card {
        height: 120px;
        padding: 10px;
    }

    .page-header-mechsolvix .display-3 {
        font-size: 1.7rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth fade-in animation for client cards
    const clientCards = document.querySelectorAll('.mechsolvix-client-card');

    clientCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';

        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 100 + (index * 100)); // Staggered animation
    });

    // Animation for achievement badges
    const badges = document.querySelectorAll('.mechsolvix-achievement-badge');

    badges.forEach((badge, index) => {
        badge.style.opacity = '0';
        badge.style.transform = 'translateY(15px)';
        badge.style.transition = 'opacity 0.6s ease, transform 0.6s ease';

        setTimeout(() => {
            badge.style.opacity = '1';
            badge.style.transform = 'translateY(0)';
        }, 800 + (index * 200)); // Delay after client cards
    });

    // Optional: Add hover effect enhancement with JavaScript
    clientCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.zIndex = '10';
        });

        card.addEventListener('mouseleave', function() {
            this.style.zIndex = '1';
        });
    });
});
</script>
@endsection
