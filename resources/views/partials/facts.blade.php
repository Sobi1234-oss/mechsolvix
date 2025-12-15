<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<section class="ind-serv-section-light counter-wave-section">

    <!-- PARALLAX OVERLAY -->
    <div class="parallax-overlay"></div>

    <div class="container py-5 counter-container-content">

        <h1 class="section-heading text-center">
            <span class="text-dark-accent">Our Track Record: </span>
            <span class="text-primary-accent">Achieving Great Results</span>
        </h1>

        <div class="row pt-5 pb-5">

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="counter">
                    <h1 class="text-primary-accent counter-value" data-target="99">0</h1>
                    <h5 class="text-dark-accent">Success in client satisfaction</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="counter">
                    <h1 class="text-primary-accent counter-value" data-target="25">0</h1>
                    <h5 class="text-dark-accent">Years of successful operations</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="counter">
                    <h1 class="text-primary-accent counter-value" data-target="120">0</h1>
                    <h5 class="text-dark-accent">Total clients served globally</h5>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="counter">
                    <h1 class="text-primary-accent counter-value" data-target="5">0</h1>
                    <h5 class="text-dark-accent">Star reviews given by clients</h5>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
:root {
    --primary-accent: #3b82f6;
    --dark-accent: #e5e7eb;
}

/* SECTION */
.counter-wave-section {
    position: relative;
    min-height: 450px; /* 👈 HEIGHT INCREASED */
    background-image: url("img/fact-bg.png"); /* change image */
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    overflow: hidden;
    display: flex;
    align-items: center;
}

/* DARK OVERLAY */
.parallax-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.5);
    z-index: 1;
}

/* CONTENT */
.counter-container-content {
    position: relative;
    z-index: 5;
}

/* HEADING */
.section-heading {
    font-size: 2.8rem;
    font-weight: 800;
    margin-bottom: 3rem;
}

/* COLORS */
.text-primary-accent {
    color: #60a5fa !important;
}

.text-dark-accent {
    color: var(--dark-accent) !important;
}

/* COUNTER */
.counter {
    text-align: center;
}

.counter h1 {
    font-size: 4rem;
    font-weight: 900;
}

.counter h5 {
    font-size: 1rem;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .counter-wave-section {
        min-height: 460px;
        background-attachment: scroll;
    }

    .section-heading {
        font-size: 2rem;
    }

    .counter h1 {
        font-size: 3rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter-value');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;

            const el = entry.target;
            const target = +el.dataset.target;
            let current = 0;

            const timer = setInterval(() => {
                current++;
                el.textContent = current;
                if (current >= target) clearInterval(timer);
            }, 20);

            observer.unobserve(el);
        });
    }, { threshold: 0.5 });

    counters.forEach(c => observer.observe(c));
});
</script>
