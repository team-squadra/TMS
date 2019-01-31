<?php
session_start();
include('/../../../all/db_details.php');
 $user_namestep2=$_SESSION['usernamestep2'];
 if ($user_namestep2==null) {
 	header('location: login.php');
 }
 else{

 }


if (isset($_POST['destroy']))
{
  if ($user_namestep2==null) {
   // Create connection
    $conn3 = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn3->connect_error) {
        die("Connection failed: " . $conn3->connect_error);
    } 

    $sql3 = "UPDATE signup SET recover_code=NULL WHERE username='$user_namestep2'";

    if ($conn3->query($sql3) === TRUE) {
    

    $_SESSION =array();
    session_destroy();
    header('location:login.php');

    } else {
        echo "Error updating record: " . $conn3->error;
    }

    $conn3->close();
  }
  else
  {

  }

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
                $_SESSION['usernamestep3']="$user_namestep2";
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