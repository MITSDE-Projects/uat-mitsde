 var availableTags = [
   "Afghanistan +93",
"Albania +355",
"Algeria +213",
"American Samoa +1-684",
"Andorra +376",
"Angola +244",
"Anguilla +1-264",
"Antarctica +672",
"Antigua and Barbuda +1-268",
"Argentina +54",
"Armenia +374",
"Aruba +297",
"Australia +61",
"Austria +43",
"Azerbaijan +994",
"Bahamas +1-242",
"Bahrain +973",
"Bangladesh +880",
"Barbados +1-246",
"Belarus +375",
"Belgium +32",
"Belize +501",
"Benin +229",
"Bermuda +1-441",
"Bhutan +975",
"Bolivia +591",
"Bosnia and Herzegovina +387",
"Botswana +267",
"Brazil +55",
"British Indian Ocean Territory +246",
"British Virgin Islands +1-284",
"Brunei +673",
"Bulgaria +359",
"Burkina Faso +226",
"Burundi +257",
"Cambodia +855",
"Cameroon +237",
"Canada +1",
"Cape Verde +238",
"Cayman Islands +1-345",
"Central African Republic +236",
"Chad +235",
"Chile +56",
"China +86",
"Christmas Island +61",
"Cocos Islands +61",
"Colombia +57",
"Comoros +269",
"Cook Islands +682",
"Costa Rica +506",
"Croatia +385",
"Cuba +53",
"Curacao +599",
"Cyprus +357",
"Czech Republic +420",
"Democratic Republic of the Congo +243",
"Denmark +45",
"Djibouti +253",
"Dominica +1-767",
"Dominican Republic +1-809, 1-829, 1-849",
"East Timor +670",
"Ecuador +593",
"Egypt +20",
"El Salvador +503",
"Equatorial Guinea +240",
"Eritrea +291",
"Estonia +372",
"Ethiopia +251",
"Falkland Islands +500",
"Faroe Islands +298",
"Fiji +679",
"Finland +358",
"France +33",
"French Polynesia +689",
"Gabon +241",
"Gambia +220",
"Georgia +995",
"Germany +49",
"Ghana +233",
"Gibraltar +350",
"Greece +30",
"Greenland +299",
"Grenada +1-473",
"Guam +1-671",
"Guatemala +502",
"Guernsey +44-1481",
"Guinea +224",
"Guinea-Bissau +245",
"Guyana +592",
"Haiti +509",
"Honduras +504",
"Hong Kong +852",
"Hungary +36",
"Iceland +354",
"India +91",
"Indonesia +62",
"Iran +98",
"Iraq +964",
"Ireland +353",
"Isle of Man +44-1624",
"Israel +972",
"Italy +39",
"Ivory Coast +225",
"Jamaica +1-876",
"Japan +81",
"Jersey +44-1534",
"Jordan +962",
"Kazakhstan +7",
"Kenya +254",
"Kiribati +686",
"Kosovo +383",
"Kuwait +965",
"Kyrgyzstan +996",
"Laos +856",
"Latvia +371",
"Lebanon +961",
"Lesotho +266",
"Liberia +231",
"Libya +218",
"Liechtenstein +423",
"Lithuania +370",
"Luxembourg +352",
"Macau +853",
"Macedonia +389",
"Madagascar +261",
"Malawi +265",
"Malaysia +60",
"Maldives +960",
"Mali +223",
"Malta +356",
"Marshall Islands +692",
"Mauritania +222",
"Mauritius +230",
"Mayotte +262",
"Mexico +52",
"Micronesia +691",
"Moldova +373",
"Monaco +377",
"Mongolia +976",
"Montenegro +382",
"Montserrat +1-664",
"Morocco +212",
"Mozambique +258",
"Myanmar +95",
"Namibia +264",
"Nauru +674",
"Nepal +977",
"Netherlands +31",
"Netherlands Antilles +599",
"New Caledonia +687",
"New Zealand +64",
"Nicaragua +505",
"Niger +227",
"Nigeria +234",
"Niue +683",
"North Korea +850",
"Northern Mariana Islands +1-670",
"Norway +47",
"Oman +968",
"Pakistan +92",
"Palau +680",
"Palestine +970",
"Panama +507",
"Papua New Guinea +675",
"Paraguay +595",
"Peru +51",
"Philippines +63",
"Pitcairn +64",
"Poland +48",
"Portugal +351",
"Puerto Rico +1-787, 1-939",
"Qatar +974",
"Republic of the Congo +242",
"Reunion +262",
"Romania +40",
"Russia +7",
"Rwanda +250",
"Saint Barthelemy +590",
"Saint Helena +290",
"Saint Kitts and Nevis +1-869",
"Saint Lucia +1-758",
"Saint Martin +590",
"Saint Pierre and Miquelon +508",
"Saint Vincent and the Grenadines +1-784",
"Samoa +685",
"San Marino +378",
"Sao Tome and Principe +239",
"Saudi Arabia +966",
"Senegal +221",
"Serbia +381",
"Seychelles +248",
"Sierra Leone +232",
"Singapore +65",
"Sint Maarten +1-721",
"Slovakia +421",
"Slovenia +386",
"Solomon Islands +677",
"Somalia +252",
"South Africa +27",
"South Korea +82",
"South Sudan +211",
"Spain +34",
"Sri Lanka +94",
"Sudan +249",
"Suriname +597",
"Svalbard and Jan Mayen +47",
"Swaziland +268",
"Sweden +46",
"Switzerland +41",
"Syria +963",
"Taiwan +886",
"Tajikistan +992",
"Tanzania +255",
"Thailand +66",
"Togo +228",
"Tokelau +690",
"Tonga +676",
"Trinidad and Tobago +1-868",
"Tunisia +216",
"Turkey +90",
"Turkmenistan +993",
"Turks and Caicos Islands +1-649",
"Tuvalu +688",
"U.S. Virgin Islands +1-340",
"Uganda +256",
"Ukraine +380",
"United Arab Emirates +971",
"United Kingdom +44",
"United States +1",
"Uruguay +598",
"Uzbekistan +998",
"Vanuatu +678",
"Vatican +379",
"Venezuela +58",
"Vietnam +84",
"Wallis and Futuna +681",
"Western Sahara +212",
"Yemen +967",
"Zambia +260",
"Zimbabwe +263"
    ];
function GotoPrevPage(p)
{
   location.href=p;
}
function CalTotal(i)
{
    var sum=0;
    $('.sum'+i).each(function() {
		var s=$(this).val();
		s=parseFloat(s);
		if (s!=null && s!="" && s!=0 && !isNaN(s))
		{
			sum +=s;
		}
		});
    
    	document.getElementById("total"+i).innerHTML=sum;

      var total10=document.getElementById("total1").innerHTML;
      var oscore10=document.getElementById("total2").innerHTML;
    var perc10=(parseFloat(total10)*100)/parseFloat(oscore10);
    document.getElementById("total_10").value=perc10;
    
     var total12=document.getElementById("total3").innerHTML;
      var oscore12=document.getElementById("total4").innerHTML;
    var perc12=(parseFloat(total12)*100)/parseFloat(oscore12);
    document.getElementById("total_12").value=perc12;
    alert(perc10+" "+perc12);
   
}

function isNumberKey(evt)
					{
					var charCode = (evt.which) ? evt.which : event.keyCode;
					if (charCode > 31 && (charCode < 48 || charCode > 57)){
					return false;
					}
					return true;
					}
              
              function isNumberKeyScorePercentage(evt)
					{
					var charCode = (evt.which) ? evt.which : event.keyCode;
					if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode!=46){
					return false;
					}
					return true;
					}
               
               
function CalTotal(i)
{
    var sum=0;
    $('.sum'+i).each(function() {
		var s=$(this).val();
		s=parseFloat(s);
		if (s!=null && s!="" && s!=0 && !isNaN(s))
		{
			sum +=s;
		}
		});
	document.getElementById("total"+i).innerHTML=sum;
}
 function ValidateEnglish(obj)
               {
					var v=parseInt(obj.value);
					if (v>10 || v<0)
					{
                        obj.value=parseInt(v/10);
                    }
               }
               
               function ValidatePercentage(obj)
               {
					var v=parseFloat(obj.value).toFixed(2);
					if (v>100 || v<0)
					{
                        obj.value=v/10;
                    }
               }
               function ValidateMarks(obj)
               {
					var v=parseInt(obj.value);
					if (v>100 || v<0)
					{
                        obj.value=parseInt(v/10);
                    }
               }
               
               
               function validatepage1()
					{
                  
                  var v=document.getElementById("phonenumber").value;
                 // var a=document.getElementById("aadhar").value;
                 var nationality=document.getElementById("nationality").value;
                 var code=document.getElementById("studentisdcode").value;
                 if (code==="" || code.length<=0)
                  {
                     $("#studentisdcodeerr").css("color","red");
                     document.getElementById("studentisdcodeerr").innerHTML="Invalid Country Code";
                     return false;
                  }
                  else if (v.length<10)
                  {
                     $("#phonenumber,#phonenumbererr").css("color","red");
                     document.getElementById("phonenumbererr").innerHTML="Invalid Mobile Number";
                     return false;
                  }
                 /* else if (nationality=="Indian")
                  {
                     if(a.length<12)
                     {
                        $("#aadhar,#aadharerr").css("color","red");
                        document.getElementById("aadharerr").innerHTML="Invalid AADHAR Number";
                        return false;
                     }
                  }*/
                  else if (nationality!="Indian")
                  {
                     var nation=document.getElementById("o1").value;
                     nation=nation.trim();
                     if(nation==="" || nation.length==0)
                     {
                     $("#nationerr").css("color","red");
                     document.getElementById("nationerr").innerHTML="Invalid Country Name";
                     return false;
                     }
                  }
                  return true;
					}
                function validatepage2()
					{
                  
                  var v=document.getElementById("parentmobilenumber").value;
                  var s=document.getElementById("studentmobilenumber").value;
                   var code=document.getElementById("parentisdcode").value;
                 if (code==="" || code.length<=0)
                  {
                     $("#parentisdcodeerr").css("color","red");
                     document.getElementById("parentisdcodeerr").innerHTML="Invalid Country Code";
                     return false;
                  }
                  else if (v.length<10)
                  {
                     $("#parentmobilenumber,#parentmobilenumbererr").css("color","red");
                     document.getElementById("parentmobilenumbererr").innerHTML="Invalid Mobile Number";
                     return false;
                  }
                  if (v==s)
                  {
                     $("#parentmobilenumber,#parentmobilenumbererr").css("color","red");
                     document.getElementById("parentmobilenumbererr").innerHTML="Can not be same as student's number";
                     return false;
                  }
                     document.getElementById("parentmobilenumbererr").innerHTML="";
                     $("#parentmobilenumber,#parentmobilenumbererr").css("color","black");

                                       return true;
					}
                function validatepage3()
					{
                  
                 var v10total=document.getElementById("total1").innerHTML;
                 var v10outof=document.getElementById("total2").innerHTML;
                 
                 var v12total=document.getElementById("total3").innerHTML;
                 var v12outof=document.getElementById("total4").innerHTML;
                 var perc10=0;
                 var perc12=0;
                 if (v10total && v10outof && v10total!=="" && v10total!=="" && !isNaN(v10outof) && !isNaN(v10total))
                     {
                        perc10=(v10total*100)/v10outof;
                        if (!isNaN(perc10) && perc10<=100 && perc10>=0)
                        {
                                                    document.getElementById("total_10").value=perc10.toFixed(2);
                        }
                        else
                        {
                                                    document.getElementById("total_10").value=0;                           
                        }
                     }
                     if (v12total && v12outof && v12total!=="" && v12total!=="" && !isNaN(v12outof) && !isNaN(v12total))
                     {
                        perc12=(v12total*100)/v12outof;
                        if (!isNaN(perc12) && perc12<=100 && perc12>=0)
                        {
                                                    document.getElementById("total_12").value=perc12.toFixed(2);
                        }
                        else
                        {
                                                    document.getElementById("total_12").value=0;                           
                        }
                     }
                     return true;
               }
                     

function SetEntranceExam()
{
    if (document.getElementById("appearingentranceexam").checked===true)
			{
            $("#entrance input").prop( "disabled", true );
            $("#entrance input").prop( "value", "");
            $("#entrance input").css( "background-color","#ccc");
         }
         else
         {
            $("#entrance input").prop( "disabled", false );
            $("#entrance input").css( "background-color","transparent");
         }
}

 $( function() {
    
    $( ".isdcode" ).autocomplete({
      source: availableTags,
      autoFocus: true,
      selectFirst:true,
      change: function (event, ui) {
                if(!ui.item){
                    $(".isdcode").val("");
                }

            }
    });
  } );