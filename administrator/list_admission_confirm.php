<?php 
ob_start();
session_start();
include("include/connection.php");
global $conn;
include("include/header.php");




?>

<script>

function sendemail(id,num){

var conf = confirm("Are you sure want to send payment receipt?");
if(conf==true){
window.location.href='payment_receipt.php?payment_id='+id+'&email_flag=1&num='+num
}

}


function getsetstream(val){

window.location.href='list_admission_confirm.php?program_stream='+val;

}

</script>




      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Avantika 
            <small>Fess Paid <a href="admission_fees_paid_data.php" download style="text-align:center;font-size:20px;">Download</a></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Manage Admission</a></li>
            <li class="active">List admission confirm</li>
          </ol>
        </section>

              

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
                    <b>Note</b>: <font color:red;>For sending receipt to B.tech select Program as B.Tech
                </div><!-- /.box-header -->
                                               
                        <select name="set_stream" class="form-control" onChange="getsetstream(this.value);">
                           <option value="-1">Select Stream</option>
                           <option value="design">Design</option>
             <option value="btech" <? if(isset($_GET['program_stream']) && $_GET['program_stream']=='btech') { echo "SELECTED='SELECTED'"; }?>>B.Tech</option>
                        </select>


                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Full Name/ Roll No</th>
                        <th>Payment Mode</th>
                        <th>Amount</th>
                        <th>Email</th>
                        <th>Payment Date</th>
                        <th>Status</th>
                        <? if($getaccessdtls['acc_payment_receipt']=='1') { ?>
                        <th>Receipt Send</th>
         	        <? } ?>
                      </tr>
                    </thead>
                    <tbody>
					
					<?php
					
					if(isset($_GET['program_stream']) && $_GET['program_stream']=='btech'){
                            $getstuddata = mysqli_query($conn,"SELECT * FROM tbl_admission_fees WHERE amount_paid!='' AND program='B.Tech'");
                                         }
                                    else {
			      	  $getstuddata = mysqli_query($conn,"SELECT * FROM tbl_admission_fees WHERE amount_paid!='' AND program!='B.Tech'"); 	
			                 }		
					
		                  while($setstuddata = mysqli_fetch_array($getstuddata)) {
					    
					?>
					
                      <tr>
                        <td><?php if($setstuddata['memberID']!='0') {

          $getsetstudname =  mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM student WHERE memberID='".$setstuddata['memberID']."'"));

                      echo $getsetstudname['name']." ".$getsetstudname['lastname']; 

} else { echo $setstuddata['roll_no']; } ?></td>
                        <td><?php echo $setstuddata['payment_mode'];?></td>
                        <td><?php echo $setstuddata['amount_paid'];?></td>   
                         <td><?php echo $setstuddata['email'];?></td>
			<td><?php echo date("jS \of F Y h:i:s A", strtotime($setstuddata['payment_date']));?></td>
                        <td><?php if($setstuddata['payment_receipt']=='1') { echo "Receipt Emailed"; }?></td>

                        <? if($getaccessdtls['acc_payment_receipt']=='1') { ?>
                        <? if(isset($_GET['program_stream']) && $_GET['program_stream']=='btech') { ?>
                       
                        <td><input type="checkbox" value="<?php echo $setstuddata['memberID'];?>" onClick="sendemail(this.value,'memnumber');"></td>

                        <? } else { ?>

                        <td><input type="checkbox" value="<?php echo $setstuddata['id'];?>" onClick="sendemail(this.value,'idnumber');"></td>
                     
                        <? }  } ?>
			
                      </tr>
					<?php } ?> 
                     
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Full Name/ Roll No</th>
                        <th>Payment Mode</th>
                        <th>Amount</th> 
                        <th>Email</th>                       
                        <th>Payment Date</th>
                        <th>Status</th>	
                        <? if($getaccessdtls['acc_payment_receipt']=='1') { ?> 
                        <th>Send Receipt</th>	
                        <? } ?>		
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