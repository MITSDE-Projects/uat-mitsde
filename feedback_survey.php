<?php 


echo "</br>feedbackarea-->".$_POST['Communication'];
echo "</br>feedbackarea-->".$_POST['Application'];
echo "</br>feedbackarea-->".$_POST['Payment'];
echo "</br>feedbackarea-->".$_POST['Counselling'];

echo "</br>rating-->".$npsRating = $_POST['npsRating'];



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$npsRating = $_POST['npsRating'];
$feedbackAreas = isset($_POST['feedbackAreas']) ? implode(", ", $_POST['feedbackAreas']) : 'None';

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO feedback (nps_rating, feedback_areas) VALUES (?, ?)");
$stmt->bind_param("ss", $npsRating, $feedbackAreas);

// Execute the statement
if ($stmt->execute()) {
    echo "Feedback recorded successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();




?>