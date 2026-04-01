<?php include("pages/connection.php");

echo "</br>leadID---->".$LeadID = $_POST['leadid'];
echo "</br>Student Name-->".$name=$_POST['Name'];
echo "</br>EmailID---->".$EmailID = $_POST['EmailID'];
echo "</br>Phone---->".$Phone = $_POST['Phone'];
echo "</br>CouserName---->".$courseName = $_POST['courseName'];
echo "</br>FeesType---->".$FeesType = $_POST['FeesType'];
echo "</br>Ammount---->".$Amount = $_POST['Amount'];
echo "</br>TransactionID---->".$TransactionID = $_POST['TransactionID'];
echo "</br>BankName---->".$BankName = "NEFT";
echo "</br>TransactionDate---->".$TransactionDate = $_POST['TransactionDate'];
echo "</br>UTR---->".$UTR = $_POST['UTR'];

echo "</br>select * from OtherFeesTransaction where PayU_ID='".$TransactionID."'";
echo "</br>count-->".$search1=mysql_num_rows(mysql_query("select * from OtherFeesTransaction where PayU_ID='".$TransactionID."'"));
       //  ec$getnumro=$mysql_num_rows($search1);
       if($search1!=0)
       {
           echo "---fount";
           
        if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}
          // exit;

           
       }
       else
       {
             echo "Not Fount";
   
       function generatetransactionid()
           {
           $transactionId=date('dmyhis');
           return $transactionId;  
           }
  $transactionId=generatetransactionid();
       
       echo "</br>INSERT INTO `OtherFeesTransaction` (`othr_id`, `leadID`, `name`, `email`, `phone`, `CourseName`, `FeesType`, `amount`, `PayU_ID`, `payment_source`, `transationDate`, `t_process_id`, `UTRNO`, `payment_confirmation_status`) VALUES (NULL, '$LeadID', '$name', '$EmailID', '$Phone', '$courseName', '$FeesType', '$Amount', '$TransactionID', '$BankName', '$TransactionDate', '$transactionId', '$UTR', 'verified')";
             
          //   $addrecord=mysql_query("INSERT INTO `OtherFeesTransaction` (`othr_id`, `leadID`, `name`, `email`, `phone`, `CourseName`, `FeesType`, `amount`, `PayU_ID`, `payment_source`, `transationDate`, `t_process_id`, `UTRNO`, `payment_confirmation_status`) VALUES (NULL, '$LeadID', '$name', '$EmailID', '$Phone', '$courseName', '$FeesType', '$Amount', '$TransactionID', '$BankName', '$TransactionDate', '$transactionId', '$UTR', 'verified')");
           
       }

//die();


?>