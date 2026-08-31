<?php $pagename = "Learner Type Payment"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title>Online Learning | Distance Learning PGDM | Online MBA</title>
    <meta name="description" content="We have easy payment gateways for hassle-free payment. Enrol today." />
    <meta name="robots" content="noindex, nofollow">
    <meta name="keywords" content="paymentgateway, paymentoptions, onlinemba, distanceeducation, onlineeducation, distance mba" />

    <!-- CANONICAL TAG -->
    <link rel="canonical" href="https://mitsde.com/payment-gateway" />

    <!-- OGP TAG -->
    <meta property="og:title" content="Post Graduate Diploma Courses in Management | PGDM Course">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/payment-gateway">
    <meta property="og:description" content="Pay your admission form fees online for MIT School of Distance Education. Choose your learner type and proceed with secure payment options.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://mitsde.com/assets-new/images/application-process.webp">

    <link rel="icon" type="image/png" href="assets-new/images/favicon-mit.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css-new/styles.css" />
    <?php include "5-common-seo-tag-1.php" ?>

    <style>
        /* ── Payment selection cards ── */
        .ltp-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 2.2rem 1.5rem 1.8rem;
            border: 1.5px solid #e5e7eb;
            border-radius: 16px;
            background: #fff;
            height: 100%;
            transition: box-shadow .25s, transform .25s, border-color .25s;
            cursor: pointer;
        }
        .ltp-card:hover {
            box-shadow: 0 10px 32px rgba(234,88,12,.15);
            transform: translateY(-5px);
            border-color: var(--primary-orange);
        }
        .ltp-card__icon {
            width: 68px;
            height: 68px;
            border-radius: 50%;
            background: #fff1ea;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            color: var(--primary-orange);
            margin-bottom: 1.1rem;
        }
        .ltp-card__title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-dark);
            margin: 0 0 1.4rem;
            flex: 1;
            line-height: 1.5;
        }
        .ltp-card__btn {
            display: inline-flex;
            align-items: center;
            gap: .45rem;
            padding: .45rem 1.3rem;
            border-radius: 50px;
            font-size: .85rem;
            font-weight: 600;
            background: var(--primary-orange);
            color: #fff;
            transition: background .2s, gap .2s;
        }
        .ltp-card:hover .ltp-card__btn {
            background: var(--accent-orange);
            gap: .7rem;
        }

        /* ── Warning note ── */
        .ltp-note {
            display: flex;
            align-items: flex-start;
            gap: .6rem;
            background: #fff8f5;
            border: 1.5px solid var(--primary-orange);
            border-radius: 10px;
            padding: .9rem 1.2rem;
            color: var(--text-dark);
            font-size: .9rem;
        }
        .ltp-note i {
            color: var(--primary-orange);
            margin-top: .15rem;
            flex-shrink: 0;
        }

        /* ── Sub-row indent in fee table ── */
        .tbl td.tbl-sub {
            padding-left: 2rem;
            color: var(--text-light);
            /* font-style: italic; */
        }
    </style>
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
            <span class="pb-current">Payment</span>
        </nav>

        <div class="container">
            <div class="ph-layout py-5">

                <div class="ph-left">
                    <h1 class="ph-heading">Choose Your Learner Type</h1>
                    <div class="ph-sub">
                        <p>Select your learner type to continue with payment.</p>
                    </div>
                </div>

                <div class="ph-right">
                    <img src="assets-new/images/application-process.webp" alt="Payment" />
                </div>

            </div>
        </div>

    </section>

    <!-- ═══════════════════════════════════════════════
       PAYMENT SELECTION
    ════════════════════════════════════════════════ -->
    <section class="about-section pb-0">
        <div class="container">

            <h2 class="section-heading">Continue with <span class="text-orange">Payment</span></h2>

            <!-- 3 cards in one row -->
            <div class="row g-4 mb-4">
                <div class="col-12 col-md-4">
                    <a href="new-admission-form-payment" class="text-decoration-none">
                        <div class="ltp-card">
                            <span class="ltp-card__icon"><i class="fa-solid fa-file-signature"></i></span>
                            <h3 class="ltp-card__title">Payment For Admission</h3>
                            <span class="ltp-card__btn">Proceed <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="OtherFeesPaymenticici" class="text-decoration-none">
                        <div class="ltp-card">
                            <span class="ltp-card__icon"><i class="fa-solid fa-calendar-check"></i></span>
                            <h3 class="ltp-card__title">Learners Enrolled <strong>After</strong> December 2022</h3>
                            <span class="ltp-card__btn">Proceed <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="OtherFeesPayment03" class="text-decoration-none">
                        <div class="ltp-card">
                            <span class="ltp-card__icon"><i class="fa-solid fa-calendar-xmark"></i></span>
                            <h3 class="ltp-card__title">Learners Enrolled <strong>Before</strong> December 2022</h3>
                            <span class="ltp-card__btn">Proceed <i class="fa-solid fa-arrow-right"></i></span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Warning note -->
            <div class="ltp-note mb-2">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <span><strong>Note:</strong> This form is not to be used for exam form fee payment.</span>
            </div>

        </div>
    </section>

    <!-- ═══════════════════════════════════════════════
       FEE DETAILS TABLE
    ════════════════════════════════════════════════ -->
    <section class="accordian-section">
        <div class="container">

            <h2 class="section-heading">Fee Details</h2>

            <div class="tbl-wrap">
                <table class="tbl">
                    <thead>
                        <tr>
                            <th class="tbl-label">No</th>
                            <th class="tbl-label">Description</th>
                            <th class="tbl-accent">Charges in INR</th>
                            <th>Charges in USD</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>Course Extension Fee (For 6 Month)</td>
                            <td class="tbl-accent">&#8377; 7,500</td>
                            <td>&#36; 300</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Course Extension Fee (For 1 Year)</td>
                            <td class="tbl-accent">&#8377; 15,000</td>
                            <td>&#36; 600</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Replacement of Study Material</td>
                            <td class="tbl-accent">—</td>
                            <td>—</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td class="tbl-sub">PGDM</td>
                            <td class="tbl-accent">&#8377; 8,000</td>
                            <td>&#36; 200</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td class="tbl-sub">PGDBA</td>
                            <td class="tbl-accent">&#8377; 10,000</td>
                            <td>&#36; 250</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td class="tbl-sub">PGCM</td>
                            <td class="tbl-accent">&#8377; 5,100</td>
                            <td>—</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td class="tbl-sub">PGDM-EX</td>
                            <td class="tbl-accent">&#8377; 5,100</td>
                            <td>—</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Bonafide Certificate</td>
                            <td class="tbl-accent">&#8377; 250</td>
                            <td>&#36; 25</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>LOR Letter</td>
                            <td class="tbl-accent">&#8377; 250</td>
                            <td>&#36; 25</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>Duplicate Certificate</td>
                            <td class="tbl-accent">&#8377; 250</td>
                            <td>&#36; 25</td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>Duplicate Grade Sheet per semester</td>
                            <td class="tbl-accent">&#8377; 500</td>
                            <td>—</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>Transcript Certificate</td>
                            <td class="tbl-accent">&#8377; 1,000</td>
                            <td>&#36; 50</td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>Change in Specialization (Within 6 Month)</td>
                            <td class="tbl-accent">&#8377; 3,000</td>
                            <td>—</td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>Change in Specialization (After 6 Month)</td>
                            <td class="tbl-accent">&#8377; 5,000</td>
                            <td>—</td>
                        </tr>

                        <tr>
                            <td>11</td>
                            <td>Course Change Charges (Within a Month)</td>
                            <td class="tbl-accent">&#8377; 3,000</td>
                            <td>—</td>
                        </tr>

                        <tr>
                            <td>12</td>
                            <td>Course Change Charges (After a Month)</td>
                            <td class="tbl-accent">&#8377; 5,000</td>
                            <td>—</td>
                        </tr>

                        <tr>
                            <td>13</td>
                            <td>Project Evaluation</td>
                            <td class="tbl-accent">&#8377; 2,000</td>
                            <td>—</td>
                        </tr>

                        <tr>
                            <td>14</td>
                            <td>Late Fee Charges (per month)</td>
                            <td class="tbl-accent">&#8377; 1,000</td>
                            <td>&#36; 100</td>
                        </tr>

                        <tr>
                            <td>15</td>
                            <td>Course Verification Charges</td>
                            <td class="tbl-accent">&#8377; 2,500</td>
                            <td>—</td>
                        </tr>

                        <tr>
                            <td>16</td>
                            <td>International Dispatch for One Semester</td>
                            <td class="tbl-accent">&#8377; 7,500</td>
                            <td>&#36; 100</td>
                        </tr>

                        <tr>
                            <td>17</td>
                            <td>Elective Change Charges</td>
                            <td class="tbl-accent">&#8377; 500</td>
                            <td>—</td>
                        </tr>

                        <tr>
                            <td>18</td>
                            <td>Exam Fee Per Paper</td>
                            <td class="tbl-accent">&#8377; 750</td>
                            <td>—</td>
                        </tr>

                        <tr>
                            <td>19</td>
                            <td>Exam Form Late Fee (per semester)</td>
                            <td class="tbl-accent">&#8377; 1,000</td>
                            <td>—</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <!-- ═══════════════════════════════════════════════
       SITE FOOTER
    ════════════════════════════════════════════════ -->
    <?php include "footer-new.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
