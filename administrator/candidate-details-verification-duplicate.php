<?php 
ob_start();
session_start();
include("include/connection.php");
global $conn;



if(isset($_GET['value'])&& $_GET['action']=='veryficationupdate')
{
    
    $getValue=$_GET['value'];
    $id=$_GET['trancation'];
	$emailid=$_GET['emailid'];
	
	$getmarchanID = mysqli_query($conn,"SELECT email,memberID FROM student WHERE email='".$emailid."' GROUP BY memberID ORDER BY applicationid");
	            $row = mysqli_fetch_array($getmarchanID);
	            $m_id=$row['memberID'];
	            $m_id;
	//echo "</br>UPDATE student SET is_account_verified=1 WHERE email='".$emailid."'";
	//exit();
        mysqli_query($conn,"UPDATE student SET is_account_verified=1 WHERE email='".$emailid."'");
	
	mysqli_query($conn,"UPDATE tbl_transactions_details SET UTR_number='".$getValue."',payment_verification='Verified' WHERE id='".$id."'");
    
    
	
    header('location:candidate-details-verification.php?id='.$m_id.'&action1=utr_number_updated&utr='.$getValue.'');
	
    
    
}



if(isset($_POST['submit']))
{
   $inseramount=$_POST['PayAmount'];
    $pay_id=$_POST['paymentID'];
    $pay_Date=$_POST['paymentdate'];
    $memberID=$_POST['updateLeadID'];
    $emailid=strtolower($_POST['updateLeademail']);
    $payType=$_POST['PayType'];
  //die;
   
   //echo "</br>SELECT memberID,amount FROM student WHERE email='".$emailid."' and memberID='".$memberID."'";
   
    $getmarchanID = mysqli_query($conn,"SELECT memberID,amount,transactid FROM student WHERE email='".$emailid."' and memberID='".$memberID."'");
	            $row1 = mysqli_fetch_array($getmarchanID);
	            $amount=$row1['amount'];
	            $Leadid=$row1['memberID'];
	            $transactid=$row1['transactid'];
	           
	         
	            /*if($amount==NULL)
	            {
	                
	               //echo "</br>UPDATE `student` SET amount='$inseramount', `transactid` = '$pay_id', `isPayment` = '1', `terms` = '1',`colorRadio`='NEFT',`Is_Active`='1', `paymenttype`='4',formstatus='payment done',lastPage='printformvalue.php',paydate='$pay_Date' WHERE `email` = '$emailid' AND memberID ='$memberID'";  
	              
	              mysqli_query($conn,"UPDATE `student` SET amount='$inseramount', `transactid` = '$pay_id', `isPayment` = '1', `terms` = '1',`colorRadio`='$payType',`Is_Active`='1', `paymenttype`='4',formstatus='payment done',lastPage='printformvalue.php',paydate='$pay_Date' WHERE `email` = '$emailid' AND memberID ='$Leadid'");
                
	                
	            }*/
	           // echo "</br>SELECT email FROM tbl_transactions_details WHERE email='".$emailid."' and transaction_id='".$pay_id."'";
                $getmarchanID = mysqli_query($conn,"SELECT email,transaction_id FROM tbl_transactions_details WHERE email='".$emailid."' and transaction_id='".$pay_id."'");
	            $row = mysqli_num_rows($getmarchanID);
	          // die;
	            $transaction_id=$row['transaction_id'];
               // $row =5;
                if($row<=0)
                {
                    
                   $updatestudent=mysqli_query($conn,"UPDATE `student` SET amount='$inseramount', `transactid` = '$pay_id', `isPayment` = '1', `terms` = '1',`colorRadio`='$payType',`Is_Active`='1', `paymenttype`='4',formstatus='payment done',lastPage='printformvalue.php',paydate='$pay_Date' WHERE `email` = '$emailid' AND memberID ='$Leadid'");
                    
                    //echo "record not found";
          //echo "</br>INSERT INTO `tbl_transactions_details` (`id`, `memberID`, `ERPLeadID`, `Name`, `Mobile_no`, `email`, `courseid`, `SpecializationID`, `FeeHeadID`, `fees_type`, `ins_1_amt`, `ins_2_amt`, `ins_3_amt`, `ins_1_date`, `ins_2_date`, `ins_3_date`, `ClearedDate`, `pay_type`, `payment_source`, `PayerBankID`, `transaction_id`, `order_id`, `UTR_number`, `payment_verification`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`, `S_Flag`, `response`, `F_Flag`, `loanStatus`, `LoanProvider`, `API_DT`) VALUES (NULL, '".$memberID."', NULL, NULL, NULL, '".$emailid."', NULL, NULL, '', NULL, '".$inseramount."', '0', '0', '".$pay_Date."', '0000-00-00', '0000-00-00', '', NULL, 'NEFT', NULL, '".$pay_id."', NULL, NULL, 'Not_Verified', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '');";
//die;
  $insert= mysqli_query($conn,"INSERT INTO `tbl_transactions_details` (`id`, `memberID`, `ERPLeadID`, `Name`, `Mobile_no`, `email`, `courseid`, `SpecializationID`, `FeeHeadID`, `fees_type`, `ins_1_amt`, `ins_2_amt`, `ins_3_amt`, `ins_1_date`, `ins_2_date`, `ins_3_date`, `ClearedDate`, `pay_type`, `payment_source`, `PayerBankID`, `transaction_id`, `order_id`, `UTR_number`, `payment_verification`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`, `S_Flag`, `response`, `F_Flag`, `loanStatus`, `LoanProvider`, `API_DT`) VALUES (NULL, '".$Leadid."', NULL, NULL, NULL, '".$emailid."', NULL, NULL, '', NULL, '".$inseramount."', '0', '0', '".$pay_Date."', '0000-00-00', '0000-00-00', '', NULL, '".$payType."', NULL, '".$pay_id."', NULL, NULL, 'Not_Verified', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '');");

	 header('location:candidate-details-verification.php?id='.$memberID.'&sendbucket=1');
	              
                }
                else{
                    echo "</br>--->Duplicate Payment ID Fount.  Please Try Again<---";
                    die;
                }
	            
	            
	            
	            
   //die;
}

include("include/header.php");
error_reporting(0);





?>

<script type='text/javascript' src='http://code.jquery.com/jquery-latest.min.js'></script>
<script>
	
	function getsetutr(val,ttid,emailidid){
     var conf  = confirm("Are u sure Transation ID are verified?");
		if(conf==true){
       if(val!='')
      {
		  
          window.location.href='candidate-details-verification.php?action=veryficationupdate&value='+val+'&trancation='+ttid+'&emailid='+emailidid;
          
      }

}
	}

	
	function allverified(id){
           var conf  = confirm("Are u sure all verified and check ok?");
		alert('email-->'+id);
if(conf==true){
window.location.href='candidate-details-verification.php?verificationUpdate='+id+'&allverfied=1';
}
	
	
	
    function fun(id) 
    {
   //alert('incomplete 10th details');"
   document.getElementById(id).innerHTML+="<li>"+"incomplete 10th details";
   document.getElementById("10"+id).style.visibility="hidden";
   return true;
   }
    function funn(id) 
    {
  //alert('incomplete 12th details');
   document.getElementById(id).innerHTML+="<li>"+"incomplete 12th details";
   document.getElementById("12"+id).style.visibility="hidden";
   return true;
   }
  function foo(id) 
  {
   //alert('invalid sop');
   document.getElementById(id).innerHTML+="<li>"+"Invalid SoP";
   document.getElementById("14"+id).style.visibility="hidden";
   return true;
  }
  function fun1(id) 
  {
  // alert('invalid photo');
   document.getElementById(id).innerHTML+="<li>"+"Invalid Photo";
   document.getElementById("16"+id).style.visibility="hidden";
   return true;
  }
  function fun2(id) 
  {
  // alert('invalid 10th documents');
   document.getElementById(id).innerHTML+="<li>"+"Invalid 10th Doc";
   document.getElementById("18"+id).style.visibility="hidden";
   return true;
  }
  function fun3(id) 
  {
   //alert('invalid 12th documents');
   document.getElementById(id).innerHTML+="<li>"+"Invalid 12th Doc";
   document.getElementById("20"+id).style.visibility="hidden";
   return true;
  }
  function fun4(id) 
   {
   document.getElementById(id).innerHTML+="<li>"+"Unacceptable Caste Certificate";
   document.getElementById("22"+id).style.visibility="hidden";
   return true;
   }
   function fun5(id) 
   {
	  
	//Eligiblity
    loadDoc(id);
    
    return true;
   }
   function fun6(id) 
   {
	
	mailupdate(id);
 
    return true;
   }

    function loadDoc(id) {
		
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
//document.getElementById("demo").innerHTML =this.responseText;
     }
   };
  xhttp.open("GET", "update.php?id="+id, true);
  xhttp.send();
  }

   function mailupdate(id) {
	var mailbody=document.getElementById("mail"+id).innerHTML;
	var to=document.getElementById("to"+id).value;
	var pto=document.getElementById("toparent"+id).value;
	var num=document.getElementById("number"+id).value;
	var pnum=document.getElementById("pnumber"+id).value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        //document.getElementById("demo").innerHTML =this.responseText;
    }
  };
    xhttp.open("GET", "mailupdate.php?id="+id+"&mail="+mailbody+"&to="+to+"&pto="+pto+"&num="+num+"&pnum="+pnum, true);

    xhttp.send();
 }




function docverified(id){

var conf  = confirm("Are u sure documents are verified?");
if(conf==true){
window.location.href='candidate-details.php?id='+id+'&docverfied=1';
}

}



function enrollverified(id){
    
var conf  = confirm("Are u sure Emrollment verification done ?");

if(conf==true){
 
 window.location.href='candidate-details.php?id='+id+'&enrollverified=1';

}    
    
}




}
	
	


	</script>
	
	
	
	

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            MITSDE 
            <small>Applicant</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Details</a></li>
            <li class="active"></li>
          </ol>
        </section>

       

              <div class="box">
               
                <div class="box-body">
                		
                		<?php
                			$memberid1 = $_GET['id'];
                			
                			//echo $mailid;
                			
                			$getmetadata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM student WHERE memberID='".$_GET['id']."'"));
                			$getmetadatadoc = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_students_data WHERE student_id='".$_GET['id']."'"));
                		?>
						
               <section class="content">
			    
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
				<form role="form" action="#" method="POST" enctype="multipart/form-data">
					<div class="col-md-6">
					  <!-- general form elements -->
					  
						<div class="box-header with-border">
						  <h2 class="box-title"><?=ucfirst($getmetadata['name'])."&nbsp;".ucfirst($getmetadata['lastname']);?> Profile</h2>
						      
						</div><!-- /.box-header -->
						<!-- form start -->
						 <div class="box-body">
						  
						  	
						  	<img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['photo'];?>"  width="150" height="150" />
						 
						</div>
						  <div class="box-body">
						    <div class="form-group">
							  <label for="exampleInputPassword1">Member ID </label>
							<input type="text" name="memberID" readonly class="form-control" value="<?=ucfirst($getmetadata['memberID'])?>" >
							</div>
						
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Program </label>
							<input type="text" class="form-control" readonly name="programmesugpg" value="<?=ucfirst($getmetadata['programmesugpg'])?>">
							
							</div>
							
							
							
						
				    </div><!-- /.box-body -->
                             <!-- Form Element sizes -->
					 
					</div>
								<div class="col-md-6">
					  <!-- general form elements -->
					  
						
						<!-- form start -->
							<br><br><br>
						  <div class="box-body">
						      
						   <div class="form-group">
							  <label for="exampleInputEmail1">First Name</label>
							<input type="text" name="name" readonly class="form-control" value="<?=ucfirst($getmetadata['name'])?>" >
							</div>
						      
							<div class="form-group">
							  <label for="exampleInputPassword1">Last Name </label>
							  <input type="text" class="form-control" readonly name="lastname" value="<?=ucfirst($getmetadata['lastname'])?>">
							</div>
							
							
												
							<div class="form-group">
							  <label for="exampleInputPassword1">E-mail</label>
							<input type="text" class="form-control" readonly name="email" value="<?=ucfirst($getmetadata['email'])?>" readonly>
							
							</div>
								
							
						  <div class="form-group">
							  <label for="exampleInputPassword1">Phone Number</label>
							<input type="text" class="form-control" readonly name="phonenumber" value="<?=ucfirst($getmetadata['phonenumber'])?>" readonly>
							
							</div>
							
							</div><!-- /.box-body -->
							
					    	
                          

					  <!-- Form Element sizes -->
					 
					</div>

           
                 
               
               <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead> <label  >Verify NEFT Payment</label >
                      <tr>
                        
                        <td>Amount</td>
                        <td>Transation ID</td>
                        <td>Transation Date</td>
                         <td>Payment Source</td>
                        <th>Enter UTR &nbsp; <label style="color: #00C140" ><? if(isset($_GET['action1'])) { echo "Add UTR Number is ".$_GET['utr']; }	?></label></th>
                        
					
                      </tr>
                    </thead>
                    <tbody>
					
					<?
					// echo "</br>SELECT * FROM tbl_transactions_details WHERE email='".$getmetadata['email']."' GROUP BY transaction_id ORDER BY id DESC";
							
					 $gettransactiondtls = mysqli_query($conn,"SELECT * FROM tbl_transactions_details WHERE email='".$getmetadata['email']."'  ORDER BY id DESC");
					              
			           while($settransactiondtls = mysqli_fetch_array($gettransactiondtls))
					   { 
						  $IDemail=$settransactiondtls['email']; 
		       			?>
					
                      <tr>
                     
                       
               <td><? if($settransactiondtls['ins_2_amt']=='0') { echo $settransactiondtls['ins_1_amt'];  } else { echo $settransactiondtls['ins_2_amt']; }?></td>
                <td><?=$settransactiondtls['transaction_id']; ?></td>
              <td><? if($settransactiondtls['ins_2_date']=='0000-00-00') { echo $settransactiondtls['ins_1_date'];  } else { echo $settransactiondtls['ins_2_date']; }?></td>
						  <td><?=$settransactiondtls['payment_source'];?></td>
                        
          <td><input type="text" value="<?=$settransactiondtls['UTR_number'];?>"  name="utr_number" id="<?=$settransactiondtls['id']; ?>" value="" class="form-control" OnBlur="getsetutr(this.value,this.id,'<?=$settransactiondtls['email'];?>')" ></td></td>
                      </tr>
                      
                       <?
						    $total_pay += $settransactiondtls['ins_1_amt'] + $settransactiondtls['ins_2_amt'];
						   
					   }
							//echo "<br>t-->".$total_pay; 
						   ?>
                      
                    </tbody>
                   
                  </table>
                </div><!-- /.box-body -->
                
                
                 
                
                
               
               
 
            </div><!--/.col (left) -->
            
          <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead> <h1>Add NEFT Payment</h1>
                      <tr>
                        
                        <td>Amount</td>
                        <td>Transation ID</td>
                        <td>Transation Date</td>
                        <th>Action</th>
                        <th>Pay Type</th>
                        
					
                      </tr>
                    </thead>
                    <tbody>
					
				
					
                      <tr>
                      <td><input type="number" value=""  name="PayAmount" class="form-control" required>
                      <input type="hidden" value="<?=ucfirst($getmetadata['email'])?>"  name="updateLeademail">
                      <input type="hidden" value="<?=ucfirst($getmetadata['memberID'])?>"  name="updateLeadID">
                      </td>
                     
                     
                      <td><input type="text" value=""  name="paymentID" class="form-control" required></td>
                     

                      <td><input type="date" data-date-format="yyyy-mm-dd"  name="paymentdate" class="form-control"  required></td>
                      <td><select name="PayType" id="PayType" class="form-control" required>
                          <option value="">Select</option>
                          <option value="Loan">Loan</option>
                          <option value="NEFT">NEFT</option>
                          <option value="HDFC">HDFC</option>
                          <option value="Easebuzz">Easebuzz</option>
                          <option value="payu">payu</option>
                      </select></td>
                      
                      
                      <td><input type="submit" value="Add"  name="submit" id="submit" value="" class="form-control" ></td>
                      </tr>
                      
                      
                      
                    </tbody>
                   
                  </table>
                </div><!-- /.box-body -->
			   <!--<a href="avt_admin_uploads.php?id=<?//=$_GET['id']?>">Submit</a> -->
			
			        <div class="box-footer">
			    
			    
			            <label style="color:#FF8600 ">Total Pay Amount - </label>
							<label style="color:#FF8600 ">Rs. <? echo $total_pay ?> /- </label>
						 </div>
						
						  
						</form>
            <!-- right column -->
        
          </div>   <!-- /.row -->
          
            
        </section>
                             
                		
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <? include("include/footer.php"); ?>

     
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
	
	


	
	
   
  </body>
</html>
