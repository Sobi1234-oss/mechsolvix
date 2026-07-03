<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<section class="ind-serv-section-light faq-wave-section">

    <div class="css-wave-container top-wave">
        <div class="wave wave-1"></div>
        <div class="wave wave-2"></div>
    </div>

    <div class="container faq-content-container">

        <div class="section-header text-center" data-aos="fade-up">
            <h5 class="tagline">FAQ</h5>
            <h1 class="main-heading">Frequently Asked Questions</h1>
            <p class="subtext">
                Answers to the questions we hear most from clients about our mechanical
                and maintenance services.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion faq-accordion" id="faqAccordion" data-aos="fade-up" data-aos-delay="100">

                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header" id="faqHeadingOne">
                            <button class="accordion-button faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                                What industries does MechSolvix serve?
                            </button>
                        </h2>
                        <div id="faqOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body faq-body">
                                We support oil & gas, manufacturing, power generation, and industrial facilities with mechanical, maintenance, and support services tailored to each sector's operational demands.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header" id="faqHeadingTwo">
                            <button class="accordion-button collapsed faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                                Do you offer emergency maintenance support?
                            </button>
                        </h2>
                        <div id="faqTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body faq-body">
                                Yes, our team provides rapid-response emergency maintenance to minimize downtime and keep your critical equipment running safely.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header" id="faqHeadingThree">
                            <button class="accordion-button collapsed faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                                Are your technicians certified?
                            </button>
                        </h2>
                        <div id="faqThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body faq-body">
                                All work is carried out by certified professionals following international quality and safety standards, backed by rigorous inspection procedures.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header" id="faqHeadingFour">
                            <button class="accordion-button collapsed faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqFour" aria-expanded="false" aria-controls="faqFour">
                                How can I request a quote for a project?
                            </button>
                        </h2>
                        <div id="faqFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body faq-body">
                                Simply reach out through our contact form above, call us, or email us with your project details, and our team will respond with a tailored proposal.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header" id="faqHeadingFive">
                            <button class="accordion-button collapsed faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqFive" aria-expanded="false" aria-controls="faqFive">
                                Do you provide ongoing HSEQ compliance?
                            </button>
                        </h2>
                        <div id="faqFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body faq-body">
                                Yes, every project follows our 'Zero Harm, Zero Accidents' HSEQ policy, ensuring health, safety, environmental, and quality compliance throughout.
                            </div>
                        </div>
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
    :root {
        --faq-primary-blue: #3b82f6;
        --faq-light-blue-bg: #e0f7fa;
        --faq-wave-bg: #d1ecf1;
        --faq-white-bg: #ffffff;
        --faq-dark-navy: #464d5a;
        --faq-heading-navy: #4a586e;
    }

    .faq-wave-section {
        background-color: var(--faq-light-blue-bg);
        position: relative;
        overflow: hidden;
    }
    .faq-wave-section.ind-serv-section-light {
        padding-top: 150px;
        padding-bottom: 150px;
    }

    .faq-content-container {
        position: relative;
        z-index: 20;
    }

    .faq-wave-section .css-wave-container {
        position: absolute;
        left: 0;
        width: 100%;
        height: 120px;
        z-index: 10;
        overflow: hidden;
    }
    .faq-wave-section .top-wave { top: 0; }
    .faq-wave-section .bottom-wave { bottom: 0; }

    .faq-wave-section .wave {
        position: absolute;
        width: 150%;
        height: 150%;
        left: -25%;
        border-radius: 45% 55% 0 0 / 100% 100% 0 0;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
        transform-origin: 50% 100%;
    }

    .faq-wave-section .top-wave .wave-1 { background: var(--faq-wave-bg); bottom: 0; height: 120%; transform: rotate(0deg) translateY(45px); z-index: 12; opacity: 0.9; }
    .faq-wave-section .top-wave .wave-2 { background: var(--faq-white-bg); bottom: 0; height: 100%; border-radius: 40% 60% 0 0 / 100% 100% 0 0; transform: rotate(0deg) translateY(75px); z-index: 13; }
    .faq-wave-section .bottom-wave .wave-1 { background: var(--faq-wave-bg); top: 0; height: 120%; transform: rotate(180deg) translateY(45px); z-index: 12; opacity: 0.9; }
    .faq-wave-section .bottom-wave .wave-2 { background: var(--faq-white-bg); top: 0; height: 100%; border-radius: 40% 60% 0 0 / 100% 100% 0 0; transform: rotate(180deg) translateY(75px); z-index: 13; }

    .faq-wave-section .section-header {
        margin-bottom: 45px;
    }
    .faq-wave-section .section-header .tagline {
        color: var(--faq-dark-navy);
        font-weight: 700;
        font-size: 1.2rem;
        margin-bottom: 8px;
        letter-spacing: 1px;
    }
    .faq-wave-section .section-header .main-heading {
        font-size: 2.8rem;
        font-weight: 900;
        color: var(--faq-heading-navy);
        margin-bottom: 15px;
    }
    .faq-wave-section .section-header .subtext {
        color: #555;
        font-size: 1rem;
        max-width: 650px;
        margin: 0 auto;
    }

    .faq-item {
        border: none;
        margin-bottom: 18px;
        border-radius: 14px !important;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0,0,0,0.06);
    }

    .faq-button {
        font-family: 'Raleway', sans-serif;
        font-weight: 700;
        font-size: 1.1rem;
        color: var(--faq-heading-navy);
        background: var(--faq-white-bg);
        padding: 22px 25px;
    }
    .faq-button:not(.collapsed) {
        color: #fff;
        background: linear-gradient(135deg, var(--faq-dark-navy) 0%, #2a5298 100%);
        box-shadow: none;
    }
    .faq-button:focus {
        box-shadow: none;
        border-color: transparent;
    }
    .faq-button::after {
        filter: none;
    }
    .faq-button:not(.collapsed)::after {
        filter: brightness(0) invert(1);
    }

    .faq-body {
        font-family: 'Raleway', sans-serif;
        font-size: 1rem;
        color: #555;
        line-height: 1.7;
        background: var(--faq-white-bg);
        padding: 22px 25px;
    }

    @media (max-width: 992px) {
        .faq-wave-section.ind-serv-section-light {
            padding-top: 100px;
            padding-bottom: 100px;
        }
    }
    @media (max-width: 768px) {
        .faq-wave-section.ind-serv-section-light {
            padding-top: 80px;
            padding-bottom: 80px;
        }
        .faq-wave-section .section-header .main-heading {
            font-size: 2.2rem;
        }
        .faq-button {
            font-size: 1rem;
            padding: 18px 20px;
        }
        .faq-body {
            padding: 18px 20px;
        }
    }
</style>
