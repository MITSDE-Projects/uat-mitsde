//----------------validation.js-----------------
var submitform = true;
var is_submit = true;
var is_ajax_return = true;
//alert('hi');

//var myParam = location.search.split('sourcesPath=')[1];
//alert(myParam);

function submitcontactvalidate(form_id, name) {
  if (is_submit) {
    var $inputs = $(
      "#" +
      form_id +
      " textarea, " +
      "#" +
      form_id +
      " :input, " +
      "#" +
      form_id +
      " select"
    ); // alert(is_submit);
    $inputs.each(function () {
      if ($(this).attr("validate") != undefined) {
        var validation = $(this).attr("validate");

        var validation_array = validation.split(",");

        var current_name = $(this).attr("name");
        for (var i = 0; i < validation_array.length; i++) {
          var validation_inner_array = validation_array[i].split("|");
          for (var j = 0; j < validation_inner_array.length; j++) {
            //alert(validation_inner_array);
            switch (validation_inner_array[j]) {
              case "Required":
                if (name == "all" || current_name == name) {
                  var value = $(this).val();
                  if (value == "" || value == validation_inner_array[j + 1]) {
                    $(this).removeClass("valid");
                    $(this).addClass("error");
                    submitform = false;
                  } else {
                    $(this).removeClass("error");
                    $(this).addClass("valid");
                  }
                }
                break;
              case "Email":
                var isEmail = false;
                if (
                  validation_inner_array[j + 1] == "ifEntered" &&
                  validation_inner_array[j + 2] == $(this).val()
                ) {
                  isEmail = false;
                } else {
                  isEmail = true;
                }
                if (isEmail) {
                  if (name == "all" || current_name == name) {
                    var value = $(this).val();
                    var trimmedValue = value.trim();

                    // Remove all spaces (including middle spaces)
                    var cleanedValue = trimmedValue.replace(/\s+/g, "");

                    var atpos = cleanedValue.indexOf("@");
                    var dotpos = cleanedValue.lastIndexOf(".");
                    var errorMessage = "";

                    if (cleanedValue === "" || cleanedValue === validation_inner_array[j + 1]) {
                      errorMessage = "Email is required.";
                      $(this).removeClass("valid").addClass("error");
                      submitform = false;
                    } else if (atpos < 1 || dotpos < atpos + 3 || dotpos + 2 >= cleanedValue.length) {
                      errorMessage = "Please enter a valid email address.";
                      $(this).removeClass("valid").addClass("error");
                      submitform = false;
                    } else {
                      $(this).removeClass("error").addClass("valid");
                      errorMessage = "";
                      // Set input value to cleaned email (without spaces)
                      $(this).val(cleanedValue);
                    }

                    // Show or clear the error message
                    $(this).siblings(".error-message").remove();
                    if (errorMessage !== "") {
                      $(this).after('<span class="error-message" style="color:red;font-weight:bold;font-size:12px;">' + errorMessage + '</span>');
                    }
                  }
                }
                break;
              case "Phone":
                var isPhone = false;

                if (
                  validation_inner_array[j + 1] === "ifEntered" &&
                  validation_inner_array[j + 2] === $(this).val()
                ) {
                  isPhone = false;
                } else {
                  isPhone = true;
                }

                if (isPhone) {
                  if (name === "all" || current_name === name) {
                    var value = $(this).val().trim();

                    // Remove all spaces inside the input
                    var cleanedValue = value.replace(/\s+/g, "");

                    // Update the input with cleaned value
                    $(this).val(cleanedValue);

                    // Remove +91 if present
                    if (cleanedValue.startsWith("+91")) {
                      cleanedValue = cleanedValue.slice(3);
                      $(this).val(cleanedValue); // Update again after removing +91
                    }

                    var phoneRegex = /^\d{10}$/;
                    var repeatedDigitsRegex = /^(\d)\1{9}$/;
                    var startDigitRegex = /^[6-9]/;

                    var errorMessage = "";

                    if (cleanedValue === "" || cleanedValue === validation_inner_array[j + 1]) {
                      errorMessage = "Phone number is required.";
                      $(this).removeClass("valid").addClass("error");
                      submitform = false;
                    } else if (!phoneRegex.test(cleanedValue)) {
                      errorMessage = "Phone number must be exactly 10 digits.";
                      $(this).removeClass("valid").addClass("error");
                      submitform = false;
                    } else if (!startDigitRegex.test(cleanedValue)) {
                      errorMessage = "Phone number must start with 6, 7, 8, or 9.";
                      $(this).removeClass("valid").addClass("error");
                      submitform = false;
                    } else if (repeatedDigitsRegex.test(cleanedValue)) {
                      errorMessage = "Phone number cannot have all repeated digits (e.g., 1111111111).";
                      $(this).removeClass("valid").addClass("error");
                      submitform = false;
                    } else {
                      // Check if any digit is repeated more than 6 times
                      var hasExcessiveRepeats = false;
                      for (var i = 0; i <= 9; i++) {
                        var regex = new RegExp(i, "g");
                        var matches = cleanedValue.match(regex);
                        if (matches && matches.length > 6) {
                          hasExcessiveRepeats = true;
                          break;
                        }
                      }
                      if (hasExcessiveRepeats) {
                        errorMessage = "Phone number cannot have any digit repeated more than 6 times.";
                        $(this).removeClass("valid").addClass("error");
                        submitform = false;
                      } else {
                        $(this).removeClass("error").addClass("valid");
                        errorMessage = "";
                      }
                    }

                    // Show or clear the error message
                    $(this).siblings(".error-message").remove();
                    if (errorMessage !== "") {
                      $(this).after('<span class="error-message" style="color:red;font-weight:bold;font-size:12px;">' + errorMessage + '</span>');
                    }
                  }
                }
                break;





              case "Number":
                if (name == "all" || current_name == name) {
                  var value = $(this).val();
                  if (value == "" || value == validation_inner_array[j + 1]) {
                    $(this).removeClass("valid");
                    $(this).addClass("error");
                    submitform = false;
                  } else if (isNaN(value)) {
                    $(this).removeClass("valid");
                    $(this).addClass("error");
                    submitform = false;
                  } else {
                    $(this).removeClass("error");
                    $(this).addClass("valid");
                  }
                }
                break;
              case "Captcha":
                if (name == "all" || current_name == name) {
                  var value = $(this).val();
                  var region_id = validation_inner_array[j + 2];
                  is_ajax_return = false;
                  $.ajax({
                    type: "POST",
                    data: "",
                    url:
                      SITEROOT +
                      "admin_contact_us/site_contact_us/checkCaptcha/" +
                      region_id +
                      "?captcha" +
                      region_id +
                      "=" +
                      value,
                    success: function (responseData) {
                      is_ajax_return = true;
                      if (responseData == "false") {
                        $("#captcha" + region_id).removeClass("valid");
                        $("#captcha" + region_id).addClass("error");
                        submitform = false;
                      } else {
                        $("#captcha" + region_id).removeClass("error");
                        $("#captcha" + region_id).addClass("valid");
                      }
                    },
                  });
                }
                break;
            }
          }
        }
      }
    });
  }
}

// 20-may-2024

function checkMobile(input) {
  var mobileValue = input.value.trim();
  var pattern = /^[0-9]+$/;

  // Check if the input is empty or contains spaces
  if (mobileValue === "" || mobileValue.includes(" ")) {
    // alert('Please enter a valid mobile number without spaces.');
    input.value = ""; // Clear the input field
    return false;
  }

  // Check if the input contains only digits
  if (!pattern.test(mobileValue)) {
    alert("Please enter a valid mobile number with digits only.");
    input.value = ""; // Clear the input field
    return false;
  }

  // Check if the input is exactly 10 digits long
  if (mobileValue.length !== 10) {
    alert("Please enter a valid 10-digit mobile number.");
    input.value = ""; // Clear the input field
    return false;
  }

  return true; // Return true if all checks pass
}

// 20-may-2024

function validate(form_id) {
  //alert(form_id+' validation');
  is_submit = true;
  submitform = true;
  submitcontactvalidate(form_id, "all");
  setTimeout(function () {
    do_form_submit(form_id);
  }, 1);
}

function do_form_submit(form_id) {
  if (is_ajax_return) {
    if (submitform) {
      if (form_id == "menuContactform") {
        //alert('menuContactform');


        document.getElementById("submitbtn1").style.visibility = "hidden";
        var $inputs = $('#' + form_id + ' textarea, ' + '#' + form_id + ' :input, ' + '#' + form_id + ' select');
        var lead = {
          AuthToken: "MITSDE-11-06-2020",
          Source: "mitsde",
          FirstName: $inputs[4].value,
          MobileNumber: $inputs[6].value,
          Email: $inputs[5].value,
          City: "Not Known",
          State: $inputs[9].value,
          Country: "India",
          Course: "Not Known",
          Textb1: $inputs[10].value,
          Center: $inputs[8].value,
          LeadSource: "Paid - Google (DS)",
          LeadName: $inputs[19].value,
          LeadType: "Online",
          Field1: "NA",
          Leadchannel: $inputs[16].value,
          leadcampaign: $inputs[17].value,
        };

        //alert(JSON.stringify(lead));

        // First AJAX request
        $.ajax({
          url: "https://thirdpartyapi.extraaedge.com/api/SaveRequest",
          type: "POST",
          data: JSON.stringify(lead),
          dataType: 'text',
          crossDomain: true,
          contentType: 'application/json; charset=utf-8',
          success: function (response) {

            //$('#' + form_id).submit();
          },
          error: function (response) {
            alert("You have already submited a form");
            location.reload();
          }
        });

        // Second AJAX request
        $.ajax({
          url: "https://mitsde.com/add_lead",
          type: "POST",
          data: JSON.stringify(lead),
          dataType: 'text',
          crossDomain: true,
          contentType: 'application/json; charset=utf-8',
          success: function (response) {

            $('#' + form_id).submit();
          },
          error: function (response) {
            alert("You have already submited a form");
            location.reload();
          }
        });

        smartech("contact", 10, {
          "pk^email": $inputs[5].value,
          STATE: $inputs[9].value,
          FIRST_NAME: $inputs[4].value,
          mobile: $inputs[6].value,
          HIGHEST_QUALIFICATION: $inputs[10].value,
        });
        smartech("identify", $inputs[5].value);
        smartech("dispatch", "Apply Now", {
          program: "PGDM",
          email: $inputs[5].value,
          specialization: "Project Management",
        });
      } else
        if (form_id == "menuContactformFooter") {
          //alert("menu Contact form Footer");


          document.getElementById("submitbtnfooter").style.visibility = "hidden";
          var $inputs = $('#' + form_id + ' textarea, ' + '#' + form_id + ' :input, ' + '#' + form_id + ' select');
          var lead = {
            AuthToken: "MITSDE-11-06-2020",
            Source: "mitsde",
            FirstName: $inputs[4].value,
            MobileNumber: $inputs[6].value,
            Email: $inputs[5].value,
            City: "Not Known",
            State: $inputs[9].value,
            Country: "India",
            Course: "Not Known",
            Textb1: $inputs[10].value,
            Center: $inputs[8].value,
            LeadSource: "Paid - Google (DS)",
            LeadName: $inputs[19].value,
            LeadType: "Online",
            Field1: "NA",
            Leadchannel: $inputs[16].value,
            leadcampaign: $inputs[17].value,
          };

          //alert(JSON.stringify(lead));

          // First AJAX request
          $.ajax({
            url: "https://thirdpartyapi.extraaedge.com/api/SaveRequest",
            type: "POST",
            data: JSON.stringify(lead),
            dataType: 'text',
            crossDomain: true,
            contentType: 'application/json; charset=utf-8',
            success: function (response) {



              //$('#' + form_id).submit();
            },
            error: function (response) {
              alert("You have already submited a form");
              location.reload();
            }
          });

          // Second AJAX request
          $.ajax({
            url: "https://mitsde.com/add_lead",
            type: "POST",
            data: JSON.stringify(lead),
            dataType: 'text',
            crossDomain: true,
            contentType: 'application/json; charset=utf-8',
            success: function (response) {

              $('#' + form_id).submit();
            },
            error: function (response) {
              alert("You have already submited a form");
              location.reload();
            }
          });

          smartech("contact", 10, {
            "pk^email": $inputs[5].value,
            STATE: $inputs[9].value,
            FIRST_NAME: $inputs[4].value,
            mobile: $inputs[6].value,
            HIGHEST_QUALIFICATION: $inputs[10].value,
          });
          smartech("identify", $inputs[5].value);
          smartech("dispatch", "Download Brochure", {
            program: "PGDM",
            email: $inputs[5].value,
            specialization: "Project Management",
          });

        } else
          if (form_id == "menuContactformHome") // banner form
          {
            //alert('menuContactformHome');


            document.getElementById("submitbtnhomenew").style.visibility = "hidden";
            var $inputs = $('#' + form_id + ' textarea, ' + '#' + form_id + ' :input, ' + '#' + form_id + ' select');
            var lead = {
              AuthToken: "MITSDE-11-06-2020",
              Source: "mitsde",
              FirstName: $inputs[4].value,
              MobileNumber: $inputs[6].value,
              Email: $inputs[5].value,
              City: "Not Known",
              State: $inputs[9].value,
              Country: "India",
              Course: "Not Known",
              Textb1: $inputs[10].value,
              Center: $inputs[8].value,
              LeadSource: "Paid - Google (DS)",
              LeadName: $inputs[19].value,
              LeadType: "Online",
              Field1: "NA",
              Leadchannel: $inputs[16].value,
              leadcampaign: $inputs[17].value,
            };

            //console.log(lead);

            //alert(JSON.stringify(lead));

            // First AJAX request
            $.ajax({
              url: "https://thirdpartyapi.extraaedge.com/api/SaveRequest",
              type: "POST",
              data: JSON.stringify(lead),
              dataType: 'text',
              crossDomain: true,
              contentType: 'application/json; charset=utf-8',
              success: function (response) {

                //$('#' + form_id).submit();
              },
              error: function (response) {
                alert("You have already submited a form");
                location.reload();
              }
            });

            // Second AJAX request
            $.ajax({
              url: "https://mitsde.com/add_lead",
              type: "POST",
              data: JSON.stringify(lead),
              dataType: 'text',
              crossDomain: true,
              contentType: 'application/json; charset=utf-8',
              success: function (response) {

                $('#' + form_id).submit();
              },
              error: function (response) {
                alert("You have already submited a form");
                location.reload();
              }
            });

            smartech("contact", 10, {
              "pk^email": $inputs[5].value,
              STATE: $inputs[9].value,
              FIRST_NAME: $inputs[4].value,
              mobile: $inputs[6].value,
              HIGHEST_QUALIFICATION: $inputs[10].value,
            });
            smartech("identify", $inputs[5].value);
            smartech("dispatch", "Apply Now", {
              program: "PGDM",
              email: $inputs[5].value,
              specialization: "Project Management",
            });
          }
          else

            if (form_id == "onlinepgdmstikyform") // otp form
            {
              //alert('menuContactformHome');


              document.getElementById("submitbtnhomenew1").style.visibility = "hidden";
              var $inputs = $('#' + form_id + ' textarea, ' + '#' + form_id + ' :input, ' + '#' + form_id + ' select');
              var lead = {
                AuthToken: "MITSDE-11-06-2020",
                Source: "mitsde",
                FirstName: $inputs[4].value,
                MobileNumber: $inputs[6].value,
                Email: $inputs[5].value,
                City: "Not Known",
                State: $inputs[9].value,
                Country: "India",
                Course: "Not Known",
                Textb1: $inputs[10].value,
                Center: $inputs[8].value,
                LeadSource: "Paid - Google (DS)",
                LeadName: $inputs[19].value,
                LeadType: "Online",
                Field1: "NA",
                Leadchannel: $inputs[16].value,
                leadcampaign: $inputs[17].value,
              };

              //alert(JSON.stringify(lead));

              // First AJAX request
              $.ajax({
                url: "https://thirdpartyapi.extraaedge.com/api/SaveRequest",
                type: "POST",
                data: JSON.stringify(lead),
                dataType: 'text',
                crossDomain: true,
                contentType: 'application/json; charset=utf-8',
                success: function (response) {

                  //$('#' + form_id).submit();
                },
                error: function (response) {
                  alert("You have already submited a form");
                  location.reload();
                }
              });

              // Second AJAX request
              $.ajax({
                url: "https://mitsde.com/add_lead",
                type: "POST",
                data: JSON.stringify(lead),
                dataType: 'text',
                crossDomain: true,
                contentType: 'application/json; charset=utf-8',
                success: function (response) {

                  $('#' + form_id).submit();
                },
                error: function (response) {
                  alert("You have already submited a form");
                  location.reload();
                }
              });

              smartech("contact", 10, {
                "pk^email": $inputs[5].value,
                STATE: $inputs[9].value,
                FIRST_NAME: $inputs[4].value,
                mobile: $inputs[6].value,
                HIGHEST_QUALIFICATION: $inputs[10].value,
              });
              smartech("identify", $inputs[5].value);
              smartech("dispatch", "Apply Now", {
                program: "PGDM",
                email: $inputs[5].value,
                specialization: "Project Management",
              });
            }
            else

              if (form_id == "menuExpertForm") {
                //alert("menuExpertForm");



                document.getElementById("submitbtnhomenew").style.visibility = "hidden";
                var $inputs = $('#' + form_id + ' textarea, ' + '#' + form_id + ' :input, ' + '#' + form_id + ' select');
                var lead = {
                  AuthToken: "MITSDE-11-06-2020",
                  Source: "mitsde",
                  FirstName: $inputs[4].value,
                  MobileNumber: $inputs[6].value,
                  Email: $inputs[5].value,
                  City: "Not Known",
                  State: $inputs[9].value,
                  Country: "India",
                  Course: "Not Known",
                  Textb1: $inputs[10].value,
                  Center: $inputs[8].value,
                  LeadSource: "Paid - Google (DS)",
                  LeadName: $inputs[19].value,
                  LeadType: "Online",
                  Field1: "NA",
                  Leadchannel: $inputs[16].value,
                  leadcampaign: $inputs[17].value,
                };

                //alert(JSON.stringify(lead));

                // First AJAX request
                $.ajax({
                  url: "https://thirdpartyapi.extraaedge.com/api/SaveRequest",
                  type: "POST",
                  data: JSON.stringify(lead),
                  dataType: 'text',
                  crossDomain: true,
                  contentType: 'application/json; charset=utf-8',
                  success: function (response) {



                    //$('#' + form_id).submit();
                  },
                  error: function (response) {
                    alert("You have already submited a form");
                    location.reload();
                  }
                });

                // Second AJAX request
                $.ajax({
                  url: "https://mitsde.com/add_lead",
                  type: "POST",
                  data: JSON.stringify(lead),
                  dataType: 'text',
                  crossDomain: true,
                  contentType: 'application/json; charset=utf-8',
                  success: function (response) {

                    $('#' + form_id).submit();
                  },
                  error: function (response) {
                    alert("You have already submited a form");
                    location.reload();
                  }
                });

                smartech("contact", 10, {
                  "pk^email": $inputs[5].value,
                  STATE: $inputs[9].value,
                  FIRST_NAME: $inputs[4].value,
                  mobile: $inputs[6].value,
                  HIGHEST_QUALIFICATION: $inputs[10].value,
                });
                smartech("identify", $inputs[5].value);
                smartech("dispatch", "Talk To Our Experts", {
                  program: "PGDM",
                  email: $inputs[5].value,
                  specialization: "Project Management",
                });
              } else
                if (form_id == "menuBrochureForm") {
                  //alert("menuBrochureForm");


                  document.getElementById("submitbtnhomenew").style.visibility = "hidden";
                  var $inputs = $('#' + form_id + ' textarea, ' + '#' + form_id + ' :input, ' + '#' + form_id + ' select');
                  var lead = {
                    AuthToken: "MITSDE-11-06-2020",
                    Source: "mitsde",
                    FirstName: $inputs[4].value,
                    MobileNumber: $inputs[6].value,
                    Email: $inputs[5].value,
                    City: "Not Known",
                    State: $inputs[9].value,
                    Country: "India",
                    Course: "Not Known",
                    Textb1: $inputs[10].value,
                    Center: $inputs[8].value,
                    LeadSource: "Paid - Google (DS)",
                    LeadName: $inputs[19].value,
                    LeadType: "Online",
                    Field1: "NA",
                    Leadchannel: $inputs[16].value,
                    leadcampaign: $inputs[17].value,
                  };

                  //alert(JSON.stringify(lead));

                  // First AJAX request
                  $.ajax({
                    url: "https://thirdpartyapi.extraaedge.com/api/SaveRequest",
                    type: "POST",
                    data: JSON.stringify(lead),
                    dataType: 'text',
                    crossDomain: true,
                    contentType: 'application/json; charset=utf-8',
                    success: function (response) {



                      //$('#' + form_id).submit();
                    },
                    error: function (response) {
                      alert("You have already submited a form");
                      location.reload();
                    }
                  });

                  // Second AJAX request
                  $.ajax({
                    url: "https://mitsde.com/add_lead",
                    type: "POST",
                    data: JSON.stringify(lead),
                    dataType: 'text',
                    crossDomain: true,
                    contentType: 'application/json; charset=utf-8',
                    success: function (response) {

                      $('#' + form_id).submit();
                    },
                    error: function (response) {
                      alert("You have already submited a form");
                      location.reload();
                    }
                  });

                  smartech("contact", 10, {
                    "pk^email": $inputs[5].value,
                    STATE: $inputs[9].value,
                    FIRST_NAME: $inputs[4].value,
                    mobile: $inputs[6].value,
                    HIGHEST_QUALIFICATION: $inputs[10].value,
                  });
                  smartech("identify", $inputs[5].value);
                  smartech("dispatch", "Download Brochure", {
                    program: "PGDM",
                    email: $inputs[5].value,
                    specialization: "Project Management",
                  });
                } else if (form_id == "menuContactFloting") {
                  //document.getElementsByClassName("submitbtn")[1].disabled=true;
                  document.getElementById("submitbtnsticky").style.visibility = "hidden";
                  var $inputs = $(
                    "#" +
                    form_id +
                    " textarea, " +
                    "#" +
                    form_id +
                    " :input, " +
                    "#" +
                    form_id +
                    " select"
                  );
                  //  alert("menuContactFloting");
                  var lead = {
                    AuthToken: "MITSDE-11-06-2020",
                    Source: "mitsde",
                    FirstName: $inputs[4].value,
                    MobileNumber: $inputs[6].value,
                    Email: $inputs[5].value,
                    LeadSource: "Organic-Direct-Form",
                    LeadType: "Online",
                    LeadName: "Contact us form leads",
                    Course: "Not Known",
                    State: $inputs[7].value,
                    Textb1: $inputs[8].value,
                  };
                  //alert(JSON.stringify(lead));
                  //alert(lead);
                  $.ajax({
                    url: "https://thirdpartyapi.extraaedge.com/api/SaveRequest",
                    type: "POST",
                    data: JSON.stringify(lead),
                    dataType: "Text",
                    crossDomain: true,
                    contentType: "application/json; charset=utf-8",
                    success: function (response) {
                      $("#" + form_id).submit();
                    },
                    error: function (response) {
                      //alert(JSON.stringify(response));
                      alert("You have already submited a form");
                      location.reload();
                    },
                  });

                  smartech("contact", "LIST IDENTIFIER", {
                    "pk^email": $inputs[5].value,
                    mobile: $inputs[6].value,
                    FIRST_NAME: $inputs[4].value,
                    HIGHEST_QUALIFICATION: $inputs[8].value,
                    STATE: $inputs[7].value,
                  });
                  smartech("identify", $inputs[5].value);
                  smartech("dispatch", "Quick Contact Form Submit", {
                    email: $inputs[5].value,
                    mobile: $inputs[6].value,
                    "first name": $inputs[4].value,
                    HIGHEST_QUALIFICATION: $inputs[8].value,
                    STATE: $inputs[7].value,
                  });
                }
                else
                  if (form_id == "menuContactformCourse") {
                    //alert("menu Contact form Course");


                    document.getElementById("submitbtncourse").style.visibility = "hidden";
                    var $inputs = $('#' + form_id + ' textarea, ' + '#' + form_id + ' :input, ' + '#' + form_id + ' select');
                    var lead = {
                      AuthToken: "MITSDE-11-06-2020",
                      Source: "mitsde",
                      FirstName: $inputs[4].value,
                      MobileNumber: $inputs[6].value,
                      Email: $inputs[5].value,
                      City: "Not Known",
                      State: $inputs[9].value,
                      Country: "India",
                      Course: "Not Known",
                      Textb1: $inputs[10].value,
                      Center: $inputs[8].value,
                      LeadSource: "Paid - Google (DS)",
                      LeadName: $inputs[19].value,
                      LeadType: "Online",
                      Field1: "NA",
                      Leadchannel: $inputs[16].value,
                      leadcampaign: $inputs[17].value,
                    };

                    //alert(JSON.stringify(lead));

                    // First AJAX request
                    $.ajax({
                      url: "https://thirdpartyapi.extraaedge.com/api/SaveRequest",
                      type: "POST",
                      data: JSON.stringify(lead),
                      dataType: 'text',
                      crossDomain: true,
                      contentType: 'application/json; charset=utf-8',
                      success: function (response) {



                        //$('#' + form_id).submit();
                      },
                      error: function (response) {
                        alert("You have already submited a form");
                        location.reload();
                      }
                    });

                    // Second AJAX request
                    $.ajax({
                      url: "https://mitsde.com/add_lead",
                      type: "POST",
                      data: JSON.stringify(lead),
                      dataType: 'text',
                      crossDomain: true,
                      contentType: 'application/json; charset=utf-8',
                      success: function (response) {

                        $('#' + form_id).submit();
                      },
                      error: function (response) {
                        alert("You have already submited a form");
                        location.reload();
                      }
                    });

                    smartech("contact", 10, {
                      "pk^email": $inputs[5].value,
                      STATE: $inputs[9].value,
                      FIRST_NAME: $inputs[4].value,
                      mobile: $inputs[6].value,
                      HIGHEST_QUALIFICATION: $inputs[10].value,
                    });
                    smartech("identify", $inputs[5].value);
                    smartech("dispatch", "Download Brochure", {
                      program: "PGDM",
                      email: $inputs[5].value,
                      specialization: "Project Management",
                    });

                  } else
                    if (form_id == "menuContactformCoursesecond") {


                      document.getElementById("submitbtncoursesecond").style.visibility = "hidden";
                      var $inputs = $('#' + form_id + ' textarea, ' + '#' + form_id + ' :input, ' + '#' + form_id + ' select');
                      var lead = {
                        AuthToken: "MITSDE-11-06-2020",
                        Source: "mitsde",
                        FirstName: $inputs[4].value,
                        MobileNumber: $inputs[6].value,
                        Email: $inputs[5].value,
                        City: "Not Known",
                        State: $inputs[9].value,
                        Country: "India",
                        Course: "Not Known",
                        Textb1: $inputs[10].value,
                        Center: $inputs[8].value,
                        LeadSource: "Paid - Google (DS)",
                        LeadName: $inputs[19].value,
                        LeadType: "Online",
                        Field1: "NA",
                        Leadchannel: $inputs[16].value,
                        leadcampaign: $inputs[17].value,
                      };

                      //alert(JSON.stringify(lead));

                      // First AJAX request
                      $.ajax({
                        url: "https://thirdpartyapi.extraaedge.com/api/SaveRequest",
                        type: "POST",
                        data: JSON.stringify(lead),
                        dataType: 'text',
                        crossDomain: true,
                        contentType: 'application/json; charset=utf-8',
                        success: function (response) {

                          //$('#' + form_id).submit();
                        },
                        error: function (response) {
                          alert("You have already submited a form");
                          location.reload();
                        }
                      });

                      // Second AJAX request
                      $.ajax({
                        url: "https://mitsde.com/add_lead",
                        type: "POST",
                        data: JSON.stringify(lead),
                        dataType: 'text',
                        crossDomain: true,
                        contentType: 'application/json; charset=utf-8',
                        success: function (response) {

                          $('#' + form_id).submit();
                        },
                        error: function (response) {
                          alert("You have already submited a form");
                          location.reload();
                        }
                      });

                      smartech("contact", 10, {
                        "pk^email": $inputs[5].value,
                        STATE: $inputs[9].value,
                        FIRST_NAME: $inputs[4].value,
                        mobile: $inputs[6].value,
                        HIGHEST_QUALIFICATION: $inputs[10].value,
                      });
                      smartech("identify", $inputs[5].value);
                      smartech("dispatch", "Download Brochure", {
                        program: "PGDM",
                        email: $inputs[5].value,
                        specialization: "Project Management",
                      });
                    } else
                      if (form_id == "menuContactformCourseExe") {
                        //alert("menuContactformCourseExe");


                        document.getElementById("submitbtncourseExe").style.visibility = "hidden";
                        var $inputs = $('#' + form_id + ' textarea, ' + '#' + form_id + ' :input, ' + '#' + form_id + ' select');
                        var lead = {
                          AuthToken: "MITSDE-11-06-2020",
                          Source: "mitsde",
                          FirstName: $inputs[4].value,
                          MobileNumber: $inputs[6].value,
                          Email: $inputs[5].value,
                          City: "Not Known",
                          State: $inputs[9].value,
                          Country: "India",
                          Course: "Not Known",
                          Textb1: $inputs[10].value,
                          Center: $inputs[8].value,
                          LeadSource: "Paid - Google (DS)",
                          LeadName: $inputs[19].value,
                          LeadType: "Online",
                          Field1: "NA",
                          Leadchannel: $inputs[16].value,
                          leadcampaign: $inputs[17].value,
                        };

                        //alert(JSON.stringify(lead));

                        // First AJAX request
                        $.ajax({
                          url: "https://thirdpartyapi.extraaedge.com/api/SaveRequest",
                          type: "POST",
                          data: JSON.stringify(lead),
                          dataType: 'text',
                          crossDomain: true,
                          contentType: 'application/json; charset=utf-8',
                          success: function (response) {



                            //$('#' + form_id).submit();
                          },
                          error: function (response) {

                          }
                        });

                        // Second AJAX request
                        $.ajax({
                          url: "https://mitsde.com/add_lead",
                          type: "POST",
                          data: JSON.stringify(lead),
                          dataType: 'text',
                          crossDomain: true,
                          contentType: 'application/json; charset=utf-8',
                          success: function (response) {

                            $('#' + form_id).submit();
                          },
                          error: function (response) {
                            alert("You have already submited a form");
                            location.reload();
                          }
                        });

                        smartech("contact", 10, {
                          "pk^email": $inputs[5].value,
                          STATE: $inputs[9].value,
                          FIRST_NAME: $inputs[4].value,
                          mobile: $inputs[6].value,
                          HIGHEST_QUALIFICATION: $inputs[10].value,
                        });
                        smartech("identify", $inputs[5].value);
                        smartech("dispatch", "Download Brochure", {
                          program: "PGDM",
                          email: $inputs[5].value,
                          specialization: "Project Management",
                        });

                      } else
                        if (form_id == "menuContactformSticky") {
                          //alert(form_id)


                          document.getElementById("submitbtnsticky").style.visibility = "hidden";
                          var $inputs = $('#' + form_id + ' textarea, ' + '#' + form_id + ' :input, ' + '#' + form_id + ' select');
                          var lead = {
                            AuthToken: "MITSDE-11-06-2020",
                            Source: "mitsde",
                            FirstName: $inputs[4].value,
                            MobileNumber: $inputs[6].value,
                            Email: $inputs[5].value,
                            City: "Not Known",
                            State: $inputs[9].value,
                            Country: "India",
                            Course: "Not Known",
                            Textb1: $inputs[10].value,
                            Center: $inputs[8].value,
                            LeadSource: "Paid - Google (DS)",
                            LeadName: $inputs[19].value,
                            LeadType: "Online",
                            Field1: "NA",
                            Leadchannel: $inputs[16].value,
                            leadcampaign: $inputs[17].value,
                          };

                          //alert(JSON.stringify(lead));

                          // First AJAX request
                          $.ajax({
                            url: "https://thirdpartyapi.extraaedge.com/api/SaveRequest",
                            type: "POST",
                            data: JSON.stringify(lead),
                            dataType: 'text',
                            crossDomain: true,
                            contentType: 'application/json; charset=utf-8',
                            success: function (response) {



                              //$('#' + form_id).submit();
                            },
                            error: function (response) {
                              alert("You have already submited a form");
                              location.reload();
                            }
                          });

                          // Second AJAX request
                          $.ajax({
                            url: "https://mitsde.com/add_lead",
                            type: "POST",
                            data: JSON.stringify(lead),
                            dataType: 'text',
                            crossDomain: true,
                            contentType: 'application/json; charset=utf-8',
                            success: function (response) {

                              $('#' + form_id).submit();
                            },
                            error: function (response) {
                              alert("You have already submited a form");
                              location.reload();
                            }
                          });

                          smartech("contact", 10, {
                            "pk^email": $inputs[5].value,
                            STATE: $inputs[9].value,
                            FIRST_NAME: $inputs[4].value,
                            mobile: $inputs[6].value,
                            HIGHEST_QUALIFICATION: $inputs[10].value,
                          });
                          smartech("identify", $inputs[5].value);
                          smartech("dispatch", "Apply Now", {
                            program: "PGDM",
                            email: $inputs[5].value,
                            specialization: "Project Management",
                          });
                        } else {
                          $("#" + form_id).submit();
                        }
    } else {
      return false;
    }
  } else {
    setTimeout(function () {
      do_form_submit(form_id);
    }, 1);
  }
}

function validateStep(selection_id, next_id) {
  alert("hi" + next_id);
  is_submit = true;
  submitform = true;
  submitcontactvalidate(selection_id, "all");
  setTimeout(function () {
    goNextStep(selection_id, next_id);
  }, 1);
}

function goNextStep(selection_id, next_id) {
  if (is_ajax_return) {
    if (submitform) {
      $("#" + selection_id).animate(
        {
          width: "toggle",
        },
        "slow"
      );
    } else {
      return false;
    }
  } else {
    setTimeout(function () {
      do_form_submit(form_id);
    }, 1);
  }
}

function jumpStep(selection_id) {
  $("#" + selection_id).animate(
    {
      width: "toggle",
    },
    "slow"
  );
}

function getFormCaptcha(region_id, captchaLabel) {
  $.ajax({
    type: "POST",
    data: "",
    url:
      SITEROOT + "admin_contact_us/site_contact_us/reloadCaptcha/" + region_id,
    success: function (responseData) {
      $("#capt" + region_id).html(responseData);
      $("#captcha" + region_id).val(captchaLabel);
      $("#captcha" + region_id).removeClass("valid");
      $("#captcha" + region_id).removeClass("error");
    },
  });
}
/*function cf(object){var f=object;if(f.value==f.defaultValue)f.value="";}
function cf(obj){if(obj.value==obj.defaultValue)obj.value='';}
function rf(obj){if(obj.value=='')obj.value=obj.defaultValue; is_submit = true; submitcontactvalidate('leftContactFrm',obj.name);}*/
function removeDefault(obj) {
  if (obj.value == obj.defaultValue) {
    obj.value = "";
  }
}

function addDefault(obj, fromId) {
  if (obj.value == "") {
    obj.value = obj.defaultValue;
  }
  is_submit = true;
  submitcontactvalidate(fromId, obj.name);
}
//----------------------------END---------------------------------------------
