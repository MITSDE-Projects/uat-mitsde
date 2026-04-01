<?php	

ob_start();
session_start();

include("php/db.php");




if(isset($_GET['email'])){
    
    
    $checkemaildata = mysqli_fetch_assoc(mysqli_query($connection,"SELECT COUNT(*) as cnt FROM student WHERE email='".$_GET['email']."'"));
    
    
    
    
    if($checkemaildata['cnt'] < 1) {
        
        header('location:admission-payuform.php?msg=email_not_exists');
        
    }
    
    
}


if(isset($_GET['email']) && $_GET['email']!='') {

$getdtls = mysqli_fetch_assoc(mysqli_query($connection,"SELECT * FROM student WHERE email='".$_GET['email']."'"));

}

$memberid = $getdtls['memberID'];


	$paymentmode=payu;
    
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
  $posted['surl'] = 'https://www.mitsde.com/LSC/admission-response.php';
  $posted['programmesugpg'] = $row['programmesugpg'];
  $posted['furl'] = 'https://www.mitsde.com/applyadmission-payuform.php';



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
    
    
    
    function getsetemail(val){
        
        window.location.href='admission-payuform.php?email='+val;
        
    }
    
    
  </script>
  	
    </div></td>
  </tr>
  <tr>
    <td><div class="wrapper-640">
  
   <h3 style="text-align:center;">MIT School of Distance Education Admission Fee Portal.</h3>
   
   
    <!--<form action="OnlinePaymentPro.php" method="post" name="payuForm" style="margin-top:75px;">-->
        
        <form action="OnlinePaymentPro_inst.php" method="post" name="payuForm" style="margin-top:75px;">
     
    
      <table width="600px" align="center" cellpadding="2" cellspacing="2" style="font-family:'Roboto', sans-serif; font-size:13px; ">
        <!--<tr>
          <td width="133"><b>Mandatory Parameters</b></td>
        </tr>-->
        <tr>
          <td width="93"><input name="paymentmode" value="<?php echo (empty($posted['paymentmode'])) ? '' : $posted['paymentmode'] ?>"  type='hidden'/></td>
      <td width="179"><input name="memberid" value="<?php echo $memberid; ?>"  type='hidden'/></td>
        </tr>
        
        <tr>
          <td><strong>Email: </strong></td>
          <td><input  name="email" required  onblur="getsetemail(this.value);" id="email" value="<?php if(isset($_GET['email'])) { echo $_GET['email']; }?>"  /></td>
          <td><strong>Phone: </strong></td>
          <td><input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>"  /></td>
        </tr>
        
        
        <tr>
          <td><label>Amount:</label> </td>
          <td><input name="amount" required value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>"  /></td>
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
          <td><input name="firstname" required id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>"  /></td>
          <td><strong>Last Name:</strong></td>
          <td><input name="lastname" required id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>"  /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
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
          
          
          <td colspan="3"><?=$aid?><input type="hidden" name="productinfo"  value="<?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?>"></td>
        </tr>
        <tr>
          <td colspan="3">
          <input name="easebuzzamount" value="<?php echo $posted['amount']; ?>" type='hidden'/>
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
