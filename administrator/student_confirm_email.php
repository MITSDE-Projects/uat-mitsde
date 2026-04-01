<?php 
ob_start();
session_start();
include("include/connection.php");
include("include/header.php");
      
?>

<script>

function setprogram(val){
window.location.href='student_confirm_email.php?program='+val;
}



function getsendemail(val){

var table = '<?=$_GET['program']?>';

window.location.href='send_custom_email.php?id='+val+'&table='+table

}





</script>


<div class="content-wrapper">        
        <section class="content-header">

<div class="row">
        
            <div class="col-md-12">
    
              <div class="box box-primary">
                   <div class="box-body">

                  <div class="form-group">
                      <label for="exampleInputEmail1">Program</label>
               <select class="form-control" onChange="setprogram(this.value);">
               <option value="B.Sc" <? if($_GET['program']=='B.Sc') { echo "SELECTED='SELECTED'"; } ?>>B.Sc</option>   
               <option value="B.Des" <? if($_GET['program']=='B.Des') { echo "SELECTED='SELECTED'"; } ?>>B.Des</option>
               <option value="M.Des" <? if($_GET['program']=='M.Des') { echo "SELECTED='SELECTED'"; } ?>>M.Des</option>
               <option value="B.Tech" <? if($_GET['program']=='B.Tech') { echo "SELECTED='SELECTED'"; } ?>>B.Tech</option>
               </select>
                    </div>

                  <div>
                   
                  </div>    
                     <table id="example1" class="table table-bordered table-striped">
                     <thead>
                      <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Send Documents</th>
                       </tr>
                     </thead>   
     
                <tbody>
              <?php 


                  if(isset($_GET['program'])){

                         if($_GET['program']=='M.Des' || $_GET['program']=='B.Des'){
                           $table_name='tbl_bdes_mdes_confirmation_email_send';

                     }
                         if($_GET['program']=='B.Tech'){
                            $table_name='tbl_btech_confirmation_email_send';
                    }
                        


                   }
                      //echo "SELECT * FROM $table_name"; exit;
                   
                   $getdata = mysqli_query($conn,"SELECT * FROM $table_name");
                     while($setdata = mysqli_fetch_array($getdata)) {

                     //echo '<pre>';  print_r($setdata); exit;




               ?>
                     <tr>
                     <td><?=$setdata['first_name']."&nbsp;".$setdata['last_name']?></td>
                     <td><?=$setdata['email']?></td>
                     <td><?=$setdata['application']?></td>
                     <td><input type="checkbox" name="row_id[]" value="<?=$setdata['id']?>" onClick="getsendemail(this.value);"></td>
                     </tr>


                     

               <?php } ?>
                </tbody>
                     <tfoot>
                      <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                         <th>Send Documents</th>
                      </tr>
                     </table>
                   </div>
              </div>
            </div>
</div>

        </section>
</div>


<?php include("include/footer.php"); ?>
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
	
	   <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
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