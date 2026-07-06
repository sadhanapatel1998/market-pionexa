<?php
ob_start();
?>


<!-- main start -->
<main class="main">
    <section class="error-section pt-100 md-pt-80 pb-100 md-pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="error-box text-center">
                        <div class="error-image">
                            <img src="assets/images/thankyou.png" alt="error image" class="w-50">
                        </div>
                        <div class="error-content pt-50">
                            <div class="section-title">
                                <h2>Thank You!</h2>
                                <p>We appreciate your interest in Market Pionexa Consulting. Our team will contact you
                                    shortly to discuss how we can support your business goals.</p>
                            </div>

                            <a href="/" class="theme-button style-1" aria-label="Return to Home">
                                <span data-text="Return to Home">Return to Home</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- main end -->

<?php
$content = ob_get_clean();
require 'layout.php';
?>