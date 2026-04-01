<?php
include"../php/db.php";

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
 "FirstName": "Tejas",
 "MobileNumber" : "8482890051",
 "Email" : "meshramtejas2@gmail.com",
 "LeadSource": "Organic-ApplyNow"
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);

if(curl_exec($curl) === false)
{
    echo 'Curl error: ' . curl_error($curl);
}
else
{
    echo 'Operation completed without any errors';
}

var_dump($resp);


$response = json_decode($resp, true);
echo  "</br>FirstName--->".$FirstName   = $response['FirstName'];
echo  "</br>userId--->".$userId   = $response['userId'];
echo  "</br>leadId--->".$leadId   = $response['leadId'];
echo  "</br>message--->".$message     = $response['message'];
echo  "</br>result--->".$result     = $response['result'];
echo  "</br>prn--->".$prn     = $response['prn'];
echo  "</br>counselorName--->".$counselorName     = $response['counselorName'];
echo  "</br>counselorId--->".$counselorId     = $response['counselorId'];
echo  "</br>sourceSeq--->".$sourceSeq     = $response['sourceSeq'];
echo  "</br>leadAlreadyExists--->".$leadAlreadyExists     = $response['leadAlreadyExists'];
?>






