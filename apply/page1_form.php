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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>     
<script>

$(document).ready(function(){
	
    $('#programmesugpg').on('change',function(){
	//	alert('programmesugpg');
        var dptid = $(this).val();
		//alert(dptid);
        if(dptid){
            $.ajax({
                type:'POST',
                url:'ajaxData3.php',
                data:'dpt='+dptid,

                success:function(html){
				//	alert(html);
                    $('#discipline').html(html);
                    //$('#dept').html('<option value="">Select Emp first</option>'); 
                }
            }); 
        }else{
            $('#discipline').html('<option value="">Select Program first</option>');
           
        }
    });
   
   $('#EMP').on('change',function(){
        var EMPID = $(this).val();
		
		//alert(EMPID);
        if(EMPID){
			//alert('issue1--'+stateID);
			//alert('dptid1--'+dptID);
            $.ajax({
                type:'POST',
                url:'ajaxData3.php',
                data:'emp_id='+EMPID,
			
               
                success:function(html){
					//alert('EMP--'+html);
                    $('#Query').html(html);
                }
            }); 
        }else{
            $('#EMP').html('<option value="">Select issue first</option>'); 
        }
    });
    
    $('#Query').on('change',function(){
        var QueryID = $(this).val();
		
		//alert(QueryID);
        if(QueryID){
			//alert('issue1--'+stateID);
			//alert('dptid1--'+dptID);
            $.ajax({
                type:'POST',
                url:'ajaxData3.php',
                data:'Query_id='+QueryID,
			
               
                success:function(html){
					//alert('Qeruy--'+html);
                    $('#QueryType').html(html);
                }
            }); 
        }else{
            $('#QueryType').html('<option value="">Select issue first</option>'); 
        }
    });
    
    
});
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
<?php
$memberid;
$name;
$MobileNumber=$_SESSION['phonenumber'];
$Email=$_SESSION['email'];
$ExtraEdgeID;
//die;
if(empty($ExtraEdgeID))
{
  $url = "https://prodapi.extraaedge.com/api/webhook/add";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Bearer MITSDE-11-06-2020",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{"AuthToken": "MITSDE-11-06-2020", 
 "Source" : "mitsde",
 "FirstName": "$name", 
 "MobileNumber" : "$MobileNumber",
 "Email" : "$Email",
 "LeadSource": "Organic-ApplyNow",
 "Course": "Not Known"
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
//var_dump($resp);
$response = json_decode($resp, true);
$FirstName   = $response['FirstName'];
$userId   = $response['userId'];
$counselorName     = $response['counselorName'];
//echo  "</br>leadid--->".$leadid=$resp[string][userId]; 

   if(isset($userId))
   {
       $extraedgeleadid="E".$userId;
      //echo "</br>UPDATE student SET ExtraEdgeID='$extraedgeleadid' WHERE memberID = '$memberid'";
	       $str="UPDATE student SET ExtraEdgeID='$extraedgeleadid',counsellor_name='$counselorName' WHERE memberID = '$memberid'";
     $query = mysqli_query($connection,$str);
   }
//die;
}
?>

                            
                <div class="content" style="background:#FFF;" >
                    
                    
                     <? if($transactid!='') { ?>
                    
            <form action="page2_form.php" method="post" class="j-form" onsubmit="return validatepage1();">
                    
                    <? }  else { ?>
                
                    <form action="page5_form.php" method="post" class="j-form" onsubmit="return validatepage1();">
                    
                    <? } ?>
						
                  <div class="sectionheading" style="margin-top:45px !important;position:relative;top:4px;">
					<span>Program</span>
				</div>
                  <div style="width:100%">
						  <div style="clear:both"></div>
                             <div class="dp">
                                    <label for="exampleInputEmail1">Select Program </label>
                                       <select class="form-control m-bot15" name="programmesugpg" id="programmesugpg" onchange="check();" required>
                                           <option value="">Select</option>
                                       <?php 
                                          $show=mysqli_query($connection,"SELECT * FROM  `CourseERP` Where flag=1");
									       while($row=mysqli_fetch_array($show))
									           {     
                                        ?>
                                                <option value='<?php echo $row['CourseID'].'_'.$row['CourseName']; ?>'><?php echo $row['displayName']; ?></option>
										<?php
                                               }
                                         ?>
                                       </select>
                                </div>
                                <div class="dp">
								    <label for="exampleInputEmail1">Select Specializations</label>
								      <select class="form-control m-bot15" name="discipline" id="discipline" required>
                                           <option>Fist select Specializations</option>
                                      </select>
							    </div>
							    <div class="dp" id="OperationNos"  style="display:none">
								    <label for="exampleInputEmail1">Select Specializations</label>
								      <select class="form-control m-bot15" name="EMBA" id="EMBA" required>
                                           <option>Select EMBA Specializations</option>
                                            <option value="01_Marketing Management">Marketing Management</option>
                                             <option value="02_Finance Management">Finance Management</option>
                                              <option value="03_Human Resource Management">Human Resource Management</option>
                                               <option value="04_Project Management">Project Management</option>
                                                <option value="05_Operations Management">Operations Management</option>
                                                <option value="06_Supply Chain Management">Supply Chain Management</option>
                                                
                                                
                                      </select>
							    </div>
							   
         </div>
       <script>
                                    function check() {
                                        //alert('hi');
    var dropdown = document.getElementById("programmesugpg");
    //alert(dropdown);
    var current_value = dropdown.options[dropdown.selectedIndex].value;
   //alert(current_value);
    if (current_value == "113_PGDM EMBA" || current_value == "108_PGDM (Executive) EMBA" ) {
        document.getElementById("OperationNos").style.display = "block";
        
        
    }
    else {
        document.getElementById("OperationNos").style.display = "none";
        
       
    }
}
                                </script>
        
         	 <div style="clear:both"></div>
         	
         	<br>
			
          	<div class="sectionheading" style="margin-top:45px !important;position:relative;top:4px;">
					<span>A. Personal Details </span>
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
                    Date of Birth <span>*</span><br />
                   <!-- <input required  name="dateofbirth" type="text" value="<?php echo $dateofbirth;?>"  style="width:287px;">-->
                    <input type="date" id="dateofbirth" required value="<?php echo $dateofbirth;?>" style="width:287px;" name="dateofbirth">
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
                    <div class="dp">Marital status<br />
                    <select name="marital_status" required style="font-size:11px; margin-top:10px;width:100%" class="dp0" id="item4_select_1" >
                        <option value="">--Select--</options>
                        <option value="married" <?php if($marital_status=="married") echo "selected";?>>Married</options>
                        <option value="unmarried" <?php if($marital_status=="unmarried") echo "selected";?>>Unmarried</options>
                       
                    </select>
                  </div>
                 
	                <div class="dp">Mobile No
                    <br />
                  	<input name="phonenumber" value="<?php echo $_SESSION['phonenumber']; ?>"  type="text" required id="phonenumber"  maxlength="10" onkeypress="return isNumberKey(event)"/>
                  	                    <span id="phonenumbererr"></span>
                    </div>
                    
                    <div class="dp">Alternate Mobile No
                    <br />
                  	<input name="alternate_no" value="<?php echo $alternate_no; ?>"  type="text"   maxlength="10" onkeypress="return isNumberKey(event)" required/>
                  	                    <span id="phonenumbererri"></span>
                    </div>
                    
                    <div class="dp">Email ID<br />
                  	<input name="email" id="email" type="text" value="<?php echo $_SESSION['email']; ?>" readonly >
                    </div>
                    
                    <div class="dp">Alternate Email ID<br />
                  	<input name="alternate_email" id="alternate_email" type="text" value="<?php echo $alternate_email; ?>" >
                    </div>
                    
                    
                    <div class="dp">International Number<br />
                  	<input name="international_no" id="international_no" type="text" value="<?php echo $international_no; ?>"  >
                    </div>
			 
      <div style="clear: both;"></div>
      
			  <div style="clear: both;"></div>  
              <? 
              /*if($programmesugpg!="1_Career Aaccelerator Program (CAP)")
              {
              if($book_status!='1') { ?>
			 <div style="font-size:14px; margin-bottom:18px; color: #606062; font-weight:bold;">
           <input type="checkbox" id="boosnotrequired" name="boosnotrequired"  value="1"> I don't need hard copy books,I will use only soft copy book (<b>If checked here, hard copy books will NOT be dispatched to you and Discount of Rs 5000/- will be applicable on course fees</b>)</div>
           
            <? } else{
            ?>
             <div style="font-size:14px; margin-bottom:18px; color: #606062; font-weight:bold;">
           <input type="checkbox" id="boosnotrequired" name="boosnotrequired" checked  value="1">  I don't need hard copy books,I will use only soft copy book (<b>If checked here, hard copy books will NOT be dispatched to you and Discount of Rs 5000/- will be applicable on course fees</b>)</div>
           <?
            }
              }*/
           ?>
                 
                 
                 
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