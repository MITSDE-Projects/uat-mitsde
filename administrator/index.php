<?php
ob_start();
session_start();

include("include/connection.php");
global $conn;

if(isset($_POST['submit']))
{
	
	//echo "IN SUBMIT"; exit;
	//extract($_POST);
	
	//echo "SELECT * FROM adminlogin WHERE username='".$username."' AND password='".$password."'"; exit;
	

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	
	$getlogdata = mysqli_query($conn,"SELECT username,id FROM adminlogin WHERE username='".$username."' AND password='".$password."'");

           
            $rowdata = mysqli_fetch_array($getlogdata);

            if(!empty($rowdata['username'])){
				$_SESSION['username'] = $rowdata['username'];
				$_SESSION['user_id'] = $rowdata['id'];
				
				if($rowdata['id']=='104' || $rowdata['id']=='105') {
				
				header('location:list_application.php?formstatus=Payment done');
				
				}
				
				header('location:dashboard_master.php');
				
			}
            else {
				header('location:index.php?msg=invalid_credentials');
			}

}
?>

<style>

.class_err{
color:red;		
}
</style>


<script>

function validations()
{
	
	var  username = document.getElementById('username').value;
	 if(username==''){
		document.getElementById('username_err').innerHTML='Enter Username';
		document.getElementById('username').focus();
		return false;
	 }
	
	var  password = document.getElementById('password').value;
	 if(password==''){
		document.getElementById('password_err').innerHTML='Enter Password';
		document.getElementById('password').focus();
		return false;
	 }
	 	
	

}
</script>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MITSDE | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="dashboard.php"><b>MITSDE</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
	  <?php include("include/common_messages.php");?>
        <p class="login-box-msg">Sign in to start your session</p>
        <form method="post" onsubmit="return validations();">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			<div id="username_err" class="class_err"></div>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
			<div id="password_err" class="class_err"></div>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <input type="submit" name="submit" class="btn btn-primary btn-block btn-flat" value="Sign In" >
            </div><!-- /.col -->
          </div>
        </form>

       

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
