function SetRegionByCountry(ProgrammesUGPG){
var dropdown = document.getElementById("coursedropdown");

    switch (ProgrammesUGPG.value){
        alert(ProgrammesUGPG.value);
        case 'B.Tech':{
             document.getElementById("coursedropdown").style.display="inline";
            dropdown.options.length = 0;
            dropdown.options[dropdown.options.length] = new Option('Mechanical Engineering','Mechanical');
            dropdown.options[dropdown.options.length] = new Option('Civil Engineering','Civil');
            dropdown.options[dropdown.options.length] = new Option('Electronics and Communication Engineering','ElectronicsCommunication');
            dropdown.options[dropdown.options.length] = new Option('Computer Science and Engineering','Computer');
            break;
        }
		case 'B.Arch':{
            dropdown.options.length = 0;
            document.getElementById("coursedropdown").style.display="none";
           //arch program
            break;
        }
        	case 'B.Des':{
          document.getElementById("coursedropdown").style.display="inline";
            dropdown.options.length = 0;
            dropdown.options[dropdown.options.length] = new Option('System','System');
            dropdown.options[dropdown.options.length] = new Option('Industrial','Industrial');
            dropdown.options[dropdown.options.length] = new Option('Communicationn','Communication');
            break;
        }
		
		
           }
		   
				
}




	