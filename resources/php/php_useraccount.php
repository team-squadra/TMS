<?php
session_start();
$get_user_name=$_SESSION['getusername'];
$get_user_fname=$_SESSION['getuserfname'];
$get_user_lname=$_SESSION['getuserlname'];
$get_user_email=$_SESSION['getuseremail'];
$get_user_image=$_SESSION['getuserimage'];

 if ($get_user_name==null) {
  header('location: login.php');
 }
 else{


 }

?>