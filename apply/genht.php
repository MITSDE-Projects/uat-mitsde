<?php
//GenerateHallTicket(455);
GenerateHallTicket();
function GenerateHallTicket()
{
	include("php/phpToPDF.php"); 
	
$DB_Server = "localhost"; // MySQL Server
$DB_Username = "avantiow_dbuser"; // MySQL Username
$DB_Password = "g_mxP0iGba.("; // MySQL Password
$DB_DBName = "avantiow_avantika_db"; // MySQL Database Name

// $DB_Username = "root"; // MySQL Username
//$DB_Password = ""; // MySQL Password
//$DB_DBName = "avantika_admission"; // MySQL Database Name 

$conn = mysqli_connect($DB_Server, $DB_Username, $DB_Password,$DB_DBName);

        $query="SELECT memberid,photo_image,applicationid,programmesugpg,name,middlename,lastname,caddress,ccity,cpincode,cstate,ccountry,phonenumber,parentmobilenumber,email,	testcenter
FROM student where formstatus='payment done' and (programmesugpg='B.Des' or programmesugpg='M.Des') and testcenter is not NULL";
//and memberid=280";
//echo $query;
$sql = mysqli_query($conn,$query);
		$count = mysqli_num_rows($sql);
		
        if($count>0)
        {

			ini_set('max_execution_time', 3000);
			echo "<br><br><table border=1>";
			$i=1;
			while($applicantdata = mysqli_fetch_assoc($sql))
			{
                
				$rno=6000+$applicantdata["memberid"];
				
				
				echo "<td>".$applicantdata["memberid"]."</td>";
  $ta="SELECT address
FROM testcenteraddress where city='".$applicantdata["testcenter"]."' limit 0,1";

//echo $ta;
$sqlta = mysqli_query($conn,$ta);
		$countta = mysqli_num_rows($sqlta);
        if($countta>0)
        {
           $tac= mysqli_fetch_assoc($sqlta);
        }
		
	
	$query1 = "SELECT discipline FROM studentpreference WHERE `studentid` ='".$applicantdata["memberid"]."' order by prefno";
		$sql21 = mysqli_query($conn,$query1);
		$count1 = mysqli_num_rows($sql21);
        if($count1>0)
        {
			$discipline="";
			$disciplineprint="";
			$j=0;
            while($row = mysqli_fetch_assoc($sql21))
			{
				$j++;
				$discipline.="<li>".$row["discipline"]."</li>";
				
			}
		}
	?>
            
			
	
					<?php $ht='<body style="width:1000px;margin: auto;display: block;height: auto;font-family:arial;padding:10px;">
    <div style="padding: 50px;border:3px solid #000;">
    <div style="width:100%;float: right;">
        <div style="float: right;">
        <img src="http://avantikauniversity.edu.in/apply/images/logo.svg" style="width:100px;margin-right: 10px;"/>
        <img src="http://avantikauniversity.edu.in/apply/images/mitid.jpg" style="width:240px;margin-right: 10px;"/>
        <img src="http://avantikauniversity.edu.in/apply/images/mit.png" style="width:100px;margin-right: 10px;"/>
         <br>
    <br>
    <br> 
        </div>
       
    </div>
   <div style="width: 100%;">';

   if(!isset($applicantdata['photo_image']) || $applicantdata['photo_image']=="")
   {
	$ht.=' <img src="http://avantikauniversity.edu.in/apply/'.$applicantdata['photo_image'].'" height=120 alt="" width=120 style="width:120px;border:1px solid;margin-right: 10px;float: right;padding:10px;"/>';
	
	$ht.='<span style="position:absolute;right:90px;width:100px;text-align:center;top:240px;">Affix a recent passport size photograph here</span>';
   }
   else
   {
	$ht.=' <img src="http://avantikauniversity.edu.in/apply/'.$applicantdata['photo_image'].'" height=120 alt="" width=120 style="width:120px;border:1px solid;margin-right: 10px;float: right;padding:10px;"/>';
   }
   
	$ht.='	
        <p style="font-family:arial;padding-top:200px;">
Roll No. &nbsp;&nbsp;&nbsp;&nbsp;<b>'.$applicantdata['programmesugpg']." - ".$rno.'</b>
            </p>
    </div>
    <div style="width: 100%;">
         <br>
                <br>
                <br>
                <br>
        <p><b>Admit Card for Admission Procedure</b></p>
        <div style="height: 2px;width: 100%;background: #000;"></div>
    </div>
    <div style="width: 100%;">
        <br>
        <br>
        <p style="float: left;width: 100%;"><b>Name of the candidate:</b> <span style="text-decoration:underline;font-size:12px;">'.$applicantdata['name'].' '.$applicantdata['middlename'].$applicantdata['lastname'].'</span></p>
    </div>
 <div style="width: 100%;">

        <p style="float: left;width: 100%;"><b>Full Postal Address:</b> <span style="text-decoration:underline;font-size:12px;">'.$applicantdata['caddress'].','.$applicantdata['ccity'].'-'.$applicantdata['cpincode'].','.$applicantdata['cstate'].','.$applicantdata['ccountry'].'</span></p>
    </div>
 <div style="width: 100%;">
        <p style="float: left;width:50%;"><b>Email:</b> <span style="text-decoration:underline;font-size:12px;">'. $applicantdata['email'].'</span></p>
         <p style="float: right;width: 50%;"><b>Tel:</b> <span style="text-decoration:underline;font-size:12px;">'.$applicantdata['phonenumber']." / ".$applicantdata['parentmobilenumber'].'</span></p>
    </div>

 <div style="width: 100%;">
        <p style="float: left;width: 100%;"><b>Test Centre:</b> <span style="text-decoration:underline;font-size:12px;">'.$tac['address'].'</span></p>
    </div>
  <div style="width: 100%;">
        <p style="float: left;width: 100%;"><b>Discipline Applied for:</b> <span style="text-decoration:underline;font-size:12px;">'.$applicantdata['programmesugpg'].'</span></p>
    </div>
   <div style="width: 100%;">
	
        <p style="float: left;width: 100%;"><b>Preferences:</b></p>
		<div style="width: 100%;float: left;">
			<ol>'.$discipline.'</ol>
		</div>
    </div>
   <div style="width: 100%;float: right;">
                

        <p>
            <br>
            <br>
             <div style="height: 2px;width: 200px;background: #000;float: right;margin-right:10px;"></div>
             <br>
            <span style="float: right;margin-right:10px;width:200px;text-align: center;"><b>Signature</b></span>
        <br>
        <br>
        <br>
        </p>
    </div>
      <div style="width: 100%;">
        <p><b>Design Aptitude Test (DAT) is on 9th April 2017 between 10am to 1pm</b></p>
      </div>

 <div style="width: 100%;">
     <p><b>Students should carry a valid photo identity at the time of examination along with the ID-card</b></p>
      </div>
    
    
    </div>
   
</body>' ;
//echo $ht;
date_default_timezone_set("Asia/Kolkata");
$d=time();
$d="Created on ".date("d M Y h:i:sa", $d);

// PUT YOUR HTML IN A VARIABLE
$my_html=$ht."<div>".$d."</div></HTML>";

// SET YOUR PDF OPTIONS
// FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'html',
  "source" => $my_html,
  "action" => 'save',
  "save_directory" => 'dat_halltickets/',
  "file_name" => $rno.'hallticket.pdf');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);
			$i++;
			$rno++;
			}
		}
}