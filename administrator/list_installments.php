<?php 
ob_start();
session_start();
include("include/connection.php");
global $conn;
include("include/header.php");





?>

<script>

function delusers(id,action){
	var conf = confirm("Are you sure want to delete user?");
	if(conf==true){
	window.location.href="list_users.php?id="+id+"&action="+action;		
	}
	
}

</script>




      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             
            <small>List Installments</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">List Installments</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Full Name</th>
                        <th>Course</th>
                        <th>Installment 1</th>
                        <th>Installment 2</th>
                        <th>Installment 3</th>
                        
                      </tr>
                    </thead>
                    <tbody>
					
					<?php
					
					
					$getstuddata = mysqli_query($conn,"SELECT * FROM tbl_transactions_details"); 	
					
					
					
					    while($setstuddata = mysqli_fetch_array($getstuddata)) {
					    
					?>
					
                      <tr>
                        <td><?php  ?></td>
                        <td><?php  ?></td>
                        <td><?php  ?></td>
                        <td><?php  ?></td>
                        <td><?php  ?></td>
						
                      </tr>
					<?php } ?> 
                     
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Full Name</th>
                        <th>Username</th>
                         <th>Designation</th>
                        <th>Phone</th>
						<?php if($getaccessdtls['usr_write']=='1' && $getaccessdtls['usr_delete']=='1') { ?>
                        <th>Action</th>
						<?php } ?>
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
