<p align="center">MIT-SDE Redirect To HDFC Payment Getway Please Wait Five Minutes</p>
<?php 
include('Crypto_new.php');
include('apply/php/db.php');

 error_reporting(0);
         
       //post value  
    if( $_SERVER['REQUEST_METHOD'] == 'POST' )
	{
	
	        if( $_POST['billing_email'] != '' AND $_POST['delivery_tel'] != '' AND $_POST['amount'] ) 
	             {
	                 
	                 $transactionId=$_POST['order_id']; 
                     $student_name = $_POST['delivery_name'];
                     $Email= $_POST['billing_email'];
                     $MobileNo= $_POST['delivery_tel'];
                     $totamt=$_POST['amount'];
	                  
	   // die;
	  
            	}
	         else
	           {
	              echo"some compulsory fields are missing";
	              echo "</br><a href='https://mitsde.com/LoanRequestHandler'>Go Back</a>";
	             die;  
	          }
	          }
	     else
	 {
          $message = 'An <strong>unexpected error</strong> occured. Please Try Again later.';
          echo "</br><a href='https://mitsde.com/LoanRequestHandler'>Go Back</a>";
          die;
	   }


                       date_default_timezone_set('Asia/Calcutta');
                       $CurrentDateTime=date('Y-m-d : h:i:s');
	
					  
	
        $orchk = mysqli_num_rows(mysqli_query($connection,"select * from loan_registration where `lr_order_id`='".$transactionId."'"));

	if($orchk>0)
		  {
		  echo "ERROR: Duplicate Order ID<br>";
		  
		  echo "<a href='https://mitsde.com/LoanRequestHandler'>Go Back</a>";
		  die;
		  }
		  else
		  {
		     //echo "</br>INSERT INTO `temp` (`T_ID`, `student_name`,`email_id`,`phone`, `T_A_Amount`,  `tranID`, `P_Start_date`, `P_End_date`, `Status`) VALUES (NULL, '".$student_name."','".$Email."','".$MobileNo."',  '".$totamt."', '".$transactionId."', '".$CurrentDateTime."', NULL, 'processing')";
		      //die;
               $query= "INSERT INTO `temp` (`T_ID`, `student_name`,`email_id`,`phone`, `T_A_Amount`,  `tranID`, `P_Start_date`, `P_End_date`, `Status`) VALUES (NULL, '".$student_name."','".$Email."','".$MobileNo."',  '".$totamt."', '".$transactionId."', '".$CurrentDateTime."', NULL, 'processing')";
               $storeintemp = mysqli_query($connection,$query) or die('</br>Error, Insert In TEMP');
     
		  }
		  
		
             // END
	
	               /*$merchant_data='193023';
	               $working_key ='FF2048EE9548EAE83BF4797292611691'; //Shared by CCAVENUES
	               $access_code ='AVNW80FJ85AH78WNHA'; //Shared by CCAVENUES  testing*/
	               
	               
	               $merchant_data='2874274';
	               $working_key ='DC043516F6F3B974D64CE6970A15D053'; //Shared by CCAVENUES
	               $access_code ='AVZO14KI67BP49OZPB'; //Shared by CCAVENUES
	
	
	foreach ($_POST as $key => $value)
	{
		$merchant_data.=$key.'='.urlencode($value).'&';
	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

?>
<!--<form method="post" name="redirect" action="https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> test url --> 
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

