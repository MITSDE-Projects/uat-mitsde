<?php
include("admin/include/configpdo.php");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: /", true, 302);
    exit;
}

if (!empty($_POST['website'])) {
    exit("Spam detected");
}

$ip = $_SERVER['REMOTE_ADDR'];
/* =========================
   SANITIZE INPUT
========================= */

/* =========================
   BLOCK IP RANGES (REGEX)
========================= */
// $blockedRanges = [
//     '/^185\.220\.100\./',   // blocks 185.220.100.*
//     '/^45\.142\./',         // blocks 45.142.*.*
//     '/^89\.248\./',         // blocks 89.248.*.*
// ];

// foreach ($blockedRanges as $range) {
//     if (preg_match($range, $ip)) {
//         http_response_code(403);
//         exit("Access Denied");
//     }
// }

/*$first_name=$_POST['first_name3'];
$emaiid=$_POST['email3'];
$mobile=$_POST['MobileNumber'];*/
$first_name = isset($_POST['first_name3']) 
    ? trim($_POST['first_name3']) 
    : '';
$emaiid = isset($_POST['email3']) 
    ? filter_var($_POST['email3'], FILTER_SANITIZE_EMAIL) 
    : '';

if (!filter_var($emaiid, FILTER_VALIDATE_EMAIL)) {
    exit('Invalid email format');
}
$mobile = isset($_POST['MobileNumber']) 
    ? preg_replace('/[^0-9]/', '', $_POST['MobileNumber']) 
    : '';

$state = isset($_POST['state']) ? $_POST['state'] : '';
$HQ = isset($_POST['HQ']) ? $_POST['HQ'] : '';
$Divice = isset($_POST['Divice']) ? $_POST['Divice'] : '';
$PageName = isset($_POST['PageName']) ? $_POST['PageName'] : '';

date_default_timezone_set('Asia/Kolkata');
$curdate = date('Y-m-d');
$curdateTime = date("Y-m-d H:i:s");

$latitude = isset($_POST['latitude']) ? $_POST['latitude'] : '';
$longitude = isset($_POST['longitude']) ? $_POST['longitude'] : '';

$formatted_address = '';
$district = '';
$city = '';
$country = '';

// Validate Email
if (!filter_var($emaiid, FILTER_VALIDATE_EMAIL)) {
    exit('Invalid email format.');
}

// Validate Name (Only letters + space, 2-50 chars)
if (!preg_match("/^[a-zA-Z\s]{2,50}$/", $first_name)) {
    exit('Invalid name.');
}

if (!preg_match('/^[6-9][0-9]{9}$/', $mobile)) {
    exit("Invalid Indian mobile number.");
}

/* =========================
   BLOCK SPAM KEYWORDS
========================= */
if (preg_match('/http|www|\.com|\.ru|yandex|bitcoin|dating|crypto/i', $first_name)) {
    exit('Spam detected.');
}

/* =========================
   RATE LIMIT CHECK (PDO)
========================= */

$check_stmt = $conn->prepare(
    "SELECT COUNT(*) 
     FROM quickcontact 
     WHERE ip = ? 
     AND DateTime >= NOW() - INTERVAL 1 MINUTE"
);

$check_stmt->execute(array($ip));
$total = $check_stmt->fetchColumn();

if ($total >= 5) {
    http_response_code(429);
    exit('Too many requests from this IP. Please try again later.');
}

/* =========================
   INSERT RECORD (PDO)
========================= */

$stmt = $conn->prepare("
    INSERT INTO quickcontact 
    (FirstName, EmailID, MobileNo, SourcePath, PageName, DateTime, Date, device, page_name, address, district, city, state, country, longitude, latitude, ip) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
");

$result = $stmt->execute(array(
    $first_name,
    $emaiid,
    $mobile,
    $state,
    $HQ,
    $curdateTime,
    $curdate,
    $Divice,
    $PageName,
    $formatted_address,
    $district,
    $city,
    $state,
    $country,
    $longitude,
    $latitude,
    $ip
));

if (!$result) {
    error_log("Insert failed");
    exit('Something went wrong');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />


    <meta name="description" content="MITSDE - Evaluation Methodology" />
    <meta name="keywords"
        content="distance pg certificate courses, distance certificate courses, online learning, distance learning center, online mba programs, pgdm courses, pgdm distance courses" />
    <meta name="author" content="" />
    <meta name="robots" content="noindex, nofollow">

    <link rel="canonical" href="https://mitsde.com/faq.php" />
    <!-- Page Title -->
    <title>Download Brochure</title>
    <link rel="icon" type="image/png" href="assets/images/favicon-mit.ico" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/course-common-internal.css" type="text/css" />
    <!--API for Queck contact----->
    <script src="assets/js/api/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/js/api/validation.js" charset="UTF-8"></script>
    <!----->
    <?php // include"google_code.html"; ?>
</head>

<body>
    <!-- Header Nav Start -->
    <?php include "header.php" ?>
    <!-- Header Nav End --->
    <main class="main-body">
        <section class="banner inner-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6 main-banner">
                        <h2>Download Our Brochure</h2>
                        <!-- <p>Transform your career from a beginner to a domain expert with a Dual Degree Program</p> -->
                        <div class="page-btn">

                            <!-- <button type="button" class="btn btn-primary mit-button cus-btn inner-cus"><span class="mtsk-download"></span> &nbsp; Download BROCHURE</button> -->
                            <!-- <button type="button" class="btn btn-primary mit-button cus-btn inner-cus ms-0"
                                data-bs-toggle="modal" data-bs-target="#enquiryModal-download-form"><span
                                    class="mtsk-download"></span> &nbsp; Download BROCHURE
                            </button> -->
                            <div class="col-md-6">
                                <div><a href="assets/images/common-images/MITSDE-Final-Broucher.pdf"
                                        download="MITSDE-Final-Broucher.pdf"> <img
                                            src="assets/images/common-images/brochure-download-icon.png" /> </a>
                                </div>

                            </div><!-- /.col-md-12 -->

                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="css-details">
                            <div class="stc-det student-sec inner-sec">
                                <img src="assets/images/progress.svg" alt="Progress indicator icon">
                            </div>
                            <img src="assets/images/course/common/Faq.jpg" class="banner-img" alt="Banner 1">
                            <div class="stc-det course-sec inner-sec">
                                <img src="assets/images/walet.svg" alt="Wallet icon for payment">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>






        <!-- <section id="curriculam" class="enroll-certification">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-3">

                        <h4><strong>Download Our Brochure</strong></h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div><a href="assets/images/common-images/brochure-download-icon.png" download> <img
                                            src="assets/images/common-images/brochure-download-icon.png" /> </a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section> -->




    </main>
    <!-- Footer Start -->

    <?php include "footer.php" ?>


    <!-- footer end  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="assets/js/course-slider.js"></script>

</body>

</html>