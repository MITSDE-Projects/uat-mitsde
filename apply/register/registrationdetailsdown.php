<?php
ob_start();
require 'class.phpmailer.php'; 
require 'class.smtp.php'; 
?>
<?php
$conn = mysqli_connect("localhost", "mitsde_studentda", "Custom@123","mitsde_studentdata");

$curdate = date('Y-m-d');

date_default_timezone_set('Asia/Kolkata');



$memberid=$_GET['memberid'];
if(isset($memberid))

{
    $memberid;
  // echo "</br>SELECT name,lastname,email,phonenumber,password,memberID,created FROM `student` WHERE  memberID='$memberid'";
     $fetch=mysqli_query($conn,"SELECT name,lastname,email,phonenumber,password,memberID,created FROM `student` WHERE  memberID='$memberid'");
      $fetchrow=mysqli_fetch_array($fetch);
      $fetchrowno=mysqli_num_rows($fetch);
     
     if($fetchrowno!=0)
     {
        $fetchrow['phonenumber'];
         $fetchrow['email'];
        // echo "</br>fetch_password-->".$fetchrow['password'];
        
        //echo "</br>hash passowrd-->".$hashedpassword = '$2y$10$lL6ApVO.6WcMcyqasTlgrep6LDUkpdZ.zQ1WuUC0JfZV3R0v.dIq.'; //  123456
       $hashedpassword1 = '$2y$10$qV.U8AtMCRjtSayxnIsr/uPAx9E.ejW6Rjy4blPGe1tQX6/gaAAhe'; //  MIT@2023
         
      //echo "</br>UPDATE student SET password='$hashedpassword1', active='Yes' WHERE memberID='$memberid'";
         
         $fetch="UPDATE student SET password='$hashedpassword1', active='Yes' WHERE memberID='$memberid'";
         
         if (mysqli_query($conn, $fetch))
         {
             //-----------------------------------------------------------------SEND Mail Function--------------------------	
		   $mail  = new PHPMailer();
           ob_start(); //Turn on output buffering
           $email =  $fetchrow['email'];
?>        
                
                 <p></p><p>Username : <?=$fetchrow['email'];?></p>
                 <p>Password: MIT@2023</p>
                 <p>To activate your account, please click <a href='https://mitsde.com/apply/register/index.php'>Here</a></br></br></p>
                 
			     <p>Regards,<br>Team MIT SDE</p>

                 <?php
                    /*$body  = ob_get_clean();
                          $mail->IsSMTP(); // telling the class to use SMTP
                          $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                        // $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                         $mail->SMTPAuth   = true;                  // enable SMTP authentication
                        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
                        $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
                        $mail->Port       = 465;                   // set the SMTP port for the GMAIL
                        $mail->Username   = "no-replay@mitsde.com";  // GMAIL username
                        $mail->Password   = "NoReplay@123";  */          // GMAIL password
                        
                         $body  = ob_get_clean();
                         // $mail->IsSMTP(); // telling the class to use SMTP
                           $mail->IsMail(); 
                          $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing) // 1 = errors and messages
                         $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier                                          // 2 = messages only
                         $mail->SMTPAuth   = true;                  // enable SMTP authentication
                        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
                        $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
                        $mail->Port       = 465;                   // set the SMTP port for the GMAIL
                        $mail->Username   = "no-replay@mitsde.com";  // GMAIL username
                        $mail->Password   = "No@mitsde";            // GMAIL password           // GMAIL password
                
                
                       
                        $mail->SetFrom('admissions@mitsde.com', 'MIT School of Distance Education');
                       
                        $mail->AddReplyTo('no-reply@mitsde.com', 'No-Reply');
                       
                        $mail->Subject = "MIT SDE: Registration 2023 / 24";
                       
                        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
                       
                        $mail->MsgHTML($body);
                       
                          $address = $email;
                          $mail->AddAddress($address);
                          $mail->AddBCC('jayjeet.deshmukh@mitsde.com');
                          $mail->AddBCC('priyanka.kaul@mitsde.com');
                          $mail->AddBCC('sanjay.gaikwad@mitsde.com');
                          $mail->AddBCC('priti.thakre@mitsde.com');
                        
                      
                        
                    
                       
                        $mail->Send();

			//----------------------------------------------------------Send Mail Function END----------------------------------------------------
           $msg="Mail Send successfully";
           $Uername=$fetchrow['email'];
           $pass="MIT@2023";
           
             header("location: registrationdetailsdown.php?msg=$msg&username=$Uername&password=$pass");
            } 
            else
            {
           echo "</br>Error updating record: " . mysqli_error($conn);
           }
       
         
         
         
     }
     
}
?>
<script>
function sendmail(id){

	    //alert(id);
       // alert(value);
		window.location.href='registrationdetailsdown.php?memberid='+id; 
	   /*var conf = confirm("Are You Sure Sent To Bucket?");
         if(conf==true){ }*/

	    

	}
</script>
<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
</script>
<link  rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link  rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<link type="text/css" rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
<link type="text/css" rel="icon" href="media/favicon.ico" type="image/x-icon">
</head>
<title>Registration Details</title>
<body>
    <div align="center"><h1>MITSDE - Registration</h1></div>
    <div align="center">
        <p><span style="color: red;" ><?php if(isset($_GET['msg'])){echo $_GET['msg'];}?></span></p>
        <p>Username: <span><?php if(isset($_GET['username'])){echo $_GET['username'];}?></span></p>
        <p>Password: <span><?php if(isset($_GET['password'])){echo $_GET['password'];}?></span></p>
        
    </div>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Student name</th>
                <th>username</th>
                <th>Phone Number</th>
                <th>Register Date</th>
                <th>send mail</th>
                
                
                
            </tr>
        </thead>
        <tbody>
          <?php 
          $i=1;
          $serch=mysqli_query($conn,"SELECT name,lastname,email,phonenumber,password,memberID,created FROM `student` WHERE  formstatus='registered' ORDER BY `created` DESC LIMIT 100");
          
		  while($row=mysqli_fetch_array($serch))
		  {
		  ?>           
		   <tr>
		          <td><?php echo $i;?></td>
		          <td><?php echo $row['name']." ".$row['lastname']; ?></td>
		          <td><?php echo $row['email']; ?></td>
		          
                  <td><?php echo $row['phonenumber']; ?></td>
                  <td><?php echo $row['created']; ?></td>
                  <td><button name="send" id="<?php echo $row['memberID']; ?>" onClick="sendmail(this.id);">Send Mail</button></td>
                  
            </tr>
            <?php
             $i++;
		  }
		 
			?>
        </tbody>
        <tfoot>
            <tr>
                <th>Sr No</th>
                <th>Name</th>
                <th>Email ID</th>
                <th>Mobile No</th>
                <th>Amount</th>
                <th>Payment ID</th>
                <th>Data & Time</th>
            </tr>
        </tfoot>
    </table>

<body>
</html>