<?php
ob_start();

session_start();

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$old = isset($_SESSION['old']) ? $_SESSION['old'] : [];
?>
<!-- main start -->
<main class="main">
    <!-- breadcrumb section start -->
    <section class="breadcrumb-section pt-80 md-pt-60 pb-80 md-pb-60"
        data-img-src="assets/images/breadcrumb/breadcrumb-shape-line.png">
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
            <img class="breadcrumb-shado-top" src="assets/images/breadcrumb/breadcrumb-shado-top.png"
                alt="breadcrumb shape top">
            <img class="breadcrumb-shado-bottom" src="assets/images/breadcrumb/breadcrumb-shado-bottom.png"
                alt="breadcrumb shape bottom">
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
                                <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                                    <span class="sub-title">Contact Me</span>
                                    <h2>Stay connect with us today</h2>
                                </div>
                                <div class="contact-item-wrapper wow fadeInUp" data-wow-delay=".3s">
                                    <!-- <div class="contact-item">
                                        <div class="contact-icon"><i class="fa-solid fa-phone-volume"></i></div>
                                        <div class="contact-content">
                                            <p>Call Now</p>
                                            <h3>+91 8527976330</h3>
                                        </div>
                                    </div> -->
                                    <div class="contact-item">
                                        <div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
                                        <div class="contact-content">
                                            <p>Email</p>
                                            <h3>contact@marketpionexa.com</h3>
                                        </div>
                                    </div>
                                    <div class="contact-item">
                                        <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                                        <div class="contact-content">
                                            <p>Address</p>
                                          <h3>New Delhi | Pune</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-social-links">
                                    <ul class="social-icon">
                                        <li>
                                            <a href="https://www.instagram.com/marketpionexa/" target="_blank"
                                                aria-label="instagram"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/Marketpionexaconsulting" target="_blank"
                                                aria-label="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="LinkedIn">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="contact-form-box">
                                    <div class="section-title">
                                        <span class="sub-title">Send us email</span>
                                        <h2>Feel free to write</h2>
                                    </div>
                                    <div class="default-form contact-form">
                                        <form action="mail" method="POST" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <div class="field-inner">
                                                            <label for="name">Name*</label>
                                                            <input id="name" class="form-control" name="name"
                                                                type="text" autocomplete="off" placeholder="Ex. name"
                                                                value="<?php echo isset($old['name']) ? $old['name'] : ''; ?>"
                                                                required="required">
                                                            <span class="text-danger">
                                                                <?php echo isset($errors['name']) ? $errors['name'] : ''; ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <div class="field-inner">
                                                            <label for="email">Email*</label>
                                                            <input id="email" class="form-control" name="email"
                                                                type="email" autocomplete="off"
                                                                placeholder="Ex. info@example.com"
                                                                value="<?php echo isset($old['email']) ? $old['email'] : ''; ?>"
                                                                required="required">
                                                            <span class="text-danger">
                                                                <?php echo isset($errors['email']) ? $errors['email'] : ''; ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <div class="field-inner">
                                                            <label for="phone">Phone Number*</label>
                                                            <input id="phone" class="form-control" name="phone"
                                                                type="text" autocomplete="off"
                                                                placeholder="Ex. 9876543210"
                                                                value="<?php echo isset($old['phone']) ? $old['phone'] : ''; ?>"
                                                                required="required">
                                                            <span class="text-danger">
                                                                <?php echo isset($errors['phone']) ? $errors['phone'] : ''; ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <div class="field-inner">
                                                            <label for="subject">Subject*</label>
                                                            <input id="subject" class="form-control" name="subject"
                                                                type="text" autocomplete="off"
                                                                placeholder="Ex. Subject Here"
                                                                value="<?php echo isset($old['subject']) ? $old['subject'] : ''; ?>"
                                                                required="required">
                                                            <span class="text-danger">
                                                                <?php echo isset($errors['subject']) ? $errors['subject'] : ''; ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="field-inner">
                                                            <label for="message">Message*</label>
                                                            <textarea id="message" class="form-control" name="message"
                                                                autocomplete="off" placeholder="Ex. type messege"
                                                                required="required"><?php echo isset($old['message']) ? $old['message'] : ''; ?></textarea>
                                                            <span class="text-danger">
                                                                <?php echo isset($errors['message']) ? $errors['message'] : ''; ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="contact-btn-wapper mt-10">
                                                        <button type="submit" class="theme-button style-1"
                                                            data-text="Send Message">
                                                            <span data-text="Send Message">Send Message</span>
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <div class="form-loader text-success">
                                                        <i class="fa fa-spinner fa-spin"></i>
                                                        Please wait, submitting your enquiry...
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                        unset($_SESSION['errors']);
                                        unset($_SESSION['old']);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <div class="google-map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="google-map-iframe">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224346.5400466074!2d77.04417434001834!3d28.527252739872903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1783403564934!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</main>

<?php
$content = ob_get_clean();
require 'layout.php';
?>