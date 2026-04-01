<?php
$DB_Server = "localhost"; // MySQL Server
$DB_Username = "mitsde_studentda"; // MySQL Username
$DB_Password = "Custom@123"; // MySQL Password
$DB_DBName = "mitsde_studentdata"; // MySQL Database Name

$connection = mysqli_connect($DB_Server, $DB_Username, $DB_Password,$DB_DBName);



//if($connection) { echo "Y"; }
//else {
//echo mysqli_error();  
//} 


//exit; 

if(isset($_POST['process']) && $_POST['process']=='updatedprogram'){
    
    extract($_POST);
    
    echo "UPDATE student SET desciplines='$value1' WHERE memberID='$id1'"; 
   // exit;
    
    if(mysqli_query($connection,"UPDATE student SET programmesugpg='$value1' WHERE memberID='$id1'"))
    {
        
        echo "1";
    }
    
    else 
    {
        echo mysqli_error(); 
    }
}



?>