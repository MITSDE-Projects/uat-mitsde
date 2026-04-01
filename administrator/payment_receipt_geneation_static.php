<!DOCTYPE html>
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
									<td id='c1'>:</td>
									<td class='text-left'>0141</td></tr>
									<tr>
									<td>Date</td>
									<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
									<td>23-05-2017</td>
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
        							<td class='intro' ><strong>Name of Student</strong></td>
									<td id='c1' >:</td>
									<td  class='float:left;'>Avi Choukhany</td>
									<td class='intro'></td>
									<td class='intro text-left'><strong>Academic Year</strong></td>
									<td id='c1'>:</td>
									<td class='text-left'>2017-18</td>
									</tr>
									<tr>
        							<td class='intro text-left'><strong>Roll No</strong></td>
									<td id='c1'>:</td>
									<td class='text-left'>6466</td>
									<td class='intro'></td>
									<td class='intro text-left' ><strong>Program</strong></td>
									<td id='c1'>:</td>
									<td class='text-left'>B.Des</td>
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
    								<td class='text-left'>Tution Fees (1<sup>st</sup> Semester, 1<sup>st</sup> Installment)</td>
    								<td class='text-left'>78750.00</td>
    								<!--<td class='text-left'>NEFT</td>-->
    							</tr>
								<tr>
    								<td class='srNo'>2</td>
    								<td class='text-left'>Miscellaneous Fees (1<sup>st</sup> Semester, 1<sup>st</sup> Installment)</td>
    								<td class='text-left'>4250.00</td>
    								<!--<td class='text-left'>NEFT</td>-->
    							</tr>
								<tr>
    								<td class='srNo'>3</td>
    								<td class='text-left'>Hostel Fees</td>
    								<td class='text-left'>0</td>
    								<!--<td class='text-left'>NEFT</td>-->
    							</tr>
								<tr>
    								<td class='srNo'>4</td>
    								<td class='text-left'>Hostel Security Deposit<font size='1'> (Refundable)</font></td>
    								<td class='text-left'>0</td>
    								<!--<td class='text-left'>NEFT</td>-->
    							</tr>
								<tr>
    								<td class='srNo'>5</td>
    								<td class='text-left'>Mess Fees</td>
    								<td class='text-left'>0</td>
    								<!--<td class='text-left'>NEFT</td>-->
    							</tr>
								
								<tr ><td colspan='4' style='border:none;'></td></tr>
                               <tr><td colspan='4' style='border:none;'><div class='hr'></div></td></tr>
							   <tr>
    								<td class='srNo' style='border:none;'></td>
    								<td style='border:none;'  class='text-left'>Total</td>
    								<td class='text-left' style='border:none;'>83000.0</td>
    								<td class='text-left' style='border:none;'></td>
    							</tr>
								<tr><td class='srNo' style='border:none;' >In words:</td><td style='border:none;'>Rupees Eighty three thousand only</td></tr>
								<tr style='height:50px;'><td class='srNo' style='border:none;' ><span align='left'>Mode of Payment:</td><td style='border:none;'>Online,&nbsp; Transaction Id-</td></tr>


			 <tr style='".$style."'><td colspan='4' style='border:none;'><div class='hr'></div></td></tr>
                         
                         <tr>

                        <td style='border:none;display:none;' ><br><div class='sign'></div><br>Authorized Signatory </td>
    								<!--<td  colspan='3'><br><br><center><font size='1'>This is a system generated receipt. No signature required.</font></center> </td>-->
									
    								
    							</tr>
								
    							
    						</tbody>
    					</table>
						<center><font size='1'>This is a system generated receipt. No signature required.</font></center>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
</body>
</html>