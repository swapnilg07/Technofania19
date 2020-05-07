<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;
        $rollError = null;
        $deptError = null;
        $courseError = null;
        $pwdError = null;
        
         
        // keep track post values
        $username = $_POST['username'];
        $rollno = $_POST['rollno'];
        $dept = $_POST['dept'];
        $course = $_POST['course'];
        $password = $_POST['password'];
         
        // validate input
        $valid = true;
        if (empty($username)) {
            $nameError = 'Please enter Name';
            $valid = false;
        }
         
        if (empty($rollno)) {
            $rollError = 'Please enter Roll Number';
            $valid = false;
        }

        if (empty($dept)) {
            $deptError = 'Please enter Your Department';
            $valid = false;
        }
        if (empty($course)) {
            $courseError = 'Please enter Your Course';
            $valid = false;
        }
         
        if (empty($password)) {
            $pwdError = 'Please enter Password';
            $valid = false;
        } 

        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO users (username,rollno,dept,course,password) values(?, ?, ?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($username,$rollno,$dept,$course,$password));
            Database::disconnect();
            header("Location: loginform.php");
        }
    }
?>