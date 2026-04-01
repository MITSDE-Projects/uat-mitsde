<?php
//include "php/header.php";
session_start();
//echo $_SESSION['memberID'];
if(!isset($_SESSION['memberID']) || $_SESSION['memberID']=="")
{
 	mysqli_query($connection,"UPDATE student SET is_online='0' WHERE memberID='".$_SESSION['memberID']."'");
 	header("location: https://mitsde.com/LSC/register/index.php");//redirecting to second page
}
else
{

       include "php/db.php";
       include "php/populate.php";
	
	$memberid= $_SESSION['memberID'];
$pieces = explode(".", basename($_SERVER['PHP_SELF']));
$segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
$pid=$segments[count($segments)-1];
$_SESSION["lastpage"]=$pid;

//echo "UPDATE student is_online='1' WHERE memberID='".$_SESSION['memberID']."'";
//mysqli_query($connection,"UPDATE student SET is_online='1' WHERE memberID='".$_SESSION['memberID']."'");
//echo "</br>UPDATE `student` SET `colorRadio`='Temporary' `terms` = '1', `transactid` = 'Temporary ID',amount='0', `isPayment` = '1', `dddate` = 'NULL', `ddnumber` = 'NULL', `bankname` ='NULL', `paymenttype`='4',formstatus='payment done',lastPage='printformvalue.php',paydate=NOW() WHERE `memberID` = '".$_SESSION['memberID']."'";
mysqli_query($connection,"UPDATE `student` SET `colorRadio`='Temporary', `terms` = '1', `transactid` = 'Temporary ID',amount='0', `isPayment` = '1', `dddate` = 'NULL', `ddnumber` = 'NULL', `bankname` ='NULL', `paymenttype`='4',formstatus='payment done',counsellor_name='LSC Partner',lastPage='printformvalue.php',paydate=NOW() WHERE `memberID` = '".$_SESSION['memberID']."'");

?>




<!DOCTYPE HTML>

<head>
    
  <title>MITSDE 2020-21</title>
  
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrapValidator.min.js"></script> 
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<link href="css/style.css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery.form.js"></script>
	<link rel="stylesheet" href="css/style.css" />
 	<script src="js/courses.js"></script>
 	<script src="js/common.js"></script>


</head>

<body class="bg-pic">
    	    
   <div class="wrapper-640">
		<div class="mheader">
		<div class="formheading">
<a target="_blank" href="http://www.mitsde.com/"><img src="http://www.mitsde.com/LSC/images/logo-1.png" style="width:200px;height:80px;float:left;padding-left: 8px;"></a><br/> 
	<p style="margin-top:-10px;  margin-bottom:15px;font-size:14px;clear:both;font-family:'Roboto', sans-serif;">Approved by A I C T E, Govt.of India.</p>
		<div class="userloginmsg" style="clear:both;">
<span id="logout"><a href='register/logout.php?pid=<?php echo $pid;?>&id=<?php echo $memberid;?>'>Logout</a></span>

		</div>
		</div>
		
		</div>
		
<?php		 
			
		$query = "SELECT * FROM student WHERE `memberID` = '$memberid'";
		$sql2 = mysqli_query($connection,$query);
		$count = mysqli_num_rows($sql2);
        if($count>0)
        {
		while ($userdata = mysqli_fetch_assoc($sql2)) 
		{    
?>
		

   <div id="divToPrint" style="position:relative;top:45px;display:block;">
	<div class="printheader">
		
		
	<div class="formheading"></div> 
	</div>
	






     <div style="width:900px;font-size:15px;margin:auto;border:1px solid grey;text-align:justify;line-height:25px;">
         
    <a target="_blank" href="http://www.mitsde.com/"><img src="http://www.mitsde.com/LSC/images/logo-1.png" style="width:200px;height:80px;float:left;position:relative;left:20px;"></a><br/> 
	<p style="margin-top:-10px;position:relative;left:20px;margin-bottom:15px;font-size:14px;clear:both;font-family:'Roboto', sans-serif;">Approved by A I C T E, Govt.of India.</p>
    <h3 style="text-align:center;position: relative;top: -18px;">MIT SDE Application Form for Admission - <?php echo date('Y')?></h3>
   
		                
<div style="width:100%;margin-left:20px;"><b>Program</b>&nbsp;&nbsp;&nbsp;<?php echo $programmesugpg; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Application ID</b>&nbsp;&nbsp;<?=$userdata['applicationid']?></div>
<div style="width:100%;margin-left:20px;"><b>Course</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $desciplines; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            
                               	<? if($programmesugpg!='Post Graduate Certificate in Management') { 
									
									if($programmesugpg=='Post Graduate Diploma in Business Administration') { 
									
									?>
									
									<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Elective Basket 1&nbsp;</b></td><td><?php echo $elective_b1;?></td>&nbsp;&nbsp;
									<td><b>Elective Basket 2&nbsp;</b></td><td><?php echo $elective_b2;?></td></tr>
									
									<? 
									}
									
									if($programmesugpg=='Post Graduate Diploma in Management') { ?>
								 
								 	<tr><td><b>Elective Basket 1</b></td><td><?php echo $elective_b1;?></td></tr>
								    <?
								  
								    } ?>
								    
								    <? }	?> 
								    	</br>
								</div>
	
		


        
	    <div style="width:900px;font-size:15px;margin:auto;border:1px solid grey;text-align:justify;height:300px;line-height:25px;clear:both">
			<div>
			<div style="text-align:left;text-align:left;position: relative;top: 16px;"><h4 style="color:#E28951;margin-left:20px;">A. PERSONAL DETAILS</h4></div>	
			</div>
			

                <div style="float:left;width:70%;margin-left:20px;">
				<div style="float:left;width:50%"><b>First Name</b></div>
				<div style="float:right;width:50%"><?php echo $name;?></div>
				
			 </div>
			    <div style="float:left;width:70%;margin-left:20px">
				<div style="float:left;width:50%"><b>Last Name</b></div>
				<div style="float:right;width:50%"><?php echo $lastname;?></div>
                              
			</div>
			  <div style="float:left;width:70%;margin-left:20px">
				<div style="float:left;width:50%"><b>Gender</b></div>
				<div style="float:right;width:50%"><?php echo $gender;?></div>
			</div>
			  <div style="float:left;width:70%;margin-left:20px">
				<div style="float:left;width:50%"><b>Date of Birth</b></div>
				<div style="float:right;width:50%"><?php echo $dateofbirth;?></div>
			</div>
			
			<div style="float:left;width:70%;margin-left:20px">
				<div style="float:left;width:50%"><b>Mobile No.</b></div>
				<div style="float:right;width:50%"><?php echo $phonenumber;?></div>
			</div>
			  <div style="float:left;width:70%;margin-left:20px">
				<div style="float:left;width:50%"><b>Email ID</b></div>
				<div style="float:right;width:50%"><?php echo $email;?></div>
				<?php //echo"photo images--->". $getstudmeatdata['photo']?>
			</div>
			
				<div style="float:left;width:70%;margin-left:20px">
				<div style="float:left;width:50%"><b>Alternate Mobile No.</b></div>
				<div style="float:right;width:50%"><?php echo $alternate_no;?></div>
			</div>
			
			<div style="float:left;width:70%;margin-left:20px">
				<div style="float:left;width:50%"><b>Alternate Email ID</b></div>
				<div style="float:right;width:50%"><?php echo $alternate_email?></div>
				<?php //echo"photo images--->". $getstudmeatdata['photo']?>
			</div>
			
           
            <img src='<?php echo $getstudmeatdata['photo']?>' width=150 height=150 style="position:relative;top:-5px;left:45px;">
          
		</div>	
          



       <div style="width:900px;font-size:15px;margin:auto;border:1px solid grey;text-align:justify;height:150px;line-height:25px;">
			<div>
			<div><h4 style="color:#E28951;margin-left:20px;">B. DEMOGRAPHIC DETAILS</h4></div>	
			</div>
			 <div style="float:left;width:70%;margin-left:20px">
				<div style="float:left;width:50%"><b>Nationality</b></div>
				<div style="float:right;width:50%"><?php echo $nationalityselect;?></div>
			</div>
		

                            <? if($nationalityselect=='Indian') { ?>
			 <div style="float:left;width:70%;margin-left:20px">
				<div style="float:left;width:50%"><b>AADHAR No</b></div>
				<div><?php echo $aadhar;?></div>
			</div>
                            <? } else { ?> 
             

                            <? } ?>


		
		         </div>



               		  
 <div style="width:900px;font-size:15px;margin:auto;border:1px solid grey;text-align:justify;height:150px;line-height:25px;">
			<div>
			<div><h4 style="color:#E28951;margin-left:20px;">C. PARENT / GUARDIAN DETAILS</h4></div>	
			</div>
			 <div style="float:left;width:70%;margin-left:20px">
				<div style="float:left;width:50%"><b>Father`s Name</b></div>
				<div style="float:right;width:50%"><?php echo $parentfname;?></div>
			</div>
			<div style="float:left;width:70%;margin-left:20px">
				<div style="float:left;width:50%"><b>Mother`s Name</b></div>
				<div style="float:right;width:50%"><?php echo $mothername;?></div>
			</div>
			
			<!--<div style="float:left;width:70%;margin-left:20px">
				<div style="float:left;width:50%"><b>Last Name</b></div>
				<div style="float:right;width:50%"><?php //echo $parentlname;?></div>
			</div>
			 <div style="float:left;width:70%;margin-left:20px">
				<div style="float:left;width:50%"><b>Relationship with Applicant</b></div>
				<div style="float:right;width:50%"><?php// echo $relationshipwithapplicant;?></div>
			</div>
			 <div style="float:left;width:70%;margin-left:20px">
				<div style="float:left;width:50%"><b>Mobile No</b></div>
				<div style="float:right;width:50%"><?php //echo $parentmobilenumber;?></div>
			</div>
			
			 <div style="float:left;width:70%;margin-left:20px">
				<div style="float:left;width:50%"><b>Email ID</b></div>
				<div style="float:right;width:50%"><?php //echo $parentemail;?></div>
			</div>-->
		
		</div>	


          	 <div style="width:900px;font-size:15px;margin:auto;border:1px solid grey;text-align:justify;height:301px;line-height:25px;">
			<div>
			<div><h4 style="color:#E28951;margin-left:20px;">D. CONTACT DETAILS</h4></div>	
			</div>
			<div style="float:left;width:100%">
				<div style="float:left;width:100%;;margin-left:20px"><b>Correspondence Address</b></div>
				<div style="width:100%;margin-left:20px"><?php echo $caddress;?></div>
			</div>
			<div style="float:left;width:100%">
				<div style="float:left;width:25%;position:relative;left:20px;"><b>City</b></div>
				<div style="float:left;width:25%"><?php echo $ccity;?></div>
				<div style="float:left;width:25%"><b>Pin Code</b></div>
				<div style="float:left;width:25%"><?php echo $cpincode;?></div>
			</div>
			<div style="float:left;width:100%">
				<div style="float:left;width:25%;position:relative;left:20px;"><b>State</b></div>
				<div style="float:left;width:25%"><?php echo $cstate;?></div>
				<div style="float:left;width:25%"><b>Country</b></div>
				<div style="float:left;width:25%"><?php echo $ccountry;?></div>
			</div>
	                 <div style="float:left;width:100%">
				<div style="float:left;width:100%;margin-left:20px"><b>Permanent Address</b></div>
				<div style="float:left;width:100%;margin-left:20px"><?php echo $address;?></div>
			</div>
			<div style="float:left;width:100%">
				<div style="float:left;width:25%;position:relative;left:20px;"><b>City</b></div>
				<div style="float:left;width:25%"><?php echo $pcity;?></div>
				<div style="float:left;width:25%"><b>Pin Code</b></div>
				<div style="float:left;width:25%"><?php echo $ppincode;?></div>
			</div>
			<div style="float:left;width:100%">
				<div style="float:left;width:25%;position:relative;left:20px;"><b>State</b></div>
				<div style="float:left;width:25%"><?php echo $pstate;?></div>
				<div style="float:left;width:25%"><b>Country</b></div>
				<div style="float:left;width:25%"><?php echo $pcountry;?></div>
			</div>
		</div>	




                 <div style="width:900px;font-size:15px;margin:auto;border:1px solid grey;text-align:justify;height:200px;line-height:25px;">
			<div>
			<div><h4 style="color:#E28951;margin-left:20px;"><b>E. ACADEMIC DETAILS</b></h4></div>	
			</div>
			<div>
			<div><h4 style="color:#E28951;margin-left:20px;"><b>Graduation Record</b></h4></div>	
			</div>
  
		        <div style="width:100%;float:left;margin-left:20px;">
                        <div style="width:20%;float:left;"><b>Degree</b></div>
                   
                        <div style="width:20%;float:left"><b>University</b></div>
                        <div style="width:20%;float:left"><b>Year of Passing</b></div>
                        <div style="width:20%;float:left"><b>Score in %</b></div>
                        </div>
<?php
if(isset($degree1))
{
	?>
	<div style="width:100%;float:left;margin-left:20px;">
<div style="width:20%;float:left;"><?php echo $graduation;?></div>

<div style="width:20%;float:left"><?php echo $examgraduation;?></div>
<div style="width:20%;float:left"><?php echo $yearofpassinggraduation;?></div>	
<div style="width:20%;float:left"><?php echo $scoregraduation;?></div>
</div>
	<?php } ?>
<?php
if(isset($degree2))
{
	?>
	<div style="width:100%;float:left;margin-left:20px;">
<div style="width:20%;float:left;"><?php echo $postgraduation;?></div>

<div style="width:20%;float:left"><?php echo $exampostgraduation;?></div>
<div style="width:20%;float:left"><?php echo $yearofpassingpostgraduation;?></div>	
<div style="width:20%;float:left"><?php echo $scorepostgraduation;?></div>
</div>
	<?php } ?>
   </div>



  
	
				
			
 
   
     <div style="width:900px;font-size:15px;margin:auto;border:1px solid grey;text-align:justify;height:150px;line-height:25px;">
<div><h4 style="color:#E28951;;margin-left:20px;">School Record</h4></div>
			<div style="width:100%;float:left;margin-left:20px;">
                        <div style="width:20%;float:left;"><b>Class</b></div>
                        <div style="width:20%;float:left"><b>School</b></div>
                        <div style="width:20%;float:left"><b>Board</b></div>
                        <div style="width:20%;float:left"><b>Year of Passing</b></div>
                        <div style="width:20%;float:left"><b>Score in %</b></div>
                        </div>


<div style="width:100%;float:left;margin-left:20px;">
<div style="width:20%;float:left"><b>X</b></div>
<div style="width:20%;float:left"><?php echo $school10;?></div>
<div style="width:20%;float:left"><?php echo $examboardname10;?></div>
<div style="width:20%;float:left"><?php echo $yearofpassing10;?></div>	
<div style="width:20%;float:left"><?php echo $score10;?></div>
</div>
<div style="width:100%;float:left;margin-left:20px;">
<div style="width:20%;float:left"><b>XII</b></div>
<div style="width:20%;float:left"><?php echo $school12;?></div>
<div style="width:20%;float:left"><?php echo $examboardname12;?></div>
<div style="width:20%;float:left"><?php echo $yearofpassing12;?></div>	
<div style="width:20%;float:left"><?php echo $score12;?></div>
</div>


   </div>



   <div style="width:900px;font-size:15px;margin:auto;border:1px solid grey;text-align:justify;height:150px;line-height:25px;">
			<div>
			<div><h4 style="color:#E28951;margin-left:20px;">F. WORK EXPERIENCE</h4></div>	
			</div>
   <div style="float:left;width:100%;margin-left:20px;">
       <div style="float:left;width:33%"><b>Company Name</b></div>
       <div style="float:left;width:33%"><b>Experience</b></div>  
       <div style="float:left;width:33%"><b>Designation</b></div>  
   </div>
       

       <div style="float:left;width:100%;margin-left:20px;">
           <div style="float:left;width:33%"><?php echo ucfirst($companyname);?></div>
           <div style="float:left;width:33%"><?php echo $experience;?></div> 
           <div style="float:left;width:33%"><?php echo $designation;?></div> 
        </div>
        		
    </div>



     
     

         <div style="width:900px;font-size:15px;margin:auto;border:1px solid grey;text-align:justify;height:125px;line-height:25px;">
	<div>
		<div><h4 style="color:#E28951;margin-left:20px;">G. PAYMENT DETAILS</h4></div>
	</div>
     
    <div style="width:50%;float:left;position:relative;left:20px;"><strong>Payment Mode: </strong> <?php echo ucfirst($userdata['colorRadio']);?></div>
    <div style="width:50%;float:left;"><strong>Transaction ID: </strong> <?php echo $userdata['transactid'];?></div>
  

  
    <!-- <div style="width:100%;float:left;">
        <div style="width:25%;float:left;position:relative;left:20px;"><strong>DD Date:</strong> <?php //echo $userdata['dddate'];?></div>
        <div style="width:25%;float:left"><strong>DD Number:</strong><?php //echo $userdata['ddnumber'];?></div>
        <div style="width:25%;float:left"><strong>Bank: </strong><?php //echo $userdata['bankname'];?></div>
        <div style="width:25%;float:left"><strong>Branch: </strong><?php //echo $userdata['branchname'];?></div>
      </div>-->
    </div>
  
  
  
      <div style="width:900px;font-size:15px;margin:auto;border:1px solid grey;text-align:justify;height:500px;line-height:25px;">
  
       <div>
		<div><h4 style="color:#E28951;margin-left:20px;">H. DECLARATION</h4></div>
	   </div>
	   
        <div style="position:relative;left:-5px;"><ul>
<li>I have understood the payment terms, institues Guidelines, other terms and conditions and agree to abide by the institute policy and guidelines from time to time.</li>
<li>All Documents submitted are true copies, if found illegitimate, admission can be forfeited without any refund.</li>
<li>I understand that in case i withdraw from the programmed i will not be entitled to claim any refund of amount paid in case i have not informed within 5 days from the date of enrollment.</li>
<li>I agree that i will settle the amount with MITSDE whether or not i continue in the programme, I understand the juridisction for all dispute(if any) relating to the institute is only / exculsively Pune Maharashtra.</li>
<li>I here by declare that the infomation provided by me in the Application is true and correct to the best of my knowledge.</li>
<li>Submisson of Fees and Admission form does not mean that admission is confirmed. The admission will be treated as enrolled only after Registration Number has been generated by the institute.</li>
</ul>
</div>
        <br/><br/>
        <img src='<?php echo $getstudmeatdata['signature']?>' width=80 height=50 style="position:relative;top:-5px;left:45px;">
        <div style="position:relative;left:20px;"><b>Signature of Applicant.</b></div>
   
  
      </div>
  
    </div>

   </div> 


<br>

 <div style="float:left;width:100%;text-align: center;height: 60px;line-height: 50px;position:relative;top:40px;">
        
        <a href="page2_form.php">
               <div style="width:28%;float:left;">
                   <input type="submit" value="Application Form" onclick="" style="background-color:#F47A35;color:#FFF;font-size:20px;">
                   </div>
                   </a>
 <div style="width:18%;float:left;">
           <input type="submit" value="Download Application Form" onclick="PrintDiv();" style="background-color:#F47A35;color:#FFF;font-size:20px;">
           </div>
           <a href="page4_form.php">
               <div style="width:30%;float:left;">
                   <input type="submit" value="Upload Documents" onclick="" style="background-color:#F47A35;color:#FFF;font-size:20px;">
                   </div>
                   </a>
           <!--<a href="admission-payuform.php?email=<?=$email?>">-->
                <a href="page5_form.php">
               <div style="width:-15%;float:left;">
                   <input type="submit" value="Pay Installments" onclick="" style="background-color:#F47A35;color:#FFF;font-size:20px;">
                   </div></a>

 </div>    

<br/><br/><br/>
	    
	<script type="text/javascript">
	

	
    function PrintDiv() {
        
      window.print();
      
       }
       
	 </script>


<?php } }?>








</body>   
</html>
<?php }?>