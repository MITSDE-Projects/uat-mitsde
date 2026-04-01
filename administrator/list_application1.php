<?php 
ob_start();
session_start();
include("include/connection.php");
global $conn;
include("include/header.php");
error_reporting(0);


$accessrights = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_access_rights WHERE user_id='".$_SESSION['user_id']."'"));

//echo '<pre>'; print_r($accessrights); 



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
  $regno=trim($_GET['regno']);
  $leadid=$_GET['leadid'];
  //$name=$_GET['name'];
   
	if(mysqli_query($conn,"UPDATE student SET RegNo='".$regno."', csv1='0',csv2='0' WHERE memberID='".$_GET['leadid']."'"))
    {
        
        header("location:list_application.php?formstatus=Payment%20done&doc_veri_pend=1");
        
    }

	
    
}

if(isset($_GET['Refregno']))
{
  $Refregno=$_GET['Refregno'];
  $leadid=$_GET['leadid'];
  //$name=$_GET['name'];
   
	if(mysqli_query($conn,"UPDATE student SET Referral_ID='".$Refregno."',ref_flag='1' WHERE memberID='".$_GET['leadid']."'"))
    {
        
        header("location:list_application.php?formstatus=Payment%20done");
        
    }
}

if(isset($_GET['jodosid']))
{
  $jodosid=$_GET['jodosid'];
  $leadid=$_GET['leadid'];
  //$name=$_GET['name'];
   
	if(mysqli_query($conn,"UPDATE student SET jodo_subscription_id='".$jodosid."',ref_flag='1' WHERE memberID='".$_GET['leadid']."'"))
    {
        
        header("location:list_application.php?formstatus=Payment%20done");
        
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

if(isset($_GET['updatedPayMode']))
{
  $PayMode=$_GET['value'];
  $leadid=$_GET['id'];
 //echo "UPDATE student SET PayMode='".$PayMode."' WHERE memberID='".$leadid."'";
 //die;
	if(mysqli_query($conn,"UPDATE student SET PayMode='".$PayMode."' WHERE memberID='".$leadid."'"))
    {
        
        header("location:list_application.php?formstatus=Payment%20done");
        
    }
}

if(isset($_GET['statusvalue']) && $_GET['leadstatusid'] )
{
  $statusvalue=$_GET['statusvalue'];
 $leadid=$_GET['leadstatusid'];

    date_default_timezone_set('Asia/Kolkata');
       $currentDatetime=date('Y-m-d H:i:s');
    //echo "</br>UPDATE student SET admission_status='".$statusvalue."',pri_enrolled_dt='".$currentDatetime."' WHERE memberID='".$leadid."'";
    
    if($statusvalue=='Provisional')
    {
       $sql=mysqli_query($conn,"UPDATE student SET reg_flag=0,pri_enrolled='1',admission_status='".$statusvalue."' WHERE memberID='".$leadid."'");
       header("location:list_application.php?formstatus=Payment%20done&enroll_bucket=1&doc_veri_pend=1");
    }
    else
    {
       $sql=mysqli_query($conn,"UPDATE student SET reg_flag=0,pri_enrolled='0',admission_status='".$statusvalue."' WHERE memberID='".$leadid."'");
       header("location:list_application.php?formstatus=Payment%20done&enroll_bucket=1&doc_veri_pend=1");
    }      
       
  }
  
  
  if(isset($_POST['admissiondate']) )
{
    date_default_timezone_set('Asia/Kolkata');
    $currentTime=date('h:i:s');
  $admissiondate=$_POST['admissiondate']." ".$currentTime;
 
  $leadidfordata=$_POST['leadidfordata'];
//die;
       $sql=mysqli_query($conn,"UPDATE student SET pri_enrolled_dt='".$admissiondate."' WHERE memberID='".$leadidfordata."'");
       header("location:list_application.php?formstatus=Payment%20done&enroll_bucket=1&doc_veri_pend=1");
    //}      
       
  }
  
  if(isset($_POST['updatezero']) )
{
    
    $admissiondate=$_POST['updatezero'];
    $memberID=$_POST['memberID'];

//die;
       $sql=mysqli_query($conn,"UPDATE `student` SET `F_Flag` = '0' WHERE WHERE memberID='".$memberID."'");
       header("location:list_application.php?formstatus=Payment%20done&enroll_bucket=1&doc_veri_pend=1");
    //}      
       
  }
 //die;
	
//}


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
	
	function updatezero(id){
	    
	   var conf = confirm("Are You Sure Sent To Bucket?");
	   
	    if(conf==true){
	       
	      window.location.href='list_application1.php?updatezero&formstatus=Payment done&memberID='+id;    
	       
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
            //alert("Reg--"+ regno);
		    //alert("LeadID--"+ leadid);
		   // alert("Name--"+ name);
		var conf  = confirm("Are u sure Transation ID are verified?");
		if(conf==true){
		
       if(regno!='')
      {
          alert('value'+regno);
          window.location.href='list_application.php?regno='+regno+'&leadid='+leadid+'&name='+name;
          
      }
		}
   
      
  }
  
 

function updaterefrenceno(regno,leadid){
    
            //alert("Reg--"+ regno);
		    //alert("LeadID--"+ leadid);
		    
	    
	   var conf = confirm("Are You Sure Want To Add Referal ID ?");
	   
	    if(conf==true){
	       
	      //window.location.href='list_application.php?enroll_bucket&formstatus=Payment done&memberID='+id; 
	      window.location.href='list_application.php?Refregno='+regno+'&leadid='+leadid;
	       
	   }
	    
	}
	
	function updaterefrenceno(regno,leadid){
    
            //alert("Reg--"+ regno);
		    //alert("LeadID--"+ leadid);
		    
	    
	   var conf = confirm("Are You Sure Want To Add Referal ID ?");
	   
	    if(conf==true){
	       
	      //window.location.href='list_application.php?enroll_bucket&formstatus=Payment done&memberID='+id; 
	      window.location.href='list_application.php?Refregno='+regno+'&leadid='+leadid;
	       
	   }
	    
	}
	
	function updatejodo_subscription_id(jodoid,leadid){
    
            //alert("Reg--"+ regno);
		    //alert("LeadID--"+ leadid);
		    
	    
	   var conf = confirm("Are You Sure Want To Add jodo Subscription ID ?");
	   
	    if(conf==true){
	       
	      //window.location.href='list_application.php?enroll_bucket&formstatus=Payment done&memberID='+id; 
	      window.location.href='list_application.php?jodosid='+jodoid+'&leadid='+leadid;
	       
	   }
	    
	}
	
	function updateadmissionstatus(leadstatusid,statusvalue){

	    //alert(leadstatusid);
	    //alert(statusvalue);

	   var conf = confirm("Are you sure status is currect?");

	   

	    if(conf==true){

	       

	      window.location.href='list_application.php?statusvalue='+statusvalue+'&leadstatusid='+leadstatusid;   

	       

	   }

	    

	}
	
	function PayMode(value,id){


        // alert(value);
        // alert(id);

         var conf = confirm("Are you sure want to set Payment Mode?");
          if(conf==true) {
             
            window.location.href='list_application.php?updatedPayMode=updatedPayMode&id='+id+'&value='+value;
            exit;
           
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
                        <th style="min-width:200px;">SORT</th>
                        <th style="min-width:200px;">API Status</th>
                        <th style="min-width:200px;">Member ID</th>
                        <th style="min-width:200px;">ERP ID</th>
                        <th style="min-width:200px;">Extraa Edge</th>
                        <? if($_SESSION['user_id']=='10' || $_SESSION['user_id']=='13' || $_SESSION['user_id']=='14' ) { ?>
                        <th style="min-width:200px;">Update Reg No</th>
                        <th style="min-width:200px;">Status</th>
                        <th style="min-width:200px;">Admission Data</th>
                        <?}?>
                        <th style="min-width:200px;">Full Name</th>
                        <th style="min-width:200px;">Programme</th>
                        <th style="min-width:200px;">Course</th>
                        
                        <? if($_SESSION['user_id']=='11') { ?>
                        <th style="min-width:250px;">Transaction ID</th>
                        <th style="min-width:250px;">Amount</th> 
                        <? } ?>
                        <th style="min-width:250px;">Email-ID</th> 
                        
                        <? if($accessrights['account_verification']=='1') { ?>
                        <!--<th style="min-width:250px;">Account Confirmation</th>  
                        <th style="min-width:250px;">Confirmation Date</th> 
                        <th style="min-width:250px;">Unique Transaction Reference</th>-->
                        <? } ?>
                        
                        <th style="min-width:150px;">Phone Number</th>
                        <th style="min-width:150px;">Form Status</th>
                        <? if(isset($_GET['formstatus']) && $_GET['formstatus']=='registered') { ?>
                        <th style="min-width:150px;">Active / In-active</th>
                        <? } ?>
                        <th style="min-width:150px;">Last Page</th>
                        <th style="min-width:150px;">Registered Date</th>
                        <th style="min-width:150px;">Payment Date</th>
                        
                        <? if($_SESSION['user_id']!='10' && $_SESSION['user_id']!='13' && $_SESSION['user_id']!='14') { ?>
                        <th style="min-width:150px;">Send To Bucket</th>
                        <th style="min-width:150px;">Enter Reference Reg No</th>
                        <th style="min-width:150px;">Jodo Subscription id</th>
                        <th style="min-width:150px;">Select Payment Mode</th>
                        <? } else { ?>
                        
                        <th style="min-width:150px;">Verification</th>
                        
                        <? } ?>
                        
                        <? if(isset($_GET['enroll_bucket']) && $_GET['enroll_bucket']=='1') { ?>
                        <th style="min-width:150px;">Bucket Date</th>
                        <th style="min-width:150px;">Reject</th>
                        <th style="min-width:150px;">Reject comment</th>
                        <th style="min-width:150px;">Is Enrolled</th>
                        
                       
                        <? } ?>
                        
                         <? if($_SESSION['user_id']=='10' || $_SESSION['user_id']=='13' || $_SESSION['user_id']=='14') { ?>
                         
                        <th style="min-width:150px;">Admission cancel</th>
                        <th style="min-width:150px;">Admission cancel comment</th>
                        <th style="min-width:150px;">API Response</th>
                        <? } ?>
                        
                        <? if($_SESSION['user_id']=='7' || $_SESSION['user_id']=='9' || $_SESSION['user_id']=='10' || $_SESSION['user_id']=='13'|| $_SESSION['user_id']=='14' ||  $_SESSION['user_id']=='16')
                        { ?>
                        <th style="min-width:150px;">Counselor Name</th>
                        <? } ?>
                        <? if($_SESSION['user_id']=='12') {  ?>
                          <th>Is Online</th>
                        <? } ?>
                      </tr>
                    </thead>
                    <tbody>
					
					<?php
					
					if(isset($_GET['formstatus']) && !isset($_GET['programmesugpg']) && $_GET['enroll_bucket']!='1' && !isset($_GET['enrolldone'])) 
					{
					    
					   if(isset($_GET['accounts_pending']) && $_GET['accounts_pending']=='1') 
					   {
					        
					      
					      $getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE formstatus ='".$_GET['formstatus']."' AND is_account_verified!='1' ORDER BY memberID DESC");
					        
					    }
					    
					   	else if(isset($_GET['formstatus']) && !isset($_GET['programmesugpg']) && isset($_GET['is_account_verified_lst']) && $_GET['is_account_verified_lst']='1') {
					   	    
					   	  $getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE formstatus ='".$_GET['formstatus']."' AND is_account_verified='1' ORDER BY memberID DESC");  
					   	    
					   	}
					    
					    
					    else {
					        
					 	  $getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE formstatus ='".$_GET['formstatus']."' ORDER BY memberID DESC");
					
					         }
					    
					}
					
					
					else if(isset($_GET['formstatus']) && !isset($_GET['programmesugpg']) && $_GET['enroll_bucket']!='1' && $_GET['fromdate']!='' && !isset($_GET['enrolldone'])){
					   
					$getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE formstatus ='".$_GET['formstatus']."' AND paydate>='".$_GET['fromdate']."' AND paydate<='".$_GET['todate']."' ORDER BY memberID DESC"); }
					
					
					
					
					else if(isset($_GET['programmesugpg']) && !isset($_GET['formstatus']) && $_GET['enroll_bucket']!='1' && !isset($_GET['enrolldone']))
					{
					   
					$getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE programmesugpg ='".$_GET['programmesugpg']."' ORDER BY memberID DESC"); }
					
					else if(isset($_GET['programmesugpg']) && !isset($_GET['formstatus']) && $_GET['enroll_bucket']!='1' && $_GET['fromdate']!='' && !isset($_GET['enrolldone']))
					{
					   
					$getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE programmesugpg ='".$_GET['programmesugpg']."' AND paydate>='".$_GET['fromdate']."' AND paydate<='".$_GET['todate']."' ORDER BY memberID DESC"); }
					
					
					
					else if(isset($_GET['programmesugpg']) &&  isset($_GET['formstatus']) && !isset($_GET['enrolldone'])) {
					  
					$getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE programmesugpg ='".$_GET['programmesugpg']."' AND formstatus ='".$_GET['formstatus']."' ORDER BY memberID DESC"); 	
					}
					else if(isset($_GET['programmesugpg']) &&  isset($_GET['formstatus']) && $_GET['fromdate']!='' && !isset($_GET['enrolldone'])) {
					   
					$getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE programmesugpg ='".$_GET['programmesugpg']."' AND formstatus ='".$_GET['formstatus']."' AND paydate>='".$_GET['fromdate']."' AND paydate<='".$_GET['todate']."' ORDER BY memberID DESC"); 	
					}
					
					else if(isset($_GET['enroll_bucket']) && $_GET['enroll_bucket']==1 && $_GET['fromdate']=='' && !isset($_GET['doc_veri_pend']) && !isset($_GET['readytopunch']) && !isset($_GET['reject']) && !isset($_GET['notcall']) && !isset($_GET['overallpending']) && !isset($_GET['enrolldone'])){
					 
					 $getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE enroll_bucket ='1' ORDER BY memberID DESC"); 	
					 
				     }
				     
					else if(isset($_GET['enroll_bucket']) && $_GET['enroll_bucket']==1 && $_GET['fromdate']!='' && !isset($_GET['enrolldone']) ){
					    
					   // echo "SELECT * FROM student WHERE enroll_bucket ='1' AND paydate<='".$_GET['fromdate']."' AND paydate>='".$_GET['todate']."' ORDER BY memberID DESC"; 
					    
					  $getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE enroll_bucket ='1' AND enroll_bucket_date>='".$_GET['fromdate']."' AND enroll_bucket_date<='".$_GET['todate']."' ORDER BY memberID DESC"); 	
				 	 }
					
					else if(isset($_GET['enroll_bucket']) && $_GET['enroll_bucket']=='1' && isset($_GET['doc_veri_pend']) && !isset($_GET['readytopunch']) && !isset($_GET['reject']) && !isset($_GET['notcall']) && !isset($_GET['overallpending']) && !isset($_GET['enrolldone'])) {
					    
					  $getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE enroll_bucket ='1' AND is_doc_verified!='1' AND is_reject!='1' AND is_enrolled!='1' ORDER BY memberID DESC"); 	
					 
					}
					
					
					else if(isset($_GET['enroll_bucket']) && $_GET['enroll_bucket']=='1' && !isset($_GET['doc_veri_pend']) && isset($_GET['readytopunch']) && !isset($_GET['reject']) && !isset($_GET['notcall']) && !isset($_GET['overallpending']) && !isset($_GET['enrolldone'])) {
					    
					  
					  $getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE enroll_bucket ='1' AND is_doc_verified='1' AND is_enrolled!='1' AND enrollment_verified='1' AND is_reject!='1' ORDER BY memberID DESC"); 	
					 
					}
					
					
					else if(isset($_GET['enroll_bucket']) && $_GET['enroll_bucket']=='1' && !isset($_GET['doc_veri_pend']) && !isset($_GET['readytopunch']) && isset($_GET['reject']) && !isset($_GET['notcall']) && !isset($_GET['overallpending']) && !isset($_GET['enrolldone'])) {
					    
					  $getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE enroll_bucket ='1' AND  is_reject='1' AND Cancellation!='1' ORDER BY memberID DESC"); 
					  //$getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE enroll_bucket ='1' AND is_doc_verified='1' AND is_enrolled='1' AND is_reject='1' AND Cancellation!='1' ORDER BY memberID DESC");
					 
					}
					
					
					else if(isset($_GET['enroll_bucket']) && $_GET['enroll_bucket']=='1' && !isset($_GET['doc_veri_pend']) && !isset($_GET['readytopunch']) && !isset($_GET['reject']) && isset($_GET['notcall']) && !isset($_GET['overallpending']) && !isset($_GET['enrolldone'])) {
					    
					  $getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE enroll_bucket ='1' AND is_doc_verified='1' AND is_enrolled!='1' AND is_reject!='1' AND pri_enrolled!='1' AND enrollment_verified!='1' ORDER BY memberID DESC"); 	
					 
					}
					
					
				    else if(isset($_GET['enroll_bucket']) && $_GET['enroll_bucket']=='1' && !isset($_GET['doc_veri_pend']) && !isset($_GET['readytopunch']) && !isset($_GET['reject']) && !isset($_GET['notcall']) && isset($_GET['overallpending'])  && !isset($_GET['enrolldone'])) {
					    
					  $getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE enroll_bucket ='1' AND is_doc_verified='1' AND is_enrolled!='1' AND is_reject!='1' AND enrollment_verified='1' AND all_verified!='1' ORDER BY memberID DESC"); 	
					 
					}
					
					else if(isset($_GET['enrolldone'])) {
					    
				//echo "</br>SELECT * FROM student WHERE enroll_bucket ='1' AND is_enrolled='1' AND is_reject!='1'  ORDER BY memberID DESC";
					  $getstuddata = mysqli_query($conn,"SELECT * FROM student WHERE enroll_bucket ='1' AND is_enrolled='1' AND is_reject!='1'  ORDER BY memberID DESC"); 	
					 
					}
					
					
					
					else {
					    
						$getstuddata = mysqli_query($conn,"SELECT * FROM student ORDER BY memberID DESC"); 
					}
					     $id =1;
					    while($setstuddata = mysqli_fetch_array($getstuddata)) {


                           //$getsetdata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_students_data WHERE student_id='".$setstuddata['memberID']."'"));
                           
                          // $checksop = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_btech_18_confirmation WHERE memberID='".$setstuddata['memberID']."'"));
                           


					    
					?>
					
                      <tr <? if(['enroll_bucket']=='1' && $setstuddata['is_enrolled']!='1'  && $setstuddata['is_reject']!='1'){ ?> style="background-color:#FF1493;"; <? } if($setstuddata['is_enrolled']=='1' && $setstuddata['is_reject']!='1') { ?> style="background-color:#7FFFD4;";   <? } ?> <? if($setstuddata['is_reject']=='1'  && $setstuddata['is_enrolled']!='1') { ?> style="background-color:#FF7D33;";   <? } ?> <? if($setstuddata['S_Flag_camu']=='1'  && $setstuddata['API_Response_camu']=="Success") { ?> style="background-color:#93C572;";   <? } ?>>
		              
		                <td><? if($setstuddata['is_enrolled']=='1') { echo "Enrollment Complete"; } else if($setstuddata['enroll_bucket']=='1' && $setstuddata['is_enrolled']!='1') { echo "Enrollment In-Process";  } else { echo "---"; } ?></td>
		                
		                <td style="min-width:200px;"><?=$setstuddata['API_Response_camu']?></td>
		                <td style="min-width:200px;"><?=$setstuddata['memberID']?></td>
		                <td style="min-width:200px;"><?=$setstuddata['ERPLeadID']?></td>
		                <td style="min-width:200px;"><?=$setstuddata['ExtraEdgeID']?></td>
		                
		               
		                
		                <? if($_SESSION['user_id']=='10' || $_SESSION['user_id']=='13' || $_SESSION['user_id']=='14' ) {
		                   
		                   if($setstuddata['RegNo']!=null)
		                   {
		                      
		                ?>
		                
		                <td><?php echo $setstuddata['RegNo'];?></td>
		                <?
		                  }
		                  else
		                  {
		                  ?>
		                  <td><input type="text" value="<?php echo $setstuddata['RegNo'];?>"  name="RegNo" class="form-control" id="<?php echo $setstuddata['memberID']?>" OnBlur="getsetutr(this.value,this.id,'name')"></td>
		                  <?
		                  }
		                  ?>
		                  <td style="min-width:200px;">
		                      <select id="<?php echo $setstuddata['memberID']?>" name="Stutus" onchange="updateadmissionstatus(this.id,this.value);">
		                          <?
		                          if(isset($setstuddata['admission_status']))
		                           {
		                               ?>
		                               <option value="<?php echo $setstuddata['admission_status'];?>"><?php echo $setstuddata['admission_status'];?></option>
		                              
		                               <?
		                           }
		                           else
		                           {
		                               ?>
		                                <option value="">Select Enroll Status</option>
		                               <?
		                           }
		                          ?>
		                          
		                          <option value="Confirmed Enrolled">Confirmed Enrolled </option>
		                          <option value="Provision Enrolled">Provision Enrolled</option>
		                          <option value="Cancelled">Cancelled</option>
		                      </select>
		                      
		                  </td>
		                  
		                  <td style="min-width:200px;">
		                      <?php echo $setstuddata['pri_enrolled_dt'];?>
		                      <form action="list_application.php?formstatus=Payment%20done&enroll_bucket=1&doc_veri_pend=1" method="post">
                                     
                                       <input type="date" id="admissiondate" name="admissiondate">
                                       <input type="hidden" id="leadidfordata" name="leadidfordata" value="<?php echo $setstuddata['memberID'];?>">
                                  <input type="submit">
                                 </form>
                                 </td>
		                  <?
		                  
		                }
		                ?>
		                
		                <? if($accessrights['account_verification']=='1') { ?>
		                <td width="60" style="min-width:200px;"><a href="candidate-details-verification.php?id=<?=$setstuddata['memberID']?>"><?php echo ucwords(strtolower($setstuddata['name']." ".$setstuddata['lastname']));?></a></td>
		                <?
		                }
		                else
		                {
		                  ?>  
		                <td width="60" style="min-width:200px;"><?php echo ucwords(strtolower($setstuddata['name']." ".$setstuddata['lastname']));?></a></td>    
		                <?
		                }
		                
		                ?>
                        <td style="min-width:200px;"><?=$setstuddata['programmesugpg']?></td>
                        <td style="min-width:200px;"><?=$setstuddata['desciplines']?></td>
                        <? if($_SESSION['user_id']=='11') { ?>
                        <td><?=$setstuddata['transactid']?></td>
                        <td><?=$setstuddata['amount']?></td>
                        <? } ?>
                        
                        <td style="min-width:250px;"><a href="candidate-details.php?id=<?=$setstuddata['memberID']?>"><?php echo $setstuddata['email'];?></a></td>  
                        
                        <td style="min-width:150px;"><?php echo $setstuddata['phonenumber'];?></td>
                        <td style="min-width:150px;"><?php echo ucfirst($setstuddata['formstatus']);?></td>
                        
                         <? if(isset($_GET['formstatus']) && $_GET['formstatus']=='registered') { ?>
                         
                         <td style="min-width:150px;"><?php echo $setstuddata['active'];?></td>
                         
                         <? } ?>
                        
		            	<td style="min-width:150px;"><?php echo $setstuddata['lastPage'];?></td>
                        <td style="min-width:150px;"><?php echo date("d-m-Y", strtotime($setstuddata['created'])) ;?></td>
                        <td style="min-width:150px;"><?php if($setstuddata['paydate']!='0000-00-00') { echo date("d-m-Y", strtotime($setstuddata['paydate'])); } ?></td>
                        
                       
                       <? if($_SESSION['user_id']!='10' && $_SESSION['user_id']!='13' && $_SESSION['user_id']!='14')
                       {
                       ?>
                        <td style="min-width:150px;"><input type="checkbox" OnClick="sendtobucket(this.id);" id="<?php echo $setstuddata['memberID'];?>" <?php if($setstuddata['enroll_bucket']=='1') { echo "CHECKED='CHECKED'"; } ?> ></td>
                        
                        
		                  <td><input type="text" value="<?php echo $setstuddata['Referral_ID'];?>"  name="ReferralID" class="form-control" id="<?php echo $setstuddata['memberID']?>" OnBlur="updaterefrenceno(this.value,this.id,'name')"></td>
		                 
                        <td><input type="text" value="<?php echo $setstuddata['jodo_subscription_id'];?>"  name="jodo_subscription_id" class="form-control" id="<?php echo $setstuddata['memberID']?>" OnBlur="updatejodo_subscription_id(this.value,this.id,'name')"></td>
                        
                        <td style="min-width:150px;">
                            <select id="<?=$setstuddata['memberID']?>" name="PaymentMode" OnChange="PayMode(this.value,this.id);">
                            <option value=" ">Select Mode</option>
                            
                                <option value="lumpSum" <? if($setstuddata['PayMode']=="lumpSum") { echo "SELECTED='SELECTED'"; }?> >lump Sum</option>
                                <option value="installment" <? if($setstuddata['PayMode']=="installment") { echo "SELECTED='SELECTED'"; }?> >Installment</option>
                                <option value="Loan" <? if($setstuddata['PayMode']=="Loan") { echo "SELECTED='SELECTED'"; }?> >Loan</option>
                                
                                </select>
                                </td>
                       <? } else { ?>
                       
                        <td style="min-width:150px;"> <? if($setstuddata['is_account_verified']=='1' || $setstuddata['is_enrolled']=='1') { echo "Verified by Accounts"; } else { echo "Not Verified"; } ?> </td>
                       
                       <? 
                       } 
                       ?>
                     
                       
                        <? if(isset($_GET['enroll_bucket']) && $_GET['enroll_bucket']=='1')
                        { ?>
                        <td style="min-width:150px;"><?=$setstuddata['enroll_bucket_date']?></td>
                        <td style="min-width:150px;"><input type="checkbox" OnClick="sendtoreject(this.id);" id="<?php echo $setstuddata['memberID'];?>" <?php if($setstuddata['is_reject']=='1') { echo "CHECKED='CHECKED'"; } ?>></td>
                        <td style="min-width:150px;"><?php echo $setstuddata['is_reject_comment'];?></td>
                        <td style="min-width:150px;"><input type="checkbox" OnClick="sendtoenrolled(this.id);" id="<?php echo $setstuddata['memberID'];?>" <?php if($setstuddata['is_enrolled']=='1') { echo "CHECKED='CHECKED'"; } ?>></td>
                         
                         <? if($_SESSION['user_id']=='10' || $_SESSION['user_id']=='13' || $_SESSION['user_id']=='14' ) { ?>
                        <!--<td style="min-width:150px;"><input type="checkbox" OnClick="sendttoprienroll(this.id);" id="<?php //echo $setstuddata['memberID'];?>" <?php //if($setstuddata['pri_enrolled']=='1') { echo "CHECKED='CHECKED'"; } ?>></td>-->
                        <td style="min-width:150px;"><input type="checkbox" OnClick="sendtocancel(this.id);" id="<?php echo $setstuddata['memberID'];?>" <?php if($setstuddata['Cancellation']=='1') { echo "CHECKED='CHECKED'"; } ?>></td>
                        <td style="min-width:150px;"><?php echo $setstuddata['Cancellation_comment'];?></td>
                        <td style="min-width:150px;">
                            <?php echo "</br>reposon-->".$API_Response=$setstuddata['API_Response'];
                                 echo "</br>S_Flag-->". $S_Flag=$setstuddata['S_Flag'];
                            
                            if($API_Response=="" && $S_Flag==1)
                            {
                                ?>
                                <input type="button" OnClick="updatezero(this.id);" id="<?php echo $setstuddata['memberID'];?>" value="Push" />
                                <?
                                
                               // echo "button";
                            }
                            else
                            {
                                echo $setstuddata['API_Response'];
                            }
                            
                            
                            
                            ?></td>
                       
                        <? } ?>
                        <? } ?>
                       
                        
                        <? if($_SESSION['user_id']=='7' || $_SESSION['user_id']=='9' || $_SESSION['user_id']=='10' || $_SESSION['user_id']=='13'|| $_SESSION['user_id']=='14' ||  $_SESSION['user_id']=='16') { ?>
                        
                        <td style="min-width:150px;"><?=$setstuddata['counsellor_name'];?></td>
                        
                        
                        <? } else { ?>
                        
                         <? if($_SESSION['user_id']=='7' || $_SESSION['user_id']=='8' || $_SESSION['user_id']=='10' || $_SESSION['user_id']=='13' || $_SESSION['user_id']=='14' ||  $_SESSION['user_id']=='16')
                        
                         { ?>
                        <td style="min-width:150px;"><select id="<?=$setstuddata['memberID']?>" name="counselor" OnChange="setcounselor(this.value,this.id);"><option value="Select Counselor">Select Counselor</option><?  $getcon = mysqli_query($conn,"SELECT * FROM tbl_counselor ORDER BY full_name ASC"); while($setcon = mysqli_fetch_array($getcon)) { ?><option value="<?=$setcon['full_name']?>"  <? if($setcon['full_name']==$setstuddata['counsellor_name']) { echo "SELECTED='SELECTED'"; }?> ><?=$setcon['full_name'];?></option> <?php } ?></select></td>
                         <? } ?>
                     
                        <? } ?>
                         <? if($_SESSION['user_id']=='12') {  ?>
			            <td><?=$setstuddata['is_online'];?></td>
			             <? } ?>
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
