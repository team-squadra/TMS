<?php
session_start();
include 'db_details.php';
$get_admin_name=$_SESSION['getadminname'];
$get_admin_image=$_SESSION['getadminnimage'];
 if ($get_admin_name==null) {
  header('location: login.php');
 }
 else{

 }
?>