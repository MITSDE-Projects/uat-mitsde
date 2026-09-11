<?php $pagename = "Global Exposure — MITSDE International Relations"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow" />
    <title>Global Exposure — MITSDE International Relations &amp; ISIP Programs</title>
    <meta name="description" content="MITSDE's Global Exposure initiative connects distance learners to international internship and immersion programs across 15+ countries through the ISIP program." />
    <link rel="canonical" href="https://mitsde.com/global-exposure" />
    <meta property="og:title" content="Global Exposure — MITSDE International Relations">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/global-exposure">
    <meta property="og:description" content="MITSDE's Global Exposure initiative connects distance learners to international internship and immersion programs across 15+ countries through the ISIP program.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://mitsde.com/assets-new/images/achievers.webp">

    <link rel="icon" type="image/png" href="assets-new/images/favicon-mit.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css-new/styles.css" />
    <link rel="stylesheet" href="css-new/intlTelInput.css">

    <style>
        /* ── Global Exposure page — scoped under .ge-page ── */

        /* Color tokens for this page */
        .ge-page {
            --ge-primary:    #ea580c;
            --ge-primary-lt: #fed7aa;
            --ge-primary-dim:#c2410c;
            --ge-primary-bg: #fdf8f5;
            --ge-dark:       #111827;
            --ge-dark-mid:   #1f2937;
            --ge-dark-lt:    #374151;
            --ge-text:       #111827;
            --ge-text-sec:   #6b7280;
            --ge-muted:      #9ca3af;
            --ge-border:     #e5e7eb;
            --ge-bg:         #f3f4f6;
            --ge-bg-lt:      #fdf8f5;
            --ge-white:      #ffffff;
            --ge-green:      #2D6B4A;
            --ge-green-lt:   #E8F2EC;
            --ge-amber:      #B8730A;
            --ge-amber-lt:   #FDF3E3;
            --ge-blue:       #1A4FA0;
            --ge-blue-lt:    #E8F0FC;
            --r-md: 10px;
            --r-sm:  6px;
            --r-pill:20px;
        }

        .ge-page { color: var(--ge-text); }

        /* ── HERO STATS (page-specific, not in styles.css) ── */
        .ge-cta-grid { display: grid; grid-template-columns: repeat(3, 1fr); margin-top: 24px; margin-bottom: 28px; }
        .ge-stat-col { padding: 0 20px 16px; border-left: 1px solid #ced0d4; text-align: center; }
        .ge-stat-col:first-child { padding-left: 0; border-left: none; }
        .ge-btn-col { padding: 0 20px; margin-top: 15px; text-align: center; }
        .ge-btn-col:nth-child(4) { padding-left: 0; }
        .ge-stat-val { font-size: 40px; font-weight: 500; color: black; line-height: 1; }
        .ge-stat-lbl { font-size: 11px; color: #6b7280; letter-spacing: 0.08em; text-transform: uppercase; margin-top: 4px; }
        @media (max-width: 576px) {
            .ge-stat-col { padding: 0 8px 12px; }
            .ge-btn-col { padding: 0 8px; }
            .ge-stat-val { font-size: 26px; }
        }

        .btn-g-orange { display: inline-block; background: var(--accent-orange); color: var(--white); border-radius: 20px; padding: 0.4rem 1rem; font-size: 0.8rem; font-weight: 400; text-decoration: none; width: fit-content; margin-top: auto; transition: background .2s, transform .15s; }
        .btn-g-orange:hover { background: #e05a00; color: var(--white); transform: translateY(-2px); }

        /* ── SECTION COMMONS ── */
        .ge-section { padding: 64px 0; }
        .ge-section-light { background: var(--ge-bg-lt); }

        .ge-section-eyebrow { font-size: 11px; color: #6b7280; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 12px; }

        .ge-about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        @media (max-width: 768px) { .ge-about-grid { grid-template-columns: 1fr; } }

        /* ── MAP ── */
        .ge-map-section { padding-bottom: 48px; }
        .ge-world-map-img { width: 100%; display: block; }
        .ge-map-legend { display: flex; gap: 12px; justify-content: center; margin-top: 24px; flex-wrap: wrap; }
        .ge-legend-item { display: flex; align-items: center; gap: 8px; font-size: 12px; color: #374151; font-weight: 600; background: #ffede5; padding: 6px 16px 6px 10px; border-radius: 999px; }
        .ge-legend-dot { width: 9px; height: 9px; border-radius: 50%; flex-shrink: 0; }
        .ge-legend-dot-india { background: var(--ge-primary); }
        .ge-legend-dot-isip  { background: #9a3412; }
        .ge-flag-row { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin-top: 20px; }
        .ge-flag-row img { height: 58px; width: auto; object-fit: cover; border: 1px solid #000000; transition: transform .2s; }
        .ge-flag-row img:hover { transform: translateY(-3px) scale(1.06); }
        @media (max-width: 576px) { .ge-flag-row img { height: 42px; } .ge-flag-row { gap: 8px; } }

        /* ── ISIP TABLE ── */
        .ge-tab-row { display: flex; gap: 4px; margin-bottom: 20px; }
        .ge-tab-btn {
            padding: 8px 20px; border-radius: var(--r-sm); border: 1px solid var(--ge-border);
            background: #fff; font-size: 13px; font-weight: 500; color: var(--ge-text-sec);
            cursor: pointer; transition: all .15s;
        }
        .ge-tab-btn.active { background: #9a3412; color: #fff; border-color: #9a3412; }
        .ge-tab-btn:hover:not(.active) { border-color: #9a3412; color: #9a3412; }

        .ge-filter-row { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 24px; }
        .ge-filter-btn {
            padding: 4px 16px; border-radius: var(--r-pill); border: 1px solid var(--ge-border);
            background: #fff; font-size: 11px; font-weight: 600; color: var(--ge-text-sec);
            cursor: pointer; letter-spacing: 0.04em; transition: all .15s;
        }
        .ge-filter-btn.active { background: var(--ge-primary); color: #fff; border-color: var(--ge-primary); }

        .ge-isip-table { width: 100%; border-collapse: collapse; }
        .ge-isip-table thead tr { background: #9a3412; border-radius: var(--r-sm); }
        .ge-isip-table thead th { padding: 12px 16px; text-align: left; font-size: 11.5px; font-weight: 600; color: #fff3e0; letter-spacing: 0.04em; }
        .ge-isip-table thead th:first-child { border-radius: var(--r-sm) 0 0 var(--r-sm); }
        .ge-isip-table thead th:last-child  { border-radius: 0 var(--r-sm) var(--r-sm) 0; }
        .ge-isip-table tbody tr { border-bottom: 1px solid var(--ge-border); transition: background .1s; }
        .ge-isip-table tbody tr:hover { background: var(--ge-primary-bg); }
        .ge-isip-table tbody td { padding: 14px 16px; font-size: 13.5px; color: var(--ge-text); vertical-align: middle; }
        .ge-isip-table tbody tr:last-child { border-bottom: none; }
        .ge-prog-name { font-weight: 600; }
        .ge-prog-country { color: var(--ge-text-sec); font-size: 13px; }
        .ge-badge { display: inline-block; padding: 3px 12px; border-radius: var(--r-pill); font-size: 11px; font-weight: 600; white-space: nowrap; }
        .ge-badge-green  { background: var(--ge-green-lt);  color: var(--ge-green); }
        .ge-badge-amber  { background: var(--ge-amber-lt);  color: var(--ge-amber); }
        .ge-badge-blue   { background: #fde8d0;  color: #9a3412; }
        .ge-badge-muted  { background: #f3f4f6; color: var(--ge-muted); }
        .ge-table-note { margin-top: 12px; font-size: 12px; color: var(--ge-muted); }

        /* ── SESSION PILLS (used in Faculty Sessions fs-info-card) ── */
        .ge-session-pills { display: flex; align-items: center; gap: 8px; margin-bottom: 14px; }
        .ge-session-pill { font-size: 10px; font-weight: 700; letter-spacing: 0.06em; text-transform: uppercase; padding: 3px 10px; border-radius: var(--r-pill); }
        .ge-session-pill.upcoming { background: var(--ge-green-lt); color: var(--ge-green); }
        .ge-session-date { font-size: 11px; color: var(--ge-muted); }
        .ge-session-tags { display: flex; flex-wrap: wrap; gap: 5px; margin-bottom: 16px; }
        .ge-session-tag { font-size: 10px; font-weight: 600; padding: 3px 10px; border-radius: var(--r-pill); background: #fde8d0; color: #9a3412; }

        /* ── STUDENT STORIES ── */
        .ge-stories-swiper { padding-bottom: 40px; }
        .ge-stories-swiper .swiper-pagination-bullet-active { background: var(--ge-primary); }
        .ge-stories-swiper .swiper-button-next,
        .ge-stories-swiper .swiper-button-prev { color: var(--ge-primary); }
        .ge-story-card {
            background: #fff; border: 1px solid var(--ge-border);
            border-radius: var(--r-md); padding: 22px 20px;
            position: relative; overflow: hidden;
            transition: transform .2s, box-shadow .2s;
        }
        /* .ge-story-card::before { content:''; position:absolute;top:0;left:0;right:0;height:3px;background:var(--ge-primary); } */
        .ge-story-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(0,0,0,.08); }
        .ge-story-avatar {
            width: 40px; height: 40px; border-radius: 50%;
            background: #fde8d0; border: 1px solid #f4c0a0;
            display: flex; align-items: center; justify-content: center;
            font-size: 13px; font-weight: 700; color: #9a3412;
            margin-bottom: 10px;
        }
        .ge-story-name { font-size: 14px; font-weight: 600; color: var(--ge-text); margin-bottom: 2px; }
        .ge-story-prog { font-size: 11.5px; color: var(--ge-text-sec); margin-bottom: 10px; }
        .ge-story-dest { font-size: 11.5px; font-weight: 600; color: var(--ge-primary); margin-bottom: 12px; }
        .ge-story-divider { height: 1px; background: var(--ge-border); margin-bottom: 12px; }
        .ge-story-quote { font-size: 13px; color: var(--ge-text); line-height: 1.55; }

        /* ── HOW TO APPLY ── */
        .ge-apply-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: start; padding: 20px; margin: 0 auto; }
        .ge-steps-list { display: flex; flex-direction: column; gap: 0; }
        .ge-step-item { display: flex; gap: 20px; position: relative; }
        .ge-step-item:not(:last-child) .ge-step-line { position:absolute; left:17px; top:36px; bottom:-24px; width:1px; background:var(--ge-border); }
        .ge-step-num {
            width: 34px; height: 34px; border-radius: 50%; flex-shrink: 0;
            background: var(--ge-primary); display: flex; align-items: center; justify-content: center;
            font-size: 11px; font-weight: 700; color: #fff; font-family: monospace; z-index:1;
        }
        .ge-step-content { padding-bottom: 32px; }
        .ge-step-title { font-size: 15px; font-weight: 600; color: var(--ge-text); margin-bottom: 4px; }
        .ge-step-desc { font-size: 13px; color: var(--ge-text-sec); line-height: 1.55; }
        .ge-apply-right {
            background: #fff; border: 1px solid var(--ge-border);
            border-radius: var(--r-md); padding: 28px; overflow: hidden; position: relative;
        }
        /* .ge-apply-right::before { content:''; position:absolute;top:0;left:0;right:0;height:3px;background:var(--ge-primary); } */
        .ge-apply-section-title { font-size: 14px; font-weight: 700; color: var(--ge-text); margin-bottom: 16px; }
        .ge-apply-divider { height:1px; background:var(--ge-border); margin: 20px 0; }
        .ge-elig-list { list-style: none; display: flex; flex-direction: column; gap: 10px; }
        .ge-elig-list li { display: flex; gap: 10px; align-items: flex-start; font-size: 13px; color: var(--ge-text); }
        .ge-elig-dot { width: 6px; height: 6px; border-radius: 50%; background: var(--ge-primary); flex-shrink: 0; margin-top: 5px; }
        .ge-contact-row { display: flex; align-items: center; gap: 10px; font-size: 13px; color: var(--ge-text); }
        .ge-apply-cta-row { display: flex; gap: 10px; margin-top: 20px; }
        .ge-apply-cta {
            padding: 10px 22px; border-radius: var(--r-sm);
            font-size: 13px; font-weight: 700; text-decoration: none;
            background: var(--ge-primary); color: #fff; transition: background .15s;
        }
        .ge-apply-cta:hover { background: #c2410c; color: #fff; }

        /* ── BENEFIT / OBJECTIVE CARDS ── */
        .ge-benefit-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
        .ge-benefit-card {
            background: #fff; border: 1px solid var(--ge-border); border-radius: var(--r-md);
            padding: 20px; position: relative; overflow: hidden;
        }
        /* .ge-benefit-card::before { content:''; position:absolute; top:0; left:0; right:0; height:3px; background:var(--ge-primary); } */
        .ge-benefit-icon { font-size: 22px; margin-bottom: 10px; }
        .ge-benefit-title { font-size: 13.5px; font-weight: 700; color: var(--ge-text); margin-bottom: 6px; }
        .ge-benefit-desc { font-size: 12.5px; color: var(--ge-text-sec); line-height: 1.55; }

        /* ── RESPONSIVE ── */
        @media (max-width: 991px) {
            .ge-apply-grid { grid-template-columns: 1fr; gap: 36px; }
            .ge-benefit-grid { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 768px) {
            .ge-benefit-grid { grid-template-columns: 1fr; }
        }
        @media (max-width: 480px) {
            .ge-stat-val { font-size: 28px; }
            .btn-g-orange { padding: 0.5rem 0.4rem; font-size: 0.5rem; }
        }
    </style>

    <?php include "5-common-seo-tag-1.php" ?>
</head>

<body>
    <?php include "5-common-seo-tag-2.php" ?>
    <?php include "header-new.php" ?>

    <div class="ge-page">

        <!-- ── HERO ── -->
        <section class="hero ph-hero">
            <nav class="page-breadcrumb" aria-label="Breadcrumb">
                <span class="pb-line"></span>
                <a href="./">Home</a>
                <span class="pb-sep">/</span>
                <span class="pb-current">Global Exposure</span>
            </nav>
            <div class="container">
                <div class="ph-layout mt-5">
                    <div class="ph-left">
                        <p>MITSDE &middot; Office of Global Exposure</p>
                        <h1 class="ph-heading">Your Degree,<br>Globally Connected.</h1>
                        <p class="text-center text-lg-start" style="max-width: 400px;">Internships and immersion programs across 15+ countries — built into your MITSDE journey as a distance learner.</p>
                        <div class="ge-cta-grid">
                            <div class="ge-stat-col">
                                <div class="ge-stat-val">15+</div>
                                <div class="ge-stat-lbl">Countries</div>
                            </div>
                            <div class="ge-stat-col">
                                <div class="ge-stat-val">40+</div>
                                <div class="ge-stat-lbl">Programs</div>
                            </div>
                            <div class="ge-stat-col">
                                <div class="ge-stat-val">200+</div>
                                <div class="ge-stat-lbl">Students Placed</div>
                            </div>
                            <div class="ge-btn-col">
                                <a href="#isip" class="btn btn-g-orange rounded-pill w-100">Explore ISIP Programs</a>
                            </div>
                            <div class="ge-btn-col">
                                <a href="#apply" class="btn btn-g-orange rounded-pill w-100">How to join</a>
                            </div>
                            <div class="ge-btn-col">
                                <a href="#about-isip" class="btn btn-g-orange rounded-pill w-100">About ISIP</a>
                            </div>
                        </div>
                    </div>
                    <div class="ph-right">
                        <img src="assets-new/images/banner/global-exposure.webp" class="w-auto" alt="MITSDE Global Exposure — International Programs" />
                    </div>
                </div>
            </div>
        </section>

        <!-- ── ABOUT ISIP ── -->
        <section class="about-section" id="about-isip">
            <div class="container">
                <div class="mb-4">
                    <p class="ge-section-eyebrow">Know the Program</p>
                    <h2 class="section-heading"><span class="text-orange">About </span>ISIP</h2>
                    <p><b>International Summer Internship &amp; Immersion Program</b></p>
                    <p>The International Summer Internship Program (ISIP) is MITSDE's flagship initiative designed to give distance learners real-world global exposure. MITSDE has established strategic collaborations with renowned international institutions, enabling students to participate in internships, immersion programs, seminars, and workshops at universities in Japan, Denmark, UK, Europe, South-East Asia, and beyond.</p>
                    <p>More than just a study tour, ISIP nurtures cross-cultural competence, strategic thinking, and a global mindset — qualities essential for professionals in today's interconnected world. Through corporate visits, academic sessions, live projects, and guided cultural experiences, participants gain practical insights into multinational business operations and international trade ecosystems.</p>
                </div>
                <div class="pgcs-bg-wrap mt-4">
                    <div class="ge-about-grid">
                        <div class="pgcs-card">
                            <div class="pgcs-top">
                                <div class="pgcs-left">
                                    <span class="pgcs-tag"><span class="pgcs-tag-inner">Areas of Collaboration (IRO)</span></span>
                                    <ul class="pgcs-course-list">
                                        <li>Summer internship programs for MITSDE learners (ISIP)</li>
                                        <li>Faculty exchange for teaching and research</li>
                                        <li>Semester abroad for PG level (ISLIP)</li>
                                        <li>Hosting summer / winter school for foreign university students</li>
                                        <li>Student exchange at postgraduate / graduate level</li>
                                        <li>Cooperative research and development activities</li>
                                        <li>Joint research and funding proposals (EU Commission, Fulbright, GREAT)</li>
                                        <li>Online project supervision leading to research papers or patents</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pgcs-card">
                            <div class="pgcs-top">
                                <div class="pgcs-left">
                                    <span class="pgcs-tag"><span class="pgcs-tag-inner">Proposed Internship Tracks</span></span>
                                    <ul class="pgcs-course-list">
                                        <li><strong>AI &amp; Business Intelligence</strong> — with tech startups in India and USA</li>
                                        <li><strong>Sustainable Business Practices</strong> — corporate ESG programs</li>
                                        <li><strong>International Trade &amp; Finance</strong> — joint initiative with global financial institutions</li>
                                        <li><strong>Leadership &amp; Organisational Behaviour</strong> — university collaboration</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── TWO PILLARS ── -->
        <section class="eligibility-section">
            <div class="container">
                <p class="ge-section-eyebrow">What We Offer</p>
                <h2 class="section-heading">Two Pillars of <span class="text-orange">Global Engagement</span></h2>
                <p class="mb-4"><b>Structured international experiences that complement your distance learning program</b></p>
                <div class="eligibility-grid">
                    <div class="eligibility-card">
                        <span class="eligibility-tag">International Internships (ISIP)</span>
                        <p class="mt-3">Japan &middot; Denmark &middot; UK &middot; Indonesia &middot; Vietnam &middot; Singapore &middot; Germany &middot; France and more. Fully funded and self-funded tracks available, curated for management learners.</p>
                    </div>
                    <div class="eligibility-card">
                        <span class="eligibility-tag" style="background: #FFF5DE;">International Faculty Sessions</span>
                        <p class="mt-3">Live sessions by faculty from globally ranked universities delivered directly to MITSDE learners. Watch past recordings or register for upcoming sessions.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── WORLD REACH MAP ── -->
        <section class="ge-map-section pt-0">
            <img src="assets-new/images/world-map.webp" class="ge-world-map-img" alt="ISIP countries — world map showing MITSDE global reach" />
            <div class="container">
                <div class="ge-map-legend">
                    <div class="ge-legend-item"><div class="ge-legend-dot ge-legend-dot-india"></div> India (MITSDE)</div>
                    <div class="ge-legend-item"><div class="ge-legend-dot ge-legend-dot-isip"></div> ISIP countries</div>
                </div>
                <div class="ge-flag-row">
                    <img src="assets-new/images/flags/1.webp" alt="UK" />
                    <img src="assets-new/images/flags/2.webp" alt="France" />
                    <img src="assets-new/images/flags/3.webp" alt="Denmark" />
                    <img src="assets-new/images/flags/4.webp" alt="Germany" />
                    <img src="assets-new/images/flags/5.webp" alt="Switzerland" />
                    <img src="assets-new/images/flags/6.webp" alt="Thailand" />
                    <img src="assets-new/images/flags/7.webp" alt="Singapore" />
                    <img src="assets-new/images/flags/8.webp" alt="Vietnam" />
                    <img src="assets-new/images/flags/9.webp" alt="Japan" />
                    <img src="assets-new/images/flags/10.webp" alt="Indonesia" />
                </div>
            </div>
        </section>

        <!-- ── ISIP EXPLORER ── -->
        <section class="ge-section" id="isip">
            <div class="container">
                <p class="ge-section-eyebrow">International Summer Internship Programs</p>
                <h2 class="section-heading">ISIP <span class="text-orange">program explorer</span></h2>
                <p class="mb-4"><b>Filter by year, funding type, or destination</b></p>

                <div class="ge-tab-row">
                    <button class="ge-tab-btn active" onclick="geTab(this,'2026')">ISIP 2026</button>
                    <button class="ge-tab-btn" onclick="geTab(this,'2025')">ISIP 2025</button>
                </div>
                <div class="ge-filter-row">
                    <button class="ge-filter-btn active" onclick="geFilter(this,'all')">All</button>
                    <button class="ge-filter-btn" onclick="geFilter(this,'funded')">Fully Funded</button>
                    <button class="ge-filter-btn" onclick="geFilter(this,'self')">Self Funded</button>
                    <button class="ge-filter-btn" onclick="geFilter(this,'japan')">Japan</button>
                    <button class="ge-filter-btn" onclick="geFilter(this,'europe')">Europe</button>
                    <button class="ge-filter-btn" onclick="geFilter(this,'sea')">South-East Asia</button>
                </div>

                <div style="overflow-x:auto;">
                    <table class="ge-isip-table">
                        <thead>
                            <tr>
                                <th>Program</th>
                                <th>Place</th>
                                <th>Duration</th>
                                <th>Deadline</th>
                                <th>Funding / Cost</th>
                                <th>Applied / Selected</th>
                            </tr>
                        </thead>
                        <tbody id="ge-isip-tbody"></tbody>
                    </table>
                </div>
                <p class="ge-table-note">Contact <strong>isip@mitsde.com</strong> for eligibility criteria, itinerary and direct application links.</p>
            </div>
        </section>

        <!-- ── FACULTY SESSIONS ── -->
        <section class="fee-structure-section pt-0">
            <div class="container">
                <div class="fs-card">

                    <div class="fs-left">
                        <p>Expert-led global learning</p>
                        <h3 class="fs-main-amount">International<br>Faculty Sessions</h3>
                        <p>Live sessions by faculty from globally ranked universities — for every MITSDE learner</p>
                    </div>

                    <div class="fs-right">
                        <div class="fs-grid">

                            <div class="fs-info-card">
                                <div class="ge-session-pills">
                                    <span class="ge-session-pill upcoming">Upcoming</span>
                                    <span class="ge-session-date">Jul 2026</span>
                                </div>
                                <p class="fs-card-label">Global Supply Chain Disruptions</p>
                                <p class="fs-sub">NUS Business School, Singapore</p>
                                <div class="ge-session-tags">
                                    <span class="ge-session-tag">Operations</span>
                                    <span class="ge-session-tag">Logistics</span>
                                    <span class="ge-session-tag">SCM</span>
                                </div>
                                <a href="#" class="btn-fs-orange mt-3 d-inline-block">Register &rarr;</a>
                            </div>

                            <div class="fs-info-card">
                                <div class="ge-session-pills">
                                    <span class="ge-session-pill upcoming">Upcoming</span>
                                    <span class="ge-session-date">Aug 2026</span>
                                </div>
                                <p class="fs-card-label">Digital Transformation in Finance</p>
                                <p class="fs-sub">Bocconi University, Italy</p>
                                <div class="ge-session-tags">
                                    <span class="ge-session-tag">Finance</span>
                                    <span class="ge-session-tag">FinTech</span>
                                    <span class="ge-session-tag">Strategy</span>
                                </div>
                                <a href="#" class="btn-fs-orange mt-3 d-inline-block">Register &rarr;</a>
                            </div>

                            <div class="fs-info-card">
                                <div class="ge-session-pills">
                                    <span class="ge-session-pill upcoming">Upcoming</span>
                                    <span class="ge-session-date">Sep 2026</span>
                                </div>
                                <p class="fs-card-label">AI in Financial Services</p>
                                <p class="fs-sub">Teesside University, UK</p>
                                <div class="ge-session-tags">
                                    <span class="ge-session-tag">Finance</span>
                                    <span class="ge-session-tag">AI</span>
                                    <span class="ge-session-tag">Risk</span>
                                </div>
                                <a href="#" class="btn-fs-orange mt-3 d-inline-block">Register &rarr;</a>
                            </div>

                            <div class="fs-info-card">
                                <div class="ge-session-pills">
                                    <span class="ge-session-pill upcoming">Upcoming</span>
                                    <span class="ge-session-date">Oct 2026</span>
                                </div>
                                <p class="fs-card-label">Sustainability &amp; ESG Leadership</p>
                                <p class="fs-sub">Aarhus University, Denmark</p>
                                <div class="ge-session-tags">
                                    <span class="ge-session-tag">HR</span>
                                    <span class="ge-session-tag">Operations</span>
                                    <span class="ge-session-tag">ESG</span>
                                </div>
                                <a href="#" class="btn-fs-orange mt-3 d-inline-block">Register &rarr;</a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ── STUDENT STORIES ── -->
        <section class="ge-section">
            <div class="container">
                <p class="ge-section-eyebrow">ISIP alumni</p>
                <h2 class="section-heading">Voices <span class="text-orange">from the field</span></h2>
                <p class="mb-4"><b>MITSDE students who stepped into a global classroom</b></p>
                <div class="ge-stories-swiper swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="ge-story-card">
                                <div class="ge-story-avatar">PJ</div>
                                <div class="ge-story-name">Prajakta Jadhav</div>
                                <div class="ge-story-prog">PGDM – Project Management &middot; C6</div>
                                <div class="ge-story-dest">&#9992; KU-STAR, Japan 2025</div>
                                <div class="ge-story-divider"></div>
                                <div class="ge-story-quote">"Presenting at Kyoto changed how I think about scale entirely."</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ge-story-card">
                                <div class="ge-story-avatar">RZ</div>
                                <div class="ge-story-name">Rutuja Zarkar</div>
                                <div class="ge-story-prog">PGDM – Project Management &middot; C8</div>
                                <div class="ge-story-dest">&#9992; KU-STAR, Japan 2025</div>
                                <div class="ge-story-divider"></div>
                                <div class="ge-story-quote">"Research exposure at a top global university is unmatched."</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ge-story-card">
                                <div class="ge-story-avatar">RM</div>
                                <div class="ge-story-name">Rugvedi Mane</div>
                                <div class="ge-story-dest">&#9992; Inspiring Japan Internship</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ge-story-card">
                                <div class="ge-story-avatar">RB</div>
                                <div class="ge-story-name">Rajaram Bhosle</div>
                                <div class="ge-story-prog">PGDM – Operations &middot; C7</div>
                                <div class="ge-story-dest">&#9992; CTIF Global, Denmark 2025</div>
                                <div class="ge-story-divider"></div>
                                <div class="ge-story-quote">"Seeing lean operations applied in Europe opened new doors for me."</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ge-story-card">
                                <div class="ge-story-avatar">HP</div>
                                <div class="ge-story-name">Harshwardhan Patil</div>
                                <div class="ge-story-dest">&#9992; CTIF Global Capsule, Denmark 2025</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ge-story-card">
                                <div class="ge-story-avatar">SP</div>
                                <div class="ge-story-name">Shriya Phukane</div>
                                <div class="ge-story-prog">PGDM – Project Management &middot; C4</div>
                                <div class="ge-story-dest">&#9992; Teesside University, UK 2025</div>
                                <div class="ge-story-divider"></div>
                                <div class="ge-story-quote">"The cross-cultural perspective redefined my leadership approach."</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ge-story-card">
                                <div class="ge-story-avatar">SS</div>
                                <div class="ge-story-name">Snehal Shinde</div>
                                <div class="ge-story-dest">&#9992; Teesside University, UK 2025</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ge-story-card">
                                <div class="ge-story-avatar">BK</div>
                                <div class="ge-story-name">Balram Kumar</div>
                                <div class="ge-story-dest">&#9992; UMN Student Mobility, Indonesia</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ge-story-card">
                                <div class="ge-story-avatar">AB</div>
                                <div class="ge-story-name">Ayush Bhardwaj</div>
                                <div class="ge-story-dest">&#9992; UMN Student Mobility, Indonesia</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ge-story-card">
                                <div class="ge-story-avatar">PK</div>
                                <div class="ge-story-name">Prathmesh Khot</div>
                                <div class="ge-story-dest">&#9992; Global Immersion, AIT Thailand</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ge-story-card">
                                <div class="ge-story-avatar">PV</div>
                                <div class="ge-story-name">Pranali Vardam</div>
                                <div class="ge-story-dest">&#9992; AI Horizon, Vietnam 2026</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ge-story-card">
                                <div class="ge-story-avatar">AT</div>
                                <div class="ge-story-name">Anshu Toppo</div>
                                <div class="ge-story-dest">&#9992; AI Horizon, Vietnam 2026</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ge-story-card">
                                <div class="ge-story-avatar">AC</div>
                                <div class="ge-story-name">Amanraj Chavan</div>
                                <div class="ge-story-dest">&#9992; AI Horizon, Vietnam 2026</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="ge-story-card">
                                <div class="ge-story-avatar">AG</div>
                                <div class="ge-story-name">Aaryan Gharat</div>
                                <div class="ge-story-dest">&#9992; AI Horizon, Vietnam 2026</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination ge-stories-pagination"></div>
                </div>
            </div>
        </section>

        <!-- ── HOW TO JOIN ── -->
        <section class="ge-section" id="apply">
            <div class="container">
                <p class="ge-section-eyebrow">Your path to global exposure</p>
                <h2 class="section-heading">How to join an <span class="text-orange">ISIP program</span></h2>
                <p class="mb-4"><b>Four steps from admission to international experience</b></p>
                <div class="ge-apply-grid  ge-section-light">
                    <div class="ge-steps-list">
                        <div class="ge-step-item">
                            <div class="ge-step-line"></div>
                            <div class="ge-step-num">01</div>
                            <div class="ge-step-content">
                                <div class="ge-step-title">Become an SDE student</div>
                                <div class="ge-step-desc">Take admission in a MITSDE PG program as per your requirement and interest. ISIP programs are open to all enrolled MITSDE learners.</div>
                            </div>
                        </div>
                        <div class="ge-step-item">
                            <div class="ge-step-line"></div>
                            <div class="ge-step-num">02</div>
                            <div class="ge-step-content">
                                <div class="ge-step-title">Attend ISIP orientation</div>
                                <div class="ge-step-desc">MITSDE holds a mandatory pre-departure orientation covering program expectations, cultural briefing, and documentation guidance.</div>
                            </div>
                        </div>
                        <div class="ge-step-item">
                            <div class="ge-step-line"></div>
                            <div class="ge-step-num">03</div>
                            <div class="ge-step-content">
                                <div class="ge-step-title">Submit documents</div>
                                <div class="ge-step-desc">Passport, SOP, academic records — the IRO team guides you through every requirement specific to your chosen program.</div>
                            </div>
                        </div>
                        <div class="ge-step-item">
                            <div class="ge-step-num">04</div>
                            <div class="ge-step-content">
                                <div class="ge-step-title">Confirm &amp; travel</div>
                                <div class="ge-step-desc">Pay program fees, secure your visa with IRO support, and join your international cohort.</div>
                            </div>
                        </div>
                    </div>
                    <div class="ge-apply-right">
                        <div class="ge-apply-section-title">Eligibility at a glance</div>
                        <ul class="ge-elig-list">
                            <li><span class="ge-elig-dot"></span>Enrolled MITSDE student (any PG program)</li>
                            <li><span class="ge-elig-dot"></span>Valid passport with 6+ months validity</li>
                            <li><span class="ge-elig-dot"></span>Strong academic record &amp; field interest</li>
                            <li><span class="ge-elig-dot"></span>Program-specific subject interest (as applicable)</li>
                        </ul>
                        <div class="ge-apply-divider"></div>
                        <div class="ge-apply-section-title">Contact the IRO</div>
                        <div class="ge-contact-row">
                            <span><i class="fa-regular fa-envelope" style="color:var(--ge-primary)"></i></span>
                            <span>isip@mitsde.com</span>
                        </div>
                        <div class="ge-apply-cta-row">
                            <a href="#" class="ge-apply-cta">Express interest &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── PROGRAM OBJECTIVES ── -->
        <section class="ge-section" id="objectives">
            <div class="container">
                <p class="ge-section-eyebrow">What ISIP sets out to do</p>
                <h2 class="section-heading">Program <span class="text-orange">objectives</span></h2>
                <p class="mb-4"><b>Six core outcomes every ISIP participant is designed to achieve</b></p>
                <div class="ge-benefit-grid">
                    <div class="ge-benefit-card">
                        <div class="ge-benefit-icon">🌐</div>
                        <div class="ge-benefit-title">International market exposure</div>
                        <div class="ge-benefit-desc">Provide real-time exposure to international markets and business ecosystems beyond classroom theory.</div>
                    </div>
                    <div class="ge-benefit-card">
                        <div class="ge-benefit-icon">🏗️</div>
                        <div class="ge-benefit-title">MNC operational insight</div>
                        <div class="ge-benefit-desc">Understand the operational structure of multinational corporations and global trade hubs at first hand.</div>
                    </div>
                    <div class="ge-benefit-card">
                        <div class="ge-benefit-icon">🤝</div>
                        <div class="ge-benefit-title">Cross-cultural awareness</div>
                        <div class="ge-benefit-desc">Develop cross-cultural competence through direct interaction and immersive real-world experiences.</div>
                    </div>
                    <div class="ge-benefit-card">
                        <div class="ge-benefit-icon">🔗</div>
                        <div class="ge-benefit-title">Academic–industry bridge</div>
                        <div class="ge-benefit-desc">Bridge academic learning with practical business insights and global leadership models.</div>
                    </div>
                    <div class="ge-benefit-card">
                        <div class="ge-benefit-icon">🌱</div>
                        <div class="ge-benefit-title">Professional networking</div>
                        <div class="ge-benefit-desc">Foster networking opportunities with peers, professionals, and international facilitators.</div>
                    </div>
                    <div class="ge-benefit-card">
                        <div class="ge-benefit-icon">💡</div>
                        <div class="ge-benefit-title">Global mindset</div>
                        <div class="ge-benefit-desc">Encourage innovation, strategic thinking, and adaptability in a culturally dynamic environment.</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── BENEFITS & HIGHLIGHTS ── -->
        <section class="ge-section" id="benefits">
            <div class="container">
                <p class="ge-section-eyebrow">Why participate</p>
                <h2 class="section-heading">Benefits &amp;  <span class="text-orange">highlights</span></h2>
                <p class="mb-4"><b>What every ISIP student gains — beyond the certificate</b></p>
                <div class="ge-benefit-grid">
                    <div class="ge-benefit-card">
                        <div class="ge-benefit-icon">🏢</div>
                        <div class="ge-benefit-title">Industry exposure</div>
                        <div class="ge-benefit-desc">Engage with global corporations and gain first-hand insights into international business practices and innovation ecosystems.</div>
                    </div>
                    <div class="ge-benefit-card">
                        <div class="ge-benefit-icon">📚</div>
                        <div class="ge-benefit-title">Academic enrichment</div>
                        <div class="ge-benefit-desc">Participate in structured learning sessions led by international experts and faculty from globally ranked universities.</div>
                    </div>
                    <div class="ge-benefit-card">
                        <div class="ge-benefit-icon">🌏</div>
                        <div class="ge-benefit-title">Cultural immersion</div>
                        <div class="ge-benefit-desc">Experience diverse cultures, traditions, and lifestyles to build cross-cultural competence and adaptability.</div>
                    </div>
                    <div class="ge-benefit-card">
                        <div class="ge-benefit-icon">✈️</div>
                        <div class="ge-benefit-title">All-inclusive travel support</div>
                        <div class="ge-benefit-desc">Complete arrangements — flights, accommodation, meals, local transport, insurance, and visa assistance — handled end-to-end.</div>
                    </div>
                    <div class="ge-benefit-card">
                        <div class="ge-benefit-icon">🎓</div>
                        <div class="ge-benefit-title">Certificate on completion</div>
                        <div class="ge-benefit-desc">Receive an official MITSDE certificate upon successful completion, enhancing your academic and professional profile.</div>
                    </div>
                    <div class="ge-benefit-card">
                        <div class="ge-benefit-icon">🤝</div>
                        <div class="ge-benefit-title">Strategic corporate network</div>
                        <div class="ge-benefit-desc">Access a vast network of industry partners, innovation hubs, startups, and international peer communities.</div>
                    </div>
                    <div class="ge-benefit-card">
                        <div class="ge-benefit-icon">🛡️</div>
                        <div class="ge-benefit-title">Safety &amp; structure</div>
                        <div class="ge-benefit-desc">Travel within a supervised itinerary backed by comprehensive travel insurance and 24/7 on-ground support.</div>
                    </div>
                    <div class="ge-benefit-card">
                        <div class="ge-benefit-icon">📐</div>
                        <div class="ge-benefit-title">Flexible learning options</div>
                        <div class="ge-benefit-desc">Adaptable formats — on-site, virtual, and hybrid — with durations ranging from 7 days to 12 months.</div>
                    </div>
                    <div class="ge-benefit-card">
                        <div class="ge-benefit-icon">🏆</div>
                        <div class="ge-benefit-title">International program standards</div>
                        <div class="ge-benefit-desc">Programs aligned with globally accepted academic and professional benchmarks. Some tracks offer fully funded participation.</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── FAQ ── -->
        <section class="faq-section" id="faqs">
            <div class="container">
                <p class="ge-section-eyebrow">Common questions</p>
                <h2 class="section-heading">Frequently Asked <span class="text-orange">Questions</span></h2>
                <p class="mb-4"><b>Everything you need to know before applying</b></p>
                <div class="faq-list">

                    <div class="faq-item is-open">
                        <button class="faq-q" aria-expanded="true">
                            <span>Is a valid passport mandatory?</span>
                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div class="faq-a"><p>Yes. A valid passport with at least six months of validity from the date of travel is compulsory for participation in any ISIP program.</p></div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-q" aria-expanded="false">
                            <span>What support is provided for visa processing?</span>
                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div class="faq-a"><p>MITSDE, in collaboration with authorised partners, assists with visa documentation, submission, and coordination to ensure smooth processing. Detailed guidance is provided during the pre-departure orientation session.</p></div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-q" aria-expanded="false">
                            <span>What does the program fee include?</span>
                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div class="faq-a"><p>The fee generally covers airfare, visa processing, accommodation, meals, insurance, local transportation, academic or corporate visits, and entry tickets where applicable. Full inclusions are shared during orientation. For fully funded programs, there is no cost to the student.</p></div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-q" aria-expanded="false">
                            <span>Are there any costs not included in the program fee?</span>
                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div class="faq-a"><p>Yes. Personal expenses such as shopping, optional tours, additional meals outside the itinerary, and incidental expenses are not covered by the program fee.</p></div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-q" aria-expanded="false">
                            <span>Will there be a pre-departure orientation?</span>
                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div class="faq-a"><p>Yes. A mandatory orientation session is conducted for all selected students covering the itinerary, travel protocols, safety guidelines, cultural etiquette, and program expectations.</p></div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-q" aria-expanded="false">
                            <span>Will participants receive a certificate?</span>
                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div class="faq-a"><p>Yes. Students receive an official MITSDE certificate upon successful completion of the international program, which can be added to their professional and academic portfolio.</p></div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-q" aria-expanded="false">
                            <span>How are participants selected if seats are limited?</span>
                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div class="faq-a"><p>Selection is based on eligibility criteria, timely registration, and document verification. Seats are allotted on a first-come, first-served basis. Some programs may additionally consider academic performance and field alignment.</p></div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-q" aria-expanded="false">
                            <span>Can students extend their stay after the program ends?</span>
                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div class="faq-a"><p>No. Participants are required to adhere to the official itinerary and return with the group unless prior written approval is obtained under exceptional circumstances.</p></div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-q" aria-expanded="false">
                            <span>Whom should I contact for further queries?</span>
                            <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </button>
                        <div class="faq-a"><p>For queries related to ISIP programs, contact the MITSDE IRO at <strong>isip@mitsde.com</strong> or the Student Support Team at <strong>support@mitsde.com</strong>.</p></div>
                    </div>

                </div>
            </div>
        </section>

    </div><!-- /.ge-page -->

    <?php include "footer-new.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        new Swiper('.ge-stories-swiper', {
            slidesPerView: 4,
            spaceBetween: 16,
            pagination: { el: '.ge-stories-pagination', clickable: true },
            breakpoints: {
                0:   { slidesPerView: 1.15, spaceBetween: 12 },
                576: { slidesPerView: 2.1,  spaceBetween: 14 },
                992: { slidesPerView: 4,    spaceBetween: 16 }
            }
        });
    </script>
    <script>
        /* ── ISIP DATA ── */
        const ISIP_DATA = {
            '2026': [
                { internship: 'Kyoto University KU-STAR Research Internship 2026', related_field: 'Engineering, Computer Science, Energy, Life Sciences, Agriculture, Medicine, Interdisciplinary', application_deadline: '2026-01-27', duration: 'May–July 2026', place: 'Japan', funding: 'Fully Funded', cost: null, students_applied: 20, students_selected: 0 },
                { internship: 'Denmark MBMI Program 2026', related_field: 'Entrepreneurship & Business Innovation', application_deadline: '2026-04-15', duration: '4 or 6 Weeks', place: 'Struer, Denmark', funding: 'Self Funded', cost: 'INR 290500', students_applied: 4, students_selected: 1 },
                { internship: 'Teesside University Global Summer School 2026', related_field: 'Multi-disciplinary', application_deadline: 'Ongoing', duration: '4 Weeks', place: 'Middlesbrough, UK', funding: 'Self Funded', cost: 'INR 310000', students_applied: 4, students_selected: 0 },
                { internship: 'Sustainability Immersion Program UMN Indonesia 2026', related_field: 'Sustainability, Culture', application_deadline: 'Ongoing', duration: '3 Weeks (Hybrid)', place: 'Jakarta, Indonesia', funding: 'Self Funded', cost: 'INR 98000', students_applied: 7, students_selected: 1 },
                { internship: 'SDG Global Internship Program Vietnam 2026', related_field: 'Sustainability / SDG', application_deadline: '2026-04-30', duration: '30 Days', place: 'Vietnam', funding: 'Self Funded', cost: 'INR 209500–260000', students_applied: 4, students_selected: null },
                { internship: 'LOTUS Programme 2026', related_field: 'AI, Biotechnology, Energy, Quantum, Research', application_deadline: '2026-06-09', duration: 'Up to 12–36 Months', place: 'Japan', funding: 'Fully Funded', cost: 'INR 1,40,000/month Stipend', students_applied: 34, students_selected: 0 },
                { internship: 'Inspiring Japan Program', related_field: 'Cultural & Educational Exposure', application_deadline: '2026-06-30', duration: '6 Nights / 7 Days', place: 'Tokyo, Osaka, Kyoto, Japan', funding: 'Self Funded', cost: 'INR 180000', students_applied: 3, students_selected: 0 },
                { internship: 'Global Immersion Program for MBA', related_field: 'Strategy, Business Model Transformation, Technology, Data', application_deadline: 'Ongoing', duration: '7 Days', place: 'Thailand', funding: 'Self Funded', cost: 'INR 56981', students_applied: 2, students_selected: 0 },
                { internship: 'Global Immersion Program for Engineering & MBA', related_field: 'AI, Business Analytics, Marketing, Finance, Operations', application_deadline: 'Ongoing', duration: '7 Days', place: 'Thailand', funding: 'Self Funded', cost: 'INR 56981', students_applied: 3, students_selected: 0 },
                { internship: 'Vietnam Immersion Programme 2026 by VEO-Connect', related_field: 'Entrepreneurship, Global Learning, Cultural Immersion', application_deadline: '2026-05-18', duration: '6 Nights / 7 Days', place: 'Ho Chi Minh City, Vietnam', funding: 'Self Funded', cost: 'INR 65000', students_applied: 4, students_selected: 0 },
                { internship: 'AI Horizon: Global Immersion Program – Vietnam 2026', related_field: 'Artificial Intelligence, Digital Transformation, Sustainable Innovation, Global Business', application_deadline: '2026-06-20', duration: '5 Nights / 6 Days', place: 'Hanoi & Halong Bay, Vietnam', funding: 'Self Funded', cost: 'INR 109999', students_applied: 4, students_selected: 4 }
            ],
            '2025': [
                { internship: 'KU Star Research Internship Program', related_field: 'Operations Research & Continuous Optimization', application_deadline: '2025-01-31', duration: 'May 20 – July 17, 2025', place: 'Kyoto University, Japan', funding: 'Fully Funded', cost: null, students_applied: 20, students_selected: 2 },
                { internship: 'Teesside University International Summer Internship 2025', related_field: 'Project Management', application_deadline: '2025-03-15', duration: '4 Weeks (7 July – 2 Aug 2025)', place: 'Teesside University, UK', funding: 'Self Funded', cost: 'INR 328000', students_applied: 2, students_selected: 2 },
                { internship: 'Global Internship Program 2025: CTIF Global Capsule', related_field: 'Multi-Business Model Innovation', application_deadline: '2025-03-31', duration: '1 Month', place: 'Denmark', funding: 'Self Funded', cost: 'INR 462000', students_applied: 2, students_selected: 2 },
                { internship: 'Virtual Beginnings, Real-Life Adventures: Indonesian Cultural Exploration', related_field: 'Any Specialization', application_deadline: '2025-05-20', duration: '3 Weeks (7–25 July 2025)', place: 'Indonesia', funding: 'Self Funded', cost: 'INR 77670', students_applied: 8, students_selected: 2 },
                { internship: 'CGC Fall School 2025', related_field: 'Any Specialization', application_deadline: '2025-07-30', duration: '22 Sept – 10 Oct 2025', place: 'Denmark', funding: 'Self Funded', cost: 'INR 169000', students_applied: 0, students_selected: null },
                { internship: 'Inspiring Japan Program – February 2026', related_field: 'Any Specialization', application_deadline: '2025-10-20', duration: '20 Days (9–28 Feb 2026)', place: 'Japan', funding: 'Self Funded', cost: 'INR 175000', students_applied: 3, students_selected: 1 },
                { internship: 'International Internship at AIT – Global Business Leadership', related_field: 'MBA, Global Business, Digital Transformation, Strategic Leadership', application_deadline: '2025-11-12', duration: '7 Days (7–13 Dec 2025)', place: 'Thailand', funding: 'Self Funded', cost: 'INR 53175', students_applied: 4, students_selected: 1 },
                { internship: 'ISIP 7-Day International Bootcamps 2026', related_field: 'AI, Data Science, Business Analytics, Innovation & Entrepreneurship', application_deadline: '2025-12-08', duration: '7 Days (May 2026)', place: 'Singapore · Malaysia · Germany · France', funding: 'Self Funded', cost: 'INR 1,09,000+ (SG/MY) | INR 1,59,000+ (DE/FR)', students_applied: 4, students_selected: 2 },
                { internship: 'ETH Zurich Summer Research Fellowship Programme', related_field: 'Computer Science, Electrical Engineering, Mathematics, Physics', application_deadline: '2025-12-16', duration: '2 Months (July–Aug 2026)', place: 'Zurich, Switzerland', funding: 'Fully Funded', cost: 'CHF 4,000 Stipend (~₹4 L)', students_applied: 18, students_selected: null },
                { internship: 'CERN Openlab Summer Programme 2026', related_field: 'IT, Computer Science, Physics, Mathematics, Engineering', application_deadline: '2026-01-26', duration: '9 Weeks (Summer 2026)', place: 'Geneva, Switzerland', funding: 'Fully Funded', cost: null, students_applied: 41, students_selected: 22 }
            ]
        };

        /* ── PLACE → FLAG + REGION ── */
        function placeInfo(place) {
            const rules = [
                { keys: ['japan','kyoto','tokyo','osaka','kobe'], flag: '🇯🇵', label: 'Japan',       region: 'japan'  },
                { keys: ['uk','united kingdom','teesside','middlesbrough','england'], flag: '🇬🇧', label: 'UK', region: 'europe' },
                { keys: ['denmark','struer','cgc'],               flag: '🇩🇰', label: 'Denmark',     region: 'europe' },
                { keys: ['germany'],                              flag: '🇩🇪', label: 'Germany',     region: 'europe' },
                { keys: ['france'],                               flag: '🇫🇷', label: 'France',      region: 'europe' },
                { keys: ['switzerland','zurich','geneva','eth'],  flag: '🇨🇭', label: 'Switzerland', region: 'europe' },
                { keys: ['singapore'],                            flag: '🇸🇬', label: 'Singapore',   region: 'sea'    },
                { keys: ['malaysia'],                             flag: '🇲🇾', label: 'Malaysia',    region: 'sea'    },
                { keys: ['indonesia','jakarta'],                  flag: '🇮🇩', label: 'Indonesia',   region: 'sea'    },
                { keys: ['vietnam','ho chi minh','hanoi','halong','veo'], flag: '🇻🇳', label: 'Vietnam', region: 'sea' },
                { keys: ['thailand','bangkok','ait'],             flag: '🇹🇭', label: 'Thailand',    region: 'sea'    }
            ];
            const p = place.toLowerCase();
            const matched = rules.filter(r => r.keys.some(k => p.includes(k)));
            if (!matched.length) return { display: place, regions: ['other'] };
            // build display: unique flags + unique labels (collapse same-country dupes)
            const seen = new Set();
            const parts = [];
            matched.forEach(function(m) {
                if (!seen.has(m.flag)) { seen.add(m.flag); parts.push(m.flag + ' ' + m.label); }
            });
            return { display: parts.join(', '), regions: [...new Set(matched.map(m => m.region))] };
        }

        /* ── COST FORMATTER ── */
        function formatCost(funding, cost) {
            if (funding === 'Fully Funded') return '<span class="ge-badge ge-badge-green">Fully Funded</span>';
            if (!cost) return '—';
            // already-formatted strings (with ₹ or mixed): return as-is
            if (cost.includes('₹') || cost.includes('CHF') || cost.includes('|') || cost.includes('/month')) return cost;
            // "INR 328000" → "₹ 3.28 L"
            const m = cost.match(/INR\s*([\d,]+(?:\.\d+)?)/i);
            if (m) {
                const n = parseFloat(m[1].replace(/,/g, ''));
                if (n >= 100000) return '&#8377;&nbsp;' + (n / 100000).toFixed(2).replace(/\.?0+$/, '') + ' L';
                return '&#8377;&nbsp;' + Math.round(n).toLocaleString('en-IN');
            }
            return cost;
        }

        /* ── DEADLINE BADGE ── */
        function deadlineBadge(dl) {
            if (!dl) return '—';
            if (dl.toLowerCase() === 'ongoing') return '<span class="ge-badge ge-badge-blue">Ongoing</span>';
            const d = new Date(dl.split(' ')[0]);
            if (isNaN(d)) return dl;
            const today = new Date();
            today.setHours(0,0,0,0);
            if (d < today) return '<span class="ge-badge ge-badge-muted">Closed</span>';
            const label = d.toLocaleDateString('en-IN', { day: 'numeric', month: 'short' });
            return '<span class="ge-badge ge-badge-amber">' + label + '</span>';
        }

        /* ── STATE ── */
        let geYear   = '2026';
        let geFilter_v = 'all';

        /* ── RENDER ── */
        function geRender() {
            const data = ISIP_DATA[geYear] || [];
            const tbody = document.getElementById('ge-isip-tbody');
            let html = '';

            data.forEach(function(p) {
                const pi = placeInfo(p.place);
                if (geFilter_v !== 'all') {
                    if (geFilter_v === 'funded' && p.funding !== 'Fully Funded') return;
                    if (geFilter_v === 'self'   && p.funding === 'Fully Funded') return;
                    if (geFilter_v === 'japan'  && !pi.regions.includes('japan'))  return;
                    if (geFilter_v === 'europe' && !pi.regions.includes('europe')) return;
                    if (geFilter_v === 'sea'    && !pi.regions.includes('sea'))    return;
                }
                const applied  = p.students_applied > 0 ? p.students_applied + ' applied' : '—';
                const selected = p.students_selected !== null && p.students_selected !== undefined
                    ? p.students_selected + ' selected' : 'Pending';
                html += '<tr>'
                    + '<td><div class="ge-prog-name">' + p.internship + '</div>'
                    + '<div class="ge-prog-country" style="margin-top:3px;font-size:11.5px;">' + p.related_field + '</div></td>'
                    + '<td><span class="ge-prog-country">' + pi.display + '</span></td>'
                    + '<td style="font-size:13px;white-space:nowrap;">' + p.duration + '</td>'
                    + '<td>' + deadlineBadge(p.application_deadline) + '</td>'
                    + '<td style="font-size:13px;">' + formatCost(p.funding, p.cost) + '</td>'
                    + '<td style="font-size:12.5px;white-space:nowrap;">' + applied + '<br>'
                    + '<span style="color:var(--ge-text-sec);">' + selected + '</span></td>'
                    + '</tr>';
            });

            tbody.innerHTML = html || '<tr><td colspan="6" style="text-align:center;color:var(--ge-muted);padding:28px 16px;">No programs match the selected filter.</td></tr>';
        }

        function geTab(btn, year) {
            document.querySelectorAll('.ge-tab-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            geYear = year;
            geFilter_v = 'all';
            document.querySelectorAll('.ge-filter-btn').forEach(b => b.classList.remove('active'));
            document.querySelector('.ge-filter-btn').classList.add('active');
            geRender();
        }

        function geFilter(btn, filter) {
            document.querySelectorAll('.ge-filter-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            geFilter_v = filter;
            geRender();
        }

        geRender();

    </script>

</body>
</html>
