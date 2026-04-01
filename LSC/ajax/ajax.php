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

if(isset($_POST['process']) && $_POST['process']=='updatedisciplines'){
    
    extract($_POST);
    
    //echo "UPDATE student SET desciplines='$value' WHERE memberID='$id'"; exit;
    
    if(mysqli_query($connection,"UPDATE student SET desciplines='$value' WHERE memberID='$id'"))
    {
        
        echo "1";
    }
    
    else 
    {
        echo mysqli_error(); 
    }
}

    

if(isset($_POST['process']) && isset($_POST['cities']) && isset($_POST['id'])){
    

  extract($_POST);

   echo "<option value=''>Select City</option>";
  $getcities = mysqli_query($connection,"SELECT * FROM tbl_cities WHERE state='".$_POST['cities']."'");
     while($setcities = mysqli_fetch_array($getcities)){ 
     
      echo "<option value=".$setcities['city'].">".$setcities['city']."</option>";

         



     }
    
}







?>