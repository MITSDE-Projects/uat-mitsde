<?php
// Set headers for CORS and JSON response
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Database credentials
$host = "162.240.225.152";
$port = "3306";
$db_name = "mitsde_onlinepayment";
$username = "mitsde_onlinepay";
$password = "jNq%,6!)0RmK";

// Database connection
$conn = new mysqli($host, $username, $password, $db_name, $port);

// Check connection
if ($conn->connect_error) {
     json_encode(["error" => "Connection failed: " . $conn->connect_error]);
    exit();
}

// Read POST data
$data = json_decode(file_get_contents("php://input"));

// Set timezone and capture current date and time in IST format
date_default_timezone_set('Asia/Kolkata');
$currentTime = date('Y-m-d H:i:s');

// Check if required fields are provided
if (!empty($data->AuthToken) && !empty($data->Source)) {
    // SQL insert query
    $query = "INSERT INTO awslead (AuthToken, Source, FirstName, MobileNumber, Email, City, State, Country, Course, Textb1, Center, LeadSource, LeadName, LeadType, Field1, Leadchannel, leadcampaign, datetime)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare statement
    $stmt = $conn->prepare($query);

    // Bind parameters, including current time for the `datetime` field
    $stmt->bind_param(
        "ssssssssssssssssss",
        $data->AuthToken,
        $data->Source,
        $data->FirstName,
        $data->MobileNumber,
        $data->Email,
        $data->City,
        $data->State,
        $data->Country,
        $data->Course,
        $data->Textb1,
        $data->Center,
        $data->LeadSource,
        $data->LeadName,
        $data->LeadType,
        $data->Field1,
        $data->Leadchannel,
        $data->leadcampaign,
        $currentTime  // Use `$currentTime` directly
    );

    // Execute query
    if ($stmt->execute()) {
         json_encode(["response" => "Lead added successfully"]);
    } else {
         json_encode(["response" => "Failed to add lead"]);
    }

    // Close the statement
    $stmt->close();
} else {
    echo json_encode(["response" => "Incomplete data"]);
}

// Close connection
$conn->close();
?>
