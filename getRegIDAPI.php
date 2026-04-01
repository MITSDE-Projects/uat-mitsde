<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://camu.in/application/external/get-student-admission-status-by-yearofadm-and-application-number',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
"YearofAdm":"2021-2022",
"ApplicationNo":["E485102"]
}',
  CURLOPT_HTTPHEADER => array(
    'api-key: bF_NxwA27s8PkLZnunLC1zABLF7Xqjzt0ZkBECLhzq0',
    'Content-Type: application/json',
    'Cookie: connect.sid=s%3ATwuvT2ZzT4EknH2GemTKgswGTATxKm0N.C%2BpCQDnk6DtT8BQHsng4LH9asiUYg2rEz97MR8U%2FUbI'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
