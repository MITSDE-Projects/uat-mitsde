<?php $pagename = "Online Grievance Form"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Grievance Form | MITSDE</title>
    <meta name="robots" content="noindex, nofollow">

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

    <!-- HERO -->
    <section class="hero ph-hero">
        <nav class="page-breadcrumb" aria-label="Breadcrumb">
            <span class="pb-line"></span>
            <a href="./">Home</a>
            <span class="pb-sep">/</span>
            <span class="pb-current">Online Grievance Form</span>
        </nav>
        <div class="container">
            <div class="ph-layout py-5">
                <div class="ph-left">
                    <h1 class="ph-heading">Online <span class="text-orange">Grievance Form</span></h1>
                </div>
                <div class="ph-right">
                    <img src="assets-new/images/application-process.webp" alt="Online Grievance Form" />
                </div>
            </div>
        </div>
    </section>

    <!-- GOOGLE FORM -->
    <section class="about-section">
        <div class="container">
            <div style="overflow-x: auto;">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfPmbQ9Mu4GDcjHosXV7ZWeARbVihUV2aPPMta8mvyU_J9PnA/viewform?embedded=true" width="100%" height="1090" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            </div>
        </div>
    </section>

    <?php include "footer-new.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
