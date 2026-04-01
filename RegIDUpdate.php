<?php //include "apply/php/header.php";
include_once "administrator/include/connection.php";
 
//echo"</br>connection-->".$conn;
 

    
//die;    
  //  echo"</br>connection-->".$conn;
                    // echo "select * from student where S_Flag<>1 AND all_verified<>0 AND amount<>'' AND transactid<>'' AND ERPLeadID<>'' AND `CourseID`<>'0' AND `SpecializationID`<>'0'";
    $sql=mysqli_query($conn,"SELECT RegNo,ExtraEdgeID,admission_status,memberID FROM `student` WHERE `RegNo` != '' AND `admission_status` != '' AND `ExtraEdgeID` != '' AND `reg_flag`=0");
   // $sql=mysqli_query($conn,"select * from student where memberID='384012'");
     
	
    echo "</br>count-->".$count= mysqli_num_rows($sql);

    while($data = mysqli_fetch_array($sql))
	{
	 echo "</br>RegNo-->".   $RegNo=$data['RegNo'];
	 echo "</br>ExtraEdgeID-->".   $ExtraEdgeID=$data['ExtraEdgeID'];
	 echo "</br>admission_status-->".   $admission_status=$data['admission_status'];
	 echo "</br>memberID-->".   $memberid=$data['memberID'];
 //die;
 //$url = "https://eetestdevlinuxapi.extraaedge.com/api/webhook/addLead";
 
 $url = "https://prodapi.extraaedge.com/api/webhook/addLead";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer MITSDE-11-06-2020",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
    "AuthToken": "MITSDE-11-06-2020",
    "Source": "mitsde",
    "Userid": "$ExtraEdgeID",
    "Textb4": "$RegNo",
    "eesourceid": "23",
    "ReasonCode": "$admission_status"
 }
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
//var_dump($resp);
$response = json_decode($resp, true);
echo  "</br>result-->".$result   = $response['result'];



   if(isset($result))
   {
       
      //echo "</br>UPDATE student SET reg_flag='1' WHERE memberID = '$memberid'";
	       $str=mysqli_query($conn,"UPDATE student SET reg_flag='1' WHERE memberID = '$memberid'");
                
   }
//die
	}
	
 
 ?>   
 
 
             