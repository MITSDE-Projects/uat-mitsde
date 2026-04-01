
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
<title>MITSDE e-mandate</title>

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
	
   
	 
	 
<script type="text/javascript">
var ck_name = /^[A-Za-z0-9 ]{3,100}$/;
var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
var ck_username = /^[A-Za-z0-9_]{1,20}$/;
var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
var ck_mob =  /^[\s()+-]*([0-9][\s()+-]*){10}$/;


function validate(OtherFeesPayment)
{
//alert('hi');

 var LeadID = OtherFeesPayment.merchant_param3.value;
 //var StudentName = OtherFeesPayment.StudentName.value;
 //var email = OtherFeesPayment.EmailID.value;
 //var StudentName = OtherFeesPayment.StudentName.value;
 //var MobileNo = OtherFeesPayment.MobileNo.value;

 
 var FeesType = OtherFeesPayment.FeesType.value;
  
  
 var errors = [];
 
 if (!ck_name.test(LeadID)) {
  errors[errors.length] = "Please Enter Admission ID .";
 }
 
 /*if (!ck_name.test(StudentName)) {
  errors[errors.length] = "Please Enter Your Name";
 }*/
  
 /*if (!ck_email.test(email)) {
  errors[errors.length] = "You must enter a valid email address.";
 }*/
 /*if (!ck_mob.test(MobileNo)) {
  errors[errors.length] = "You must enter a valid Mobile.";
 }*/

 
 if (FeesType==0) {
  errors[errors.length] = "Select Fees Type";
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
<script>
function sendencript1(id,value){

	   
		window.location.href='emandate_registration.php?inputValue='+value+'&id='+id; 
	   /*var conf = confirm("Are You Sure Sent To Bucket?");
         if(conf==true){ }*/

	    

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
       
            <section class="flat-row pad-top-100">
			
                <div class="container">
         <div class="row">
           <div class="col-md-6 col-md-push-3">
            <div class="border-5px  p-30 mb-0" style="border-color:#710000;">
              <h3 class="text-theme-colored mt-0 pt-5">MITSDE e-mandate</h3>
			  
              <hr>
<form action="emandate_confirmation.php" name="OtherFeesPayment" id="OtherFeesPayment"  method="post">

 
 <div class="col-sm-6"> 
   <div class="form-group">
      
     <input type="text" class="form-control" name="Customer_Name"  id="Customer_Name"  placeholder="Customer_Name">
     
     </div>
 </div>
                             
							  
  <div class="col-sm-6">
       <div class="form-group">
           <input type="text" class="form-control" name="Customer_EmailId"  id="Customer_EmailId"  placeholder="Customer_EmailId">
           
       </div>
       </div>
  
   <div class="col-sm-6">
       <div class="form-group">
           <input type="text" class="form-control" name="Customer_Mobile" id="Customer_Mobile"   placeholder="Customer_Mobile">
           
           </div>
           </div>
   
  
 
			
			<div class="col-sm-6">
			    <div class="form-group">
			        <input type="text" class="form-control" name="Customer_AccountNo"  id="Customer_AccountNo"   placeholder="Account No" title="Customer’s account number.">
			        
		    	</div>
			</div>
			
			
		
			<div class="col-sm-6">Start Date
			    <div class="form-group">
			        <input type="date" class="form-control" name="Customer_StartDate" value=""  id="Customer_StartDate" >
		    	</div>
			</div>
			<div class="col-sm-6">End Date
			    <div class="form-group">
			        <input type="date" class="form-control" name="Customer_ExpiryDate" value="" id="Customer_ExpiryDate" >
		    	</div>
			</div>
		   <div class="col-sm-6">
			    <div class="form-group">
			        <input type="text" class="form-control" name="Customer_DebitAmount"  id="Customer_DebitAmount" placeholder="Debit Amount"
			        title="Fixed amount to be deducted. ">
		    	</div>
			</div>
			 <div class="col-sm-6">
			    <div class="form-group">
			        <input type="text" class="form-control" name="Customer_MaxAmount"  id="Customer_MaxAmount" placeholder="Max Amount" 
			        title="Max amount to be deducted (formandate) should mentioned here.">
		    	</div>
			</div>
			
			<div class="col-sm-6">
			    <div class="form-group">
			        <input type="text" class="form-control" name="Customer_DebitFrequency"  id="Customer_DebitFrequency" value="MNTH" placeholder="Debit Frequency" >
		    	</div>
			</div>
			
			<div class="col-sm-6">
			    <div class="form-group">Customer_InstructedMemberId
			        <input type="text" class="form-control" name="Customer_InstructedMemberId"  id="Customer_InstructedMemberId" placeholder="Bank’s IFSC code" >
			        <input type="hidden" class="form-control" name="Short_Code"  id="Short_Code" value="MSDE" placeholder="Short_Code" >
		    	</div>
			</div>
			
		
			
			<div class="col-sm-6">
			    <div class="form-group">
			        <input type="text" class="form-control" name="Customer_SequenceType"  id="Customer_SequenceType" value="RCUR" >
		    	</div>
			</div>
			
			<div class="col-sm-6">
			    <div class="form-group">
			        <input type="text" class="form-control" name="Merchant_Category_Code"  id="Merchant_Category_Code" value="U099" >
		    	</div>
			</div>
			
			<div class="col-sm-6">
			    <div class="form-group">
			        <input type="hidden" class="form-control" name="Customer_Reference1"  id="Customer_Reference1" placeholder="Customer_Reference1" >
		    	</div>
			</div>
			
			<div class="col-sm-6">
			    <div class="form-group">
			        <input type="hidden" class="form-control" name="Customer_Reference2"  id="Customer_Reference2" placeholder="Customer Reference" >
		    	</div>
			</div>
			
			<div class="col-sm-12">
			    <div class="form-group">
			        
			       <label for="html">Select Channel</label><br>
			       <!--<input type="radio" class="form-control" name="Channel"  id="Channel" value="Debit"> Debit
			       <input type="radio" class="form-control" name="Channel"  id="Channel" value="Net"> Net-->
			       
			       <input type="radio" id="Channel" name="Channel" value="Debit">
                  <label for="Debit">Debit</label><br>
                   <input type="radio" id="Channel" name="Channel" value="Net">
                    <label for="Net">Net</label><br>
			       
		    	</div>
		    	<input type="hidden" class="form-control" name="UtilCode"  id="UtilCode" value="NACH00000000000382" placeholder="UtilCode" >
			</div>
			
			
			
				
			        <input type="hidden" class="form-control" name="Filler1"  id="Filler1" placeholder="Filler1" >
			        <input type="hidden" class="form-control" name="Filler2"  id="Filler2" placeholder="Filler2" >
		    	    <input type="hidden" class="form-control" name="Filler3"  id="Filler3" placeholder="Filler3" >
			        <input type="hidden" class="form-control" name="Filler4"  id="Filler4" placeholder="Filler4" >
			        <input type="hidden" class="form-control" name="Filler5"  id="Filler5" placeholder="Filler5" >
			         <input type="hidden" class="form-control" name="Filler6"  id="Filler6" placeholder="Filler6" >
			         <input type="hidden" class="form-control" name="Filler7"  id="Filler7" placeholder="Filler7" >
			         <input type="hidden" class="form-control" name="Filler8"  id="Filler8" placeholder="Filler8" >
			         <input type="hidden" class="form-control" name="Filler9"  id="Filler9" placeholder="Filler9" >
			         <input type="hidden" class="form-control" name="Filler10"  id="Filler10" placeholder="Filler10" >
			
			           
		      <div class="col-sm-6">
			    <div class="form-group">
			         <button type="submit" onclick="myfunction()" class="btn btn-primary">Submit e-mendate</button>
		    	</div>
			</div>
			
				  </form>
              <!-- Job Form Validation-->
              
            </div>
           
       
      </div>
            </div>
	  
                </div><!-- /.container -->   
            </section>

            


            


       <?php //include"footer.php";?>

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