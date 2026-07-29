<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>Distance Learning MBA - PGDM courses With 100% Placement | MITSDE</title>

    <meta name="description"
        content="MIT School of Distance Education provides 100% placement support to the students and industry connect facility for career enhancement." />
    <meta name="keywords"
        content="Placements, mitsde placements, distance pg certificate courses, distance certificate courses, online learning, distance learning center, online mba programs, pgdm courses, pgdm distance courses" />
    <!-- CANONICAL TAG -->

    <link rel="canonical" href="https://mitsde.com/placement" />

    <!-- OGP TAG -->

    <meta property="og:title" content="Distance Learning MBA - PGDM courses With 100% Placement | MITSDE">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/placement">
    <meta property="og:description"
        content="MIT School of Distance Education provides 100% placement support to the students and industry connect facility for career enhancement.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://mitsde.com/assets-new/images/placement.webp">

    <!-- / OG TAG -->

    <!--  -->
    <link rel="icon" type="image/png" href="assets-new/images/favicon-mit.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css-new/styles.css" />
    <link rel="stylesheet" href="css-new/intlTelInput.css">
<?php include "5-common-seo-tag-1.php" ?>
</head>

<body>
  <?php include "5-common-seo-tag-2.php" ?>
    <?php include "header-new.php" ?>

    <!-- ═══════════════════════════════════════════════
       PROGRAM HERO
       Reusable .ph-* classes — replicate for every
       program detail page, only swap heading + pills.
    ════════════════════════════════════════════════ -->
    <section class="hero ph-hero">

        <!-- Breadcrumb — outside container, full-width white strip -->
        <nav class="page-breadcrumb" aria-label="Breadcrumb">
            <span class="pb-line"></span>
            <a href="index.php">Home</a>
            <span class="pb-sep">/</span>
            <span class="pb-current">Placements</span>
        </nav>

        <div class="container">

            <!-- 3-column layout: left content | center image | right form -->
            <div class="ph-layout py-5">

                <!-- Left — heading + partner -->
                <div class="ph-left">
                    <h1 class="ph-heading">Placements<p class="text-small mt-2">Launch your career with real-world impact.</p>
                    </h1>
                </div>

                <!-- Center — hero image -->
                <div class="ph-right">
                    <img src="assets-new/images/placement.webp" alt="Placements Image" />
                </div>

                <!-- Right — registration form card -->
                <!-- <div class="ph-right">
                    <div class="contact-form">

                        <?php //include "home-get-in-touch-form-new.php" ?>

                    </div>
                </div> -->

            </div><!-- /ph-layout -->

        </div>
    </section>

    <!-- About Section -->

    <!-- ── Section: Programs Designed for AI-Powered Leaders ── -->
    <section class="about-section">

        <div class="container">

            <!-- Heading -->
            <div class="mb-5">

                <!-- <h2 class="section-heading">
                    <span class="text-orange">About </span>the Programme
                </h2> -->

                <p>
                    At MITSDE, placements are approached as an ongoing pathway—not a one-time outcome. 
                    As a recognised institution offering AICTE-approved postgraduate programmes, 
                    we cover a wide range of domains including Marketing, Finance, HR, Operations, IT, 
                    Business Analytics, Digital Marketing, Supply Chain, and Project Management, 
                    along with new-age programmes in UI/UX, AI, Data Science, and Machine Learning.
                </p>

                <!-- <p>
                    <b>Screening & Shortlisting</b>
                </p> -->
                <p>
                    The learning experience is shaped by industry relevance and global standards, 
                    with the curriculum continuously refined in collaboration with organisations such as PMI, 
                    ASCM, HBP, KPMG, and TCS iON—ensuring it evolves alongside changing business and technology landscapes.<br>
                    Supported by strong corporate partnerships, learners gain access to curated job and internship opportunities across industries. 
                    Through a dedicated placement portal, these opportunities remain accessible during the programme and beyond—allowing you to stay connected to career possibilities even as you progress in your professional journey.
                </p>

            </div>
        </div>
    </section>

            <hr>

            <!-- =========================
     10M+ Learners Section
========================= -->
<section class="placement-learners py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-3 col-md-4 col-sm-12 mb-4 mb-lg-0">
                <h2 class="learners-heading">
                    <span>10M+</span><br>
                    Learners
                </h2>

                <p class="learners-text">
                    have advanced their careers through our placement support
                </p>
            </div>

            <!-- Right Content -->
            <div class="col-lg-9 col-md-8 col-sm-12">

                <?php
                // Replace these demo filenames after uploading the six individual learner-card images.
                $placementLearners = [
                    ['image' => 'placement-img-1.jpg', 'name' => 'Jayesh Shinde', 'role' => 'Relationship Trainee'],
                    ['image' => 'placement-img-2.jpg', 'name' => 'Kruti Paranjpe', 'role' => 'Flight Support Executive'],
                    ['image' => 'placement-img-3.jpg', 'name' => 'Jayesh Shinde', 'role' => 'Relationship Trainee'],
                    ['image' => 'placement-img-4.jpg', 'name' => 'Jayesh Shinde', 'role' => 'Relationship Trainee'],
                    ['image' => 'placement-img-5.jpg', 'name' => 'Jayesh Shinde', 'role' => 'Relationship Trainee'],
                    ['image' => 'placement-img-6.jpg', 'name' => 'Jayesh Shinde', 'role' => 'Relationship Trainee'],
                ];
                ?>

                <div class="placement-carousel" aria-label="Learner placement stories">
                    <div class="placement-carousel-track">
                        <?php for ($repeat = 0; $repeat < 2; $repeat++): ?>
                            <?php foreach ($placementLearners as $learner): ?>
                                <article class="placement-profile-card"<?php if ($repeat === 1): ?> aria-hidden="true"<?php endif; ?>>
                                    <img
                                        src="assets-new/images/<?php echo htmlspecialchars($learner['image']); ?>"
                                        alt="<?php echo htmlspecialchars($learner['name']); ?>"
                                        class="placement-profile-image"
                                    >
                                    <div class="placement-profile-copy">
                                        <h6><?php echo htmlspecialchars($learner['name']); ?></h6>
                                        <p><?php echo htmlspecialchars($learner['role']); ?></p>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        <?php endfor; ?>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

        <section class="top-recruiters" aria-labelledby="top-recruiters-title">
            <div class="container">
            <div class="top-recruiters-panel">
                <img
                    src="assets-new/images/top-recruiters-bg.jpg"
                    alt=""
                    class="top-recruiters-overlay"
                    aria-hidden="true"
                >

                <div class="top-recruiters-content">
                    <h2 id="top-recruiters-title">Top recruiters</h2>

                    <?php
                    // Replace these demo filenames after uploading the individual company-logo images.
                    $topRecruiters = [
                        ['logo' => 'deloitte-logo.png', 'name' => 'Deloitte'],
                        ['logo' => 'tcs-logo.png', 'name' => 'TCS'],
                        ['logo' => 'amazon-logo.png', 'name' => 'Amazon'],
                        ['logo' => 'accenture-logo.png', 'name' => 'Accenture'],
                        ['logo' => 'mercedes-logo.png', 'name' => 'Mercedes-Benz'],
                        ['logo' => 'wipro-logo.png', 'name' => 'Wipro'],
                        ['logo' => 'ibm-logo.png', 'name' => 'IBM'],
                        ['logo' => 'ignitarium-logo.png', 'name' => 'Ignitarium'],
                        ['logo' => 'prodesk-logo.png', 'name' => 'Prodesk'],
                        ['logo' => 'vodafone-logo.png', 'name' => 'Vodafone'],
                        ['logo' => 'kotak-logo.png', 'name' => 'Kotak Mahindra Bank'],
                        ['logo' => 'flipkart-logo.png', 'name' => 'Flipkart'],
                        ['logo' => 'star-health-logo.png', 'name' => 'STAR Health Insurance'],
                        ['logo' => 'persistent-logo.png', 'name' => 'Persistent'],
                        ['logo' => 'genpact-logo.png', 'name' => 'Genpact'],
                        ['logo' => 'jk-tyre-logo.png', 'name' => 'JK Tyre'],
                        ['logo' => 'sbi-logo.png', 'name' => 'SBI Securities'],
                        ['logo' => 'john-deere-logo.png', 'name' => 'John Deere'],
                        ['logo' => 'british-council-logo.png', 'name' => 'British Council'],
                        ['logo' => 'rupeek-logo.png', 'name' => 'Rupeek'],
                    ];
                    ?>

                    <div class="top-recruiters-grid">
                        <?php foreach ($topRecruiters as $recruiter): ?>
                            <div class="top-recruiter-logo-card">
                                <img
                                    src="assets-new/images/logos/<?php echo htmlspecialchars($recruiter['logo']); ?>"
                                    alt="<?php echo htmlspecialchars($recruiter['name']); ?>"
                                >
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            </div>

        </section>


    <!-- ═══════════════════════════════════════════════
       SITE FOOTER
    ════════════════════════════════════════════════ -->
    <?php include "footer-new.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>