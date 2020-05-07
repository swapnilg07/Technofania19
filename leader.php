<?php
session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('localhost','root','','OSOC') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM SCORE order by score");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["username"] = $row[username];
$_SESSION["rollno"] = $row[rollno];
$_SESSION["score"] = $row[score];

Welcome

} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
}
?>