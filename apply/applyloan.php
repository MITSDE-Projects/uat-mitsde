<?php		
	include "php/header.php";
    include_once "php/db.php";



	if(isset($_GET['leadid']))
	{
	$memberID=$_GET['leadid'];
	$first_name=$_GET['firstname'];
	$last_name=$_GET['lastname'];
	$email=$_GET['email'];
	$phone=$_GET['phone'];
	//$amount=$_GET['amount'];
	$course_id=$_GET['courseid'];
	
	    $x="5000";
        $y=$_GET['amount'];
        $z = $y-$x;
	
    /* $getcoursecode = mysqli_fetch_assoc(mysqli_query($connection,"SELECT CourseID,SpecializationID FROM student where email='".$_GET['email']."'"));
     $c_id['amount'] = $getcoursecode['CourseID'];
     $s_id['amount'] = $getcoursecode['SpecializationID'];
     $course_id= $c_id['amount']."_".$s_id['amount'];
     */
	
	$uni_id=uniqid();
	$transaction_id=$uni_id;
    // die;
     //$fullname=$first_name." ".$last_name;
     $tdate= date("Y-m-d");
                 //  $getstudDetails=mysqli_query($connection,"SELECT * FROM `tbl_transactions_details` WHERE `email` = '".$email."'");
                // echo "</br>row-->".  $getdetails=mysqli_num_rows($getstudDetails);
$querystudent = mysqli_query($connection,"UPDATE `student` SET `amount` = '$z',`transactid` = '$transaction_id',`colorRadio`='Loan', `isPayment` = '1',`terms` = '1', `dddate` = 'NULL', `ddnumber` = 'NULL', `bankname` ='NULL', `paymenttype`='1',lastPage='printformvalue.php',formstatus='payment done',paydate='.$tdate.' WHERE `memberID` = '$memberID'");
            
    // if($getdetails<>1)
   // {
       // echo "</br>INSERT INTO `tbl_transactions_details`(`id`,`memberID`,`Name`,`Mobile_no`,`email`,`courseid`,`ins_1_amt`,`ins_1_date`,`pay_type`,`payment_source`,`transaction_id`, `payment_verification`,`loanStatus`,LoanProvider)VALUES (NULL, '$memberID', '$fullname','$phone','$email', '$course_id','$amount','$tdate','online','Loan','$commanuniq','Not_Verified','Pending','$provider_short_code')";
       // echo   "</br>UPDATE `student` SET `terms` = '1',`transactid` = '$commanuniq',`colorRadio`='Loan', `isPayment` = '1', `dddate` = 'NULL', `ddnumber` = 'NULL', `bankname` ='NULL', `paymenttype`='1',lastPage='printformvalue.php',formstatus='payment done',paydate='.$tdate.' WHERE `memberID` = '$memberID'";
//mysqli_query($connection,"INSERT INTO `tbl_transactions_details` (`id`,`memberID`,`Name`,`Mobile_no`,`email`,`courseid`,`ins_1_amt`,`ins_1_date`,`pay_type`,`payment_source`,`transaction_id`,`order_id`, `payment_verification`,`loanStatus`,LoanProvider) VALUES (NULL, '$leadid','$fullname','$phone','$email','$course_id','$amount','$tdate', 'online','Loan','$commanuniq','Not_Verified','Pending','$provider_short_code')");
//$querystudent = mysqli_query($connection,"UPDATE `student` SET `terms` = '1',`transactid` = '$transaction_id',`colorRadio`='Loan', `isPayment` = '1', `dddate` = 'NULL', `ddnumber` = 'NULL', `bankname` ='NULL', `paymenttype`='1',lastPage='printformvalue.php',formstatus='payment done',paydate='.$tdate.' WHERE `memberID` = '$memberID'");

   // }
  
}

?>
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-font-smoothing:antialiased;
	-moz-font-smoothing:antialiased;
	-o-font-smoothing:antialiased;
	font-smoothing:antialiased;
	text-rendering:optimizeLegibility;
}

body {
	font-family:"Open Sans", Helvetica, Arial, sans-serif;
	font-weight:300;
	font-size: 12px;
	line-height:30px;
	color:#777;
	/*background:#0CF;*/
}

.container {
	max-width:400px;
	width:100%;
	margin:0 auto;
	position:relative;
}

/*#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }*/

#contact {
	background:#F9F9F9;
	padding:25px;
	margin:50px 0;
}

#contact h3 {
	color: #F96;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#contact textarea {
	height:100px;
	max-width:100%;
  resize:none;
}

#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#0CF;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}

#contact button[type="submit"]:hover {
	background:#09C;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
	outline:0;
	border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}
    
</style>


<div class="sction">
<div class="container">  
<?php
      $provider_short_code=$_GET['provider_short_code'];
      $leadid=$_GET['leadid'];
      $email=$_GET['email'];  
      $firstname=$_GET['firstname']; 
      $lastname=$_GET['lastname'];
      
      
            $getstudDetails=mysqli_query($connection,"SELECT * FROM `tbl_transactions_details` WHERE `email` = '".$email."'");
            $getdetails=mysqli_fetch_array($getstudDetails);
            
               $email1=$getdetails['email'];
               $amount=$getdetails['ins_1_amt'];
               $order_id=$getdetails['order_id'];



      
      

if($GET['email']!=$email1)
    {
        ?>
        
        <div class="row">
            <h1>Loan Application Details</h1>
            </br>
            <div>
                <p aline="justify" style="font-size: 15px;">Dear <?php echo $firstname." ".$lastname;?>,</br>

Please find the details of your application.

Please click on the link to complete your application <a href="https://eduvanz.com/login" target="_blank">here</a></br>

Track your loan application <a href="https://loans.easebuzz.in/customers/track" target="_blank">here</a></p>

          <table border="1" aline="center">
              <tr>
                  <td> <b>Full Name</b> </td>
                  <td> <b> <?php echo $firstname." ".$lastname;?></b> </td>
              </tr>
             
              <tr>
                  <td> <b>Email</b> </td>
                   <td><b><?php echo $email1;?></b></td>
              </tr>
              
              <tr>
                  <td> <b>Mobile Number</b> </td>
                  <td> <b><?php echo $_GET['phone'];?></b> </td>
              </tr>
             
              
              <tr>
                  <td> <b>Request ID</b> </td>
                  <td> <b><?php echo $order_id;?></b> </td>
              </tr>
              
              <tr>
                  <td> <b>Amount</b> </td>
                   <td> <b><?php echo $amount;?></b> </td>
              </tr>
              
              
          </table>
                
            </div>
            <p>For any other queries related to your account, please contact on ebloans-support@easebuzz.in</p>
        </div>
        <?php
     
    }
    else
    {
         $x="5000";
        $y=$_GET['amount'];
        $z = $y-$x;
       
        ?>
        
       <fieldset>
    <h3>Application Details</h3>
     </fieldset>
      <form  method="POST" action="https://eduvanz.com/quickemi/login">
    <div class="row">
    
      <input type="hidden" name="meta_data" id="meta_data" value="<?php echo $_GET['leadid']; ?>" placeholder="meta_data" />
       <input type="hidden" name="lead_id" id="lead_id" value="" placeholder="Lead Id (optional)"  />
       <input type="hidden" name="userName" id="userName" value="MIITProdUser" placeholder="User Name"  />
        <input type="hidden" name="password"  id="password" value="f4d670b16b7326b9a64c5a89be576e78" placeholder="Password"  />
         <input type="hidden" name="redirect_url" id="redirect_url" value="https://mitsde.com/apply/Loansuccess1.php?leadid=<?php echo $_GET['leadid'];?>&providercode=<?php echo $_GET['provider_short_code'];?>&loanuniqid=<?php echo $uni_id;?>" placeholder="Redirect Url"  size="60" />
         
        <input type="hidden" name="requestParam[client_institute_id]" id="requestParam[client_institute_id]" value="1" placeholder="Client Institute Id"  />
        <input type="hidden" name="requestParam[client_course_id]" id="requestParam[client_course_id]" value="<?php echo $_GET['courseid'];?>" placeholder="Client Course Id"  />
         <input type="hidden" name="requestParam[client_location_id]" id="requestParam[client_location_id]" value="1" placeholder="Client Location Id"  />
         <fieldset>Loan Amount
      <input type="text" name="requestParam[loan_amount]" id="requestParam[loan_amount]" value="<?php  echo $z; ?>" placeholder="Loan Amount" readonly />
    </fieldset>
    <fieldset>
      <input type="text" name="requestParam[applicant][first_name]" id="requestParam[applicant][first_name]" value="<?php echo $firstname; ?>" placeholder="First Name" readonly />
    </fieldset>
    <fieldset>
      <input type="text" name="requestParam[applicant][last_name]" id="requestParam[applicant][last_name]" value="<?php echo $lastname;?>" placeholder="Last Name" readonly />
      <input type="hidden" name="requestParam[applicant][gender_id]" id="requestParam[applicant][gender_id]" value="1" placeholder="Gender Id" />
    </fieldset>
   
     <fieldset>
      <input type="text" name="requestParam[applicant][dob]" id="requestParam[applicant][dob]" value="<?php echo $_GET['date_of_birth']; ?>" placeholder="YYYY-mm-dd" readonly/>
    </fieldset>
    <fieldset>
     <input type="text" name="requestParam[applicant][mobile_number]" id="requestParam[applicant][mobile_number]" value="<?php echo $_GET['phone']; ?>" placeholder="Mobile Number" readonly/>
    </fieldset>
    <fieldset>
     <input type="text" name="requestParam[applicant][email_id]" id="requestParam[applicant][email_id]" value="<?php echo $_GET['email']; ?>" placeholder="Email Id" readonly/>
    </fieldset>
    <fieldset>
     <input type="text" name="requestParam[applicant][aadhar_no]" id="requestParam[applicant][aadhar_no]" value="<?php echo $_GET['aadhar_number']; ?>" placeholder="Aadhar No" readonly/>
    </fieldset>
    <fieldset>
     <input type="hidden" name="requestParam[applicant][pan_no]" id="requestParam[applicant][pan_no]" value="" id="panno"  placeholder="Pan No"/>
    </fieldset>
    
    <fieldset>
      <button name="submitbtn" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
      <!--<input type="submit" value="Submit"/>-->
    </fieldset>
  </form>
        
        <?php
        
    }
?>
  
 
  
</div>
</div>

		  