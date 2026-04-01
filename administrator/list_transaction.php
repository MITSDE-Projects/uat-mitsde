<?php 
ob_start();
session_start();
include("include/connection.php");
global $conn;
include("include/header.php");


if(isset($_GET['action']) && $_GET['id']!=''){
	
	if(mysqli_query($conn,"DELETE FROM tbl_counselor WHERE id='".$_GET['id']."'")){
		header('location:list_counselor.php?msg=record_deleted');		
	}
	
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
                  <h3 class="box-title"> List Transactions</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Email</th>
                        <th>Amount A</th>
                        <th>Amount B</th>
                        <th>Amount C</th>
                        <th>Date A</th>
                        <th>Date B</th>
                        <th>Date C</th>
                        <th>Transaction ID</th>
                        <th>Payment Source</th>
                      
					
                      </tr>
                    </thead>
                    <tbody>
					
					<?php
					
					
					$gettransactionsdtls = mysqli_query($conn,"SELECT * FROM tbl_transactions_details"); 	
					    while($settransactionsdtls = mysqli_fetch_array($gettransactionsdtls)) {
					    
					?>
					
                      <tr>
                        <td><?php echo $settransactionsdtls['email'];?></td>
                        <td><?php echo $settransactionsdtls['ins_1_amt'];?></td>
                        <td><?php echo $settransactionsdtls['ins_2_amt'];?></td>
                        <td><?php echo $settransactionsdtls['ins_3_amt'];?></td>
                        <td><?php echo $settransactionsdtls['ins_1_date'];?></td>
                        <td><?php echo $settransactionsdtls['ins_2_date'];?></td>
                        <td><?php echo $settransactionsdtls['ins_3_date'];?></td>
                        <td><?php echo $settransactionsdtls['transaction_id'];?></td>
                        <td><?php echo $settransactionsdtls['payment_source'];?></td>
                       
                     
					
                      </tr>
					<?php } ?> 
                     
                      
                    </tbody>
                    <tfoot>
                       <tr>
                        <th>Email</th>
                        <th>Amount A</th>
                        <th>Amount B</th>
                        <th>Amount C</th>
                        <th>Date A</th>
                        <th>Date B</th>
                        <th>Date C</th>
                        <th>Transaction ID</th>
                        <th>Payment Source</th>
                      
					
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
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
