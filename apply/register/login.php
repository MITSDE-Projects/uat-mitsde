<?php
//include config
require_once('includes/config.php');
//check if already logged in move to home page
if( $user->is_logged_in() ){ header('Location: https://dat.net.in/register/'); } 
//process login form if submitted
if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	

		
		$stmt = $db->prepare("SELECT testcenter,terms,lastPage,username FROM student WHERE username = :username");
		$stmt->execute(array(':username' => $username));
		
		 while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
			if($row['username']==$username)
			{
		  $testcenter = $row['testcenter'];
		  $terms = $row['terms'];
		  $page = $row['lastPage'];
					$_SESSION['username'] = $username;
					$user->login($username,$password);
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
			unset($_SESSION['username']);
		$error[] = 'Wrong username or password or your account has not been activated.';			
		}
		}
	

}//end if submit

//define page title
$title = 'Login';
//include header template
require('layout/header.php'); 
?>
<html>
<head>
<link rel="stylesheet"  href="style/style.css">
 </head>
<body class="bg-pic">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <td><div class="mheader">
	   <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4"><img src="images/LOGO.jpg" width="1000" height="100"  alt=""/></td>
    </tr>
  <tr>
    <td width="1%">&nbsp;</td>
    </tr>
</table>
    </div></td>
  </tr>
  <tr>
    <td valign="middle">	<div class="content" style="background:#FFF;" >
    
    <form role="form" method="post" action="" autocomplete="off">
				<div class="divider-text gap-top-20 gap-bottom-45">
					<span>Login</span>
				</div>
				<p><a href='./'>Back to Register Page</a></p>
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
						case 'resetAccount':
							echo "<h3 class='bg-success'>Password changed, you may now login.</h3>";
							break;
							case 'joined':
							echo "<h3 class='bg-success'>Registration successful, please check your email (Inbox, Spam and Junkmail) to activate your account.</h3>";
							break;
					}

				}
				?>

				<div class="dp">
					<input name="username" type="text"  id="username" placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" size="30%">
				</div>
<div style="clear:both"></div>
				<div class="dp">
					<input name="password" type="password"  id="password" placeholder="Password" size="30%">
				</div>
				<div style="clear:both"></div>
		  <div class="row" style="margin-bottom:15px;">
					<div class="col-xs-9 col-sm-9 col-md-9">
						 <a href='reset.php'>Forgot your Password?</a>
					</div>
				</div>
			
				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Login"></div>
				</div>
			</form>
    </div></td>
  </tr>
</table>

<div class="wrapper-640">
	

</div>
</body>
</html>

<?php 
//include header template
require('layout/footer.php'); 
?>
