<?php
//echo "</br>name-->".$name="sanjay";
echo "</br>MobileNumber-->".$MobileNumber="9970021600";
echo "</br>Email-->".$Email="gaikwad@mitsde.com";


    
$url = "https://prodapi.extraaedge.com/api/WebHook/add";

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
     "eesourceid": "29", 
    "mobilenumber": "$MobileNumber", 
    "email": "$Email"
 }
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
echo "</br>";
var_dump($curl);
echo "</br>";
var_dump($resp);
$response = json_decode($resp, true);
//print_r($response);

echo "</br>leadid-->".$leadId = $response['leadId'];
?>