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

function show_online_users($servername,$username,$password,$dbname,$get_admin_name)
{
   // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $x=0;
    $sql1 = "SELECT * FROM signup WHERE activity ='active' && username !='$get_admin_name' ";
    $result1 = $conn->query($sql1);
    if ($result1->num_rows > 0) 
    {
        while($row1 = $result1->fetch_assoc()) 
        {
          $x++;
        }
    } else {}

    $sql = "SELECT * FROM signup WHERE activity ='active' && username !='$get_admin_name'  ORDER BY loged_in_time DESC ";
    $result = $conn->query($sql);
    echo '<table>
          <tr>
            <td colspan="3"><center>Online ';
                        if ($x!=0) 
                          {
                            echo "$x";
                          }else{}
    echo                            '</center></td>
          </tr>
          <tr>
            <td colspan="3"><hr></td>
          </tr>
          ';
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<tr>';

                  if ($row["image"]!=null) {
                    echo '<td><img src="data:image/jpeg;base64,'.base64_encode($row["image"]).'"
                        style="width:25px;height:25px;border-radius:50%;border: 1px solid black;;margin:5px;margin-right:10px;"/></td>';
                  }
                  else
                  {
                    echo '<td><img  src="../resources/admin2.png" style="width:25px;height:25px;border-radius:50%;border: 1px solid black;;margin:5px;margin-right:10px;"></td>';
                  }


            echo '            
                        <td><lable style="margin-right:10px;">'. $row["firstname"].' '. $row["lastname"].'</lable></td>
                        <td><div style="background-color: LimeGreen;width:10px;height:10px;border-radius:50%;"></div></td>
                    </tr>
                ';
        }
    } else {
        echo "
        <tr>
            <td colspan='3'><center><b>Just you</b></center></td>
          </tr>
        ";
    }
    echo "</table>";
    $conn->close();
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