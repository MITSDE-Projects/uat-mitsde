<?php include "php/header.php";?>

<link rel="stylesheet" href="css/jquery-ui.min.css">  
        <div id="content" style="color:#333; height:900px;">
            <div class="form-container">
         



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>     


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

?>

                            
                <div class="content" style="background:#FFF;" >
                    
                    
                    
                    
            <form action="emandateprocess.php" method="post" class="j-form" onsubmit="return validatepage1();">
                    
                
			
          	<div class="sectionheading" style="margin-top:45px !important;position:relative;top:4px;">
					<span>A. Bank Details </span>
				</div>
         
              <div style="clear:both"></div>
              
                 
               <div style="clear:both"></div>
                  <div class="dp"><strong> Account No</strong>
                  <input name="AccountNo" type="text"  placeholder="Enter Account No" value="">
                  </div>

                 	<div class="dp"><strong>IFSC Code</strong><br />
                    <input name="IFSC"  type="text" value="" placeholder="Enter IFSC">
                    <input name="name"  type="hidden" value="<?php echo $name;?>">
                    <input name="phone"  type="hidden" value="<?php echo $MobileNumber;?>" >
                    <input name="ExtraEdgeID"  type="hidden" value="<?php echo $ExtraEdgeID;?>">
                    </div>
                    <div class="dp"><strong>Mode of authentication</strong><br />
                    <div style="padding-top:25px;">
                    <input type="radio" id="channel" name="channel" value="Net"> <b>Net Banking</b> &nbsp;&nbsp;
                    <input type="radio" id="channel" name="channel" value="Debit"> <b>Debit Cart</b>
                     </div>

                    </div>
                     	<div style="clear:both"></div>
              <div style="margin-top:25px; float:right;">
                   <input type="submit" name="submit" value="Next" style="background:#606062;color:#FFF;width:99px;font-size:14px;padding:5px 10px;" >
				  </div>
             
				
                    
                  
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