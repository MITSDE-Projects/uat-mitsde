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
                    
                    $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT * FROM tbl_courses where courses_name='$desciplines'"));
                    
                    /*$desciplines;
                    $programmesugpg;
                    
            $getcourse=mysqli_query($connection,"SELECT CourseID FROM `CourseERP` WHERE `CourseName` = '".$programmesugpg."'");
            $getcourseID=mysqli_fetch_array($getcourse);
            
           $getcourseID['CourseID'];
            //echo "</br>SELECT SpecializationID FROM `SpecializationERP` WHERE `CourseID` = '".$getcourseID['CourseID']."' AND `SpecializationName`='".$desciplines."' ";
            $getspecilization=mysqli_query($connection,"SELECT SpecializationID FROM `SpecializationERP` WHERE `CourseID` = '".$getcourseID['CourseID']."' AND `SpecializationName`='".$desciplines."' ");
            $specializationID=mysqli_fetch_array($getspecilization);
            
             $s_ID=$specializationID['SpecializationID'];
             
             $str1="UPDATE student SET `programmesugpg`='$programmesugpg',CourseID='".$getcourseID['CourseID']."',SpecializationID='$s_ID',elective_b1='".$elective_b1."',elective_b2='".$elective_b2."',`name`='$name',`middlename`='$middlename',`lastname`='$lastname',`dateofbirth`='$dateofbirth',placeofbirth='$placeofbirth',`gender` ='$gender',`phonenumber`='$phonenumber',`physicallychallenged`='$physicallychallenged',`category`='$category',`mpdomicile`='$mpdomicile',`applicationid`='$aid',`studentisdcode`='$studentisdcode'  WHERE `memberID`='$memberid'";
					
							mysqli_query($connection,$str1);*/
                    
                    if(isset($_POST['submit']))
                    {
                   // echo "insubmit";
                   // exit();
                    
                                 extract($_SESSION['post']);  
							
						      	 extract($_POST); 
						      	 
						      	 	 $email; 
			$getcourse=mysqli_query($connection,"SELECT CourseID FROM `CourseERP` WHERE `CourseName` = '".$programmesugpg."'");
            $getcourseID=mysqli_fetch_array($getcourse);
            
             $getcourseID['CourseID'];
            
            $getspecilization=mysqli_query($connection,"SELECT SpecializationID FROM `SpecializationERP` WHERE `CourseID` = '".$getcourseID['CourseID']."' AND `SpecializationName`='".$desciplines."' ");
            $specializationID=mysqli_fetch_array($getspecilization);
            
            $s_ID=$specializationID['SpecializationID'];
							
								//Storing values in database
								
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
								if($programmesugpg=="One Year Diploma")
								{
									$aid.="OYD".$memberid;
								}
								else if($programmesugpg=="One Year PGD")
								{
									$aid.="OYP".$memberid;
								}
								else if($programmesugpg=="Two Year PGDBA")
								{
									$aid.="TYP".$memberid;
								}
								
								
								$aid.="T".time();
								//echo "</br>UPDATE student SET `programmesugpg`='$programmesugpg',CourseID='".$getcourseID['CourseID']."',SpecializationID='$s_ID',elective_b1='".$elective_b1."',elective_b2='".$elective_b2."',`name`='$name',`middlename`='$middlename',`lastname`='$lastname',`dateofbirth`='$dateofbirth',placeofbirth='$placeofbirth',`gender` ='$gender',`phonenumber`='$phonenumber',`physicallychallenged`='$physicallychallenged',`category`='$category',`mpdomicile`='$mpdomicile',`applicationid`='$aid',`studentisdcode`='$studentisdcode'  WHERE `memberID`='$memberid'";
		$str="UPDATE student SET `programmesugpg`='$programmesugpg',CourseID='".$getcourseID['CourseID']."',SpecializationID='$s_ID',elective_b1='".$elective_b1."',elective_b2='".$elective_b2."',`name`='$name',`middlename`='$middlename',`lastname`='$lastname',`dateofbirth`='$dateofbirth',placeofbirth='$placeofbirth',`gender` ='$gender',`phonenumber`='$phonenumber',`physicallychallenged`='$physicallychallenged',`category`='$category',`mpdomicile`='$mpdomicile',`applicationid`='$aid',`studentisdcode`='$studentisdcode'  WHERE `memberID`='$memberid'";
							
							
						//	echo $str;
						//	exit();
							mysqli_query($connection,$str);
						
                            $query = mysqli_query($connection,"UPDATE `student` SET lastPage='$pid',formstatus='payment pending' WHERE `student`.`memberID` = '$memberid'");
    
    
                  $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT COUNT(*) AS CNT FROM tbl_students_data WHERE student_id='".$memberid."'"));
                    
   
                  if($setdatacnt['CNT'] <= 0)
                    {
                           mysqli_query($connection,"INSERT INTO tbl_students_data (student_id) VALUES ('".$memberid."')");
                    }
                    
                   // echo "1-->SELECT * FROM tbl_courses where courses_name='$desciplines'";
                    
     $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT * FROM tbl_courses where courses_name='$desciplines'"));
       
     
       }
       
     //echo "2----SELECT * FROM tbl_courses where courses_name='$desciplines'";
       $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT * FROM tbl_courses where courses_name='$desciplines'"));
       //echo "</br>3----SELECT * `tbl_program` WHERE `programcode` = '".$setdatacnt['program_id']."'";
       $getprogramdetails=mysqli_query($connection,"SELECT * FROM `tbl_program` WHERE `programcode` = '".$setdatacnt['program_id']."'");
              $row2=mysqli_fetch_array($getprogramdetails);
              $duration=$row2['duration'];
       
       
       
  
                    ?>
                </span>
         <form action="payment.php" method="post" enctype="multipart/form-data">  
  
    <div class="content" style="background:#FFF;" >
<div class="sectionheading">
          <span>G. Payment Details</span>
        </div>
         	<div class="dp">Select Payment Option
                    <select name="paytype" required onChange="getsetshowhide(this.value);">
                        <option value="">--Select--</options>
                        <option value="lumpsum">Lumpsum </options>
                        <option value="installment">Installment</options>
                       
                        
                    </select>
            </div>
              <div style="clear:both"></div>
              <br/>
              
             	<div class="dp">Counselling Done By<br/>
                    <select name="counsellor_name" required>
                        <option value="">--Select--</options>
                        <?php 
                        
                         $getconsname = mysqli_query($connection,"SELECT * FROM tbl_counselor ORDER BY full_name ASC");
                    
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
                
                  <div id="partpay1" style="display:none;"> <b>Part Payment option 1 : Rs.</b> <?=$setdatacnt['partpay1'];?>  <br/> <br/></div>
                   
                  <div id="partpay2" style="display:none;"> <b>Part Payment option 2 : Rs.</b> <?=$setdatacnt['partpay2'];?>  <br/> <br/></div>
                
                
                 <div id="installment_div" style="display:none;"> <b>Installment 1 Rs. : </b><?=$setdatacnt['installment_amount'];?><br/>
                  <? if($setdatacnt['installment_amt_2']!='0') { ?><b>Installment 2 Rs. : </b><?=$setdatacnt['installment_amt_2']; } ?><br/>
                  <? if($setdatacnt['installment_amt_3']!='0') { ?><b>Installment 3 Rs. : </b><?=$setdatacnt['installment_amt_3']; } ?><br/>
                 </div> 
            </div>
            
            <div style="clear:both"></div>
          <div style="font-size:14px; margin-bottom:18px; color: #606062; font-weight:bold;">
           Please Select any Online payment gateway </div>
          
          
            
             <div class="dp">
              <label for="yesCheck"><input name="paymentmode" type="radio" required id="yesCheck" value="HDFC">&nbsp; HDFC Bank</label>
              <label for="yesCheck"><input name="paymentmode" type="radio" required id="yesCheck" value="Easebuzz">&nbsp; Easebuzz</label>
              <label for="noCheck"><input name="paymentmode" type="radio" required id="noCheck"  value="payu">&nbsp; PayU Money</label>
              <?php 
                
                //echo "</br>SELECT lr_email FROM loan_registration WHERE lr_email='".$email."'";
               
                $setloanstud = mysqli_fetch_assoc(mysqli_query($connection,"SELECT lr_email FROM loan_registration WHERE lr_email='".$email."'"));
                $setloanstud['lr_email'];
               
                if($setloanstud['lr_email']===$email)
                {
                    ?>
                    <label for="yesCheck"><input name="paymentmode" type="radio" required id="yesCheck"  value="Loan">&nbsp; Easy Pay</label>
                    <?php
                }
                
               ?>
            </div>  
      
        

            
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
      <input type="submit" value="Skip" onclick="GotoPrevPage('printformvalue.php');" style="background:#606062; color:#FFF; width:99px; margin-left:0px;position:relative;top:-40px;font-size: 14px;padding: 5px 10px;">
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