<?php
session_start();
include 'db_details.php';


if (isset($_SESSION['getadminname']))
{
	$get_admin_name=$_SESSION['getadminname'];
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
else
{}


?>