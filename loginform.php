<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
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
<body>
   <div class="banner">
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
    
    <div class="login-wrap">
      <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
          <form class="sign-in-htm" action="login.php" method="POST">
            <div class="group">
              <br>
              <input id="rollno" name="rollno" type="text" class="input" placeholder="Enter Roll Number" >
            </div>
        
           <div class="group">
             <br>
             <input id="password" name="password" type="password" class="input" data-type="password" placeholder="Enter Password" required>
           </div>
           <br>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
      </form>
      <form class="sign-up-htm" action="signup.php" method="POST">
        <div class="group <?php echo !empty($nameError)?'error':'';?>" >
          <input id="username" name="username" type="text" class="input" placeholder="Enter Name" required>
          <?php if (!empty($nameError)): ?>
              <span class="help-inline"><?php echo $nameError;?></span>
          <?php endif; ?>
        </div>
        <div class="group <?php echo !empty($rollError)?'error':'';?>">
          <input id="rollno" name="rollno" type="text" class="input" placeholder="Enter Roll Number" required>
           <?php if (!empty($rollError)): ?>
              <span class="help-inline"><?php echo $rollError;?></span>
          <?php endif; ?>
        </div>
        <div class="group <?php echo !empty($deptError)?'error':'';?>">
          <input id="dept" name="dept" type="text" class="input" placeholder="Enter Department" required>
           <?php if (!empty($deptError)): ?>
              <span class="help-inline"><?php echo $deptError;?></span>
          <?php endif; ?>
        </div>
        <div class="group <?php echo !empty($courseError)?'error':'';?>">
          <input id="course" name="course" type="text" class="input" placeholder="Enter Course" required>
           <?php if (!empty($courseError)): ?>
              <span class="help-inline"><?php echo $courseError;?></span>
          <?php endif; ?>
        </div>
        <div class="group <?php echo !empty($pwdError)?'error':'';?>">
          <input id="password" name="password" type="password" class="input" data-type="password" placeholder="Enter Password" required>
           <?php if (!empty($pwdError)): ?>
              <span class="help-inline"><?php echo $pwdError;?></span>
          <?php endif; ?>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign Up">
        </div>

      </form>
    </div>
  </div>
</div>


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
animate();

//slideshow

var myIndex = 0;
//carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
*/
</script>

</body>
</html>
