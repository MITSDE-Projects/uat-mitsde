<?php 
ob_start();
session_start();
include("include/connection.php");
global $conn;
include("include/header.php");
error_reporting(0);

?>


	
	

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
                		
                		
						
               <section class="content">
			   
			   
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
				
           
           
            <!-- right column -->
                      <div class="box-body" style="background-color: bisque;">
                      <h3 align="center">Data For Delete</h3>
                  <table  class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        
                        <td>sr</td>
                        <td>Lead ID</td>
                        <td>Name</td>
                         <td>Path</td>
                          <td>foldername</td>
                        
                        
					
                      </tr>
                    </thead>
                    <tbody>
					
					<?
	 $gettransactiondtls = mysqli_query($conn,"SELECT * FROM student WHERE enroll_bucket = 1 AND memberID = 460");
					$i=0;	
    $fullpath="https://mitsde.com/apply/";  
		 while($settransactiondtls=mysqli_fetch_array($gettransactiondtls))
           { 		
              $name= $settransactiondtls['name']." ".$settransactiondtls['middlename']." ".$settransactiondtls['lastname'];
                  $fn=explode('/',$settransactiondtls['photo_image']);
                      
                      $delete_path=$pp1=$fn[0].'/'.$pp=$fn[1];
            echo "</br>directory-->". $dirname="https://mitsde.com/apply/".$settransactiondtls['photo_image'];
                 //  echo "</br>directory-->".$dirname=$fullpath.$delete_path;
              
             if(unlink($dirname))
             {
                 echo"</br>File is delect";
             }
             else
             {
                 echo "</br>not deleted";
             }
?>
					
                      <tr>
                       
                <td><?=$i?></td>
                <td><?=$settransactiondtls['memberID']; ?></td>
                <td><?=$name; ?></td>
	            <td><?=$settransactiondtls['photo_image']; ?></td>
                
                 <td><?=$dirname;?></td>
                          
                          
                        
                     </tr>
                      
                       <?
      
						$i++;  
					   }
					?>
                      
                    </tbody>
                   
                  </table>
                </div><!-- /.box-body -->
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
          "autoWidth": true
		  
		 
        });
      });
    </script>
  </body>
</html>
