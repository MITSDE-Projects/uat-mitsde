<?php
// include("admin/include/config.php");
include("admin/include/configpdo.php");

if (isset($_GET['CourseName'])) {

    $CourseName = $_GET['CourseName'];

    // Get Course details
    $stmt = $conn->prepare("SELECT * FROM NewCourseERP WHERE CourseID = ?");
    $stmt->execute([$CourseName]);
    $courseRow = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($courseRow) {

        $courseID = $courseRow['CourseID'];

        // Get Specializations
        $stmt2 = $conn->prepare("SELECT * FROM NewERPSpecialization WHERE CourseID = ? ORDER BY sorting ASC");
        $stmt2->execute([$courseID]);

        if ($courseRow['CourseName'] == "Dual Program") {
            echo "<option value=''>Select PGDM Executive Specializations</option>";
        } else {
            echo "<option value=''>Select " . htmlspecialchars($courseRow['CourseName']) . " Specialization</option>";
        }

        while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
            $SpecializationID = $row['SpecializationID'];
            $SpecializationName = htmlspecialchars($row['SpecializationName']);
            echo "<option value='{$SpecializationID}'>{$SpecializationName}</option>";
        }

    } else {
        echo "<option value=''>No Specializations Found</option>";
    }
}
?>
