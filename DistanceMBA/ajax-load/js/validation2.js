alert("hi");
var submitform = true;
var is_submit = true;
var is_ajax_return = true;
 alert(is_submit);

  // var myParam = location.search.split('sourcesPath=')[1];

  


function validate1(form_id) {
	//alert(form_id,'validation');
    is_submit = true;
    submitform = true;
    submitcontactvalidate(form_id, 'all');
    setTimeout(function () {
        do_form_submit(form_id);
    }, 1);
}

function do_form_submit(form_id)
 {
	  alert("fdsdkfsld5445465");
    if (is_ajax_return) 
	 alert("fdsdkfslddfgdfg");
	{
        if (submitform) 
		{
			 alert("fdsdkfsld45");
            if (form_id == "menuContactform1")
			 {
				 alert("fdsdkfsld");
			    
                //document.getElementsByClassName("submitbtn")[1].disabled=true;
				 document.getElementById('submitbtn1').style.visibility = 'hidden';
                var $inputs = $('#' + form_id + ' textarea, ' + '#' + form_id + ' :input, ' + '#' + form_id + ' select');
                 //  alert("hello");
			   var lead = {
                    "FirstName": $inputs[4].value
                    , "LastName": $inputs[4].value
                    , "Mobile": $inputs[6].value
                    , "Email": $inputs[5].value
                    , "VendorToken": "2$15$25"
                    , "CityName": "Pune"
                    , "StateName": "Maharashtra"
                    , "CountryName": "India"
					, "SourcePath": $inputs[7].value
                };
				 // alert(lead);
                $.ajax({
                    url: "http://vendorwebservice.mitsde.com/restapi/api/lead"
                    , type: "POST"
                    , data: JSON.stringify(lead)
                    , dataType: 'json'
                    , crossDomain: true
                    , contentType: 'application/json; charset=utf-8'
                    , success: function (response) {
                       $('#' + form_id).submit();
						
                    }
                    , error: function (response) {
						
                       
                        alert("You have already submited a form");
						location.reload();
                    }
                });
            }
            else {
                $('#' + form_id).submit();
            }
        }
        else {
            return false;
        }
    }
    else {
        setTimeout(function () {
            do_form_submit(form_id);
        }, 1);
    }
}

function validateStep(selection_id, next_id) {
	//alert('hi--'+next_id)
    is_submit = true;
    submitform = true;
    submitcontactvalidate(selection_id, 'all');
    setTimeout(function () {
        goNextStep(selection_id, next_id);
    }, 1);
}

function goNextStep(selection_id, next_id) {
    if (is_ajax_return) {
        if (submitform) {
            $("#" + selection_id).animate({
                width: 'toggle'
            }, 'slow');
        }
        else {
            return false;
        }
    }
    else {
        setTimeout(function () {
            do_form_submit(form_id);
        }, 1);
    }
}

function jumpStep(selection_id) {
    $("#" + selection_id).animate({
        width: 'toggle'
    }, 'slow');
}

function getFormCaptcha(region_id, captchaLabel) {
    $.ajax({
        type: 'POST'
        , data: ''
        , url: SITEROOT + 'admin_contact_us/site_contact_us/reloadCaptcha/' + region_id
        , success: function (responseData) {
            $('#capt' + region_id).html(responseData);
            $('#captcha' + region_id).val(captchaLabel);
            $('#captcha' + region_id).removeClass('valid');
            $('#captcha' + region_id).removeClass('error');
        }
    });
}
/*function cf(object){var f=object;if(f.value==f.defaultValue)f.value="";}
function cf(obj){if(obj.value==obj.defaultValue)obj.value='';}
function rf(obj){if(obj.value=='')obj.value=obj.defaultValue; is_submit = true; submitcontactvalidate('leftContactFrm',obj.name);}*/
function removeDefault(obj) {
    if (obj.value == obj.defaultValue) {
        obj.value = '';
    }
}

function addDefault(obj, fromId) {
    if (obj.value == '') {
        obj.value = obj.defaultValue;
    }
    is_submit = true;
    submitcontactvalidate(fromId, obj.name);
}