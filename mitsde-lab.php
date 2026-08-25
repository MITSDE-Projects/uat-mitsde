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
    <meta property="og:image" content="https://mitsde.com/assets-new/images/academic.webp">

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

        font-family: -apple-system, BlinkMacSystemFont, 'SF Pro Display', 'Segoe UI', system-ui, sans-serif;
        color: var(--lab-ink);
        line-height: 1.55;
    }
    .lab-page *, .lab-page *::before, .lab-page *::after { box-sizing: border-box; }
    .lab-page ul { list-style: none; padding: 0; margin: 0; }
    .lab-page a { color: inherit; }
    .lab-page h1,.lab-page h2,.lab-page h3,.lab-page h4 { letter-spacing: -0.01em; color: var(--lab-navy); }

    .lab-wrap { max-width: 1180px; margin: 0 auto; padding: 0 28px; }

    .lab-eyebrow {
        font-family: 'Courier New', monospace; font-size: 12px; letter-spacing: .14em; text-transform: uppercase;
        color: var(--lab-teal); font-weight: 600; display: flex; align-items: center; gap: 10px; margin-bottom: 14px;
    }
    .lab-eyebrow::before { content: ""; width: 22px; height: 1px; background: var(--lab-teal); }

    .lab-section { padding: 80px 0; background: var(--lab-paper); }
    .lab-section-alt { background: var(--lab-paper-2); }
    .lab-section-head { max-width: 660px; margin-bottom: 48px; }
    .lab-section-head h2 { font-size: clamp(26px,3.2vw,38px); line-height: 1.15; margin-bottom: 12px; }
    .lab-section-head p { color: var(--lab-ink-soft); font-size: 16px; margin: 0; }

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

    /* HERO */
    .lab-hero {
        background: linear-gradient(180deg, #FD771F 0%, #ffffff 100%); color: #fff; position: relative; overflow: hidden;
        margin-top: -120px; padding-top: 120px; padding-bottom: 0;
    }
    .lab-hero::before {
        content: ""; position: absolute; inset: 0;
        background:
            radial-gradient(circle at 12% 20%, rgba(234,88,12,.4), transparent 40%),
            radial-gradient(circle at 90% 75%, rgba(249,115,22,.8), transparent 45%);
        pointer-events: none;
    }
    .lab-hero .page-breadcrumb a { color: rgba(255,255,255,.7); }
    .lab-hero .page-breadcrumb .pb-current { color: rgba(255,255,255,.95); }
    .lab-hero .page-breadcrumb .pb-sep { color: rgba(255,255,255,.4); }
    .lab-hero .pb-line { background: rgba(255,255,255,.3); }

    .lab-hero-inner { position: relative; display: grid; grid-template-columns: 1.2fr 1fr; gap: 40px; align-items: end; padding-top: 32px; }
    .lab-hero-copy .lab-eyebrow { color: #000; }
    .lab-hero-copy .lab-eyebrow::before { background: #000; }
    .lab-hero-copy h1 { color: #fff; font-size: clamp(30px,4vw,50px); line-height: 1.08; margin-bottom: 16px; max-width: 580px; }
    .lab-hero-copy h1 em { font-style: normal; color: var(--lab-gold); }
    .lab-hero-copy p.lab-sub { color: #000;; font-size: 16px; max-width: 480px; margin-bottom: 28px; }
    .lab-hero-actions { display: flex; gap: 12px; flex-wrap: wrap; margin-bottom: 40px; }

    /* BOARDING PASS */
    .lab-pass {
        background: #fff; color: var(--lab-ink); border-radius: 16px; position: relative;
        box-shadow: 0 28px 56px rgba(0,0,0,.32); display: grid; grid-template-columns: 1fr auto;
        transform: rotate(1.4deg); transition: transform .3s ease;
    }
    .lab-pass:hover { transform: rotate(0deg); }
    .lab-pass-main { padding: 22px 20px; }
    .lab-kicker { font-family: 'Courier New', monospace; font-size: 10px; letter-spacing: .12em; color: var(--lab-teal); text-transform: uppercase; margin-bottom: 5px; }
    .lab-pass-main h3 { font-size: 18px; margin-bottom: 4px; }
    .lab-route { font-family: 'Courier New', monospace; font-size: 12px; color: var(--lab-ink-soft); margin-bottom: 14px; }
    .lab-pass-fields { display: grid; grid-template-columns: 1fr 1fr; gap: 11px 16px; }
    .lab-pass-fields div { border-top: 1px dashed var(--lab-line-strong); padding-top: 7px; }
    .lab-pass-fields label { display: block; font-family: 'Courier New', monospace; font-size: 9px; letter-spacing: .1em; text-transform: uppercase; color: var(--lab-ink-soft); margin-bottom: 3px; }
    .lab-pass-fields strong { font-size: 15px; color: var(--lab-navy); font-weight: 700; }
    .lab-pass-stub {
        background: var(--lab-paper-2); width: 110px; padding: 20px 12px; position: relative;
        display: flex; flex-direction: column; justify-content: space-between; text-align: center;
        border-left: 2px dashed var(--lab-line-strong); border-radius: 0 16px 16px 0;
    }
    .lab-pass-stub::before,.lab-pass-stub::after {
        content: ""; position: absolute; width: 20px; height: 20px; background: var(--lab-navy); border-radius: 50%; left: -11px;
    }
    .lab-pass-stub::before { top: -10px; }
    .lab-pass-stub::after { bottom: -10px; }
    .lab-stamp { font-family: 'Courier New', monospace; font-size: 30px; font-weight: 600; color: var(--lab-teal); line-height: 1; }
    .lab-stamp-label { font-family: 'Courier New', monospace; font-size: 9px; letter-spacing: .08em; color: var(--lab-ink-soft); margin-top: 3px; text-transform: uppercase; }
    .lab-barcode { height: 28px; background: repeating-linear-gradient(90deg, var(--lab-navy) 0 2px, transparent 2px 5px); }

    .lab-hero-stats {
        display: grid; grid-template-columns: repeat(4,1fr);
        border-top: 1px solid rgba(0, 0, 0, 0.12); margin-top: 20px;
    }
    .lab-hero-stats div { padding: 18px 4px; text-align: center; border-right: 1px solid rgba(0, 0, 0, 0.15); }
    .lab-hero-stats div:last-child { border-right: none; }
    .lab-hero-stats strong { display: block; font-size: clamp(17px,2.2vw,26px); color: var(--lab-gold); font-weight: 700; }
    .lab-hero-stats span { font-family: 'Courier New', monospace; font-size: 10px; letter-spacing: .06em; text-transform: uppercase; color: #000; }

    @media (max-width: 900px) {
        .lab-hero-inner { grid-template-columns: 1fr; }
        .lab-pass { transform: none; max-width: 400px; }
        .lab-hero-stats { grid-template-columns: repeat(2,1fr); }
        .lab-hero-stats div:nth-child(2) { border-right: none; }
    }

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

    .lab-pillars { display: grid; grid-template-columns: repeat(4,1fr); gap: 18px; }
    .lab-pillar { background: var(--lab-navy); color: #fff; border-radius: var(--lab-radius); padding: 22px 18px; position: relative; overflow: hidden; }
    .lab-pillar::after { content: ""; position: absolute; right: -18px; bottom: -18px; width: 80px; height: 80px; border-radius: 50%; background: rgba(255,255,255,.06); }
    .lab-num { font-family: 'Courier New', monospace; color: var(--lab-gold); font-size: 12px; margin-bottom: 9px; display: block; }
    .lab-pillar h4 { color: #fff; font-size: 16px; margin-bottom: 6px; }
    .lab-pillar p { font-size: 13px; color: rgba(255,255,255,.72); margin: 0; }
    @media (max-width: 960px) { .lab-pillars { grid-template-columns: repeat(2,1fr); } }
    @media (max-width: 560px) { .lab-pillars { grid-template-columns: 1fr; } }

    /* TOOLS STRIP */
    .lab-tools-strip { background: var(--lab-navy-deep); padding: 38px 0; overflow: hidden; }
    .lab-tools-track { display: flex; gap: 12px; width: max-content; animation: labScroll 32s linear infinite; }
    .lab-tools-strip:hover .lab-tools-track { animation-play-state: paused; }
    @keyframes labScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }
    .lab-tool-chip {
        font-family: 'Courier New', monospace; font-size: 12px; color: #fff;
        border: 1px solid rgba(255,255,255,.22); padding: 8px 15px; border-radius: 999px;
        white-space: nowrap; background: rgba(255,255,255,.04);
    }

    /* GATES */
    .lab-gates { display: grid; grid-template-columns: repeat(6,1fr); gap: 14px; }
    .lab-gate {
        border-radius: var(--lab-radius); padding: 18px 15px; color: #fff; min-height: 155px;
        display: flex; flex-direction: column; justify-content: space-between;
    }
    .lab-gate-id { font-family: 'Courier New', monospace; font-size: 10px; opacity: .8; letter-spacing: .08em; }
    .lab-gate h4 { color: #fff; font-size: 14px; margin: 7px 0 3px; }
    .lab-count { font-family: 'Courier New', monospace; font-size: 24px; font-weight: 600; }
    .lab-count small { font-size: 11px; font-weight: 400; opacity: .8; }
    @media (max-width: 960px) { .lab-gates { grid-template-columns: repeat(3,1fr); } }
    @media (max-width: 640px) { .lab-gates { grid-template-columns: repeat(2,1fr); } }

    /* WORKSHOPS */
    .lab-filter-bar { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 28px; }
    .lab-filter-btn {
        background: #fff; border: 1.5px solid var(--lab-line); padding: 8px 15px; border-radius: 999px;
        font-size: 13px; font-weight: 600; color: var(--lab-ink-soft); transition: .15s; cursor: pointer; font-family: inherit;
    }
    .lab-filter-btn:hover { border-color: var(--lab-teal); color: var(--lab-teal); }
    .lab-filter-btn.active { background: var(--lab-gold); border-color: var(--lab-gold); color: #fff; }

    .lab-flagship-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 20px; margin-bottom: 44px; }
    .lab-flagship { background: #fff; border-radius: var(--lab-radius); overflow: hidden; border: 1px solid var(--lab-line); box-shadow: 0 8px 20px rgba(17,24,39,.05); }
    .lab-flagship-top { padding: 17px 19px 13px; border-bottom: 2px dashed var(--lab-line-strong); position: relative; }
    .lab-flagship-top::before,.lab-flagship-top::after {
        content: ""; width: 18px; height: 18px; background: var(--lab-paper-2); border-radius: 50%; position: absolute; bottom: -10px;
    }
    .lab-flagship-top::before { left: -9px; }
    .lab-flagship-top::after { right: -9px; }
    .lab-tag {
        display: inline-block; font-family: 'Courier New', monospace; font-size: 10px; letter-spacing: .08em;
        text-transform: uppercase; padding: 3px 9px; border-radius: 6px; font-weight: 600; margin-bottom: 8px;
    }
    .lab-flagship-top h4 { font-size: 16px; margin-bottom: 4px; color: var(--lab-navy); }
    .lab-meta { font-size: 11.5px; color: var(--lab-ink-soft); font-family: 'Courier New', monospace; }
    .lab-flagship-body { padding: 15px 19px 20px; }
    .lab-flagship-body dt { font-family: 'Courier New', monospace; font-size: 10px; text-transform: uppercase; letter-spacing: .08em; color: var(--lab-teal); margin-top: 10px; }
    .lab-flagship-body dt:first-child { margin-top: 0; }
    .lab-flagship-body dd { font-size: 13px; color: var(--lab-ink-soft); margin-top: 3px; }

    .lab-grid-cards { display: grid; grid-template-columns: repeat(3,1fr); gap: 13px; }
    .lab-stub-card { background: #fff; border: 1px solid var(--lab-line); border-radius: 12px; padding: 13px 15px; display: flex; flex-direction: column; gap: 6px; }
    .lab-stub-card h5 { font-size: 13.5px; color: var(--lab-navy); line-height: 1.3; margin: 0; }
    .lab-stub-meta { font-family: 'Courier New', monospace; font-size: 11px; color: var(--lab-ink-soft); }
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
    .lab-circle { width: 52px; height: 52px; border-radius: 50%; background: var(--lab-gold); color: #fff; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px; font-family: 'Courier New', monospace; font-weight: 600; }
    .lab-process-step h4 { font-size: 14px; margin-bottom: 5px; }
    .lab-process-step p { font-size: 12.5px; color: var(--lab-ink-soft); margin: 0; }
    @media (max-width: 900px) { .lab-process { flex-direction: column; gap: 22px; } .lab-process::before { display: none; } }

    /* SOFTWARE */
    .lab-chip-cloud { display: flex; flex-wrap: wrap; gap: 9px; }
    .lab-chip { border: 1px solid var(--lab-line-strong); padding: 7px 13px; border-radius: 8px; font-size: 13px; font-family: 'Courier New', monospace; background: #fff; }

    /* JOURNEY */
    .lab-journey { display: flex; flex-direction: column; }
    .lab-journey-step { display: grid; grid-template-columns: 80px 1fr; gap: 18px; position: relative; padding-bottom: 28px; }
    .lab-journey-step:last-child { padding-bottom: 0; }
    .lab-journey-step::before { content: ""; position: absolute; left: 39px; top: 44px; bottom: 0; width: 2px; background: var(--lab-line-strong); }
    .lab-journey-step:last-child::before { display: none; }
    .lab-journey-num { width: 80px; height: 80px; border-radius: 50%; background: #fff; border: 2px solid var(--lab-navy); display: flex; align-items: center; justify-content: center; font-family: 'Courier New', monospace; font-weight: 600; color: var(--lab-navy); font-size: 20px; position: relative; z-index: 1; flex-shrink: 0; }
    .lab-journey-text { padding-top: 12px; }
    .lab-stage { font-family: 'Courier New', monospace; font-size: 10px; letter-spacing: .1em; text-transform: uppercase; color: var(--lab-teal); margin-bottom: 4px; }
    .lab-journey-text h4 { font-size: 16px; margin-bottom: 4px; }
    .lab-journey-text p { font-size: 13.5px; color: var(--lab-ink-soft); max-width: 540px; margin: 0; }

    /* CERTIFICATE */
    .lab-cert-wrap { display: grid; grid-template-columns: 1fr 1fr; gap: 44px; align-items: center; }
    .lab-cert-mock { background: #fff; border: 3px solid var(--lab-gold); border-radius: 10px; padding: 28px 24px; position: relative; box-shadow: 0 16px 32px rgba(17,24,39,.1); }
    .lab-cert-mock::before { content: ""; position: absolute; inset: 9px; border: 1px solid var(--lab-gold-tint); border-radius: 6px; pointer-events: none; }
    .lab-cm-eyebrow { font-family: 'Courier New', monospace; font-size: 10px; letter-spacing: .14em; color: var(--lab-gold); text-transform: uppercase; text-align: center; }
    .lab-cert-mock h3 { text-align: center; font-size: 20px; margin: 11px 0 5px; }
    .lab-cm-name { text-align: center; font-size: 17px; color: var(--lab-teal); border-bottom: 1px solid var(--lab-line); display: block; padding: 0 20px 5px; margin: 8px auto; font-weight: 600; }
    .lab-cm-body { text-align: center; font-size: 12px; color: var(--lab-ink-soft); margin-bottom: 14px; }
    .lab-cm-foot { display: flex; justify-content: space-between; font-family: 'Courier New', monospace; font-size: 10px; color: var(--lab-ink-soft); border-top: 1px dashed var(--lab-line-strong); padding-top: 9px; }
    .lab-cert-list { list-style: none; padding: 0; margin: 0; }
    .lab-cert-list li { display: flex; gap: 10px; padding: 10px 0; border-bottom: 1px solid var(--lab-line); font-size: 14px; }
    .lab-cert-list li:last-child { border-bottom: none; }
    .lab-ck { color: var(--lab-teal); font-weight: 700; flex-shrink: 0; }
    @media (max-width: 900px) { .lab-cert-wrap { grid-template-columns: 1fr; } }

    /* BENEFITS */
    .lab-benefits-scroll { overflow-x: auto; border: 1px solid var(--lab-line); border-radius: var(--lab-radius); background: #fff; }
    table.lab-benefits { width: 100%; border-collapse: collapse; min-width: 860px; }
    table.lab-benefits th { font-family: 'Courier New', monospace; font-size: 10px; letter-spacing: .06em; text-transform: uppercase; text-align: left; background: var(--lab-gold); color: #fff; padding: 12px 16px; }
    table.lab-benefits td { padding: 14px 16px; font-size: 13px; border-top: 1px solid var(--lab-line); vertical-align: top; color: var(--lab-ink-soft); }
    table.lab-benefits tr:nth-child(even) td { background: var(--lab-paper-2); }
    table.lab-benefits td.lab-track-name { font-weight: 700; color: var(--lab-navy); }

    /* TESTIMONIALS */
    .lab-testi-track { display: flex; gap: 18px; overflow-x: auto; scroll-snap-type: x mandatory; padding-bottom: 6px; scrollbar-width: none; }
    .lab-testi-track::-webkit-scrollbar { display: none; }
    .lab-testi-card { min-width: 300px; scroll-snap-align: start; background: #fff; border: 1px solid var(--lab-line); border-radius: var(--lab-radius); padding: 22px 20px; position:relative; }
    .lab-stars { color: var(--lab-gold); letter-spacing: 2px; margin-bottom: 10px; }
    .lab-quote { font-size: 14px; color: var(--lab-ink); margin-bottom: 15px; min-height: 84px; }
    .lab-testi-who { display: flex; align-items: center; gap: 10px; }
    .lab-testi-avatar { width: 36px; height: 36px; border-radius: 50%; background: var(--lab-teal-tint); color: var(--lab-teal); display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 13px; }
    .lab-testi-who strong { display: block; font-size: 13px; }
    .lab-testi-who span { font-size: 11px; color: var(--lab-ink-soft); font-family: 'Courier New', monospace; }
    .lab-testi-controls { display: flex; gap: 8px; margin-top: 14px; }
    .lab-testi-controls button { width: 36px; height: 36px; border-radius: 50%; border: 1.5px solid var(--lab-line-strong); background: #fff; font-size: 15px; cursor: pointer; }
    .lab-testi-controls button:hover { border-color: var(--lab-teal); color: var(--lab-teal); }

    /* LAB-SPECIFIC FAQ (avoids script.js conflict with .faq-q) */
    .lab-faq-item { border-bottom: 1px solid var(--lab-line); }
    .lab-faq-q { width: 100%; text-align: left; background: none; border: none; padding: 17px 4px; display: flex; justify-content: space-between; align-items: center; gap: 16px; font-size: 15px; color: var(--lab-navy); font-weight: 600; cursor: pointer; font-family: inherit; }
    .lab-plus { font-family: 'Courier New', monospace; font-size: 20px; color: var(--lab-teal); transition: transform .2s; flex-shrink: 0; }
    .lab-faq-item.lab-open .lab-plus { transform: rotate(45deg); }
    .lab-faq-a { max-height: 0; overflow: hidden; transition: max-height .25s ease; }
    .lab-faq-a p { padding: 0 4px 16px; font-size: 13.5px; color: var(--lab-ink-soft); max-width: 740px; margin: 0; }
    .lab-faq-cols { columns: 2; column-gap: 44px; }
    .lab-faq-cols .lab-faq-item { break-inside: avoid; }
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
<section class="lab-hero">

    <nav class="page-breadcrumb" aria-label="Breadcrumb">
        <span class="pb-line"></span>
        <a href="./">Home</a>
        <span class="pb-sep">/</span>
        <span class="pb-current">MITSDE LABs</span>
    </nav>

    <div class="lab-wrap lab-hero-inner">
        <div class="lab-hero-copy">
            <div class="lab-eyebrow">C15 Batch &middot; Now Open</div>
            <h1>Skills Bhi, Degree Bhi, <em>Job Bhi.</em></h1>
            <p class="lab-sub">23 free, industry-expert-led certification workshops across Project Management, Supply Chain, Marketing, HR, Finance &amp; IT. One day. One weekend. Real tools, real skills, real certificate &mdash; at zero cost.</p>
            <!-- <div class="lab-hero-actions">
                <a href="#lab-register" class="lab-btn lab-btn-primary">Register for a LABs Workshop</a>
                <a href="#lab-faq" class="lab-btn lab-btn-outline">Download Workshop Calendar</a>
            </div> -->
        </div>

        <div class="lab-pass">
            <div class="lab-pass-main">
                <div class="lab-kicker">Workshop Boarding Pass</div>
                <h3>MITSDE LABs</h3>
                <div class="lab-route">FREE &nbsp;&rarr;&nbsp; WEEKEND &nbsp;&rarr;&nbsp; CERTIFIED</div>
                <div class="lab-pass-fields">
                    <div><label>Format</label><strong>1-Day Live</strong></div>
                    <div><label>Fee</label><strong>&#8377;0</strong></div>
                    <div><label>Led by</label><strong>Industry Expert</strong></div>
                    <div><label>Eligibility</label><strong>Every Learner</strong></div>
                </div>
            </div>
            <div class="lab-pass-stub">
                <div>
                    <div class="lab-stamp">23</div>
                    <div class="lab-stamp-label">Workshops</div>
                </div>
                <div class="lab-barcode"></div>
            </div>
        </div>
    </div>

    <div class="lab-wrap">
        <div class="lab-hero-stats">
            <div><strong>23</strong><span>Industry LAB Workshops</span></div>
            <div><strong>6</strong><span>Specialization Tracks</span></div>
            <div><strong>&#8377;1,00,000</strong><span>Certification Value &mdash; Free</span></div>
            <div><strong>4.8 / 5</strong><span>Google Rating &middot; 8,000+ Reviews</span></div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════ WHAT ═══════════════════════════ -->
<section class="lab-section" id="lab-what">
    <div class="lab-wrap">
        <div class="lab-section-head">
            <div class="lab-eyebrow">What are MITSDE LABs</div>
            <h2>One weekend. Five things baked into every workshop.</h2>
            <p>A series of one-day, weekend certification workshops built to sit alongside your academic curriculum &mdash; not compete with it. Every MITSDE learner is eligible, no exceptions.</p>
        </div>
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
<section class="lab-section lab-section-alt">
    <div class="lab-wrap">
        <div class="lab-section-head">
            <div class="lab-eyebrow">Why MITSDE LABs</div>
            <h2>Four value pillars, zero fine print.</h2>
            <p>No separate exam. No extra fees. Just one focused day that adds a recognised, practical skill to your profile.</p>
        </div>
        <div class="lab-pillars">
            <div class="lab-pillar"><span class="lab-num">01</span><h4>Zero Cost</h4><p>Every one of the 23 workshops is included free with your MITSDE program &mdash; no hidden charges.</p></div>
            <div class="lab-pillar"><span class="lab-num">02</span><h4>Industry Experts</h4><p>Practitioners, not just professors &mdash; faculty who use these tools in their day job.</p></div>
            <div class="lab-pillar"><span class="lab-num">03</span><h4>Real Tools</h4><p>Oracle Primavera, Jira, Power BI and more &mdash; the same software listed on job descriptions.</p></div>
            <div class="lab-pillar"><span class="lab-num">04</span><h4>Career-Ready Skills</h4><p>Skills mapped directly to roles recruiters are hiring for right now.</p></div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════ TOOLS STRIP ═══════════════════════════ -->
<div class="lab-tools-strip">
    <div class="lab-tools-track" id="labToolsTrack"></div>
</div>

<!-- ═══════════════════════════ ROADMAP ═══════════════════════════ -->
<section class="lab-section">
    <div class="lab-wrap">
        <div class="lab-section-head">
            <div class="lab-eyebrow">C15 LABs Workshop Roadmap</div>
            <h2>23 workshops, 6 specialization tracks.</h2>
            <p>The current C15 batch spans Semesters 1&ndash;4 and six specialization tracks. Pick the gate that matches where you&rsquo;re headed.</p>
        </div>
        <div class="lab-gates" id="labGatesGrid"></div>
    </div>
</section>

<!-- ═══════════════════════════ WORKSHOPS ═══════════════════════════ -->
<section class="lab-section lab-section-alt" id="lab-workshops">
    <div class="lab-wrap">
        <div class="lab-section-head">
            <div class="lab-eyebrow">Workshop Details</div>
            <h2>Explore all 23 current MITSDE LABs workshops.</h2>
            <p>Filter by track to find the workshop most relevant to your career goals. Each card shows the software you&rsquo;ll use, the level, and the role it prepares you for.</p>
        </div>
        <h3 style="font-size:14px;margin-bottom:16px;color:var(--lab-ink-soft);font-family:'Courier New',monospace;letter-spacing:.04em;">FLAGSHIP WORKSHOPS</h3>
        <div class="lab-flagship-grid" id="labFlagshipGrid"></div>
        <h3 style="font-size:14px;margin:6px 0 16px;color:var(--lab-ink-soft);font-family:'Courier New',monospace;letter-spacing:.04em;">FULL C15 CATALOGUE</h3>
        <div class="lab-filter-bar" id="labFilterBar"></div>
        <div class="lab-grid-cards" id="labWorkshopGrid"></div>
    </div>
</section>

<!-- ═══════════════════════════ FACULTY ═══════════════════════════ -->
<section class="lab-section" id="lab-faculty">
    <div class="lab-wrap">
        <div class="lab-section-head">
            <div class="lab-eyebrow">Faculty Experts</div>
            <h2>Learn directly from practitioners, not just professors.</h2>
            <p>Our LABs faculty bring 10+ years of hands-on industry experience across construction, IT, marketing, HR, finance and supply chain.</p>
        </div>
        <div class="lab-faculty-note">Sample faculty profiles shown below &mdash; swap in real photos, names and credentials for each specialization track before publishing.</div>
        <div class="lab-faculty-grid" id="labFacultyGrid"></div>
    </div>
</section>

<!-- ═══════════════════════════ METHODOLOGY ═══════════════════════════ -->
<section class="lab-section lab-section-alt">
    <div class="lab-wrap">
        <div class="lab-section-head">
            <div class="lab-eyebrow">Hands-on Learning Methodology</div>
            <h2>Every workshop follows the same proven format.</h2>
            <p>Applied skill, not just notes &mdash; the same five-step flow runs across all 23 workshops.</p>
        </div>
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
<section class="lab-section">
    <div class="lab-wrap">
        <div class="lab-section-head">
            <div class="lab-eyebrow">Software Covered</div>
            <h2>The same tools listed on job descriptions.</h2>
        </div>
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
<section class="lab-section lab-section-alt" id="lab-journey">
    <div class="lab-wrap">
        <div class="lab-section-head">
            <div class="lab-eyebrow">Learner Journey</div>
            <h2>From admission to career application.</h2>
            <p>See exactly how a MITSDE LABs workshop fits into your program &mdash; registration through to the certificate in your hand.</p>
        </div>
        <div class="lab-journey" id="labJourneyList"></div>
    </div>
</section>

<!-- ═══════════════════════════ CERTIFICATE ═══════════════════════════ -->
<section class="lab-section">
    <div class="lab-wrap lab-cert-wrap">
        <div class="lab-cert-mock">
            <div class="lab-cm-eyebrow">Certificate of Participation</div>
            <h3>MITSDE LABs</h3>
            <div class="lab-cm-name">Learner Name</div>
            <p class="lab-cm-body">has successfully completed the full-day workshop and assessment for <strong>Oracle Primavera &mdash; Project Management</strong>, C15 Batch.</p>
            <div class="lab-cm-foot"><span>ISSUED &middot; MITSDE</span><span>ID: C15-PM-000</span></div>
        </div>
        <div>
            <div class="lab-eyebrow">Certificates</div>
            <h2 style="margin-bottom:14px;">A credential that actually reflects what you did.</h2>
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
<section class="lab-section lab-section-alt">
    <div class="lab-wrap">
        <div class="lab-section-head">
            <div class="lab-eyebrow">Industry Benefits</div>
            <h2>Every track, mapped to real career roles.</h2>
            <p>So you know exactly how each workshop strengthens your employability.</p>
        </div>
        <div class="lab-benefits-scroll">
            <table class="lab-benefits" id="labBenefitsTable"></table>
        </div>
    </div>
</section>

<!-- ═══════════════════════════ TESTIMONIALS ═══════════════════════════ -->
<section class="lab-section">
    <div class="lab-wrap">
        <div class="lab-section-head">
            <div class="lab-eyebrow">Testimonials</div>
            <h2>In their own words.</h2>
            <p>MITSDE learners who turned a single weekend workshop into a resume-ready skill.</p>
        </div>
        <div>
            <div class="lab-testi-track" id="labTestiTrack"></div>
            <div class="lab-testi-controls">
                <button aria-label="Previous" onclick="labScrollTesti(-1)">&#8592;</button>
                <button aria-label="Next" onclick="labScrollTesti(1)">&#8594;</button>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════ FAQ ═══════════════════════════ -->
<section class="lab-section lab-section-alt" id="lab-faq">
    <div class="lab-wrap">
        <div class="lab-section-head">
            <div class="lab-eyebrow">FAQs</div>
            <h2>Have a question about eligibility, cost, or certification?</h2>
            <p>Find quick answers below &mdash; or reach out to our Student Support team.</p>
        </div>
        <div class="lab-faq-cols" id="labFaqList"></div>
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
/* ── MITSDE LABs — data + render (all IDs/fns prefixed lab) ── */
const LAB_TRACKS = {
  pm:  {name:"Project Management",       color:"var(--pm)",  tint:"var(--pm-tint)"},
  scm: {name:"Supply Chain & Logistics", color:"var(--scm)", tint:"var(--scm-tint)"},
  mkt: {name:"Marketing & Digital",      color:"var(--mkt)", tint:"var(--mkt-tint)"},
  hr:  {name:"Human Resources",          color:"var(--hr)",  tint:"var(--hr-tint)"},
  fin: {name:"Finance & Investment",     color:"var(--fin)", tint:"var(--fin-tint)"},
  it:  {name:"Information Technology",   color:"var(--it)",  tint:"var(--it-tint)"}
};

const LAB_WORKSHOPS = [
  {track:"pm",  name:"Oracle Primavera", software:"Oracle Primavera P6", level:"Advanced", role:"Planning Engineer / Project Scheduler", flagship:true,
   outcome:"Plan, schedule and control large infrastructure and construction projects using Primavera P6.",
   usecase:"Used in 70%+ of global infrastructure and construction projects for scheduling and planning (Oracle, 2024).",
   career:"Planning Engineer, Project Scheduler, Construction PM — market rate for external certification: ₹20,000–50,000."},
  {track:"pm",  name:"Essentials of Agile Project Management", software:"Jira, Scrum/Kanban boards", level:"Intermediate", role:"Scrum Master / Agile Coach", flagship:true,
   outcome:"Apply Agile/Scrum ceremonies, sprint planning and backlog management to real projects.",
   usecase:"Adopted by 71% of global companies to manage change and accelerate delivery (PMI, 2023).",
   career:"Scrum Master, Agile Coach, IT Project Manager — market rate for external certification: ₹25,000–50,000."},
  {track:"pm",  name:"Microsoft Project & Jira", software:"MS Project, Jira", level:"Intermediate", role:"Project Coordinator / PMO Analyst", flagship:true,
   outcome:"Build Gantt charts, manage resources and track tasks across two leading PM tools.",
   usecase:"Trusted by 45% of Fortune 500 firms for task tracking and collaboration (Gartner, 2024).",
   career:"Project Coordinator, PMO Analyst — market rate for external certification: ₹10,000–30,000."},
  {track:"pm",  name:"Operations Research", software:"Excel Solver, Linear Programming tools", level:"Advanced", role:"Operations Analyst / Consultant", flagship:true,
   outcome:"Use quantitative optimisation techniques to solve real operational decision problems.",
   usecase:"Analytics-driven roles have grown 35% (LinkedIn, 2024).",
   career:"Operations Analyst, Business Consultant — market rate for external certification: ₹5,000–25,000."},
  {track:"pm",  name:"Managerial Communication", software:"MS Office, Role-play Simulators", level:"Foundation", role:"Team Lead / Manager (all functions)"},
  {track:"pm",  name:"Lean Management Systems", software:"Value Stream Mapping Tools, Excel", level:"Intermediate", role:"Process Excellence / Ops Manager"},
  {track:"scm", name:"Supply Chain Analytics", software:"Excel, Power BI", level:"Advanced", role:"Supply Chain Analyst", flagship:true,
   outcome:"Translate SCM data into dashboards and decisions using analytics tools.",
   usecase:"Among the top 10 tech careers globally, with 12% salary CAGR (McKinsey, 2024).",
   career:"Supply Chain Analyst — market rate for external certification: ₹8,000–35,000."},
  {track:"scm", name:"Introduction to Logistics & SCM", software:"SCM digital platforms, Excel", level:"Foundation", role:"SCM Integration Manager", flagship:true,
   outcome:"Understand end-to-end SCM integration and the trends reshaping global logistics post-pandemic.",
   usecase:"A 28% surge in supply-chain jobs needing integration skills was recorded post-COVID (World Bank, 2024).",
   career:"SCM Integration Manager — market rate for external certification: ₹15,000–40,000."},
  {track:"scm", name:"Inventory Management", software:"Excel, ERP Simulators", level:"Intermediate", role:"Inventory / Warehouse Manager"},
  {track:"scm", name:"Emerging Trends in SCM & Logistics", software:"SCM Digital Platforms", level:"Advanced", role:"Supply Chain Strategist"},
  {track:"scm", name:"Achieving Supply Chain Integration", software:"ERP/SCM Integration Tools", level:"Advanced", role:"Supply Chain Integration Manager"},
  {track:"mkt", name:"Marketing Analytics", software:"Excel, Google Analytics, Power BI", level:"Intermediate", role:"Marketing Analyst"},
  {track:"mkt", name:"Social Media Marketing", software:"Meta Business Suite, Canva", level:"Foundation", role:"Social Media Executive"},
  {track:"mkt", name:"Social Media Analytics & Future Trends", software:"Meta Insights, Google Analytics", level:"Intermediate", role:"Digital Marketing Analyst"},
  {track:"mkt", name:"Social Media, Influencer & Content Marketing", software:"Canva, Meta Suite, Content Calendars", level:"Intermediate", role:"Content / Influencer Marketing Manager"},
  {track:"mkt", name:"Marketing Analytics & Future Trends", software:"Power BI, Google Analytics", level:"Advanced", role:"Marketing Analytics Lead"},
  {track:"mkt", name:"Advanced Marketing Analytics", software:"Power BI, Excel, Google Analytics", level:"Advanced", role:"Senior Marketing Analyst"},
  {track:"mkt", name:"Digital & Social Media Marketing", software:"Meta Suite, Google Ads, Canva", level:"Foundation", role:"Digital Marketing Executive"},
  {track:"hr",  name:"HR Analytics", software:"Excel, Power BI, HRIS Dashboards", level:"Intermediate", role:"HR Analyst / HRBP"},
  {track:"hr",  name:"Human Resource Information System", software:"HRIS / HRMS Platforms", level:"Intermediate", role:"HRIS Specialist"},
  {track:"fin", name:"Security Analysis & Portfolio Management", software:"Excel, Bloomberg-style Terminals", level:"Advanced", role:"Investment / Portfolio Analyst"},
  {track:"fin", name:"Fintech & Digital Banking", software:"Digital Banking Platforms, Fintech Case Tools", level:"Intermediate", role:"Fintech / Digital Banking Associate"},
  {track:"it",  name:"Cybersecurity & Risk Management", software:"Risk Assessment Frameworks, Security Tools", level:"Advanced", role:"IT Risk / Security Analyst"}
];

const LAB_JOURNEY = [
  ["Admission","Learner is admitted into a MITSDE program (PGDM, PGDM Exec, PGCM, EMBA)."],
  ["Semester Completion","Learner completes the remaining subjects of the relevant semester (for curriculum-linked LABs)."],
  ["LAB Registration","Registration form shared via email + Telegram; learner registers for an upcoming session."],
  ["Expert Workshop","Full-day, weekend, live workshop led by an industry practitioner."],
  ["Hands-on Practice","Learner works directly with the tool/software — Jira, Primavera, Power BI and more."],
  ["Assessment","Internal + external assessment conducted the same day — no separate proctored exam."],
  ["Certificate","Certificate of Participation issued for full attendance and completed assessment."],
  ["Career Application","Learner applies the certified skill in placements, projects, or current role."]
];

const LAB_BENEFITS = [
  ["Project Management","Construction, IT, Infrastructure, Consulting","Project Coordinator, Scrum Master, Planning Engineer","High — remains among the most requested skills in job postings","AI-assisted scheduling, hybrid Agile-Waterfall"],
  ["Supply Chain & Logistics","Manufacturing, E-commerce, FMCG, Infrastructure","SCM Analyst, Inventory Manager, Logistics Executive","Very High — post-pandemic resilience investment continues","Predictive analytics, supply-chain digital twins"],
  ["Marketing & Digital","E-commerce, D2C, BFSI, EdTech","Digital Marketing Executive, Analytics Lead","Very High — ad spend and content-led growth expanding","AI-generated content, social commerce"],
  ["Human Resources","All industries, especially large enterprises","HR Analyst, HRBP, HRIS Specialist","High — data-driven HR decision-making is a growing priority","People analytics, HRIS/HRMS adoption"],
  ["Finance & Investment","BFSI, Wealth Management, Fintech","Investment Analyst, Portfolio Analyst, Fintech Associate","High — fintech and digital banking adoption accelerating","Digital banking, robo-advisory"],
  ["Information Technology","IT Services, BFSI, Enterprises of all sizes","IT Risk Analyst, Security Analyst","Very High — cybersecurity roles among fastest-growing globally","Zero-trust security, AI-driven threat detection"]
];

const LAB_TESTIMONIALS = [
  ["Ananya R.","C15 · PGDM Executive","Oracle Primavera","AR","The Primavera workshop gave me a scheduling skill I now use every week at my construction-firm job — and it cost me nothing."],
  ["Rohit K.","C15 · PGDM","Agile Project Management","RK","One Saturday, full-day, and I walked out actually knowing how to run a sprint in Jira — not just define one."],
  ["Sneha M.","C15 · EMBA","Marketing Analytics","SM","As a working professional, the weekend format meant I didn't have to choose between the workshop and my job."],
  ["Devansh P.","C15 · PGCM","Supply Chain Analytics","DP","Building an actual Power BI dashboard from SCM data made the concept click in a way lectures hadn't."],
  ["Priya S.","C15 · PGDM Executive","HR Analytics","PS","The case study was based on a real HR problem, and the certificate is now on my resume."]
];

const LAB_FAQS = [
["Who is eligible to attend MITSDE LABs workshops?","Eligibility: Learners who have completed the 1st semester, are currently in the 2nd semester, and have opted for the mentioned LABs subject in their curriculum."],
["Is there any cost to attend a LABs workshop?","No. All MITSDE LABs workshops are offered completely free of cost — certifications that would otherwise cost up to ₹1,00,000 in the open market."],
["Are the workshops mandatory for every learner?","Only for learners whose program structure includes a specific LAB subject as a credited course. For everyone else, LABs are optional, free skill-enhancement workshops."],
["Will I receive a certificate after the workshop?","Yes. Learners who attend the entire full-day session and complete the assessment receive a Certificate of Participation/Completion."],
["What happens if I miss part of the workshop day?","Full attendance for the entire workshop is required to be eligible for the certificate. Please check with the Academic team for your specific case."],
["Are MITSDE LABs sessions online or offline?","Sessions are conducted live (virtually, via the LMS) on weekends, led by an industry expert in real time, with recordings made available afterward."],
["On which days are the workshops held?","Workshops are conducted exclusively on weekends (Saturday or Sunday) as full-day sessions."],
["Do I need to install any software before the workshop?","This depends on the specific workshop's tools. Software/tool requirements and setup instructions are shared in advance via email/LMS."],
["How is my final score calculated for a curriculum LAB subject?","Your score combines an internal and an external assessment, both conducted the same day as the workshop — no separate proctored exam."],
["Can I attend more than one LABs workshop?","Yes. Learners can attend multiple sessions across Project Management, Supply Chain, Marketing, HR, Finance and IT, based on availability and eligibility."],
["How will I know when a new LABs session is scheduled?","The session calendar and registration form are shared in advance via your registered email and the official MITSDE Telegram channel."],
["Where do I find the workshop on my LMS after registering?","A course container titled \"MITSDE LABs\" appears on your LMS Dashboard, and the session reflects under \"Today's Classes\" in your LMS Calendar."],
["Are session recordings available if I can't attend live?","Yes, recordings of MITSDE LABs sessions are made available on the LMS for review."],
["Who conducts the MITSDE LABs workshops?","Sessions are led by seasoned industry practitioners and subject matter experts with 10+ years of real-world, tool-specific experience."],
["What's the difference between MITSDE LABs and my core PGDM/MBA subjects?","LABs are practical, tool-focused, single-day certification workshops that complement your core academic curriculum."],
["How many LABs workshops does the C15 batch offer?","The current C15 curriculum spans 23 distinct LAB workshops across six specialization tracks."],
["Will attending a LABs workshop help me get placed?","Yes. LABs workshops build in-demand, tool-specific skills that are directly referenced by recruiters and strengthen your interview readiness."],
["Is the LABs certificate recognised by employers?","It validates hands-on exposure to industry-standard tools taught by practitioners — a skill-validation credential distinct from vendor-issued certifications."],
["Can working professionals attend MITSDE LABs?","Yes — since sessions are held on weekends, working professionals in MITSDE's executive programs can attend without disrupting work."],
["What if I have a technical issue during the live session?","Learner support is available through the Student Support helpdesk; recordings are also provided so you don't lose access to content."],
["Do I need prior experience with the software taught?","No prior experience is required for most workshops — sessions take learners from foundational understanding to hands-on application within the day."]
];

const LAB_FACULTY = [
  {initials:"AK", name:"Arjun Kulkarni",  role:"Project Management",       bio:"15+ yrs, Infrastructure Planning"},
  {initials:"NM", name:"Neha Mehta",       role:"Supply Chain & Logistics",  bio:"12+ yrs, FMCG Operations"},
  {initials:"RS", name:"Rahul Sinha",      role:"Marketing & Digital",       bio:"10+ yrs, D2C Growth Marketing"},
  {initials:"PV", name:"Priya Verma",      role:"Human Resources",           bio:"13+ yrs, HR Analytics & HRIS"}
];

/* ── RENDER ── */
document.getElementById('labToolsTrack').innerHTML =
  Array(2).fill(["MS Project","Jira","Oracle Primavera P6","Power BI","Excel Solver","Meta Business Suite",
    "Google Analytics","HRIS/HRMS","Digital Banking","Cybersecurity Frameworks","Bloomberg Terminals","Canva"])
  .flat().map(t=>`<div class="lab-tool-chip">${t}</div>`).join('');

document.getElementById('labGatesGrid').innerHTML = Object.entries(LAB_TRACKS).map(([key,t])=>{
  const count = LAB_WORKSHOPS.filter(w=>w.track===key).length;
  return `<div class="lab-gate" style="background:${t.color}">
    <div class="lab-gate-id">GATE · ${key.toUpperCase()}</div>
    <div><h4>${t.name}</h4></div>
    <span class="lab-count">${count}<small> workshops</small></span>
  </div>`;
}).join('');

document.getElementById('labFlagshipGrid').innerHTML = LAB_WORKSHOPS.filter(w=>w.flagship).map(w=>{
  const t = LAB_TRACKS[w.track];
  return `<div class="lab-flagship">
    <div class="lab-flagship-top">
      <span class="lab-tag" style="background:${t.tint};color:${t.color}">${t.name}</span>
      <h4>${w.name}</h4>
      <div class="lab-meta">${w.software} · ${w.level} · 1-Day Weekend</div>
    </div>
    <div class="lab-flagship-body">
      <dt>Learning Outcome</dt><dd>${w.outcome}</dd>
      <dt>Industry Use Case</dt><dd>${w.usecase}</dd>
      <dt>Career Benefit</dt><dd>${w.career}</dd>
    </div>
  </div>`;
}).join('');

function labRenderWorkshopGrid(filter){
  const list = filter==='all' ? LAB_WORKSHOPS : LAB_WORKSHOPS.filter(w=>w.track===filter);
  document.getElementById('labWorkshopGrid').innerHTML = list.map(w=>{
    const t = LAB_TRACKS[w.track];
    return `<div class="lab-stub-card">
      <span class="lab-tag" style="background:${t.tint};color:${t.color}">${t.name}</span>
      <h5>${w.name}${w.flagship?' ★':''}</h5>
      <div class="lab-stub-meta">${w.software}</div>
      <div class="lab-stub-meta">${w.level} · ${w.role}</div>
    </div>`;
  }).join('');
}
document.getElementById('labFilterBar').innerHTML = ['all',...Object.keys(LAB_TRACKS)].map(k=>{
  const label = k==='all' ? 'All Tracks (23)' : `${LAB_TRACKS[k].name} (${LAB_WORKSHOPS.filter(w=>w.track===k).length})`;
  return `<button class="lab-filter-btn${k==='all'?' active':''}" data-k="${k}">${label}</button>`;
}).join('');
document.querySelectorAll('.lab-filter-btn').forEach(btn=>{
  btn.addEventListener('click',()=>{
    document.querySelectorAll('.lab-filter-btn').forEach(b=>b.classList.remove('active'));
    btn.classList.add('active');
    labRenderWorkshopGrid(btn.dataset.k);
  });
});
labRenderWorkshopGrid('all');

document.getElementById('labFacultyGrid').innerHTML = LAB_FACULTY.map(f=>`
  <div class="lab-faculty-card">
    <div class="lab-faculty-avatar">${f.initials}</div>
    <h4>${f.name}</h4>
    <div class="lab-role">${f.role}</div>
    <p>${f.bio}</p>
  </div>`).join('');

document.getElementById('labJourneyList').innerHTML = LAB_JOURNEY.map((j,i)=>`
  <div class="lab-journey-step">
    <div class="lab-journey-num">${i+1}</div>
    <div class="lab-journey-text">
      <div class="lab-stage">Step ${i+1}</div>
      <h4>${j[0]}</h4>
      <p>${j[1]}</p>
    </div>
  </div>`).join('');

document.getElementById('labBenefitsTable').innerHTML =
  '<thead><tr><th>Track</th><th>Industries</th><th>Job Roles</th><th>Career Demand</th><th>Emerging Tech</th></tr></thead>' +
  '<tbody>' + LAB_BENEFITS.map(b=>`<tr>${b.map((c,i)=>`<td class="${i===0?'lab-track-name':''}">${c}</td>`).join('')}</tr>`).join('') + '</tbody>';

document.getElementById('labTestiTrack').innerHTML = LAB_TESTIMONIALS.map(t=>`
  <div class="lab-testi-card">
    <div class="lab-stars">★★★★★</div>
    <p class="lab-quote">"${t[4]}"</p>
    <div class="lab-testi-who">
      <div class="lab-testi-avatar">${t[3]}</div>
      <div><strong>${t[0]}</strong><span>${t[1]} · ${t[2]}</span></div>
    </div>
  </div>`).join('');

function labScrollTesti(dir){ document.getElementById('labTestiTrack').scrollBy({left:dir*320,behavior:'smooth'}); }

document.getElementById('labFaqList').innerHTML = LAB_FAQS.map((f,i)=>`
  <div class="lab-faq-item" id="lab-faq-${i}">
    <button class="lab-faq-q" onclick="labToggleFaq(${i})"><span>${f[0]}</span><span class="lab-plus">+</span></button>
    <div class="lab-faq-a"><p>${f[1]}</p></div>
  </div>`).join('');

function labToggleFaq(i){
  const item = document.getElementById('lab-faq-'+i);
  const ans  = item.querySelector('.lab-faq-a');
  const open = item.classList.contains('lab-open');
  item.classList.toggle('lab-open');
  ans.style.maxHeight = open ? null : ans.scrollHeight+'px';
}
</script>

</body>
</html>
