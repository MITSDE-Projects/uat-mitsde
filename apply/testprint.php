<?php
 
session_start();
//echo $_SESSION['memberID'];
if(!isset($_SESSION['memberID']) || $_SESSION['memberID']=="")
{
 	header("location: http://dat.net.in/register");//redirecting to second page
}


       include "php/db.php";
       include "php/populate.php";
	
$memberid= $_SESSION['memberID'];
$pieces = explode(".", basename($_SERVER['PHP_SELF']));
$segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
$pid=$segments[count($segments)-1];
$_SESSION["lastpage"]=$pid;
if(!(isset($payment) && $payment==1) && !isset($transaction) && $lastpage!="printformvalue.php")
 {
	 	header("location:".$lastpage);
}    

$getstudmeatdata = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM tbl_students_data WHERE student_id='".$_SESSION['memberID']."'"));


    
?>



<html>
<head>
<script type="text/javascript">
	$(".printheader").css("display","none");
    function PrintDiv() {
		//$(".printheader").css("display","block");

       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=770,height=1020');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
       popupWin.document.close();
		//$(".printheader").css("display","none");
       }
	  </script>

</head>
<body>


<?php		 
			
		$query = "SELECT * FROM student WHERE `memberID` = '$memberid'";
		$sql2 = mysqli_query($connection,$query);
		$count = mysqli_num_rows($sql2);
        if($count>0)
        {
		while ($userdata = mysqli_fetch_assoc($sql2)) 
		{    
				
		
		?>
		
		 
		
      
	 <center>
			
			<h2 style="width:100%;">Congratulations! We have received your form</h2>
			
			<?php 
			include_once "hallticket.php";
			
			 if($userdata["programmesugpg"]=="B.Des" || $userdata["programmesugpg"]=="M.Des" || $userdata["programmesugpg"]=="B.Des_FASHION" || $userdata["programmesugpg"]=="B.Des_CTP")
			{
			  //echo "IN FILE"; exit;
		
			
			$cht=GenerateHallTicket($memberid);
			if($cht!=0)
			{
                            
                              //echo "IN IF"; exit;

			$rno=6000+$memberid."hallticket.pdf";
			$ht="dat_halltickets/".(6000+$memberid)."hallticket.pdf";
			?>
<? if($getstudmeatdata['approveandactive']=='1') { ?>
	<div style="width:200px;font-size:15px;text-align: center;font-weight:bold;display:none"><a href="<?php echo $ht;?>" download="<?php echo (6000+$memberid).'hallticket.pdf';?>">Download Hall Ticket</a></div>

<? } ?>


		

			<?php
			}
			}
			?>
			
			
	 
   </center>
       





<input type="submit" value="Click here to download(for your reference only)" onclick="PrintDiv();" style="width:300px;">
<div id="divToPrint">
<div style="width:900px;font-size:15px;margin: auto;border:1px solid grey;">
		                <div><b>Program</b></div>
		                <div>
				<?php
					
				if($programmesugpg=="B.Des" || $programmesugpg=="B.Des_FASHION" ||  $programmesugpg=="B.Des_CTP")
				{
				?>
				Bachelor of Design
				<?php
				}
				else if($programmesugpg=="M.Des")
				{?>
				 Master of Design
				<?php
					
				} else if($programmesugpg=="MBA") { echo "Management Design"; }
				?>
			        </div></div>





</div>




<? } }  ?>


</body></html>