<?php session_start();
include "php/header2.php";
include_once "php/db.php";

require 'PHPMailer/class.phpmailer.php'; 
require 'PHPMailer/class.smtp.php';

//include_once "php/populate.php";
$memberid= $_SESSION['memberID'];
$pieces = explode(".", basename($_SERVER['PHP_SELF']));
$segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
$pid=$segments[count($segments)-1];
$_SESSION["lastpage"]=$pid;



?>


<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Admissions 2025-26</title>
     	 <link rel="stylesheet" href="css/style.css"/> 
         <link href='https://fonts.googleapis.com/css?family=Roboto:300,300' rel='stylesheet' type='text/css'>
         <style>
		 .logout{ color:#FFF;}
		  .logout link{ color:#FFF;}
		 </style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	<link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>
<style>
        .emoji-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
            gap: 10px; /* Adds space between emojis */
        }
        .emoji-item {
            cursor: pointer;
            font-size: 2rem; /* Adjust size for smaller screens */
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            transition: transform 0.2s, border-color 0.2s, background-color 0.2s;
            text-align: center; /* Center text within emoji */
        }
        .emoji-item:hover {
            transform: scale(1.1);
        }
        /* Color coding */
        .emoji-item[data-value="0"]
		{
			
            background-color: #ff0000; /* Light dark red */
           border-color: #004d00; /* Dark green */
			color: white;
        
		}
        .emoji-item[data-value="1"]
		{
		    background-color: #ff1a1a; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;	
		}
        .emoji-item[data-value="2"]
		{
			background-color: #ff3333; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
		}
		
        .emoji-item[data-value="3"]
	    {
		    background-color: #ff4d4d; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
	    }
        .emoji-item[data-value="4"]
		{
		    background-color: #ff6666; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
	    }
        .emoji-item[data-value="5"]
		{
		    background-color: #ff8080; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
	    }
        .emoji-item[data-value="6"]
		{
		    background-color: #ff9999; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
	    }
        .emoji-item[data-value="7"]
		{
		    background-color: #ffcccc; /* Light dark red */
            border-color: #004d00; /* Dark green */
			color: white;
	    }
        .emoji-item[data-value="8"] 
		{
            background-color: #ffcccc; /* Light pink */
            border-color: #004d00; /* Dark green */
        }
        .emoji-item[data-value="9"] 
		{
            background-color: #228B22; /* Light green */
            border-color: #004d00; /* Dark green */
        }
        .emoji-item[data-value="10"] 
		{
            background-color: #008000; /* Dark green */
            border-color: #004d00; /* Dark green */
            color: white;
        }
        .selected {
            border-color: yellow;
            background-color: yellow; /* Light blue to highlight selected item */
        }
        .hidden {
            display: none;
        }
        

        /* Responsive design adjustments */
        @media (max-width: 576px) {
            .emoji-item {
                font-size: 1.5rem; /* Smaller emoji size on small screens */
                padding: 8px;
            }
        }
        @media (min-width: 577px) and (max-width: 768px) {
            .emoji-item {
                font-size: 1.75rem; /* Medium emoji size on medium screens */
                padding: 10px;
            }
        }
        @media (min-width: 769px) {
            .emoji-item {
                font-size: 2rem; /* Larger emoji size on large screens */
                padding: 12px;
            }
        }
    </style>
</head>
<body class="bg-pic">

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div class="mheader">
		
	   <table width="100%" border="0" cellpadding="0" cellspacing="0">
 
  <tr>
    <td width="1%">&nbsp;</td>
    <td width="38%">&nbsp;</td>
    <td width="44%">&nbsp;</td>
    <td width="17%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left" valign="top"><h2><?php //echo $_SESSION['username']; ?></h2>
				<?php $_SESSION['memberID']; ?></td>
    <td></td>
    <td align="left" valign="top"><p style="font-size:16px; color:#FFF;"><a href='register/logout.php' class="logout">Logout</a></p></td>
  </tr>
</table>
	 </div></td>
  </tr>
  <tr>
    <td>  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="5%" style="background:#FFF;">&nbsp;</td>
    <td width="95%" style="background:#FFF;"><div style="color:#F60; width:700px; text-align:right; font-weight:bold; margin:0 auto; padding:10px">
        
        </div></td>
  </tr>
</table>
</td>
  </tr>
 
  <tr>
    <td style="background:#FFF; padding:10px;">
<?php

//echo "IN";

    include_once 'lib/easepay-lib.php';
    $SALT='VHV44GBVSB';
    $result = response( $_POST, $SALT );
    
    
    //echo '<pre>'; print_r($_POST); 
    
    
    
    
    
//echo "IN2";    
    
    //echo '<pre>'; print_r($_POST); 
    
    //echo '<pre>'; print_r($result); 
    
   //$result = response( $_POST, $SALT );
    
    
   


    if($_POST['status']=='success')
    {

           // echo "IN SUCCESS"; exit; 

    	include "php/db.php";
				
		$username = $_SESSION['username'];		
		$memberid = $_SESSION['memberID'];
	

    	$txnid=$_POST['easepayid'];
    	$memberid=$_POST['productinfo'];
    	
    	$studentname=$_POST['firstname'].''.$_POST['lastname'];
    	$phonenumber=$_POST['phone'];
    	$emailid=$_POST['email'];
    	
    	$getcourse=mysqli_query($connection,"SELECT ERPLeadID,CourseID,SpecializationID,desciplines FROM `student` WHERE `memberID` = '".$memberid."'");
        $row=mysqli_fetch_array($getcourse);
        $Studentcours=$row['desciplines'];
        $s_ID=$row['SpecializationID'];
        $ERPLeadID=$row['ERPLeadID'];
    	$Fees=$_POST['amount'];
    	
    	 $getcourseprice=mysqli_query($connection,"SELECT program_id,lumpsum_amount FROM `tbl_courses` WHERE `courses_name` = '".$Studentcours."'");
              $row1=mysqli_fetch_array($getcourseprice);
              $lumpsumFees=$row1['lumpsum_amount'];
              $program_id=$row1['program_id'];
             
             
             $getprogramdetails=mysqli_query($connection,"SELECT * FROM `tbl_program` WHERE `programcode` = '".$program_id."'");
              $row2=mysqli_fetch_array($getprogramdetails);
              $duration=$row2['duration'];
              
              if($Fees<>$lumpsumFees)
              {
               $feetype="Instalment";
               //$installmentinformation="Next Instalment needs to be paid within 3 months duration from first payment.";
              }
              else
              {
                $feetype="Lump Sum";
              }
    	
    	
    	
    	
        $crdate = date('Y-m-d');

    	$query = mysqli_query($connection,"UPDATE `student` SET `terms` = '1', amount='".$_POST['amount']."', `transactid` = '$txnid',	`colorRadio`='EaseBuzz', `isPayment` = '1', `dddate` = 'NULL', `ddnumber` = 'NULL', `bankname` ='NULL', `paymenttype`='1',formstatus='payment done',lastPage='printformvalue.php',paydate='".$crdate."' WHERE `memberID` = '$memberid'");

        $gettestcenter = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM student WHERE memberID='".$memberid."'"));        
        
         mysqli_query($connection,"INSERT INTO transaction (T_LeadID,T_A_Amount,T_date,PayU_transationNo,payment_source,email) VALUES('".$memberid."','".$_POST['amount']."',NOW(),'".$_POST['txnid']."','EaseBuzz','".$_POST['email']."')");
        // This is to insert for further processing!...
        
         //echo "</br>INSERT INTO `tbl_transactions_details` (`id`, `memberID`,`ERPLeadID`, `Name`, `Mobile_no`, `email`, `courseid`, `SpecializationID`, `FeeHeadID`, `fees_type`, `ins_1_amt`, `ClearedDate`, `ins_1_date`,`payment_source`, `PayerBankID`, `transaction_id`, `payment_verification`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`, `S_Flag`, `response`, `F_Flag`) VALUES (NULL, '$memberid','$ERPLeadID','$studentname', '$phonenumber', '".$_POST['email']."', '$Studentcours', '$s_ID', '60', 'InstallmentI', '".$_POST['amount']."',NOW(),NOW(),'EaseBuzz','113','$txnid', 'Not_Verified', '16', '91', '15000200013178', 'Pune', 'Kothrud Pune', 'Kothrud Pune Maharashtra India', 'FDRL0001500', NULL, NULL, '0', NULL, '1')";
                 
        mysqli_query($connection,"INSERT INTO `tbl_transactions_details` (`id`, `memberID`,`ERPLeadID`, `Name`, `Mobile_no`, `email`, `courseid`, `SpecializationID`, `FeeHeadID`, `fees_type`, `ins_1_amt`, `ClearedDate`, `ins_1_date`,`payment_source`, `PayerBankID`, `transaction_id`, `payment_verification`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`, `S_Flag`, `response`, `F_Flag`) VALUES (NULL, '$memberid','$ERPLeadID',$studentname', '$phonenumber', '".$_POST['email']."', '$Studentcours', '$s_ID', '60', 'InstallmentI', '".$_POST['amount']."',NOW(),NOW(),'EaseBuzz','113','$txnid', 'Not_Verified', '16', '91', '15000200013178', 'Pune', 'Kothrud Pune', 'Kothrud Pune Maharashtra India', 'FDRL0001500', NULL, NULL, '0', NULL, '1')");
        
        
        
        //mysqli_query($connection,"INSERT INTO tbl_transactions_details(email,ins_1_amt,ins_1_date,payment_source,transaction_id)VALUES('".$_POST['email']."','".$_POST['amount']."',NOW(),'EaseBuzz','$txnid')");
        
  
  
  echo "<p>Congratulations!</p>
    <p>We would like to take this moment to thank you for successfully submitting your application with MIT-School of Distance Education. We wish to confirm the receipt of the payment towards the admission process.</p>
   
    <p>Your Transaction ID for this transaction is ".$_POST['easepayid']."
   
    <p>If you have any questions, please contact us at admissions@mitsde.com.</p>
     <p>We have received a payment of Rs. " . $_POST['amount'] . "
    <p>Thank you and see you soon.<br>
    <p> Regards,</p>
    <p><strong>Team MIT-School of Distance Education</strong></p>";
   
    




   //------------------------------Success Mail----------------------------------------
		       $mail  = new PHPMailer();
                 ob_start(); //Turn on output buffering
				 ?>
				 <p>Hello <?php echo $studentname; ?>,<br>
                 Congratulations!</p>
                  <p>We would like to take this moment to thank you for successfully submitting your application with MIT-School of Distance Education. 
				        We wish to confirm the receipt of the payment towards the admission process.</p>
                     <p>Your Transaction ID for this payment is <?php echo $_POST['easepayid']; ?>
                     <p>If you have any questions, please contact us at campussupport@mitsde.com</p>
					 <p><b>Please Find below details confirmed by you before making the payment:-</b></p>
                     <table border="1">
                         <tr>
                             <td>
                     <p>1) Course & Specialization- <b><?php echo  $Studentcours;?> (<?php echo $duration; ?>)</b></p>
                     <p>2) Amount Paid –INR <b><?php echo $_POST['amount']; ?> /-</b></p>
                     <p>3) Payment Option - <b><?php echo $feetype;   if ($feetype=="Instalment") echo "\x20(Next Instalment needs to be paid within 3 months duration from first payment.)"; ?></b></p>
                     <p>4) Exam fees – INR 500 per paper (applicable at the time of examination)</p>
                     <p>5) Project fees- INR 1,500 (applicable at the time of submitting project)</p>
                     
                     <p>Referral Policy*</p>
                     <p>When you refer your friend to take any program at MITSDE, then you & your friend are eligible for a referral benefit of INR 3,000 /- each</p>
                     </td>
                     </tr>
                     </table>
				<p>Thank you and see you soon.<br>
				  Regards,<br>
				  <b>Team MIT-School of Distance Education</b></p>
				 <?php
		            /*$body  = ob_get_clean();
						$mail->Mailer = "mail";
						  //$mail->IsSMTP(); // telling the class to use SMTP
						  $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing) // 1 = errors and messages
						                                        // 2 = messages only
						 $mail->SMTPAuth   = true;                  // enable SMTP authentication
						$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
						$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
						$mail->Port       = 465;                   // set the SMTP port for the GMAIL 
						$mail->Username   = "payonline@mitsde.com";  // GMAIL username
						$mail->Password   = "mitsde@123";            // GMAIL password*/
						
						 $body  = ob_get_clean();
                          //$mail->Mailer = "mail";
                          $mail->IsSMTP(); // telling the class to use SMTP
                          //$mail->IsMail(); // telling the class to use SMTP
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
						
						$mail->Subject    = "Your application with MIT SDE";
						
						$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
						
						$mail->MsgHTML($body);
						$mail->SetLanguage("en", 'includes/phpMailer/language/');
						$address = $StudentEmailID[1];
						$mail->AddAddress($address);
				
						
						$mail->AddBCC('abhishek.kalyana@mitsde.com');
						$mail->AddBCC('umesh.ghatale@mitsde.com');
						$mail->AddBCC('jayjeet.deshmukh@mitsde.com');
						$mail->AddBCC('sanjay.gaikwad@mitsde.com');
						$mail->AddBCC('priti.thakre@mitsde.com');
						$mail->AddBCC('nivedita.dawate@mitsde.com');
						$mail->AddBCC('priyanka.kaul@mitsde.com');
						$mail->AddBCC('shivraj.pachawadkar@mitsde.com');
						$mail->AddBCC('william.murmu@mitsde.com');
						
						
						
						//$mail->AddAttachment("sept12120568.pdf");      // attachment
						//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
						
						$mail->Send();
		  //------------------------------Success Mail END----------------------------------------
      
      
      ?>
      

			
      <?php

    }
    else
    {
       // echo "IN VALID"; exit; 
        
    	echo "Invalid Transaction. Please try again";
    	echo "<h3 class='sucess4'><a href='page5_form.php' ><input type='button' value='Click here to go back'></a></h3>";
    }
    

?>


<link href="css/style.css" rel="stylesheet" type="text/css">

</td>
  </tr>
</table>



<!-- Advanced Tables Feedback -->
  <center>
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                          <h4>Based on your experience with our admission process, how likely are you to recommend us on a scale from 0 to 10?</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="example" class="display nowrap" style="width:100%">
                                    
                                    <tbody>

                                        

	                                       <form action="nps_process.php" method="post">
	                        <tr>
	                         <td>
	                           <input type="hidden" name='leadid' value="<?php echo $LeadID[1]; ; ?>"> 
                             <input type="hidden" name='emailid' value="<?php echo $StudentEmailID[1]; ?>">
                             <input type="hidden" name='phone' value="<?php echo $StudentMob[1];  ?>">
                             <input type="hidden" name='payfees' value="<?php echo $dotamt[0];  ?>">
                             </td>
                             </tr>
             <div class="form-group">
                <label for="npsRating"></label>
                <div id="emojiList" class="emoji-list">
                    <!-- Emoji items from 0 to 10 -->
                    <span class="emoji-item" data-value="0">😠 </br> 0 </br>Poor</span>
                    <span class="emoji-item" data-value="1">😡 </br>1</span>
                    <span class="emoji-item" data-value="2">😞 </br>2</span>
                    <span class="emoji-item" data-value="3">🙁 </br>3</span>
                    <span class="emoji-item" data-value="4">😟 </br>4</span>
                    <span class="emoji-item" data-value="5">😐 </br>5</span>
                    <span class="emoji-item" data-value="6">😕 </br>6</span>
                    <span class="emoji-item" data-value="7">😊 </br>7</span>
                    <span class="emoji-item" data-value="8">😃 </br>8</span>
                    <span class="emoji-item" data-value="9">😁 </br>9</span>
                    <span class="emoji-item" data-value="10">🥳 </br>10 </br>Good</span>
                </div>
                <input type="hidden" id="npsRating" name="npsRating" required>
            </div>

            <!-- Additional Feedback -->
            <div id="feedbackFields" class="hidden">
                <h4 class="mt-4">Areas of improvement ?</h4>
                <div class="form-group">
                    <label><input type="checkbox" name="Communication" value="Communication"> Resolution Accuracy</label>
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name="Applicationform" value="Application form"> Application form</label>
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name="Paymentoptions" value="Payment options" > Payment options</label>
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name="Counselling" value="Counselling">Counselling</label>
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name=chother id="myCheck" onclick="myFunction()"> Other</label>
                    
                    <p id="text" style="display:none"><label>Write your Suggestions:</label><textarea class="form-check-input form-group "  rows="10" cols="50" name="other"></textarea></p>
                </div>
                <button type="submit" name="Submit" class="btn btn-primary btn-block">Submit</button>
            </div>

                                          
                                        </tbody>
                                    </table>
                                    <script>
    $('input[type=radio]').click(function(e)
    {
		var rate_value = $(this).val(); 
        $('.result').html(rate_value);
		
    });
	
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.querySelectorAll('.emoji-item').forEach(function(item) {
            item.addEventListener('click', function() {
                var value = this.getAttribute('data-value');
                document.getElementById('npsRating').value = value;

                // Remove 'selected' class from all items
                document.querySelectorAll('.emoji-item').forEach(function(emoji) {
                    emoji.classList.remove('selected');
                });

                // Add 'selected' class to the clicked item
                this.classList.add('selected');
                
                // Show additional feedback fields
                document.getElementById('feedbackFields').classList.remove('hidden');
            });
        });
    </script>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                        </center>
                        <!--End Advanced Tables -->

</body>   
</html>
