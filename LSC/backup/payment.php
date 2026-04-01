<?php			
	include "php/header.php";
    include_once "php/db.php";


$paymenttype='1';

	if(isset($_POST))
	{
	//echo '<pre>'; print_r($_POST); exit; 
	
	
	extract($_POST);
	
 $paymentgetway = $_POST['paymentmode'];	
	$paytype = $_POST['paytype'];
	
	
	//echo $paytype;exit;
	
	if ($paymentgetway == 'DD payment')
	{

	}
	else
	{
		
include "php/db.php";		

//echo "UPDATE `student` SET `colorRadio` = '$paymentmode', counsellor_name='".$counsellor_name."' WHERE `terms` = 1 AND `memberID` = '$memberid'"; 

		$username = $_SESSION['username'];	
		$paymentmode = $_POST["paymentmode"];
		$query = mysqli_query($connection,"UPDATE `student` SET `colorRadio` = '$paymentmode', counsellor_name='".$counsellor_name."' WHERE `memberID` = '$memberid'");  
		$query = "SELECT * FROM student WHERE `memberID` = '$memberid'";
		$sql2 = mysqli_query($connection,$query);
		
		
		
		$count = mysqli_num_rows($sql2);

     $paymenttype=$_POST["paymenttype"];


	//$paymenttype=2;

     
        if($count>0)
        {
		while ($row = mysqli_fetch_assoc($sql2)) 
		{ 
        $row['name'];
        $row['lastname'];
        $row['email'];
        $row['phonenumber'];
        $row['lastname'];
        $row['address'];
        $row['desciplines'];
        $row['city'];
        $row['state'];
        $row['country'];
        $row['pincode'];
        $row['memberID'];
        $paymentgetway = $_POST['paymentmode'];
        
        $fullname=$row['name']." ".$row['lastname'];
        
        if($paymentmode=='payu')
      {


  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20).$memberid;
  
  $posted['firstname'] = $row['name'];
  $posted['email'] = $row['email'];
  $posted['phone'] = $row['phonenumber'];
  $posted['lastname'] = $row['lastname'];
  $posted['address1'] =  $row['address'];
  $posted['city'] =  $row['city'];
  $posted['state'] =  $row['state'];
  $posted['country'] =  $row['country'];
  $posted['zipcode'] =  $row['pincode'];
  $posted['memberid'] =  $memberid;
  $posted['productinfo'] =  $row['memberID'];
  $posted['surl'] = 'https://www.mitsde.com/LSC/easebuzzsuccess.php';
  $posted['programmesugpg'] = $row['programmesugpg'];
  $posted['furl'] = 'https://www.mitsde.com/LSC/page5_form.php';


//echo $desciplines ; exit;
//$queryamt = "SELECT courses_amount FROM tbl_courses where courses_name='$desciplines'";
//echo $queryamt['courses_amount'];
//echo $paytype;exit;
if($paytype=='lumpsum'){
    
    //echo "SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"; 
    
   $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT lumpsum_amount FROM tbl_courses where courses_name='$desciplines'"));
   
     mysqli_query($connection,"INSERT INTO temp(T_LeadID,T_installmentNo)VALUES('".$row['memberID']."','1')");
     
     
    $posted['amount'] = $setdatacnt['lumpsum_amount'];
    
    //echo $posted['amount']."L"; exit;
    

}
if($paytype=='installment')
{
   // echo "SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"; 
    
     $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"));
   
   mysqli_query($connection,"INSERT INTO temp(T_LeadID,T_installmentNo)VALUES('".$row['memberID']."','1')");
   mysqli_query($connection,"INSERT INTO temp(T_LeadID,T_installmentNo)VALUES('".$row['memberID']."','2')");
   
    $posted['amount'] = $setdatacnt['installment_amount'];
    
    //echo $posted['amount']."I"; exit;
    
}


if($paytype=='partpay1')
{
   // echo "SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"; 
    
     $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT partpay1 FROM tbl_courses where courses_name='$desciplines'"));
   
   mysqli_query($connection,"INSERT INTO temp(T_LeadID,partypay)VALUES('".$row['memberID']."','1')");
  
   
    $posted['amount'] = $setdatacnt['partpay1'];
    
    //echo $posted['amount']."I"; exit;
    
}

if($paytype=='partpay2')
{
   // echo "SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"; 
    
  
  
     $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT partpay2 FROM tbl_courses where courses_name='$desciplines'"));
   

   mysqli_query($connection,"INSERT INTO temp(T_LeadID,partypay)VALUES('".$row['memberID']."','2')");
   
    $posted['amount'] = $setdatacnt['partpay2'];
    
    //echo $posted['amount']."I"; exit;
    
}

if($paytype=='other'){
    
    
       $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT partpay2 FROM tbl_courses where courses_name='$desciplines'"));
   

   mysqli_query($connection,"INSERT INTO temp(T_LeadID,partypay)VALUES('".$row['memberID']."','2')");
   
    $posted['amount'] = '2500';
    
    
}


 if(isset( $posted['txnid']))
 {
	$txnid = $posted['txnid'];
	$query = mysqli_query($connection,"UPDATE `student` SET formstatus='payment done' WHERE `memberID` = '$memberid'");  
 }
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  	
    </div></td>
  </tr>
  <tr>
    <td><div class="wrapper-640">
  
   
   
   
    <!--<form action="OnlinePaymentPro.php" method="post" name="payuForm" style="margin-top:75px;">-->
        
        <form action="OnlinePaymentPro.php" method="post" name="payuForm" style="margin-top:75px;">
     
    
      <table width="600px" align="center" cellpadding="2" cellspacing="2" style="font-family:'Roboto', sans-serif; font-size:13px; ">
        <!--<tr>
          <td width="133"><b>Mandatory Parameters</b></td>
        </tr>-->
    <tr>
          <td width="93"><input name="paymentmode" value="<?php echo (empty($posted['paymentmode'])) ? '' : $posted['paymentmode'] ?>"  type='hidden'/></td>
      <td width="179"><input name="memberid" value="<?php echo (empty($posted['memberid'])) ? '' : $posted['memberid'] ?>"  type='hidden'/></td>
        </tr>
        <tr>
          <td><label>Amount :</label> </td>
          <td><input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>"  /></td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td width="84">&nbsp;</td>
          <td width="216">&nbsp;</td>
        </tr>
        <tr>
          <td><strong>First Name</strong>:</td>
          <td><input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" readonly /></td>
          <td><strong>Last Name:</strong></td>
          <td><input name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" readonly /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Email: </strong></td>
          <td><input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" readonly /></td>
          <td><strong>Phone: </strong></td>
          <td><input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" readonly /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Address:</strong></td>
          <td colspan="3"><input name="address1" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>"  width="400px;" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Application ID:</strong></td>
          
          <td colspan="3"><?=$aid?><input type="hidden" name="productinfo" readonly value="<?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?>"></td>
        </tr>
        <tr>
          <td colspan="3">
          <input name="easebuzzamount" value="<?php echo $posted['amount']; ?>" type='hidden'/>
          <input type="hidden" name="memberid" value='<?=$memberid?>'>
        </td>
        </tr>
        <tr> 
          <?php if(!isset($hash)) { ?>
            <td colspan="4"><input type="submit" value="Submit"  style="background:#606062;color:#FFF;width:99px;margin-left: 122px; font-size: 14px;padding: 8px 10px;"></td>
          <?php } ?>
        </tr>
      </table>
    </form>

    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

</body>

</html>
<?php
      }
      else if($paymentmode=='Easebuzz')
      {


// Easebuzz

  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20).$memberid;
  
  $posted['firstname'] = $row['name'];
  $posted['email'] = $row['email'];
  $posted['phone'] = $row['phonenumber'];
  $posted['lastname'] = $row['lastname'];
  $posted['address1'] =  $row['address'];
  $posted['city'] =  $row['city'];
  $posted['state'] =  $row['state'];
  $posted['country'] =  $row['country'];
  $posted['zipcode'] =  $row['pincode'];
  $posted['memberid'] =  $memberid;
  $posted['productinfo'] =  $row['memberID'];
  $posted['surl'] = 'https://www.mitsde.com/LSC/easebuzzsuccess.php';
  $posted['programmesugpg'] = $row['programmesugpg'];
  $posted['furl'] = 'https://www.mitsde.com/LSC/page5_form.php';

    if($paytype=='lumpsum'){
        
        //echo "SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"; 
        
   $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT lumpsum_amount FROM tbl_courses where courses_name='$desciplines'"));
   
    mysqli_query($connection,"INSERT INTO temp(T_LeadID,T_installmentNo)VALUES('".$row['memberID']."','1')");
   
   
    $posted['amount'] = $setdatacnt['lumpsum_amount'];

    // echo $posted['amount']. "L"; exit;

}
if($paytype=='installment')
{
   // echo "SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"; 
    
     $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"));
   
   mysqli_query($connection,"INSERT INTO temp(T_LeadID,T_installmentNo)VALUES('".$row['memberID']."','1')");
   mysqli_query($connection,"INSERT INTO temp(T_LeadID,T_installmentNo)VALUES('".$row['memberID']."','2')");
   
    $posted['amount'] = $setdatacnt['installment_amount'];
    
    //echo $posted['amount']."I"; exit;
    
}


if($paytype=='partpay1')
{
   // echo "SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"; 
    
     $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT partpay1 FROM tbl_courses where courses_name='$desciplines'"));
   
   mysqli_query($connection,"INSERT INTO temp(T_LeadID,partypay)VALUES('".$row['memberID']."','1')");
  
   
    $posted['amount'] = $setdatacnt['partpay1'];
    
    //echo $posted['amount']."I"; exit;
    
}

if($paytype=='partpay2')
{
   // echo "SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"; 
    
     $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT partpay2 FROM tbl_courses where courses_name='$desciplines'"));
   

   mysqli_query($connection,"INSERT INTO temp(T_LeadID,partypay)VALUES('".$row['memberID']."','2')");
   
    $posted['amount'] = $setdatacnt['partpay2'];
    
    //echo $posted['amount']."I"; exit;
    
}


if($paytype=='other'){
    
    
       $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT partpay2 FROM tbl_courses where courses_name='$desciplines'"));
   

   mysqli_query($connection,"INSERT INTO temp(T_LeadID,partypay)VALUES('".$row['memberID']."','2')");
   
    $posted['amount'] = '2500';
    
    
}


 if(isset( $posted['txnid']))
 {
	$txnid = $posted['txnid'];
	$query = mysqli_query($connection,"UPDATE `student` SET formstatus='payment done' WHERE `memberID` = '$memberid'");  
 }
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  	
    </div></td>
  </tr>
  <tr>
    <td><div class="wrapper-640">
  
    <?php if(isset($formError)) { ?>
    <br/>
      
    <?php } ?>
   
    <!-- <div class="sectionheading">
		<span>H. Payment Details</span>
	  </div>-->
    <form action="easepayformsubmit.php" method="post" name="payuForm" style="margin-top:75px;">
     
    
      <table width="600px" align="center" cellpadding="2" cellspacing="2" style="font-family:'Roboto', sans-serif; font-size:13px; ">
        <!--<tr>
          <td width="133"><b>Mandatory Parameters</b></td>
        </tr>-->
    <tr>
          <td width="93"><input name="paymentmode" value="<?php echo (empty($posted['paymentmode'])) ? '' : $posted['paymentmode'] ?>"  type='hidden'/></td>
      <td width="179"><input name="memberid" value="<?php echo (empty($posted['memberid'])) ? '' : $posted['memberid'] ?>"  type='hidden'/></td>
        </tr>
        <tr>
          <td><label>Amount :</label> </td>
          <td><input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" /></td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td width="84">&nbsp;</td>
          <td width="216">&nbsp;</td>
        </tr>
        <tr>
          <td><strong>First Name</strong>:</td>
          <td><input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" readonly /></td>
          <td><strong>Last Name:</strong></td>
          <td><input name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" readonly /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Email: </strong></td>
          <td><input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" readonly /></td>
          <td><strong>Phone: </strong></td>
          <td><input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" readonly /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Address:</strong></td>
          <td colspan="3"><input name="address1" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>"  width="400px;" /></td>
        </tr>
        <tr>
          <td><b>Application ID</b></td>
          <td colspan="3"><?php echo $aid; ?></td>
        </tr>
        <tr>
          
          <td colspan="3"><input type="hidden" name="productinfo" readonly value="<?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?>"></td>
        </tr>
        <tr>
          <td colspan="3">
          <input name="easebuzzamount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" type='hidden'/>
        </td>
        </tr>
        <tr> 
          <?php if(!isset($hash)) { ?>
            <td colspan="4"><input type="submit" value="Submit"  style="background:#606062;color:#FFF;width:99px;margin-left: 122px; font-size: 14px;padding: 8px 10px;"/></td>
          <?php } ?>
        </tr>
      </table>
    </form>

    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

</body>

</html>
<?php



      }
		else if($paymentmode=='HDFC')
		{
		    
		    	//-----------------------------------------------------------------------HDFC-------------------------------------------------------------------
		    
		      $posted['productinfo'] =  $row['memberID'];
		    
		    if($paytype=='lumpsum'){
        
        //echo "SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"; 
        
   $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT lumpsum_amount FROM tbl_courses where courses_name='$desciplines'"));
   
    mysqli_query($connection,"INSERT INTO temp(T_LeadID,T_installmentNo)VALUES('".$row['memberID']."','1')");
   
   
    $posted['amount'] = $setdatacnt['lumpsum_amount'];

    // echo $posted['amount']. "L"; exit;

}
if($paytype=='installment')
{
   // echo "SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"; 
    
     $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"));
   
   mysqli_query($connection,"INSERT INTO temp(T_LeadID,T_installmentNo)VALUES('".$row['memberID']."','1')");
   mysqli_query($connection,"INSERT INTO temp(T_LeadID,T_installmentNo)VALUES('".$row['memberID']."','2')");
   
    $posted['amount'] = $setdatacnt['installment_amount'];
    
    //echo $posted['amount']."I"; exit;
    
}


if($paytype=='partpay1')
{
   // echo "SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"; 
    
     $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT partpay1 FROM tbl_courses where courses_name='$desciplines'"));
   
   mysqli_query($connection,"INSERT INTO temp(T_LeadID,partypay)VALUES('".$row['memberID']."','1')");
  
   
    $posted['amount'] = $setdatacnt['partpay1'];
    
    //echo $posted['amount']."I"; exit;
    
}

if($paytype=='partpay2')
{
   // echo "SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"; 
    
     $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT partpay2 FROM tbl_courses where courses_name='$desciplines'"));
   

   mysqli_query($connection,"INSERT INTO temp(T_LeadID,partypay)VALUES('".$row['memberID']."','2')");
   
    $posted['amount'] = $setdatacnt['partpay2'];
    
    //echo $posted['amount']."I"; exit;
    
}


if($paytype=='other'){
    
    
       $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT partpay2 FROM tbl_courses where courses_name='$desciplines'"));
   

   mysqli_query($connection,"INSERT INTO temp(T_LeadID,partypay)VALUES('".$row['memberID']."','2')");
   
    $posted['amount'] = '2500';
    
    
}    
		    
function generatetransactionid()
           {
           $transactionId=date('dmyhis');
           return $transactionId;  
           }
  $transactionId=generatetransactionid();
  
  //echo "</br>SELECT * FROM tbl_transactions_details WHERE order_id = '".$transactionId."'";
  $result1 = mysqli_query($connection,"SELECT * FROM tbl_transactions_details WHERE order_id = '".$transactionId."'");
       
		
        if(mysqli_num_rows($result1)>0)
        { 
          //echo "</br>not zero1";
           function generatetransactionid1()
           {
           $transactionId=date('dmyhis');
           return $transactionId;  
           }
           
           $transactionId=generatetransactionid1(); 
           
          }
        else
        {
           $transactionId=generatetransactionid();
        }
  //---------------------------------------------------create reponse url for course wise transation
  
  /*if($row['desciplines']=='PGCM in Modern Office Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGC-MOM.php";
      $marchent_id="204951";
      $accesskay='AVFR82GA85BC53RFCB';
      $workingKey='436062CA23EEEBD159EA8EFD9513D53A';
  }
  
  if($row['desciplines']=='PGCM in Retail Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGC-RM.php";
      $marchent_id="204963";
      
      $accesskay='AVRR82GA85BC66RRCB';
      $workingKey='2233E4B2022B64A3F9D88D76DC17D23D';
  }
  
  if($row['desciplines']=='PGDBA Finance')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDBA-FM.php";
      $marchent_id="204954";
      
      $accesskay='AVJR82GA85BC56RJCB';
      $workingKey='DC52C68778D6D914E8C3B283FD8E0794';
  }
  
  if($row['desciplines']=='PGDBA Human Resource Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDBA-HRM.php";
      $marchent_id="204955";
      
      $accesskay='AVJR82GA85BC57RJCB';
      $workingKey='05439AD2C7A36DC0C13295D46BA39E7F';
  }
  
  if($row['desciplines']=='PGDBA Information Technology Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDBA-IT.php";
      $marchent_id="204956";
      
      $accesskay='AVKR82GA85BC58RKCB';
      $workingKey='53B15C1F6C110E62031A8203B52D503F';
  }
  
  if($row['desciplines']=='PGDBA Marketing Management')
  {
      $response_url="https://www.mitsde.com/apply/PGDBA-MarketingM.php";
      $marchent_id="204959";
      
      $accesskay='AVPR82GA85BC61RPCB';
      $workingKey='3416642A55B1F02DE0E5A6F937CABF8D';
  }
  
  if($row['desciplines']=='PGDBA Materials Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDBA-MM.php";
      $marchent_id="204960";
      
      $accesskay='AVPR82GA85BC62RPCB';
      $workingKey='0735A44EDB8F2BA071482C85D5663657';
  }
  
  if($row['desciplines']=='PGDBA Operations Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDBA-OM.php";
      $marchent_id="204961";
      
      $accesskay='AVQR82GA85BC63RQCB';
      $workingKey='DCE96E41DDD00E0ED6750F281DEADA0E';
  }
  
  if($row['desciplines']=='PGDBA Supply Chain Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDBA-SCM.php";
      $marchent_id="204958";
      
      $accesskay='AVOR82GA85BC60ROCB';
      $workingKey='62DCC89A2AEE9A0035C2F2809EDD7010';
  }
  
  if($row['desciplines']=='PGDM in Project Management')
  {
      $response_url="https://www.mitsde.com/apply/ccavResponseHandlerPGDMPROJET.php";
      $marchent_id="204962";
      
      $accesskay='AVRR82GA85BC64RRCB';
      $workingKey='8AFD593D347F31B32FFA30D457134633';
  }
  
  if($row['desciplines']=='PGDM in Energy Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponseEneryMng.php";
      $marchent_id="193023";
      
      $accesskay='AVNW80FJ85AH78WNHA';
      $workingKey='FF2048EE9548EAE83BF4797292611691';
  }
  
  if($row['desciplines']=='PGDM in Insurance and Risk Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDM-RAIM.php";
      $marchent_id="204966";
      
      
      $accesskay='AVUR82GA85BC69RUCB';
      $workingKey='640FF53455E434F6BB51EAAD3C24316A';
  }
  
  if($row['desciplines']=='PGDM in Information Technology')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDM-IT.php";
      $marchent_id="204946";
      
      $accesskay='AVZQ82GA85BC47QZCB';
      $workingKey='8D8D9249AC02781010E12F90F1008976';
  }
  
  if($row['desciplines']=='PGDM in Infrastructure Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDM-IM.php";
      $marchent_id="204947";
      
      $accesskay='AVBR82GA85BC48RBCB';
      $workingKey='C7DD5373F12C01985194B8BE95AF8B94';
  }
  
  if($row['desciplines']=='PGDM in Marketing Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDM-MarketingM.php";
      $marchent_id="204949";
      
      $accesskay='AVDR82GA85BC51RDCB';
      $workingKey='831E0D1F43412EF027194B040EA97081';
  }
  
  if($row['desciplines']=='PGDM in Material Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDM-MaterialM.php";
      $marchent_id="204950";
      
      $accesskay='AVDR82GA85BC52RDCB';
      $workingKey='EC975D01DE2479B594447FFB26A78E0B';
  }
  
  if($row['desciplines']=='PGDM in Logistics and Supply Chain Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDM-LSCM.php";
      $marchent_id="204948";
      
      $accesskay='AVCR82GA85BC49RCCB';
      $workingKey='71449E1C8D8F90FB3A23F304AD673DB6';
  }
  
  if($row['desciplines']=='PGDM in Telecom Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDM-TM.php";
      $marchent_id="204967";
      
      $accesskay='AVVR82GA85BC70RVCB';
      $workingKey='EE0041CA071401F731EB53B341F4BAC2';
  }
  
  if($row['desciplines']=='PGDM in Financial Services')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDM-FS.php";
      $marchent_id="204953";
      
      $accesskay='AVJR82GA85BC55RJCB';
      $workingKey='8C5F3666EE0D402AC5265BD30928305D';
  }
  
  if($row['desciplines']=='PGDM in Operations Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDM-OM.php";
      $marchent_id="204952";
      
      $accesskay='AVIR82GA85BC54RICB';
      $workingKey='B4B1EF39A4858DE79F232B2254715745';
  }
  
  if($row['desciplines']=='PGDM in Retail Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDM-RM.php";
      $marchent_id="204964";
      
      $accesskay='AVTR82GA85BC67RTCB';
      $workingKey='C8A08180B6284B601528599119D9ADCD';
  }
  
  if($row['desciplines']=='PGDM in Finance Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDM-FM.php";
      $marchent_id="204942";
      
      $accesskay='AVEQ82GA85BC41QECB';
      $workingKey='820BCAA1AC62CF2424AE5C0EA6BB90C8';
  }
  
  if($row['desciplines']=='PGDM in Human Resource Management')
  {
      $response_url="https://www.mitsde.com/apply/ResponsePGDM-HRM.php";
      $marchent_id="204957";
      
      $accesskay='AVLR82GA85BC59RLCB';
      $workingKey='FA07F8147F14A70EDDD10153C0E8A10C';
  }*/
  
      $response_url="https://www.mitsde.com/LSC/ccavResponseHandler.php";
      
      /*$marchent_id="193023";
      $accesskay='AVNW80FJ85AH78WNHA';
      $workingKey='FF2048EE9548EAE83BF4797292611691';*/
      
      
      $marchent_id="236596";
      $accesskay='AVYD88GJ48CA97DYAC';
      $workingKey='277C1DEFA1388ACD68B11FE6A467A577';
?>
   
          
			
			<form action="ccavRequestHandler.php" name="OtherFeesPayment" id="OtherFeesPayment" onSubmit="return validate(this);" method="post">
                
                        
					<input type="hidden" name="tid" id="tid"/> 
				    <input type="hidden" name="merchant_id" id="merchant_id" value="<?php echo $marchent_id; ?>"/> <!-----other fees (UTM) for other Fee------->
				    <input type="hidden" name="accesskay" value="<?php echo $accesskay; ?>" />
				    <input type="hidden" name="workingkey" value="<?php echo $workingKey; ?>" />
				    <input type="hidden" name="order_id" value="<?php echo $transactionId; ?>"/>  
				    <input type="hidden" name="currency" value="INR"/> 
				    <input type="hidden" name="redirect_url" id="redirect_url" value="<?php echo $response_url;?>"/> 
				    <input type="hidden" name="cancel_url" id="cancel_url" value="<?php echo $response_url;?>"/> 
			 	    <input type="hidden" name="language" value="EN"/> 
						
						
 <div class="col-sm-6"> <div class="form-group"><input type="text" class="form-control" name="merchant_param3" value="<?php echo $row['memberID']; ?>"  id="merchant_param3" ></div></div>
 
 <div class="col-sm-6"> <div class="form-group"><input type="text" class="form-control" name="delivery_name" id="StudentName" value="<?php echo $fullname; ?>" ></div></div>
                              <input type="hidden" name="delivery_address" value="Pune"/>
							  
  <div class="col-sm-6"> <div class="form-group"><input type="text" class="form-control" value="<?php echo $row['email']; ?>"  name="billing_email" id="EmailID" ></div></div>
  
   <div class="col-sm-6"><div class="form-group"><input type="text" class="form-control" name="delivery_tel" id="MobileNo" value="<?php echo $row['phonenumber']; ?>" > </div></div>
   
  <div class="col-sm-6"><div class="form-group"><input type="text" class="form-control" name="merchant_param1" id="Course" value="<? echo $row['desciplines']; ?>" > </div></div>
 
 
 <!--<div class="col-sm-6"> <div class="form-group"><select  name="merchant_param1" onChange="geturlval(this.value,this.id);" id="Course" class="form-control" id="exampleSelect1">
                  <option value="">Select Course</option>
				                       <?php 
							/* $getCourseList=mysql_query("SELECT * FROM `pay_getway_courses_list` order by id");
							       
									while($row=mysql_fetch_array($getCourseList))
														{*/
												     ?>
				                        <option value="<?php //echo $row['ME_Name']?>"><?php //echo $row['ME_Name']?></option>
										
				 <?php
				 
												//		}
				 ?> 
				 
                 
                  
            </select>	</div></div>-->
			
			                   
		        
		        
		        	<input type="hidden" name="delivery_address" value=""/></td>
		        
		        	<input type="hidden" name="delivery_city" value=""/></td>
		        
		        	<input type="hidden" name="delivery_state" value=""/></td>
		        
		        	<input type="hidden" name="delivery_zip" value=""/></td>
		        
		        	<input type="hidden" name="delivery_country" value=""/></td>
		        	<input type="hidden" name="merchant_param2" value="NewEnroll"/></td>
		        	<input type="hidden" name="merchant_param4" value="<?php echo $row['email']; ?>"/></td>
		        	<input type="hidden" name="merchant_param5" value="<?php echo $fullname; ?>"/></td>
		        
			
			
			
			

   <!--<div class="col-sm-6"><div class="form-group"><select onChange="geturlval(this.value,this.id);" class="form-control" name="merchant_param2" id="FeesType" onChange="getState(this.value)">
                  <option value="">Select Fees type</option>
				  
				 
                  <?php 
				 /*$getstudentinfo=mysql_query("SELECT * FROM `feeshead` ORDER BY `feeshead`.`FeesID` ASC"); 
                   while($row=mysql_fetch_array($getstudentinfo))
	                {
	                   $FeesHead= $row['FeesHead'];
					   $FeesID= $row['FeesID'];  */
			      ?>
		
			      <option value="<?php //echo $FeesHead; ?>"><?php //echo $FeesHead; ?></option>
                  <?php
				 // }
				  ?> 
                  
            </select>	</div></div>-->
			
			
			<div id="emi_div" style="display: none">
			         <table border="1" width="100%">
			         <tr> <td colspan="2">EMI Section </td></tr>
			         <tr> <td> Emi plan id: </td>
			            <td><input readonly type="text" id="emi_plan_id"  name="emi_plan_id" value=""/> </td>
			         </tr>
			         <tr> <td> Emi tenure id: </td>
			            <td><input readonly type="text" id="emi_tenure_id" name="emi_tenure_id" value=""/>  </td>
			         </tr>
			         <tr><td>Pay Through</td>
				         <td>
					         <select name="emi_banks"  id="emi_banks">
					         </select>
				         </td>
			        </tr>
			        <tr><td colspan="2">
				         <div id="emi_duration" class="span12">
		                	<span class="span12 content-text emiDetails">EMI Duration</span>
		                    <table id="emi_tbl" cellpadding="0" cellspacing="0" border="1" >
							</table> 
		                </div>
				        </td>
			        </tr>
			        <tr>
			        	 <td id="processing_fee" colspan="2">
			        	</td>
			        </tr>
			        </table>
		        </div>
			
			
			
			
 
 <div class="form-group">
  <div id="statediv"><input type="text" class="form-control" name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>"></div> 
	 </div>
  

               <!-- <div class="form-group">
                 <select class="form-control" id="db">
                  <option>Select Payment Option</option>
				  <option>HDFC</option>
                  <option>PayU</option>
                  <option>EaseBuzz</option>
                  </select>
                
                  </div>-->
  
		
             
		
		<!--<div class="alert alert-info" role="alert">Note for online payment charges :<br> 
				 <ul class="list">
                    <li>HDFC -: 0% extra changers </li>
                 	
                 </ul>
                
                 
		</div> -->  
  
  
  
                  <button style="background:#606062;" type="submit" onclick="myfunction()" class="btn btn-primary">Pay Now</button>
				  
				  
				
				  
				  </form>
			<?php
			
			
		}
		elseif($paymentmode=='Loan')
		{
		    if($paytype=='lumpsum'){
        
        //echo "SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"; 
        
   $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT lumpsum_amount FROM tbl_courses where courses_name='$desciplines'"));
   
    mysqli_query($connection,"INSERT INTO temp(T_LeadID,T_installmentNo)VALUES('".$row['memberID']."','1')");
   
   
    $posted['amount'] = $setdatacnt['lumpsum_amount'];

    // echo $posted['amount']. "L"; exit;

}
if($paytype=='installment')
{
   // echo "SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"; 
    
     $setdatacnt = mysqli_fetch_assoc(mysqli_query($connection,"SELECT installment_amount FROM tbl_courses where courses_name='$desciplines'"));
   
   mysqli_query($connection,"INSERT INTO temp(T_LeadID,T_installmentNo)VALUES('".$row['memberID']."','1')");
   mysqli_query($connection,"INSERT INTO temp(T_LeadID,T_installmentNo)VALUES('".$row['memberID']."','2')");
   
    $posted['amount'] = $setdatacnt['installment_amount'];
    
    
    
}
		?>
		    
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Education Loan Provider</h2>


<table>
  <tr>
    <th></th>
    <th>provider Name</th>
    <th>Action</th>
  </tr>
  <?php 
      $getlp = mysqli_query($connection,"SELECT * FROM loanprovider");  
      while($getdetails=mysqli_fetch_array($getlp))
      {
  ?>
  <tr>
    <td><img src="<?php echo $getdetails['lp_logo_url'] ?>"></td>
     <td><?php echo $getdetails['lp_name'];?></td>
    <td><a href="getloan.php?provider_short_code=<?php echo $getdetails['provider_short_code'];?>&leadid=<?php echo $row['memberID'];?>&firstname=<?php echo $row['name'];?>&lastname=<?php echo $row['lastname'];?>&email=<?php echo $row['email'];?>&phone=<?php echo $row['phonenumber']?>&amount=<?php echo $posted['amount'];?>&aadhar_number=<?php echo $row['aadhar'];?>&date_of_birth=<?php echo $row['dateofbirth'];?>">Apply Now</a></td>
  </tr>
  <?php
      }
  ?>
</table>

</body>
</html>
			<?php  
		    
		}
		

}
}

}
	}
	else
	{
		?>
		<div style="width:100%;background: #fff;height:200px;">
		<h2>Invalid option chosen</h2>
		</div>
		<?php
	}
	
	
	function UploadDD($aid,$f,$l)
	{
		$file_formats = array("pdf","jpg","jpeg","png","svg","gif");
$id=$aid;
$ftype="dd";
$fname=$f."_".$l;	
$filepath =GetStudentFolder($aid,$f,$l);
 $name = $_FILES['ddfile']['name']; // filename to get file's extension
 $size = $_FILES['ddfile']['size'];
 
 if (strlen($name)) {
 	$extension = substr($name, strrpos($name, '.')+1);
 	if (in_array($extension, $file_formats)) { // check it if it's a valid format or not
 		if ($size < (1024 * 1024)) { // check it if it's bigger than 2 mb or no
 			$filename =$fname."_".$id."_".$ftype.".". $extension;
 			$tmp = $_FILES['ddfile']['tmp_name'];
 			$ddfileandpath = $filepath."/".$filename;
 				if (move_uploaded_file($tmp, $filepath."/".$filename)) {
				
				mysqli_query($connection,"UPDATE tbl_students_data set dd='".$ddfileandpath."' WHERE memberID = '".$memberid."'");		
 				
 				}
 		} else {
 			echo "Your file size is bigger than 1MB.";
 		}
 	} else {
 			echo "Invalid file format.";
 	}
 } 
	}
	function GetStudentFolder($aid,$name,$lastname)
		{
			$stdir="";
			if(strpos($aid,"DEUG"))
			$stdir="designug";
			else if(strpos($aid,"DEUG-FASHION"))
			$stdir="designug";
			else if(strpos($aid,"DEUG-CTP"))
			$stdir="designug";
			else if(strpos($aid,"M.Des"))
			$stdir="designpg";
			else if(strpos($aid,"MBA"))
			$stdir="designpg";
			
			$studentfolder="studentdocuments/".$stdir."/".$name."_".$lastname."_".$aid;
			if (!is_dir($studentfolder))
								{
				mkdir($studentfolder, 0777, true);
			}
				
			return $studentfolder;
		}
?>
		    <!--<input type="submit" value="Back" onclick="GotoPrevPage('page5_form.php');" style="background:#606062;color:#FFF;width:99px;margin-left: 359px;margin-top: -20px;font-size: 14px;padding: 8px 10px;position:relative;top:-40px;">-->

