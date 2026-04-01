<?php
// Database connection details
$host = "localhost";
$username = "mitsde_onlinepay";
$password = "jNq%,6!)0RmK";
$dbname = "mitsde_onlinepayment";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die(json_encode([
        "status" => "error",
        "message" => "Database connection failed: " . mysqli_connect_error()
    ]));
}

// Set headers for REST API
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Set Indian Time Zone
date_default_timezone_set('Asia/Kolkata');

// Read JSON input
$data = json_decode(file_get_contents("php://input"), true);

// Validate input
if (isset($data["studentName"], $data["emailID"], $data["mobNo"])) {
    // Escape special characters in input
    $studentName = mysqli_real_escape_string($conn, $data["studentName"]);
    $emailID = mysqli_real_escape_string($conn, $data["emailID"]);
    $mobNo = mysqli_real_escape_string($conn, $data["mobNo"]);
    $token = mysqli_real_escape_string($conn, $data["token"]);
    $state = mysqli_real_escape_string($conn, $data["state"]);
    $qualification = mysqli_real_escape_string($conn, $data["qualification"]);
    $courses = mysqli_real_escape_string($conn, $data["courses"]);
    $specialization = mysqli_real_escape_string($conn, $data["specialization"]);

    // Get the current date and time in Indian Standard Time (IST)
    $mailSend = date('Y-m-d H:i:s'); // Format: YYYY-MM-DD HH:MM:SS

    // Insert query with PHP's date function for mailSend
    $query = "INSERT INTO opt_verification (studentName, emailID, mobNo, mailSend,token,state,qualification,courses,specialization) 
              VALUES ('$studentName', '$emailID', '$mobNo', '$mailSend','$token','$state','$qualification','$courses','$specialization')";

    if (mysqli_query($conn, $query)) {
        echo json_encode([
            "status" => "success",
            "message" => "Data inserted successfully"
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Failed to insert data: " . mysqli_error($conn)
        ]);
    }
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid input. All fields are required."
    ]);
}

// Close the connection
mysqli_close($conn);
?>
