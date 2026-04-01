<?php
include_once "administrator/include/connection.php";


//$sql=mysqli_query($conn,"SELECT * FROM `student` WHERE `created` > '2022-02-28' AND `formstatus`='payment done'");
 $sql=mysqli_query($conn,"SELECT * FROM `student` WHERE `ExtraEdgeID` LIKE 'E0' AND `is_enrolled` = '0'");
  //die; 
     
	
    //echo "</br>count-->".$count= mysqli_num_rows($sql);
   //$data = mysqli_fetch_array($sql);
    while($data = mysqli_fetch_array($sql))
	{
echo  "</br>member id--->".$memberid=$data ['memberID'];;
echo  "</br>name --->".$name=$data['name'];;
echo  "</br>MobileNumber--->".$MobileNumber=$data ['phonenumber'];
echo  "</br>Email--->".$Email=$data ['email'];
echo  "</br>ExtraEdgeID--->".$ExtraEdgeID=$data['ExtraEdgeID'];
//die;
if($ExtraEdgeID=='E0')
{
  $url = "https://prodapi.extraaedge.com/api/webhook/add";

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
{"AuthToken": "MITSDE-11-06-2020", 
 "Source" : "mitsde",
 "FirstName": "$name", 
 "MobileNumber" : "$MobileNumber",
 "Email" : "$Email",
 "LeadSource": "Organic-ApplyNow"
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//print_r($data);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);
//print_r($resp);
$response = json_decode($resp, true);
$FirstName   = $response['FirstName'];
echo  "</br>Leadid--->".$userId   = trim($response['userId']);
$counselorName = trim($response['counselorName']);
$counselorId = $response['counselorId'];
//echo  "</br>leadid--->".$leadid=$resp[string][userId]; 
//die;
   if(isset($userId))
   {
       echo "</br>eeid-->".$extraedgeleadid="E".$userId;
       echo "</br>UPDATE student SET ExtraEdgeID='$extraedgeleadid',counsellor_name='$counselorName' WHERE memberID = '$memberid'";
	       $str="UPDATE student SET ExtraEdgeID='$extraedgeleadid',counsellor_name='$counselorName' WHERE memberID = '$memberid'";
     $query = mysqli_query($conn,$str);
   }
	}
}
?>