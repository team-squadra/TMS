<?php
session_start();
include('/../../../all/db_details.php');
 $user_name=$_SESSION['usernamestep1'];
$_SESSION['usernamestep2']=NULL;

 if ($user_name==null) {
    header('location: login.php');
 }
 else{

 }

if (isset($_POST['destroy']))
{
  if ($user_name!=null) {
   // Create connection
    $conn3 = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn3->connect_error) {
        die("Connection failed: " . $conn3->connect_error);
    } 

    $sql3 = "UPDATE signup SET recover_code=NULL WHERE username='$user_name'";

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