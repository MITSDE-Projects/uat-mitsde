<p align="center"> >>>>>>>>> &nbsp; <strong>MIT-SDE Redirect To EaseBuzz Payment Getway Please Wait Five Minutes</strong> &nbsp; >>>>>>>>> </p>
<?php
include("admin/include/config.php");


$LeadID=$_POST['LeadID'];
$student_name=$_POST['StudentName'];
$Email=$_POST['EmailID'];
$MobileNo=$_POST['MobileNo'];
$Course=$_POST['Course'];
$FeesType=$_POST['FeesType'];  // fees type id
$SpecializationID=$_POST['SpecializationID'];  // fees type id
$totamt=$_POST['OtherFee'];
$transactionId=$_POST['orderid'];


                  //echo "</br>SELECT * FROM `feehead_erp` WHERE `description` = '".$FeesType."'";
		          $GetFeeType = mysql_query("SELECT * FROM `feeshead_new_erp` WHERE `description` = '".$FeesType."'");
	              $getname=mysql_fetch_array($GetFeeType);
	              $feeheadid=$getname['FeeHeadId']; // feeheadid


						
						//----------------------END--------------------------

$MERCHANT_KEY = "8LFE1SCTO7";
$SALT = "VHV44GBVSB";
$BASE_URL = "https://pay.easebuzz.in/";

$action = '';

$posted['key']=$MERCHANT_KEY;
$posted['amount']=$totamt;
$posted['firstname']=$student_name;
$posted['email']=$Email;
$posted['phone']=$MobileNo;
$posted['productinfo']=$Course;
$posted['surl']="https://www.mitsde.com/EasebuzzPaymentResponseN.php";
$posted['furl']="https://www.mitsde.com/EasebuzzPaymentResponseN.php";
$posted['udf1']=$LeadID;
$posted['udf2']=$Course;
$posted['udf3']=$FeesType;
$posted['udf4']=$feeheadid;
$posted['udf5']=$transactionId;


 //print_r($posted);

if(!empty($_POST)) {
  foreach($posted as $key => $value) {
    $posted[$key] = trim(htmlentities($value, ENT_QUOTES));
  }
}

$formError = 0;

$posted['txnid']=uniqid();

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
  
} else {
  $txnid = $posted['txnid'];
}

$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";


if(empty($posted['hash']) && sizeof($posted) > 0) {
	
	
                           date_default_timezone_set('Asia/Calcutta');
                       $CurrentDateTime=date('Y-m-d : h:i:s');
	
					  
	
        $orchk = mysql_num_rows(mysql_query("select * from OtherFeesTransaction where `t_process_id`='".$transactionId."'"));

	if($orchk>0)
		  {
		  echo "ERROR: Duplicate Order ID<br>";
		  
		  echo "<a href='https://mitsde.com/OtherFeesPaymentByEaseBuzzN.php'>Go Back</a>";
		 
		  }
		  else
		  {
		//	  echo "</br>INSERT INTO `temp` (`T_ID`, `T_LeadID`,`student_name`,`email_id`,`phone`, `course`,`SpecializationID`,`fees_type`, `T_installmentNo`, `T_A_Amount`, `T_B_Amount`, `tranID`, `P_Start_date`, `P_End_date`, `Status`) VALUES (NULL, '".$LeadID."','".$student_name."','".$Email."','".$MobileNo."', '".$Course."', '".$SpecializationID."', '".$FeesType."', '0', '0', '".$totamt."', '".$transactionId."', '".$CurrentDateTime."', NULL, 'processing')";
	
              $query= "INSERT INTO `temp` (`T_ID`, `T_LeadID`,`student_name`,`email_id`,`phone`, `course`,`SpecializationID`,`fees_type`, `T_installmentNo`, `T_A_Amount`, `T_B_Amount`, `tranID`, `P_Start_date`, `P_End_date`, `Status`) VALUES (NULL, '".$LeadID."','".$student_name."','".$Email."','".$MobileNo."', '".$Course."', '".$SpecializationID."','".$FeesType."', '0', '0', '".$totamt."', '".$transactionId."', '".$CurrentDateTime."', NULL, 'processing')";
			  
               $storeintemp = mysql_query($query) or die('</br>Error, Insert In TEMP');
    
		  }
		  
  
 // print_r($posted);
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
  ) {
   
    $formError = 1;
  }
  else {
  
           
    $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';
    foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }
	
    $hash_string .= $SALT;
	//echo $hash_string;
    $hash = strtolower(hash('sha512', $hash_string));
	 
	//$split=array("mitdeexam"=>$A_Amt,"mitdecourse"=>$B_Amt);
    //$posted['split_payments']=json_encode($split);
	
    $action = $BASE_URL . '/pay/secure';
  }
} elseif(!empty($posted['hash'])) {

  $hash = $posted['hash']; 
  $action = $BASE_URL . '/pay/secure';
}

?>

<html>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitForm() {
      if(hash == '') {
        return;
      }
      var easebuzzForm = document.forms.easebuzzForm;
     easebuzzForm.submit();
    }
  </script>
  <body onLoad="submitForm();" >
    <!--<h2>Easebuzz Form</h2>-->
    <br/>
    <?php if($formError) { ?>
     <!-- <span style="color:red">Please fill all mandatory fields.</span>--->
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="easebuzzForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <table>
        <tr>
          <!--<td><b>Mandatory Parameters</b></td>-->
        </tr>
        <tr>
          <!--<td>Amount: </td>-->
          <td><input type="hidden"  name="amount" value="<?php echo $totamt; ?>" /></td>
          <!--<td>First Name: </td>-->
          <td><input type="hidden"  name="firstname" id="firstname" value="<?php echo $student_name; ?>" /></td>
        </tr>
        <tr>
         <!-- <td>Email: </td>-->
          <td><input type="hidden"  name="email" id="email" value="<?php echo $Email; ?>" /></td>
          <!--<td>Phone: </td>-->
          <td><input type="hidden" name="phone" value="<?php echo $MobileNo; ?>" /></td>
        </tr>
        <tr>
          <!--<td>Product Info: </td>-->
          <td colspan="3"><input type="hidden"  name="productinfo" value="<?php echo $Course; ?>" size="64" /></td>
        </tr>
        <tr>
          <!--<td>Success URI: </td>-->
          <td colspan="3"><input type="hidden"  name="surl" value="https://mitsde.com/EasebuzzPaymentResponseN.php" size="64" /></td>
        </tr>
        <tr>
         <!-- <td>Failure URI: </td>-->
          <td colspan="3"><input type="hidden"  name="furl" value="https://mitsde.com/EasebuzzPaymentResponseN.php" size="64" /></td>
        </tr>
        <tr>
          <!--<td><b>Optional Parameters</b></td>-->
        </tr>

        <tr>
         <!-- <td>UDF1: </td>-->
          <td><input type="hidden"  name="udf1" value="<?php echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>" /></td>
         <!-- <td>UDF2: </td>-->
          <td><input type="hidden"  name="udf2" value="<?php echo $posted['udf2'] ; ?>" /></td>
        </tr>
        <tr>
          <!--<td>UDF3: </td>-->
          <td><input type="hidden"  name="udf3" value="<?php echo (empty($posted['udf3'])) ? '' : $posted['udf3']; ?>" /></td>
         <!-- <td>UDF4: </td>-->
          <td><input type="hidden"  name="udf4" value="<?php echo (empty($posted['udf4'])) ? '' : $posted['udf4']; ?>" /></td>
        </tr>
        <tr>
         <!-- <td>UDF5: </td>-->
          <td><input type="hidden" name="udf5" value="<?php echo (empty($posted['udf5'])) ? '' : $posted['udf5']; ?>" /></td>
        </tr>
	<tr>
        <!--  <td>SubMerchant Id: </td>-->
          <td><input type="hidden" name="sub_merchant_id" value="<?php echo (empty($posted['sub_merchant_id'])) ? '' : $posted['sub_merchant_id']; ?>" /></td>
        </tr>
	<tr>
          <!--<td>Split Payments: </td>-->
          <!--<td><input type="hidden" name="split_payments" value='<?php //echo $posted['split_payments']; ?>'/></td>-->
        </tr>
        <tr>
          <?php if(!$hash) { ?>
            <td colspan="4"><input type="submit" value="Submit" /></td>
          <?php } ?>
        </tr>
      </table>
    </form>

  </body>
</html>
