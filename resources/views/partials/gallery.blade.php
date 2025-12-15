<section class="engineering-gallery-section">
    <div class="container">

        <!-- SECTION HEADING - CENTERED ON MOBILE -->
        <div class="section-header">
            <h2 class="section-title">
                Where <span>Quality Meets Performance</span>
            </h2>
            <p class="section-subtitle">
                Showcasing our projects, installations, and industrial solutions with precision and innovation.
            </p>
        </div>

        <!-- GALLERY GRID -->
        <div class="gallery-grid">
            <div class="gallery-item"><img src="img/gallery/eng1.jpg" loading="lazy" alt="Engineering Image 1"></div>
            <div class="gallery-item"><img src="img/gallery/eng2.jpg" loading="lazy" alt="Engineering Image 2"></div>
            <div class="gallery-item"><img src="img/gallery/eng3.png" loading="lazy" alt="Engineering Image 3"></div>
            <div class="gallery-item"><img src="img/gallery/eng4.png" loading="lazy" alt="Engineering Image 4"></div>
            <div class="gallery-item"><img src="img/gallery/eng5.png" loading="lazy" alt="Engineering Image 5"></div>
            <div class="gallery-item"><img src="img/gallery/eng6.png" loading="lazy" alt="Engineering Image 6"></div>
            <div class="gallery-item"><img src="img/gallery/eng10.jpg" loading="lazy" alt="Engineering Image 7"></div>
            <div class="gallery-item"><img src="img/gallery/eng8.jpg" loading="lazy" alt="Engineering Image 8"></div>
            <div class="gallery-item"><img src="img/gallery/eng9.jpg"  loading="lazy" alt="Engineering Image 9"></div>
            <div class="gallery-item"><img src="img/gallery/eng16.jpg" loading="lazy" alt="Engineering Image 10"></div>
            <div class="gallery-item"><img src="img/gallery/eng13.jpg" loading="lazy" alt="Engineering Image 11"></div>
            <div class="gallery-item"><img src="img/gallery/eng14.jpg" loading="lazy" alt="Engineering Image 12"></div>
        </div>

    </div>
</section>

<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap');

/* BASE SECTION */
.engineering-gallery-section {
    padding: 70px 0;
    background: #f9f9f9;
    font-family: 'Raleway', sans-serif;
}

.container {
    width: 100%;
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 20px;
}

/* SECTION HEADER - CENTERED ON MOBILE */
.section-header {
    max-width: 700px;
    margin: 0 auto 40px;
    text-align: left; /* Desktop: left aligned */
}

/* ✅ MOBILE: Center header */
@media (max-width: 768px) {
    .section-header {
        text-align: center; /* Center on mobile */
        padding: 0 15px;
    }
}

.section-title {
    font-size: 2.4rem;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
}

.section-title span {
    color: #38bdf8;
}

.section-subtitle {
    font-size: 1.05rem;
    color: #64748b;
    line-height: 1.6;
}

/* GALLERY GRID */
.gallery-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.gallery-item {
    overflow: hidden;
    border-radius: 10px;
    cursor: pointer;
    transition: transform 0.3s ease;
    aspect-ratio: 4/3; /* ✅ Consistent image ratio */
    height: 100%;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

/* ✅ TABLET RESPONSIVE */
@media (max-width: 992px) {
    .engineering-gallery-section {
        padding: 60px 0;
    }

    .gallery-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }

    .section-title {
        font-size: 2.1rem;
    }

    .section-subtitle {
        font-size: 1rem;
    }
}

/* ✅ MOBILE RESPONSIVE */
@media (max-width: 768px) {
    .engineering-gallery-section {
        padding: 50px 0;
    }

    .gallery-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 14px;
        padding: 0 10px;
    }

    .section-title {
        font-size: 1.9rem;
    }

    .section-subtitle {
        font-size: 0.95rem;
        padding: 0 15px;
    }
}

/* ✅ SMALL MOBILE */
@media (max-width: 576px) {
    .engineering-gallery-section {
        padding: 40px 0;
    }

    .gallery-grid {
        grid-template-columns: 1fr;
        gap: 12px;
        max-width: 400px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .section-title {
        font-size: 1.7rem;
    }

    .section-subtitle {
        font-size: 0.9rem;
        padding: 0 10px;
    }

    .gallery-item {
        aspect-ratio: 16/9; /* ✅ Wider ratio for single column */
    }
}

/* ✅ EXTRA SMALL DEVICES */
@media (max-width: 400px) {
    .gallery-grid {
        padding: 0 10px;
    }

    .section-title {
        font-size: 1.6rem;
    }

    .section-subtitle {
        font-size: 0.85rem;
    }
}

/* ✅ LARGE DESKTOP */
@media (min-width: 1400px) {
    .container {
        max-width: 1400px;
    }

    .gallery-grid {
        gap: 25px;
    }
}
</style>
