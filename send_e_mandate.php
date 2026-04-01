<p align="center">MIT-SDE Redirect To HDFC Payment Getway Please Wait Five Minutes</p>
<?php 
include('Crypto_new.php');
include('admin/include/config.php');
//include(__DIR__ . '/Crypto_new.php');
//include(__DIR__ . '/admin/include/config.php');
 error_reporting(0);
         
       //post value  
    /*$LeadID = $_POST['merchant_param3'];
    $student_name = $_POST['delivery_name'];
    $Email= $_POST['billing_email'];
    $MobileNo= $_POST['delivery_tel'];
    $Course= $_POST['merchant_param1'];
    $S_ID= $_POST['SpecializationID'];
    $FeesType= $_POST['merchant_param2'];  //feestypeID
    $totamt=$_POST['amount'];
	$transactionId=$_POST['order_id'];
	*/
	 //post value  
    if( $_SERVER['REQUEST_METHOD'] == 'POST' )
	{
	
	        if( $_POST['billing_email'] != '' AND $_POST['delivery_tel'] != '' AND $_POST['amount']!= '' ) 
	             {
	                  $LeadID = $_POST['merchant_param3'];
                      $student_name = $_POST['delivery_name'];
                      $Email= $_POST['billing_email'];
                      $MobileNo= $_POST['delivery_tel'];
                      $Course= $_POST['merchant_param1'];
                      $S_ID= $_POST['SpecializationID'];
                      $FeesType= $_POST['merchant_param2'];  //feestypeID
                      $totamt=$_POST['amount'];
	                  $transactionId=$_POST['order_id'];
	    
	  
            	}
	         else
	           {
	              echo"Some compulsory fields are missing";
	              echo "</br><a href='https://www.mitsde.com/emandate'>Go Back</a>";
	             die;  
	          }
	          }
	     else
	 {
          $message = 'An <strong>unexpected error</strong> occured. Please Try Again later.';
          echo "</br><a href='https://www.mitsde.com/emandate'>Go Back</a>";
          die;
	   }
	
	
	
	

     

                     // insert value in database

                       date_default_timezone_set('Asia/Calcutta');
                       $CurrentDateTime=date('Y-m-d : h:i:s');
	
					  
	
        $orchk = mysql_num_rows(mysql_query("select * from emandate where `MsgId`='".$transactionId."'"));

	if($orchk>0)
		  {
		  echo "ERROR: Duplicate Order ID<br>";
		  
		  echo "<a href='https://www.mitsde.com/emandate'>Go Back</a>";
		  die;
		  }
		  else
		  {
		      //echo "</br>INSERT INTO `temp` (`T_ID`, `T_LeadID`,`student_name`,`email_id`,`phone`, `course`,`SpecializationID`,`fees_type`, `T_installmentNo`, `T_A_Amount`, `T_B_Amount`, `tranID`, `P_Start_date`, `P_End_date`, `Status`) VALUES (NULL, '".$LeadID."','".$student_name."','".$Email."','".$MobileNo."', '".$Course."','".$S_ID."','".$FeesType."', '0', '0', '".$totamt."', '".$transactionId."', '".$CurrentDateTime."', NULL, 'processing')";
		     // die;
               $query= "INSERT INTO `e-mandate` (`em_id`, `CheckSum`, `MsgId`, `Customer_Name`, `Customer_Mobile`, `Customer_EmailId`, `Customer_AccountNo`, `Customer_StartDate`, `Customer_ExpiryDate`, `DebitAmount`, `MaxAmount`, `DebitFrequency`, `InstructedMemberId`, `Short_Code`, `SequenceType`, `Merchant_Category_Code`, `Reference1`, `Reference2`, `Channel`, `UtilCode`, `Filler1`, `Filler2`, `Filler3`, `Filler4`, `Filler5`)
               VALUES (NULL, 'CheckSum', 'MsgId', 'Customer_Name', 'Customer_Mobile', 'Customer_EmailId', 'Customer_AccountNo', '2023-05-16', '2023-05-16', '101', '105', '5', 'InstructedMemberId', 'Short_Code', 'SequenceType', 'Merchant_Category_Code', 'Reference1', 'Reference2', 'Channel', 'UtilCode', '50', '50', '50', '50', '50'))";
               $storeintemp = mysql_query($query) or die(mysql_error);
     
		  }
		  
		
             
	
	

?>





</body>
</html>

