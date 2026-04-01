<?php 
$conn = mysqli_connect("localhost", "mitsde_studentda", "Custom@123","mitsde_studentdata");

$curdate = date('Y-m-d');

date_default_timezone_set('Asia/Kolkata');
//include_once "administrator/include/connection.php";


$url="http://65.1.54.123:9000/api/limit/all-nbfc-transactions";
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($curl, CURLOPT_GET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$rusult=curl_exec($ch);
curl_close($ch);



$result= json_decode($rusult,true);
//var_dump($rusult);
//echo '<pre>';
//print_r($result);


    
    
    foreach ($result as $record) {
     
      //echo "</br>--------------------------------------Start-------------------------";
      $record['id'];
      $date_of_Payment=$record['date_of_Payment'];
      $mode_of_payment=$record['mode_of_payment'];
      $instrument_No=$record['instrument_No'];
      $amount=$record['amount'];
      $clearance_Date=$record['clearance_Date'];
      $student_Name=$record['student_Name'];
      $student_Email_ID=$record['student_Email_ID'];
      $student_Mobile_No=$record['student_Mobile_No'];
      $course_Name=$record['course_Name'];
      $finance_charges=$record['finance_charges'];
      $Bank_tranId=$record['Bank_tranId'];
      $NbfcName=$record['NbfcName'];
      $tenure=$record['tenure'];
      
      $totalamount=$record['amount']+$record['finance_charges'];
      //echo "</br>---------------------------------------------------------------";
      
      
       
          //echo "</br>SELECT memberID,amount,transactid,email FROM student01 WHERE email='".$student_Email_ID."'";
      
                $getmarchanID = mysqli_query($conn,"SELECT memberID,amount,transactid,email FROM student WHERE email='".$student_Email_ID."'");
	            $row1 = mysqli_fetch_array($getmarchanID);
	            $getcount = mysqli_num_rows($getmarchanID);
	            
	            if($getcount>=1)
                   {
	           $Leadid=$row1['memberID'];
	            $email=$row1['email'];
	            
	           date_default_timezone_set('Asia/Kolkata');
               $currentTime = date('Y-m-d H:i:s');

	         //echo "</br>search in transation table----->SELECT email,transaction_id FROM tbl_transactions_details1 WHERE email='".$email."' and transaction_id='".$instrument_No."'";
	           
                $getmarchanID = mysqli_query($conn,"SELECT email,transaction_id FROM tbl_transactions_details WHERE email='".$email."' and transaction_id='".$instrument_No."'");
	            $row = mysqli_num_rows($getmarchanID);
	          // die;
	            $transaction_id=$row['transaction_id'];
               // $row =5;
                if($row<=0)
                {
                  //echo "</br>UPDATE `student01` SET amount='$totalamount', `transactid` = '$instrument_No', `isPayment` = '1', `terms` = '1',`colorRadio`='Loan',`Is_Active`='1', `paymenttype`='4',formstatus='payment done',lastPage='printformvalue.php',paydate='$clearance_Date' WHERE `email` = '$email' AND memberID ='$Leadid'";  
                   
                   $updatestudent=mysqli_query($conn,"UPDATE `student` SET amount='$totalamount', `transactid` = '$instrument_No', `isPayment` = '1', `terms` = '1',`colorRadio`='Loan',`Is_Active`='1', `paymenttype`='4',formstatus='payment done',lastPage='printformvalue.php',paydate='$clearance_Date' WHERE `email` = '$email' AND memberID ='$Leadid'");
                    
                    //echo "record not found";
          //echo "</br>INSERT INTO `tbl_transactions_details` (`id`, `memberID`, `ERPLeadID`, `Name`, `Mobile_no`, `email`, `courseid`, `SpecializationID`, `FeeHeadID`, `fees_type`, `ins_1_amt`, `ins_2_amt`, `ins_3_amt`, `ins_1_date`, `ins_2_date`, `ins_3_date`, `ClearedDate`, `pay_type`, `payment_source`, `PayerBankID`, `transaction_id`, `order_id`, `UTR_number`, `payment_verification`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`, `S_Flag`, `response`, `F_Flag`, `loanStatus`, `LoanProvider`, `API_DT`) VALUES (NULL, '".$memberID."', NULL, NULL, NULL, '".$emailid."', NULL, NULL, '', NULL, '".$inseramount."', '0', '0', '".$pay_Date."', '0000-00-00', '0000-00-00', '', NULL, 'NEFT', NULL, '".$pay_id."', NULL, NULL, 'Not_Verified', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '')";
//die;
     $insert_transactions_details= mysqli_query($conn,"INSERT INTO `tbl_transactions_details` (`id`, `memberID`, `ERPLeadID`, `Name`, `Mobile_no`, `email`, `courseid`, `SpecializationID`, `FeeHeadID`, `fees_type`, `ins_1_amt`, `ins_2_amt`, `ins_3_amt`, `ins_1_date`, `ins_2_date`, `ins_3_date`, `ClearedDate`, `pay_type`, `payment_source`,`finance_charges`,`nbfc_name`,`tenure`, `PayerBankID`, `transaction_id`, `order_id`, `UTR_number`, `payment_verification`, `PayeeInstituteID`, `PayeeBankID`, `PayeeACNo`, `PayeeACName`, `PayeeBranch`, `PayeeBankAddress`, `PayeeIFSCCode`, `UserId`, `CurrencyID`, `S_Flag`, `response`, `F_Flag`, `loanStatus`, `LoanProvider`, `API_DT`) VALUES (NULL, '".$Leadid."', NULL, NULL, NULL, '".$student_Email_ID."', NULL, NULL, '', NULL, '".$totalamount."', '0', '0', '".$clearance_Date."', '0000-00-00', '0000-00-00', '', NULL, 'Loan','".$finance_charges."','".$NbfcName."','".$tenure."', NULL, '".$instrument_No."', NULL, NULL, 'Not_Verified', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '')");

     $getloancount = mysqli_query($conn,"SELECT student_Email_ID,instrument_No FROM loanpaymentdata WHERE student_Email_ID='".$student_Email_ID."' AND instrument_No='".$instrument_No."'");
	            
	        $getcount1 = mysqli_num_rows($getloancount);
	            
	            if($getcount1==0)
                   {
             $insert_loan_update= mysqli_query($conn,"INSERT INTO `loanpaymentdata` (`id`,`nbfc_name`, `date_of_Payment`, `mode_of_payment`, `instrument_No`, `amount`, `clearance_Date`, `student_Name`, `student_Email_ID`, `student_Mobile_No`, `course_Name`, `finance_charges`, `Bank_tranId`, `TotalAmt`, `dateTime`,`flag`) VALUES (NULL, '".$NbfcName."','".$date_of_Payment."','".$mode_of_payment."','".$instrument_No."','".$amount."','".$clearance_Date."','".$student_Name."','".$student_Email_ID."','".$student_Mobile_No."','".$course_Name."','".$finance_charges."','".$Bank_tranId."','".$totalamount."','".$currentTime."','1')");
                 }
                 else
                 {
             $update_loan= mysqli_query($conn,"UPDATE `loanpaymentdata` SET `flag` = '1' WHERE student_Email_ID='".$student_Email_ID."' AND instrument_No='".$instrument_No."'");        
                 }
                 
                }
                else{
                   // echo "</br>--->Duplicate Payment ID Fount.  Please Try Again<---";
                    //die;
                }
	            
        
    }
    else
    {
        $getloancount = mysqli_query($conn,"SELECT student_Email_ID,instrument_No FROM loanpaymentdata WHERE student_Email_ID='".$student_Email_ID."' AND instrument_No='".$instrument_No."' ");
	            
	        $getcount1 = mysqli_num_rows($getloancount);
	            
	            if($getcount1==0)
                   {
              $insert_loan_update= mysqli_query($conn,"INSERT INTO `loanpaymentdata` (`id`, `date_of_Payment`, `mode_of_payment`, `instrument_No`, `amount`, `clearance_Date`, `student_Name`, `student_Email_ID`, `student_Mobile_No`, `course_Name`, `finance_charges`, `Bank_tranId`, `TotalAmt`, `dateTime`,`flag`) VALUES (NULL, '".$date_of_Payment."','".$mode_of_payment."','".$instrument_No."','".$amount."','".$clearance_Date."','".$student_Name."','".$student_Email_ID."','".$student_Mobile_No."','".$course_Name."','".$finance_charges."','".$Bank_tranId."','".$totalamount."','".$currentTime."','0')");
                 }
    }

    }
 

?>

<!DOCTYPE html>
<html>
<head>
    

    
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );

$(document).ready(function() {
    $('#PGCM').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );









</script>
<link  rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link  rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<link type="text/css" rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
<link type="text/css" rel="icon" href="media/favicon.ico" type="image/x-icon">
</head>
<title>Loan payment updated_<?php echo date('Y-m-d')?></title>
<body>
    <div align="center"><h1>MITSDE - Loan Payment Update</h1></div>

<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card mt-3 tab-card">
        <div class="card-header tab-card-header">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">All Loan Payments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Not Updated</a>
            </li>
            
          </ul>
        </div>

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
           
            <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
               <th>Sno</th>
               <th>Status</th>
                <th>student_Name</th>
                <th>student_Email_ID</th>
                <th>student_Mobile_No</th>
                <th>amount</th>
                <th>Discount</th>
                <th>TotalAmt</th>
                <th>instrument_No</th>
                <th>course_Name</th>
                <th>date_of_Payment</th>
                <th>clearance_Date</th>
                <th>mode_of_payment</th>
                <th>Bank_tranId</th>
                <th>File Uploaded Data and time</th>
                
            </tr>
        </thead>
        <tbody>
          <?php 
          $i=1;
          $serch=mysqli_query($conn,"SELECT * FROM `loanpaymentdata` ORDER BY `loanpaymentdata`.`id` DESC");
          
		  while($row=mysqli_fetch_array($serch))
		  {
		  ?>           
		   <tr>
		       <td><?php echo $i;?></td>
		       
		       
		       <?php if($row['flag']==0) {
		           ?>
		           <td style="color:red;">Not Updated</td>
		       <?php
		       }else{
		       ?>
		       <td>Updated</td>
		       <?php
		       
		       }?>
		       <td><?php echo $row['student_Name'];?></td>
		       <td><?php echo $row['student_Email_ID'];?></td>
		       <td><?php echo $row['student_Mobile_No'];?></td>
		       <td><?php echo $row['amount'];?></td>
		       <td><?php echo $row['finance_charges'];?></td>
		       <td><?php echo $row['TotalAmt'];?></td>
		       <td><?php echo $row['instrument_No'];?></td>
		       <td><?php echo $row['course_Name'];?></td>
		       <td><?php echo $row['date_of_Payment'];?></td>
		       <td><?php echo $row['clearance_Date'];?></td>
		       <td><?php echo $row['mode_of_payment'];?></td>
		       <td><?php echo $row['Bank_tranId'];?></td>
		       <td><?php echo $row['dateTime'];?></td>
            </tr>
            <?php
             $i++;
		  }
		 
			?>
        </tbody>
        <tfoot>
            <tr>
               <th>Sno</th>
               <th>Status</th>
                <th>student_Name</th>
                <th>student_Email_ID</th>
                <th>student_Mobile_No</th>
                <th>amount</th>
                <th>Discount</th>
                <th>TotalAmt</th>
                <th>instrument_No</th>
                <th>course_Name</th>
                <th>date_of_Payment</th>
                <th>clearance_Date</th>
                <th>mode_of_payment</th>
                <th>Bank_tranId</th>
                <th>File Uploaded Data and time</th>
                
            </tr>
        </tfoot>
    </table>
              
          </div>
          
          
          
          
          <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
            <h5 class="card-title">Not Updated</h5>
            <table id="PGCM" class="display" style="width:100%">
        <thead>
            <tr>
               <th>Sno</th>
               <th>Status</th>
                <th>student_Name</th>
                <th>student_Email_ID</th>
                <th>student_Mobile_No</th>
                <th>amount</th>
                <th>Discount</th>
                <th>TotalAmt</th>
                <th>instrument_No</th>
                <th>course_Name</th>
                <th>date_of_Payment</th>
                <th>clearance_Date</th>
                <th>mode_of_payment</th>
                <th>Bank_tranId</th>
                <th>File Uploaded Data and time</th>
                
            </tr>
        </thead>
        <tbody>
          <?php 
          $i=1;
          $serch=mysqli_query($conn,"SELECT * FROM `loanpaymentdata` WHERE `flag` = 0 ORDER BY `id` DESC");
          
		  while($row=mysqli_fetch_array($serch))
		  {
		  ?>           
		    <tr>
		       <td><?php echo $i;?></td>
		       <?php if($row['flag']==0) {
		           ?>
		           <td style="color:red;">Not Updated</td>
		       <?php
		       }else{
		       ?>
		       <td>Updated</td>
		       <?php
		       
		       }?>
		       <td><?php echo $row['student_Name'];?></td>
		       <td><?php echo $row['student_Email_ID'];?></td>
		       <td><?php echo $row['student_Mobile_No'];?></td>
		       <td><?php echo $row['amount'];?></td>
		       <td><?php echo $row['finance_charges'];?></td>
		       <td><?php echo $row['TotalAmt'];?></td>
		       <td><?php echo $row['instrument_No'];?></td>
		       <td><?php echo $row['course_Name'];?></td>
		       <td><?php echo $row['date_of_Payment'];?></td>
		       <td><?php echo $row['clearance_Date'];?></td>
		       <td><?php echo $row['mode_of_payment'];?></td>
		       <td><?php echo $row['Bank_tranId'];?></td>
		       <td><?php echo $row['dateTime'];?></td>
            </tr>
            <?php
             $i++;
		  }
		 
			?>
        </tbody>
        <tfoot>
           <tr>
               <th>Sno</th>
                <th>Status</th>
                <th>student_Name</th>
                <th>student_Email_ID</th>
                <th>student_Mobile_No</th>
                <th>amount</th>
                <th>Discount</th>
                <th>TotalAmt</th>
                <th>instrument_No</th>
                <th>course_Name</th>
                <th>date_of_Payment</th>
                <th>clearance_Date</th>
                <th>mode_of_payment</th>
                <th>Bank_tranId</th>
                <th>File Uploaded Data and time</th>
                
            </tr>
        </tfoot>
    </table>
                        
          </div>
          
          


          
          
         
          
          





        </div>
      </div>
    </div>
  </div>
</div>
<body>
</html>