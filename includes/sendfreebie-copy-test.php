<?php
date_default_timezone_set('Asia/Calcutta');
$CurrentDateTime = date('Y-m-d H:i:s');

$host = "localhost";
$user = "mitsde_onlinepay";
$pass = "jNq%,6!)0RmK";
$dbname = "mitsde_onlinepayment";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("DB Failed");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $studentname    = mysqli_real_escape_string($conn, $_POST['studentname']);
    $last_institute = mysqli_real_escape_string($conn, $_POST['last_institute']);
    $email          = mysqli_real_escape_string($conn, $_POST['Your_Email']);
    $mobile_no      = mysqli_real_escape_string($conn, $_POST['Mobile_no']);
    $recommendation = mysqli_real_escape_string($conn, $_POST['recommendation']);

    $sql = "INSERT INTO freebie_form 
        (studentname, last_institute, email, mobile_no, recommendation, created_at)
        VALUES 
        ('$studentname', '$last_institute', '$email', '$mobile_no', '$recommendation', '$CurrentDateTime')";

    if (mysqli_query($conn, $sql)) {
        echo "success";  // AJAX ko ye response milega
    } else {
        echo "error";
    }
}
?>
