<?php
ob_start();
require 'class.phpmailer.php'; 
require 'class.smtp.php'; 
?>

<?php
if(isset($_GET['SourcePath']) && $_GET['SourcePath']!=''){
    
$_SESSION['SourcePath'] = $_GET['SourcePath'];  
    
$get = $_SESSION['SourcePath'];

}

if($get=="Agency-Precizen")
{
$vender = "2$36$140"; // Precizen
}

if($get=="Agency-Twigz" || $get=="Agency-Twigz1" || $get=="Agency-Twigz2" || $get=="Agency-Twigz3" || $get=="Agency-Twigz4" || $get=="Agency-Twigz5")
{
$vender ="2$36$152";  // Twigz
}
if($get == "Agency-Collegedunia")
{
$vender = "2$36$153"; // College Dunia
}

$DS_Google = @substr($get, @strpos($get, "-","-") + 0,16); 
if($DS_Google=="Agency-Google-DS")
{
$vender="2$36$156";  // DS
}
$DS_FB = @substr($get, @strpos($get, "-","-") + 0,12);
if($DS_FB=="Agency-FB-DS")
{
$vender = "2$36$157";  // DS
}


if(!isset($_GET['SourcePath']) && $_GET['SourcePath']=='' && $_SESSION['SourcePath']=='') {
    
    $vender = '2$35$137'; 
    $get = 'Registration Form';
}


?>



<?
//echo '<pre>'; print_r($_SERVER); exit;
if(isset($_GET['source']) && $_GET['source']!="")
{
    session_start(); 
    $_SESSION['src'] = $_GET['source'];
    
}


if(!isset($_SESSION['src']) && $_SESSION['src']=="") {
    
    $_SESSION['src']='oth';
    
}

if(!isset($_GET['source'])){

    $_SESSION['src']='oth';
    
}


if($_GET['source']==""){

    $_SESSION['src']='oth';
    
}


 //echo $_SESSION['src']; exit;

require('includes/config.php');
include_once("../php/commonfunctions.php");
//if logged in redirect to members page
if( $user->is_logged_in() ){ header('Location: ../page1_form.php'); }

//if form has been submitted process it
if(isset($_POST['register'])){

	//very basic validation
	/*if(strlen($_POST['email']) < 5){
		$error[] = 'Email is too short.';
	} else {
		$stmt = $db->prepare('SELECT email FROM student WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['email'])){
			//$error[] = 'Email provided is already in use.';
		}

	}

	
	if(strlen($_POST['phonenumber']) > 15){
		$error[] = 'Invalid contact number.';
	}
	
	if(strlen($_POST['password']) < 5){
		$error[] = 'Password is too short.';
	}

	if(strlen($_POST['passwordConfirm']) < 5){
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

	}*/


	//if no errors have been created carry on
	if(!isset($error)){

		//hash the password
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);

		//create the activasion code
		$activasion = md5(uniqid(rand(),true));

		try {

			//insert into database with a prepared statement
		/*	$stmt = $db->prepare('INSERT INTO student (password,email,active,phonenumber,src,name,lastname,formstatus) VALUES (:password, :email, :active, :phonenumber, :src, :name, :lastname,"registered")');
			
//echo $stmt; exit;

if($_SESSION['src']=="") { $_SESSION['src']='oth'; }

$stmt->execute(array(
				':password' => $hashedpassword,
				':email' => $_POST['email'],
				':active' => $activasion,
                ':phonenumber' => $_POST['phonenumber'],
                ':src' => $_SESSION['src'], 
				':name' => $_POST['name'],
			    ':lastname' => $_POST['lastname'],
				
			));*/
//echo $stmt->insert_id; exit;


                     //   echo  $stmt; exit;


			$id = $db->lastInsertId('memberID');
			$email =  $_POST['email'];
			
			
		  $mail  = new PHPMailer();
           ob_start(); //Turn on output buffering
           $email =  $_POST['email'];
?>        
                
                 <p>Testing mail for check mail received on time</p>
                 <p>Username : <?=$_POST['email'];?></p><p>Password:<?=$_POST['password'];?></p><p>To activate your account, please click <a href='https://mitsde.com/apply/register/activatedat.php?x=<?=$id?>&xz=<?=$_POST['phonenumber'];?>&y=<?=$activasion;?>&src=<?=$_SESSION['src']?>'>Here</a></p>
			     <p>Regards,<br>Team MIT SDE</p>

                 <?php
                   $body  = ob_get_clean();
                         //$mail->Mailer = "mail";
                          $mail->IsSMTP(); // telling the class to use SMTP
                         // $mail->IsMail(); // telling the class to use SMTP
                          $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                         $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                         $mail->SMTPAuth   = true;                  // enable SMTP authentication
                        //$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
                        $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
                        $mail->Port       = 465;                   // set the SMTP port for the GMAIL
                        $mail->Username   = "no-replay@mitsde.com";  // GMAIL username
                        $mail->Password   = "NoReplay@123";            // GMAIL password
                
                       
                        $mail->SetFrom('admissions@mitsde.com', 'MIT School of Distance Education');
                       
                        $mail->AddReplyTo('no-reply@mitsde.com', 'No-Reply');
                       
                        $mail->Subject = "(TEST)MIT SDE: Registration 2020 / 21";
                       
                        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
                       
                        $mail->MsgHTML($body);
                       
                          $address = $email;
                          $mail->AddAddress($address);
                          $mail->AddBCC('abhishek.kalyana@mitsde.com');
                          $mail->AddBCC('umesh.ghatale@mitsde.com');
                          $mail->AddBCC('jayjeet.deshmukh@mitsde.com');
                          $mail->AddBCC('pravin.patare@mitsde.com');
                          $mail->AddBCC('william.murmu@mitsde.com');
                          $mail->AddBCC('sanjay.gaikwad@mitsde.com');
                        
                      
                        
                    
                       
                        $mail->Send();

			//$url="https://www.mitsde.com/register/activatedat.php?x=".$id."&y=".$activasion."&xz=".$_POST['phonenumber']."&src=".$_SESSION['src'];
			
			
			//$shorturl=BitUrlGen($url);
			
		//echo 	$msg="Dear candidate, request you to activate your account, please click on ".$url." - sent on ".$_POST['email']." Regards, Team MIT SDE";
			
	    //	$msg="Your registration for DAT application is now complete. Please check your registered email id or click here ".$url." for details. Regards, Team MIT SDE";
		//	GetSMSUrl($msg,$_POST['phonenumber']);
			
			
			
			
		
		?>
		<p></p><p>Username : <?=$_POST['email'];?></p><p>Password:<?=$_POST['password'];?></p><p>To activate your account, please click <a href='https://mitsde.com/apply/register/activatedat.php?x=<?=$id?>&xz=<?=$_POST['phonenumber'];?>&y=<?=$activasion;?>&src=<?=$_SESSION['src']?>'>Here</a></p>
			     <p>Regards,<br>Team MIT SDE</p>
		<?

		
			
		//	header('Location:https://www.mitsde.com/apply/register/index.php?action=joined');
	//	header('Location:https://www.mitsde.com/thank-you-for-registration');
	
	
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
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if(isset($email) && $email!=="" && isset($password) && $password!=="")
	{

            

		$stmt = $db->prepare("SELECT email,lastPage,phonenumber FROM student WHERE email = :email");
               	$stmt->execute(array(':email' => $email));
		
		$i=0;
		while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                 {
			//echo "IN WHILE"; 
                        //echo '<pre>'; print_r($row); exit;
                        //exit;
                     


                      $i++;
			if($row['email']==$email)
			{
				
				$page = $row['lastPage'];
				$_SESSION['email'] = $email;
				$_SESSION['phonenumber'] = $row['phonenumber'];
				$user->login($email,$password);
					
					 if(!empty($page))
					 {
						header('Location: ../'.$page);
					 }
					 else
					 {
						 header('Location: ../page1_form.php');
					 }
					 
					 
				}
				
				
				
				else
				{
					unset($_SESSION['email']);
                                
		$error[] = 'Wrong username or password or your account has not been activated.';			
				}
		}
		if($i==0)
		{
			unset($_SESSION['email']);
                          
		$error[] = 'Invalid username or password.';		
		}
	}
     else
	 {
		unset($_SESSION['email']);
                
		$error[] = 'Invalid username or password.';		
	 }	
}
	
	//end if submit
//include header template
//require('layout/header.php'); 

?>
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Admissions 2021</title>
	<!--<link href="../css/style.css" rel="stylesheet" />-->
	<link rel="stylesheet" href="style/main.css"> 
	<link rel="stylesheet" href="style/bootstrap.css"> 
	 
	 
	<script src="../js/common.js"></script>
   <!-- <script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/validation.js"></script>-->
    <style type="text/css">
		

  

@media screen and (max-width: 960px) and (min-width: 320px) {
    .formdiv {  width:100%!important; }
    
     
   
     
     input {
    border: 1px solid  #848576; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 15px;
    background: rgba(255,255,255,255);
    margin: 0 0 10px 0;
    width:100% !important; 
}
input[type=text]:focus {
    background-color: #f2f2f2;
    width:100%;
}
select {
    border: 1px solid  #848576;
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 15px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;
}
input[type=text]:focus {
    background-color: lightblue;
}

input[type=text]  { width:100%; margin-top:10px;
     
}
     
#des-apt{
  text-align:justify;
  font-size:14px;
  position:relative;
  top:28px;
  font-weight:bold;     
}
  
#termcondi{
    position:relative;
    top:0px;
}       
#fogotpass{
        margin-left: -200px;
}   
#img-logo-id{
   width:350px !important;    
}     
     
     
}




@media screen and (max-width: 1920px) and (min-width: 1024px) {	
		
		.wrapper-640,.container
		{
			background: #fff;
			width:1170px;
		}
        .formdiv
        {
            width:49%;
            padding-left:3%;
            padding-right:1%;
            padding-top:0px;
            padding-bottom:20px;
            position: relative;
            float: left;
            display: block;
	        margin-bottom: 10px;
					

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

        .formdiv1:after {
        content: "";
  //background-color: #000;
  position: absolute;
  width: 1px;
  height: 80%;
  top: 5%;
  left: 105%;
  display: block;
}




#label-confirm-password{
    position:relative;
     left:74%;
     top:0px;
     font-size:15px; 
}

#label-password{
  position:relative;
  left:85%;
  top:1px;
  font-size:15px;   
    
}
#label-contact{
 position:relative;
 left:77%;
 top:0px;
 font-size:15px;     
}
#label-email{
  position:relative;
  left:90%;
  top:10px;
  font-size:15px;     
    
}
#div-terms-cond{
width: 100%;
position: relative;
left: 52px;
top: -18px;
font-size: 12px;      
    
}
#checkbox-pos{
  position:relative;
  right:-30px;
  top:1px;
  font-size:15px;
  width:3%;    
}
#des-apt{
  text-align:center;
  font-size:14px;
  position:relative;
  top:28px;
  font-weight:bold;     
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
        .formcontainer select
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
		width: 99px;
		margin-left: 40%;
		font-size:14px;
		background: #606062;
		color:#fff;
           
              
                position:relative;
                top:-10px;
                border-radius:5px !important;  
	  }

     #form-reg label {
      position:relative;
      left:92%
      top:10px;  

    }
    
    input {
    border: 1px solid  #848576; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 15px;
    background: rgba(255,255,255,255);
    margin: 0 0 10px 0;
}
input[type=text]:focus {
    background-color: #f2f2f2;
}
select {
    border: 1px solid  #848576;
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 15px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;
}
input[type=text]:focus {
    background-color: lightblue;
}

input[type=text]  { width:100%; margin-top:10px;
     
}
    
    
    
    
}


.navbar-default{
    background-color:transparent !important;
}

.reveal-if-active {
  opacity: 0;
  max-height: 0;
  overflow: hidden;
  font-size: 16px;
  -webkit-transform: scale(0.8);
          transform: scale(0.8);
  -webkit-transition: 0.5s;
  transition: 0.5s; 
}
.reveal-if-active label {
  display: block;
  margin: 0 0 3px 0; font-size:12px;
}
.reveal-if-active input[type=text]
				  input[type=select] {
  width: 100%;
}
input[type="radio"]:checked ~ .reveal-if-active, input[type="checkbox"]:checked ~ .reveal-if-active {
  opacity: 1;
  max-height: 100px;
  padding: 10px 20px;
  -webkit-transform: scale(1);
          transform: scale(1);
  overflow: visible;
}

body {
	background-attachment:fixed;
	background-position:50% 50%;
	background-size:cover;
	margin:0;
	padding:0; font-family: 'open_sansregular', sans-serif; font-size:13px;
}
.bg-pic { //background-image:url("../img/bg.jpg"); }


.wrapper {
	margin:0 auto;
	outline:none;
	padding:40px 15px;
	-webkit-box-sizing:content-box;
	-moz-box-sizing:content-box;
	box-sizing:content-box;
}

.content { padding:15px;
}


.wrapper-640 { margin:0 auto; max-width:1100px;}

.minput{width:40%; margin-right:32px; float:left; height:30px;}
.mminput{width:20%; margin-right:22px; float:left;}
.binput{width:50%; margin-right:22px; float:left;}
.ninput{width:30%; margin-right:32px; float:none;}

.mj-forms {
	background-color:#f9fafd;
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	-o-border-radius:3px;
	border-radius:3px;
	-webkit-box-shadow:0 2px 5px rgba(0,0,0,.6);
	-moz-box-shadow:0 2px 5px rgba(0,0,0,.6);
	-o-box-shadow:0 2px 5px rgba(0,0,0,.6);
	box-shadow:0 2px 5px rgba(0,0,0,.6);
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
	color:rgba(0,0,0,.54);
	line-height:1;
	position:relative; padding:10px; height:900px;
}
.j-forms {
	height: auto;
}

.j-forms .header {
	background-color:#E04C46;
	border-top:1px solid #848576;
	-webkit-border-radius:3px 3px 0 0;
	-moz-border-radius:3px 3px 0 0;
	-o-border-radius:3px 3px 0 0;
	border-radius:3px 3px 0 0;
	-webkit-box-shadow:0 6px 3px -3px rgba(63,81,181,.5);
	-moz-box-shadow:0 6px 3px -3px rgba(63,81,181,.5);
	-o-box-shadow:0 6px 3px -3px rgba(63,81,181,.5);
	box-shadow:0 6px 3px -3px rgba(63,81,181,.5);
	display:block;
	position:relative;
}
.mheader {
	//background-color: #f38040 ;
	//border-top:1px solid #848576;
	-webkit-border-radius:3px 3px 0 0;
	-moz-border-radius:3px 3px 0 0;
	-o-border-radius:3px 3px 0 0;
	border-radius:3px 3px 0 0;
        display:block;
	position:relative;
        
}

label{
	margin:0 0 3px 0;
	padding:0px;
	display:block;
	font-weight: bold; margin-bottom:15px;
}


/* Dividers
=============================== */
.divider,
.divider-text { border-top:1px solid #848576 ; height:0; margin-top:7px; margin-bottom:10px;  }

.divider-text { text-align:center; }

.divider-text span {
	border:1px solid #848576;
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	-o-border-radius:3px;
	border-radius:3px;
	background-color:#f9fafd;
	color:#E04C46;
	font-size:16px;
	padding:2px 15px;
	position:relative;
	top:-9px;
	white-space:nowrap;
}

</style>
<!-- Here we have added Google Analytics code after joined ---------->

<? if(isset($_GET['action']) && $_GET['action']=='joined') { ?>

<!--<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-22814456-1', 'auto');
  ga('send', 'pageview');

</script>--> 




<? } ?>





<link rel="canonical" href="https://www.mitsde.com/apply/register/index.php" />
</head>

<body class="bg-pic" style="margin-top:-2px;margin-bottom:8px;">
   <div class="wrapper-640">

		<div class="mheader">
		<a href="https://www.mitsde.com/" target="_blank"><img src="https://www.mitsde.com/apply/images/logo-1.png" width=200 height=80 style="float:left;"/></a><br/>
		<p style="margin-top:-10px;  margin-bottom:15px;font-size:14px;clear:both;font-family:'Roboto', sans-serif;">Approved by A I C T E, Govt.of India.</p>
	    </div>
		
   </div>
    

    



    
   <div class="wrapper-640" >
	
		<div class="mheader" style="">
		<div class="formheading" style="margin-top:10px;">	</div>
	    </div>
	    
   </div>

<!-- Menu Starts-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="../datcss/style.css" rel="stylesheet" type="text/css" media="all" />


<!-- start plugins -->
<script type="text/javascript" src="../datjs/jquery.min.js"></script>
<script type="text/javascript" src="../datjs/bootstrap.js"></script>
<script type="text/javascript" src="../datjs/bootstrap.min.js"></script>
<!-- start slider -->
<link href="../datcss/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../datjs/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="../datjs/jquery.cslider.js"></script>
		
		<!-- //Owl Carousel Assets -->
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/datcss/font-awesome.min.css">
<!----font-Awesome----->




<!-- Menu End-->




<div class="container" style="clear:both;position:relative;top:-20px;">


      

<div style="" id="des-apt"></div>
        <div class="errorslogin">
        <?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger" style="font-size:16px;">'.$error.'</p>';
					}
				}

				//if action is joined show sucess
                if(isset($_GET['action'])){
					//check the action
					switch ($_GET['action']) {
						case 'active':
							echo "<h4 class='bg-success'>Your account is now active you may now login.</h4>";
							break;
						case 'reset':
							echo "<h4 class='bg-success'>Please check your inbox for a reset link.</h4>";
							break;
						case 'resetAccount':
							echo "<h4 class='bg-success'>Password changed, you may now login.</h4>";
							break;
						case 'joined':
							echo "<h4 class='bg-success'>Registration successful, please activate your account by clicking on the link emailed you (Please check junk/spam mails).</h4>";
							break;
					}
                }
				?>
    </div>
  
   <div class="formcontainer">
        <div class="formdiv formdiv1">
      
       <h3 style="float:right;">New User? Register</h3>
            <br><br><br>
           
            <form role="form" method="post" name="menuContactform" id="menuContactform"  novalidate="novalidate" action="" autocomplete="off" style="position:relative;top:10px;">
                
                	<input type="hidden" name="csrf_test_name" value="e678298614a47d7e40efe0ccaf02b49c" />
					<input type="hidden" id="product_id3" name="product_id3" value="0" />
					<input type="hidden" id="product_name3" name="product_name3" value="" />
				    <input type="hidden" name="request_type3" value="Enquiry" />
                
                
               <div class="row">
                <div class="col-sm-6">
                    <label style="left: 66%;" id="label-email">First Name</label>
			        <input name="name" type="text" id="name" style="font-size: 14px;" required  placeholder="First Name" value="<?=$_POST['name']?>">
                </div>
                <div class="col-sm-6">
                    <label style="left: 66%; top:11px;" id="label-email">Last Name</label>
			        <input name="lastname" type="text" id="lastname" style="font-size: 14px;" required  placeholder="Last Name" value="<?=$_POST['lastname']?>">
                </div>
             </div>
                
			
                 <label style="" id="label-email">Email</label>
			<input name="email" type="email" id="email" style="margin-top:0px;font-size: 14px;" required  placeholder="Email Address" value="<?=$_POST['email']?>">
             <label style="" id="label-contact">Contact Number</label>
			 <input name="phonenumber" type="text" id="phonenumber" style="margin-top:-8px;font-size: 14px;" required  placeholder="Contact Number" maxlength="15" minlength="15" value="<?=$_POST['phonenumber']?>" onkeypress="return isNumberKey(event);">
			 <input type="hidden" name="vender" value="<?=$get?>">
			 <input type="hidden" name="SourcePath" value="<?=$vender?>">
	          <input name="pagename" type="hidden" value="ApplyNow"  />

             <label style="" id="label-password">Password</label>
			 			 
			  <input name="password" type="password" id="password" style="margin-top:-8px;font-size: 14px;"  value=""  required placeholder="Password">
                <label style="" id="label-confirm-password">Confirm Password</label>
                
			  <input name="passwordConfirm" type="password" id="passwordConfirm" style="margin-top:-8px;font-size: 14px;"  required value=""  placeholder="Confirm Password" >
              <br>
<input type="checkbox" required style="" id="checkbox-pos"><div style="" id="div-terms-cond"><a href="#" target="_blank" id="termcondi">I authorize MIT-SDE representative to contact me,this will override DND/NDNC registry</a></div>
              <br>
            	<div><input type="submit" name="register" value="Register" style="background:#606062;color:#FFF;width:99px;font-size: 14px;padding:5px 10px;" onClick = "validate('menuContactform')"></div>
            </form>
           <div style="border-right:10px solid rgb(59,59,59);height:100%;"></div>
            
        </div>
          
        <!--<div class="formdiv formdiv2" style="border-left:2px solid #8d8d8d; padding-top:0px;">-->
             <div class="formdiv formdiv2">
              <h3>Existing User? Login</h3>
            <br>
            <form role="form" method="post" action="" autocomplete="off" style="margin-top:-7px;">

<div style="width:100%;float:left;"> <div style="float:left;width:50%"></div> <div style="float:left;width:50%"><!--To Pay Fees :<input type="radio" name="datcheck" value="datpay" style="position: relative;top: 0px;left:5px;width:13px;">--></div></div>
       
                                 <label style="font-size:15px;">Email</label>
                <input name="email" type="email"  id="email" style="font-size: 14px; margin-top: -8px;" placeholder="Email" value="<?php if(isset($error)){ echo $_POST['email']; } ?>" size="30%">
                                 <label style="font-size:15px;">Password</label>

				<input name="password" type="password"  style="font-size: 12px; margin-top: -8px;" id="password" placeholder="Password" size="30%">
             
                <div><input type="submit" name="login" value="Login" style="background:#606062;color:#FFF;width:99px;font-size: 14px;padding: 5px 10px;top: 36px;"></div>
				   <div id="fogotpass" >
						 <a href='reset.php' style="font-family: inherit;font-size:14px; margin-top: 100px; margin-left: 320px;" >Forgot your Password?</a>
					</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </form>
			
        </div>
		
   </div>
   <br>
		<br>
		<br>
</div>


<script src="https://extraaedgeresources.blob.core.windows.net/demo/mitsde/Chatbot/js/chat.js"></script>



</body>
</html>