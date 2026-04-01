<?php
ob_start();
session_start();
include("pages/connection.php");
include("include/connection.php");
global $conn;



// Here we will fetch program count!...


// Here we will update the lastpage!..


  $getdatapay = mysqli_query($conn,"SELECT * FROM `student` WHERE paydate!='0000-00-00' AND formstatus!='payment done'"); 
  
   while($setdatapay = mysqli_fetch_array($getdatapay))
   {
       
       mysqli_query($conn,"UPDATE student SET lastpage='printformvalue.php',formstatus='payment done' WHERE memberID ='".$setdatapay['memberID']."'"); 
       
   }

// Here we will fetch the installment tranaction 


 $gettransactioncnt = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM tbl_transactions_details"));


$checkandverified = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM student WHERE all_verified!='1' AND is_doc_verified='1' AND enroll_bucket ='1' AND enrollment_verified='1'  AND is_reject!='1'  AND lastpage='printformvalue.php' AND is_enrolled!='1'")); 
$getrejectdata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM student WHERE is_reject='1' AND Cancellation!='1' AND lastpage='printformvalue.php' AND is_enrolled!='1'"));
//$getrejectdata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM student WHERE is_reject='1' AND is_doc_verified='1' AND Cancellation!='1' AND lastpage='printformvalue.php' AND is_enrolled!='1'")); 

$readytopunch  = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM student WHERE is_doc_verified='1' AND enrollment_verified='1' AND lastpage='printformvalue.php' AND is_enrolled!='1' AND is_reject!='1'")); 

$docverifiedcnt = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM student WHERE is_doc_verified!='1' AND enroll_bucket ='1' AND is_reject!='1' AND lastpage='printformvalue.php' AND is_enrolled!='1'"));
 
$enrollverifiedcnt = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM student WHERE enrollment_verified!='1' AND is_reject!='1' AND pri_enrolled!='1' AND is_doc_verified='1' AND enroll_bucket ='1'  AND lastpage='printformvalue.php' AND is_enrolled!='1'"));
 
$allverifiedcnt = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM student WHERE all_verified='1' AND is_enrolled!='1'"));

$enrolledcnt = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM student WHERE is_enrolled='1'"));

$cancelledcnt = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM student WHERE Cancellation='1'"));

$enrollbuck = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM student WHERE enroll_bucket='1'"));

$proenroll = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM student WHERE pri_enrolled='1'"));

$getpgcmcnt  = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM student WHERE programmesugpg='Post Graduate Certificate in Management'"));
 
$getpgdmcnt  = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM student WHERE programmesugpg='Post Graduate Diploma in Management'"));
 
$getpgdbacnt = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM student WHERE programmesugpg='Post Graduate Diploma in Business Administration'"));

$getpgdexecutivecnt = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM student WHERE programmesugpg='Executive Post Graduate Diploma in Management'"));

$loancount = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS cnt FROM loan_registration "));


// Here we will update descipline of student


 $getprefno = mysqli_query($conn,"SELECT * FROM studentpreference WHERE prefno='1'");
 
   while($setprefno = mysqli_fetch_array($getprefno)){
       
       
       mysqli_query($conn,"UPDATE student SET discipline='".$setprefno['discipline']."' WHERE memberID='".$setprefno['studentid']."'");
       
   }







	if(	$_SESSION['user_id'] == '104' || $_SESSION['user_id'] == '105') {
				
				header('location:list_application.php?formstatus=Payment done');
				
				}




//This is to update data in admission Fess table of registered student!...

 /*$getmemberdata = mysqli_query($conn,"SELECT memberID FROM tbl_admission_fees WHERE memberID!='0' AND email=''");
   while($setmemberdata  = mysqli_fetch_array($getmemberdata)){

     $getstuddata =  mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM student WHERE memberID='".$setmemberdata['memberID']."'"));

     $studname =$getstuddata['name']." ".$getstuddata['lastname'];

    mysqli_query($conn,"UPDATE tbl_admission_fees SET student_name='".$studname."', email='".$getstuddata['email']."',phone='".$getstuddata['phonenumber']."' WHERE memberID='".$getstuddata['memberID']."'");

}*/

include("include/header.php");



 //$getacalldata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as cnt FROM student WHERE is_account_verified!='1' AND lastPage='printformvalue.php' AND enroll_bucket!='1'"));


// Here we will calculate only payment not verified data.

 $getacpendata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as cnt FROM student WHERE is_account_verified!='1' AND lastPage='printformvalue.php'"));

  $getacverifiedata = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as cnt FROM student WHERE is_account_verified='1' AND lastPage='printformvalue.php'"));
  $getpaymentnodone = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as cnt FROM student WHERE lastPage='page5_form.php'"));


       $query="select distinct formstatus, count(formstatus) as status from student group by formstatus";
       $sql2 = mysqli_query($conn,$query);
		$count = mysqli_num_rows($sql2);
        if($count>0)
        {
			$v1=0;
			$v2=0;
			$v3=0;
			$v4=0;
			$v5=0;
			 while($studentdata = mysqli_fetch_assoc($sql2))
			{
            
					//print_r($studentdata);

			if($studentdata["formstatus"]=="registered")
			{
				$v1=$studentdata["status"];
			}
			else if($studentdata["formstatus"]=="incomplete form")
			{
				$v2=$studentdata["status"];
			}
            else if($studentdata["formstatus"]=="payment pending")
			{
				$v3=$studentdata["status"];
			}
			else if($studentdata["formstatus"]=="payment done")
			{
				$v4=$studentdata["status"];
			}
			}
			$v5=intval($v1)+intval($v2)+intval($v3)+intval($v4);
			
        }
        
        
       // echo $v2."COUNT"; exit; 


        $query="select distinct programmesugpg,formstatus,count(programmesugpg) as program from student group by programmesugpg";
        $sql2 = mysqli_query($conn,$query);
		$count = mysqli_num_rows($sql2);
        if($count>0)
        {
			$p1=0;
			$p2=0;
			$p3=0;
			$p4=0;
			$p5=0;
			 while($studentdata = mysqli_fetch_assoc($sql2))
			{
            
					//print_r($studentdata);
			if($studentdata["programmesugpg"]=="B.Des")
			{
				$p1=$studentdata["program"];
			}
			else if($studentdata["programmesugpg"]=="M.Des")
			{
				$p2=$studentdata["program"];
			}
			else if($studentdata["programmesugpg"]=="B.Tech")
			{
				$p3=$studentdata["program"];
			}
			else if($studentdata["programmesugpg"]=="I.B.Sc.M.Sc.")
			{
				$p4=$studentdata["program"];
			}
			
		
			
			}
			$p5=intval($p1)+intval($p2)+intval($p3)+intval($p4);			
        }

		
		$btquery="select  programmesugpg,formstatus,count(formstatus) as program from student  WHERE programmesugpg='B.Tech' GROUP BY formstatus";
        $btsql2 = mysqli_query($conn,$btquery);
		$btcount = mysqli_num_rows($btsql2);
        if($btcount>0)
        {
		
			
			$btincform=0;
			$btreg=0;
			$btpaypend=0;
			$btpaydone=0;
			
			 while($btstudentdata = mysqli_fetch_assoc($btsql2))
			{
            
					//print_r($studentdata);
			if($btstudentdata["formstatus"]=="incomplete form")
			{
				$btincform=$btstudentdata["program"];
			}
			else if($btstudentdata["formstatus"]=="registered")
			{
				$btreg=$btstudentdata["program"];
			}
			else if($btstudentdata["formstatus"]=="payment pending")
			{
				$btpaypend=$btstudentdata["program"];
			}
			else if($btstudentdata["formstatus"]=="payment done")
			{
				$btpaydone=$btstudentdata["program"];
			}
			
		
			
			}
						
        }
		
		
		    $bdincform=0;
			$bdreg=0;
			$bdpaypend=0;
			$bdpaydone=0;
		
		$bdquery="select  programmesugpg,formstatus,count(formstatus) as program from student  WHERE programmesugpg='B.Des' GROUP BY formstatus";
        $bdsql2 = mysqli_query($conn,$bdquery);
		$bdcount = mysqli_num_rows($bdsql2);
        if($bdcount>0)
        {
		
			
			
			
			 while($bdstudentdata = mysqli_fetch_assoc($bdsql2))
			{
            
					//print_r($studentdata);
			if($bdstudentdata["formstatus"]=="incomplete form")
			{
				$bdincform=$bdstudentdata["program"];
			}
			else if($bdstudentdata["formstatus"]=="registered")
			{
				$bdreg=$bdstudentdata["program"];
			}
			else if($bdstudentdata["formstatus"]=="payment pending")
			{
				$bdpaypend=$bdstudentdata["program"];
			}
			else if($bdstudentdata["formstatus"]=="payment done")
			{
				$bdpaydone=$bdstudentdata["program"];
			}
			
		
			
			}
						
        }
		
		
		        $mdincform=0;
			$mdreg=0;
			$mdpaypend=0;
			$mdpaydone=0;
		
		$mdquery="select  programmesugpg,formstatus,count(formstatus) as program from student  WHERE programmesugpg='M.Des' GROUP BY formstatus";
        $mdsql2 = mysqli_query($conn,$mdquery);
		$mdcount = mysqli_num_rows($mdsql2);
        if($mdcount>0)
        {
					
			
			 while($mdstudentdata = mysqli_fetch_assoc($mdsql2))
			{
            
					//print_r($studentdata);
			if($mdstudentdata["formstatus"]=="incomplete form")
			{
				$mdincform=$mdstudentdata["program"];
			}
			else if($mdstudentdata["formstatus"]=="registered")
			{
				$mdreg=$mdstudentdata["program"];
			}
			else if($mdstudentdata["formstatus"]=="payment pending")
			{
				$mdpaypend=$mdstudentdata["program"];
			}
			else if($mdstudentdata["formstatus"]=="payment done")
			{
				$mdpaydone=$mdstudentdata["program"];
			}
			
		
			
			}
						
        }
		
		
		    $bmscincform=0;
			$bmscreg=0;
			$bmscpaypend=0;
			$bmscpaydone=0;
		
		$bmscquery="select  programmesugpg,formstatus,count(formstatus) as program from student  WHERE programmesugpg='I.B.Sc.M.Sc.' GROUP BY formstatus";
        $bmscsql2 = mysqli_query($conn,$bmscquery);
		$bmsccount = mysqli_num_rows($bmscsql2);
        if($bmsccount>0)
        {
					
			
			 while($bmscstudentdata = mysqli_fetch_assoc($bmscsql2))
			{
            
					//print_r($studentdata);
			if($bmscstudentdata["formstatus"]=="incomplete form")
			{
				$bmscincform=$bmscstudentdata["program"];
			}
			else if($bmscstudentdata["formstatus"]=="registered")
			{
				$bmscreg=$bmscstudentdata["program"];
			}
			else if($bmscstudentdata["formstatus"]=="payment pending")
			{
				$bmscpaypend=$bmscstudentdata["program"];
			}
			else if($bmscstudentdata["formstatus"]=="payment done")
			{
				$bmscpaydone=$bmscstudentdata["program"];
			}
			
			
			}
						
        }
		
		
		//echo $btincform."INC FORM"; exit;
		
        

?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Dashboard<small>Control panel <a href="enquiry.php" download style="display:none;">Download Enquiry</a></small></h1>
          <ol class="breadcrumb">
            <li><?=Date("jS \of F Y h:i:s A");?>&nbsp;<a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        
          <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        
                          <? if($_SESSION['user_id']!='11' && $_SESSION['user_id']!='10' && $_SESSION['user_id']!='13' &&  $_SESSION['user_id']!='14') { ?>
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?=$v5;?></h3>
                                    
                                    <?
                                    
                                      if($_SESSION['user_id']=='12') {
                                    ?>
                                    
                                     <p><a href="list_application.php" style="text-align:center;color:#FFF">Total Applications</a></p>
                                    
                                    <? } else { ?>
                                    
                                    <p><a href="javascript:void(0);" style="text-align:center;color:#FFF">Total Applications</a></p>
                                    
                                    <? } ?>
                                    
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                                <a href="application.php" class="small-box-footer" download>
                                    Download <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                <? } ?>
                            </div>
                        </div><!-- ./col -->
        
              
                    
                    
                     <!-- Small boxes (Stat box) -->
               
               <?  if($_SESSION['user_id']!='10') { ?>
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3><?=$v1;?></h3>
                                    <p><a href="list_application.php?formstatus=registered" style="color:#FFF">Sign Up</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                                
                                <a href="application.php?formstatus=registered" class="small-box-footer">
                                    Download <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                
                                <? } ?>
                                
                            </div>
                        </div><!-- ./col -->
             
            
                     <!-- Small boxes (Stat box) -->
                    
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?=$v2;?></h3>
                                    <p><a href="list_application.php?formstatus=incomplete form" style="color:#FFF">In complete</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                                <a href="application.php?formstatus=incomplete form" download class="small-box-footer">
                                    Download <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                <? } ?>
                            </div>
                        </div><!-- ./col -->
                          <? } ?>
              
                    
                     <!-- Small boxes (Stat box) -->
                
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3><?=$v3;?></h3>
                                    <p><a href="list_application.php?formstatus=Payment Pending" style="color:#FFF">Payment Pending</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                                <a href="application.php?formstatus=Payment Pending" download class="small-box-footer">
                                    Download <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                <? } ?>
                            </div>
                        </div><!-- ./col -->
                      
               
                    
                     <!-- Small boxes (Stat box) -->
                   
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?=$v4;?></h3>
                                    <p><a href="list_application.php?formstatus=Payment done" style="color:#FFF">Payment Done</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                                <a href="application.php?formstatus=Payment done"  download class="small-box-footer">
                                    Download <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                <? } ?>
                            </div>
                        </div>
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?=$loancount['cnt'];?></h3>
                                    <p><a href="loanprocess.php" style="color:#FFF">Loan</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                                <a href="application.php?formstatus=Payment done"  download class="small-box-footer">
                                    Download <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                <? } ?>
                            </div>
                        </div>
                           <? } ?> 
                        
                        
                        <? if($_SESSION['user_id']=='11') { ?>
                        
                        
                       
                        
                        
                         <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?=$getacpendata['cnt'];?></h3>
                                    <p><a href="list_application.php?formstatus=Payment done&accounts_pending=1" style="color:#FFF">Verification Pending</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                               
                                <? } ?>
                            </div>
                        </div>
                        
                        
                        <? if($_SESSION['user_id']!='11') { ?>
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-orange">
                                <div class="inner">
                                    <h3><?=$getrejectdata['cnt'];?></h3>
                                    <p><a href="list_rejected.php?reject=1" style="color:#FFF">Application Rejected</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                               
                                <? } ?>
                            </div>
                        </div>
                        
                       
                        
                        
                        <? } ?>
                        
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?=$getpaymentnodone['cnt'];?></h3>
                                    <p><a href="find_payment_pending_list.php?formstatus=page5_form.php" style="color:#FFF">NEFT Payment</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                              
                                <? } ?>
                            </div>
                        </div>
                        
                         <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?=$getacverifiedata['cnt'];?></h3>
                                    <p><a href="list_application.php?formstatus=Payment done&is_account_verified_lst=1" style="color:#FFF">Verification Done</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                              
                                <? } ?>
                            </div>
                        </div>
                        
                        
                        
                         <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?=$gettransactioncnt['cnt'];?></h3>
                                    <p><a href="list_transaction.php" style="color:#FFF">Instlmnt Transtn</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                              
                                <? } ?>
                            </div>
                        </div>
                        
                         <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>--</h3>
                                    <p><a href="OtherFeesList.php" style="color:#FFF">Other Fees Payments</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                              
                                <? } ?>
                            </div>
                        </div>
                        
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>--</h3>
                                    <p><a href="Recovery.php" style="color:#FFF">Recovery Transation</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                              
                                <? } ?>
                            </div>
                        </div>
                        
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3><?=$loancount['cnt'];?></h3>
                                    <p><a href="loanprocess.php" style="color:#FFF">Loan Procss</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                              
                                <? } ?>
                            </div>
                        </div>
                        
                        
                         <? } ?>
                        
                        
                        
                        
                        
                        
                       <? if($_SESSION['user_id']!='11' && $_SESSION['user_id']!='13' && $_SESSION['user_id']!='14' && $_SESSION['user_id']!='3' && $_SESSION['user_id']!='10') { ?>
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3><?=$enrollbuck['cnt'];?></h3>
                                    <p><a href="list_application.php?formstatus=Payment done&enroll_bucket=1" style="color:#FFF">Enrollment Bucket</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                                <a href="application.php?formstatus=Payment done&enroll_bucket=1"  download class="small-box-footer">
                                    Download <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                <? } ?>
                            </div>
                        </div><!-- ./col -->
                        
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-black">
                                <div class="inner">
                                    <h3><?=$getrejectdata['cnt'];?></h3>
                                    <p><a href="list_rejected.php?reject=1" style="color:#FFF">Application Rejected</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                                <a href="application.php?formstatus=Payment done&enroll_bucket=1"  download class="small-box-footer">
                                    Download <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                <? } ?>
                            </div>
                      </div><!-- ./col -->
                      
                    
                      
                      
                        
                       <? } ?>    
                        
                         
                        
                        
                         
                        
                      <? if($_SESSION['user_id']=='10' || $_SESSION['user_id']=='13' || $_SESSION['user_id']=='14' || $_SESSION['user_id']=='3') { ?>  
                    
                    
                    
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-black">
                                <div class="inner">
                                    <h3><?=$getrejectdata['cnt'];?></h3>
                                    <p><a href="list_application.php?formstatus=Payment done&enroll_bucket=1&reject=1" style="color:#FFF">Rejected</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                                <a href="application.php?formstatus=Payment done&enroll_bucket=1"  download class="small-box-footer">
                                    Download <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                <? } ?>
                            </div>
                      </div><!-- ./col -->
                    
                    
                    
                    
                    
                    
                    
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3><?=$docverifiedcnt['cnt'];?></h3>
                                    <p><a href="list_application.php?formstatus=Payment done&enroll_bucket=1&doc_veri_pend=1" style="color:#FFF; font-size:11px">provisional / Doc Verftn Pndg</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                                <a href="application.php?formstatus=Payment done&enroll_bucket=1"  download class="small-box-footer">
                                    Download <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                <? } ?>
                            </div>
                        </div><!-- ./col -->
                    
                    
                    
                      <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3><?=$enrollverifiedcnt['cnt'];?></h3>
                                    <p><a href="list_application.php?formstatus=Payment done&enroll_bucket=1&notcall=1" style="color:#FFF">Call Verfn Pndng</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                                <a href="application.php?formstatus=Payment done&enroll_bucket=1"  download class="small-box-footer">
                                    Download <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                <? } ?>
                            </div>
                      </div><!-- ./col -->
                      
                      <?php 

                            $get_otherfeecount= mysql_query("SELECT * FROM `OtherFeesTransaction` WHERE `payment_confirmation_status` LIKE 'verified'");
                                       $row=mysql_num_rows($get_otherfeecount);
                                       $row;
                                     
                                       ?>
                     
                      
                      
                         <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box  bg-blue">
                                <div class="inner">
                                    <h3><?=$row;?></h3>
                                    <p><a href="verified_other_fee.php" style="color:#FFF">Other Fees Payment</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? /*if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') {*/ ?>
                                <!--<a href="application.php?formstatus=Payment done&enroll_bucket=1"  download class="small-box-footer">
                                    Download <i class="fa fa-arrow-circle-right"></i>
                                </a>-->
                                <? //} ?>
                            </div>
                      </div><!-- ./col -->
                      
                      <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box  bg-red">
                                <div class="inner">
                                    <h3><?=$loancount['cnt'];?></h3>
                                    <p><a href="loanprocess.php" style="color:#FFF">Loan Process</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? /*if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') {*/ ?>
                                <!--<a href="application.php?formstatus=Payment done&enroll_bucket=1"  download class="small-box-footer">
                                    Download <i class="fa fa-arrow-circle-right"></i>
                                </a>-->
                                <? //} ?>
                            </div>
                      </div><!-- ./col -->
                      
                      
                      
                      
                      
                      
                      
                      <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3><?=$readytopunch['cnt'];?></h3>
                                    <p><a href="list_application.php?formstatus=Payment done&enroll_bucket=1&readytopunch=1" style="color:#FFF">Ready to Punch</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                                <a href="application.php?formstatus=Payment done&enroll_bucket=1"  download class="small-box-footer">
                                    Download <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                <? } ?>
                            </div>
                      </div><!-- ./col -->
                    
                    
                    <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-orange">
                                <div class="inner">
                                    <h3><?=$proenroll['cnt'];?></h3>
                                    <!--<p><a href="list_application.php?formstatus=payment done&enrolldone=1&enroll_bucket=1" style="color:#FFF">confirm Enroll</a></p>-->
                                    <p><a href="list_proenroll.php?formstatus=Payment%20done&enroll_bucket=1&proEnroll=1" style="color:#FFF">Pro Enroll</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                                <a href="application.php?formstatus=Payment done&pri_enrolled=1"  download class="small-box-footer">
                                    Download <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                <? } ?>
                            </div>
                        </div>
                    
                    
                    
                    
                    
                    
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-orange">
                                <div class="inner">
                                    <h3><?=$enrolledcnt['cnt'];?></h3>
                                    <p><a href="list_application.php?formstatus=payment done&enrolldone=1&enroll_bucket=1" style="color:#FFF">confirm Enrolled</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                                <a href="application.php?formstatus=Payment done&enroll_bucket=1"  download class="small-box-footer">
                                    Download <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                <? } ?>
                            </div>
                        </div><!-- ./col -->
                        
                        
                        <div class="col-lg-2 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-orange">
                                <div class="inner">
                                    <h3><?=$cancelledcnt['cnt'];?></h3>
                                    <p><a href="list_cancellation.php?formstatus=Payment%20done&enroll_bucket=1&reject=1" style="color:#FFF">Cancellation</a></p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <? if($_SESSION['user_id']!='7' && $_SESSION['user_id'] !='8' && $_SESSION['user_id'] !='9') { ?>
                                <a href="application.php?formstatus=Payment done&enroll_bucket=1"  download class="small-box-footer">
                                    Download <i class="fa fa-arrow-circle-right"></i>
                                </a>
                                <? } ?>
                            </div>
                        </div><!-- ./col -->
                        
                    <? } ?>
                        
                        
                        
                        
                        
                        
                        
        
                    </div>
                    
                    
                    
           </section>    
        
        
        
        
        
        
        <section class="content">
        
          
          
           
              
          
          
          <br/>
          
          
          
          
          
          <div class="row" style="display:none;">
          
          
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $v5;?></h3>
                  <p>Total Applicants</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div><a href="application.php" style="text-align:center;"  download>Download</a>
                <a href="list_application.php" class="small-box-footer">More info<i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $v1;?><sup style="font-size: 20px"></sup></h3>
                  <p>Sign up</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="#" style="text-align:center;">No Link</a>
                <a href="list_application.php?formstatus=registered" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $v4;?></h3>
                  <p>Payment Done / Registered</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="#" style="text-align:center;">No Link</a>
                <a href="list_application.php?formstatus=payment done" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $v3;?></h3>
                  <p>Payment Pending</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="#" style="text-align:center;">No Link</a>
                <a href="list_application.php?formstatus=payment pending" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			</div>
			
			
			
			
			
			 <div class="row">
		
		
		   <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo  $getpgcmcnt['cnt']; ?></h3>
                  <p>Post Graduate Certificate in Management</p>
                </div>
                <!--<div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="#" style="text-align:center;">No Link</a>
                <a href="javascript:void(0);" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
              </div>
            </div><!-- ./col -->
		
	
	           <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $getpgdmcnt['cnt'] ?></h3>
                  <p>Post Graduate Diploma in Management</p>
                </div>
                <!--<div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="#" style="text-align:center;">No Link</a>
                <a href="javascript:void(0);" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
              </div>
             </div><!-- ./col -->
             
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $getpgdexecutivecnt['cnt'] ?></h3>
                  <p>Post Graduate Diploma in Management (Executive)</p>
                </div>
                 <!--<div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="#" style="text-align:center;">No Link</a>
                <a href="javascript:void(0);" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
              </div>
             </div><!-- ./col -->
	
	
	          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $getpgdbacnt['cnt']; ?></h3>
                  <p>Post Graduate Diploma in Business Administration</p>
                </div>
                 <!--<div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="#" style="text-align:center;">No Link</a>
                <a href="javascript:void(0);" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>-->
              </div>
            </div><!-- ./col -->
	
	
	
	
	
	
	
			</div>
			
			
         
		 
		  
		  
		  
		  

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     <?php include("include/footer.php");?>
     
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
	
	 <!-- ChartJS 1.0.1 -->
    
	
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
  
   
    <!-- page script -->
    <script>
      $(function () {
      

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: 700,
            color: "#f56954",
            highlight: "#f56954",
            label: "Chrome"
          },
          {
            value: 500,
            color: "#00a65a",
            highlight: "#00a65a",
            label: "IE"
          },
          {
            value: 400,
            color: "#f39c12",
            highlight: "#f39c12",
            label: "FireFox"
          },
          {
            value: 600,
            color: "#00c0ef",
            highlight: "#00c0ef",
            label: "Safari"
          },
          {
            value: 300,
            color: "#3c8dbc",
            highlight: "#3c8dbc",
            label: "Opera"
          },
          {
            value: 100,
            color: "#d2d6de",
            highlight: "#d2d6de",
            label: "Navigator"
          }
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);

      
      });
    </script>

</html>
