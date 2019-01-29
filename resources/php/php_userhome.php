<?php
session_start();
include 'db_details.php';
$get_user_name=$_SESSION['getusername'];
$get_user_image=$_SESSION['getuserimage'];
 if ($get_user_name==null) {
  header('location: login.php');
 }
 else{

 }
?>