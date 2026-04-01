<?php
// Database Configuration
include("admin/include/configpdo.php");

// Force CSV download
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=new_admission_payment_details.csv');

// Open output stream
$output = fopen('php://output', 'w');

// Column headings (PHP 5 safe array syntax)
fputcsv($output, array(
    'Lead ID',
    'Payment Date',
    'Name',
    'Email',
    'Phone',
    'Course Name',
    'Specialization',
    'Dual Specialization',
    'Amount',
    'Payment Type',
    'PayU ID',
    'Payment Response',
    'Lead Push Response',
    'Counselor Email'
), ',', '"', '\\');


// ================= FETCH MAIN DATA =================
$stmt = $conn->prepare("
    SELECT leadID, DT, name, email, phone, CourseName, 
           SpecializationID, dual_SpecializationID, 
           amount, FeesType, PayU_ID, response, 
           response2, counseller_email 
    FROM New_erp_student_admission_transaction
");

$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    // Get Course ID
    $courseName = isset($row['CourseName']) ? (string) $row['CourseName'] : '';
    $courseinfo = explode('_', $courseName);
    $course_id = isset($courseinfo[0]) ? $courseinfo[0] : '';


    // ================= FETCH SPECIALIZATION =================
    $course_stmt = $conn->prepare("
        SELECT NewCourseERP.CourseName, 
               NewCourseERP.duration, 
               NewERPSpecialization.SpecializationName 
        FROM NewCourseERP 
        INNER JOIN NewERPSpecialization 
            ON NewCourseERP.CourseID = NewERPSpecialization.CourseID
        WHERE NewCourseERP.CourseID = ?
        AND NewERPSpecialization.SpecializationID = ?
    ");

    $course_stmt->execute(array(
        $course_id,
        $row['SpecializationID']
    ));

    $scourse = $course_stmt->fetch(PDO::FETCH_ASSOC);

    $Specialization_Name = isset($scourse['SpecializationName'])
        ? $scourse['SpecializationName']
        : '';

    // ================= DUAL SPECIALIZATION =================
    $dualSpec = isset($row['dual_SpecializationID']) ? (string) $row['dual_SpecializationID'] : '';
    $D_Specializationinfo = explode('_', $dualSpec);
    $D_SpecializationName = isset($D_Specializationinfo[1]) ? $D_Specializationinfo[1] : '';


    // ================= WRITE CSV ROW =================
    fputcsv($output, array(
        $row['leadID'],
        $row['DT'],
        $row['name'],
        $row['email'],
        $row['phone'],
        $row['CourseName'],
        $Specialization_Name,
        $D_SpecializationName,
        $row['amount'],
        $row['FeesType'],
        $row['PayU_ID'],
        $row['response'],
        $row['response2'],
        $row['counseller_email']
    ), ',', '"', '\\');
}

// Close file handle
fclose($output);
exit;
?>