<?php


$conn = mysqli_connect("localhost", "avantiow_dbuser", "g_mxP0iGba.(","avantiow_avantika_db");

// Different database selected because table is added in avantiow_avantika_db...



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



if(isset($_POST['submit'])) {
	
	extract($_POST);
	
	//echo '<pre>'; print_r($_POST); exit;
	
	
	
	
	 $query = mysqli_query($conn,"INSERT INTO tbl_refer_friend (first_name,last_name,phone_number,email,created_date)VALUES('".test_input($first_name)."','".test_input($last_name)."','".$phone_number."','".test_input($email)."',NOW())");
	 if($query){
		 
		 
		 
		 //Email and SMS code here!...
		 
		 	//$arrFields["USER"]= $first_name." ".$last_name;
	       // $arrFields["SITE"]= $SITENAME;
   
   
	       // flushmail(1,$email,$SITE_EMAIL,$arrFields);
			//Here after sending email we are sending details to leadsquared API.
			
			
			
			$accessKey = 'u$r576fcd37378e0ca980b433f3e599abe4';
            $secretKey = '3a198e044a2afac3272a803f9054b2d42cbe5dbe';
            $api_url_base = 'https://api.leadsquared.com/v2/LeadManagement.svc';

            $url = $api_url_base . '/Lead.Create?accessKey=' . $accessKey . '&secretKey=' . $secretKey;	

            $FirstName = $first_name;
            $LastName  = $last_name;
            $mx_Opted_Program = $program;
            $Mobile = $phone_number;
            $email = $email;
	    $Source = 'Refer Friend'; 


$data_string = '[
					{"Attribute":"FirstName", "Value": "'.$FirstName.'"},
					{"Attribute":"LastName", "Value": "'.$LastName.'"},
					{"Attribute":"mx_Opted_Program", "Value": "'.$mx_Opted_Program.'"},
					{"Attribute":"Mobile", "Value": "'.$Mobile.'"},
					{"Attribute":"Source", "Value": "'.$Source.'"},
					{"Attribute":"EmailAddress", "Value": "'.$email.'"}
				]';

try
{
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_HEADER, 0);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
												'Content-Type:application/json',
												'Content-Length:'.strlen($data_string)
												));
	$json_response = curl_exec($curl);
	
	//echo '<pre>'; print_r($json_response); exit;
	
	curl_close($curl);
} catch (Exception $ex) { 
	curl_close($curl);
}
		
			


			
			header('location:refer-friend.php?msg=refer_data_inserted');
		 
		 
	 }
	 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
     <title>Avantika | Refer Friend 2017</title>
	<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.0.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
<script type="text/javascript">(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="http://d36mw5gp02ykm5.cloudfront.net/yc/adrns_y.js?v=6.11.114#p=st500lt012-9ws142_s0vafg69xxxxs0vafg69";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);})();</script>
 
	<link href="style.css" rel="stylesheet" />
<link rel="shortcut icon" href="../images/favicon.ico" />
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
	  .class_err {
		color:red;		  
	  }
    </style>
    <!-- Facebook Pixel Code -->


<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->


<script>
function validEmail(e) 
          {
           var filter = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;
           return String(e).search (filter) != -1;
          }
		  
		  function myTrim(x) {
          return x.replace(/^\s+|\s+$/gm,'');
          }
		  
	  
		  
		  
function isNumericKey(e)
        {
        if (window.event) { var charCode = window.event.keyCode; }
        else if (e) { var charCode = e.which; }
        else { return true; }
        if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode!=45) { return false; }
        return true;
       }
function validations(){
	
        var first_name = myTrim(document.getElementById('first_name').value);
	if(first_name==''){
		document.getElementById('first_name_err').innerHTML='Kindly Enter First Name';
		document.getElementById('first_name').focus();
		return false;
	} else {
	    document.getElementById('first_name_err').innerHTML="";
	  }
	
	var last_name = myTrim(document.getElementById('last_name').value);
	if(last_name==''){
		document.getElementById('last_name_err').innerHTML='Kindly Enter Last Name';
		document.getElementById('last_name').focus();
		return false;
	}
	else {
	    document.getElementById('last_name_err').innerHTML="";
	  }
         var phone_number = myTrim(document.getElementById('phone_number').value);
	if(phone_number==''){
		document.getElementById('phone_number_err').innerHTML='Kindly Enter Phone';
		document.getElementById('phone_number').focus();
		return false;
	} else {
	    document.getElementById('phone_number_err').innerHTML="";
	  }          
        
           var email = document.getElementById('email').value;
	if(email==''){
		document.getElementById('email_err').innerHTML='Kindly Enter Email Address';
		document.getElementById('email').focus();
		return false;
	}
	else {
	    document.getElementById('email_err').innerHTML="";
	  }
     
	 
      if(!validEmail(email))
	  {
	    document.getElementById('email_err').innerHTML="Invalid Email"; 
	    document.getElementById('email').focus();
        return false; 		
	  } else {
	    document.getElementById('email_err').innerHTML="";
	  }

		
}


function checkemail(email){
	
	var refer_friend = 'refer_friend';
	if(email!='')
	    {				  
	    $.ajax({
		type: "POST",
		url: "ajax/ajax.php",
		data:{email:email,process:'refer_friend'},
		success: function(result)
					{
					    if(parseInt(result)==0)
						 {
							document.getElementById('email').value = "";
							document.getElementById('email_err').innerHTML = "<span style='color:red; margin-left:0px; align:left;'>Email Exists.</span>";
							return false;
						 }
						 else
						 {
							document.getElementById('email_err').innerHTML = "";
						 }
					}
				});

	    }
	
	
}




</script>

</head>

<body class="bg-pic" style="margin-top:8px;margin-bottom:8px;">
   <div class="wrapper-640">
	<br>
	<br>
		<div class="mheader">
		<div class="formheading" style="text-align: left;"><h3>MIT Pune Campus at Ujjain | MP</h3><h2>Avantika University - 2017</h2>
		<a href="http://avantikauniversity.edu.in"><img src="../images/avantika-logo.svg" width=100 height=100 /></a>
		</div>
	    </div>
   </div>
    <div class="container">
       <br>
        <div class="errorslogin">
<?php
       if(isset($_GET['action']) && $_GET['action']=='joined'){
       echo "Registration successful, please activate your account by clicking on the link emailed you (Kindly check junk/spam mails).";
       }
       
       if(isset($_GET['msg']) && $_GET['msg']=='refer_data_inserted'){
       echo "Thank you for your referral!..."; 
       }
?>
       </div>

 



   <br>
   <div class="formcontainer">
        <div class="formdiv formdiv1">
            <h3>Refer your friend!...</h3>
            <br>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validations();">


<b>Friend Full Name</b>:
<input type="text" name="first_name" id="first_name" placeholder="First Name">
<div id="first_name_err" class="class_err"></div>
<input type="text" name="last_name" id="last_name" placeholder="Last Name">
<div id="last_name_err" class="class_err"></div>
<br/>

<b>Mobile Number</b>: <input type="text" name="phone_number" id="phone_number" onKeyPress="return isNumericKey(event);" maxlength="10" placeholder="Phone Number"><br/>
	 <div id="phone_number_err"></div>
<b>Email</b>: <input type="text" name="email" id="email" placeholder="Email" onBlur="checkemail(this.value);"><br/>
	   <div id="email_err" class="class_err"></div>
	   
<b>Program</b>: 
<select name="program" id="program" style="width:100%;">
<option value="Design">Design</option>
<option value="Engineering">Engineering</option>
<option value="Architecture">Architecture</option>
<option value="Economics & Finance">Economics & Finance</option>
</select>
   
   
<input type="submit" name="submit" id="submit" value="submit"> 
</form>

</div>
        
		<div class="formdiv formdiv2">
		<h2>About Avantika</h2><div style="clear:both;"></div>
		
Avantika is India’s first design centered university, driven by the spirit of design thinking that blends a unique academic model for design, architecture and engineering disciplines. The university is poised to create a unique learning center that imparts transformative education to aspiring learners.

The value driven, project-based education framework is developed by a team of passionate design and engineering professionals and academicians. Avantika is mentored by Dr.Sanjay Dhande, Former Director of IIT Kanpur, an eminent educationist and a visionary institution builder.

Based in Ujjain, Madhya Pradesh, the objective is to nurture and cultivate young minds who will function as informed citizens.

		
		</div>
		
		
   </div>
   <br>
		<br>
		<br>
</div>
	
	
</body>
</html>