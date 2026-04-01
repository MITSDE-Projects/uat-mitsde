<p align="center">MIT-SDE Redirect To HDFC Payment Getway Please Wait Five Minutes</p>

<?php

include('Crypto_new.php');

include('admin/include/config.php');


error_reporting(0);

// Google reCAPTCHA validation

$recaptcha = $_POST['g-recaptcha-response'];

$secret_key = '6Lf1dR4gAAAAAJm1h4pKoaoKG-LtkR9qZEMR-YYb';

$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $recaptcha;

$response = file_get_contents($url);

$response = json_decode($response);



// If reCAPTCHA fails, redirect back or show an error

if (!$response->success) {

    die('reCAPTCHA verification failed. Please try again.');

}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    if ($_POST['billing_email'] != '' and $_POST['delivery_tel'] != '' and $_POST['amount'] != '') {

        $LeadID = trim($_POST['merchant_param3']);
        
        $firstName = isset($_POST['firstName']) ? trim($_POST['firstName']) : '';
        $lastName = isset($_POST['lastName']) ? trim($_POST['lastName']) : '';

        $_POST['delivery_name'] = $firstName . ' ' . $lastName;

        $student_name = $_POST['delivery_name'];

        $Email = $_POST['billing_email'];

        $MobileNo = $_POST['delivery_tel'];

        $gender = $_POST['gender'];

        $Course = $_POST['merchant_param1'];  //merchant_param2

        // echo "</br>c_name-->".$counsellername= $_POST['merchant_param2'];
            
            
            
        $S_ID = $_POST['SpecializationID'];
        
        
        
        
        $dual_S_ID = $_POST['SecondSpecializationID'];

        $counselleremailid = $_POST['merchant_param4'];
         
         
         
        $getCounselors = mysql_query("SELECT full_name FROM `tbl_counselor` WHERE email='$counselleremailid'");
        $row = mysql_fetch_array($getCounselors);
        $new_counselorName = $row['full_name'];


        $FeesType = $_POST['merchant_param2'];  //feestypeID

        $Password = $_POST['password'];

        $totamt = $_POST['amount'];

        $transactionId = $_POST['order_id'];

        $tid = $_POST['tid'];

        //die;
        $url = "https://prodivrapi.extraaedge.com/api/WebHook/addLead";

        // Prepare request data
        $data = [

            "AuthToken" => "MITSDE-11-06-2020",
            "Source" => "mitsde",
            "FirstName" => $student_name,
            "MobileNumber" => $MobileNo,
            //"Email" => $Email,
            "LeadSource" => "newadmission",
            "LeadName" => "admission-mitsde",
            "LeadType" => "Online"
        ];
        //print_r($data);
        //die;
        // Initialize cURL session
        $curl = curl_init();

        // Set cURL options
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Accept: application/json'
            ]
        ]);

        // Execute cURL request
        $resp = curl_exec($curl);

        // Check for cURL errors
        if (curl_errno($curl)) {
            curl_close($curl);
            return [
                'status' => 'error',
                'message' => 'API connection failed: ' . curl_error($curl)
            ];
        }

        // Close cURL session
        curl_close($curl);

        // Parse API response
        $response = json_decode($resp, true);
        //print_r($response);
        //echo "</br>leadid-->" . $LeadID;
        $EELeadID = "E" . $response['userId'];
        $old_counselorName = $response['counselorName'];
        //die();

        //-------------------uat api------------------

        if ($LeadID != $EELeadID) {

            echo "</br></br><center><h1 style='color:red;'>No record found. Check your Admission ID ($LeadID)</h1></center>";

            echo "</br><center><a href='https://www.mitsde.com/new-admission-form-payment-test'>Go Back</a></center>";

            die;

        }

    } else {

        echo "</br></br><center>Some compulsory fields are missing</center>";

        echo "</br><center><a href='https://www.mitsde.com/new-admission-form-payment-test'>Go Back</a></center>";

        die;

    }

} else {

    $message = 'An <strong>unexpected error</strong> occured. Please Try Again later.';

    echo "</br><a href='https://www.mitsde.com/new-admission-form-payment-test'>Go Back</a>";

    die;

}

date_default_timezone_set('Asia/Calcutta');

$CurrentDateTime = date('Y-m-d : h:i:s');







$orchk = mysql_num_rows(mysql_query("select * from New_erp_student_admission_transaction where `t_process_id`='" . $transactionId . "'"));



if ($orchk > 0) {

    echo "ERROR: Duplicate Order ID<br>";



    echo "<a href='https://www.mitsde.com/new-admission-form-payment-test'>Go Back</a>";

    die;

} else {

    //echo "</br>INSERT INTO `temp_erp` (`T_ID`, `T_LeadID`,`student_name`,`email_id`,`phone`, `gender`, `course`,`SpecializationID`,`dual_SpecializationID`,`password`,`fees_type`, `T_installmentNo`, `T_A_Amount`, `T_B_Amount`, `tranID`, `tid`, `P_Start_date`, `P_End_date`, `Status`,`gateway_name`, `old_counselorName`, `new_counselorName`, `flag`) VALUES (NULL, '" . $LeadID . "','" . $student_name . "','" . $Email . "','" . $MobileNo . "','" . $gender . "', '" . $Course . "','" . $S_ID . "','" . $Password . "','" . $FeesType . "', '0', '0', '" . $totamt . "', '" . $transactionId . "', '" . $tid . "', '" . $CurrentDateTime . "', NULL, 'processing', 'HDFC', '" . $old_counselorName . "', '" . $new_counselorName . "', '0')";

    // die;

    $query = "INSERT INTO `temp_erp` (`T_ID`, `T_LeadID`,`student_name`,`email_id`,`phone`, `gender`, `course`,`SpecializationID`,`dual_SpecializationID`,`password`,`fees_type`, `T_installmentNo`, `T_A_Amount`, `T_B_Amount`, `tranID`, `tid`, `P_Start_date`, `P_End_date`, `Status`,`gateway_name`, `old_counselorName`, `new_counselorName`, `flag`) VALUES (NULL, '" . $LeadID . "','" . $student_name . "','" . $Email . "','" . $MobileNo . "','" . $gender . "', '" . $Course . "','" . $S_ID . "','" . $dual_S_ID . "','" . $Password . "','" . $FeesType . "', '0', '0', '" . $totamt . "', '" . $transactionId . "', '" . $tid . "', '" . $CurrentDateTime . "', NULL, 'processing', 'HDFC', '" . $old_counselorName . "', '" . $new_counselorName . "', '0')";

    $storeintemp = mysql_query($query) or die(mysql_error);

}





// END



/*$merchant_data='193023';

   $working_key ='FF2048EE9548EAE83BF4797292611691'; //Shared by CCAVENUES

   $access_code ='AVNW80FJ85AH78WNHA'; //Shared by CCAVENUES */   // testing





$merchant_data = '236596';

$working_key = '277C1DEFA1388ACD68B11FE6A467A577'; //Shared by CCAVENUES

$access_code = 'AVYD88GJ48CA97DYAC'; //Shared by CCAVENUES 





foreach ($_POST as $key => $value) {

    $merchant_data .= $key . '=' . urlencode($value) . '&';

}



$encrypted_data = encrypt($merchant_data, $working_key); // Method for encrypting the data.



?>

<!--<form method="post" name="redirect" action="https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> test url -->



<form method="post" name="redirect"
    action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction">

    <?php

    echo "<input type=hidden name=encRequest value=$encrypted_data>";

    echo "<input type=hidden name=access_code value=$access_code>";

    ?>

</form>

</center>

<script language='javascript'>document.redirect.submit();</script>

</body>

</html>