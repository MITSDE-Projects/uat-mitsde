<?php 
ob_start();
session_start();
include("include/connection.php");
global $conn;
include("include/header.php");
error_reporting(0);





if(isset($_GET['enrollverified']) && $_GET['enrollverified']=='1'){
    
    mysqli_query($conn,"UPDATE student SET enrollment_verified='1' WHERE memberID='".$_GET['id']."'");
    
    
    
    
    header('location:candidate-details.php?id='.$_GET['id'].'&enrollmentveridone');
    
}



if(isset($_GET['docverfied']) && $_GET['docverfied']=='1') {
   // echo "UPDATE student SET is_doc_verified='1' AND is_reject='0' WHERE memberID='".$_GET['id']."'";
    //die;
    mysqli_query($conn,"UPDATE student SET is_doc_verified='1' WHERE memberID='".$_GET['id']."'");
    header('location:candidate-details.php?id='.$_GET['id'].'&docverificationdone');
    
}

if(isset($_GET['sendverified']) && $_GET['sendverified']=='1') {
   // echo "UPDATE student SET is_doc_verified='1' AND is_reject='0' WHERE memberID='".$_GET['id']."'";
    //die;
    mysqli_query($conn,"UPDATE student SET is_reject='0' WHERE memberID='".$_GET['id']."'");
    header('location:candidate-details.php?id='.$_GET['id'].'&sendtodoc_done');
    
}



if(isset($_GET['allverfied']) && $_GET['allverfied']=='1') {
    $veried=$_GET['allverfied'];
    mysqli_query($conn,"UPDATE student SET all_verified='1' WHERE memberID='".$_GET['id']."'");
    
  
    
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
                			
                			$getmetadata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM student WHERE memberID='".$_GET['id']."'"));
                			
                		//	echo "</br>address-->".$getmetadata['address'];
                			$getmetadatadoc = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_students_data WHERE student_id='".$_GET['id']."'"));
                		?>
						
               <section class="content">
			   
			   <?php
								if(isset($_POST['update'])) 
								{
									extract($_POST);
									
									//echo $_POST['memberID'];
							 		 
							 		 $aid="MITSDE";
	                                 $aid.="T".time();
							 		
							        $checkappid = mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as cnt FROM student WHERE memberID='".$_GET['id']."'"));
							
							           //echo $checkappid['cnt']."COUNT"; 
							
							       if($checkappid['applicationid']==''){
							           
							           //echo "UPDATE student SET applicationid = '".$aid."' WHERE memberID='".$_GET['id']."'"; 
							        
							           mysqli_query($conn,"UPDATE student SET applicationid = '".$aid."' WHERE memberID='".$_GET['id']."'");
							           
							       }
							       
							       // Here we will check if it is exits in Tbl_Student!...
							       
							       
							        $getstudatacnt  = mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as cnt FROM tbl_students_data WHERE student_id='".$_GET['id']."'"));
							        
							         if($getstudatacnt['cnt'] < 1){
							             
							             
							          mysqli_query($conn,"INSERT INTO tbl_students_data(student_id)VALUES('".$_GET['id']."')");
							             
							         }
							        
							       
							        
			
									
									 $getsucc = mysqli_query($conn,"UPDATE student SET name='".$_POST['name']."',mothername='".$_POST['mothername']."', lastname='".$_POST['lastname']."', gender='".$_POST['gender']."',programmesugpg='".$_POST['programmesugpg']."',desciplines='".$_POST['desciplines']."', phonenumber='".$_POST['phonenumber']."',dateofbirth='".$_POST['dateofbirth']."',elective_b1='".$_POST['elective_b1']."',elective_b2='".$_POST['elective_b2']."', address='".$_POST['address']."',caddress='".$_POST['caddress']."',ccity='".$_POST['ccity']."',cpincode='".$_POST['cpincode']."',cstate='".$_POST['cstate']."',mpdomicile='".$_POST['mpdomicile']."',parentfname='".$_POST['parentfname']."',parentlname='".$_POST['parentlname']."',parentmobilenumber='".$_POST['parentmobilenumber']."',parentemail='".$_POST['parentemail']."',yearofpassing10='".$_POST['yearofpassing10']."',year12='".$_POST['year12']."',school10='".$_POST['school10']."',school12='".$_POST['school12']."',score10='".$_POST['score10']."',score12='".$_POST['score12']."',stream12='".$_POST['stream12']."',graduation='".$_POST['graduation']."',examgraduation='".$_POST['examgraduation']."',yearofpassinggraduation='".$_POST['yearofpassinggraduation']."',scoregraduation='".$_POST['scoregraduation']."',otherqualification='".$_POST['otherqualification']."',examotherqualification='".$_POST['examotherqualification']."',yearofpassingotherqualification='".$_POST['yearofpassingotherqualification']."',scoreotherqualification='".$_POST['scoreotherqualification']."',postgraduation='".$_POST['postgraduation']."',exampostgraduation='".$_POST['exampostgraduation']."',yearofpassingpostgraduation='".$_POST['yearofpassingpostgraduation']."',scorepostgraduation='".$_POST['scorepostgraduation']."'  WHERE memberID='".$_GET['id']."'");
										//echo "UPDATE student SET name='".$_POST['name']."',mothername='".$_POST['mothername']."', lastname='".$_POST['lastname']."', gender='".$_POST['gender']."',programmesugpg='".$_POST['programmesugpg']."',desciplines='".$_POST['desciplines']."', phonenumber='".$_POST['phonenumber']."',dateofbirth='".$_POST['dateofbirth']."',institute='".$_POST['institute']."',elective_b1='".$_POST['elective_b1']."',elective_b2='".$_POST['elective_b2']."', address='".$_POST['address']."',caddress='".$_POST['caddress']."',ccity='".$_POST['ccity']."',cpincode='".$_POST['cpincode']."',cstate='".$_POST['cstate']."',mpdomicile='".$_POST['mpdomicile']."',parentfname='".$_POST['parentfname']."',parentlname='".$_POST['parentlname']."',parentmobilenumber='".$_POST['parentmobilenumber']."',parentemail='".$_POST['parentemail']."',yearofpassing10='".$_POST['yearofpassing10']."',year12='".$_POST['year12']."',school10='".$_POST['school10']."',school12='".$_POST['school12']."',score10='".$_POST['score10']."',score12='".$_POST['score12']."',stream12='".$_POST['stream12']."',graduation='".$_POST['graduation']."',examgraduation='".$_POST['examgraduation']."',yearofpassinggraduation='".$_POST['yearofpassinggraduation']."',scoregraduation='".$_POST['scoregraduation']."',otherqualification='".$_POST['otherqualification']."',examotherqualification='".$_POST['examotherqualification']."',yearofpassingotherqualification='".$_POST['yearofpassingotherqualification']."',scoreotherqualification='".$_POST['scoreotherqualification']."',postgraduation='".$_POST['postgraduation']."',exampostgraduation='".$_POST['exampostgraduation']."',yearofpassingpostgraduation='".$_POST['yearofpassingpostgraduation']."',scorepostgraduation='".$_POST['scorepostgraduation']."'  WHERE memberID='".$_GET['id']."'"; exit; 
										if($getsucc){
										    
										    header('location:candidate-details.php?msg=updated&id='.$_GET['id']);
										}
										
									$getmetadata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM student WHERE memberID='".$_GET['id']."'"));
									
									
									$getmetadatadoc = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_students_data WHERE student_id='".$_GET['id']."'"));
									
									
					
							
								}
						
										
                			
                	$getmetadata['book_status'];
                	$getmetadata['colorRadio'];
                			
                		?>
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
				<form role="form" action="#" method="POST" enctype="multipart/form-data">
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
							<input type="text" name="name" class="form-control" value="<?=ucfirst($getmetadata['name'])?>" >
							</div>
												
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Gender </label>
							<input type="text" class="form-control" name="gender" value="<?=ucfirst($getmetadata['gender'])?>">
							
							</div>
							    <!--
							    <div class="form-group">
							    <label for="exampleInputEmail1">institute</label>
							 
								<select name="institute" class="form-control">
								  <option value="<?=ucfirst($getmetadata['institute'])?>"><?=ucfirst($getmetadata['institute'])?></option> 
								  <option value="Open">Open</option>
								  <option value="OBC">OBC</option>
								  <option value="SC">SC </option>
								  <option value="ST">ST</option>
								  <option value="VJA">VJ NT(A)</option>
								  <option value="NTB">NT (B)</option>
								  <option value="NTC">NT (C)</option>
								  <option value="NTD">NT (D)</option>
								  <option value="Others">Others</option>
								</select>
								</div>
								-->
								
								
							<div class="form-group">
							  <label for="exampleInputPassword1">Phone Number </label>
							<input type="text" class="form-control" name="phonenumber" value="<?=ucfirst($getmetadata['phonenumber'])?>" readonly>
							</div>
								<div class="form-group">
							  <label for="exampleInputPassword1">alternate phone number </label>
							<input type="text" class="form-control" name="phonenumber" value="<?=ucfirst($getmetadata['alternate_no'])?>" readonly>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1">Application ID</label>
							<input type="text" class="form-control" name="applicationid" value="<?=ucfirst($getmetadata['applicationid'])?>" readonly>
							
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1">Program </label>
							<input type="text" class="form-control" name="programmesugpg" value="<?=ucfirst($getmetadata['programmesugpg'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Elective Basket 1 </label>
							<input type="text" class="form-control" id="elective_b1" name="elective_b1" value="<?=ucfirst($getmetadata['elective_b1'])?>">
							
							</div>
							
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Elective Basket 2 </label>
							<input type="text" class="form-control" id="elective_b2" name="elective_b2" value="<?=ucfirst($getmetadata['elective_b2'])?>">
							
							</div>
							
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Permanent Address</label>
							<input type="text" name="address" class="form-control" value="<?=ucfirst($getmetadata['address'])?>">
							
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Permanent Pincode</label>
							<input type="text" name="address" class="form-control" value="<?=ucfirst($getmetadata['ppincode'])?>">
							
							</div>
							<!--<div class="form-group">
							  <label for="exampleInputEmail1">Current City</label>
							<input type="text" name="ccity" class="form-control" value="<?//=ucfirst($getmetadata['ccity'])?>">
							
							</div>-->
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Father Name</label>
							<input type="text" name="parentfname" class="form-control" value="<?=ucfirst($getmetadata['parentfname'])?>">
							
							</div>
							
							
							<!--<div class="form-group">
							  <label for="exampleInputEmail1">Parent Middle Name</label>
							<input type="text" name="parentmname" class="form-control" value="<?=ucfirst($getmetadata['parentmname'])?>">
							</div>-->
							
							<div class="form-group">
							  <label for="exampleInputEmail1">10th Passing Score</label>
							<input type="text" name="score10" class="form-control" value="<?=$getmetadata['score10']?>">
							</div>
							
							<div class="form-group">
							  <label for="exampleInputEmail1">10th School</label>
							<input type="text" name="school10" class="form-control" value="<?=$getmetadata['school10']?>">
							</div>
							
							
							<div class="form-group">
							  <label for="exampleInputEmail1">10th Passing Year</label>
							<input type="text" name="yearofpassing10" class="form-control" value="<?=$getmetadata['yearofpassing10']?>">
							</div>
							
							
						 	
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Score Post Graduation</label>
							<input type="text" name="scorepostgraduation" class="form-control" value="<?=$getmetadata['scorepostgraduation']?>">
							</div>
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Adhar No</label>
							<input type="text" name="scorepostgraduation" class="form-control" value="<?=$getmetadata['aadhar']?>">
							</div>
							
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Photo </label>
							<img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['photo'];?>"  width="75" height="75" />
						    <a download href="https://mitsde.com/apply/<?php echo $getmetadatadoc['photo'];?>" >Download</a>
						
						
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Signature </label>
							<img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['signature'];?>"  width="75" height="75" />
						    <a download href="https://mitsde.com/apply/<?php echo $getmetadatadoc['signature'];?>" >Download</a>
						
						
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">SSC mark sheet </label>
							<a href="https://mitsde.com/apply/<?php echo $getmetadatadoc['ssc'];?>" target="_blank">Click for Document</a>
								<img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['ssc'];?>"  width="75" height="75" />
							</div>
				
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Graduation Certificate</label>
							<a href="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate'];?>" target="_blank">Click for Document</a>
							<?php if(!empty($getmetadatadoc['graduationcertificate']))
							   {
							       ?>
							       <img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate'];?>"  width="75" height="75" />
							       <?php
							   }
							   
							?>
								
							
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
							  <label for="exampleInputPassword1">Mother's Name </label>
							  <input type="text" class="form-control" name="mothername" value="<?=ucfirst($getmetadata['mothername'])?>">
							</div>
						      
							<div class="form-group">
							  <label for="exampleInputPassword1">Last Name </label>
							  <input type="text" class="form-control" name="lastname" value="<?=ucfirst($getmetadata['lastname'])?>">
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Date of Birth </label>
							<input type="text" class="form-control" name="dateofbirth" value="<?=ucfirst($getmetadata['dateofbirth'])?>">
							
							</div>
												
							<div class="form-group">
							  <label for="exampleInputPassword1">E-mail</label>
							<input type="text" class="form-control" name="email" value="<?=ucfirst($getmetadata['email'])?>" readonly>
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Alternate e-mail</label>
							<input type="text" class="form-control" name="email" value="<?=ucfirst($getmetadata['alternate_email'])?>" readonly>
							
							</div>
							
							
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Course Name</label>
							<input type="text" class="form-control" name="desciplines" value="<?=ucfirst($getmetadata['desciplines'])?>">
							</div>
							
							
							<div class="form-group">
							  <label for="exampleInputPassword1">Correspondence Address</label>
							<input type="text" class="form-control" name="caddress" value="<?=ucfirst($getmetadata['caddress'])?>">
							</div>
							
							
							
							<!--<div class="form-group">
							  <label for="exampleInputEmail1">Current State</label>
							<input type="text" name="cstate" class="form-control" value="<?//=ucfirst($getmetadata['cstate'])?>">-->
							
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1">Current Pincode</label>
							<input type="text" class="form-control" name="cpincode" value="<?=ucfirst($getmetadata['cpincode'])?>">
							
							</div>
							<!--<div class="form-group">
							  <label for="exampleInputEmail1">Parent Contact Number</label>
							<input type="text" name="parentmobilenumber" class="form-control" value="<?//=ucfirst($getmetadata['parentmobilenumber'])?>">
							
							</div>
							<div class="form-group">
							  <label for="exampleInputPassword1">Parent Last Name</label>
							<input type="text" class="form-control" name="parentlname" value="<?//=ucfirst($getmetadata['parentlname'])?>">
							
							</div>
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Parent Mail-ID</label>
							<input type="text" name="parentemail" class="form-control" value="<?//=ucfirst($getmetadata['parentemail'])?>">
							</div>-->
							
						
							<div class="form-group">
							  <label for="exampleInputEmail1">12th Passing Score </label>
							<input type="text" name="score12" class="form-control" value="<?=ucfirst($getmetadata['score12'])?>">
							</div>
							
						   <div class="form-group">
						     <label for="exampleInputEmail1">12th School </label>
						  	 <input type="text" name="school12" class="form-control" value="<?=ucfirst($getmetadata['school12'])?>">
						   </div>
						   
					
						   
						   <div class="form-group">
						     <label for="exampleInputEmail1">12th Passing Year </label>
						  	 <input type="text" name="year12" class="form-control" value="<?=ucfirst($getmetadata['year12'])?>">
						   </div>
							
							
						    <!--<div class="form-group">
							<label for="exampleInputEmail1">Stream 12</label>
							<input type="text" name="stream12" class="form-control" value="<?//=ucfirst($getmetadata['stream12'])?>">
							</div>-->
							
							
							
							<div class="form-group">
							<label for="exampleInputEmail1">Degree(Stream)</label>
							<input type="text" name="graduation" class="form-control" value="<?=ucfirst($getmetadata['graduation'])?>">
							</div>
							
							
								    <div class="form-group">
							<label for="exampleInputEmail1">University Name</label>
							<input type="text" name="examgraduation" class="form-control" value="<?=ucfirst($getmetadata['examgraduation'])?>">
							</div>
							
							
								    <div class="form-group">
							<label for="exampleInputEmail1">Year of Passing Graduation </label>
							<input type="text" name="yearofpassinggraduation" class="form-control" value="<?=ucfirst($getmetadata['yearofpassinggraduation'])?>">
							</div>
							
							
								    <div class="form-group">
							<label for="exampleInputEmail1">Score Graduation</label>
							<input type="text" name="scoregraduation" class="form-control" value="<?=ucfirst($getmetadata['scoregraduation'])?>">
							</div>
							
							<div class="form-group">
							<label for="exampleInputEmail1">Name As per adhar card</label>
							<input type="text" name="scoregraduation" class="form-control" value="<?=ucfirst($getmetadata['passport_no'])?>">
							</div>
							
							
							
							
							
							<div class="form-group" style="display:none;">
							  <label for="exampleInputEmail1">Entrance </label>
							<a href="https://mitsde.com/apply/<?php echo $getmetadatadoc['entrance'];?>" target="_blank">Click for Document</a>
							<?php if(!empty($getmetadatadoc['entrance']))
							   {
							       ?>
							       <img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['entrance'];?>"  width="75" height="75" />
							       <?php
							   }
							   
							?>
							</div>
							
							<div class="form-group">
							  <label for="exampleInputEmail1">HSC mark sheet </label>
							<a href="https://mitsde.com/apply/<?php echo $getmetadatadoc['hsc'];?>" target="_blank">Click for Document</a>
							<?php if(!empty($getmetadatadoc['hsc']))
							   {
							       ?>
							       <img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['hsc'];?>"  width="75" height="75" />
							       <?php
							   }
							   
							?>
							</div>
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Identity Proof</label>
							<a href="https://mitsde.com/apply/<?php echo $getmetadatadoc['identity'];?>" target="_blank">Click for Document</a>
							<?php if(!empty($getmetadatadoc['identity']))
							   {
							       ?>
							       <img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['identity'];?>"  width="75" height="75" />
							       <?php
							   }
							   
							?>
							</div>
							
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Graduation Sem 1 Marksheet</label>
							  <a href="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate_sem1'];?>" target="_blank">Click for Document</a>
							  <?php if(!empty($getmetadatadoc['graduationcertificate_sem1']))
							   {
							       ?>
							       <img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate_sem1'];?>"  width="75" height="75" />
							       <?php
							   }
							   
							?>
							</div>
							
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Graduation Sem 2 Marksheet</label>
							  <a href="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate_sem2'];?>" target="_blank">Click for Document</a>
							  <?php if(!empty($getmetadatadoc['graduationcertificate_sem2']))
							   {
							       ?>
							       <img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate_sem2'];?>"  width="75" height="75" />
							       <?php
							   }
							   
							?>
							</div>
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Graduation Sem 3 Marksheet</label>
							  <a href="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate_sem3'];?>" target="_blank">Click for Document</a>
							  <?php if(!empty($getmetadatadoc['graduationcertificate_sem3']))
							   {
							       ?>
							       <img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate_sem3'];?>"  width="75" height="75" />
							       <?php
							   }
							   
							?>
							</div>
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Graduation Sem 4 Marksheet</label>
							  <a href="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate_sem4'];?>" target="_blank">Click for Document</a>
							   <?php if(!empty($getmetadatadoc['graduationcertificate_sem4']))
							   {
							       ?>
							       <img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate_sem4'];?>"  width="75" height="75" />
							       <?php
							   }
							   
							?>
							</div>
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Graduation Sem 5 Marksheet</label>
							  <a href="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate_sem5'];?>" target="_blank">Click for Document</a>
							  <?php if(!empty($getmetadatadoc['graduationcertificate_sem5']))
							   {
							       ?>
							       <img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate_sem5'];?>"  width="75" height="75" />
							       <?php
							   }
							   
							?>
							</div>
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Graduation Sem 6 Marksheet</label>
							  <a href="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate_sem6'];?>" target="_blank">Click for Document</a>
							  <?php if(!empty($getmetadatadoc['graduationcertificate_sem6']))
							   {
							       ?>
							       <img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate_sem6'];?>"  width="75" height="75" />
							       <?php
							   }
							   
							?>
							</div>
							
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Graduation Sem 7 Marksheet</label>
							  <a href="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate_sem7'];?>" target="_blank">Click for Document</a>
							   <?php if(!empty($getmetadatadoc['graduationcertificate_sem7']))
							   {
							       ?>
							       <img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate_sem7'];?>"  width="75" height="75" />
							       <?php
							   }
							   
							?>
							</div>
							
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Graduation Sem 8 Marksheet</label>
							  <a href="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate_sem8'];?>" target="_blank">Click for Document</a>
							  <?php if(!empty($getmetadatadoc['graduationcertificate_sem8']))
							   {
							       ?>
							       <img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate_sem8'];?>"  width="75" height="75" />
							       <?php
							   }
							   
							?>
							</div>
							
							
								<div class="form-group">
							  <label for="exampleInputEmail1">Graduation Marksheet</label>
							  <a href="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate'];?>" target="_blank">Click for Document</a>
							  <?php if(!empty($getmetadatadoc['graduationcertificate']))
							   {
							       ?>
							       <img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['graduationcertificate'];?>"  width="75" height="75" />
							       <?php
							   }
							   
							?>
							</div>
							
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Application Form</label>
							  <a href="https://mitsde.com/apply/<?php echo $getmetadatadoc['application_form'];?>" target="_blank">Click for Document</a>
							  <?php if(!empty($getmetadatadoc['application_form']))
							   {
							       ?>
							       <img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['application_form'];?>"  width="75" height="75" />
							       <?php
							   }
							   
							?>
							</div>
							
							<div class="form-group">
							  <label for="exampleInputEmail1">Undertaking Form</label>
							  <a href="https://mitsde.com/apply/<?php echo $getmetadatadoc['undertaking_form'];?>" target="_blank">Click for Document</a>
							   <?php if(!empty($getmetadatadoc['undertaking_form']))
							   {
							       ?>
							       <img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['undertaking_form'];?>"  width="75" height="75" />
							       <?php
							   }
							   
							?>
							</div>
							<div class="form-group">
							  <label for="exampleInputEmail1">Exp.letter</label>
							  <a href="https://mitsde.com/apply/<?php echo $getmetadatadoc['experience'];?>" target="_blank">Click for Document</a>
							   <?php if(!empty($getmetadatadoc['experience']))
							   {
							       ?>
							       <img src="https://mitsde.com/apply/<?php echo $getmetadatadoc['experience'];?>"  width="75" height="75" />
							       <?php
							   }
							   
							?>
							</div>
							
							
							
						  </div><!-- /.box-body -->
							
					    	<input type="checkbox" onClick="docverified('<?=$_GET['id']?>')" <? if($getmetadata['is_doc_verified']=='1') { echo "CHECKED='CHECKED'"; } ?>>&nbsp;&nbsp;Is Document Verified
						
						   	<input type="checkbox" onClick="enrollverified('<?=$_GET['id']?>')" <? if($getmetadata['enrollment_verified']=='1') { echo "CHECKED='CHECKED'"; } ?>>&nbsp;&nbsp;Call Verified

					  		<input type="checkbox" onClick="allverified('<?=$_GET['id']?>')" <? if($getmetadata['all_verified']=='1') { echo "CHECKED='CHECKED'"; } ?>>&nbsp;&nbsp;Verified and Check Ok</br>
					  		
					  		<input type="checkbox" onClick="senddocverified('<?=$_GET['id']?>')" <? if($getmetadata['all_verified']=='1') { echo "CHECKED='CHECKED'"; } ?>>&nbsp;&nbsp;send doc verified
					  		
					  	    


					  <!-- Form Element sizes -->
					 
					</div>

           

               

            </div><!--/.col (left) -->
            
            <? if($getmetadata['enroll_bucket']!='1') { ?>
			   <a href="avt_admin_uploads.php?id=<?=$_GET['id']?>">Upload Document</a> 
			<? } ?>
			
			
			<? if($getmetadata['book_status']=='1') { ?>
			   <h4 style="color:red;">Note: <label style="color:#C80003" >Student not require hard copy of books</label></h4>
			<? } ?>
			
			
			
			<div class="box-footer">
			    
			    <? if($getaccessdtls['candidate_info_update']=='1' && $getmetadata['enroll_bucket']!='1') { ?>
			    
							<input name="update" type="submit" class="btn btn-primary" value="Update">
							
				<? } ?> 			
						  </div>
						</form>
           
           
            <!-- right column -->
                      <div class="box-body" style="background-color: bisque;">
                      <h3 align="center">PAYMENT HISTORY</h3>
                  <table  class="table table-bordered table-striped">
                    <thead>
                      <tr>
                       
                        
                        <td>Amount</td>
                        <td>Transation ID</td>
                        <td>Transation Date</td>
                        <td>Payment Source</td>
                        
                            
                         <th>Finance Charges</th>
                         <th>NBFC Name</th>
                         <th>Loan Tenure</th>
                            
                        
                        
					
                      </tr>
                    </thead>
                    <tbody>
					
					<?
					//echo "</br>SELECT * FROM tbl_transactions_details WHERE email='".$getmetadata['email']."' GROUP BY transaction_id ORDER BY id DESC";		
					 $gettransactiondtls = mysqli_query($conn,"SELECT * FROM tbl_transactions_details WHERE email='".$getmetadata['email']."' GROUP BY transaction_id ORDER BY id DESC");
								  
			           while($settransactiondtls = mysqli_fetch_array($gettransactiondtls)) { 				
		       			?>
					
                      <tr>
                       
               <td><? if($settransactiondtls['ins_2_amt']=='0') { echo $settransactiondtls['ins_1_amt'];  } else { echo $settransactiondtls['ins_2_amt']; }?></td>
                <td><?=$settransactiondtls['transaction_id']; ?></td>
              <td><? if($settransactiondtls['ins_2_date']=='0000-00-00') { echo $settransactiondtls['ins_1_date'];  } else { echo $settransactiondtls['ins_2_date']; }?></td>
						  <td><?=$settransactiondtls['payment_source'];?></td>
                        
                       <td><label style="color:#00C140"><?=$settransactiondtls['finance_charges']; ?></label></td>
							  <td> <label style="color:#00C140"><?=$settransactiondtls['nbfc_name']; ?></label> </td>
							  <td> <label style="color:#00C140"><?=$settransactiondtls['tenure']; ?></label> </td>
                      </tr>
                      
                       <?
						    $total_pay += $settransactiondtls['ins_1_amt'] + $settransactiondtls['ins_2_amt'];
						   
					   }
							//	echo "<br>t-->".$total_pay; 
						   ?>
                      
                    </tbody>
                   
                  </table>
                </div><!-- /.box-body -->
                
                <!-- right column -->
                      <div class="box-body" style="background-color: bisque;">
                      <h3 align="center">Registration for Loan payment HISTORY</h3>
                  <table  class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        
                        <td>Amount</td>
                        <td>Transation ID</td>
                        <td>Transation Date</td>
                         <td>Payment Source</td>
                        <th>A/c Verification Status </th>
                        <?php 
                        if($pay)
                        ?>
					
                      </tr>
                    </thead>
                    <tbody>
					
					<?
					//echo "</br>SELECT * FROM tbl_transactions_details WHERE email='".$getmetadata['email']."' GROUP BY transaction_id ORDER BY id DESC";		
					 $getloan = mysqli_query($conn,"SELECT * FROM loan_registration WHERE lr_email='".$getmetadata['email']."' ");
								  
			           while($laonprocessfee = mysqli_fetch_array($getloan)) { 				
		       			?>
					
                      <tr>
                       
               <td><?=$laonprocessfee['lr_amount'];?></td>
                <td><?=$laonprocessfee['lr_traction_id']; ?></td>
              <td><?=$laonprocessfee['lr_data_time'];?></td>
						  <td>HDFC</td>
                        
                       <td> </td></td>
                      </tr>
                      
                       <?
						    $total_pay += $settransactiondtls['ins_1_amt'] + $settransactiondtls['ins_2_amt'];
						   
					   }
							//	echo "<br>t-->".$total_pay; 
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
