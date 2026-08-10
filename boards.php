<?php $pagename = "Boards"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>BOARD OF GOVERNANCE</title>

    <meta name="description" content="BOARD OF GOVERNANCE" />
    <meta name="keywords"
        content="best online MBA program, distance mba, distance courses, distance education, online mba, online learning" />
    
    <!-- CANONICAL TAG -->

    <link rel="canonical" href="https://mitsde.com/boards" />
    <!-- OGP TAG -->
    <meta property="og:title" content="BOARD OF GOVERNANCE">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/boards">
    <meta property="og:description" content="BOARD OF GOVERNANCE">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://mitsde.com/assets-new/images/application-process.webp">

    <link rel="icon" type="image/png" href="assets-new/images/favicon-mit.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css-new/styles.css" />
    <link rel="stylesheet" href="css-new/intlTelInput.css">

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
            <span class="pb-current">Board</span>
        </nav>

        <div class="container">
            <div class="ph-layout py-5">
                <div class="ph-left">
                    <h1 class="ph-heading">Board</h1>
                    <button type="button" class="btn btn-dark rounded-pill px-4 py-2" data-bs-toggle="modal"
                        data-bs-target="#downloadModal">Download Brochure</button>
                </div>
                <div class="ph-right">
                    <img src="assets-new/images/application-process.webp" alt="Dual Acceleration Image" />
                </div>
            </div>
        </div>

    </section>

    <!-- ================= BOARD OF GOVERNANCE ================= -->
    <section>
        <div class="container">
            <h2><strong>Board of Governance</strong></h2>
            <div class="tbl-wrap">
                <table class="tbl">
                    <thead>
                        <tr>
                            <th class="tbl-label">S.No</th>
                            <th class="tbl-label">Board Members</th>
                            <th class="tbl-label">Particulars</th>
                            <th class="tbl-label">Designation</th>
                            <th class="tbl-label">Affiliation</th>
                        </tr>
                    </thead>

                    <tbody data-board="governance"></tbody>
                </table>
            </div>
        </div>
    </section>


    <!-- ================= BOARD OF STUDIES ================= -->
    <section class="pt-0">
        <div class="container">
            <h2><strong>Board of Studies</strong></h2>
            <div class="tbl-wrap">
                <table class="tbl">
                    <thead>
                        <tr>
                            <th class="tbl-label">S.No</th>
                            <th class="tbl-label">Board Members</th>
                            <th class="tbl-label">Particulars</th>
                            <th class="tbl-label">Designation</th>
                            <th class="tbl-label">Affiliation</th>
                        </tr>
                    </thead>

                    <tbody data-board="studies"></tbody>
                </table>
            </div>
        </div>
    </section>


    <!-- ================= BOARD OF EXAMINATIONS ================= -->
    <section class="pt-0">
        <div class="container">
            <h2><strong>Board of Examinations</strong></h2>
            <div class="tbl-wrap">
                <table class="tbl">
                    <thead>
                        <tr>
                            <th class="tbl-label">S.No</th>
                            <th class="tbl-label">Board Members</th>
                            <th class="tbl-label">Particulars</th>
                            <th class="tbl-label">Designation</th>
                        </tr>
                    </thead>

                    <tbody data-board="examinations"></tbody>
                </table>
            </div>
        </div>
    </section>


    <!-- ================= COMMON SCRIPT - ONLY ONCE ================= -->
    <script>
        const boardData = {

            /* =========================================
            BOARD OF GOVERNANCE
            ========================================= */
            governance: [
                {
                    name: 'Mr. Makarand Hardas',
                    particulars: 'Professional Body, Representation',
                    designation: 'Chairperson',
                    affiliation: 'VP Academics, PMI Deccan Chapter, Pune'
                },
                {
                    name: 'Mr. Anup Gogate',
                    particulars: 'Industry Expert',
                    designation: 'Member',
                    affiliation: 'VP, Mobikon Technologies Pvt. Ltd., Pune'
                },
                {
                    name: 'Mr. Bipin Datar',
                    particulars: 'Industry Expert',
                    designation: 'Member',
                    affiliation: 'CMO & Sr. VP Sales and Service, Klaus Multiparking Systems Pvt. Ltd., India'
                },
                {
                    name: 'Mr. Swapnil Joshi',
                    particulars: 'Entrepreneur',
                    designation: 'Member',
                    affiliation: 'Director, Eco Regain Solutions Pvt. Ltd., Pune'
                },
                {
                    name: 'Mr. Sheetal Singh',
                    particulars: 'Entrepreneur',
                    designation: 'Member',
                    affiliation: 'Director, Market Intelligence & Consulting Pvt. Ltd., Pune'
                },
                {
                    name: 'Mr. Sanjay Radhakrishnan',
                    particulars: 'eLearning Expert',
                    designation: 'Member',
                    affiliation: 'CCO, Tata Class Edge, Mumbai'
                },
                {
                    name: 'Mr. Sujeet Savargaonkar',
                    particulars: 'Academician',
                    designation: 'Member',
                    affiliation: 'Academic Consultant'
                },
                {
                    name: 'WRO, AICTE',
                    particulars: 'Awaited',
                    designation: 'Member',
                    affiliation: 'WRO, AICTE'
                },
                {
                    name: 'State Govt. Nominee',
                    particulars: 'Awaited',
                    designation: 'Member',
                    affiliation: 'State Govt. Nominee'
                },
                {
                    name: 'Dr. Nitin Rane',
                    particulars: 'Project Director',
                    designation: 'Member - Secretary',
                    affiliation: 'Project Director, MITSDE, Pune'
                },
                {
                    name: 'Dr. Suhrud Neurgaonkar',
                    particulars: 'Academic Expert',
                    designation: 'Member - Secretary',
                    affiliation: 'Director, MITSDE, Pune'
                }
            ],


            /* =========================================
            BOARD OF STUDIES
            ========================================= */
            studies: [
                {
                    name: 'Dr. Suhrud Neurgaonkar',
                    particulars: 'Director',
                    designation: 'Chairman',
                    affiliation: 'Director, MITSDE'
                },
                {
                    name: 'All Faculty',
                    particulars: 'Academic Expert',
                    designation: 'Member',
                    affiliation: 'Annexure I'
                },
                {
                    name: 'CS Avneesh Mishra',
                    particulars: 'Academic Expert',
                    designation: 'Member',
                    affiliation: 'Manager – Legal Compliance & Ethics Secretarial Legal, Cummins India Ltd.'
                },
                {
                    name: 'Mr. R. Balaji',
                    particulars: 'Academic Expert',
                    designation: 'Member',
                    affiliation: 'CA, Tax Expert, Pune'
                },
                {
                    name: 'Mrs. Supriya Pujari',
                    particulars: 'Industry Expert',
                    designation: 'Member',
                    affiliation: 'ICF Accredited Coach & Neuro Linguistics Programming (NLP) Master Practitioner'
                },
                {
                    name: 'Dr. Manjusha Kadam',
                    particulars: 'Industry Expert',
                    designation: 'Member',
                    affiliation: 'Consultant, Tata Chemicals, Pune'
                },
                {
                    name: 'Mr. Sadanand Garde',
                    particulars: 'Entrepreneur',
                    designation: 'Member',
                    affiliation: 'Director at Horus Energy Pvt. Ltd, Pune'
                },
                {
                    name: 'Ms. Nivedita Indalkar',
                    particulars: 'Alumnus Representation',
                    designation: 'Member',
                    affiliation: 'Manager - Training, Vanderlande Industries Software Pvt. Ltd. India'
                }
            ],


            /* =========================================
            BOARD OF EXAMINATIONS
            ========================================= */
            examinations: [
                {
                    name: 'Dr. Suhrud Neurgaonkar',
                    particulars: 'Director',
                    designation: 'Chairman'
                },
                {
                    name: 'Dr. Jaideep Jadhav',
                    particulars: 'Controller of Examination',
                    designation: 'Member'
                },
                {
                    name: 'Prof. Lalit Pawar',
                    particulars: 'Representation – Panel of Evaluators & Examiners',
                    designation: 'Member'
                },
                {
                    name: 'Dr. Nitin Zadpe',
                    particulars: 'Exam Administrator',
                    designation: 'Member'
                },
                {
                    name: 'Mr. Vinay D. Garud',
                    particulars: 'Section Officer - Examination',
                    designation: 'Member'
                }
            ]
        };


        /* =========================================
        COMMON FUNCTION - RUNS FOR ALL TABLES
        ========================================= */

        document.querySelectorAll('[data-board]').forEach((tbody) => {

            const boardName = tbody.dataset.board;
            const rows = boardData[boardName];

            rows.forEach((row, index) => {

                const tr = document.createElement('tr');

                /* Board of Examinations has no Affiliation column */
                if (boardName === 'examinations') {

                    tr.innerHTML = `
                        <td>${index + 1}</td>
                        <td class="capitalize">${row.name}</td>
                        <td class="capitalize">${row.particulars}</td>
                        <td class="capitalize">${row.designation}</td>
                    `;

                } else {

                    tr.innerHTML = `
                        <td>${index + 1}</td>
                        <td class="capitalize">${row.name}</td>
                        <td class="capitalize">${row.particulars}</td>
                        <td class="capitalize">${row.designation}</td>
                        <td class="lowercase">${row.affiliation}</td>
                    `;
                }

                tbody.appendChild(tr);
            });
        });
    </script>

    <!-- ═══════════════════════════════════════════════
   SITE FOOTER
════════════════════════════════════════════════ -->
    <?php include "footer-new.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>