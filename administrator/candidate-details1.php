<?php 
ob_start();
session_start();
include("include/connection.php");
global $conn;
include("include/header.php");
error_reporting(0);





if(isset($_GET['enrollverified']) && $_GET['enrollverified']=='1'){
    
    //mysqli_query($conn,"UPDATE student SET enrollment_verified='1' WHERE memberID='".$_GET['id']."'");
    
    
    
    
    header('location:candidate-details.php?id='.$_GET['id'].'&enrollmentveridone');
    
}



if(isset($_GET['docverfied']) && $_GET['docverfied']=='1') {
   // echo "UPDATE student SET is_doc_verified='1' AND is_reject='0' WHERE memberID='".$_GET['id']."'";
    //die;
    //mysqli_query($conn,"UPDATE student SET is_doc_verified='1' WHERE memberID='".$_GET['id']."'");
    header('location:candidate-details.php?id='.$_GET['id'].'&docverificationdone');
    
}

if(isset($_GET['sendverified']) && $_GET['sendverified']=='1') {
   // echo "UPDATE student SET is_doc_verified='1' AND is_reject='0' WHERE memberID='".$_GET['id']."'";
    //die;
    //mysqli_query($conn,"UPDATE student SET is_reject='0' WHERE memberID='".$_GET['id']."'");
    header('location:candidate-details.php?id='.$_GET['id'].'&sendtodoc_done');
    
}



if(isset($_GET['allverfied']) && $_GET['allverfied']=='1') {
    $veried=$_GET['allverfied'];
   // mysqli_query($conn,"UPDATE student SET all_verified='1' WHERE memberID='".$_GET['id']."'");
    
  
    
    header('location:candidate-details.php?id='.$_GET['id'].'&allverificationdone');
    
}





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




function docverified(id){

var conf  = confirm("Are u sure documents are verified?");
if(conf==true){
window.location.href='candidate-details.php?id='+id+'&docverfied=1';
}

}

function senddocverified(id){

var conf  = confirm("Are u sure send to doc verified?");
if(conf==true){
window.location.href='candidate-details.php?id='+id+'&sendverified=1';
}

}



function enrollverified(id){
    
var conf  = confirm("Are u sure Emrollment verification done ?");

if(conf==true){
 
 window.location.href='candidate-details.php?id='+id+'&enrollverified=1';

}    
    
}


function allverified(id){


var conf  = confirm("Are u sure all verified and check ok?");
if(conf==true){
window.location.href='candidate-details.php?id='+id+'&allverfied=1';
}

}





	</script>
	

	

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
                		
                		<?php
                			$memberid1 = $_GET['id'];
                			
                			//echo $mailid;
                	//	echo "</br>sql-->"."SELECT * FROM student WHERE memberID='".$_GET['id']."'";
                			$getmetadata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM student WHERE memberID='".$_GET['id']."'"));
                			$getmetadatadoc = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_students_data WHERE student_id='".$_GET['id']."'"));
                		?>
						
               <section class="content">
			   
			   <?php
								if(isset($_POST['update'])) 
								{
									extract($_POST);
									
								
									
							                    $programname=explode(",",$_POST['programmesugpg']);
							                    $sp=explode(",",$_POST['desciplines']);
							                    
							                    $programname[0];
							                    $programname[1];
							                 
							                    $sp[0];
							                    $sp[1];
								
								
							//	die;
							 		 
							 		
							 		
							        $checkappid = mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as cnt FROM student WHERE memberID='".$_GET['id']."'"));
							
							       
			//echo "UPDATE student SET parentemail='".$_POST['parentemail']."',companyname='".$_POST['companyname']."',middlename='".$_POST['middlename']."',aadhar='".$_POST['aadhar']."', name='".$_POST['name']."',mothername='".$_POST['mothername']."', lastname='".$_POST['lastname']."', gender='".$_POST['gender']."',programmesugpg='".$programname[0]."',CourseID='".$programname[1]."',desciplines='".$sp[0]."',SpecializationID='".$sp[1]."', phonenumber='".$_POST['phonenumber']."',dateofbirth='".$_POST['dateofbirth']."',institute='".$_POST['institute']."',parentfname='".$_POST['parentfname']."',parentlname='".$_POST['parentlname']."',parentmobilenumber='".$_POST['parentmobilenumber']."',parentemail='".$_POST['parentemail']."'  WHERE memberID='".$_GET['id']."'";
		//echo "UPDATE student SET alternate_email='".$_POST['alternate_email']."', email='".strtolower($_POST['email'])."', parentemail='".$_POST['parentemail']."',companyname='".$_POST['companyname']."',middlename='".$_POST['middlename']."',aadhar='".$_POST['aadhar']."', name='".$_POST['name']."',mothername='".$_POST['mothername']."', lastname='".$_POST['lastname']."', gender='".$_POST['gender']."',programmesugpg='".$programname[0]."',CourseID='".$programname[1]."',desciplines='".$sp[0]."',SpecializationID='".$sp[1]."', phonenumber='".$_POST['phonenumber']."',dateofbirth='".$_POST['dateofbirth']."',institute='".$_POST['institute']."',parentfname='".$_POST['parentfname']."',parentlname='".$_POST['parentlname']."',parentmobilenumber='".$_POST['parentmobilenumber']."',parentemail='".$_POST['parentemail']."'  WHERE memberID='".$_GET['id']."'";
		//die;
									
									 $getsucc = mysqli_query($conn,"UPDATE student SET alternate_email='".$_POST['alternate_email']."', email='".strtolower($_POST['email'])."', parentemail='".$_POST['parentemail']."',companyname='".$_POST['companyname']."',middlename='".$_POST['middlename']."',aadhar='".$_POST['aadhar']."', name='".$_POST['name']."',mothername='".$_POST['mothername']."', lastname='".$_POST['lastname']."', gender='".$_POST['gender']."',programmesugpg='".$programname[0]."',CourseID='".$programname[1]."',desciplines='".$sp[0]."',SpecializationID='".$sp[1]."', phonenumber='".$_POST['phonenumber']."',dateofbirth='".$_POST['dateofbirth']."',institute='".$_POST['institute']."',parentfname='".$_POST['parentfname']."',parentlname='".$_POST['parentlname']."',parentmobilenumber='".$_POST['parentmobilenumber']."',parentemail='".$_POST['parentemail']."'  WHERE memberID='".$_GET['id']."'");
										//echo "UPDATE student SET name='".$_POST['name']."',mothername='".$_POST['mothername']."', lastname='".$_POST['lastname']."', gender='".$_POST['gender']."',programmesugpg='".$_POST['programmesugpg']."',desciplines='".$_POST['desciplines']."', phonenumber='".$_POST['phonenumber']."',dateofbirth='".$_POST['dateofbirth']."',institute='".$_POST['institute']."',elective_b1='".$_POST['elective_b1']."',elective_b2='".$_POST['elective_b2']."', address='".$_POST['address']."',caddress='".$_POST['caddress']."',ccity='".$_POST['ccity']."',cpincode='".$_POST['cpincode']."',cstate='".$_POST['cstate']."',mpdomicile='".$_POST['mpdomicile']."',parentfname='".$_POST['parentfname']."',parentlname='".$_POST['parentlname']."',parentmobilenumber='".$_POST['parentmobilenumber']."',parentemail='".$_POST['parentemail']."',yearofpassing10='".$_POST['yearofpassing10']."',year12='".$_POST['year12']."',school10='".$_POST['school10']."',school12='".$_POST['school12']."',score10='".$_POST['score10']."',score12='".$_POST['score12']."',stream12='".$_POST['stream12']."',graduation='".$_POST['graduation']."',examgraduation='".$_POST['examgraduation']."',yearofpassinggraduation='".$_POST['yearofpassinggraduation']."',scoregraduation='".$_POST['scoregraduation']."',otherqualification='".$_POST['otherqualification']."',examotherqualification='".$_POST['examotherqualification']."',yearofpassingotherqualification='".$_POST['yearofpassingotherqualification']."',scoreotherqualification='".$_POST['scoreotherqualification']."',postgraduation='".$_POST['postgraduation']."',exampostgraduation='".$_POST['exampostgraduation']."',yearofpassingpostgraduation='".$_POST['yearofpassingpostgraduation']."',scorepostgraduation='".$_POST['scorepostgraduation']."'  WHERE memberID='".$_GET['id']."'"; exit;
										$getsucc = mysqli_query($conn,"UPDATE tbl_transactions_details SET email='".strtolower($_POST['email'])."'  WHERE memberID='".$_GET['id']."'");
										if($getsucc){
										    
										    header('location:candidate-details1.php?msg=Updated&id='.$_GET['id']);
										   
										}
										//echo "</br>SELECT * FROM student WHERE memberID='".$_GET['id']."'";
									$getmetadata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM student WHERE memberID='".$_GET['id']."'"));
									
									
									$getmetadatadoc = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_students_data WHERE student_id='".$_GET['id']."'"));
									
									
					
							
								}
						
										
                			
                		
                		
                			
                		?>
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
				<form role="form" action="#" method="POST" enctype="multipart/form-data">
					<div class="col-md-6">
					  <!-- general form elements -->
					  
						<div class="box-header with-border">
						  <h2 class="box-title"><?=ucfirst($getmetadata['name'])."&nbsp;".ucfirst($getmetadata['lastname']);?> Profile</h2>
						  <label style="color:#006600;"><?php if(isset($_GET['msg']))
							                                  {
															  echo $msg=$_GET['msg'];
															  }?></label> 
						</div><!-- /.box-header -->
						<!-- form start -->
						
						  <div class="box-body">
							<div class="form-group">
							  
							<input type="hidden" name="memberID" class="form-control" value="<?=ucfirst($getmetadata['memberID'])?>" >
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">First Name</label>
							<input type="text" name="name" class="form-control" value="<?=ucfirst($getmetadata['name'])?>" >
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1">Last Name </label>
							  <input type="text" class="form-control" name="lastname" value="<?=ucfirst($getmetadata['lastname'])?>">
							</div>
							
								<div class="form-group">
							  <label for="exampleInputEmail1">Father Name</label>
							<input type="text" name="parentfname" class="form-control" value="<?=ucfirst($getmetadata['parentfname'])?>">
							
							</div>				
							
							<div class="form-group">
							     <label for="exampleInputEmail1">Gender</label>
							  <select name="gender" required style="font-size:11px; margin-top:10px;width:100%" class="dp0 form-control" id="item4_select_1" >
                        <option value="">--Select--</options>
                        <option value="Male" <?php if(ucfirst($getmetadata['gender'])=="Male") echo "selected";?>>Male </options>
                        <option value="Female" <?php if(ucfirst($getmetadata['gender'])=="Female") echo "selected";?>>Female</options>
                        <option value="Transgender" <?php if(ucfirst($getmetadata['gender'])=="Transgender") echo "selected";?>>Transgender</options>
                    </select>
							
							</div>
							    
								
								
							<div class="form-group">
							  <label for="exampleInputPassword1">Phone Number </label>
							<input type="text" class="form-control" name="phonenumber" value="<?=ucfirst($getmetadata['phonenumber'])?>">
							</div>
								<div class="form-group">
							  <label for="exampleInputPassword1">alternate phone number </label>
							<input type="text" class="form-control" name="alternate_no" value="<?=ucfirst($getmetadata['alternate_no'])?>">
							
							</div>
								<div class="form-group">
							  <label for="exampleInputPassword1">Adhar number </label>
							<input type="text" class="form-control" name="aadhar" value="<?=ucfirst($getmetadata['aadhar'])?>">
							
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1">parent email </label>
							<input type="text" class="form-control" name="parentemail" value="<?=ucfirst($getmetadata['parentemail'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Program </label>
							
							
<select  name="programmesugpg" class="form-control">
<option value="" >--Select--</option>
<?php 
          $getProgram=mysqli_query($conn,"SELECT * FROM `CourseERP`");
             while($Program = mysqli_fetch_array($getProgram)) {           
?>
<option value="<?=$Program['CourseName'].','.$Program['CourseID']?>" <? if($Program['CourseName']==$getmetadata['programmesugpg']) { echo "SELECTED='SELECTED'"; }?>><?=$Program['CourseName']?></option>

<?php
}
?>

<!--<option value="Test Course" <? //if($desciplines=='Test Course') { echo "SELECTED='SELECTED'"; }?>>Test Course</option>-->
</select>
							
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
							  <label for="exampleInputEmail1">Middle Name</label>
							<input type="text" name="middlename" class="form-control" value="<?=ucfirst($getmetadata['middlename'])?>">
							
							</div>
						      
						      
						    <div class="form-group">
							  <label for="exampleInputPassword1">Mother's Name </label>
							  <input type="text" class="form-control" name="mothername" value="<?=ucfirst($getmetadata['mothername'])?>">
							</div>
						      
							
							
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Date of Birth </label>
							<!--<input type="text" class="form-control" name="dateofbirth" value="<?//=ucfirst($getmetadata['dateofbirth'])?>">-->
							<input type="date" class="form-control" id="dateofbirth" value="<?=ucfirst($getmetadata['dateofbirth'])?>" style="width:287px;" name="dateofbirth">
							
							</div>
												
							<div class="form-group">
							  <label for="exampleInputPassword1">E-mail</label>
							<input type="text" class="form-control" name="email" value="<?=ucfirst($getmetadata['email'])?>" >
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Alternate e-mail</label>
							<input type="text" class="form-control" name="alternate_email" value="<?=ucfirst($getmetadata['alternate_email'])?>">
							
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1">Company Name</label>
							<input type="text" class="form-control" name="companyname" value="<?=ucfirst($getmetadata['companyname'])?>">
							
							</div>
							
							
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Course Name</label>
						
							
							<select  name="desciplines" class="form-control">
<option value="" >--Select--</option>
<?php 
          $getspecilization=mysqli_query($conn,"SELECT * FROM `SpecializationERP`");
             while($setspecilization = mysqli_fetch_array($getspecilization)) {           
?>
<option value="<?=$setspecilization['SpecializationName'].','.$setspecilization['SpecializationID']?>" <? if($setspecilization['SpecializationName']==$getmetadata['desciplines']) { echo "SELECTED='SELECTED'"; }?>><?=$setspecilization['SpecializationName']?></option>

<?php
}
?>
<!--<option value="Test Course" <? //if($desciplines=='Test Course') { echo "SELECTED='SELECTED'"; }?>>Test Course</option>-->
</select>
							</div>
							
							
							<div class="form-group">
							  <label for="exampleInputPassword1">API Response</label>
							<input type="text" class="form-control" name="#" value="<?=ucfirst($getmetadata['API_Response'])?>" readonly>
							
							</div>
							
							
							
							
							
						
							
						
						
							
							
							
							
							
							
							

					  <!-- Form Element sizes -->
					 
					</div>

           

               

            </div><!--/.col (left) -->
            
			
		
			
			
			
			<div class="box-footer">
			    
			   
			    
							<input name="update" type="submit" class="btn btn-primary" value="Update">
							
						
						  </div>
						</form>
           
           
            
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
