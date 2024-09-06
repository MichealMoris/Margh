<div class="row" style="margin-top: 5rem;margin-bottom: 5rem;" id="faqSection">

    <div class="col-12 text-center">
        <h3 style="color: #74c14e; font-family:'MadaniArabic-Bold', sans-serif;">{{__('content.full_faqs_title')}}</h3>
        <h6 style="color: #103a41; font-family:'MadaniArabic-Light', sans-serif;">{{__('content.full_faqs_body')}}</h6>
    </div>
    <div class="col-12 px-5 mt-3">
        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-header shadow-sm" id="headerOne">
                    <h2 style="color: #103a41; font-family:'MadaniArabic-Bold', sans-serif;">{{__('content.question_one')}}</h2>
                    <span style="color:#74c14e;font-family:'MadaniArabic-Bold', sans-serif;" class="icon">+</span>
                </div>
                <div class="accordion-body">
                    <p style="color: #103a41; font-family:'MadaniArabic-Light', sans-serif;" class="pt-4">{{__('content.answer_one')}}</p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header shadow-sm" id="headerTwo">
                    <h2 style="color: #103a41; font-family:'MadaniArabic-Bold', sans-serif;">{{__('content.question_two')}}</h2>
                    <span style="color:#74c14e;font-family:'MadaniArabic-Bold', sans-serif;" class="icon">+</span>
                </div>
                <div class="accordion-body">
                    <p style="color: #103a41; font-family:'MadaniArabic-Light', sans-serif;" class="pt-4">{{__('content.answer_two')}}</p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header shadow-sm" id="headerThree">
                    <h2 style="color: #103a41; font-family:'MadaniArabic-Bold', sans-serif;">{{__('content.question_three')}}</h2>
                    <span style="color:#74c14e;font-family:'MadaniArabic-Bold', sans-serif;" class="icon">+</span>
                </div>
                <div class="accordion-body">
                   <p style="color: #103a41; font-family:'MadaniArabic-Light', sans-serif;" class="pt-4">{{__('content.answer_three')}}</p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header shadow-sm" id="headerFour">
                    <h2 style="color: #103a41; font-family:'MadaniArabic-Bold', sans-serif;">{{__('content.question_four')}}</h2>
                    <span style="color:#74c14e;font-family:'MadaniArabic-Bold', sans-serif;" class="icon">+</span>
                </div>
                <div class="accordion-body">
                    <p style="color: #103a41; font-family:'MadaniArabic-Light', sans-serif;" class="pt-4">{{__('content.answer_four')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.accordion-header').forEach(header => {
    header.addEventListener('click', () => {
        const currentlyActiveHeader = document.querySelector('.accordion-header.active');
        if (currentlyActiveHeader && currentlyActiveHeader !== header) {
            currentlyActiveHeader.classList.toggle('active');
            currentlyActiveHeader.nextElementSibling.style.display = 'none';
            currentlyActiveHeader.querySelector('.icon').textContent = '+';
        }

        header.classList.toggle('active');
        const body = header.nextElementSibling;


    });
});
</script>
