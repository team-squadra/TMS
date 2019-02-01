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
		$get_admin_fname=$row["firstname"];
		$get_admin_lname=$row["lastname"];
		$get_admin_email=$row["email"];
		$get_admin_image=$row["image"];
    $get_admin_phone_no=$row["phone_no"];
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
  $phone_no= $_POST["phone_no"];

  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  
  if ($fname==='' or $lname==='' or $e__mail==='') 
  {

  }
  else
  {
    if ($file!=NULL) 
    {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "UPDATE signup SET  firstname='$fname',lastname ='$lname',email ='$e__mail',phone_no ='$phone_no',image='$file' 
        WHERE username='$get_admin_name'";

        if ($conn->query($sql) === TRUE) {
          echo "<script>window.location.replace(location);</script>";
        } 
        else 
        {
            echo "Error updating record: " . $conn->error;
        }
        $conn->close();
    }
    else
    {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "UPDATE signup SET  firstname='$fname',lastname ='$lname',email ='$e__mail',phone_no ='$phone_no'
        WHERE username='$get_admin_name'";

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
}
else
{

}

?>


<script>  
 $(document).ready(function(){  
      $('#save').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script> 