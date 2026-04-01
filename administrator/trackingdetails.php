<?php ob_start();
session_start();
include("include/connection.php");
include("include/header.php");

?>

<script>
    

  
  function getsetutr(val,ttid,emailidid,amt){
     
     var conf  = confirm("Are u sure Transation ID are verified?");
		
		if(conf==true)
		{
		   // alert(val);
		   // alert(ttid);
		   // alert(emailidid);
		   // alert(amt);
       if(val!='')
      {
          
		  //alert('hi');
          window.location.href='trackingdetails.php?action=veryficationupdate&value='+val+'&trancation='+ttid+'&emailid='+emailidid+'&amount='+amt;
          
      }

}
	}
</script>
<?php
if(isset($_GET['value'])&& $_GET['action']=='veryficationupdate')
{
    
    $getValue=$_GET['value'];
    $RequestID=$_GET['trancation'];
    $emailid=$_GET['emailid'];
    $amount=$_GET['amount'];
    $paydata =  date("Y-m-d");
   // echo "</br>UPDATE tbl_transactions_details SET UTR_number='".$getValue."',payment_verification='Verified' WHERE email='".$emailid."' AND order_id='".$RequestID."'";
	// exit();           
	//echo "</br>UPDATE student SET is_account_verified=1 WHERE email='".$emailid."'";
	//exit();
        mysqli_query($conn,"UPDATE student SET is_account_verified=1,amount='$amount',transactid='$getValue',lastPage='printformvalue.php',formstatus='payment done',paydate='$paydata' WHERE email='".$emailid."'");
	
	mysqli_query($conn,"UPDATE tbl_transactions_details SET UTR_number='".$getValue."',payment_verification='Verified' WHERE email='".$emailid."' AND transaction_id='".$RequestID."'");
    
    
	
    header('location:trackingdetails.php?trackemailid='.$emailid.'&action1=utr_number_updated&utr='.$getValue.'');
	
    
    
}
?>



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            MIT SDE 
            <small>Applicants</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

       

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">View Loan Process student fees details</h3>
                  </br>tracking Link:  <a href="https://loans.easebuzz.in/customers/track" target="_blank">click here</a>
                </div><!-- /.box-header -->
                
                
                    <div aline="center"></div>
                
                    <?php 
				      if(isset($_GET['status']))
					  {
						  ?>
						 <label style="color: #00A42C">Payment Details Verified</label>
						  <?php
					  }
				   ?>
                
                <div class="box-body">
                    
                  <table id="example2" class="table table-bordered table-striped">
                    
                    <thead>
                      <tr>
                        <th>Sr No</th>
                        <th>Student Name</th>  
                        <th>Email ID</th>
                        <th>Transaction ID</th>
                        <th>Laon Amount</th>
                        <!--<th>View</th>-->
                        <th>Loan Status</th>
                        <th>Payment UTR No</th>
                        
                       </tr>
                    </thead>
                    
                    <tbody>
					
					<?php
					
				//	echo "</br>SELECT * FROM `tbl_transactions_details` where email='".$_GET['trackemailid']."' AND payment_source='Loan'";
					
	              	   $getstuddata = mysqli_query($conn,"SELECT * FROM `tbl_transactions_details` where email='".$_GET['trackemailid']."' AND payment_source='Loan'"); 	
					  	$i=1;
					
					    while($setstuddata = mysqli_fetch_array($getstuddata)) 
					    {
					    
					?>
					
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $setstuddata['Name'];?></td>
                        <td><?php echo $setstuddata['email'];?></td>
                        <td><?php echo $setstuddata['transaction_id'];?></td>
                        <td><?php echo $setstuddata['ins_1_amt'];?></td>
                        
                        <!--<td><a href="https://loans.easebuzz.in/customers/track" target="_black">Tracking Link</a></td>-->
                        
                        <td><?php if($setstuddata['UTR_number']!=null){echo "<p style='color:#008000;'>Payment Done</p>";}else{echo  "<p style='color:red;'>IN Process</p>";}?></td>
                        
                        
                        
  <td><input type="text" value="<?=$setstuddata['UTR_number'];?>" <? if($_SESSION['user_id']!='11') { ?> readonly<?php
                        }
                       ?>   name="utr_number" id="<?=$setstuddata['transaction_id']; ?>" value="" class="form-control" OnBlur="getsetutr(this.value,this.id,'<?=$setstuddata['email']; ?>','<?=$setstuddata['ins_1_amt']; ?>')" ></td>
                        
                      </tr>
					<?php
					$i++;
					} ?> 
                     
                      
                    </tbody>
                    
                    <tfoot>
                      <tr>
                        <th>Sr No</th>
                        <th>Student Name</th>  
                        <th>Email ID</th>
                        <th>Transaction ID</th>
                        <th>Laon Amount</th>
                        <!--<th>View</th>-->
                        <th>Loan Status</th>
                        <th>Payment UTR No</th>
                        
                       </tr>
                    </tfoot>
                    
                  </table>
                  
                  
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
  
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
  
  
  
 
    
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
		  
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
		  "scrollX": true,
          "autoWidth": true,
           dom: 'Bfrtip',
           buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
		  
		 
        });
      });
    </script>
  </body>
</html>
