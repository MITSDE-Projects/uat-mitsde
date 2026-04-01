<?php		
	include "php/header.php";
    include_once "php/db.php";
    
    
    
    
    
 function callAPI($method, $url, $data)
 {
   $curl = curl_init();
  
         switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }

   
curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'hash: 79a54f4a1b4c2936658f58162b9b7f629af50f1c736af7335dc0ada1ce8a89155e56fcf411ca25787ef355326a9d648cd46a2f941e12aa407f64d444664297bb',
      'key: EHRKEC',
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);


   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
     //echo "endfunc";
   return $result;
 
}


	if(isset($_POST['submitbtn']))
	{
	?>
	<div align="center"><img src="img/proceesing.gif"></div>
	<?
	 extract($_POST);
	 
     $leadid;
     $first_name;
     $last_name;
     $pan_no;
     $email;
     $phone;
     $provider_short_code;
     $surl;
     $furl;
     $amount;
     $date_of_birth;
     $aadhar_number;
     $institute_id;
     $course_id;
     $location_id;
     $commanuniq;
     //die;
     $fullname=$first_name." ".$last_name;
     
    
    // die;
  $data_array =  array(
 
  
    "first_name"=> $first_name,
    "last_name"=> $last_name,
    "pan_number"=> $pan_no,
    "email"=> $email,
    "phone"=> $phone,
    "provider_short_code"=> $provider_short_code,
    "surl"=> $surl,
    "furl"=> $furl,
    "amount"=> $amount,
    "date_of_birth"=> $date_of_birth,
    "aadhar_number"=> $aadhar_number,
    "institute_id"=> $institute_id,
    "course_id"=> $course_id,
    "location_id"=> $location_id
    
    

);
$data1 = $data_array;
//print_r($data1);
//die;
$make_call = callAPI('POST', 'https://loans.easebuzz.in/api/v1/providers/lead/', json_encode($data1));

$response = json_decode($make_call, true);
//print_r($response);
//echo "</br>-->";
$request_id = $response['request_id'];
$redirect_url= $response['redirect_url'];


}
if(isset($redirect_url))
{
$tdate= date("Y/m/d");
              // echo "</br>INSERT INTO `tbl_transactions_details`(`id`,`memberID`,`Name`,`Mobile_no`,`email`,`courseid`,`ins_1_amt`,`ins_1_date`,`pay_type`,`payment_source`,`transaction_id`,`order_id`, `payment_verification`,`loanStatus`,LoanProvider)VALUES (NULL, '$leadid', '$fullname','$phone','$email', '$course_id','$amount','$tdate','online','Loan','$commanuniq','$request_id','Not_Verified','Pending','$provider_short_code')";
//die;
mysqli_query($connection,"INSERT INTO `tbl_transactions_details` (`id`,`memberID`,`Name`,`Mobile_no`,`email`,`courseid`,`ins_1_amt`,`ins_1_date`,`pay_type`,`payment_source`,`transaction_id`,`order_id`, `payment_verification`,`loanStatus`,LoanProvider) VALUES (NULL, '$leadid','$fullname','$phone','$email','$course_id','$amount','$tdate', 'online','Loan','$commanuniq','$request_id','Not_Verified','Pending','$provider_short_code')");

//die;
echo "<script type='text/javascript'>  window.location='$redirect_url'; </script>";
exit(0);
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
        ?>
        <form id="contact" method="POST">
       <fieldset>
    <h3>Application For Loan</h3>
     </fieldset>
    <div class="row">
    <fieldset>
      <input  name="first_name" type="text" value="<?php echo $_GET['firstname']; ?>" readonly >
       
    </fieldset>
     <fieldset>
      <input  name="last_name" type="text"  value="<?php echo $_GET['lastname']; ?>" readonly>
    </fieldset>
    
    </div>
    <fieldset>*
      <input type="text" id="pan_no" name="pan_no" placeholder="PAN No." maxlength="10" pattern="[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}" title="Please enter valid PAN number. E.g. AAAAA9999A" required/>
    </fieldset>
    <fieldset>
      <input  name="email" type="email" value="<?php echo $_GET['email']; ?>" readonly>
      <input  name="leadid" type="hidden" value="<?php echo $_GET['leadid']; ?>" readonly>
    </fieldset>
    <fieldset>
      <input  name="phone" type="tel" value="<?php echo $_GET['phone']; ?>" readonly>
    </fieldset>
    <fieldset>
      <input  name="provider_short_code" type="hidden" value="<?php echo $_GET['provider_short_code']; ?>" readonly>
    </fieldset>
    <?php $uni_id=uniqid(); ?>
    <input type="hidden"  name="commanuniq" value="<?php echo $uni_id; ?>" readonly>
    <input  name="surl" type="hidden" value="https://mitsde.com/apply/Loansuccess.php?leadid=<?php echo $_GET['leadid'];?>&providercode=<?php echo $_GET['provider_short_code'];?>&loanuniqid=<?php echo $uni_id;?>" readonly>
    <input  name="furl" type="hidden" value="https://mitsde.com/apply/Loanfailure.php?leadid=<?php echo $_GET['leadid'];?>&providercode=<?php echo $_GET['provider_short_code'];?>&loanuniqid=<?php echo $uni_id;?>" readonly>
    
    <fieldset>
        <?php 
        $x="5000";
        $y=$_GET['amount'];
        $z = $y-$x;
        ?>
      <input type="hidden"  name="amount" value="<?php  echo $z; ?>" readonly>
       <input type="hidden"  name="uniqid" value="<?php echo uniqid(); ?>" readonly>
    </fieldset>
     <fieldset>
      <input type="text" placeholder="Date of Birth (YYYY-MM-DD)"  name="date_of_birth" value="<?php echo $_GET['date_of_birth']; ?>">
    </fieldset>
    <fieldset>
      <input type="text" placeholder="Aadhar Number"  name="aadhar_number" value="<?php echo $_GET['aadhar_number']; ?>">
    </fieldset>
    <fieldset>
      <input type="hidden"  name="institute_id" value="100" readonly>
    </fieldset>
    <?php
    //echo "</br>SELECT CourseID,SpecializationID FROM student where email='".$_GET['email']."'";
     $getcoursecode = mysqli_fetch_assoc(mysqli_query($connection,"SELECT CourseID,SpecializationID FROM student where email='".$_GET['email']."'"));
     $c_id['amount'] = $getcoursecode['CourseID'];
     $s_id['amount'] = $getcoursecode['SpecializationID'];
     $course_id= $c_id['amount']."_".$s_id['amount'];
    ?>
    <fieldset>
      <input type="hidden" name="course_id" value="<?php echo $course_id ?>" readonly>
    </fieldset>
    <fieldset>
      <input type="hidden"  name="location_id" value="5" readonly>
    </fieldset>
    
    <fieldset>
      <button name="submitbtn" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
        
        <?php
        
    }
?>
  
 
  
</div>
</div>

		  