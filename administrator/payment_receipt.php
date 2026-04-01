<?php
include("phpToPDF.php"); 
include("include/connection.php"); 



  function mail_attachment($to, $subject, $message, $files) {
      
      $headers = "From: admissions@avantika.edu.in";
      
      $semi_rand = md5(time()); 
      $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
      $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
      
      $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
      $message .= "--{$mime_boundary}\n";

      foreach ($files as $file) {

        $filename = end(explode("/",$file));  
        $data = file_get_contents($file);

        $data = chunk_split(base64_encode($data));

        $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$file\"\n" .
          "Content-Disposition: attachment;\n" . " filename=\"$file\"\n" .
          "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        $message .= "--{$mime_boundary}\n";
      }
        echo (@mail($to, $subject, $message, $headers)) ? "<p>Send to $to!</p>" : "<p>Not send toaar $to!</p>"; 
  } // mail-attachment







if(isset($_GET['num']) & $_GET['num']=='memnumber'){

$getadmdata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM  tbl_admission_fees WHERE memberID='".$_GET['payment_id']."'"));

}
else{
$getadmdata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM  tbl_admission_fees WHERE id='".$_GET['payment_id']."'"));
}


if($getadmdata['memberID']!='0'){

$getstudadmdata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM  student WHERE memberID='".$getadmdata['memberID']."'"));

$studentname = $getstudadmdata['name']."&nbsp".$getstudadmdata['lastname'];
$applicationid = $getstudadmdata['applicationid'];
$program = $getstudadmdata['programmesugpg'];
$studentname = $getadmdata['student_name'];
}
else {

$studentname = $getadmdata['student_name'];
$applicationid = $getadmdata['roll_no'];
$program = $getadmdata['program'];
$studentname = $getadmdata['student_name'];

}




if(isset($_GET['num']) & $_GET['num']=='idnumber'){
if($getadmdata['amount_paid']=='83000.0' || $getadmdata['amount_paid']=='83028.75' || $getadmdata['amount_paid']=='40000.0' || $getadmdata['amount_paid']=='3000.0' || $getadmdata['amount_paid']=='45000.0' || $getadmdata['amount_paid']=='83029.5' || $getadmdata['amount_paid']=='83991.09' || $getadmdata['amount_paid']=='83025.96'){

$tution_fees='78750.00';
$miscellaneous_fees='4250.00';
$rupeesinword = 'Rupees Eighty Three Thousand Only';
$trnxidx = $getadmdata['transaction_id'];


$hostel_security_fees='0';
$hostel_fees='0';
$mess_fees='0';

}

if($getadmdata['amount_paid']=='251000.0'){
$tution_fees='157500.00';
$miscellaneous_fees='8500.00';
$hostel_fees = '50000.00';
$mess_fees='32500.00';
$hostel_security_fees='2500.00';
$rupeesinword = 'Rupees Two Lakhs Fifty One Thousand Only';
$trnxidx = 'NA';
} 


if($getadmdata['amount_paid']=='118000.0'){
$tution_fees='78750.00';
$miscellaneous_fees='4250.00';
$hostel_fees = '50000.00';
$mess_fees='32500.00';
$hostel_security_fees='2500.00';
$rupeesinword = 'Rupees One Lakh Sixty Eight Thousand Only';
$trnxidx = '';
} 







if($getadmdata['amount_paid']=='72528.75' || $getadmdata['amount_paid']=='72500.0' || $getadmdata['amount_paid']=='72525.96'){
$tution_fees='';
$miscellaneous_fees='';
$hostel_fees = '37500.00';
$mess_fees='32500.00';
$hostel_security_fees='2500.00';
$rupeesinword = 'Rupees Seventy Two Thousand Five Hundred Only';
$trnxidx = $getadmdata['transaction_id'];
} 





if($getadmdata['amount_paid']=='166000.0'){
$tution_fees='157500.00';
$miscellaneous_fees='8500.00';
$hostel_fees = '0';
$mess_fees='0';
$hostel_security_fees='0';
$rupeesinword = 'Rupees One Lakh Sixty Six Thousand Only';
$trnxidx = '';
} 


if($getadmdata['amount_paid']=='168000.0' || $getadmdata['amount_paid']=='24000.0'){
$tution_fees='78750.00';
$miscellaneous_fees='4250.00';
$hostel_fees = '50000.00';
$mess_fees='32500.00';
$hostel_security_fees='2500.00';
$rupeesinword = 'Rupees One Lakh Sixty Eight Thousand Only';
$trnxidx = $getadmdata['transaction_id'];
} 



if($getadmdata['amount_paid']=='85000.0' || $getadmdata['amount_paid']=='85025.96' || $getadmdata['amount_paid']=='86014.98'){
$tution_fees='';
$miscellaneous_fees='';
$hostel_fees = '50000.00';
$mess_fees='32500.00';
$hostel_security_fees='2500.00';
$rupeesinword = 'Rupees  Eighty Five Thousand Only';
$trnxidx = $getadmdata['transaction_id'];
} 




if($getadmdata['amount_paid']=='84000.0'){
$tution_fees='78750.00';
$miscellaneous_fees='4250.00';
$hostel_fees = '50000.00';
$mess_fees='32500.00';
$hostel_security_fees='2500.00';
$rupeesinword = 'Rupees  One Lakh Sixty Eight Thousand Only';
$trnxidx = $getadmdata['transaction_id'];
} 










if($getadmdata['amount_paid']=='50000.0'){
$tution_fees='';
$miscellaneous_fees='';
$hostel_fees = '50000.00';
$mess_fees='';
$hostel_security_fees='';
$rupeesinword = 'Rupees  Fifty Thousand Only';
$trnxidx = $getadmdata['transaction_id'];
} 



if($getadmdata['amount_paid']=='155500.0'){
$tution_fees='78750.00';
$miscellaneous_fees='4250.00';
$hostel_fees = '37500.00';
$mess_fees='32500.00';
$hostel_security_fees='2500.00';
$rupeesinword = 'One Lakh Fifty Five Thousand and Five Hundred Only';
$trnxidx = $getadmdata['transaction_id'];
} 


if($getadmdata['amount_paid']=='500.0'){
$tution_fees='78750.00';
$miscellaneous_fees='4250.00';
$hostel_fees = '37500.00';
$mess_fees='32500.00';
$hostel_security_fees='2500.00';
$rupeesinword = 'One Lakh Fifty Five Thousand and Five Hundred Only';
$trnxidx = $getadmdata['transaction_id'];
} 






if($getadmdata['amount_paid']=='133000.0'){
$tution_fees='78750.00';
$miscellaneous_fees='4250.00';
$hostel_fees = '50000.00';
$mess_fees='';
$hostel_security_fees='';
$rupeesinword = 'Rupees  One Lakh Thirty Three Thousand Only';
$trnxidx = $getadmdata['transaction_id'];
} 

if($getadmdata['amount_paid']=='52500.0'){
$tution_fees='';
$miscellaneous_fees='';
$hostel_fees = '50000.0';
$mess_fees='';
$hostel_security_fees='2500.0';
$rupeesinword = 'Rupees Fifty Two Thousand Only';
$trnxidx = $getadmdata['transaction_id'];
} 









}
if(isset($_GET['num']) & $_GET['num']=='memnumber'){

if($getadmdata['amount_paid']=='56750.0' || $getadmdata['amount_paid']=='57000.0' || $getadmdata['amount_paid']=='56778.75' || $getadmdata['amount_paid']=='16750.0' || $getadmdata['amount_paid']=='30000.0' || $getadmdata['amount_paid']=='26750.0' || $getadmdata['amount_paid']=='16778.75' || $getadmdata['amount_paid']=='39972.0' || $getadmdata['amount_paid']=='40000.0' || $getadmdata['amount_paid']=='57427.65' ){


$tution_fees='52500.00';
$miscellaneous_fees='4250.00';
$rupeesinword = 'Rupees Fifty Six Thousand Seven Hundred and Fifty Only';

$hostel_security_fees='0';
$hostel_fees='0';
$mess_fees='0';
$applicationid = $getstudadmdata['applicationid'];
$program = $getstudadmdata['programmesugpg'];
}



if($getadmdata['amount_paid']=='129250.0'){
$tution_fees='52500.00';
$miscellaneous_fees='4250.00';
$hostel_fees = '37500.00';
$mess_fees='32500.00';
$hostel_security_fees='2500.00';
$rupeesinword = 'Rupees One Lakh Twenty Nine Thousand Two Hundred<br/>and Fifty Only';
$trnxidx = $getadmdata['transaction_id'];
} 





if($getadmdata['amount_paid']=='85000.0'){
$tution_fees='';
$miscellaneous_fees='';
$hostel_fees = '50000.00';
$mess_fees='32500.00';
$hostel_security_fees='2500.00';
$rupeesinword = 'Rupees Eighty Five Thousand Only';
$trnxidx = $getadmdata['transaction_id'];
}






if($getadmdata['amount_paid']=='72528.75' || $getadmdata['amount_paid']=='72500.0'){
$tution_fees='';
$miscellaneous_fees='';
$hostel_fees = '37500.00';
$mess_fees='32500.00';
$hostel_security_fees='2500.00';
$rupeesinword = 'Rupees Seventy Two Thousand Five Hundred Only';
$trnxidx = $getadmdata['transaction_id'];
} 












// Here we will fetch multiple transaction id.

$gettrnxid = mysqli_query($conn,"SELECT * FROM tbl_admission_fees WHERE memberID='".$_GET['payment_id']."'");
  while($settrnxid = mysqli_fetch_array($gettrnxid)){

  //$transactionid[] = $settrnxid['transaction_id'];

}




$trnxidx = implode("<br/>",$transactionid);

}





if($getadmdata['payment_mode']!='dd' && $getadmdata['payment_mode']!='ca'){

$paymentmode = 'NEFT';

}

if($getadmdata['payment_mode']=='ca'){

$paymentmode = 'Cash';

}


if($getadmdata['payment_mode']=='dd'){

$paymentmode = "DD, DD No-".$getadmdata['dd_number'];

}


if($getadmdata['payment_mode']=='ch'){

$paymentmode = "Cheque, No-".$getadmdata['dd_number'];

}




if(isset($_GET['email_flag'])){ $style = 'display:none'; }



$totalamt = $mess_fees + $hostel_security_fees + $hostel_fees + $miscellaneous_fees + $tution_fees;

$totalamt = number_format((float)$totalamt, 2, '.', '');





//echo '<pre>'; print_r($getadmdata); exit;



$my_html="<!DOCTYPE html>
<html lang='en'>
<head>
  <title>AVANTIKA</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <style>
  .invoice-title{
margin-top:20px;
  }
  
  .invoice-title h2, .invoice-title h3 {
    display: inline-block;
	
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}


#container {
    width:100%;
    text-align:center;
}

#left {
    float:left;
    width:25%;
    height: 120px;
   
}

#center {
    display: inline-block;
    padding-top:50px;
    width:10%;
    height: 120px;
	
    
}

#right {
	 
    float:right;
  margin-top:50px;
    width:25%;
    height: 120px;
	
    
}

.col-md-6{
border:thin solid #DCDCDC; 
border-radius:12px;
}

#tbl1 td{
	 border:none;
}
.img-responsive{
	margin-top:0px;
	height:120px;
	width:120px;
}
.no{
	 margin-left:-15px;
}
.appid{
	margin-left:16px;
}
.prog{
	margin-right:22px;
}
.sign{
	 height:70px;
	 width:70px; 
	 border:thin solid black;
	 border-radius:12px;
}
.srNo{
	width:50px;
}
.intro{
	width:125px;
	text-align:left;
}
.hr{
	width:100%; 
	height:1px; 
	background:grey;
}
.particulars{
	width:400px;
}
#c1{
	width:1px;

	padding:0px;
	padding-bottom:1px;
	padding-top:5px;
	padding-left:-20px;
}
  </style>
  </head>
<body>
<div class='col-md-3'></div>
<div class='container col-md-6'>
    <div class='row '>
        <div class='col-xs-12 '>
    		<div class='invoice-title well'>
    		
				 <div id='container'>
				  <div id='left'><a href='#'><img src='http://avantikauniversity.edu.in/images/avantika-logo.svg' class='img-responsive'  alt='avantika'></a></div>
	              <div id='center'><font size='4' ><strong>RECEIPT</strong></font></div>
                  <div id='right'><table>
										 <tr>
        							<td class='text-left'>No.</td>
									
									<td class='text-left'>".$getadmdata['receipt_no']."</td></tr>
									<tr>
									<td>Date</td>
									<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
									<td>".$getadmdata['payment_date']."</td>
									</tr>
										 </table></div>
                 </div>
    		</div>
    		<br><hr>
    		<div class='row'>
    		
				<div class='row'>
				<div class='col-md-12'>
				<div class='panel-body'>
			<div class='table-responsive'>
    					<table id='tbl1' class='table table-condensed'>
    						
                                <tr>
        							<td class='intro' ><strong>Name of Student</strong>:</td>
									
									<td  class='float:left;'>GAURANG AGARWAL</td>
                                                                        <td id='c1'></td>
									<td class='intro'></td>
									<td class='intro text-left'><strong>Academic Year:</strong></td>
									<td id='c1'></td>
									<td class='text-left'>2017-18</td>
									</tr>
									<tr>
        							<td class='intro text-left'><strong>Roll No.</strong></td>
									<td id='c1'>:3285</td>
									<td class='text-left'></td>
									<td class='intro'></td>
									<td class='intro text-left'><strong>Program</strong></td>
									<td id='c1'>:</td>
									<td class='text-left'>B.Des</td>
									</tr>
						            <tr><td class='intro'><strong>Enrollment No.</strong></td>
									<td id='c1' >: AU17A1009</td>
									<td  class='float:left;'></td>
									<td class='intro'></td></td>
                                                                </tr>
									
									</table></div></div>
    		</div>
			</div>
			</div>
    	
    	</div>
    </div>
    
    <div class='row'>
    	<div class='col-md-12'>
    		<div class='panel panel-default'>
    			<div class='panel-heading'>
    				<h3 class='panel-title'><strong></strong></h3>
    			</div>
    			<div class='panel-body'>
    				<div class='table-responsive'>
    					<table class='table table-condensed'>
    						<thead>
                                <tr>
        							<td class='srNo'><strong>Sr. No.</strong></td>
        							<td class='particulars'><strong>Particulars</strong></td>
        							<td class='text-left'><strong>Amount (Rs)</strong></td>
        							<!--<td class='text-left'><strong>Details</strong></td>-->
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
    								<td class='srNo'>1</td>
    								<td class='text-left'>Tution Fees (1<sup>st</sup> Semester)</td>
    								<td class='text-left'>1,57,500.0</td>
    								<!--<td class='text-left'>NEFT</td>-->
    							</tr>
								<tr>
    								<td class='srNo'>2</td>
    								<td class='text-left'>Miscellaneous Fees (1<sup>st</sup> Semester)</td>
    								<td class='text-left'>8500.0</td>
    								<!--<td class='text-left'>NEFT</td>-->
    							</tr>
								<tr>
    								<td class='srNo'>3</td>
    								<td class='text-left'>Hostel Fees</td>
    								<td class='text-left'>50,000.0</td>
    								<!--<td class='text-left'>NEFT</td>-->
    							</tr>
								<tr>
    								<td class='srNo'>4</td>
    								<td class='text-left'>Hostel Security Deposit<font size='1'> (Refundable)</font></td>
    								<td class='text-left'>2500.0</td>
    								<!--<td class='text-left'>NEFT</td>-->
    							</tr>
								<tr>
    								<td class='srNo'>5</td>
    								<td class='text-left'>Mess Fees</td>
    								<td class='text-left'>32,500.0</td>
    								<!--<td class='text-left'>NEFT</td>-->
    							</tr>
								
								<tr ><td colspan='4' style='border:none;'></td></tr>
                               <tr><td colspan='4' style='border:none;'><div class='hr'></div></td></tr>
							   <tr>
    								<td class='srNo' style='border:none;'></td>
    								<td style='border:none;'  class='text-left'>Total</td>
    								<td class='text-left' style='border:none;'>2,51,000.0</td>
    								<td class='text-left' style='border:none;'></td>
    							</tr>
								<tr><td class='srNo' style='border:none;' >In words:</td><td style='border:none;'>Two Lakh Fifty One Thousand only</td></tr>
								<tr style='height:50px;'><td class='srNo' style='border:none;' ><span align='left'>Mode of Payment:</td><td style='border:none;'>online, &nbsp;&nbsp;Date of Payment:&nbsp;".$getadmdata['payment_date']."</td></tr>


			 <tr style='".$style."'><td colspan='4' style='border:none;'><div class='hr'></div></td></tr>
                         
                         <tr>

                        <td style='border:none;".$style."' ><br><div class='sign'></div><br>Authorized Signatory </td>
    								<!--<td  colspan='3'><br><br><center><font size='1'></font></center> </td>-->
									
    								
    							</tr>
								
    							
    						</tbody>
    					</table>
						<center><font size='1'></font></center>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
</body>
</html>";


//echo $my_html; exit;


// SET YOUR PDF OPTIONS
// FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'html',
  "source" => $my_html,
  "action" => 'save',
  "save_directory" => $docsdir,
  "file_name" => 'receipt.pdf');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);


/*
mail_attachment($getadmdata['email'],"Payment receipt towards your admission at Avantika University","Dear $studentname,<br/><br/>

Thank you for confirming your admission to Avantika University and paying the second installment of fees towards the same. We welcome you into the Avantika family.<br/>

The Admissions team will contact you soon to apprise you of the next steps. In the meanwhile, please feel free to get in touch with us to resolve any query.<br/>
We wish you the very best and hope to see you soon at Avantika University.<br/><br/>kindly find the attachment herewith for payment receipt.<br/><br/>Head Admissions.",array("receipt.pdf"));
*/
































if(isset($_GET['num']) & $_GET['num']=='memnumber'){

mysqli_query($conn,"UPDATE  tbl_admission_fees SET payment_receipt='1' WHERE memberID='".$_GET['payment_id']."'");

}
else {

mysqli_query($conn,"UPDATE  tbl_admission_fees SET payment_receipt='1' WHERE id='".$getadmdata['id']."'");

}








?>