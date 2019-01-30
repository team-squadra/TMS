<?php
session_start();
if (isset($_POST['ico']))
{
	if (isset($_SESSION['getadminname'])  )
	{
		header('location: adminhome.php');
	}
	else if (isset($_SESSION['getusername'])) 
	{
		header('location: userhome.php');
	}
	else
	{
		header('location: login.php');
	}
}
else
{

}

?>