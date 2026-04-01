<?php

include("include/connection.php");

 $getdata = mysqli_query($conn,"SELECT * FROM tbl_results_duplicate WHERE `id` >'1546'");
   while($setdata = mysqli_fetch_array($getdata)){
   


   mysqli_query($conn,"INSERT INTO tbl_dat_result(roll_no,name,email,phone,message,studio_date,flag_avt,flag_id)VALUES('".$setdata['roll_no']."','".$setdata['name']."','".$setdata['email']."','".$setdata['phone']."','".$setdata['message']."','".$setdata['studio_date']."','".$setdata['flagavt']."','".$setdata['flagid']."')");
   
   
   }


?>