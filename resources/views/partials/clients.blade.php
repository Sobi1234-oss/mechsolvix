<section class="clients-section">

    <div class="container">

        <!-- SECTION HEADER - LEFT ALIGNED ON DESKTOP -->
        <div class="section-header">
            <h2 class="section-title">
                Our Trusted <span>Clients</span>
            </h2>
            <p class="section-tagline">
                Building long-term partnerships with leading organizations through
                quality, reliability, and professional excellence.
            </p>
        </div>

        <!-- CLIENTS GRID -->
        <div class="clients-grid">
            <div class="client-card"><img src="img/clients/client1.png" loading="lazy" alt=""></div>
            <div class="client-card"><img src="img/clients/client2.png" loading="lazy" alt=""></div>
            <div class="client-card"><img src="img/clients/client3.png" loading="lazy" alt=""></div>
            <div class="client-card"><img src="img/clients/client4.png" loading="lazy" alt=""></div>
            <div class="client-card"><img src="img/clients/client5.png" loading="lazy" alt=""></div>
            <div class="client-card"><img src="img/clients/client6.png" loading="lazy" alt=""></div>
           
            <div class="client-card"><img src="img/clients/client7.png" loading="lazy" alt=""></div>
            <div class="client-card"><img src="img/clients/client8.png" loading="lazy" alt=""></div>
        </div>

    </div>
</section>

<style>
/* SECTION BASE */
.clients-section {
    background: #ffffff;
    padding: 55px 0 70px;
    margin-top: 20px;
}

/* CONTAINER */
.container {
    max-width: 1280px;
    margin: auto;
    padding: 0 20px;
}

/* ✅ HEADER - LEFT ALIGNED ON DESKTOP */
.section-header {
    max-width: 650px;
    margin-bottom: 45px;
    margin-left: 0; /* Remove left margin */
    text-align: left; /* Desktop: left aligned */
    padding-left: 20px; /* Add some left padding */
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

.section-tagline {
    font-size: 1.05rem;
    color: #64748b;
    line-height: 1.6;
}

/* GRID - CENTERED BOXES */
.clients-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    justify-items: center; /* ✅ Center items horizontally */
}

/* CARD - CENTERED CONTENT */
.client-card {
    background: #ffffff;
    height: 220px;
    width: 100%; /* ✅ Full width of grid cell */
    max-width: 280px; /* ✅ Limit max width */
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.client-card img {
    max-width: 85%;
    max-height: 85%;
    object-fit: contain;
}

/* HOVER */
.client-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 22px 55px rgba(56,189,248,0.35);
}

/* ✅ TABLET RESPONSIVE */
@media (max-width: 992px) {
    .clients-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .client-card {
        max-width: 320px; /* Slightly larger on tablet */
    }

    .section-title {
        font-size: 2.1rem;
    }
}

/* ✅ MOBILE RESPONSIVE */
@media (max-width: 768px) {
    .clients-section {
        padding: 40px 0 50px;
    }

    /* Mobile: Center header */
    .section-header {
        text-align: center; /* Center on mobile */
        margin-left: auto;
        margin-right: auto;
        padding: 0 15px;
    }

    .section-header {
        margin-bottom: 35px;
    }

    .section-title {
        font-size: 1.9rem;
    }

    .section-tagline {
        font-size: 1rem;
        padding: 0 10px;
    }

    .clients-grid {
        gap: 15px;
    }

    .client-card {
        height: 200px; /* Slightly smaller on mobile */
    }
}

/* ✅ SMALL MOBILE */
@media (max-width: 576px) {
    .clients-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }

    .client-card {
        max-width: 300px;
        height: 180px;
        margin: 0 auto; /* ✅ Center single cards */
    }

    .section-title {
        font-size: 1.7rem;
    }

    .section-tagline {
        font-size: 0.95rem;
    }
}

/* ✅ EXTRA SMALL DEVICES */
@media (max-width: 400px) {
    .client-card {
        height: 160px;
        max-width: 280px;
    }

    .section-title {
        font-size: 1.6rem;
    }
}
</style>

<script>
document.querySelectorAll('.client-card').forEach((card, index) => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(20px)';
    setTimeout(() => {
        card.style.transition = '0.6s ease';
        card.style.opacity = '1';
        card.style.transform = 'translateY(0)';
    }, index * 120);
});
</script>
