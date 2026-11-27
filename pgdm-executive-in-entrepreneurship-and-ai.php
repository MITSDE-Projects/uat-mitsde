<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PGDM Executive in Entrepreneurship &amp; AI – MIT SDE x Entrelogy</title>

    <meta name="description" content="15-month PGDM Executive in Entrepreneurship & AI. Build and launch your startup, with immersions in Dubai and China, 1:1 mentoring and investor pitching. Apply now." />

    <meta name="keywords" content="PGDM Executive Entrepreneurship, entrepreneurship and AI programme, startup founder programme, MIT SDE Entrelogy" />

    <!-- CANONICAL TAG -->
    <link rel="canonical" href="https://mitsde.com/pgdm-executive-in-entrepreneurship-and-ai" />
    <!-- CANONICAL TAG -->

    <meta name="robots" content="index, follow">

    <!-- OGP TAG -->
    <meta property="og:title" content="PGDM Executive in Entrepreneurship &amp; AI – MIT SDE x Entrelogy">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/pgdm-executive-in-entrepreneurship-and-ai">
    <meta property="og:description" content="15-month PGDM Executive in Entrepreneurship & AI. Build and launch your startup, with immersions in Dubai and China, 1:1 mentoring and investor pitching. Apply now.">
    <meta property="og:type" content="website">
    <!-- TODO: replace with this programme's own banner once designed -->
    <meta property="og:image" content="https://mitsde.com/assets-new/images/banner/chief-digital-marketing-strategist-program.webp">
    <!-- / OG TAG -->

    <link rel="icon" type="image/png" href="assets-new/images/favicon-mit.ico" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css-new/styles.css" />
    <link rel="stylesheet" href="css-new/intlTelInput.css">

    <!-- Page-only styles (eai-*). Kept here, not in styles.css, on purpose.
         Everything else reuses ph-*, cib-*, pedagogy-*, learning-outcomes-*,
         pgcs-*, fs-*, dms-usp/faculty/capstone from styles.css. -->
    <style>
        /* Hero: breathing room under the breadcrumb + intro line under the H1 */
        .eai-hero .ph-layout { margin-top: 2rem; }
        .eai-hero .ph-heading { margin-bottom: 0.75rem; }
        .eai-hero-intro { max-width: 520px; font-size: var(--fz-medium); color: var(--text-dark); line-height: 1.6; margin-bottom: 1.5rem; }

        /* Hero: "Co-designed with" MITSDE | Entrelogy */
        .eai-codesign-label { font-size: var(--fz-medium); font-weight: 400; color: var(--text-dark); margin-bottom: 0.5rem; }
        .eai-codesign { justify-content: flex-start; }
        .eai-codesign img { width: 170px; }
        .eai-badge { display: inline-flex; align-items: center; gap: 8px; padding: 6px 14px; border-radius: 999px; background: var(--bg-light); border: 1px solid var(--primary-orange); color: var(--primary-orange); font-size: var(--fz-small); font-weight: 600; }

        /* Section spacing */
        .eai-section, .eai-why-section { padding: 3rem 0; }

        /* Why You Need This Programme — quote box */
        .eai-why-box { background: var(--bg-light); border-left: 4px solid var(--primary-orange); border-radius: 14px; padding: 1.75rem 2rem; }
        .eai-why-quote { font-size: var(--fz-large); font-weight: 700; font-style: italic; color: var(--text-dark); line-height: 1.6; }

        /* Icon cards (Who is this for / Certificates / Why choose) */
        .eai-grid { display: grid; gap: 1rem; margin-top: 1rem; }
        .eai-grid-5 { grid-template-columns: repeat(5, 1fr); }
        .eai-grid-3 { grid-template-columns: repeat(3, 1fr); }
        .eai-card { border: 1px solid rgb(0, 0, 0); border-radius: 14px; padding: 1.5rem 1.25rem; text-align: center; transition: border-color 0.2s, box-shadow 0.2s; }
        .eai-card:hover { border-color: var(--primary-orange); box-shadow: 0 8px 24px rgba(234, 88, 12, 0.15); }
        .eai-card i { font-size: 1.75rem; color: var(--primary-orange); margin-bottom: 0.75rem; }
        .eai-card h3 { font-size: var(--fz-normal); font-weight: 700; color: var(--text-dark); margin: 0; line-height: 1.4; }
        .eai-card p { font-size: var(--fz-xsmall); color: var(--text-light); margin: 0.35rem 0 0; }

        /* Numbered steps (Learning Roadmap 5 / Application Process 7) */
        .eai-steps { list-style: none; padding: 0; margin: 1rem 0 0; display: grid; gap: 1rem; }
        .eai-steps-5 { grid-template-columns: repeat(5, 1fr); }
        .eai-steps-7 { grid-template-columns: repeat(7, 1fr); }
        .eai-steps li { border: 1px solid rgb(0, 0, 0); border-radius: 14px; padding: 1.25rem 1rem; background: var(--white); }
        .eai-step-no { display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; background: var(--primary-orange); color: var(--white); font-weight: 700; margin-bottom: 0.6rem; }
        .eai-steps h3 { font-size: var(--fz-normal); font-weight: 700; color: var(--text-dark); margin: 0 0 0.35rem; line-height: 1.35; }
        .eai-steps p { font-size: var(--fz-xsmall); color: var(--text-light); margin: 0; }
        .eai-steps-7 h3 { font-size: var(--fz-small); margin: 0; }

        /* Two info boxes side by side (Resources + Tools, Capstone + Hands-on) */
        .eai-info-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: 1.5rem; }
        /* min-width:0 stops the max-content marquee track from stretching its grid column */
        .eai-info { background: var(--bg-light); border-radius: 14px; padding: 1.5rem; min-width: 0; }
        .eai-info h3 { font-size: var(--fz-large); font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem; }
        .eai-info p { margin: 0; }
        /* Tools marquee — continuous scroll; items are text pills now, logos later (.has-logo) */
        .eai-tools-wrap { overflow: hidden; width: 100%; touch-action: pan-y; }
        .eai-tools-track { display: flex; gap: 10px; width: max-content; animation: eai-tools-scroll 40s linear infinite; }
        .eai-tools-wrap:hover .eai-tools-track { animation-play-state: paused; }
        @keyframes eai-tools-scroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }
        /* Logo boxes — same size as the DMS .dms-tool-item (120×70); a tool without a logo gets icon + name in the same box */
        .eai-tool-item { flex-shrink: 0; display: flex; align-items: center; justify-content: center; gap: 6px; width: 120px; height: 70px; padding: 6px; border-radius: 10px; background: var(--white); border: 1px solid #e5e7eb; overflow: hidden; }
        .eai-tool-item img { width: 100%; height: 100%; object-fit: contain; }
        .eai-tool-item:not(.has-logo) { width: auto; padding: 6px 14px; }
        .eai-tool-item i { color: var(--primary-orange); }
        .eai-tool-item span { font-size: var(--fz-small); font-weight: 600; color: var(--text-dark); white-space: nowrap; }
        @media (prefers-reduced-motion: reduce) { .eai-tools-track { animation: none; flex-wrap: wrap; width: auto; } }

        .dms-faculty-section .faculty-card h4 { margin-bottom: 0.75rem; }

        @media (max-width: 1199px) {
            .eai-steps-7 { grid-template-columns: repeat(4, 1fr); }
        }
        @media (max-width: 991px) {
            .eai-grid-5 { grid-template-columns: repeat(3, 1fr); }
            .eai-steps-5 { grid-template-columns: repeat(3, 1fr); }
            .eai-info-row { grid-template-columns: 1fr; }
        }
        @media (max-width: 768px) {
            .eai-grid-5, .eai-grid-3 { grid-template-columns: 1fr 1fr; }
            .eai-steps-5, .eai-steps-7 { grid-template-columns: 1fr 1fr; }
            .eai-why-box { padding: 1.25rem; }
            .eai-codesign img { width: 130px; }
            .eai-hero .ph-layout { margin-top: 1.25rem; }
        }
        @media (max-width: 480px) {
            .eai-hero-intro, .eai-codesign-label { text-align: center; }
            .eai-codesign { justify-content: center; }
            .eai-grid-5, .eai-grid-3, .eai-steps-5, .eai-steps-7 { grid-template-columns: 1fr; }
        }
    </style>

    <script type="application/ld+json">{
        "@context": "https://schema.org/",
        "@type": "Product",
        "name": "PGDM Executive in Entrepreneurship & AI – MIT SDE x Entrelogy",
        "image": "https://mitsde.com/assets-new/images/banner/chief-digital-marketing-strategist-program.webp",
        "description": "15-month PGDM Executive in Entrepreneurship & AI. Build and launch your startup, with immersions in Dubai and China, 1:1 mentoring and investor pitching. Apply now.",
        "brand": {
            "@type": "Brand",
            "name": "MITSDE"
        },
        "offers": {
            "@type": "Offer",
            "url": "https://mitsde.com/pgdm-executive-in-entrepreneurship-and-ai",
            "priceCurrency": "INR",
            "price": "850000",
            "priceValidUntil": "2027-12-31",
            "availability": "https://schema.org/InStock",
            "itemCondition": "https://schema.org/NewCondition"
        }
    }
    </script>

    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What is the duration of the programme?",
    "acceptedAnswer": { "@type": "Answer", "text": "15 months: 9 months of live sessions, a 3-month Capstone Project and 3 months of mentorship." }
  },{
    "@type": "Question",
    "name": "Who is eligible?",
    "acceptedAnswer": { "@type": "Answer", "text": "Any graduate with at least 1 year of work experience." }
  },{
    "@type": "Question",
    "name": "How are sessions delivered, and what is the time commitment?",
    "acceptedAnswer": { "@type": "Answer", "text": "Sessions are offline, and the programme needs about 16 hours per week." }
  },{
    "@type": "Question",
    "name": "Will I get mentor access?",
    "acceptedAnswer": { "@type": "Answer", "text": "Yes. Learners get 1:1 mentoring from industry leaders to help build their startups." }
  },{
    "@type": "Question",
    "name": "What learning resources are provided?",
    "acceptedAnswer": { "@type": "Answer", "text": "PPTs, e-books, case studies, guest lectures and community access." }
  },{
    "@type": "Question",
    "name": "What certificates will I receive?",
    "acceptedAnswer": { "@type": "Answer", "text": "The PGDM Executive certificate, an Entrelogy independent certificate and a Google Ads certificate." }
  },{
    "@type": "Question",
    "name": "What are the career prospects?",
    "acceptedAnswer": { "@type": "Answer", "text": "Founder, entrepreneur, startup consultant, product lead, VC analyst, venture capitalist, angel investor, startup leader or growth manager." }
  },{
    "@type": "Question",
    "name": "Is EMI or a scholarship available?",
    "acceptedAnswer": { "@type": "Answer", "text": "Yes. EMI is available through Greyquest, HDFC Credila and Tata Capital (2–10 years), and merit-based scholarships go up to 50%." }
  }]
}
    </script>

    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://mitsde.com/" },
    { "@type": "ListItem", "position": 2, "name": "Online PGDM Executive Programs", "item": "https://mitsde.com/post-graduate-diploma-in-management-executive" },
    { "@type": "ListItem", "position": 3, "name": "PGDM Executive in Entrepreneurship & AI", "item": "https://mitsde.com/pgdm-executive-in-entrepreneurship-and-ai" }
  ]
}
    </script>

    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "CollegeOrUniversity",
    "name": "MIT School of Distance Education",
    "alternate Name": "MIT SDE",
    "url": "https://mitsde.com",
    "logo": "https://mitsde.com/assets/images/new/logo-mit-school-of-distance-education.png",
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91 9112207207",
        "contactType": "technical support",
        "contactOption": "TollFree",
        "areaServed": "IN",
        "availableLanguage": "en"
    },
    "sameAs": [
        "https://www.facebook.com/MITPuneDistanceEducationOnline/",
        "https://www.instagram.com/mitdistanceeducation/?hl=en",
        "https://www.youtube.com/c/MITSDEPune",
        "https://www.linkedin.com/school/mitsde"
    ]
}
</script>

<?php include "5-common-seo-tag-1.php" ?>
</head>

<body>
  <?php include "5-common-seo-tag-2.php" ?>
    <?php include "header-new.php" ?>

    <!-- ═══════════════════════════════════════════════
       PROGRAM HERO
       Content: Website_Content_PGDM_Executive_Entrepreneurship_and_AI.docx
    ════════════════════════════════════════════════ -->
    <section class="hero ph-hero eai-hero">
        <nav class="page-breadcrumb" aria-label="Breadcrumb">
            <span class="pb-line"></span>
            <a href="./">Home</a>
            <span class="pb-sep">/</span>
            <a href="https://mitsde.com/post-graduate-diploma-in-management-executive">PGDM Exe</a>
            <span class="pb-sep">/</span>
            <span class="pb-current">PGDM Executive in Entrepreneurship &amp; AI</span>
        </nav>
        <div class="container">

            <div class="ph-layout">

                <!-- Left — heading + co-designed logos -->
                <div class="ph-left">
                    <h1 class="ph-heading">PGDM Executive in<br> Entrepreneurship &amp; AI</h1>
                    <p class="eai-hero-intro">An execution-led, hands-on practical learning programme designed to help aspiring entrepreneurs build successful startups.</p>
                    <p class="eai-codesign-label">Co-designed with</p>
                    <div class="ph-sub eai-codesign">
                        <img src="assets-new/images/logo_mitsde.png" alt="MIT School of Distance Education" />
                        <div class="vertical-divider-3"></div>
                        <img src="assets-new/images/entrepreneurship-and-ai/Entrelogy-logo.webp" alt="Entrelogy Business School" />
                    </div>
                    <span class="eai-badge"><i class="fa-solid fa-award"></i> Exclusive MIT &amp; Entrelogy Alumni Status</span>
                </div>

                <div class="ph-right">
                    <!-- TODO: temporary banner (borrowed from the Digital Marketing Strategist page) -->
                    <img src="assets-new/images/banner/chief-digital-marketing-strategist-program.webp" alt="PGDM Executive in Entrepreneurship &amp; AI" />
                </div>

            </div><!-- /ph-layout -->

            <!-- Specialisation filter pills -->
            <div class="ph-specs-wrap">
                <div class="ph-specs">
                    <a href="pgdm-executive-in-entrepreneurship-and-ai"><button class="ph-spec-pill is-active">Entrepreneurship &amp; AI</button></a>
                    <a href="digital-marketing-strategist"><button class="ph-spec-pill">Chief Digital Marketing Strategist Program</button></a>
                    <a href="pgdm-executive-in-digital-marketing"><button class="ph-spec-pill">Digital Marketing</button></a>
                    <a href="pgdm-executive-in-business-analytics"><button class="ph-spec-pill">Business Analytics</button></a>
                    <a href="pgdm-executive-in-information-technology"><button class="ph-spec-pill">Information Technology</button></a>
                    <a href="pgdm-executive-in-modern-project-management"><button class="ph-spec-pill">Project Management</button></a>
                    <a href="pgdm-executive-in-technology-and-operations-management"><button class="ph-spec-pill">Technology & Operations</button></a>
                    <a href="pgdm-executive-in-human-capital-management"><button class="ph-spec-pill">Human Capital Management</button></a>
                    <a href="pgdm-executive-in-banking-financial-services"><button class="ph-spec-pill">Banking &amp; Financial Services</button></a>
                    <a href="pgdm-executive-in-finance-management"><button class="ph-spec-pill">Finance Management</button></a>
                    <a href="pgdm-executive-in-strategic-marketing-management"><button class="ph-spec-pill">Strategic Marketing Management</button></a>
                    <a href="pgdm-executive-in-material-management"><button class="ph-spec-pill">Material Management</button></a>
                    <a href="pgdm-executive-in-global-logistics-and-supply-chain-management"><button class="ph-spec-pill">Global Logistics & Supply Chain</button></a>
                    <a href="pgdm-executive-in-construction-and-project-management"><button class="ph-spec-pill">Construction and Project</button></a>
                    <a href="pgdm-executive-in-international-business"><button class="ph-spec-pill">International Business</button></a>
                    <a href="pgdm-executive-in-sustainability-esg"><button class="ph-spec-pill">Sustainability & ESG</button></a>
                </div>
                <p class="ph-specs-hint">Select a category above to explore all available specializations, fees,
                    duration, and learning outcomes.</p>
            </div>

        </div>
    </section>

    <!-- ═══════════════════════════════════════════════
       COURSE INFO BAR (page-specific values — inline, not the shared pgdm-exe-common-fee-bar.php)
    ════════════════════════════════════════════════ -->
    <section class="cib-section">
        <div class="container">
            <div>
                <div class="enquiry-bar">
                    <ul class="program-details">
                        <li>
                            <div class="program-feature">
                                <p>Course Duration</p>
                                <span>15 Months</span>
                                <small>9 months live + 3 months Capstone + 3 months mentorship</small>
                            </div>
                        </li>
                        <li>
                            <div class="program-feature">
                                <p>Eligibility</p>
                                <span>Any graduate</span>
                                <small>with at least 1 year of work experience</small>
                            </div>
                        </li>
                        <li>
                            <div class="program-feature">
                                <p>Format</p>
                                <span>Offline</span>
                                <small>about 16 hours per week</small>
                            </div>
                        </li>
                        <li>
                            <div class="program-feature">
                                <p>Course fee</p>
                                <span>INR 8,50,000</span>
                                <small>INR 6,50,000 Academic + INR 2,00,000 International Immersions</small>
                            </div>
                        </li>
                        <li class="enquiry-btn-wrap">
                            <a href="https://entrelogy.com/pgdm.html" target="_blank" rel="noopener" class="btn btn-dark rounded-pill px-4 py-2">Download Brochure</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- TABs -->
    <?php include "common-tab-pills.php" ?>

    <!-- About Section -->
    <section class="about-section pb-0" id="about">
        <div class="container">
            <h2 class="section-heading">
                <span class="text-orange">About </span>the Programme
            </h2>

            <p>The PGDM Executive in Entrepreneurship &amp; AI is co-designed by MIT-SDE and Entrelogy Business School. It helps aspiring entrepreneurs and new-age family business aspirants build successful startups.</p>

            <p>Learners gain deeper business knowledge with global perspectives through two international immersions, in Dubai and China.</p>
        </div>
    </section>

    <!-- Programme Highlights (USPs) -->
    <section class="dms-usp-section">
        <div class="container">
            <h2 class="section-heading">
                <span class="text-orange">Programme </span>Highlights
            </h2>

            <ul class="ac-list text-dark dms-usp-list">
                <li>The only programme in India where students graduate as startup founders</li>
                <li>Hands-on, experiential learning module</li>
                <li>Learn directly from founders, VCs, entrepreneurs and startup leaders</li>
                <li>2 international immersions – Dubai and China</li>
                <li>1:1 mentoring to help build successful startups</li>
                <li>Pitch directly to leading VCs and investors</li>
                <li>Guaranteed grants per startup</li>
            </ul>
        </div>
    </section>

    <!-- Why You Need This Programme -->
    <section class="eai-why-section">
        <div class="container">
            <h2 class="section-heading"><span class="text-orange">Why You Need </span>This Programme</h2>

            <div class="eai-why-box">
                <p class="eai-why-quote">Would you learn swimming from a textbook, taught by someone who has never swum? Then why learn entrepreneurship from people who have never run a business?</p>
                <p>In this programme you learn, hands-on, how to build a successful startup, raise funds and scale your business. You learn directly from leading founders, VCs, entrepreneurs and startup leaders.</p>
                <p class="mb-0">If you want to build a successful business, learn from people who have already done it. This programme closes the gap between traditional learning and hands-on learning.</p>
            </div>
        </div>
    </section>

    <!-- Who Is This Programme For -->
    <section class="eai-section">
        <div class="container">
            <h2 class="section-heading"><span class="text-orange">Who Is This </span>Programme For?</h2>

            <div class="eai-grid eai-grid-5">
                <div class="eai-card"><i class="fa-solid fa-rocket"></i><h3>Aspiring founders</h3></div>
                <div class="eai-card"><i class="fa-solid fa-users"></i><h3>Family-business successors</h3></div>
                <div class="eai-card"><i class="fa-solid fa-rotate-right"></i><h3>Failed founders</h3></div>
                <div class="eai-card"><i class="fa-solid fa-briefcase"></i><h3>Working professionals looking for a career switch</h3></div>
                <div class="eai-card"><i class="fa-solid fa-lightbulb"></i><h3>Startup enthusiasts</h3></div>
            </div>
        </div>
    </section>

    <!-- Pedagogy section -->
    <section class="pedagogy-section pb-0">
        <div class="container">
            <div class="pedagogy-grid">
                <div class="pedagogy-card">
                    <div class="pedagogy-card-img">
                        <img src="assets-new/images/unique-pedagogy.jpg" alt="Unique Pedagogy" />
                    </div>
                    <h3 class="pedagogy-card-title">Unique Pedagogy</h3>
                    <ul class="ac-list text-dark">
                        <li><strong>Execution-led learning:</strong> learners build and launch a real startup during the programme.</li>
                        <li><strong>Learn from practitioners:</strong> sessions by founders, VCs, entrepreneurs and startup leaders.</li>
                        <li><strong>Hands-on projects:</strong> 30+ projects, assignments and case studies.</li>
                        <li><strong>Global exposure:</strong> international immersions in Dubai and China, plus an Indian immersion.</li>
                        <li><strong>1:1 mentoring:</strong> personal mentoring to help build and scale the startup.</li>
                        <li><strong>Investor access:</strong> pitch directly to leading VCs and investors.</li>
                    </ul>
                </div>
                <div class="pedagogy-card">
                    <div class="pedagogy-card-img">
                        <img src="assets-new/images/academic-partnership.jpg" alt="Academic Partnership" />
                    </div>
                    <h3 class="pedagogy-card-title">Academic Partnerships</h3>
                    <ul class="ac-list text-dark">
                        <li>The programme is co-designed by MIT-SDE and Entrelogy Business School.</li>
                        <li>It draws on the strength of MAEER’s MIT Group of Institutions, Pune — known for its strong academic legacy and innovative approach to education.</li>
                    </ul>
                </div>
                <div class="pedagogy-card">
                    <div class="pedagogy-card-img">
                        <img src="assets-new/images/expert-faculty.jpg" alt="Expert Faculty" />
                    </div>
                    <h3 class="pedagogy-card-title">Expert Faculty and Mentors</h3>
                    <ul class="ac-list text-dark">
                        <li>Sessions are led by founders, VCs, entrepreneurs and startup leaders who have built and scaled businesses themselves.</li>
                        <li>Learners also get 1:1 mentoring from industry leaders to help build their startups. <a href="#faculty" class="text-orange">Meet the faculty</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Learning Section -->
    <section class="learning-section" id="learning">
        <div class="container">
            <h2 class="section-heading">
                <span class="text-orange">Learning </span>Outcomes
            </h2>

            <!-- NOTE: draft outcomes from the content doc — SME to approve before publishing -->
            <div class="learning-outcomes-layout">
                <div class="learning-outcomes-left">
                    <img src="assets-new/images/learning-outcomes.jpg" alt="Learning Outcomes" />
                </div>

                <div class="learning-outcomes-right">
                    <ul class="learning-outcomes-list">
                        <p>On completing the programme, learners will be able to:</p>
                        <li><i class="fa-regular fa-square-check"></i><span>Generate and validate a startup idea using design thinking, MVP testing and willingness-to-pay testing.</span></li>
                        <li><i class="fa-regular fa-square-check"></i><span>Build sales, marketing and branding strategies for a new venture.</span></li>
                        <li><i class="fa-regular fa-square-check"></i><span>Use AI and emerging technologies to build and run a business.</span></li>
                        <li><i class="fa-regular fa-square-check"></i><span>Plan finances and raise funds by pitching to VCs and investors.</span></li>
                        <li><i class="fa-regular fa-square-check"></i><span>Lead teams and manage the legal aspects of running a business.</span></li>
                        <li><i class="fa-regular fa-square-check"></i><span>Apply global business insights from the Dubai and China immersions to scale a startup.</span></li>
                    </ul>
                </div>
            </div><!-- /learning-outcomes-layout -->
        </div>
    </section>

    <!-- Learning Roadmap — Idea to Launch -->
    <section class="eai-section pt-0">
        <div class="container">
            <h2 class="section-heading"><span class="text-orange">Learning Roadmap: </span>Idea to Launch</h2>

            <ol class="eai-steps eai-steps-5">
                <li><span class="eai-step-no">1</span><h3>Ideation</h3><p>Generate a startup idea using methods such as design thinking.</p></li>
                <li><span class="eai-step-no">2</span><h3>Validation</h3><p>Validate the idea through MVP testing and customer willingness-to-pay testing.</p></li>
                <li><span class="eai-step-no">3</span><h3>Implementation</h3><p>Take the startup live with a small batch to generate traction.</p></li>
                <li><span class="eai-step-no">4</span><h3>Incubation</h3><p>Improve traction and pitch to investors to scale.</p></li>
                <li><span class="eai-step-no">5</span><h3>Launch</h3><p>Apply learnings from earlier phases to launch all-out in the market.</p></li>
            </ol>

            <div class="eai-info-row">
                <div class="eai-info">
                    <h3>Learning Resources</h3>
                    <p>PPTs, e-books, case studies, guest lectures and community access.</p>
                </div>
                <div class="eai-info">
                    <h3>Tools and AI Platforms Covered</h3>
                    <?php
                    $eai_tools = [
                        ['Claude',                    'claude.webp'],
                        ['ChatGPT',                   'chatgpt.webp'],
                        ['Gemini',                    'gemini.webp'],
                        ['n8n',                       'n8n.webp'],
                        ['Workflow automation tools', ''],   // no single brand → icon + text box
                    ];
                    ?>
                    <div class="eai-tools-wrap">
                        <div class="eai-tools-track">
                            <?php
                            // The list is short, so it is repeated: 3 copies per half, 2 halves.
                            // The track scrolls by -50%, so both halves must be identical for a seamless loop.
                            for ($copy = 0; $copy < 6; $copy++):
                                foreach ($eai_tools as $t):
                            ?>
                            <div class="eai-tool-item<?php echo $t[1] ? ' has-logo' : ''; ?>"<?php echo $copy >= 3 ? ' aria-hidden="true"' : ''; ?>>
                                <?php if ($t[1]): ?>
                                <img src="assets-new/images/entrepreneurship-and-ai/tools/<?php echo $t[1]; ?>" alt="<?php echo $t[0]; ?>" />
                                <?php else: ?>
                                <i class="fa-solid fa-gears" aria-hidden="true"></i><span><?php echo $t[0]; ?></span>
                                <?php endif; ?>
                            </div>
                            <?php
                                endforeach;
                            endfor;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Section: Course Syllabus ── -->
    <section class="pgcs-section" id="curriculum">
        <div class="container">
            <div class="pgcs-bg-wrap">

                <h2 class="pgcs-heading">Course Syllabus</h2>
                <p class="text-white mb-4">The programme carries 60 credits and 280+ learning hours across two semesters.</p>

                <div class="pgcs-stack">

                    <!-- Semester 1 -->
                    <div class="pgcs-card">
                        <div class="pgcs-top">
                            <div class="pgcs-left">
                                <span class="pgcs-tag"><span class="pgcs-tag-inner">Semester 1</span></span>
                                <ul class="pgcs-course-list">
                                    <li>Foundation of Business Management (Credits = 6)</li>
                                    <li>Strategic Management &amp; Business Policy (Credits = 4)</li>
                                    <li>International Immersion – Project (Credits = 6)</li>
                                    <li>Sales, Marketing &amp; Branding (Credits = 8)</li>
                                    <li>Emerging Technologies &amp; Innovation (Credits = 4)</li>
                                </ul>
                            </div>
                            <div class="pgcs-right">
                                <div class="pgcs-right-info">
                                    <img class="pgcs-icon" src="assets-new/images/star-icon.png" alt="star icon" />
                                    <h3 class="pgcs-title">Semester Deliverable</h3>
                                    <p class="pgcs-desc">MVP + Capstone Project</p>
                                </div>
                            </div>
                        </div><!-- /pgcs-top -->
                        <p class="sub-text"><strong>Total Credits 28</strong></p>
                    </div>

                    <!-- Semester 2 -->
                    <div class="pgcs-card">
                        <div class="pgcs-top">
                            <div class="pgcs-left">
                                <span class="pgcs-tag"><span class="pgcs-tag-inner">Semester 2</span></span>
                                <ul class="pgcs-course-list">
                                    <li>Finance &amp; Fundraising (Credits = 4)</li>
                                    <li>Global Business (Credits = 4)</li>
                                    <li>International Immersion – Capstone Project (Credits = 6)</li>
                                    <li>Leadership (Credits = 4)</li>
                                    <li>Team Building (Credits = 4)</li>
                                    <li>Legal Aspects of Business (Credits = 4)</li>
                                    <li>Indian Immersion (Credits = 4)</li>
                                    <li>Megatrends &amp; Design Futures (Credits = 2)</li>
                                </ul>
                            </div>
                            <div class="pgcs-right">
                                <div class="pgcs-right-info">
                                    <img class="pgcs-icon" src="assets-new/images/star-icon.png" alt="star icon">
                                    <h3 class="pgcs-title">Semester Deliverable</h3>
                                    <p class="pgcs-desc">Startup launched + Capstone Project</p>
                                </div>
                            </div>
                        </div><!-- /pgcs-top -->
                        <p class="sub-text"><strong>Total Credits 32</strong></p>
                    </div>

                </div><!-- /pgcs-stack -->

                <p class="sub-text text-light mt-4"><strong>Total Cumulative Credits 60 · Learning hours 280+</strong></p>

                <!-- Assessment & examination details are still pending from the SME — add a .pgcs-note here once received -->

            </div><!-- /pgcs-bg-wrap -->
        </div>
    </section>

    <!-- Capstone + Hands-on -->
    <section class="dms-capstone-section">
        <div class="container">
            <h2 class="section-heading"><span class="text-orange">Capstone Project &amp; </span>Hands-on Learning</h2>

            <div class="eai-info-row">
                <div class="eai-info">
                    <h3>Capstone Project</h3>
                    <p>Learners show what they learnt in the international immersions and how they applied those learnings in their own business.</p>
                </div>
                <div class="eai-info">
                    <h3>Hands-on Learning</h3>
                    <p>30+ projects, assignments and case studies.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════
       FEE STRUCTURE (page-specific values — inline, not the shared pgdm-exe-common-fee-structure.php)
    ════════════════════════════════════════════════ -->
    <section class="fee-structure-section" id="fees">
        <div class="container">
            <h2 class="section-heading"><span>Fee</span> Structure</h2>

            <div class="fs-outer">

                <div class="fs-card">

                    <div class="fs-left">
                        <p>Total programme fee</p>
                        <h3 class="fs-main-amount">INR 8,50,000/-</h3>
                        <p>Academic ₹6,50,000 + International Immersions (Dubai + China) ₹2,00,000</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#eqModal" class="btn-fs-dark">Talk to our expert</a>

                        <div class="fs-scholarship">
                            <h4 class="fs-scholarship-heading">Scholarship</h4>
                            <div class="fs-scholarship-grid">
                                <div class="fs-scholarship-item">
                                    <p class="fs-scholarship-title">Merit-based</p>
                                    <p class="fs-scholarship-desc">up to 50%</p>
                                </div>
                            </div>
                        </div><!-- /fs-scholarship -->
                    </div>

                    <div class="fs-right">
                        <div class="fs-grid">

                            <div class="fs-info-card">
                                <p class="fs-card-label">Payment Options</p>
                                <ul class="fs-fee-list">
                                    <li><strong>Option 1:</strong> 50% before Semester 1 ends · 50% before Semester 2 ends</li>
                                    <li><strong>Option 2:</strong> 100% divided equally across 12 months</li>
                                </ul>
                            </div>

                            <div class="fs-info-card">
                                <p class="fs-card-label">Payment Options</p>
                                <ul class="fs-fee-list">
                                    <li><strong>Option 3:</strong> 25% at the start of the course · 50% by end of Semester 1 · 25% by end of Semester 2</li>
                                </ul>
                            </div>

                            <div class="fs-info-card">
                                <p class="fs-card-label">Course fee – Lumpsum</p>
                                <span class="fs-discount-badge">Up to 10% discount</span>
                                <p class="fs-sub">on the academic fee</p>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#eqModal" class="btn-fs-orange">Enquire Now</a>
                            </div>

                            <div class="fs-info-card">
                                <p class="fs-card-label">EMI Available</p>
                                <ul class="fs-fee-list">
                                    <li>Greyquest</li>
                                    <li>HDFC Credila</li>
                                    <li>Tata Capital</li>
                                </ul>
                                <p class="fs-sub">Tenure 2 to 10 years</p>
                            </div>

                        </div>
                    </div>

                </div><!-- /fs-card -->

                <div class="fs-note-wrap">
                    <div class="pgcs-note">
                        <h3 class="pgcs-note-heading">Note :</h3>
                        <ul class="pgcs-note-list">
                            <li>The total programme fee is INR 8,50,000, with no additional fees.</li>
                        </ul>
                    </div>
                    <div class="faq-list">

                        <div class="faq-item is-open">
                            <button class="faq-q" style="background: white;" aria-expanded="false">
                                <span>Career and Venture Paths</span>
                                <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div class="faq-a" style="background: transparent;">
                                <ul class="ac-list text-dark">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <li>Founder</li>
                                            <li>Entrepreneur</li>
                                            <li>Startup Consultant</li>
                                            <li>Product Lead</li>
                                            <li>VC Analyst</li>
                                        </div>
                                        <div class="col-md-6">
                                            <li>Venture Capitalist</li>
                                            <li>Angel Investor</li>
                                            <li>Startup Leader</li>
                                            <li>Growth Manager</li>
                                        </div>
                                    </div>
                                </ul>
                                <p class="text-dark mb-1"><strong>Career Support:</strong> Mock interviews, LinkedIn personal branding and personality development.</p>
                                <p class="text-dark"><strong>Mentorship and Internships:</strong> Mentorship from industry leaders, plus selective internships with founders for high performers.</p>
                            </div>
                        </div>

                    </div>
                </div><!-- /fs-note-wrap -->

            </div><!-- /fs-outer -->
        </div>
    </section>

    <!-- Certificates Awarded -->
    <section class="eai-section">
        <div class="container">
            <h2 class="section-heading"><span class="text-orange">Certificates </span>Awarded</h2>

            <div class="eai-grid eai-grid-3">
                <div class="eai-card"><i class="fa-solid fa-graduation-cap"></i><h3>PGDM Executive in Entrepreneurship &amp; AI</h3><p>MIT-SDE</p></div>
                <div class="eai-card"><i class="fa-solid fa-certificate"></i><h3>Entrelogy Independent Certificate</h3><p>Entrelogy Business School</p></div>
                <div class="eai-card"><i class="fa-brands fa-google"></i><h3>Google Ads Certificate</h3><p>Google</p></div>
            </div>
        </div>
    </section>

    <!-- Application Process -->
    <section class="eai-section pt-0">
        <div class="container">
            <h2 class="section-heading"><span class="text-orange">Application </span>Process</h2>

            <ol class="eai-steps eai-steps-7">
                <li><span class="eai-step-no">1</span><h3>Enquiry / lead registration</h3></li>
                <li><span class="eai-step-no">2</span><h3>Programme details shared</h3></li>
                <li><span class="eai-step-no">3</span><h3>1:1 interview with the founder</h3></li>
                <li><span class="eai-step-no">4</span><h3>Offer letter issued</h3></li>
                <li><span class="eai-step-no">5</span><h3>Document verification</h3></li>
                <li><span class="eai-step-no">6</span><h3>Deposit payment to confirm admission</h3></li>
                <li><span class="eai-step-no">7</span><h3>Admission confirmed</h3></li>
            </ol>
        </div>
    </section>

    <!-- Why Choose This Programme -->
    <section class="eai-section pt-0">
        <div class="container">
            <h2 class="section-heading"><span class="text-orange">Why Choose </span>This Programme</h2>

            <div class="eai-grid eai-grid-3">
                <div class="eai-card"><i class="fa-solid fa-plane-departure"></i><h3>International immersions in Dubai and China</h3></div>
                <div class="eai-card"><i class="fa-solid fa-tags"></i><h3>Priced almost 50% lower than competing programmes</h3></div>
                <div class="eai-card"><i class="fa-solid fa-hand-holding-dollar"></i><h3>Access to pitch directly to investors</h3></div>
            </div>
        </div>
    </section>

    <!-- Faculty — photos in assets-new/images/entrepreneurship-and-ai/faculty/ (designations not received yet) -->
    <section class="dms-faculty-section" id="faculty">
        <div class="container">
            <h2 class="section-heading"><span class="text-orange">Expert Faculty </span>and Mentors</h2>

            <div class="swiper dms-faculty-swiper">
                <div class="swiper-wrapper">
                    <?php
                    $eai_faculty = [
                        ['Arjun Vaidya',          'https://www.linkedin.com/in/arjunvaidya',                       'Arjun-Vaidya.webp'],
                        ['Vidushi Vijayvergiya',  'https://www.linkedin.com/in/vidushi-vijayvergiya',              'Vidushi-Vijayvergia.webp'],
                        ['Ayush Panchmiya',       'https://www.linkedin.com/in/ayush-panchmiya-445045211',         'Ayush-Panchimya.webp'],
                        ['Mohit Gulati',          'https://www.linkedin.com/in/mg04',                              'Mohit-Gulati.webp'],
                        ['Mangesh Shinde',        'https://www.linkedin.com/in/mangesh-willpowerstar/',            'Mangesh-Shinde.webp'],
                        ['Samruddhi Chhajed',     'https://www.linkedin.com/in/samruddhi-chhajed/',                'Samruddhi-Chajjed.webp'],
                        ['Pranay Gupta',          'https://www.linkedin.com/in/pranay-gupta-a03486b7/',            'Pranay-Gupta.webp'],
                        ['Shashank Verma',        'https://www.linkedin.com/in/shashaankk-verma-764786/',          'Shashank-Verma.webp'],
                        ['Sorabh Bajaj',          'https://www.linkedin.com/in/sorabhbajaj/',                      'Sorabh-Bajaj.webp'],
                        ['Honish Zaveri',         'https://www.linkedin.com/in/honishzaveri',                      'Honish-Zaveri.webp'],
                        ['Mihika Bhanot',         'https://www.linkedin.com/in/mihika-bhanot-2530b6105/',          'Mihika-Bhanot.webp'],
                        ['Akansh Jain',           'https://www.linkedin.com/in/akanshjain/',                       'Akansh-Jain.webp'],
                    ];
                    foreach ($eai_faculty as $f):
                    ?>
                    <div class="swiper-slide">
                        <div class="faculty-card">
                            <img src="assets-new/images/entrepreneurship-and-ai/faculty/<?php echo $f[2]; ?>" alt="<?php echo $f[0]; ?>" loading="lazy" />
                            <h4><?php echo $f[0]; ?></h4>
                            <a href="<?php echo $f[1]; ?>" target="_blank" rel="noopener" aria-label="<?php echo $f[0]; ?> on LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="dms-swiper-nav">
                <button class="dms-swiper-prev dms-faculty-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="dms-swiper-next dms-faculty-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <!-- FAQ — answers taken from facts in the content doc; SME confirmation pending -->
    <section class="faq-section" id="faq">
        <div class="container">
            <h2 class="section-heading">Frequently Asked Questions</h2>
            <div class="faq-list">
                <?php
                $eai_faq = [
                    ['What is the duration of the programme?', '15 months: 9 months of live sessions, a 3-month Capstone Project and 3 months of mentorship.'],
                    ['Who is eligible?', 'Any graduate with at least 1 year of work experience.'],
                    ['How are sessions delivered, and what is the time commitment?', 'Sessions are offline, and the programme needs about 16 hours per week.'],
                    ['Will I get mentor access?', 'Yes. Learners get 1:1 mentoring from industry leaders to help build their startups.'],
                    ['What learning resources are provided?', 'PPTs, e-books, case studies, guest lectures and community access.'],
                    ['What certificates will I receive?', 'The PGDM Executive certificate, an Entrelogy independent certificate and a Google Ads certificate.'],
                    ['What are the career prospects?', 'Founder, entrepreneur, startup consultant, product lead, VC analyst, venture capitalist, angel investor, startup leader or growth manager.'],
                    ['Is EMI or a scholarship available?', 'Yes. EMI is available through Greyquest, HDFC Credila and Tata Capital (2–10 years), and merit-based scholarships go up to 50%.'],
                ];
                foreach ($eai_faq as $i => $q):
                ?>
                <div class="faq-item<?php echo $i === 0 ? ' is-open' : ''; ?>">
                    <button class="faq-q" aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>">
                        <span><?php echo $q[0]; ?></span>
                        <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="faq-a">
                        <p><?php echo $q[1]; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════
       SITE FOOTER
    ════════════════════════════════════════════════ -->
    <?php include "footer-new.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Specialisation pill switcher
        (function () {
            var pills = document.querySelectorAll('.ph-spec-pill');
            pills.forEach(function (pill) {
                pill.addEventListener('click', function () {
                    pills.forEach(function (p) { p.classList.remove('is-active'); });
                    pill.classList.add('is-active');
                });
            });
        })();

        // Faculty carousel
        new Swiper('.dms-faculty-swiper', {
            slidesPerView: 1.2,
            spaceBetween: 16,
            navigation: { nextEl: '.dms-faculty-next', prevEl: '.dms-faculty-prev' },
            breakpoints: {
                0: { slidesPerView: 1.2 },
                576: { slidesPerView: 2.2 },
                992: { slidesPerView: 4 }
            }
        });
    </script>
</body>

</html>
