<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="pus_infotech">
    <meta name="description" content="HTML Template">
    <meta name="keywords" content="Html Template">
    <!-- page title -->
    <title>Index Three | Pexora - Ai Agency & Saas Technology HTML Template</title>
    <!-- favicon icon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
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
                <img src="assets/images/loader.svg" alt="loader image">
            </div>
            <div class="preloader-text">
                <p>P</p>
                <p>e</p>
                <p>x</p>
                <p>o</p>
                <p>r</p>
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
</body>

</html>