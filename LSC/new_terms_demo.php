<!DOCTYPE HTML>
<html>
<head>
  <title>Admissions 2017</title>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrapValidator.min.js"></script> 
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery.form.js"></script>
		<link rel="stylesheet" href="css/style.css" />
 		<script src="js/courses.js"></script>
 		<script src="js/common.js"></script>
</head>

    	<body class="bg-pic">
   <div class="wrapper-640">
	<br>
	<br>
		<div class="mheader">
		<div class="formheading" style="text-align: left;"><h3 style="color:#000;">MIT Pune Campus at Ujjain | MP</h3><h2>Application Form for Admission - 2017</h2>
		<a href="http://www.avantikauniversity.edu.in"><img src="images/avantika-logo.svg" width=100 height=100 /></a>
		</div>
		</div>
	</div>
<?php

include "php/db.php";
$cid=0;
if(isset($_GET["c"]))
$cid=$_GET["c"];

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/admission.css" rel="stylesheet" type="text/css" />
<style>
  p,li
  {
    text-align: justify;
  }
  input[type=submit]
	  {
		width: 40%;
		line-height: 100%;
		font-size:18px;
		height: 50px;
		background: #F17D31;
		color:#fff;
		cursor: pointer;
	  }
		li
		{
			padding-bottom: 10px;	
		}
		.divleft
		{
			width:98%;
			margin: 1%;
		}
		.divright
		{
			width:98%;
			margin: 1%;
		}
		.divfull
		{
			width:98%;
		}
.pheaddetails
{
	display: none;
}
.newClass
{
	display: inline;
}
h3
{
	color:#E04239;
}
h4
{
			cursor: pointer;

}
</style>

<div>
<div style="background:#fff;width: 100%;max-width:1100px;margin: auto;">
            <div class="form-container" style="margin-left: 50px;margin-right: 50px;">

<br>
<br>
<br>
<?php

  if(isset($cid) && $cid!=0)
  {
		
$query = "SELECT * FROM admissionterms WHERE `cid` ='$cid'";
		$sql2 = mysqli_query($connection,$query);
		$count=0;
		if(mysqli_num_rows($sql2)!=null)
		$count = mysqli_num_rows($sql2);
		
        if($count>0)
        {
           $course = mysqli_fetch_assoc($sql2);
        	echo "<div><h3>".$course['coursename']."</div></h3>";
							echo "<h4>Admission Process</h4><div>".$coursedetails=$course['coursedetails']."</div>";
							echo "<h4>Entry Criteria</h4><div>".$coursedetails=$course['coursecriteria']."</div>";
							echo "<div>".$coursenote=$course['coursenote']."</div>";
        }   
	}
else{

$query = "SELECT * FROM admissionterms where cid!='2'";
		$sql2 = mysqli_query($connection,$query);
		$count=0;
		if(mysqli_num_rows($sql2)!=null)
		$count = mysqli_num_rows($sql2);
		$pdes="";
		$pef="";
		$peng="";
        if($count>0)
        {
					$parray=[];
           while($course = mysqli_fetch_assoc($sql2))
					 {
						$parray[]=array("id"=>$course['cid'],"program"=>$course['coursename'],"details"=>$course['coursedetails'],"entry"=>$course['coursecriteria'],"note"=>$course['coursenote']);
					 }
					 foreach($parray as $p)
					 {
						if($p['id']=="1")
						{
								$peng="<div><h3>".$p['program']."</div></h3><ul><li><h4 id='p".$p['id']."' class='phead'>Admission Process <span id='p".$p['id']."spandetails'  class='newClass'>+</span></h4><div id='p".$p['id']."details' class='pheaddetails'>".$p['details']."</div><li><h4 id='p".$p['id']."entry' class='phead'>Entry Criteria <span id='p".$p['id']."entryspandetails' class='newClass'>+</span></h4><div id='p".$p['id']."entrydetails' class='pheaddetails'>".$p['entry'].$p['note']."</div>";
						}
						if($p['id']=="4")
						{
								$pdes="<div><h3>".$p['program']."</div></h3><ul><li><h4 id='p".$p['id']."' class='phead'>Admission Process <span id='p".$p['id']."spandetails'  class='newClass'>+</span></h4><div id='p".$p['id']."details' class='pheaddetails'>".$p['details']."</div><li><h4 id='p".$p['id']."entry' class='phead'>Entry Criteria <span id='p".$p['id']."entryspandetails' class='newClass'>+</span></h4><div id='p".$p['id']."entrydetails' class='pheaddetails'>".$p['entry'].$p['note']."</div>";
						}
						//	if($p['id']=="3")
						{
							//	$pef="<div><h3>".$p['program']."</div></h3><ul><li><h4 id='p".$p['id']."' class='phead'>Admission Process <span id='p".$p['id']."spandetails'  class='newClass'>+</span></h4><div id='p".$p['id']."details' class='pheaddetails'>".$p['details']."</div><li><h4 id='p".$p['id']."entry' class='phead'>Entry Criteria <span id='p".$p['id']."entryspandetails' class='newClass'>+</span></h4><div id='p".$p['id']."entrydetails' class='pheaddetails'>".$p['entry'].$p['note']."</div>";
						}
								
					 }
        }
				echo "<div class='divfull'>".$peng."</div>";
				echo "<div class='divfull'>".$pdes."</div>";
				echo "<div class='divfull'>".$pef."</div>";
}
?>



<br>
<!--<div style="width:40%;text-indent:10px;font-size:16px;background:#FDC030;color:#fff;height:30px;line-height:30px;margin: auto;text-transform:uppercase;">
	<a href="sop-guidelines.php" target="_blank" style="text-decoration:none;color:#fff;">How to write the Statement of Purpose (SOP)?</a>
</div>-->

<a href="sop-guidelines.php" target="_blank" style="text-decoration:none;padding:5px;width: 100%;text-indent:10px;font-size:13px;background:#F17D31;color:#fff;height:30px;line-height:30px;margin: auto;text-transform:uppercase;">How to write the Statement of Purpose (SOP)?</a>
<br><br>
<a href="video-guidelines.php" target="_blank" style="text-decoration:none;padding:5px;width: 100%;text-indent:10px;font-size:13px;background:#E04239;color:#fff;height:30px;line-height:30px;margin: auto;text-transform:uppercase;">Guidelines for video recording</a>

<br>
<br>

<div style="width: 100%;font-size:14px;">
<div style="width:50%;float: left;">
  <b>Avantika Indore Office</b>
  <br>
  <span>212, Tulsi Tower,
Geeta Bhavan Square,<br>
South Tukoganj, <br>Indore -452001,<br> Madhya Pradesh, India</span>
</div>


<div style="width:50%;float: right;text-align: right;">
<b>Avantika Campus</b>
  <br>
  <span>Vishwanathpuram,  <br>
Lekoda Village,<br>
Ujjain - 456006,<br> Madhya Pradesh, India</span>
</div>
</div>
<form id="form2" name="form2" method="post" action="register/index.php" style="margin-top:50px;width:100%;background: #fff;">
<center>	
      <input type="checkbox" required> <a href="http://www.avantikauniversity.edu.in/privacy-policy.php" target="_blank">Terms, Conditions and Privacy Policy.</a>  <br/>  <input name="form3" type="submit" style="width: 300px;margin: auto;" class="txtheader2" id="form3" value="I accept terms and conditions" />
					 </center>
       </form>
					



<br>
<br>
<br>
</div>
						
					
</div> <!--inner container end-->
</div>
<div class="clr"> </div>
<script>
	 $( ".phead" ).on( "click", function() {
      $("#"+this.id+"details").toggleClass( "newClass", 1000 );
      $("#"+this.id+"spandetails").toggleClass( "", 1000 );
			if (document.getElementById(this.id+"spandetails").innerHTML=="+")
			{
                document.getElementById(this.id+"spandetails").innerHTML="-";
            }
						else
						{
							document.getElementById(this.id+"spandetails").innerHTML="+";
						}
    });
</script>
</body>
</html>