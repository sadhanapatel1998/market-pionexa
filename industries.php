<?php
ob_start();
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
                            <h1>Industries</h1>
                        </div>
                        <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-delay=".3s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Industries</li>
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

    <!-- project section start -->
    <section class="project-section-3 pt-100 md-pt-80 pb-100 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title start -->
                    <div class="section-title text-center wow fadeInUp" data-wow-delay=".2s">
                        <span class="sub-title">Industries We Serve</span>
                        <h2>Industries <span>We Support</span></h2>
                    </div>
                    <!-- section title end -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- project wapper start -->
                    <div class="project-wapper grid-1">
                        <div class="project-item sticky">
                            <div class="project-image order-lg-2">
                                <a href="javascript:void(0)">
                                    <figure class="image-anime">
                                        <img src="assets/images/project/project-1.jpg" alt="project image one">
                                    </figure>
                                </a>
                            </div>
                            <div class="project-content">
                                <h2>
                                    <a href="javascript:void(0)">
                                        Healthcare & Health-Tech
                                    </a>
                                </h2>

                                <p class="desc">
                                    We support healthcare providers, hospitals, clinics, and digital health companies by
                                    improving operational efficiency, strengthening customer success functions,
                                    optimizing
                                    business processes, and enabling scalable execution strategies that support
                                    sustainable
                                    growth while enhancing service delivery and organizational performance.
                                </p>

                                <div class="check-list mb-30">
                                    <ul>
                                        <li>Healthcare operations improvement</li>
                                        <li>Customer success & patient support</li>
                                        <li>Process optimization initiatives</li>
                                        <li>Growth & execution support</li>
                                    </ul>
                                </div>

                                <div class="project-button">
                                    <a href="contact-us.php" class="theme-button style-1">
                                        <span data-text="Book Consultation">Book Consultation</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- project item end -->
                        <!-- project item start -->
                        <div class="project-item sticky">
                            <div class="project-image order-lg-2">
                                <a href="javascript:void(0)">
                                    <figure class="image-anime">
                                        <img src="assets/images/project/project-2.jpg" alt="project image two">
                                    </figure>
                                </a>
                            </div>
                            <div class="project-content">
                                <h2>
                                    <a href="javascript:void(0)">
                                        Technology & SaaS
                                    </a>
                                </h2>

                                <p class="desc">
                                    We help technology and SaaS businesses streamline operations, improve customer
                                    success,
                                    optimize internal processes, and strengthen execution capabilities through practical
                                    business solutions that support scalability, operational excellence, and long-term
                                    business growth.
                                </p>

                                <div class="check-list mb-30">
                                    <ul>
                                        <li>Customer success operations</li>
                                        <li>Business process improvement</li>
                                        <li>Operational strategy & execution</li>
                                        <li>Scalable growth initiatives</li>
                                    </ul>
                                </div>

                                <div class="project-button">
                                    <a href="contact-us.php" class="theme-button style-1">
                                        <span data-text="Book Consultation">Book Consultation</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- project item end -->
                        <!-- project item start -->
                        <div class="project-item sticky">
                            <div class="project-image order-lg-2">
                                <a href="javascript:void(0)">
                                    <figure class="image-anime">
                                        <img src="assets/images/project/project-3.jpg" alt="project image three">
                                    </figure>
                                </a>
                            </div>
                            <div class="project-content">
                                <h2>
                                    <a href="growth-market-expansion.php">
                                        Growth & Market Expansion
                                    </a>
                                </h2>

                                <p class="desc">
                                    We partner with organizations seeking growth by providing market research, expansion
                                    planning, operational readiness, and execution support that helps businesses
                                    confidently
                                    enter new markets, strengthen operations, and achieve sustainable long-term success.
                                </p>

                                <div class="check-list mb-30">
                                    <ul>
                                        <li>Market research & analysis</li>
                                        <li>Expansion planning support</li>
                                        <li>Operational readiness</li>
                                        <li>Business execution strategy</li>
                                    </ul>
                                </div>

                                <div class="project-button">
                                    <a href="contact-us.php" class="theme-button style-1">
                                        <span data-text="Book Consultation">Book Consultation</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project section end -->
</main>

<?php
$content = ob_get_clean();
require 'layout.php';
?>