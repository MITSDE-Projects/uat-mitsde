<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Feedback - MIT School of Distance Education</title>

    <link rel="canonical" href="https://mitsde.com/feedback" />

    <!-- OGP TAG -->

    <meta property="og:title" content="Feedback - MIT School of Distance Education">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/feedback.php">
    <meta property="og:description" content="">
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
            <span class="pb-current">Feedback</span>
        </nav>
        <div class="container">
            <div class="ph-layout py-5">
                <div class="ph-left">
                    <h1 class="ph-heading">Feedback</h1>
                    <div class="ph-sub">
                        <p>Share Your Experience With MITSDE</p>
                    </div>
                </div>
                <div class="ph-right">
                    <img src="assets-new/images/placement.webp" alt="Feedback Image" />
                </div>
            </div>
    </section>

    <!-- Referral Form Section -->
    <section class="rf-section">
        <div class="container">
            <div class="rf-card">

                <h2 class="rf-heading">
                    Feedback
                    <span class="rf-sub">Share Your Experience With Us</span>
                </h2>

                <form class="rf-form" action="includes/sendfeedback.php" method="post" novalidate>
                    <div class="rf-grid">

                        <!-- Friends Details -->
                        <div class="rf-group">
                            <p class="rf-group-label">Individual Type</p>
                            <div class="rf-field">
                                <select class="rf-input" name="IndividualType" required>
                                    <option value="" disabled selected>Choose Type</option>
                                    <option value="Existing Student ">Existing Student</option>
                                    <option value="Alumni">Alumni</option>
                                    <option value="Prospective Student">Prospective Student</option>
                                    <option value="Site Visitor">Site Visitor</option>
                                    <option value="Other">Other</option>
                                </select>
                                <span class="rf-star" aria-hidden="true">*</span>
                                <span class="rf-error-msg"></span>
                            </div>
                            <div class="rf-field">
                                <input type="text" class="rf-input" name="studentname" placeholder="Name" required />
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
                        </div>

                        <!-- Your Details -->
                        <div class="rf-group">
                            <p class="rf-group-label">Type of Feedback</p>
                            <div class="rf-field">
                                <select class="rf-input" name="feedback_type" required>
                                    <option value="" disabled selected>Choose Type</option>
                                    <option value="Website Navigation">Website Navigation</option>
                                    <option value="Contact Details">Contact Details</option>
                                    <option value="Course Information">Course Information</option>
                                    <option value="Student Service">Student Service</option>
                                    <option value="Academics">Academics</option>
                                    <option value="Admission Process">Admission Process</option>
                                    <option value="Fee Payment">Fee Payment</option>
                                    <option value="Certification">Certification</option>
                                    <option value="Examination">Examination</option>
                                    <option value="Other">Other </option>
                                </select>
                                <span class="rf-star" aria-hidden="true">*</span>
                                <span class="rf-error-msg"></span>
                            </div>
                            <div class="rf-field">
                                <textarea type="text" class="rf-input" rows="3" name="feedback" placeholder="Write Your Feedback Here" required></textarea>
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
            IndividualType:           { test: function(v){ return v !== ''; },  msg: 'Please select your individual type.' },
            studentname:        { test: /^[a-zA-Z\s]{3,50}$/,           msg: 'Please enter a valid name (letters only, min 3 characters).' },
            feedback_type: { test: function(v){ return v !== ''; },  msg: 'Please select a feedback type.' },
            feedback: { test: function(v) {
                var ck_url = /\b((https?:\/\/|www\.)[^\s]+|[A-Za-z0-9-]+\.(com|net|org|info|biz|co|in|us|uk)[^\s)]*)\b/i;
                var ck_special = /[@#$%^*()?:{}|<>]/;
                    if (v.length < 3) {return false;}
                    if (ck_url.test(v)) {return false;}
                    if (ck_special.test(v)) {return false;}
                    return true;},
                msg: 'Please enter valid feedback. URLs and special characters are not allowed.'},
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