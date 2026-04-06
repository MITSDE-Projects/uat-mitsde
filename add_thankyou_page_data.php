<?php

include("admin/include/configpdo.php");



// Check if the request method is POST

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Read JSON input

    $data = json_decode(file_get_contents("php://input"), true);



    // Prepare SQL insert query

    $sql = "INSERT INTO quickcontact (FirstName, EmailID, MobileNo, SourcePath, PageName, DateTime, Date, device, page_name, address, district, city, state, country, longitude, latitude, ip)

            VALUES (:FirstName, :EmailID, :MobileNo, :SourcePath, :PageName, :DateTime, :Date, :device, :page_name, :address, :district, :city, :state, :country, :longitude, :latitude, :ip)";

    $stmt = $conn->prepare($sql);



    // Bind parameters dynamically (allowing blank values)

    foreach (['FirstName', 'EmailID', 'MobileNo', 'SourcePath', 'PageName', 'DateTime', 'Date', 'device', 'page_name', 'address', 'district', 'city', 'state', 'country', 'longitude', 'latitude', 'ip'] as $field) {

        $stmt->bindValue(":$field", isset($data[$field]) ? $data[$field] : null);

    }



    // Execute the query and send response

    try {

        $stmt->execute();

        echo json_encode(["status" => "success", "message" => "Data inserted successfully"]);

    } catch (PDOException $e) {

        echo json_encode(["status" => "error", "message" => "Insert failed: " . $e->getMessage()]);

    }

} else {

    // Respond with an error if not POST

    echo json_encode(["status" => "error", "message" => "Invalid request method"]);

}

?>

