<?php
session_start();
$get_admin_name=$_SESSION['getadminname'];
$get_admin_fname=$_SESSION['getadminfname'];
$get_admin_lname=$_SESSION['getadminlname'];
$get_admin_email=$_SESSION['getadminemail'];
$get_admin_image=$_SESSION['getadminnimage'];

 if ($get_admin_name==null) {
  header('location: login.php');
 }
 else{


 }

?>