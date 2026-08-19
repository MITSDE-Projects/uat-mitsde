<?php $pagename = "Associate Faculty"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <title>Associate Faculty | MITSDE</title>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <meta name="description"
        content="Meet the Associate Faculty at MITSDE, bringing industry expertise and practical knowledge to deliver quality education." />

    <meta name="keywords"
        content="MITSDE associate faculty, MIT School of Distance Education faculty, associate faculty MITSDE, visiting faculty MITSDE, industry expert faculty" />

    <!-- CANONICAL TAG -->
    <link rel="canonical" href="https://mitsde.com/associate-faculty" />

    <!-- OGP TAG -->
    <meta property="og:title" content="Associate Faculty">
    <meta property="og:site_name" content="MIT School of Distance Education">
    <meta property="og:url" content="https://mitsde.com/associate-faculty">
    <meta property="og:description" content="Associate Faculty Members">
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="https://mitsde.com/assets/images/course/common/Associate-Faculty.jpg">

    <link rel="icon" type="image/png" href="assets-new/images/favicon-mit.ico" />

    <!-- Bootstrap 5 -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- New Website CSS -->
    <link rel="stylesheet" href="css-new/styles.css" />

    <link rel="stylesheet" href="css-new/intlTelInput.css">

    <?php include "5-common-seo-tag-1.php" ?>

</head>

<body>

    <?php include "5-common-seo-tag-2.php" ?>

    <?php include "header-new.php" ?>


    <!-- =====================================================
         HERO SECTION
    ====================================================== -->

    <section class="hero ph-hero">

        <!-- Breadcrumb -->

        <nav class="page-breadcrumb" aria-label="Breadcrumb">

            <span class="pb-line"></span>

            <a href="./">Home</a>

            <span class="pb-sep">/</span>

            <span class="pb-current">Associate Faculty</span>

        </nav>


        <div class="container">

            <div class="ph-layout py-5">

                <!-- LEFT CONTENT -->

                <div class="ph-left">

                    <h1 class="ph-heading">
                        Associate Faculty
                    </h1>

                    <button type="button"
                        class="btn btn-dark rounded-pill px-4 py-2"
                        data-bs-toggle="modal"
                        data-bs-target="#downloadModal">

                        Download Brochure

                    </button>

                </div>


                <!-- RIGHT IMAGE -->

                <div class="ph-right">

                    <img src="assets-new/images/placement.webp"
                        alt="Associate Faculty">

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         ASSOCIATE FACULTY SECTION
    ====================================================== -->

    <section class="about-section pb-0" id="about">

        <div class="container">

            <!-- SECTION HEADING -->

            <h2 class="section-heading">
                Meet Our Associate Faculty
            </h2>


            <!-- TABLE -->

            <div class="tbl-wrap">

                <table class="tbl">

                    <thead>

                        <tr>

                            <th class="tbl-label">
                                S.No
                            </th>

                            <th class="tbl-label">
                                Name
                            </th>

                            <th class="tbl-label">
                                Domain
                            </th>

                            <th class="tbl-label">
                                Designation
                            </th>

                        </tr>

                    </thead>


                    <tbody id="associateFacultyBody">

                        <script>

                            const associateFaculty = [

                                {
                                    id: 1,
                                    name: 'Prof. BT Ade',
                                    domain: 'Oracle Primavera/Essentials of Agile',
                                    designation: 'https://www.linkedin.com/in/adebt/'
                                },

                                {
                                    id: 2,
                                    name: 'Prof. Rohan Bhase',
                                    domain: 'Finance Management',
                                    designation: 'https://www.linkedin.com/in/rohan-bhase-299748120/'
                                },

                                {
                                    id: 3,
                                    name: 'Dr. Ashish Mohture',
                                    domain: 'Human Resource Management',
                                    designation: 'https://www.linkedin.com/in/dr-ashish-mohture-10b92756/'
                                },

                                {
                                    id: 4,
                                    name: 'Prof. Christopher Dias',
                                    domain: 'Marketing Management',
                                    designation: 'https://www.linkedin.com/in/chriseducator/'
                                },

                                {
                                    id: 5,
                                    name: 'Prof. Rachna Arora',
                                    domain: 'Human Resource Management',
                                    designation: 'https://www.linkedin.com/in/rachna-arora-a5b08930/'
                                },

                                {
                                    id: 6,
                                    name: 'Prof. Sonali Kulkarni',
                                    domain: 'Business Analytics',
                                    designation: 'https://www.linkedin.com/in/sonalikulkarni/'
                                },

                                {
                                    id: 7,
                                    name: 'Prof. Lalit Prasad',
                                    domain: 'Operations Research',
                                    designation: 'https://www.linkedin.com/in/prof-dr-lalit-prasad-75986246/'
                                },

                                {
                                    id: 8,
                                    name: 'Prof. Sakar Kalkotwar',
                                    domain: 'Microsoft Project & JIRA',
                                    designation: 'https://www.linkedin.com/in/sakar-kalkotwar/'
                                },

                                {
                                    id: 9,
                                    name: 'Prof.Sharayu Patil',
                                    domain: 'Human Resource Management',
                                    designation: 'https://www.linkedin.com/in/sharayu-patil-sk-hr-services-4180b451/'
                                },

                                {
                                    id: 10,
                                    name: 'Prof. Srinivas Prabhu',
                                    domain: 'Digital Marketing',
                                    designation: 'https://www.linkedin.com/in/srinivas-prabhu-prof/'
                                },

                                {
                                    id: 11,
                                    name: 'Dr. S.P.Ghodake',
                                    domain: 'Finance Management',
                                    designation: 'https://www.linkedin.com/in/dr-shamrao-ghodake-1b790035/'
                                },

                                {
                                    id: 12,
                                    name: 'Prof. Mayank Parkhi',
                                    domain: 'Project Management',
                                    designation: 'https://www.linkedin.com/in/mayankparkhi/'
                                },

                                {
                                    id: 13,
                                    name: 'Prof. Mangesh Dande',
                                    domain: 'Operations & Supply Chain Management',
                                    designation: 'https://www.linkedin.com/in/dr-mangesh-purushottam-dande-29a19b40/'
                                },

                                {
                                    id: 14,
                                    name: 'Prof. Pavaman Jainapur',
                                    domain: 'Project Management',
                                    designation: 'https://www.linkedin.com/in/pavamanjainapur-512b7b355/'
                                },

                                {
                                    id: 15,
                                    name: 'Prof. Vishal Bhosale',
                                    domain: 'Operations & Supply Chain Management',
                                    designation: 'https://www.linkedin.com/in/vbhosale214/'
                                }

                            ];


                            const tbody =
                                document.getElementById('associateFacultyBody');


                            associateFaculty.forEach((row, index) => {

                                const tr =
                                    document.createElement('tr');


                                tr.innerHTML = `

                                    <td>
                                        ${index + 1}
                                    </td>

                                    <td class="capitalize">
                                        ${row.name}
                                    </td>

                                    <td class="capitalize">
                                        ${row.domain}
                                    </td>

                                    <td>

                                        <a href="${row.designation}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            aria-label="LinkedIn profile of ${row.name}"
                                            class="linkedin-link">

                                            <i class="fa-brands fa-linkedin fa-xl"></i>

                                        </a>

                                    </td>

                                `;


                                tbody.appendChild(tr);

                            });

                        </script>

                    </tbody>

                </table>

            </div>

        </div>

    </section>


    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <?php include "footer-new.php" ?>


    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>