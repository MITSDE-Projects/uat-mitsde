<div align="center">
<p>MIT-SDE Redirect To PayU Money Payment Gateway Please Wait Five Minutes</p></div>
<?php

include("php/db.php");
//include 'opendb.php';
//post to veriables

extract($POST);
$memberid = $_POST['memberid'];
$LeadID = $_POST['LeadID'];
$A_Amt = $_POST['A_Amt'];
$B_Amt = $_POST['B_Amt'];
$name = $_POST['firstname']." ".$_POST['lastname'];
$Email= $_POST['email'];
$Course= $_POST['desciplines'];
//$fees_ammount= $_POST['fees_ammount']; //total amount
$totamt = $_POST['amount'];
$paid_ammount= $_POST['amount'];
$instno= $_POST['instno'];
$service_provider = 'payu_paisa';
$transactionId=generatetransactionid();
$ntransactionId = $memberid."".$transactionId;
	

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";

// Merchant key here as provided by Payu
$MERCHANT_KEY = "3mBul3Bz";

// Merchant Salt as provided by Payu
$SALT = "BQagJjLna7";

if($totamt >0)
{
$firstSplitArr = array("name"=>"MITSDE","value"=>$totamt,"merchantId"=>"5953082", "description"=>"Fees", "commission"=>0);
$paymentPartsArr = array($firstSplitArr);
$payuarr123 = array($firstSplitArr);
}

$finalInputArr = array("paymentParts" => $payuarr123);
$Prod_info = json_encode($finalInputArr);


                       date_default_timezone_set('Asia/Calcutta');
                       $CurrentDateTime=date('Y-m-d : h:i:s');
//include("php/db.php");
$query= "INSERT INTO `temp` ( `T_LeadID`, `course`, `T_installmentNo`, `T_A_Amount`, `T_B_Amount`, `tranID`, `P_Start_date`,`P_End_date`, `Status`) VALUES ('".$memberid."','".$Course."', ".$instno.", ".$A_Amt.",".$B_Amt.", '".$ntransactionId."', '".$CurrentDateTime."', NULL, 'Trying')";

$r = mysqli_query($query); 

//echo mysqli_query(); 

//exit; 



$payuarr['key'] = $MERCHANT_KEY;
$payuarr['txnid'] = $ntransactionId;
$payuarr['amount'] = $totamt;
$payuarr['firstname'] = $name ;
$payuarr['email'] = $Email;
$payuarr['phone'] = $phonenumber;//add phone no when in db 
$payuarr['productinfo'] =$Prod_info;
$payuarr['surl'] = 'https://www.mitsde.com/apply/successTEST.php';
$payuarr['furl'] = 'https://www.mitsde.com/apply/successTEST.php';;
$payuarr['service_provider'] = 'payu_paisa';
$payuarr['udf1'] =$memberid;

  //$payuarr['productinfo'] = json_encode(json_decode('{"paymentParts":[{"name":"splitId1","merchantId":"4825050","description":"Exm&Cmaterialfees","value":"'.$A_Amt.'","commission":"'.$B_Amt.'"}]}'));
 
  
                                            
$action = '';

$posted = $payuarr;

$formError = 0;

$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";


$hashVarsSeq = explode('|', $hashSequence);
$hash_string = '';
foreach($hashVarsSeq as $hash_var) {
    $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
    $hash_string .= '|';
}

$hash_string .= $SALT;
//$hash_string = $merchant_key . '|' . $txn_id . '|' . number_format($total, 2, '.', '')  . '|' . $productinfo . '|' . $name . '|' . $email . '|' . 
$hash = strtolower(hash('sha512', $hash_string));
$action = $PAYU_BASE_URL . '/_payment';


?>
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script type="text/javascript">
            function closethisasap() {
                document.forms["redirectpost"].submit();
            }
        </script>
    </head>
    <body onLoad="closethisasap();">
    <form name="redirectpost" method="post" action="<?php echo $action; ?>" />
    
        <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ;?>" />
        
        <input type="hidden" name="productinfo" value="<?php echo htmlspecialchars($Prod_info); ?>" />
        
        <input type="hidden" name="hash" value="<?php echo $hash;?>"/>
        
        <input type="hidden" name="txnid" value="<?php echo $ntransactionId; ?>" />
        
        <input type="hidden" name="service_provider" value="<?php echo $service_provider ; ?>" size="64" />
        
        <input type="hidden" name="amount" value="<?php echo (empty($payuarr['amount'])) ? '' : $payuarr['amount'] ;?>" />
        
        
        <input type="hidden" name="firstname" id="firstname" value="<?php echo (empty($payuarr['firstname'])) ? '' : $payuarr['firstname']; ?>" />
        
        <input  type="hidden" name="email" id="email" value="<?php echo $Email; ?>" />
        
        <input  type="hidden" name="surl" value="<?php echo (empty($payuarr['surl'])) ? '' : $payuarr['surl']; ?>" size="64" />
        
        <input type="hidden" name="furl" value="<?php echo (empty($payuarr['furl'])) ? '' : $payuarr['surl']; ?>" size="64" />
        
        <input type="hidden" name="udf1" value="<?php echo (empty($payuarr['udf1'])) ? '' : $payuarr['udf1']; ?>" />

              
    </form>
	      
    </body>
    </html>
<?php
     
function generatetransactionid()
{
$transactionId=rand(1111,9999);
return $transactionId;  
}


?>