<?php
session_start();

include('rs/all/db_details.php');
$LOGINERR=NULL;
if (isset($_POST['login'])) {

$user= $_POST["user"];
$pass= $_POST["pass"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$md5= md5($pass);
$shal= Sha1($md5);
$crypt= crypt($shal,"st");

$sql = "SELECT * FROM signup WHERE username='$user' && password='$crypt'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
$row = mysqli_fetch_array($result);

if ($row['statues']=="admin") 
{
    $_SESSION['getadminname']=$user;
    header('location: ../admin/home.php');

}
else if($row['statues']=="user") 
{
    $_SESSION['getusername']=$user;
    header('location: ../user/home.php');
}  
else
{

}


} 
else 
{
//echo "<script>alert('Username or Password is Wrong ');</script>";
$LOGINERR = "Username or Password is Wrong";

}
$conn->close();
}
else
{

}
?>