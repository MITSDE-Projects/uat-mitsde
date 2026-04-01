<?php include "php/header.php";?>
<script src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="css/jquery-ui.min.css">  
<?php
$memberid;
$url = "https://vendorwebservice.mitsde.com/restapi/api/lead";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
"FirstName":"$name",
"LastName":"$lastname",
"Mobile":"$phonenumber",
"Email":"$email",
"VendorToken":"2$45$209",
"CityName":"pune",
"StateName":"Maharashtra",
"CountryName":"India",
"Custom2":"PHD",
"SourcePath":"Direct",
"Address":"Quick Contact Form",
"Custom1":"on"
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
//var_dump($resp);

//--------------------------------------------------------------------search API for update ERP ID


if(isset($phonenumber))
{

$url = "https://erp.mitsde.com/OnlineApplicationAPI/OnlineApplicationAPI.asmx/GetLeadID";
$mobile3=trim($phonenumber);
 
 $curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: MITEsd7CqK6enn8aANDTMlNkBBJhPYN31dAIhHDRT01zK3rteZ9t8ffid6XpCUkjX1S85KkYLIHTRRn0TwLGG4S7SqxwlZ2",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

 $data_array =  <<<DATA
 {"API_Parameters": {"MobileNumber": $mobile3}} 
DATA;
  
  

curl_setopt($curl, CURLOPT_POSTFIELDS, $data_array);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
//var_dump($resp);
$response = json_decode($resp, true);

$error_code   = $response['ErrorCode'];
$error_mes   = $response['d'];
$leadid     = $response['d']["LeadID"];
//print_r($response);
$error_code;
$error_mes ;
$leadid; 

//----------------------------------------------------Search API END-----
if(isset($leadid))
{
     //echo "</br>UPDATE student SET ERPLeadID='$leadid' WHERE memberID = '$memberid'";
     //echo "</br>------------------------------------------------------------";
	 $str="UPDATE student SET ERPLeadID='$leadid', active = 'Yes' WHERE memberID = '$memberid'";
	 
    $query = mysqli_query($connection,$str);
}


}





if (isset($_POST['programmesugpg']))
{
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
						$str="UPDATE student SET `name`='$name',`alternate_no`='$alternate_no',`alternate_email`='$alternate_email',`middlename`='$middlename',`lastname`='$lastname',`dateofbirth`='$dateofbirth',placeofbirth='$placeofbirth',`aadhar` ='$aadhar',`gender` ='$gender',`phonenumber`='$phonenumber',`international_no`='$international_no',`physicallychallenged`='$physicallychallenged',`nationality`='$nationality',nationalityselect='$nationalityselect',`institute`='SDE',`mpdomicile`='$mpdomicile',`isComplete`=0,`lastPage`='$locationurl',`applicationid`='$aid',`studentisdcode`='$studentisdcode',formstatus='incomplete form' WHERE `memberID`='$memberid'";
							
						 $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT COUNT(*) AS CNT FROM tbl_students_data WHERE student_id='".$memberid."'"));
                                
  
 
    if($setdatacnt['CNT'] <= 0)
    {
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

<script>
   /* function getcountrydata(value,id)
    {
    alert(value);
     alert(id);
    
   var getstateid ='getstateid';
    
     $.ajax({
		type: "POST",
		url: "ajax.php",
		data:{process:getstateid,value:value,id:id},
		success: function(result)
					{
					    if(parseInt(result)>0)
						 {
						   alert("hiddf");	
						 }
							alert(result);	 
						
					}
				});
    
              }*/
    
</script>
<script src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        //alert(countryID)
        if(countryID)
        {
            $.ajax({
                type:'POST',
                url:'ajaxFile.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                    //alert(html);
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxFile.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});

$(document).ready(function(){
    $('#pcountry').on('change',function(){
        var countryID = $(this).val();
        //alert(countryID)
        if(countryID)
        {
            $.ajax({
                type:'POST',
                url:'ajaxFileP.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#pstate').html(html);
                    $('#pcity').html('<option value="">Select state first</option>'); 
                    //alert(html);
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#pstate').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxFileP.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#pcity').html(html);
                }
            }); 
        }else{
            $('#pcity').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>

<div class="content" style="background:#FFF;" >
    <form action="page3.php" method="post"  class="j-form" onsubmit="return validatepage2();">
       
               <div style="clear: both;"></div>  
			  <div class="sectionheading">
					<span>Elective Basket</span>
				</div>
			 
                <div style="width:100%;padding:45px 10px;">
                    
                 <?php if(trim($programmesugpg=='Post Graduate Diploma in Management')) 
					 {
					 ?>
         	<div style="width:50%;float:left;" id="elective_b1_div" >
         	    
         	       <select name="elective_b1" required id="elective_b1">
         	         <option value="" >Select Elective Basket 1 </option>     
<option value="HR Analytics" <? if($elective_b1=='HR Analytics') { echo "SELECTED='SELECTED'"; }?>>HR Analytics</option>
<option value="Marketing Analytics" <? if($elective_b1=='Marketing Analytics') { echo "SELECTED='SELECTED'"; }?>>Marketing Analytics</option>
<option value="Supply Chain Analytics" <? if($elective_b1=='Supply Chain Analytics') { echo "SELECTED='SELECTED'"; }?>>Supply Chain Analytics</option>
<option value="Financial Analytics" <? if($elective_b1=='Financial Analytics') { echo "SELECTED='SELECTED'"; }?>>Financial Analytics</option>
                </select>
         	</div>
          
            
           
            <?php } ?>
            
            <?php if(trim($programmesugpg=='PGDM EMBA')) 
					 {
					 ?>
         	<div style="width:50%;float:left;" id="elective_b1_div" >
         	    
         	       <select name="elective_b1" required id="elective_b1">
         	         <option value="" >Select Elective Basket 1 </option>     
<option value="HR Analytics" <? if($elective_b1=='HR Analytics') { echo "SELECTED='SELECTED'"; }?>>HR Analytics</option>
<option value="Marketing Analytics" <? if($elective_b1=='Marketing Analytics') { echo "SELECTED='SELECTED'"; }?>>Marketing Analytics</option>
<option value="Supply Chain Analytics" <? if($elective_b1=='Supply Chain Analytics') { echo "SELECTED='SELECTED'"; }?>>Supply Chain Analytics</option>
<option value="Financial Analytics" <? if($elective_b1=='Financial Analytics') { echo "SELECTED='SELECTED'"; }?>>Financial Analytics</option>
                </select>
         	</div>
          
            
           
            <?php } ?>
            
            
           
           
           
           <?php 
                    if(trim($programmesugpg)=='Post Graduate Diploma in Business Administration') 
                        {
					 ?>
            
               <div style="width:50%;float:left;" id="elective_b1_div" >
         	    
         	       <select name="elective_b1" required id="elective_b1">
         	         <option value="" >Select Elective Basket 1 </option>     
<option value="HR Analytics" <? if($elective_b1=='HR Analytics') { echo "SELECTED='SELECTED'"; }?>>HR Analytics</option>
<option value="Marketing Analytics" <? if($elective_b1=='Marketing Analytics') { echo "SELECTED='SELECTED'"; }?>>Marketing Analytics</option>
<option value="Supply Chain Analytics" <? if($elective_b1=='Supply Chain Analytics') { echo "SELECTED='SELECTED'"; }?>>Supply Chain Analytics</option>
<option value="Financial Analytics" <? if($elective_b1=='Financial Analytics') { echo "SELECTED='SELECTED'"; }?>>Financial Analytics</option>
                   </select>
         	</div>
           <!---------------------Sem 3  end---------------------->  
            
             <div style="width:50%;float:left;" id="elective_b2_div">
               <select name="elective_b2" required id="elective_b2">
                   <option value="" >Select Elective Basket 2 </option>
                   <option value="Marketing of Financial Services" <? if($elective_b1=='Marketing of Financial Services') { echo "SELECTED='SELECTED'"; }?>>Marketing of Financial Services</option>
                   <option value="Social Media Marketing" <? if($elective_b1=='Social Media Marketing') { echo "SELECTED='SELECTED'"; }?>>Social Media Marketing</option>
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
			 <div class="dp">Nationality <span style="color:red">*</span><br />
            <select name="nationalityselect" id ="nationality" required style="margin-top:10px;width:320px;" onchange="ChangeOther(this.value,1);">
            <option value="">--Select--</option>
            <option value="Indian" <?php if($nationalityselect=="Indian") echo "selected";?>>Indian</option>
            <option value="NRI" <?php if($nationalityselect=="NRI") echo "selected";?>>NRI</option>
            <option value="PIO" <?php if($nationalityselect=="PIO") echo "selected";?>>PIO</option>
            <option value="OCI" <?php if($nationalityselect=="OCI") echo "selected";?>>OCI</option>
            <option value="Foreign National" <?php //if($nationalityselect=="Foreign National") echo "selected";?>>Foreign National</option>
            
            </select>
                </div>
                   <div class="dp" id="aadhardiv" style="display: inline;margin:-1px 0px 10px 0px">Aadhar No <span style="color:red">*</span><br />
				  <input type="text" onkeypress="return isNumberKey(event);" id="aadhar" name="aadhar" value="<?php echo $aadhar;?>" required>
                          <span id="aadharerr"></span>
				  </div>
				  &nbsp;
				  <div class="dp" id="aadhardiv" style="display: inline;margin:-1px 0px 0px 10px">Name <span style="color:red">*</span> (As per adhar cart)<br />
				  <input type="text"  id="aadharName" name="aadharName" value="<?php echo $aadhar;?>" required>
                          <span id="aadharerrname"></span>
				  </div>
				  
				  <div style="clear: both;"></div>  
                     <div class="sectionheading">
					<span>C.  Parent Details</span>
	          </div>
                    <div class="dp">Father's Name<br />
                    <input name="parentfname" type="text" required id="parentfname" placeholder="Father's Name"  value="<?php echo $parentfname;?>">
                    </div>
 
 
   
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

                    
                    </div>
					<!--<div class="dp">Name of Organization<br />
                    <input name="organizationdetails" type="text"  required id="organizationdetails" placeholder="Organization Name and Address"  value="<?php //echo $organizationdetails;?>">
                    </div>-->
                    
                    <div class="dp">Mother's Name<br />
                    <input name="mothername" id="mothername" type="text"  value="<?php echo $mothername;?>" required>
                    </div>
                   
                    
      
 
                <div style="clear:both"></div>
				
      <div class="sectionheading">
					<span>D. Contact Details</span>
	  </div>
                  <div class="brd5">
                   
                
  <div class="dp0">Correspondence Address ( Books Will Be Dispatched On This Address )<br /><br>
                   <textarea name="caddress" id="address" style="height:50px;width:80%;resize: none;" required><?php echo $caddress;?></textarea>
                   </div>
  
  <div style="clear:both;"></div>
<br>
                   <?php
    
    //Get all country data
    $query = "SELECT * FROM countries_erp  ORDER BY c_name ASC";
    $run_query = mysqli_query($connection, $query);
    //Count total number of rows
	$count = mysqli_num_rows($run_query);
    
    ?>
			 	                
                      <div class="dp2">Country<br />
                  		
	<select name="ccountry" required id="country">
        <option value="">Select Country</option>
        <?php
        if($count > 0){
            while($row = mysqli_fetch_array($run_query))
            {
				$country_id=$row['c_id'];
				$ccountry=$row['c_name'];
				
                //echo "<option value='$country_id' style='margin-top:10px;'>$pcountry</option>";
                echo '<option value="'.$country_id.'" '.($country_id==$CcountryID?"selected='selected'":"").'>'.$ccountry.'</option>';
            }
        }
        else
        {
            echo '<option value="">Country not available</option>';
        }
        ?>
    </select>
                   
                    </div>
                       
                    <?php
    
    //Get all country data
    $query2 = "SELECT * FROM state_erp WHERE CountryCode = '$CcountryID'";
    $run_query2 = mysqli_query($connection, $query2);
    //Count total number of rows
	$count2 = mysqli_num_rows($run_query2);
    
    ?>
                 
                  	<div class="dp2">State<br />
                  		
			 	 <select name="cstate" id="state" required>
                        
                        <?php
        if($count2 > 0)
        {
            while($row1 = mysqli_fetch_array($run_query2))
            {
				$cstateCode=$row1['StateCode'];
				$cnamename=$row1['StateName'];
				
                //echo "<option value='$country_id' style='margin-top:10px;'>$pcountry</option>";
                echo '<option value="'.$cstateCode.'" '.($cstateCode==$CstateID?"selected='selected'":"").'>'.$cnamename.'</option>';
            }
        }
        else
        {
            echo '<option value="">First Select Country</option>';
        }
        ?>
                        
                        
                        
                </select>
                   
                    </div>
                    
                    <?php
    
    //Get all country data
    $query3 = "SELECT * FROM city_erp WHERE S_Code = '$CstateID'";
    $run_query3 = mysqli_query($connection, $query3);
    //Count total number of rows
	$count3 = mysqli_num_rows($run_query3);
    
    ?>
    
                     <div class="dp2">City<br />
                    <select name="ccity" id="city" required>
                        
                        <?php
        if($count3 > 0)
        {
            while($row2 = mysqli_fetch_array($run_query3))
            {
				$ccityCode=$row2['CityCode'];
				$ccityname=$row2['CityName'];
				
                
                echo '<option value="'.$ccityCode.'" '.($ccityCode==$CcityID?"selected='selected'":"").'>'.$ccityname.'</option>';
            }
        }
        else
        {
            echo '<option value="">First Select State</option>';
        }
        ?>
                        
                        
                      <!--<option value="<?php //echo $CstateID ?>"><?php //if(isset($ccity)){echo $ccity; }else{?>Select state first<?php //}?></option>-->
                   </select>
                   </div>
                    
                    <!--	<div class="dp2">Country<br />
                    	
                        <input name="ccountry" id="country" type="text" value="<?php //echo $ccountry;?>" required>
                    </div>-->
 
                  <div class="dp2">Pincode <br />
                    <input name="cpincode" id="pincode" type="text" value="<?php echo $cpincode;?>" required  maxlength="6" onkeypress="return isNumberKey(event)"/>
                    <script>
					
					</script>
                    </div>
                    
                   <div style="clear:both;"></div>
                 <!--<label for="addcheck"><input type="checkbox" id="addcheck" onclick="SetAddress(this.id);"/>&nbsp;&nbsp;Same As Above</label>-->
                    
                 </div>
                 <div style="clear:both"></div>
                 <div> 

        
  <div class="dp0">Permanent Address <!--<span>(If different from communication address)</span>-->
  <br>
  <br>
  <textarea name="address" style="height:50px;width:80%;resize: none;" id="paddress" required><?php echo $address;?></textarea>
                   </div>
  
  <div style="clear:both;"></div>

					<?php
    
    //Get all country data
    $query = "SELECT * FROM countries_erp  ORDER BY c_name ASC";
    $run_query = mysqli_query($connection, $query);
    //Count total number of rows
	$count = mysqli_num_rows($run_query);
    
    ?>
			 	                
                      <div class="dp2">Country<br />
                  		
			 	<select name="pcountry" id="pcountry" required>
        <option value="">Select Country</option>
        <?php
        if($count > 0){
            while($row = mysqli_fetch_array($run_query)){
				$pcountry_id=$row['c_id'];
				$pcountry_name=$row['c_name'];
				
                echo '<option value="'.$pcountry_id.'" '.($pcountry_id==$PcountryID?"selected='selected'":"").'>'.$pcountry_name.'</option>';
            }
        }else{
            echo '<option value="">Country not available</option>';
        }
        ?>
    </select>
                   
                    </div>
                       
                   <?php
    
    //Get all country data
   //echo "SELECT * FROM state_erp WHERE CountryCode = '$PcountryID'";
    $query4 = "SELECT * FROM state_erp WHERE CountryCode = '$PcountryID'";
    $run_query4 = mysqli_query($connection, $query4);
    //Count total number of rows
	$count4 = mysqli_num_rows($run_query4);
    
    ?>
                 
                  	<div class="dp2">State<br />
                  		
			 	 <select name="pstate" id="pstate" required>
			 	     
			 	     <?php
        if($count4 > 0)
        {
            while($row4 = mysqli_fetch_array($run_query4))
            {
				$pstateCode=$row4['StateCode'];
				$pnamename=$row4['StateName'];
				
                //echo "<option value='$country_id' style='margin-top:10px;'>$pcountry</option>";
                echo '<option value="'.$pstateCode.'" '.($pstateCode==$PstateID?"selected='selected'":"").'>'.$pnamename.'</option>';
            }
        }
        else
        {
            echo '<option value="">Fisrt Select Country</option>';
        }
        ?>
			 	     
			 	     
			 	     
			 	     
                        <!--<option value="<?php //echo $PstateID ?>"><?php //if(isset($pstate)) { echo $pstate; } else { ?> Select country first <?php  //} ?></option>-->
                </select>
                   
                    </div>
                    <?php
    
    //Get all country data
    $query5 = "SELECT * FROM city_erp WHERE S_Code = '$PstateID'";
    $run_query5 = mysqli_query($connection, $query5);
    //Count total number of rows
	$count5 = mysqli_num_rows($run_query5);
    
    ?>
                    
                     <div class="dp2">City<br />
                    <select name="pcity" id="pcity" required>
                        
                         <?php
        if($count5 > 0)
        {
            while($row5 = mysqli_fetch_array($run_query5))
            {
				$ccityCode=$row5['CityCode'];
				$ccityname=$row5['CityName'];
				
                
                echo '<option value="'.$ccityCode.'" '.($ccityCode==$CcityID?"selected='selected'":"").'>'.$ccityname.'</option>';
            }
        }
        else
        {
            echo '<option value="">First Select State</option>';
        }
        ?>
                        
                        
            <!--<option value="<?php //echo $CstateID ?>"><?php //if(isset($pcity)){echo $pcity; }else{?>Select state first<?php //}?></option>-->
                      </select>
                   </div>
                     <!-- <div class="dp2">Country<br />
                    <input name="pcountry" type="text" id="pcountry" placeholder="Country" value="<?php //echo $pcountry;?>" required/>
                    </div> -->          
  
                    <div class="dp2">Pincode<br />
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