<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track validation errors
        $fnameError = null;
        $lnameError = null;
        $emailError = null;
        $msgError = null;
        
         
        // keep track post values
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $msg = $_POST['msg'];
         
        // validate input
        $valid = true;
        if (empty($fname)) {
            $nameError = 'Please enter First Name';
            $valid = false;
        }
         
        if (empty($lname)) {
            $rollError = 'Please enter Last Name';
            $valid = false;
        }

        if (empty($email)) {
            $deptError = 'Please enter Email id';
            $valid = false;
        }
         
        if (empty($msg)) {
            $pwdError = 'Please write message';
            $valid = false;
        } 

        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO feedback (fname,lname,email,mobile,msg) values(?, ?, ?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($fname,$lname,$email,$mobile,$msg));
            Database::disconnect();
            header("Location: contact.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="shortcut icon" href="images/tech.png" type="image/">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="css/event.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>
<body style="background-color: #28282d;">
   <div class="banner4">
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
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
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
     
      <div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" action="contact.php" method="POST">
        <span class="contact100-form-title">
          Give us Feedback
        </span>

        <label class="label-input100" for="first-name">Tell us your name *</label>
        <div class="wrap-input100 rs1-wrap-input100 validate-input <?php echo !empty($fnameError)?'error':'';?>" data-validate="Type first name">
          <input id="fname" class="input100" type="text" name="fname" placeholder="First name" required>
          <?php if (!empty($fnameError)): ?>
              <span class="help-inline"><?php echo $fnameError;?></span>
          <?php endif; ?>
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 rs2-wrap-input100 validate-input <?php echo !empty($lnameError)?'error':'';?>" data-validate="Type last name">
          <input class="input100" type="text" name="lname" id="lname" placeholder="Last name" required>
          <?php if (!empty($lnameError)): ?>
              <span class="help-inline"><?php echo $lnameError;?></span>
          <?php endif; ?>
          <span class="focus-input100"></span>
        </div>

        <label class="label-input100" for="email">Enter your email *</label>
        <div class="wrap-input100 validate-input <?php echo !empty($emailError)?'error':'';?>" data-validate = "Valid email is required: ex@abc.xyz">
          <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com" required>
          <?php if (!empty($emailError)): ?>
              <span class="help-inline"><?php echo $emailError;?></span>
          <?php endif; ?>
          <span class="focus-input100"></span>
        </div>

        <label class="label-input100" for="phone">Enter phone number</label>
        <div class="wrap-input100">
          <input id="mobile" class="input100" type="text" name="mobile" placeholder="Eg. +1 800 000000">
          <span class="focus-input100"></span>
        </div>

        <label class="label-input100" for="message">Message *</label>
        <div class="wrap-input100 validate-input <?php echo !empty($msgError)?'error':'';?>" data-validate = "Message is required">
          <textarea id="msg" class="input100" name="msg" placeholder="Write us a message" required></textarea>
          <?php if (!empty($msgError)): ?>
              <span class="help-inline"><?php echo $msgError;?></span>
          <?php endif; ?>
          <span class="focus-input100"></span>
        </div>

        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn" type="submit" value="submit">
            Submit
          </button>
        </div>
      </form>

      <div class="contact100-more flex-col-c-m" style="background-image: url('images/form_wall.jpg');">
        <div class="flex-w size1 p-b-47">
          <div class="txt1 p-r-25">
            <span class="lnr lnr-map-marker"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              Address
            </span>

            <span class="txt2">
              NATIONAL INSTITUTE OF TECHNOLOGY,TIRUCHIRAPALLI- 620015,TAMIL NADU,INDIA
            </span>
          </div>
        </div>

        <div class="dis-flex size1 p-b-47">
          <div class="txt1 p-r-25">
            <span class="lnr lnr-phone-handset"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              Lets Talk
            </span>

            <span class="txt3">
             Aditya Kumar +916387158485<br>
             Ankur Rana +917000346850<br>
             Swapnil Gupta +918937876968
            </span>
          </div>
        </div>

        <div class="dis-flex size1 p-b-47">
          <div class="txt1 p-r-25">
            <span class="lnr lnr-envelope"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              General Support
            </span>

            <span class="txt3">
              technofania@gmail.com
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <script>
    $(".selection-2").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect1')
    });
  </script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>

</div>  

</body>
</html>
