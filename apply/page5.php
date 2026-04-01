<?php include("php/header.php");?>
<link rel="stylesheet" href="css/jquery-ui.min.css">        

        <script type="text/javascript">
    window.onload = function()
    {
      document.getElementById('ifYes').style.display = 'none';
      document.getElementById('ifNo').style.display = 'none';
    }
    function yesnoCheck()
    {
      
    document.getElementById('branchname').setAttribute('value','');
    document.getElementById('bankname').setAttribute('value','');
    document.getElementById('ddnumber').setAttribute('value','');
    
    
      if (document.getElementById('yesCheck').checked)
    {
        document.getElementById('ifYes').style.display = 'block';
        document.getElementById('ifNo').style.display = 'none';
        document.getElementById("easebuzz").required = false;
        document.getElementById("payU").required = false;
        document.getElementById("Datepicker1").required = true;
        document.getElementById("branchname").required = true;
        document.getElementById("bankname").required = true;
        document.getElementById("ddnumber").required = true;
        document.getElementById("filetoupload").required = true;
      }
      else if(document.getElementById('noCheck').checked)
    {
        document.getElementById('ifNo').style.display = 'block';
        document.getElementById('ifYes').style.display = 'none';
        document.getElementById('ifYes').style.display = 'none';
  
 document.getElementById("easebuzz").required = true;
document.getElementById("payU").required = true;
document.getElementById("Datepicker1").required = false;
document.getElementById("branchname").required = false;
document.getElementById("bankname").required = false;
document.getElementById("ddnumber").required = false;
document.getElementById("filetoupload").required = false;

      }
    }
    
       function getsetshowhide(val){
        
        
        if(val=='installment'){
            
            document.getElementById('installment_div').style.display='block';
            document.getElementById('lumpsum_div').style.display='none';
            document.getElementById('partpay1').style.display='none';
            document.getElementById('partpay2').style.display='none';
            
        }
        
         
         
         if(val=='lumpsum') {
            
            document.getElementById('installment_div').style.display='none';
            document.getElementById('lumpsum_div').style.display='block';
            document.getElementById('partpay1').style.display='none';
            document.getElementById('partpay2').style.display='none';
             
         }
         
         
          if(val=='partpay1') {
            
            document.getElementById('installment_div').style.display='none';
            document.getElementById('lumpsum_div').style.display='none';
            document.getElementById('partpay1').style.display='block';
            document.getElementById('partpay2').style.display='none';
             
         }
         
          if(val=='partpay2') {
            
            document.getElementById('installment_div').style.display='none';
            document.getElementById('lumpsum_div').style.display='none';
            document.getElementById('partpay1').style.display='none';
            document.getElementById('partpay2').style.display='block';
             
             
         }
        
    }
    
    
    </script>
    </head>
     <div class="content" style="background:#FFF;" >
 <span id="error">
                    <?php
                    if (!empty($_SESSION['error_page3'])) {
                        echo $_SESSION['error_page3'];
                        unset($_SESSION['error_page3']);
                    }
                    
                     
                    if(isset($_POST['submit']))
                    {
                   // echo "insubmit";
                   // exit();
                    
                    
                  
                                 extract($_SESSION['post']);  
					
						      	 extract($_POST); 
						      	 
						      	 $email; 
						      	 $boosnotrequired;
						      	 $programmesugpg;
						      	 $discipline;
						      	 $EMBA;
						      	 $getprogram = explode("_", $programmesugpg);
                                 $programID=$getprogram[0]; 
                                $program_name=$getprogram[1];
                                 
                                 $getsp = explode("_", $discipline);
                                 $sp_id=$getsp[0]; 
                                 $sp_name=$getsp[1];
                                 
                                 $getEsp = explode("_", $EMBA);
                                 $Esp_id=$getEsp[0]; 
                                 $Esp_name=$getEsp[1];
						      	 //die;
						      	 
			
             
                       if(isset($nationalityselect) && $nationalityselect=="Indian")
								{
									$nationality=$nationalityselect;
								}
								if(isset($mpdomicileselect))
								{
									$mpdomicile=$mpdomicileselect;
								}
								$locationurl="page1_form.php";
								include "php/db.php";
								$aid="MITSDE";
								if($programmesugpg=="Post Graduate Certificate in Management")
								{
									$aid.="PGCM".$memberid;
								}
								else if($programmesugpg=="Post Graduate Diploma in Management")
								{
									$aid.="PGDM".$memberid;
								}
								else if($programmesugpg=="Post Graduate Diploma in Business Administration")
								{
									$aid.="PGDBA".$memberid;
								}
								else if($programmesugpg=="Executive Post Graduate Diploma in Management")
								{
									$aid.="EPGDM".$memberid;
								}
								else if($programmesugpg=="PGDM EMBA")
								{
									$aid.="PGDMEMBA".$memberid;
								}
								else if($programmesugpg=="PGDM (Executive) EMBA")
								{
									$aid.="PGDMExecutiveEMBA".$memberid;
								}
							
								
								
								
								$aid.="T".time();
	//	echo "</br>UPDATE student SET `programmesugpg`='$programmesugpg',CourseID='".$getcourseID['CourseID']."',SpecializationID='$s_ID',elective_b1='".$elective_b1."',elective_b2='".$elective_b2."',`name`='$name',`middlename`='$middlename',`lastname`='$lastname',`dateofbirth`='$dateofbirth',placeofbirth='$placeofbirth',`gender` ='$gender',`phonenumber`='$phonenumber',`international_no`='$international_no',`physicallychallenged`='$physicallychallenged',`category`='$category',`mpdomicile`='$mpdomicile',`applicationid`='$aid',`studentisdcode`='$studentisdcode',`book_status`='$boosnotrequired'  WHERE `memberID`='$memberid'";
	       	 $str="UPDATE student SET `alternate_no`='$alternate_no',`alternate_email`='$alternate_email',`programmesugpg`='$program_name',CourseID='".$programID."',desciplines='".$sp_name."',SpecializationID='".$sp_id."',DualDegreeSp='".$Esp_name."',DualDegreeSpID='".$Esp_id."',elective_b1='".$elective_b1."',elective_b2='".$elective_b2."',`name`='$name',`middlename`='$middlename',`lastname`='$lastname',`dateofbirth`='$dateofbirth',placeofbirth='$placeofbirth',`gender` ='$gender',`marital_status` ='$marital_status',`phonenumber`='$phonenumber',`international_no`='$international_no',`physicallychallenged`='$physicallychallenged',`institute`='SDE',`mpdomicile`='$mpdomicile',`applicationid`='$aid',`studentisdcode`='$studentisdcode',`book_status`='$boosnotrequired'  WHERE `memberID`='$memberid'";
							
							
						//	echo $str;
						//	exit();
							mysqli_query($connection,$str);
						
                  $query = mysqli_query($connection,"UPDATE `student` SET lastPage='$pid',formstatus='payment pending' WHERE `student`.`memberID` = '$memberid'");
                  $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT COUNT(*) AS CNT FROM tbl_students_data WHERE student_id='".$memberid."'"));
                    
   
                  if($setdatacnt['CNT'] <= 0)
                    {
                           mysqli_query($connection,"INSERT INTO tbl_students_data (student_id) VALUES ('".$memberid."')");
                    }
                   if($program_name=="PGDM + Lean Six Sigma" || $program_name=="PGDM Executive + Lean Six Sigma" ||$program_name=="PGDM Project + PMP" ||$program_name=="PGDM Executive Modern Project + PMP")
                     {
                         //echo "</br>SELECT * FROM tbl_courses where courses_name='$program_name'";
                         $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT * FROM tbl_courses where courses_name='$program_name'"));
                     }
                     else
                     {
                         //echo "</br>else";
                         //echo "</br>SELECT * FROM tbl_courses where courses_name='$sp_name'";
                        $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT * FROM tbl_courses where courses_name='$sp_name'")); 
                     }
                     
       $getprogramdetails=mysqli_query($connection,"SELECT * FROM `tbl_program` WHERE `programcode` = '".$setdatacnt['program_id']."'");
              $row2=mysqli_fetch_array($getprogramdetails);
              $duration=$row2['duration'];
                    
                   
       }
       else
       {
                     $programmesugpg;
					  $sp_name= $desciplines;
                     $memberid;
      if($programmesugpg=="PGDM + Lean Six Sigma" || $programmesugpg=="PGDM Executive + Lean Six Sigma" ||$programmesugpg=="PGDM Project + PMP" ||$programmesugpg=="PGDM Executive Modern Project + PMP")
                     {
                         $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT * FROM tbl_courses where courses_name='$programmesugpg'"));
                     }
                     else
                     {
                        $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT * FROM tbl_courses where courses_name='$sp_name'")); 
                     }
       
       //echo "</br>3----SELECT * `tbl_program` WHERE `programcode` = '".$setdatacnt['program_id']."'";
       $getprogramdetails=mysqli_query($connection,"SELECT * FROM `tbl_program` WHERE `programcode` = '".$setdatacnt['program_id']."'");
              $row2=mysqli_fetch_array($getprogramdetails);
              $duration=$row2['duration'];
     
       }
        
       
       
  
                    ?>
                </span>
         <form action="paymentTEST.php" method="post" enctype="multipart/form-data">  
  
    <div class="content" style="background:#FFF;" >
<div class="sectionheading">
          <span>G. Payment Details</span>
        </div>
         	<div class="dp">Select Payment Option
                    <select name="paytype" required onChange="getsetshowhide(this.value);">
                        <option value="">--Select--</options>
                        <option value="lumpsum">Lumpsum </options>
                        <option value="installment">Installment</options>
                        <option value="partpay1">Loan</options>
                       
                        
                    </select>
            </div>
              <div style="clear:both"></div>
              <br/>
              
             	<div class="dp">Counselling Done By<br/>
                    <select name="counsellor_name" required>
                        <option value="">--Select--</options>
                        <?php 
                        
                         $getconsname = mysqli_query($connection,"SELECT `full_name` FROM tbl_counselor where active!=0 ORDER BY full_name ASC");
                    
                          while($setconsname = mysqli_fetch_array($getconsname)) { 
                    
                        ?>
                      
                          <option value="<?=$setconsname['full_name']?>"><?=$setconsname['full_name']?></option>       
                        
                        ?>
                      
                        
                        <? } ?>
                        
                        
                        
                    </select>
            </div>
              <div style="clear:both"></div>
              <br/> 
              
            
            <div class="dp">
                  <div id="lumpsum_div" style="display:none;"><b>Lump Sum : Rs.</b> <?=$setdatacnt['lumpsum_amount'];?>  <br/> <br/></div>
                
                  <div id="partpay1" style="display:none; color:red;" > <b>Loan Registration  : Rs.</b> 5,000 /-  <br/> <br/></div>
                   
                  <div id="partpay2" style="display:none;"> <b>Part Payment option 2 : Rs.</b> <?=$setdatacnt['partpay2'];?>  <br/> <br/></div>
                
                
                 <div id="installment_div" style="display:none;"> <b>Installment 1 Rs. : </b><?=$setdatacnt['installment_amount'];?><br/>
                  <? if($setdatacnt['installment_amt_2']!='0') { ?><b>Installment 2 Rs. : </b><?=$setdatacnt['installment_amt_2']; } ?><br/>
                  <? if($setdatacnt['installment_amt_3']!='0') { ?><b>Installment 3 Rs. : </b><?=$setdatacnt['installment_amt_3']; } ?><br/>
                  <? if($setdatacnt['installment_amt_3']!='0') { ?><b>Installment 4 Rs. : </b><?=$setdatacnt['installment_amt_4']; } ?><br/>
                  <? if($setdatacnt['installment_amt_3']!='0') { ?><b>Installment 5 Rs. : </b><?=$setdatacnt['installment_amt_5']; } ?><br/>
                 </div> 
            </div>
            
            <div style="clear:both"></div>
          <div style="font-size:14px; margin-bottom:18px; color: #606062; font-weight:bold;">
           Please Select any Online payment gateway </div>
          
          
            
             <div class="dp">
                 <label for="yesCheck"><input name="paymentmode" type="radio" required id="yesCheck" value="ICICI">&nbsp; ICICI Bank</label>
              <label for="yesCheck"><input name="paymentmode" type="radio" required id="yesCheck" value="HDFC">&nbsp; HDFC Bank</label>
              <label for="yesCheck"><input name="paymentmode" type="radio" required id="yesCheck" value="Easebuzz">&nbsp; Easebuzz</label>
              <label for="noCheck"><input name="paymentmode" type="radio" required id="noCheck"  value="PayPhi">&nbsp;Pay Phi</label>
               <label for="yesCheck"><input name="paymentmode" type="radio" required id="yesCheck"  value="EasyEMI">&nbsp; Easy EMI</label>
              <?php 
                
                //echo "</br>SELECT lr_email FROM loan_registration WHERE lr_email='".$email."'";
               
                $setloanstud = mysqli_fetch_assoc(mysqli_query($connection,"SELECT lr_email FROM loan_registration WHERE lr_email='".$email."'"));
               $loanmailid=strtolower($setloanstud['lr_email']);
               $regmailid=strtolower($email);
               
                if($loanmailid===$regmailid)
                {
                    ?>
                    <label for="yesCheck"><input name="paymentmode" type="radio" required id="yesCheck"  value="EasyEMI">&nbsp; Easy EMI</label>
                    <?php
                }
                
               ?>
            </div>  
      
        <div style="clear:both"></div>
        <?php 
        if($programmesugpg!="1_Career Aaccelerator Program (CAP)")
              {
        ?>
              <div class="alert alert-info" role="alert">
                  
                  <table border="1"><p><b>Kindly confirm below mentioned details for further admission process:-</b</p>
                      <tr>
                          
                          <td>
                           <p align="justify"> 1) Course & Specialization- <b><?php echo $sp_name ?> (<?php echo $duration;?>)</b></p>
                           <?php if($program_name=="PGDM EMBA" || $program_name=="PGDM (Executive) EMBA")
                           {
                           ?>
                           <p align="justify"> 1) EMBA  Specialization- <b><?php echo $Esp_name ?> (<?php echo $duration;?>)</b></p>
                           <?php 
                           }
                           ?>
                           <p align="justify"> 2) Exam fees – INR 500 per paper (applicable at the time of examination)</p>
                           <p align="justify"> 3) Project fees- INR 1,500 (applicable at the time of submitting project)</p>
                           <!--<p align="justify"> 4) Cancellation policy- Students are eligible for cancellation/ refund only if applied within 5 days from enrolment.</p>-->
                           
                           
                      </td>
                      </tr>
                      </table>
                       <div style="clear:both"></br></div>
                      <div style="font-size:14px; margin-bottom:18px; color: #606062; font-weight:bold;">
           <input type="checkbox" id="Agreed" name="Agreed" required value="Agreed"> I Agreed </div>
                  </div>
<?php 
              }
                      ?>
            
      <div id="ifNo" style="display:none; margin-left:10px; margin-bottom:15px;">

       <p style="display:none;"><b>Please select one of the payment type</b></p>

         <div class="dp" style="display:none;">
            <input name="paymenttype" type="radio" id="easebuzz" value="1"checked>Easebuzz 
            </div>
           
            
      <div class="dp" style="display:none;">
            <input name="paymenttype" type="radio" id="payU" value="0" >PayUsdfsf
            </div>
        
        <div class="dp" style="display:none;">
            <input name="paymenttype" type="radio" id="paytm" value="2">Paytm
            </div>
            
              <div style="clear:both"></div>

     </div> <br>
<br>
  
      <div style="clear:both"></div>
        <div style="margin-top:15px;display:none;">
           <input name="terms" type="checkbox"  id="terms" value="1"  >
           <span id="item91_0_span" class="fb-fieldlabel"><a href="disclaimer.php" target="_blank" onClick="window.open('disclaimer.php','popup','width=1000,height=600,scrollbars=yes,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false"> I agree terms and conditions</a></span>
          </div>
            
      <div style="margin-top:-20px; float:none;">
           
              <input type="submit" value="Proceed"  style="background:#606062;color:#FFF; margin-left:122px; width:99px;font-size: 14px;padding: 5px 10px;">
      </div>
                
             </div>
             
             
    <span id="page5err" style="color:red;"></span>
      </form>
      <input type="submit" value="Back" onclick="GotoPrevPage('page1_form.php');" style="background:#606062; color:#FFF; width:99px; margin-left:0px;position:relative;top:-40px;font-size: 14px;padding: 5px 10px;">
            </div>
        </div>
      
      <script>
        $("#Datepicker1").datepicker({
        maxDate:0,
        minDate:'-30d',
        dateFormat:'dd/mm/yy'
        });
        
       </script>
        



 </body>

</html>