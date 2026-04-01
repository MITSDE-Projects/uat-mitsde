<?php 
ob_start();
session_start();
include("include/connection.php");
global $conn;
include("include/header.php");
error_reporting(0);


$accessrights = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_access_rights WHERE user_id='".$_SESSION['user_id']."'"));

//echo '<pre>'; print_r($accessrights); 

echo "</br>pagename-->".$getpagename=$_GET['formstatus'];

if(isset($_POST['submit']))
{
    
    //extract($_POST);
    
   // echo '<pre>'; print_r($_POST); exit; 
    
    
    if(isset($_GET['enroll_bucket']) && $_GET['enroll_bucket']==1) 
    { 
        
     header('location:list_application.php?formstatus='.$_GET['formstatus'].'&enroll_bucket=1&fromdate='.$_POST['fromdate'].'&todate='.$_POST['todate']);
     
    }
    
    else {
        
     header('location:list_application.php?formstatus='.$_GET['formstatus'].'&fromdate='.$_POST['fromdate'].'&todate='.$_POST['todate']);
        
    }
    
}

if(isset($_GET['regno']))
{
  $regno=$_GET['regno'];
  $leadid=$_GET['leadid'];
  //$name=$_GET['name'];
   
	if(mysqli_query($conn,"UPDATE student SET RegNo='".$regno."',csv1='0',csv2='0' WHERE memberID='".$_GET['leadid']."'"))
    {
        
        header("location:list_application.php?formstatus=Payment%20done&enroll_bucket=1&doc_veri_pend=1");
        
    }

	
    
}


if(isset($_GET['is_rejected']) && $_GET['is_rejected']=='1') {
    
     $_GET['is_rejected'];
     $_GET['comment'];
    //die;
 if(mysqli_query($conn,"UPDATE student SET is_reject='1', is_reject_comment='".$_GET['comment']."' WHERE memberID='".$_GET['memberID']."'"))
 {
     
     header('location:list_application.php?formstatus=Payment done&enroll_bucket=1');
 }
 
 
}


if(isset($_GET['is_canceled']) && $_GET['is_canceled']=='1') {
    
    
     $_GET['cancel'];
    //die;
 if(mysqli_query($conn,"UPDATE student SET Cancellation='1', Cancellation_comment='".$_GET['cancel']."' WHERE memberID='".$_GET['memberID']."'"))
 {
     
     header('location:list_application.php?formstatus=Payment done&is_reject=1');
 }
 
 
}
// new updated code 30-04-2021
if(isset($_GET['is_prienroll']) && $_GET['is_prienroll']=='1') {
    
    
     //$_GET['cancel'];
    //die;
    date_default_timezone_set('Asia/Kolkata');
      $currentDatetime=date('Y-m-d H:i:s');
 if(mysqli_query($conn,"UPDATE student SET pri_enrolled='1', pri_enrolled_dt='".$currentDatetime."' WHERE memberID='".$_GET['memberID']."'"))
 {
     
     header('location:list_application.php?formstatus=Payment%20done&enroll_bucket=1&readytopunch=1');
 }
 
 
}


if(isset($_GET['is_account_verified']) && $_GET['is_account_verified']=='1'){
    
    
  //  echo "UPDATE student SET is_account_verified='1' WHERE memberID='".$_GET['memberID']."'"; exit; 
    
    
    mysqli_query($conn,"UPDATE student SET is_account_verified='1',accountverified_date=NOW() WHERE memberID='".$_GET['memberID']."'");
    header('location:list_application.php?formstatus=payment done&accounts_pending=1'); 
    
    
}


if(isset($_GET['action']) && $_GET['action']=='set_counselor_name'){


//echo "UPDATE tbl_students_data SET counsellor_id='".$_GET['value']."' WHERE student_id='".$_GET['id']."'"; exit; 

mysqli_query($conn,"UPDATE student SET counsellor_name='".$_GET['value']."' WHERE memberID='".$_GET['id']."'");
header('location:list_application.php?msg=counselor_name_updated&formstatus=payment done');

}



if(isset($_GET['enroll_bucket']) && $_GET['enroll_bucket']!='1'){
    
    date_default_timezone_set('Asia/Kolkata');
      $currentDate=date('Y-m-d');
    
    if(mysqli_query($conn,"UPDATE student SET enroll_bucket='1', enroll_bucket_date='".$currentDate."',enroll_bucket_by='".$_SESSION['user_id']."' WHERE memberID='".$_GET['memberID']."'"))
    {
        
        header("location:list_application.php?msg=addedtobucket&formstatus=Payment done&enroll_bucket=1");
        
    }
  
}




if(isset($_GET['is_enrolled']) && $_GET['enroll_bucket']!='1'){
    date_default_timezone_set('Asia/Kolkata');
      $currentDate=date('Y-m-d');
    if(mysqli_query($conn,"UPDATE student SET is_enrolled='1', all_verified='1',is_enroll_date='".$currentDate."' WHERE memberID='".$_GET['memberID']."'")){
        
        header("location:list_application.php?msg=enrollmentcomplete&formstatus=Payment done&enroll_bucket=1");
        
    }
  
}


if(isset($_GET['action']) && $_GET['action']=='utr_number_update'){
    
    
    mysqli_query($conn,"UPDATE student SET utr_number='".$_GET['value']."' WHERE memberID='".$_GET['memberID']."'");
    header('location:list_application.php?formstatus=Payment done&accounts_pending=1&action=utr_number_updated');
    
    
}




?>

<script type='text/javascript' src='http://code.jquery.com/jquery-latest.min.js'></script>


	
	<script language="javascript" type="text/javascript">
	
	
	function setcounselor(value,id){


         //alert(value);
         //alert(id);

         var conf = confirm("Are you sure want to set name?");
          if(conf==true) {
             
            window.location.href='list_application.php?action=set_counselor_name&id='+id+'&value='+value;
            exit;
           
           }
          
         
        }
	
	function sendtobucket(id){
	    
	   var conf = confirm("Are You Sure Sent To Bucket?");
	   
	    if(conf==true){
	       
	      window.location.href='list_application.php?enroll_bucket&formstatus=Payment done&memberID='+id;    
	       
	   }
	    
	}
	
	
	 function sendtoenrolled(id){
	    
	   var conf = confirm("Is it Enrolled?");
	   
	    if(conf==true){
	       
	      window.location.href='list_application.php?is_enrolled&formstatus=Payment done&memberID='+id;    
	       
	   }
	    
	}
	
	
	
  function sendtoreject(id){
	    
	   var comment = prompt("Please enter your comment for reject this student");
  if (comment != null) {
   // document.getElementById("demo").innerHTML ="Hello " + comment + "! How are you today?";
   
    //alert(comment);
    
     window.location.href='list_application.php?is_rejected=1&comment='+comment+'&formstatus=Payment done&enroll_bucket=1&memberID='+id;
  }
	    
	}
	
	function sendtocancel(id){
	    
	   var cancel = prompt("Please enter your comment for cancellation this student");
  if (cancel != null) {
   // document.getElementById("demo").innerHTML ="Hello " + comment + "! How are you today?";
   
    //alert(comment);
    
     window.location.href='list_application.php?is_canceled=1&cancel='+cancel+'&formstatus=Payment done&enroll_bucket=1&memberID='+id;
  }
	    
	}
	
	function sendttoprienroll(id){
	    
	 var conf = confirm("Are you sure sent to Pri.Enrolled?");
	 if(conf==true){
	     
	 window.location.href='list_application.php?is_prienroll=1&formstatus=Payment done&memberID='+id; 
	     
	 }
	 
	    
	}
	
	function getsetpayment(id){
	    
	 var conf = confirm("Are you sure sent to payment done?");
	 if(conf==true){
	     
	 window.location.href='list_application.php?is_account_verified=1&formstatus=Payment done&memberID='+id; 
	     
	 }
	 
	    
	}
	
	
	function getsetutr(regno,leadid,name){
           // alert("Reg--"+ regno);
		    //alert("LeadID--"+ leadid);
		    //alert("Name--"+ name);
		var conf  = confirm("Are u sure Transation ID are verified?");
		if(conf==true){
		
       if(regno!='')
      {
          alert('value'+regno);
          window.location.href='list_application.php?regno='+regno+'&leadid='+leadid+'&name='+name;
          
      }
		}
   
      
  }

	</script>
	
	

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            MITSDE 
            <small>Applicants</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">Listing</a></li>
            <li class="active">Applications</li>
          </ol>
        </section>

       

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> <? if(!isset($_GET['formstatus'])) { echo "All Applications";  } else { ?> Application with status as <?=ucfirst($_GET['formstatus']); } ?></h3>
                </div><!-- /.box-header -->
                
                
                    <? if($_GET['enroll_bucket']==1) { ?>
                
                    <form method="POST" style="text-align:center;">
                       <input type="date" name="fromdate">
                       <input type="date" name="todate">
                       <input type="submit" name="submit">
                    </form>
                    
                    <? } ?>
                
                
                
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        
                        <th>Member ID</th>
                       
                        <th>Email-ID</th> 
                        <th>Phone Number</th>
                      
                        
                      
                      </tr>
                    </thead>
                    
                    <tbody>
					
					<?php
					
					//echo "</br>SELECT * FROM student WHERE lastPage='".$getpagename."' ORDER BY memberID DESC";
					    
						$getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE lastPage='".$getpagename."' OR lastPage='page4_form.php' ORDER BY memberID DESC"); 
					
					     
					    while($setstuddata = mysqli_fetch_array($getstuddata)) {


                           //$getsetdata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_students_data WHERE student_id='".$setstuddata['memberID']."'"));
                           
                          // $checksop = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_btech_18_confirmation WHERE memberID='".$setstuddata['memberID']."'"));
                           


					    
					?>
					
                      <tr>
		              
		                
		                
		                <td><?=$setstuddata['memberID']?></td>
		                
		                 
                        <td><a href="candidate-details-verification.php?id=<?=$setstuddata['memberID']?>"><?php echo $setstuddata['email'];?></a></td>  
                        
                        <td><?php echo $setstuddata['phonenumber'];?></td>
                        
                     
                        
                        
					</tr>
					<?php 
					        
					    } 
					?> 
                     
                      
                    </tbody>
             
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
