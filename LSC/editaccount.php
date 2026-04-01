<?php
$objCore = new Core();

$objCore->initSessionInfo();
$objCore->initFormController();

if($objCore->getSessionInfo()->isLoggedIn()){
	echo "<h1>Logged In</h1>";
	echo "Welcome <b>".$objCore->getSessionInfo()->getUserInfo('email')."</b>, you are logged in. <br><br>" ;
  	$userdata = $objCore->getUserAdmissionDetails();//print_r($userdata);
  	echo "<a href=\"php/corecontroller.php?logoutaction=1\">[Logout]</a>";
			if( $userdata['colorRadio']=='Online Payment' && $userdata['isPayment']==0){
			?>
			<form action="EMA_php_serverhost_do_3.php" method="post">

			<!-- get user input -->
			<table width="80%" align="center" border="0" cellpadding='0' cellspacing='0' style="display:none; ">
			
			
			<tr bgcolor="#E1E1E1">
			<td width="1%">&nbsp;</td>
			<td width="40%" align="right"><b><i>ePP Client URL:&nbsp;</i></b></td>
			<td width="59%"><input type="text" name="vpc_URL" size="63" value="https://geniusepay.in/VAS/DCC/do.action" maxlength="250"></td>
			</tr>
			<tr>
			<td colspan="3">&nbsp;<hr width="75%">&nbsp;</td>
			</tr>
			<tr bgcolor="#C1C1C1">
			<td colspan="3" height="25"><p><b>&nbsp;Basic 3-Party Transaction Fields</b></p></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td align="right"><b><i> VPC Version: </i></b></td>
			<td><input type="text" name="vpc_Version" value="1" size="20" maxlength="8"></td>
			</tr>
			<tr bgcolor="#E1E1E1">
			<td>&nbsp;</td>
			<td align="right"><b><i>Command Type: </i></b></td>
			<td><input type="text" name="vpc_Command" value="pay" size="20" maxlength="16"></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td align="right"><b><i>Merchant AccessCode: </i></b></td>
			<td><input type="text" name="vpc_AccessCode" value="SKOY3640" size="20" maxlength="8"></td>
			</tr>    <tr bgcolor="#E1E1E1">
			<td>&nbsp;</td>
			<td align="right"><b><i>Merchant Transaction Reference: </i></b></td>
			<td><input type="text" name="vpc_MerchTxnRef"  size="20" maxlength="40" value="<?php echo $userdata['name'].'-'.$userdata['uid'];  ?>"></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td align="right"><b><i>MerchantID: </i></b></td>
			<td><input type="text" name="vpc_MerchantId" value="13M000000000116" size="20" maxlength="16"></td>
			</tr>
			<tr bgcolor="#E1E1E1">
			<td>&nbsp;</td>
			<td align="right"><b><i>Transaction OrderInfo: </i></b></td>
			<td><input type="text" name="vpc_OrderInfo" value="VPC Example" size="20" maxlength="34"></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td align="right"><b><i>Purchase Amount: </i></b></td>
			<td><input type="text" name="vpc_Amount" value="250000" size="20" maxlength="10"></td>
			</tr>
			<tr bgcolor="#E1E1E1">
			<td>&nbsp;</td>
			<td align="right"><b><i>Receipt ReturnURL: </i></b></td>
			<td><input type="text" name="vpc_ReturnURL" size="63" value="https://mitid-dat.edu.in/admission2017/EMA_php_serverhost_dr_3.php" maxlength="250"></td>
			</tr>
			<tr bgcolor="#E1E1E1">
			<td colspan="2">&nbsp;</td> 
			<td>			<!--button--></td>
			</tr>
			
			<tr><td colspan="3">&nbsp;<hr width="75%">&nbsp;</td></tr>
			
			</table><br/>
			<div ><input type="submit" name="SubButL" value="Pay Now!" ></div>
			</form>
			<?php } ?>
    <style type="text/css">
    .box{
        padding: 20px;
        display: none;
        margin-top: 20px;
        border: 1px solid #000;
    }
    .red{ background: #ff0000; }
    .green{ background: #00ff00; }
    .blue{ background: #0000ff; }
</style>
    <script type="text/javascript" src="common/js/form_init.js" data-name=""id="form_init_script">
    </script>
    <link rel="stylesheet" type="text/css" href="theme/default/css/default.css" id="theme" />
    <title>admission </title>
	<script src="courses.js"></script>
    <link type="text/css" rel="stylesheet" href="calendar/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>
	<SCRIPT type="text/javascript" src="calendar/dhtmlgoodies_calendar.js?random=20060118"></script>
 <script>
   function copyAddress() {
   document.mitid.AddressforCorrespondence.value=document.mitid.Address.value
   document.mitid.cCity.value=document.mitid.City.value
   document.mitid.CState.value=document.mitid.State.value
   document.mitid.CPinCode.value=document.mitid.PinCode.value
   document.mitid.CPhoneNumber.value=document.mitid.PhoneNumber.value
   document.mitid.CEmail.value=document.mitid.email.value
 	}
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('input[type="radio"]').click(function(){
            if($(this).attr("value")=="ddpayment"){
                $(".box").hide();
                $(".ddpayment").show();
            }
            if($(this).attr("value")=="onlinepayment"){
                $(".box").hide();
                $(".onlinepayment").show();
            }
            
        });
    });
</script>
<style>#docContainer .fb_cond_applied{ display:none; }</style>
<noscript>
<style>#docContainer .fb_cond_applied{ display:inline-block; }</style>
</noscript>

<form  name="mitid" class="fb-toplabel fb-100-item-column fb-large selected-object" id="docContainer" style="border-style: groove; width: 90%; color: rgb(0, 0, 0); max-width: 960px; background-color: transparent;" action="admission_process.php" enctype="multipart/form-data" method="post" novalidate data-percentage="90" data-form="manual_iframe">
  
  <div class="section" id="section1">
    <div class="column ui-sortable" id="column1">
      <div id="fb_confirm_inline" style="display: none; min-height: 200px;">
      </div>
      <div id="fb_error_report" style="display: none;">
      </div>
<div class="fb-item fb-100-item-column" id="item1" style="padding-right: 5px; padding-bottom: 5px; padding-left:5px; opacity:1;">
        <div class="fb-static-text">
          <!--<p style="color: rgb(252, 90, 15); font-size: 16px; font-weight: bold; padding-top: 15px;"> Programmes: </p>-->
        </div>
      </div>
      
   
      <div class="fb-item fb-100-item-column" id="item17">
        <div class="fb-grouplabel">
          <label id="item17_label_0" style="display: inline;">Address</label>
        *</div>
        <div class="fb-input-box">
          <input name="Address" class="" id="item17_text_1" required type="text" maxlength="254" placeholder="Address" data-hint="" autocomplete="off" value="<?php echo $userdata['address'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-50-item-column" id="item23">
        <div class="fb-grouplabel">
          <label id="item23_label_0" style="display: inline;">City</label>
        *</div>
        <div class="fb-input-box">
          <input name="City" class="" id="item23_text_1" required type="text" maxlength="254" placeholder="City" data-hint="" autocomplete="off"  value="<?php echo $userdata['city'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-50-item-column" id="item25">
        <div class="fb-grouplabel">
          <label id="item25_label_0" style="display: inline;">State</label>
        *</div>
        <div class="fb-input-box">
          <input name="State" class="" id="item25_text_1" required type="text" maxlength="254" placeholder="State" data-hint="" autocomplete="off" value="<?php echo $userdata['state'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-33-item-column" id="item26">
        <div class="fb-grouplabel">
          <label id="item26_label_0" style="display: inline;">Pin Code</label>
        *</div>
        <div class="fb-input-number">
          <input name="PinCode" class="" id="item26_number_1" required type="number" min="6" max="999999" step="1" placeholder="Pin Code" data-hint="" autocomplete="off" value="<?php echo $userdata['pincode'];?>" />
          <div class="fb-hint" style="color: rgb(199, 195, 199); font-style: italic; font-weight: normal;">
            Only Numbers
          </div>
        </div>
      </div>
      <div class="fb-item" id="item29" style="padding: 15px 0px;">
        <div class="fb-sectionbreak">
          <hr style="border-top-color: rgb(252, 90, 15); max-width: 960px;">
        </div>
      </div>
      <div class="fb-item fb-100-item-column" id="item30">
        <div class="fb-grouplabel">
          <label id="item30_label_0" style="display: inline;">Address for Correspondence *</label>
        </div>
        <div class="fb-input-box">
          <input name="AddressforCorrespondence" class="" id="item30_text_1" required type="text" maxlength="254" placeholder="Address for Correspondence" data-hint="" autocomplete="off" value="<?php echo $userdata['addressforcorrespondence'];?>" />
        </div>
      </div>
      <div class="fb-item fb-50-item-column" id="item31">
        <div class="fb-grouplabel">
          <label id="item31_label_0" style="display: inline;">City</label>
        *</div>
        <div class="fb-input-box">
          <input name="cCity" class="" id="item31_text_1" required type="text" maxlength="254" placeholder="City" data-hint="" autocomplete="off" value="<?php echo $userdata['ccity'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-50-item-column" id="item32">
        <div class="fb-grouplabel">
          <label id="item32_label_0" style="display: inline;">State</label>
        *</div>
        <div class="fb-input-box">
          <input name="CState" class="" id="item32_text_1" required type="text" maxlength="254" placeholder="State" data-hint="" autocomplete="off" value="<?php echo $userdata['cstate'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-33-item-column" id="item34">
        <div class="fb-grouplabel">
          <label id="item34_label_0" style="display: inline;">PinCode</label>
        *</div>
        <div class="fb-input-number">
          <input name="CPinCode" class="" id="item34_number_1" required type="number" min="6" max="999999" step="1" placeholder="PinCode" data-hint="" autocomplete="off"  value="<?php echo $userdata['cpincode'];?>"/>
          <div class="fb-hint" style="color: rgb(199, 195, 199); font-style: italic; font-weight: normal;">
            Only Numbers
          </div>
        </div>
      </div>
      <div class="fb-item fb-33-item-column" id="item36">
        <div class="fb-grouplabel">
          <label id="item36_label_0" style="display: inline;">Contact Number</label>
        *</div>
        <div class="fb-phone">
          <input name="CPhoneNumber" class="" id="item36_tel_1" required type="tel" placeholder="Contact Number" data-hint="" value="<?php echo $userdata['cphonenumber'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-33-item-column" id="item37">
        <div class="fb-grouplabel">
          <label id="item37_label_0">Email</label>
        *</div>
        <div class="fb-input-box">
          <input name="CEmail" class="" id="item37_email_1" required type="email" maxlength="254" placeholder="you@domain.com" data-hint="" autocomplete="off" value="<?php echo $userdata['cemail'];?>"/>
        </div>
      </div>
      <div class="fb-item" id="item38" style="padding: 15px 0px;">
        <div class="fb-sectionbreak">
          <hr style="border-top-color: rgb(252, 90, 15); max-width: 960px;">
        </div>
      </div>
      <div class="fb-item fb-50-item-column" id="item39">
        <div class="fb-grouplabel">
          <label id="item39_label_0" style="display: inline;">Parent&#39;s/Guardians Name</label>
        *</div>
        <div class="fb-input-box">
          <input name="ParentsName" class="" id="item39_text_1" required type="text" maxlength="254" placeholder="Parent&#39;s Name" data-hint="" autocomplete="off" value="<?php echo $userdata['parentsname'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-50-item-column" id="item40">
        <div class="fb-grouplabel">
          <label id="item40_label_0" style="display: inline;">Relationship with Applicant</label>
        *</div>
        <div class="fb-input-box">
          <input name="RelationshipwithApplicant" class="" id="item40_text_1" required type="text" maxlength="254" placeholder="Relationship with Applicant" data-hint="" autocomplete="off" value="<?php echo $userdata['relationshipwithapplicant'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-50-item-column" id="item41">
        <div class="fb-grouplabel">
          <label id="item41_label_0" style="display: inline;">Profession of the parent&#39;s/guardian *</label>
        </div>
        <div class="fb-input-box">
          <input name="Professionoftheparent" class="" id="item41_text_1" required type="text" maxlength="254" placeholder="Profession of the parent&#39;s/guardian"  data-hint="" autocomplete="off" value="<?php echo $userdata['professionoftheparent'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-50-item-column" id="item43">
        <div class="fb-grouplabel">
          <label id="item43_label_0" style="display: inline;">Annual Income</label>
        *</div>
        <div class="fb-input-number">
          <input name="AnnualIncome" class="" id="item43_number_1" required type="number" min="0" max="999999999" step="1" placeholder="1000000" data-hint="" autocomplete="off" value="<?php echo $userdata['annualincome'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-50-item-column" id="item44">
        <div class="fb-grouplabel">
          <label id="item44_label_0" style="display: inline;">Parent&#39;s Contact Number</label>
        </div>
        <div class="fb-phone">
          <input name="ParentMobileNumber" class="" id="item44_tel_1" type="tel" placeholder="Parent&#39;s Contact Number" data-hint="" value="<?php echo $userdata['parentmobilenumber'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-50-item-column" id="item46">
        <div class="fb-grouplabel">
          <label id="item46_label_0" style="display: inline;">Parent&#39;s Email</label>
        </div>
        <div class="fb-input-box">
          <input name="ParentEmail" class="" id="item46_email_1" type="email" maxlength="254" placeholder="you@domain.com" data-hint="" autocomplete="off" value="<?php echo $userdata['parentemail'];?>"/>
        </div>
      </div>
      <div class="fb-item" id="item47" style="padding: 15px 0px 15px 4px;">
        <div class="fb-sectionbreak">
          <hr style="border-top-color: rgb(252, 90, 15); max-width: 960px;">
        </div>
      </div>

      <div class="fb-item fb-100-item-column" id="item57" style="padding-right: 5px; padding-bottom: 10px; padding-left: 5px; opacity: 1;">
        <div class="fb-static-text">
          <p style="color: rgb(252, 90, 15); font-size: 16px; font-weight: bold;">
            Educational Information:
          </p>
        </div>
      </div>
      <div class="fb-item fb-25-item-column" id="item58">
        <div class="fb-grouplabel">
          <label id="item58_label_0" style="display: inline;">10th: (SSC)</label>
        *</div>
        <div class="fb-input-box">
          <input name="ExamBoardName10" class="" id="item58_text_1" required type="text" maxlength="254" placeholder="School/ Board" data-hint="" autocomplete="off" value="<?php echo $userdata['examboardname10'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-25-item-column" id="item59">
        <div class="fb-grouplabel">
          <label id="item59_label_0" style="display: inline;">Percentage/Grade</label>
        *</div>
        <div class="fb-input-box">
          <input name="Percentage10" class="" id="item59_text_1" required type="text" maxlength="254" placeholder="Percentage/Grade" data-hint="" autocomplete="off"  value="<?php echo $userdata['percentage10'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-25-item-column" id="item60">
        <div class="fb-grouplabel">
          <label id="item60_label_0" style="display: inline;">Year of Passing</label>
          *
        </div>
        <div class="fb-input-box">
          <input name="YearofPassing10" class="" id="item60_text_1" required type="text" maxlength="254" placeholder="Year of Passing 10" data-hint="" autocomplete="off" value="<?php echo $userdata['yearofpassing10'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-25-item-column" id="item61">
        <div class="fb-grouplabel">
          <label id="item61_label_0" style="display: inline;">Year Gap(if any)</label>
        </div>
        <div class="fb-input-box">
          <input name="YearGap10" class="" id="item61_text_1" type="text" maxlength="254" placeholder="Year Gap (if any)" data-hint="" autocomplete="off" value="<?php echo $userdata['yeargap10'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-25-item-column" id="item63">
        <div class="fb-grouplabel">
          <label id="item63_label_0" style="display: inline;">12th: (HSC)</label>
        *</div>
        <div class="fb-input-box">
          <input name="ExamBoardName12" class="" id="item63_text_1" required type="text" maxlength="254" placeholder="School/Board" data-hint="" autocomplete="off" value="<?php echo $userdata['examboardname12'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-25-item-column" id="item64">
        <div class="fb-grouplabel">
          <label id="item64_label_0" style="display: inline;">Percentage/Grade</label>
        *</div>
        <div class="fb-input-box">
          <input name="Percentage12" class="" id="item64_text_1" required type="text" maxlength="254" placeholder="Percentage/Grade" data-hint="" autocomplete="off" value="<?php echo $userdata['percentage12'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-25-item-column" id="item65">
        <div class="fb-grouplabel">
          <label id="item65_label_0" style="display: inline;">Year of Passing</label>
        *</div>
        <div class="fb-input-box">
          <input name="YearofPassing12" class="" id="item65_text_1" required type="text"  maxlength="254" placeholder="Year of Passing" data-hint="" autocomplete="off" value="<?php echo $userdata['yearofpassing12'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-25-item-column" id="item66">
        <div class="fb-grouplabel">
          <label id="item66_label_0" style="display: inline;">Year Gap(if any)</label>
        </div>
        <div class="fb-input-box">
          <input name="YearGap12" class="" id="item66_text_1" type="text" maxlength="254"placeholder="Year Gap (if any)" data-hint="" autocomplete="off" value="<?php echo $userdata['yeargap12'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-25-item-column" id="item67">
        <div class="fb-grouplabel">
          <label id="item67_label_0" style="display: inline;">Diploma/Graduation</label>
        </div>
        <div class="fb-input-box">
          <input name="ExamDiploma" class="" id="item67_text_1" type="text" maxlength="254" placeholder="Degree" data-hint="" autocomplete="off" value="<?php echo $userdata['examdiploma'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-25-item-column" id="item68">
        <div class="fb-grouplabel">
          <label id="item68_label_0" style="display: inline;">Percentage/Grade</label>
        </div>
        <div class="fb-input-box">
          <input name="PercentageDiploma" class="" id="item68_text_1" type="text" maxlength="254" placeholder="Percentage/Grade" data-hint="" autocomplete="off" value="<?php echo $userdata['percentagediploma'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-25-item-column" id="item69">
        <div class="fb-grouplabel">
          <label id="item69_label_0" style="display: inline;">Year of Passing</label>
        </div>
        <div class="fb-input-box">
          <input name="YearofPassingDiploma" class="" id="item69_text_1" type="text" maxlength="254" placeholder="Year of Passing" data-hint="" autocomplete="off" value="<?php echo $userdata['yearofpassingdiploma'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-25-item-column" id="item70">
        <div class="fb-grouplabel">
          <label id="item70_label_0" style="display: inline;">Year Gap(if any)</label>
        </div>
        <div class="fb-input-box">
          <input name="YeargapDiploma" class="" id="item70_text_1" type="text" maxlength="254" placeholder="Year Gap (if any)" data-hint="" autocomplete="off" value="<?php echo $userdata['yeargapdiploma'];?>"/>
        </div>
      </div>
      <div class="fb-item" id="item71" style="padding: 15px 0px;">
        <div class="fb-sectionbreak">
          <hr style="border-top-color: rgb(252, 90, 15); max-width: 960px;">
        </div>
      </div>
      <div class="fb-item fb-100-item-column" id="item72" style="padding-right: 5px; padding-bottom: 5px; padding-left: 5px;">
        <div class="fb-static-text">
          <p style="color: rgb(252, 90, 15); font-size: 16px; font-weight: bold;">
            Work Experience:
          </p>
        </div>
      </div>
      <div class="fb-item fb-50-item-column" id="item73">
        <div class="fb-grouplabel">
          <label id="item73_label_0" style="display: inline;">Company Name</label>
        </div>
        <div class="fb-input-box">
          <input name="CompanyName" class="" id="item73_text_1" type="text" maxlength="254" placeholder="Company Name" data-hint="" autocomplete="off" value="<?php echo $userdata['companyname'];?>"/>
        </div>
      </div>
      <div class="fb-item fb-50-item-column" id="item74">
        <div class="fb-grouplabel">
          <label id="item74_label_0" style="display: inline;">Experience (In Months)</label>
        </div>
        <div class="fb-input-box">
          <input name="Experience" class="" id="item74_text_1" type="text" maxlength="254" placeholder="Experience (In Months)" data-hint="" autocomplete="off" value="<?php echo $userdata['experience'];?>"/>
        </div>
      </div>
      <div class="fb-item" id="item76" style="padding: 15px 0px;">
        <div class="fb-sectionbreak">
          <hr style="border-top-color: rgb(252, 90, 15); max-width: 960px;">
        </div>
      </div>
      <div class="fb-item fb-100-item-column" id="item83" style="opacity: 1;">
        <div class="fb-grouplabel">
          <label id="item83_label_0" style="display: inline;">Choose Test Center</label>
        *</div>
        <div class="fb-dropdown">
          <select name="testcenter" id="item83_select_1" required data-hint="">
            <option id="item83_0_option"  value="">
              Select one
            </option>
            <option id="item83_1_option" value="Ahmedabad" <?php if( 'Ahmedabad' == $userdata['testcenter']){?>selected <?php } ?>>
              Ahmedabad
            </option>
            <option id="item83_2_option" value="Bengaluru" <?php if( 'Bengaluru' == $userdata['testcenter']){?>selected <?php } ?>>
              Bengaluru
            </option>
            <option id="item83_3_option" value="Bhopal" <?php if( 'Bhopal' == $userdata['testcenter']){?>selected <?php } ?>>
              Bhopal
            </option>
            <option id="item83_4_option" value="Chandigarh" <?php if( 'Chandigarh' == $userdata['testcenter']){?>selected <?php } ?>>
              Chandigarh
            </option>
            <option id="item83_5_option" value="Chennai" <?php if( 'Chennai' == $userdata['testcenter']){?>selected <?php } ?>>
              Chennai
            </option>
            <option id="item83_6_option" value="Delhi" <?php if( 'Delhi' == $userdata['testcenter']){?>selected <?php } ?>>
              Delhi
            </option>
            <option id="item83_7_option" value="Goa" <?php if( 'Goa' == $userdata['testcenter']){?>selected <?php } ?>>
              Goa
            </option>
            <option id="item83_8_option" value="Hyderabad" <?php if( 'Hyderabad' == $userdata['testcenter']){?>selected <?php } ?>>
              Hyderabad
            </option>
            <option id="item83_9_option" value="Jaipur" <?php if( 'Jaipur' == $userdata['testcenter']){?>selected <?php } ?>>
              Jaipur
            </option>
            <option id="item83_10_option" value="Kolkata" <?php if( 'Kolkata' == $userdata['testcenter']){?>selected <?php } ?>>
              Kolkata
            </option>
            <option id="item83_11_option" value="Lucknow" <?php if( 'Lucknow' == $userdata['testcenter']){?>selected <?php } ?>>
              Lucknow
            </option>
            <option id="item83_12_option" value="Mumbai" <?php if( 'Mumbai' == $userdata['testcenter']){?>selected <?php } ?>>
              Mumbai
            </option>
            <option id="item83_13_option" value="Nagpur" <?php if( 'Nagpur' == $userdata['testcenter']){?>selected <?php } ?>>
              Nagpur
            </option>
            <option id="item83_14_option" value="Pune" <?php if( 'Pune' == $userdata['testcenter']){?>selected <?php } ?>>
              Pune
            </option>
          </select>
        </div>
      </div>
      <div class="fb-item" id="item84" style="padding-top: 15px; padding-right: 0px; padding-left: 0px; opacity: 1;">
        <div class="fb-sectionbreak">
          <hr style="border-top-color: rgb(252, 90, 15); max-width: 960px;">
        </div>
      </div>
     
  <div class="fb-item-alignment-left fb-footer" id="fb-submit-button-div"
  style="min-height: 1px;">
    <input class="fb-button-special" id="fb-submit-button" style="background-image: url('theme/default/images/btn_submit.png');"type="submit" data-regular="" value="Save" />
	<input type="hidden" name="admissionupdate" value="AdmissionUpdate" id="admissionupdate"/>
  </div>
  <input name="fb_form_custom_html" type="hidden" />
  <input name="fb_form_embedded" type="hidden" />
  <input name="fb_js_enable" id="fb_js_enable" type="hidden" />
  <input name="fb_url_embedded" id="fb_url_embedded" type="hidden" />
</form>
<?php	
}
else{
  	header("Location: public_html/index.php");
}
unset($objCore);
?>