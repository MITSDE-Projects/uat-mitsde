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

<script>



</script>




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
                  <h3 class="box-title"> List Counselor</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Full Name</th>
                        <th>Action</th>
					
                      </tr>
                    </thead>
                    <tbody>
					
					<?php
					
					
					$getstuddata = mysqli_query($conn,"SELECT * FROM tbl_counselor"); 	
					    while($setstuddata = mysqli_fetch_array($getstuddata)) {
					    
					?>
					
                      <tr>
                        <td><?php echo $setstuddata['full_name'];?></td>
                        <td><a href="add_counselor.php?action=update&id=<?=$setstuddata['id']?>">Edit</a> | <a href="javascript:void(0);" onClick="delusers('<?=$setstuddata['id']?>','delete')">Delete</a></td>
					
                      </tr>
					<?php } ?> 
                     
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Full Name</th>
                        <th>Action</th>
					
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
