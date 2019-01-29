<?php
session_start();
 $user_namestep2=$_SESSION['usernamestep2'];
 include 'db_details.php';
 if ($user_namestep2==null) {
 	header('location: login.php');
 }
 else{

 }

// define variables and set to empty values
$passwordErr =  NULL;
$newpassword = NULL;
$rpassword=NULL;
if ($_SERVER["REQUEST_METHOD"] == "POST") {


////////////////////////////////////////////////////////////////////////////////////////////_PASSWORD
  if (empty($_POST["new_password"])) 
  {
    $passwordErr = "Password is required";
  } 
  else 
  {
    $newpassword = test_input($_POST["new_password"]);
    $rpassword = test_input($_POST["r_password"]);
    if ($newpassword != $rpassword) 
    {
       $passwordErr="Password Mismatched";
    }
    else if (strlen($_POST["new_password"]) <= '8' || strlen($_POST["r_password"]) <= '8' ) {
    	$passwordErr = "Your Password Must Contain At Least 8 Characters!";
    }
    else{

    }
  }
//---------------------------------------------------------------

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if (isset($_POST['confirm']))
{
	if ($passwordErr==NULL)
	{

	$npassx= $_POST["new_password"];
	$rpassx= $_POST["r_password"];


	$xmd5= md5($rpassx);
	$xshal= Sha1($xmd5);
	$xcrypt= crypt($xshal,"st");

	$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) 
		{
    		die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "UPDATE `signup` SET `password` = '$xcrypt' WHERE `signup`.`id` = $user_namestep2;";

			if ($conn->query($sql) === TRUE) 
			{
				$_SESSION['usernamestep1']=NULL;
				$_SESSION['usernamestep2']=NULL;
                $_SESSION['usernamestep3']="pass";
                header('location: Recover_password_step4.php');
			} 
			else 
			{ 
    			echo "<script>alert('Error updating record');</script>";
			}

	$conn->close();

	}
}

?>