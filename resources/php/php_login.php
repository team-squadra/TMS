<?php
session_start();
include 'db_details.php';
$LOGINERR=NULL;
$_SESSION['getadminname'] =NULL;
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
//echo "<script>alert('Login Successful ');</script>";
//header('location: home.php');
$row = mysqli_fetch_array($result);

if ($row['statues']=="admin") 
{
    $_SESSION['getadminname']=$user;
    $_SESSION['getadminfname']=$row['firstname'];
    $_SESSION['getadminlname']=$row['lastname'];
    $_SESSION['getadminemail']=$row['email'];
    $_SESSION['getadminnimage']=$row['image'];
    header('location: adminhome.php');

}
else if($row['statues']=="user") 
{
    $_SESSION['getusername']=$user;
    $_SESSION['getuserfname']=$row['firstname'];
    $_SESSION['getuserlname']=$row['lastname'];
    $_SESSION['getuseremail']=$row['email'];
    $_SESSION['getuserimage']=$row['image'];
    header('location: userhome.php');
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