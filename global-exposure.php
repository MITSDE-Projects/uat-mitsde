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

        /* ── HERO ── */
        .ge-hero {
            background: linear-gradient(180deg, #FD771F 0%, #ffffff 100%);
            position: relative; overflow: hidden;
            padding: 80px 0 72px;
            min-height: 460px; display: flex; align-items: center;
            margin-top: -120px; padding-top: 160px;
        }
        .ge-hero-grid {
            position: absolute;
            inset: 0;
            pointer-events: none;
            background-image: repeating-linear-gradient(0deg, transparent, transparent 47px, #ffffff 47px, #ffffff 48px), repeating-linear-gradient(90deg, transparent, transparent 79px, #ffffff 79px, #ffffff 80px);
            opacity: 0.2;
        }
        .ge-hero-globe {
            position: absolute; right: -20px; top: 50%; transform: translateY(-50%);
            width: 420px; height: 420px; pointer-events: none; opacity: 0.22;
        }
        .ge-hero-content { position: relative; z-index: 1; }
        .ge-eyebrow {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(255,255,255,.35); border-radius: 4px;
            padding: 5px 14px; margin-bottom: 20px;
            font-size: 10.5px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase;
            color: #7c1500;
            border: 1px solid rgba(255,255,255,.5);
        }
        .ge-hero-h1 { font-size: 56px; font-weight: 800; line-height: 1.1; color: #fff; margin-bottom: 8px; letter-spacing: -0.01em; }
        .ge-hero-h1 em { font-style: italic; color: #fff3e0; font-weight: 300; }
        .ge-hero-sub { font-size: 16px; color: rgba(255,255,255,.88); line-height: 1.6; margin-bottom: 32px; max-width: 580px; }
        .ge-stats { display: flex; gap: 48px; margin-bottom: 36px; }
        .ge-stat-val { font-size: 40px; font-weight: 800; color: #7c1500; line-height: 1; }
        .ge-stat-lbl { font-size: 11px; color: rgba(124,21,0,.7); letter-spacing: 0.08em; text-transform: uppercase; margin-top: 4px; }
        .ge-ctas { display: flex; gap: 12px; flex-wrap: wrap; }
        .ge-btn-primary {
            padding: 12px 28px; background: #111827; color: #fff;
            font-size: 13.5px; font-weight: 700; border-radius: var(--r-sm);
            text-decoration: none; letter-spacing: 0.02em; transition: background .15s;
        }
        .ge-btn-primary:hover { background: #374151; color: #fff; }
        .ge-btn-outline {
            padding: 12px 28px; background: #111827; color: #fff;
            font-size: 13.5px; font-weight: 600; border-radius: var(--r-sm);
            border: 1px solid rgba(255,255,255,.5); text-decoration: none; transition: background .15s, border-color .15s;
        }
        .ge-btn-outline:hover { background: #374151; border-color: #fff; color: #fff; }

        /* ── SECTION COMMONS ── */
        .ge-section { padding: 64px 0; }
        .ge-section-dark { background: var(--ge-dark); padding: 64px 0; }
        .ge-section-light { background: var(--ge-bg-lt); }
        .ge-section-gray  { background: var(--ge-bg); }
        .ge-section-white { background: #fff; }

        .ge-section-header { text-align: center; margin-bottom: 48px; }
        .ge-section-eyebrow { font-size: 10.5px; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase; color: var(--ge-primary-dim); margin-bottom: 12px; }
        .ge-section-dark .ge-section-eyebrow { color: var(--ge-primary-lt); }
        .ge-section-h2 { font-size: 34px; font-weight: 300; letter-spacing: -0.01em; color: var(--ge-text); margin-bottom: 10px; }
        .ge-section-dark .ge-section-h2 { color: #fff; }
        .ge-section-sub { font-size: 15px; color: var(--ge-text-sec); }
        .ge-section-dark .ge-section-sub { color: #9ca3af; }
        .ge-dot-row { display: flex; justify-content: center; gap: 6px; margin-top: 16px; }
        .ge-dot { width: 5px; height: 5px; border-radius: 50%; background: var(--ge-primary-dim); }
        .ge-dot:nth-child(3) { background: var(--ge-primary); }

        .ge-gold-rule { height: 1px; background: rgba(234,88,12,.2); }

        /* ── PILLARS ── */
        .ge-pillars-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; max-width: 860px; margin: 0 auto; }
        .ge-pillar-card {
            background: #fff; border-radius: var(--r-md);
            border: 1px solid var(--ge-border); padding: 28px 28px 24px;
            position: relative; overflow: hidden;
            transition: transform .2s, box-shadow .2s;
        }
        .ge-pillar-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(0,0,0,.08); }
        .ge-pillar-card::before { content:''; position:absolute; top:0;left:0;right:0;height:3px; background:var(--ge-primary); }
        .ge-pillar-card::after  { content:''; position:absolute; top:0;left:0;bottom:0;width:3px; background:var(--ge-primary); }
        .ge-pillar-num { font-size: 11px; font-weight: 700; color: var(--ge-primary); letter-spacing: 0.1em; margin-bottom: 12px; font-family: monospace; }
        .ge-pillar-title { font-size: 17px; font-weight: 600; color: var(--ge-text); margin-bottom: 8px; line-height: 1.3; }
        .ge-pillar-desc { font-size: 13.5px; color: var(--ge-text-sec); line-height: 1.6; }

        /* ── MAP ── */
        .ge-map-section { padding: 60px 0 48px; border-top: 1px solid rgba(234,88,12,.12); border-bottom: 1px solid rgba(234,88,12,.12); }
        .ge-world-svg { width: 100%; max-width: 1100px; margin: 0 auto; display: block; border-radius: 12px; box-shadow: 0 4px 24px rgba(154,52,18,.15); }
        .ge-map-legend { display: flex; gap: 28px; justify-content: center; margin-top: 20px; }
        .ge-legend-item { display: flex; align-items: center; gap: 8px; font-size: 12px; color: #9a3412; font-weight: 500; }
        .ge-legend-dot { width: 10px; height: 10px; border-radius: 50%; }
        .ge-legend-dot-india { background: var(--ge-primary); box-shadow: 0 0 0 3px rgba(234,88,12,.25); }
        .ge-legend-dot-isip  { background: #9a3412; }
        .ge-country-pills { display: flex; flex-wrap: wrap; gap: 8px; justify-content: center; margin-top: 28px; }
        .ge-c-pill {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 5px 14px; border-radius: var(--r-pill);
            border: 1px solid rgba(154,52,18,.3); background: rgba(234,88,12,.08);
            font-size: 12px; font-weight: 600; color: #9a3412;
        }

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
        .ge-table-note { margin-top: 12px; font-size: 12px; color: var(--ge-muted); font-style: italic; }

        /* ── SESSION CARDS ── */
        .ge-sessions-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
        .ge-session-card {
            background: #fff; border: 1px solid var(--ge-border);
            border-radius: var(--r-md); overflow: hidden;
            transition: transform .2s, box-shadow .2s;
        }
        .ge-session-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(0,0,0,.08); }
        .ge-session-status-bar { height: 3px; }
        .ge-session-status-bar.upcoming  { background: var(--ge-green); }
        .ge-session-status-bar.completed { background: var(--ge-muted); }
        .ge-session-body { padding: 20px; }
        .ge-session-pills { display: flex; align-items: center; gap: 8px; margin-bottom: 14px; }
        .ge-session-pill { font-size: 10px; font-weight: 700; letter-spacing: 0.06em; text-transform: uppercase; padding: 3px 10px; border-radius: var(--r-pill); }
        .ge-session-pill.upcoming  { background: var(--ge-green-lt);  color: var(--ge-green); }
        .ge-session-pill.completed { background: #f3f4f6; color: var(--ge-muted); }
        .ge-session-date { font-size: 11px; color: var(--ge-muted); }
        .ge-session-title { font-size: 14.5px; font-weight: 600; color: var(--ge-text); margin-bottom: 6px; line-height: 1.35; }
        .ge-session-institution { font-size: 11.5px; color: var(--ge-muted); margin-bottom: 12px; font-style: italic; }
        .ge-session-tags { display: flex; flex-wrap: wrap; gap: 5px; margin-bottom: 16px; }
        .ge-session-tag { font-size: 10px; font-weight: 600; padding: 3px 10px; border-radius: var(--r-pill); background: #fde8d0; color: #9a3412; }
        .ge-session-cta { font-size: 12px; font-weight: 600; text-decoration: none; }
        .ge-session-cta.upcoming  { color: var(--ge-green); }
        .ge-session-cta.completed { color: var(--ge-muted); }

        /* ── STUDENT STORIES ── */
        .ge-stories-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
        .ge-story-card {
            background: #fff; border: 1px solid var(--ge-border);
            border-radius: var(--r-md); padding: 22px 20px;
            position: relative; overflow: hidden;
            transition: transform .2s, box-shadow .2s;
        }
        .ge-story-card::before { content:''; position:absolute;top:0;left:0;right:0;height:3px;background:var(--ge-primary); }
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
        .ge-story-quote { font-size: 13px; color: var(--ge-text); line-height: 1.55; font-style: italic; }

        /* ── HOW TO APPLY ── */
        .ge-apply-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: start; max-width: 960px; margin: 0 auto; }
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
        .ge-apply-right::before { content:''; position:absolute;top:0;left:0;right:0;height:3px;background:var(--ge-primary); }
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
        .ge-benefit-card::before { content:''; position:absolute; top:0; left:0; right:0; height:3px; background:var(--ge-primary); }
        .ge-benefit-icon { font-size: 22px; margin-bottom: 10px; }
        .ge-benefit-title { font-size: 13.5px; font-weight: 700; color: var(--ge-text); margin-bottom: 6px; }
        .ge-benefit-desc { font-size: 12.5px; color: var(--ge-text-sec); line-height: 1.55; }

        /* ── ABOUT ISIP LISTS ── */
        .ge-about-intro { font-size: 15px; color: var(--ge-text-sec); line-height: 1.75; margin-bottom: 28px; }
        .ge-about-two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 32px; }
        .ge-about-block-title { font-size: 15px; font-weight: 700; color: var(--ge-text); margin-bottom: 16px; padding-bottom: 10px; border-bottom: 1px solid var(--ge-border); }
        .ge-about-list { list-style: none; display: flex; flex-direction: column; gap: 10px; }
        .ge-about-list li { display: flex; gap: 10px; align-items: flex-start; font-size: 13.5px; color: var(--ge-text); line-height: 1.55; }
        .ge-about-list-dot { width: 6px; height: 6px; border-radius: 50%; background: var(--ge-primary); flex-shrink: 0; margin-top: 6px; }

        /* ── FAQ ── */
        .ge-faq-list { display: flex; flex-direction: column; gap: 0; max-width: 820px; margin: 0 auto; }
        .ge-faq-item { border-bottom: 1px solid var(--ge-border); }
        .ge-faq-q {
            display: flex; justify-content: space-between; align-items: center;
            padding: 18px 0; font-size: 14px; font-weight: 600; color: var(--ge-text);
            cursor: pointer; gap: 16px; background: none; border: none; width: 100%; text-align: left;
        }
        .ge-faq-q:hover { color: var(--ge-primary); }
        .ge-faq-chevron { color: var(--ge-primary); flex-shrink: 0; transition: transform .2s; }
        .ge-faq-item.open .ge-faq-chevron { transform: rotate(180deg); }
        .ge-faq-a { font-size: 13.5px; color: var(--ge-text-sec); line-height: 1.65; padding-bottom: 18px; display: none; }
        .ge-faq-item.open .ge-faq-a { display: block; }

        /* ── RESPONSIVE ── */
        @media (max-width: 991px) {
            .ge-hero { padding: 56px 0 48px; }
            .ge-hero-h1 { font-size: 36px; }
            .ge-stats { gap: 24px; }
            .ge-pillars-grid { grid-template-columns: 1fr; }
            .ge-about-two-col { grid-template-columns: 1fr; }
            .ge-apply-grid { grid-template-columns: 1fr; gap: 36px; }
            .ge-benefit-grid { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 768px) {
            .ge-sessions-grid { grid-template-columns: 1fr 1fr; }
            .ge-stories-grid  { grid-template-columns: 1fr 1fr; }
            .ge-benefit-grid  { grid-template-columns: 1fr; }
        }
        @media (max-width: 480px) {
            .ge-sessions-grid { grid-template-columns: 1fr; }
            .ge-stories-grid  { grid-template-columns: 1fr; }
            .ge-stat-val { font-size: 28px; }
            .ge-hero-h1 { font-size: 28px; }
        }
    </style>

    <?php include "5-common-seo-tag-1.php" ?>
</head>

<body>
    <?php include "5-common-seo-tag-2.php" ?>
    <?php include "header-new.php" ?>

    <div class="ge-page">

        <!-- ── HERO ── -->
        <section class="ge-hero">
            <div class="ge-hero-grid"></div>
            <svg class="ge-hero-globe" viewBox="0 0 480 480" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <circle cx="240" cy="240" r="200" stroke="#fff" stroke-width="1"/>
                <circle cx="240" cy="240" r="150" stroke="#fff" stroke-width="1"/>
                <circle cx="240" cy="240" r="100" stroke="#fff" stroke-width="1"/>
                <circle cx="240" cy="240" r="50"  stroke="#fff" stroke-width="1"/>
                <ellipse cx="240" cy="240" rx="200" ry="70"  stroke="#fff" stroke-width="1"/>
                <ellipse cx="240" cy="240" rx="200" ry="140" stroke="#fff" stroke-width="1"/>
                <line x1="240" y1="40" x2="240" y2="440" stroke="#fff" stroke-width="1"/>
                <line x1="40"  y1="240" x2="440" y2="240" stroke="#fff" stroke-width="1"/>
                <line x1="100" y1="90"  x2="380" y2="390" stroke="#fff" stroke-width="1"/>
                <line x1="380" y1="90"  x2="100" y2="390" stroke="#fff" stroke-width="1"/>
            </svg>
            <div class="container">
                <div class="ge-hero-content">
                    <div class="ge-eyebrow">MITSDE &middot; Office of International Relations</div>
                    <h1 class="ge-hero-h1">Your degree,<br><em>globally connected.</em></h1>
                    <p class="ge-hero-sub">Internships and immersion programs across 15+ countries — built into your MITSDE journey as a distance learner.</p>
                    <div class="ge-stats">
                        <div><div class="ge-stat-val">15+</div><div class="ge-stat-lbl">Countries</div></div>
                        <div><div class="ge-stat-val">40+</div><div class="ge-stat-lbl">Programs</div></div>
                        <div><div class="ge-stat-val">200+</div><div class="ge-stat-lbl">Students placed</div></div>
                    </div>
                    <div class="ge-ctas">
                        <a href="#isip" class="ge-btn-primary">Explore ISIP programs</a>
                        <a href="#apply" class="ge-btn-outline">How to join</a>
                        <a href="#about-isip" class="ge-btn-outline">About ISIP</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="ge-gold-rule"></div>

        <!-- ── ABOUT ISIP ── -->
        <section class="ge-section ge-section-gray" id="about-isip">
            <div class="container">
                <div class="ge-section-header">
                    <div class="ge-section-eyebrow">Know the program</div>
                    <h2 class="ge-section-h2">About ISIP</h2>
                    <p class="ge-section-sub">International Summer Internship &amp; Immersion Program</p>
                    <div class="ge-dot-row"><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div></div>
                </div>
                <p class="ge-about-intro">The International Summer Internship Program (ISIP) is MITSDE's flagship initiative designed to give distance learners real-world global exposure. MITSDE has established strategic collaborations with renowned international institutions, enabling students to participate in internships, immersion programs, seminars, and workshops at universities in Japan, Denmark, UK, Europe, South-East Asia, and beyond.</p>
                <p class="ge-about-intro">More than just a study tour, ISIP nurtures cross-cultural competence, strategic thinking, and a global mindset — qualities essential for professionals in today's interconnected world. Through corporate visits, academic sessions, live projects, and guided cultural experiences, participants gain practical insights into multinational business operations and international trade ecosystems.</p>
                <div class="ge-about-two-col">
                    <div>
                        <div class="ge-about-block-title">Areas of collaboration (IRO)</div>
                        <ul class="ge-about-list">
                            <li><span class="ge-about-list-dot"></span>Summer internship programs for MITSDE learners (ISIP)</li>
                            <li><span class="ge-about-list-dot"></span>Faculty exchange for teaching and research</li>
                            <li><span class="ge-about-list-dot"></span>Semester abroad for PG level (ISLIP)</li>
                            <li><span class="ge-about-list-dot"></span>Hosting summer / winter school for foreign university students</li>
                            <li><span class="ge-about-list-dot"></span>Student exchange at postgraduate / graduate level</li>
                            <li><span class="ge-about-list-dot"></span>Cooperative research and development activities</li>
                            <li><span class="ge-about-list-dot"></span>Joint research and funding proposals (EU Commission, Fulbright, GREAT)</li>
                            <li><span class="ge-about-list-dot"></span>Online project supervision leading to research papers or patents</li>
                        </ul>
                    </div>
                    <div>
                        <div class="ge-about-block-title">Proposed internship tracks</div>
                        <ul class="ge-about-list">
                            <li><span class="ge-about-list-dot"></span><strong>AI &amp; Business Intelligence</strong> — with tech startups in India and USA</li>
                            <li><span class="ge-about-list-dot"></span><strong>Sustainable Business Practices</strong> — corporate ESG programs</li>
                            <li><span class="ge-about-list-dot"></span><strong>International Trade &amp; Finance</strong> — joint initiative with global financial institutions</li>
                            <li><span class="ge-about-list-dot"></span><strong>Leadership &amp; Organisational Behaviour</strong> — university collaboration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="ge-gold-rule"></div>

        <!-- ── TWO PILLARS ── -->
        <section class="ge-section ge-section-light">
            <div class="container">
                <div class="ge-section-header">
                    <div class="ge-section-eyebrow">What we offer</div>
                    <h2 class="ge-section-h2">Two pillars of global engagement</h2>
                    <p class="ge-section-sub">Structured international experiences that complement your distance learning program</p>
                    <div class="ge-dot-row"><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div></div>
                </div>
                <div class="ge-pillars-grid">
                    <div class="ge-pillar-card">
                        <div class="ge-pillar-num">01</div>
                        <div class="ge-pillar-title">International Internships (ISIP)</div>
                        <div class="ge-pillar-desc">Japan &middot; Denmark &middot; UK &middot; Indonesia &middot; Vietnam &middot; Singapore &middot; Germany &middot; France and more. Fully funded and self-funded tracks available, curated for management learners.</div>
                    </div>
                    <div class="ge-pillar-card">
                        <div class="ge-pillar-num">02</div>
                        <div class="ge-pillar-title">International Faculty Sessions</div>
                        <div class="ge-pillar-desc">Live sessions by faculty from globally ranked universities delivered directly to MITSDE learners. Watch past recordings or register for upcoming sessions.</div>
                    </div>
                </div>
            </div>
        </section>
        <div class="ge-gold-rule"></div>

        <!-- ── WORLD REACH MAP ── -->
        <section class="ge-map-section ge-section-gray">
            <div class="container">
                <div class="ge-section-header">
                    <div class="ge-section-eyebrow">Where MITSDE learners go</div>
                    <h2 class="ge-section-h2">ISIP countries</h2>
                    <p class="ge-section-sub">Countries where MITSDE students have completed international programs</p>
                    <div class="ge-dot-row"><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div></div>
                </div>
            </div>
            <svg class="ge-world-svg" viewBox="0 0 1100 520" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="World map showing ISIP countries">
                <rect width="1100" height="520" rx="10" fill="#fff3e8"/>
                <!-- Continent blobs -->
                <ellipse cx="540" cy="195" rx="120" ry="40" fill="#f4c0a0"/>
                <ellipse cx="620" cy="190" rx="80" ry="30" fill="#f4c0a0"/>
                <ellipse cx="700" cy="200" rx="60" ry="25" fill="#f4c0a0"/>
                <ellipse cx="520" cy="280" rx="55" ry="80" fill="#f4c0a0"/>
                <ellipse cx="820" cy="200" rx="140" ry="50" fill="#f4c0a0"/>
                <ellipse cx="860" cy="245" rx="80" ry="40" fill="#f4c0a0"/>
                <ellipse cx="180" cy="210" rx="60" ry="80" fill="#f4c0a0"/>
                <ellipse cx="200" cy="310" rx="40" ry="60" fill="#f4c0a0"/>
                <ellipse cx="920" cy="340" rx="50" ry="35" fill="#f4c0a0"/>
                <ellipse cx="300" cy="130" rx="30" ry="22" fill="#f4c0a0"/>
                <!-- INDIA (orange) -->
                <circle cx="780" cy="252" r="9" fill="#ea580c"/>
                <circle cx="780" cy="252" r="16" stroke="#ea580c" stroke-width="1.5" stroke-opacity="0.3" fill="none"/>
                <text x="794" y="246" fill="#7c1500" font-size="11" font-family="monospace" font-weight="700">India</text>
                <!-- Japan -->
                <circle cx="940" cy="198" r="6" fill="#9a3412"/>
                <circle cx="940" cy="198" r="12" stroke="#9a3412" stroke-width="1" stroke-opacity="0.25" fill="none"/>
                <text x="950" y="194" fill="#9a3412" font-size="10" font-family="monospace" font-weight="600">Japan</text>
                <!-- Denmark -->
                <circle cx="516" cy="164" r="6" fill="#9a3412"/>
                <text x="526" y="160" fill="#9a3412" font-size="10" font-family="monospace" font-weight="600">Denmark</text>
                <!-- UK -->
                <circle cx="482" cy="172" r="6" fill="#9a3412"/>
                <text x="448" y="168" fill="#9a3412" font-size="10" font-family="monospace" font-weight="600">UK</text>
                <!-- Germany -->
                <circle cx="530" cy="178" r="6" fill="#9a3412"/>
                <text x="540" y="186" fill="#9a3412" font-size="10" font-family="monospace" font-weight="600">Germany</text>
                <!-- France -->
                <circle cx="506" cy="188" r="6" fill="#9a3412"/>
                <text x="465" y="196" fill="#9a3412" font-size="10" font-family="monospace" font-weight="600">France</text>
                <!-- Switzerland -->
                <circle cx="520" cy="194" r="6" fill="#9a3412"/>
                <text x="528" y="202" fill="#9a3412" font-size="10" font-family="monospace" font-weight="600">Switzerland</text>
                <!-- Indonesia -->
                <circle cx="895" cy="285" r="6" fill="#9a3412"/>
                <text x="904" y="281" fill="#9a3412" font-size="10" font-family="monospace" font-weight="600">Indonesia</text>
                <!-- Vietnam -->
                <circle cx="868" cy="262" r="6" fill="#9a3412"/>
                <text x="876" y="258" fill="#9a3412" font-size="10" font-family="monospace" font-weight="600">Vietnam</text>
                <!-- Singapore -->
                <circle cx="876" cy="288" r="6" fill="#9a3412"/>
                <text x="828" y="298" fill="#9a3412" font-size="10" font-family="monospace" font-weight="600">Singapore</text>
                <!-- Thailand -->
                <circle cx="852" cy="268" r="6" fill="#9a3412"/>
                <text x="812" y="276" fill="#9a3412" font-size="10" font-family="monospace" font-weight="600">Thailand</text>
            </svg>
            <div class="container">
                <div class="ge-map-legend">
                    <div class="ge-legend-item"><div class="ge-legend-dot ge-legend-dot-india"></div> India (MITSDE)</div>
                    <div class="ge-legend-item"><div class="ge-legend-dot ge-legend-dot-isip"></div> ISIP countries</div>
                </div>
                <div class="ge-country-pills">
                    <div class="ge-c-pill">🇯🇵 Japan</div>
                    <div class="ge-c-pill">🇩🇰 Denmark</div>
                    <div class="ge-c-pill">🇬🇧 UK</div>
                    <div class="ge-c-pill">🇩🇪 Germany</div>
                    <div class="ge-c-pill">🇫🇷 France</div>
                    <div class="ge-c-pill">🇨🇭 Switzerland</div>
                    <div class="ge-c-pill">🇮🇩 Indonesia</div>
                    <div class="ge-c-pill">🇻🇳 Vietnam</div>
                    <div class="ge-c-pill">🇸🇬 Singapore</div>
                    <div class="ge-c-pill">🇹🇭 Thailand</div>
                </div>
            </div>
        </section>
        <div class="ge-gold-rule"></div>

        <!-- ── ISIP EXPLORER ── -->
        <section class="ge-section ge-section-white" id="isip">
            <div class="container">
                <div class="ge-section-header">
                    <div class="ge-section-eyebrow">International Summer Internship Programs</div>
                    <h2 class="ge-section-h2">ISIP program explorer</h2>
                    <p class="ge-section-sub">Filter by year, funding type, or destination</p>
                    <div class="ge-dot-row"><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div></div>
                </div>

                <div class="ge-tab-row">
                    <button class="ge-tab-btn active" onclick="geTab(this,'2026')">ISIP 2026</button>
                    <button class="ge-tab-btn" onclick="geTab(this,'2025')">ISIP 2025</button>
                    <button class="ge-tab-btn" onclick="geTab(this,'proposed')">Proposed</button>
                </div>
                <div class="ge-filter-row">
                    <button class="ge-filter-btn active" onclick="geFilter(this,'all')">All</button>
                    <button class="ge-filter-btn" onclick="geFilter(this,'funded')">Fully funded</button>
                    <button class="ge-filter-btn" onclick="geFilter(this,'self')">Self-funded</button>
                    <button class="ge-filter-btn" onclick="geFilter(this,'japan')">Japan</button>
                    <button class="ge-filter-btn" onclick="geFilter(this,'europe')">Europe</button>
                    <button class="ge-filter-btn" onclick="geFilter(this,'sea')">South-East Asia</button>
                </div>

                <div style="overflow-x:auto;">
                    <table class="ge-isip-table">
                        <thead>
                            <tr>
                                <th>Program</th>
                                <th>Country</th>
                                <th>Deadline</th>
                                <th>Funding</th>
                                <th>Applications</th>
                            </tr>
                        </thead>
                        <tbody id="ge-isip-tbody">
                            <tr data-year="2026" data-type="funded" data-region="japan">
                                <td><div class="ge-prog-name">Kyoto University KU-STAR 2026</div></td>
                                <td><span class="ge-prog-country">🇯🇵 Japan</span></td>
                                <td><span class="ge-badge ge-badge-muted">Closed</span></td>
                                <td><span class="ge-badge ge-badge-green">Fully funded</span></td>
                                <td>20 received</td>
                            </tr>
                            <tr data-year="2026" data-type="self" data-region="europe">
                                <td><div class="ge-prog-name">Denmark MBMI Program 2026</div></td>
                                <td><span class="ge-prog-country">🇩🇰 Denmark</span></td>
                                <td><span class="ge-badge ge-badge-amber">Apr 15</span></td>
                                <td>&#8377; 2.9 L</td>
                                <td>4 received</td>
                            </tr>
                            <tr data-year="2026" data-type="self" data-region="europe">
                                <td><div class="ge-prog-name">Teesside Global Summer 2026</div></td>
                                <td><span class="ge-prog-country">🇬🇧 UK</span></td>
                                <td><span class="ge-badge ge-badge-blue">Ongoing</span></td>
                                <td>&#8377; 3.1 L</td>
                                <td>4 received</td>
                            </tr>
                            <tr data-year="2026" data-type="self" data-region="sea">
                                <td><div class="ge-prog-name">UMN Indonesia 2026</div></td>
                                <td><span class="ge-prog-country">🇮🇩 Indonesia</span></td>
                                <td><span class="ge-badge ge-badge-blue">Ongoing</span></td>
                                <td>&#8377; 98 K</td>
                                <td>7 received</td>
                            </tr>
                            <tr data-year="2026" data-type="self" data-region="sea">
                                <td><div class="ge-prog-name">SDG Vietnam Program 2026</div></td>
                                <td><span class="ge-prog-country">🇻🇳 Vietnam</span></td>
                                <td><span class="ge-badge ge-badge-amber">Apr 30</span></td>
                                <td>&#8377; 2.1–2.6 L</td>
                                <td>4 received</td>
                            </tr>
                            <tr data-year="2026" data-type="funded" data-region="japan">
                                <td><div class="ge-prog-name">LOTUS India–Japan 2026</div></td>
                                <td><span class="ge-prog-country">🇯🇵 Japan</span></td>
                                <td><span class="ge-badge ge-badge-blue">Jun 9</span></td>
                                <td><span class="ge-badge ge-badge-green">Fully funded</span></td>
                                <td>34 received</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="ge-table-note">Each program expands with eligibility criteria, itinerary and direct application link. Contact <strong>isip@mitsde.com</strong> for details.</p>
            </div>
        </section>
        <div class="ge-gold-rule"></div>

        <!-- ── FACULTY SESSIONS ── -->
        <section class="ge-section ge-section-light">
            <div class="container">
                <div class="ge-section-header">
                    <div class="ge-section-eyebrow">Expert-led global learning</div>
                    <h2 class="ge-section-h2">International faculty sessions</h2>
                    <p class="ge-section-sub">Live sessions by faculty from globally ranked universities — for every MITSDE learner</p>
                    <div class="ge-dot-row"><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div></div>
                </div>
                <div class="ge-sessions-grid">
                    <div class="ge-session-card">
                        <div class="ge-session-status-bar upcoming"></div>
                        <div class="ge-session-body">
                            <div class="ge-session-pills">
                                <span class="ge-session-pill upcoming">Upcoming</span>
                                <span class="ge-session-date">Jul 2026</span>
                            </div>
                            <div class="ge-session-title">Global Supply Chain Disruptions</div>
                            <div class="ge-session-institution">NUS Business School, Singapore</div>
                            <div class="ge-session-tags">
                                <span class="ge-session-tag">Operations</span>
                                <span class="ge-session-tag">Logistics</span>
                                <span class="ge-session-tag">SCM</span>
                            </div>
                            <a href="#" class="ge-session-cta upcoming">Register &rarr;</a>
                        </div>
                    </div>
                    <div class="ge-session-card">
                        <div class="ge-session-status-bar upcoming"></div>
                        <div class="ge-session-body">
                            <div class="ge-session-pills">
                                <span class="ge-session-pill upcoming">Upcoming</span>
                                <span class="ge-session-date">Aug 2026</span>
                            </div>
                            <div class="ge-session-title">Digital Transformation in Finance</div>
                            <div class="ge-session-institution">Bocconi University, Italy</div>
                            <div class="ge-session-tags">
                                <span class="ge-session-tag">Finance</span>
                                <span class="ge-session-tag">FinTech</span>
                                <span class="ge-session-tag">Strategy</span>
                            </div>
                            <a href="#" class="ge-session-cta upcoming">Register &rarr;</a>
                        </div>
                    </div>
                    <div class="ge-session-card">
                        <div class="ge-session-status-bar upcoming"></div>
                        <div class="ge-session-body">
                            <div class="ge-session-pills">
                                <span class="ge-session-pill upcoming">Upcoming</span>
                                <span class="ge-session-date">Sep 2026</span>
                            </div>
                            <div class="ge-session-title">AI in Financial Services</div>
                            <div class="ge-session-institution">Teesside University, UK</div>
                            <div class="ge-session-tags">
                                <span class="ge-session-tag">Finance</span>
                                <span class="ge-session-tag">AI</span>
                                <span class="ge-session-tag">Risk</span>
                            </div>
                            <a href="#" class="ge-session-cta upcoming">Register &rarr;</a>
                        </div>
                    </div>
                    <div class="ge-session-card">
                        <div class="ge-session-status-bar upcoming"></div>
                        <div class="ge-session-body">
                            <div class="ge-session-pills">
                                <span class="ge-session-pill upcoming">Upcoming</span>
                                <span class="ge-session-date">Oct 2026</span>
                            </div>
                            <div class="ge-session-title">Sustainability &amp; ESG Leadership</div>
                            <div class="ge-session-institution">Aarhus University, Denmark</div>
                            <div class="ge-session-tags">
                                <span class="ge-session-tag">HR</span>
                                <span class="ge-session-tag">Operations</span>
                                <span class="ge-session-tag">ESG</span>
                            </div>
                            <a href="#" class="ge-session-cta upcoming">Register &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="ge-gold-rule"></div>

        <!-- ── STUDENT STORIES ── -->
        <section class="ge-section ge-section-white">
            <div class="container">
                <div class="ge-section-header">
                    <div class="ge-section-eyebrow">ISIP alumni</div>
                    <h2 class="ge-section-h2">Voices from the field</h2>
                    <p class="ge-section-sub">MITSDE students who stepped into a global classroom</p>
                    <div class="ge-dot-row"><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div></div>
                </div>
                <div class="ge-stories-grid">
                    <div class="ge-story-card">
                        <div class="ge-story-avatar">PJ</div>
                        <div class="ge-story-name">Prajakta Jadhav</div>
                        <div class="ge-story-prog">PGDM – Project Management &middot; C6</div>
                        <div class="ge-story-dest">&#9992; KU-STAR, Japan 2025</div>
                        <div class="ge-story-divider"></div>
                        <div class="ge-story-quote">"Presenting at Kyoto changed how I think about scale entirely."</div>
                    </div>
                    <div class="ge-story-card">
                        <div class="ge-story-avatar">RZ</div>
                        <div class="ge-story-name">Rutuja Zarkar</div>
                        <div class="ge-story-prog">PGDM – Project Management &middot; C8</div>
                        <div class="ge-story-dest">&#9992; KU-STAR, Japan 2025</div>
                        <div class="ge-story-divider"></div>
                        <div class="ge-story-quote">"Research exposure at a top global university is unmatched."</div>
                    </div>
                    <div class="ge-story-card">
                        <div class="ge-story-avatar">RB</div>
                        <div class="ge-story-name">Rajaram Bhosle</div>
                        <div class="ge-story-prog">PGDM – Operations &middot; C7</div>
                        <div class="ge-story-dest">&#9992; CTIF Global, Denmark 2025</div>
                        <div class="ge-story-divider"></div>
                        <div class="ge-story-quote">"Seeing lean operations applied in Europe opened new doors for me."</div>
                    </div>
                    <div class="ge-story-card">
                        <div class="ge-story-avatar">SP</div>
                        <div class="ge-story-name">Shriya Phukane</div>
                        <div class="ge-story-prog">PGDM – Project Management &middot; C4</div>
                        <div class="ge-story-dest">&#9992; Teesside University, UK 2025</div>
                        <div class="ge-story-divider"></div>
                        <div class="ge-story-quote">"The cross-cultural perspective redefined my leadership approach."</div>
                    </div>
                </div>
            </div>
        </section>
        <div class="ge-gold-rule"></div>

        <!-- ── HOW TO JOIN ── -->
        <section class="ge-section ge-section-light" id="apply">
            <div class="container">
                <div class="ge-section-header">
                    <div class="ge-section-eyebrow">Your path to global exposure</div>
                    <h2 class="ge-section-h2">How to join an ISIP program</h2>
                    <p class="ge-section-sub">Four steps from admission to international experience</p>
                    <div class="ge-dot-row"><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div></div>
                </div>
                <div class="ge-apply-grid">
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
        <div class="ge-gold-rule"></div>

        <!-- ── PROGRAM OBJECTIVES ── -->
        <section class="ge-section ge-section-gray" id="objectives">
            <div class="container">
                <div class="ge-section-header">
                    <div class="ge-section-eyebrow">What ISIP sets out to do</div>
                    <h2 class="ge-section-h2">Program objectives</h2>
                    <p class="ge-section-sub">Six core outcomes every ISIP participant is designed to achieve</p>
                    <div class="ge-dot-row"><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div></div>
                </div>
                <div class="ge-benefit-grid" style="max-width:1060px;margin:0 auto;">
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
        <div class="ge-gold-rule"></div>

        <!-- ── BENEFITS & HIGHLIGHTS ── -->
        <section class="ge-section ge-section-white" id="benefits">
            <div class="container">
                <div class="ge-section-header">
                    <div class="ge-section-eyebrow">Why participate</div>
                    <h2 class="ge-section-h2">Benefits &amp; highlights</h2>
                    <p class="ge-section-sub">What every ISIP student gains — beyond the certificate</p>
                    <div class="ge-dot-row"><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div></div>
                </div>
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
        <div class="ge-gold-rule"></div>

        <!-- ── FAQ ── -->
        <section class="ge-section ge-section-light" id="faqs">
            <div class="container">
                <div class="ge-section-header">
                    <div class="ge-section-eyebrow">Common questions</div>
                    <h2 class="ge-section-h2">Frequently asked questions</h2>
                    <p class="ge-section-sub">Everything you need to know before applying</p>
                    <div class="ge-dot-row"><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div><div class="ge-dot"></div></div>
                </div>
                <div class="ge-faq-list" id="geFaq">

                    <div class="ge-faq-item">
                        <button class="ge-faq-q">Is a valid passport mandatory?<span class="ge-faq-chevron"><i class="fa-solid fa-chevron-down"></i></span></button>
                        <div class="ge-faq-a">Yes. A valid passport with at least six months of validity from the date of travel is compulsory for participation in any ISIP program.</div>
                    </div>
                    <div class="ge-faq-item">
                        <button class="ge-faq-q">What support is provided for visa processing?<span class="ge-faq-chevron"><i class="fa-solid fa-chevron-down"></i></span></button>
                        <div class="ge-faq-a">MITSDE, in collaboration with authorised partners, assists with visa documentation, submission, and coordination to ensure smooth processing. Detailed guidance is provided during the pre-departure orientation session.</div>
                    </div>
                    <div class="ge-faq-item">
                        <button class="ge-faq-q">What does the program fee include?<span class="ge-faq-chevron"><i class="fa-solid fa-chevron-down"></i></span></button>
                        <div class="ge-faq-a">The fee generally covers airfare, visa processing, accommodation, meals, insurance, local transportation, academic or corporate visits, and entry tickets where applicable. Full inclusions are shared during orientation. For fully funded programs, there is no cost to the student.</div>
                    </div>
                    <div class="ge-faq-item">
                        <button class="ge-faq-q">Are there any costs not included in the program fee?<span class="ge-faq-chevron"><i class="fa-solid fa-chevron-down"></i></span></button>
                        <div class="ge-faq-a">Yes. Personal expenses such as shopping, optional tours, additional meals outside the itinerary, and incidental expenses are not covered by the program fee.</div>
                    </div>
                    <div class="ge-faq-item">
                        <button class="ge-faq-q">Will there be a pre-departure orientation?<span class="ge-faq-chevron"><i class="fa-solid fa-chevron-down"></i></span></button>
                        <div class="ge-faq-a">Yes. A mandatory orientation session is conducted for all selected students covering the itinerary, travel protocols, safety guidelines, cultural etiquette, and program expectations.</div>
                    </div>
                    <div class="ge-faq-item">
                        <button class="ge-faq-q">Will participants receive a certificate?<span class="ge-faq-chevron"><i class="fa-solid fa-chevron-down"></i></span></button>
                        <div class="ge-faq-a">Yes. Students receive an official MITSDE certificate upon successful completion of the international program, which can be added to their professional and academic portfolio.</div>
                    </div>
                    <div class="ge-faq-item">
                        <button class="ge-faq-q">How are participants selected if seats are limited?<span class="ge-faq-chevron"><i class="fa-solid fa-chevron-down"></i></span></button>
                        <div class="ge-faq-a">Selection is based on eligibility criteria, timely registration, and document verification. Seats are allotted on a first-come, first-served basis. Some programs may additionally consider academic performance and field alignment.</div>
                    </div>
                    <div class="ge-faq-item">
                        <button class="ge-faq-q">Can students extend their stay after the program ends?<span class="ge-faq-chevron"><i class="fa-solid fa-chevron-down"></i></span></button>
                        <div class="ge-faq-a">No. Participants are required to adhere to the official itinerary and return with the group unless prior written approval is obtained under exceptional circumstances.</div>
                    </div>
                    <div class="ge-faq-item">
                        <button class="ge-faq-q">Whom should I contact for further queries?<span class="ge-faq-chevron"><i class="fa-solid fa-chevron-down"></i></span></button>
                        <div class="ge-faq-a">For queries related to ISIP programs, contact the MITSDE IRO at <strong>isip@mitsde.com</strong> or the Student Support Team at <strong>support@mitsde.com</strong>.</div>
                    </div>

                </div>
            </div>
        </section>

    </div><!-- /.ge-page -->

    <?php include "footer-new.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function geTab(btn, year) {
            document.querySelectorAll('.ge-tab-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            document.querySelectorAll('.ge-filter-btn').forEach(b => b.classList.remove('active'));
            document.querySelector('.ge-filter-btn').classList.add('active');
            document.querySelectorAll('#ge-isip-tbody tr').forEach(r => r.style.display = '');
        }

        function geFilter(btn, filter) {
            document.querySelectorAll('.ge-filter-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            document.querySelectorAll('#ge-isip-tbody tr').forEach(row => {
                if (filter === 'all') { row.style.display = ''; return; }
                const type   = row.dataset.type;
                const region = row.dataset.region;
                const show =
                    (filter === 'funded' && type   === 'funded') ||
                    (filter === 'self'   && type   === 'self')   ||
                    (filter === 'japan'  && region === 'japan')  ||
                    (filter === 'europe' && region === 'europe') ||
                    (filter === 'sea'    && region === 'sea');
                row.style.display = show ? '' : 'none';
            });
        }

        // FAQ accordion
        document.querySelectorAll('#geFaq .ge-faq-q').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var item = this.closest('.ge-faq-item');
                var isOpen = item.classList.contains('open');
                document.querySelectorAll('#geFaq .ge-faq-item.open').forEach(function (el) {
                    el.classList.remove('open');
                });
                if (!isOpen) { item.classList.add('open'); }
            });
        });
    </script>

</body>
</html>
