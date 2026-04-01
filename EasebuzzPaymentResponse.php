<?php require_once('PHPMailer/class.phpmailer.php');
include("PHPMailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
//include("class.smtp.php"); 
//print_r($_POST);
//die();

$leadid=$_POST['udf1'];
$Course=$_POST['udf2'];
$FeesType=$_POST['udf3'];
$FeesTypeID=$_POST['udf4'];
$oderID=$_POST['udf5'];
$phone=$_POST['phone'];
$firstname=$_POST['firstname'];
$net_amount_debit=$_POST['net_amount_debit'];
$payment_source=$_POST['payment_source'];
$status=$_POST['status'];
$email=$_POST['email'];

$getstudentinfo1=mysql_query("SELECT * FROM `feehead_erp` WHERE description='".$FeesType."'"); 
                   $row1=mysql_fetch_array($getstudentinfo1);
                   $row1['feedheadcode'];

    $SALT='VHV44GBVSB';
    $result = response( $_POST, $SALT );
    //print_r($result);
    //print_r($_POST);
	
//die();

    function response($params, $salt) {
        if (!is_array($params))
            throw new Exception('response params is empty');

        if (empty($salt))
            throw new Exception('Salt is empty');

        if (empty($params['status']))
            throw new Exception('Status is empty');

        if (reverse_hash($_POST,$salt,$_POST['status']) === $_POST['hash']) {
            switch ($_POST['status'])
			 {
                case 'success' :
                    
						
						//  echo "</br>select * from temp where T_LeadID='".$leadid."' and tranID='".$oderID."'";
		  
		   $temp = mysql_query("select * from temp where T_LeadID='".$_POST['udf1']."' and tranID='".$_POST['udf5']."'");
	          $temp1=mysql_fetch_array($temp);
		
		      $temp1['T_LeadID']; 
		      $temp1['tranID']; // order id
		      $temp1['student_name'];
		      $temp1['email_id'];
		      $temp1['phone'];
	          $temp1['course'];
	          $temp1['SpecializationID'];
		      $temp1['fees_type'];
		      $temp1['T_B_Amount'];
		   
					// echo "</br>select * from OtherFeesTransaction where `PayU_ID`='".$_POST['easepayid']."'";
					// echo "</br>select * from OtherFeesTransaction where `t_process_id`='".$_POST['udf5']."'";
					 
			$trchk = mysql_num_rows(mysql_query("select * from OtherFeesTransaction where `PayU_ID`='".$_POST['easepayid']."'"));
			$orchk = mysql_num_rows(mysql_query("select * from OtherFeesTransaction where `t_process_id`='".$_POST['udf5']."'"));
			
						
		if($orchk>0 || $trchk >0 )
		  {
		  echo "</br>ERROR: Duplicate Entry<br>";
		  }
		  elseif($temp1['tranID'] !=$_POST['udf5'] || $temp1['T_B_Amount'] != $_POST['amount'] )
		     {
			   echo "ERROR: Invalid Response (orderID or Amount not matching)<br>";
		 
		     }
		     else
		     {
		         
		         
		      if($FeesTypeID=='60' || $FeesTypeID=="61")
	              {
	                  $ReceiptType="CF";
	              }
	              else
	              {
	                  $ReceiptType="OC";  
	              }
				 
		            $tdate= date("Y/m/d");
	// echo "</br>INSERT INTO `OtherFeesTransaction` (`othr_id`, `leadID`, `name`, `email`, `phone`, `CourseName`,`SpecializationID`, `FeeHeadID`, `FeesType`,`ReceiptType`, `amount`, `PayU_ID`, `payment_source`,`PayerBankID`, `transationDate`, `t_process_id`, `UTRNO`, `payment_confirmation_status`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `S_Flag`, `response`, `F_Flag`) VALUES (NULL, '".$_POST['udf1']."', '".$_POST['firstname']."', '".$_POST['email']."','".$_POST['phone']."', '".$_POST['udf2']."', '".$temp1['SpecializationID']."', '".$_POST['udf4']."', '".$temp1['fees_type']."','".$ReceiptType."','".$_POST['amount']."','".$_POST['easepayid']."','EaseBuzz','113', '".$tdate."','".$_POST['udf5']."', NULL, 'Not Verify', '16', '91', '15000200013178', 'Pune', 'Kothrud Pune', 'Kothrud Pune Maharashtra India', 'FDRL0001500', '0', NULL, '1')";
	//die;
$insertO_tras= "INSERT INTO `OtherFeesTransaction` (`othr_id`, `leadID`, `name`, `email`, `phone`, `CourseName`,`SpecializationID`, `FeeHeadID`, `FeesType`,`ReceiptType`, `amount`, `PayU_ID`, `payment_source`,`PayerBankID`, `transationDate`, `t_process_id`, `UTRNO`, `payment_confirmation_status`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `S_Flag`, `response`, `F_Flag`) VALUES (NULL, '".$_POST['udf1']."', '".$_POST['firstname']."', '".$_POST['email']."','".$_POST['phone']."', '".$_POST['udf2']."', '".$temp1['SpecializationID']."', '".$_POST['udf4']."', '".$temp1['fees_type']."','".$ReceiptType."','".$_POST['amount']."','".$_POST['easepayid']."','EaseBuzz','113', '".$tdate."','".$_POST['udf5']."', NULL, 'Not Verify', '16', '91', '15000200013178', 'Pune', 'Kothrud Pune', 'Kothrud Pune Maharashtra India', 'FDRL0001500', '0', NULL, '1')";		 
	
                           mysql_query($insertO_tras) or die('</br>Error, insert query failed222');
				  
				  
		
		          
					
					//------------------------------Success Mail----------------------------------------
		       $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $_POST['firstname']; ?></p>
				 
                 <p>Thank you for making your payment. It will take two working days to credit your payment into our system.</p> </br>
                  
                    <p>Your Transaction ID for this payment is <?php echo $_POST['easepayid']; ?>
                    <p>Your Fee Paid Amount is : <?php echo $_POST['amount']; ?> </p> 
					<p>Course Name : <?php echo $_POST['udf2']; ?> </p>
					<p>Fees Type : <?php echo $_POST['udf2']; ?> </p>
					<p>Used Payment Gateway : EaseBuzz </p>
					
					<p>If you have any questions, please contact us at admissions@mitsde.com or on campussupport@mitsde.com or <a href="https://elibrary.mitsde.com/callmeback.php" traget="_blnack">Click here</a> to call back</p>
				<p>Thank you and see you soon.<br>
				  Regards,<br>
				  <b>Team MIT-School of Distance Education</b></p>
				 <?php
		           $body  = ob_get_clean();
						 //$mail->Mailer = "mail";
						  $mail->IsSMTP(); // telling the class to use SMTP
						  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing) // 1 = errors and messages
						// $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
						 $mail->SMTPAuth   = true;                  // enable SMTP authentication
						 $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
                        $mail->Host       = "email-smtp.us-east-1.amazonaws.com";      // sets GMAIL as the SMTP server
                        $mail->Port       = 2587;                   // set the SMTP port for the GMAIL
                        $mail->Username   = "AKIA5OQ6466FZWEYNNVJ";  // GMAIL username
                        $mail->Password   = "BB8uQenn6fCEjW791mFxeUgQ39xwI/9PEBDPz7uasG58";            // GMAIL password
						
						$mail->SetFrom('admissions@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('admissions@mitsde.com', 'No-Reply');
						
						$mail->Subject    = "Payment Made Successfully";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $_POST['email'];
						$mail->AddAddress($address);
				
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
						$mail->AddBCC('teamfeecollections@mitsde.com');
					    $mail->AddBCC('accounts.mitsde@mitpune.edu.in');
					    $mail->AddBCC('shivraj.pachawadkar@mitsde.com');
						
						$mail->Send();
		  //------------------------------Success Mail END----------------------------------------
					
				//echo "</br>DELETE FROM `temp` WHERE T_LeadID='".$_POST['udf1']."' and tranID='".$_POST['udf5']."'";	
					//---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
		$deletetemp=mysql_query("DELETE FROM `temp` WHERE T_LeadID='".$_POST['udf1']."' and tranID='".$_POST['udf5']."'");
		             //---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
			    }
							
							
							
                    return array(
                        'status' => 1,
                        'data' => "Payment sucessful");
						break;
              
			    case 'failure' :
                    
						//echo "</br>Payment failed(failure)-->";	
						
						 date_default_timezone_set('Asia/Calcutta');
                         $CurrentDateTime=date('Y-m-d : h:i:s');
                         
				
						   //-------------------------------------Failure Mail-----------------------------------------------------
						 $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $_POST['firstname']; ?>,<br>
                 
				<p> Unfortunately your most recent invoice payment id <?php echo $_POST['easepayid']; ?> was declined.
				  This could be due to a change in your card number or your card expiring, cancelation of your credit card / debit card,
				  or the bank not recognizing the payment and taking action to prevent it,please verify your billing information and resend payment <?php echo $_POST['amount']; ?>.
			   </p>
					<p>Your Failed Transaction ID For This Transaction Is <?php echo $_POST['easepayid']; ?>
					 <p>If You Have Any Questions, Please Contact Your Student Counsoller.</p><br>
        		<p>Thank you and see you soon.<br>
          	      Regards,<br>
           		  <b>Team MIT-School of Distance Education</b></p>
				 <?php
				 
		           $body  = ob_get_clean();
						  $mail->IsSMTP(); // telling the class to use SMTP
						  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing) // 1 = errors and messages
						// $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
						 $mail->SMTPAuth   = true;                  // enable SMTP authentication
						 $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
                        $mail->Host       = "email-smtp.us-east-1.amazonaws.com";      // sets GMAIL as the SMTP server
                        $mail->Port       = 2587;                   // set the SMTP port for the GMAIL
                        $mail->Username   = "AKIA5OQ6466FZWEYNNVJ";  // GMAIL username
                        $mail->Password   = "BB8uQenn6fCEjW791mFxeUgQ39xwI/9PEBDPz7uasG58";            // GMAIL password
						
						$mail->SetFrom('payonline@mitsde.com', 'MIT-School of Distance Education');
						
						$mail->AddReplyTo('payonline@mitsde.com', 'No-Replay');
						
						$mail->Subject    = "Current Transaction is Failed by easebuzz";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $_POST['email'];
						$mail->AddAddress($address);
						$mail->AddCC('sanjay.gaikwad@mitsde.com');
						//$mail->AddCC('sanjay.gaikwad@mitsde.com');
						//$mail->AddCC('abhishek.kalyana@mitsde.com');
						//$mail->AddBCC('sanjaygaikwad2009@gmail.com');
						
						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
						
						$mail->Send();
							//---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
		               $deletetemp=mysql_query("DELETE FROM `temp` WHERE T_LeadID='".$_POST['udf1']."' and tranID='".$_POST['udf5']."'");
		             //---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
						
						return array(
                        'status' => 1,
                        'data' => "Payment failed");
                    break;
				 default :
                    
				
						 
				
					return array(
                        'status' => 0,
                        'data' => 'Unmapped status');	
            }
        } else {
           
				//---------------------------------------FOR DELETE FORM TEMP TABLE----------------------
		$deletetemp=mysql_query("DELETE FROM `temp` WHERE T_LeadID='".$_POST['udf1']."' and tranID='".$_POST['udf5']."'");
		             //---------------------------------------FOR DELETE FORM TEMP TABLE------END----------------
				           //-------------------------------------User Cancel Mail-----------------------------------------------------
							
							//-------------------------------------Mail END-----------------------------------------------------
				return array(
                'status' => 0,
                'data' => 'Hash Mismatch');
        }

        return $result;
    }
    function reverse_hash ( $params, $salt, $status )
    {
        $posted = array ();
        $hash_string = null;

        if ( ! empty( $params ) ) foreach ( $params as $key => $value )
                $posted[$key] = htmlentities( $value, ENT_QUOTES );

        $hash_string = "";
        $hash_sequence = "udf10|udf9|udf8|udf7|udf6|udf5|udf4|udf3|udf2|udf1|email|firstname|productinfo|amount|txnid|key";
        $hash_vars_seq = explode( '|', $hash_sequence );
        $hash_string .= $salt . '|' . $status;

        foreach ( $hash_vars_seq as $hash_var ) {
                $hash_string .= '|';
                $hash_string .= isset( $posted[$hash_var] ) ? $posted[$hash_var] : '';
        }
        return strtolower( hash( 'sha512', $hash_string ) );
    }

?>

<!DOCTYPE html>

<!-- Meta Tags -->
<html dir="ltr" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>

<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<!-- Page Title -->
<title>Payment Status</title>

<!-- Favicon and Touch Icons -->
<link href="media/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">


<title>Online Payment | Other Fees Payment By Easebuzz | Pay Online</title>
    <link rel="icon" type="image/png" href="assets/images/favicon-mit.ico" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <link rel="stylesheet" href="assets/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/course-common-internal.css" type="text/css" />
	
	<!-- Animation Style -->
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/animate.css"> -->
	
   <!--API for Queck contact----->
	  <script src="ajax-load/js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="ajax-load/js/validation.js" charset="UTF-8"></script>
	 <!----->

</head> 
<body class="header-sticky">
    <div class="boxed">
        <?php include"header.php"; ?><!-- /.header -->

        <!--<div class="page-title parallax canvas"> 
        	<div class=""></div>            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 class="title">Canvas</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>About us</li>
                            </ul>                   
                        </div>
						
						
                    </div>
                </div>
            </div>        
        </div>-->
    	
        <!-- About -->
            <section class="flat-row pad-top-100">
			
                <div class="container">
         <div class="row justify-content-center">
			       <?php
       if ($status == "success")
	  {
	  ?>
        <div class="breadcrum"></span><a rel="canonical" href="#">Thank You</a></div> 
		<section>
	         <div class="container mt-3">
			   <div class="row justify-content-center">
		             <h1 class="text-left" style="color:#317f43;">Your Payment Successfully Done</h1>
                   <div>
                     <p>Hello <?php echo $_POST['firstname']; ?>,<br>
                </p>
                  <!--<p>We would like to take this moment to thank you for successfully submitting your application with MIT-School of Distance Education. 
				        We wish to confirm the receipt of the payment towards the admission process.</p>-->
                     <p>Your Transaction ID for this transaction is <b><?php echo $_POST['easepayid']; ?></b>
                     <p>If you have any questions, please contact us at admissions@mitsde.com.</p>
					<p>Your Fee Paid Amount is : <b><?php echo $_POST['amount']; ?></b> </p> <br />
				<p>Thank you and see you soon.<br>
				
                 </div> 
				</div> 
				 
			 </div>  
		</section> 
        <?php
		}
		else
		{
		?>
        <div class="breadcrum"><i class='fa fa-angle-double-right'></i></span><a rel="canonical" href="#">Failed Payment</a></div>
		<section class="mt-5">
	         <div class="container mt-5">
			   <div class="row d-flex justify-content-center align-items-center">
			     <h1 class="text-left" style="color:#e74c3c;">Payment Failed</h1>
                   <div id="faqaccordion">
                     <p>Hello <?php echo $_POST['firstname']; ?></p><br>
                         <div class="answer"><p>Your Failed Transaction ID For This Transaction Is <b><?php echo $_POST['easepayid']; ?></b>
						    <p>Please try again</p></br>
					        <p>If You Have Any Questions, Please Contact Your Student Counsoller.</p> 
							</div>
                 </div>
				 </div> 
			 </div>  
		</section> 
		 <?php
            }
			?>
			       
			   </div>
	  
                </div><!-- /.container -->   
            </section>

            


            


			<?php include "footer.php"?>


<!-- footer end  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/common.js"></script>
<script src="assets/js/course-slider.js"></script>
</body>
</html>