<?php
session_start();
include 'db_details.php';



if (isset($_SESSION['getusername']))
{
	$get_user_name=$_SESSION['getusername'];
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