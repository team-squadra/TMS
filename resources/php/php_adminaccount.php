<?php
session_start();


if (isset($_SESSION['getadminname']))
{
$get_admin_name=$_SESSION['getadminname'];
$get_admin_fname=$_SESSION['getadminfname'];
$get_admin_lname=$_SESSION['getadminlname'];
$get_admin_email=$_SESSION['getadminemail'];
$get_admin_image=$_SESSION['getadminnimage'];
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