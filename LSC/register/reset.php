<?php
require('includes/config.php');
include_once("../php/commonfunctions.php");
//if logged in redirect to members page
if( $user->is_logged_in() ){ header('Location: memberpage.php'); }

//if form has been submitted process it
if(isset($_POST['submit'])){

	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Please enter a valid email address';
	} else {
		$stmt = $db->prepare('SELECT email,phonenumber,username FROM student WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(empty($row['email'])){
			$error[] = 'Email provided is not on recognised.';
		}

	}

	//if no errors have been created carry on
	if(!isset($error)){

		//create the activasion code
		$token = md5(uniqid(rand(),true));

		try {

			$stmt = $db->prepare("UPDATE student SET resetToken = :token, resetComplete='No' WHERE email = :email");
			$stmt->execute(array(
				':email' => $row['email'],
				':token' => $token
			));

			//send email
			$to = $row['email'];
			$username = $row['username'];
			$subject = "MITSDE: Password Reset Request";
			$body = "<p>Hello ".$username."<br>You asked for a password reset for your MIT SDE profile for the registered account with the email ".$to."</p>
			<p>To reset your password, visit the following address: <a href='".DIR."resetPassword.php?key=$token'>".DIR."resetPassword.php?key=$token</a></p>
			<p>
			If you did not request this change, please contact us immediately at admissions@mitsde.com.
			</p><p>Regards, <br>Team MIT SDE</p>";

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: MIT SDE 2020 <admissions@mitsde.com>' . "\r\n";
			$headers .= 'To: <'.$to.'>' . "\r\n";
			
			$headers .= 'bcc: umesh.ghatale@mitsde.com' ."\r\n";
			 mail("",$subject,$body,$headers);

                     


			$url=DIR."resetPassword.php?key=".$token;
			$shorturl=BitUrlGen($url);
			
			//$msg="Dear ".$_POST['username'].", Your request for the password reset for DAT Profile is now in process. Here is the link ".$shorturl." - Regards, Team DAT";
			//GetSMSUrl($msg,$row['phonenumber']);
			
			//redirect to index page
			header('Location: reset.php?action=reset');
			exit;

		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}

	}

}

//define page title
$title = 'Reset Account';

//include header template
require('layout/header.php');
?>

	
<html>
<head>
<link rel="stylesheet"  href="style/style.css">

<style type="text/css">

@media screen and (max-width: 960px) and (min-width: 320px) {
    
     input {
        width:100% !important; 
     }
    
     #logoidavt{
         width:100%;
         height:165px;
         float:left;
     }
}



@media screen and (max-width: 1920px) and (min-width: 1024px) {
    
  
    
     #logoidavt{
         width:400px;
         height:165px;
         float:left;
     }
}



</style>




 </head>
<body class="bg-pic">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" >
    <tr>
        <td>
            <div class="wrapper-640">

        		<div class="">
        		<a href="https://www.mitsde.com/" target="_blank"><img src="https://www.mitsde.com/LSC/images/logo-1.png" width=200 height=80 style="float:left; margin-left: 21px;"/></a><br/>
        		<p style="margin-top:-10px;  margin-bottom:15px;margin-left:20px;font-size:14px;clear:both;font-family:'Roboto', sans-serif;">Approved by A I C T E, Govt.of India.</p>
        		
        	    </div>
		
         </div>
        </td>
    </tr>
  <tr>
    <td><div class="mheader">
		
	   <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4"></td>
    </tr>
  <tr>
    <td width="1%">&nbsp;</td>
    </tr>
  
</table>

		
    </div></td>
  </tr>
  <tr>
    <td valign="top">	<div class="content" style="background:#FFF;" >
    <form role="form" method="post" action="" autocomplete="off">
				<h2 style="color:#606062;">Reset Password</h2>
				<p><a href='https://mitsde.com/LSC/register/index.php'>Back to login page</a></p>
							<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}

				if(isset($_GET['action'])){

					//check the action
					switch ($_GET['action']) {
						case 'active':
							echo "<h3 class='bg-success'>Your account is now active you may now log in.</h3>";
							break;
						case 'reset':
							echo "<h3 class='bg-success'>Please check your inbox for a reset link.</h3>";
							break;
					}
				}
				?>

				<div class="form-group">
					<input type="email" name="email" id="email" class="dp" placeholder="Email" value="" tabindex="1">
				</div>

			
				<div class="row">
					<div class="col-xs-6 col-md-6" style="position:relative;top:-6px;"><input type="submit" name="submit" value="Sent Reset Link" style="background:#606062; none repeat scroll 0 0;color:#FFF;"></div>
				</div>
			</form>
	</div>


</td>
  </tr>
</table>


</body>
</html>

<?php 
//include header template
require('layout/footer.php'); 
?>
