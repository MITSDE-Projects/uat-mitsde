function submitcontactvalidate(a, t) {
    
   // alert("INUP");
    
    if (is_submit) {
        var e = $("#" + a + " textarea, #" + a + " :input, #" + a + " select");
        e.each(function() {
            if (void 0 != $(this).attr("validate"))
                for (var a = $(this).attr("validate"), e = a.split(","), s = $(this).attr("name"), i = 0; i < e.length; i++)
                    for (var r = e[i].split("|"), l = 0; l < r.length; l++) switch (r[l]) {
                        case "Required":
                            if ("all" == t || s == t) {
                                var o = $(this).val();
                                "" == o || o == r[l + 1] ? ($(this).removeClass("valid"), $(this).addClass("error"), submitform = !1) : ($(this).removeClass("error"), $(this).addClass("valid"))
                            }
                            break;
                        case "Email":
                            var u = !1;
                            if (u = "ifEntered" == r[l + 1] && r[l + 2] == $(this).val() ? !1 : !0, u && ("all" == t || s == t)) {
                                var o = $(this).val(),
                                    m = o.indexOf("@"),
                                    n = o.lastIndexOf(".");
                                "" == o || o == r[l + 1] ? ($(this).removeClass("valid"), $(this).addClass("error"), submitform = !1) : 1 > m || m + 2 > n || n + 2 >= o.length ? ($(this).removeClass("valid"), $(this).addClass("error"), submitform = !1) : ($(this).removeClass("error"), $(this).addClass("valid"))
                            }
                            break;
                        case "Phone":
                            if ("all" == t || s == t) {
                                var o = $(this).val();
                                "" == o || o == r[l + 1] ? ($(this).removeClass("valid"), $(this).addClass("error"), submitform = !1) : isNaN(o) || 10 != o.length ? ($(this).removeClass("valid"), $(this).addClass("error"), submitform = !1) : ($(this).removeClass("error"), $(this).addClass("valid"))
                            }
                            break;
                        case "Number":
                            if ("all" == t || s == t) {
                                var o = $(this).val();
                                "" == o || o == r[l + 1] ? ($(this).removeClass("valid"), $(this).addClass("error"), submitform = !1) : isNaN(o) ? ($(this).removeClass("valid"), $(this).addClass("error"), submitform = !1) : ($(this).removeClass("error"), $(this).addClass("valid"))
                            }
                            break;
                        case "Captcha":
                            if ("all" == t || s == t) {
                                var o = $(this).val(),
                                    d = r[l + 2];
                                is_ajax_return = !1, $.ajax({
                                    type: "POST",
                                    data: "",
                                    url: SITEROOT + "admin_contact_us/site_contact_us/checkCaptcha/" + d + "?captcha" + d + "=" + o,
                                    success: function(a) {
                                        is_ajax_return = !0, "false" == a ? ($("#captcha" + d).removeClass("valid"), $("#captcha" + d).addClass("error"), submitform = !1) : ($("#captcha" + d).removeClass("error"), $("#captcha" + d).addClass("valid"))
                                    }
                                })
                            }
                    }
        })
    }
}

function validate(a) {
    
   // alert("INVALIDATE");
    
    is_submit = !0, submitform = !0, submitcontactvalidate(a, "all"), setTimeout(function() {
        do_form_submit(a)
    }, 1)
}

function do_form_submit(a) {
    
     //alert("INSUBMIT");
    
    if (is_ajax_return) {
        if (!submitform) return !1;
        if ("menuContactform" == a) {
            
            //alert("IN FORM SUBMIT");
            
            document.getElementById("submitbtn1").style.visibility = "hidden";
            var t = $("#" + a + " textarea, #" + a + " :input, #" + a + " select"),
            
         
            
                e = {
                    FirstName: t[4].value,
                    LastName: t[5].value,
                    Mobile: t[7].value,
                    Email: t[6].value,
                    VendorToken: "2$15$25",
                    CityName: "Pune",
                    StateName: "Maharashtra",
                    CountryName: "India",
                    SourcePath: t[8].value
                };
                
                  //alert(JSON.stringify(t));
                 // alert(JSON.stringify(e)); 
                
            $.ajax({
                url: "http://vendorwebservice.mitsde.com/restapi/api/lead",
                type: "POST",
                data: JSON.stringify(e),
                dataType: "json",
                crossDomain: !0,
                contentType: "application/json; charset=utf-8",
                success: function(t) {
                    $("#" + a).submit()
                },
                error: function(a) {
                    alert("You have already submited a form"), location.reload()
                }
            })
        } else $("#" + a).submit()
    } else setTimeout(function() {
        do_form_submit(a)
    }, 1)
}

function validateStep(a, t) {
    is_submit = !0, submitform = !0, submitcontactvalidate(a, "all"), setTimeout(function() {
        goNextStep(a, t)
    }, 1)
}

function goNextStep(a, t) {
    if (is_ajax_return) {
        if (!submitform) return !1;
        $("#" + a).animate({
            width: "toggle"
        }, "slow")
    } else setTimeout(function() {
        do_form_submit(form_id)
    }, 1)
}

function jumpStep(a) {
    $("#" + a).animate({
        width: "toggle"
    }, "slow")
}

function getFormCaptcha(a, t) {
    $.ajax({
        type: "POST",
        data: "",
        url: SITEROOT + "admin_contact_us/site_contact_us/reloadCaptcha/" + a,
        success: function(e) {
            $("#capt" + a).html(e), $("#captcha" + a).val(t), $("#captcha" + a).removeClass("valid"), $("#captcha" + a).removeClass("error")
        }
    })
}

function removeDefault(a) {
    a.value == a.defaultValue && (a.value = "")
}

function addDefault(a, t) {
    "" == a.value && (a.value = a.defaultValue), is_submit = !0, submitcontactvalidate(t, a.name)
}
var submitform = !0,
    is_submit = !0,
    is_ajax_return = !0;