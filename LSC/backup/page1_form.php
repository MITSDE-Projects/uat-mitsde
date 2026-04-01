<?php include "php/header.php";?>


<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 929232991;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/929232991/?guid=ON&amp;script=0"/>
</div>
</noscript>

<link rel="stylesheet" href="css/jquery-ui.min.css">  
        <div id="content" style="color:#333; height:900px;">
            <div class="form-container">
         <span id="error">
			<!----Initializing Session for errors--->
                    <?php
                    
                   
                    if (!empty($_SESSION['error'])) 
					{
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                    ?>
</span>



         
<script>




function programselectx(id){
//alert(id);
if(id=='0'){
/*     
document.getElementById('programdropdown0').style.display='none';
document.getElementById('programdropdown3').style.display='none';
document.getElementById('programdropdown2').style.display='none';
document.getElementById('programdropdown4').style.display='none';
*/

//alert("ZERO");


$("#programdropdown0").show();
$("#programdropdown3").hide();
$("#programdropdown2").hide();
$("#programdropdown4").hide();
$("#elective_b1_div").hide();
$("#elective_b2_div").hide();
$('#elective_b1').attr('required', 'required');
$('#elective_b2').attr('required', 'required');


$('#programdropdown0').attr('required', 'required');
$('#programdropdown3').removeAttr('required');
$('#programdropdown2').removeAttr('required');
$('#programdropdown4').removeAttr('required');

}

if(id=='3'){
  
//alert("3");
    
/*      
document.getElementById('programdropdown3').style.display='block';
document.getElementById('programdropdown0').style.display='none';
document.getElementById('programdropdown2').style.display='none';
document.getElementById('programdropdown4').style.display='none';
*/

$("#programdropdown3").show();
$("#programdropdown0").hide();
$("#programdropdown2").hide();
$("#programdropdown4").hide();
$("#elective_b1_div").show();
$("#elective_b2_div").show();
$('#elective_b1').attr('required', 'required');
$('#elective_b2').attr('required', 'required');

$('#programdropdown3').attr('required', 'required');
$('#programdropdown2').removeAttr('required');
$('#programdropdown4').removeAttr('required');
$('#programdropdown0').removeAttr('required');

}


if(id=='2'){
    
 //alert("2");
    
/*  
document.getElementById('programdropdown2').style.display='block';
document.getElementById('programdropdown0').style.display='none';
document.getElementById('programdropdown3').style.display='none';
document.getElementById('programdropdown4').style.display='none';
*/

$("#programdropdown3").hide();
$("#programdropdown0").hide();
$("#programdropdown2").show();
$("#programdropdown4").hide();
$("#elective_b1_div").hide();
$("#elective_b2_div").hide();
$('#elective_b1').removeAttr('required');
$('#elective_b2').removeAttr('required');


$('#programdropdown2').attr('required', 'required');
$('#programdropdown3').removeAttr('required');
$('#programdropdown4').removeAttr('required');
$('#programdropdown0').removeAttr('required');

}


if(id=='4'){
   
   //alert("4");
    
/*    
document.getElementById('programdropdown2').style.display='none';
document.getElementById('programdropdown0').style.display='none';
document.getElementById('programdropdown3').style.display='none';
document.getElementById('programdropdown4').style.display='block';
*/

$("#programdropdown3").hide();
$("#programdropdown0").hide();
$("#programdropdown2").hide();
$("#programdropdown4").show();
$("#elective_b1_div").show();
$("#elective_b2_div").hide();

$('#elective_b1').attr('required', 'required');
$('#elective_b2').removeAttr('required');

$('#programdropdown4').attr('required', 'required');
$('#programdropdown3').removeAttr('required');
$('#programdropdown2').removeAttr('required');
$('#programdropdown0').removeAttr('required');

}



}



function savevalue(value,id){
    
   var updatedisciplines ='updatedisciplines';
    
     $.ajax({
		type: "POST",
		url: "ajax/ajax.php",
		data:{process:updatedisciplines,value:value,id:id},
		success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 
						
					}
				});
    
    
    
}


</script>


<style type="text/css">

@media screen and (max-width: 786px) and (min-width: 320px) {
    
    .dp {
        width: 100% !important;
    }
    
    #program-span-mba{
        left:-350px !important;
        
    }

    #program-span-mdes{
        left:-332px !important;
        
    }
    
    #coursedtls{
        
        font-size:8px !important;
        width:125% !important;
    }
    
}

</style>
                            
                <div class="content" style="background:#FFF;" >
                    
                    
                     <? if($transactid!='') { ?>
                    
            <form action="page2_form.php" method="post" class="j-form" onsubmit="return validatepage1();">
                    
                    <? }  else { ?>
                
                    <form action="page5_form.php" method="post" class="j-form" onsubmit="return validatepage1();">
                    
                    <? } ?>
						
                  <div class="sectionheading">
					<span>Program</span>
				</div>
                  <div style="width:100%">
						
							 
					  
											  
							<div class="programdivheader">
								
<div style="margin-bottom:14px;">
<br>
<span style="position: relative;float:left;clear: both;width: 100px;">




<select onChange="savevalue(this.value,'<?=$memberid?>');" name="desciplines" data-hint=""  id="programdropdown2"  <? if($programmesugpg=='Post Graduate Certificate in Management') {?> style="display:block;width:255px;position:relative;top:50px;color: #606062;"   <?} else { ?> style="display:none;width:255px;position:relative;top:50px;"  <? } ?> >
<option value="" >--Select--</option>
<option value="PGCM Business Analytics" <? if($desciplines=='PGCM Business Analytics') { echo "SELECTED='SELECTED'"; }?>>PGCM Business Analytics</option>
<option value="PGCM Digital Marketing" <? if($desciplines=='PGCM Digital Marketing') { echo "SELECTED='SELECTED'"; }?>>PGCM Digital Marketing</option>
<!--<option value="Test Course" <? if($desciplines=='Test Course') { echo "SELECTED='SELECTED'"; }?>>Test Course</option>-->
</select>

<select onChange="savevalue(this.value,'<?=$memberid?>');" name="desciplines" data-hint=""  id="programdropdown0"  <? if($programmesugpg=='Executive Post Graduate Diploma in Management') {?> style="display:block;width:255px;position:relative;top:50px;color: #606062;"   <?} else { ?> style="display:none;width:255px;position:relative;top:50px;"  <? } ?> >
<option value="" >--Select--</option>
<option value="Modern Project Management" <? if($desciplines=='Modern Project Management') { echo "SELECTED='SELECTED'"; }?> >Modern Project Management</option>
<option value="Technology & Operations Management" <? if($desciplines=='Technology & Operations Management') { echo "SELECTED='SELECTED'"; }?> >Technology & Operations Management</option>
<option value="Human Capital Management" <? if($desciplines=='Human Capital Management') { echo "SELECTED='SELECTED'"; }?> >Human Capital Management</option>
<option value="Strategic Marketing Management" <? if($desciplines=='Strategic Marketing Management') { echo "SELECTED='SELECTED'"; }?> >Strategic Marketing Management</option>
<option value="Banking & Financial Management" <? if($desciplines=='Banking & Financial Management') { echo "SELECTED='SELECTED'"; }?> >Banking & Financial Management</option>
<option value="Global Logistics and Supply Chain Management" <? if($desciplines=='Global Logistics and Supply Chain Management') { echo "SELECTED='SELECTED'"; }?> >Global Logistics and Supply Chain Management</option>
<option value="Financial Engineering" <? if($desciplines=='Financial Engineering') { echo "SELECTED='SELECTED'"; }?> >Financial Engineering</option>
<option value="Construction and Project Management" <? if($desciplines=='Construction and Project Management') { echo "SELECTED='SELECTED'"; }?> >Construction and Project Management</option>
<option value="E-commerce Retail Management" <? if($desciplines=='E-commerce Retail Management') { echo "SELECTED='SELECTED'"; }?> >E-commerce Retail Management</option>

</select>






<select onChange="savevalue(this.value,'<?=$memberid?>');" name="desciplines" data-hint="" <? if($programmesugpg=='Post Graduate Diploma in Business Administration') {?> style="display:block;width:255px;position:relative;top:50px;left:735px;"   <?} else { ?>  style="display:none;width:255px;position:relative;top:50px;left:735px;"   <? } ?> id="programdropdown3">
<option value="" >--Select--</option>
<option value="PGDBA Finance" <? if($desciplines=='PGDBA Finance') { echo "SELECTED='SELECTED'"; }?> >Finance Management</option>
<option value="PGDBA Human Resource Management" <? if($desciplines=='PGDBA Human Resource Management') { echo "SELECTED='SELECTED'"; }?>>Human Resource Management</option>
<option value="PGDBA Information Technology Management" <? if($desciplines=='PGDBA Information Technology Management') { echo "SELECTED='SELECTED'"; }?>>Information Technology Management</option>
<option value="PGDBA Marketing Management" <? if($desciplines=='PGDBA Marketing Management') { echo "SELECTED='SELECTED'"; }?>>Marketing Management</option>
<option value="PGDBA Materials Management" <? if($desciplines=='PGDBA Materials Management') { echo "SELECTED='SELECTED'"; }?>>Materials Management</option>
<option value="PGDBA Operations Management" <? if($desciplines=='PGDBA Operations Management') { echo "SELECTED='SELECTED'"; }?>>Operations Management</option>
<option value="PGDBA Supply Chain Management" <? if($desciplines=='PGDBA Supply Chain Management') { echo "SELECTED='SELECTED'"; }?>>Supply Chain Management</option>
<!--<option value="Test Course" <? //if($desciplines=='Test Course') { echo "SELECTED='SELECTED'"; }?>>Test Course</option>-->

</select>



<select onChange="savevalue(this.value,'<?=$memberid?>');" name="desciplines" data-hint=""  <? if($programmesugpg=='Post Graduate Diploma in Management') {?> style="display:block;width:255px;position:relative;top:50px;left:400px;"   <?} else { ?> style="display:none;width:255px;position:relative;top:50px;left:-190px;left:400px;"  <? } ?> id="programdropdown4">
<option value="" >--Select--</option>
<option value="PGDM in Project Management" <? if($desciplines=='PGDM in Project Management') { echo "SELECTED='SELECTED'"; }?>>Project Management</option>
<option value="PGDM in Energy Management" <? if($desciplines=='PGDM in Energy Management') { echo "SELECTED='SELECTED'"; }?>>Energy Management</option>
<option value="PGDM in Insurance and Risk Management" <? if($desciplines=='PGDM in Insurance and Risk Management') { echo "SELECTED='SELECTED'"; }?>>Insurance and Risk Management</option>
<option value="PGDM in Information Technology" <? if($desciplines=='PGDM in Information Technology') { echo "SELECTED='SELECTED'"; }?>>Information Technology</option>
<option value="PGDM in Construction and Project Management" <? if($desciplines=='PGDM in Construction and Project Management') { echo "SELECTED='SELECTED'"; }?>>Construction and Project Management/option>
<option value="PGDM in Marketing Management" <? if($desciplines=='PGDM in Marketing Management') { echo "SELECTED='SELECTED'"; }?>>Marketing Management</option>
<option value="PGDM in Material Management" <? if($desciplines=='PGDM  in Material Management') { echo "SELECTED='SELECTED'"; }?>>Material Management</option>
<option value="PGDM in Logistics and Supply Chain Management" <? if($desciplines=='PGDM  in Logistics and Supply Chain Management') { echo "SELECTED='SELECTED'"; }?>>Logistics and Supply Chain Management</option>
<option value="PGDM in Telecom Management" <? if($desciplines=='PGDM in Telecom Management') { echo "SELECTED='SELECTED'"; }?>>Telecom Management</option>
<option value="PGDM in Financial Services" <? if($desciplines=='PGDM in Financial Services') { echo "SELECTED='SELECTED'"; }?>>Financial Services</option>
<option value="PGDM in Operations Management" <? if($desciplines=='PGDM in Operations Management') { echo "SELECTED='SELECTED'"; }?>>Operations Management</option>
<option value="PGDM in Retail Management" <? if($desciplines=='PGDM in Retail Management') { echo "SELECTED='SELECTED'"; }?>>Retail Management</option>
<option value="PGDM in Finance Management" <? if($desciplines=='PGDM in Finance Management') { echo "SELECTED='SELECTED'"; }?>>Finance Management</option>
<option value="PGDM in Human Resource Management" <? if($desciplines=='PGDM in Human Resource Management') { echo "SELECTED='SELECTED'"; }?>>Human Resource Management</option>
<!--<option value="Test Course" <? //if($desciplines=='Test Course') { echo "SELECTED='SELECTED'"; }?>>Test Course</option>-->
</select>





</span>

</div>

		 

     	 </div>
							  

 <div class="programdivheader" style="position:relative;left:-100px;width:120% !important;" id="coursedtls">
     
 <input type="radio" id="onediploma" name="programmesugpg" required value="Post Graduate Certificate in Management" class="program" onclick="programselectx(2);" <?php if($programmesugpg=="Post Graduate Certificate in Management") echo "checked";?> class="fieldlabel" /><label for="bdes">PGCM</label>
 <input type="radio" id="Executive" name="programmesugpg" required value="Executive Post Graduate Diploma in Management" class="program" onclick="programselectx(0);" <?php if($programmesugpg=="Executive Post Graduate Diploma in Management") echo "checked";?> class="fieldlabel" /><label for="Executive">PGDM(Executive)</label>
 <input type="radio" id="mba" name="programmesugpg" required value="Post Graduate Diploma in Management" class="program" onclick="programselectx(4);" <?php if($programmesugpg=="Post Graduate Diploma in Management") echo "checked";?> class="fieldlabel" /><label for="mba">PGDM</label>
 <input type="radio" id="twopgdba" name="programmesugpg" required value="Post Graduate Diploma in Business Administration" class="program" onclick="programselectx(3);" <?php if($programmesugpg=="Post Graduate Diploma in Business Administration") echo "checked";?> class="fieldlabel" /><label for="mdes">PGDBA</label>

 </div>
 <div class="clear:both;"></div>
 		<br>
				       
		 
		 <div>
     
 </div>
		 </div>
		 <input type="text" id="discipline" name="discipline" value="" hidden="hidden"/>
			<!--<select  class="dp0" id="coursedropdown" name="desciplines" data-hint="" required>
           <option value="Mechanical" <?php //if($desciplines =="Mechanical") echo "selected";?>>Mechanical Engineering</option>;
           <option value="Computer" <?php //if($desciplines=="Computer") echo "selected";?>>Computer Science and Engineering</option>;
			</select>-->
        	 </div>
         	
         
       
         	
         	<!--<div style="width:100%;padding:45px 10px;">
         	<div style="width:50%;float:left;display:none;" id="elective_b1_div" >
         	    
         	       <select name="elective_b1" id="elective_b1">
         	         <option value="" >Select Elective Basket 1 </option>     
<option value="Information Technology and E - Commerce" <? //if($elective_b1=='Information Technology and E - Commerce') { echo "SELECTED='SELECTED'"; }?>>Information Technology and E - Commerce</option>
<option value="International Marketing" <? //if($elective_b1=='International Marketing') { echo "SELECTED='SELECTED'"; }?>>International Marketing</option>
<option value="Inventory Management" <? //if($elective_b1=='Inventory Management') { echo "SELECTED='SELECTED'"; }?>>Inventory Management</option>
<option value="Just in time and lean" <? //if($elective_b1=='Just in time and lean') { echo "SELECTED='SELECTED'"; }?>>Just in time and lean</option>
<option value="Total Quality Management" <? //if($elective_b1=='Total Quality Management') { echo "SELECTED='SELECTED'"; }?>>Total Quality Management</option>
<option value="Merchandising Management" <? //if($elective_b1=='Merchandising Management') { echo "SELECTED='SELECTED'"; }?>>Merchandising Management</option>
<option value="Compensation and Benefits Management" <? //if($elective_b1=='Compensation and Benefits Management') { echo "SELECTED='SELECTED'"; }?>>Compensation and Benefits Management</option>
<option value="Project Planning and Project Foundation" <? //if($elective_b1=='Project Planning and Project Foundation') { echo "SELECTED='SELECTED'"; }?> >Project Planning and Project Foundation</option>
                   </select>
         	    
           </div>
           
           
           <div style="width:50%;float:left;display:none;" id="elective_b2_div">
               <select name="elective_b2" id="elective_b2">
                 <option value="">Select Elective Basket 2</option>
                 <option value="Java Programming" <? //if($elective_b2=='Java Programming') { echo "SELECTED='SELECTED'"; }?> >Java Programming</option>
                 <option value="Entrepreneurship" <? //if($elective_b2=='Entrepreneurship') { echo "SELECTED='SELECTED'"; }?> >Entrepreneurship</option>
                 <option value="Organisational behaviour" <? //if($elective_b2=='Organisational behaviour') { echo "SELECTED='SELECTED'"; }?>>Organisational behaviour</option>
                 <option value="Material and store management" <? //if($elective_b2=='Material and store management') { echo "SELECTED='SELECTED'"; }?>>Material and store management</option>
                 <option value="Supply Chain Management" <? //if($elective_b2=='Supply Chain Management') { echo "SELECTED='SELECTED'"; }?>>Supply Chain Management</option>
                 <option value="Risk management" <? //if($elective_b2=='Risk management') { echo "SELECTED='SELECTED'"; }?>>Risk management</option>
                 <option value="Wages and Salary Administration" <? //if($elective_b2=='Wages and Salary Administration') { echo "SELECTED='SELECTED'"; }?>>Wages and Salary Administration</option>
                 <option value="Project Execution, Tools & Techniques and Benefit Realisation" <? //if($elective_b2=='Project Execution, Tools & Techniques and Benefit Realisation') { echo "SELECTED='SELECTED'"; }?>>Project Execution, Tools & Techniques and Benefit Realisation</option>
               </select>
           </div>       
           </div>-->
         	
         	
         	
			
          	<div class="sectionheading" style="margin-top:45px !important;position:relative;top:4px;">
					<span>A. Personal Details</span>
				</div>
         
              <div style="clear:both"></div>
              
                 
               <div style="clear:both"></div>
                  <div class="dp"> First Name
                  <input name="name" type="text" required placeholder="Name" value="<?php echo $name;?>">
                  </div>

                    			<div class="dp">Middle Name<br />
                    <input name="middlename" type="text" value="<?php echo $middlename;?>" placeholder="Middle Name">
                    </div>
                     		  


		           <div class="dp">Last Name<br />
                    <input name="lastname" type="text" value="<?php echo $lastname;?>" placeholder="Last Name" required>
                    </div>
                     				
	            		 
				
				      <div style="clear: both;"></div>  

				<div class="dp">Gender<br />
                    <select name="gender" required style="font-size:11px; margin-top:10px;width:100%" class="dp0" id="item4_select_1" >
                        <option value="">--Select--</options>
                        <option value="Male" <?php if($gender=="Male") echo "selected";?>>Male </options>
                        <option value="Female" <?php if($gender=="Female") echo "selected";?>>Female</options>
                        <option value="Transgender" <?php if($gender=="Transgender") echo "selected";?>>Transgender</options>
                    </select>
                  </div>
						<div class="dp">
                    Date of Birth <span>*</span>(DD/MM/YYYY)<br />
                   <!-- <input required  name="dateofbirth" type="text" value="<?php echo $dateofbirth;?>"  style="width:287px;">-->
                    <input type="date" id="dateofbirth" value="<?php echo $dateofbirth;?>" style="width:287px;" name="dateofbirth">
					<br />
                  </div>
                    <!-- <div class="dp">Place of Birth<br />
                  	<input name="placeofbirth" id="placeofbirth" type="text" value="<?php //echo $placeofbirth; ?>" required placeholder="Place of Birth">
                    </div>-->
			 


                 <!--<div class="dp">Country Code
                    <br />
                  	<input name="studentisdcode" class="isdcode" value="<?php //echo $studentisdcode;?>"  type="text" id="studentisdcode" required/>
					 <span id="studentisdcodeerr"></span>
                    </div>-->
  
                 
	                <div class="dp">Mobile No
                    <br />
                  	<input name="phonenumber" value="<?php echo $_SESSION['phonenumber']; ?>"  type="text" required id="phonenumber" readonly maxlength="10" onkeypress="return isNumberKey(event)"/>
                  	                    <span id="phonenumbererr"></span>
                    </div>
                    
                    <div class="dp">Alternate Mobile No
                    <br />
                  	<input name="alternate_no" value="<?php echo $alternate_no; ?>"  type="text"   maxlength="10" onkeypress="return isNumberKey(event)"/>
                  	                    <span id="phonenumbererri"></span>
                    </div>
                    
                    <div class="dp">Email ID<br />
                  	<input name="email" id="email" type="text" value="<?php echo $_SESSION['email']; ?>" readonly >
                    </div>
                    
                     <div class="dp">Alternate Email ID<br />
                  	<input name="alternate_email" id="alternate_email" type="text" value="<?php echo $alternate_email; ?>"  >
                    </div>
			 
      <div style="clear: both;"></div>  
			  <!--<div class="sectionheading">
					<span>B. Demographic Details</span>
				</div>
			 <div class="dp">Nationality<br />
            <select name="nationalityselect" id ="nationality" required style="margin-top:10px;width:320px;" onchange="ChangeOther(this.value,1);">
            <option value="">--Select--</option>
            <option value="Indian" <?php //if($nationalityselect=="Indian") echo "selected";?>>Indian</option>
            <option value="NRI" <?php //if($nationalityselect=="NRI") echo "selected";?>>NRI</option>
            <option value="PIO" <?php //if($nationalityselect=="PIO") echo "selected";?>>PIO</option>
            <option value="OCI" <?php //if($nationalityselect=="OCI") echo "selected";?>>OCI</option>
            <option value="Foreign National" <?php //if($nationalityselect=="Foreign National") echo "selected";?>>Foreign National</option>
            
            </select>
                </div>-->
               

                      
			<?php/*
			if($nationality!="Indian")
			{?>
                          <div class="dp" id="o1divs"> Nationality <select id="o1" name="nationality" style="font-size:11px; margin-top:10px;width:326px;">
                         <option value="">--Select Nationality--</option>
                         <?php
                         
                          
                         
                         
                         $getcountry = mysqli_query($connection,"SELECT * FROM tbl_countries ORDER BY country_name ASC");
                            while($setcountry = mysqli_fetch_array($getcountry)){
                                                 if($setcountry['country_name']=='India') { continue; } else {  
                         ?>    
                          <option  <? if($nationality==$setcountry['country_name']) { echo "SELECTED='SELECTED'"; } ?>><?=$setcountry['country_name']?></option>
        
                         <?php } }  ?> 
                         </select>
				   <span id="nationerr"></span></div>
			<?php
				
			}
			
			else
			{
				?>
                          <div class="dp" id="o1divs" style="display:none;">Nationality other than India<select id="o1" name="nationality" style="display:none;" style="font-size:11px; margin-top:0px;width:326px;">
                         <option value="">--Select Nationality--</option>
                         <?php
                         $getcountry = mysqli_query($connection,"SELECT * FROM tbl_countries ORDER BY country_name ASC");
                            while($setcountry = mysqli_fetch_array($getcountry)){
                         ?>    
                          <option  <? if($nationality==$setcountry['country_name']) { echo "SELECTED='SELECTED'"; } ?>><?=$setcountry['country_name']?></option>
        
                         <?php } ?> 
                         </select>				   <span id="nationerr"></span> </div>
							
			<?php
			}*/
			?>
           
			  <!-- <div class="dp" id="statelisting"  <? if($nationality!="Indian"){ ?>"  <?}?>>State of Domicile<br />
                    <select name="mpdomicileselect" style="font-size:11px; margin-top:10px;width:326px;">
                       
<option value="" >--Select--</option>
<option value="Andaman and Nicobar Islands" <?php if($mpdomicile=="Andaman and Nicobar Islands") echo "selected";?>>Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh" <?php if($mpdomicile=="Andhra Pradesh") echo "selected";?>>Andhra Pradesh</option>
<option value="Arunachal Pradesh" <?php if($mpdomicile=="Arunachal Pradesh") echo "selected";?>>Arunachal Pradesh</option>
<option value="Assam" <?php if($mpdomicile=="Assam") echo "selected";?>>Assam</option>
<option value="Bihar" <?php if($mpdomicile=="Bihar") echo "selected";?>>Bihar</option>
<option value="Chandigarh" <?php if($mpdomicile=="Chandigarh") echo "selected";?>>Chandigarh</option>
<option value="Chhattisgarh" <?php if($mpdomicile=="Chhattisgarh") echo "selected";?>>Chhattisgarh</option>
<option value="Dadra and Nagar Haveli" <?php if($mpdomicile=="Dadra and Nagar Haveli") echo "selected";?>>Dadra and Nagar Haveli</option>
<option value="Daman and Diu" <?php if($mpdomicile=="Daman and Diu") echo "selected";?>>Daman and Diu</option>
<option value="Delhi" <?php if($mpdomicile=="Delhi") echo "selected";?>>Delhi</option>
<option value="Goa" <?php if($mpdomicile=="Goa") echo "selected";?>>Goa</option>
<option value="Gujarat" <?php if($mpdomicile=="Gujarat") echo "selected";?>>Gujarat</option>
<option value="Haryana" <?php if($mpdomicile=="Haryana") echo "selected";?>>Haryana</option>
<option value="Himachal Pradesh" <?php if($mpdomicile=="Himachal Pradesh") echo "selected";?>>Himachal Pradesh</option>
<option value="Jammu and Kashmir" <?php if($mpdomicile=="Jammu and Kashmir") echo "selected";?>>Jammu and Kashmir</option>
<option value="Jharkhand" <?php if($mpdomicile=="Jharkhand") echo "selected";?>>Jharkhand</option>
<option value="Karnataka" <?php if($mpdomicile=="Karnataka") echo "selected";?>>Karnataka</option>
<option value="Kenmore" <?php if($mpdomicile=="Kenmore") echo "selected";?>>Kenmore</option>
<option value="Kerala" <?php if($mpdomicile=="Kerala") echo "selected";?>>Kerala</option>
<option value="Lakshadweep" <?php if($mpdomicile=="Lakshadweep") echo "selected";?>>Lakshadweep</option>
<option value="Madhya Pradesh" <?php if($mpdomicile=="Madhya Pradesh") echo "selected";?>>Madhya Pradesh</option>
<option value="Maharashtra" <?php if($mpdomicile=="Maharashtra") echo "selected";?>>Maharashtra</option>
<option value="Manipur" <?php if($mpdomicile=="Manipur") echo "selected";?>>Manipur</option>
<option value="Meghalaya" <?php if($mpdomicile=="Meghalaya") echo "selected";?>>Meghalaya</option>
<option value="Mizoram" <?php if($mpdomicile=="Mizoram") echo "selected";?>>Mizoram</option>
<option value="Nagaland" <?php if($mpdomicile=="Nagaland") echo "selected";?>>Nagaland</option>
<option value="Narora" <?php if($mpdomicile=="Narora") echo "selected";?>>Narora</option>
<option value="Natwar" <?php if($mpdomicile=="Natwar") echo "selected";?>>Natwar</option>
<option value="Odisha" <?php if($mpdomicile=="Odisha") echo "selected";?>>Odisha</option>
<option value="Paschim Medinipur" <?php if($mpdomicile=="Paschim Medinipur") echo "selected";?>>Paschim Medinipur</option>
<option value="Pondicherry" <?php if($mpdomicile=="Pondicherry") echo "selected";?>>Pondicherry</option>
<option value="Punjab" <?php if($mpdomicile=="Punjab") echo "selected";?>>Punjab</option>
<option value="Rajasthan" <?php if($mpdomicile=="Rajasthan") echo "selected";?>>Rajasthan</option>
<option value="Sikkim" <?php if($mpdomicile=="Sikkim") echo "selected";?>>Sikkim</option>
<option value="Tamil Nadu" <?php if($mpdomicile=="Tamil Nadu") echo "selected";?>>Tamil Nadu</option>
<option value="Telangana" <?php if($mpdomicile=="Telangana") echo "selected";?>>Telangana</option>
<option value="Tripura" <?php if($mpdomicile=="Tripura") echo "selected";?>>Tripura</option>
<option value="Uttar Pradesh" <?php if($mpdomicile=="Uttar Pradesh") echo "selected";?>>Uttar Pradesh</option>
<option value="Uttarakhand" <?php if($mpdomicile=="Uttarakhand") echo "selected";?>>Uttarakhand</option>
<option value="Vaishali" <?php if($mpdomicile=="Vaishali") echo "selected";?>>Vaishali</option>
<option value="West Bengal" <?php if($mpdomicile=="West Bengal") echo "selected";?>>West Bengal</option>
<option value="Others" <?php if($mpdomicile=="Others") echo "selected"; ?>>Others</option>
		
            </select>
                 </div>-->
                    
			     <!--<div class="dp" id="aadhardiv" style="display: inline;margin:-1px 0px 10px 0px">Aadhar No<br />
				  <input type="text" onkeypress="return isNumberKey(event);" id="aadhar" name="aadhar" value="<?php echo $aadhar;?>" maxlength=12 / required>
                                  	                    <span id="aadharerr"></span>
				  </div>-->
				 
			

 
	<!--<div class="dp">
					Category<br />
               <select name="category" required class="require-if-active" id ="category" data-require-pair="#category" style="margin-top:10px;width:320px;">
                        <option value="">--Select--</option> 
                        <option value="Open" <?php if($category=="Open") echo "selected";?>>Open</option>
                        <option value="OBC" <?php if($category=="OBC") echo "selected";?>>OBC</option>
                        <option value="SC" <?php if($category=="SC") echo "selected";?>>SC </option>
                        <option value="ST" <?php if($category=="ST") echo "selected";?>>ST</option>
                        <option value="VJA" <?php if($category=="VJA") echo "selected";?>>VJ NT(A)</option>
                        <option value="NTB" <?php if($category=="NTB") echo "selected";?>>NT (B)</option>
                        <option value="NTC" <?php if($category=="NTC") echo "selected";?>>NT (C)</option>
                        <option value="NTD" <?php if($category=="NTD") echo "selected";?>>NT (D)</option>
                        <option value="Others" <?php if($category=="Others") echo "selected";?>>Others</option>
                </select><br>
				</div>-->
			   
				<div style="clear:both"></div>
			
 
                      <!--<div class="dp" >Person with Disability<br />
                    <select name="physicallychallenged" required style="font-size:11px; margin-top:10px;width:320px;" onChange="setdisability(this.value);">
                      
                        <option value=""  >--Select--</options>
                        <option value="No" <?php //if($physicallychallenged=="No") echo "selected";?>>No</options>
                        <option value="Yes" <?php// if($physicallychallenged=="Yes") echo "selected";?>>Yes</options>
                      
                       
                     
                    </select>
                  </div>-->
		
                 <div class="dp" id="illness_sub" style="display:none;">Please Specify Illness<span></span><br />
                   <input name="specifyillnes" id="specifyillnes" type="text" value="<?=$specifyillnes?>" placeholder="Illness">
                 </div>
                 
                 <?php if($physicallychallenged=='Yes') { ?>
                 
                 <div class="dp" id="illness_sub_php">Please Specify Illness<span></span><br />
                   <input name="specifyillnes" id="specifyillnes" type="text" value="<?=$specifyillnes?>" placeholder="Illness">
                 </div>
                 
                 <?php } ?>
                 
                 
                 
             <div style="clear:both"></div>

<div style="margin-top:25px; float:right;">
                   <input type="submit" name="submit" value="Next" style="background:#606062;color:#FFF;width:99px;font-size: 14px;padding: 5px 10px;" >
				  </div>
             <div style="clear:both"></div>
				
                    
                  
                  </form>
			
		
			
				
<script src="country/js/yogesh.js"></script>
<script src="country/js/index.js"></script>
        </div>
		</div>
    	</div>
    	</div>
   <script src="js/jquery-ui.js"></script>
   <script>
  $(document).ready(function(){
  $('#Datepicker1').datepicker({
	changeYear:true,
	  changeMonth:true,
     dateFormat:'dd/mm/yy',
      minDate: '-70Y',
       yearRange:"c-70:-14"
  });
});
 	function programselect(v)
	{
		var str="";
        switch (v)
		{
           case 1:
				str=' <div class="sectionheading"><span>Discipline</span></div><span>(Please select your order of preference)</span><ol class="sortable"><li>System</li><li>Industrial</li><li>Communication</li></ol><br>';
	
			break;
		case 2:
				str=' <div class="sectionheading"><span>Discipline</span></div><span>(Please select your order of preference)</span><ol class="sortable"><li>Mechanical</li><li>Computer Science</li></ol><br>';
	
			break;
		case 4:
				str='<div class="sectionheading"><span>Discipline</span></div><span>(Please select your order of preference)</span><ol class="sortable"><li>Economics</li><li>Finance</li><li>Business</li></ol><br>';
			break;
		default:
			str="";
        }
		document.getElementById("displines").innerHTML=str;
		SetDiscipline();
    }
SetDiscipline();
$(".sortable li").drop(function(){
	alert("s");
	});
			 function SetDiscipline()
			 {
				 $( ".sortable" ).sortable({stop:function(event,ui){SetDiscipline();}});
			 $( ".sortable li" ).prop("title","Drag to set preferences");
			 
               var str="";
			 $( ".sortable li" ).each(function() {
   var v=$(this).prop("innerHTML");
   if (str!=="")
   {
    str+="_";
   }
      str+=v;
});
			 document.getElementById("discipline").value=str;
             }
			 function ChangeOther(v,i)
			 {
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
  function isNumberKey(evt)
					{
					var charCode = (evt.which) ? evt.which : event.keyCode;
					if (charCode > 31 && (charCode < 48 || charCode > 57)){
					return false;
					}
					return true;
					}

	function setdisability(val){
	    
	   if(val=='Yes'){
	      
	       $("#illness_sub").show();
	       $("#specifyillnes").attr("required","required");
	     
	   }
	   else {
	       
	       $("#illness_sub").hide();
	       $("#illness_sub_php").hide();
	       $("#specifyillnes").removeAttr("required","required");
	   }     
	       
	       
	 
	}				
		
	
		
					
   </script>
   
   
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 929232991;
var google_conversion_label = "y-i8CIHlrXgQ3_CLuwM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/929232991/?label=y-i8CIHlrXgQ3_CLuwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>   
</body>


</html>