<?php 
ini_set('max_execution_time', '7000');
date_default_timezone_set('Asia/Kolkata');
$apidataTime = date("Y-m-d H:i:s");

// ✅ Correcting DB Connection with special characters in the password
$conn = new mysqli("localhost", "mitsde_onlinepay", "jNq%,6!)0RmK", "mitsde_onlinepayment");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "SELECT * FROM OtherFeesTransactionN WHERE S_Flag<>1 AND email<>'' AND transationDate<>'' AND `PayU_ID`<>'' LIMIT 2";
$sql = "SELECT * FROM OtherFeesTransactionN WHERE  `PayU_ID`='113781987383'";
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
        
        if($ReceiptType=="PRF")
        {
         $FeeHeadID = "";
        }

        /*$InstallmentRule = "";
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
              
        }*/
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
            "TransactionNo" => $InstruNo,
            "ReceiptAmount" => $PaidAmount,
            "ReceiptDate" => $InstruDate1,
            "FeeHeadId" => $FeeHeadID,
            "UserId" => 1, //1 is supper admin and 7 is sanjay
            "CurrencyID" => 1,
            
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
                'Authorization: Bearer 0GriUS0GAC1JCRIGR5JbEFwRvy7lL-C8jHgP4q6Rma3mdfzSKx--fzJRGYvrBZGDY4JEIpZmkivoSUclc1mc-EAhHYYLhuBvAlNMt5_1hAIiAyd9egdVeIqyckel3_OxKx-Z-kr2pVL49pqoKp1MINDvQRpXMItWKUONl8uIKnYIwqo1nopnjlNiwNHmBZBhlAAZOa9ZjHCtd5nIgB2yRkvNUnoNlqKoOesHLiGHzYskwp0CPzS7Y4XPVseslNlmFZ6NcEx7HxX077_yBBUyrLi0lr386gdzesVrIhKAHYMxG4KN-aFStxBM94zWuC4SrdMzJajwdwgxwuc4mGDAITlSLOKKgSNswbWTfiCI95zzbrkFiJELgjHrFgrWm0dA835LFObSB3ZHGRDLeW0Fw0qPogLvZQIicBMuaCsF4nrzpEDYBkbf2a-vuYSYhRGT3kSs7A2Cn1t7lIa9vPjkVD5ZhECrKx2BKarXSFbGWNo1zVHx_VSfclFSRF5ylRkl',
                'Content-Type: application/json'
            ],
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        // ✅ Handle API Response
        $responseData = json_decode($response, true);
        if ($responseData)
         {
            $apiResult = $responseData['Result'] ?: false;  // Default to false
            $apiMessage = $responseData['ResultMessage']?: "Receipt saved successfully.";

            if ($apiResult === true) {
                
                echo "</br>True_ErrorMsgTrue-->".$apiMessage; 
                echo "</br>true_Transation id-->".$InstruNo;
                echo "<br>----------------------------------------";
                
                echo "</br>UPDATE OtherFeesTransactionN 
                                SET S_Flag = 1, response = '".mysqli_real_escape_string($conn, $apiMessage)."', API_DT = '$apidataTime' 
                                WHERE PayU_ID = '$InstruNo' AND transationDate = '$InstruDate1' AND leadID = '$leadid'";
                // ✅ Success case: Update S_Flag = 1
                $updateQuery = "UPDATE OtherFeesTransactionN 
                                SET S_Flag = 1, response = '".mysqli_real_escape_string($conn, $apiMessage)."', API_DT = '$apidataTime' 
                                WHERE PayU_ID = '$InstruNo' AND transationDate = '$InstruDate1' AND leadID = '$leadid'";
            } 
            else 
            {
                echo "</br>Flase_ErrorMsgFlase-->".$apiMessage;
                echo "</br>Flase_Transation id-->".$InstruNo;
                echo "<br>----------------------------------------";
                
                echo "</br>UPDATE OtherFeesTransactionN 
                                SET F_Flag = 2, response = '".mysqli_real_escape_string($conn, $apiMessage)."', API_DT = '$apidataTime' 
                                WHERE PayU_ID = '$InstruNo' AND transationDate = '$InstruDate1' AND leadID = '$leadid'";
                // ✅ Failure case: Update F_Flag = 2
                $updateQuery = "UPDATE OtherFeesTransactionN 
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
