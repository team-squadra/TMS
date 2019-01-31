<?php
session_start();
include('/../../../all/db_details.php');

 $user_namestep3=$_SESSION['usernamestep3'];
 echo "$user_namestep3";

  if ($user_namestep3==NULL) {
    header('location: login.php');
 }
 else{

 }

if (isset($_POST['destroy']))
{
   // Create connection
    $conn3 = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn3->connect_error) {
        die("Connection failed: " . $conn3->connect_error);
    } 

    $sql3 = "UPDATE signup SET recover_code=NULL WHERE id='$user_namestep3'";

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



?>