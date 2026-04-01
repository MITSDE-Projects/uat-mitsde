<html>
  <head>
    <title>Google reCAPTCHA v2 Checkbox</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
<div class="container">
<form action="verify_recaptcha.php" method="post">
    
    <div class="form-group">
        <input type="text" name="empname" value="" placeholder="Employee Name"  />
    </div>
    <div class="form-group">	
        <input type="email" name="email" value="" placeholder="Email"  />
    </div>
	<div class="form-group">	
        <input type="text" name="phone" value="" placeholder="Phone"  />
    </div>
    <div class="form-group">
        <textarea name="text" name="address" placeholder="Address.." ></textarea>
    </div>
		
    
    <div class="g-recaptcha" data-sitekey="6Lf1dR4gAAAAAJXXpTYVhawIuElj2l7XXvd2FRsJ" required=""></div>
	<input class="btn btn-info" type="submit" name="submit" value="SUBMIT" >
</form>
</div>
</body>
</html>