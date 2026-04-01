<?php
include("admin/include/config.php");

if (isset($_GET['CourseName'])) {
    $CourseName = mysql_real_escape_string($_GET['CourseName']);

    // Get CourseID from CourseERP table
    $courseQuery = mysql_query("SELECT * FROM UatNewCourseERP WHERE CourseID = '$CourseName'");
    $courseRow = mysql_fetch_array($courseQuery);

    if ($courseRow) {
        $courseID = $courseRow['CourseID'];

        // Get Specializations based on CourseID
        $query = mysql_query("SELECT * FROM UatNewERPSpecialization WHERE CourseID = '$courseID' ORDER BY UatNewERPSpecialization.sorting ASC");

        if ($courseRow['CourseName'] == "Dual MBA") {
            echo "<option value=''>Select PGDM Executive Specializations</option>";
        } else {
            echo "<option value=''>Select " . $courseRow['CourseName'] . " Specialization</option>"; // Default option
        }
        while ($row = mysql_fetch_array($query)) {
            $SpecializationID = $row['SpecializationID'];
            $SpecializationName = $row['SpecializationName'];
            echo "<option value='$SpecializationID'>$SpecializationName</option>";
        }
    } else {
        echo "<option value=''>No Specializations Found</option>";
    }
}
?>