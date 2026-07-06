<?php

$currentPage = basename($_SERVER['PHP_SELF']);

$seoData = [

    // Home
    "index.php" => [
        "title" => "Market Pionexa Consulting Pvt. Ltd. | Dedicated Remote Teams & Business Consulting",
        "description" => "Market Pionexa Consulting helps US and UK businesses build dedicated remote teams from India while delivering business operations, consulting, market research, and global expansion solutions.",
        "keywords" => "Market Pionexa Consulting, dedicated remote teams, business consulting, India remote teams, business operations, market research, sales operations",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    // About
    "about-us.php" => [
        "title" => "About Us | Market Pionexa Consulting Pvt. Ltd.",
        "description" => "Learn about Market Pionexa Consulting, helping businesses build dedicated remote teams, improve operations, and execute sustainable growth strategies.",
        "keywords" => "about Market Pionexa, consulting company, remote staffing India, business execution",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    // Dedicated Remote Teams
    "dedicated-remote-teams.php" => [
        "title" => "Dedicated Remote Teams | Market Pionexa Consulting",
        "description" => "Build dedicated remote teams in India with Market Pionexa. Access skilled professionals, reduce operational costs, and scale your business with confidence.",
        "keywords" => "dedicated remote teams, offshore teams India, remote staffing, virtual employees, remote workforce",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    // Business Operations
    "business-operations.php" => [
        "title" => "Business Operations | Market Pionexa Consulting",
        "description" => "Optimize business operations with structured processes, operational excellence, workflow management, and execution support tailored to your organization.",
        "keywords" => "business operations, operational excellence, workflow optimization, process management",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    // Market Research
    "market-research-business-intelligence.php" => [
        "title" => "Market Research & Business Intelligence | Market Pionexa",
        "description" => "Make informed decisions with comprehensive market research, competitive analysis, business intelligence, and actionable insights.",
        "keywords" => "market research, business intelligence, competitor analysis, market insights, business analytics",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    // Strategic Consulting
    "strategic-business-consulting.php" => [
        "title" => "Strategic Business Consulting | Market Pionexa",
        "description" => "Accelerate business growth with strategic consulting, operational planning, execution frameworks, and long-term business transformation.",
        "keywords" => "business consulting, strategic consulting, business strategy, growth consulting",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    // Global Expansion
    "global-expansion-india-market-entry.php" => [
        "title" => "Global Expansion & India Market Entry | Market Pionexa",
        "description" => "Expand into India with confidence through market-entry strategy, operational setup, regulatory guidance, and execution support.",
        "keywords" => "India market entry, global expansion, international business, India business consulting",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    // Sales Operations
    "sales-operations.php" => [
        "title" => "Sales Operations | Market Pionexa Consulting",
        "description" => "Improve sales performance through structured sales operations, process optimization, reporting, and execution-focused business support.",
        "keywords" => "sales operations, sales process optimization, sales strategy, business growth",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    // Customer Success
    "customer-success-workforce-support.php" => [
        "title" => "Customer Success & Workforce Support | Market Pionexa",
        "description" => "Enhance customer satisfaction with customer success strategies, workforce support, remote teams, and scalable business operations.",
        "keywords" => "customer success, workforce support, customer support outsourcing, remote support teams",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    // Industries
    "industries.php" => [
        "title" => "Industries We Serve | Market Pionexa Consulting",
        "description" => "Discover how Market Pionexa supports healthcare, technology, financial services, e-commerce, startups, and other industries with consulting and remote team solutions.",
        "keywords" => "industries served, healthcare consulting, technology consulting, startup consulting",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    // Insights
    "insights.php" => [
        "title" => "Insights & Resources | Market Pionexa Consulting",
        "description" => "Read expert insights, business strategies, market trends, and operational best practices from Market Pionexa Consulting.",
        "keywords" => "business insights, consulting blog, market trends, business strategy articles",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    // Contact
    "contact-us.php" => [
        "title" => "Contact Us | Market Pionexa Consulting Pvt. Ltd.",
        "description" => "Connect with Market Pionexa Consulting to discuss dedicated remote teams, business consulting, operations, and global expansion solutions.",
        "keywords" => "contact Market Pionexa, consulting company, remote team consultation",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    // Thank You
    "thankyou.php" => [
        "title" => "Thank You | Market Pionexa Consulting",
        "description" => "Thank you for contacting Market Pionexa Consulting. Our team will get in touch with you shortly.",
        "keywords" => "thank you, inquiry submitted",
        "canonical" => "",
        "robots" => "noindex, nofollow"
    ],

    // Error
    "error.php" => [
        "title" => "Page Not Found | Market Pionexa Consulting",
        "description" => "The page you are looking for does not exist. Explore our consulting services and business solutions.",
        "keywords" => "404 page, page not found",
        "canonical" => "",
        "robots" => "noindex, nofollow"
    ]

];

$defaultMeta = [
    "title" => "Market Pionexa Consulting Pvt. Ltd. | Transforming Vision Into Global Execution",
    "description" => "Helping US and UK businesses build dedicated remote teams from India while delivering strategic consulting, business operations, market research, sales operations, and global expansion solutions.",
    "keywords" => "Market Pionexa Consulting, remote teams, business consulting, business operations, market research, India market entry",
    "canonical" => "",
    "robots" => "index, follow"
];

$pageMeta = $seoData[$currentPage] ?? $defaultMeta;

?>