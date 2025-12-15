<!-- FAQ Section -->
<section class="faq-clean-section">

    <div class="container">

        <!-- SECTION HEADING -->
        <div class="section-headers" style="text-align:center; margin-bottom:30px;margin-left:50px">
            <h2 class="section-title">
                Frequently Asked <span>Questions?</span>
            </h2>
            <p class="section-subtitle">
                Answers to common queries about our engineering, industrial, and construction services.
            </p>
        </div>

        <!-- FAQ LIST -->
        <div class="faq-list">
            <div class="faq-item">
                <h4 class="faq-question">What services does MechSolvix provide?</h4>
                <p class="faq-answer">
                    We provide engineering, industrial, BIM ,Supervisory,Artitecture & Design,construction solutions and interior solutions tailored to your project needs, ensuring safety, quality, and efficiency.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">Do you work with international clients?</h4>
                <p class="faq-answer">
                    Yes, we have experience handling projects worldwide and can provide seamless support for international clients.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">How can I get a project quote?</h4>
                <p class="faq-answer">
                    Contact us through our website form, email, or phone. Provide your project details and we’ll send a customized quote.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">Are your engineers certified?</h4>
                <p class="faq-answer">
                    Yes, all our engineers are professionally certified and experienced in industrial and construction projects.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">What is the typical project timeline?</h4>
                <p class="faq-answer">
                    Timelines vary by project size and complexity. We provide a detailed schedule during the initial consultation.
                </p>
            </div>

            <div class="faq-item">
                <h4 class="faq-question">How do I contact support?</h4>
                <p class="faq-answer">
                    You can reach our support team via email, phone, or the website contact form. Responses are typically within 24 hours.
                </p>
            </div>
        </div>

    </div>
</section>

<style>
/* FAQ SECTION */
.faq-clean-section {
    background: #f9f9f9;
    padding: 40px 0; /* Reduced height */
    font-family: 'Raleway', sans-serif;
}

.section-header{
    max-width: 720px;
    margin-bottom: 30px;
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
    font-size: 1rem;
    color: #64748b;
    line-height: 1.5;
}

/* FAQ LIST */
.faq-list {
    width: 100%; /* Full width under heading */
    max-width: 95%; /* Stretch more */
    margin: 0 auto;
}

.faq-item {
    background: #ffffff;
    padding: 25px 30px;
    border-radius: 16px;
    margin-bottom: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    cursor: pointer;
    border-left: 4px solid #38bdf8;
}

.faq-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 35px rgba(56,189,248,0.2);
}

.faq-question {
    font-size: 1.3rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 8px;
    position: relative;
    padding-right: 30px;
}

.faq-question::after {
    content: '+';
    position: absolute;
    right: 0;
    top: 0;
    font-size: 1.4rem;
    color: #38bdf8;
    transition: transform 0.3s ease;
}

.faq-item.active .faq-question::after {
    transform: rotate(45deg);
}

.faq-answer {
    font-size: 0.98rem;
    color: #475569;
    line-height: 1.5;
    display: none;
    margin-top: 8px;
}

@media (max-width: 768px) {
    .faq-item {
        padding: 20px 18px;
    }
    .faq-question {
        font-size: 1.15rem;
    }
    .faq-answer {
        font-size: 0.95rem;
    }
}
</style>

<script>
// FAQ Toggle
const faqItems = document.querySelectorAll('.faq-item');
faqItems.forEach(item => {
    item.addEventListener('click', () => {
        faqItems.forEach(i => i !== item && i.classList.remove('active') && (i.querySelector('.faq-answer').style.display = 'none'));
        const answer = item.querySelector('.faq-answer');
        const isVisible = item.classList.contains('active');
        if(isVisible){
            answer.style.display = 'none';
            item.classList.remove('active');
        } else {
            answer.style.display = 'block';
            item.classList.add('active');
        }
    });
});
</script>
