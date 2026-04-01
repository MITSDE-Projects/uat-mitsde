<?php include "php/header.php";
echo $programmesugpg;

if (isset($_POST))
{
    if (empty($_POST))
    {
        if(isset($nationalityselect) && $nationalityselect=="Indian")
								{
									$nationality=$nationalityselect;
								}
								if(isset($mpdomicileselect))
								{
									$mpdomicile=$mpdomicileselect;
								}
		
		//setting error message
        $_SESSION['error_page2'] = "Mandatory field(s) are missing, Please fill it again";
      //  header("location: page2_form.php");//redirecting to second page
    
	} else {
		//fetching all values posted from second page and storing it in variable
        foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }
		//function to extract array
                            extract($_SESSION['post']);  
							
								//Storing values in database
								
							
								
								$locationurl="page2_form.php";
			                    include "php/db.php";
			                    
			                    $address = mysqli_real_escape_string($connection,$address);
			                    $caddress = mysqli_real_escape_string($connection,$caddress);
			                    $organizationdetails  = mysqli_real_escape_string($connection,$organizationdetails);
			                    $relationshipwithapplicant = mysqli_real_escape_string($connection,$relationshipwithapplicant);
			                 
			           //----------------------------C-Address------------------          
			            $ccity;
			            $ccountry;
			            $cstate;
			            //echo "</br>SELECT c_name FROM countries_erp WHERE c_id = '$ccountry' ORDER BY c_name ASC";
			            
			            $getcounty=mysqli_query($connection,"SELECT c_name FROM countries_erp WHERE c_id = '$ccountry'");
			            $rowcounty = mysqli_fetch_array($getcounty);
			            $CcountryName=$rowcounty['c_name'];
			            
			            $getstate=mysqli_query($connection,"SELECT StateName FROM state_erp WHERE StateCode = '$cstate'");
			            $rowState = mysqli_fetch_array($getstate);
			            $CStateName=$rowState['StateName'];
			            
			            $getCity=mysqli_query($connection,"SELECT CityName FROM city_erp WHERE CityCode = '$ccity'");
			            $rowCity = mysqli_fetch_array($getCity);
			            $CCityName=$rowCity['CityName'];
			            
			            
			            //----------------------------P-Address------------------
			            
			            $pcity;
			            $pcountry;
			            $pstate;
			            
			            //echo "</br>SELECT c_name FROM countries_erp WHERE c_id = '$pcountry' ORDER BY c_name ASC";
			            
			            $getcounty=mysqli_query($connection,"SELECT c_name FROM countries_erp WHERE c_id = '$pcountry'");
			            $rowcounty = mysqli_fetch_array($getcounty);
			            $pcountryName=$rowcounty['c_name'];
			            
			            $getstate=mysqli_query($connection,"SELECT StateName FROM state_erp WHERE StateCode = '$pstate'");
			            $rowState = mysqli_fetch_array($getstate);
			            $pStateName=$rowState['StateName'];
			            
			            $getCity=mysqli_query($connection,"SELECT CityName FROM city_erp WHERE CityCode = '$pcity'");
			            $rowCity = mysqli_fetch_array($getCity);
			            $pCityName=$rowCity['CityName'];
			            
	   
			
			/*echo "</br>UPDATE student SET  elective_b1='".$elective_b1."',elective_b2='".$elective_b2."',`address`='$address',`caddress`='$caddress',`ccity`='$CCityName',`cstate`='$CStateName',`ccountry`='$CcountryName',`cpincode`='$cpincode',`pcity`='$pCityName',`pstate`='$pStateName',`pcountry`='$pcountryName',`ppincode`='$ppincode',`CcityID`='$ccity',`PcityID`='$pcity',`PstateID`='$pstate',`CstateID`='$cstate',`PcountryID`='$pcountry',`CcountryID`='$ccountry',`parentfname`='$parentfname',`parentlname`='$parentlname',`relationshipwithapplicant`='$relationshipwithapplicant',`parentmobilenumber`='$parentmobilenumber',`parentemail`='$parentemail',`professionoftheparent`='$professionoftheparentx',annualincome='".$annualincome."',
			 `organizationdetails`='$organizationdetails',`mothername`='$mothername',`aadhar` ='$aadhar',`nationality`='$nationality',nationalityselect='$nationalityselect',passport_no='$aadharName',`isComplete`=0,`parentisdcode`='$parentisdcode' WHERE `memberID`='$memberid'";*/
	//die;		 
			 $str="UPDATE student SET  elective_b1='".$elective_b1."',elective_b2='".$elective_b2."',`address`='$address',`caddress`='$caddress',`ccity`='$CCityName',`cstate`='$CStateName',`ccountry`='$CcountryName',`cpincode`='$cpincode',`pcity`='$pCityName',`pstate`='$pStateName',`pcountry`='$pcountryName',`ppincode`='$ppincode',`CcityID`='$ccity',`PcityID`='$pcity',`PstateID`='$pstate',`CstateID`='$cstate',`PcountryID`='$pcountry',`CcountryID`='$ccountry',`parentfname`='$parentfname',`parentlname`='$parentlname',`relationshipwithapplicant`='$relationshipwithapplicant',`parentmobilenumber`='$parentmobilenumber',`parentemail`='$parentemail',`professionoftheparent`='$professionoftheparentx',annualincome='".$annualincome."',
			 `organizationdetails`='$organizationdetails',`mothername`='$mothername',`aadhar` ='$aadhar',`nationality`='$nationality',nationalityselect='$nationalityselect',passport_no='$aadharName',`isComplete`=0,`parentisdcode`='$parentisdcode' WHERE `memberID`='$memberid'"; 
							
						$query = mysqli_query($connection,$str);  
		
    }
} else {
    if (empty($_SESSION['error_page3'])) {
        //header("location: page1_form.php");//redirecting to first page
    }
}
?>
        <div class="container">
            <div >
                                <span id="error">
                    <?php
                    if (!empty($_SESSION['error_page3'])) {
                        echo $_SESSION['error_page3'];
                        unset($_SESSION['error_page3']);
                    }
                    ?>
                </span>
                



                <div class="content" style="background:#FFF;" >
                <div class="sectionheading">
					<span>E. Academic Details</span>
					
	        </div>
                <form name="page3" action="page4_insertdata.php" method="post" onsubmit="return validatepage3();">
					
					<span style="color:#606062;">(Enclose self-attested photocopies of education certificates / mark-sheets)</span>
					<br>
					<br>
					
					
					
					<div class="clear:both;"></div>
					 <h3 style="color:#606062;">Educational Qualification</h3>
					
                    <table class="tblform">
                        <thead>
                        <th style="min-width:150px;">Examination</th>
                        <th>Status</th>         
                        <th>Graduation Specialization / Stream</th>
                      
                        <th>Board / University</th>
                        <th>Year of Passing</th>
                    <!--    <th>Marks Obtained</th>
                        <th>Total Marks</th>-->
                        <th>Score in %</th>
                        </thead>
                        <tr>
                            <td><span>X</span></td>
                            <td><select style="height: 40px;background-color: #FFF;border: 1px solid #606062;position: relative;top: 5px;padding: 8px 15px;" name="school10status">><option value="Completed" <? if($school12status=='Completed'){ echo "SELECTED='SELECTED'"; } ?>>Completed</option></select></td>
                            <td><input name="school10"   tabindex=11 type="text" placeholder="School"  value="<?php echo $school10;?>" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
							<td> <input name="examboardname10"    tabindex=12 type="text"  id="address" placeholder="(eg.SSC,CBSE,ICSC,IB)" value="<?php echo $examboardname10;?>" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
                            <td><input name="yearofpassing10"  required tabindex=13 type="text"  placeholder="Year of Passing"  maxlength="4" value="<?php echo $yearofpassing10;?>"  minlength=4  onkeypress="return isNumberKey(event);" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
                           	<td> <input name="score10" id="total_10" required tabindex=14 type="text" maxlength=5 placeholder="Score 10" value="<?php echo $score10;?>" onkeypress="return isNumberKeyScorePercentage(event);" onkeyup="return ValidatePercentage(this);" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
                        </tr>
                        <tr>
                            <td>XII</td>
							<td><select style="height: 40px;background-color: #FFF;border: 1px solid #606062;position: relative;top: 5px;padding: 8px 15px;" name="school12status"><option>--Select--</option><option value="Completed" <? if($school12status=='Completed'){ echo "SELECTED='SELECTED'"; } ?>>Completed</option></select></td>
							<td><input name="school12" type="text"  tabindex=15 placeholder="School" value="<?php echo $school12;?>" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
							<td> <input name="examboardname12"  type="text" tabindex=16 id="address" placeholder="(eg.HSC,CBSE,ICSC,IB)" value="<?php echo $examboardname12;?>" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
                            <td><input name="yearofpassing12"  type="text"  tabindex=17 placeholder="Year of Passing"  maxlength="4" value="<?php echo $yearofpassing12;?>"  minlength=4  onkeypress="return isNumberKey(event);" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
							<td> <input name="score12" type="text" id="total_12" maxlength=5 tabindex=18 placeholder="Score 12" value="<?php echo $score12;?>" onkeypress="return isNumberKeyScorePercentage(event);" onkeyup="return ValidatePercentage(this);" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
                        </tr>
						 <tr>
                            <td>Graduation Specialization</br>(B.com/BSc/B Arch. etc.)</td>
							<td><select style="height: 40px;background-color: #FFF;border: 1px solid #606062;position: relative;top: 5px;padding: 8px 15px;" name="graduationstatus"><option value="">--Select--</option><option value="Appearing" <? if($graduationstatus=='Appearing'){ echo "SELECTED='SELECTED'"; } ?>>Appearing</option><option value="Completed" <? if($graduationstatus=='Completed'){ echo "SELECTED='SELECTED'"; } ?>>Completed</option><option value="NA" <? if($school12status=='NA'){ echo "SELECTED='SELECTED'"; } ?>>NA</option></select></td>
							<td><input name="graduation" type="text"  tabindex=15 placeholder="(B.com/BSc/B Arch. etc.)" value="<?php echo $graduation;?>" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
							<td> <input name="examgraduation"  type="text" tabindex=16 id="address" placeholder="(eg.University)" value="<?php echo $examgraduation;?>" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
                            <td><input name="yearofpassinggraduation"  type="text"  tabindex=17 placeholder="Year of Passing"  maxlength="4" value="<?php echo $yearofpassinggraduation;?>"  minlength=4  onkeypress="return isNumberKey(event);" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
							<td> <input name="scoregraduation" type="text" id="total_12" maxlength=5 tabindex=18 placeholder="Score UG" value="<?php echo $scoregraduation;?>" onkeypress="return isNumberKeyScorePercentage(event);" onkeyup="return ValidatePercentage(this);" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
                        </tr>
                        <?php 
                        
                         if($programmesugpg!="Career Aaccelerator Program (CAP)")
                        {
                        ?>
						<tr>
                            <td>Post Graduation</td>
							<td><select style="height: 40px;background-color: #FFF;border: 1px solid #606062;position: relative;top: 5px;padding: 8px 15px;" name="postgraduationstatus"><option value="">--Select--</option><option value="Appearing" <? if($postgraduationstatus=='Appearing'){ echo "SELECTED='SELECTED'"; } ?>>Appearing</option><option value="Completed" <? if($postgraduationstatus=='Completed'){ echo "SELECTED='SELECTED'"; } ?>>Completed</option><option value="NA" <? if($school12status=='NA'){ echo "SELECTED='SELECTED'"; } ?>>NA</option></select></td>
							<td><input name="postgraduation" type="text"  tabindex=15 placeholder="Post Graduation" value="<?php echo $postgraduation;?>" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
							<td> <input name="exampostgraduation"  type="text" tabindex=16 id="address" placeholder="(eg.University)" value="<?php echo $exampostgraduation;?>" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
                            <td><input name="yearofpassingpostgraduation"  type="text"  tabindex=17 placeholder="Year of Passing"  maxlength="4" value="<?php echo $yearofpassingpostgraduation;?>"  minlength=4  onkeypress="return isNumberKey(event);" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
							<td> <input name="scorepostgraduation" type="text" id="total_12" maxlength=5 tabindex=18 placeholder="Score PG" value="<?php echo $scorepostgraduation;?>" onkeypress="return isNumberKeyScorePercentage(event);" onkeyup="return ValidatePercentage(this);" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
                        </tr>
						<tr>
                            <td>Any other Qualification</td>
							<td><select style="height: 40px;background-color: #FFF;border: 1px solid #606062;position: relative;top: 5px;padding: 8px 15px;" name="otherqualificationstatus"><option>--Select--</option><option value="Appearing" <? if($otherqualificationstatus=='Appearing'){ echo "SELECTED='SELECTED'"; } ?>>Appearing</option><option value="Completed" <? if($otherqualificationstatus=='Completed'){ echo "SELECTED='SELECTED'"; } ?>>Completed</option><option value="NA" <? if($school12status=='NA'){ echo "SELECTED='SELECTED'"; } ?>>NA</option></select></td>
							<td><input name="otherqualification" type="text"  tabindex=15 placeholder="Any other Qualification" value="<?php echo $otherqualification;?>" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
							<td> <input name="examotherqualification"  type="text" tabindex=16 id="address" placeholder="(eg.HSC,CBSE,ICSC,IB,University)" value="<?php echo $examotherqualification;?>" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
                            <td><input name="yearofpassingotherqualification"  type="text"  tabindex=17 placeholder="Year of Passing"  maxlength="4" value="<?php echo $yearofpassingotherqualification;?>"  minlength=4  onkeypress="return isNumberKey(event);" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
							<td> <input name="scoreotherqualification" type="text" id="total_12" maxlength=5 tabindex=18 placeholder="Score other" value="<?php echo $scoreotherqualification;?>" onkeypress="return isNumberKeyScorePercentage(event);" onkeyup="return ValidatePercentage(this);" style="height:40px; background-color:#FFF;border:1px solid #606062;"></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
					<div class="clear:both;"></div>
					<br>
			
<br>
                  

               
	<div style="clear:both"></div>
	
	   
 
		 <div class="sectionheading">
					<span>F. Employment Details</span><!--<span style="font-size:12px;">&nbsp;(Optional)</span>-->
					
	        </div>


				    <div class="dp">Company Name<br />
                    <input name="companyname" type="text"  id="companyname" placeholder="Company Name"  value="<?php echo $companyname;?>" required>
                    </div>
 
                    <div class="dp">Work Experience<br />
                    <!--<input name="experience" type="text" id="experience" placeholder="experience" value="<?php //echo $experience;?>" required>-->
                    <td>
                        <select  name="experience" required>
                        <option value="">--Select--</option>
                        <option value="0-1 years" <? if($experience=='0-1 years'){ echo "SELECTED='SELECTED'"; } ?>>0-1 years</option>
                        <option value="1-5 years" <? if($experience=='1-5 years'){ echo "SELECTED='SELECTED'"; } ?>>1-5 years</option>
                        <option value="5-10 years" <? if($experience=='5-10 years'){ echo "SELECTED='SELECTED'"; } ?>>5-10 years</option>
                        <option value="10+ years" <? if($experience=='10+ years'){ echo "SELECTED='SELECTED'"; } ?>>10+ years</option>
                        </select>
                        </td>
                  
                    </div>
                    <div class="dp">Designation<br />
                    <input name="designation" id="designation" type="text" placeholder="Designation"  value="<?php echo $designation;?>" required>
                    </div>
                    
                     <div class="dp">HR Contact No<br />
                    <input name="HRContactNo" id="HRContactNo" type="text" placeholder="HR Contact No"  value="<?php echo $HRContactNo;?>" required>
                    </div>
                    
                     <div class="dp">Company website<br />
                    <input name="Companywebsite" id="Companywebsite" type="text" placeholder="Company website"  value="<?php echo $Companywebsite;?>" required>
                    </div>
   
                    <!--<div class="dp">Industry Sector
                    <br />
					<input name="industrysector" id="industrysector" type="text" placeholder="industrysector"  value="<?php //echo $industrysector;?>" required>
					 <span id="parentisdcodeerr"></span>
                    </div>-->
			        <!--<div class="dp">Industry Sector<br />
                    <select name="industrysector" required style="font-size:11px; margin-top:10px;width:100%" class="dp0" id="item4_select_1" onchange="ChangeOther(this.value);" >
                        <option value="">--Select--</options>
                        <option value="Accountancy, banking and finance" <?php //if($industrysector=="Accountancy, banking and finance") echo "selected";?>>Accountancy, banking and finance </options>
                        <option value="Business, consulting and management" <?php //if($industrysector=="Business, consulting and management") echo "selected";?>>Business, consulting and management</options>
                        <option value="BPO" <?php // if($industrysector=="BPO") echo "selected";?>>BPO</options>
                        <option value="Banking" <?php //if($industrysector=="Banking") echo "selected";?>>Banking</options>
                        <option value="Charity and voluntary work" <?php //if($industrysector=="Charity and voluntary work") echo "selected";?>>Charity and voluntary work</options>
                        <option value="Creative arts and design" <?php //if($industrysector=="Creative arts and design") echo "selected";?>>Creative arts and design</options>
                        <option value="Engineering and manufacturing" <?php i//f($industrysector=="Engineering and manufacturing") echo "selected";?>>Engineering and manufacturing</options>
                        <option value="Environment and agriculture" <?php //if($industrysector=="Environment and agriculture") echo "selected";?>>Environment and agriculture</options>
                        <option value="Education" <?php //if($industrysector=="Education") echo "selected";?>>Education</options>
                        <option value="Healthcare" <?php //if($industrysector=="Healthcare") echo "selected";?>>Healthcare</options>
                        <option value="Hospitality" <?php //if($industrysector=="Hospitality") echo "selected";?>>Hospitality</options>
                        <option value="Transport Services" <?php //if($industrysector=="Transport Services") echo "selected";?>>Transport Services</options>
                        <option value="Others" <?php //if($industrysector=="Others") echo "selected";?>>Others</options>
                    </select>
                  </div>-->

                   		
                   		
                   		</script>			

                	<?php/*
					if($industrysector=="Others (Please specify)")
					{?>
					<div class="dp">Industry Sector<br />
                    <input type="text" name="industrysector" id="co" placeholder="Industry Sector" value="<?php echo $industrysector;?>"/>
                    </div>
					<?php
					}
					else
					{?>
					                    <input type="text" name="industrysector" id="co" value="<?php echo $industrysector;?>" readonly style="background-color:#ccc;"/>
						<?php
					}
					*/
					
					?>
                    


                    <!--<div class="dp" style="margin-right: 35px;">Office Contact No
                    <br />
					<input name="officenumber" id="officenumber" type="text"  placeholder="Office No."  value="<?php //echo $officenumber;?>" required>
					
                   	<span id="parentisdcodeerr"></span>
                    </div>
				    <div class="dp">Official E-mail
                    <br />
					<input name="officeemail" id="officenumber" type="text" style="margin-left:-12px;" placeholder="Official E-mail "  value="<?php //echo $officeemail;?>" required>
					<span id="parentisdcodeerr"></span>
                    </div>-->
                  
 					
                	<?php/*
					if($industrysector=="Others")
					{?>
					<div class="dp">Industry Sector<br />
                    <input type="text" name="industrysector" id="co" placeholder="Other Industry Sector" value="<?php echo $industrysector;?>"/>
                    </div>
					<?php
					}
					else
					{?>
					                    
					                    <input type="text" name="industrysector" id="co" value="<?php echo $industrysector;?>" readonly style="background-color:#ccc;"/>
						<?php
					}
					
					*/
					?>
					

					
	<div>
							
				

				
                   <div style="clear:both"></div>
				   
 					
                  <div style="margin-top:25px; float:right;">
               	    <input  type="reset" value="Back" onclick="GotoPrevPage('page2_form.php');"/ style="background:#606062;color:#FFF;width:99px;font-size: 14px;padding: 5px 10px;"> 
                    <input  type="submit" value="Next" / style="background:#606062;color:#FFF;width:99px;font-size: 14px;padding: 5px 10px;">
				</div>
				   </div>
				   
                  <div style="clear:both"></div>
				  <div class="errmsg"></div>
	
				  
                     
                </form>
                </div>
 </div>
           
</div>
                   		<script>
                   		function ChangeOther(v)
		{
            if (v=="Others")
				{
					 $("#co").removeAttr("readonly");
					 				$("#co").css( "background-color","transparent");
				}
				else
				{
					 $("#co").attr("readonly","readonly");
				$("#co").css( "background-color","#ccc");
				}
        }
	 </script>
<script>
	  CalTotal(1);
	  CalTotal(2);
	  CalTotal(3);
	  CalTotal(4);
	  CalTotal(5);
	  CalTotal(6);
	  CalTotal(7);
/*function CalPerc(i)
{
	var s=parseFloat(document.getElementById("totalscore_"+i).value);
	var t=parseFloat(document.getElementById("totaloutof_"+i).value);
	if (s!=null && t!=null && s!="" && t!="" && s!=0 && t!=0 && !isNaN(s) && !isNaN(t))
	{
	document.getElementById("total_"+i).innerHTML=(s*100)/t;
	}
	else
	{
	document.getElementById("total_"+i).innerHTML=0;		
	}
}		*/

</script>
</body>
</html>
<?php

function LoadMarks($s)
{
	$t="";
	if(isset($s))
	{
	 $t=$s;
	}
	return $t;
}
?>