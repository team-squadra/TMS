<?php
session_start();
include('rs/all/db_details.php');


if (isset($_SESSION['getadminname']))
{
$get_admin_name=$_SESSION['getadminname'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM signup WHERE username='$get_admin_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
		$get_admin_image=$row["image"];
    }
} else {
    echo "0 results";
}
$conn->close();
}

else
{
	header('location: ../login/login.php');
}



if (isset($_POST['signout']))
{
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE signup SET activity='inactive' WHERE username='$get_admin_name'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {echo "Error updating record: " . $conn->error;}

$conn->close();
  $_SESSION =array();
  session_destroy();
  header('location: ../login/login.php');
}
else
{}






// define variables and set to empty values
$newFirstNameErr = $newLastNameErr  = $newusernameErr =$newpasswordErr = $newemailErr = NULL;
$newFirstName = $newLastName = $newusername = $newpassword = $newemail = NULL;


if ($_SERVER["REQUEST_METHOD"] == "POST") {

////////////////////////////////////////////////////////////////////////////////////////////_FIRSTNAME
  if (empty($_POST["new_First_Name"])) 
  {
    $newFirstNameErr = "First Name is required";
  } 
  else 
  {
    $newFirstName = test_input($_POST["new_First_Name"]);
    // check if new_First_Name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$newFirstName)) 
    {
      $newFirstNameErr = "Only letters and white space allowed"; 
    }
  }
//---------------------------------------------------------------


////////////////////////////////////////////////////////////////////////////////////////////_LASTNAME
  if (empty($_POST["new_Last_Name"])) 
  {
    $newLastNameErr = "Last Name is required";
  } 
  else 
  {
    $newLastName = test_input($_POST["new_Last_Name"]);
    // check if new_Last_Name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$newLastName)) 
    {
      $newLastNameErr = "Only letters and white space allowed"; 
    }
  }
//---------------------------------------------------------------


////////////////////////////////////////////////////////////////////////////////////////////_PASSWORD
  if (empty($_POST["new_password"])) 
  {
    $newpasswordErr = "Password is required";
  } 
  else 
  {
    $newpassword = test_input($_POST["new_password"]);
    if (strlen($_POST["new_password"]) <= '8') 
    {
      $newpasswordErr = "Your Password Must Contain At Least 8 Characters!"; 
    }
  }
//---------------------------------------------------------------


////////////////////////////////////////////////////////////////////////////////////////////_EMAIL
  if (empty($_POST["new_email"])) 
  {
    $newemailErr = "Email is required";
  } 
  else 
  {
    $newemail = test_input($_POST["new_email"]);
    // check if newemail address is well-formed
    if (!filter_var($newemail, FILTER_VALIDATE_EMAIL)) 
    {
      $newemailErr = "Invalid email format"; 
    }
    else
    {
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }   
        $sql = "SELECT email FROM signup WHERE email='$newemail'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) 
        {
            $newemailErr = "You Cannot use this Email for this Account";
        } 
        else 
        {

        }

        $conn->close();
    }
  }
//---------------------------------------------------------------


////////////////////////////////////////////////////////////////////////////////////////////_USERNAME
  if (empty($_POST["new_username"])) 
  {
    $newusernameErr = "Username is required";
  } 
  else 
  {
    $newusername = test_input($_POST["new_username"]);
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   
    $sql = "SELECT username FROM signup WHERE username='$newusername'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        $newusernameErr = "This Username is taken ";
    } 
    else 
    {

    }

    $conn->close();
  }
//---------------------------------------------------------------


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['SIGNUP'])) {
if ($newFirstNameErr==NULL&&$newLastNameErr==NULL&&$newusernameErr==NULL&&$newpasswordErr==NULL&&$newemailErr==NULL) 
{
//echo "came";
//echo "<br>";

$newFirstName= $_POST["new_First_Name"];
$newLastName= $_POST["new_Last_Name"];
$newusername= $_POST["new_username"];
$newpassword= $_POST["new_password"];
$md5= md5($newpassword);
$shal= Sha1($md5);
$crypt= crypt($shal,"st");
$newemail= $_POST["new_email"];
$newstatues= $_POST["new_statues"];

if ($newFirstName!=NULL||$newLastName!=NULL||$newusername!=NULL||$newpassword!=NULL||$newemail!=NULL) 
{

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `signup` (`id`, `username`, `firstname`, `lastname`, `password`, `email`, `statues`, `mac_address`, `activity`, `recover_code`, `image`, `phone_no`)
VALUES (NULL, '$newusername', '$newFirstName', '$newLastName', '$crypt', '$newemail', '$newstatues', '', '', '', '', '');";


if ($conn->query($sql) === TRUE) {
echo "<script>alert('Your Account has been Created Successfully !');</script>";
} 
else 
{
    echo "<script>alert('Error : ".$conn->error." ');</script>";
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
else
{

}

} else {
//echo "nothing";
//echo "<br>";

}
}
else{

}

?>