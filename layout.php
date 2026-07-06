<?php include('seo.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $pageMeta['title']; ?></title>
    <meta name="description" content="<?= $pageMeta['description']; ?>">
    <meta name="keywords" content="<?= $pageMeta['keywords']; ?>">
    <meta name="robots" content="<?= $pageMeta['robots']; ?>">
    <link rel="canonical" href="<?= $pageMeta['canonical']; ?>">
    <!-- favicon icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">
    <!-- font awesome css -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- magnific css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- main css  -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- page wrapper start -->
    <div class="page-wrapper">
        <!-- preloader start -->
        <!-- <div class="preloader">
            <div class="preloader-icon">
                <img src="assets/images/loader.png" alt="loader image">
            </div>
            <div class="preloader-text">
                <p>M</p>
                <p>a</p>
                <p>r</p>
                <p>k</p>
                <p>e</p>
                <p>t</p>
                <p>&nbsp;</p>
                <p>P</p>
                <p>i</p>
                <p>o</p>
                <p>n</p>
                <p>e</p>
                <p>x</p>
                <p>a</p>
            </div>
        </div> -->
        <!-- preloader end -->

        <!-- back to top start -->
        <button id="back-top" class="back-to-top" aria-label="back to top">
            <i class="fa-solid fa-chevron-up"></i>
        </button>
        <!-- back to top end -->

        <!-- mouse cursor start -->
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>
        <!-- mouse cursor end -->


        <?php require_once("include/header.php"); ?>
        <?= $content ?? ''; ?>
        <?php require_once('include/footer.php') ?>

    </div>
    <!-- page wrapper end -->


    <div class="floating-contact">
        <a href="tel:+918527976330" class="floating-btn call-btn">
            <span>Call Us</span>
            <i class="fa-solid fa-phone"></i>
        </a>
        <a href="https://wa.me/9185279763309" target="_blank" class="floating-btn whatsapp-btn">
            <span>WhatsApp</span>
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- jquery meanmenu js -->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!-- swiper js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- wow Js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- validate js -->
    <script src="assets/js/validate.min.js"></script>
    <!-- ajax form Js -->
    <script src="assets/js/ajax-form.js"></script>
    <!-- SmoothScroll Js -->
    <script src="assets/js/SmoothScroll.js"></script>
    <!-- appear Js -->
    <script src="assets/js/jquery.appear.js"></script>
    <!-- magnific Js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- syotimer Js -->
    <script src="assets/js/jquery.syotimer.min.js"></script>
    <!-- main Js -->
    <script src="assets/js/main.js"></script>
    <script>
        document.querySelectorAll("form").forEach(function (form) {
            form.addEventListener("submit", function () {

                const button = form.querySelector("button[type='submit']");
                const loader = form.querySelector(".form-loader");

                if (button) {
                    button.disabled = true;
                    button.innerHTML = "Processing...";
                }

                if (loader) {
                    loader.style.display = "block";
                }
            });
        });
    </script>
</body>

</html>