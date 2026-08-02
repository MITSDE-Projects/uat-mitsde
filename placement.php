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

                    <div class="d-flex justify-content-center align-item-center mt-3">
                        <img src="assets-new/images/placement-logos.webp" class="img-fluid" alt="">
                    </div>
                    <?php
                    // $topRecruiters = [
                    //     ['logo' => 'deloitte-logo.png', 'name' => 'Deloitte'],
                    //     ['logo' => 'tcs-logo.png', 'name' => 'TCS'],
                    //     ['logo' => 'amazon-logo.png', 'name' => 'Amazon'],
                    //     ['logo' => 'accenture-logo.png', 'name' => 'Accenture'],
                    //     ['logo' => 'mercedes-logo.png', 'name' => 'Mercedes-Benz'],
                    //     ['logo' => 'wipro-logo.png', 'name' => 'Wipro'],
                    //     ['logo' => 'ibm-logo.png', 'name' => 'IBM'],
                    //     ['logo' => 'ignitarium-logo.png', 'name' => 'Ignitarium'],
                    //     ['logo' => 'prodesk-logo.png', 'name' => 'Prodesk'],
                    //     ['logo' => 'vodafone-logo.png', 'name' => 'Vodafone'],
                    //     ['logo' => 'kotak-logo.png', 'name' => 'Kotak Mahindra Bank'],
                    //     ['logo' => 'flipkart-logo.png', 'name' => 'Flipkart'],
                    //     ['logo' => 'star-health-logo.png', 'name' => 'STAR Health Insurance'],
                    //     ['logo' => 'persistent-logo.png', 'name' => 'Persistent'],
                    //     ['logo' => 'genpact-logo.png', 'name' => 'Genpact'],
                    //     ['logo' => 'jk-tyre-logo.png', 'name' => 'JK Tyre'],
                    //     ['logo' => 'sbi-logo.png', 'name' => 'SBI Securities'],
                    //     ['logo' => 'john-deere-logo.png', 'name' => 'John Deere'],
                    //     ['logo' => 'british-council-logo.png', 'name' => 'British Council'],
                    //     ['logo' => 'rupeek-logo.png', 'name' => 'Rupeek'],
                    // ];
                    ?>

                    <!-- <div class="top-recruiters-grid"> -->
                        <?php //foreach ($topRecruiters as $recruiter): ?>
                            <!-- <div class="top-recruiter-logo-card">
                                <img
                                    src="assets-new/images/logos/<?php echo htmlspecialchars($recruiter['logo']); ?>"
                                    alt="<?php //echo htmlspecialchars($recruiter['name']); ?>"
                                >
                            </div> -->
                        <?php //endforeach; ?>
                    </div>
                </div>
            </div>
            </div>

        </section>

        <!-- ═══════════════════════════════════════════════
           PLACED LEARNERS DIRECTORY
           Company cards → click opens a shared modal listing
           every placed learner at that company. Add more
           companies/learners simply by extending $placedByCompany
           below — no other markup changes needed.
        ════════════════════════════════════════════════ -->
        <section class="placed-directory-section" id="placed-directory">
            <div class="container">
                <h2 class="section-heading"><span class="text-orange">Where Our </span>Learners Are Placed</h2>
                <p class="placed-directory-sub">Browse companies our alumni work at — click any company to see who's placed there.</p>

                <?php
                $placedByCompany = [
                    'AWL Agri Business Ltd' => [
                        ['name' => 'Ajit Patkar', 'designation' => 'Intern - Live Project', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Logistics & Supply chain Management'],
                        ['name' => 'Pooja Aringle', 'designation' => 'Intern - Live Project', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Rahul Pandhare', 'designation' => 'Intern - Live Project', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                        ['name' => 'Sandhya Jagtap', 'designation' => 'Intern - Live Project', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Banking & Financial Services'],
                        ['name' => 'Tanaya Kulkarni', 'designation' => 'Intern - Live Project', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Varad Patankar', 'designation' => 'Intern - Live Project', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology'],
                    ],
                    'Adecco' => [
                        ['name' => 'Vaishali Vaibhav Edake', 'designation' => 'Technical Operator', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology Management'],
                    ],
                    'Aenexz Tech' => [
                        ['name' => 'Jalla Nikita Nagnath', 'designation' => 'Business Development Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Naik Sakshi Santosh', 'designation' => 'Business Development Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Sutar Swati Sanjay', 'designation' => 'Business Development Intern', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                    ],
                    'Agarwal Packers & Movers Ltd' => [
                        ['name' => 'Desale Harish Himmat', 'designation' => 'Intern - Marketing', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                        ['name' => 'Nikita Ramgopal Bangad', 'designation' => 'Intern - Marketing', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Digital Marketing'],
                        ['name' => 'Gorakh Shivajirao Sagar', 'designation' => 'Intern - Supply Chain Operations', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Logistics and Supply Chain Management'],
                        ['name' => 'Gupta Ajay Gulabchand', 'designation' => 'Intern - Supply Chain Operations', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Logistics and Supply Chain Management'],
                        ['name' => 'Pravin Vhatage', 'designation' => 'Intern - Supply Chain Operations', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Logistics and Supply Chain Management'],
                        ['name' => 'Samadhan Kowale', 'designation' => 'Intern - Supply Chain Operations', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Operations Management'],
                        ['name' => 'Sanket Bhagwan Patil', 'designation' => 'Key Account Manager - Commercial', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Md Aman Ansari', 'designation' => 'Key Account Manager - Commercial', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Logistics and Supply Chain Management'],
                    ],
                    'Agile Capital Services' => [
                        ['name' => 'Anurita Ghosh', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology'],
                        ['name' => 'Apurwa Jawale', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                        ['name' => 'Shreya Gholap', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Shruti Jaiswal', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Shweta Jain', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Soniya Shankar Kharat', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Adesh Datir', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                        ['name' => 'Arjun Devkar', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology'],
                        ['name' => 'Atharva Shende', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Project Management'],
                        ['name' => 'Ayush Bhardwaj', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Logistics & Supply chain Management'],
                        ['name' => 'Gaurangi Rastogi', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Gohel Bhakti Yagnesh', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Harshvardhan Mohanty', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Himanshi Abhilasha Sanjeev Bhargava', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Janhavi Vijay Dagade', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                        ['name' => 'Jayesh Nitin Khode', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Korane Hardik Mahesh', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Korane Tanvi Vishwanath', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Mahale Harshada Hemant', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Meeraj M Sutar', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                        ['name' => 'Mili Naik', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'PGDM EMBA Dual Degree', 'specialization' => 'Finance Management'],
                        ['name' => 'Parikh Shreya Shrikant', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Puja Prasad', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Ritika Anil Kukreja', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'PGDM EMBA Dual Degree', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Rupali Pawar', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Sahil Dalvi', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Banking & Financial Services'],
                        ['name' => 'Sakina Bohari', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Sakshi Waghmare', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Samarth Sanjay Khandagale', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                        ['name' => 'Shweta Baid', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Srishti Srivastava', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Swarda Kulkarni', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Mansi Hivarkar', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Ghongade Shrikant Mallikarjun', 'designation' => 'Management Trainee-Marketing-HR-Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                    ],
                    'Agumentik Group of Companies' => [
                        ['name' => 'Bhatt Kuldeep Shaileshbhai', 'designation' => 'Digital Marketing Executive', 'course' => 'Post Graduate Diploma in Management-Executive', 'specialization' => 'Business Analytics'],
                        ['name' => 'Rasika Rajendra Kumathekar', 'designation' => 'IT Sales Executive', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Sonal Magar', 'designation' => 'Talent Acquisition Executive', 'course' => 'Post Graduate Diploma in Management-Executive', 'specialization' => 'Human Capital Management'],
                        ['name' => 'Sutar Vipul Kumar', 'designation' => 'Talent Acquisition Executive', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Pranjal Birju Pal', 'designation' => 'Operations Executive', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology Management'],
                        ['name' => 'Saindane Swapnil Chandrakant', 'designation' => 'Operations Executive', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Material Management'],
                    ],
                    'Aspire Consultants' => [
                        ['name' => 'Akanksha Srivastav', 'designation' => 'Intern - Marketing, HR and Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Asha Sahu', 'designation' => 'Intern - Marketing, HR and Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Banking & Financial Services'],
                        ['name' => 'Chavanke Ragini Rajendra', 'designation' => 'Intern - Marketing, HR and Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                        ['name' => 'Gaikwad Payal Mohan', 'designation' => 'Intern - Marketing, HR and Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Ishika Umang Pandit', 'designation' => 'Intern - Marketing, HR and Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                        ['name' => 'Latane Priyanka Gajanan', 'designation' => 'Intern - Marketing, HR and Finance', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                        ['name' => 'Meshram Esha Girish', 'designation' => 'Intern - Marketing, HR and Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Operations Management'],
                        ['name' => 'Pawale Mrunali Pandurang', 'designation' => 'Intern - Marketing, HR and Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Pooja Malaghan Shrikant', 'designation' => 'Intern - Marketing, HR and Finance', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                        ['name' => 'Potdar Vaishnavi Nitin', 'designation' => 'Intern - Marketing, HR and Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Shaikh Ayesha Jakir', 'designation' => 'Intern - Marketing, HR and Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Shikhare Samrudhi Sanjay', 'designation' => 'Intern - Marketing, HR and Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Vanshika Rajesh Thorat', 'designation' => 'Intern - Marketing, HR and Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Mansi Arora', 'designation' => 'Intern - Marketing, HR and Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                    ],
                    'Basti Ki Pathshala Foundation' => [
                        ['name' => 'Viral Chopra', 'designation' => 'Intern - Fundraising', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                    ],
                    'Bigbull Research' => [
                        ['name' => 'Akshada Parekar', 'designation' => 'Human Resources (HR) Executive', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                    ],
                    'Billion Strategies' => [
                        ['name' => 'A V Vishal', 'designation' => 'Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                    ],
                    'Codeyoung' => [
                        ['name' => 'Iyer Divya Srinivasan', 'designation' => 'Associate Customer Experience - US Shift', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Dhavre Sneha Subhash', 'designation' => 'International Sales Specialist - US Shift', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                    ],
                    'CommScope' => [
                        ['name' => 'Kulkarni Padhmnabh Achyutrao', 'designation' => 'Technical Associate', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Operations Management'],
                    ],
                    'Corizo' => [
                        ['name' => 'Jadhav Priyanka Bhaurao', 'designation' => 'Inside Sales Representative', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                        ['name' => 'Uma Rajuprasad Kesharwani', 'designation' => 'Inside Sales Representative', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Banking & Financial Services'],
                    ],
                    'Creative Mediapulse Technologies Private Limited (CMPTL)' => [
                        ['name' => 'Pallavi Mahadev Deotare', 'designation' => 'Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                    ],
                    'Deccan AI' => [
                        ['name' => 'Iyer Bhawani Chandrashekharan', 'designation' => 'AI Data Consultant', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                        ['name' => 'Mudaliyar Akash Nithyananthan', 'designation' => 'AI Data Consultant', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology Management'],
                        ['name' => 'Shorbhika Raja Bhattacharya', 'designation' => 'AI Data Consultant', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                    ],
                    'Edify Equity' => [
                        ['name' => 'Viral Chopra', 'designation' => 'Finance Research Analyst', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                    ],
                    'Edu-versity' => [
                        ['name' => 'Preeti Chijwani', 'designation' => 'Business Development Specialist', 'course' => 'PGDM EMBA Dual Degree', 'specialization' => 'Banking & Financial Services'],
                        ['name' => 'Srishti Srivastava', 'designation' => 'Business Development Specialist', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                    ],
                    'Eduexpose Technologies' => [
                        ['name' => 'Anjani Raj', 'designation' => 'Business Development Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology Management'],
                        ['name' => 'Vinay Pathak', 'designation' => 'Business Development Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                    ],
                    'Ensynapse Technique' => [
                        ['name' => 'Palve Pratibha Sadashiv', 'designation' => 'Intern', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                    ],
                    'Ester Engineering and Technologies' => [
                        ['name' => 'Kate Bhushan Vijay', 'designation' => 'Proposal and Sales Engineer', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                    ],
                    'Flipkart' => [
                        ['name' => 'Amol Narayan Rathod', 'designation' => 'Associate - Warehouse and E-commerce', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Logistics & Supply chain Management'],
                        ['name' => 'Baravkar Vaibhav Ramesh', 'designation' => 'Associate - Warehouse and E-commerce', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Logistics & Supply chain Management'],
                        ['name' => 'Biswajit Bhowmick', 'designation' => 'Associate - Warehouse and E-commerce', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Material Management'],
                        ['name' => 'Manas Anil Hingane', 'designation' => 'Associate - Warehouse and E-commerce', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Project Management'],
                        ['name' => 'Rohit Krishnat Gurav', 'designation' => 'Associate - Warehouse and E-commerce', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Operations Management'],
                        ['name' => 'Sagar Gaikwad', 'designation' => 'Associate - Warehouse and E-commerce', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Construction and Project Management'],
                        ['name' => 'Sayyed Najid Ismail', 'designation' => 'Associate - Warehouse and E-commerce', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Project Management'],
                        ['name' => 'Shital Amarchand Kurkute', 'designation' => 'Associate - Warehouse and E-commerce', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Vaibhav Mishra', 'designation' => 'Associate - Warehouse and E-commerce', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Vishal Singh', 'designation' => 'Associate - Warehouse and E-commerce', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                    ],
                    'Glowlogics Solutions Pvt Ltd' => [
                        ['name' => 'Ayush Bhardwaj', 'designation' => 'Inside Sales Representative', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Logistics & Supply chain Management'],
                        ['name' => 'Digvijay Jagadale', 'designation' => 'Inside Sales Representative', 'course' => 'Post Graduate Diploma in Management-PGDM(KPMG)', 'specialization' => 'Finance Management'],
                        ['name' => 'Gangurde Prachi Sandeep', 'designation' => 'Inside Sales Representative', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Operations Management'],
                        ['name' => 'Mishra Shriya Durgesh', 'designation' => 'Inside Sales Representative', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Prem Lahukumar Bundhe', 'designation' => 'Inside Sales Representative', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology'],
                    ],
                    'Hamari Pahchan' => [
                        ['name' => 'Patil Prasad Niwas', 'designation' => 'Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Project Management'],
                    ],
                    'Hamari Pahchan NGO' => [
                        ['name' => 'Pratibha Palve', 'designation' => 'Intern', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                        ['name' => 'Sakshi Sandip Hagavane', 'designation' => 'Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Rubal Samuel Massey', 'designation' => 'Intern', 'course' => 'Executive MBA', 'specialization' => 'Operations Management'],
                    ],
                    'Heleum' => [
                        ['name' => 'Akanksha Shivaji Arekar', 'designation' => 'HR Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Construction and Project Management'],
                        ['name' => 'Dhanashri Sunil Shinde', 'designation' => 'HR Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Mitali Purohit', 'designation' => 'HR Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Pinki Kumari', 'designation' => 'HR Intern', 'course' => 'Post Graduate Diploma in Business Administration', 'specialization' => 'Finance Management'],
                        ['name' => 'Pooja Ithape', 'designation' => 'HR Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Priya Phadatare', 'designation' => 'HR Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Rajashree Mukherjee', 'designation' => 'HR Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Saumya Rai', 'designation' => 'HR Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Saxena Chinki', 'designation' => 'HR Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology'],
                        ['name' => 'Sherin Bhui', 'designation' => 'HR Intern', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                    ],
                    'Heleum Education' => [
                        ['name' => 'Arjun Bhimu Devkar', 'designation' => 'HR Recruiter Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology'],
                        ['name' => 'Disha Jain', 'designation' => 'HR Recruiter Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Banking & Financial Services'],
                        ['name' => 'Madhura Kulkarni', 'designation' => 'HR Recruiter Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Mokshitha Jain', 'designation' => 'HR Recruiter Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Piyush Jain', 'designation' => 'HR Recruiter Intern', 'course' => 'CAP', 'specialization' => 'Lean Six Sigma'],
                    ],
                    'InAmigos Foundation' => [
                        ['name' => 'Jashan Deep Kaur Dhaliwal', 'designation' => 'Intern', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Digital Marketing'],
                        ['name' => 'Saudatti Pooja Prashant', 'designation' => 'Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Logistics and Supply Chain Management'],
                        ['name' => 'Rubal Samuel Massey', 'designation' => 'Intern', 'course' => 'Executive MBA', 'specialization' => 'Operations Management'],
                        ['name' => 'Kolhe Komal Ujwal', 'designation' => 'Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                        ['name' => 'Viral Chopra', 'designation' => 'Intern', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                        ['name' => 'Priya Dongre', 'designation' => 'Intern', 'course' => 'Post Graduate Diploma in Management(Executive)', 'specialization' => 'Banking and Financial Services'],
                        ['name' => 'Amruta Gulabrao Gawande', 'designation' => 'Intern', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                    ],
                    'Insplore Consultants Pvt. Ltd.' => [
                        ['name' => 'Aishwarya Raju Potdar', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Bhakti Dudgikar', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology'],
                        ['name' => 'Snehal Jain', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Anisha Kejriwal', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Banking & Financial Services'],
                        ['name' => 'Mahika Arora', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                        ['name' => 'Pooja Ranbagul', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Pranav Rathod', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Rutuja Sahebrao Jawake', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'CAP', 'specialization' => 'Lean Six Sigma'],
                        ['name' => 'Sadhvi Raghuvanshi', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Banking & Financial Services'],
                        ['name' => 'Komal Singh', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Aditi Verma', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                        ['name' => 'Yash Jadhav', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology'],
                        ['name' => 'Anjali Kamble', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Banking and Financial Services'],
                        ['name' => 'Atharva Pankaj Avhad', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                        ['name' => 'Mukesh Yadav', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Nandini Thakare (Dhote)', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Priyanka Vinayak Kokil', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Priyanshi Shah', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Rishibha Jain', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'PGDM EMBA Dual Degree', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Saloni Kumari', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Project Management'],
                        ['name' => 'Samruddhi Mali', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology Management'],
                        ['name' => 'Sanket Sanjay Gurav', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Operations Management'],
                        ['name' => 'Santosh Buddappanavar', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Logistics and Supply Chain Management'],
                        ['name' => 'Shruti Berde', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Shruti Prashant Bora', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology Management'],
                        ['name' => 'Shweta Gogiya', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Stephen Samuel', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Sujata Mahadev Mane Shete', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Tanusha Sanjay Mahale', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Twinkle Chikani', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology Management'],
                        ['name' => 'Twinkle Gupta', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Varun Mishra', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Yashu Kumari', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Bhavi Om Vijay Kumar', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Darpan Rajesh Chandaliya', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Kirdat Abhiraj Machindra', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                        ['name' => 'Ambhore Rohit Vijay', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Amey Dilip Punde', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Avinash Stephen', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management(Executive)', 'specialization' => 'Modern Project Management'],
                        ['name' => 'Champaneri Henee Hareshkumar', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Gayatri Kadam', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Gohel Krish Vipulbhai', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management-PGDM(KPMG)', 'specialization' => 'Marketing Management'],
                        ['name' => 'Khushi Gopal Pareek', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Krutuja Appasaheb Pawar', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                        ['name' => 'Kulkarni Shivani Shailendra', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Malegaon Ashish', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Construction and Project Management'],
                        ['name' => 'Sanika Popatrao Jedage', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Shah Mahi Nitinbhai', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management-PGDM(KPMG)', 'specialization' => 'Marketing Management'],
                        ['name' => 'Ubale Shraddha Shashikant', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Yukta Sharma', 'designation' => 'Intern - HR/Marketing/Finance', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                    ],
                    'Internzvalley' => [
                        ['name' => 'Anjali Nagdawane', 'designation' => 'Business Development Associate', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Digvijay Jagadale', 'designation' => 'Business Development Associate', 'course' => 'Post Graduate Diploma in Management-PGDM(KPMG)', 'specialization' => 'Finance Management'],
                        ['name' => 'Gaurangi Rastogi', 'designation' => 'Business Development Associate', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Prachi Gangurde', 'designation' => 'Business Development Associate', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Operations Management'],
                        ['name' => 'Sayani Chakraborty', 'designation' => 'Business Development Associate', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                        ['name' => 'Debjit Banerjee', 'designation' => 'Business Development Associate', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                    ],
                    'Jodo' => [
                        ['name' => 'Nikita Ramgopal Bangad', 'designation' => 'Customer Success Intern', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Digital Marketing'],
                    ],
                    'Marut Air Systems Pvt. Ltd' => [
                        ['name' => 'Piyush Gupta', 'designation' => 'Sales Coordinator', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Logistics & Supply chain Management'],
                    ],
                    'Mobicloud Technologies' => [
                        ['name' => 'Siddhesh Vilas Sangle', 'designation' => 'IT Sales Executive', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology'],
                    ],
                    'Muskurahat Foundation' => [
                        ['name' => 'Pratibha Palve', 'designation' => 'Intern', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                    ],
                    'NayePankh Foundation' => [
                        ['name' => 'Suthar Manju Babulal', 'designation' => 'Intern', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                        ['name' => 'Deep Kumar', 'designation' => 'Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Logistics and Supply Chain Management'],
                    ],
                    'PRAN FINSERV Private Limited' => [
                        ['name' => 'Sable Om Suresh Sable', 'designation' => 'Field Executive', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Logistics and Supply Chain Management'],
                    ],
                    'Paytm - One97 Communications' => [
                        ['name' => 'Samadhan Kowale', 'designation' => 'EDC Sales Asociate', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Operations Management'],
                        ['name' => 'Desale Harish Himmat', 'designation' => 'EDC Sales Asociate', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                    ],
                    'Qapita' => [
                        ['name' => 'Atharva Baliram Dhage', 'designation' => 'Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                    ],
                    'Queens of change Foundation' => [
                        ['name' => 'Prajakta Santosh Jadhav', 'designation' => 'Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Project Management'],
                    ],
                    "RAAM'S Infra and Project Developers Private Limited" => [
                        ['name' => 'Sakshi Anil Patil', 'designation' => 'Executive', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Construction and Project Management'],
                    ],
                    'Rocksport' => [
                        ['name' => 'Sankalp Nagarkar', 'designation' => 'Assistant Territory Manager', 'course' => 'PGDM EMBA Dual Degree', 'specialization' => 'Operations Management'],
                    ],
                    'Safexpress' => [
                        ['name' => 'Shivang Sharma', 'designation' => 'Business Development Manager', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                    ],
                    'Sanyukt Organisation' => [
                        ['name' => 'Badal Kumar', 'designation' => 'Intern', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Digital Marketing'],
                        ['name' => 'Shine Sharma', 'designation' => 'Intern', 'course' => 'Post Graduate Diploma in Management(Executive)', 'specialization' => 'Human Capital Management'],
                        ['name' => 'Rustam', 'designation' => 'Intern', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                    ],
                    'She Can Foundation' => [
                        ['name' => 'Bhatt Kuldeep Shaileshbhai', 'designation' => 'Intern', 'course' => 'Post Graduate Diploma in Management-Executive', 'specialization' => 'Business Analytics'],
                        ['name' => 'Khan Aksan Zuber', 'designation' => 'Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Logistics and Supply Chain Management'],
                    ],
                    'Stellar Innovations' => [
                        ['name' => 'Anup Vaidya', 'designation' => 'Analyst', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Operations Management'],
                        ['name' => 'Shubhangi Davalbaje', 'designation' => 'Analyst', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology'],
                        ['name' => 'Tanushree Saraswat', 'designation' => 'Analyst', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Construction and Project Management'],
                        ['name' => 'Vivek J Menon', 'designation' => 'Analyst', 'course' => 'Post Graduate Diploma in Management (Executive)', 'specialization' => 'Technology and Operations Management'],
                    ],
                    'Tech Mahindra Limited' => [
                        ['name' => 'Kruti Paranjpe', 'designation' => 'Sales Associate', 'course' => 'Post Graduate Diploma In Business Administration', 'specialization' => 'Marketing Management'],
                    ],
                    'Teleperformance' => [
                        ['name' => 'Ashwinikumar Baviskar', 'designation' => 'Customer Care Executive - E-Commerce Support', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology'],
                        ['name' => 'Chavan Aanandita Mahendra', 'designation' => 'Customer Care Executive', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Umang Matta', 'designation' => 'Customer Care Executive', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                    ],
                    'The Leading Solutions' => [
                        ['name' => 'Rohitha Chinnala', 'designation' => 'HR Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Vedika Sharma', 'designation' => 'HR Intern', 'course' => 'Post Graduate Diploma In Business Administration', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Payal Bhansali', 'designation' => 'Finance Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Ashish Kumar Singh', 'designation' => 'Management Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Project Management'],
                        ['name' => 'Chintamani Sarvesh Dnyaneshwar', 'designation' => 'Management Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                        ['name' => 'Deshmukh Pratiksha Sunil', 'designation' => 'Management Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Gurav Saurabh Dipak', 'designation' => 'Management Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Logistics and Supply Chain Management'],
                        ['name' => 'Krutika Rajesh Waghmode', 'designation' => 'Management Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Landge Pranjali Omkar', 'designation' => 'Management Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Mhatre Rupali Shailesh', 'designation' => 'Management Intern', 'course' => 'Post Graduate Diploma in Management-PGDM(KPMG)', 'specialization' => 'Project Management'],
                        ['name' => 'Naik Sakshi Santosh', 'designation' => 'Management Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Parimal Pravin Joshi', 'designation' => 'Management Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                        ['name' => 'Patil Dhananjay Pandurang', 'designation' => 'Management Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Banking and Financial Services'],
                        ['name' => 'S Aishu', 'designation' => 'Management Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                        ['name' => 'Sakshi Shital Borgave', 'designation' => 'Management Intern', 'course' => 'Post Graduate Diploma in Management-PGDM(KPMG)', 'specialization' => 'Finance Management'],
                        ['name' => 'Samiksha Surendra Bhujade', 'designation' => 'Management Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Sonam Hare', 'designation' => 'Management Intern', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                        ['name' => 'Upendra Gurudas Zade', 'designation' => 'Management Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Logistics and Supply Chain Management'],
                    ],
                    'Unessa Foundation' => [
                        ['name' => 'Suthar Manju Babulal', 'designation' => 'Intern', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                        ['name' => 'Kolhe Komal Ujwal', 'designation' => 'Intern', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                    ],
                    'Unlox' => [
                        ['name' => 'Amodh Choudhari', 'designation' => 'Business Development Associate', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology'],
                        ['name' => 'Muhammad Mangoli', 'designation' => 'Business Development Associate', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Construction and Project Management'],
                        ['name' => 'Amol Anil Hirey', 'designation' => 'Business Development Associate (Internship)', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                        ['name' => 'Sonal Dnyaneshwar Agale', 'designation' => 'Business Development Associate (Internship)', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology Management'],
                        ['name' => 'Naik Sakshi Santosh', 'designation' => 'Business Development Associate', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Finance Management'],
                    ],
                    'Urban Company' => [
                        ['name' => 'Gorivale Avantika Sunil', 'designation' => 'Intern - GTM Marketing', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Human Resource Management'],
                        ['name' => 'Jayesh Vijay Shinde', 'designation' => 'Intern - GTM Marketing', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Operations Management'],
                        ['name' => 'Pooja Malaghan', 'designation' => 'Intern - GTM Marketing', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                        ['name' => 'Samarth Sanjay Khandagale', 'designation' => 'Intern - GTM Marketing', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Marketing Management'],
                        ['name' => 'Prerna', 'designation' => 'Intern - GTM Marketing', 'course' => 'Post Graduate Diploma in Management(Executive)', 'specialization' => 'Finance Management'],
                        ['name' => 'Sanket Sanjay Gurav', 'designation' => 'Intern - GTM Marketing', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Operations Management'],
                    ],
                    'Xziant Communication Pvt. Ltd.' => [
                        ['name' => 'Kadbane Suraj Sanjay', 'designation' => 'Business Development Executive (US Process)', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Project Management'],
                        ['name' => 'Suslade Gauri Ravi', 'designation' => 'Business Development Executive (US Process)', 'course' => 'Post Graduate Certificate in Management', 'specialization' => 'Business Analytics'],
                        ['name' => 'Vaishali Vaibhav Edake', 'designation' => 'Business Development Intern (US Process)', 'course' => 'Post Graduate Diploma in Management', 'specialization' => 'Information Technology Management'],
                    ],
                ];
                ?>

                <div class="placed-company-grid">
                    <?php foreach ($placedByCompany as $companyName => $learners): ?>
                        <button type="button" class="placed-company-card" data-bs-toggle="modal" data-bs-target="#placedCompanyModal" data-company="<?php echo htmlspecialchars($companyName); ?>">
                            <span class="placed-company-name"><?php echo htmlspecialchars($companyName); ?></span>
                            <span class="placed-company-badge"><?php echo count($learners); ?> Placed</span>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Shared modal — populated by JS from placedByCompany on card click -->
        <div class="modal fade" id="placedCompanyModal" tabindex="-1" aria-labelledby="placedCompanyModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content placed-modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="placedCompanyModalLabel">Company</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="tbl-wrap">
                            <table class="tbl">
                                <thead>
                                    <tr>
                                        <th class="tbl-label">Name</th>
                                        <th>Designation</th>
                                        <th>Course</th>
                                        <th>Specialization</th>
                                    </tr>
                                </thead>
                                <tbody id="placedCompanyModalRows"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var placedByCompany = <?php echo json_encode($placedByCompany, JSON_HEX_TAG | JSON_HEX_APOS); ?>;
            (function () {
                var modalEl = document.getElementById('placedCompanyModal');
                if (!modalEl) return;
                modalEl.addEventListener('show.bs.modal', function (e) {
                    var card = e.relatedTarget;
                    var company = card.dataset.company;
                    var learners = placedByCompany[company] || [];
                    document.getElementById('placedCompanyModalLabel').textContent = company;
                    document.getElementById('placedCompanyModalRows').innerHTML = learners.map(function (l) {
                        return '<tr><td class="tbl-label">' + l.name + '</td><td>' + l.designation + '</td><td>' + l.course + '</td><td>' + l.specialization + '</td></tr>';
                    }).join('');
                });
            })();
        </script>

    <!-- ═══════════════════════════════════════════════
       SITE FOOTER
    ════════════════════════════════════════════════ -->
    <?php include "footer-new.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>