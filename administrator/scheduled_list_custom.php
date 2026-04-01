<?php 
ob_start();
session_start();
include("include/connection.php");
global $conn;

?>

 <script>	

 function getsetemail(val){


 //var conf = confirm("Are you sure want to send email?");


//if(conf==true) { 
  window.location.href="email_studio_test_check.php?email="+val;
 //} 

  

}



 </script>


	

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
     

       

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> <? if(!isset($_GET['formstatus'])) { echo "All Applications";  } else { ?> Application with status as <?=ucfirst($_GET['formstatus']); } ?></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="min-width:150px;">Full Name</th>
                        <th>Roll NO</th> 
                        <th>Email</th>
                        <th>Studio Date</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Result Check</th>
                        <th>Avantika confirmation</th>
                        
			
                      </tr>
                    </thead>
                    <tbody>
					
			<?  $getfianlize = mysqli_query($conn,"SELECT * FROM tbl_dat_result WHERE scheduled_email_again!='1' AND custom_bulk_send!='1'");
                              while($setfianlize = mysqli_fetch_array($getfianlize)) { 

                        ?>		
					
                      <tr>    
		       <td><?=$setfianlize['name']?></td>
                       <td><?=$setfianlize['roll_no']?></td>
                       <td><input   <? if($setfianlize['scheduled_email_again']=='1') { echo "CHECKED='CHECKED'" ;}?> type="checkbox" name="send_email" value="<?=$setfianlize['email']?>" id="send_email" onClick="getsetemail(this.value)"></td>
                       <td><?=$setfianlize['studio_date']?></td>
                       <td><?=$setfianlize['phone']?></td>
                       <td><?=$setfianlize['email']?></td>
                       <td><?=$setfianlize['result_check_flag']?></td>
                       <td><?=$setfianlize['confirm_avt']?></td>
                       
                      </tr>
					
                 
                        <? } ?> 
                     
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Full Name</th>
                        <th>Roll NO</th>  
                        <th>Studio Date</th>                     
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Result Check</th>
                        <th>Avantika confirmation</th>
                                    
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
 <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
 <script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
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
