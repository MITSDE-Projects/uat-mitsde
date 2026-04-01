<?php session_start();
include("apply/php/db.php");
//include_once "onlineapplicationtest/php/db.php";

function generatetransactionid()
           {
           $transactionId=date('dmyhis');
           return $transactionId;  
           }
  $transactionId=generatetransactionid();
 
 //echo "</br>Normal-->".$transactionId="051218082426";
 
//echo "</br>SELECT * FROM OtherFeesTransaction WHERE t_process_id = '".$transactionId."'";

$result1 = mysqli_query($connection,"SELECT * FROM loan_registration WHERE lr_order_id = '".$transactionId."'");
       
		
        if(mysqli_num_rows($result1)>0)
        { 
          //echo "</br>not zero 1";
           function generatetransactionid1()
           {
          $transactionId=date('dmyhis');
           return $transactionId;  
           }
           $transactionId=generatetransactionid1(); 
           }
        else
          {
          $transactionId=generatetransactionid();
          }
          
         

?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
<!-- Meta Tags -->
<html dir="ltr" lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>

<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />

<!-- Page Title -->
<title>Reistration for EMI</title>

<!-- Favicon and Touch Icons -->
<link href="media/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">
	
	<!-- Animation Style -->
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/animate.css"> -->
	
   <!--API for Queck contact----->
	  <script src="ajax-load/js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="ajax-load/js/validation.js" charset="UTF-8"></script>
	 <!----->
	 
 
<script type="text/javascript">
var ck_name = /^[A-Za-z0-9 ]{3,100}$/;
var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
var ck_username = /^[A-Za-z0-9_]{1,20}$/;
var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
var ck_mob =  /^[\s()+-]*([0-9][\s()+-]*){10}$/;


function validate(OtherFeesPayment)
{
//alert('hi');


 var StudentName = OtherFeesPayment.StudentName.value;
 var email = OtherFeesPayment.EmailID.value;
 var MobileNo = OtherFeesPayment.MobileNo.value;
 
  
  
 var errors = [];
 

 
 if (!ck_name.test(StudentName)) {
  errors[errors.length] = "Please Enter Your Name";
 }
  
 if (!ck_email.test(email)) {
  errors[errors.length] = "You must enter a valid email address.";
 }
 if (!ck_mob.test(MobileNo)) {
  errors[errors.length] = "You must enter a valid Mobile.";
 }

 
 
 if (errors.length > 0) {
  reportErrors(errors);
  return false;
 }
 
 return true;
}

function reportErrors(errors){
 var msg = "Please Enter Valide Data...\n";
 for (var i = 0; i<errors.length; i++) {
  var numError = i + 1;
  msg += "\n" + numError + ". " + errors[i];
 }
 alert(msg);
}
</script>
</head> 
<body class="header-sticky">
    <div class="boxed">
        <?php include"header.php"; ?><!-- /.header -->
<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
</script> 
        <!--<div class="page-title parallax canvas"> 
        	<div class=""></div>            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h2 class="title">Canvas</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>About us</li>
                            </ul>                   
                        </div>
						
						
                    </div>
                </div>
            </div>        
        </div>-->
    	
        <!-- About -->
            <section class="flat-row pad-top-100">
			
                <div class="container">
         <div class="row">
           <div class="col-md-6 col-md-push-3">
            <div class="border-5px  p-30 mb-0" style="border-color:#710000;">
              <h3 class="text-theme-colored mt-0 pt-5">EMI Process</h3>
			  
              <hr>
              
				
              
              <form action="LoanRequestHandler.php" name="OtherFeesPayment" id="OtherFeesPayment" onSubmit="return validate(this);" method="post">

                        
					<input type="hidden" name="tid" id="tid"/> 
				    <!-- <input type="hidden" name="merchant_id" id="merchant_id" value="193023"/>-->
				   <input type="hidden" name="merchant_id" id="merchant_id" value="2874274"/>
				    <input type="hidden" name="order_id" value="<?php echo $transactionId; ?>"/>  
				    <input type="hidden" name="currency" value="INR"/> 
				    <input type="hidden" name="redirect_url" id="redirect_url" value="https://mitsde.com/LonaResponse.php"/>
				    <input type="hidden" name="cancel_url" id="cancel_url" value="https://mitsde.com/LonaResponse.php"/> 
			 	    <input type="hidden" name="language" value="EN"/> 
						
						
  <input type="hidden" class="form-control" name="merchant_param3"  id="merchant_param3" value="123"  placeholder="Admission ID"/>
 
 <div class="col-sm-6"> <div class="form-group"><input type="text" class="form-control" name="delivery_name"  placeholder="Student Name" id="StudentName"></div></div>
                              <input type="hidden" name="delivery_address" value="Pune"/>
							  
  <div class="col-sm-6"> <div class="form-group"><input type="text" class="form-control" name="billing_email" id="EmailID" placeholder="Email ID"></div></div>
  
   <div class="col-sm-6"><div class="form-group"><input type="text" class="form-control" name="delivery_tel" id="MobileNo" placeholder="Mobile No"> </div></div>
   <input type="hidden" class="form-control" name="merchant_param1" id="merchant_param1" value="NA" placeholder="Course Name"> 
   <input type="hidden" class="form-control" name="SpecializationID" readonly id="SpecializationID" value="NA" placeholder="Course Name">
			                   
		        
		        
		        	<input type="hidden" name="delivery_address" value=""/>
		            <input type="hidden" name="delivery_city" value=""/>
		            <input type="hidden" name="delivery_state" value=""/>
		            <input type="hidden" name="delivery_zip" value=""/>
		            <input type="hidden" name="delivery_country" value=""/>
		            <input readonly type="hidden" id="emi_plan_id"  name="emi_plan_id" value=""/> 
			        <input readonly type="hidden" id="emi_tenure_id" name="emi_tenure_id" value=""/> 
			        <input readonly type="hidden" id="emi_banks" name="emi_banks" value=""/> 
			        
				        
 
   <div class="col-sm-6"><div class="form-group"><input type="text" class="form-control" name="amount" readonly value="5000"  id="exampleInputPassword1" placeholder="Amount"></div></div>
	
  

  
  
  
                  <button type="submit" onclick="myfunction()" class="btn btn-primary">Pay Now</button>
				  
				  
				
				  
				  </form>
              <!-- Job Form Validation-->
              
            </div>
            <div class="row" style="padding-top: 15px;">
             <div class="col-sm-4"><a href="terms-and-conditions" target="_blank">Terms and condition</a></div>
              <div class="col-sm-4"><a href="images/onlinepaymentpolicy/Terms of Use-pdf.pdf" target="_blank">Terms of use</a></div>
               <div class="col-sm-4"><a href="images/onlinepaymentpolicy/Privacy Policy.pdf" target="_blank">Privacy policy</a></div>
             
             
             <div>
          </div>
          
        </div>
       
      </div>
            </div>
	  
                </div><!-- /.container -->   
            </section>

            


            


       <?php include"footer.php";?>

        <!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script> 
    <script type="text/javascript" src="javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="javascript/parallax.js"></script>
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
     <script type="text/javascript" src="javascript/main.js"></script>
</body>
</html>