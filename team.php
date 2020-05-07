<!DOCTYPE html>
<html lang="en">
<head>
  <title>team</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/event.css">
   <link rel="stylesheet" type="text/css" href="css/ihover.css">
   <link rel="shortcut icon" href="images/tech.png" type="image/">
  <link rel="stylesheet" type="text/css" href="css/ihover.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  .main-nav
{
  margin-left: 20%;
  margin-top: 10px;
}
.main-nav li
{
  display: inline-block;
  list-style: none;
  margin-left: 50px;
}
.main-nav li a
{
  padding: 5px 0;
 font-family: 'Jura', sans-serif;
  color: #fff;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 15px;

}
.main-nav li a:hover
{
  
  border-right: 3px solid #fc9209;
  border-left: 3px solid #fc9209;
  color : #fc9209;
  font-size: 20px;
}
  body{
    overflow: auto;
  }

</style>
<body>
   <div class="banner">
     <header>
        <div class="row">
          <div class="col-md-1">
            <a href="#" onclick="window.open('https://www.nitt.edu/')"><img src="images/nitlogo2.png" class="logo"></a>
          </div>
          <div class="col-md-10">
         <nav>
       <div class="row clearfix">
         <ul class="main-nav animated slideInDown" id="bar-Id">
           <li><a href="index.php">Home</a></li>
           <li><a href="event.php">Events</a></li>
           <li><a href="team.php">Our Team</a></li>
           <li><a href="loginform.php">Register</a></li>
           <li><a href="contact.php">Contact</a></li>
         </ul>
         
       </div>
     </nav>

         </div>
          <div class="col-md-1">
             <a href="#" onclick="window.open('http://osoc.nitt.edu/')"><img src="images/osoc_blue.png" class="logo2"></a>
          </div>
        </div>
     </header>

     <!-- Top to bottom-->
<div class="row" style="margin-top: 30px;">
  <div class="col-sm-3" align="center">
 
    <!-- normal -->
    <div class="ih-item circle colored effect10 top_to_bottom"><a href="#">
        <div class="img"><img src="images/ankur.jpg" alt="img"></div>
        <div class="info">
          <h3>Ankur Rana</h3>
          <p>Batch 2K21</p>
        </div></a></div>
    <!-- end normal -->
 
  </div>
  <div class="col-sm-3" align="center">
 
    <!-- normal -->
    <div class="ih-item circle colored effect10 top_to_bottom"><a href="#">
        <div class="img"><img src="images/swapnil.jpg" alt="img"></div>
        <div class="info">
          <h3>Swapnil Gupta</h3>
          <p>Batch 2K21</p>
        </div></a></div>
    <!-- end normal -->
 
  </div>
  <div class="col-sm-3" align="center">
 
    <!-- colored -->
    <div class="ih-item circle colored effect10 top_to_bottom"><a href="#">
        <div class="img"><img src="images/RA.jpg" alt="img"></div>
        <div class="info">
          <h3>Richa Agarwal</h3>
          <p>Batch 2K21</p>
        </div></a></div>
    <!-- end colored -->
 
  </div>
  <div class="col-sm-3" align="center">
 
    <!-- colored -->
    <div class="ih-item circle colored effect10 top_to_bottom"><a href="#">
        <div class="img"><img src="images/vaibhav.jpg" alt="img"></div>
        <div class="info">
          <h3>Vaibhav Vikas</h3>
          <p>Batch 2K21</p>
        </div></a></div>
    <!-- end colored -->
 
  </div>
</div>
<!-- end Top to bottom-->
 
 
<div class="row" style="margin-top: 30px;">
  <div class="col-sm-3" align="center">
 
    <!-- normal -->
    <div class="ih-item circle colored effect10 top_to_bottom"><a href="#">
        <div class="img"><img src="images/rohit.jpeg" alt="img"></div>
        <div class="info">
          <h3>Rohit Bairagi</h3>
          <p>Batch 2K21</p>
        </div></a></div>
    <!-- end normal -->
 
  </div>
  <div class="col-sm-3" align="center">
 
    <!-- normal -->
    <div class="ih-item circle colored effect10 top_to_bottom"><a href="#">
        <div class="img"><img src="images/RN2.jpg" alt="img"></div>
        <div class="info">
          <h3>Ruchita Nagar</h3>
          <p>Batch 2K21</p>
        </div></a></div>
    <!-- end normal -->
 
  </div>
  <div class="col-sm-3" align="center">
 
    <!-- colored -->
    <div class="ih-item circle colored effect10 top_to_bottom"><a href="#">
        <div class="img"><img src="images/kunal.jpg" alt="img"></div>
        <div class="info">
          <h3>Kunal Bhavsar</h3>
          <p>Batch 2K21</p>
        </div></a></div>
    <!-- end colored -->
 
  </div>
  <div class="col-sm-3" align="center">
 
    <!-- colored -->
    <div class="ih-item circle colored effect10 top_to_bottom"><a href="#">
        <div class="img"><img src="images/vipin.jpg" alt="img"></div>
        <div class="info">
          <h3>Vipin Niranjan</h3>
          <p>Batch 2K21</p>
        </div></a></div>
    <!-- end colored -->
 
  </div>
</div>
<!-- end Top to-->

   </div>  
<script type="text/javascript">
  // dots is an array of Dot objects,
// mouse is an object used to track the X and Y position
   // of the mouse, set with a mousemove event listener below
/*var dots = [],
    mouse = {
      x: 0,
      y: 0
    };

// The Dot object used to scaffold the dots
var Dot = function() {
  this.x = 0;
  this.y = 0;
  this.node = (function(){
    var n = document.createElement("div");
    n.className = "trail";
    document.body.appendChild(n);
    return n;
  }());
};
// The Dot.prototype.draw() method sets the position of 
  // the object's <div> node
Dot.prototype.draw = function() {
  this.node.style.left = this.x + "px";
  this.node.style.top = this.y + "px";
};

// Creates the Dot objects, populates the dots array
for (var i = 0; i < 12; i++) {
  var d = new Dot();
  dots.push(d);
}

// This is the screen redraw function
function draw() {
  // Make sure the mouse position is set everytime
    // draw() is called.
  var x = mouse.x,
      y = mouse.y;
  
  // This loop is where all the 90s magic happens
  dots.forEach(function(dot, index, dots) {
    var nextDot = dots[index + 1] || dots[0];
    
    dot.x = x;
    dot.y = y;
    dot.draw();
    x += (nextDot.x - dot.x) * .6;
    y += (nextDot.y - dot.y) * .6;

  });
}

addEventListener("mousemove", function(event) {
  //event.preventDefault();
  mouse.x = event.pageX;
  mouse.y = event.pageY;
});

// animate() calls draw() then recursively calls itself
  // everytime the screen repaints via requestAnimationFrame().
function animate() {
  draw();
  requestAnimationFrame(animate);
}

// And get it started by calling animate().
animate();*/

</script>

</body>
</html>
