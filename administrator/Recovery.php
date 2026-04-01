<?php 
ob_start();
session_start();
include("pages/connection.php");
if(isset($_GET['value']))
{
  $UTR=$_GET['value'];
 $ID=$_GET['trancation'];
  $transationID=$_GET['t_pay'];
   
	
	$update="UPDATE transaction SET UTR='".$UTR."' WHERE T_ID='".$ID."' and PayU_transationNo='".$transationID."'";
	
	mysql_query($update) or die('Error, insert query failed222');
	
    header('location:Recovery.php?status=verified'); 
	
    
}


include("include/header.php");
?>
<script>
    
   
	
	function getsetutr(val,ttid,payU){
     // alert("Value--"+ val);
		// alert("ID--"+ ttid);
		//alert("PayU--"+ payU);
		var conf  = confirm("Are u sure Transation ID are verified?");
		if(conf==true){
		
       if(val!='')
      {
          //alert('value'+val);
          window.location.href='Recovery.php?1&value='+val+'&trancation='+ttid+'&t_pay='+payU;
          
      }
		}
   
      
  }
</script>




      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> MIT SDE 
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
                  <h3 class="box-title">View Recovery Fees Payment Details</h3>
                </div><!-- /.box-header -->
                
                
                    <form method="POST" style="text-align:center;">
                       <input type="date" name="fromdate">
                       <input type="date" name="todate">
                       <input type="submit" name="submit">
                    </form>
                
                
                
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Reg ID</th>
                        <th>Student Name</th>
                        <th>Email ID</th>
                        <td>Mobile No</td>
                        <td>Course Name</td>
                        <td>Amount</td>
                        <td>Transation ID</td>
                        <td>Transation Date</td>
                        <td>Payment Getway</td>
					    <th>Enter UTR</th>
                      </tr>
                    </thead>
                    <tbody>
					
					<?php
					
					
					
					$getTransation = mysql_query("SELECT DISTINCT transaction.T_LeadID,
					transaction.T_A_Amount,
					transaction.T_ID,
					transaction.UTR,
					transaction.T_B_Amount,
					transaction.PayU_transationNo,
					transaction.T_date,
					transaction.payment_source,
					leadmaster.Name,
					leadmaster.EmailID,
					leadmaster.MobNo,
					coursemaster.Cr_Name FROM transaction INNER JOIN coursemaster ON (coursemaster.CourseID = transaction.T_FeeID) INNER JOIN leadmaster ON (transaction.T_LeadID = leadmaster.LeadID)"); 	
				
					
					
					    while($set_T_data = mysql_fetch_array($getTransation)) 
					    {
					      $totalAmt= $set_T_data['T_A_Amount'] + $set_T_data['T_B_Amount'];
					   ?>
					
                       <tr>
                        <td><?php echo $set_T_data['T_LeadID'];?></td>
                        <td><?php echo $set_T_data['Name'];?></td>
                        <td><?php echo $set_T_data['EmailID'];?></td>
                        <td><?php echo $set_T_data['MobNo']; ?></td>
                        <td><?php echo $set_T_data['Cr_Name'];?></td>
                        <td><?php echo $totalAmt;?></td>
                        <td><?php echo $set_T_data['PayU_transationNo'];?></td>
                        <td><?php echo $set_T_data['T_date'];?></td>
                        <td><?php echo $set_T_data['payment_source'];?></td>
                       
                       <td><input type="text" value="<?php echo $set_T_data['UTR'];?>"  name="utr_number" class="form-control" id="<?php echo $set_T_data['T_ID']?>" OnBlur="getsetutr(this.value,this.id,'<?php echo $set_T_data['PayU_transationNo'];?>')"></td>
                       
                         
                       </tr>
					<?php
					  
					} 
					
					?> 
                     
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Reg ID</th>
                        <th>Student Name</th>
                        <th>Email ID</th>
                        <td>Mobile No</td>
                        <td>Course Name</td>
                        <td>Amount</td>
                        <td>Transation ID</td>
                        <td>Transation Date</td>
                        <td>Payment Getway</td>
                        <th>Enter UTR</th>
					
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
