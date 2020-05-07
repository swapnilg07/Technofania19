<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["rollno"]);
header("Location:loginform.php");
?>
