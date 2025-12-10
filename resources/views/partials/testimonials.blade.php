<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<section class="contact-section ind-serv-section-light">

    <div class="css-wave-container top-wave">
        <div class="wave wave-1"></div>
        <div class="wave wave-2"></div>
    </div>

    <div class="container contact-content-container">

        <div class="section-header" data-aos="fade-right">
            <h5 class="tagline">Get In Touch</h5>
            <h1 class="main-heading">Contact for Any Query</h1>
            <p class="subtext">
                Reach out to us for inquiries, project discussions, or collaborations.
                We are here to help and provide the best solutions for your needs.
            </p>
        </div>

        <div class="contact-detail">
            <div class="row g-5 mb-5 justify-content-center">

                <div class="col-xl-4 col-lg-6">
                    <div class="contact-card">
                        <div class="contact-icon bg-gradient-navy">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info">
                            <h4>Address</h4>
                            <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank">23 Rank Street, NY</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <div class="contact-card">
                        <div class="contact-icon bg-gradient-navy">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-info">
                            <h4>Call Us</h4>
                            <a href="tel:+0123456789">+012 3456 7890</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <div class="contact-card">
                        <div class="contact-icon bg-gradient-navy">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-info">
                            <h4>Email Us</h4>
                            <a href="mailto:info@example.com">info@example.com</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row g-5 align-items-center">

                <div class="col-lg-6">
                    <div class="contact-map" data-aos="fade-right">
                        <iframe class="rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-form p-5 rounded shadow-lg" data-aos="fade-left">
                        <input type="text" class="form-control mb-4" placeholder="Your Name">
                        <input type="email" class="form-control mb-4" placeholder="Your Email">
                        <input type="text" class="form-control mb-4" placeholder="Project">
                        <textarea class="form-control mb-4" rows="6" placeholder="Message"></textarea>
                        <button class="btn btn-gradient-navy w-100 py-3">Send Message</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="css-wave-container bottom-wave">
        <div class="wave wave-1"></div>
        <div class="wave wave-2"></div>
    </div>
</section>

<style>
    /* Custom Variables (Consistent with previous sections) */
    :root {
        --primary-blue: #3b82f6;
        --light-blue-bg: #e0f7fa; /* The light background color for the section */
        --wave-bg: #d1ecf1;
        --white-bg: #ffffff;
        --dark-navy: #464d5a; /* Darker navy for gradients/text */
        --heading-navy: #4a586e; /* Darkest navy for main headings */
    }

/* --- SECTION BACKGROUND AND PADDING FOR WAVES --- */
.contact-section {
    /* Replaced previous gradient with solid light blue background */
    background-color: var(--light-blue-bg);
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 700px;
}
.ind-serv-section-light {
    /* Added padding to account for wave height */
    padding-top: 150px;
    padding-bottom: 150px;
}

/* Ensure content container is above waves */
.contact-content-container {
    position: relative;
    z-index: 20;
}

/* --- DEEP CSS WAVES GENERATION (COPIED FROM PREVIOUS SECTION) --- */
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

/* --- Original Styles (Maintained for appearance) --- */
.section-header {
    text-align: left;
    margin-bottom: 50px;
}
.section-header .tagline {
    color: var(--dark-navy);
    font-weight: 700;
    font-size: 1.2rem;
    margin-bottom: 8px;
    letter-spacing: 1px;
}
.section-header .main-heading {
    font-size: 2.8rem;
    font-weight: 900;
    color: var(--heading-navy);
    margin-bottom: 15px;
}
.section-header .subtext {
    color: #555;
    font-size: 1rem;
}

/* Contact Card */
.contact-card {
    display: flex;
    align-items: center;
    gap: 20px;
    background: var(--white-bg);
    padding: 25px;
    border-radius: 16px;
    box-shadow: 0 12px 35px rgba(0,0,0,0.08);
    transition: all 0.4s ease;
}
.contact-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 50px rgba(0,0,0,0.15);
}

/* Icon */
.contact-icon {
    width: 64px;
    height: 64px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    color: #fff;
    flex-shrink: 0;
    transition: all 0.3s ease;
}
.bg-gradient-navy {
    background: linear-gradient(135deg, var(--dark-navy) 0%, #2a5298 100%);
}
.contact-card:hover .contact-icon {
    transform: scale(1.1);
}

/* Info */
.contact-info h4 {
    margin: 0 0 5px 0;
    font-weight: 700;
    color: var(--heading-navy);
}
.contact-info a {
    text-decoration: none;
    color: var(--dark-navy);
    font-weight: 500;
}
.contact-info a:hover {
    text-decoration: underline;
}

/* Form */
.contact-form {
    background: var(--white-bg);
    box-shadow: 0 12px 35px rgba(0,0,0,0.08);
    transition: all 0.4s ease;
}
.contact-form input,
.contact-form textarea {
    border-radius: 10px;
    border: 1px solid #ddd;
    padding: 15px;
    transition: all 0.3s ease;
}
.contact-form input:focus,
.contact-form textarea:focus {
    border-color: var(--dark-navy);
    box-shadow: 0 4px 20px rgba(30, 60, 114, 0.2);
    outline: none;
}
.btn-gradient-navy {
    background: linear-gradient(135deg, var(--dark-navy) 0%, #2a5298 100%);
    border: none;
    color: #fff;
    font-weight: 700;
    transition: all 0.4s ease;
}
.btn-gradient-navy:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(30, 60, 114, 0.3);
}

/* Map */
.contact-map {
    height: 450px; /* Explicit height for map container */
}
.contact-map iframe {
    border-radius: 16px;
}

/* Responsive adjustments for wave padding (if needed) */
@media (max-width: 992px) {
    .ind-serv-section-light {
        padding-top: 100px;
        padding-bottom: 100px;
    }
}
@media (max-width: 768px) {
    .ind-serv-section-light {
        padding-top: 80px;
        padding-bottom: 80px;
    }
    .section-header .main-heading {
        font-size: 2.2rem;
    }
    .contact-map {
        height: 300px; /* Smaller height for map on mobile */
    }
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.15.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.15.0/ScrollTrigger.min.js"></script>
<script>
gsap.registerPlugin(ScrollTrigger);

gsap.from(".section-header", {
    opacity: 0,
    x: -100,
    duration: 1,
    scrollTrigger: ".section-header"
});

gsap.from(".contact-card", {
    opacity: 0,
    y: 50,
    stagger: 0.2,
    duration: 1,
    scrollTrigger: ".contact-card"
});

gsap.from(".contact-form", {
    opacity: 0,
    y: 50,
    duration: 1,
    scrollTrigger: ".contact-form"
});

gsap.from(".contact-map", {
    opacity: 0,
    y: 50,
    duration: 1,
    scrollTrigger: ".contact-map"
});
</script>
