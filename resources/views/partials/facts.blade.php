<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<section class="ind-serv-section-light counter-wave-section">

    <div class="css-wave-container top-wave">
        <div class="wave wave-1"></div>
        <div class="wave wave-2"></div>
    </div>

    <div class="container py-3 counter-container-content">

        <h1 class="section-heading text-center wow fadeIn" data-wow-delay=".3s">
            <span class="text-dark-accent">Our Track Record: </span>
            <span class="text-primary-accent">Achieving Great Results</span>
        </h1>

        <div class="row pt-4 pb-4"> <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 wow fadeIn" data-wow-delay=".1s">
                <div class="d-flex counter justify-content-center">
                    <h1 class="me-3 text-primary-accent counter-value" data-target="99">0</h1>
                    <h5 class="text-dark-accent mt-1 counter-text">Success in client satisfaction</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 wow fadeIn" data-wow-delay=".3s">
                <div class="d-flex counter justify-content-center">
                    <h1 class="me-3 text-primary-accent counter-value" data-target="25">0</h1>
                    <h5 class="text-dark-accent mt-1 counter-text">Years of successful operations</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay=".5s">
                <div class="d-flex counter justify-content-center">
                    <h1 class="me-3 text-primary-accent counter-value" data-target="120">0</h1>
                    <h5 class="text-dark-accent mt-1 counter-text">Total clients served globally</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay=".7s">
                <div class="d-flex counter justify-content-center">
                    <h1 class="me-3 text-primary-accent counter-value" data-target="5">0</h1>
                    <h5 class="text-dark-accent mt-1 counter-text">Star reviews given by clients</h5>
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
    /* Custom Variables */
    :root {
        --primary-accent: #3b82f6; /* Bright Blue Accent */

        /* Variables needed for Wave Background */
        --light-blue-bg: #e0f7fa; /* The light background color */
        --wave-bg: #d1ecf1;
        --white-bg: #ffffff;
        --dark-accent: #334155; /* Slate color for main text/heading */
    }

    /* Apply Raleway font */
    body {
        font-family: 'Raleway', sans-serif;
    }

    /* --- Clients Section: Adopting 'ind-serv-section-light' styling for background/waves --- */
    .counter-wave-section {
        min-height: 370px; /* Reduced min-height */
        position: relative;
        overflow: hidden;
        background-color: var(--light-blue-bg);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .ind-serv-section-light {
        padding-top: 80px; /* Greatly reduced top padding */
        padding-bottom: 80px; /* Greatly reduced bottom padding */
    }

    /* --- Deep CSS Waves Generation (COPIED FROM PREVIOUS SECTION) --- */
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

    /* Top wave goes beneath the content */
    .top-wave .wave-1 { background: var(--wave-bg); bottom: 0; height: 120%; transform: rotate(0deg) translateY(45px); z-index: 12; opacity: 0.9; }
    .top-wave .wave-2 { background: var(--white-bg); bottom: 0; height: 100%; border-radius: 40% 60% 0 0 / 100% 100% 0 0; transform: rotate(0deg) translateY(75px); z-index: 13; }

    /* Bottom wave goes beneath the content, covering the section end */
    .bottom-wave .wave-1 { background: var(--wave-bg); top: 0; height: 120%; transform: rotate(180deg) translateY(45px); z-index: 12; opacity: 0.9; }
    .bottom-wave .wave-2 { background: var(--white-bg); top: 0; height: 100%; border-radius: 40% 60% 0 0 / 100% 100% 0 0; transform: rotate(180deg) translateY(75px); z-index: 13; }
    /* --- End Wave Generation CSS --- */


    /* Ensure content is above the overlay/waves */
    .counter-container-content {
        position: relative;
        z-index: 20;
        /* The py-3 Bootstrap utility class typically provides padding-top and padding-bottom of 1rem */
        /* If py-3 isn't strong enough, we explicitly set it here */
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;margin-top: 20px;
    }

    /* Section Heading Style */
    .section-heading {
        font-family: 'Raleway', sans-serif;
        font-size: 2.8rem; /* Slightly smaller heading */
        font-weight: 800;
        margin-bottom: 2rem; /* Reduced margin */
        text-shadow: none;margin-top: 30px;
    }

    .text-primary-accent {
        color: var(--primary-accent) !important;
    }

    /* Class for Slate colored text */
    .text-dark-accent {
        color: var(--dark-accent) !important;
    }

    /* Counter Styling */
    .counter {
        align-items: flex-start;
        text-align: center;
        flex-direction: column;
    }

    .counter h1 {
        font-size: 4rem; /* Slightly smaller numbers */
        font-weight: 900;
        line-height: 1;
        margin-bottom: 8px; /* Reduced margin */
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .counter h5 {
        font-size: 1.0rem; /* Slightly smaller description text */
        font-weight: 500;
        line-height: 1.4;
        max-width: 200px;
        text-align: left;
    }

    /* --- Responsive Adjustments (Ensuring Mobile Responsiveness) --- */
    @media (min-width: 992px) {
        .counter {
            align-items: flex-start;
            text-align: left;
        }
    }

    /* Tablet / Small Desktop */
    @media (max-width: 992px) {
        .section-heading {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }
        .counter-container-content {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }
        .ind-serv-section-light {
            padding-top: 60px;
            padding-bottom: 60px;
        }
    }

    /* Mobile */
    @media (max-width: 768px) {
        .section-heading {
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }
        .ind-serv-section-light {
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .counter {
            align-items: center;
            text-align: center;
        }
        .counter h1 {
            font-size: 3rem; /* Smaller number size on mobile */
            margin-bottom: 5px;
        }
        .counter h5 {
            font-size: 0.95rem;
            text-align: center;
            max-width: none;
        }
    }

</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const counterSection = document.querySelector('.counter-wave-section');
        if (!counterSection) return;

        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.5 // Trigger when 50% of the element is visible
        };

        const counterObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Start the counter animation when visible
                    startCounters(entry.target);
                    observer.unobserve(entry.target); // Stop observing once started
                }
            });
        }, observerOptions);

        counterObserver.observe(counterSection);

        function startCounters(section) {
            section.querySelectorAll('.counter-value').forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const duration = 2000; // 2 seconds
                let start = 0;
                let startTime = null;

                const animate = (timestamp) => {
                    if (!startTime) startTime = timestamp;
                    const progress = timestamp - startTime;

                    // Calculate the current value
                    let current = Math.min(target, Math.floor((progress / duration) * target));

                    // Special case for '5' to keep it clean and fast
                    if (target === 5) {
                        current = Math.min(target, Math.floor((progress / (duration / 2)) * target));
                    }

                    counter.textContent = current;

                    if (progress < duration || (target === 5 && progress < duration / 2)) {
                        requestAnimationFrame(animate);
                    } else {
                        counter.textContent = target; // Ensure final value is exact
                    }
                };

                requestAnimationFrame(animate);
            });
        }
    });
</script>
