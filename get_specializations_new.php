<?php
include("admin/include/config.php");

if (isset($_GET['CourseName'])) {
    $CourseName = mysql_real_escape_string($_GET['CourseName']);

    // Get CourseID from CourseERP table
    $courseQuery = mysql_query("SELECT CourseID FROM NewCourseERP WHERE CourseName = '$CourseName'");
    $courseRow = mysql_fetch_array($courseQuery);

    if ($courseRow) {
        $courseID = $courseRow['CourseID'];

        // Get Specializations based on CourseID
        $query = mysql_query("SELECT * FROM NewERPSpecialization WHERE CourseID = '$courseID'");

        echo "<option value=''>Select Specialization</option>"; // Default option
        while ($row = mysql_fetch_array($query)) {
            $SpecializationID = $row['SpecializationID'];
            $SpecializationName = $row['SpecializationName'];
            echo "<option value='$SpecializationName'>$SpecializationName</option>";
        }
    } else {
        echo "<option value=''>No Specializations Found</option>";
    }
}
?>
