<?php session_start();
include("../admin/include/config.php");

function generatetransactionid()
           {
           $transactionId=date('dmyhis');
           return $transactionId;  
           }
  $transactionId=generatetransactionid();
 
 //echo "</br>Normal-->".$transactionId="051218082426";
 
//echo "</br>SELECT * FROM OtherFeesTransaction WHERE t_process_id = '".$transactionId."'";

$result1 = mysql_query("SELECT * FROM OtherFeesTransaction WHERE t_process_id = '".$transactionId."'");
       
		
        if(mysql_num_rows($result1)>0)
        { 
          //echo "</br>not zero1";
           function generatetransactionid1()
           {
           $transactionId=date('dmyhis');
           return $transactionId;  
           }
           
           $transactionId=generatetransactionid1(); 
           
          }
        else
        {
           $transactionId=generatetransactionid();
        }

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->


<!-- Page Title -->
<title>Online Payment</title>

<!-- Favicon and Touch Icons -->
<link href="../media/favicon.png" rel="shortcut icon" type="image/png">


<!-- Stylesheet -->
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="../css/animate.css" rel="stylesheet" type="text/css">
<link href="../css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="../css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="../css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->

<!-- CSS | Custom Margin Padding Collection -->
<link href="../css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="../css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->


<script src="../js/jquery-2.2.4.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../ajax-load/js/jquery-1.10.2.min.js"></script>
<script type="../text/javascript" src="ajax-load/js/validation.js" charset="UTF-8"></script>

<script src="../js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="../js/jquery-plugin-collection.js"></script>
<script src="../js/actionchanger.js"></script>
<?php
  include"../GoogleAnalytics.html";
  include"../fbpixel.html";
  
 ?>
</head>
<script language="javascript" type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getState(FeesType) {		
		//alert(FeesType);
		var strURL="FindOtherFeeHDFC.php?FeesType="+FeesType;
		//alert(strURL)
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;
						//alert(req.responseText);
											
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	

function geturlval(val,id)
{
	
	//alert(val);
	//alert(id);
	
	
	 var FeesType =  document.getElementById('FeesType').value; // Called installment value
	
	if(id=='Course' && (FeesType=='Second Installment' || FeesType=='Third Installment')){
		
   
	
	 if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDM IN ENERGY MANAGEMENT'){
	  
	   var furl = 'https://www.mitsde.com/ResponseEneryMng.php';
	   var surl = 'https://www.mitsde.com/ResponseEneryMng.php'
	 
      var mrchID= '193023';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
  
  if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDM IN HUMAN RESOURCE MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-HRM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-HRM.php'
	 
      var mrchID= '204957';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
  if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDM IN FINANCIAL SERVICES'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-FS.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-FS.php'
	 
      var mrchID= '204953';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
  if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDM IN FINANCE MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-FM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-FM.php'
	 
      var mrchID= '204942';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
  if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDM IN TELECOM MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-TM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-TM.php'
	 
      var mrchID= '204967';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
   if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDM IN RISK AND INSURANCE MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-RAIM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-RAIM.php'
	 
      var mrchID= '204966';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
  if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDM IN RETAIL MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-RM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-RM.php'
	 
      var mrchID= '204964';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
  if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGC IN RETAIL MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGC-RM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGC-RM.php'
	 
      var mrchID= '204963';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
  
  if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDM IN PROJECT MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ccavResponseHandlerPGDMPROJET.php';
	  var surl = 'https://www.mitsde.com/ccavResponseHandlerPGDMPROJET.php'
	 
      var mrchID= '204962';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
  if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDBA OPERATIONS MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDBA-OM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDBA-OM.php'
	 
      var mrchID= '204961';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
   if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDBA MATERIAL MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDBA-MM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDBA-MM.php'
	 
      var mrchID= '204960';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
  if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDBA MARKETING MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/PGDBA-MarketingM.php';
	  var surl = 'https://www.mitsde.com/PGDBA-MarketingM.php'
	 
      var mrchID= '204959';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
  if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDBA SUPPLY CHAIN MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDBA-SCM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDBA-SCM.php'
	 
      var mrchID= '204958';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
  if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDBA INFORMATION TECHNOLOGY'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDBA-IT.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDBA-IT.php'
	 
      var mrchID= '204956';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
  if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDBA HUMAN RESOURCE MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDBA-HRM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDBA-HRM.php'
	 
      var mrchID= '204955';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
  
  if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDBA FINANCE MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDBA-FM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDBA-FM.php'
	 
      var mrchID= '204954';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
   if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDM IN OPERATIONS MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-OM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-OM.php'
	 
      var mrchID= '204952';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
  
  if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGC IN MODERN OFFICE MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGC-MOM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGC-MOM.php'
	 
      var mrchID= '204951';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
   if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDM IN MATERIAL MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-MaterialM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-MaterialM.php'
	 
      var mrchID= '204950';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
   if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDM IN MARKETING MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-MarketingM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-MarketingM.php'
	 
      var mrchID= '204949';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
  if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDM IN LOGISTICS AND SUPPLY CHAIN MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-LSCM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-LSCM.php'
	 
      var mrchID= '204948';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
  if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDM IN INFRASTRUCTURE MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-IM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-IM.php'
	 
      var mrchID= '204947';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
  
  if((FeesType=='Second Installment' || FeesType=='Third Installment') && val=='PGDM IN INFORMATION TECHNOLOGY'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-IT.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-IT.php'
	 
      var mrchID= '204946';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
	  
	  
  }
	
	

}
else if(id=='FeesType' && (val=='Second Installment' || val=='Third Installment'))  {

 var Course =  document.getElementById('Course').value; 
 
 
  if((val=='Second Installment' || val=='Third Installment') && Course=='PGDM IN ENERGY MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponseEneryMng.php';
	  var surl = 'https://www.mitsde.com/ResponseEneryMng.php'
	  
	  
	  var mrchID= '193023';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
  if((val=='Second Installment' || val=='Third Installment') && Course=='PGDM IN HUMAN RESOURCE MANAGEMENT'){
	  
	 var furl = 'https://www.mitsde.com/ResponsePGDM-HRM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-HRM.php'
	 
      var mrchID= '204957';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
  if((val=='Second Installment' || val=='Third Installment') && Course=='PGDM IN FINANCIAL SERVICES'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-FS.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-FS.php'
	 
      var mrchID= '204953';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
  if((val=='Second Installment' || val=='Third Installment') && Course=='PGDM IN FINANCE MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-FM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-FM.php'
	 
      var mrchID= '204942';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
 
  
  if((val=='Second Installment' || val=='Third Installment') && Course=='PGDM IN TELECOM MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-TM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-TM.php'
	 
      var mrchID= '204967';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
  if((val=='Second Installment' || val=='Third Installment') && Course=='PGDM IN RISK AND INSURANCE MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-RAIM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-RAIM.php'
	 
      var mrchID= '204966';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
  if((val=='Second Installment' || val=='Third Installment') && Course=='PGDM IN RETAIL MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-RM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-RM.php'
	 
      var mrchID= '204964';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
  if((val=='Second Installment' || val=='Third Installment') && Course=='PGC IN RETAIL MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGC-RM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGC-RM.php'
	 
      var mrchID= '204963';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
   if((val=='Second Installment' || val=='Third Installment') && Course=='PGDM IN PROJECT MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ccavResponseHandlerPGDMPROJET.php';
	  var surl = 'https://www.mitsde.com/ccavResponseHandlerPGDMPROJET.php'
	 
      var mrchID= '204962';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
  if((val=='Second Installment' || val=='Third Installment') && Course=='PGDBA OPERATIONS MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDBA-OM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDBA-OM.php'
	 
      var mrchID= '204961';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
  if((val=='Second Installment' || val=='Third Installment') && Course=='PGDBA MATERIAL MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDBA-MM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDBA-MM.php'
	 
      var mrchID= '204960';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
  if((val=='Second Installment' || val=='Third Installment') && Course=='PGDBA MARKETING MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/PGDBA-MarketingM.php';
	  var surl = 'https://www.mitsde.com/PGDBA-MarketingM.php'
	 
      var mrchID= '204959';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
  if((val=='Second Installment' || val=='Third Installment') && Course=='PGDBA SUPPLY CHAIN MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDBA-SCM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDBA-SCM.php'
	 
      var mrchID= '204958';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
  if((val=='Second Installment' || val=='Third Installment') && Course=='PGDBA INFORMATION TECHNOLOGY'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDBA-IT.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDBA-IT.php'
	 
      var mrchID= '204956';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
  if((val=='Second Installment' || val=='Third Installment') && Course=='PGDBA HUMAN RESOURCE MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDBA-HRM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDBA-HRM.php'
	 
      var mrchID= '204955';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
  if((val=='Second Installment' || val=='Third Installment') && Course=='PGDM IN LOGISTICS AND SUPPLY CHAIN MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-LSCM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-LSCM.php'
	 
      var mrchID= '204948';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
  if((val=='Second Installment' || val=='Third Installment') && Course=='PGDM IN INFRASTRUCTURE MANAGEMENT'){
	  
	  var furl = 'https://www.mitsde.com/ResponsePGDM-IM.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-IM.php'
	 
      var mrchID= '204947';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
  if((val=='Second Installment' || val=='Third Installment') && Course=='PGDM IN INFORMATION TECHNOLOGY'){
	  
	   var furl = 'https://www.mitsde.com/ResponsePGDM-IT.php';
	  var surl = 'https://www.mitsde.com/ResponsePGDM-IT.php'
	 
      var mrchID= '204946';
	  
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
  }
  
 

 
 
 
}
	
	
	else {
		
	//	alert("in if condition");
		 var furl = 'https://www.mitsde.com/ccavResponseHandler.php';
	     var surl = 'https://www.mitsde.com/ccavResponseHandler.php'
	  
	  var mrchID= '204968';
	  
	  $('#redirect_url').val(surl);
	  $('#cancel_url').val(furl);
	  
	  $('#merchant_id').val(mrchID);
		
		
	}
}







	
</script>










<script type="text/javascript">
var ck_name = /^[A-Za-z0-9 ]{3,100}$/;
var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
var ck_username = /^[A-Za-z0-9_]{1,20}$/;
var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
var ck_mob =  /^[\s()+-]*([0-9][\s()+-]*){10}$/;


function validate(OtherFeesPayment)
{
//alert('hi');

 var LeadID = OtherFeesPayment.merchant_param3.value;
 var StudentName = OtherFeesPayment.StudentName.value;
 var email = OtherFeesPayment.EmailID.value;
 //var StudentName = OtherFeesPayment.StudentName.value;
 var MobileNo = OtherFeesPayment.MobileNo.value;
 var Course = OtherFeesPayment.Course.value;
 
 var FeesType = OtherFeesPayment.FeesType.value;
  
  
 var errors = [];
 
 if (!ck_name.test(LeadID)) {
  errors[errors.length] = "Please Enter Admission ID .";
 }
 
 if (!ck_name.test(StudentName)) {
  errors[errors.length] = "Please Enter Your Name";
 }
  
 if (!ck_email.test(email)) {
  errors[errors.length] = "You must enter a valid email address.";
 }
 if (!ck_mob.test(MobileNo)) {
  errors[errors.length] = "You must enter a valid Mobile.";
 }
 if (Course==0) {
  errors[errors.length] = "Select Course";
 }
 
 if (FeesType==0) {
  errors[errors.length] = "Select Fees Type";
 }
 
 
 if (errors.length > 0) {
  reportErrors(errors);
  return false;
 }
 
 return true;
}

function reportErrors(errors){
 var msg = "Please Enter Valide Data...\n";
 for (var i = 0; i<errors.length; i++) {
  var numError = i + 1;
  msg += "\n" + numError + ". " + errors[i];
 }
 alert(msg);
}
</script>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->

  
  <!-- Header -->
<?php include "php/header.php"; ?>
 <script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
</script> 
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    

    <section class="divider">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-push-3">
            <div class="border-5px  p-30 mb-0" style="border-color:#710000;">
              <h3 class="text-theme-colored mt-0 pt-5">Fee Payment</h3>
              <hr>
              
				
              
              <form action="ccavRequestHandler.php" name="OtherFeesPayment" id="OtherFeesPayment" onSubmit="return validate(this);" method="post">
                
                        
					<input type="hidden" name="tid" id="tid"/> 
				    <input type="hidden" name="merchant_id" id="merchant_id" value="204968"/> <!-----other fees (UTM) for other Fee------->
				    <input type="hidden" name="order_id" value="<?php echo $transactionId; ?>"/>  
				    <input type="hidden" name="currency" value="INR"/> 
				    <input type="hidden" name="redirect_url" id="redirect_url" value="https://www.mitsde.com/ccavResponseHandler.php"/> 
				    <input type="hidden" name="cancel_url" id="cancel_url" value="https://www.mitsde.com/ccavResponseHandler.php"/> 
			 	    <input type="hidden" name="language" value="EN"/> 
						
						
 <div class="col-sm-6"> <div class="form-group"><input type="text" class="form-control" name="merchant_param3"  id="merchant_param3" placeholder="Admission ID"></div></div>
 
 <div class="col-sm-6"> <div class="form-group"><input type="text" class="form-control" name="delivery_name" id="StudentName" placeholder="Student Name"></div></div>
                              <input type="hidden" name="delivery_address" value="Pune"/>
							  
  <div class="col-sm-6"> <div class="form-group"><input type="text" class="form-control" name="billing_email" id="EmailID" placeholder="Email ID"></div></div>
  
   <div class="col-sm-6"><div class="form-group"><input type="text" class="form-control" name="delivery_tel" id="MobileNo" placeholder="Mobile No"> </div></div>
   
  
 <div class="col-sm-6"> <div class="form-group"><select name="merchant_param1" onChange="geturlval(this.value,this.id);" id="Course" class="form-control" id="exampleSelect1">
                  <option value="">Select Course</option>
				                       <?php 
							 $getCourseList=mysql_query("SELECT * FROM `pay_getway_courses_list` order by id");
							       
									while($row=mysql_fetch_array($getCourseList))
														{
												     ?>
				                        <option value="<?php echo $row['ME_Name']?>"><?php echo $row['ME_Name']?></option>
										
				 <?php
				 
														}
				 ?> 
				 
                 
                  
            </select>	</div></div>
			
			                   
		        
		        
		        	<input type="hidden" name="delivery_address" value=""/></td>
		        
		        	<input type="hidden" name="delivery_city" value=""/></td>
		        
		        	<input type="hidden" name="delivery_state" value=""/></td>
		        
		        	<input type="hidden" name="delivery_zip" value=""/></td>
		        
		        	<input type="hidden" name="delivery_country" value=""/></td>
		        
			
			
			
			

   <div class="col-sm-6"><div class="form-group"><select onChange="geturlval(this.value,this.id);" class="form-control" name="merchant_param2" id="FeesType" onChange="getState(this.value)">
                  <option value="">Select Fees type</option>
				  
				 
                  <?php 
				 $getstudentinfo=mysql_query("SELECT * FROM `feeshead` ORDER BY `feeshead`.`FeesID` ASC"); 
                   while($row=mysql_fetch_array($getstudentinfo))
	                {
	                   $FeesHead= $row['FeesHead'];
					   $FeesID= $row['FeesID'];  
			      ?>
		
			       <option value="<?php echo $FeesHead; ?>"><?php echo $FeesHead; ?></option>
                  <?php
				  }
				  ?> 
                  
            </select>	</div></div>
			
			
			<div id="emi_div" style="display: none">
			         <table border="1" width="100%">
			         <tr> <td colspan="2">EMI Section </td></tr>
			         <tr> <td> Emi plan id: </td>
			            <td><input readonly type="text" id="emi_plan_id"  name="emi_plan_id" value=""/> </td>
			         </tr>
			         <tr> <td> Emi tenure id: </td>
			            <td><input readonly type="text" id="emi_tenure_id" name="emi_tenure_id" value=""/>  </td>
			         </tr>
			         <tr><td>Pay Through</td>
				         <td>
					         <select name="emi_banks"  id="emi_banks">
					         </select>
				         </td>
			        </tr>
			        <tr><td colspan="2">
				         <div id="emi_duration" class="span12">
		                	<span class="span12 content-text emiDetails">EMI Duration</span>
		                    <table id="emi_tbl" cellpadding="0" cellspacing="0" border="1" >
							</table> 
		                </div>
				        </td>
			        </tr>
			        <tr>
			        	 <td id="processing_fee" colspan="2">
			        	</td>
			        </tr>
			        </table>
		        </div>
			
			
			
			
 
 <div class="form-group">
  <div id="statediv"><input type="text" class="form-control" name="amount"  id="exampleInputPassword1" placeholder="Amount"></div> 
	 </div>
  

               <!-- <div class="form-group">
                 <select class="form-control" id="db">
                  <option>Select Payment Option</option>
				  <option>HDFC</option>
                  <option>PayU</option>
                  <option>EaseBuzz</option>
                  </select>
                
                  </div>-->
  
		
             
		
		<!--<div class="alert alert-info" role="alert">Note for online payment charges :<br> 
				 <ul class="list">
                    <li>HDFC -: 0% extra changers </li>
                 	
                 </ul>
                
                 
		</div> -->  
  
  
  
                  <button type="submit" onclick="myfunction()" class="btn btn-primary">Pay Now</button>
				  
				  
				
				  
				  </form>
              <!-- Job Form Validation-->
              
            </div>
            <div class="row" style="padding-top: 15px;">
             <div class="col-sm-4"><a href="terms-and-conditions" target="_blank">Terms and condition</a></div>
              <div class="col-sm-4"><a href="images/onlinepaymentpolicy/Terms of Use-pdf.pdf" target="_blank">Terms of use</a></div>
               <div class="col-sm-4"><a href="images/onlinepaymentpolicy/Privacy Policy.pdf" target="_blank">Privacy policy</a></div>
             
             
             <div>
          </div>
          
        </div>
       
      </div>
    </section>
  </div>  
  <!-- end main-content -->

  <!-- Footer -->
  <?php //include"footer.php"; ?>
  <!--<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>-->
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>

</html>