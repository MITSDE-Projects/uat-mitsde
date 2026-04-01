<?php
// Redirect browser
//header("Location: https://mitsde.com/apply-now");
 //exit;
ob_start();
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';

//echo '<pre>'; print_r($_SERVER); exit;
if (isset($_GET['source']) && $_GET['source'] != "") {
    session_start();
    $_SESSION['src'] = $_GET['source'];

}

if (!isset($_SESSION['src']) && $_SESSION['src'] == "") {

    $_SESSION['src'] = 'oth';

}

if (!isset($_GET['source'])) {

    $_SESSION['src'] = 'oth';

}

if ($_GET['source'] == "") {

    $_SESSION['src'] = 'oth';

}

//echo $_SESSION['src']; exit;

require 'includes/config.php';
include_once "../php/commonfunctions.php";
//if logged in redirect to members page
if ($user->is_logged_in()) {header('Location: ../page1_form.php');}

//if form has been submitted process it
if (isset($_POST['register'])) {

    $name = $_POST['name'];

    // Storing google recaptcha response
    // in $recaptcha variable
    $recaptcha = $_POST['g-recaptcha-response'];

    // Put secret key here, which we get
    // from google console
    $secret_key = '6Lf1dR4gAAAAAJm1h4pKoaoKG-LtkR9qZEMR-YYb';

    // Hitting request to the URL, Google will
    // respond with success or error scenario
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
        . $secret_key . '&response=' . $recaptcha;

    // Making request to verify captcha
    $response = file_get_contents($url);

    // Response return by google is in
    // JSON format, so we have to parse
    // that json
    $response = json_decode($response);

    // Checking, if response is true or not
    if ($response->success == true) {
        echo '<script>alert("Google reCAPTACHA verified")</script>';
        echo '<scirpt>document.getElementById("register").style.visibility = "hidden"</script>';

        $_POST['register'];
        $_POST['email'];
        $_POST['phonenumber'];

        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $MobileNumber = $_POST['phonenumber'];
        $Email = $_POST['email'];

//die;
//if(empty($ExtraEdgeID))
//{

        $url = "https://prodapi.extraaedge.com/api/WebHook/add";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Authorization: Bearer MITSDE-11-06-2020",
            "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = <<<DATA
{
  "AuthToken": "MITSDE-11-06-2020",
    "Source": "mitsde",
     "eesourceid": "29",
    "mobilenumber": "$MobileNumber",
    "email": "$Email"
 }
DATA;

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);
//var_dump($resp);
        $response = json_decode($resp, true);
//print_r($response);

        $leadId = $response['leadId'];

//echo  "</br>leadid--->".$leadid=$resp[string][userId];

        if ($leadId != 0) {
            $IP = $_SERVER['REMOTE_ADDR'];
            $leadId;

            if (strlen($_POST['email']) < 5) {

                $error[] = 'Email is too short.';
            } else {
                //echo "</br>error-->";
                $stmt = $db->prepare('SELECT email FROM student WHERE email = :email');
                $stmt->execute(array(':email' => $_POST['email']));
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                //echo "</br>check mailid exit--->".$row['email'];
                if (!empty($row['email'])) {
                    header('Location:https://www.mitsde.com/apply/register/index.php?action=exitmailid&firstname=' . $name . '&lastname=' . $lastname . '&emailid=' . $Email . '&mob=' . $MobileNumber . '');
                    $error[] = 'Email provided is already in use.';
                    //    print_r($error);
                }

            }

            if (strlen($_POST['phonenumber']) > 15) {
                $error[] = 'Invalid contact number.';
            }

            if (strlen($_POST['password']) < 5) {
                $error[] = 'Password is too short.';
            }

            if (strlen($_POST['passwordConfirm']) < 5) {
                $error[] = 'Confirm password is too short.';
            }

            if ($_POST['password'] != $_POST['passwordConfirm']) {
                $error[] = 'Passwords do not match.';
            }

            //if no errors have been created carry on
            if (!isset($error)) {

                //hash the password
                $hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);

                //create the activasion code
                $activasion = md5(uniqid(rand(), true));

                try {
                    //insert into database with a prepared statement
                    $stmt = $db->prepare('INSERT INTO student (password,email,active,phonenumber,src,name,lastname,formstatus,bloodgroup) VALUES (:password, :email, :active, :phonenumber, :src, :name, :lastname,"registered",:bloodgroup)');

//echo $stmt; exit;

                    if ($_SESSION['src'] == "") {$_SESSION['src'] = 'oth';}

                    $stmt->execute(array(
                        ':password' => $hashedpassword,
                        ':email' => $_POST['email'],
                        ':active' => $activasion,
                        ':phonenumber' => $_POST['phonenumber'],
                        ':src' => $_SESSION['src'],
                        ':name' => $_POST['name'],
                        ':lastname' => $_POST['lastname'],
                        ':bloodgroup' => $IP,

                    ));
///echo $stmt->insert_id; exit;

                    //   echo  $stmt; exit;

                    $id = $db->lastInsertId('memberID');
                    $email = $_POST['email'];
                    //send email

                    //-----------------------------------------------------------------SEND Mail Function--------------------------
                    $mail = new PHPMailer();
                    ob_start(); //Turn on output buffering
                    $email = $_POST['email'];
                    ?>

<p></p>
<p>Username : <?=$_POST['email'];?></p>
<p>Password:<?=$_POST['password'];?></p>
<p>To activate your account, please click <a
        href='https://mitsde.com/apply/register/activatedat.php?x=<?=$id?>&xz=<?=$_POST['phonenumber'];?>&y=<?=$activasion;?>&src=<?=$_SESSION['src']?>'>Here</a>
</p>
<p>Regards,<br>Team MIT SDE</p>

<?php
/*$body  = ob_get_clean();
                    // $mail->IsSMTP(); // telling the class to use SMTP
                    $mail->IsMail();
                    $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                    $mail->SMTPAuth   = true;                  // enable SMTP authentication
                    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
                    $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
                    $mail->Port       = 465;                   // set the SMTP port for the GMAIL
                    $mail->Username   = "no-replay@mitsde.com";  // GMAIL username
                    $mail->Password   = "No@mitsde";            // GMAIL password  */// GMAIL password
                    $body = ob_get_clean();
                    //$mail->Mailer = "mail";
                    $mail->IsSMTP(); // telling the class to use SMTP
                    //$mail->IsMail(); // telling the class to use SMTP
                    $mail->SMTPDebug = 0; // enables SMTP debug information (for testing) // 1 = errors and messages
                    // $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                    $mail->SMTPAuth = true; // enable SMTP authentication
                    $mail->SMTPSecure = "tls"; // sets the prefix to the servier
                    $mail->Host = "email-smtp.us-east-1.amazonaws.com"; // sets GMAIL as the SMTP server
                    $mail->Port = 2587; // set the SMTP port for the GMAIL
                    $mail->Username = "AKIA5OQ6466FZWEYNNVJ"; // GMAIL username
                    $mail->Password = "BB8uQenn6fCEjW791mFxeUgQ39xwI/9PEBDPz7uasG58"; // GMAIL password

                    $mail->SetFrom('admissions@mitsde.com', 'MIT School of Distance Education');

                    $mail->AddReplyTo('no-reply@mitsde.com', 'No-Reply');

                    $mail->Subject = "MIT SDE: Registration 2024 / 25";

                    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

                    $mail->MsgHTML($body);

                    $address = $email;
                    $mail->AddAddress($address);
                    
                    
                    $mail->AddBCC('sanjay.gaikwad@mitsde.com');
                    $mail->AddBCC('umesh.ghatale@mitsde.com');
                    $mail->AddBCC('shivraj.pachawadkar@mitsde.com');
                    
                    

                    $mail->Send();

                    //----------------------------------------------------------Send Mail Function END----------------------------------------------------

                    ?>
<p></p>
<p>Username : <?=$_POST['email'];?></p>
<p>Password:<?=$_POST['password'];?></p>
<p>To activate your account, please click <a href='#'>Here</a></p>
<p>Regards,<br>Team MIT SDE</p>
<?



			header('Location:https://www.mitsde.com/apply/register/index.php?action=joined&firstname='.$name.'&lastname='.$lastname.'&emailid='.$Email.'&mob='.$MobileNumber.'');
		     //header('Location:https://www.mitsde.com/thankyou.php');


			//exit;
			//redirect to index page

		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}

	} // not error close

   } //if close for checking exist lead
   else
   {
       $IP="F-".$_SERVER['REMOTE_ADDR'];
       //echo "</br>i am not in extra edge";
       $leadId;
      // die;
       if(strlen($_POST['email']) < 5)
	{
		$error[] = 'Email is too short.';
	} else {
		$stmt = $db->prepare('SELECT email FROM student WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['email']))
		{
		    header('Location:https://www.mitsde.com/apply/register/index.php?action=exitmailid&firstname='.$name.'&lastname='.$lastname.'&emailid='.$Email.'&mob='.$MobileNumber.'');
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
			header('Location:https://www.mitsde.com/apply/register/index.php?action=exitmailid&firstname='.$name.'&lastname='.$lastname.'&emailid='.$Email.'&mob='.$MobileNumber.'');
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
			$stmt = $db->prepare('INSERT INTO student (password,email,active,phonenumber,src,name,lastname,formstatus,bloodgroup) VALUES (:password, :email, :active, :phonenumber, :src, :name, :lastname,"registered", :bloodgroup)');

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
			    ':bloodgroup' => $IP,

			));
///echo $stmt->insert_id; exit;


                     //   echo  $stmt; exit;


			$id = $db->lastInsertId('memberID');
			$email =  $_POST['email'];
			//send email

          //-----------------------------------------------------------------SEND Mail Function--------------------------
		   $mail  = new PHPMailer();
           ob_start(); //Turn on output buffering
           $email =  $_POST['email'];
?>

<p></p>
<p>Username : <?=$_POST['email'];?></p>
<p>Password:<?=$_POST['password'];?></p>
<p>To activate your account, please click <a
        href='https://mitsde.com/apply/register/activatedat.php?x=<?=$id?>&xz=<?=$_POST['phonenumber'];?>&y=<?=$activasion;?>&src=<?=$_SESSION['src']?>'>Here</a>
</p>
<p>Regards,<br>Team MIT SDE</p>

<?php
/*$body  = ob_get_clean();
                    // $mail->IsSMTP(); // telling the class to use SMTP
                    $mail->IsMail();
                    $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                    $mail->SMTPAuth   = true;                  // enable SMTP authentication
                    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
                    $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
                    $mail->Port       = 465;                   // set the SMTP port for the GMAIL
                    $mail->Username   = "no-replay@mitsde.com";  // GMAIL username
                    $mail->Password   = "No@mitsde";            // GMAIL password  */// GMAIL password
                    $body = ob_get_clean();
                    //$mail->Mailer = "mail";
                    $mail->IsSMTP(); // telling the class to use SMTP
                    //$mail->IsMail(); // telling the class to use SMTP
                    $mail->SMTPDebug = 0; // enables SMTP debug information (for testing) // 1 = errors and messages
                    // $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                    $mail->SMTPAuth = true; // enable SMTP authentication
                    $mail->SMTPSecure = "tls"; // sets the prefix to the servier
                    $mail->Host = "email-smtp.us-east-1.amazonaws.com"; // sets GMAIL as the SMTP server
                    $mail->Port = 2587; // set the SMTP port for the GMAIL
                    $mail->Username = "AKIA5OQ6466FZWEYNNVJ"; // GMAIL username
                    $mail->Password = "BB8uQenn6fCEjW791mFxeUgQ39xwI/9PEBDPz7uasG58"; // GMAIL password

                    $mail->SetFrom('admissions@mitsde.com', 'MIT School of Distance Education');

                    $mail->AddReplyTo('no-reply@mitsde.com', 'No-Reply');

                    $mail->Subject = "MIT SDE: Registration 2024 / 25";

                    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

                    $mail->MsgHTML($body);

                    $address = $email;
                    $mail->AddAddress($address);
                    $mail->AddBCC('sanjay.gaikwad@mitsde.com');
                    $mail->AddBCC('umesh.ghatale@mitsde.com');
                    $mail->AddBCC('shivraj.pachawadkar@mitsde.com');

                    $mail->Send();

                    //----------------------------------------------------------Send Mail Function END----------------------------------------------------

                    //    header('Location:https://www.mitsde.com/apply/register/index.php?action=joined');
                    header('Location: https://mitsde.com/thankyou.php');

                    //exit;
                    //redirect to index page

                    //else catch the exception and show the error.
                } catch (PDOException $e) {
                    $error[] = $e->getMessage();
                }

            } // not error close
        }
    } else {
        echo '<script>alert("Error in Google reCAPTACHA")</script>';
    }

}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($email) && $email !== "" && isset($password) && $password !== "") {

        $stmt = $db->prepare("SELECT email,lastPage,phonenumber FROM student WHERE email = :email");
        $stmt->execute(array(':email' => $email));

        $i = 0;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //echo "IN WHILE";
            //echo '<pre>'; print_r($row); exit;
            //exit;

            $i++;
            if ($row['email'] == $email) {

                $page = $row['lastPage'];
                $_SESSION['email'] = $email;
                $_SESSION['phonenumber'] = $row['phonenumber'];
                $user->login($email, $password);

                if (!empty($page)) {
                    header('Location: ../' . $page);
                } else {
                    header('Location: ../page1_form.php');
                }

            } else {
                unset($_SESSION['email']);

                $error[] = 'Wrong username or password or your account has not been activated.';
            }
        }
        if ($i == 0) {
            unset($_SESSION['email']);

            $error[] = 'Invalid username or password.';
        }
    } else {
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

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Admissions 2024 / 25</title>
    <!--<link href="../css/style.css" rel="stylesheet" />-->
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/style_index.css">

    <script src="../js/common.js"></script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/captch_vali.js"></script>

    <!-- Form Validation code---------->

    <script type="text/javascript">
    var ck_name = /^[A-Za-z0-9 ]{1,25}$/;
    var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
    var ck_username = /^[A-Za-z0-9_]{1,20}$/;
    var ck_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
    var ck_mob = /^[\s()+-]*([0-9][\s()+-]*){10}$/;


    function validate1(menuContactform) {
        //alert('hi');

        var name = menuContactform.name.value;
        var lastname = menuContactform.lastname.value;
        var email = menuContactform.email.value;
        var phonenumber = menuContactform.phonenumber.value;

        var errors = [];

        if (!ck_name.test(name)) {
            errors[errors.length] = "Please Enter Name.";
        }

        if (!ck_name.test(lastname)) {
            errors[errors.length] = "Please Enter Your last name";
        }

        if (!ck_email.test(email)) {
            errors[errors.length] = "You must enter a valid email address.";
        }
        if (!ck_mob.test(phonenumber)) {
            errors[errors.length] = "You must enter a valid Mobile.";
        }




        if (errors.length > 0) {
            reportErrors(errors);
            return false;
        }

        return true;
    }

    function reportErrors(errors) {
        var msg = "Please Enter Valide Data...\n";
        for (var i = 0; i < errors.length; i++) {
            var numError = i + 1;
            msg += "\n" + numError + ". " + errors[i];
        }
        alert(msg);
    }
    </script>
    <link rel="canonical" href="https://mitsde.com/apply/register/index.php" />

    <script src='//cdnt.netcoresmartech.com/smartechclient.js'></script>
    <script>
    smartech('create', 'ADGMOT35CHFLVDHBJNIG50K9684NKLUBTHIPB5R89RGQ434FC7L0');
    smartech('register', '80a04087e7a8030b1878063ecc627703');
    smartech('identify', '');
    smartech('dispatch', 1, {});
    </script>
    <!-- Google Tag Manager -->


<script>
(function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-TC6SBSS');
  </script>
  <!-- End Google Tag Manager -->

  <!--  gtm 2024 april -->

  


<!-- 22 may new code -->


<!-- Google tag (gtag.js) -->

<script async src="https://www.googletagmanager.com/gtag/js?id=G-2ZR13STXJV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2ZR13STXJV');
</script>

<!-- 22 may new code -->






<!-- Google tag (gtag.js) -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156123392-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

  gtag('config', 'UA-156123392-1');
</script>

<!-- Google tag (gtag.js) -->


<!-- Meta Pixel Code -->

<script>
  !function (f, b, e, v, n, t, s) {
    if (f.fbq) return; n = f.fbq = function () {
      n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
    n.queue = []; t = b.createElement(e); t.async = !0;
    t.src = v; s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '3666048933534713');
  fbq('track', 'PageView');
</script>

<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=3666048933534713&ev=PageView&noscript=1" />
</noscript>

<!-- End Meta Pixel Code -->

<!-- Event snippet for Website traffic conversion page -->

<script>
  gtag('event', 'conversion', { 'send_to': 'AW-11094775532/ILE1CPrXoYwYEOyts6op' });
</script>

<!-- Google tag (gtag.js) -->

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11094775532"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

  // gtag('config', 'AW-11094775532');
  gtag('config', 'AW-11167672196');
</script>

<!-- Google Tag Manager -->

<script>(function (w, d, s, l, i) {
    w[l] = w[l] || []; w[l].push({
      'gtm.start':
        new Date().getTime(), event: 'gtm.js'
    }); var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-WW26S6M');</script>


<!-- End Google Tag Manager -->
</head>

<body class="bg-pic" style="margin-top:-2px;margin-bottom:8px;" onload="createCaptcha()">
 <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TC6SBSS"
         height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
<!-- End Google Tag Manager (noscript) -->
        <!-- Header Nav Start -->
    <!-- dynamic code -->

    <div class="wrapper-640">

        <div class="mheader" style="">
            <div class="formheading" style="margin-top:10px;"> </div>
        </div>

    </div>

    <!-- Menu Starts-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>

    <link href="../datcss/style.css" rel="stylesheet" type="text/css" media="all" />


    <!-- start plugins -->
    <script type="text/javascript" src="../datjs/jquery.min.js"></script>
    <script type="text/javascript" src="../datjs/bootstrap.js"></script>
    <script type="text/javascript" src="../datjs/bootstrap.min.js"></script>
    <!-- start slider -->
    <link href="../datcss/slider.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="../datjs/modernizr.custom.28468.js"></script>
    <script type="text/javascript" src="../datjs/jquery.cslider.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- //Owl Carousel Assets -->
    <!----font-Awesome----->
    <link rel="stylesheet" href="fonts/datcss/font-awesome.min.css">



    <div class="container" style="clear:both;position:relative;top:-20px;">

        <div class="row">
            <div class="col-md-6"><a href="https://www.mitsde.com/" target="_blank"><img src="images/logo-1.png"
                        width=200 height=80 style="float:left;" /></a><br />
                <p
                    style="margin-top:-10px;  margin-bottom:15px;font-size:14px;clear:both;font-family:'Roboto', sans-serif;">
                    Approved by A I C T E, Govt.of India.</p>
            </div>


            <div class="col-md-6" style="margin-top:10px;">
                <div class="col-md-3"> <a href="https://mitsde.com/ContactUs">
                        <h4>Contact Us</h4>
                    </a></div>
                <div class="col-md-3">
                    <h4>admissions@mitsde.com</h4>
                </div>



            </div>
        </div>


        <div style="" id="des-apt"></div>
        <div class="errorslogin">
            <?php
//check for any errors
if (isset($error)) {
    foreach ($error as $error) {
        echo '<p class="bg-danger" style="font-size:16px;">' . $error . '</p>';
    }
}

//if action is joined show sucess
if (isset($_GET['action'])) {
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

            $firstname = $_GET['firstname'];
            $lastname = $_GET['lastname'];
            $emailid = $_GET['emailid'];
            $mob = $_GET['mob'];
            ?>

            <script>
            smartech('contact', 'LIST IDENTIFIER', {
                'FIRST_NAME': "<?php echo $firstname; ?>",
                'LAST_NAME': "<?php echo $lastname; ?>",
                'pk^email': "<?php echo $emailid; ?>",
                'mobile': "<?php echo $mob; ?>"


            });
            smartech('identify', "<?php echo $emailid; ?>");
            smartech('dispatch', 'Register', {
                'FIRST_NAME': "<?php echo $firstname; ?>",
                'LAST_NAME': "<?php echo $lastname; ?>",
                'pk^email': "<?php echo $emailid; ?>",
                'mobile': "<?php echo $mob; ?>"
            });
            </script>


            <?php

            break;

        case 'exitmailid':
            echo "<h4 class='bg-success'>Email provided is already in use.</h4>";

            $firstname = $_GET['firstname'];
            $lastname = $_GET['lastname'];
            $emailid = $_GET['emailid'];
            $mob = $_GET['mob'];
            ?>

            <script>
            smartech('contact', 'LIST IDENTIFIER', {
                'pk^email': "<?php echo $emailid; ?>",
                'FIRST_NAME': "<?php echo $firstname; ?>",
                'LAST_NAME': "<?php echo $lastname; ?>",
                'mobile': "<?php echo $mob; ?>"


            });
            smartech('identify', "<?php echo $emailid; ?>");
            smartech('dispatch', 'Register', {
                'FIRST_NAME': "<?php echo $firstname; ?>",
                'LAST_NAME': "<?php echo $lastname; ?>",
                'email': "<?php echo $emailid; ?>",
                'mobile': "<?php echo $mob; ?>"
            });
            </script>


            <?php

            break;
    }
}
?>
        </div>

        <div class="formcontainer">
            <div class="formdiv formdiv1">

                <h3 style="float:right;">New User? Register</h3>
                <br><br><br>

                <form role="form" method="post" name="menuContactform" id="menuContactform" novalidate="novalidate"
                    action="" onSubmit="return validate1(this);" autocomplete="off" style="position:relative;top:10px;">

                    <input type="hidden" name="csrf_test_name" value="e678298614a47d7e40efe0ccaf02b49c" />
                    <input type="hidden" id="product_id3" name="product_id3" value="0" />
                    <input type="hidden" id="product_name3" name="product_name3" value="" />
                    <input type="hidden" name="request_type3" value="Enquiry" />


                    <div class="row">
                        <div class="col-sm-6">
                            <label style="left: 66%; padding-top: 10px;" id="label-email">First Name <sanp
                                    style="color:red;">*</sanp></label>
                            <input name="name" type="text" id="name" style="font-size: 14px;" required
                                placeholder="First Name" value="<?=$_POST['name']?>">
                        </div>
                        <div class="col-sm-6">
                            <label style="left: 66%;" id="label-email">Last Name <sanp style="color:red;">*</sanp>
                            </label>
                            <input name="lastname" type="text" id="lastname" style="font-size: 14px;" required
                                placeholder="Last Name" value="<?=$_POST['lastname']?>">
                        </div>
                    </div>


                    <label style="" id="label-email">Email <sanp style="color:red;">*</sanp></label>
                    <input name="email" type="email" id="email" style="margin-top:0px;font-size: 14px;" required
                        placeholder="Email Address" value="<?=$_POST['email']?>">
                    <label style="" id="label-contact">Contact Number <sanp style="color:red;">*</sanp></label>
                    <input name="phonenumber" type="text" id="phonenumber" style="margin-top:-8px;font-size: 14px;"
                        required placeholder="Contact Number" maxlength="15" minlength="15"
                        value="<?=$_POST['phonenumber']?>" onkeypress="return isNumberKey(event);">

                    <input type="hidden" name="vender" value="<?=$get?>">
                    <input type="hidden" name="SourcePath" value="<?=$vender?>">
                    <input name="pagename" type="hidden" value="ApplyNow" />

                    <label style="" id="label-password">Password <sanp style="color:red;">*</sanp> </label>

                    <input name="password" type="password" id="password" style="margin-top:-8px;font-size: 14px;"
                        value="" required placeholder="Password">
                    <label style="" id="label-confirm-password">Confirm Password <sanp style="color:red;">*</sanp>
                    </label>

                    <input name="passwordConfirm" type="password" id="passwordConfirm"
                        style="margin-top:-8px;font-size: 14px;" required value="" placeholder="Confirm Password">
                    <div><label id="label-password" style="left: 80%;">Captcha <sanp style="color:red;">*</sanp></label>
                    </div>
                    <div class="row">

                        <div class="col-sm-4">

                        </div>
                        <div class="col-sm-8">

                            <div class="g-recaptcha" data-sitekey="6Lf1dR4gAAAAAJXXpTYVhawIuElj2l7XXvd2FRsJ" required=""></div>
                        </div>
                    </div>
                    <br>
                    <input type="checkbox" required style="" id="checkbox-pos">
                    <div style="" id="div-terms-cond"><a href="#" target="_blank" id="termcondi">I authorize MIT-SDE
                            representative to contact me,this will override DND/NDNC registry</a></div>
                    <br>
                    <div><button type="submit" name="register" id="register" value="Register"
                            style="background:#606062;color:#FFF;width:99px;font-size: 14px;padding:5px 10px;">Register</button>
                    </div>
                </form>
                <div style="border-right:10px solid rgb(59,59,59);height:100%;"></div>

            </div>

            <!--<div class="formdiv formdiv2" style="border-left:2px solid #8d8d8d; padding-top:0px;">-->
            <div class="formdiv formdiv2">
                <h3>Existing User? Login</h3>
                <br>
                <form role="form" method="post" action="" autocomplete="off" style="margin-top:-7px;">

                    <div style="width:100%;float:left;">
                        <div style="float:left;width:50%"></div>
                        <div style="float:left;width:50%">
                            <!--To Pay Fees :<input type="radio" name="datcheck" value="datpay" style="position: relative;top: 0px;left:5px;width:13px;">-->
                        </div>
                    </div>

                    <label style="font-size:15px;">Email</label>
                    <input name="email" type="email" id="email" style="font-size: 14px; margin-top: -8px;"
                        placeholder="Email" value="<?php if (isset($error)) {echo $_POST['email'];}?>" size="30%">
                    <label style="font-size:15px;">Password</label>
                    <input name="password" type="password" style="font-size: 12px; margin-top: -8px;" id="password"
                        placeholder="Password" size="30%">
                    <div><input type="submit" name="login" value="Login"
                            style="background:#606062;color:#FFF;width:99px;font-size: 14px;padding: 5px 10px;top: 36px;">
                    </div>
                    <div id="fogotpass">
                        <a href='reset.php'
                            style="font-family: inherit;font-size:14px; margin-top: 100px; margin-left: 320px;">Forgot
                            your Password?</a>
                    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </form>

            </div>

        </div>
        <br>
        <br>
        <br>
    </div>

    <!--<script src="https://www.kenyt.ai/botapp/ChatbotUI/dist/js/bot-loader.js" type="text/javascript" data-bot="193956757"></script>-->
    <!--<script src="https://extraaedgeresources.blob.core.windows.net/demo/mitsde/Chatbot/js/chat.js"></script>-->
    <!--<script src="https://eequeuestorage.blob.core.windows.net/documents/mitsde/Chatbot/js/chat.js"></script>-->
    <!----current ChatBot------->


</body>

</html>