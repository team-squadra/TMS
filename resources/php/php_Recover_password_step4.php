<?php
session_start();
 $user_namestep3=$_SESSION['usernamestep3'];
 include 'db_details.php';
  if ($user_namestep3!="pass") {
    header('location: login.php');
 }
 else{

 }
?>