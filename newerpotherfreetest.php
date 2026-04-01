<?php 
ini_set('max_execution_time', '7000');
date_default_timezone_set('Asia/Kolkata');
$apidataTime = date("Y-m-d H:i:s");

// ✅ Correcting DB Connection with special characters in the password
$conn = new mysqli("localhost", "mitsde_onlinepay", "jNq%,6!)0RmK", "mitsde_onlinepayment");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "SELECT * FROM OtherFeesTransactionN WHERE S_Flag<>1 AND email<>'' AND transationDate<>'' AND `PayU_ID`<>''";
$sql = "SELECT * FROM OtherFeesTransaction WHERE PayU_ID='113722090786'";
$result = $conn->query($sql);
echo "</br>count-->".$result->num_rows;
//die;
if ($result->num_rows > 0) {
    while ($data = $result->fetch_assoc()) {
        $leadid = $data['leadID'];
        $InstruNo = $data['PayU_ID'];
        $PayerBankID = $data['PayerBankID'];
        $InstruDate1 = $data['transationDate'];
        $PaidAmount = $data['amount'];
        $FeeHeadID = $data['FeeHeadID'];
        $ReceiptType = $data['ReceiptType'];
        $SpecializationID = $data['SpecializationID'];
        $course_id = $data['course_id'];

        $InstallmentRule = "";
        $InstallmentNo = 0;
        $PaymentType="Lumpsum";
        
        if($FeeHeadID==2)
        {
              $InstallmentRule = "Rule1";
              $InstallmentNo = 2;
              $PaymentType="Installment";
              
        }
        if($FeeHeadID==3)
        {
              $InstallmentRule = "Rule1";
              $InstallmentNo = 3;
              $PaymentType="Installment";
              
        }
        if($FeeHeadID==7)
        {
              $InstallmentRule = "Rule1";
              $InstallmentNo = 0;
              $PaymentType="Lumpsum";
              
        }
        /*if ($ReceiptType !== "OC") 
        {
            $get_installment_rul = $conn->query("SELECT InstallmentRule, InstallmentNo FROM `No_Of_Installment_NewERP` WHERE `ProgramId` = $course_id");
            if ($get_installment_rul->num_rows > 0) 
            {
                $rul_detail = $get_installment_rul->fetch_assoc();
                
               echo "</br>InstallmentRule". $InstallmentRule = $rul_detail['InstallmentRule'];
               echo "</br>InstallmentNo". $InstallmentNo = $rul_detail['InstallmentNo'];
            }
        }
        else
        {
                echo "</br>InstallmentRule".$InstallmentRule = "";
                echo "</br>InstallmentNo".$InstallmentNo = 0;
        }*/

        // ✅ Prepare API Request
        $postData = json_encode([
            "CRMLeadId" => $leadid,
            "FeeType" => $ReceiptType,
            "PaymentType" => $PaymentType,
            "PaymentMode" => "Online Payment",
            "TransactionNo" => $InstruNo,
            "ReceiptAmount" => $PaidAmount,
            "ReceiptDate" => $InstruDate1,
            "FeeHeadId" => $FeeHeadID,
            "UserId" => 1, //1 is supper admin and 7 is sanjay
            "CurrencyID" => 1,
            "InstallmentRule" => $InstallmentRule,
            "InstallmentNo" => $InstallmentNo
        ]);
 print_r($postData);
        // ✅ Initialize cURL
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://mitpro.mitsde.com/WebAPI/api/CRM/PaymenttAPI',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $postData,
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer 2Rl3ejPM1Q-CIhJisjtJqiDZwHwVlrRJsogKUnML7MmFdmfppMHm-NhCUcCGlo2DCHs-FHzjoWyjMBtdcNfCpK6hBVC1T9gDRi9yoFGoWqT9e5CY81kOnXKs_0PZyf-sCZXbq3OkB0sawpEKnFELSG1rgAQMONhohTmL6NRDdpM2fuXhnNmoi8bC-Wy1PAP2UKiJ6m1glSknjL4LFxe4biTktNtATSLnIfh_5vFWWPbKqkyNkcl-Zxo25zqvO_aMKkYapvLvWZprwczA1SJAQj6xPrSDkBhOifd6dGhXCaNCZr9vgZkI8-3KFaocB8l6aSP2LQvE0yQ6-v-PuhQwVKUMTIJeA-rq3wIrfHmrbwSSj9vPynZDdcYiLa27SpyBDNkeFgjzj1N1Ilk9XNlelMLDJGsIOIUvor7JTG2yKY6wLApyzATkqcx_qjjXj436Yz-Q0BiNw1_xGf2PfMnPFIxk2dAC2yoZZ8aQqQsuovlmDxz_MxukRlGTHgz-If3d',
                'Content-Type: application/json'
            ],
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        // ✅ Handle API Response
        $responseData = json_decode($response, true);
        print_r($responseData);
        if ($responseData)
         {
            $apiResult = $responseData['Result'] ?: false;  // Default to false
            $apiMessage = $responseData['ResultMessage'] ?: "Receipt saved successfully."; 

            if ($apiResult === true) {
                
                echo "</br>True_ErrorMsgTrue-->".$apiMessage; 
                echo "</br>true_Transation id-->".$InstruNo;
                echo "<br>----------------------------------------";
                
                echo "</br>UPDATE OtherFeesTransaction 
                                SET S_Flag = 1, response = '".mysqli_real_escape_string($conn, $apiMessage)."', API_DT = '$apidataTime' 
                                WHERE PayU_ID = '$InstruNo' AND transationDate = '$InstruDate1' AND leadID = '$leadid'";
                // ✅ Success case: Update S_Flag = 1
                $updateQuery = "UPDATE OtherFeesTransaction 
                                SET S_Flag = 1, response = '".mysqli_real_escape_string($conn, $apiMessage)."', API_DT = '$apidataTime' 
                                WHERE PayU_ID = '$InstruNo' AND transationDate = '$InstruDate1' AND leadID = '$leadid'";
            } else {
                echo "</br>Flase_ErrorMsgFlase-->".$apiMessage;
                echo "</br>Flase_Transation id-->".$InstruNo;
                echo "<br>----------------------------------------";
                
                echo "</br>UPDATE OtherFeesTransaction 
                                SET F_Flag = 2, response = '".mysqli_real_escape_string($conn, $apiMessage)."', API_DT = '$apidataTime' 
                                WHERE PayU_ID = '$InstruNo' AND transationDate = '$InstruDate1' AND leadID = '$leadid'";
                // ✅ Failure case: Update F_Flag = 2
                $updateQuery = "UPDATE OtherFeesTransaction 
                                SET F_Flag = 2, response = '".mysqli_real_escape_string($conn, $apiMessage)."', API_DT = '$apidataTime' 
                                WHERE PayU_ID = '$InstruNo' AND transationDate = '$InstruDate1' AND leadID = '$leadid'";
            }

            // ✅ Execute Update Query
            if (!mysqli_query($conn, $updateQuery)) 
            {
                echo "</br>Error updating record: " . mysqli_error($conn);
            } 
            else 
            {
                echo ($apiResult === true) ? "</br>Flag Updated As Success" : "</br>Flag Updated As Failed";
                //echo "</br>after_Transation id-->".$InstruNo;
            }
         }
        else 
        {
            echo "Error: Invalid API response.";
        }
    }
} else {
    echo "No records found.";
}

$conn->close();
?>
