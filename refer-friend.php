<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>Refer Friend - MIT School of Distance Education</title>
    <meta name="description"
        content="Invite your friend to join MIT SDE's distance learning programs. Refer now and enjoy rewards when they register and enroll."/>

    <!-- CANONICAL TAG -->


    <link rel="canonical" href="https://mitsde.com/refer-friend" />

    <!-- CANONICAL TAG -->

    <!-- OGP TAG -->

    <meta property="og:title" content="Refer Friend - MIT School of Distance Education">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/refer-friend.php">
    <meta property="og:description" content="Invite your friend to join MIT SDE's distance learning programs. Refer now and enjoy rewards when they register and enroll.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://mitsde.com/assets-new/images/referral.webp">

    <!-- / OG TAG -->

    <!--  -->
    <link rel="icon" type="image/png" href="assets-new/images/favicon-mit.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css-new/styles.css" />
    <link rel="stylesheet" href="css-new/intlTelInput.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function enableSubmitBtn() {
            document.getElementById("mysubmitBtn").disabled = false;  //enable the submit button

        }
    </script>
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
            <span class="pb-current">Refer Friend</span>
        </nav>

        <div class="container">

            <!-- 3-column layout: left content | center image | right form -->
            <div class="ph-layout py-5">

                <div>
                    <img src="assets-new/images/Refer-Banner.webp" class="img-fluid" alt="Refer Friend Image" />
                </div>

            </div><!-- /ph-layout -->
        </div>
        <!-- <div class="container">

            <div class="ph-layout py-5">

                <div class="ph-left">
                    <h1 class="ph-heading"><p class="text-small">Refer Your Friends Unlock an Exclusive Benefit</p>Get Flat ₹6000 Off*</h1>
                    <div class="ph-sub flex-column align-items-start">
                        <button type="button" class="btn btn-dark rounded-pill px-4 py-2" data-bs-toggle="modal" data-bs-target="#downloadModal">Download Brochure</button>
                    </div>
                </div>

                <div class="ph-right">
                    <img src="assets-new/images/referral.webp" alt="Refer Friend Image" />
                </div>

            </div>
        </div> -->
    </section>

    <!-- Referral Form Section -->
    <section class="rf-section">
        <div class="container">
            <div class="rf-card">

                <h2 class="rf-heading">
                    Referral Policy
                    <span class="rf-sub">Get a Course Discount by Referring</span>
                </h2>

                <form class="rf-form" action="includes/sendreferfriend.php" method="post" novalidate>
                    <div class="rf-grid">

                        <!-- Friends Details -->
                        <div class="rf-group">
                            <p class="rf-group-label">Friends Details</p>
                            <div class="rf-field">
                                <input type="text" class="rf-input" name="form_name_candidate" placeholder="Name" required />
                                <span class="rf-star" aria-hidden="true">*</span>
                                <span class="rf-error-msg"></span>
                            </div>
                            <div class="rf-field">
                                <input type="email" class="rf-input" name="student_email" placeholder="Email" required />
                                <span class="rf-star" aria-hidden="true">*</span>
                                <span class="rf-error-msg"></span>
                            </div>
                            <div class="rf-field">
                                <input type="tel" class="rf-input" name="student_mob" placeholder="Mobile No" required />
                                <span class="rf-star" aria-hidden="true">*</span>
                                <span class="rf-error-msg"></span>
                            </div>
                            <div class="rf-field">
                                <select class="rf-input" name="Relation" required>
                                    <option value="" disabled selected>Relation</option>
                                    <option value="Friend">Friend</option>
                                    <option value="Family">Family</option>
                                    <option value="Colleague">Colleague</option>
                                    <option value="Classmate">Classmate</option>
                                    <option value="Other">Other</option>
                                </select>
                                <span class="rf-star" aria-hidden="true">*</span>
                                <span class="rf-error-msg"></span>
                            </div>
                            <div class="rf-field">
                                <select class="rf-input" name="Program_Interested" required>
                                    <option value="" disabled selected>Program Interested</option>
                                    <option value="PGDM in Project Management">PGDM in Project Management</option>
                                        <option value="PGDM in Operations Management">PGDM in Operations Management</option>
                                        <option value="PGDM in Human Resource Management">PGDM in Human Resource Management</option>
                                        <option value="PGDM in Information Technology">PGDM in Information Technology</option>
                                        <option value="PGDM in Marketing Management">PGDM in Marketing Management</option>
                                        <option value="PGDM in Finance Management">PGDM in Finance Management</option>
                                        <option value="PGDM in Logistics and Supply Chain Management">PGDM in Logistics and Supply Chain Management</option>
                                        <option value="PGDM in Material Management">PGDM in Material Management</option>
                                        <option value="PGDM in Banking & Financial Services">PGDM in Banking & Financial Services</option>
                                        <option value="PGDM in Construction And Project Management">PGDM in Construction And Project Management</option>
                                        <option value="PGCM in Business Analytics">PGCM in Business Analytics</option>
                                        <option value="PGCM in Digital Marketing">PGCM in Digital Marketing</option>
                                        <option value="PGDM (Ex.) in Modern Project Management">PGDM (Ex.) in Modern Project Management</option>
                                        <option value="PGDM (Ex.) in Technology & Operations">PGDM (Ex.) in Technology & Operations</option>
                                        <option value="PGDM (Ex.) in Human Capital Management">PGDM (Ex.) in Human Capital Management</option>
                                        <option value="PGDM (Ex.) in Banking & Financial Services">PGDM (Ex.) in Banking & Financial Services</option>
                                        <option value="PGDM (Ex.) in Strategic Marketing Management">PGDM (Ex.) in Strategic Marketing Management</option>
                                        <option value="PGDM (Ex.) in Global Logistics & Supply Chain">PGDM (Ex.) in Global Logistics & Supply Chain</option>
                                        <option value="PGDM (Ex.) in Construction and Project">PGDM (Ex.) in Construction and Project</option>
                                        <option value="PGDBA in Operations Management">PGDBA in Operations Management</option>
                                        <option value="PGDBA in Finance Management">PGDBA in Finance Management</option>
                                        <option value="PGDBA in Human Resource Management">PGDBA in Human Resource Management</option>
                                        <option value="PGDBA in Information Technology">PGDBA in Information Technology</option>
                                        <option value="PGDBA in Marketing Management">PGDBA in Marketing Management</option>
                                        <option value="SQL Power BI Certification">SQL Power BI Certification</option>
                                        <option value="Advanced Certificate In UI UX">Advanced Certificate In UI UX</option>
                                        <option value="AI in Digital Marketing">AI in Digital Marketing</option>
                                        <option value="Certification in Project Management">Certification in Project Management</option>
                                        <option value="Certification in Marketing Management">Certification in Marketing Management</option>
                                        <option value="Certification in Human Resource Management">Certification in Human Resource Management</option>
                                        <option value="Certification in Operations Management">Certification in Operations Management</option>
                                        <option value="Certification in Material Management">Certification in Material Management</option>
                                        <option value="Certification in Logistics and Supply Chain">Certification in Logistics and Supply Chain</option>
                                        <option value="Certification in Finance Management">Certification in Finance Management</option>
                                </select>
                                <span class="rf-star" aria-hidden="true">*</span>
                                <span class="rf-error-msg"></span>
                            </div>
                        </div>

                        <!-- Your Details -->
                        <div class="rf-group">
                            <p class="rf-group-label">Your Details</p>
                            <div class="rf-field">
                                <input type="text" class="rf-input" name="form_name" placeholder="Name" required />
                                <span class="rf-star" aria-hidden="true">*</span>
                                <span class="rf-error-msg"></span>
                            </div>
                            <div class="rf-field">
                                <input type="text" class="rf-input" name="Registration_no" placeholder="Registration No" required />
                                <span class="rf-star" aria-hidden="true">*</span>
                                <span class="rf-error-msg"></span>
                            </div>
                            <div class="rf-field">
                                <input type="email" class="rf-input" name="Your_Email" placeholder="Email" required />
                                <span class="rf-star" aria-hidden="true">*</span>
                                <span class="rf-error-msg"></span>
                            </div>
                            <div class="rf-field">
                                <input type="tel" class="rf-input" name="Mobile_no" placeholder="Mobile No" required />
                                <span class="rf-star" aria-hidden="true">*</span>
                                <span class="rf-error-msg"></span>
                            </div>
                            <div class="rf-footer">
                                <div>
                                    <div class="g-recaptcha" data-sitekey="6Lf1dR4gAAAAAJXXpTYVhawIuElj2l7XXvd2FRsJ" required="" data-callback="enableSubmitBtn"></div>
                                </div>
                                <button type="submit" class="btn-rf-submit" id="mysubmitBtn" disabled="disabled">Submit</button>
                            </div>
                        </div>

                    </div>
                </form>

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
    (function () {
        var RULES = {
            form_name_candidate:        { test: /^[a-zA-Z\s]{3,50}$/,           msg: 'Please enter a valid name (letters only, min 3 characters).' },
            student_email:       { test: /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/, msg: 'Please enter a valid email address.' },
            student_mob:      { test: /^(?!([0-9])\1{9}$)[6-9]\d{9}$/,                  msg: 'Please enter a valid 10-digit mobile number.' },
            Relation:           { test: function(v){ return v !== ''; },  msg: 'Please select your relation with the friend.' },
            Program_Interested: { test: function(v){ return v !== ''; },  msg: 'Please select a program.' },
            form_name:          { test: /^[a-zA-Z\s]{3,50}$/,           msg: 'Please enter a valid name (letters only, min 3 characters).' },
            Registration_no:    { test: /^.{3,}$/,                       msg: 'Please enter your registration number.' },
            Your_Email:         { test: /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/, msg: 'Please enter a valid email address.' },
            Mobile_no:        { test: /^(?!([0-9])\1{9}$)[6-9]\d{9}$/,                  msg: 'Please enter a valid 10-digit mobile number.' }
        };

        function validateField(input) {
            var field = input.closest('.rf-field');
            if (!field) return true;
            var rule = RULES[input.name];
            if (!rule) return true;

            var val = input.value.trim();
            var valid = (typeof rule.test === 'function') ? rule.test(val) : rule.test.test(val);
            var errEl = field.querySelector('.rf-error-msg');

            field.classList.toggle('rf-error', !valid);
            field.classList.toggle('rf-valid', valid);
            if (errEl) errEl.textContent = valid ? '' : rule.msg;
            return valid;
        }

        function validateAll() {
            var inputs = document.querySelectorAll('.rf-form .rf-input');
            var allValid = true;
            inputs.forEach(function(input) {
                if (!validateField(input)) allValid = false;
            });
            return allValid;
        }

        // Validate on blur; re-validate on input while in error state
        document.querySelectorAll('.rf-form .rf-input').forEach(function(input) {
            input.addEventListener('blur', function() { validateField(input); });
            input.addEventListener('input', function() {
                if (input.closest('.rf-field').classList.contains('rf-error')) validateField(input);
            });
            input.addEventListener('change', function() { validateField(input); });
        });

        // Block submit if validation fails; scroll to first error
        var form = document.querySelector('.rf-form');
        if (form) {
            form.addEventListener('submit', function(e) {
                if (!validateAll()) {
                    e.preventDefault();
                    var firstErr = form.querySelector('.rf-field.rf-error .rf-input');
                    if (firstErr) firstErr.focus();
                }
            });
        }
    })();
    </script>
</body>

</html>