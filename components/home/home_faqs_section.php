<?php
$faqs = [
    [
        'question' => 'Will I get a certificate after completing your software development program?',
        'answer' => 'Yes. Techpaathshala will issue you a certificate upon completion of the program.'
    ],
    [
        'question' => 'How can I enroll for Techpaathshala?',
        'answer' => ' It is now easier to enroll for Techpaathshala, you just need to choose from our list of development programs and you will see the option to enroll. Also, you can request a call back from us so we can guide you to enroll.'
    ],
    [
        'question' => 'What benefits do I get if I enroll for Techpaathshala?',
        'answer' => 'Receive training from the best IT program in India. 
        Access to the best learning platform for developers and beginners. Learn from Industry Experts. Classroom Focus Training. Job Oriented approach. Get 100% placement assessment and internships.'
    ],
    [
        'question' => 'Can I pay in EMI?',
        'answer' => 'Yes, students can pay the total fees at No Cost EMI. The students must pay an initial 10% of the fees as the first down payment & the remaining fees in 12-36 months.'
    ],
    [
        'question' => 'Can I attend lectures in hybrid mode?',
        'answer' => 'Only students who have purchased the Offline program can attend lectures in hybrid mode.        '
    ],
    [
        'question' => ' Do you provide laptops to students?',
        'answer' => 'Students in offline batches should carry laptops. Students in online batches should have laptops and a good internet connection.'
    ],
    [
        'question' => 'I have a few more questions?',
        'answer' => 'For quick assistance, reach us at 9867629226 or email us at info@techpaathshala.com. Expect a response within 24-48 hours.'
    ],
    // [
    //     'question' => 'Is there a free trial available?',
    //     'answer' => 'Yes, you can try us for free for 30 days. If you want, we’ll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.'
    // ],
    // [
    //     'question' => 'Can I change my plan later?',
    //     'answer' => 'Yes, you can change your plan at any time. If you decide to change your plan, any changes will take effect at the start of the next billing cycle.'
    // ],
    // [
    //     'question' => 'What is your cancellation policy?',
    //     'answer' => 'You can cancel your subscription at any time. Cancellations will take effect at the end of the current billing cycle, and you will not be charged again.'
    // ],
    // [
    //     'question' => 'Can other info be added to an invoice?',
    //     'answer' => 'Yes, you can try us for free for 30 days. If you want, we’ll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.'
    // ],
    // [
    //     'question' => 'How does billing work?',
    //     'answer' => 'Yes, you can change your plan at any time. If you decide to change your plan, any changes will take effect at the start of the next billing cycle.'
    // ],
    // [
    //     'question' => 'How do I change my account email?',
    //     'answer' => 'You can cancel your subscription at any time. Cancellations will take effect at the end of the current billing cycle, and you will not be charged again.'
    // ],
  
];

$accordionId = 1;
?>

<div class="faq-container container faq">
    <h2 class="text-center">Frequently asked <br class="for_mobile_view"> questions</h2>
    <img class="faq_underline faq_underline_desktop" src="assets/images/home/faq_underline.svg" alt="faq_underline">
    <img class="faq_underline faq_underline_mbl" src="assets/images/home/faq_underline_mbl.svg" alt="faq_underline">
    <p class="text-center custom_text">Everything you need to know about the product <span class="faq_desktop_detail">and billing.</span> </p>
    <div class="accordion accordion-flush custom_width" id="accordionFlushExample">
        <?php foreach ($faqs as $faq): ?>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text home__faq_btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse<?= $accordionId ?>" aria-expanded="false" aria-controls="flush-collapse<?= $accordionId ?>">
                        <?= htmlspecialchars($faq['question']) ?>
                    </button>
                </h2>
                <div id="flush-collapse<?= $accordionId ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body home__faq_answer">
                        <?= htmlspecialchars($faq['answer']) ?>
                    </div>
                </div>
            </div>
            <?php $accordionId++; ?>
        <?php endforeach; ?>
    </div>
</div>
