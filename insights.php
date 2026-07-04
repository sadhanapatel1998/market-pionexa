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
                            <h1>Insights</h1>
                        </div>
                        <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-delay=".3s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Insights</li>
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

    <!-- Insights Categories Section Start -->
    <section class="micon-section pt-60 md-pt-60 mb-100">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <div class="section-title text-center wow fadeInUp" data-wow-delay=".2s">
                        <span class="sub-title">Insights & Resources</span>
                        <h2>Explore Our <span>Insights</span></h2>
                    </div>
                </div>

                <div class="col-lg-12">

                    <div class="micon-wapper">

                        <!-- Card 1 -->
                        <div class="micon-items right-after wow fadeInUp" data-wow-delay=".3s">
                            <div class="micon-content">
                                <h2>Business Growth</h2>
                                <p>
                                    Discover practical insights on sustainable business growth,
                                    operational improvements, and execution strategies that help
                                    organizations achieve measurable business outcomes.
                                </p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="micon-items right-after wow fadeInUp" data-wow-delay=".4s">
                            <div class="micon-content">
                                <h2>Operational Excellence</h2>
                                <p>
                                    Learn how optimized workflows, efficient processes, and
                                    structured execution can improve organizational performance
                                    and support long-term operational success.
                                </p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="micon-items right-after wow fadeInUp" data-wow-delay=".5s">
                            <div class="micon-content">
                                <h2>Customer Success</h2>
                                <p>
                                    Explore strategies that strengthen customer relationships,
                                    improve service delivery, and build customer success
                                    operations that support sustainable business growth.
                                </p>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="micon-items right-after wow fadeInUp" data-wow-delay=".6s">
                            <div class="micon-content">
                                <h2>Healthcare Insights</h2>
                                <p>
                                    Stay informed with industry perspectives on healthcare
                                    operations, digital health, process optimization, and
                                    execution-focused business transformation initiatives.
                                </p>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="micon-items right-after wow fadeInUp" data-wow-delay=".7s">
                            <div class="micon-content">
                                <h2>Technology & SaaS</h2>
                                <p>
                                    Gain valuable insights into SaaS growth, customer success,
                                    operational strategy, and scalable business practices for
                                    technology-driven organizations.
                                </p>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div class="micon-items right-after wow fadeInUp" data-wow-delay=".8s">
                            <div class="micon-content">
                                <h2>Market Expansion</h2>
                                <p>
                                    Explore market research, expansion planning, operational
                                    readiness, and execution strategies that support confident
                                    entry into new business markets.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- Insights Categories Section End -->

</main>

<?php
$content = ob_get_clean();
require 'layout.php';
?>