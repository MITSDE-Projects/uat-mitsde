function SetRegionByCountry(ProgrammesUGPG){
var dropdown = document.getElementById("item4_select_1");

    switch (ProgrammesUGPG.value){
        case 'MITID Programme - UG':{
            dropdown.options.length = 0;
            dropdown.options[dropdown.options.length] = new Option('Foundation','Foundation');
            break;
        }
		case 'MITID Programme - PG':{
            dropdown.options.length = 0;
            dropdown.options[dropdown.options.length] = new Option('Product Design','Product Design');
            dropdown.options[dropdown.options.length] = new Option('Transportation Design','Transportation Design');
            dropdown.options[dropdown.options.length] = new Option('Interior Space and Furniture Design','Interior Space and Furniture Design');
            dropdown.options[dropdown.options.length] = new Option('Retail Design','Retail Design');
			dropdown.options[dropdown.options.length] = new Option('Graphic Design','Graphic Design');
			dropdown.options[dropdown.options.length] = new Option('Animation Design','Animation Design');
			dropdown.options[dropdown.options.length] = new Option('Film and Video Design','Film and Video Design');
			dropdown.options[dropdown.options.length] = new Option('User Experience Design','User Experience Design');
            break;
        }
		case 'Fashion Programme - UG':{
            dropdown.options.length = 0;
            dropdown.options[dropdown.options.length] = new Option('BA (Hons) Fashion Design','BA (Hons) Fashion Design');
            dropdown.options[dropdown.options.length] = new Option('BA (Hons) Fashion promotion and Imaging','BA (Hons) Fashion promotion and Imaging');
            break;
        }
		 case 'Fashion Programme - PG':{
            dropdown.options.length = 0;
            dropdown.options[dropdown.options.length] = new Option('MBA Fashion Management and Marketing','MBA Fashion Management and Marketing');
			dropdown.options[dropdown.options.length] = new Option('M.Des Fashion Design','M.Des Fashion Design');
            break;
        }
		case 'MITID Collaborative Programme - UG':{
            dropdown.options.length = 0;
           /* dropdown.options[dropdown.options.length] = new Option('BA (Hons) Graphic Design (In collaboration with University of Gloucestershire UK)','BA (Hons) Graphic Design (In collaboration with University of Gloucestershire UK)');
			dropdown.options[dropdown.options.length] = new Option('BA (Hons) Digital Film Production (In collaboration with University of Gloucestershire UK)','BA (Hons) Digital Film Production (In collaboration with University of Gloucestershire UK)');
			dropdown.options[dropdown.options.length] = new Option('BSc (Hons) Product Design (In collaboration with Manchester Metropolitan University UK)','BSc (Hons) Product Design (In collaboration with Manchester Metropolitan University UK)');
			dropdown.options[dropdown.options.length] = new Option('BA (Hons) Graphic Design (In collaboration with Manchester Metropolitan University UK)','BA (Hons) Graphic Design (In collaboration with Manchester Metropolitan University UK)');*/
			dropdown.options[dropdown.options.length] = new Option('BA (Hons) Design for Industry (In collaboration with Northumbria University UK)','BA (Hons) Design for Industry (In collaboration with Northumbria University UK)');
			dropdown.options[dropdown.options.length] = new Option('BA (Hons) Transportation Design (In collaboration with Northumbria University UK)','BA (Hons) Transportation Design (In collaboration with Northumbria University UK)');
			dropdown.options[dropdown.options.length] = new Option('BA (Hons) 3D Design (In collaboration with Northumbria University UK)','BA (Hons) 3D Design (In collaboration with Northumbria University UK)');
			dropdown.options[dropdown.options.length] = new Option('BA (Hons) Graphic Design (In collaboration with Northumbria University UK)','BA (Hons) Graphic Design (In collaboration with Northumbria University UK)');
			dropdown.options[dropdown.options.length] = new Option('BA (Hons) Motion Graphics and Animation (In collaboration with Northumbria University UK)','BA (Hons) Motion Graphics and Animation (In collaboration with Northumbria University UK)');
			dropdown.options[dropdown.options.length] = new Option('BA (Hons) Computers Arts (In collaboration with Abertay University UK)','BA (Hons) Computers Arts (In collaboration with Abertay University UK)');
			dropdown.options[dropdown.options.length] = new Option('Advance Diploma in Game Development (In collaboration with George Brown College Canada)','Advance Diploma in Game Development (In collaboration with George Brown College Canada)');
			dropdown.options[dropdown.options.length] = new Option('BA (Hons) Product Design (In collaboration with Middlesex University UK)','BA (Hons) Product Design (In collaboration with Middlesex University UK)');
            break;
        }
		 case 'MITID Collaborative Programme - PG':{
            dropdown.options.length = 0;
            /*dropdown.options[dropdown.options.length] = new Option('MSc Design Ethnography (In Collaboration with University of Dundee)','MSc Design Ethnography (In Collaboration with University of Dundee)');
			dropdown.options[dropdown.options.length] = new Option('MSc Product Design (In Collaboration with University of Dundee)','MSc Product Design (In Collaboration with University of Dundee)');*/
			dropdown.options[dropdown.options.length] = new Option('Mprof. Games Development (In Collaboration with University of Abertay)','Mprof. Games Development (In Collaboration with University of Abertay)');
            break;
        }
		
           }
		   
				
}

/* country redio button selection */ 
		   
function getCheckedRadio() 
{
     var radioButtons = document.getElementsByName("countryname");	 
	 for (var x = 0; x < radioButtons.length; x ++) 
	 {
		if (radioButtons[x].checked) 
		{      
			var countryvalue = radioButtons[x].value;
			
			if(countryvalue == 'International student')
			{
			document.getElementById('countrytext').value = countryvalue;
            document.getElementById("category").required = false;
            document.getElementById("countryname").required = true;
			document.getElementById("nationality1").required = true; 
			document.getElementById("category").attributes["required"] = "";         
			}
			else
		   {
			document.getElementById('countrytext').value = countryvalue;
			document.getElementById("category").required = true;
			document.getElementById("countryname").required = false;
			document.getElementById("nationality1").required = false;
			
	       }
	    }
     }
}

function getCountry() 
{
     var countrynewvalue = document.getElementById('countryname').value;    
	 document.getElementById('countrytext').value = countrynewvalue;
     //alert(countrynewvalue);
	 //document.getElementById('nationality').value = dop;	
}


/* nationality selection */ 
		   
function getNationality() 
{
     var dop = document.getElementById("nationality1").value;
	 document.getElementById('nationality').value = dop;
	
}


	