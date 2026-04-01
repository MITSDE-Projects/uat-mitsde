<?php 
ob_start();
session_start();
include("include/connection.php");
global $conn;
include("include/header.php");


if(isset($_GET['action']) && $_GET['id']!=''){
	
	if(mysqli_query($conn,"DELETE FROM adminlogin WHERE id='".$_GET['id']."'")){
		header('location:list_users.php?msg=record_deleted');		
	}
	
}


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
            MIT SDE 
            <small>Counselor Wise Admission Count</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

       

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Counselor Wise Admission Count</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                          <th>Sl.No</th>
                        <th>Full Name</th>
                        <th>Count</th>
                   </tr>
                    </thead>
                    <tbody>
					
					<?php
					
					$i=1;
					
					$getstuddata = mysqli_query($conn,"SELECT * FROM tbl_counselor ORDER BY full_name ASC"); 	
		  		      while($setstuddata = mysqli_fetch_array($getstuddata)) {
		  		          
		  		          $getconcnt = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM student WHERE counsellor_name='".$setstuddata['full_name']."'"));
					    
					?>
					
                      <tr>
                        <td><?=$i;?></td> 
                        <td><?php echo $setstuddata['full_name'];?></td>
                        <td><?php echo $getconcnt['cnt'];?></td>
                      </tr>
					<?php 
					   $i++;
					}
					
					?> 
                     
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Full Name</th>
                        <th>Count</th>
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
