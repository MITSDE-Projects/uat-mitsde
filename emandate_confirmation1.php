<?php

// ----------------------------------------------------------------------GET Values-----------------------------

echo "</br>Customer_Name--->".$Customer_Name=$_POST['Customer_Name'];
echo "</br>Customer_Mobile--->".$Customer_Mobilet=$_POST['Customer_Mobile'];
echo "</br>Customer_EmailId--->".$Customer_EmailId=$_POST['Customer_EmailId'];
echo "</br>Customer_AccountNo--->".$Customer_AccountNo=$_POST['Customer_AccountNo'];
echo "</br>Customer_StartDate--->".$Customer_StartDate=$_POST['Customer_StartDate'];
echo "</br>Customer_ExpiryDate--->".$Customer_ExpiryDate=$_POST['Customer_ExpiryDate'];
echo "</br>Customer_DebitAmount--->".$Customer_DebitAmount=$_POST['Customer_DebitAmount'];
echo "</br>Customer_MaxAmount--->".$Customer_MaxAmount=$_POST['Customer_MaxAmount'];
echo "</br>Customer_DebitFrequency--->".$Customer_DebitFrequency=$_POST['Customer_DebitFrequency'];
echo "</br>Customer_InstructedMemberId--->".$Customer_InstructedMemberId=$_POST['Customer_InstructedMemberId'];
echo "</br>Short_Code--->".$Short_Code=$_POST['Short_Code'];
echo "</br>Customer_SequenceType--->".$Customer_SequenceType=$_POST['Customer_SequenceType']; //RCUR
echo "</br>Merchant_Category_Code--->".$Merchant_Category_Code=$_POST['Merchant_Category_Code'];
$Customer_Reference1=$_POST['Customer_Reference1'];  // not mendetory
$Customer_Reference2=$_POST['Customer_Reference2']; // not mendetory
echo "</br>Channel--->".$Channel=$_POST['Channel'];  // channel
echo "</br>UtilCode--->".$UtilCode=$_POST['UtilCode']; // Provided by HDFC


// Concatenate attributes with delimiter
$data = $Customer_AccountNo . "|" . $Customer_StartDate . "|" . $Customer_ExpiryDate . "|" . $Customer_DebitAmount . "|" . $Customer_MaxAmount;

// Generate checksum using SHA-256
$checksum = hash('sha256', $data);



echo "</br>Checksum---->: " . $checksum;
echo "</br>---------------------------------------------------------------------------------------------------";
//------------------------------------------------------------------------User Name------------------------------
if(isset($Customer_Name))
{

$inputText = $Customer_Name;

// Encryption key (should be securely stored and kept secret)
$key = 'k2hLr4X0ozNyZByj5DT66edtCEee1x+6';
// Initialization vector (IV)
$iv = openssl_random_pseudo_bytes(16);
// Encrypt the input text using AES 256 encryption
$encryptedText = openssl_encrypt($inputText, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
// Convert the encrypted text and IV to base64 for safe storage
$encryptedTextBase64 = base64_encode($encryptedText);
$ivBase64 = base64_encode($iv);
$encryptedText = base64_decode($encryptedTextBase64);
$iv = base64_decode($ivBase64);
// Decrypt the text using AES 256 decryption
echo "</br>decripted_Value-->".$decryptedText = openssl_decrypt($encryptedText, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
// Output the decrypted text
$Customer_Name_decrypted=$decryptedText;
$Customer_Name_encryptedText=$encryptedText;

}
echo "</br>encrypted_Customer_name-->".$cust_name=$Customer_Name_encryptedText;  // encripted value
$cust_name_D=$Customer_Name_decrypted; // decode value

//------------------------------------------------------------------------Email ID------------------------------
if(isset($Customer_EmailId))
{

echo "</br>mail id-->".$inputText = $Customer_EmailId;
// Encryption key (should be securely stored and kept secret)
$key = 'k2hLr4X0ozNyZByj5DT66edtCEee1x+6';
// Initialization vector (IV)
$iv = openssl_random_pseudo_bytes(16);
// Encrypt the input text using AES 256 encryption
$encryptedText = openssl_encrypt($inputText, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
// Convert the encrypted text and IV to base64 for safe storage
$encryptedTextBase64 = base64_encode($encryptedText);
$ivBase64 = base64_encode($iv);
$encryptedText = base64_decode($encryptedTextBase64);
$iv = base64_decode($ivBase64);
// Decrypt the text using AES 256 decryption
echo "</br>decripted_Value-->".$decryptedText = openssl_decrypt($encryptedText, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
// Output the decrypted text

$Customer_EmailId_decrypted=$decryptedText;
$Customer_EmailId_encryptedText=$encryptedText;


}
echo "</br>encrypted_Mail_ID-->".$email=$Customer_EmailId_encryptedText;
$email_D=$Customer_EmailId_decrypted;
//------------------------------------------------------------------------Mobile No------------------------------
if(isset($Customer_Mobilet))
{

$inputText = $Customer_Mobilet;
// Encryption key (should be securely stored and kept secret)
$key = 'k2hLr4X0ozNyZByj5DT66edtCEee1x+6';
// Initialization vector (IV)
$iv = openssl_random_pseudo_bytes(16);
// Encrypt the input text using AES 256 encryption
$encryptedText = openssl_encrypt($inputText, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
// Convert the encrypted text and IV to base64 for safe storage
$encryptedTextBase64 = base64_encode($encryptedText);
$ivBase64 = base64_encode($iv);
$encryptedText = base64_decode($encryptedTextBase64);
$iv = base64_decode($ivBase64);
// Decrypt the text using AES 256 decryption
echo "</br>decripted_Value-->".$decryptedText = openssl_decrypt($encryptedText, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
// Output the decrypted text


$Customer_Mobile_encryptedText=$encryptedText;
$Customer_Mobile_decrypted=$decryptedText;


}
echo "</br>encrypted_Mobile_no-->".$Mobile=$Customer_Mobile_encryptedText;    // encripted value
$Mobile_D=$Customer_Mobile_decrypted;   // decoted value

//------------------------------------------------------------------------Customer_Account_No------------------------------
if(isset($Customer_AccountNo))
{



$inputText = $Customer_AccountNo;
// Encryption key (should be securely stored and kept secret)
$key = 'k2hLr4X0ozNyZByj5DT66edtCEee1x+6';
// Initialization vector (IV)
$iv = openssl_random_pseudo_bytes(16);
// Encrypt the input text using AES 256 encryption
$encryptedText = openssl_encrypt($inputText, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
// Convert the encrypted text and IV to base64 for safe storage
$encryptedTextBase64 = base64_encode($encryptedText);
$ivBase64 = base64_encode($iv);
$encryptedText = base64_decode($encryptedTextBase64);
$iv = base64_decode($ivBase64);
// Decrypt the text using AES 256 decryption
echo "</br>decripted_Value-->".$decryptedText = openssl_decrypt($encryptedText, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
// Output the decrypted text


$Customer_account_encryptedText=$encryptedText;
$Customer_account_decrypted=$decryptedText;

}
echo "</br>encripted-Customer_AccountNo->".$Customer_AccountNo=$Customer_account_encryptedText;    // encripted value
$Customer_AccountNo_D=$Customer_account_decrypted;   // decoted value
//------------------------------------------------------------------------shorcode------------------------------
$short_code="MSDE";
if($short_code=="MSDE")
{
$inputText = "MSDE";
// Encryption key (should be securely stored and kept secret)
$key = 'k2hLr4X0ozNyZByj5DT66edtCEee1x+6';
// Initialization vector (IV)
$iv = openssl_random_pseudo_bytes(16);
// Encrypt the input text using AES 256 encryption
$encryptedText = openssl_encrypt($inputText, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
// Convert the encrypted text and IV to base64 for safe storage
$encryptedTextBase64 = base64_encode($encryptedText);
$ivBase64 = base64_encode($iv);
$encryptedText = base64_decode($encryptedTextBase64);
$iv = base64_decode($ivBase64);
// Decrypt the text using AES 256 decryption
echo "</br>decripted_Value-->".$decryptedText = openssl_decrypt($encryptedText, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
// Output the decrypted text
echo "</br>encrypted_Short_code-->".$MSDE=$encryptedText;
}
//------------------------------------------------------------------------UtilCode------------------------------NACH00000000000382
$UCode="NACH00000000000382";
if($UCode=="NACH00000000000382")
{
$inputText = "NACH00000000000382";
// Encryption key (should be securely stored and kept secret)
$key = 'k2hLr4X0ozNyZByj5DT66edtCEee1x+6';
// Initialization vector (IV)
$iv = openssl_random_pseudo_bytes(16);
// Encrypt the input text using AES 256 encryption
$encryptedText = openssl_encrypt($inputText, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
// Convert the encrypted text and IV to base64 for safe storage
$encryptedTextBase64 = base64_encode($encryptedText);
$ivBase64 = base64_encode($iv);
$encryptedText = base64_decode($encryptedTextBase64);
$iv = base64_decode($ivBase64);
// Decrypt the text using AES 256 decryption
echo "</br>decripted_Value-->".$decryptedText = openssl_decrypt($encryptedText, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
// Output the decrypted text


echo "</br>encrypted_Utilcode-->".$UtilCode=$encryptedText;
}

?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
<!-- Meta Tags -->
<html dir="ltr" lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>

<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />

<!-- Page Title -->
<title>MITSDE e-mandate</title>

<!-- Favicon and Touch Icons -->
<link href="media/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">
	
	<!-- Animation Style -->
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/animate.css"> -->
	
  
</head> 
<body class="header-sticky">
    <div class="boxed">
        <?php include"header.php"; ?><!-- /.header -->
<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
</script> 
       
            <section class="flat-row pad-top-100">
			
                <div class="container">
         <div class="row">
           <div class="col-md-6 col-md-push-3">
            <div class="border-5px  p-30 mb-0" style="border-color:#710000;">
              <h3 class="text-theme-colored mt-0 pt-5">MITSDE e-mandate</h3>
			  
              <hr>
<form action="https://emandateut.hdfcbank.com/Emandate.aspx" name="emandate" id="emandate"  method="post">

 
 <div class="col-sm-6"> 
   <div class="form-group">
       checksum <input type="text" class="form-control" name="CheckSum" readonly  id="CheckSum" value="<?php echo $checksum;?>">
       MsgId <input type="text" class="form-control" name="MsgId" readonly  id="MsgId" value="<?php echo (rand() . "<br>");?>">
      Customer_Name<input type="text" class="form-control" name="DCustomer_Name" readonly  id="DCustomer_Name"  value="<?php if(isset($cust_name_D)){ echo $cust_name_D; } ?>" placeholder="Customer_Name">
     Customer_Name<input type="text" name="Customer_Name"  id="Customer_Name"  value="<?php if(isset($cust_name)){ echo $cust_name; } ?>">
     </div>
 </div>
                             
							  
  <div class="col-sm-6">
       <div class="form-group">Email-Id
           <input type="text" class="form-control" name="DCustomer_EmailId" readonly  id="DCustomer_EmailId"  value="<?php if(isset($email_D)){ echo $email_D; } ?>" placeholder="Customer_EmailId">
           Email-Id<input type="text" name="Customer_EmailId"  id="Customer_EmailId"  value="<?php if(isset($email)){ echo $email; } ?>">
       </div>
       </div>
  
   <div class="col-sm-6">
       <div class="form-group">Customer_Mobile
           <input type="text" class="form-control" name="DCustomer_Mobile" readonly id="DCustomer_Mobile"  value="<?php if(isset($Mobile_D)){ echo $Mobile_D; } ?>" placeholder="Customer_Mobile">
          Customer_Mobile <input type="text" class="form-control" name="Customer_Mobile"  id="Customer_Mobile"  value="<?php if(isset($Mobile)){ echo $Mobile; } ?>" >
           </div>
           </div>
   
  
 
			
			<div class="col-sm-6">
			    <div class="form-group">Customer_AccountNo
			        <input type="text" class="form-control" name="DCustomer_AccountNo" readonly  id="DCustomer_AccountNo" value="<?php if(isset($Customer_AccountNo_D)){ echo $Customer_AccountNo_D; } ?>" placeholder="Account No" title="Customer’s account number.">
			       Customer_AccountNo <input type="text" class="form-control" name="Customer_AccountNo"  id="Customer_AccountNo"  value="<?php if(isset($Customer_AccountNo)){ echo $Customer_AccountNo; } ?>" title="Customer’s account number.">
		    	</div>
			</div>
			
			
		
			<div class="col-sm-6">
			    <div class="form-group">Start Date
			        <input type="date" class="form-control" name="Customer_StartDate" readonly id="Customer_StartDate" value="<?php echo $Customer_StartDate;?>" >
		    	</div>
			</div>
			<div class="col-sm-6">
			    <div class="form-group">End Date
			        <input type="date" class="form-control" name="Customer_ExpiryDate" readonly id="Customer_ExpiryDate" value="<?php echo $Customer_ExpiryDate;?>">
		    	</div>
			</div>
		   <div class="col-sm-6">
			    <div class="form-group">Debit Amount
			        <input type="text" class="form-control" readonly name="Customer_DebitAmount"  id="Customer_DebitAmount" placeholder="Debit Amount" value="<?php echo $Customer_DebitAmount;?>"   title="Fixed amount to be deducted. ">
		    	</div>
			</div>
			 <div class="col-sm-6">
			    <div class="form-group">Max Amount
			        <input type="text" class="form-control" readonly name="Customer_MaxAmount"  id="Customer_MaxAmount" placeholder="Max Amount"  value="<?php echo $Customer_MaxAmount;?>" title="Max amount to be deducted (formandate) should mentioned here.">
		    	</div>
			</div>
			
			<div class="col-sm-6">
			    <div class="form-group">Customer_DebitFrequency
			        <input type="text" class="form-control" readonly name="Customer_DebitFrequency"  id="Customer_DebitFrequency" value="<?php echo $Customer_DebitFrequency;?>" >
		    	</div>
			</div>
			
			<div class="col-sm-6">
			    <div class="form-group">Customer_InstructedMemberId
			        <input type="text" class="form-control" name="Customer_InstructedMemberId"  id="Customer_InstructedMemberId" value="<?php echo $Customer_InstructedMemberId; ?>" placeholder="Bank’s IFSC code" >
			       short code <input type="text" class="form-control" name="Short_Code"  id="Short_Code" value="<?php echo $MSDE;?>" placeholder="Short_Code" >
		    	</div>
			</div>
			
		
			
			<div class="col-sm-6">
			    <div class="form-group">Customer_SequenceType
			        <input type="text" class="form-control" name="Customer_SequenceType"  id="Customer_SequenceType" value="RCUR" >
		    	</div>
			</div>
			
			<div class="col-sm-6">
			    <div class="form-group">Merchant_Category_Code
			        <input type="text" class="form-control" name="Merchant_Category_Code"  id="Merchant_Category_Code" value="U099" >
		    	</div>
			</div>
			
			<div class="col-sm-6">
			    <div class="form-group">Customer_Reference1
			        <input type="text" class="form-control" name="Customer_Reference1"  id="Customer_Reference1" value="" placeholder="Customer_Reference1" >
		    	</div>
			</div>
			
			<div class="col-sm-6">
			    <div class="form-group">Customer_Reference2
			        <input type="text" class="form-control" name="Customer_Reference2"  id="Customer_Reference2" value="" placeholder="Customer Reference" >
		    	</div>
			</div>
			
			<div class="col-sm-12">
			    <div class="form-group">
			        
			       <label for="html">Select Channel</label><br>
			       <!--<input type="radio" class="form-control" name="Channel"  id="Channel" value="Debit"> Debit
			       <input type="radio" class="form-control" name="Channel"  id="Channel" value="Net"> Net-->
			       
			       <input type="radio" id="Channel" name="Channel" <?php if($Channel=="Debit"){?>checked<?}?>>
                  <label for="html">Debit</label><br>
                   <input type="radio" id="Channel" name="Channel" <?php if($Channel=="Net"){?>checked<?}?>>
                    <label for="css">Net</label><br>
			       
		    	</div>
		    	utilcode<input type="text" class="form-control" name="UtilCode"  id="UtilCode" value="<?php echo $UtilCode?>" placeholder="UtilCode" >
			</div>
			
			
			
				
			        <input type="hidden" class="form-control" name="Filler1"  id="Filler1"   value="">
			        <input type="hidden" class="form-control" name="Filler2"  id="Filler2" value="">
		    	    <input type="hidden" class="form-control" name="Filler3"  id="Filler3"  value="">
			        <input type="hidden" class="form-control" name="Filler4"  id="Filler4"  value="">
			        <input type="hidden" class="form-control" name="Filler5"  id="Filler5"  value="S"> <!--S for saving account----->
			         <input type="hidden" class="form-control" name="Filler6"  id="Filler6"  value="">
			         <input type="hidden" class="form-control" name="Filler7"  id="Filler7" value="">
			         <input type="hidden" class="form-control" name="Filler8"  id="Filler8"  value="">
			         <input type="hidden" class="form-control" name="Filler9"  id="Filler9"  value="">
			         <input type="hidden" class="form-control" name="Filler10"  id="Filler10"  value="">
			
			           
		      <div class="col-sm-6">
			    <div class="form-group">
			         <button type="submit" class="btn btn-primary">Submit e-mendate</button>
		    	</div>
			</div>
			
				  </form>
              <!-- Job Form Validation-->
              
            </div>
           
       
      </div>
            </div>
	  
                </div><!-- /.container -->   
            </section>

            


            


       <?php //include"footer.php";?>

        <!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script> 
    <script type="text/javascript" src="javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="javascript/parallax.js"></script>
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
     <script type="text/javascript" src="javascript/main.js"></script>
</body>
</html>