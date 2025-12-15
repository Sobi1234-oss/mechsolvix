@extends('layouts.app')

@section('title', 'Our Gallery')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header-mechsolvix py-5">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-3 mt-4">Our Gallery</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

  <section class="mechsolvix-gallery-section">
    <div class="container">

        <!-- SECTION HEADING - ALWAYS LEFT ALIGNED -->
        <div class="mechsolvix-gallery-header">
            <span class="mechsolvix-section-badge">OUR WORK</span>
            <h2 class="mechsolvix-gallery-title">
                Where <span class="mechsolvix-text-accent-blue">Quality Meets Performance</span>
            </h2>
            <p class="mechsolvix-gallery-subtitle">
                Showcasing our projects, installations, and industrial solutions with precision and innovation.
            </p>
        </div>

        <!-- GALLERY GRID - 3 IMAGES PER ROW ON DESKTOP -->
        <div class="mechsolvix-gallery-grid">
            <div class="mechsolvix-gallery-item">
                <div class="mechsolvix-gallery-image-container">
                    <img src="img/gallery/eng1.jpg" loading="lazy" alt="Structural Design Project">
                </div>
            </div>

            <div class="mechsolvix-gallery-item">
                <div class="mechsolvix-gallery-image-container">
                    <img src="img/gallery/eng2.jpg" loading="lazy" alt="Architectural Planning Project">
                </div>
            </div>

            <div class="mechsolvix-gallery-item">
                <div class="mechsolvix-gallery-image-container">
                    <img src="img/gallery/eng3.png" loading="lazy" alt="Industrial Installation Project">
                </div>
            </div>

            <div class="mechsolvix-gallery-item">
                <div class="mechsolvix-gallery-image-container">
                    <img src="img/gallery/eng4.png" loading="lazy" alt="Construction Supervision Project">
                </div>
            </div>

            <div class="mechsolvix-gallery-item">
                <div class="mechsolvix-gallery-image-container">
                    <img src="img/gallery/eng5.png" loading="lazy" alt="Infrastructure Development Project">
                </div>
            </div>

            <div class="mechsolvix-gallery-item">
                <div class="mechsolvix-gallery-image-container">
                    <img src="img/gallery/eng6.png" loading="lazy" alt="Technical Drawings Project">
                </div>
            </div>

            <div class="mechsolvix-gallery-item">
                <div class="mechsolvix-gallery-image-container">
                    <img src="img/gallery/eng10.jpg" loading="lazy" alt="Project Execution">
                </div>
            </div>

            <div class="mechsolvix-gallery-item">
                <div class="mechsolvix-gallery-image-container">
                    <img src="img/gallery/eng8.jpg" loading="lazy" alt="Quality Inspection">
                </div>
            </div>

            <div class="mechsolvix-gallery-item">
                <div class="mechsolvix-gallery-image-container">
                    <img src="img/gallery/eng9.jpg" loading="lazy" alt="Modern Design Project">
                </div>
            </div>

            <div class="mechsolvix-gallery-item">
                <div class="mechsolvix-gallery-image-container">
                    <img src="img/gallery/eng16.jpg" loading="lazy" alt="Industrial Solutions Project">
                </div>
            </div>

            <div class="mechsolvix-gallery-item">
                <div class="mechsolvix-gallery-image-container">
                    <img src="img/gallery/eng13.jpg" loading="lazy" alt="Technical Analysis Project">
                </div>
            </div>

            <div class="mechsolvix-gallery-item">
                <div class="mechsolvix-gallery-image-container">
                    <img src="img/gallery/eng14.jpg" loading="lazy" alt="Final Deliverables Project">
                </div>
            </div>
        </div>

    </div>
</section>

<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap');

/* CSS Variables */
:root {
    --mechsolvix-sky-blue: #38bdf8;
    --mechsolvix-dark-navy: #0f172a;
    --mechsolvix-slate-text: #64748b;
    --mechsolvix-white: #ffffff;
    --mechsolvix-light-gray: #f8fafc;
}

/* BASE SECTION - REDUCED WIDTH */
.mechsolvix-gallery-section {
    padding: 80px 0;
    background: var(--mechsolvix-white);
    font-family: 'Raleway', sans-serif;
}

/* CONTAINER - REDUCED WIDTH FOR MORE SPACE ON SIDES */
.container {
    width: 100%;
    max-width: 1100px; /* Reduced from 1280px */
    margin: 0 auto;
    padding: 0 25px; /* More padding on sides */
}

/* SECTION HEADER - ALWAYS LEFT ALIGNED */
.mechsolvix-gallery-header {
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

.mechsolvix-gallery-title {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--mechsolvix-dark-navy);
    margin-bottom: 15px;
    line-height: 1.2;
}

.mechsolvix-text-accent-blue {
    color: var(--mechsolvix-sky-blue) !important;
}

.mechsolvix-gallery-subtitle {
    font-size: 1.1rem;
    color: var(--mechsolvix-slate-text);
    line-height: 1.6;
    margin: 0;
}

/* GALLERY GRID - 3 IMAGES PER ROW ON DESKTOP - MORE SPACE BETWEEN */
.mechsolvix-gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 images per row */
    gap: 30px; /* More gap between images */
}

/* GALLERY ITEM - IMAGES ONLY, NO TEXT CAPTIONS */
.mechsolvix-gallery-item {
    overflow: hidden;
    border-radius: 10px;
    transition: all 0.4s ease;
    background: var(--mechsolvix-white);
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    border: 1px solid #e2e8f0;
    height: 280px; /* Fixed height for all images */
}

.mechsolvix-gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(56, 189, 248, 0.2);
    border-color: var(--mechsolvix-sky-blue);
}

.mechsolvix-gallery-image-container {
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.mechsolvix-gallery-image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.6s ease;
}

.mechsolvix-gallery-item:hover .mechsolvix-gallery-image-container img {
    transform: scale(1.08);
}

/* PAGE HEADER STYLING */
.page-header-mechsolvix {
    min-height: 380px !important;
    display: flex;
    align-items: center;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('img/hseqbg.jpg') no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
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

    .mechsolvix-gallery-title {
        font-size: 2.2rem;
    }

    .mechsolvix-gallery-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .mechsolvix-gallery-item {
        height: 250px;
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
    .mechsolvix-gallery-section {
        padding: 70px 0;
    }

    .mechsolvix-gallery-title {
        font-size: 2rem;
    }

    .mechsolvix-gallery-subtitle {
        font-size: 1rem;
    }

    .mechsolvix-gallery-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
        max-width: 700px;
        margin: 0 auto;
    }

    .mechsolvix-gallery-item {
        height: 240px;
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
    .mechsolvix-gallery-section {
        padding: 60px 0;
    }

    .mechsolvix-gallery-header {
        margin-bottom: 40px;
        padding: 0 15px;
    }

    .mechsolvix-gallery-title {
        font-size: 1.8rem;
    }

    .mechsolvix-gallery-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        padding: 0 15px;
    }

    .mechsolvix-gallery-item {
        height: 220px;
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
    .mechsolvix-gallery-section {
        padding: 50px 0;
    }

    .mechsolvix-gallery-title {
        font-size: 1.6rem;
    }

    .mechsolvix-gallery-subtitle {
        font-size: 0.95rem;
    }

    .mechsolvix-gallery-grid {
        grid-template-columns: 1fr;
        gap: 20px;
        max-width: 400px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .mechsolvix-gallery-item {
        height: 250px;
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
    .mechsolvix-gallery-title {
        font-size: 1.5rem;
    }

    .mechsolvix-gallery-grid {
        padding: 0 10px;
    }

    .mechsolvix-gallery-item {
        height: 220px;
    }

    .page-header-mechsolvix .display-3 {
        font-size: 1.7rem;
    }
}

/* LARGE DESKTOP (1400px and above) */
@media (min-width: 1400px) {
    .container {
        max-width: 1300px; /* Still reduced from original */
    }

    .mechsolvix-gallery-grid {
        gap: 35px;
    }

    .mechsolvix-gallery-item {
        height: 300px;
    }
}

/* EXTRA LARGE DESKTOP (1600px and above) */
@media (min-width: 1600px) {
    .container {
        max-width: 1400px;
    }

    .mechsolvix-gallery-grid {
        gap: 40px;
    }

    .mechsolvix-gallery-item {
        height: 320px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth fade-in animation for gallery items
    const galleryItems = document.querySelectorAll('.mechsolvix-gallery-item');

    galleryItems.forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(20px)';
        item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';

        setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'translateY(0)';
        }, 100 + (index * 100)); // Staggered animation
    });

    // Optional: Add click to view larger image (lightbox effect)
    galleryItems.forEach(item => {
        item.addEventListener('click', function() {
            const img = this.querySelector('img');
            const imgSrc = img.src;
            const imgAlt = img.alt;

            // Create lightbox overlay
            const lightbox = document.createElement('div');
            lightbox.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.9);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999;
                opacity: 0;
                transition: opacity 0.3s ease;
            `;

            // Create image container
            const lightboxImg = document.createElement('img');
            lightboxImg.src = imgSrc;
            lightboxImg.alt = imgAlt;
            lightboxImg.style.cssText = `
                max-width: 90%;
                max-height: 90%;
                object-fit: contain;
                transform: scale(0.9);
                transition: transform 0.3s ease;
            `;

            // Create close button
            const closeBtn = document.createElement('button');
            closeBtn.innerHTML = '×';
            closeBtn.style.cssText = `
                position: absolute;
                top: 20px;
                right: 20px;
                background: none;
                border: none;
                color: white;
                font-size: 3rem;
                cursor: pointer;
                z-index: 10000;
            `;

            lightbox.appendChild(lightboxImg);
            lightbox.appendChild(closeBtn);
            document.body.appendChild(lightbox);

            // Animate in
            setTimeout(() => {
                lightbox.style.opacity = '1';
                lightboxImg.style.transform = 'scale(1)';
            }, 10);

            // Close on click
            closeBtn.onclick = function() {
                lightbox.style.opacity = '0';
                lightboxImg.style.transform = 'scale(0.9)';
                setTimeout(() => {
                    document.body.removeChild(lightbox);
                }, 300);
            };

            // Close on overlay click
            lightbox.onclick = function(e) {
                if (e.target === lightbox) {
                    lightbox.style.opacity = '0';
                    lightboxImg.style.transform = 'scale(0.9)';
                    setTimeout(() => {
                        document.body.removeChild(lightbox);
                    }, 300);
                }
            };

            // Close on ESC key
            document.addEventListener('keydown', function closeLightbox(e) {
                if (e.key === 'Escape') {
                    lightbox.style.opacity = '0';
                    lightboxImg.style.transform = 'scale(0.9)';
                    setTimeout(() => {
                        document.body.removeChild(lightbox);
                        document.removeEventListener('keydown', closeLightbox);
                    }, 300);
                }
            });
        });
    });
});
</script>
@endsection
