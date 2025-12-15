<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<section class="contact-section ind-serv-section-light">

    <div class="container contact-content-container">

        <!-- HEADER - CENTERED ON MOBILE -->
        <div class="section-header" data-aos="fade-right">
            <span class="tagline">Get In Touch</span>
            <h1 class="main-heading">Contact for Any Query</h1>
            <p class="subtext">
                Reach out to us for inquiries, project discussions, or collaborations.
                We are here to help and provide the best solutions for your needs.
            </p>
        </div>

        <div class="contact-detail">
            <!-- CONTACT CARDS -->
            <div class="row g-4 mb-5 justify-content-center">

                <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info">
                            <h4>Address</h4>
                            <a href="#" target="_blank">Riyadh, Saudi Arabia</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-info">
                            <h4>Call Us</h4>
                            <a href="tel:+966112345678">+966 11 234 5678</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-info">
                            <h4>Email Us</h4>
                            <a href="mailto:info@mechsolvix.com">info@mechsolvix.com</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- MAP & FORM -->
            <div class="row g-4 align-items-center">

                <!-- STATIC MAP IMAGE - NO IFRAME ISSUES -->
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="contact-map">
                        <!-- Static Google Map Image -->
                        <img src="https://maps.googleapis.com/maps/api/staticmap?center=Riyadh,Saudi+Arabia&zoom=12&size=600x400&scale=2&markers=color:blue%7C24.7136,46.6753&key=AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY"
                             alt="Our Location in Riyadh, Saudi Arabia"
                             class="rounded w-100 h-100 static-map">

                        <!-- Fallback if image doesn't load -->
                        <div class="map-fallback">
                            <div class="fallback-content">
                                <i class="fas fa-map-marked-alt"></i>
                                <h5>Our Location</h5>
                                <p>Riyadh, Saudi Arabia</p>
                                <a href="https://goo.gl/maps/example" target="_blank" class="btn-view-map">
                                    <i class="fas fa-external-link-alt me-2"></i>View on Google Maps
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FORM - SHOWS SECOND ON MOBILE -->
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="contact-form rounded shadow-lg">
                        <h3 class="form-title">Send Your Message</h3>
                        <input type="text" class="form-control mb-4" placeholder="Your Name">
                        <input type="email" class="form-control mb-4" placeholder="Your Email">
                        <input type="text" class="form-control mb-4" placeholder="Project">
                        <textarea class="form-control mb-4" rows="5" placeholder="Your Message"></textarea>
                        <button class="btn btn-send w-100">
                            <i class="fas fa-paper-plane me-2"></i>Send Message
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
:root {
    --sky-blue: #38bdf8;
    --dark-sky-blue: #0ea5e9;
    --white-bg: #ffffff;
    --dark-navy: #1e293b;
    --light-gray: #f8fafc;
    --medium-gray: #94a3b8;
}

/* SECTION */
.contact-section {
    background-color: #ffffff;
    position: relative;
    padding: 100px 0;
    font-family: 'Raleway', sans-serif;
    background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
}

.contact-content-container {
    position: relative;
    z-index: 2;
}

/* HEADER - CENTERED ON MOBILE */
.section-header {
    text-align: center; /* Center on all screens */
    margin-bottom: 60px;
    padding: 0 15px;
}

.section-header .tagline {
    color: var(--sky-blue);
    font-weight: 700;
    font-size: 1rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    display: inline-block;
    margin-bottom: 15px;
    background: rgba(56, 189, 248, 0.1);
    padding: 8px 20px;
    border-radius: 30px;margin-top:25px;
}

/* ✅ SKY BLUE HEADING COLOR */
.section-header .main-heading {
    font-size: 2.8rem;
    font-weight: 900;
    color: var(--sky-blue); /* Sky blue color */
    margin-bottom: 20px;
    line-height: 1.2;
    text-shadow: 0 2px 10px rgba(56, 189, 248, 0.1);
}

.section-header .subtext {
    color: #64748b;
    max-width: 600px;
    margin: 0 auto;
    font-size: 1.1rem;
    line-height: 1.6;
}

/* CONTACT CARD */
.contact-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background: var(--white-bg);
    padding: 30px 25px;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    transition: all 0.4s ease;
    height: 100%;
    border: 1px solid #f1f5f9;
}

.contact-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(56, 189, 248, 0.2);
    border-color: var(--sky-blue);
}

/* ICON */
.contact-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    color: white;
    background: linear-gradient(135deg, var(--sky-blue), var(--dark-sky-blue));
    margin-bottom: 20px;
    box-shadow: 0 8px 20px rgba(56, 189, 248, 0.3);
}

.contact-info h4 {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--dark-navy);
    margin-bottom: 10px;
}

.contact-info a {
    color: #475569;
    text-decoration: none;
    font-size: 1rem;
    transition: color 0.3s ease;
}

.contact-info a:hover {
    color: var(--sky-blue);
}

/* FORM */
.contact-form {
    background: var(--white-bg);
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    padding: 35px;
    border: 1px solid #f1f5f9;
    border-radius: 20px;
}

.form-title {
    font-size: 1.6rem;
    font-weight: 700;
    color: var(--dark-navy);
    margin-bottom: 25px;
    text-align: center;
    position: relative;
    padding-bottom: 15px;
}

.form-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background: var(--sky-blue);
    border-radius: 2px;
}

.contact-form input,
.contact-form textarea {
    border-radius: 12px;
    padding: 15px;
    border: 1px solid #e2e8f0;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.contact-form input:focus,
.contact-form textarea:focus {
    border-color: var(--sky-blue);
    box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.1);
    outline: none;
}

.btn-send {
    background: linear-gradient(135deg, var(--sky-blue), var(--dark-sky-blue));
    color: white;
    font-weight: 700;
    border: none;
    padding: 16px;
    border-radius: 12px;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    margin-top: 10px;
}

.btn-send:hover {
    background: linear-gradient(135deg, var(--dark-sky-blue), #0284c7);
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(56, 189, 248, 0.3);
}

/* STATIC MAP */
.contact-map {
    height: 450px;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    position: relative;
    background: #f1f5f9;
}

.static-map {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 20px;
    transition: transform 0.5s ease;
}

.static-map:hover {
    transform: scale(1.05);
}

/* Map fallback styling */
.map-fallback {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, var(--sky-blue), var(--dark-sky-blue));
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    padding: 30px;
    border-radius: 20px;
    display: none; /* Hidden by default */
}

.fallback-content {
    max-width: 300px;
}

.fallback-content i {
    font-size: 3rem;
    margin-bottom: 20px;
    opacity: 0.8;
}

.fallback-content h5 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 10px;
}

.fallback-content p {
    font-size: 1.1rem;
    margin-bottom: 20px;
    opacity: 0.9;
}

.btn-view-map {
    background: white;
    color: var(--sky-blue);
    border: none;
    padding: 10px 20px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    transition: all 0.3s ease;
}

.btn-view-map:hover {
    background: #f8fafc;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* ✅ TABLET RESPONSIVE */
@media (max-width: 992px) {
    .contact-section {
        padding: 80px 0;
    }

    .section-header .main-heading {
        font-size: 2.4rem;
    }

    .contact-card {
        padding: 25px 20px;
    }

    .contact-form {
        padding: 30px;
    }

    .contact-map {
        height: 400px;
    }
}

/* ✅ MOBILE RESPONSIVE */
@media (max-width: 768px) {
    .contact-section {
        padding: 60px 0;
    }

    .section-header {
        margin-bottom: 40px;
    }

    .section-header .main-heading {
        font-size: 2rem;
        padding: 0 10px;
    }

    .section-header .subtext {
        font-size: 1rem;
        padding: 0 15px;
    }

    .contact-card {
        margin-bottom: 20px;
        padding: 20px;
    }

    .contact-icon {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }

    .contact-form {
        padding: 25px;
        margin-bottom: 30px;
    }

    .contact-map {
        height: 350px;
    }

    .form-title {
        font-size: 1.4rem;
    }

    .btn-send {
        padding: 14px;
        font-size: 1rem;
    }
}

/* ✅ SMALL MOBILE */
@media (max-width: 576px) {
    .contact-section {
        padding: 50px 0;
    }

    .section-header .main-heading {
        font-size: 1.8rem;
    }

    .section-header .tagline {
        font-size: 0.9rem;
        padding: 6px 15px;
    }

    .contact-card {
        padding: 20px 15px;
    }

    .contact-icon {
        width: 55px;
        height: 55px;
        font-size: 1.3rem;
    }

    .contact-info h4 {
        font-size: 1.2rem;
    }

    .contact-info a {
        font-size: 0.95rem;
    }

    .contact-form {
        padding: 20px;
    }

    .contact-form input,
    .contact-form textarea {
        padding: 12px;
        font-size: 0.95rem;
    }

    .contact-map {
        height: 300px;
    }
}

/* ✅ EXTRA SMALL DEVICES */
@media (max-width: 400px) {
    .section-header .main-heading {
        font-size: 1.6rem;
    }

    .contact-card {
        padding: 18px 12px;
    }

    .contact-form {
        padding: 18px;
    }
}
</style>

<script>
// Fallback for map if image doesn't load
document.addEventListener('DOMContentLoaded', function() {
    const staticMap = document.querySelector('.static-map');
    const mapFallback = document.querySelector('.map-fallback');

    if (staticMap) {
        staticMap.onerror = function() {
            // Hide the broken image
            this.style.display = 'none';
            // Show the fallback
            if (mapFallback) {
                mapFallback.style.display = 'flex';
            }
        };

        // Check if image loaded successfully
        staticMap.onload = function() {
            if (mapFallback) {
                mapFallback.style.display = 'none';
            }
        };

        // Trigger load check
        if (staticMap.complete) {
            if (staticMap.naturalWidth === 0) {
                // Image failed to load
                staticMap.style.display = 'none';
                if (mapFallback) {
                    mapFallback.style.display = 'flex';
                }
            }
        }
    }
});

// Form interaction
document.querySelectorAll('.contact-form input, .contact-form textarea').forEach(input => {
    input.addEventListener('focus', function() {
        this.style.borderColor = '#38bdf8';
        this.style.boxShadow = '0 0 0 3px rgba(56, 189, 248, 0.1)';
    });

    input.addEventListener('blur', function() {
        this.style.boxShadow = 'none';
    });
});

// Send button animation
const sendBtn = document.querySelector('.btn-send');
if (sendBtn) {
    sendBtn.addEventListener('click', function(e) {
        e.preventDefault();

        // Simple validation
        const form = document.querySelector('.contact-form');
        const inputs = form.querySelectorAll('input, textarea');
        let isValid = true;

        inputs.forEach(input => {
            if (!input.value.trim()) {
                input.style.borderColor = '#f87171';
                isValid = false;
            } else {
                input.style.borderColor = '#38bdf8';
            }
        });

        if (isValid) {
            // Animate button
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
                // Show success message
                alert('Message sent successfully! We will contact you soon.');
                form.reset();
            }, 200);
        }
    });
}
</script>
