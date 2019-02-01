<?php
session_start();
include('rs/all/db_details.php');

if (isset($_SESSION['getusername']))
{
	
$get_user_name=$_SESSION['getusername'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM signup WHERE username='$get_user_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
		$get_user_fname=$row["firstname"];
		$get_user_lname=$row["lastname"];
		$get_user_email=$row["email"];
		$get_user_image=$row["image"];
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
	$_SESSION =array();
	session_destroy();
	header('location: ../login/login.php');
}


if (isset($_POST['save']))
{
  $fname= $_POST["f_name"];
  $lname= $_POST["l_name"];
  $e__mail= $_POST["e_mail"];
  if ($fname==='' or $lname==='' or $e__mail==='') 
  {

  }
  else
  {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE signup SET  firstname='$fname',lastname ='$lname',email ='$e__mail' WHERE username='$get_user_name'";

    if ($conn->query($sql) === TRUE) {
      echo "<script>window.location.replace(location);</script>";
    } 
    else 
    {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
  }
}
else
{

}

?>