
<?php include 'chatbox.php'; ?>
<!-- Floating Action Button -->   
<head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400' rel='stylesheet' type='text/css'>
     
    <!-- build:js modernizr.touch.js -->
    <script src="../dist/lib/modernizr.touch.js"></script>
    <!-- endbuild -->

    <link href="mitsde-call-cat/demo/index.css" rel="stylesheet">
    <link href="mitsde-call-cat/demo/mobilebutton.css" rel="stylesheet">
    <!-- build:css mfb.css -->
    <link href="mitsde-call-cat/dist/mfb.css" rel="stylesheet">
    <!-- endbuild -->
    
   
    <title></title>
  </head>
  <body>


  
  <!-- Trigger the modal with a button -->
  <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Request a call back</b></h4><h5>Call us for any query</h5>
        </div>
        <div class="modal-body">
        
          <p><label class="form-group ">Mobile Number</label><input type='text' class="form-group" placeholder='10 digit Mobile Number'></p>
         
          <ul class="text-success">
	        <li class="fa fa-check ">Non biase career guidance.</li><br>
      	  <li class="fa fa-check">Counselling based on your skills and preference</li><br>
      	  <li class="fa fa-check">NO repetitive calls,only as per convenience</li>
     	    </ul>
          <label class="text-warning" >
          We will give a call between 9 AM to 9 PM
        </label>
       <br><br> <center> <button type="button" class="btn btn-danger btn-lg btn-block" > Request a call back</button></center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<div class="hidden-mobile show-destop ">

    <ul id="menu" class="mfb-component--br mfb-zoomin hidden-mobile" data-mfb-toggle="hover">
      <li class="mfb-component__wrap">
        <a href="#" class="hidden-mobile mfb-component__button--main">
          <i class="mfb-component__main-icon--resting  "><span style=" position:relative;  top: 10px;" class="ion-android-call "></span><span class="ion-chatboxes"></span></i>
          <i class="mfb-component__main-icon--active ion-close-round"></i>
        </a>
        <ul class="mfb-component__list">
          <li>
            <a  data-mfb-label="Chat With Us" onclick="myFunction()" class="mfb-component__button--child">
                  <i class="mfb-component__child-icon ion-chatbubble-working"> 
                      
               <!-- <script src="https://extraaedgeresources.blob.core.windows.net/demo/mitsde/Chatbot/js/chat.js"></script>--> </i>
            <i class="mfb-component__child-icon ion-chatbubble-working"></i>
            </a>
          </li>
          <li>
            <a href="" data-mfb-label="Call Me Back" data-toggle="modal" data-target="#myModal" class="mfb-component__button--child">
              <i class="mfb-component__child-icon ion-android-call" ></i>
            </a>
          </li>
        </ul>
      </li>
    </ul>

</div>
      
       



        

    
    
  <!-- build:js mfb.js -->
  <script src="../dist/mfb.js"></script>
  <!-- endbuild -->
  <script>

    var panel = document.getElementById('panel'),
        menu = document.getElementById('menu'),
        showcode = document.getElementById('showcode'),
        selectFx = document.getElementById('selections-fx'),
        selectPos = document.getElementById('selections-pos'),
        // demo defaults
        effect = 'mfb-zoomin',
        pos = 'mfb-component--br';

    showcode.addEventListener('click', _toggleCode);
    selectFx.addEventListener('change', switchEffect);
    selectPos.addEventListener('change', switchPos);

    function _toggleCode() {
      panel.classList.toggle('viewCode');
    }

    function switchEffect(e){
      effect = this.options[this.selectedIndex].value;
      renderMenu();
    }

    function switchPos(e){
      pos = this.options[this.selectedIndex].value;
      renderMenu();
    }

    function renderMenu() {
      menu.style.display = 'none';
      // ?:-)
      setTimeout(function() {
        menu.style.display = 'block';
        menu.className = pos + effect;
      },1);
    }

  </script>
  <!-- Finclude ga.html -->

  <div class="hidden-destop show-mobile button-bar flex">
  <a href=""  data-toggle="modal" data-target="#myModal" aria-hidden="true" class=" border border-danger  btn btn-warning button2 sticky left flex-item fa fa-phone text-danger"> <b>Call Us</b></a>
   <a onclick="myFunction()" class=" btn btn-warning  button2  border border-danger sticky right flex-item text-danger fa fa-comments "> <b>Chat</b> </a>
  
</div>


  </body>
 
</html>