<?php 
ob_start();
session_start();
include("include/connection.php");
global $conn;
include("include/header.php");
error_reporting(0);


$accessrights = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_access_rights WHERE user_id='".$_SESSION['user_id']."'"));

//echo '<pre>'; print_r($accessrights); 



if(isset($_POST['submit'])){
    
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


/*if(isset($_GET['is_rejected']) && $_GET['is_rejected']=='1') {
    
    
 if(mysqli_query($conn,"UPDATE student SET is_reject='1', is_doc_verified='1' WHERE memberID='".$_GET['memberID']."'"))
 {
     
     header('location:list_application.php?formstatus=Payment done&enroll_bucket=1');
 }
 
 
 
}*/

if(isset($_GET['is_rejected']) && $_GET['is_rejected']=='1') {
    
     $_GET['is_rejected'];
     $_GET['comment'];
    //die;
 if(mysqli_query($conn,"UPDATE student SET is_reject='1', is_doc_verified='1', is_reject_comment='".$_GET['comment']."' WHERE memberID='".$_GET['memberID']."'"))
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
    
    if(mysqli_query($conn,"UPDATE student SET enroll_bucket='1', enroll_bucket_date=NOW(),enroll_bucket_by='".$_SESSION['user_id']."' WHERE memberID='".$_GET['memberID']."'")){
        
        header("location:list_application.php?msg=addedtobucket&formstatus=Payment done&enroll_bucket=1");
        
    }
  
}




if(isset($_GET['is_enrolled']) && $_GET['enroll_bucket']!='1'){
    
    if(mysqli_query($conn,"UPDATE student SET is_enrolled='1', all_verified='1',is_enroll_date=NOW() WHERE memberID='".$_GET['memberID']."'")){
        
        header("location:list_application.php?msg=enrollmentcomplete&formstatus=Payment done&enroll_bucket=1");
        
    }
  
}






if(isset($_GET['action']) && $_GET['value']!=''){


if($_GET['action']=='is_paid_sales'){
 mysqli_query($conn,"UPDATE tbl_students_data SET is_paid_sales='1' WHERE student_id='".$_GET['value']."' ");
 header('location:list_application.php?msg=sales_paid');
}

if($_GET['action']=='is_paid_accounts'){
 mysqli_query($conn,"UPDATE tbl_students_data SET is_paid_accounts='1' WHERE student_id='".$_GET['value']."'");
 header('location:list_application.php?msg=account_paid');
}

if($_GET['action']=='is_address_documents_verified'){
 mysqli_query($conn,"UPDATE tbl_students_data SET is_address_documents_verified='1' WHERE student_id='".$_GET['value']."'");
 header('location:list_application.php?msg=documents_verified');
}


if($_GET['action']=='is_receipt_send_emailed'){
 mysqli_query($conn,"UPDATE tbl_students_data SET is_receipt_send_emailed='1' WHERE student_id='".$_GET['value']."'");
header('location:list_application.php?msg=receipt_emailed');
}




}


if(isset($_GET['action']) && $_GET['action']=='utr_number_update'){
    
    
    mysqli_query($conn,"UPDATE student SET utr_number='".$_GET['value']."' WHERE memberID='".$_GET['memberID']."'");
    header('location:list_application.php?formstatus=Payment done&accounts_pending=1&action=utr_number_updated');
    
    
}




?>

<script type='text/javascript' src='http://code.jquery.com/jquery-latest.min.js'></script>

<script>

   function setfunctionaction(val,id){
  
   var conf  = confirm("Kindly confirm");
   if(conf==true){




   window.location.href='list_application.php?action='+id+'&value='+val;

   }

  }






    function fun(id) 
    {
   //alert('incomplete 10th details');"
   document.getElementById(id).innerHTML+="<li>"+"incomplete 10th details";
   document.getElementById("10"+id).style.visibility="hidden";
   return true;
   }
    function funn(id) 
    {
  //alert('incomplete 12th details');
   document.getElementById(id).innerHTML+="<li>"+"incomplete 12th details";
   document.getElementById("12"+id).style.visibility="hidden";
   return true;
   }
  function foo(id) 
  {
   //alert('invalid sop');
   document.getElementById(id).innerHTML+="<li>"+"Invalid SoP";
   document.getElementById("14"+id).style.visibility="hidden";
   return true;
  }
  function fun1(id) 
  {
  // alert('invalid photo');
   document.getElementById(id).innerHTML+="<li>"+"Invalid Photo";
   document.getElementById("16"+id).style.visibility="hidden";
   return true;
  }
  function fun2(id) 
  {
  // alert('invalid 10th documents');
   document.getElementById(id).innerHTML+="<li>"+"Invalid 10th Doc";
   document.getElementById("18"+id).style.visibility="hidden";
   return true;
  }
  function fun3(id) 
  {
   //alert('invalid 12th documents');
   document.getElementById(id).innerHTML+="<li>"+"Invalid 12th Doc";
   document.getElementById("20"+id).style.visibility="hidden";
   return true;
  }
  function fun4(id) 
   {
   document.getElementById(id).innerHTML+="<li>"+"Unacceptable Caste Certificate";
   document.getElementById("22"+id).style.visibility="hidden";
   return true;
   }
   function fun5(id) 
   {
	  
	//Eligiblity
    loadDoc(id);
    
    return true;
   }
   function fun6(id) 
   {
	
	mailupdate(id);
 
    return true;
   }

    function loadDoc(id) {
		
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
//document.getElementById("demo").innerHTML =this.responseText;
     }
   };
  xhttp.open("GET", "update.php?id="+id, true);
  xhttp.send();
  }

   function mailupdate(id) {
	var mailbody=document.getElementById("mail"+id).innerHTML;
	var to=document.getElementById("to"+id).value;
	var pto=document.getElementById("toparent"+id).value;
	var num=document.getElementById("number"+id).value;
	var pnum=document.getElementById("pnumber"+id).value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        //document.getElementById("demo").innerHTML =this.responseText;
    }
  };
    xhttp.open("GET", "mailupdate.php?id="+id+"&mail="+mailbody+"&to="+to+"&pto="+pto+"&num="+num+"&pnum="+pnum, true);

    xhttp.send();
 }


  function getsetutr(val,id){
      
  
   
      if(val!=''){
          
          window.location.href='list_application.php?formstatus=Payment done&accounts_pending=1&value='+val+'&memberID='+id+'&action=utr_number_update';
          
      }
   
   
      
  }




	</script>
	
	<script language="javascript" type="text/javascript">
	
	   function sopsubmit(id,value){
		   var sop_submit = document.getElementById(id).checked;
            if(sop_submit==true){
				  $.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'sop_update_true'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
        }
		
		else {
			
			$.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'sop_update_false'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
		}
		
	   }
	
	  function astsubmit(id,value){
		   var ast_submit = document.getElementById(id).checked;
            if(ast_submit==true){
				  $.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'ast_update_true'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
        }
		
		else {
			
			$.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'ast_update_false'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
		}
		
	   }
	
	
	function videosubmit(id,value){
		   var video_submit = document.getElementById(id).checked;
            if(video_submit==true){
				  $.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'video_submit_true'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
        }
		
		else {
			
			$.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'video_submit_false'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
		}
		
	   }
	
	
	
	 function offersubmit(id,value){
		   var offer_submit = document.getElementById(id).checked;
            if(offer_submit==true){
				  $.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'offer_submit_true'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
        }
		
		else {
			
			$.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'offer_submit_false'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
		}
		
	   }
	
	function confirmsent(id,value){
		   var confirm_sent = document.getElementById(id).checked;
            if(confirm_sent==true){
				  $.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'confirm_sent_true'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
        }
		
		else {
			
			$.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'confirm_sent_false'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
		}
		
	   }
	
	
	
	function admissionconfirm(id,value){
		   var admission_confirm = document.getElementById(id).checked;
            if(admission_confirm==true){
				  $.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'admission_confirm_true'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
        }
		
		else {
			
			$.ajax({
		          type: "POST",
		          url: "ajax/ajax.php",
		          data:{value:value,process:'admission_confirm_false'},
		          success: function(result)
					{
					    if(parseInt(result)>0)
						 {
							
						 }
						 else
						 {
							
						 }
					}
				});
				
		}
		
	   }
	
	
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
	
	
	 /*function sendtoreject(id){
	    
	   var conf = confirm("Are you sure want to reject the application?");
	   
	    if(conf==true){
	       
	      window.location.href='list_application.php?is_rejected=1&formstatus=Payment done&enroll_bucket=1&memberID='+id;    
	       
	   }
	    
	}*/
	
	
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
	
	
	
	function getsetpayment(id){
	    
	 var conf = confirm("Are you sure sent to payment done?");
	 if(conf==true){
	     
	 window.location.href='list_application.php?is_account_verified=1&formstatus=Payment done&memberID='+id; 
	     
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
                  <h3 class="box-title"> <? if(!isset($_GET['formstatus'])) { echo "All Applications";  } else { ?> Student Overall Report <? } ?></h3>
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
                          
                        
                        <th style="min-width:50px;">Member ID</th>
                        <th style="min-width:200px;">Student name</th>
                        <th style="min-width:200px;">Course name</th>
                        <th style="min-width:100px;">Phone Number</th> 
                        <th style="min-width:150px;">Email ID</th>
                        <th style="min-width:70px;">Pay date</th>
                        <th style="min-width:70px;">Enroll date</th>
                        <th style="min-width:70px;">Page Status</th>
                        <th style="min-width:150px;">R.Status</th>
                        <th style="min-width:150px;">Remark</th>
                        <th style="min-width:150px;">C.Status</th>
                        <th style="min-width:150px;">Remark</th>
                        <th style="min-width:150px;">Counselor Name</th>
                       
                       
                      </tr>
                    </thead>
                    <tbody>
					
					<?php
					
					
					$getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE enroll_bucket ='1'  ORDER BY memberID DESC"); 
					     $id =1;
					    while($setstuddata = mysqli_fetch_array($getstuddata)) {

                    	?>
					
                      <tr>
		               
		                <td style="min-width:50px;"><?=$setstuddata['memberID']?></td>
		                <td width="60" style="min-width:200px;"><?php echo ucwords(strtolower($setstuddata['name']." ".$setstuddata['lastname']));?></td>
		                <td style="min-width:200px;"><?=$setstuddata['desciplines']?></td>
                        <td style="min-width:100px;"><?php echo $setstuddata['phonenumber'];?></td>
                        <td style="min-width:250px;"><?php echo $setstuddata['email'];?></td>  
                        <td style="min-width:70px;"><?php if($setstuddata['paydate']!='0000-00-00') { echo date("d-m-Y", strtotime($setstuddata['paydate'])); } ?></td>
                        <td style="min-width:70px;"><?php if($setstuddata['paydate']!='0000-00-00') { echo date("d-m-Y", strtotime($setstuddata['enroll_bucket_date'])); } ?></td>
                        <td style="min-width:70px;"><?=$setstuddata['lastPage']?></td>
                        <td style="min-width:150px;"><?php if($setstuddata['is_reject']=='1') { ?> Rejected<?php } else { ?> NULL <?php }?></td>
                        <td style="min-width:150px;"><?php echo ucfirst($setstuddata['is_reject_comment']);?></td>
                        <td style="min-width:150px;"><?php if($setstuddata['Cancellation']=='1') { ?> Canceled<?php } else { ?> NULL <?php }?></td>
                        <td style="min-width:150px;"><?php echo ucfirst($setstuddata['Cancellation_comment']);?></td>
                        
                        <td style="min-width:150px;"><?=$setstuddata['counsellor_name'];?></td>
                         
                        
		            	
                         
					</tr>
					<?php $id++; } ?> 
                     
                      
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
