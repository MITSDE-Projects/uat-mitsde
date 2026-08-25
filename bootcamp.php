<?php $pagename = "MITSDE Bootcamp"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>MITSDE Bootcamp &mdash; 6 AI-Powered Industry Certifications in Business Analytics &amp; Digital Marketing</title>
    <meta name="description" content="Earn 6 industry certifications in Business Analytics and Digital Marketing alongside your MITSDE PG programme. Live, hands-on, AI-integrated sessions every Saturday and Sunday." />
    <meta name="keywords" content="MITSDE Bootcamp, business analytics certification, digital marketing certification, AI skills, industry certification, free certification, MITSDE" />

    <link rel="canonical" href="https://mitsde.com/bootcamp" />

    <meta property="og:title" content="MITSDE Bootcamp — 6 AI-Powered Industry Certifications">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/bootcamp">
    <meta property="og:description" content="6 free industry certifications in Business Analytics and Digital Marketing. Live, hands-on, AI-integrated — included in your MITSDE programme.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://mitsde.com/assets-new/images/bootcamp.webp">

    <link rel="icon" type="image/png" href="assets-new/images/favicon-mit.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css-new/styles.css" />

    <style>
    /* ── Bootcamp page — all rules scoped to .bc-page ── */
    .bc-page { --bc-orange: #ea580c; --bc-orange-tint: #fef3ee; --bc-paper: #fdf8f5; --bc-line: #e5e7eb; --bc-navy: #111827; }

    /* Revamp banner */
    .bc-revamp-bar { background: #ea580c; color: #fff; padding: 14px 0; font-size: 14px; }
    .bc-revamp-bar span { color: #fbbf24; font-weight: 600; }

    /* Anchor nav */
    .bc-anchor-nav { position: sticky; top: 72px; z-index: 100; background: #fff; border-bottom: 1px solid var(--bc-line); }
    .bc-anchor-scroll { display: flex; overflow-x: auto; scrollbar-width: none; }
    .bc-anchor-scroll::-webkit-scrollbar { display: none; }
    .bc-anchor-nav .nav-link { font-size: 13px; font-weight: 600; color: #6b7280; padding: 10px 14px; white-space: nowrap; border-radius: 0; border-bottom: 2px solid transparent; }
    .bc-anchor-nav .nav-link:hover,
    .bc-anchor-nav .nav-link.active { color: var(--bc-orange); border-bottom-color: var(--bc-orange); }

    /* Proof bar */
    .bc-proof-bar { background: var(--bc-navy); padding: 18px 0; }
    .bc-proof-item { text-align: center; border-right: 1px solid rgba(255,255,255,.15); padding: 6px 18px; }
    .bc-proof-item:last-child { border-right: none; }
    .bc-proof-label { font-size: 13px; font-weight: 600; color: #fff; }

    .section-label{display:inline-block;font-size:11px;font-weight:700;color: #f97316;text-transform:uppercase;letter-spacing:.1em;margin-bottom:8px}

    /* AI Gap stat cards */
    .bc-stat-card { background: var(--bc-orange-tint); border-radius: 10px; padding: 18px 14px; text-align: center; height: 100%; }
    .bc-stat-val { display: block; font-size: clamp(22px,2.8vw,36px); font-weight: 700; color: var(--bc-orange); line-height: 1.1; margin-bottom: 6px; }
    .bc-stat-src { font-size: 11px; color: #6b7280; margin-top: 4px; }

    /* Cert cards */
    .bc-cert-card { background: #fff; border: 1px solid var(--bc-line); border-top: 3px solid var(--bc-orange); border-radius: 8px; padding: 20px; height: 100%; }
    .bc-cert-code { display: inline-block; background: var(--bc-orange-tint); color: var(--bc-orange); font-size: 11px; font-weight: 700; padding: 3px 9px; border-radius: 4px; margin-bottom: 10px; font-family: 'Courier New', monospace; letter-spacing: .04em; }
    .bc-cert-tools { font-size: 12px; color: #6b7280; margin-top: 10px; }
    .bc-cert-ai { font-size: 12px; background: #f0fdf4; color: #15803d; border-radius: 6px; padding: 8px 10px; margin-top: 10px; }

    /* Learning Arc table */
    .bc-arc-table { width: 100%; border-collapse: separate; border-spacing: 0; }
    .bc-arc-table th { background: var(--bc-navy); color: #fff; font-size: 12px; font-weight: 600; padding: 10px 14px; text-transform: uppercase; letter-spacing: .04em; }
    .bc-arc-table td { border: 1px solid var(--bc-line); padding: 12px 14px; font-size: 13px; vertical-align: top; }
    .bc-arc-track { font-size: 11px; font-weight: 700; color: #fff; padding: 3px 8px; border-radius: 4px; display: inline-block; margin-bottom: 6px; }
    .bc-arc-step { background: var(--bc-orange-tint); border-radius: 6px; padding: 10px; text-align: center; font-size: 12px; position: relative; }
    .bc-arc-step-label { font-size: 10px; font-weight: 700; color: var(--bc-orange); text-transform: uppercase; margin-bottom: 3px; }
    .bc-arc-arrow { font-size: 20px; color: var(--bc-orange); align-self: center; flex-shrink: 0; }

    /* Tools chips */
    .bc-chip { display: inline-block; border: 1px solid var(--bc-line); padding: 6px 14px; border-radius: 999px; font-size: 13px; background: #fff; margin: 3px; transition: border-color .15s, color .15s; }
    .bc-chip:hover { border-color: var(--bc-orange); color: var(--bc-orange); }
    .bc-filter-btn { background: #fff; border: 1.5px solid var(--bc-line); padding: 7px 16px; border-radius: 999px; font-size: 13px; font-weight: 600; color: #6b7280; cursor: pointer; transition: .15s; font-family: inherit; }
    .bc-filter-btn:hover { border-color: var(--bc-orange); color: var(--bc-orange); }
    .bc-filter-btn.active { background: var(--bc-orange); border-color: var(--bc-orange); color: #fff; }

    /* AI in Sessions */
    .bc-ai-row { background: #fff; border: 1px solid var(--bc-line); border-radius: 8px; padding: 16px; margin-bottom: 12px; }
    .bc-ai-cert { font-size: 11px; font-weight: 700; font-family: 'Courier New', monospace; color: var(--bc-orange); background: var(--bc-orange-tint); padding: 2px 8px; border-radius: 4px; }
    .bc-ai-headline { font-weight: 600; font-size: 14px; margin: 6px 0 4px; }
    .bc-ai-tools { font-size: 12px; color: #6b7280; }

    .sched-badge{font-size:10px;font-weight:700;padding:3px 8px;border-radius:4px;text-transform:uppercase}
.sched-badge.ba{background:#E6EEF8;color:var(--navy)}
.sched-badge.dm{background:var(--teal-light);color:var(--teal)}
.sched-badge.labs{background:#EDE9FE;color:var(--purple)}

    /* Quote / testimonial cards */
    .bc-testi { background: var(--bc-paper); border-radius: 10px; padding: 22px; border-left: 3px solid var(--bc-orange); height: 100%; }
    .bc-testi-stars { color: #f97316; margin-bottom: 10px; }
    .bc-testi-quote { font-size: 14px; color: #374151; margin-bottom: 14px; }
    .bc-testi-avatar { width: 38px; height: 38px; border-radius: 50%; background: linear-gradient(135deg, var(--bc-navy), var(--bc-orange)); color: #fff; display: inline-flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px; flex-shrink: 0; }

    /* Expert card avatar */
    .bc-expert-avatar { width: 52px; height: 52px; border-radius: 50%; background: linear-gradient(135deg, var(--bc-navy), var(--bc-orange)); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 16px; margin: 0 auto 12px; }

    /* Faculty quote card */
    .bc-faculty-card { background: #fff; border: 1px solid var(--bc-line); border-radius: 10px; padding: 22px; height: 100%; }
    .bc-faculty-quote { font-size: 14px; color: #374151; border-left: 3px solid var(--bc-orange); padding-left: 14px; margin-bottom: 16px; }

    /* CTA strip */
    .bc-cta { background: linear-gradient(180deg, #ffcead 0%, #FD771F 100%); color: #fff; padding: 64px 0; text-align: center; }
    .bc-cta h2 { color: #fff; font-size: clamp(22px,3vw,36px); margin-bottom: 10px; }
    .bc-cta p { color: rgba(255,255,255,.88); font-size: 16px; margin-bottom: 28px; max-width: 680px; margin-left: auto; margin-right: auto; }
    .cta-strip-links{margin-top:22px;display:flex;gap:22px;justify-content:center;flex-wrap:wrap}
    .cta-strip-links a{color:rgba(255,255,255,.65);font-size:0.9rem;text-decoration:none;border-bottom:1px solid rgba(255,255,255,.25);padding-bottom:2px}
    .cta-strip-links a:hover{color:#fff;border-color:#fff}

    section[id] { scroll-margin-top: 110px; }

    @media (max-width: 768px) {
        .bc-proof-item { border-right: none; border-bottom: 1px solid rgba(255,255,255,.15); }
        .bc-proof-item:last-child { border-bottom: none; }
    }
    </style>

    <?php include "5-common-seo-tag-1.php" ?>
</head>

<body>
<?php include "5-common-seo-tag-2.php" ?>
<?php include "header-new.php" ?>

<div class="bc-page">

<!-- ═══════════════════════════════════════════════
   HERO
════════════════════════════════════════════════ -->
<section class="hero ph-hero">

    <nav class="page-breadcrumb" aria-label="Breadcrumb">
        <span class="pb-line"></span>
        <a href="./">Home</a>
        <span class="pb-sep">/</span>
        <span class="pb-current">MITSDE Bootcamp</span>
    </nav>

    <div class="container">
        <div class="ph-layout py-5">

            <div class="ph-left">
                <div class="d-flex gap-2 flex-wrap mb-3">
                    <span style="display:inline-block;background:var(--bc-orange-tint);color:var(--bc-orange);font-size:12px;font-weight:600;padding:5px 12px;border-radius:999px;">&#9733; Included in your MITSDE programme</span>
                    <span style="display:inline-block;background:#f0fdf4;color:#16a34a;font-size:12px;font-weight:600;padding:5px 12px;border-radius:999px;">&#10022; 100% Free &mdash; part of your fee</span>
                </div>
                <h1 class="ph-heading">Your PG programme.<br> Plus <span class="text-orange">6 industry certifications.</span><br> All AI-powered. All free.</h1>
                <div class="ph-sub" style="max-width: 400px;">
                    <p>Not just a degree. A structured certification stack in Business Analytics and Digital Marketing &mdash; delivered live, hands-on, and AI-integrated every Saturday and Sunday alongside your academic calendar.</p>
                </div>
                <!-- <button type="button" class="btn btn-dark rounded-pill px-4 py-2"
                    data-bs-toggle="modal" data-bs-target="#downloadModal">Apply Now &rarr; Secure Your Seat</button> -->
            </div>

            <div class="ph-right">
                <img src="assets-new/images/application-process.webp" alt="MITSDE Bootcamp — 6 AI-Powered Certifications" />
            </div>

        </div>
    </div>

</section>

<!-- ═══════════════════════════════════════════════
   REVAMP BANNER
════════════════════════════════════════════════ -->
<div class="bc-revamp-bar">
    <div class="container text-center">
        &#x1F504; <span>MITSDE Bootcamp has been completely revamped for 2026&ndash;27</span> &mdash; Every session now integrates AI tools as a core skill component. From ChatGPT-assisted SQL to Julius AI dashboards to Gemini-powered marketing reports &mdash; you will use AI the way industry actually uses it.
    </div>
</div>

<!-- ═══════════════════════════════════════════════
   PROOF BAR — 5 trust chips
════════════════════════════════════════════════ -->
<div class="bc-proof-bar">
    <div class="container">
        <div class="row g-0 justify-content-center text-center">
            <div class="col bc-proof-item"><span class="bc-proof-label">JD-aligned tools</span></div>
            <div class="col bc-proof-item"><span class="bc-proof-label">SME-taught</span></div>
            <div class="col bc-proof-item"><span class="bc-proof-label">Your own laptop</span></div>
            <div class="col bc-proof-item"><span class="bc-proof-label">Sat &amp; Sun</span></div>
            <div class="col bc-proof-item"><span class="bc-proof-label">Zero extra cost</span></div>
        </div>
    </div>
</div>

<!-- ═══════════════════════════════════════════════
   ANCHOR NAV
════════════════════════════════════════════════ -->
<div class="bc-anchor-nav">
    <div class="container">
        <div class="bc-anchor-scroll">
            <nav class="nav">
                <a class="nav-link" href="#overview">Overview</a>
                <a class="nav-link" href="#ai-gap">AI &amp; Skills Gap</a>
                <a class="nav-link" href="#certifications">Certifications</a>
                <a class="nav-link" href="#tools">Tools</a>
                <a class="nav-link" href="#ai-sessions">AI in Sessions</a>
                <a class="nav-link" href="#career">Career Outcomes</a>
                <a class="nav-link" href="#faculty">Faculty</a>
                <a class="nav-link" href="#stories">Student Stories</a>
                <a class="nav-link" href="#experts">Industry Experts</a>
                <a class="nav-link" href="#schedule">Schedule</a>
                <a class="nav-link" href="#why">Why MITSDE</a>
            </nav>
        </div>
    </div>
</div>

<!-- ═══════════════════════════════════════════════
   OVERVIEW
════════════════════════════════════════════════ -->
<section class="about-section" id="overview">
    <div class="container">
        <h2 class="section-heading">What is the <span class="text-orange">MITSDE Bootcamp?</span></h2>
        <div class="row g-4 align-items-center">
            <div class="col-md-6">
                <p class="fs-5 mb-3">A structured six-certification stack built into your MITSDE PG programme &mdash; not as an add-on, but as a parallel skill layer running alongside your academic calendar.</p>
                <p class="text-muted mb-0">Every session runs live on weekends. Every tool is one employers actually use. And the cost to you is exactly &#8377;0 extra.</p>
            </div>
            <div class="col-md-6">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="p-3 rounded-3" style="background:var(--bc-orange-tint)">
                            <div class="fw-bold text-orange fs-5 mb-1">Business Analytics Track</div>
                            <div class="text-muted" style="font-size:13px">4 certifications &mdash; Excel, Data Analytics, Data Science &amp; Quantitative BA</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 rounded-3" style="background:#eff6ff">
                            <div class="fw-bold fs-5 mb-1" style="color:#2563eb">Digital Marketing Track</div>
                            <div class="text-muted" style="font-size:13px">2 certifications &mdash; Digital Marketing Essentials &amp; Applications + 3 Labs</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 rounded-3" style="background:#f0fdf4">
                            <div class="fw-bold fs-5 mb-1" style="color:#16a34a">3 Labs</div>
                            <div class="text-muted" style="font-size:13px">Applied capstone labs in Marketing Analytics, Social Media &amp; Future Intelligence</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 rounded-3" style="background:#fdf4ff">
                            <div class="fw-bold fs-5 mb-1" style="color:#9333ea">40+ Tools</div>
                            <div class="text-muted" style="font-size:13px">Excel, Python, GA4, Meta Suite, ChatGPT, Julius AI and more</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
   AI & SKILLS GAP
════════════════════════════════════════════════ -->
<section class="about-section" id="ai-gap" style="background:var(--bc-paper)">
    <div class="container">
        <div class="section-label">The AI Skills Gap — Why This Matters Now</div>
        <h2 class="section-heading">India has a 51 million worker AI skills gap. <span class="text-orange"><br>MITSDE is closing it &mdash; one certification at a time.</span></h2>

        <div class="row g-3 mb-5">
            <div class="col-6 col-md-4 col-lg-2">
                <div class="bc-stat-card">
                    <span class="bc-stat-val">51M</span>
                    <div class="fw-semibold mb-1" style="font-size:13px">Workers India needs by 2030 with AI skills</div>
                    <div class="bc-stat-src">WEF, 2024</div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="bc-stat-card">
                    <span class="bc-stat-val">74%</span>
                    <div class="fw-semibold mb-1" style="font-size:13px">Of employers say candidates lack AI fluency</div>
                    <div class="bc-stat-src">LinkedIn, 2025</div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="bc-stat-card">
                    <span class="bc-stat-val">3&times;</span>
                    <div class="fw-semibold mb-1" style="font-size:13px">More likely to be <em>hired</em> with AI skills</div>
                    <div class="bc-stat-src">NASSCOM India Tech Talent Report, 2024</div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="bc-stat-card">
                    <span class="bc-stat-val">65%</span>
                    <div class="fw-semibold mb-1" style="font-size:13px">Of analytics &amp; marketing jobs now require tool proficiency</div>
                    <div class="bc-stat-src">Naukri.com, 2025</div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="bc-stat-card">
                    <span class="bc-stat-val">&#8377;8L+</span>
                    <div class="fw-semibold mb-1" style="font-size:13px">Average starting salary for AI-integrated roles</div>
                    <div class="bc-stat-src">AmbitionBox, 2025</div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <div class="bc-stat-card">
                    <span class="bc-stat-val">92%</span>
                    <div class="fw-semibold mb-1" style="font-size:13px">Of companies plan to expand AI use &mdash; yet fewer than 10% of employees are ready</div>
                    <div class="bc-stat-src">McKinsey Global AI Survey, 2024</div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 rounded-3 h-100" style="background:#fff2f0;border-left:3px solid #dc2626">
                    <div class="fw-bold mb-3" style="color:#dc2626;font-size:12px;letter-spacing:.06em;text-transform:uppercase">The Problem</div>
                          <p>Most postgraduate management programmes teach concepts. They teach you about AI. They don't put AI tools in your hands in a live session and say: do this task right now. The result is graduates who can talk about AI but can't demonstrate it in an interview or on day one of a job.</p>
                    <ul class="mb-0" style="font-size:14px;color:#374151;padding-left:18px">
                        <li>Degree programmes aren't updating fast enough</li>
                        <li>Generic online courses have no peer learning, no SME interaction</li>
                        <li>Self-learning is unstructured — no certification, no proof</li>
                        <li>Industry moves faster than academia — the gap widens every year</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 rounded-3 h-100" style="background:var(--bc-orange-tint);border-left:3px solid var(--bc-orange)">
                    <div class="fw-bold mb-3 text-orange" style="font-size:12px;letter-spacing:.06em;text-transform:uppercase">The MITSDE Response</div>
                    <p>MITSDE recognised this gap in 2025 and made a decision: the Bootcamp vertical would be completely rebuilt — not just updated. Every session was redesigned from scratch with AI integration as a non-negotiable element. Not a tool demo at the end. A live task, during the session, on your laptop.</p>
                    <ul class="mb-0" style="font-size:14px;color:#374151;padding-left:18px">
                        <li>11 AI tools integrated across 6 certifications</li>
                        <li>AI task in every single session — not optional</li>
                        <li>Taught by SMEs who use these AI tools professionally</li>
                        <li>Included in your MITSDE programme fee — zero extra cost</li>
                        <li>Runs on weekends, alongside your academic programme, at zero extra cost</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 rounded-3 h-100" style="background:#f0fdf4;border-left:3px solid #16a34a">
                    <div class="fw-bold mb-3" style="color:#16a34a;font-size:12px;letter-spacing:.06em;text-transform:uppercase">What You Walk Away With</div>
                    <p>MITSDE Bootcamp is now the only PG distance education programme in India that gives students a structured, AI-integrated certification stack as part of their degree — with real tools, real sessions, and real industry experts. When you graduate, you don't just have a PGCM or PGDM. You have proof.</p>
                    <ul class="mb-0" style="font-size:14px;color:#374151;padding-left:18px">
                        <li>6 certifications: CPEA, CPDA, CPDSA, CPQBA + CDME, CDMA</li>
                        <li>3 full-day Bootcamp Labs: B1, B2, B3 (MITSDE LABS vertical)</li>
                        <li>Delivered live — Saturdays &amp; Sundays</li>
                        <li>Verified MITSDE certification on completion of each programme</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ═══════════════════════════════════════════════
   CERTIFICATION STACK
════════════════════════════════════════════════ -->
<section class="about-section" id="certifications">
    <div class="container">
        <div class="section-label">The Certification Stack</div>
        <h2 class="section-heading">Six certifications. One programme. All AI-integrated.</span></h2>
        <p class="text-muted mb-4">Every MITSDE student in Business Analytics or Digital Marketing earns structured, tool-based certifications — delivered by industry SMEs in live weekend sessions on Saturdays and Sundays. Each certification has a dedicated AI component that is not a demo — it is a live, scored skill task.</p>

        <ul class="nav nav-tabs mb-4" id="certTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#ba-track" type="button" role="tab">
                    <i class="fa-solid fa-chart-bar me-2"></i>Business Analytics Track
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#dm-track" type="button" role="tab">
                    <i class="fa-solid fa-bullhorn me-2"></i>Digital Marketing Track
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#arc-track" type="button" role="tab">
                    <i class="fa-solid fa-route me-2"></i>Learning Arc
                </button>
            </li>
        </ul>

        <div class="tab-content">

            <!-- BA Track -->
            <div class="tab-pane fade show active" id="ba-track" role="tabpanel">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="bc-cert-card">
                            <span class="bc-cert-code">CPEA</span>
                            <h4 class="fw-bold mb-1">Certified Professional Excel Analyst</h4>
                            <p class="text-muted mb-2" style="font-size:14px">Master data handling, Pivot Tables, advanced formulas, Power Query, VBA/Macros and dashboard building &mdash; the universal analytics foundation every employer expects.</p>
                            <div style="font-size:12px;color:#6b7280" class="mb-2">
                                <span class="me-3"><i class="fa-solid fa-calendar-days me-1 text-orange"></i>July 2026</span>
                                <span class="me-3"><i class="fa-solid fa-video me-1 text-orange"></i>5 Sessions</span>
                                <span><i class="fa-solid fa-clock me-1 text-orange"></i>15 hrs</span>
                            </div>
                            <div class="bc-cert-tools"><strong>Tools:</strong> Excel 2019+, VBA/Macros, Power Query, Pivot Tables, VLOOKUP variants, Data Validation</div>
                            <div class="bc-cert-ai"><i class="fa-solid fa-bolt me-1"></i> <strong>AI:</strong> Microsoft Copilot and ChatGPT to generate formulas, automate summaries, produce charts</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bc-cert-card">
                            <span class="bc-cert-code">CPDA</span>
                            <h4 class="fw-bold mb-1">Certified Professional Data Analyst</h4>
                            <p class="text-muted mb-2" style="font-size:14px">SQL querying, Power BI dashboards and DAX measures &mdash; from raw datasets to insight-driven business decisions with AI-generated code.</p>
                            <div style="font-size:12px;color:#6b7280" class="mb-2">
                                <span class="me-3"><i class="fa-solid fa-calendar-days me-1 text-orange"></i>Aug 2026</span>
                                <span class="me-3"><i class="fa-solid fa-video me-1 text-orange"></i>6 Sessions</span>
                                <span><i class="fa-solid fa-clock me-1 text-orange"></i>15 hrs</span>
                            </div>
                            <div class="bc-cert-tools"><strong>Tools:</strong> MySQL Workbench, SQL (JOINs, CTEs, Window Functions), Power BI Desktop, DAX, Time Intelligence, Power Query, Dashboard Design</div>
                            <div class="bc-cert-ai"><i class="fa-solid fa-bolt me-1"></i> <strong>AI:</strong> ChatGPT to auto-generate SQL, Power BI Copilot for DAX measures</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bc-cert-card">
                            <span class="bc-cert-code">CPDSA</span>
                            <h4 class="fw-bold mb-1">Certified Professional Data Science Analyst</h4>
                            <p class="text-muted mb-2" style="font-size:14px">Python data analysis, SAS and statistical modelling applied to real business datasets &mdash; with AI-assisted coding that makes Python accessible from day one.</p>
                            <div style="font-size:12px;color:#6b7280" class="mb-2">
                                <span class="me-3"><i class="fa-solid fa-calendar-days me-1 text-orange"></i>Jan 2027</span>
                                <span class="me-3"><i class="fa-solid fa-video me-1 text-orange"></i>6 Sessions</span>
                                <span><i class="fa-solid fa-clock me-1 text-orange"></i>15 hrs</span>
                            </div>
                            <div class="bc-cert-tools"><strong>Tools:</strong> Anaconda/Jupyter Notebook, Python 3, Pandas, NumPy, Matplotlib, SAS Software, PROC SQL</div>
                            <div class="bc-cert-ai"><i class="fa-solid fa-bolt me-1"></i> <strong>AI:</strong> Julius AI for dataset analysis, ChatGPT to generate and debug Pandas code</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bc-cert-card">
                            <span class="bc-cert-code">CPQBA</span>
                            <h4 class="fw-bold mb-1">Certified Professional Quantitative Business Analyst</h4>
                            <p class="text-muted mb-2" style="font-size:14px">Statistical modelling, forecasting with R and Tableau visualisation &mdash; turning complex quantitative methods into business decisions and leadership conversations.</p>
                            <div style="font-size:12px;color:#6b7280" class="mb-2">
                                <span class="me-3"><i class="fa-solid fa-calendar-days me-1 text-orange"></i>Feb 2027</span>
                                <span class="me-3"><i class="fa-solid fa-video me-1 text-orange"></i>6 Sessions</span>
                                <span><i class="fa-solid fa-clock me-1 text-orange"></i>15 hrs</span>
                            </div>
                            <div class="bc-cert-tools"><strong>Tools:</strong> R, RStudio, dplyr, ARIMA Forecasting, Regression Analysis, Tableau Public, Clustering, Trend Lines, Forecasting</div>
                            <div class="bc-cert-ai"><i class="fa-solid fa-bolt me-1"></i> <strong>AI:</strong> ChatGPT generates R code, Tableau Ask Data + Tableau Pulse AI</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DM Track -->
            <div class="tab-pane fade" id="dm-track" role="tabpanel">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="bc-cert-card">
                            <span class="bc-cert-code">CDME</span>
                            <h4 class="fw-bold mb-1">Certificate in Digital Marketing Essentials</h4>
                            <p class="text-muted mb-2" style="font-size:14px">SEO, Google Ads, email marketing and e-commerce &mdash; the full entry-level digital marketing stack taught live with the tools running campaigns right now.</p>
                            <div style="font-size:12px;color:#6b7280" class="mb-2">
                                <span class="me-3"><i class="fa-solid fa-calendar-days me-1 text-orange"></i>Jan 2027</span>
                                <span class="me-3"><i class="fa-solid fa-video me-1 text-orange"></i>4 Sessions</span>
                                <span><i class="fa-solid fa-clock me-1 text-orange"></i>15 hrs</span>
                            </div>
                            <div class="bc-cert-tools"><strong>Tools:</strong> GA4, Google Keyword Planner, Ahrefs, Screaming Frog, Google Ads, Brevo, Zoho Campaigns, Microsoft Clarity, Hotjar, Shopify</div>
                            <div class="bc-cert-ai"><i class="fa-solid fa-bolt me-1"></i> <strong>AI (session-by-session):</strong> meta tags + ad copy (ChatGPT), email drip (AI), Shopify Magic, MS Clarity AI</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bc-cert-card">
                            <span class="bc-cert-code">CDMA</span>
                            <h4 class="fw-bold mb-1">Certificate in Digital Marketing Applications</h4>
                            <p class="text-muted mb-2" style="font-size:14px">Marketing automation, chatbots, content at scale and affiliate marketing &mdash; the advanced tool stack that separates practitioners from strategists.</p>
                            <div style="font-size:12px;color:#6b7280" class="mb-2">
                                <span class="me-3"><i class="fa-solid fa-calendar-days me-1 text-orange"></i>Feb 2027</span>
                                <span class="me-3"><i class="fa-solid fa-video me-1 text-orange"></i>4 Sessions</span>
                                <span><i class="fa-solid fa-clock me-1 text-orange"></i>15 hrs</span>
                            </div>
                            <div class="bc-cert-tools"><strong>Tools:</strong> Zapier, Make.com, Zoho CRM, WhatsApp Business, ManyChat, Tidio, Landbot, Impact, Google UTM Builder, Riverside.fm, Descript AI, Otter.ai</div>
                            <div class="bc-cert-ai"><i class="fa-solid fa-bolt me-1"></i> <strong>AI:</strong> Zapier AI, Tidio Lyro, Descript / Otter.ai / ChatGPT</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bc-cert-card">
                            <span class="bc-cert-code">B1 &mdash; Bootcamp Lab</span>
                            <h4 class="fw-bold mb-1">Marketing Analytics Mastery</h4>
                            <p class="text-muted mb-2" style="font-size:14px">Build a GA4 dashboard, an attribution model in Looker Studio and a Tableau customer journey map &mdash; one full Sunday using Julius AI and Gemini for Workspace.</p>
                            <div style="font-size:12px;color:#6b7280" class="mb-2">
                                <span class="me-3"><i class="fa-solid fa-calendar-days me-1 text-orange"></i>Mar 7, 2027</span>
                                <span class="me-3"><i class="fa-solid fa-sun me-1 text-orange"></i>Full Day</span>
                                <span><i class="fa-solid fa-clock me-1 text-orange"></i>8 hrs</span>
                            </div>
                            <div class="bc-cert-tools"><strong>Tools:</strong> GA4, Looker Studio, HubSpot CRM, Tableau Public, Google Trends, Meta Ads Manager, Julius AI, Gemini for Workspace, Vertex AI</div>
                            <div class="bc-cert-ai"><i class="fa-solid fa-bolt me-1"></i> <strong>AI:</strong> Julius AI + Gemini for Workspace</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bc-cert-card">
                            <span class="bc-cert-code">B2 &mdash; Bootcamp Lab</span>
                            <h4 class="fw-bold mb-1">Social Media, Content &amp; Influencer Marketing</h4>
                            <p class="text-muted mb-2" style="font-size:14px">Create a Canva post, a CapCut reel, a 1-month content calendar and an influencer brief &mdash; all in one Sunday, with AI-generated visuals and captions.</p>
                            <div style="font-size:12px;color:#6b7280" class="mb-2">
                                <span class="me-3"><i class="fa-solid fa-calendar-days me-1 text-orange"></i>Mar 14, 2027</span>
                                <span class="me-3"><i class="fa-solid fa-sun me-1 text-orange"></i>Full Day</span>
                                <span><i class="fa-solid fa-clock me-1 text-orange"></i>8 hrs</span>
                            </div>
                            <div class="bc-cert-tools"><strong>Tools:</strong> Canva, CapCut, Notion, Meta Business Suite, LinkedIn Creator, Buffer, Heepsy, Predis.ai, Opus Clip, Adobe Firefly</div>
                            <div class="bc-cert-ai"><i class="fa-solid fa-bolt me-1"></i> <strong>AI:</strong> Adobe Firefly, Predis.ai, Opus Clip</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bc-cert-card">
                            <span class="bc-cert-code">B3 &mdash; Bootcamp Lab</span>
                            <h4 class="fw-bold mb-1">Social Media Analytics &amp; Future Intelligence</h4>
                            <p class="text-muted mb-2" style="font-size:14px">Use Perplexity AI for trends, NotebookLM for brand intelligence and ChatGPT for sentiment analysis &mdash; the analytics stack that turns social data into strategy.</p>
                            <div style="font-size:12px;color:#6b7280" class="mb-2">
                                <span class="me-3"><i class="fa-solid fa-calendar-days me-1 text-orange"></i>Mar 21, 2027</span>
                                <span class="me-3"><i class="fa-solid fa-sun me-1 text-orange"></i>Full Day</span>
                                <span><i class="fa-solid fa-clock me-1 text-orange"></i>8 hrs</span>
                            </div>
                            <div class="bc-cert-tools"><strong>Tools:</strong> Meta Business Insights, LinkedIn Analytics, YouTube Studio, Mention, Google Alerts, Social Blade, Answer The Public, Looker Studio, Perplexity AI, NotebookLM, ChatGPT/Claude</div>
                            <div class="bc-cert-ai"><i class="fa-solid fa-bolt me-1"></i> <strong>AI:</strong> Perplexity AI, NotebookLM, ChatGPT</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Learning Arc (Tab 3) -->
            <div class="tab-pane fade" id="arc-track" role="tabpanel">
                <p class="text-muted mb-4">The Bootcamp is sequenced deliberately &mdash; each certification builds on the last, and the tracks are designed to align with how employers actually hire. Here is the full learning arc.</p>
                <div class="table-responsive">
                <table class="bc-arc-table">
                    <thead>
                        <tr>
                            <th style="width:90px">Track</th>
                            <th>Step 1 &mdash; Foundational</th>
                            <th>Step 2 &mdash; Intermediate</th>
                            <th>Step 3 &mdash; Advanced</th>
                            <th>Step 4 &mdash; Strategic</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="bc-arc-track" style="background:var(--bc-orange)">BA Track</span></td>
                            <td>
                                <div class="bc-arc-step">
                                    <div class="bc-arc-step-label">CPEA &mdash; Excel</div>
                                    <div class="fw-semibold" style="font-size:13px">Certified Professional Excel Analyst</div>
                                    <div style="font-size:11px;color:#6b7280;margin-top:4px">15 hrs &middot; Jul 2026</div>
                                </div>
                            </td>
                            <td>
                                <div class="bc-arc-step">
                                    <div class="bc-arc-step-label">CPDA &mdash; SQL + Power BI</div>
                                    <div class="fw-semibold" style="font-size:13px">Certified Professional Data Analyst</div>
                                    <div style="font-size:11px;color:#6b7280;margin-top:4px">15 hrs &middot; Aug 2026</div>
                                </div>
                            </td>
                            <td>
                                <div class="bc-arc-step">
                                    <div class="bc-arc-step-label">CPDSA &mdash; Python + SAS</div>
                                    <div class="fw-semibold" style="font-size:13px">Certified Professional Data Science Analyst</div>
                                    <div style="font-size:11px;color:#6b7280;margin-top:4px">15 hrs &middot; Jan 2027</div>
                                </div>
                            </td>
                            <td>
                                <div class="bc-arc-step">
                                    <div class="bc-arc-step-label">CPQBA &mdash; R + Tableau</div>
                                    <div class="fw-semibold" style="font-size:13px">Certified Professional Quantitative Business Analyst</div>
                                    <div style="font-size:11px;color:#6b7280;margin-top:4px">15 hrs &middot; Feb 2027</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="bc-arc-track" style="background:#2563eb">DM Track</span></td>
                            <td>
                                <div class="bc-arc-step" style="background:#eff6ff">
                                    <div class="bc-arc-step-label" style="color:#2563eb">CDME &mdash; Essentials</div>
                                    <div class="fw-semibold" style="font-size:13px">Certificate in Digital Marketing Essentials</div>
                                    <div style="font-size:11px;color:#6b7280;margin-top:4px">15 hrs &middot; Jan 2027</div>
                                </div>
                            </td>
                            <td>
                                <div class="bc-arc-step" style="background:#eff6ff">
                                    <div class="bc-arc-step-label" style="color:#2563eb">CDMA &mdash; Applications</div>
                                    <div class="fw-semibold" style="font-size:13px">Certificate in Digital Marketing Applications</div>
                                    <div style="font-size:11px;color:#6b7280;margin-top:4px">15 hrs &middot; Feb 2027</div>
                                </div>
                            </td>
                            <td>
                                <div class="bc-arc-step" style="background:#f0fdf4">
                                    <div class="bc-arc-step-label" style="color:#15803d">B1 &mdash; Labs Analytics</div>
                                    <div class="fw-semibold" style="font-size:13px">Marketing Analytics Mastery</div>
                                    <div style="font-size:11px;color:#6b7280;margin-top:4px">8 hrs &middot; Mar 7, 2027</div>
                                </div>
                            </td>
                            <td>
                                <div class="bc-arc-step" style="background:#f0fdf4">
                                    <div class="bc-arc-step-label" style="color:#15803d">B2 + B3 &mdash; Labs Intelligence</div>
                                    <div class="fw-semibold" style="font-size:13px">Social Media, Content &amp; Future Intelligence</div>
                                    <div style="font-size:11px;color:#6b7280;margin-top:4px">8 hrs each &middot; Mar 14 &amp; 21, 2027</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
   TOOLS WALL
════════════════════════════════════════════════ -->
<section class="about-section" id="tools" style="background:var(--bc-paper)">
    <div class="container">
        <div class="section-label">Tools Wall</div>
        <h2 class="section-heading">Tools you'll use. Not tools you'll hear about.</h2>
        <p class="text-muted mb-4">Every tool below is practised live in session — on your own laptop, with a real task, alongside the SME. Purple-highlighted tools are AI tools integrated as core session skills.</p>

        <div class="d-flex flex-wrap gap-2 mb-4">
            <button class="bc-filter-btn active" data-track="all">All Tools</button>
            <button class="bc-filter-btn" data-track="ba">Business Analytics</button>
            <button class="bc-filter-btn" data-track="dm">Digital Marketing</button>
            <button class="bc-filter-btn" data-track="ai">AI Tools</button>
        </div>

        <div id="bcToolsCloud">
            <!-- BA -->
            <span class="bc-chip" data-track="ba">Excel + Power Query</span>
            <span class="bc-chip" data-track="ba">MySQL Workbench</span>
            <span class="bc-chip" data-track="ba">Power BI Desktop</span>
            <span class="bc-chip" data-track="ba">Anaconda / Jupyter</span>
            <span class="bc-chip" data-track="ba">Pandas / NumPy / Matplotlib</span>
            <span class="bc-chip" data-track="ba">SAS Software</span>
            <span class="bc-chip" data-track="ba">R / RStudio</span>
            <span class="bc-chip" data-track="ba">Tableau Public</span>
            <span class="bc-chip" data-track="ba">VBA / Macros</span>
            <span class="bc-chip" data-track="ba">Pivot Tables (advanced)</span>
            <!-- DM -->
            <span class="bc-chip" data-track="dm">Google Analytics 4</span>
            <span class="bc-chip" data-track="dm">Google Ads (sandbox)</span>
            <span class="bc-chip" data-track="dm">Ahrefs Webmaster Tools</span>
            <span class="bc-chip" data-track="dm">Screaming Frog SEO Spider</span>
            <span class="bc-chip" data-track="dm">Brevo (Sendinblue)</span>
            <span class="bc-chip" data-track="dm">Looker Studio</span>
            <span class="bc-chip" data-track="dm">HubSpot CRM (free)</span>
            <span class="bc-chip" data-track="dm">Shopify (3-day trial)</span>
            <span class="bc-chip" data-track="dm">Microsoft Clarity</span>
            <span class="bc-chip" data-track="dm">Hotjar</span>
            <span class="bc-chip" data-track="dm">Zapier / Make.com</span>
            <span class="bc-chip" data-track="dm">ManyChat / Tidio / Landbot</span>
            <span class="bc-chip" data-track="dm">WhatsApp Business App</span>
            <span class="bc-chip" data-track="dm">Canva / CapCut / Notion</span>
            <span class="bc-chip" data-track="dm">Meta Business Suite</span>
            <span class="bc-chip" data-track="dm">Buffer / Heepsy</span>
            <span class="bc-chip" data-track="dm">Mention / Social Blade</span>
            <span class="bc-chip" data-track="dm">Impact / Bitly / SimilarWeb</span>
            <span class="bc-chip" data-track="dm">Riverside.fm / Descript</span>
            <!-- AI -->
            <span class="bc-chip" data-track="ai">ChatGPT / Claude</span>
            <span class="bc-chip" data-track="ai">Julius AI</span>
            <span class="bc-chip" data-track="ai">Microsoft Copilot (Excel)</span>
            <span class="bc-chip" data-track="ai">Power BI Copilot</span>
            <span class="bc-chip" data-track="ai">Gemini for Workspace</span>
            <span class="bc-chip" data-track="ai">NotebookLM (Google)</span>
            <span class="bc-chip" data-track="ai">Descript AI (Overdub)</span>
            <span class="bc-chip" data-track="ai">Perplexity AI</span>
            <span class="bc-chip" data-track="ai">Predis.ai</span>
            <span class="bc-chip" data-track="ai">Opus Clip</span>
            <span class="bc-chip" data-track="ai">Adobe Firefly</span>
            <span class="bc-chip" data-track="ai">Otter.ai</span>
            <span class="bc-chip" data-track="ai">Zapier AI</span>
            <span class="bc-chip" data-track="ai">Tableau Ask Data / Pulse AI</span>
            <span class="bc-chip" data-track="ai">Shopify Magic AI</span>
            <span class="bc-chip" data-track="ai">Tidio Lyro AI</span>
            <span class="bc-chip" data-track="ai">Google Vertex AI (demo)</span>
            <span class="bc-chip" data-track="ai">Adzooma (PPC AI audit)</span>
            <span class="bc-chip" data-track="ai">GitHub Copilot</span>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
   AI IN SESSIONS
════════════════════════════════════════════════ -->
<section class="about-section" id="ai-sessions">
    <div class="container">
        <div class="section-label">AI Readiness — Session by Session</div>
        <h2 class="section-heading">AI isn't an optional extra.<br/>It's in every session. Always live. Always on your laptop.</h2>
        <p class="text-muted mb-4">Every certification and Bootcamp Lab includes a dedicated AI task — a real skill you practise during the session, not a presentation you watch. These are the AI skills appearing in 2025–26 job descriptions across analytics, marketing, and management roles.</p>

        <!-- BA Sessions -->
        <h5 class="fw-bold mb-3 text-orange">Business Analytics Track</h5>

        <div class="bc-ai-row">
            <span class="bc-ai-cert">CPEA &mdash; Excel</span>
            <div class="bc-ai-headline">Microsoft Copilot + ChatGPT for formulas, summaries, charts</div>
            <div class="bc-ai-tools"><strong>Tools used:</strong> Microsoft Copilot (Excel), ChatGPT</div>
        </div>
        <div class="bc-ai-row">
            <span class="bc-ai-cert">CPDA &mdash; SQL + Power BI</span>
            <div class="bc-ai-headline">ChatGPT for SQL auto-generation, Power BI Copilot for DAX measures</div>
            <div class="bc-ai-tools"><strong>Tools used:</strong> ChatGPT, Power BI Copilot</div>
        </div>
        <div class="bc-ai-row">
            <span class="bc-ai-cert">CPDSA &mdash; Python + SAS</span>
            <div class="bc-ai-headline">Julius AI for CSV dataset analysis, ChatGPT to generate and debug Pandas code</div>
            <div class="bc-ai-tools"><strong>Tools used:</strong> Julius AI, ChatGPT</div>
        </div>
        <div class="bc-ai-row">
            <span class="bc-ai-cert">CPQBA &mdash; R + Tableau</span>
            <div class="bc-ai-headline">ChatGPT generates R regression and ARIMA code, Tableau Ask Data + Pulse AI for visual intelligence</div>
            <div class="bc-ai-tools"><strong>Tools used:</strong> ChatGPT, Tableau Ask Data, Tableau Pulse AI</div>
        </div>

        <!-- DM Sessions -->
        <h5 class="fw-bold mb-3 mt-4 text-orange">Digital Marketing Track — CDME Sessions</h5>

        <div class="bc-ai-row">
            <span class="bc-ai-cert">CDME &mdash; SEO Session</span>
            <div class="bc-ai-headline">ChatGPT writes meta tags and FAQ schema 10&times; faster than manual &mdash; demonstrated live</div>
            <div class="bc-ai-tools"><strong>Tools used:</strong> ChatGPT, SEOwind AI, Bing AI Webmaster</div>
        </div>
        <div class="bc-ai-row">
            <span class="bc-ai-cert">CDME &mdash; Google Ads Session</span>
            <div class="bc-ai-headline">15 ad headlines + 4 descriptions generated in under 2 minutes, evaluated live</div>
            <div class="bc-ai-tools"><strong>Tools used:</strong> ChatGPT, Google Ads AI, Adzooma</div>
        </div>
        <div class="bc-ai-row">
            <span class="bc-ai-cert">CDME &mdash; Email Marketing Session</span>
            <div class="bc-ai-headline">Complete 5-email B2B nurture sequence built live in class</div>
            <div class="bc-ai-tools"><strong>Tools used:</strong> ChatGPT / Claude, Brevo AI, Phrasee</div>
        </div>
        <div class="bc-ai-row">
            <span class="bc-ai-cert">CDME &mdash; CRO &amp; E-commerce Session</span>
            <div class="bc-ai-headline">Landing page copy in 3 minutes, Shopify Magic for product descriptions, MS Clarity AI heatmap analysis</div>
            <div class="bc-ai-tools"><strong>Tools used:</strong> ChatGPT, Shopify Magic, MS Clarity AI</div>
        </div>

        <!-- CDMA Sessions -->
        <h5 class="fw-bold mb-3 mt-4 text-orange">Digital Marketing Track — CDMA Sessions</h5>

        <div class="bc-ai-row">
            <span class="bc-ai-cert">CDMA &mdash; Automation Session</span>
            <div class="bc-ai-headline">Zapier AI builds a full automation workflow from plain English instructions &mdash; live</div>
            <div class="bc-ai-tools"><strong>Tools used:</strong> Zapier AI, Make AI Assistant, ChatGPT</div>
        </div>
        <div class="bc-ai-row">
            <span class="bc-ai-cert">CDMA &mdash; Chatbots Session</span>
            <div class="bc-ai-headline">Tidio Lyro AI deployed with zero training, WhatsApp chatbot built live in class</div>
            <div class="bc-ai-tools"><strong>Tools used:</strong> Tidio Lyro AI, ManyChat AI Step, ChatGPT</div>
        </div>
        <div class="bc-ai-row">
            <span class="bc-ai-cert">CDMA &mdash; Content at Scale Session</span>
            <div class="bc-ai-headline">One idea repurposed into 6 formats in under 10 minutes</div>
            <div class="bc-ai-tools"><strong>Tools used:</strong> Descript AI, Otter.ai, ChatGPT / Claude</div>
        </div>

        <!-- Labs -->
        <h5 class="fw-bold mb-3 mt-4 text-orange">Bootcamp Labs</h5>

        <div class="bc-ai-row">
            <span class="bc-ai-cert">B1 Labs &mdash; Marketing Analytics</span>
            <div class="bc-ai-headline">Export GA4 data to CSV &rarr; Julius AI analysis &rarr; Gemini for Workspace executive summary</div>
            <div class="bc-ai-tools"><strong>Tools used:</strong> Julius AI, Gemini for Workspace, Vertex AI (demo)</div>
        </div>
        <div class="bc-ai-row">
            <span class="bc-ai-cert">B2 Labs &mdash; Social &amp; Content</span>
            <div class="bc-ai-headline">Adobe Firefly for branded visuals, Predis.ai for captions, Opus Clip for Reels &mdash; in one session</div>
            <div class="bc-ai-tools"><strong>Tools used:</strong> Adobe Firefly, Predis.ai, Opus Clip, Canva AI</div>
        </div>
        <div class="bc-ai-row">
            <span class="bc-ai-cert">B3 Labs &mdash; Social Intelligence</span>
            <div class="bc-ai-headline">Perplexity AI for trends, NotebookLM for brand intel, ChatGPT for sentiment analysis &mdash; all in under 15 minutes</div>
            <div class="bc-ai-tools"><strong>Tools used:</strong> Perplexity AI, NotebookLM, ChatGPT / Claude</div>
        </div>

    </div>
</section>

<!-- ═══════════════════════════════════════════════
   CAREER OUTCOMES
════════════════════════════════════════════════ -->
<section class="about-section" id="career" style="background:var(--bc-paper)">
    <div class="container">
        <div class="section-label">Career Outcomes</div>
        <h2 class="section-heading">Every tool we teach maps to a job description.</h2>
        <p class="text-muted mb-4">Tools in each certification are chosen because they appear in real industry job descriptions. This is what you'll be able to demonstrate in your next interview — backed by your MITSDE certification.</p>

        <div class="row g-4">
            <div class="col-lg-6">
                <h5 class="fw-bold mb-3"><i class="fa-solid fa-chart-bar me-2 text-orange"></i>Business Analytics Roles</h5>
                <div class="tbl-wrap">
                    <table class="tbl">
                        <thead>
                            <tr>
                                <th class="tbl-label">Role</th>
                                <th class="tbl-accent">Key Tools</th>
                                <th>Certifications</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">Data Analyst</td>
                                <td class="tbl-accent">SQL, Power BI, Excel, data cleaning, dashboard reporting</td>
                                <td>CPEA + CPDA</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Business Intelligence Specialist</td>
                                <td class="tbl-accent">Power BI, DAX, Tableau, Looker Studio, data modelling</td>
                                <td>CPDA + CPQBA</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Data Science Analyst</td>
                                <td class="tbl-accent">Python (Pandas, NumPy), SAS, R, statistical modelling</td>
                                <td>CPDSA + CPQBA</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Analytics Consultant</td>
                                <td class="tbl-accent">R, ARIMA forecasting, Tableau, regression analysis</td>
                                <td>CPQBA</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">MIS / Reporting Analyst</td>
                                <td class="tbl-accent">Excel (advanced), Power Query, VBA, SQL, dashboards</td>
                                <td>CPEA + CPDA</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="fw-bold mb-3"><i class="fa-solid fa-bullhorn me-2 text-orange"></i>Digital Marketing Roles</h5>
                <div class="tbl-wrap">
                    <table class="tbl">
                        <thead>
                            <tr>
                                <th class="tbl-label">Role</th>
                                <th class="tbl-accent">Key Tools</th>
                                <th>Certifications</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">Digital Marketing Analyst</td>
                                <td class="tbl-accent">GA4, Looker Studio, UTM tracking, SQL basics</td>
                                <td>CDME + B1 Labs</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Social Media Manager</td>
                                <td class="tbl-accent">Meta Business Suite, Canva, Buffer, Heepsy, analytics</td>
                                <td>B2 + B3 Labs</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">SEO / SEM Specialist</td>
                                <td class="tbl-accent">GA4, Google Ads, Ahrefs, Screaming Frog, Keyword Planner</td>
                                <td>CDME</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Growth / Automation Marketer</td>
                                <td class="tbl-accent">Zapier, Make.com, Zoho CRM, ManyChat, WhatsApp Business</td>
                                <td>CDMA</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Content / Brand Strategist</td>
                                <td class="tbl-accent">Canva, CapCut, Notion, Descript, AI content stack</td>
                                <td>B2 Labs + CDMA</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">Performance Marketing Manager</td>
                                <td class="tbl-accent">Meta Ads, Google Ads, Impact affiliate, UTM, DV360</td>
                                <td>CDME + CDMA</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
   FACULTY BYTES
════════════════════════════════════════════════ -->
<section class="about-section" id="faculty">
    <div class="container">
        <div class="section-label">Faculty Bytes</div>
        <h2 class="section-heading">Straight from the people teaching you.</h2>
        <p class="text-muted mb-4">Our SMEs don't just teach these tools — they use them professionally every day. Here's what they want you to know before you walk into your first session.</p>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="bc-faculty-card">
                    <div class="bc-faculty-quote">&ldquo;Most students come in thinking Excel is just formulas. By the time you finish CPEA, you&rsquo;ll realise it&rsquo;s an entire analytics environment. Power Query alone will save you 3 hours every week for the rest of your career.&rdquo;</div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bc-testi-avatar">CK</div>
                        <div>
                            <div class="fw-bold" style="font-size:14px">Dr. Chanakya Kumar</div>
                            <div style="font-size:12px;color:#6b7280">Associate Prof., ISBS Pune &middot; Business Analytics &middot; 18 years</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bc-faculty-card">
                    <div class="bc-faculty-quote">&ldquo;I&rsquo;ve interviewed hundreds of data professionals. The ones who stand out aren&rsquo;t the ones who know the most theory &mdash; they&rsquo;re the ones who can open a laptop, run a SQL query, and build a Power BI dashboard on the spot. That&rsquo;s exactly what CPDA trains you to do.&rdquo;</div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bc-testi-avatar">KS</div>
                        <div>
                            <div class="fw-bold" style="font-size:14px">Mr. Kaushik Swaroop</div>
                            <div style="font-size:12px;color:#6b7280">Data Scientist, Equifax &middot; Business Analytics &middot; 7 years</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bc-faculty-card">
                    <div class="bc-faculty-quote">&ldquo;AI won&rsquo;t replace data scientists &mdash; but a data scientist who uses AI will absolutely replace one who doesn&rsquo;t. In CPDSA, we use Julius AI and ChatGPT to do in 5 minutes what used to take 45. That gap is the skill your employer is looking for right now.&rdquo;</div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bc-testi-avatar">DI</div>
                        <div>
                            <div class="fw-bold" style="font-size:14px">Mr. Dilip Iyer</div>
                            <div style="font-size:12px;color:#6b7280">Training Manager, Aditya Birla Group &middot; Business Analytics &middot; 8 years</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bc-faculty-card">
                    <div class="bc-faculty-quote">&ldquo;CPQBA is the certification where analysts become strategists. R and Tableau together &mdash; regression to forecast, Tableau to present &mdash; that&rsquo;s the combination that gets you into leadership conversations. When you can show your boss a forecast with confidence intervals, the conversation changes.&rdquo;</div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bc-testi-avatar">NM</div>
                        <div>
                            <div class="fw-bold" style="font-size:14px">Ms. Nayana Menon</div>
                            <div style="font-size:12px;color:#6b7280">Enterprise Insight Analyst, Giant Eagle GCC &middot; Business Analytics &middot; 5 years</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bc-faculty-card">
                    <div class="bc-faculty-quote">&ldquo;Digital marketing without data is just posting. In B1, you stop posting and start measuring. Every decision comes from a Looker Studio dashboard you built &mdash; and you&rsquo;ll use that same framework for the rest of your marketing career.&rdquo;</div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bc-testi-avatar">SP</div>
                        <div>
                            <div class="fw-bold" style="font-size:14px">Mr. Srinivas Prabhu</div>
                            <div style="font-size:12px;color:#6b7280">Founder, Incanto Dynamics &middot; Digital Marketing &middot; 8 years</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bc-faculty-card">
                    <div class="bc-faculty-quote">&ldquo;I was CMO before I was a trainer. Every tool in CDME is something my team used last month. Ahrefs, GA4, Google Ads &mdash; these aren&rsquo;t academic case studies. They&rsquo;re the actual stack running your competitors&rsquo; campaigns right now. That&rsquo;s why we teach them live.&rdquo;</div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bc-testi-avatar">AM</div>
                        <div>
                            <div class="fw-bold" style="font-size:14px">Mr. Ajith Mathew</div>
                            <div style="font-size:12px;color:#6b7280">CMO, S&amp;H Ventures LLP &middot; Digital Marketing &middot; 13 years</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
   STUDENT STORIES
════════════════════════════════════════════════ -->
<section class="about-section" id="stories" style="background:var(--bc-paper)">
    <div class="container">
        <div class="section-label">Student Stories</div>
        <h2 class="section-heading">What our students say.</h2>
        <p class="text-muted mb-4">Real feedback from MITSDE students who completed Bootcamp certifications alongside their PG programmes.</p>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="bc-testi">
                    <div class="bc-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p class="bc-testi-quote">&ldquo;I work full-time as a finance executive and was worried these sessions would be too academic. Instead, I spent the whole day actually doing things &mdash; building Pivot Tables, running macros, using ChatGPT to write formulas I would have Googled for an hour. CPEA changed how I work every single day.&rdquo;</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bc-testi-avatar">RN</div>
                        <div>
                            <div class="fw-bold" style="font-size:14px">Rohit N.</div>
                            <div style="font-size:12px;color:#6b7280">Finance Executive &middot; Mumbai &middot; CPEA Certified</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bc-testi">
                    <div class="bc-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p class="bc-testi-quote">&ldquo;The SQL + Power BI combination in CPDA was something I had been trying to self-learn for 8 months. In 6 live sessions, I understood DAX, built a full dashboard, and felt confident calling myself a data analyst. The AI component &mdash; using ChatGPT to write SQL &mdash; genuinely blew my mind.&rdquo;</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bc-testi-avatar">PM</div>
                        <div>
                            <div class="fw-bold" style="font-size:14px">Priya M.</div>
                            <div style="font-size:12px;color:#6b7280">Operations Manager &rarr; Data Analyst &middot; Pune &middot; CPDA Certified</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bc-testi">
                    <div class="bc-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p class="bc-testi-quote">&ldquo;The B1 Bootcamp was the best professional learning experience I have had in 5 years. One full day. We built a GA4 dashboard, an attribution model in Looker Studio, a Tableau customer journey map, and used Julius AI to analyse the whole thing. I showed my manager the output on Monday and got a project promotion.&rdquo;</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bc-testi-avatar">AK</div>
                        <div>
                            <div class="fw-bold" style="font-size:14px">Arjun K.</div>
                            <div style="font-size:12px;color:#6b7280">Digital Marketing Manager &middot; Bengaluru &middot; B1 Labs Certified</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bc-testi">
                    <div class="bc-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p class="bc-testi-quote">&ldquo;I joined MITSDE for the PGCM. The Bootcamp was a surprise bonus &mdash; but honestly, it&rsquo;s what I talk about most at work. After CDME, I restructured my company&rsquo;s entire SEO and email strategy. The Ahrefs + GA4 + Brevo workflow is now standard at my company.&rdquo;</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bc-testi-avatar">SL</div>
                        <div>
                            <div class="fw-bold" style="font-size:14px">Sneha L.</div>
                            <div style="font-size:12px;color:#6b7280">Marketing Head &middot; Hyderabad &middot; CDME Certified</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bc-testi">
                    <div class="bc-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p class="bc-testi-quote">&ldquo;We left B2 with a Canva post, a CapCut reel, a 1-month calendar, and an influencer brief &mdash; all produced in one Sunday. When I posted the reel, it got 4,000 views. That&rsquo;s the best ROI on any training I have done.&rdquo;</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bc-testi-avatar">VT</div>
                        <div>
                            <div class="fw-bold" style="font-size:14px">Vanessa T.</div>
                            <div style="font-size:12px;color:#6b7280">Brand Manager &middot; Chennai &middot; B2 Labs Certified</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bc-testi">
                    <div class="bc-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p class="bc-testi-quote">&ldquo;CPDSA with Python and SAS was challenging &mdash; but that&rsquo;s why I value it. The method of teaching Python through ChatGPT-assisted coding made it genuinely accessible. I went from zero Python to completing a real dataset analysis in 6 sessions. My senior colleagues asked me to present it to the whole team.&rdquo;</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bc-testi-avatar">MD</div>
                        <div>
                            <div class="fw-bold" style="font-size:14px">Megha D.</div>
                            <div style="font-size:12px;color:#6b7280">Business Analyst &middot; Ahmedabad &middot; CPDSA Certified</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bc-testi">
                    <div class="bc-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p class="bc-testi-quote">&ldquo;I found the VLOOKUP training session very useful and informative. Previously, I only used basic VLOOKUP, but this session helped me understand the importance of columns, the MATCH function, and practical VLOOKUP hacks. I am glad I attended this session and appreciate the valuable insights shared by Mr. Chanakya sir, as well as the efforts of the entire MIT team.&rdquo;</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bc-testi-avatar">AK</div>
                        <div>
                            <div class="fw-bold" style="font-size:14px">Ajeet Kumar.</div>
                            <!-- <div style="font-size:12px;color:#6b7280">Business Analyst &middot; Ahmedabad &middot; CPDSA Certified</div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bc-testi">
                    <div class="bc-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p class="bc-testi-quote">&ldquo;The Excel Bootcamp was a very useful and enriching experience. The way of teaching was very simple, clear, and easy to understand, which was especially helpful as the participants had different levels of Excel knowledge. If we listened attentively and followed the instructions properly, everything was very easy to understand. Despite the limited time, an excellent amount of information was delivered in a simple and effective manner. The hands-on activities made the session engaging and practical. I particularly liked the  trainer's patient, inclusive, and easy-to-follow approach.&rdquo;</p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bc-testi-avatar">SA</div>
                        <div>
                            <div class="fw-bold" style="font-size:14px">Shrabani Adhikary.</div>
                            <!-- <div style="font-size:12px;color:#6b7280">Business Analyst &middot; Ahmedabad &middot; CPDSA Certified</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
   INDUSTRY EXPERTS
════════════════════════════════════════════════ -->
<section class="about-section" id="experts">
    <div class="container">
        <div class="section-label">Industry Experts</div>
        <h2 class="section-heading">Taught by practitioners, not just academics.</h2>
        <p class="text-muted mb-4">Every session is delivered by a working industry professional who uses these tools in their current role — with live industry exposure they bring directly into the classroom.</p>

        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-4 col-lg-2 text-center">
                <div class="bc-expert-avatar">CK</div>
                <div class="fw-bold" style="font-size:14px">Dr. Chanakya Kumar</div>
                <div style="font-size:12px;color:#6b7280;margin-top:4px">Associate Prof., ISBS Pune</div>
                <div style="font-size:12px;color:#6b7280">Academician, Business Analyst, Data Scientist &amp; Trainer</div>
                <div style="font-size:11px;color:var(--bc-orange);font-weight:600;margin-top:4px">Business Analytics &middot; 18 yrs</div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 text-center">
                <div class="bc-expert-avatar">KS</div>
                <div class="fw-bold" style="font-size:14px">Mr. Kaushik Swaroop</div>
                <div style="font-size:12px;color:#6b7280;margin-top:4px">Data Scientist, Equifax</div>
                <div style="font-size:12px;color:#6b7280">Analytics Insights, CSM, AI Strategist</div>
                <div style="font-size:11px;color:var(--bc-orange);font-weight:600;margin-top:4px">Business Analytics &middot; 7 yrs</div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 text-center">
                <div class="bc-expert-avatar">DI</div>
                <div class="fw-bold" style="font-size:14px">Mr. Dilip Iyer</div>
                <div style="font-size:12px;color:#6b7280;margin-top:4px">Training Manager, Aditya Birla Group</div>
                <div style="font-size:12px;color:#6b7280">Program Mgmt, Data Science, Info Security</div>
                <div style="font-size:11px;color:var(--bc-orange);font-weight:600;margin-top:4px">Business Analytics &middot; 8 yrs</div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 text-center">
                <div class="bc-expert-avatar">NM</div>
                <div class="fw-bold" style="font-size:14px">Ms. Nayana Menon</div>
                <div style="font-size:12px;color:#6b7280;margin-top:4px">Enterprise Insight Analyst, Giant Eagle GCC</div>
                <div style="font-size:12px;color:#6b7280">Data Analyst &amp; Corporate Trainer</div>
                <div style="font-size:11px;color:var(--bc-orange);font-weight:600;margin-top:4px">Business Analytics &middot; 5 yrs</div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 text-center">
                <div class="bc-expert-avatar">SP</div>
                <div class="fw-bold" style="font-size:14px">Mr. Srinivas Prabhu</div>
                <div style="font-size:12px;color:#6b7280;margin-top:4px">Founder, Incanto Dynamics</div>
                <div style="font-size:12px;color:#6b7280">Digital Marketing, Generative AI &amp; Strategy</div>
                <div style="font-size:11px;color:var(--bc-orange);font-weight:600;margin-top:4px">Digital Marketing &middot; 8 yrs</div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 text-center">
                <div class="bc-expert-avatar">AM</div>
                <div class="fw-bold" style="font-size:14px">Mr. Ajith Mathew</div>
                <div style="font-size:12px;color:#6b7280;margin-top:4px">Chief Marketing Officer, S&amp;H Ventures LLP</div>
                <div style="font-size:12px;color:#6b7280">SEM, Google Ads, Social Media</div>
                <div style="font-size:11px;color:var(--bc-orange);font-weight:600;margin-top:4px">Digital Marketing &middot; 13 yrs</div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
   SCHEDULE
════════════════════════════════════════════════ -->
<section class="about-section" id="schedule" style="background:var(--bc-paper)">
    <div class="container">
        <div class="section-label">Certification Schedule — 2026 / 2027</div>
        <h2 class="section-heading">Real dates. Real batches. No guessing.</h2>
        <p class="text-muted mb-4">All sessions run on Saturdays and Sundays. Participants use their own laptops. All certifications are included in your MITSDE programme fee — no additional charges.</p>

        <div class="tbl-wrap">
            <table class="tbl">
                <thead>
                    <tr>
                        <th class="tbl-label">Certification</th>
                        <th class="tbl-label">Vertical</th>
                        <th class="tbl-accent">Start Date</th>
                        <th>Sessions</th>
                        <th>Hours</th>
                        <th>Format</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="bc-cert-code" style="font-size:10px">CPEA</span> Certified Professional Excel Analyst</td>
                        <td><span class="sched-badge ba">Bootcamp</span></td>
                        <td class="tbl-accent fw-semibold">July 19, 2026</td>
                        <td>5 sessions</td>
                        <td>15 hrs</td>
                        <td>Live Online &middot; Sat/Sun</td>
                    </tr>
                    <tr>
                        <td><span class="bc-cert-code" style="font-size:10px">CPDA</span> Certified Professional Data Analyst</td>
                        <td><span class="sched-badge ba">Bootcamp</span></td>
                        <td class="tbl-accent fw-semibold">Aug 23, 2026</td>
                        <td>6 sessions</td>
                        <td>15 hrs</td>
                        <td>Live Online &middot; Sat/Sun</td>
                    </tr>
                    <tr>
                        <td><span class="bc-cert-code" style="font-size:10px">CPDSA</span> Certified Professional Data Science Analyst</td>
                        <td><span class="sched-badge ba">Bootcamp</span></td>
                        <td class="tbl-accent fw-semibold">Jan 9, 2027</td>
                        <td>6 sessions</td>
                        <td>15 hrs</td>
                        <td>Live Online &middot; Sat/Sun</td>
                    </tr>
                    <tr>
                        <td><span class="bc-cert-code" style="font-size:10px">CPQBA</span> Certified Professional Quantitative Business Analyst</td>
                        <td><span class="sched-badge ba">Bootcamp</span></td>
                        <td class="tbl-accent fw-semibold">Feb 20, 2027</td>
                        <td>6 sessions</td>
                        <td>15 hrs</td>
                        <td>Live Online &middot; Sat/Sun</td>
                    </tr>
                    <tr>
                        <td><span class="bc-cert-code" style="font-size:10px">CDME</span> Certificate in Digital Marketing Essentials</td>
                        <td><span class="sched-badge ba">Bootcamp</span></td>
                        <td class="tbl-accent fw-semibold">Jan 10, 2027</td>
                        <td>4 sessions</td>
                        <td>15 hrs</td>
                        <td>Live Online &middot; Sat/Sun</td>
                    </tr>
                    <tr>
                        <td><span class="bc-cert-code" style="font-size:10px">CDMA</span> Certificate in Digital Marketing Applications</td>
                        <td><span class="sched-badge ba">Bootcamp</span></td>
                        <td class="tbl-accent fw-semibold">Feb 7, 2027</td>
                        <td>4 sessions</td>
                        <td>15 hrs</td>
                        <td>Live Online &middot; Sat/Sun</td>
                    </tr>
                    <tr>
                        <td><span class="bc-cert-code" style="font-size:10px">B1</span> Marketing Analytics Mastery</td>
                        <td><span class="sched-badge labs">LABS ★</span></td>
                        <td class="tbl-accent fw-semibold">Mar 7, 2027</td>
                        <td>Full day</td>
                        <td>8 hrs</td>
                        <td>Live Online &middot; Sunday</td>
                    </tr>
                    <tr>
                        <td><span class="bc-cert-code" style="font-size:10px">B2</span> Social Media, Content &amp; Influencer Marketing</td>
                        <td><span class="sched-badge labs">LABS ★</span></td>
                        <td class="tbl-accent fw-semibold">Mar 14, 2027</td>
                        <td>Full day</td>
                        <td>8 hrs</td>
                        <td>Live Online &middot; Sunday</td>
                    </tr>
                    <tr>
                        <td><span class="bc-cert-code" style="font-size:10px">B3</span> Social Media Analytics &amp; Future Intelligence</td>
                        <td><span class="sched-badge labs">LABS ★</span></td>
                        <td class="tbl-accent fw-semibold">Mar 21, 2027</td>
                        <td>Full day</td>
                        <td>8 hrs</td>
                        <td>Live Online &middot; Sunday</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="text-muted">★ LABS footnote: B1, B2, and B3 are delivered under the MITSDE LABS vertical as 8-hour full-day live online workshops (including lunch break). Batch 1 delivery: March 2027. Pattern repeats for all Semester 2 batches. Included in programme fee — no additional charges.</p>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
   WHY MITSDE (Comparison)
════════════════════════════════════════════════ -->
<section class="about-section" id="why">
    <div class="container">
        <div class="section-label">Why MITSDE</div>
        <h2 class="section-heading">Discover the MITSDE Bootcamp edge.</h2>
        <p class="text-muted mb-4">How MITSDE Bootcamp stacks up for working professionals who want proof of skill, not just certificates of completion.</p>

        <div class="tbl-wrap">
            <table class="tbl">
                <thead>
                    <tr>
                        <th class="tbl-label" style="min-width:220px">Feature</th>
                        <th class="tbl-accent text-center">MITSDE Bootcamp</th>
                        <th class="text-center">Online Courses</th>
                        <th class="text-center">Paid Bootcamps</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Live industry SME instruction</td>
                        <td class="tbl-accent text-center fw-bold" style="color:#16a34a">&#10003; Yes</td>
                        <td class="text-center text-danger">No</td>
                        <td class="text-center text-warning">Limited</td>
                    </tr>
                    <tr>
                        <td>6 structured certifications included</td>
                        <td class="tbl-accent text-center fw-bold" style="color:#16a34a">&#10003; Yes</td>
                        <td class="text-center text-danger">No</td>
                        <td class="text-center text-danger">No</td>
                    </tr>
                    <tr>
                        <td>AI tools integrated in every session</td>
                        <td class="tbl-accent text-center fw-bold" style="color:#16a34a">&#10003; Yes</td>
                        <td class="text-center text-danger">No</td>
                        <td class="text-center text-warning">Some</td>
                    </tr>
                    <tr>
                        <td>Hands-on, tool-based &mdash; every session</td>
                        <td class="tbl-accent text-center fw-bold" style="color:#16a34a">&#10003; Yes</td>
                        <td class="text-center text-warning">Limited</td>
                        <td class="text-center text-warning">Limited</td>
                    </tr>
                    <tr>
                        <td>JD-aligned tool selection</td>
                        <td class="tbl-accent text-center fw-bold" style="color:#16a34a">&#10003; Yes</td>
                        <td class="text-center text-danger">No</td>
                        <td class="text-center text-warning">Varies</td>
                    </tr>
                    <tr>
                        <td>Sat &amp; Sun &mdash; no career disruption</td>
                        <td class="tbl-accent text-center fw-bold" style="color:#16a34a">&#10003; Yes</td>
                        <td class="text-center text-muted">Yes (self-paced)</td>
                        <td class="text-center text-muted">Yes (self-paced)</td>
                    </tr>
                    <tr>
                        <td>Zero extra cost &mdash; included in programme fee</td>
                        <td class="tbl-accent text-center fw-bold" style="color:#16a34a">&#10003; Yes</td>
                        <td class="text-center text-muted">Yes (free content)</td>
                        <td class="text-center text-danger">No</td>
                    </tr>
                    <tr>
                        <td>Peer learning with working professionals</td>
                        <td class="tbl-accent text-center fw-bold" style="color:#16a34a">&#10003; Yes</td>
                        <td class="text-center text-danger">No</td>
                        <td class="text-center text-warning">Limited</td>
                    </tr>
                    <tr>
                        <td>Placement &amp; career support</td>
                        <td class="tbl-accent text-center fw-bold" style="color:#16a34a">&#10003; Yes</td>
                        <td class="text-center text-danger">No</td>
                        <td class="text-center text-danger">No</td>
                    </tr>
                    <tr>
                        <td>MITSDE industry certificate on completion</td>
                        <td class="tbl-accent text-center fw-bold" style="color:#16a34a">&#10003; Yes</td>
                        <td class="text-center text-danger">No</td>
                        <td class="tbl-accent text-center fw-bold" style="color:#16a34a">Yes</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Additional certifications — Swiper carousel -->
<section class="dms-cert-carousel-section" id="certificate">
    <div class="container">
        <h2 class="section-heading">Sample Certifications</h2>

        <div class="swiper dms-cert-swiper">
            <div class="swiper-wrapper">
                <?php for ($i = 1; $i <= 6; $i++): ?>
                <div class="swiper-slide">
                    <div class="dms-cert-card">
                        <img src="assets-new/images/bootcamp/certificates/certificate<?php echo $i; ?>.webp" alt="Certificate <?php echo $i; ?>" />
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="dms-swiper-nav">
            <button class="dms-swiper-prev dms-cert-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="dms-swiper-next dms-cert-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
   FAQ
════════════════════════════════════════════════ -->
<!-- <section class="about-section accordian-section" style="background:var(--bc-paper)">
    <div class="container">
        <h2 class="section-heading">Frequently Asked <span class="text-orange">Questions</span></h2>

        <div class="faq-item">
            <div class="faq-q">Who is the MITSDE Bootcamp for?</div>
            <div class="faq-a">
                <p>The Bootcamp is for all enrolled MITSDE PG programme students. Whether you are on the MBA, PGCM, PGDM or any other programme, the Bootcamp is included as part of your programme at zero extra cost. You do not need prior knowledge of analytics or digital marketing &mdash; it is designed to build skills from the ground up.</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-q">Do I need to install any software before the sessions?</div>
            <div class="faq-a">
                <p>You need your own laptop with a working internet connection. Each certification has a specific toolset &mdash; installation guides are shared before the session begins. Most tools are free-tier or trial versions specifically selected so that you do not need to pay for any software.</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-q">Are these certifications recognised by employers?</div>
            <div class="faq-a">
                <p>The certifications are issued by MITSDE and are verified industry credentials. More importantly, they are tool-specific &mdash; each certification name tells an employer exactly what you can do and with which tools. This is more useful in a JD match than a generic certification name.</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-q">What if I miss a session?</div>
            <div class="faq-a">
                <p>Session recordings are made available to enrolled students. However, the live sessions include hands-on exercises and peer interaction that recordings cannot fully replicate. We recommend attending live wherever possible.</p>
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-q">Can I take the BA track and the DM track both?</div>
            <div class="faq-a">
                <p>Yes. All six certifications &mdash; four BA and two DM plus three Labs &mdash; are available to all enrolled students. You can choose to complete some or all of them. Each runs on a separate weekend schedule so there is no overlap.</p>
            </div>
        </div>
    </div>
</section> -->

<!-- ═══════════════════════════════════════════════
   CTA STRIP
════════════════════════════════════════════════ -->
<div class="bc-cta">
    <div class="container">
        <h2>The next batch starts July 2026. Your certification is waiting.</h2>
        <p>Join working professionals from across India who are adding AI-powered industry certifications to their MITSDE programme &mdash; at zero extra cost &mdash; and walking into interviews with proof, not just a degree.</p>
        <!-- <button type="button" class="btn btn-light btn-lg rounded-pill px-5"
            data-bs-toggle="modal" data-bs-target="#downloadModal">Apply Now &rarr; Secure Your Seat</button> -->
        <div class="cta-strip-links">
            <a href="assets-new/images/bootcamp/MITSDE_Bootcamp_Certification_Schedule.pdf" target="_blank">Download full bootcamp schedule PDF →</a>
            <!-- <a href="#">View sample certificate →</a> -->
        </div>
    </div>
</div>

</div><!-- /.bc-page -->

<?php include "footer-new.php" ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
/* Tools filter */
(function () {
    const btns = document.querySelectorAll('.bc-filter-btn');
    const chips = document.querySelectorAll('#bcToolsCloud .bc-chip');
    btns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            btns.forEach(function (b) { b.classList.remove('active'); });
            btn.classList.add('active');
            const t = btn.dataset.track;
            chips.forEach(function (c) {
                c.style.display = (t === 'all' || c.dataset.track === t) ? '' : 'none';
            });
        });
    });
})();

/* Scrollspy for anchor nav */
(function () {
    const links = document.querySelectorAll('.bc-anchor-nav .nav-link');
    const sections = [];
    links.forEach(function (l) {
        const id = l.getAttribute('href').replace('#', '');
        const el = document.getElementById(id);
        if (el) sections.push({ el: el, link: l });
    });
    function onScroll() {
        const scrollY = window.scrollY + 140;
        let current = sections[0];
        sections.forEach(function (s) {
            if (scrollY >= s.el.offsetTop) current = s;
        });
        links.forEach(function (l) { l.classList.remove('active'); });
        if (current) current.link.classList.add('active');
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
})();

/* FAQ accordion */
document.querySelectorAll('.faq-q').forEach(function (q) {
    q.addEventListener('click', function () {
        const item = q.closest('.faq-item');
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item.open').forEach(function (o) { o.classList.remove('open'); });
        if (!isOpen) item.classList.add('open');
    });
});

// Additional certifications carousel
        new Swiper('.dms-cert-swiper', {
            slidesPerView: 1.2,
            spaceBetween: 16,
            navigation: { nextEl: '.dms-cert-next', prevEl: '.dms-cert-prev' },
            breakpoints: {
                0: { slidesPerView: 1.2 },
                576: { slidesPerView: 2.2 },
                992: { slidesPerView: 3 }
            }
        });

</script>

</body>
</html>
