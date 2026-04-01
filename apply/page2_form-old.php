<?php include "php/header.php";?>
<script src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="css/jquery-ui.min.css">  
<?php
if (isset($_POST['programmesugpg'])){
    if (empty($_POST['programmesugpg'])
	|| empty($_POST['gender'])
	|| empty($_POST['phonenumber'])
	|| empty($_POST['alternate_no'])
	|| empty($_POST['alternate_email'])
	|| empty($_POST['email'])
	|| empty($_POST['dateofbirth'])
	|| empty($_POST['name'])
	|| empty($_POST['lastname']))	
	{
		//setting error message
		$_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
     //   header("location: page1_form.php"); //redirecting to first page
    
		}
		else {
		//fetching all values posted from second page and storing it in variable
	
		foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }
		
		
		//function to extract array
                            extract($_SESSION['post']);  
							
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
						$str="UPDATE student SET `programmesugpg`='$programmesugpg',`name`='$name',`alternate_no`='$alternate_no',`alternate_email`='$alternate_email',`middlename`='$middlename',`lastname`='$lastname',`dateofbirth`='$dateofbirth',placeofbirth='$placeofbirth',`aadhar` ='$aadhar',`gender` ='$gender',`phonenumber`='$phonenumber',`physicallychallenged`='$physicallychallenged',`nationality`='$nationality',nationalityselect='$nationalityselect',`category`='$category',`mpdomicile`='$mpdomicile',`isComplete`=0,`lastPage`='$locationurl',`applicationid`='$aid',`studentisdcode`='$studentisdcode',formstatus='incomplete form' WHERE `memberID`='$memberid'";
							
						 $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT COUNT(*) AS CNT FROM tbl_students_data WHERE student_id='".$memberid."'"));
                                
  
 //echo $setdatacnt['CNT']."COUNT"; exit;
        //$coutnum=$setdatacnt['CNT'];
        //$studid= $memberid;
       // echo $studid; exit;
   // echo $coutnum ; exit;
   
  // $qur="INSERT INTO tbl_students_data (student_id) VALUES ('".$memberid."')"
   
    if($setdatacnt['CNT'] <= 0){
 mysqli_query($connection,"INSERT INTO tbl_students_data (student_id) VALUES ('".$memberid."')");
}
							//echo $str;
							
						   //exit; 	
							
						$query = mysqli_query($connection,$str);
					
						$str="delete from `studentpreference` where `studentid`=".$memberid;
					    $query = mysqli_query($connection,$str);
					    
					    if(isset($programmesugpg) && $programmesugpg!="B.Arch")
					    {
						$d=explode("_",$discipline);
						//print_r($d);
						$str="";
						for($i=0;$i<count($d);$i++)
						{
						$str="insert into studentpreference(`studentid`,`programname`,`discipline`,`prefno`) values";
						 $str.="(".$memberid.",'$programmesugpg','$d[$i]',".($i+1).");";
						 //echo $str;
						 $query = mysqli_query($connection,$str);
						}
						}
    }
} else {
    if (empty($_SESSION['error_page2'])) {
       // header("location: page1_form.php");//redirecting to first page
    }
}
?>
                
<span id="error">
<?php
//To show error of page 2
if (!empty($_SESSION['error_page2'])) {
    //echo $_SESSION['error_page2'];
    unset($_SESSION['error_page2']);
}
?>
</span>
<div class="content" style="background:#FFF;" >
    <form action="page3_form.php" method="post"  class="j-form" onsubmit="return validatepage2();">
       
       
       
               <div style="clear: both;"></div>  
			  <div class="sectionheading">
					<span>Elective Basket</span>
				</div>
			 
                
                
                 
                 
                 <div style="width:100%;padding:45px 10px;">
                 <?php if(trim($programmesugpg=='Post Graduate Diploma in Management')) 
					 {
					 ?>
         	<div style="width:50%;float:left;" id="elective_b1_div" >
         	    
         	       <select name="elective_b1" id="elective_b1">
         	         <option value="" >Select Elective Basket 1 </option>     
<option value="Business Ethics and Corporate Social Responsibility" <? if($elective_b1=='Business Ethics and Corporate Social Responsibility ') { echo "SELECTED='SELECTED'"; }?>>Business Ethics and Corporate Social Responsibility </option>
<option value="Marketing of Financial Services" <? if($elective_b1=='Marketing of Financial Services') { echo "SELECTED='SELECTED'"; }?>>Marketing of Financial Services</option>
<option value="Social Media Marketing" <? if($elective_b1=='Social Media Marketing') { echo "SELECTED='SELECTED'"; }?>>Social Media Marketing</option>


                   </select>
         	</div>
          
            
           
            <?php } ?> 
           
           
           
           <?php if($programmesugpg=='Post Graduate Diploma in Business Administration') 
                        {
					 ?>
            
               <div style="width:50%;float:left;" id="elective_b1_div" >
         	    
         	       <select name="elective_b1" id="elective_b1">
         	         <option value="" >Select Elective Basket 1 </option>     
<option value="Business Ethics and Corporate Social Responsibility" <? if($elective_b1=='Business Ethics and Corporate Social Responsibility') { echo "SELECTED='SELECTED'"; }?>>Business Ethics and Corporate Social Responsibility</option>

<option value="Marketing of Financial Services" <? if($elective_b1=='Marketing of Financial Services') { echo "SELECTED='SELECTED'"; }?>>Marketing of Financial Services</option>

<option value="Social Media Marketing" <? if($elective_b1=='Social Media Marketing') { echo "SELECTED='SELECTED'"; }?>>Social Media Marketing</option>
                   </select>
         	</div>
           <!---------------------Sem 3  end---------------------->  
            
             <div style="width:50%;float:left;" id="elective_b2_div">
               <select name="elective_b2" id="elective_b2">
                   <option value="" >Select Elective Basket 2 </option>
                   <option value="HR Analytics" <? if($elective_b1=='HR Analytics') { echo "SELECTED='SELECTED'"; }?>>HR Analytics</option>
                   <option value="Marketing Analytics" <? if($elective_b1=='Marketing Analytics') { echo "SELECTED='SELECTED'"; }?>>Marketing Analytics</option>
                   <option value="Predictive Modelling" <? if($elective_b1=='Predictive Modelling') { echo "SELECTED='SELECTED'"; }?>>Predictive Modelling</option>
               </select>
           </div>

          <?php } ?> 
           </div>
                 
              <!--------------Elective Baskect End----------------->   
                 
        
                   <div style="clear: both;"></div>  
			  <div class="sectionheading">
					<span>B. Demographic Details</span>
				</div>
			 <div class="dp">Nationality<br />
            <select name="nationalityselect" id ="nationality" required style="margin-top:10px;width:320px;" onchange="ChangeOther(this.value,1);">
            <option value="">--Select--</option>
            <option value="Indian" <?php if($nationalityselect=="Indian") echo "selected";?>>Indian</option>
            <option value="NRI" <?php if($nationalityselect=="NRI") echo "selected";?>>NRI</option>
            <option value="PIO" <?php if($nationalityselect=="PIO") echo "selected";?>>PIO</option>
            <option value="OCI" <?php if($nationalityselect=="OCI") echo "selected";?>>OCI</option>
            <option value="Foreign National" <?php //if($nationalityselect=="Foreign National") echo "selected";?>>Foreign National</option>
            
            </select>
                </div>
                   <div class="dp" id="aadhardiv" style="display: inline;margin:-1px 0px 10px 0px">Aadhar No<br />
				  <input type="text" onkeypress="return isNumberKey(event);" id="aadhar" name="aadhar" value="<?php echo $aadhar;?>" maxlength=12 / required>
                          <span id="aadharerr"></span>
				  </div>
				  
				  <div style="clear: both;"></div>  
                     <div class="sectionheading">
					<span>C.  Parent Details</span>
	          </div>
                    <div class="dp">Father's Name<br />
                    <input name="parentfname" type="text" required id="parentfname" placeholder="Father's Name" value="<?php echo $parentfname;?>">
                    </div>
 
 <!-- <div class="dp">Last Name<br />
                    <input name="parentlname" type="text" required id="parentlname" placeholder="Parent Last Name" value="<?php// echo $parentlname;?>">
                    </div>
   <div class="dp">Relationship with Applicant<br />
                    <input name="relationshipwithapplicant" id="relationshipwithapplicant" type="text" value="<?php //echo $relationshipwithapplicant;?>" required>
                    </div>-->
   
                    <div class="dp" style="display:none;">Country Code
                    <br />
                  	<input name="parentisdcode" class="isdcode" value="India +91"  type="text" id="parentisdcode"/ >
					 <span id="parentisdcodeerr"></span>
                    </div>
					
                     <div class="dp">Mobile No<br />
                  	<input name="parentmobilenumber" type="text" required id="parentmobilenumber" placeholder="Parents Contact Number" onkeypress="return isNumberKey(event)" maxlength="10" value="<?php echo $parentmobilenumber;?>"/ >
					<span id="parentmobilenumbererr"></span>
					 </div>
					 
					 <div class="dp">Email ID<br />
       	<input name="parentemail" type="email" id="parentemail" placeholder="Parents Email" value="<?php echo $parentemail;?>" style="margin-top:10px;width:90%;">
        </div>
					 	<input id="studentmobilenumber" value="<?php echo $phonenumber;?>" style="visibility: collapse;height:0px;"/>
				
					                 <div style="clear:both"></div>


                    <!--<div class="dp">Current Occupation<br />
					<select  name="professionoftheparent" required style="font-size:11px; margin-top:10px;width:100%;"  onchange="ChangeOther(this.value);">
						<option value="Government" <?php //if($professionoftheparent=="Government") echo "selected";?>>Government</option>
						<option value="PrivateSector" <?php //if($professionoftheparent=="PrivateSector") echo "selected";?>>Private Sector</option>
						<option value="PublicSector" <?php //if($professionoftheparent=="PublicSector") echo "selected";?>>Public Sector</option>
						<option value="SelfEmployed" <?php //if($professionoftheparent=="SelfEmployed") echo "selected";?>>Self Employed</option>
						<option value="Others" <?php //if($professionoftheparent=="Others") echo "selected";?>>Others</option>
					</select>-->
					<?php/*
					if($professionoftheparent=="Others")
					{?>
					<div class="dp">Current Occupation<br />
                    <input type="text" name="professionoftheparent" id="co" placeholder="Other than above Occupation" value="<?php echo $professionoftheparent;?>"/>
                    </div>
					<?php
					}
					else
					{?>
					                    <input type="text" name="professionoftheparent" id="co" value="<?php echo $professionoftheparent;?>" readonly style="background-color:#ccc;"/>
						<?php
					}
					
					*/
					?>
                    
                    </div>
					<!--<div class="dp">Name of Organization<br />
                    <input name="organizationdetails" type="text"  required id="organizationdetails" placeholder="Organization Name and Address"  value="<?php //echo $organizationdetails;?>">
                    </div>-->
                    
                    <div class="dp">Mother's Name<br />
                    <input name="mothername" id="mothername" type="text" value="<?php echo $mothername;?>" required>
                    </div>
                   
                    
      
 
                <div style="clear:both"></div>
				
      <div class="sectionheading">
					<span>D. Contact Details</span>
	  </div>
                  <div class="brd5">
                   
                
  <div class="dp0">Correspondence Address<br /><br>
                   <textarea name="caddress" id="address" style="height:50px;width:80%;resize: none;" required><?php echo $caddress;?></textarea>
                   </div>
  
  <div style="clear:both;"></div>
<br>
                    <div class="dp2">City<br />
                    <input name="ccity" id="city" type="text" value="<?php echo $ccity;?>" required>
                   </div>
                 
                  	<div class="dp2">State<br />
                  		
			 	<select name="cstate" id="state" style="margin-top:10px; width: 210px;" required>
			 	        
			 	        <option value="Maharastra"<?php if($cstate=="Maharastra") echo "selected";?>><?php echo $cstate;?></option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kenmore">Kenmore</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Narora">Narora</option>
<option value="Natwar">Natwar</option>
<option value="Odisha">Odisha</option>
<option value="Paschim Medinipur">Paschim Medinipur</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="Vaishali">Vaishali</option>
<option value="West Bengal">West Bengal</option>
<option value="Others">Others</option>
		
            </select>
                   
                    </div>
                    <div class="dp2">Country<br />
                  		
			 	<select name="ccountry" id="country" style="margin-top:10px; width: 210px;" required>
			 	        <option value="">Select</option>
			 	        <option value="Afghanistan"<?php if($ccountry=="Afghanistan") echo "selected";?>>Afghanistan</option>
                        <option value="Albania"<?php if($ccountry=="Albania") echo "selected";?>>Albania</option>
                        <option value="Algeria"<?php if($ccountry=="Algeria") echo "selected";?>>Algeria</option>
                        <option value="Andorra"<?php if($ccountry=="Andorra") echo "selected";?>>Andorra</option>
                        <option value="Angola"<?php if($ccountry=="Angola") echo "selected";?>>Angola</option>
                        <option value="Antigua and Barbuda"<?php if($ccountry=="Antigua and Barbuda") echo "selected";?>>Antigua and Barbuda</option>
                        <option value="Argentina"<?php if($ccountry=="Argentina") echo "selected";?>>Argentina</option>
                        <option value="Armenia"<?php if($ccountry=="Armenia") echo "selected";?>>Armenia</option>
                        <option value="Aruba"<?php if($ccountry=="Aruba") echo "selected";?>>Aruba</option>
                        <option value="Australia"<?php if($ccountry=="Australia") echo "selected";?>>Australia</option>
                        <option value="Austria"<?php if($ccountry=="Austria") echo "selected";?>>Austria</option>
                        <option value="Azerbaijan"<?php if($ccountry=="Azerbaijan") echo "selected";?>>Azerbaijan</option>
                        <option value="Bahamas, The"<?php if($ccountry=="Bahamas, The") echo "selected";?>>Bahamas, The</option>
                        <option value="Bahrain"<?php if($ccountry=="Bahrain") echo "selected";?>>Bahrain</option>
                        <option value="Bangladesh"<?php if($ccountry=="Bangladesh") echo "selected";?>>Bangladesh</option>
                        <option value="Barbados"<?php if($ccountry=="Barbados") echo "selected";?>>Barbados</option>
                        <option value="Belarus"<?php if($ccountry=="Belarus") echo "selected";?>>Belarus</option>
                        <option value="Belgium"<?php if($ccountry=="Belgium") echo "selected";?>>Belgium</option>
                        <option value="Belize"<?php if($ccountry=="Belize") echo "selected";?>>Belize</option>
                        <option value="Benin"<?php if($ccountry=="Benin") echo "selected";?>>Benin</option>
                        <option value="Bhutan"<?php if($ccountry=="Bhutan") echo "selected";?>>Bhutan</option>
                        <option value="Bolivia"<?php if($ccountry=="Bolivia") echo "selected";?>>Bolivia</option>
                        <option value="Bosnia and Herzegovina"<?php if($ccountry=="Bosnia and Herzegovina") echo "selected";?>>Bosnia and Herzegovina</option>
                        <option value="Botswana"<?php if($ccountry=="Botswana") echo "selected";?>>Botswana</option>
                        <option value="Brazil"<?php if($ccountry=="Brazil") echo "selected";?>>Brazil</option>
                        <option value="Brunei"<?php if($ccountry=="Brunei") echo "selected";?>>Brunei</option>
                        <option value="Bulgaria"<?php if($ccountry=="Bulgaria") echo "selected";?>>Bulgaria</option>
                        <option value="Burkina Faso"<?php if($ccountry=="Burkina Faso") echo "selected";?>>Burkina Faso</option>
                        <option value="Burma"<?php if($ccountry=="Burma") echo "selected";?>>Burma</option>
                        <option value="Burundi"<?php if($ccountry=="Burundi") echo "selected";?>>Burundi</option>
                        <option value="Cambodia"<?php if($ccountry=="Cambodia") echo "selected";?>>Cambodia</option>
                        <option value="Cameroon"<?php if($ccountry=="Cameroon") echo "selected";?>>Cameroon</option>
                        <option value="Canada"<?php if($ccountry=="Canada") echo "selected";?>>Canada</option>
                        <option value="Cabo Verde"<?php if($ccountry=="Cabo Verde") echo "selected";?>>Cabo Verde</option>
                        <option value="Central African Republic"<?php if($ccountry=="Central African Republic") echo "selected";?>>Central African Republic</option>
                        <option value="Chad"<?php if($ccountry=="Chad") echo "selected";?>>Chad</option>
                        <option value="Chile"<?php if($ccountry=="Chile") echo "selected";?>>Chile</option>
                        <option value="China"<?php if($ccountry=="China") echo "selected";?>>China</option>
                        <option value="Colombia"<?php if($ccountry=="Colombia") echo "selected";?>>Colombia</option>
                        <option value="Comoros"<?php if($ccountry=="Comoros") echo "selected";?>>Comoros</option>
                        <option value="Congo, Democratic Republic of the"<?php if($ccountry=="Congo, Democratic Republic of the") echo "selected";?>>Congo, Democratic Republic of the</option>
                        <option value="Congo, Republic of the"<?php if($ccountry=="Congo, Republic of the") echo "selected";?>>Congo, Republic of the</option>
                        <option value="Costa Rica"<?php if($ccountry=="Costa Rica") echo "selected";?>>Costa Rica</option>
                        <option value="Cote d'Ivoire"<?php if($ccountry=="Cote d'Ivoire") echo "selected";?>>Cote d'Ivoire</option>
                        <option value="Croatia"<?php if($ccountry=="Croatia") echo "selected";?>>Croatia</option>
                        <option value="Cuba"<?php if($ccountry=="Cuba") echo "selected";?>>Cuba</option>
                        <option value="Curacao"<?php if($ccountry=="Curacao") echo "selected";?>>Curacao</option>
                        <option value="Cyprus"<?php if($ccountry=="Cyprus") echo "selected";?>>Cyprus</option>
                        <option value="Czechia"<?php if($ccountry=="Czechia") echo "selected";?>>Czechia</option>
                        <option value="Denmark"<?php if($ccountry=="Denmark") echo "selected";?>>Denmark</option>
                        <option value="Djibouti"<?php if($ccountry=="Djibouti") echo "selected";?>>Djibouti</option>
                        <option value="Dominica"<?php if($ccountry=="Dominica") echo "selected";?>>Dominica</option>
                        <option value="Dominican Republic"<?php if($ccountry=="Dominican Republic") echo "selected";?>>Dominican Republic</option>
                        <option value="East Timor"<?php if($ccountry=="East Timor") echo "selected";?>>East Timor</option>
                        <option value="Ecuador"<?php if($ccountry=="Ecuador") echo "selected";?>>Ecuador</option>
                        <option value="Egypt"<?php if($ccountry=="Egypt") echo "selected";?>>Egypt</option>
                        <option value="El Salvador"<?php if($ccountry=="El Salvador") echo "selected";?>>El Salvador</option>
                        <option value="Equatorial Guinea"<?php if($ccountry=="Equatorial Guinea") echo "selected";?>>Equatorial Guinea</option>
                        <option value="Eritrea"<?php if($ccountry=="Eritrea") echo "selected";?>>Eritrea</option>
                        <option value="Estonia"<?php if($ccountry=="Estonia") echo "selected";?>>Estonia</option>
                        <option value="Ethiopia"<?php if($ccountry=="Ethiopia") echo "selected";?>>Ethiopia</option>
                        <option value="Fiji"<?php if($ccountry=="Fiji") echo "selected";?>>Fiji</option>
                        <option value="Finland"<?php if($ccountry=="Finland") echo "selected";?>>Finland</option>
                        <option value="France"<?php if($ccountry=="France") echo "selected";?>>France</option>
                        <option value="Gabon"<?php if($ccountry=="Gabon") echo "selected";?>>Gabon</option>
                        <option value="Gambia, The"<?php if($ccountry=="Gambia, The") echo "selected";?>>Gambia, The</option>
                        <option value="Georgia"<?php if($ccountry=="Georgia") echo "selected";?>>Georgia</option>
                        <option value="Germany"<?php if($ccountry=="Germany") echo "selected";?>>Germany</option>
                        <option value="Ghana"<?php if($ccountry=="Ghana") echo "selected";?>>Ghana</option>
                        <option value="Greece"<?php if($ccountry=="Greece") echo "selected";?>>Greece</option>
                        <option value="Grenada"<?php if($ccountry=="Grenada") echo "selected";?>>Grenada</option>
                        <option value="Guatemala"<?php if($ccountry=="Guatemala") echo "selected";?>>Guatemala</option>
                        <option value="Guinea"<?php if($ccountry=="Guinea") echo "selected";?>>Guinea</option>
                        <option value="Guinea-Bissau"<?php if($ccountry=="Guinea-Bissau") echo "selected";?>>Guinea-Bissau</option>
                        <option value="Guyana"<?php if($ccountry=="Guyana") echo "selected";?>>Guyana</option>
                        <option value="Haiti"<?php if($ccountry=="Haiti") echo "selected";?>>Haiti</option>
                        <option value="Holy See"<?php if($ccountry=="Holy See") echo "selected";?>>Holy See</option>
                        <option value="Honduras"<?php if($ccountry=="Honduras") echo "selected";?>>Honduras</option>
                        <option value="Hong Kong"<?php if($ccountry=="Hong Kong") echo "selected";?>>Hong Kong</option>
                        <option value="Hungary"<?php if($ccountry=="Hungary") echo "selected";?>>Hungary</option>
                        <option value="Iceland"<?php if($ccountry=="Iceland") echo "selected";?>>Iceland</option>
                        <option value="India"<?php if($ccountry=="India") echo "selected";?>>India</option>
                        <option value="Indonesia"<?php if($ccountry=="Indonesia") echo "selected";?>>Indonesia</option>
                        <option value="Iran"<?php if($ccountry=="Iran") echo "selected";?>>Iran</option>
                        <option value="Iraq"<?php if($ccountry=="Iraq") echo "selected";?>>Iraq</option>
                        <option value="Ireland"<?php if($ccountry=="Ireland") echo "selected";?>>Ireland</option>
                        <option value="Israel"<?php if($ccountry=="Israel") echo "selected";?>>Israel</option>
                        <option value="Italy"<?php if($ccountry=="Italy") echo "selected";?>>Italy</option>
                        <option value="Jamaica"<?php if($ccountry=="Jamaica") echo "selected";?>>Jamaica</option>
                        <option value="Japan"<?php if($ccountry=="Japan") echo "selected";?>>Japan</option>
                        <option value="Jordan"<?php if($ccountry=="Jordan") echo "selected";?>>Jordan</option>
                        <option value="Kazakhstan"<?php if($ccountry=="Kazakhstan") echo "selected";?>>Kazakhstan</option>
                        <option value="Kenya"<?php if($ccountry=="Kenya") echo "selected";?>>Kenya</option>
                        <option value="Kiribati"<?php if($ccountry=="Kiribati") echo "selected";?>>Kiribati</option>
                        <option value="Korea, North"<?php if($ccountry=="Korea, North") echo "selected";?>>Korea, North</option>
                        <option value="Korea, South"<?php if($ccountry=="Korea, South") echo "selected";?>>Korea, South</option>
                        <option value="Kosovo"<?php if($ccountry=="Kosovo") echo "selected";?>>Kosovo</option>
                        <option value="Kuwait"<?php if($ccountry=="Kuwait") echo "selected";?>>Kuwait</option>
                        <option value="Kyrgyzstan"<?php if($ccountry=="Kyrgyzstan") echo "selected";?>>Kyrgyzstan</option>
                        <option value="Laos"<?php if($ccountry=="Laos") echo "selected";?>>Laos</option>
                        <option value="Latvia"<?php if($ccountry=="Latvia") echo "selected";?>>Latvia</option>
                        <option value="Lebanon"<?php if($ccountry=="Lebanon") echo "selected";?>>Lebanon</option>
                        <option value="Lesotho"<?php if($ccountry=="Lesotho") echo "selected";?>>Lesotho</option>
                        <option value="Liberia"<?php if($ccountry=="Liberia") echo "selected";?>>Liberia</option>
                        <option value="Libya"<?php if($ccountry=="Libya") echo "selected";?>>Libya</option>
                        <option value="Liechtenstein"<?php if($ccountry=="Liechtenstein") echo "selected";?>>Liechtenstein</option>
                        <option value="Lithuania"<?php if($ccountry=="Lithuania") echo "selected";?>>Lithuania</option>
                        <option value="Luxembourg"<?php if($ccountry=="Luxembourg") echo "selected";?>>Luxembourg</option>
                        <option value="Macau"<?php if($ccountry=="Macau") echo "selected";?>>Macau</option>
                        <option value="Macedonia"<?php if($ccountry=="Macedonia") echo "selected";?>>Macedonia</option>
                        <option value="Madagascar"<?php if($ccountry=="Madagascar") echo "selected";?>>Madagascar</option>
                        <option value="Malawi"<?php if($ccountry=="Malawi") echo "selected";?>>Malawi</option>
                        <option value="Malaysia"<?php if($ccountry=="Malaysia") echo "selected";?>>Malaysia</option>
                        <option value="Maldives"<?php if($ccountry=="Maldives") echo "selected";?>>Maldives</option>
                        <option value="Mali"<?php if($ccountry=="Mali") echo "selected";?>>Mali</option>
                        <option value="Malta"<?php if($ccountry=="Malta") echo "selected";?>>Malta</option>
                        <option value="Marshall Islands"<?php if($ccountry=="Marshall Islands") echo "selected";?>>Marshall Islands</option>
                        <option value="Mauritania"<?php if($ccountry=="Mauritania") echo "selected";?>>Mauritania</option>
                        <option value="Mauritius"<?php if($ccountry=="Mauritius") echo "selected";?>>Mauritius</option>
                        <option value="Mexico"<?php if($ccountry=="Mexico") echo "selected";?>>Mexico</option>
                        <option value="Micronesia"<?php if($ccountry=="Micronesia") echo "selected";?>>Micronesia</option>
                        <option value="Moldova"<?php if($ccountry=="Moldova") echo "selected";?>>Moldova</option>
                        <option value="Monaco"<?php if($ccountry=="Monaco") echo "selected";?>>Monaco</option>
                        <option value="Mongolia"<?php if($ccountry=="Mongolia") echo "selected";?>>Mongolia</option>
                        <option value="Montenegro"<?php if($ccountry=="Montenegro") echo "selected";?>>Montenegro</option>
                        <option value="Morocco"<?php if($ccountry=="Morocco") echo "selected";?>>Morocco</option>
                        <option value="Mozambique"<?php if($ccountry=="Mozambique") echo "selected";?>>Mozambique</option>
                        <option value="Namibia"<?php if($ccountry=="Namibia") echo "selected";?>>Namibia</option>
                        <option value="Nauru"<?php if($ccountry=="Nauru") echo "selected";?>>Nauru</option>
                        <option value="Nepal"<?php if($ccountry=="Nepal") echo "selected";?>>Nepal</option>
                        <option value="Netherlands"<?php if($ccountry=="Netherlands") echo "selected";?>>Netherlands</option>
                        <option value="New Zealand"<?php if($ccountry=="New Zealand") echo "selected";?>>New Zealand</option>
                        <option value="Nicaragua"<?php if($ccountry=="Nicaragua") echo "selected";?>>Nicaragua</option>
                        <option value="Niger"<?php if($ccountry=="Niger") echo "selected";?>>Niger</option>
                        <option value="Nigeria"<?php if($ccountry=="Nigeria") echo "selected";?>>Nigeria</option>
                        <option value="North Korea"<?php if($ccountry=="North Korea") echo "selected";?>>North Korea</option>
                        <option value="Norway"<?php if($ccountry=="Norway") echo "selected";?>>Norway</option>
                        <option value="Oman"<?php if($ccountry=="Oman") echo "selected";?>>Oman</option>
                        <option value="Pakistan"<?php if($ccountry=="Pakistan") echo "selected";?>>Pakistan</option>
                        <option value="Palau"<?php if($ccountry=="Palau") echo "selected";?>>Palau</option>
                        <option value="Palestinian Territories"<?php if($ccountry=="Palestinian Territories") echo "selected";?>>Palestinian Territories</option>
                        <option value="Panama"<?php if($ccountry=="Panama") echo "selected";?>>Panama</option>
                        <option value="Papua New Guinea"<?php if($ccountry=="Papua New Guinea") echo "selected";?>>Papua New Guinea</option>
                        <option value="Paraguay"<?php if($ccountry=="Paraguay") echo "selected";?>>Paraguay</option>
                        <option value="Peru"<?php if($ccountry=="Peru") echo "selected";?>>Peru</option>
                        <option value="Philippines"<?php if($ccountry=="Philippines") echo "selected";?>>Philippines</option>
                        <option value="Poland"<?php if($ccountry=="Poland") echo "selected";?>>Poland</option>
                        <option value="Portugal"<?php if($ccountry=="Portugal") echo "selected";?>>Portugal</option>
                        <option value="Qatar"<?php if($ccountry=="Qatar") echo "selected";?>>Qatar</option>
                        <option value="Romania"<?php if($ccountry=="Romania") echo "selected";?>>Romania</option>
                        <option value="Russia"<?php if($ccountry=="Russia") echo "selected";?>>Russia</option>
                        <option value="Rwanda"<?php if($ccountry=="Rwanda") echo "selected";?>>Rwanda</option>
                        <option value="Saint Kitts and Nevis"<?php if($ccountry=="Saint Kitts and Nevis") echo "selected";?>>Saint Kitts and Nevis</option>
                        <option value="Saint Lucia"<?php if($ccountry=="Saint Lucia") echo "selected";?>>Saint Lucia</option>
                        <option value="Saint Vincent and the Grenadines"<?php if($ccountry=="Saint Vincent and the Grenadines") echo "selected";?>>Saint Vincent and the Grenadines</option>
                        <option value="Samoa"<?php if($ccountry=="Samoa") echo "selected";?>>Samoa</option>
                        <option value="San Marino"<?php if($ccountry=="San Marino") echo "selected";?>>San Marino</option>
                        <option value="Sao Tome and Principe"<?php if($ccountry=="Sao Tome and Principe") echo "selected";?>>Sao Tome and Principe</option>
                        <option value="Saudi Arabia"<?php if($ccountry=="Saudi Arabia") echo "selected";?>>Saudi Arabia</option>
                        <option value="Senegal"<?php if($ccountry=="Senegal") echo "selected";?>>Senegal</option>
                        <option value="Serbia"<?php if($ccountry=="Serbia") echo "selected";?>>Serbia</option>
                        <option value="Seychelles"<?php if($ccountry=="Seychelles") echo "selected";?>>Seychelles</option>
                        <option value="Sierra Leone"<?php if($ccountry=="Sierra Leone") echo "selected";?>>Sierra Leone</option>
                        <option value="Singapore"<?php if($ccountry=="Singapore") echo "selected";?>>Singapore</option>
                        <option value="Sint Maarten"<?php if($ccountry=="Sint Maarten") echo "selected";?>>Sint Maarten</option>
                        <option value="Slovakia"<?php if($ccountry=="Slovakia") echo "selected";?>>Slovakia</option>
                        <option value="Slovenia"<?php if($ccountry=="Slovenia") echo "selected";?>>Slovenia</option>
                        <option value="Solomon Islands"<?php if($ccountry=="Solomon Islands") echo "selected";?>>Solomon Islands</option>
                        <option value="Somalia"<?php if($ccountry=="Somalia") echo "selected";?>>Somalia</option>
                        <option value="South Africa"<?php if($ccountry=="South Africa") echo "selected";?>>South Africa</option>
                        <option value="South Korea"<?php if($ccountry=="South Korea") echo "selected";?>>South Korea</option>
                        <option value="South Sudan"<?php if($ccountry=="South Sudan") echo "selected";?>>South Sudan</option>
                        <option value="Spain"<?php if($ccountry=="Spain") echo "selected";?>>Spain</option>
                        <option value="Sri Lanka"<?php if($ccountry=="Sri Lanka") echo "selected";?>>Sri Lanka</option>
                        <option value="Sudan"<?php if($ccountry=="Sudan") echo "selected";?>>Sudan</option>
                        <option value="Suriname"<?php if($ccountry=="Suriname") echo "selected";?>>Suriname</option>
                        <option value="Swaziland"<?php if($ccountry=="Swaziland") echo "selected";?>>Swaziland</option>
                        <option value="Sweden"<?php if($ccountry=="Sweden") echo "selected";?>>Sweden</option>
                        <option value="Switzerland"<?php if($ccountry=="Switzerland") echo "selected";?>>Switzerland</option>
                        <option value="Syria"<?php if($ccountry=="Syria") echo "selected";?>>Syria</option>
                        <option value="Taiwan"<?php if($ccountry=="Taiwan") echo "selected";?>>Taiwan</option>
                        <option value="Tajikistan"<?php if($ccountry=="Tajikistan") echo "selected";?>>Tajikistan</option>
                        <option value="Tanzania"<?php if($ccountry=="Tanzania") echo "selected";?>>Tanzania</option>
                        <option value="Thailand"<?php if($ccountry=="Thailand") echo "selected";?>>Thailand</option>
                        <option value="Timor-Leste"<?php if($ccountry=="Timor-Leste") echo "selected";?>>Timor-Leste</option>
                        <option value="Togo"<?php if($ccountry=="Togo") echo "selected";?>>Togo</option>
                        <option value="Tonga"<?php if($ccountry=="Tonga") echo "selected";?>>Tonga</option>
                        <option value="Trinidad and Tobago"<?php if($ccountry=="Trinidad and Tobago") echo "selected";?>>Trinidad and Tobago</option>
                        <option value="Tunisia"<?php if($ccountry=="Tunisia") echo "selected";?>>Tunisia</option>
                        <option value="Turkey"<?php if($ccountry=="Turkey") echo "selected";?>>Turkey</option>
                        <option value="Turkmenistan"<?php if($ccountry=="Turkmenistan") echo "selected";?>>Turkmenistan</option>
                        <option value="Tuvalu"<?php if($ccountry=="Tuvalu") echo "selected";?>>Tuvalu</option>
                        <option value="Uganda"<?php if($ccountry=="Uganda") echo "selected";?>>Uganda</option>
                        <option value="Ukraine"<?php if($ccountry=="Ukraine") echo "selected";?>>Ukraine</option>
                        <option value="United Arab Emirates"<?php if($ccountry=="United Arab Emirates") echo "selected";?>>United Arab Emirates</option>
                        <option value="United Kingdom"<?php if($ccountry=="United Kingdom") echo "selected";?>>United Kingdom</option>
                        <option value="Uruguay"<?php if($ccountry=="Uruguay") echo "selected";?>>Uruguay</option>
                        <option value="Uzbekistan"<?php if($ccountry=="Uzbekistan") echo "selected";?>>Uzbekistan</option>
                        <option value="Vanuatu"<?php if($ccountry=="Vanuatu") echo "selected";?>>Vanuatu</option>
                        <option value="Venezuela"<?php if($ccountry=="Venezuela") echo "selected";?>>Venezuela</option>
                        <option value="Yemen"<?php if($ccountry=="Yemen") echo "selected";?>>Yemen</option>
                        <option value="Zambia"<?php if($ccountry=="Zambia") echo "selected";?>>Zambia</option>
                        <option value="Zimbabwe "<?php if($ccountry=="Zimbabwe ") echo "selected";?>>Zimbabwe </option>

                        
                        
		
            </select>
                   
                    </div>
                    <!--	<div class="dp2">Country<br />
                    	
                        <input name="ccountry" id="country" type="text" value="<?php echo $ccountry;?>" required>
                    </div>-->
 
                  <div class="dp2">Pincode <br />
                    <input name="cpincode" id="pincode" type="text" value="<?php echo $cpincode;?>" required  maxlength="6" onkeypress="return isNumberKey(event)"/>
                    <script>
					
					</script>
                    </div>
                    
                   <div style="clear:both;"></div>
<label for="addcheck"><input type="checkbox" id="addcheck" onclick="SetAddress(this.id);"/>&nbsp;&nbsp;Same As Above</label>
                    
                 </div>
                 <div style="clear:both"></div>
                 <div> 

        
  <div class="dp0">Permanent Address <span>(If different from communication address)</span>
  <br>
  <br>
  <textarea name="address" style="height:50px;width:80%;resize: none;" id="paddress" required><?php echo $address;?></textarea>
                   </div>
  
  <div style="clear:both;"></div>

					

                    <div class="dp2">City<br />
                    <input name="pcity" type="text" id="pcity" placeholder="City" value="<?php echo $pcity;?>" required/>
                    </div>
                    
                                        
                    <div class="dp2">State<br />
                          
                  		
			 	<select name="pstate" id="pstate" style="margin-top:10px; width: 210px;">
			 	        
			 	        <option value="Maharastra"<?php if($cstate=="Maharastra") echo "selected";?>><?php echo $cstate;?></option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kenmore">Kenmore</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Narora">Narora</option>
<option value="Natwar">Natwar</option>
<option value="Odisha">Odisha</option>
<option value="Paschim Medinipur">Paschim Medinipur</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="Vaishali">Vaishali</option>
<option value="West Bengal">West Bengal</option>
<option value="Others">Others</option>
		
            </select>
                   
                    
                    <!--<input name="pstate" type="text" id="pstate" placeholder="State" value="<?php echo $pstate;?>" required/>-->
                    </div>
                        <div class="dp2">Country<br />
                  		
			 	<select name="pcountry" id="pcountry" style="margin-top:10px; width: 210px;" required>
			 	        <option value="">Select</option>
			 	        <option value="Afghanistan"<?php if($pcountry=="Afghanistan") echo "selected";?>>Afghanistan</option>
                        <option value="Albania"<?php if($pcountry=="Albania") echo "selected";?>>Albania</option>
                        <option value="Algeria"<?php if($pcountry=="Algeria") echo "selected";?>>Algeria</option>
                        <option value="Andorra"<?php if($pcountry=="Andorra") echo "selected";?>>Andorra</option>
                        <option value="Angola"<?php if($pcountry=="Angola") echo "selected";?>>Angola</option>
                        <option value="Antigua and Barbuda"<?php if($pcountry=="Antigua and Barbuda") echo "selected";?>>Antigua and Barbuda</option>
                        <option value="Argentina"<?php if($pcountry=="Argentina") echo "selected";?>>Argentina</option>
                        <option value="Armenia"<?php if($pcountry=="Armenia") echo "selected";?>>Armenia</option>
                        <option value="Aruba"<?php if($pcountry=="Aruba") echo "selected";?>>Aruba</option>
                        <option value="Australia"<?php if($pcountry=="Australia") echo "selected";?>>Australia</option>
                        <option value="Austria"<?php if($pcountry=="Austria") echo "selected";?>>Austria</option>
                        <option value="Azerbaijan"<?php if($pcountry=="Azerbaijan") echo "selected";?>>Azerbaijan</option>
                        <option value="Bahamas, The"<?php if($pcountry=="Bahamas, The") echo "selected";?>>Bahamas, The</option>
                        <option value="Bahrain"<?php if($pcountry=="Bahrain") echo "selected";?>>Bahrain</option>
                        <option value="Bangladesh"<?php if($pcountry=="Bangladesh") echo "selected";?>>Bangladesh</option>
                        <option value="Barbados"<?php if($pcountry=="Barbados") echo "selected";?>>Barbados</option>
                        <option value="Belarus"<?php if($pcountry=="Belarus") echo "selected";?>>Belarus</option>
                        <option value="Belgium"<?php if($pcountry=="Belgium") echo "selected";?>>Belgium</option>
                        <option value="Belize"<?php if($pcountry=="Belize") echo "selected";?>>Belize</option>
                        <option value="Benin"<?php if($pcountry=="Benin") echo "selected";?>>Benin</option>
                        <option value="Bhutan"<?php if($pcountry=="Bhutan") echo "selected";?>>Bhutan</option>
                        <option value="Bolivia"<?php if($pcountry=="Bolivia") echo "selected";?>>Bolivia</option>
                        <option value="Bosnia and Herzegovina"<?php if($pcountry=="Bosnia and Herzegovina") echo "selected";?>>Bosnia and Herzegovina</option>
                        <option value="Botswana"<?php if($pcountry=="Botswana") echo "selected";?>>Botswana</option>
                        <option value="Brazil"<?php if($pcountry=="Brazil") echo "selected";?>>Brazil</option>
                        <option value="Brunei"<?php if($pcountry=="Brunei") echo "selected";?>>Brunei</option>
                        <option value="Bulgaria"<?php if($pcountry=="Bulgaria") echo "selected";?>>Bulgaria</option>
                        <option value="Burkina Faso"<?php if($pcountry=="Burkina Faso") echo "selected";?>>Burkina Faso</option>
                        <option value="Burma"<?php if($pcountry=="Burma") echo "selected";?>>Burma</option>
                        <option value="Burundi"<?php if($pcountry=="Burundi") echo "selected";?>>Burundi</option>
                        <option value="Cambodia"<?php if($pcountry=="Cambodia") echo "selected";?>>Cambodia</option>
                        <option value="Cameroon"<?php if($pcountry=="Cameroon") echo "selected";?>>Cameroon</option>
                        <option value="Canada"<?php if($pcountry=="Canada") echo "selected";?>>Canada</option>
                        <option value="Cabo Verde"<?php if($pcountry=="Cabo Verde") echo "selected";?>>Cabo Verde</option>
                        <option value="Central African Republic"<?php if($pcountry=="Central African Republic") echo "selected";?>>Central African Republic</option>
                        <option value="Chad"<?php if($pcountry=="Chad") echo "selected";?>>Chad</option>
                        <option value="Chile"<?php if($pcountry=="Chile") echo "selected";?>>Chile</option>
                        <option value="China"<?php if($pcountry=="China") echo "selected";?>>China</option>
                        <option value="Colombia"<?php if($pcountry=="Colombia") echo "selected";?>>Colombia</option>
                        <option value="Comoros"<?php if($pcountry=="Comoros") echo "selected";?>>Comoros</option>
                        <option value="Congo, Democratic Republic of the"<?php if($pcountry=="Congo, Democratic Republic of the") echo "selected";?>>Congo, Democratic Republic of the</option>
                        <option value="Congo, Republic of the"<?php if($pcountry=="Congo, Republic of the") echo "selected";?>>Congo, Republic of the</option>
                        <option value="Costa Rica"<?php if($pcountry=="Costa Rica") echo "selected";?>>Costa Rica</option>
                        <option value="Cote d'Ivoire"<?php if($pcountry=="Cote d'Ivoire") echo "selected";?>>Cote d'Ivoire</option>
                        <option value="Croatia"<?php if($pcountry=="Croatia") echo "selected";?>>Croatia</option>
                        <option value="Cuba"<?php if($pcountry=="Cuba") echo "selected";?>>Cuba</option>
                        <option value="Curacao"<?php if($pcountry=="Curacao") echo "selected";?>>Curacao</option>
                        <option value="Cyprus"<?php if($pcountry=="Cyprus") echo "selected";?>>Cyprus</option>
                        <option value="Czechia"<?php if($pcountry=="Czechia") echo "selected";?>>Czechia</option>
                        <option value="Denmark"<?php if($pcountry=="Denmark") echo "selected";?>>Denmark</option>
                        <option value="Djibouti"<?php if($pcountry=="Djibouti") echo "selected";?>>Djibouti</option>
                        <option value="Dominica"<?php if($pcountry=="Dominica") echo "selected";?>>Dominica</option>
                        <option value="Dominican Republic"<?php if($pcountry=="Dominican Republic") echo "selected";?>>Dominican Republic</option>
                        <option value="East Timor"<?php if($pcountry=="East Timor") echo "selected";?>>East Timor</option>
                        <option value="Ecuador"<?php if($pcountry=="Ecuador") echo "selected";?>>Ecuador</option>
                        <option value="Egypt"<?php if($pcountry=="Egypt") echo "selected";?>>Egypt</option>
                        <option value="El Salvador"<?php if($pcountry=="El Salvador") echo "selected";?>>El Salvador</option>
                        <option value="Equatorial Guinea"<?php if($pcountry=="Equatorial Guinea") echo "selected";?>>Equatorial Guinea</option>
                        <option value="Eritrea"<?php if($pcountry=="Eritrea") echo "selected";?>>Eritrea</option>
                        <option value="Estonia"<?php if($pcountry=="Estonia") echo "selected";?>>Estonia</option>
                        <option value="Ethiopia"<?php if($pcountry=="Ethiopia") echo "selected";?>>Ethiopia</option>
                        <option value="Fiji"<?php if($pcountry=="Fiji") echo "selected";?>>Fiji</option>
                        <option value="Finland"<?php if($pcountry=="Finland") echo "selected";?>>Finland</option>
                        <option value="France"<?php if($pcountry=="France") echo "selected";?>>France</option>
                        <option value="Gabon"<?php if($pcountry=="Gabon") echo "selected";?>>Gabon</option>
                        <option value="Gambia, The"<?php if($pcountry=="Gambia, The") echo "selected";?>>Gambia, The</option>
                        <option value="Georgia"<?php if($pcountry=="Georgia") echo "selected";?>>Georgia</option>
                        <option value="Germany"<?php if($pcountry=="Germany") echo "selected";?>>Germany</option>
                        <option value="Ghana"<?php if($pcountry=="Ghana") echo "selected";?>>Ghana</option>
                        <option value="Greece"<?php if($pcountry=="Greece") echo "selected";?>>Greece</option>
                        <option value="Grenada"<?php if($pcountry=="Grenada") echo "selected";?>>Grenada</option>
                        <option value="Guatemala"<?php if($pcountry=="Guatemala") echo "selected";?>>Guatemala</option>
                        <option value="Guinea"<?php if($pcountry=="Guinea") echo "selected";?>>Guinea</option>
                        <option value="Guinea-Bissau"<?php if($pcountry=="Guinea-Bissau") echo "selected";?>>Guinea-Bissau</option>
                        <option value="Guyana"<?php if($pcountry=="Guyana") echo "selected";?>>Guyana</option>
                        <option value="Haiti"<?php if($pcountry=="Haiti") echo "selected";?>>Haiti</option>
                        <option value="Holy See"<?php if($pcountry=="Holy See") echo "selected";?>>Holy See</option>
                        <option value="Honduras"<?php if($pcountry=="Honduras") echo "selected";?>>Honduras</option>
                        <option value="Hong Kong"<?php if($pcountry=="Hong Kong") echo "selected";?>>Hong Kong</option>
                        <option value="Hungary"<?php if($pcountry=="Hungary") echo "selected";?>>Hungary</option>
                        <option value="Iceland"<?php if($pcountry=="Iceland") echo "selected";?>>Iceland</option>
                        <option value="India"<?php if($pcountry=="India") echo "selected";?>>India</option>
                        <option value="Indonesia"<?php if($pcountry=="Indonesia") echo "selected";?>>Indonesia</option>
                        <option value="Iran"<?php if($pcountry=="Iran") echo "selected";?>>Iran</option>
                        <option value="Iraq"<?php if($pcountry=="Iraq") echo "selected";?>>Iraq</option>
                        <option value="Ireland"<?php if($pcountry=="Ireland") echo "selected";?>>Ireland</option>
                        <option value="Israel"<?php if($pcountry=="Israel") echo "selected";?>>Israel</option>
                        <option value="Italy"<?php if($pcountry=="Italy") echo "selected";?>>Italy</option>
                        <option value="Jamaica"<?php if($pcountry=="Jamaica") echo "selected";?>>Jamaica</option>
                        <option value="Japan"<?php if($pcountry=="Japan") echo "selected";?>>Japan</option>
                        <option value="Jordan"<?php if($pcountry=="Jordan") echo "selected";?>>Jordan</option>
                        <option value="Kazakhstan"<?php if($pcountry=="Kazakhstan") echo "selected";?>>Kazakhstan</option>
                        <option value="Kenya"<?php if($pcountry=="Kenya") echo "selected";?>>Kenya</option>
                        <option value="Kiribati"<?php if($pcountry=="Kiribati") echo "selected";?>>Kiribati</option>
                        <option value="Korea, North"<?php if($pcountry=="Korea, North") echo "selected";?>>Korea, North</option>
                        <option value="Korea, South"<?php if($pcountry=="Korea, South") echo "selected";?>>Korea, South</option>
                        <option value="Kosovo"<?php if($pcountry=="Kosovo") echo "selected";?>>Kosovo</option>
                        <option value="Kuwait"<?php if($pcountry=="Kuwait") echo "selected";?>>Kuwait</option>
                        <option value="Kyrgyzstan"<?php if($pcountry=="Kyrgyzstan") echo "selected";?>>Kyrgyzstan</option>
                        <option value="Laos"<?php if($pcountry=="Laos") echo "selected";?>>Laos</option>
                        <option value="Latvia"<?php if($pcountry=="Latvia") echo "selected";?>>Latvia</option>
                        <option value="Lebanon"<?php if($pcountry=="Lebanon") echo "selected";?>>Lebanon</option>
                        <option value="Lesotho"<?php if($pcountry=="Lesotho") echo "selected";?>>Lesotho</option>
                        <option value="Liberia"<?php if($ccountry=="Liberia") echo "selected";?>>Liberia</option>
                        <option value="Libya"<?php if($pcountry=="Libya") echo "selected";?>>Libya</option>
                        <option value="Liechtenstein"<?php if($pcountry=="Liechtenstein") echo "selected";?>>Liechtenstein</option>
                        <option value="Lithuania"<?php if($pcountry=="Lithuania") echo "selected";?>>Lithuania</option>
                        <option value="Luxembourg"<?php if($pcountry=="Luxembourg") echo "selected";?>>Luxembourg</option>
                        <option value="Macau"<?php if($pcountry=="Macau") echo "selected";?>>Macau</option>
                        <option value="Macedonia"<?php if($pcountry=="Macedonia") echo "selected";?>>Macedonia</option>
                        <option value="Madagascar"<?php if($pcountry=="Madagascar") echo "selected";?>>Madagascar</option>
                        <option value="Malawi"<?php if($pcountry=="Malawi") echo "selected";?>>Malawi</option>
                        <option value="Malaysia"<?php if($pcountry=="Malaysia") echo "selected";?>>Malaysia</option>
                        <option value="Maldives"<?php if($pcountry=="Maldives") echo "selected";?>>Maldives</option>
                        <option value="Mali"<?php if($pcountry=="Mali") echo "selected";?>>Mali</option>
                        <option value="Malta"<?php if($pcountry=="Malta") echo "selected";?>>Malta</option>
                        <option value="Marshall Islands"<?php if($pcountry=="Marshall Islands") echo "selected";?>>Marshall Islands</option>
                        <option value="Mauritania"<?php if($pcountry=="Mauritania") echo "selected";?>>Mauritania</option>
                        <option value="Mauritius"<?php if($pcountry=="Mauritius") echo "selected";?>>Mauritius</option>
                        <option value="Mexico"<?php if($pcountry=="Mexico") echo "selected";?>>Mexico</option>
                        <option value="Micronesia"<?php if($pcountry=="Micronesia") echo "selected";?>>Micronesia</option>
                        <option value="Moldova"<?php if($pcountry=="Moldova") echo "selected";?>>Moldova</option>
                        <option value="Monaco"<?php if($pcountry=="Monaco") echo "selected";?>>Monaco</option>
                        <option value="Mongolia"<?php if($pcountry=="Mongolia") echo "selected";?>>Mongolia</option>
                        <option value="Montenegro"<?php if($pcountry=="Montenegro") echo "selected";?>>Montenegro</option>
                        <option value="Morocco"<?php if($pcountry=="Morocco") echo "selected";?>>Morocco</option>
                        <option value="Mozambique"<?php if($pcountry=="Mozambique") echo "selected";?>>Mozambique</option>
                        <option value="Namibia"<?php if($pcountry=="Namibia") echo "selected";?>>Namibia</option>
                        <option value="Nauru"<?php if($pcountry=="Nauru") echo "selected";?>>Nauru</option>
                        <option value="Nepal"<?php if($pcountry=="Nepal") echo "selected";?>>Nepal</option>
                        <option value="Netherlands"<?php if($pcountry=="Netherlands") echo "selected";?>>Netherlands</option>
                        <option value="New Zealand"<?php if($pcountry=="New Zealand") echo "selected";?>>New Zealand</option>
                        <option value="Nicaragua"<?php if($pcountry=="Nicaragua") echo "selected";?>>Nicaragua</option>
                        <option value="Niger"<?php if($pcountry=="Niger") echo "selected";?>>Niger</option>
                        <option value="Nigeria"<?php if($pcountry=="Nigeria") echo "selected";?>>Nigeria</option>
                        <option value="North Korea"<?php if($pcountry=="North Korea") echo "selected";?>>North Korea</option>
                        <option value="Norway"<?php if($pcountry=="Norway") echo "selected";?>>Norway</option>
                        <option value="Oman"<?php if($pcountry=="Oman") echo "selected";?>>Oman</option>
                        <option value="Pakistan"<?php if($pcountry=="Pakistan") echo "selected";?>>Pakistan</option>
                        <option value="Palau"<?php if($pcountry=="Palau") echo "selected";?>>Palau</option>
                        <option value="Palestinian Territories"<?php if($pcountry=="Palestinian Territories") echo "selected";?>>Palestinian Territories</option>
                        <option value="Panama"<?php if($pcountry=="Panama") echo "selected";?>>Panama</option>
                        <option value="Papua New Guinea"<?php if($pcountry=="Papua New Guinea") echo "selected";?>>Papua New Guinea</option>
                        <option value="Paraguay"<?php if($pcountry=="Paraguay") echo "selected";?>>Paraguay</option>
                        <option value="Peru"<?php if($pcountry=="Peru") echo "selected";?>>Peru</option>
                        <option value="Philippines"<?php if($pcountry=="Philippines") echo "selected";?>>Philippines</option>
                        <option value="Poland"<?php if($pcountry=="Poland") echo "selected";?>>Poland</option>
                        <option value="Portugal"<?php if($pcountry=="Portugal") echo "selected";?>>Portugal</option>
                        <option value="Qatar"<?php if($pcountry=="Qatar") echo "selected";?>>Qatar</option>
                        <option value="Romania"<?php if($pcountry=="Romania") echo "selected";?>>Romania</option>
                        <option value="Russia"<?php if($pcountry=="Russia") echo "selected";?>>Russia</option>
                        <option value="Rwanda"<?php if($pcountry=="Rwanda") echo "selected";?>>Rwanda</option>
                        <option value="Saint Kitts and Nevis"<?php if($pcountry=="Saint Kitts and Nevis") echo "selected";?>>Saint Kitts and Nevis</option>
                        <option value="Saint Lucia"<?php if($pcountry=="Saint Lucia") echo "selected";?>>Saint Lucia</option>
                        <option value="Saint Vincent and the Grenadines"<?php if($pcountry=="Saint Vincent and the Grenadines") echo "selected";?>>Saint Vincent and the Grenadines</option>
                        <option value="Samoa"<?php if($pcountry=="Samoa") echo "selected";?>>Samoa</option>
                        <option value="San Marino"<?php if($pcountry=="San Marino") echo "selected";?>>San Marino</option>
                        <option value="Sao Tome and Principe"<?php if($pcountry=="Sao Tome and Principe") echo "selected";?>>Sao Tome and Principe</option>
                        <option value="Saudi Arabia"<?php if($pcountry=="Saudi Arabia") echo "selected";?>>Saudi Arabia</option>
                        <option value="Senegal"<?php if($pcountry=="Senegal") echo "selected";?>>Senegal</option>
                        <option value="Serbia"<?php if($pcountry=="Serbia") echo "selected";?>>Serbia</option>
                        <option value="Seychelles"<?php if($pcountry=="Seychelles") echo "selected";?>>Seychelles</option>
                        <option value="Sierra Leone"<?php if($pcountry=="Sierra Leone") echo "selected";?>>Sierra Leone</option>
                        <option value="Singapore"<?php if($pcountry=="Singapore") echo "selected";?>>Singapore</option>
                        <option value="Sint Maarten"<?php if($pcountry=="Sint Maarten") echo "selected";?>>Sint Maarten</option>
                        <option value="Slovakia"<?php if($pcountry=="Slovakia") echo "selected";?>>Slovakia</option>
                        <option value="Slovenia"<?php if($pcountry=="Slovenia") echo "selected";?>>Slovenia</option>
                        <option value="Solomon Islands"<?php if($pcountry=="Solomon Islands") echo "selected";?>>Solomon Islands</option>
                        <option value="Somalia"<?php if($pcountry=="Somalia") echo "selected";?>>Somalia</option>
                        <option value="South Africa"<?php if($pcountry=="South Africa") echo "selected";?>>South Africa</option>
                        <option value="South Korea"<?php if($pcountry=="South Korea") echo "selected";?>>South Korea</option>
                        <option value="South Sudan"<?php if($pcountry=="South Sudan") echo "selected";?>>South Sudan</option>
                        <option value="Spain"<?php if($pcountry=="Spain") echo "selected";?>>Spain</option>
                        <option value="Sri Lanka"<?php if($pcountry=="Sri Lanka") echo "selected";?>>Sri Lanka</option>
                        <option value="Sudan"<?php if($pcountry=="Sudan") echo "selected";?>>Sudan</option>
                        <option value="Suriname"<?php if($pcountry=="Suriname") echo "selected";?>>Suriname</option>
                        <option value="Swaziland"<?php if($pcountry=="Swaziland") echo "selected";?>>Swaziland</option>
                        <option value="Sweden"<?php if($pcountry=="Sweden") echo "selected";?>>Sweden</option>
                        <option value="Switzerland"<?php if($pcountry=="Switzerland") echo "selected";?>>Switzerland</option>
                        <option value="Syria"<?php if($pcountry=="Syria") echo "selected";?>>Syria</option>
                        <option value="Taiwan"<?php if($pcountry=="Taiwan") echo "selected";?>>Taiwan</option>
                        <option value="Tajikistan"<?php if($pcountry=="Tajikistan") echo "selected";?>>Tajikistan</option>
                        <option value="Tanzania"<?php if($pcountry=="Tanzania") echo "selected";?>>Tanzania</option>
                        <option value="Thailand"<?php if($pcountry=="Thailand") echo "selected";?>>Thailand</option>
                        <option value="Timor-Leste"<?php if($pcountry=="Timor-Leste") echo "selected";?>>Timor-Leste</option>
                        <option value="Togo"<?php if($pcountry=="Togo") echo "selected";?>>Togo</option>
                        <option value="Tonga"<?php if($pcountry=="Tonga") echo "selected";?>>Tonga</option>
                        <option value="Trinidad and Tobago"<?php if($pcountry=="Trinidad and Tobago") echo "selected";?>>Trinidad and Tobago</option>
                        <option value="Tunisia"<?php if($pcountry=="Tunisia") echo "selected";?>>Tunisia</option>
                        <option value="Turkey"<?php if($pcountry=="Turkey") echo "selected";?>>Turkey</option>
                        <option value="Turkmenistan"<?php if($pcountry=="Turkmenistan") echo "selected";?>>Turkmenistan</option>
                        <option value="Tuvalu"<?php if($pcountry=="Tuvalu") echo "selected";?>>Tuvalu</option>
                        <option value="Uganda"<?php if($pcountry=="Uganda") echo "selected";?>>Uganda</option>
                        <option value="Ukraine"<?php if($pcountry=="Ukraine") echo "selected";?>>Ukraine</option>
                        <option value="United Arab Emirates"<?php if($pcountry=="United Arab Emirates") echo "selected";?>>United Arab Emirates</option>
                        <option value="United Kingdom"<?php if($pcountry=="United Kingdom") echo "selected";?>>United Kingdom</option>
                        <option value="Uruguay"<?php if($pcountry=="Uruguay") echo "selected";?>>Uruguay</option>
                        <option value="Uzbekistan"<?php if($pcountry=="Uzbekistan") echo "selected";?>>Uzbekistan</option>
                        <option value="Vanuatu"<?php if($pcountry=="Vanuatu") echo "selected";?>>Vanuatu</option>
                        <option value="Venezuela"<?php if($pcountry=="Venezuela") echo "selected";?>>Venezuela</option>
                        <option value="Yemen"<?php if($pcountry=="Yemen") echo "selected";?>>Yemen</option>
                        <option value="Zambia"<?php if($pcountry=="Zambia") echo "selected";?>>Zambia</option>
                        <option value="Zimbabwe "<?php if($pcountry=="Zimbabwe ") echo "selected";?>>Zimbabwe </option>

                        
                        
		
            </select>
                   
                    </div>
                     <!-- <div class="dp2">Country<br />
                    <input name="pcountry" type="text" id="pcountry" placeholder="Country" value="<?php echo $pcountry;?>" required/>
                    </div> -->          
  
                    <div class="dp2"> Pincode<br />
                    <input name="ppincode" type="text" id="ppincode" placeholder="Pincode" onkeypress="return isNumberKey(event)" maxlength="10" value="<?php echo $ppincode;?>" required/>
                    </div>

 					
                <div style="clear:both"></div>
            
                 <div style="margin-top:25px; float:right;">
               	    <input  type="reset" value="Back" onclick="GotoPrevPage('printformvalue.php');" style="background:#606062;color:#FFF;width:99px;font-size: 14px;padding: 5px 10px;"/>
                    <input  type="submit" value="Next" style="background:#606062;color:#FFF;width:99px;font-size: 14px;padding: 5px 10px;"/>
				</div> 
      
             <div style="clear:both;"></div>
         
               
    </form>
            	</div>

        </div>
        </div>
	 <script>
	 function GotoPrevPage(v)
	 {
	 location.href=v;
	 }
		function SetAddress(id)
		{
			var a="";
            var city="";
            var country="";
            var s="";
            var p="";
            if (document.getElementById(id).checked===true)
			{
			a=document.getElementById("address").value;
            city=document.getElementById("city").value;
            country=document.getElementById("country").value;
            s=document.getElementById("state").value;
            p=document.getElementById("pincode").value;
			}
			document.getElementById("paddress").value=a;
            document.getElementById("pcity").value=city;
            document.getElementById("pcountry").value=country;
            document.getElementById("pstate").value=s;
            document.getElementById("ppincode").value=p;
        }
		function ChangeOther(v,i)
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
				
				if (v=="NRI" || v=="PIO" || v=="OCI" || v=="Foreign National")
				{
					 $("#o"+i).removeAttr("readonly");
			                 $("#o"+i).css("background-color","transparent");
                                         $("#o"+i).css("width","320px");
                                         $("#o"+i).css("margin","27px 0px");   
                                         $("#statelisting").hide(); 
                                         $("#passportno").show();
                                         $("#passport_no").attr("required","required");
                                         $("#o"+i).show(); 
                                         $("#o1divs").show(); 
				}
				else
				{
					$("#o"+i).attr("readonly","readonly");
					$("#o"+i).css( "background-color","#ccc");
                                        $("#statelisting").show();
                                        $("#passportno").hide();
                                        $("#o"+i).hide();
                                          $("#o1divs").hide();  
                                        $("#passport_no").removeAttr("required","required");  
				}
				if (v=="Indian" && i==1)
				{
                                  document.getElementById("aadhardiv").style.display="block";
                                  document.getElementById("aadhardiv").style.margin="-1px 0px 10px 4px";
                }
				if ((v=="NRI" || v=="PIO" || v=="OCI" || v=="Foreign National") && i==1)
				{
                                       document.getElementById("aadhardiv").style.display="none";

                }
        }
	 </script>
    </body>
</html>