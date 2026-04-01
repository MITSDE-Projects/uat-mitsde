<?php
session_start();
//checking second page values for empty,If it finds any blank field then redirected to second page
$memberid = $_SESSION['memberID'];
$_SESSION["lastpage"]="page3_form.php";
if(!isset($memberid))
{
 	header("location: register/index.php");//redirecting to second page
}
include "php/populate.php";
if (isset($_POST)){
    if (empty($_POST)){
		
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
							$str="UPDATE student SET  `ccity`='$ccity',`cstate`='$cstate',`ccountry`='$ccountry',`cpincode`='$cpincode',`pcity`='$pcity',`pstate`='$pstate',`pcountry`='$pcountry',`ppincode`='$ppincode',`parentfname`='$parentfname',`parentmname`='$parentmname',`parentlname`='$parentlname',`relationshipwithapplicant`='$relationshipwithapplicant',`parentmobilenumber`='$parentmobilenumber',`parentemail`='$parentemail',`professionoftheparent`='$professionoftheparent',`organizationdetails`='$organizationdetails',`isComplete`=0,`lastPage`='$locationurl' WHERE `memberID`='$memberid'";
							
							echo $str;
						$query = mysqli_query($connection,$str);  
		
    }
} else {
    if (empty($_SESSION['error_page3'])) {
        //header("location: page1_form.php");//redirecting to first page
    }
}
/*if( $_SESSION['post']['programmesugpg']=='B.Tech')
{
	$stream='<input type="text" name="stream12" type="text" required id="stream12" value="Science" style="margin-top:10px;" disabled="disabled"/>';
}
else
{
	$stream='<select name="stream12" type="text" required id="stream12" style="margin-top:10px;">
						<option value="science">Science</option>
						<option value="arts">Arts</option>
						<option value="commerce">Commerce</option>
					</select>';
}*/
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Admissions 2017-18</title>
       <link rel="stylesheet" href="css/style.css" />
	   <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrapValidator.min.js"></script> 
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery.form.js"></script>
	<script src="js/common.js"></script>
    </head>
    <body class="bg-pic">
    
    <div class="wrapper-640">

<div class="mheader">
		
	   <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4"><img src="images/LOGO.jpg" width="1000" height="100"  alt=""/></td>
    </tr>
  <tr>
    <td width="1%">&nbsp;</td>
    <td width="53%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
    <td width="13%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><h2> Welcome <?php echo $_SESSION['username']; ?></h2>
				<?php $_SESSION['memberID']; ?></td>
    <td></td>
    <td><h2> <?php //echo $_SESSION['email']; ?></h2>
		<p style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:16px; color:#FFF;"><a href='register/logout.php?pid=page3_form.php&id=<?php echo $_SESSION['memberID']?>'>Logout</a></p></td>
  </tr>
</table>
	 </div>  

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
                <div class="divider-text gap-top-20 gap-bottom-45" style="margin-top:25px; margin-bottom:25px;">
					<span>Academic Details</span>
	  </div>
                <form action="page4_form.php" method="post">
 <div class="dp2">10th School*<br />
                    <input name="school10" type="text" id="yeargap10" placeholder="School" value="<?php echo $school10;?>">
                    </div>
 
                   <div class="brd3">
                    <div class="dp2">10th Board<span>*</span><br />
                    <input name="board10" type="text" required id="address" placeholder="(eg.SSC,CBSE,ICSC,IB)" value="<?php echo $board10;?>">
                    </div>
                   

                    <div class="dp2">Year of Passing<span>*</span>
                    <br />
                    <input name="year10"  type="text" required placeholder="Year of Passing"  maxlength="12" onkeypress="return isNumberKey(event)" value="<?php echo $year10;?>"/>
                      <script>
					function isNumberKey(evt)
					{
					var charCode = (evt.which) ? evt.which : event.keyCode
					if (charCode > 31 && (charCode < 48 || charCode > 57)){
					return false;
					}
					return true;
					}
					</script>
                    </div>
                    
                    <div class="dp2">Percentage/CGPA:<span>*</span><br />
                    <input name="score10" type="text" required id="percentage10" placeholder="Percentage/Grade" value="<?php echo $score10;?>" >
                    </div>
<div style="clear:both"></div>
                    <div class="dp2">12th School*<br />
                    <input name="school12" type="text" placeholder="School" value="<?php echo $school12;?>">
                    </div> 
                    
                    <div class="dp2">12th Board<span>*</span><br />
                    <input name="board12"  type="text" required placeholder="(eg.HSC,AISSCE,ISC,IB)" value="<?php echo $board12;?>">
                    </div>
                    
                    <div class="dp2">Year of Passing<span>*</span>
                    <br />
                    <input name="year12"  type="text" required placeholder="Year of Passing"  maxlength="4" onkeypress="return isNumberKey(event)" value="<?php echo $year12;?>">
                    </div>
					
                    <div class="dp2">Percentage/CGPA:<span>*</span>
                    <br />
                    <input name="score12" type="text" required id="percentage12" placeholder="Percentage/Grade" value="<?php echo $score12;?>">
                   </div>
                    
					<div class="dp2">Stream*
					<br/>
                  <select name="stream12" type="text" required id="stream12" style="margin-top:10px;" value="<?php echo $school10;?>">
						<option value="science">Science</option>
						<option value="arts">Arts</option>
						<option value="commerce">Commerce</option>
					</select>
                   </div>
                  
	<div style="clear:both"></div>
	<div class="dp2"><b>Subject</b>
					<br/>
                       <input type="text" required id="percentage12" placeholder="Percentage/Grade" value="Physics" disabled="disabled">
                       <input type="text" required id="percentage12" placeholder="Percentage/Grade" value="Chemistry" disabled="disabled">
                       <input type="text" required id="percentage12" placeholder="Percentage/Grade" value="Mathematics" disabled="disabled">
                       <input type="text" required id="percentage12" placeholder="Percentage/Grade" value="English" disabled="disabled">
                
                   </div>
	 <div class="dp2"><b>10th Actual Marks*</b><br />
                    <input name="physicsam10" type="text" placeholder="10th Actual Marks" value="<?php echo $physicsam10;?>">
                    <input name="chemistryam10" type="text" placeholder="10th Actual Marks" value="<?php echo $chemistryam10;?>">
                    <input name="mathsam10" type="text" placeholder="10th Actual Marks" value="<?php echo $mathsam10;?>">
                    <input name="englisham10" type="text" placeholder="10th Actual Marks" value="<?php echo $englisham10;?>">
                    </div> 
                    
                    <div class="dp2"><b>10th Out of Marks*</b><br />
                    <input name="physicsom10"  type="text" required placeholder="10th Out of Marks" value="<?php echo $physicsom10;?>">
                    <input name="chemistryom10"  type="text" required placeholder="10th Out of Marks" value="<?php echo $chemistryom10;?>">
                    <input name="mathsom10"  type="text" required placeholder="10th Out of Marks" value="<?php echo $mathsom10;?>" >
                    <input name="englishom10"  type="text" required placeholder="10th Out of Marks" value="<?php echo $englishom10;?>">
                    </div>
                     <div class="dp2"><b>12th Actual Marks*</b><br />
                   <input name="physicsam12" type="text" placeholder="12th Actual Marks" value="<?php echo $physicsam12;?>">
                    <input name="chemistryam12" type="text" placeholder="12th Actual Marks" value="<?php echo $chemistryam12;?>">
                    <input name="mathsam12" type="text" placeholder="12th Actual Marks" value="<?php echo $mathsam12;?>">
                    <input name="englisham12" type="text" placeholder="12th Actual Marks" value="<?php echo $englisham12;?>">
                    </div> 
                    
                    <div class="dp2"><b>12th Out of Marks*</b><br />
                    <input name="physicsom12"  type="text" required placeholder="12th Out of Marks" value="<?php echo $physicsom12;?>">
                    <input name="chemistryom12"  type="text" required placeholder="12th Out of Marks" value="<?php echo $chemistryom12;?>">
                    <input name="mathsom12"  type="text" required placeholder="12th Out of Marks" value="<?php echo $mathsom12;?>">
                    <input name="englishom12"  type="text" required placeholder="12th Out of Marks" value="<?php echo $englishom12;?>">
                    </div>
					
	
	<div style="clear:both"></div>
	
 <div class="divider-text gap-top-20 gap-bottom-45" style="margin-top:25px; margin-bottom:25px;">
					<span>Entrance Examination Details</span>
 </div>
					<div style="clear:both"></div>
					
					 <div class="dp2">Exam Name<br />
                    <input name="examname" type="text" placeholder="Exam" value="<?php echo $examname;?>" id="entranceexam">
                    </div> 
                    
                    <div class="dp2">Roll Number<br />
                    <input name="examnumber"  type="text" required placeholder="Roll Number" value="<?php echo $examnumber;?>">
                    </div>
                    
                    <div class="dp2">Year
                    <br />
                    <input name="examyear"  type="text" required placeholder="Year"  maxlength="12" onkeypress="return isNumberKey(event)" value="<?php echo $examyear;?>">
                    </div>
                   
                    <div class="dp2">Score
                    <input name="examscore" type="text" required id="percentage12" placeholder="Score" value="<?php echo $examscore;?>">
                   </div>  
                  
				   <div class="dp2">Rank
                    <input name="examrank" type="text" required id="percentage12" placeholder="Rank" value="<?php echo $examrank;?>">
                   </div>  
                
                   
                   <div style="clear:both"></div>
 
				   
 					                
                  
				   </div>
				   
                  <div style="clear:both"></div>
				  <div class="errmsg"></div>
	
				  
                     <div style="margin-top:25px; float:right;">
               	    <input  type="reset" value="Reset" />
               	    <input  type="reset" value="Back" onclick="GotoPrevPage('page2_form.php');"/>
                    <input  type="submit" value="Next" />
				</div>
                </form>
                </div>
 </div>
           
</div>
</body>
</html>