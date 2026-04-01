<?php
$DB_Server = "localhost"; // MySQL Server
$DB_Username = "mitsde_studentda"; // MySQL Username
$DB_Password = "Custom@123"; // MySQL Password
$DB_DBName = "mitsde_studentdata"; // MySQL Database Name

$connection = mysqli_connect($DB_Server, $DB_Username, $DB_Password,$DB_DBName);
?>

<?php

$ref=mysqli_query($connection,"SELECT email,name,memberID FROM `student` WHERE `API_Response_camu` = 'Skills'");

$get_count=mysqli_num_rows($ref);


$get_count;
header('Content-Type:application/json');
if($get_count>0)
{
    while($row=mysqli_fetch_assoc($ref))
    {
        $arr[]=$row;
    }
  
  echo json_encode(['status'=>true, 'data'=>$arr]);
}
else
{
    //echo "";
    echo json_encode(['status'=>false, 'msg'=>'data not found']);
}
?>