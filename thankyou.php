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
   INSERT QUERY (PDO)
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thank You</title>
  <meta name="robots" content="noindex, nofollow">
  <link rel="icon" type="image/png" href="assets/images/favicon-mit.ico" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
  <link rel="stylesheet" href="assets/css/fonts.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/course-common-internal.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/homepage.css" type="text/css" />
  <!--API for Queck contact----->
  <script src="assets/js/api/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="assets/js/api/validation.js" charset="UTF-8"></script>
  <!----->
  <?php include "5-common-seo-tag-1.php" ?>
  <?php // include"google_code.html"; ?>
</head>

<body>
  <!-- Header Nav Start -->
  <?php include "header.php" ?>




  <!-- Header Nav End --->
  <main class="main-body">
    <section>
      <div class="container contact-box">
        <div class="row con-listing">
          <img src="assets/images/media/common-images-new/remaning-course-page/thankyou.jpg" width="50%"
            name="thank you">
        </div>
        <?php

        $email3 = $_POST['email3'];
        $mobile = $_POST['MobileNumber'];

        ?>
        <form action="#" name="google_mitsde" id="google_mitsde">

          <input type="hidden" id="email3" name="email3" value="<?php echo "$email3"; ?>" />
          <input type="hidden" id="mobile3" name="mobile3" value="<?php echo "+91" . "$mobile"; ?>" />



        </form>
      </div>

    </section>
  </main>
  <!-- Footer Start -->
  <?php include "footer.php" ?>


  <!-- footer end  -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/bootstrap-select.min.js"></script>
  <script src="assets/js/common.js"></script>
</body>

</html>