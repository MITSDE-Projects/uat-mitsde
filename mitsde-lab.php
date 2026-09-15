<?php $pagename = "MITSDE LABs"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>MITSDE LABs — 23 Free Industry Certification Workshops</title>

    <meta name="description" content="MITSDE LABs offers 23 free, industry-expert-led certification workshops across Project Management, Supply Chain, Marketing, HR, Finance and IT — included with every MITSDE program." />
    <meta name="keywords" content="MITSDE LABs, free certification workshops, industry workshops, project management certification, supply chain workshop, MITSDE free courses, distance education workshops" />

    <link rel="canonical" href="https://mitsde.com/mitsde-lab" />

    <meta property="og:title" content="MITSDE LABs — 23 Free Industry Certification Workshops">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/mitsde-lab">
    <meta property="og:description" content="23 free, industry-expert-led certification workshops across 6 specialization tracks. Included with every MITSDE program.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://mitsde.com/assets-new/images/banner/mitsde-labs.webp">

    <link rel="icon" type="image/png" href="assets-new/images/favicon-mit.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css-new/styles.css" />
    <link rel="stylesheet" href="css-new/intlTelInput.css">

    <style>
    /* ── MITSDE LABs page — all rules scoped to .lab-page ── */
    .lab-page {
        --lab-navy: #111827;
        --lab-navy-deep: #0d1117;
        --lab-teal: #ea580c;
        --lab-teal-tint: #fef3ee;
        --lab-gold: #f97316;
        --lab-gold-tint: #fff7ed;
        --lab-paper: #fdf8f5;
        --lab-paper-2: #f5f0eb;
        --lab-ink: #111827;
        --lab-ink-soft: #6b7280;
        --lab-line: #e5e7eb;
        --lab-line-strong: #d1d5db;
        --lab-radius: 14px;
        /* per-track colours */
        --pm: #14284B;  --pm-tint: #e7eaf1;
        --scm: #c2410c; --scm-tint: #fef3ee;
        --mkt: #b45309; --mkt-tint: #fef9ee;
        --hr: #6E5A8C;  --hr-tint: #efeaf4;
        --fin: #1D5C6E; --fin-tint: #e4eef0;
        --it: #A15A3A;  --it-tint: #f3e9e2;

        font-family: 'SF Pro Display', sans-serif;
        color: var(--lab-ink);
        line-height: 1.55;
    }
    .lab-page *, .lab-page *::before, .lab-page *::after { box-sizing: border-box; }
    .lab-page ul { list-style: none; padding: 0; margin: 0; }
    .lab-page a { color: inherit; }
    .lab-page h1,.lab-page h2,.lab-page h3,.lab-page h4 { letter-spacing: -0.01em; color: var(--lab-navy); }

    .lab-wrap { max-width: 1180px; margin: 0 auto; padding: 0 28px; }

    .ge-section-eyebrow { font-size: 11px; color: #6b7280; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 12px; }

    .lab-section { padding: 80px 0; background: var(--lab-paper); }
    .lab-section-alt { background: var(--lab-paper-2); }

    /* BUTTONS */
    .lab-btn {
        display: inline-flex; align-items: center; gap: 8px; padding: 12px 22px; border-radius: 999px;
        font-weight: 600; font-size: 14px; border: 1.5px solid transparent;
        transition: transform .15s ease, box-shadow .15s ease; text-decoration: none; white-space: nowrap; cursor: pointer;
        font-family: inherit;
    }
    .lab-btn:hover { transform: translateY(-2px); }
    .lab-btn-primary { background: var(--lab-teal); color: #fff !important; box-shadow: 0 5px 0 0 #9a3412; }
    .lab-btn-primary:hover { box-shadow: 0 7px 0 0 #9a3412; }
    .lab-btn-primary:active { transform: translateY(2px); box-shadow: 0 2px 0 0 #9a3412; }
    .lab-btn-outline { border-color: #000; color: #000000 !important; background: transparent; }
    .lab-btn-outline.dark { border-color: var(--lab-navy); color: var(--lab-navy) !important; }
    .lab-btn-outline:hover { background: rgba(255,255,255,.1); }
    .lab-btn-outline.dark:hover { background: rgba(17,24,39,.06); }
    .lab-btn-block { width: 100%; justify-content: center; }


    /* ── STATS BAR ── */
    .program-feature p { margin-bottom: 0; margin-top: 4px; }

    /* ICON GRID */
    .lab-icon-grid { display: grid; grid-template-columns: repeat(5,1fr); gap: 16px; }
    .lab-icon-card {
        background: #fff; border: 1px solid var(--lab-line); border-radius: var(--lab-radius); padding: 20px 16px;
        transition: transform .15s, box-shadow .15s;
    }
    .lab-icon-card:hover { transform: translateY(-4px); box-shadow: 0 12px 26px rgba(17,24,39,.08); }
    .lab-ic { width: 34px; height: 34px; margin-bottom: 12px; }
    .lab-icon-card h4 { font-size: 14px; margin-bottom: 5px; color: var(--lab-navy); }
    .lab-icon-card p { font-size: 13px; color: var(--lab-ink-soft); margin: 0; }
    @media (max-width: 960px) { .lab-icon-grid { grid-template-columns: repeat(2,1fr); } }
    @media (max-width: 560px) { .lab-icon-grid { grid-template-columns: 1fr; } }


    /* TOOLS STRIP */
    .lab-tools-strip { padding: 38px 0; overflow: hidden; }
    .lab-tools-track { display: flex; gap: 12px; width: max-content; animation: labScroll 32s linear infinite; }
    .lab-tools-strip:hover .lab-tools-track { animation-play-state: paused; }
    @keyframes labScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }
    .lab-tool-chip { font-size: 12px; padding: 8px 15px; border-radius: 999px; white-space: nowrap; background: #ffc6ae; }

    /* GATES */
    .lab-gates { display: grid; grid-template-columns: repeat(3,1fr); gap: 3rem; }
    .lab-gate {
        border: 1px solid #000; border-radius: 10px; padding: 14px; padding-top: 12px;
        background: #fff; display: flex; flex-direction: column; transition: transform .4s, box-shadow .4s;
    }
    .lab-gate:hover { transform: translateY(-8px); box-shadow: 0 15px 40px rgba(0,0,0,.15); }
    .lab-gate-id { font-size: 10px; letter-spacing: .08em; color: var(--lab-ink-soft); margin-bottom: 10px; }
    .lab-gate-img { position: relative; border-radius: 8px; overflow: hidden; margin-bottom: 12px; }
    .lab-gate-img img { width: 100%; height: 160px; object-fit: cover; display: block; }
    .lab-gate-img::after { content: ""; position: absolute; inset: 0; background: linear-gradient(135deg, rgba(255, 198, 174, 0.54), rgba(255, 109, 47, 0.3)); }
    .lab-gate h4 { color: var(--lab-navy); font-size: 15px; font-weight: 800; margin: 0 0 10px; }
    .lab-count-pill { align-self: flex-start; font-size: 12px; color: var(--text-dark); background: #eceef1; padding: 4px 12px; border-radius: 20px; }
    @media (max-width: 991px) {
         .lab-gates { grid-template-columns: repeat(2,1fr); gap:2rem; }
         .lab-gate-img img { height: 150px; }
        }
    @media (max-width: 554px) {
        .lab-gates { grid-template-columns: repeat(1,1fr); gap: 1rem; }
        .lab-gate-img img { height: 140px; }
    }

    /* WORKSHOPS */
    .lab-filter-bar { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 28px; }

    .lab-flagship-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 20px; margin-bottom: 44px; }
    .lab-flagship { background: #fff; border-radius: var(--lab-radius); overflow: hidden; border: 1px solid var(--lab-line); box-shadow: 0 8px 20px rgba(17,24,39,.05); }
    .lab-flagship-top { padding: 17px 19px 13px; border-bottom: 2px dashed var(--lab-line-strong); position: relative; }
    .lab-flagship-top::before,.lab-flagship-top::after {
        content: ""; width: 18px; height: 18px; background: var(--lab-paper-2); border-radius: 50%; position: absolute; bottom: -10px;
    }
    .lab-flagship-top::before { left: -9px; }
    .lab-flagship-top::after { right: -9px; }
    .lab-tag {
        display: inline-block; font-size: 10px; letter-spacing: .08em;
        text-transform: uppercase; padding: 3px 9px; border-radius: 6px; font-weight: 600; margin-bottom: 8px;
    }
    .lab-flagship-top h4 { font-size: 16px; margin-bottom: 4px; color: var(--lab-navy); }
    .lab-meta { font-size: 11.5px; color: var(--lab-ink-soft); }
    .lab-flagship-body { padding: 15px 19px 20px; }
    .lab-flagship-body dt { font-size: 10px; text-transform: uppercase; letter-spacing: .08em; color: var(--lab-teal); margin-top: 10px; }
    .lab-flagship-body dt:first-child { margin-top: 0; }
    .lab-flagship-body dd { font-size: 13px; color: var(--lab-ink-soft); margin-top: 3px; }

    .lab-grid-cards { display: grid; grid-template-columns: repeat(3,1fr); gap: 13px; }
    .lab-stub-card { background: #fff; border: 1px solid var(--lab-line); border-radius: 12px; padding: 13px 15px; display: flex; flex-direction: column; gap: 6px; }
    .lab-stub-card h5 { font-size: 13.5px; color: var(--lab-navy); line-height: 1.3; margin: 0; }
    .lab-stub-meta { font-size: 11px; color: var(--lab-ink-soft); }
    @media (max-width: 960px) { .lab-flagship-grid { grid-template-columns: 1fr 1fr; } .lab-grid-cards { grid-template-columns: 1fr 1fr; } }
    @media (max-width: 640px) { .lab-flagship-grid { grid-template-columns: 1fr; } .lab-grid-cards { grid-template-columns: 1fr; } }

    /* FACULTY */
    .lab-faculty-note { font-size: 13px; color: var(--lab-ink-soft); background: var(--lab-gold-tint); border: 1px dashed var(--lab-line-strong); padding: 10px 14px; border-radius: 10px; margin-bottom: 22px; }
    .lab-faculty-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 18px; }
    .lab-faculty-card { background: #fff; border: 1px solid var(--lab-line); border-radius: var(--lab-radius); padding: 20px; text-align: center; }
    .lab-faculty-avatar {
        width: 58px; height: 58px; border-radius: 50%; margin: 0 auto 12px;
        background: linear-gradient(135deg, var(--lab-navy), var(--lab-teal));
        display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 600; font-size: 17px;
    }
    .lab-faculty-card h4 { font-size: 14px; margin-bottom: 2px; }
    .lab-role { font-size: 12px; color: var(--lab-teal); font-weight: 600; margin-bottom: 5px; }
    .lab-faculty-card p { font-size: 12px; color: var(--lab-ink-soft); margin: 0; }
    @media (max-width: 900px) { .lab-faculty-grid { grid-template-columns: repeat(2,1fr); } }
    @media (max-width: 560px) { .lab-faculty-grid { grid-template-columns: 1fr; } }

    /* PROCESS */
    .lab-process { display: flex; gap: 0; align-items: stretch; position: relative; }
    .lab-process::before { content: ""; position: absolute; top: 26px; left: 26px; right: 26px; height: 2px; background: repeating-linear-gradient(90deg, var(--lab-line-strong) 0 8px, transparent 8px 14px); z-index: 0; }
    .lab-process-step { flex: 1; text-align: center; position: relative; z-index: 1; padding: 0 8px; }
    .lab-circle { width: 52px; height: 52px; border-radius: 50%; background: var(--lab-gold); color: #fff; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px; font-weight: 600; }
    .lab-process-step h4 { font-size: 14px; margin-bottom: 5px; }
    .lab-process-step p { font-size: 12.5px; color: var(--lab-ink-soft); margin: 0; }
    @media (max-width: 900px) { .lab-process { flex-direction: column; gap: 22px; } .lab-process::before { display: none; } }

    /* SOFTWARE */
    .lab-chip-cloud { display: flex; flex-wrap: wrap; gap: 9px; }
    .lab-chip { border: 1px solid var(--lab-line-strong); padding: 7px 13px; border-radius: 18px; font-size: 13px; background: #ffc6ae; }

    /* JOURNEY */
    .lab-journey { display: flex; flex-direction: column; }
    .lab-journey-step { display: grid; grid-template-columns: 80px 1fr; gap: 18px; position: relative; padding-bottom: 28px; }
    .lab-journey-step:last-child { padding-bottom: 0; }
    .lab-journey-step::before { content: ""; position: absolute; left: 39px; top: 44px; bottom: 0; width: 2px; background: var(--lab-line-strong); }
    .lab-journey-step:last-child::before { display: none; }
    .lab-journey-num { width: 80px; height: 80px; border-radius: 50%; background: #fff; border: 2px solid var(--lab-navy); display: flex; align-items: center; justify-content: center; font-weight: 600; color: var(--lab-navy); font-size: 20px; position: relative; z-index: 1; flex-shrink: 0; }
    .lab-journey-text { padding-top: 12px; }
    .lab-stage { font-size: 10px; letter-spacing: .1em; text-transform: uppercase; color: var(--lab-teal); margin-bottom: 4px; }
    .lab-journey-text h4 { font-size: 16px; margin-bottom: 4px; }
    .lab-journey-text p { font-size: 13.5px; color: var(--lab-ink-soft); max-width: 540px; margin: 0; }

    /* CERTIFICATE */
    .lab-cert-wrap { display: grid; grid-template-columns: 1fr 1fr; gap: 44px; align-items: center; }
    .lab-cert-mock { background: #fff; border: 3px solid var(--lab-gold); border-radius: 10px; padding: 28px 24px; position: relative; box-shadow: 0 16px 32px rgba(17,24,39,.1); }
    .lab-cert-mock::before { content: ""; position: absolute; inset: 9px; border: 1px solid var(--lab-gold-tint); border-radius: 6px; pointer-events: none; }
    .lab-cm-eyebrow { font-size: 10px; letter-spacing: .14em; color: var(--lab-gold); text-transform: uppercase; text-align: center; }
    .lab-cert-mock h3 { text-align: center; font-size: 20px; margin: 11px 0 5px; }
    .lab-cm-name { text-align: center; font-size: 17px; color: var(--lab-teal); border-bottom: 1px solid var(--lab-line); display: block; padding: 0 20px 5px; margin: 8px auto; font-weight: 600; }
    .lab-cm-body { text-align: center; font-size: 12px; color: var(--lab-ink-soft); margin-bottom: 14px; }
    .lab-cm-foot { display: flex; justify-content: space-between; font-size: 10px; color: var(--lab-ink-soft); border-top: 1px dashed var(--lab-line-strong); padding-top: 9px; }
    .lab-cert-list { list-style: none; padding: 0; margin: 0; }
    .lab-cert-list li { display: flex; gap: 10px; padding: 10px 0; border-bottom: 1px solid var(--lab-line); font-size: 14px; }
    .lab-cert-list li:last-child { border-bottom: none; }
    .lab-ck { color: var(--lab-teal); font-weight: 700; flex-shrink: 0; }
    @media (max-width: 900px) { .lab-cert-wrap { grid-template-columns: 1fr; } }

    /* TESTIMONIALS */
    .lab-testi-track { display: flex; gap: 18px; overflow-x: auto; scroll-snap-type: x mandatory; padding-bottom: 6px; scrollbar-width: none; }
    .lab-testi-track::-webkit-scrollbar { display: none; }
    .lab-testi-card { min-width: 300px; scroll-snap-align: start; background: #fff; border: 1px solid var(--lab-line); border-radius: var(--lab-radius); padding: 22px 20px; position:relative; }
    .lab-stars { color: var(--lab-gold); letter-spacing: 2px; margin-bottom: 10px; }
    .lab-quote { font-size: 14px; color: var(--lab-ink); margin-bottom: 15px; min-height: 84px; }
    .lab-testi-who { display: flex; align-items: center; gap: 10px; }
    .lab-testi-avatar { width: 36px; height: 36px; border-radius: 50%; background: var(--lab-teal-tint); color: var(--lab-teal); display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 13px; }
    .lab-testi-who strong { display: block; font-size: 13px; }
    .lab-testi-who span { font-size: 11px; color: var(--lab-ink-soft); }
    .lab-testi-controls { display: flex; gap: 8px; margin-top: 14px; }
    .lab-testi-controls button { width: 36px; height: 36px; border-radius: 50%; border: 1.5px solid var(--lab-line-strong); background: #fff; font-size: 15px; cursor: pointer; }
    .lab-testi-controls button:hover { border-color: var(--lab-teal); color: var(--lab-teal); }

    /* LAB FAQ: reuses global .faq-list/.faq-item/.faq-q/.faq-a/.faq-chevron — only a 2-column split is page-specific */
    .lab-faq-cols { display: block; columns: 2; column-gap: 44px; }
    .lab-faq-cols .faq-item { break-inside: avoid; margin-bottom: 0.55rem; }
    @media (max-width: 800px) { .lab-faq-cols { columns: 1; } }

    /* CTA */
    .lab-cta-section { background: #ffcbad91; color: #fff; position: relative; overflow: hidden; padding: 80px 0; }
    .lab-cta-section::before { content: ""; position: absolute; inset: 0; background: radial-gradient(circle at 12% 20%, rgba(234,88,12,.4), transparent 40%),radial-gradient(circle at 90% 75%, rgba(249,115,22,.8), transparent 45%); }
    .lab-cta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; position: relative; }
    .lab-cta-copy h2 { color: #fff; font-size: clamp(22px,3vw,34px); margin-bottom: 12px; }
    .lab-cta-copy p { color: #000; margin-bottom: 20px; font-size: 15px; }
    .lab-cta-copy .lab-btn { margin-right: 8px; margin-bottom: 8px; }
    .lab-cta-form { background: #fff; border-radius: 16px; padding: 26px; color: var(--lab-ink); }
    .lab-cta-form h4 { margin-bottom: 2px; font-size: 16px; color: var(--lab-navy); }
    .lab-sub-txt { font-size: 12px; color: var(--lab-ink-soft); margin-bottom: 16px; }
    .lab-field { margin-bottom: 11px; }
    .lab-field label { display: block; font-size: 11px; font-weight: 600; margin-bottom: 4px; color: var(--lab-ink-soft); }
    .lab-field input,.lab-field select { width: 100%; padding: 9px 11px; border: 1.5px solid var(--lab-line); border-radius: 8px; font-family: inherit; font-size: 13.5px; }
    .lab-field input:focus,.lab-field select:focus { outline: 2px solid var(--lab-teal); border-color: var(--lab-teal); }
    .lab-consent { display: flex; gap: 7px; align-items: flex-start; font-size: 11px; color: var(--lab-ink-soft); margin: 11px 0 14px; }
    .lab-confirm { display: none; margin-top: 9px; font-size: 12px; color: var(--lab-teal); font-weight: 600; }
    @media (max-width: 900px) { .lab-cta-grid { grid-template-columns: 1fr; } }
    </style>

<?php include "5-common-seo-tag-1.php" ?>
</head>

<body>
<?php include "5-common-seo-tag-2.php" ?>
<?php include "header-new.php" ?>

<div class="lab-page">

<!-- ═══════════════════════════ HERO ═══════════════════════════ -->
<section class="hero ph-hero">

    <nav class="page-breadcrumb" aria-label="Breadcrumb">
        <span class="pb-line"></span>
        <a href="./">Home</a>
        <span class="pb-sep">/</span>
        <span class="pb-current">MITSDE LABs</span>
    </nav>

    <div class="container">
        <div class="ph-layout">
            <div class="ph-left">
                <img src="assets-new/images/logos/labs-logo.webp" class="mt-3" alt="MITSDE LABs — Skills Bhi, Degree Bhi, Job Bhi" />
                <h1 class="ph-heading mb-1">Skills Bhi, Degree Bhi, Job Bhi.</h1>
                <div class="ph-sub">
                    <p style="max-width: 500px;">23 free, industry-expert-led certification workshops across Project Management, Supply Chain, Marketing, HR, Finance &amp; IT. One day. One weekend. Real tools, real skills, real certificate - at zero cost.</p>
                </div>
                <!-- <div class="d-flex flex-column justify-content-center align-items-center">
                    <img src="assets-new/images/logos/synergy-sphere-logo.webp" style="width: 250px;" alt="SynergySphere — Uniting Minds For Collective Success" />
                    <a href="https://forms.gle/KY7s8xsjFGJ4mZm69" target="_blank" rel="noopener" class="btn-fs-orange mt-3">Register Now</a>
                </div> -->
            </div>

            <div class="ph-right">
                <img src="assets-new/images/banner/mitsde-labs.webp" alt="MITSDE LABs — Skills Bhi, Degree Bhi, Job Bhi" />
            </div>
        </div><!-- /ph-layout -->

    </div>
</section>

<!-- ═══════════════════════════ STATS BAR ═══════════════════════════ -->
<section class="cib-section">
    <div class="container">
        <div class="enquiry-bar" style="max-width:950px;margin:0 auto;">
            <ul class="program-details">
                <li>
                    <div class="program-feature">
                        <span>23</span>
                        <p>Industry LAB<br> Workshops</p>
                    </div>
                </li>
                <li>
                    <div class="program-feature">
                        <span>6</span>
                        <p>Specialization<br> Tracks</p>
                    </div>
                </li>
                <li>
                    <div class="program-feature">
                        <span>INR 1,00,000</span>
                        <p>Certification<br> Value - Free</p>
                    </div>
                </li>
                <li>
                    <div class="program-feature">
                        <span>4.8 / 5</span>
                        <p>Google Rating -<br> 8,000+ Reviews</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- ═══════════════════════════ WHAT ═══════════════════════════ -->
<section id="lab-what">
    <div class="lab-wrap">
        <p class="ge-section-eyebrow">What are MITSDE LABs</p>
        <h2 class="section-heading">One weekend. Five things baked into every workshop.</h2>
        <p class="mb-4"><b>A series of one-day, weekend certification workshops built to sit alongside your academic curriculum &mdash; not compete with it. Every MITSDE learner is eligible, no exceptions.</b></p>
        <div class="lab-icon-grid">
            <div class="lab-icon-card">
                <svg class="lab-ic" viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg>
                <h4>100% Free</h4>
                <p>Certifications worth up to &#8377;1,00,000 in the open market, at zero cost to you.</p>
            </div>
            <div class="lab-icon-card">
                <svg class="lab-ic" viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="1.8"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 3v3M16 3v3"/></svg>
                <h4>Weekend-Only</h4>
                <p>Every session runs on a Saturday or Sunday &mdash; zero disruption to weekday classes or work.</p>
            </div>
            <div class="lab-icon-card">
                <svg class="lab-ic" viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="1.8"><path d="M4 20V10l8-6 8 6v10"/><path d="M9 20v-6h6v6"/></svg>
                <h4>Hands-On</h4>
                <p>Live practice on the same tools employers use &mdash; not slides, the actual software.</p>
            </div>
            <div class="lab-icon-card">
                <svg class="lab-ic" viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="1.8"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 4-6 8-6s8 2 8 6"/></svg>
                <h4>Expert-Led</h4>
                <p>Taught by practising industry professionals with 10+ years of real-world experience.</p>
            </div>
            <div class="lab-icon-card">
                <svg class="lab-ic" viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="1.8"><path d="M12 2l2.9 6 6.6.6-5 4.4 1.5 6.4L12 16.8 6 19.4l1.5-6.4-5-4.4 6.6-.6z"/></svg>
                <h4>Certified</h4>
                <p>Same-day assessment, no separate exam &mdash; walk away with a Certificate of Participation.</p>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════ WHY ═══════════════════════════ -->
<section>
    <div class="lab-wrap">
        <p class="ge-section-eyebrow">Why MITSDE LABs</p>
        <h2 class="section-heading">Four value pillars, zero fine print.</h2>
        <p class="mb-4"><b>No separate exam. No extra fees. Just one focused day that adds a recognised, practical skill to your profile.</b></p>
        <div class="eligibility-grid">
            <div class="eligibility-card">
                <span class="eligibility-tag">Zero Cost</span>
                <p>Every one of the 23 workshops is included free with your MITSDE program &mdash; no hidden charges.</p>
            </div>
            <div class="eligibility-card">
                <span class="eligibility-tag" style="background: #FFF5DE;">Industry Experts</span>
                <p>Practitioners, not just professors &mdash; faculty who use these tools in their day job.</p>
            </div>
            <div class="eligibility-card">
                <span class="eligibility-tag">Real Tools</span>
                <p>Oracle Primavera, Jira, Power BI and more &mdash; the same software listed on job descriptions.</p>
            </div>
            <div class="eligibility-card">
                <span class="eligibility-tag" style="background: #FFF5DE;">Career-Ready Skills</span>
                <p>Skills mapped directly to roles recruiters are hiring for right now.</p>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════ TOOLS STRIP ═══════════════════════════ -->
<div class="lab-tools-strip pt-0">
    <div class="lab-tools-track" id="labToolsTrack">
        <div class="lab-tool-chip">MS Project</div>
        <div class="lab-tool-chip">Jira</div>
        <div class="lab-tool-chip">Oracle Primavera P6</div>
        <div class="lab-tool-chip">Power BI</div>
        <div class="lab-tool-chip">Excel Solver</div>
        <div class="lab-tool-chip">Meta Business Suite</div>
        <div class="lab-tool-chip">Google Analytics</div>
        <div class="lab-tool-chip">HRIS/HRMS</div>
        <div class="lab-tool-chip">Digital Banking</div>
        <div class="lab-tool-chip">Cybersecurity Frameworks</div>
        <div class="lab-tool-chip">Bloomberg Terminals</div>
        <div class="lab-tool-chip">Canva</div>
        <div class="lab-tool-chip">MS Project</div>
        <div class="lab-tool-chip">Jira</div>
        <div class="lab-tool-chip">Oracle Primavera P6</div>
        <div class="lab-tool-chip">Power BI</div>
        <div class="lab-tool-chip">Excel Solver</div>
        <div class="lab-tool-chip">Meta Business Suite</div>
        <div class="lab-tool-chip">Google Analytics</div>
        <div class="lab-tool-chip">HRIS/HRMS</div>
        <div class="lab-tool-chip">Digital Banking</div>
        <div class="lab-tool-chip">Cybersecurity Frameworks</div>
        <div class="lab-tool-chip">Bloomberg Terminals</div>
        <div class="lab-tool-chip">Canva</div>
    </div>
</div>

<!-- ═══════════════════════════ ROADMAP ═══════════════════════════ -->
<section>
    <div class="lab-wrap">
        <p class="ge-section-eyebrow">C15 LABs Workshop Roadmap</p>
        <h2 class="section-heading">23 workshops, 6 specialization tracks.</h2>
        <p class="mb-4"><b>The current C15 batch spans Semesters 1&ndash;4 and six specialization tracks. Pick the gate that matches where you&rsquo;re headed.</b></p>
        <div class="lab-gates">
            <div class="lab-gate">
                <div class="lab-gate-id">GATE · PM</div>
                <div class="lab-gate-img"><img src="assets-new/images/programs/Project-Management.webp" alt="Project Management" /></div>
                <h4>Project Management</h4>
                <span class="lab-count-pill">6 workshops</span>
            </div>
            <div class="lab-gate">
                <div class="lab-gate-id">GATE · SCM</div>
                <div class="lab-gate-img"><img src="assets-new/images/programs/Supply-Chain-&-Logistics.webp" alt="Supply Chain &amp; Logistics" /></div>
                <h4>Supply Chain &amp; Logistics</h4>
                <span class="lab-count-pill">5 workshops</span>
            </div>
            <div class="lab-gate">
                <div class="lab-gate-id">GATE · MKT</div>
                <div class="lab-gate-img"><img src="assets-new/images/programs/Marketing-&-Digital.webp" alt="Marketing &amp; Digital" /></div>
                <h4>Marketing &amp; Digital</h4>
                <span class="lab-count-pill">7 workshops</span>
            </div>
            <div class="lab-gate">
                <div class="lab-gate-id">GATE · HR</div>
                <div class="lab-gate-img"><img src="assets-new/images/programs/Human-Resources.webp" alt="Human Resources" /></div>
                <h4>Human Resources</h4>
                <span class="lab-count-pill">2 workshops</span>
            </div>
            <div class="lab-gate">
                <div class="lab-gate-id">GATE · FIN</div>
                <div class="lab-gate-img"><img src="assets-new/images/programs/Finance-&-Investment.webp" alt="Finance &amp; Investment" /></div>
                <h4>Finance &amp; Investment</h4>
                <span class="lab-count-pill">2 workshops</span>
            </div>
            <div class="lab-gate">
                <div class="lab-gate-id">GATE · IT</div>
                <div class="lab-gate-img"><img src="assets-new/images/programs/Information-Technology.webp" alt="Information Technology" /></div>
                <h4>Information Technology</h4>
                <span class="lab-count-pill">1 workshops</span>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════ WORKSHOPS ═══════════════════════════ -->
<section id="lab-workshops">
    <div class="lab-wrap">
        <p class="ge-section-eyebrow">Workshop Details</p>
        <h2 class="section-heading">Explore all 23 current MITSDE LABs workshops.</h2>
        <p class="mb-4"><b>Filter by track to find the workshop most relevant to your career goals. Each card shows the software you&rsquo;ll use, the level, and the role it prepares you for.</b></p>
        <h3 style="font-size:14px;margin-bottom:16px;color:var(--lab-ink-soft);letter-spacing:.04em;">FLAGSHIP WORKSHOPS</h3>
        <div class="lab-flagship-grid" id="labFlagshipGrid">
            <div class="lab-flagship">
                <div class="lab-flagship-top">
                    <span class="lab-tag" style="background:var(--pm-tint);color:var(--pm)">Project Management</span>
                    <h4>Oracle Primavera</h4>
                    <div class="lab-meta">Oracle Primavera P6 · Advanced · 1-Day Weekend</div>
                </div>
                <div class="lab-flagship-body">
                    <dt>Learning Outcome</dt><dd>Plan, schedule and control large infrastructure and construction projects using Primavera P6.</dd>
                    <dt>Industry Use Case</dt><dd>Used in 70%+ of global infrastructure and construction projects for scheduling and planning (Oracle, 2024).</dd>
                    <dt>Career Benefit</dt><dd>Planning Engineer, Project Scheduler, Construction PM — market rate for external certification: ₹20,000–50,000.</dd>
                </div>
            </div>
            <div class="lab-flagship">
                <div class="lab-flagship-top">
                    <span class="lab-tag" style="background:var(--pm-tint);color:var(--pm)">Project Management</span>
                    <h4>Essentials of Agile Project Management</h4>
                    <div class="lab-meta">Jira, Scrum/Kanban boards · Intermediate · 1-Day Weekend</div>
                </div>
                <div class="lab-flagship-body">
                    <dt>Learning Outcome</dt><dd>Apply Agile/Scrum ceremonies, sprint planning and backlog management to real projects.</dd>
                    <dt>Industry Use Case</dt><dd>Adopted by 71% of global companies to manage change and accelerate delivery (PMI, 2023).</dd>
                    <dt>Career Benefit</dt><dd>Scrum Master, Agile Coach, IT Project Manager — market rate for external certification: ₹25,000–50,000.</dd>
                </div>
            </div>
            <div class="lab-flagship">
                <div class="lab-flagship-top">
                    <span class="lab-tag" style="background:var(--pm-tint);color:var(--pm)">Project Management</span>
                    <h4>Microsoft Project & Jira</h4>
                    <div class="lab-meta">MS Project, Jira · Intermediate · 1-Day Weekend</div>
                </div>
                <div class="lab-flagship-body">
                    <dt>Learning Outcome</dt><dd>Build Gantt charts, manage resources and track tasks across two leading PM tools.</dd>
                    <dt>Industry Use Case</dt><dd>Trusted by 45% of Fortune 500 firms for task tracking and collaboration (Gartner, 2024).</dd>
                    <dt>Career Benefit</dt><dd>Project Coordinator, PMO Analyst — market rate for external certification: ₹10,000–30,000.</dd>
                </div>
            </div>
            <div class="lab-flagship">
                <div class="lab-flagship-top">
                    <span class="lab-tag" style="background:var(--pm-tint);color:var(--pm)">Project Management</span>
                    <h4>Operations Research</h4>
                    <div class="lab-meta">Excel Solver, Linear Programming tools · Advanced · 1-Day Weekend</div>
                </div>
                <div class="lab-flagship-body">
                    <dt>Learning Outcome</dt><dd>Use quantitative optimisation techniques to solve real operational decision problems.</dd>
                    <dt>Industry Use Case</dt><dd>Analytics-driven roles have grown 35% (LinkedIn, 2024).</dd>
                    <dt>Career Benefit</dt><dd>Operations Analyst, Business Consultant — market rate for external certification: ₹5,000–25,000.</dd>
                </div>
            </div>
            <div class="lab-flagship">
                <div class="lab-flagship-top">
                    <span class="lab-tag" style="background:var(--scm-tint);color:var(--scm)">Supply Chain & Logistics</span>
                    <h4>Supply Chain Analytics</h4>
                    <div class="lab-meta">Excel, Power BI · Advanced · 1-Day Weekend</div>
                </div>
                <div class="lab-flagship-body">
                    <dt>Learning Outcome</dt><dd>Translate SCM data into dashboards and decisions using analytics tools.</dd>
                    <dt>Industry Use Case</dt><dd>Among the top 10 tech careers globally, with 12% salary CAGR (McKinsey, 2024).</dd>
                    <dt>Career Benefit</dt><dd>Supply Chain Analyst — market rate for external certification: ₹8,000–35,000.</dd>
                </div>
            </div>
            <div class="lab-flagship">
                <div class="lab-flagship-top">
                    <span class="lab-tag" style="background:var(--scm-tint);color:var(--scm)">Supply Chain & Logistics</span>
                    <h4>Introduction to Logistics & SCM</h4>
                    <div class="lab-meta">SCM digital platforms, Excel · Foundation · 1-Day Weekend</div>
                </div>
                <div class="lab-flagship-body">
                    <dt>Learning Outcome</dt><dd>Understand end-to-end SCM integration and the trends reshaping global logistics post-pandemic.</dd>
                    <dt>Industry Use Case</dt><dd>A 28% surge in supply-chain jobs needing integration skills was recorded post-COVID (World Bank, 2024).</dd>
                    <dt>Career Benefit</dt><dd>SCM Integration Manager — market rate for external certification: ₹15,000–40,000.</dd>
                </div>
            </div>
        </div>
        <h3 style="font-size:14px;margin:6px 0 16px;color:var(--lab-ink-soft);letter-spacing:.04em;">FULL C15 CATALOGUE</h3>
        <div class="lab-filter-bar" id="labFilterBar">
            <button class="ph-spec-pill is-active" data-k="all">All Tracks (23)</button>
            <button class="ph-spec-pill" data-k="pm">Project Management (6)</button>
            <button class="ph-spec-pill" data-k="scm">Supply Chain & Logistics (5)</button>
            <button class="ph-spec-pill" data-k="mkt">Marketing & Digital (7)</button>
            <button class="ph-spec-pill" data-k="hr">Human Resources (2)</button>
            <button class="ph-spec-pill" data-k="fin">Finance & Investment (2)</button>
            <button class="ph-spec-pill" data-k="it">Information Technology (1)</button>
        </div>
        <div class="lab-grid-cards" id="labWorkshopGrid">
            <div class="lab-stub-card" data-track="pm">
                <span class="lab-tag" style="background:var(--pm-tint);color:var(--pm)">Project Management</span>
                <h5>Oracle Primavera ★</h5>
                <div class="lab-stub-meta">Oracle Primavera P6</div>
                <div class="lab-stub-meta">Advanced · Planning Engineer / Project Scheduler</div>
            </div>
            <div class="lab-stub-card" data-track="pm">
                <span class="lab-tag" style="background:var(--pm-tint);color:var(--pm)">Project Management</span>
                <h5>Essentials of Agile Project Management ★</h5>
                <div class="lab-stub-meta">Jira, Scrum/Kanban boards</div>
                <div class="lab-stub-meta">Intermediate · Scrum Master / Agile Coach</div>
            </div>
            <div class="lab-stub-card" data-track="pm">
                <span class="lab-tag" style="background:var(--pm-tint);color:var(--pm)">Project Management</span>
                <h5>Microsoft Project & Jira ★</h5>
                <div class="lab-stub-meta">MS Project, Jira</div>
                <div class="lab-stub-meta">Intermediate · Project Coordinator / PMO Analyst</div>
            </div>
            <div class="lab-stub-card" data-track="pm">
                <span class="lab-tag" style="background:var(--pm-tint);color:var(--pm)">Project Management</span>
                <h5>Operations Research ★</h5>
                <div class="lab-stub-meta">Excel Solver, Linear Programming tools</div>
                <div class="lab-stub-meta">Advanced · Operations Analyst / Consultant</div>
            </div>
            <div class="lab-stub-card" data-track="pm">
                <span class="lab-tag" style="background:var(--pm-tint);color:var(--pm)">Project Management</span>
                <h5>Managerial Communication</h5>
                <div class="lab-stub-meta">MS Office, Role-play Simulators</div>
                <div class="lab-stub-meta">Foundation · Team Lead / Manager (all functions)</div>
            </div>
            <div class="lab-stub-card" data-track="pm">
                <span class="lab-tag" style="background:var(--pm-tint);color:var(--pm)">Project Management</span>
                <h5>Lean Management Systems</h5>
                <div class="lab-stub-meta">Value Stream Mapping Tools, Excel</div>
                <div class="lab-stub-meta">Intermediate · Process Excellence / Ops Manager</div>
            </div>
            <div class="lab-stub-card" data-track="scm">
                <span class="lab-tag" style="background:var(--scm-tint);color:var(--scm)">Supply Chain & Logistics</span>
                <h5>Supply Chain Analytics ★</h5>
                <div class="lab-stub-meta">Excel, Power BI</div>
                <div class="lab-stub-meta">Advanced · Supply Chain Analyst</div>
            </div>
            <div class="lab-stub-card" data-track="scm">
                <span class="lab-tag" style="background:var(--scm-tint);color:var(--scm)">Supply Chain & Logistics</span>
                <h5>Introduction to Logistics & SCM ★</h5>
                <div class="lab-stub-meta">SCM digital platforms, Excel</div>
                <div class="lab-stub-meta">Foundation · SCM Integration Manager</div>
            </div>
            <div class="lab-stub-card" data-track="scm">
                <span class="lab-tag" style="background:var(--scm-tint);color:var(--scm)">Supply Chain & Logistics</span>
                <h5>Inventory Management</h5>
                <div class="lab-stub-meta">Excel, ERP Simulators</div>
                <div class="lab-stub-meta">Intermediate · Inventory / Warehouse Manager</div>
            </div>
            <div class="lab-stub-card" data-track="scm">
                <span class="lab-tag" style="background:var(--scm-tint);color:var(--scm)">Supply Chain & Logistics</span>
                <h5>Emerging Trends in SCM & Logistics</h5>
                <div class="lab-stub-meta">SCM Digital Platforms</div>
                <div class="lab-stub-meta">Advanced · Supply Chain Strategist</div>
            </div>
            <div class="lab-stub-card" data-track="scm">
                <span class="lab-tag" style="background:var(--scm-tint);color:var(--scm)">Supply Chain & Logistics</span>
                <h5>Achieving Supply Chain Integration</h5>
                <div class="lab-stub-meta">ERP/SCM Integration Tools</div>
                <div class="lab-stub-meta">Advanced · Supply Chain Integration Manager</div>
            </div>
            <div class="lab-stub-card" data-track="mkt">
                <span class="lab-tag" style="background:var(--mkt-tint);color:var(--mkt)">Marketing & Digital</span>
                <h5>Marketing Analytics</h5>
                <div class="lab-stub-meta">Excel, Google Analytics, Power BI</div>
                <div class="lab-stub-meta">Intermediate · Marketing Analyst</div>
            </div>
            <div class="lab-stub-card" data-track="mkt">
                <span class="lab-tag" style="background:var(--mkt-tint);color:var(--mkt)">Marketing & Digital</span>
                <h5>Social Media Marketing</h5>
                <div class="lab-stub-meta">Meta Business Suite, Canva</div>
                <div class="lab-stub-meta">Foundation · Social Media Executive</div>
            </div>
            <div class="lab-stub-card" data-track="mkt">
                <span class="lab-tag" style="background:var(--mkt-tint);color:var(--mkt)">Marketing & Digital</span>
                <h5>Social Media Analytics & Future Trends</h5>
                <div class="lab-stub-meta">Meta Insights, Google Analytics</div>
                <div class="lab-stub-meta">Intermediate · Digital Marketing Analyst</div>
            </div>
            <div class="lab-stub-card" data-track="mkt">
                <span class="lab-tag" style="background:var(--mkt-tint);color:var(--mkt)">Marketing & Digital</span>
                <h5>Social Media, Influencer & Content Marketing</h5>
                <div class="lab-stub-meta">Canva, Meta Suite, Content Calendars</div>
                <div class="lab-stub-meta">Intermediate · Content / Influencer Marketing Manager</div>
            </div>
            <div class="lab-stub-card" data-track="mkt">
                <span class="lab-tag" style="background:var(--mkt-tint);color:var(--mkt)">Marketing & Digital</span>
                <h5>Marketing Analytics & Future Trends</h5>
                <div class="lab-stub-meta">Power BI, Google Analytics</div>
                <div class="lab-stub-meta">Advanced · Marketing Analytics Lead</div>
            </div>
            <div class="lab-stub-card" data-track="mkt">
                <span class="lab-tag" style="background:var(--mkt-tint);color:var(--mkt)">Marketing & Digital</span>
                <h5>Advanced Marketing Analytics</h5>
                <div class="lab-stub-meta">Power BI, Excel, Google Analytics</div>
                <div class="lab-stub-meta">Advanced · Senior Marketing Analyst</div>
            </div>
            <div class="lab-stub-card" data-track="mkt">
                <span class="lab-tag" style="background:var(--mkt-tint);color:var(--mkt)">Marketing & Digital</span>
                <h5>Digital & Social Media Marketing</h5>
                <div class="lab-stub-meta">Meta Suite, Google Ads, Canva</div>
                <div class="lab-stub-meta">Foundation · Digital Marketing Executive</div>
            </div>
            <div class="lab-stub-card" data-track="hr">
                <span class="lab-tag" style="background:var(--hr-tint);color:var(--hr)">Human Resources</span>
                <h5>HR Analytics</h5>
                <div class="lab-stub-meta">Excel, Power BI, HRIS Dashboards</div>
                <div class="lab-stub-meta">Intermediate · HR Analyst / HRBP</div>
            </div>
            <div class="lab-stub-card" data-track="hr">
                <span class="lab-tag" style="background:var(--hr-tint);color:var(--hr)">Human Resources</span>
                <h5>Human Resource Information System</h5>
                <div class="lab-stub-meta">HRIS / HRMS Platforms</div>
                <div class="lab-stub-meta">Intermediate · HRIS Specialist</div>
            </div>
            <div class="lab-stub-card" data-track="fin">
                <span class="lab-tag" style="background:var(--fin-tint);color:var(--fin)">Finance & Investment</span>
                <h5>Security Analysis & Portfolio Management</h5>
                <div class="lab-stub-meta">Excel, Bloomberg-style Terminals</div>
                <div class="lab-stub-meta">Advanced · Investment / Portfolio Analyst</div>
            </div>
            <div class="lab-stub-card" data-track="fin">
                <span class="lab-tag" style="background:var(--fin-tint);color:var(--fin)">Finance & Investment</span>
                <h5>Fintech & Digital Banking</h5>
                <div class="lab-stub-meta">Digital Banking Platforms, Fintech Case Tools</div>
                <div class="lab-stub-meta">Intermediate · Fintech / Digital Banking Associate</div>
            </div>
            <div class="lab-stub-card" data-track="it">
                <span class="lab-tag" style="background:var(--it-tint);color:var(--it)">Information Technology</span>
                <h5>Cybersecurity & Risk Management</h5>
                <div class="lab-stub-meta">Risk Assessment Frameworks, Security Tools</div>
                <div class="lab-stub-meta">Advanced · IT Risk / Security Analyst</div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════ FACULTY ═══════════════════════════ -->
<section id="lab-faculty">
    <div class="lab-wrap">
        <p class="ge-section-eyebrow">Faculty Experts</p>
        <h2 class="section-heading">Learn directly from practitioners, not just professors.</h2>
        <p class="mb-4"><b>Our LABs faculty bring 10+ years of hands-on industry experience across construction, IT, marketing, HR, finance and supply chain.</b></p>
        <div class="lab-faculty-note">Sample faculty profiles shown below &mdash; swap in real photos, names and credentials for each specialization track before publishing.</div>
        <div class="lab-faculty-grid" id="labFacultyGrid">
            <div class="lab-faculty-card">
                <div class="lab-faculty-avatar">AK</div>
                <h4>Arjun Kulkarni</h4>
                <div class="lab-role">Project Management</div>
                <p>15+ yrs, Infrastructure Planning</p>
            </div>
            <div class="lab-faculty-card">
                <div class="lab-faculty-avatar">NM</div>
                <h4>Neha Mehta</h4>
                <div class="lab-role">Supply Chain & Logistics</div>
                <p>12+ yrs, FMCG Operations</p>
            </div>
            <div class="lab-faculty-card">
                <div class="lab-faculty-avatar">RS</div>
                <h4>Rahul Sinha</h4>
                <div class="lab-role">Marketing & Digital</div>
                <p>10+ yrs, D2C Growth Marketing</p>
            </div>
            <div class="lab-faculty-card">
                <div class="lab-faculty-avatar">PV</div>
                <h4>Priya Verma</h4>
                <div class="lab-role">Human Resources</div>
                <p>13+ yrs, HR Analytics & HRIS</p>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════ METHODOLOGY ═══════════════════════════ -->
<section>
    <div class="lab-wrap">
        <p class="ge-section-eyebrow">Hands-on Learning Methodology</p>
        <h2 class="section-heading">Every workshop follows the same proven format.</h2>
        <p class="mb-4"><b>Applied skill, not just notes &mdash; the same five-step flow runs across all 23 workshops.</b></p>
        <div class="lab-process">
            <div class="lab-process-step"><div class="lab-circle">01</div><h4>Expert Session</h4><p>Live briefing from a practising industry expert.</p></div>
            <div class="lab-process-step"><div class="lab-circle">02</div><h4>Hands-on Practice</h4><p>Direct work in the real tool &mdash; Jira, Primavera, Power BI and more.</p></div>
            <div class="lab-process-step"><div class="lab-circle">03</div><h4>Case Study</h4><p>Apply the skill to a real-world business scenario.</p></div>
            <div class="lab-process-step"><div class="lab-circle">04</div><h4>Group Discussion</h4><p>Peer discussion to stress-test the approach.</p></div>
            <div class="lab-process-step"><div class="lab-circle">05</div><h4>Assessment</h4><p>Same-day internal + external assessment &mdash; no separate exam.</p></div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════ SOFTWARE ═══════════════════════════ -->
<section>
    <div class="lab-wrap">
        <p class="ge-section-eyebrow">Software Covered</p>
        <h2 class="section-heading mb-4">The same tools listed on job descriptions.</h2>
        <div class="lab-chip-cloud">
            <div class="lab-chip">MS Project</div><div class="lab-chip">Jira</div><div class="lab-chip">Oracle Primavera P6</div>
            <div class="lab-chip">Power BI</div><div class="lab-chip">Excel Solver</div><div class="lab-chip">Meta Business Suite</div>
            <div class="lab-chip">Google Analytics</div><div class="lab-chip">HRIS / HRMS Platforms</div>
            <div class="lab-chip">Digital Banking Platforms</div><div class="lab-chip">Security Risk Frameworks</div>
            <div class="lab-chip">Bloomberg-style Terminals</div><div class="lab-chip">Canva</div>
            <div class="lab-chip">Trello / Scrum Boards</div><div class="lab-chip">ERP / SCM Integration Tools</div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════ JOURNEY ═══════════════════════════ -->
<section id="lab-journey">
    <div class="lab-wrap">
        <p class="ge-section-eyebrow">Learner Journey</p>
        <h2 class="section-heading">From admission to career application.</h2>
        <p class="mb-4"><b>See exactly how a MITSDE LABs workshop fits into your program &mdash; registration through to the certificate in your hand.</b></p>
        <div class="lab-journey" id="labJourneyList">
            <div class="lab-journey-step">
                <div class="lab-journey-num">1</div>
                <div class="lab-journey-text">
                    <div class="lab-stage">Step 1</div>
                    <h4>Admission</h4>
                    <p>Learner is admitted into a MITSDE program (PGDM, PGDM Exec, PGCM, EMBA).</p>
                </div>
            </div>
            <div class="lab-journey-step">
                <div class="lab-journey-num">2</div>
                <div class="lab-journey-text">
                    <div class="lab-stage">Step 2</div>
                    <h4>Semester Completion</h4>
                    <p>Learner completes the remaining subjects of the relevant semester (for curriculum-linked LABs).</p>
                </div>
            </div>
            <div class="lab-journey-step">
                <div class="lab-journey-num">3</div>
                <div class="lab-journey-text">
                    <div class="lab-stage">Step 3</div>
                    <h4>LAB Registration</h4>
                    <p>Registration form shared via email + Telegram; learner registers for an upcoming session.</p>
                </div>
            </div>
            <div class="lab-journey-step">
                <div class="lab-journey-num">4</div>
                <div class="lab-journey-text">
                    <div class="lab-stage">Step 4</div>
                    <h4>Expert Workshop</h4>
                    <p>Full-day, weekend, live workshop led by an industry practitioner.</p>
                </div>
            </div>
            <div class="lab-journey-step">
                <div class="lab-journey-num">5</div>
                <div class="lab-journey-text">
                    <div class="lab-stage">Step 5</div>
                    <h4>Hands-on Practice</h4>
                    <p>Learner works directly with the tool/software — Jira, Primavera, Power BI and more.</p>
                </div>
            </div>
            <div class="lab-journey-step">
                <div class="lab-journey-num">6</div>
                <div class="lab-journey-text">
                    <div class="lab-stage">Step 6</div>
                    <h4>Assessment</h4>
                    <p>Internal + external assessment conducted the same day — no separate proctored exam.</p>
                </div>
            </div>
            <div class="lab-journey-step">
                <div class="lab-journey-num">7</div>
                <div class="lab-journey-text">
                    <div class="lab-stage">Step 7</div>
                    <h4>Certificate</h4>
                    <p>Certificate of Participation issued for full attendance and completed assessment.</p>
                </div>
            </div>
            <div class="lab-journey-step">
                <div class="lab-journey-num">8</div>
                <div class="lab-journey-text">
                    <div class="lab-stage">Step 8</div>
                    <h4>Career Application</h4>
                    <p>Learner applies the certified skill in placements, projects, or current role.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════ CERTIFICATE ═══════════════════════════ -->
<section>
    <div class="lab-wrap lab-cert-wrap">
        <div class="lab-cert-mock">
            <div class="lab-cm-eyebrow">Certificate of Participation</div>
            <h3>MITSDE LABs</h3>
            <div class="lab-cm-name">Learner Name</div>
            <p class="lab-cm-body">has successfully completed the full-day workshop and assessment for <strong>Oracle Primavera &mdash; Project Management</strong>, C15 Batch.</p>
            <div class="lab-cm-foot"><span>ISSUED &middot; MITSDE</span><span>ID: C15-PM-000</span></div>
        </div>
        <div>
            <p class="ge-section-eyebrow">Certificates</p>
            <h2 class="section-heading" style="margin-bottom:14px;">A credential that actually reflects what you did.</h2>
            <ul class="lab-cert-list">
                <li><span class="lab-ck">&#10003;</span><span>Awarded on completing the full-day workshop and the same-day assessment.</span></li>
                <li><span class="lab-ck">&#10003;</span><span>Full attendance for the entire session is required for eligibility.</span></li>
                <li><span class="lab-ck">&#10003;</span><span>Issued as a Certificate of Participation &mdash; a skill-validation credential, not a vendor certification.</span></li>
                <li><span class="lab-ck">&#10003;</span><span>Adds resume- and LinkedIn-ready, tool-specific proof of hands-on training.</span></li>
            </ul>
        </div>
    </div>
</section>

<!-- ═══════════════════════════ BENEFITS ═══════════════════════════ -->
<section>
    <div class="lab-wrap">
        <p class="ge-section-eyebrow">Industry Benefits</p>
        <h2 class="section-heading">Every track, mapped to real career roles.</h2>
        <p class="mb-4"><b>So you know exactly how each workshop strengthens your employability.</b></p>
        <div class="tbl-wrap">
            <table class="tbl">
                <thead><tr><th>Track</th><th>Industries</th><th>Job Roles</th><th>Career Demand</th><th>Emerging Tech</th></tr></thead>
                <tbody>
                    <tr><td class="tbl-label"><b>Project Management</b></td><td>Construction, IT, Infrastructure, Consulting</td><td>Project Coordinator, Scrum Master, Planning Engineer</td><td>High — remains among the most requested skills in job postings</td><td>AI-assisted scheduling, hybrid Agile-Waterfall</td></tr>
                    <tr><td class="tbl-label"><b>Supply Chain & Logistics</b></td><td>Manufacturing, E-commerce, FMCG, Infrastructure</td><td>SCM Analyst, Inventory Manager, Logistics Executive</td><td>Very High — post-pandemic resilience investment continues</td><td>Predictive analytics, supply-chain digital twins</td></tr>
                    <tr><td class="tbl-label"><b>Marketing & Digital</b></td><td>E-commerce, D2C, BFSI, EdTech</td><td>Digital Marketing Executive, Analytics Lead</td><td>Very High — ad spend and content-led growth expanding</td><td>AI-generated content, social commerce</td></tr>
                    <tr><td class="tbl-label"><b>Human Resources</b></td><td>All industries, especially large enterprises</td><td>HR Analyst, HRBP, HRIS Specialist</td><td>High — data-driven HR decision-making is a growing priority</td><td>People analytics, HRIS/HRMS adoption</td></tr>
                    <tr><td class="tbl-label"><b>Finance & Investment</b></td><td>BFSI, Wealth Management, Fintech</td><td>Investment Analyst, Portfolio Analyst, Fintech Associate</td><td>High — fintech and digital banking adoption accelerating</td><td>Digital banking, robo-advisory</td></tr>
                    <tr><td class="tbl-label"><b>Information Technology</b></td><td>IT Services, BFSI, Enterprises of all sizes</td><td>IT Risk Analyst, Security Analyst</td><td>Very High — cybersecurity roles among fastest-growing globally</td><td>Zero-trust security, AI-driven threat detection</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ═══════════════════════════ TESTIMONIALS ═══════════════════════════ -->
<section>
    <div class="lab-wrap">
        <p class="ge-section-eyebrow">Testimonials</p>
        <h2 class="section-heading">In their own words.</h2>
        <p class="mb-4"><b>MITSDE learners who turned a single weekend workshop into a resume-ready skill.</b></p>
        <div>
            <div class="lab-testi-track" id="labTestiTrack">
                <div class="lab-testi-card">
                    <div class="lab-stars">★★★★★</div>
                    <p class="lab-quote">"The Primavera workshop gave me a scheduling skill I now use every week at my construction-firm job — and it cost me nothing."</p>
                    <div class="lab-testi-who">
                        <div class="lab-testi-avatar">AR</div>
                        <div><strong>Ananya R.</strong><span>C15 · PGDM Executive · Oracle Primavera</span></div>
                    </div>
                </div>
                <div class="lab-testi-card">
                    <div class="lab-stars">★★★★★</div>
                    <p class="lab-quote">"One Saturday, full-day, and I walked out actually knowing how to run a sprint in Jira — not just define one."</p>
                    <div class="lab-testi-who">
                        <div class="lab-testi-avatar">RK</div>
                        <div><strong>Rohit K.</strong><span>C15 · PGDM · Agile Project Management</span></div>
                    </div>
                </div>
                <div class="lab-testi-card">
                    <div class="lab-stars">★★★★★</div>
                    <p class="lab-quote">"As a working professional, the weekend format meant I didn't have to choose between the workshop and my job."</p>
                    <div class="lab-testi-who">
                        <div class="lab-testi-avatar">SM</div>
                        <div><strong>Sneha M.</strong><span>C15 · EMBA · Marketing Analytics</span></div>
                    </div>
                </div>
                <div class="lab-testi-card">
                    <div class="lab-stars">★★★★★</div>
                    <p class="lab-quote">"Building an actual Power BI dashboard from SCM data made the concept click in a way lectures hadn't."</p>
                    <div class="lab-testi-who">
                        <div class="lab-testi-avatar">DP</div>
                        <div><strong>Devansh P.</strong><span>C15 · PGCM · Supply Chain Analytics</span></div>
                    </div>
                </div>
                <div class="lab-testi-card">
                    <div class="lab-stars">★★★★★</div>
                    <p class="lab-quote">"The case study was based on a real HR problem, and the certificate is now on my resume."</p>
                    <div class="lab-testi-who">
                        <div class="lab-testi-avatar">PS</div>
                        <div><strong>Priya S.</strong><span>C15 · PGDM Executive · HR Analytics</span></div>
                    </div>
                </div>
            </div>
            <div class="lab-testi-controls">
                <button aria-label="Previous" onclick="labScrollTesti(-1)">&#8592;</button>
                <button aria-label="Next" onclick="labScrollTesti(1)">&#8594;</button>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════ FAQ ═══════════════════════════ -->
<section id="lab-faq">
    <div class="lab-wrap">
        <p class="ge-section-eyebrow">FAQs</p>
        <h2 class="section-heading">Have a question about eligibility, cost, or certification?</h2>
        <p class="mb-4"><b>Find quick answers below &mdash; or reach out to our Student Support team.</b></p>
        <div class="faq-list lab-faq-cols">
            <div class="faq-item is-open">
                <button class="faq-q" aria-expanded="true"><span>Who is eligible to attend MITSDE LABs workshops?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>Eligibility: Learners who have completed the 1st semester, are currently in the 2nd semester, and have opted for the mentioned LABs subject in their curriculum.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>Is there any cost to attend a LABs workshop?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>No. All MITSDE LABs workshops are offered completely free of cost — certifications that would otherwise cost up to ₹1,00,000 in the open market.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>Are the workshops mandatory for every learner?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>Only for learners whose program structure includes a specific LAB subject as a credited course. For everyone else, LABs are optional, free skill-enhancement workshops.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>Will I receive a certificate after the workshop?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>Yes. Learners who attend the entire full-day session and complete the assessment receive a Certificate of Participation/Completion.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>What happens if I miss part of the workshop day?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>Full attendance for the entire workshop is required to be eligible for the certificate. Please check with the Academic team for your specific case.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>Are MITSDE LABs sessions online or offline?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>Sessions are conducted live (virtually, via the LMS) on weekends, led by an industry expert in real time, with recordings made available afterward.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>On which days are the workshops held?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>Workshops are conducted exclusively on weekends (Saturday or Sunday) as full-day sessions.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>Do I need to install any software before the workshop?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>This depends on the specific workshop's tools. Software/tool requirements and setup instructions are shared in advance via email/LMS.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>How is my final score calculated for a curriculum LAB subject?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>Your score combines an internal and an external assessment, both conducted the same day as the workshop — no separate proctored exam.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>Can I attend more than one LABs workshop?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>Yes. Learners can attend multiple sessions across Project Management, Supply Chain, Marketing, HR, Finance and IT, based on availability and eligibility.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>How will I know when a new LABs session is scheduled?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>The session calendar and registration form are shared in advance via your registered email and the official MITSDE Telegram channel.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>Where do I find the workshop on my LMS after registering?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>A course container titled "MITSDE LABs" appears on your LMS Dashboard, and the session reflects under "Today's Classes" in your LMS Calendar.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>Are session recordings available if I can't attend live?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>Yes, recordings of MITSDE LABs sessions are made available on the LMS for review.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>Who conducts the MITSDE LABs workshops?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>Sessions are led by seasoned industry practitioners and subject matter experts with 10+ years of real-world, tool-specific experience.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>What's the difference between MITSDE LABs and my core PGDM/MBA subjects?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>LABs are practical, tool-focused, single-day certification workshops that complement your core academic curriculum.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>How many LABs workshops does the C15 batch offer?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>The current C15 curriculum spans 23 distinct LAB workshops across six specialization tracks.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>Will attending a LABs workshop help me get placed?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>Yes. LABs workshops build in-demand, tool-specific skills that are directly referenced by recruiters and strengthen your interview readiness.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>Is the LABs certificate recognised by employers?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>It validates hands-on exposure to industry-standard tools taught by practitioners — a skill-validation credential distinct from vendor-issued certifications.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>Can working professionals attend MITSDE LABs?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>Yes — since sessions are held on weekends, working professionals in MITSDE's executive programs can attend without disrupting work.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>What if I have a technical issue during the live session?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>Learner support is available through the Student Support helpdesk; recordings are also provided so you don't lose access to content.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q" aria-expanded="false"><span>Do I need prior experience with the software taught?</span><svg class="faq-chevron" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <div class="faq-a"><p>No prior experience is required for most workshops — sessions take learners from foundational understanding to hands-on application within the day.</p></div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════ REGISTRATION CTA ═══════════════════════════ -->
<!-- <section class="lab-cta-section" id="lab-register">
    <div class="lab-wrap lab-cta-grid">
        <div class="lab-cta-copy">
            <div class="lab-eyebrow" style="color:var(--lab-gold);">Registration</div>
            <h2>Ready to build a skill this weekend?</h2>
            <p>Register for the next MITSDE LABs workshop, or download the full C15 workshop calendar to plan ahead.</p>
            <a href="#" class="lab-btn lab-btn-primary">Download Full Calendar (PDF)</a>
            <a href="#" class="lab-btn lab-btn-outline">Chat on WhatsApp</a>
        </div>
        <form class="lab-cta-form" onsubmit="event.preventDefault(); this.querySelector('.lab-confirm').style.display='block';">
            <h4>Register for a LABs Workshop</h4>
            <p class="lab-sub-txt">Included free with every MITSDE program.</p>
            <div class="lab-field"><label for="lab-fname">Full name</label><input id="lab-fname" required placeholder="Your name"></div>
            <div class="lab-field"><label for="lab-femail">Email</label><input id="lab-femail" type="email" required placeholder="you@email.com"></div>
            <div class="lab-field"><label for="lab-fphone">Phone</label><input id="lab-fphone" type="tel" required placeholder="+91"></div>
            <div class="lab-field"><label for="lab-fprog">Program</label>
                <select id="lab-fprog"><option>PGDM</option><option>PGDM Executive</option><option>PGCM</option><option>EMBA</option></select>
            </div>
            <div class="lab-field"><label for="lab-ftrack">Preferred track</label>
                <select id="lab-ftrack"><option>Project Management</option><option>Supply Chain &amp; Logistics</option><option>Marketing &amp; Digital</option><option>Human Resources</option><option>Finance &amp; Investment</option><option>Information Technology</option></select>
            </div>
            <div class="lab-consent">
                <input type="checkbox" id="lab-consent" required>
                <label for="lab-consent">I authorize MITSDE to contact me regarding LABs workshops.</label>
            </div>
            <button type="submit" class="lab-btn lab-btn-primary lab-btn-block">Submit Registration</button>
            <p class="lab-confirm">Thanks &mdash; the LABs team will confirm your seat by email shortly.</p>
        </form>
    </div>
</section> -->

<div class="lab-faculty-note text-center mb-0"><h5 class="mb-0">Note: You will be notified via email, LMS, and our official Telegram group for the workshop details.</h5></div>

</div><!-- /.lab-page -->

<?php include "footer-new.php" ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
/* ── MITSDE LABs — behaviour only; all content below is now static HTML ── */

/* Workshop catalogue filter: show/hide pre-rendered cards by data-track */
function labFilterWorkshops(filter){
  document.querySelectorAll('#labWorkshopGrid .lab-stub-card').forEach(card=>{
    card.style.display = (filter === 'all' || card.dataset.track === filter) ? '' : 'none';
  });
}
document.querySelectorAll('#labFilterBar .ph-spec-pill').forEach(btn=>{
  btn.addEventListener('click',()=>{
    document.querySelectorAll('#labFilterBar .ph-spec-pill').forEach(b=>b.classList.remove('is-active'));
    btn.classList.add('is-active');
    labFilterWorkshops(btn.dataset.k);
  });
});

/* Testimonial carousel scroll */
function labScrollTesti(dir){ document.getElementById('labTestiTrack').scrollBy({left:dir*320,behavior:'smooth'}); }

/* FAQ accordion: handled by the global .faq-q handler in assets-new/js/script.js — no page-specific JS needed */
</script>

</body>
</html>
