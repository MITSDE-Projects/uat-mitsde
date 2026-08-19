<?php $pagename = "Support Staff Details"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Support Staff Details | MITSDE</title>
    <meta name="description" content="Get to know the dedicated support staff at MITSDE who ensure smooth operations and provide continuous assistance to students throughout their academic journey." />
    <meta name="keywords" content="MITSDE support staff, MIT School of Distance Education team, student support MITSDE, academic support staff, MITSDE helpdesk, distance education support, MITSDE administration team, online learning support staff" />

    <link rel="canonical" href="https://mitsde.com/support-staff-details" />

    <!-- OGP TAG -->
    <meta property="og:title" content="Support Staff Details">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/support-staff-details">
    <meta property="og:description" content="Get to know the dedicated support staff at MITSDE who ensure smooth operations and provide continuous assistance to students throughout their academic journey.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://mitsde.com/assets-new/images/application-process.webp">

    <link rel="icon" type="image/png" href="assets-new/images/favicon-mit.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css-new/styles.css" />
    <link rel="stylesheet" href="css-new/intlTelInput.css">

    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://mitsde.com/" },
        { "@type": "ListItem", "position": 2, "name": "Mandatory Disclosure", "item": "https://mitsde.com/mandatory-disclosure" },
        { "@type": "ListItem", "position": 3, "name": "Support Staff Details", "item": "https://mitsde.com/support-staff-details" }
    ]
    }
    </script>

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
            <a href="mandatory-disclosure">Mandatory Disclosure</a>
            <span class="pb-sep">/</span>
            <span class="pb-current">Support Staff Details</span>
        </nav>

        <div class="container">
            <div class="ph-layout py-5">
                <div class="ph-left">
                    <h1 class="ph-heading">Support Staff <span class="text-orange">Details</span></h1>
                </div>
                <div class="ph-right">
                    <img src="assets-new/images/application-process.webp" alt="Support Staff Details" />
                </div>
            </div>
        </div>

    </section>

    <section class="about-section pb-0" id="about">
        <div class="container">

            <h2 class="section-heading">Support <span class="text-orange">Staff</span></h2>

            <div class="tbl-wrap">
                <table class="tbl">
                    <thead>
                        <tr>
                            <th class="tbl-label">S.No</th>
                            <th class="tbl-label">Name</th>
                            <th class="tbl-label">Support Staff Designation</th>
                            <th class="tbl-label">Mail Id</th>
                        </tr>
                    </thead>
                    <tbody id="supportStaffBody">
                        <script>
                        const rows = [
                            { id: 1,  name: 'Shekhar Pol',            designation: 'Assistant',          email: 'shekhar.pol@mitsde.com' },
                            { id: 2,  name: 'Urvashi Jaiswal',         designation: 'Assistant',          email: 'urvashi.jaiswal@mitsde.com' },
                            { id: 3,  name: 'Bhagyashri Pujari',       designation: 'Assistant',          email: 'bhagyashri.pujari@mitsde.com' },
                            { id: 4,  name: 'Pranjal Mandlik',         designation: 'Assistant',          email: 'pranjal.mandlik@mitsde.com' },
                            { id: 5,  name: 'Aniket Patekar',          designation: 'Assistant',          email: 'aniket.patekar@mitsde.com' },
                            { id: 6,  name: 'Pranjali Thombare',       designation: 'Assistant',          email: 'pranjali.thombare@mitsde.com' },
                            { id: 7,  name: 'Nivedita Dawate',         designation: 'Assistant',          email: 'nivedita.dawate@mitsde.com' },
                            { id: 8,  name: 'Soham Joshi',             designation: 'Assistant',          email: 'soham.joshi@mitsde.com' },
                            { id: 9,  name: 'Pintu William Murmu',     designation: 'Assistant',          email: 'william.murmu@mitsde.com' },
                            { id: 10, name: 'Vibha Mishra',            designation: 'Assistant',          email: 'vibha.mishra@mitsde.com' },
                            { id: 11, name: 'Veronica Torne',          designation: 'Assistant',          email: 'veronica.torne@mitsde.com' },
                            { id: 12, name: 'Sheetal Shinde',          designation: 'Assistant',          email: 'sheetal.shinde@mitsde.com' },
                            { id: 13, name: 'Dnyaneshwar Nimje',       designation: 'Assistant',          email: 'dnyaneshwar.nimje@mitsde.com' },
                            { id: 14, name: 'Jayjeet Deshmukh',        designation: 'Asst Registrar',     email: 'jayjeet.deshmukh@mitsde.com' },
                            { id: 15, name: 'Manisha Shinde',          designation: 'Asst Registrar',     email: 'manisha.shinde@mitsde.com' },
                            { id: 16, name: 'Atul Sawant',             designation: 'Asst Registrar',     email: 'atul.sawant@mitsde.com' },
                            { id: 17, name: 'Roshan More',             designation: 'Asst Registrar',     email: 'roshan.more@mitsde.com' },
                            { id: 18, name: 'Sandip Kapadi',           designation: 'Dep Registrar',      email: 'sandip.kapadi@mitsde.com' },
                            { id: 19, name: 'Rashmi Deshmukh',         designation: 'Dep Registrar',      email: 'rashmi.deshmukh@mitsde.com' },
                            { id: 20, name: 'Chaitanya Giri',          designation: 'Dep Registrar',      email: 'chaitanya.giri@mitsde.com' },
                            { id: 21, name: 'Priya Dalal',             designation: 'Dep Registrar',      email: 'priya.dalal@mitsde.com' },
                            { id: 22, name: 'Sachin Sakhare',          designation: 'Computer Operator',  email: 'sachin.sakhare@mitsde.com' },
                            { id: 23, name: 'Shravani Suryawanshi',    designation: 'Computer Operator',  email: 'shravani.suryavanshi@mitsde.com' },
                            { id: 24, name: 'Swati Karande',           designation: 'Computer Operator',  email: 'swati.karande@mitsde.com' },
                            { id: 25, name: 'Suraj Awate',             designation: 'Computer Operator',  email: 'suraj.awate@mitsde.com' },
                            { id: 26, name: 'Reshma Badukale',         designation: 'Computer Operator',  email: 'reshma.badukale@mitsde.com' },
                            { id: 27, name: 'Sachin Sakhare',          designation: 'Computer Operator',  email: 'sachin.sakhare@mitsde.com' },
                            { id: 28, name: 'Mohan Patil',             designation: 'Computer Operator',  email: 'mohan.patil@mitsde.com' },
                            { id: 29, name: 'Sanjay Gaikwad',          designation: 'Computer Operator',  email: 'sanjay.gaikwad@mitsde.com' },
                            { id: 30, name: 'Neha Game',               designation: 'Multi Tasking Staff', email: 'neha.game@mitsde.com' },
                            { id: 31, name: 'Vinay Garud',             designation: 'Multi Tasking Staff', email: 'vinay.garud@mitsde.com' },
                            { id: 32, name: 'Sagar Mapari',            designation: 'Multi Tasking Staff', email: 'sagar.mapari@mitsde.com' },
                            { id: 33, name: 'Mayur Rikame',            designation: 'Multi Tasking Staff', email: 'mayur.rikame@mitsde.com' },
                            { id: 34, name: 'Priyanka Chavan',         designation: 'Multi Tasking Staff', email: 'chavan.priyanka@mitsde.com' },
                            { id: 35, name: 'Harshada Lokhande',       designation: 'Multi Tasking Staff', email: 'harshada.lokhande@mitsde.com' },
                            { id: 36, name: 'Narendra Bhangale',       designation: 'Multi Tasking Staff', email: 'narendra.bhangale@mitsde.com' },
                            { id: 37, name: 'Umesh Ghatale',           designation: 'Multi Tasking Staff', email: 'umesh.ghatale@mitsde.com' },
                            { id: 38, name: 'Amruta Mitkar',           designation: 'Section Officer',    email: 'amruta.mitkar@mitsde.com' },
                            { id: 39, name: 'Shubham Paiyawal',        designation: 'Section Officer',    email: 'shubham.paiyawal@mitsde.com' },
                            { id: 40, name: 'Pooja Patwadkar',         designation: 'Section Officer',    email: 'pooja.patwadkar@mitsde.com' },
                            { id: 41, name: 'Vrushali Bansode',        designation: 'Section Officer',    email: 'vrushli.bansode@mitsde.com' },
                            { id: 42, name: 'Piyush Salve',            designation: 'Section Officer',    email: 'piyush.salve@mitsde.com' }
                        ];

                        const tbody = document.getElementById('supportStaffBody');
                        rows.forEach((row, index) => {
                            const tr = document.createElement('tr');
                            tr.innerHTML = `
                                <td>${index + 1}</td>
                                <td class="capitalize">${row.name}</td>
                                <td class="capitalize">${row.designation}</td>
                                <td class="lowercase">${row.email}</td>
                            `;
                            tbody.appendChild(tr);
                        });
                        </script>
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
