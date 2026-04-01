<?php ob_start();
require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');

// optional, gets called from within class.phpmailer.php if not already loaded






//die;

$mail  = new PHPMailer();

 //Turn on output buffering

?>

<table border='1' bgcolor='#999999'>
	    <tr>
			<th colspan='2'>Student Information</th>
			</tr>
				 <tr>
					 <td style='font-weight:bold'>Student Feedback :</td>
						<td><?php echo $_POST['stdName'];; ?></td>
						</tr>
						<tr>
					 <td style='font-weight:bold'>Email ID :</td>
						<td><?php echo $_POST['EmailID']; ?></td>
						</tr>
							 
						<tr>
						   <td style='font-weight:bold'>Contact No : </td>
						   <td><?php echo $_POST['MobileNo']; ?></td>
						</tr>
						 <tr>
							  <td style='font-weight:bold'>Country : </td>
							  <td><?php echo $_POST['Country']; ?></td>
						  </tr>
							
						   <tr>
							  <td style='font-weight:bold'>City : </td>
							  <td><?php echo $_POST['City']; ?></td>
							</tr>
							
							 <tr>
							  <td style='font-weight:bold'>Designation : </td>
							  <td><?php echo $_POST['Designation']; ?></td>
							</tr>
							
							 <tr>
							  <td style='font-weight:bold'>Experience : </td>
							  <td><?php echo $_POST['Experience']; ?></td>
							</tr>
							
							 <tr>
							  <td style='font-weight:bold'>Organisation Name : </td>
							  <td><?php echo $_POST['OrganisationName']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'>Program : </td>
							  <td><?php echo $_POST['Course']; ?></td>
							</tr>
							
							<tr>
							
							</tr>
							
							<tr>
							  <td style='font-weight:bold'>Communication  : </td>
							  
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 1 ] &nbsp; Was the Relationship Manager courteous during welcome call and other calls throughout the course? </td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q1']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 2 ] &nbsp; Did the Faculty answer all your queries satisfactorily? </td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q2']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 3 ] &nbsp; Did the Faculty demonstrate willingness to help?</td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q3']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 4 ] &nbsp; Was Faculty relevant & satisfactory?</td>
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q4']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 5 ] &nbsp; Was Faculty feedback constructive & positive? </td>
							 
							</tr>
							
							<tr>
							 <td><?php echo $_POST['Q5']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 6 ] &nbsp; How was the quality of the training session? </td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q6']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 7 ] &nbsp; Did tutors respond promptly to your queries?  </td>
							 
							</tr>
							
							<tr>
							 <td><?php echo $_POST['Q7']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 9 ] &nbsp; Kindly mention the name of the RM whom you have spoken to (if you remember).   </td>
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q9']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 10 ] &nbsp;  If you are not satisfied with the evaluation and feedback, please mention the assignment number that you are not satisfied with.   </td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q10']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 11 ] &nbsp;  Will the faculty's inputs help you to prepare your assignment?   </td>
							 
							</tr>
							
							<tr>
							 <td><?php echo $_POST['Q11']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 13 ] &nbsp;  Were you contacted within 48 hours of payment by your Admission Counsellor?   </td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q13']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 14 ] &nbsp;  Did you receive clear directives and information regarding the mode of study ?   </td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q14']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 15 ] &nbsp;   Did you receive clear directives and information regarding the procedure ? </td>
							 
							</tr>
							
							<tr>
							 <td><?php echo $_POST['Q15']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 16 ] &nbsp;  Were the E-mailed questions answered in a timely manner ?   </td>
							  
							</tr>
							
							<tr>
							  <td><?php echo $_POST['Q16']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 17 ] &nbsp;  Was the information provided via email relevant & adequate?    </td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q17']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 18 ] &nbsp;  Was the quality of the emails good ?   </td>
							  
							</tr>
							<tr><td><?php echo $_POST['Q18']; ?></td></tr>
							<tr>
							  <td style='font-weight:bold'> 19 ] &nbsp;  Were all of your queries answered satisfactorily ?   </td>
							 
							</tr>
							
							<tr>
							 <td><?php echo $_POST['Q19']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 20 ] &nbsp;   How can the support team reach you in a better way (any suggestion) ?   </td>
							 
							</tr>
							
							<tr>
							 <td><?php echo $_POST['Q20']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 21 ] &nbsp;   The areas you would have liked more information on:   </td>
							 
							</tr>
							
							<tr>
							 <td><?php echo $_POST['Q21']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> Course Structure   </td>
							</tr>
							
							
							
							
							<tr>
							  <td style='font-weight:bold'> 22 ] &nbsp;   Is the content sequenced and structured in a manner which enables learners to achieve the stated goals ?   </td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q22']; ?></td>
							</tr>
							
							
							<tr>
							  <td style='font-weight:bold'> 23 ] &nbsp; Is the information "chunked" or grouped to help students learn the content ?</td>
							 
							</tr>
							
							<tr>
							 <td><?php echo $_POST['Q23']; ?></td>
							</tr>
							
							
							<tr>
							  <td style='font-weight:bold'> 24 ] &nbsp; Is the purpose of learning activities clearly presented ?</td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q24']; ?></td>
							</tr>
							
							
							<tr>
							  <td style='font-weight:bold'> 25 ] &nbsp; Which aspect of the course did you find most useful ?</td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q25']; ?></td>
							</tr>
							
							
							<tr>
							  <td style='font-weight:bold'> 26 ] &nbsp;  Which aspect of the course was the least useful (kindly specify which phase & why) ?</td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q26']; ?></td>
							</tr>
							
							
							<tr>
							  <td style='font-weight:bold'> 27 ] &nbsp;  Do you have any suggestions regarding our course content? </td>
							  
							</tr>
							<tr><td><?php echo $_POST['Q27']; ?></td></tr>
							<tr>
							  <td style='font-weight:bold'> 28 ] &nbsp;  Any ideas you want to put forward in terms of the assignments! </td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q28']; ?></td>
							</tr>
							
							
							<tr>
							  <td style='font-weight:bold'> Learning Outcome </td>
							  
							</tr>
							
							<tr>
							
							</tr>
							
							
							<tr>
							  <td style='font-weight:bold'> 30 ] &nbsp; Is the purpose of learning activities fulfilled? * </td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q30']; ?></td>
							</tr>
							
							
							<tr>
							  <td style='font-weight:bold'> 31 ] &nbsp; Do the learning outcomes match the course objectives? * </td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q31']; ?></td>
							</tr>
							
							
							<tr>
							  <td style='font-weight:bold'> 32 ] &nbsp; Have the skills you picked up in the course helped in making you feel more confident ? </td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q32']; ?></td>
							</tr>
							
							
							<tr>
							  <td style='font-weight:bold'> 33 ] &nbsp; Will you be able to implement the skills in the real class room situations ?</td>
							 
							</tr>
							
							<tr>
							 <td><?php echo $_POST['Q33']; ?></td>
							</tr>
							
							
							<tr>
							  <td style='font-weight:bold'> 34 ] &nbsp; Will the course help in approaching varied academic interests of a student</td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q34']; ?></td>
							</tr>
							
							
							<tr>
							  <td style='font-weight:bold'> 35 ] &nbsp; Are you working r? If yes, please mention if this course has helped to upgrade your knowledge. If no, please mention if have applied the same anywhere.</td>
							 
							</tr>
							
							<tr>
							 <td><?php echo $_POST['Q35']; ?></td>
							</tr>
							
							
							<tr>
							  <td style='font-weight:bold'> 36 ] &nbsp; Was your understanding of course content enhanced by working on the assignments ?</td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q36']; ?></td>
							</tr>
							
							
							<tr>
							  <td style='font-weight:bold'> Self-Assessment </td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 37 ] &nbsp; Has your approach in your work changed after enrolling for this course? If yes, how ?</td>
							 
							</tr>
							
							<tr>
							 <td><?php echo $_POST['Q37']; ?></td>
							</tr>
							
													
							<tr>
							  <td style='font-weight:bold'> 40 ] &nbsp;   Did you use additional reference material/reading material to enhance your knowledge/skills? </td>
							 
							</tr>
							
							<tr>
							 <td><?php echo $_POST['Q40']; ?></td>
							</tr>
							
							
							<tr>
							  <td style='font-weight:bold'> 41 ] &nbsp;  How do you propose to use/apply the skills you have acquired following this course? </td>
							 
							</tr>
							
							<tr>
							 <td><?php echo $_POST['Q41']; ?></td>
							</tr>
							
							
							<tr>
							  <td style='font-weight:bold'> 42 ] &nbsp;  What are your future intentions & plans ?  </td>
							 
							</tr>
							
							<tr>
							 <td><?php echo $_POST['Q42']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 43 ] &nbsp;   Your short quote about your experience  </td>
							 
							</tr>
							
							<tr>
							 <td><?php echo $_POST['Q43']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 44 ] &nbsp;   Would you recommend this course to a friend ?  </td>
							 
							</tr>
							
							<tr>
							 <td><?php echo $_POST['Q44']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 45 ] &nbsp;   Are you working as a VP/AVP/Manager? If yes, please write the name of the organization & location  </td>
							  
							</tr>
							
							<tr>
							<td><?php echo $_POST['Q45']; ?></td>
							</tr>
							
							<tr>
							  <td style='font-weight:bold'> 46 ] &nbsp;   I give permission to use my feedback in future promotional material</td>
							  
							</tr>
							<tr>
							 <td><?php echo $_POST['Q46']; ?></td>
							</tr>
							
							
							
						 <table>



<?php

$body  = ob_get_clean();


$mail->IsSMTP(); // telling the class to use SMTP

$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
// $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL 
$mail->Username   = "feedback@mitsde.com";  // GMAIL username
$mail->Password   = "feedback@123";            // GMAIL password
//$mail->g_smtp_host = 'smtp.gmail.com:465';
//$mail->g_smtp_connection_mode = 'ssl';

$mail->SetFrom('feedback@mitsde.com', 'Feedback');

$mail->AddReplyTo('feedback@mitsde.com', 'Feedback');

$mail->Subject    = "Session Feedback";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);
$mail->SetLanguage("en", 'includes/phpMailer/language/');
$address = "manish.yadav@mitsde.com";
$mail->AddAddress($address);
$mail->AddCC('sanjay.gaikwad@mitsde.com');

//$mail->AddAttachment("sept12120568.pdf");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

$mail->Send();

header('Location: ../thankyou.php');

?>