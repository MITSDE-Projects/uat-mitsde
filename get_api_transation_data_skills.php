<?php
include_once "administrator/include/connection.php";


$url="https://mitskillsindia.edu.in/apply/send_transation_data.php";
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($curl, CURLOPT_GET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$rusult=curl_exec($ch);
curl_close($ch);



$result= json_decode($rusult,true);
//var_dump($rusult);
//echo '<pre>';
//print_r($result);

if ($result['status'] == 1) {
    $data = $result['data'];
    
    foreach ($data as $record) {
     
       // echo "</br>SELECT * FROM `student` WHERE `email` ='".$record['email']."' AND `phonenumber`= '".$record['phonenumber']."' AND `institute`= 'SDE' ";
       
          $search="SELECT * FROM `tbl_transactions_details` WHERE `transaction_id` ='".$record['transaction_id']."' AND `memberID`= '".$record['memberID']."'";
          
          $result = mysqli_query($conn, $search);
          
          if (mysqli_num_rows($result) > 0) 
          {
              
             echo "</br>Duplicate Record-->".$record['transaction_id'];
          }
           else 
          {
              $insert="INSERT INTO `tbl_transactions_details` (`id`, `memberID`, `ERPLeadID`, `Name`,
              `Mobile_no`, `email`, `courseid`, `SpecializationID`, `FeeHeadID`, `fees_type`, `ins_1_amt`,
              `ins_2_amt`, `ins_3_amt`, `ins_1_date`, `ins_2_date`, `ins_3_date`, `ClearedDate`, `pay_type`,
              `payment_source`, `PayerBankID`, `transaction_id`, `order_id`, `UTR_number`, `payment_verification`, 
              `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, 
              `UserId`, `CurrencyID`, `S_Flag`, `response`, `F_Flag`, `loanStatus`, `LoanProvider`, `API_DT`) 
              VALUES (NULL, '".$record['memberID']."', NULL, '".$record['Name']."', '".$record['Mobile_no']."', '".$record['email']."', '".$record['courseid']."',
              '".$record['SpecializationID']."', '60', 'InstallmentI', '".$record['ins_1_amt']."', '0', '0', '".$record['ins_1_date']."', '0000-00-00', '0000-00-00', '".$record['ClearedDate']."', 'online', 'PayPhi', '1', 
              '".$record['transaction_id']."', '".$record['order_id']."', NULL, 'Not_Verified', '16', '1', '50100267576292', 'Pune', 'Mayur Colony Kothrud Pune name',
              'Mayur Colony Kothrud Pune address', 'HDFC0000149', NULL, NULL, '0', 'Skills', NULL, NULL, '',
              '".$record['SpecializationID']."')";
        if (mysqli_query($conn, $insert)) 
        {
         echo "</br>New record created successfully-->".$record['transaction_id'];;
         
         } 
          else 
         {
          echo "Error: " . $insert . "<br>" . mysqli_error($conn);
              
          }
       }
    }
 mysqli_close($conn);


    }
 else {
    echo "Status is not 1. Data may be empty or have an error.";
}
?>