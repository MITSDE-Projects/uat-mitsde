<?php $pagename = "Student Testimonials"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>Student Testimonials | Real Stories from MITSDE Learners</title>

    <meta name="description" content="Hear from MITSDE students and alumni about their learning journey, career growth, and life-changing experiences with our distance PG programmes." />
    <meta name="keywords" content="MITSDE testimonials, student reviews, MITSDE learner stories, distance education reviews, PGDM student testimonials" />

    <link rel="canonical" href="https://mitsde.com/testimonials" />

    <meta property="og:title" content="Student Testimonials | Real Stories from MITSDE Learners">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/testimonials">
    <meta property="og:description" content="Hear from MITSDE students and alumni about their learning journey, career growth, and life-changing experiences with our distance PG programmes.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://mitsde.com/assets-new/images/man-in-middle-desk.webp">

    <link rel="icon" type="image/png" href="assets-new/images/favicon-mit.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css-new/styles.css" />
    <link rel="stylesheet" href="css-new/intlTelInput.css">

    <style>
        /* ── Testimonials page — scoped .tv-* ── */

        .tv-section { padding: 56px 0 64px; }
        .tv-section + .tv-section { padding-top: 0; }

        .tv-group-eyebrow {
            display: inline-flex; align-items: center; gap: 8px;
            font-size: 10.5px; font-weight: 700; letter-spacing: 0.13em;
            text-transform: uppercase; color: var(--primary-orange);
            margin-bottom: 8px;
        }
        .tv-group-eyebrow::before {
            content: ''; display: inline-block;
            width: 28px; height: 2px; background: var(--primary-orange);
            border-radius: 2px;
        }
        .tv-group-heading {
            font-size: 26px; font-weight: 700; color: var(--text-dark);
            margin-bottom: 32px;
        }

        /* video card */
        .tv-card { display: flex; flex-direction: column; }
        .tv-thumb-wrap {
            position: relative;
            aspect-ratio: 16 / 9;
            border-radius: 10px;
            overflow: hidden;
            /* border: 3px solid var(--primary-orange); */
            box-shadow: 0 4px 14px rgba(0,0,0,.10);
            cursor: pointer;
            transition: transform .25s, box-shadow .25s;
            background: #111;
        }
        .tv-thumb-wrap:hover { transform: translateY(-3px); box-shadow: 0 10px 28px rgba(0,0,0,.18); }
        .tv-thumb-wrap:focus-visible { outline: 3px solid var(--primary-orange); outline-offset: 3px; }
        .tv-thumb {
            width: 100%; height: 100%;
            object-fit: cover; display: block;
            transition: opacity .2s;
        }
        .tv-thumb-wrap:hover .tv-thumb { opacity: .88; }

        /* play button SVG overlay */
        .tv-play-btn {
            position: absolute; top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            pointer-events: none;
            filter: drop-shadow(0 2px 8px rgba(0,0,0,.45));
            transition: transform .2s;
        }
        .tv-thumb-wrap:hover .tv-play-btn { transform: translate(-50%, -50%) scale(1.12); }

        /* iframe replaces thumbnail on click */
        .tv-thumb-wrap iframe {
            position: absolute; inset: 0;
            width: 100%; height: 100%; border: 0;
        }

        .tv-title {
            font-size: 13.5px; font-weight: 600;
            color: var(--text-dark); line-height: 1.45;
            margin-top: 12px; text-align: center;
        }

        /* section divider */
        .tv-rule { height: 1px; background: rgba(234,88,12,.15); margin: 8px 0 48px; }

        @media (max-width: 767px) {
            .tv-group-heading { font-size: 20px; margin-bottom: 20px; }
        }
    </style>

<?php include "5-common-seo-tag-1.php" ?>
</head>

<body>
<?php include "5-common-seo-tag-2.php" ?>
<?php include "header-new.php" ?>

<!-- ═══════════════════════════════════════════════
   HERO
════════════════════════════════════════════════ -->
<section class="hero ph-hero">

    <nav class="page-breadcrumb" aria-label="Breadcrumb">
        <span class="pb-line"></span>
        <a href="./">Home</a>
        <span class="pb-sep">/</span>
        <span class="pb-current">Testimonials</span>
    </nav>

    <div class="container">
        <div class="ph-layout py-5">
            <div class="ph-left">
                <h1 class="ph-heading">Your Growth,<br>Our Mission</h1>
                <div class="ph-sub">
                    <p>Real stories from learners whose lives were shaped by MITSDE — in their own words.</p>
                </div>
            </div>
            <div class="ph-right">
                <img src="assets-new/images/man-in-middle-desk.webp" alt="MITSDE Student Testimonials" />
            </div>
        </div>
    </div>

</section>

<!-- ═══════════════════════════════════════════════
   STUDENT VOICES
════════════════════════════════════════════════ -->
<section class="tv-section">
    <div class="container">

        <div class="tv-group-eyebrow">Learner Stories</div>
        <h2 class="tv-group-heading">What Our Students Say</h2>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="tv-card">
                    <div class="tv-thumb-wrap" data-yt-id="7XIykoonFLM" role="button" tabindex="0" aria-label="Play: What Our Learners Say About Us">
                        <img class="tv-thumb" src="https://img.youtube.com/vi/7XIykoonFLM/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://img.youtube.com/vi/7XIykoonFLM/hqdefault.jpg';" alt="What Our Learners Say About Us" />
                        <div class="tv-play-btn"><svg viewBox="0 0 68 48" width="58" height="42"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.01 34 0 34 0S12.21.01 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C0 13.05 0 24 0 24s0 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.99 34 48 34 48s21.79-.01 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C68 34.95 68 24 68 24s0-10.95-1.48-16.26z" fill="#ff0000"/><path d="M45 24 27 14v20z" fill="#fff"/></svg></div>
                    </div>
                    <div class="tv-title">What Our Learners Say About Us</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tv-card">
                    <div class="tv-thumb-wrap" data-yt-id="gTUn71392Zs" role="button" tabindex="0" aria-label="Play: What Our Learners Say About Us">
                        <img class="tv-thumb" src="https://img.youtube.com/vi/gTUn71392Zs/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://img.youtube.com/vi/gTUn71392Zs/hqdefault.jpg';" alt="What Our Learners Say About Us" />
                        <div class="tv-play-btn"><svg viewBox="0 0 68 48" width="58" height="42"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.01 34 0 34 0S12.21.01 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C0 13.05 0 24 0 24s0 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.99 34 48 34 48s21.79-.01 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C68 34.95 68 24 68 24s0-10.95-1.48-16.26z" fill="#ff0000"/><path d="M45 24 27 14v20z" fill="#fff"/></svg></div>
                    </div>
                    <div class="tv-title">What Our Learners Say About Us</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tv-card">
                    <div class="tv-thumb-wrap" data-yt-id="fuFtKJ4-L5A" role="button" tabindex="0" aria-label="Play: What Our Learners Say About Us">
                        <img class="tv-thumb" src="https://img.youtube.com/vi/fuFtKJ4-L5A/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://img.youtube.com/vi/fuFtKJ4-L5A/hqdefault.jpg';" alt="What Our Learners Say About Us" />
                        <div class="tv-play-btn"><svg viewBox="0 0 68 48" width="58" height="42"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.01 34 0 34 0S12.21.01 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C0 13.05 0 24 0 24s0 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.99 34 48 34 48s21.79-.01 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C68 34.95 68 24 68 24s0-10.95-1.48-16.26z" fill="#ff0000"/><path d="M45 24 27 14v20z" fill="#fff"/></svg></div>
                    </div>
                    <div class="tv-title">What Our Learners Say About Us</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tv-card">
                    <div class="tv-thumb-wrap" data-yt-id="vJWtkasQomw" role="button" tabindex="0" aria-label="Play: What Our Learners Say About Us">
                        <img class="tv-thumb" src="https://img.youtube.com/vi/vJWtkasQomw/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://img.youtube.com/vi/vJWtkasQomw/hqdefault.jpg';" alt="What Our Learners Say About Us" />
                        <div class="tv-play-btn"><svg viewBox="0 0 68 48" width="58" height="42"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.01 34 0 34 0S12.21.01 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C0 13.05 0 24 0 24s0 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.99 34 48 34 48s21.79-.01 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C68 34.95 68 24 68 24s0-10.95-1.48-16.26z" fill="#ff0000"/><path d="M45 24 27 14v20z" fill="#fff"/></svg></div>
                    </div>
                    <div class="tv-title">What Our Learners Say About Us</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tv-card">
                    <div class="tv-thumb-wrap" data-yt-id="FjfqcXZo0EU" role="button" tabindex="0" aria-label="Play: What Our Learners Say About Us">
                        <img class="tv-thumb" src="https://img.youtube.com/vi/FjfqcXZo0EU/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://img.youtube.com/vi/FjfqcXZo0EU/hqdefault.jpg';" alt="What Our Learners Say About Us" />
                        <div class="tv-play-btn"><svg viewBox="0 0 68 48" width="58" height="42"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.01 34 0 34 0S12.21.01 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C0 13.05 0 24 0 24s0 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.99 34 48 34 48s21.79-.01 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C68 34.95 68 24 68 24s0-10.95-1.48-16.26z" fill="#ff0000"/><path d="M45 24 27 14v20z" fill="#fff"/></svg></div>
                    </div>
                    <div class="tv-title">What Our Learners Say About Us</div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="tv-rule"></div>

<!-- ═══════════════════════════════════════════════
   OUR PROGRAMMES
════════════════════════════════════════════════ -->
<section class="tv-section">
    <div class="container">

        <div class="tv-group-eyebrow">Course Highlights</div>
        <h2 class="tv-group-heading">Our Programmes</h2>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="tv-card">
                    <div class="tv-thumb-wrap" data-yt-id="CTAdQK-ZiM8" role="button" tabindex="0" aria-label="Play: Guaranteed Career Placements">
                        <img class="tv-thumb" src="https://img.youtube.com/vi/CTAdQK-ZiM8/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://img.youtube.com/vi/CTAdQK-ZiM8/hqdefault.jpg';" alt="Guaranteed Career Placements" />
                        <div class="tv-play-btn"><svg viewBox="0 0 68 48" width="58" height="42"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.01 34 0 34 0S12.21.01 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C0 13.05 0 24 0 24s0 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.99 34 48 34 48s21.79-.01 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C68 34.95 68 24 68 24s0-10.95-1.48-16.26z" fill="#ff0000"/><path d="M45 24 27 14v20z" fill="#fff"/></svg></div>
                    </div>
                    <div class="tv-title">Guaranteed Career Placements</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tv-card">
                    <div class="tv-thumb-wrap" data-yt-id="CYO2V_PurrU" role="button" tabindex="0" aria-label="Play: Dual Specialization Program">
                        <img class="tv-thumb" src="https://img.youtube.com/vi/CYO2V_PurrU/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://img.youtube.com/vi/CYO2V_PurrU/hqdefault.jpg';" alt="Dual Specialization Program" />
                        <div class="tv-play-btn"><svg viewBox="0 0 68 48" width="58" height="42"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.01 34 0 34 0S12.21.01 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C0 13.05 0 24 0 24s0 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.99 34 48 34 48s21.79-.01 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C68 34.95 68 24 68 24s0-10.95-1.48-16.26z" fill="#ff0000"/><path d="M45 24 27 14v20z" fill="#fff"/></svg></div>
                    </div>
                    <div class="tv-title">Dual Specialization Program</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tv-card">
                    <div class="tv-thumb-wrap" data-yt-id="t2fflS4pI5w" role="button" tabindex="0" aria-label="Play: Executive MBA (EMBA) Program">
                        <img class="tv-thumb" src="https://img.youtube.com/vi/t2fflS4pI5w/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://img.youtube.com/vi/t2fflS4pI5w/hqdefault.jpg';" alt="Executive MBA (EMBA) Program" />
                        <div class="tv-play-btn"><svg viewBox="0 0 68 48" width="58" height="42"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.01 34 0 34 0S12.21.01 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C0 13.05 0 24 0 24s0 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.99 34 48 34 48s21.79-.01 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C68 34.95 68 24 68 24s0-10.95-1.48-16.26z" fill="#ff0000"/><path d="M45 24 27 14v20z" fill="#fff"/></svg></div>
                    </div>
                    <div class="tv-title">Executive MBA (EMBA) Program</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tv-card">
                    <div class="tv-thumb-wrap" data-yt-id="tczRyu5_oro" role="button" tabindex="0" aria-label="Play: PGDM Executive Program">
                        <img class="tv-thumb" src="https://img.youtube.com/vi/tczRyu5_oro/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://img.youtube.com/vi/tczRyu5_oro/hqdefault.jpg';" alt="PGDM Executive Program" />
                        <div class="tv-play-btn"><svg viewBox="0 0 68 48" width="58" height="42"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.01 34 0 34 0S12.21.01 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C0 13.05 0 24 0 24s0 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.99 34 48 34 48s21.79-.01 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C68 34.95 68 24 68 24s0-10.95-1.48-16.26z" fill="#ff0000"/><path d="M45 24 27 14v20z" fill="#fff"/></svg></div>
                    </div>
                    <div class="tv-title">PGDM Executive Program</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tv-card">
                    <div class="tv-thumb-wrap" data-yt-id="HpJsEJ3aYXs" role="button" tabindex="0" aria-label="Play: PGDM Program">
                        <img class="tv-thumb" src="https://img.youtube.com/vi/HpJsEJ3aYXs/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://img.youtube.com/vi/HpJsEJ3aYXs/hqdefault.jpg';" alt="PGDM Program" />
                        <div class="tv-play-btn"><svg viewBox="0 0 68 48" width="58" height="42"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.01 34 0 34 0S12.21.01 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C0 13.05 0 24 0 24s0 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.99 34 48 34 48s21.79-.01 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C68 34.95 68 24 68 24s0-10.95-1.48-16.26z" fill="#ff0000"/><path d="M45 24 27 14v20z" fill="#fff"/></svg></div>
                    </div>
                    <div class="tv-title">PGDM Program</div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="tv-rule"></div>

<!-- ═══════════════════════════════════════════════
   LIFE AT MITSDE
════════════════════════════════════════════════ -->
<section class="tv-section">
    <div class="container">

        <div class="tv-group-eyebrow">Beyond the Classroom</div>
        <h2 class="tv-group-heading">Life at MITSDE</h2>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="tv-card">
                    <div class="tv-thumb-wrap" data-yt-id="b44fj1SYMwY" role="button" tabindex="0" aria-label="Play: Global Internship Opportunities">
                        <img class="tv-thumb" src="https://img.youtube.com/vi/b44fj1SYMwY/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://img.youtube.com/vi/b44fj1SYMwY/hqdefault.jpg';" alt="Global Internship Opportunities" />
                        <div class="tv-play-btn"><svg viewBox="0 0 68 48" width="58" height="42"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.01 34 0 34 0S12.21.01 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C0 13.05 0 24 0 24s0 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.99 34 48 34 48s21.79-.01 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C68 34.95 68 24 68 24s0-10.95-1.48-16.26z" fill="#ff0000"/><path d="M45 24 27 14v20z" fill="#fff"/></svg></div>
                    </div>
                    <div class="tv-title">Global Internship Opportunities</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tv-card">
                    <div class="tv-thumb-wrap" data-yt-id="HT315yntbdM" role="button" tabindex="0" aria-label="Play: Student Success &amp; Support Hub">
                        <img class="tv-thumb" src="https://img.youtube.com/vi/HT315yntbdM/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://img.youtube.com/vi/HT315yntbdM/hqdefault.jpg';" alt="Student Success &amp; Support Hub" />
                        <div class="tv-play-btn"><svg viewBox="0 0 68 48" width="58" height="42"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.01 34 0 34 0S12.21.01 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C0 13.05 0 24 0 24s0 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.99 34 48 34 48s21.79-.01 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C68 34.95 68 24 68 24s0-10.95-1.48-16.26z" fill="#ff0000"/><path d="M45 24 27 14v20z" fill="#fff"/></svg></div>
                    </div>
                    <div class="tv-title">Student Success &amp; Support Hub</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tv-card">
                    <div class="tv-thumb-wrap" data-yt-id="x2x-Bknk0CQ" role="button" tabindex="0" aria-label="Play: CIE - Center for Innovation and Entrepreneurship">
                        <img class="tv-thumb" src="https://img.youtube.com/vi/x2x-Bknk0CQ/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://img.youtube.com/vi/x2x-Bknk0CQ/hqdefault.jpg';" alt="CIE - Center for Innovation and Entrepreneurship" />
                        <div class="tv-play-btn"><svg viewBox="0 0 68 48" width="58" height="42"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.01 34 0 34 0S12.21.01 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C0 13.05 0 24 0 24s0 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.99 34 48 34 48s21.79-.01 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C68 34.95 68 24 68 24s0-10.95-1.48-16.26z" fill="#ff0000"/><path d="M45 24 27 14v20z" fill="#fff"/></svg></div>
                    </div>
                    <div class="tv-title">CIE — Centre for Innovation &amp; Entrepreneurship</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tv-card">
                    <div class="tv-thumb-wrap" data-yt-id="68fwyNbhX7k" role="button" tabindex="0" aria-label="Play: MOCS - MIT Office of Career Services">
                        <img class="tv-thumb" src="https://img.youtube.com/vi/68fwyNbhX7k/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://img.youtube.com/vi/68fwyNbhX7k/hqdefault.jpg';" alt="MOCS - MIT Office of Career Services" />
                        <div class="tv-play-btn"><svg viewBox="0 0 68 48" width="58" height="42"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.01 34 0 34 0S12.21.01 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C0 13.05 0 24 0 24s0 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.99 34 48 34 48s21.79-.01 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C68 34.95 68 24 68 24s0-10.95-1.48-16.26z" fill="#ff0000"/><path d="M45 24 27 14v20z" fill="#fff"/></svg></div>
                    </div>
                    <div class="tv-title">MOCS — MIT Office of Career Services</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tv-card">
                    <div class="tv-thumb-wrap" data-yt-id="cs539866iX0" role="button" tabindex="0" aria-label="Play: Flexible &amp; Smart Fee Solutions">
                        <img class="tv-thumb" src="https://img.youtube.com/vi/cs539866iX0/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://img.youtube.com/vi/cs539866iX0/hqdefault.jpg';" alt="Flexible &amp; Smart Fee Solutions" />
                        <div class="tv-play-btn"><svg viewBox="0 0 68 48" width="58" height="42"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.01 34 0 34 0S12.21.01 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C0 13.05 0 24 0 24s0 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.99 34 48 34 48s21.79-.01 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C68 34.95 68 24 68 24s0-10.95-1.48-16.26z" fill="#ff0000"/><path d="M45 24 27 14v20z" fill="#fff"/></svg></div>
                    </div>
                    <div class="tv-title">Flexible &amp; Smart Fee Solutions</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tv-card">
                    <div class="tv-thumb-wrap" data-yt-id="8MGLJftCZ3M" role="button" tabindex="0" aria-label="Play: Seamless Exam Experience">
                        <img class="tv-thumb" src="https://img.youtube.com/vi/8MGLJftCZ3M/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://img.youtube.com/vi/8MGLJftCZ3M/hqdefault.jpg';" alt="Seamless Exam Experience" />
                        <div class="tv-play-btn"><svg viewBox="0 0 68 48" width="58" height="42"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.01 34 0 34 0S12.21.01 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C0 13.05 0 24 0 24s0 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.99 34 48 34 48s21.79-.01 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C68 34.95 68 24 68 24s0-10.95-1.48-16.26z" fill="#ff0000"/><path d="M45 24 27 14v20z" fill="#fff"/></svg></div>
                    </div>
                    <div class="tv-title">Seamless Exam Experience</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="tv-card">
                    <div class="tv-thumb-wrap" data-yt-id="nqck_G-9Htc" role="button" tabindex="0" aria-label="Play: Transforming Lives Through Learning">
                        <img class="tv-thumb" src="https://img.youtube.com/vi/nqck_G-9Htc/maxresdefault.jpg" onerror="this.onerror=null;this.src='https://img.youtube.com/vi/nqck_G-9Htc/hqdefault.jpg';" alt="Transforming Lives Through Learning" />
                        <div class="tv-play-btn"><svg viewBox="0 0 68 48" width="58" height="42"><path d="M66.52 7.74c-.78-2.93-2.49-5.41-5.42-6.19C55.79.01 34 0 34 0S12.21.01 6.9 1.55c-2.93.78-4.63 3.26-5.42 6.19C0 13.05 0 24 0 24s0 10.95 1.48 16.26c.78 2.93 2.49 5.41 5.42 6.19C12.21 47.99 34 48 34 48s21.79-.01 27.1-1.55c2.93-.78 4.64-3.26 5.42-6.19C68 34.95 68 24 68 24s0-10.95-1.48-16.26z" fill="#ff0000"/><path d="M45 24 27 14v20z" fill="#fff"/></svg></div>
                    </div>
                    <div class="tv-title">Transforming Lives Through Learning</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════
   SITE FOOTER
════════════════════════════════════════════════ -->
<?php include "footer-new.php" ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    /* click-to-play: replaces thumbnail with iframe only on user click — no YouTube JS on page load */
    (function () {
        document.querySelectorAll('.tv-thumb-wrap').forEach(function (wrap) {
            function playVideo() {
                var ytId = wrap.getAttribute('data-yt-id');
                wrap.innerHTML = '<iframe src="https://www.youtube.com/embed/' + ytId + '?autoplay=1&rel=0" title="' + (wrap.getAttribute('aria-label') || 'YouTube video') + '" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
            }
            wrap.addEventListener('click', playVideo);
            wrap.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); playVideo(); }
            });
        });
    })();
</script>

</body>
</html>
