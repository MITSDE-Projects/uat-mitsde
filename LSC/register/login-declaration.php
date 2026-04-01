<?php
require('includes/config.php');
include_once("../php/commonfunctions.php");
//if logged in redirect to members page
if( $user->is_logged_in() ){ header('Location: ../page1_form.php'); }

//if form has been submitted process it
if(isset($_POST['register'])){

	//very basic validation
	if(strlen($_POST['username']) < 3){
		$error[] = 'Username is too short.';
	} else {
		$stmt = $db->prepare('SELECT username,email FROM student WHERE username = :username');
		$stmt->execute(array(':username' => $_POST['username']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['username'])){
			$error[] = 'Username provided is already in use.';
		}

	}

	
	if(strlen($_POST['phonenumber']) !=10){
		$error[] = 'Invalid contact number.';
	}
	
	if(strlen($_POST['password']) < 3){
		$error[] = 'Password is too short.';
	}

	if(strlen($_POST['passwordConfirm']) < 3){
		$error[] = 'Confirm password is too short.';
	}

	if($_POST['password'] != $_POST['passwordConfirm']){
		$error[] = 'Passwords do not match.';
	}

	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Please enter a valid email address';
	} else {
		$stmt = $db->prepare('SELECT email FROM student WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['email'])){
			$error[] = 'Email provided is already in use.';
		}

	}


	//if no errors have been created carry on
	if(!isset($error)){

		//hash the password
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);

		//create the activasion code
		$activasion = md5(uniqid(rand(),true));

		try {

			//insert into database with a prepared statement
			$stmt = $db->prepare('INSERT INTO student (username,password,email,active,phonenumber) VALUES (:username, :password, :email, :active, :phonenumber)');
			$stmt->execute(array(
				':username' => $_POST['username'],
				':password' => $hashedpassword,
				':email' => $_POST['email'],
				':active' => $activasion,
                                //':active' => 'Yes',
				':phonenumber' => $_POST['phonenumber'],
			));
			$id = $db->lastInsertId('memberID');
			//send email
			$to = $_POST['email'];
			$subject = "Registration Confirmation";
			$body = "<p>Thank you for registering at DAT.</p><p>Username : ".$_POST['username'].
			"</p><p>Password:".$_POST['password']."</p><p>To activate your account, please click on this link: <a href='http://www.dat.net.in/register/activate.php?x=$id&y=$activasion'>http://www.dat.net.in/register/activate.php?x=$id&y=$activasion</a></p>
			<p>Regards,<br>
			Team Avantika
			</p>";			
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: <admissions@dat.net.in>' . "\r\n";
			$headers .= 'To: <'.$to.'>' . "\r\n";
			$headers .= 'bcc: malhar@avantika.edu.in' ."\r\n";
			$headers .= 'bcc: anees.shaikh@avantika.edu.in' ."\r\n";
                        $headers .= 'bcc: azma.solkar@avantika.edu.in' ."\r\n";
			$subject = "Avantika University: Admissions 2017";
			mail("",$subject,$body,$headers);
			
			$url="http://www.dat.net.in/register/activate.php?x=".$id."&y=".$activasion;
			$shorturl=BitUrlGen($url);
			
			$msg="Dear ".$_POST['username'].", this is a gentle reminder to complete your registration with DAT at the ".$shorturl." - Regards, Team DAT";
			GetSMSUrl($msg,$_POST['phonenumber']);
			
			header('Location:http://dat.net.in/?action=joined');
			exit;
			//redirect to index page

		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}

	}

}


if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(isset($username) && $username!=="" && isset($password) && $password!=="")
	{
		$stmt = $db->prepare("SELECT testcenter,terms,lastPage,username FROM student WHERE username = :username");
		$stmt->execute(array(':username' => $username));
		
		$i=0;
		while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
			$i++;
			if($row['username']==$username)
			{
				$testcenter = $row['testcenter'];
				$terms = $row['terms'];
				$page = $row['lastPage'];
				$_SESSION['username'] = $username;
				$user->login($username,$password);
					 if(!empty($page))
					 {
						header('Location: ../final-declaration.php');
					 }
					 else
					 {
						 header('Location: ../final-declaration.php');
					 }
				}
				else
				{
					unset($_SESSION['username']);
				$error[] = 'Wrong username or password or your account has not been activated.';			
				}
		}
		if($i==0)
		{
			unset($_SESSION['username']);
		$error[] = 'Invalid username or password.';		
		}
	}
     else
	 {
		unset($_SESSION['username']);
		$error[] = 'Invalid username or password.';		
	 }	
}
	
	//end if submit
//include header template
require('layout/header.php'); 

?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Admissions 2017</title>
	<link href="../css/style.css" rel="stylesheet" />
	<script src="../js/common.js"></script>
    <style>
		
		
		
		.wrapper-640,.container
		{
			background: #fff;
			width:1100px;
		}
        .formdiv
        {
            width:48%;
            padding-left:1%;
            padding-right:1%;
            padding-top:20px;
            padding-bottom:20px;
            border:1px solid #818276;
            position: relative;
            float: left;
            display: block;
			margin-bottom: 10px;
					border-radius:5px;

        }
        .formdiv1
        {
            float: left;
            /*background: yellow;*/
        }
        .formdiv2
        {
            float: right;
            /*background: red;*/
        }
        .formcontainer
        {
            /*background: red;*/
            margin: auto;
            display: block;
            height: 100%;
        }
		
       .formcontainer input
       {
        width: 100%;
		border-radius:5px;
       }
      .mheader
      {
        box-shadow:none;
      }
      .errorslogin
      {
        padding: 10px;
        position: relative;
        display: block;
        width: 100%;
        color: red;
        text-align: left;
      }
	  .formcontainer input[type=submit]
	  {
		width: 40%;
		margin-left: 30%;
		font-size:18px;
		background: #F17D31;
		color:#fff;
	  }
    </style>

<?php if(isset($_GET['action']) && $_GET['action']=='joined') {?>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '300649950136876', {
em: 'insert_email_variable,'
});
fbq('track', 'PageView');
fbq('track', 'CompleteRegistration', {
value: 1.00,
currency: 'INR'
});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=300649950136876&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<?php } ?>


</head>

<body class="bg-pic" style="margin-top:8px;margin-bottom:8px;">
   <div class="wrapper-640">
	<br>
	<br>
		<div class="mheader">
		<div class="formheading" style="text-align: left;"><h2>DAT 2018</h2>
		
		</div>
	    </div>
   </div>
    <div class="container">
       <br>
        <div class="errorslogin">
        <?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}

				//if action is joined show sucess
                if(isset($_GET['action'])){
					//check the action
					switch ($_GET['action']) {
						case 'active':
							echo "<h3 class='bg-success'>Your account is now active you may now login.</h3>";
							break;
						case 'reset':
							echo "<h3 class='bg-success'>Please check your inbox for a reset link.</h3>";
							break;
						case 'resetAccount':
							echo "<h3 class='bg-success'>Password changed, you may now login.</h3>";
							break;
						case 'joined':
							echo "<h3 class='bg-success'>Registration successful, please activate your account by clicking on the link emailed you (Please check junk/spam mails).</h3>";
							break;
					}
                }
				?>
    </div>
   <br>
   <div class="formcontainer">
        <div class="formdiv formdiv1">
            <h3>New User? Register</h3>
            <br>
            <form role="form" method="post" action="" autocomplete="off">
                 <label>User Name</label>
                <input name="username" type="text" id="username" onkeypress="return validateusername(event);" placeholder="User Name" value="" required/>
                 <label>Email</label>
			<input name="email" type="email" id="email" style="margin-top:10px;" required  placeholder="Email Address" value="">
             <label>Contact Number</label>
			 			 
	<input name="phonenumber" type="text" id="phonenumber" style="margin-top:10px;" required  placeholder="Contact Number" maxlength=10 minlength=10 value="" onkeypress="return isNumberKey(event);">
             <label>Password</label>
			 			 
			  <input name="password" type="password" id="password"  value=""  required placeholder="Password">
                <label>Confirm Password</label>
                
			  <input name="passwordConfirm" type="password" id="passwordConfirm"   required value=""  placeholder="Confirm Password">
              <br>
              <br>
            	<div><input type="submit" name="register" value="Register" ></div>
            </form>
            
        </div>
        <div class="formdiv formdiv2">
              <h3>Already Registered? Login</h3>
            <br>
            <form role="form" method="post" action="" autocomplete="off">

                                 <label>User Name</label>
                <input name="username" type="text"  id="username" placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" size="30%">
                                 <label>Password</label>

				<input name="password" type="password"  id="password" placeholder="Password" size="30%">
             
                <div><input type="submit" name="login" value="Login"></div>
				   <div>
						 <a href='reset.php' style="font-size:14px;float: right;">Forgot your Password?</a>
					</div>
            </form>
			
        </div>
		
   </div>
   <br>
		<br>
		<br>
</div>
	<script>
		function validateusername(evt)
		{
           var charCode = (evt.which) ? evt.which : event.keyCode;
					if ((charCode >= 47 && charCode <= 57) || (charCode >= 65 && charCode <= 90) || (charCode >= 95 && charCode <= 122)){
					return true;
					}
					return false;
        }
	</script>
	
</body>
</html>