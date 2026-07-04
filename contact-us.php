<?php
ob_start();
?>
<!-- main start -->
<main class="main">
    <!-- breadcrumb section start -->
    <section class="breadcrumb-section pt-80 md-pt-60 pb-80 md-pb-60" data-img-src="assets/images/breadcrumb/breadcrumb-shape-line.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <div class="breadcrumb-title wow fadeInUp" data-wow-delay=".2s">
                            <h1>Contact us</h1>
                        </div>
                        <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-delay=".3s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape">
            <img class="breadcrumb-shado-top" src="assets/images/breadcrumb/breadcrumb-shado-top.png" alt="breadcrumb shape top">
            <img class="breadcrumb-shado-bottom" src="assets/images/breadcrumb/breadcrumb-shado-bottom.png" alt="breadcrumb shape bottom">
        </div>
    </section>
    <!-- breadcrumb section end -->

    <!-- contact section start -->
    <section class="contact-section pt-100 md-pt-80 pb-100 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-wapper">
                        <div class="row justify-content-between">
                            <div class="col-lg-4">
                                <!-- section title start -->
                                <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                                    <span class="sub-title">Contact Me</span>
                                    <h2>Stay connect with us today</h2>
                                </div>
                                <!-- section title end -->
                                <!-- contact item wrapper start -->
                                <div class="contact-item-wrapper wow fadeInUp" data-wow-delay=".3s">
                                    <!-- contact items start -->
                                    <div class="contact-item">
                                        <div class="contact-icon"><i class="fa-solid fa-phone-volume"></i></div>
                                        <div class="contact-content">
                                            <p>Call Now</p>
                                            <h3>+91 8527976330</h3>
                                        </div>
                                    </div>
                                    <!-- contact items end -->
                                    <!-- contact items start -->
                                    <div class="contact-item">
                                        <div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
                                        <div class="contact-content">
                                            <p>Email</p>
                                            <h3>contact@marketpionexa.com</h3>
                                        </div>
                                    </div>
                                    <!-- contact items start -->
                                    <div class="contact-item">
                                        <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                                        <div class="contact-content">
                                            <p>Address</p>
                                            <h3>NSP, Pitampura New Delhi</h3>
                                        </div>
                                    </div>
                                    <!-- contact items end -->
                                </div>
                                <!-- contact item wrapper end -->
                                <!-- contact social links start -->
                                <div class="contact-social-links">
                                    <ul class="social-icon">
                                        <li>
                                            <a href="#" aria-label="instagram"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- contact social links end -->
                            </div>
                            <div class="col-lg-7">
                                <!-- contact form box start -->
                                <div class="contact-form-box">
                                    <div class="section-title">
                                        <span class="sub-title">Send us email</span>
                                        <h2>Feel free to write</h2>
                                    </div>
                                    <!-- default-form start -->
                                    <div class="default-form contact-form">
                                        <form action="contact.php" method="POST" id="contact" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <div class="field-inner">
                                                            <label for="name">Name*</label>
                                                            <input id="name" class="form-control" name="name" type="text" autocomplete="off" placeholder="Ex. name" required="required">
                                                            <span class="error" id="name-error"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <div class="field-inner">
                                                            <label for="email">Email*</label>
                                                            <input id="email" class="form-control" name="email" type="email" autocomplete="off" placeholder="Ex. info@example.com" required="required">
                                                            <span class="error" id="email-error"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <div class="field-inner">
                                                            <label for="phone">Phone Number*</label>
                                                            <input id="phone" class="form-control" name="phone" type="text" autocomplete="off" placeholder="Ex. 9876543210" required="required">
                                                            <span class="error" id="phone-error"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <div class="field-inner">
                                                            <label for="subject">Subject*</label>
                                                            <input id="subject" class="form-control" name="subject" type="text" autocomplete="off" placeholder="Ex. Subject Here" required="required">
                                                            <span class="error" id="subject-error"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="field-inner">
                                                            <label for="message">Message*</label>
                                                            <textarea id="message" class="form-control" name="message" autocomplete="off" placeholder="Ex. type messege" required="required"></textarea>
                                                            <span class="error" id="message-error"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="contact-btn-wapper mt-10">
                                                        <button type="submit" class="theme-button style-1" data-text="Send Message">
                                                            <span data-text="Send Message">Send Message</span>
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ajax-response"></div>
                                        </form>
                                    </div>
                                    <!-- default-form end -->
                                </div>
                                <!-- contact form box end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end -->

    <!-- Google Map start -->
    <div class="google-map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <!-- google map iframe start -->
                    <div class="google-map-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.7859155738292!2d77.14808388885498!3d28.69605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d023243f9fe8b%3A0xdbcb89821a18cfc4!2sNetaji%20Subhash%20Place!5e0!3m2!1sen!2sin!4v1783153794857!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                    <!-- google map iframe end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map end -->


</main>

<?php
$content = ob_get_clean();
require 'layout.php';
?>