<?php
session_start();


if (isset($_SESSION['getusername']))
{
$get_user_name=$_SESSION['getusername'];
$get_user_fname=$_SESSION['getuserfname'];
$get_user_lname=$_SESSION['getuserlname'];
$get_user_email=$_SESSION['getuseremail'];
$get_user_image=$_SESSION['getuserimage'];
}
else
{
	header('location: login.php');
}



if (isset($_POST['signout']))
{
	$_SESSION =array();
	session_destroy();
	header('location: login.php');
}

?>