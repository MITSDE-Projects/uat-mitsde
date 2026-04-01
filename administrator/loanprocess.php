<?php 
ob_start();
session_start();
 
include("include/connection.php");

include("include/header.php");

?>

<script>
    
   
	
	function getsetutr(val,ttid,payU){
      //alert("Value--"+ val);
		// alert("ID--"+ ttid);
		//alert("PayU--"+ payU);
       if(val!='')
      {
          //alert('value'+val);
          window.location.href='OtherFeesList.php?1&value='+val+'&trancation='+ttid+'&t_pay='+payU;
          
      }
   
   
      
  }
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
                  <h3 class="box-title">View Loan Process student fees details</h3>
                </div><!-- /.box-header -->
                
                
                    <form method="POST" style="text-align:center;">
                       <input type="date" name="fromdate">
                       <input type="date" name="todate">
                       <input type="submit" name="submit">
                    </form>
                
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
                        <th>Mobile No</th>
                        <th>Email ID</th>
                        <th>Processing Fee</th>
                        <th>Transation id</th>
                        <th>Data and Time</th>
                        <th>Track Details</th>
                      </tr>
                    </thead>
                    
                    <tbody>
					
					<?php
					
					if(isset($_GET['todate']) && $_GET['fromdate']!="")
					{
					    
					   	$getstuddata = mysqli_query($conn,"SELECT * FROM loan_registration where  lr_data_time>='".$_GET['fromdate']."' AND lr_data_time<='".$_GET['todate']."'"); 
					}
					else
					{
					
	              	$getstuddata = mysqli_query($conn,"SELECT * FROM `loan_registration` ORDER BY `lr_id` DESC"); 	
					 
					    
					}
					$i=1;
					
					    while($setstuddata = mysqli_fetch_array($getstuddata)) {
					    
					?>
					
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $setstuddata['lr_name'];?></td>
                        <td><?php echo $setstuddata['lr_mob'];?></td>
                        <td><?php echo $setstuddata['lr_email'];?></td>
                        <td><?php echo $setstuddata['lr_amount'];?></td>
                         <td><?php echo $setstuddata['lr_traction_id'];?></td>
                        <td><?php echo $setstuddata['lr_data_time'];?></td>
                        <!--<td><a href="trackingdetails.php?trackemailid=<?php //echo $setstuddata['lr_email'];?>">View Traking Details</a></td>-->
                        <td><a href="trackingdetails.php?trackemailid=<?php echo $setstuddata['lr_email'];?>">View Traking Details</a></td>
                      </tr>
					<?php
					$i++;
					} ?> 
                     
                      
                    </tbody>
                    
                    <tfoot>
                      <tr>
                        <th>Sr No</th>
                        <th>Student Name</th>
                        <td>Mobile No</td>
                        <th>Email ID</th>
                        <td>Processing Fee</td>
                        <td>Transation id</td>
                        <td>Data and Time</td>
                        <th>Track Details</th>
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
