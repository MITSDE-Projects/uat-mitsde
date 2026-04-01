<?php include "php/header.php";

  $accountNo=$_POST['AccountNo'];
$IFSC=$_POST['IFSC']; 
 $channel=$_POST['channel']; 
//die;
if(!empty($accountNo) && !empty($accountNo) && !empty($channel))
{
  
$name;
$phonenumber;
$ExtraEdgeID;
$account=$accountNo;
$stardate=date('Y-m-d');
$amount="1500.00";
$enddate=date("Y-m-d",strtotime("+6 month",strtotime($stardate)));
date_default_timezone_set('Asia/Kolkata');
echo $currentDT= date('d-m-Y H:i');
include('Security.php');
$security = new Security('k2hLr4X0ozNyZByj5DT66edtCEee1x+6', 'k2hLr4X0ozNyZByj5DT66edtCEee1x+6');
$checksum = $security->generate_checksum($account, $stardate, $enddate, $amount,'');
$msgid='MIT'.rand();

  
  if (!mysqli_query($connection,"INSERT INTO `e_mandate` (`em_id`, `extraege_id`, `CheckSum`, `MsgId`, `Customer_Name`,
  `Customer_Mobile`,  `Customer_AccountNo`, `Customer_StartDate`, `Customer_ExpiryDate`, `DebitAmount`, `Channel`, `currentDT`) VALUES (NULL, '$ExtraEdgeID', '$checksum', '$msgid', '$name',
  '$phonenumber', '$account', '$stardate', '$enddate', '$amount', '$channel', '$currentDT')")) {
  print_r(mysqli_error_list($connection));
} 
else
{
  ?>
  <div class="content" style="background:#FFF;" >
                    
                    
                    
                    
            <form action="emandateprocess.php" method="post" class="j-form" onsubmit="return validatepage1();">
                    
                
			
          	<div class="sectionheading" style="margin-top:45px !important;position:relative;top:4px;">
					<span>A. Bank Details </span>
				</div>
         
              <div style="clear:both"></div>
              
                 
               <div style="clear:both"></div>
                  <div class="dp"><strong> Account No</strong>
                  <input name="AccountNo" type="text"  placeholder="Enter Account No" value="">
                  </div>

                 	<div class="dp"><strong>IFSC Code</strong><br />
                    <input name="IFSC"  type="text" value="" placeholder="Enter IFSC">
                    <input name="name"  type="hidden" value="<?php echo $name;?>">
                    <input name="phone"  type="hidden" value="<?php echo $MobileNumber;?>" >
                    <input name="ExtraEdgeID"  type="hidden" value="<?php echo $ExtraEdgeID;?>">
                    </div>
                    <div class="dp"><strong>Mode of authentication</strong><br />
                    <div style="padding-top:25px;">
                    <input type="radio" id="channel" name="channel" value="Net"> <b>Net Banking</b> &nbsp;&nbsp;
                    <input type="radio" id="channel" name="channel" value="Debit"> <b>Debit Cart</b>
                     </div>

                    </div>
                     	<div style="clear:both"></div>
              <div style="margin-top:25px; float:right;">
                   <input type="submit" name="submit" value="Next" style="background:#606062;color:#FFF;width:99px;font-size:14px;padding:5px 10px;" >
				  </div>
             
				
                    
                  
                  </form>
			
		
			
				
<script src="country/js/yogesh.js"></script>
<script src="country/js/index.js"></script>
        </div>
  <?
}
  
  

    
    
    
}
else
{
    echo "</br>account number and IFSC code not inserted properly, please enter again";
    die;
}



//$name="sanjay";
 ?>

<form id="PostForm" name="PostForm" action="https://emandateut.hdfcbank.com/Emandate.aspx" method="POST"> 

</br>UtilCode <input type="text" ID="UtilCode" name="UtilCode" value="<?php echo "\x".$security->encrypt('NACH00000000000382');?>" /> 

</br>Short_Code <input type="text" ID="Short_Code" name="Short_Code" value="<?php echo "\x".$security->encrypt('MSDE');?>" /> 
</br>Merchant_Category_Code <input type="text" ID="Merchant_Category_Code" name="Merchant_Category_Code" value="U099" /> 
</br>CheckSum <input type="text" ID="CheckSum" name="CheckSum" value="<?php echo $checksum; ?>" /> 
</br>MsgId <input type="text" ID="MsgId" name="MsgId" value="<?php echo $msgid;?>" /> 
</br>Customer_Name <input type="text" ID="Customer_Name" name="Customer_Name" value="<?php echo "\x".$security->encrypt($name);?>" />
</br>Customer_TelphoneNo <input type="text" ID="Customer_TelphoneNo" name="Customer_TelphoneNo" value="" /> 
</br>Customer_EmailId <input type="text" ID="Customer_EmailId" name="Customer_EmailId" value="" /> 
</br>Customer_Mobile <input type="text" ID="Customer_Mobile" name="Customer_Mobile" value="<?php echo "\x".$security->encrypt($phonenumber);?>" /> 
</br>Customer_AccountNo <input type="text" ID="Customer_AccountNo" name="Customer_AccountNo" value="<?php echo "\x".$security->encrypt($account);?>" /> 
</br>Customer_StartDate <input type="text" ID="Customer_StartDate" name="Customer_StartDate" value="<?php echo $stardate;?>" /> 
</br>Customer_ExpiryDate <input type="text" ID="Customer_ExpiryDate" name="Customer_ExpiryDate" value="<?php echo $enddate;?>" /> 
</br>Customer_DebitAmount <input type="text" ID="Customer_DebitAmount" name="Customer_DebitAmount" value="1500.00" /> 

</br>Customer_MaxAmount <input type="text" ID="Customer_MaxAmount" name="Customer_MaxAmount" value="" /> 
</br>Customer_DebitFrequency <input type="text" ID="Customer_DebitFrequency" name="Customer_DebitFrequency" value="MNTH" /> 
</br>Customer_SequenceType <input type="text" ID="Customer_SequenceType" name="Customer_SequenceType" value="RCUR" /> 
</br>Customer_InstructedMemberId <input type="text" ID="Customer_InstructedMemberId" name="Customer_InstructedMemberId" value="<?php echo $IFSC;?>" /> 
</br>Customer_Reference1 <input type="text" ID="Customer_Reference1" name="Customer_Reference1" value="" /> 
</br>Customer_Reference2 <input type="text" ID="Customer_Reference2" name="Customer_Reference2" value="" /> 
</br>Channel <input type="text" ID="Channel" name="Channel" value="Net" /> 
</br>Filler1 <input type="text" ID="Filler1" name="Filler1" value="<?php echo $ExtraEdgeID;?>" /> 
</br>Filler2 <input type="text" ID="Filler2" name="Filler2" value="" /> 
</br>Filler3 <input type="text" ID="Filler3" name="Filler3" value="" /> 
</br>Filler4 <input type="text" ID="Filler4" name="Filler4" value="" /> 
</br>Filler5 <input type="text" ID="Filler5" name="Filler5" value="S" /> 
</br>Filler6 <input type="text" ID="Filler6" name="Filler6" value="" /> 
</br>Filler7 <input type="text" ID="Filler7" name="Filler7" value="" /> 
</br>Filler8 <input type="text" ID="Filler8" name="Filler8" value="" /> 
</br>Filler9 <input type="text" ID="Filler9" name="Filler9" value="" /> 
</br>Filler10 <input type="text" ID="Filler10" name="Filler10" value="" /> 
<button type="submit" name="sumit">Submit e-mendate</button>
</form> 
 <!--<script language='javascript'>var vPostForm = document.PostForm;vPostForm.submit();</script> -->