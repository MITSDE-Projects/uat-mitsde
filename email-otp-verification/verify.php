<?php
if (!isset($_GET['otp']) || !isset($_GET['mobileno'])) {
    echo "OTP and mobile number are required.";
    exit;
}
$host = "localhost";
$username = "mitsde_onlinepay";
$password = "jNq%,6!)0RmK";
$dbname = "mitsde_onlinepayment";
// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

$otp = $_GET['otp'];
$mobileno = $_GET['mobileno'];
$emailID = $_GET['emailID'];





$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://control.msg91.com/api/v5/otp/verify?mobile=$mobileno&otp=$otp",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array('authkey: 332116AkEui6hX85oO5ee1d8d6P1'),
));

$response = curl_exec($curl);
curl_close($curl);

if (strpos($response, 'success') !== false) {
    
    
   
  date_default_timezone_set('Asia/Kolkata');
  $currentDT = date('Y-m-d H:i:s'); // Format: YYYY-MM-DD HH:MM:SS

    // Insert query with PHP's date function for mailSend
    
     $query = "UPDATE `opt_verification` SET `m_verficationDT` = '$currentDT', m_verfication=1 WHERE `mobNo` = '$mobileno'";

    if (mysqli_query($conn, $query)) 
    {
        
        $curl1 = curl_init();
    $data = array(
    "AuthToken" => "MITSDE-11-06-2020",
    "Source" => "mitsde",
    "FirstName" => $name,
    "MobileNumber" => $mobileno,
    "Email" => $emailID,
    "LeadSource" => "Paid Form M-V",
    "LeadName" => "https://admissions.mitsde.com/pg-applynow/",
    "LeadType" => "Online"
);

curl_setopt_array($curl1, array(
    CURLOPT_URL => 'https://thirdpartyapi.extraaedge.com/api/SaveRequest',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Accept: application/json',
    ),
));

$response1 = curl_exec($curl1);

if (curl_errno($curl1)) {
    //echo 'Curl error: ' . curl_error($curl1);
} else {
    //echo $response1;
}
        $link_address="https://mitsde.com/";
         echo "</br>OTP Verified Successfully!";
         echo "</br><a href='$link_address'><h1>Visit Website</h1></a>";
        //die;
    } else {
        
        
        
        
        echo "</br>OTP Verified Successfully! But Data not updated";
        //die;
    }
    
   
} else {
    
    
    
   
    echo "OTP Verification Failed!";
    
}
?>
