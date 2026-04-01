<p align="center">MIT-SDE Redirect To HDFC Payment Getway Please Wait Five Minutes</p>
<?php 
include('Crypto.php');
include "php/header.php";
include_once "php/db.php";

 error_reporting(0);
         
       //post value  
    $LeadID = $_POST['merchant_param3'];
    $student_name = $_POST['delivery_name'];
    $Email= $_POST['billing_email'];
    $MobileNo= $_POST['delivery_tel'];
    $Course= $_POST['merchant_param1'];
    $FeesType= $_POST['merchant_param2'];
    $totamt=$_POST['amount'];
	$transactionId=$_POST['order_id'];
	$marchentID=$_POST['merchant_id'];
	$AccessKay=$_POST['accesskay'];
	$workingkey=$_POST['workingkey'];
		
		
		
	  			// insert value in database

                       date_default_timezone_set('Asia/Calcutta');
                       $CurrentDateTime=date('Y-m-d : h:i:s');
	
					  
	
        $orchk = mysqli_num_rows(mysqli_query($connection,"select * from tbl_transactions_details where `order_id`='".$transactionId."'"));

	if($orchk>0)
		  {
		  echo "ERROR: Duplicate transation ID<br>";
		  
		  echo "<a href='https://www.mitsde.com/apply/index.php'>Go Back</a>";
		  die;
		  }
		  else
		  {
		    //  echo "</br>INSERT INTO `temp` (`T_ID`, `T_LeadID`,`student_name`,`email_id`,`phone`, `course`, `T_installmentNo`, `T_A_Amount`, `T_B_Amount`, `tranID`, `P_Start_date`, `P_End_date`, `Status`) VALUES (NULL, '".$LeadID."','".$student_name."','".$Email."','".$MobileNo."', '".$Course."','0', '0', '".$totamt."', '".$transactionId."', '".$CurrentDateTime."', NULL, 'processing')";
              $query= "INSERT INTO `temp` (`T_ID`, `T_LeadID`,`student_name`,`email_id`,`phone`, `course`, `T_installmentNo`, `T_A_Amount`, `T_B_Amount`, `tranID`, `P_Start_date`, `P_End_date`, `Status`) VALUES (NULL, '".$LeadID."','".$student_name."','".$Email."','".$MobileNo."', '".$Course."','0', '0', '".$totamt."', '".$transactionId."', '".$CurrentDateTime."', NULL, 'processing')";
               $storeintemp = mysqli_query($connection,$query) or die('</br>Error, Insert In TEMP');
     
		  }
		  
	
	
	 
	 
	 
	 
	 
	 $merchant_data= $marchentID;
	 $working_key = $workingkey; //Shared by CCAVENUES
	 $access_code = $AccessKay; //Shared by CCAVENUES 
	
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.urlencode($value).'&';
	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

?>
<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

