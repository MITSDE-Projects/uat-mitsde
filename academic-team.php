<?php $pagename = "Academic Team"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Meet Our Expert Academic Team | MITSDE</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <meta name="description" content="Meet the expert academic team at MITSDE, dedicated to delivering quality education with industry-relevant knowledge and practical experience." />
    <meta name="keywords" content="MITSDE academic team, MIT School of Distance Education faculty, experienced faculty MITSDE, academic experts distance education, online PGDM faculty, best academic team for online learning, MITSDE professors, industry expert faculty MITSDE" />
    <!-- CANONICAL TAG -->
    <link rel="canonical" href="https://mitsde.com/academic-team" />
    <!-- OGP TAG -->

    <meta property="og:title" content="Academic Team">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/academic-team">
    <meta property="og:description" content="Academic Team Members">
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
            <span class="pb-current">Academic Team</span>
        </nav>

        <div class="container">
            <div class="ph-layout py-5">
                <div class="ph-left">
                    <h1 class="ph-heading">Academic Team</h1>
                    <button type="button" class="btn btn-dark rounded-pill px-4 py-2" data-bs-toggle="modal"
                        data-bs-target="#downloadModal">Download Brochure</button>
                </div>
                <div class="ph-right">
                    <img src="assets-new/images/application-process.webp" alt="Dual Acceleration Image" />
                </div>
            </div>
        </div>

    </section>

    <section class="about-section pb-0" id="about">

        <div class="container">

            <!-- Heading -->

            <h2 class="section-heading">Meet Our Expert Academic Team</h2>

            <div class="tbl-wrap">
                <table class="tbl">
                    <thead>
                        <tr>
                            <th class="tbl-label">S.No</th>
                            <th class="tbl-label">Name</th>
                            <th class="tbl-label">Faculty Designation</th>
                            <th class="tbl-label">Mail Id</th>
                        </tr>
                    </thead>
                    <tbody id="academicTeamBody">
                        <script>
                            const rows = [{
                                id: 1,
                                name: 'Dr. Suhrud Neurgaonkar',
                                designation: 'Head of Discipline or Professor',
                                email: 'suhrud.neurgaonkar@mitsde.com'
                            },
                            {
                                id: 2,
                                name: 'Prof. Bonnie Rajesh',
                                designation: 'Head of Discipline or Professor',
                                email: 'bonnie.rajesh@mitsde.com'
                            },
                            {
                                id: 3,
                                name: 'Dr. Nitin Zadpe',
                                designation: 'Head of Discipline or Professor',
                                email: 'nitin@mitsde.com'
                            },
                            {
                                id: 4,
                                name: 'Bhagyashree Pande',
                                designation: 'Head of Discipline or Professor',
                                email: 'bhagyashree.p@mitsde.com'
                            },
                            {
                                id: 5,
                                name: 'Nivedita Dawate',
                                designation: 'Assistant',
                                email: 'nivedita.dawate@mitsde.com'
                            },
                            {
                                id: 6,
                                name: 'Urvashi Jaiswal',
                                designation: 'Assistant',
                                email: 'urvashi.jaiswal@mitsde.com'
                            },
                            {
                                id: 7,
                                name: 'Soham Joshi',
                                designation: 'Assistant',
                                email: 'soham.joshi@mitsde.com'
                            },
                            {
                                id: 8,
                                name: 'Pranjal Mandlik',
                                designation: 'Assistant',
                                email: 'pranjal.mandlik@mitsde.com'
                            },
                            {
                                id: 9,
                                name: 'Priyanka Kaul',
                                designation: 'Assistant',
                                email: 'priyanka.kaul@mitsde.com'
                            },
                            {
                                id: 10,
                                name: 'Pintu William Murmu',
                                designation: 'Assistant',
                                email: 'william.murmu@mitsde.com'
                            },
                            {
                                id: 11,
                                name: 'Dinesh Marke',
                                designation: 'Assistant',
                                email: 'dinesh.marke@mitsde.com'
                            },
                            {
                                id: 12,
                                name: 'Aniket Patekar',
                                designation: 'Assistant',
                                email: 'aniket.patekar@mitsde.com'
                            },
                            {
                                id: 13,
                                name: 'Shekhar Pol',
                                designation: 'Assistant',
                                email: 'shekhar.pol@mitsde.com'
                            },
                            {
                                id: 14,
                                name: 'Tejas Chavan',
                                designation: 'Assistant',
                                email: 'tejas.chavan@mitsde.com'
                            },
                            {
                                id: 15,
                                name: 'Pooja Poojary',
                                designation: 'Assistant',
                                email: 'pooja.poojary@mitsde.com'
                            },
                            {
                                id: 16,
                                name: 'Suyash Pande',
                                designation: 'Assistant',
                                email: 'suyash.pande@mitsde.com'
                            },
                            {
                                id: 17,
                                name: 'Somnath Banerjee',
                                designation: 'Assistant',
                                email: 'somnath.banerjee@mitsde.com'
                            },
                            {
                                id: 18,
                                name: 'Yasmin Ansari',
                                designation: 'Assistant Professor',
                                email: 'yasmin.ansari@mitsde.com'
                            },
                            {
                                id: 19,
                                name: 'Nikhil Bhilare',
                                designation: 'Assistant Professor',
                                email: 'nikhil.bhillare@mitsde.com'
                            },
                            {
                                id: 20,
                                name: 'Ashna Komalkar',
                                designation: 'Assistant Professor',
                                email: 'ashna.komalkar@mitsde.com'
                            },
                            {
                                id: 21,
                                name: 'Abhishek Kalyana',
                                designation: 'Assistant Professor',
                                email: 'abhishek.kalyana@mitsde.com'
                            },
                            {
                                id: 22,
                                name: 'Trupti Kulkarni',
                                designation: 'Assistant Professor',
                                email: 'trupti.kulkarni@mitsde.com'
                            },
                            {
                                id: 23,
                                name: 'Monika Pateriya',
                                designation: 'Assistant Professor',
                                email: 'monika.pateriya@mitsde.com'
                            },
                            {
                                id: 24,
                                name: 'Prajakta Patil',
                                designation: 'Assistant Professor',
                                email: 'prajakta.patil@mitsde.com'
                            },
                            {
                                id: 25,
                                name: 'Charulata Wankhede',
                                designation: 'Assistant Professor',
                                email: 'charulata.wankhede@mitsde.com'
                            },
                            {
                                id: 26,
                                name: 'Omkar Salvi',
                                designation: 'Assistant Professor',
                                email: 'omkar.salvi@mitsde.com'
                            },
                            {
                                id: 27,
                                name: 'Pranav Kulkarni',
                                designation: 'Associate Professor',
                                email: 'pranav.kulkarni@mitsde.com'
                            },
                            {
                                id: 28,
                                name: 'Kalyani Kulkarni',
                                designation: 'Associate Professor',
                                email: 'kalyani.kulkarni@mitsde.com'
                            },
                            {
                                id: 29,
                                name: 'Dr. Rajesh Raut',
                                designation: 'Associate Professor',
                                email: 'rajesh.raut@mitsde.com'
                            },
                            {
                                id: 30,
                                name: 'Zameer Kazi',
                                designation: 'Associate Professor',
                                email: 'zameer.kazi@mitsde.com'
                            },
                            {
                                id: 32,
                                name: 'Roshan More',
                                designation: 'Asst Registrar',
                                email: 'roshan.more@mitsde.com'
                            },
                            {
                                id: 33,
                                name: 'Atul Sawant',
                                designation: 'Asst Registrar',
                                email: 'atul.sawant@mitsde.com'
                            },
                            {
                                id: 34,
                                name: 'Manisha Shinde',
                                designation: 'Asst Registrar',
                                email: 'manisha.shinde@mitsde.com'
                            },
                            {
                                id: 36,
                                name: 'Reshma Badukale',
                                designation: 'Computer Operator',
                                email: 'reshma.badukale@mitsde.com'
                            },
                            {
                                id: 37,
                                name: 'Sanjay Gaikwad',
                                designation: 'Computer Operator',
                                email: 'sanjay.gaikwad@mitsde.com'
                            },
                            {
                                id: 38,
                                name: 'Swati Karande',
                                designation: 'Computer Operator',
                                email: 'swati.karande@mitsde.com'
                            },
                            {
                                id: 39,
                                name: 'Ujwala Padwal',
                                designation: 'Computer Operator',
                                email: 'ujwala.padwal@mitsde.com'
                            },
                            {
                                id: 40,
                                name: 'Mohan Patil',
                                designation: 'Computer Operator',
                                email: 'mohan.patil@mitsde.com'
                            },
                            {
                                id: 41,
                                name: 'Sachin Sakhare',
                                designation: 'Computer Operator',
                                email: 'sachin.sakhare@mitsde.com'
                            },
                            {
                                id: 42,
                                name: 'Satish Somase',
                                designation: 'Computer Operator',
                                email: 'satish.somase@mitsde.com'
                            },
                            {
                                id: 43,
                                name: 'Raj Marathe',
                                designation: 'Computer Operator',
                                email: 'raj.marathe@mitsde.com'
                            },
                            {
                                id: 44,
                                name: 'Priya Dalal',
                                designation: 'Dep Registrar',
                                email: 'priya.dalal@mitsde.com'
                            },
                            {
                                id: 45,
                                name: 'Chaitanya Giri',
                                designation: 'Dep Registrar',
                                email: 'chaitanya.giri@mitsde.com'
                            },
                            {
                                id: 46,
                                name: 'Sandip Kapadi',
                                designation: 'Dep Registrar',
                                email: 'sandip.kapadi@mitsde.com'
                            },
                            {
                                id: 47,
                                name: 'Rashmi Deshmukh',
                                designation: 'Dep Registrar',
                                email: 'rashmi.deshmukh@mitsde.com'
                            },
                            {
                                id: 48,
                                name: 'Narendra Bhangale',
                                designation: 'Multi Tasking Staff',
                                email: 'narendra.bhangale@mitsde.com'
                            },
                            {
                                id: 49,
                                name: 'Dhananjay Bulbule',
                                designation: 'Multi Tasking Staff',
                                email: 'dhananjay.bulbule@mitsde.com'
                            },
                            {
                                id: 50,
                                name: 'Neha Game',
                                designation: 'Multi Tasking Staff',
                                email: 'neha.game@mitsde.com'
                            },
                            {
                                id: 51,
                                name: 'Vinay Garud',
                                designation: 'Multi Tasking Staff',
                                email: 'vinay.garud@mitsde.com'
                            },
                            {
                                id: 52,
                                name: 'Harshada Lokhande',
                                designation: 'Multi Tasking Staff',
                                email: 'harshada.lokhande@mitsde.com'
                            },
                            {
                                id: 53,
                                name: 'Sagar Mapari',
                                designation: 'Multi Tasking Staff',
                                email: 'sagar.mapari@mitsde.com'
                            },
                            {
                                id: 54,
                                name: 'Avinash Pawar',
                                designation: 'Multi Tasking Staff',
                                email: 'avinash.pawar@mitsde.com'
                            },
                            {
                                id: 55,
                                name: 'Piyush Salve',
                                designation: 'Multi Tasking Staff',
                                email: 'piyush.salve@mitsde.com'
                            },
                            {
                                id: 56,
                                name: 'Umesh Ghatale',
                                designation: 'Multi Tasking Staff',
                                email: 'umesh.ghatale@mitsde.com'
                            },
                            {
                                id: 57,
                                name: 'Vrushali Bansode',
                                designation: 'Section Officer',
                                email: 'vrushli.bansode@mitsde.com'
                            },
                            {
                                id: 58,
                                name: 'Tejas Deshmukh',
                                designation: 'Section Officer',
                                email: 'tejas.deshmukh@mitsde.com'
                            },
                            {
                                id: 59,
                                name: 'Uday Tajane',
                                designation: 'Section Officer',
                                email: 'uday.tajane@mitsde.com'
                            },
                            {
                                id: 60,
                                name: 'Pooja Patwadkar',
                                designation: 'Section Officer',
                                email: 'pooja.patwadkar@mitsde.com'
                            },
                            {
                                id: 61,
                                name: 'Priyanka Chavan',
                                designation: 'Section Officer',
                                email: 'chavan.priyanka@mitsde.com'
                            }
                            ];
                            const tbody = document.getElementById('academicTeamBody');

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