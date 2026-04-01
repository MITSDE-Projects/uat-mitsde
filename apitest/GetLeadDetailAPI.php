<?php

$studentId = "MIT2023E04739";
$url = "https://uat.mitpro.mitsde.com/WebAPI/api/CRM/GetLeadDetailAPI?StudentId=" . urlencode($studentId);

$accessToken = "lzf61iOEKUsNzbl4zyy2SpQ2xuQII9LTz3CPBrp_Z-FVTwhSO-PVvfx54ZTM1-U32ty1JcWjSw-XLO_amextLma73mgBOcCCqLPi-ud1sbqbMhC2A1Sey_nS2R3fkQ3FkqSE_cOLBo8c2tkfDXRLwW1eZYcIYkawEgtt31HTae1RPRwfXio98mvSc-vsMJV4to_afg3mB4RRNddqN61q3zZnEBQfmFKxLZLNz5qIY6MNb_sX5_7BkD7xCUKeR7lANQrbgovyIZW2TshXlNDHmgrIt1tLIZYKHNxRX3CSYxYc-O8ll9Yr-k2tsb4Ti8FM-kH99cXYXDyd9vsyUhz86Q40eV1ZZGo415cjyLrTrtoYc43iOU9VTMGu1NFtwgB1N4wVXKl3OSJQGAa13u0GJp56Q33F5mLDBK42HtwV1rR-9BeRSIXehAj1ZFDfdiyN_BYcdj9_d7v_NTcJO_cumsaljg2CLwwtWvlYwmaGewrLP_4h0r44Nw5uZxMn82tq"; // Replace with your actual token

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer " . $accessToken,
        "Content-Type: application/json",
        "Accept: application/json"
    ),
));

$response = curl_exec($curl);
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$curlError = curl_error($curl);

curl_close($curl);
print_r($response);
// Check for cURL errors
if ($curlError) {
    die("cURL Error: " . $curlError);
}

// Decode the JSON response
$data = json_decode($response, true);

// Check if decoding was successful
if ($data === null) {
    die("Error decoding JSON response");
}

// Check if the API response contains expected data
if (isset($data['Object']['GetLeadDetailList'][0])) {
    $leadDetails = $data['Object']['GetLeadDetailList'][0];

    // Extract values into PHP variables
    $leadid = $leadDetails['CRMLeadID'];
    $FirstName = $leadDetails['FirstName'];
    $MiddleName = $leadDetails['MiddleName'];
    $LastName = $leadDetails['LastName'];
    $EmailID = $leadDetails['EmailAddress'];
    $MobileNumber = $leadDetails['MobileNumber'];
    $programID = $leadDetails['ProgramID'];
    $SpecializationID = $leadDetails['SpecializationID'];
    $programName = $leadDetails['ProgramName'];
    $SpecializationName = $leadDetails['SpecializationName'];
    
   

    // Output the values
    echo "</br>CRM Lead ID: $leadid <br>";
    echo "Name: $FirstName $MiddleName $LastName <br>";
    echo "Email: $EmailID <br>";
    echo "Mobile: $MobileNumber <br>";
    echo "Program ID: $programID <br>";
    echo "Specialization ID: $SpecializationID <br>";
    echo "Program Name: $programName <br>";
    echo "Specialization Name: $SpecializationName <br>";

} else {
    echo "No lead details found.";
}

?>
