<?php
ob_start();
session_start();
include("include/connection.php");
global $conn;


//Here we will update counselor name to student table



 $getcondata = mysqli_query($conn,"SELECT memberID, lastPage from student WHERE lastPage='printformvalue.php'");
 
     while($setcondata = mysqli_fetch_array($getcondata)){
         
         
         //echo "SELECT * FROM tbl_students_data WHERE student_id='".$setcondata['memberID']."'";
         
        // exit;
         
         
         
          $getconselorid = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_students_data WHERE student_id='".$setcondata['memberID']."'"));
          
          
          //echo "SEELCT * FROM  tbl_counsellor WHERE id='".$getconselorid['counsellor_id']."'"; exit;
         
            $getconsname =  mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM  tbl_counsellor WHERE id='".$getconselorid['counsellor_id']."'"));
            
            
            $dyconname = $getconsname['first_name']." ".$getconsname['last_name'];
            
            mysqli_query($conn,"UPDATE student SET counselorname='".$dyconname."' WHERE memberID='".$setcondata['memberID']."'"); 
         
         
         
     }
    




// Here we will update descipline of student


 $getprefno = mysqli_query($conn,"SELECT * FROM studentpreference WHERE prefno='1'");
 
   while($setprefno = mysqli_fetch_array($getprefno)){
       
       
       mysqli_query($conn,"UPDATE student SET discipline='".$setprefno['discipline']."' WHERE memberID='".$setprefno['studentid']."'");
       
   }







	if(	$_SESSION['user_id'] == '104' || $_SESSION['user_id'] == '105') {
				
				header('location:list_application.php?formstatus=Payment done');
				
				}




//This is to update data in admission Fess table of registered student!...

 $getmemberdata = mysqli_query($conn,"SELECT memberID FROM tbl_admission_fees WHERE memberID!='0' AND email=''");
   while($setmemberdata  = mysqli_fetch_array($getmemberdata)){

     $getstuddata =  mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM student WHERE memberID='".$setmemberdata['memberID']."'"));

     $studname =$getstuddata['name']." ".$getstuddata['lastname'];

    mysqli_query($conn,"UPDATE tbl_admission_fees SET student_name='".$studname."', email='".$getstuddata['email']."',phone='".$getstuddata['phonenumber']."' WHERE memberID='".$getstuddata['memberID']."'");

}

include("include/header.php");


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
          <h1>Dashboard<small>Control panel <a href="enquiry.php" download>Download Enquiry</a></small></h1>
          <ol class="breadcrumb">
            <li><?=Date("jS \of F Y h:i:s A");?>&nbsp;<a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        
          
          
           
              <div class="row">
               <div class="animated flipInY col-lg-12 col-md-3 col-sm-6 col-xs-12">
              
                <div style="width:25%;float:left;border:1px solid gray;min-height:165px;text-align:center;padding-top:40px;"><h5 style="font-size:20px;margin-top:25px;">Total Applications:&nbsp;<?=$v5;?>&nbsp;<br/><a href="application.php">Download</a></h5></div>
                <div style="width:75%;float:left;border:1px solid gray;min-height:125px;max-height:125px;">
                    <div style="min-height:41px;border-bottom:1px solid gray;background-color:#F8B101;color:#FFF;padding-top:1px;text-align:center;"><h5><a href="list_application.php?formstatus=registered">Sign Up&nbsp;<?=$v1;?></a>&nbsp;<a href="application.php?formstatus=registered&type=B.Tech" style="text-align:center;"  download>Download</a></h5></div>
                    <div style="min-height:41px;border-bottom:1px solid gray;background-color:#FCFCFE;color:#000;padding-top:1px;text-align:center;"><a href="list_application.php?formstatus=incomplete form"><h5>Incomplete Form</a>&nbsp;<?=$btincform;?> <a href="application.php?formstatus=incomplete form&type=B.Tech" style="text-align:center;"  download>Download</a></h5></div>
                    <div style="background-color:#F4935C;color:#FFF;padding-top:1px;text-align:center;min-height:41px"><h5><a href="list_application.php?formstatus=Payment Pending">Payment Pending &nbsp;<?=$v3;?></a>&nbsp;<a href="application.php?formstatus=payment pending&type=B.Tech" style="text-align:center;"  download>Download</a></h5></div>
                    <div style="min-height:41px;border-bottom:1px solid gray;background-color:#FCFCFE;color:#000;padding-top:1px;text-align:center;"><h5><a href="list_application.php?formstatus=Payment done">Payment Done &nbsp; <?=$v4;?></a>&nbsp; 
<a href="application.php?formstatus=payment done&type=B.Tech" style="text-align:center;"  download>Download</a></h5></div>

                </div>
                
                
                
               </div>  
               </div> 
          
          
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
			
			
			
			
			
			 <div class="row" style="display:none;">
			 <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-navy">
                <div class="inner">
                  <h3><?php echo $p3;?></h3>
                  <p>B Tech</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="#" style="text-align:center;">No Link</a>
                <a href="list_application.php?programmesugpg=B.Tech" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-navy">
                <div class="inner">
                  <h3><?php echo $btincform;?></h3>
                  <p>B.Tech - InComplete Form</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="application.php?formstatus=incomplete form&type=B.Tech" style="text-align:center;"  download>Download</a>
                <a href="list_application.php?programmesugpg=B.Tech&formstatus=incomplete form" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-navy">
                <div class="inner">
                  <h3><?php echo $btpaydone;?></h3>
                  <p>B Tech Payment Done / Registered</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div><a href="application.php?formstatus=payment done&type=B.Tech" style="text-align:center;"  download>Download</a>
                <a href="list_application.php?programmesugpg=B.Tech&formstatus=payment done" class="small-box-footer">More info<i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-navy">
                <div class="inner">
                  <h3><?php echo $btpaypend;?></h3>
                  <p>B Tech Payment Pending</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="application.php?formstatus=payment pending&type=B.Tech" style="text-align:center;"  download>Download</a>
                <a href="list_application.php?programmesugpg=B.Tech&formstatus=payment pending" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			</div> <div class="row">
			 <div class="col-lg-3 col-xs-6" style="display:none;">
              <!-- small box -->
              <div class="small-box bg-teal">
                <div class="inner">
                  <h3><?php echo $p1;?></h3>
                  <p>B Design</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="#" style="text-align:center;">No Link</a>
                <a href="list_application.php?programmesugpg=B.Des" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6" style="display:none;">
              <!-- small box -->
              <div class="small-box bg-teal">
                <div class="inner">
                  <h3><?php echo $bdincform;?></h3>
                  <p>B Design/InComplete Form</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="application.php?formstatus=incomplete form&type=B.Des" style="text-align:center;"  download>Download</a>
                <a href="list_application.php?programmesugpg=B.Des&formstatus=incomplete form" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6" style="display:none;">
              <!-- small box -->
              <div class="small-box bg-teal">
                <div class="inner">
                  <h3><?php echo $bdpaydone;?></h3>
                  <p>B Design / Registered</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="application.php?formstatus=payment done&type=B.Des" style="text-align:center;"  download>Download</a>
                <a href="list_application.php?programmesugpg=B.Des&formstatus=payment done" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			<div class="col-lg-3 col-xs-6" style="display:none;">
              <!-- small box -->
              <div class="small-box bg-teal">
                <div class="inner">
                  <h3><?php echo $bdpaypend;?></h3>
                  <p>B Design Payment Pending</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="application.php?formstatus=payment pending&type=B.Des" style="text-align:center;"  download>Download</a>
                <a href="list_application.php?programmesugpg=B.Des&formstatus=payment pending" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			</div> <div class="row">
			 <div class="col-lg-3 col-xs-6" style="display:none;">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3><?php echo $p2;?></h3>
                  <p>M Des</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="#" style="text-align:center;">No Link</a>
                <a href="list_application.php?programmesugpg=M.Des" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			 <div class="col-lg-3 col-xs-6" style="display:none;">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3><?php echo $mdincform;?></h3>
                  <p>M Des InComplete Form</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="application.php?formstatus=incomplete form&type=M.Des" style="text-align:center;"  download>Download</a>
                <a href="list_application.php?programmesugpg=M.Des&formstatus=incomplete form" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			 <div class="col-lg-3 col-xs-6" style="display:none;">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3><?php echo $mdpaydone;?></h3>
                  <p>M Des Payment Done</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="application.php?formstatus=payment done&type=M.Des" style="text-align:center;"  download>Download</a>
                <a href="list_application.php?programmesugpg=M.Des&formstatus=payment done" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			 <div class="col-lg-3 col-xs-6" style="display:none;">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3><?php echo $mdpaypend;?></h3>
                  <p>M Des  Payment Pending</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="application.php?formstatus=payment pending&type=M.Des" style="text-align:center;"  download>Download</a>
                <a href="list_application.php?programmesugpg=M.Des&formstatus=payment pending" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			
			</div> <div class="row">
			 <div class="col-lg-3 col-xs-6" style="display:none;">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3><?php echo $p4;?></h3>
                  <p>I.B.SC </p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="#" style="text-align:center;">No Link</a>
                <a href="list_application.php?programmesugpg=I.B.Sc.M.Sc." class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
             </div><!-- ./col -->
			 <div class="col-lg-3 col-xs-6" style="display:none;">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3><?php echo $bmscincform;?></h3>
                  <p>I.B.SC InComplete Form</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="application.php?formstatus=incomplete form&type=I.B.Sc.M.Sc." style="text-align:center;"  download>Download</a>
                <a href="list_application.php?programmesugpg=I.B.Sc.M.Sc.&formstatus=incomplete form" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
             </div>
			 <div class="col-lg-3 col-xs-6" style="display:none;">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3><?php echo $bmscpaydone;?></h3>
                  <p>I.B.SC Payment Done</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="application.php?formstatus=payment done&type=I.B.Sc.M.Sc." style="text-align:center;"  download>Download</a>
                <a href="list_application.php?programmesugpg=I.B.Sc.M.Sc.&formstatus=payment done" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
             </div>
			 <div class="col-lg-3 col-xs-6" style="display:none;">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3><?php echo $bmscpaypend;?></h3>
                  <p>I.B.SC  Payment Pending</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                <a href="application.php?formstatus=payment pending&type=I.B.Sc.M.Sc." style="text-align:center;"  download>Download</a>
                <a href="list_application.php?programmesugpg=I.B.Sc.M.Sc.&formstatus=payment pending" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
             </div>
			
          </div><!-- /.row -->
          <!-- Main row -->
         
		 
		  
		  
		  
		  

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
