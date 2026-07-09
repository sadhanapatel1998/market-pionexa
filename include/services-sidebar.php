<div class="widget-sidebar wow fadeInUp" data-wow-delay=".3s">

    <!-- Services -->
    <div class="widget widget-categories-list">
        <div class="widget-title">
            <h3 class="text-white">Our Services</h3>
        </div>
        <?php
        $current_page = basename($_SERVER['PHP_SELF']);

        $services = [
            [
                'title' => 'Dedicated Remote Teams',
                'link' => 'dedicated-remote-teams.php'
            ],
            [
                'title' => 'Business Operations',
                'link' => 'business-operations.php'
            ],
            [
                'title' => 'Market Research & Business Intelligence',
                'link' => 'market-research-business-intelligence.php'
            ],
            [
                'title' => 'Strategic Business Consulting',
                'link' => 'strategic-business-consulting.php'
            ],
            [
                'title' => 'Global Expansion & India Market Entry',
                'link' => 'global-expansion-india-market-entry.php'
            ],
            [
                'title' => 'Sales Operations',
                'link' => 'sales-operations.php'
            ],
            [
                'title' => 'Customer Success & Workforce Support',
                'link' => 'customer-success-workforce-support.php'
            ]
        ];
        ?>
        <div class="widget-content">
            <ul class="category-list">
                <?php foreach ($services as $service): ?>
                    <li>
                        <a href="<?= $service['link']; ?>"
                            class="<?= ($current_page == $service['link']) ? 'active' : ''; ?>">

                            <span class="categories-name">
                                <?= $service['title']; ?>
                            </span>

                            <span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!-- CTA -->
    <div class="widget widget-cta">
        <div class="widget-title">
            <h3 class="text-white">Need Business Support?</h3>
        </div>

        <div class="widget-content">
            <p>
                Connect with our team to discuss your business objectives,
                operational challenges, or market expansion plans. We're here
                to help you move from strategy to execution.
            </p>
            <div class="service-cta-item">
                <div class="service-cta-list d-flex gap-3">
                    <div class="service-cta-icon d-flex align-items-center justify-content-center flex-shrink-0">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="service-cta-content flex-grow-1">
                        <p>Email Us</p>
                        <a href="mailto:contact@marketpionexa.com">
                            contact@marketpionexa.com
                        </a>
                    </div>
                </div>
                <div class="service-cta-list d-flex gap-3">
                    <div class="service-cta-icon d-flex align-items-center justify-content-center flex-shrink-0">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                    <div class="service-cta-content flex-grow-1">
                        <p>Consultation</p>
                        <a href="contact-us.php">
                            Book a Consultation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>