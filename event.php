<!DOCTYPE html>
<html lang="en">
<head>
  <title>event</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/event.css">
  <link rel="shortcut icon" href="images/tech.png" type="image/">
   <link rel="stylesheet" type="text/css" href="css/ihover.css">
  <link rel="stylesheet" type="text/css" href="css/ihover.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>
<style type="text/css">
  
.banner2
{
    background:#24282b;
    height:100vh;
    
}
  </style>
<body style="background-color: #28282d;">
   <div class="banner2">
     <header>
        <div class="row">
          <div class="col-md-1">
            <a href="#" onclick="window.open('https://www.nitt.edu/')"><img src="images/nitlogo2.png" class="logo"></a>
          </div>
          <div class="col-md-10">
            <div class="nav1">
               <nav class="navbar navbar-expand-lg  navbar-fixed">
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-lebel="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                 </button>
  <!-- Links -->
                 <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="event.php">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="team.php">Our Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="loginform.php">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">contact</a></li>
                  </ul>
                </div>
               </nav>
            </div>
         </div>
          <div class="col-md-1">
             <a href="#" onclick="window.open('http://osoc.nitt.edu/')"><img src="images/osoc.png" class="logo2"></a>
          </div>
        </div>
     </header>
     <div class="row">
       <ul class="blocks-names2">
         <li class="blocks__name" onclick="openNav6()">Case Study</li>
         <li class="blocks__name" onclick="openNav7()" style="color: #fff;">Concevior Le Web</li>
         <li class="blocks__name" onclick="openNav8()"> Bluff master </li>
         <li class="blocks__name" onclick="openNav9()" style="color: #fff;">Crypto-Crack</li>
         <li class="blocks__name" onclick="openNav10()">Visual Quest</li>
      </ul>
      <ul class="blocks2">
        <li class="blocks__block" id="1"></li>
        <li class="blocks__block" id="2"></li>
        <li class="blocks__block" id="3"></li>
        <li class="blocks__block" id="4"></li>
        <li class="blocks__block" id="5"></li>
    </ul>
     </div>
     <div class="main" align="center">
         <a href="#" onclick="openNav11()"><img src="images/index2.png" alt="Code Arena" style="width:180px;height:180px;">  </a>
     </div>
     <div class="row"> 
        <ul class="blocks-names">
           <li class="blocks__name" onclick="openNav()">Black Run</li>
           <li class="blocks__name" onclick="openNav2()" style="color: #fff;">SeQueLize</li>
           <li class="blocks__name" onclick="openNav3()">Agamya</li>
           <li class="blocks__name" onclick="openNav4()" style="color: #fff;">Mystery Maze</li>
           <li class="blocks__name" onclick="openNav5()">Zombie Island</li>
        </ul>
        <ul class="blocks">
           <li class="blocks__block" id="1"></li>
           <li class="blocks__block" id="2"></li>
           <li class="blocks__block" id="3"></li>
           <li class="blocks__block" id="4"></li>
           <li class="blocks__block" id="5"></li>
        </ul>
     </div>

    <div id="myNav" class="overlay">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
       <div class="overlay-content">
        <img src="logos/images.png" alt="Agamya" style="width:200px;height:200px;border-radius: 50%;">
        <h1 style="color: white;font-size: 50px;font-family: Georgia">Black Run</h1>
        <p style="color: white;padding-left: 15%;padding-right: 15%;font-family: ">This is the event that test concentration and accuracy. Some coding questions will be given to participants. Participants have to write the code in given editor. It looks very easy but interesting fact is that participants will not be able to see whatever they are writing. Monitor screen will be off during the event</p>
       </div>
   </div>



   <div id="myNav2" class="overlay">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
       <div class="overlay-content">
         <img src="images/SQL.png" alt="Agamya" style="width:200px;height:200px;border-radius: 50%;">
        <h1 style="color: white;font-size: 50px;font-family: Georgia">SeQueLize</h1>
        <p style="color: white;padding-left: 15%;padding-right: 15%;font-family: ">This event is SQL event in which participants have to write query and fetch the data from database according to the problem. Database and questions will be provided to the participants.</p>
       </div>
   </div>



   <div id="myNav3" class="overlay">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav3()">&times;</a>
       <div class="overlay-content">
       <img src="images/project2.png" alt="Agamya" style="width:200px;height:200px;border-radius: 50%;">
        <h1 style="color: white;font-size: 50px;font-family: Georgia">Agamya </h1>
        <p style="color: white;padding-left: 15%;padding-right: 15%;font-family: ">This is the project submission event where participants have to show their project work. Participants have to implement project on real life problems (software or hardware). Participant will have to submit abstract of the project at the time of registration. Some project will be selected on basis of working model for final round. In final round participant have to give presentation of their project.</p>
       </div>
   </div>

.

   <div id="myNav4" class="overlay">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav4()">&times;</a>
       <div class="overlay-content">
       <img src="images/compass_icon.jpg" alt="Agamya" style="width:200px;height:200px;border-radius: 50%;">
        <h1 style="color: white;font-size: 50px;font-family: Georgia">Mystery Maze </h1>
        <p style="color: white;padding-left: 15%;padding-right: 15%;font-family: ">This is an event in which problems related to hunting and coding will be 
given. </p>
       </div>
   </div>



   <div id="myNav5" class="overlay">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav5()">&times;</a>
       <div class="overlay-content">
       <img src="images/treasurehunt.png" alt="Agamya" style="width:200px;height:200px;border-radius: 50%;">
        <h1 style="color: white;font-size: 50px;font-family: Georgia">Zombie Island</h1>
        <p style="color: white;padding-left: 15%;padding-right: 15%;font-family: ">Teams of participants will be formed. They will compete to each other. Highest scorer will be winner. </p>
       </div>
   </div>



   <div id="myNav6" class="overlay">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav6()">&times;</a>
       <div class="overlay-content">
       <img src="images/casestu.png" alt="Agamya" style="width:200px;height:200px;border-radius: 50%;">
        <h1 style="color: white;font-size: 50px;font-family: Georgia"> Case study</h1>
        <p style="color: white;padding-left: 15%;padding-right: 15%;font-family: ">In this event case study will be given to participants in which participants have to find solution of real time problem. Participants have to proposed solution in terms of presentation which involves software, hardware, data structure, product name and programming languages. </p>
       </div>
   </div>


   <div id="myNav7" class="overlay">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav7()">&times;</a>
       <div class="overlay-content">
       <img src="images/webdes.png" alt="Agamya" style="width:200px;height:200px;border-radius: 50%;">
        <h1 style="color: white;font-size: 50px;font-family: Georgia"> Concevior Le Web </h1>
        <p style="color: white;padding-left: 15%;padding-right: 15%;font-family: ">Surprise event</p>
       </div>
   </div> 



   <div id="myNav8" class="overlay">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav8()">&times;</a>
       <div class="overlay-content">
       <img src="images/proj.png" alt="Agamya" style="width:200px;height:200px;border-radius: 50%;">
        <h1 style="color: white;font-size: 50px;font-family: Georgia"> Bluff master </h1>
        <p style="color: white;padding-left: 15%;padding-right: 15%;font-family: ">Surprise event</p>
       </div>
   </div> 


   <div id="myNav9" class="overlay">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav9()">&times;</a>
       <div class="overlay-content">
       <img src="images/crypto2.png" alt="Agamya" style="width:200px;height:200px;border-radius: 50%;">
        <h1 style="color: white;font-size: 50px;font-family: Georgia">Crypto-Crack</h1>
        <p style="color: white;padding-left: 15%;padding-right: 15%;font-family: ">This is an onstage event in which participants will have to decode message. Message will be appeared on projector. Highest scorer will be winner. </p>
       </div>
   </div> 


   <div id="myNav10" class="overlay">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav10()">&times;</a>
       <div class="overlay-content">
       <img src="images/video coding.png" alt="Agamya" style="width:200px;height:200px;border-radius: 50%;">
        <h1 style="color: white;font-size: 50px;font-family: Georgia">Visual Quest</h1>
        <p style="color: white;padding-left: 15%;padding-right: 15%;font-family: ">This is an onstage event in which participants will have to decode message. Message will be appeared on projector. Highest scorer will be winner. </p>
       </div>
   </div> 

   <div id="myNav11" class="overlay">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav11()">&times;</a>
       <div class="overlay-content">
       <img src="images/index2.png" alt="Code Arena" style="width:200px;height:200px;border-radius: 50%;">
        <h1 style="color: white;font-size: 50px;font-family: Georgia">Code Arena</h1>
        <p style="color: white;padding-left: 15%;padding-right: 15%;font-family: ">this is coding event. </p>
        <a href="loginform.php" class=" zoomIn btn btn-full" onclick="showMedia()">Register</a>
        <a href="loginform.php" class=" zoomIn btn btn-full">Login</a>
       </div>
   </div> 


</div>  
<script type="text/javascript">
  // dots is an array of Dot objects,
// mouse is an object used to track the X and Y position
   // of the mouse, set with a mousemove event listener below


//events 

function openNav() {
  document.getElementById("myNav").style.width = "100%";
}
function openNav2() {
  document.getElementById("myNav2").style.width = "100%";
}
function openNav3() {
  document.getElementById("myNav3").style.width = "100%";
}
function openNav4() {
  document.getElementById("myNav4").style.width = "100%";
}
function openNav5() {
  document.getElementById("myNav5").style.width = "100%";
}
function openNav6() {
  document.getElementById("myNav6").style.width = "100%";
}
function openNav7() {
  document.getElementById("myNav7").style.width = "100%";
}
function openNav8() {
  document.getElementById("myNav8").style.width = "100%";
}
function openNav9() {
  document.getElementById("myNav9").style.width = "100%";
}
function openNav10() {
  document.getElementById("myNav10").style.width = "100%";
}
function openNav11() {
  document.getElementById("myNav11").style.width = "100%";
}





function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
function closeNav2() {
  document.getElementById("myNav2").style.width = "0%";
}
function closeNav3() {
  document.getElementById("myNav3").style.width = "0%";
}
function closeNav4() {
  document.getElementById("myNav4").style.width = "0%";
}
function closeNav5() {
  document.getElementById("myNav5").style.width = "0%";
}
function closeNav6() {
  document.getElementById("myNav6").style.width = "0%";
}
function closeNav7() {
  document.getElementById("myNav7").style.width = "0%";
}
function closeNav8() {
  document.getElementById("myNav8").style.width = "0%";
}
function closeNav9() {
  document.getElementById("myNav9").style.width = "0%";
}
function closeNav10() {
  document.getElementById("myNav10").style.width = "0%";
}
function closeNav11() {
  document.getElementById("myNav11").style.width = "0%";
}
</script>

</body>
</html>
