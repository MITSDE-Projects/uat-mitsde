<?php

$url = "http://www.demo.camuerp.in/external/application";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Basic bWl0c2RlYWRtaW46Y2FtdUAxMjM=",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
    "_pwd": "camu@123",
    "_usrNm": "mitsdeadmin",
    "AcYrCode": "2021-2022",
    "AplnNum": "E400829",
    "CnAdMob": "1234567895",
    "CnEmail": "sanjay.gaikwad3@mitsde.com",
    "CrID": "PGCMBA",
    "DePID": "MGMT",
    "DOB": "24/07/1987 12:00:00 AM",
    "FNa": "Test3",
    "InstId": "MITSDE",
    "LNa": "Test4",
    "ofrMailSnd": "Y",
    "PrID": "PGCM",
    "SemCode": "PGCMBA-SEM1",
    "Sex": "M",
    "ValiStat": "provAdmit"
}

DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);


?>