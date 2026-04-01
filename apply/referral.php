<?php

echo "</br>prn-->".$prn=$_GET['prn'];

//die;
if(isset($_GET['prn']))
{
    
    $url = "https://linuxapi.extraaedge.com/api/WebHook/fetchLeadDetailsByPRN?prn=$prn&authToken=MITSDE-NEW-26-08-2020&source=mitsdenew";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer MITSDE-NEW-26-08-2020",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);
    
$response = json_decode($resp, true);
print_r($response);
echo  "</br>mail id--->".$email   = $response['email'];
echo  "</br>mobile--->".$mobile   = $response['mobileNumber'];   
    
    
    
  /*$url = "https://linuxapi.extraaedge.com/api/WebHook/fetchLeadDetailsByPRN?prn=c2e61d&authToken=MITSDE-NEW-26-08-2020&source=mitsdenew";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer MITSDE-NEW-26-08-2020",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
  "prn": "$prn",
  "AuthToken": "MITSDE-NEW-26-08-2020", 
  "Source" : "mitsdenew"
 
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
print_r($data);
curl_close($curl);
var_dump($resp);
$response = json_decode($resp, true);
print_r($response);
echo  "</br>mail id--->".$email   = $response['email'];
echo  "</br>mobile--->".$mobile   = $response['mobileNumber'];

//echo  "</br>leadid--->".$leadid=$resp[string][userId]; 

   if(isset($userId))
   {
       echo "hi";
       //$extraedgeleadid="E".$userId;
      //echo "</br>UPDATE student SET ExtraEdgeID='$extraedgeleadid' WHERE memberID = '$memberid'";
	     //  $str="UPDATE student SET ExtraEdgeID='$extraedgeleadid',counsellor_name='$counselorName' WHERE memberID = '$memberid'";
    // $query = mysqli_query($connection,$str);
   }*/
//die;
}
?>