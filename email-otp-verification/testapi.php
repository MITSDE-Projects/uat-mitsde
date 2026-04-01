<?php
        $mobileno = "test2";
        $name = "sanjay";
        $emailID = "2632632634@mitsde.com";
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://thirdpartyapi.extraaedge.com/api/SaveRequest',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "AuthToken":"MITSDE-11-06-2020",
    "Source":"mitsde",
    "FirstName":$name,
    "MobileNumber":$mobileno,
    "Email":$emailID,
    "LeadSource":"Paid Form E-V",
    "LeadName":"https://admissions.mitsde.com/",
    "LeadType":"Online"
    }',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>
