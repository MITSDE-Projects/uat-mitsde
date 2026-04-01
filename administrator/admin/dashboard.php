<?php
session_start();
$sessionid = session_id();
if($_SESSION['logincheck'] != $sessionid.$_SESSION['salt']){
    header('Location:index.php');
    die;
}


include "php/db.php";
$query="select distinct formstatus, count(formstatus) as status from student group by formstatus";
//echo $query;
$sql2 = mysqli_query($conn,$query);
		$count = mysqli_num_rows($sql2);
        if($count>0)
        {
			$v1=0;
			$v2=0;
			$v3=0;
			$v4=0;
			$v5=0;
			 while($studentdata = mysqli_fetch_assoc($sql2))
			{
            
					//print_r($studentdata);

			if($studentdata["formstatus"]=="registered")
			{
				$v1=$studentdata["status"];
			}
			else if($studentdata["formstatus"]=="incomplete form")
			{
				$v2=$studentdata["status"];
			}
            else if($studentdata["formstatus"]=="payment pending")
			{
				$v3=$studentdata["status"];
			}
			else if($studentdata["formstatus"]=="payment done")
			{
				$v4=$studentdata["status"];
			}
			}
			$v5=intval($v1)+intval($v2)+intval($v3)+intval($v4);
			
        }


$query="select distinct programmesugpg, count(programmesugpg) as program from student group by programmesugpg";
$sql2 = mysqli_query($conn,$query);
		$count = mysqli_num_rows($sql2);
        if($count>0)
        {
			$p1=0;
			$p2=0;
			$p3=0;
			$p4=0;
			$p5=0;
			 while($studentdata = mysqli_fetch_assoc($sql2))
			{
            
					//print_r($studentdata);
			if($studentdata["programmesugpg"]=="B.Des")
			{
				$p1=$studentdata["program"];
			}
			else if($studentdata["programmesugpg"]=="M.Des")
			{
				$p2=$studentdata["program"];
			}
			else if($studentdata["programmesugpg"]=="B.Tech")
			{
				$p3=$studentdata["program"];
			}
			else if($studentdata["programmesugpg"]=="I.B.Sc.M.Sc.")
			{
				$p4=$studentdata["program"];
			}
			}
			$p5=intval($p1)+intval($p2)+intval($p3)+intval($p4);			
        }



?>

	<div id="formstatusdetails" style="visibility: hidden;">Registered <label id="a"><?php echo $v1;?></label>
   Incomplete <label id="b"><?php echo $v2;?></label>
   Payment Pending<label id="c"><?php echo $v3;?></label>
   Payment Done <label id="d"><?php echo $v4;?></label></div>
	
		<div id="programdetails" style="visibility: hidden;">B.Des<label id="p1"><?php echo $p1;?></label>
   M.Des<label id="p2"><?php echo $p2;?></label>
   B.Tech<label id="p3"><?php echo $p3;?></label>
   I.B.Sc.M.Sc.<label id="p4"><?php echo $p4;?></label></div>
<link rel="stylesheet" href="../css/bootstrap.css" />
<style>
	.chartContainer
	{
		width: 50%;
	}
	.chartContainer h4
	{
		font-weight:bold;
	}
	.chartContainer li
	{
		font-size:20px;
		margin: 5px;
		cursor: pointer;
		background: #f2f2f2;
		list-style: none;
	}
	.chartContainer li:hover
	{
		background: #ccc;
	}
</style>
<body>
	<center>
	<h1> Avantika Admissions - 2017</h1>
	<h2>Total Applications Received:<?php echo $v5;?></h2>
	</center>
</br>
</br>
</br>
<ul class="list-unstyled list-inline" style="padding:20px;">
  <li>
    <a href="logout.php" class="btn btn-danger">Logout</a>
  </li>
   <li>
    <a href="application.php" class="btn btn-success">Download All Application Forms</a>
  </li>
  <li>
    <a href="enquiry.php" class="btn btn-success">Download All Website Enquiries</a>
  </li>
</ul>


			
<script type="text/javascript">
window.onload = function () {
	var chart1 = new CanvasJS.Chart("chartContainer1",
	{
		title:{
			text: "Application form status"
		},
                animationEnabled: true,
		legend:{
			verticalAlign: "center",
			horizontalAlign: "left",
			fontSize: 20,
			fontFamily: "Helvetica"        
		},
		theme: "theme2",
		data: [
		{
			type: "pie",       
			indexLabelFontFamily: "Garamond",       
			indexLabelFontSize: 20,
			indexLabel: "{label} {y}",
			startAngle:-20,      
			showInLegend: false,
			toolTipContent:"{legendText}",
			dataPoints: [
				{  y: document.getElementById("a").innerHTML, legendText:"Signup"+document.getElementById("a").innerHTML, label: "Signup" },
				{  y:  document.getElementById("b").innerHTML, legendText:"Incomplete Form "+document.getElementById("b").innerHTML, label: "Incomplete Form" },
				{  y: document.getElementById("c").innerHTML, legendText:"Payment Pending "+document.getElementById("c").innerHTML, label: "Payment Pending" },
				{  y:  document.getElementById("d").innerHTML, legendText:"Payment Done "+document.getElementById("d").innerHTML, label: "Payment Done" }
				//,
				//{  y: document.getElementById("e").innerHTML, legendText:"Total", label: "Total" }
			]
		}
		]
	});
	chart1.render();

var chart2 = new CanvasJS.Chart("chartContainer2",
	{
		animationEnabled: true,
		title:{
			text: "Programs Enrolled"
		},
		legend:{
			verticalAlign: "center",
			horizontalAlign: "left",
			fontSize: 20,
			fontFamily: "Helvetica"        
		},
		theme: "theme2",
		data: [
		{
			type: "pie", //change type to bar, line, area, pie, etc
			indexLabelFontFamily: "Garamond",       
			indexLabelFontSize: 20,
			indexLabel: "{label} {y}",
			startAngle:-20,      
			showInLegend: false,
			dataPoints: [
								{  y: document.getElementById("p1").innerHTML, legendText:"B.Des"+document.getElementById("p1").innerHTML, label: "B.Des" },
				{  y:  document.getElementById("p2").innerHTML, legendText:"M.Des"+document.getElementById("p2").innerHTML, label: "M.Des" },
				{  y: document.getElementById("p3").innerHTML, legendText:"B.Tech"+document.getElementById("p3").innerHTML, label: "B.Tech" },
				{  y:  document.getElementById("p4").innerHTML, legendText:"I.B.Sc.M.Sc."+document.getElementById("p4").innerHTML, label: "I.B.Sc.M.Sc." }
				
			]
		}
		]
		});

	chart2.render();
};
function ShowCandidateList(v)
{
	v=v.toLowerCase();
	location.href="showstudents.php?s="+v+"&f=0";
}
function ShowCandidateListProgram(v)
{
	v=v.toLowerCase();
    	location.href="showstudents.php?p="+v+"&f=1";
}
</script>
<script type="text/javascript" src="jquery/canvasjs.min.js"></script>
<div class="chartcontainer" style="float: left;">
<div id="chartContainer1" style="height: 400px; width: 100%;"></div>
<div>
	<h4>Application form status</h4>
	<ul>
		<li onclick="ShowCandidateList('registered');">Signup: <?php echo $v1;?></li>
		<li onclick="ShowCandidateList('incomplete form');">Incomplete Form : <?php echo $v2;?></li>
		<li onclick="ShowCandidateList('payment pending');">Payment Pending / Complete Form: <?php echo $v3;?></li>
		<li onclick="ShowCandidateList('payment done');">Payment Done / Registered: <?php echo $v4;?></li>
	</ul>
</div>
</div>
<div class="chartcontainer" style="float:right;">
<div id="chartContainer2" style="height: 400px; width: 100%;"></div>
<div>
	<h4>Application form for program</h4>
	<ul>
		<li onclick="ShowCandidateListProgram('B.Tech');">B.Tech  : <?php echo $p3;?></li>
		<li onclick="ShowCandidateListProgram('B.Des');">B.Des : <?php echo $p1;?></li>
		<li onclick="ShowCandidateListProgram('M.Des');">M.Des : <?php echo $p2;?></li>
		<li onclick="ShowCandidateListProgram('I.B.Sc.M.Sc.');">Integrated B.Sc + M.Sc. : <?php echo $p4;?></li>
	</ul>
</div>
</div>
</body>


</html>