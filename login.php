<?php
session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('localhost','root','','OSOC') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM users WHERE rollno='" . $_POST["rollno"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row[id];
$_SESSION["rollno"] = $row[rollno];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:welcome.php");
}
?>