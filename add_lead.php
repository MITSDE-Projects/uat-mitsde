<?php

// Set headers for CORS and JSON response
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

include("admin/include/configpdo.php");

// Check connection
if (!$conn) {
    echo json_encode(["error" => "Connection failed"]);
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
    $query = "INSERT INTO awslead 
    (AuthToken, Source, FirstName, MobileNumber, Email, City, State, Country, Course, Textb1, Center, LeadSource, LeadName, LeadType, Field1, Leadchannel, leadcampaign, datetime)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare statement
    $stmt = $conn->prepare($query);

    // Execute query with positional parameters
    $result = $stmt->execute([
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
        $currentTime
    ]);

    // Execute result check
    if ($result) {
        echo json_encode(["response" => "Lead added successfully"]);
    } else {
        echo json_encode(["response" => "Failed to add lead"]);
    }

} else {
    echo json_encode(["response" => "Incomplete data"]);
}

?>