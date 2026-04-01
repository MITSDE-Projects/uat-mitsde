<?php
/*****************************************************
* New user confirmation page. Should only get here *
* from an email link. *
*****************************************************/
include("dbcontroller.php");

if((isset($_GET['hash']))&&(isset($_GET['email']))){
$dbcontroller = new DBController();
	
$worked = $dbcontroller->user_confirm($_GET['email'],$_GET['hash']);
	
if ($worked != 1) {
	$noconfirm = '<p style="color:red;">Something went wrong.</p>';
} 
else 
{
	$confirm = '<div style="width:300px;height:100px;border:1px solid ' .
       '#00abdf; margin:50 auto;font-family:verdana;padding:10px;font-size:14px;background-color:#ff9000; color:#000000;"> '.
       '<h2>You are now confirmed. </h2><p><a ' .
	'href="../public_html/index.php">Log in</a> to start Filling Admission Form ' .
	'.</p></div>';
}
	
$page = <<< EOPAGE
<TABLE CELLPADDING=0 CELLSPACING=0 BORDER=0 ALIGN=CENTER
WIDTH=621>
<TR>
<TD><IMG WIDTH=15 HEIGHT=1 SRC=../images/spacer.gif></TD>
<TD WIDTH=606 CLASS=left>
$feedback_str
$noconfirm
$confirm
</TD>
</TR>
</TABLE>
EOPAGE;
echo $page;
unset($dbcontroller);
}
else
header("Location: ../public_html/index.php");
?>