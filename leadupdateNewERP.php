<?php //include "apply/php/header.php";
include_once "administrator/include/connection.php";
 

$url = "https://uat.mitpro.mitsde.com/Webapi/api/CRM/UpdateLeadDetails";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer YO4SZ8XgYfIx5SlYl89o6xsBI7v-5l55F5wXCIsLDZ-IxnXb7uqlhftFbzy-OF_ggQzXSt1y-OXfBL6Jk2aKrLDlDqzT6obVLAriOnCzrY7TsFp9BXMtKcfL4Gdvd7X3W-gRtHfMLpx7mRBhfbbD-YXbrLv1L7bkmBUGteMaTcucXiE7SqikwRn085XWsckTtMx_znppc4It9T8uFX4e-jZzx1xLewnx8k2YMH-oQn_5JGH2b9mMKdlVgA74RSSDn59EVvO539ZFD61cbPLi4pFNsl_51T1oXykCB8MaPDerAkXeQIq9bKn2k6R-nhmRofCkDLe8Q7AOhlfGIWh_ieA1oMVfRPBSYV9WGNRp_OB2N4t8UqRGz5_Zltc2iuvyZaW7BMLQ0PxRd4jjMZQZKsyr1gcXY8tIyjTcPwh-UKZ9I4xe4IjUMkc1DwNlSPLTEfgxthgynhtdkSssNybf-Q_GYkwHBJiCp6sT3rWSUTIYzyOEedP4l-UyHEH1DNQN",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		
		
$data = <<<DATA
{
    "LeadID":"CRML0095",
    "CategoryId": 1,
    "SalutaionId": 1,
    "InstituteId": 1,
    "FirstName": "Amol",
    "LastName": "Kumar",
    "Gender": "M",
    "DateOfBirth": "1990-04-12",
    "MobileNumber": "9030349610",
    "EmailAddress": "sanjay123@gmail.com",
    "ParentProgramId":9,
    "SpecializationID":9,
    "AadhaarNumber": "809790980000",
    "AadhaarName":"Sanjay G",
    "CallStatusId": 1,
    "CounsellorName": "Ram1",
    "CounsellorEmailId": "ram1@zestorm.com",
    "IsReferral": 1,
    "Referredby": "Kushal",
    "BookDiscount":0
}

DATA;
  

curl_setopt($curl, CURLOPT_POSTFIELDS,$data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
print($data);
curl_close($curl);
if(curl_exec($curl) === false)
{
    echo 'Curl error: ' . curl_error($curl);
}
else
{
    echo 'Operation completed without any errors';
}
//var_dump($resp);
//-----------------------------------------------------API Response---------------------------
$response = json_decode($resp, true);


$error_code   = $response['ErrorCode'];
$error_mes   = $response['ResultMessage'];

//print_r($response);
echo "<br>Error code:".$error_code;
echo "<br>Message:".$error_mes ;
echo "<br>Message:". $msg=trim($error_mes);


		
		

 
 ?>   
 
 
             