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
                            <img src="assets/images/error.png" alt="error image" class="w-50">
                        </div>
                        <div class="error-content pt-50">
                            <div class="section-title">
                                <div class="section-title">
                                    <h2>Sorry, This Page Isn't Available</h2>
                                    <p>The page you requested could not be found. It may have been moved, removed, or
                                        the link you followed is no longer available.</p>
                                </div>
                            </div>

                            <a href="/" class="theme-button style-1" aria-label="Go to Homepage">
                                <span data-text="Go to Homepage">Go to Homepage</span>
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