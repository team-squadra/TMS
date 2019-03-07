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
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE signup SET activity='inactive' WHERE username='$get_user_name'";
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