<?php
session_start();
 $user_name=$_SESSION['usernamestep1'];
$_SESSION['usernamestep2']=NULL;
 include 'db_details.php';
 if ($user_name==null) {
    header('location: login.php');
 }
 else{

 }
if (isset($_POST['verify']))
{
$xxxx= $_POST["reccode"];


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username,recover_code,id FROM signup WHERE username='$user_name' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    if($row = $result->fetch_assoc()) {
         $dbxxxxcode = $row["recover_code"];
         if ($dbxxxxcode==$xxxx) {
             $_SESSION['usernamestep2']=NULL;
             $_SESSION['usernamestep2']=$row["id"];
             header('location: Recover_password_step3.php');
         }
         else
         {
            echo "<script>alert('Wrong code');</script>";
         }
    }
} else {
    echo "0 results";
}
$conn->close();

}
?>