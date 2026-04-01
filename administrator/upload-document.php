<?php 
ob_start();
session_start();
include("include/connection.php");
global $conn;
include("include/header.php");
error_reporting(0);
?>

<script type='text/javascript' src='http://code.jquery.com/jquery-latest.min.js'></script>
<script>
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
	
	
	
	
	</script>
	
	

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Avantika 
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
                		
                		<?php
								
									
									
									
									mysqli_query($conn,"UPDATE student SET name='".$_POST['name']."', lastname='".$_POST['lastname']."',  phonenumber='".$_POST['phonenumber']."',dateofbirth='".$_POST['dateofbirth']."',category='".$_POST['category']."',caddress='".$_POST['caddress']."',ccity='".$_POST['ccity']."',cpincode='".$_POST['cpincode']."',cstate='".$_POST['cstate']."',mpdomicile='".$_POST['mpdomicile']."',parentfname='".$_POST['parentfname']."',parentlname='".$_POST['parentlname']."',parentmname='".$_POST['parentmname']."',parentemail='".$_POST['parentemail']."'  WHERE memberID='".$_GET['id']."'");
										
									$getmetadata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM student WHERE memberID='".$_GET['id']."'"));
									$getmetadatadoc = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_students_data WHERE student_id='".$_GET['id']."'"));
									
									
									
					
									//echo '<script language="javascript">';
									//echo 'alert("Candidate Profile Updated")';
									//echo '</script>';
								
										//$mailid = $_GET['memberID'];
                			
                			//echo $mailid;
                			
                			
                			
                		?>
               <section class="content">
             <div class="row">
            <!-- left column -->
            <div class="col-md-12">
				<form role="form" action="upload-document.php?id=<?=$_GET['id']?>" method="POST" enctype="multipart/form-data">
					<div class="col-md-6">
					  <!-- general form elements -->
					  
						<div class="box-header with-border">
						  <h2 class="box-title"><?=ucfirst($getmetadata['name'])."&nbsp;".ucfirst($getmetadata['lastname']);?> Profile</h2>
						</div><!-- /.box-header -->
						<!-- form start -->
						
						  <div class="box-body">
							<div class="form-group">
							  
							<input type="hidden" name="memberID" class="form-control" value="<?=ucfirst($getmetadata['memberID'])?>" >
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">First Name</label>
							<input type="text" name="name" class="form-control" value="<?=ucfirst($getmetadata['name'])?>" readonly>
							</div>
												
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Gender </label>
							<input type="text" class="form-control" name="gender" value="<?=ucfirst($getmetadata['gender'])?>" readonly>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Category</label>
								<input type="text" class="form-control" name="category" value="<?=ucfirst($getmetadata['category'])?>" readonly>
								
								</div>
							<div class="form-group">
							  <label for="exampleInputPassword1">Phone Number </label>
							<input type="text" class="form-control" name="phonenumber" value="<?=ucfirst($getmetadata['phonenumber'])?>" readonly>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1">Application ID</label>
							<input type="text" class="form-control" name="applicationid" value="<?=ucfirst($getmetadata['applicationid'])?>" readonly>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1">Program </label>
							<input type="text" class="form-control" name="programmesugpg" value="<?=ucfirst($getmetadata['programmesugpg'])?>" readonly>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Permanent Address</label>
							<input type="text" name="address" class="form-control" value="<?=ucfirst($getmetadata['address'])?>" readonly>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Current City</label>
							<input type="text" name="ccity" class="form-control" value="<?=ucfirst($getmetadata['ccity'])?>" readonly>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Parent First Name</label>
							<input type="text" name="parentfname" class="form-control" value="<?=ucfirst($getmetadata['parentfname'])?>" readonly>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Parent Middle Name</label>
							<input type="text" name="parentmname" class="form-control" value="<?=ucfirst($getmetadata['parentmname'])?>" readonly>
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Photo </label>
							<img src="http://avantikauniversity.edu.in/apply/<?php echo $getmetadatadoc['photo'];?>" width="150" height="150" / readonly>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">SSC mark sheet </label>
							<a href="http://avantikauniversity.edu.in/apply/<?php echo $getmetadatadoc['ssc'];?>" target="_blank">Click for Document</a>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Transfer Certificate</label>
							<a href="http://avantikauniversity.edu.in/apply/<?php echo $getmetadatadoc['transfer'];?>" target="_blank">Click for Document</a>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Domicile Certificate</label>
							<a href="http://avantikauniversity.edu.in/apply/<?php echo $getmetadatadoc['nationality'];?>" target="_blank">Click for Document</a>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Caste Validity</label>
							<a href="http://avantikauniversity.edu.in/apply/<?php echo $getmetadatadoc['castevalidity'];?>" target="_blank">Click for Document</a>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Graduation Certificate</label>
							<a href="http://avantikauniversity.edu.in/apply/<?php echo $getmetadatadoc['graduationcertificate'];?>" target="_blank">Click for Document</a>
							
							</div>
						  </div><!-- /.box-body -->

						  
					 

					  <!-- Form Element sizes -->
					 
					</div>
										<div class="col-md-6">
					  <!-- general form elements -->
					  
						
						<!-- form start -->
							<br><br><br>
						  <div class="box-body">
							<div class="form-group">
							  <label for="exampleInputPassword1">Last Name </label>
							<input type="text" class="form-control" name="lastname" value="<?=ucfirst($getmetadata['lastname'])?>" readonly>
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Date of Birth </label>
							<input type="text" class="form-control" name="dateofbirth" value="<?=ucfirst($getmetadata['dateofbirth'])?>" readonly>
							
							</div>
												
							<div class="form-group">
							  <label for="exampleInputPassword1">E-mail</label>
							<input type="text" class="form-control" name="email" value="<?=ucfirst($getmetadata['email'])?>" readonly>
							
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Domicile</label>
								<input type="text" class="form-control" name="mpdomicile" value="<?=ucfirst($getmetadata['mpdomicile'])?>" readonly>
								
								</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Correspondence  Address</label>
							<input type="text" class="form-control" name="caddress" value="<?=ucfirst($getmetadata['caddress'])?>" readonly>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Current State</label>
							<input type="text" name="cstate" class="form-control" value="<?=ucfirst($getmetadata['cstate'])?>" readonly>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1">Current Pincode</label>
							<input type="text" class="form-control" name="cpincode" value="<?=ucfirst($getmetadata['cpincode'])?>" readonly>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Parent Contact Number</label>
							<input type="text" name="parentmobilenumber" class="form-control" value="<?=ucfirst($getmetadata['parentmobilenumber'])?>" readonly>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1">Parent Last Name</label>
							<input type="text" class="form-control" name="parentlname" value="<?=ucfirst($getmetadata['parentlname'])?>" readonly>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Parent Mail-ID</label>
							<input type="text" name="parentemail" class="form-control" value="<?=ucfirst($getmetadata['parentemail'])?>" readonly>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Entrance </label>
							<a href="http://avantikauniversity.edu.in/apply/<?php echo $getmetadatadoc['entrance'];?>" target="_blank">Click for Document</a>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">HSC mark sheet </label>
							<a href="http://avantikauniversity.edu.in/apply/<?php echo $getmetadatadoc['hsc'];?>" target="_blank">Click for Document</a>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Nationality Certificate</label>
							<a href="http://avantikauniversity.edu.in/apply/<?php echo $getmetadatadoc['nationality'];?>" target="_blank">Click for Document</a>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Caste Certificate</label>
							<a href="http://avantikauniversity.edu.in/apply/<?php echo $getmetadatadoc['castecertificate'];?>" target="_blank">Click for Document</a>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Non Creamy Layer</label>
							<a href="http://avantikauniversity.edu.in/apply/<?php echo $getmetadatadoc['noncreamy'];?>" target="_blank">Click for Document</a>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Experience Certificate</label>
							<a href="http://avantikauniversity.edu.in/apply/<?php echo $getmetadatadoc['experience'];?>" target="_blank">Click for Document</a>
							
							</div>
						  </div><!-- /.box-body -->
							
						
						
					  

					  <!-- Form Element sizes -->
					 
					</div>

           

               

            </div><!--/.col (left) -->
			<!-- <a href="avt_admin_uploads.php?id=<?=$_GET['id']?>">Upload Document</a>  -->
						</form>
            <!-- right column -->
        
          </div> 
<form action="avt_admin_uploads.php?id=<?=$_GET['id']?>">
 <input type="submit" id="submit" value="Upload Documents">
</form>		  <!-- /.row -->
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
