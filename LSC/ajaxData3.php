<?php
//Include database configuration file
$DB_Server = "localhost"; // MySQL Server
$DB_Username = "mitsde_studentda"; // MySQL Username
$DB_Password = "Custom@123"; // MySQL Password
$DB_DBName = "mitsde_studentdata"; // MySQL Database Name

$connection = mysqli_connect($DB_Server, $DB_Username, $DB_Password,$DB_DBName);
//echo "hello";
if(isset($_POST["dpt"]) && !empty($_POST["dpt"])){
    //Get all state data
    echo "</br>dpt-->".$dptid=$_POST["dpt"];

	 //echo "SELECT * FROM tbl_courses WHERE program_id = '".$dptid."'"; 
	 //exit; 
	
	
	 $getquery = mysqli_query($connection,"SELECT * FROM SpecializationERP WHERE CourseID = '".$dptid."'");
    
    //Count total number of rows
    $rowCount = mysqli_num_rows($getquery);
    
    //Display states list
    if($rowCount > 0)
	{
		echo '<option value="">Specialization List</option>';
        while($row = mysqli_fetch_array($getquery))
        { 
            echo '<option value="'.$row['SpecializationID'].'_'.$row['SpecializationName'].'">'.$row['SpecializationName'].'</option>';
		}
    } 
    else 
    {
        echo '<option value="">Course Not Available</option>';
    }
}



?>