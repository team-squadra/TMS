<?php  
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tmswebdb";
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
    $_SESSION =array();
    session_destroy();
    header('location: ../login/login.php');
}
else
{}

//------------------------------------------------------------------------------------form 1 input hall details-------
// define variables for form 1 and set them to empty values
$HallNameErr = $HallCapacityErr = NULL;
$HallName = $HallCapacity = $HallType = NULL;


if ($_SERVER["REQUEST_METHOD"] == "POST"){
////////////////////////////////////////////////////////////////////////////////////////required field-input hall id

    if (empty($_POST["new_Hall_Name"])) 
    {     

          $HallNameErr = '"Hall name is required"'; 
    }
    else 
    {
        $HallName = test_input($_POST["new_Hall_Name"]);

        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query for check if the hall id is already exists   
        $sql = "SELECT Hall_name FROM halls WHERE Hall_name='$HallName'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) 
        {
            $HallNameErr = "This name is already taken";
        } 
        else 
        {
        }

        $conn->close();
    }

///////////////////////////////////////////////////////////////////////////////////////required field-input hall capacity
 if (empty($_POST["new_Hall_Capacity"])) 
    {
         $HallCapacityErr = "Hall capacity is required !";
         /*echo "$HallCapacityErr";*/

    } 
  else 
    {
         $HallCapacity = test_input($_POST["new_Hall_Capacity"]);
    }

}


    function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['insert'])) {
if ($HallNameErr==NULL&&$HallCapacityErr==NULL) 
{

$HallName= $_POST["new_Hall_Name"];
$HallCapacity= $_POST["new_Hall_Capacity"];
$HallType= $_POST["new_Hall_Type"];

if ($HallName!=NULL||$HallCapacity!=NULL||$HallType!=NULL) 
{

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
//Query for insert details into halls table
$sql = "INSERT INTO `halls` (`Hallid`,`Hall_name`, `Capacity`, `Type`) VALUES (NULL,'$HallName', '$HallCapacity', '$HallType');";

if ($conn->query($sql) === TRUE) 
{
   /* echo "<script>alert('Data inserted!');</script>";*/
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 

}
else
   {
   }

} 
else {
     }
}
else{
    }

 $get_exist_Hall_name=''; 
 $output = ''; 
 if(isset($_POST["Hall_name"]))  
 {  
    $id=$_POST["Hall_name"];

    $conn = new mysqli("localhost", "root", "", "tmswebdb");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } 

    $sql = "SELECT * FROM halls where Hall_name ='$id' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        // output data of each row
      while($row = $result->fetch_assoc()) 
      {
        $get_exist_Hall_id=$row["Hallid"];
        $get_exist_Hall_name=$row["Hall_name"];
        $get_exist_capacity=$row["Capacity"];
        $get_exist_type=$row["Type"];

        $output .='<table id="uHall">'; 
        
        $output .='<tr style="display:none;">';
        $output .='<td>'.'<input class="input" type="text" name="e_Hall_id" value="'.$get_exist_Hall_id.'">'.'</td>';
        $output .='</tr>';

        $output .='<tr>';
        $output .='<td class="edit">'."Edit Hall name :".'</td>';
        $output .='<td>'.'<input class="input" type="text" name="e_Hall_name" value="'.$get_exist_Hall_name.'">'.'</td>';
        $output .='</tr>';
        
        $output .='<tr>';
        $output .='<td class="edit">'."Edit Hall Capacity : ".'</td>';
        $output .='<td>'.'<input class="input" type="text" name="e_capacity" value="'.$get_exist_capacity.'">'.'</td>';
        $output .='</tr>';

        $output .='<tr>';
        $output .='<td class="edit">'."Edit Hall Type : ".'</td>';
        $output .='<td>'.'<input class="input" type="text" name="e_type" value="'.$get_exist_type.'">'.'</td>';
        $output .='</tr>';

        $output .='<tr>';
        $output .='<td>'.' <input type="submit" name="update" value="Update" id="uHallupdate">'.'</td>';
        $output .='</tr>';

        $output .='</table>'; 

        echo $output;
        //echo "<input class='input' type='text' name='e_Hall_name' value='$get_exist_Hall_name'>";
        //echo "<input class='input' type='text' name='e_Hall_name' value='$get_exist_capacity'>";
        //echo "<input class='input' type='text' name='e_Hall_name' value='$get_exist_type'>";
        // Create connection

      }
    } 
    else 
    {
    echo "<b><h3>PLz select a hall_name to retrive details !</h3><b>";
    }
$conn->close();
}

/////////////////////////////////////////////////////////////////////////////////////form 2 update hall details  

//update details
/*    
if(isset($_POST['update']))
{
  $eHall_name=$_POST["e_Hall_name"];
  $ecapacity= $_POST["e_capacity"];
  $etype= $_POST["e_type"];
  $id_hall= $_POST["e_Hall_id"];

  if($eHall_name!=NULL||$ecapacity!=NULL||$etype!=NULL)
    {
        $conn = new mysqli("localhost", "root", "", "tmswebdb");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } 

      $sql = "UPDATE halls SET  Hall_name='$eHall_name',Capacity ='$ecapacity',Type ='$etype' 
        WHERE Hallid= '$id_hall' ";
     if ($conn->query($sql)=== TRUE)
     {
        echo "<script>alert('Data Updated!');</script>";
     }
     else 
     {
        echo "<script>alert('Error : Mysql server Connection Error ');</script>";
     }
    $conn->close(); 
   }
   else
      {
      }
  } 
  else
  {

  }
  */  
///////////////////////////////////////////////////////////////////////update hall details start
  $eHall_name= '';
    $ecapacity= '';
    $etype= '';
    $id_hall= '';

if (isset($_POST['update']))
{
    $eHall_name= $_POST["e_Hall_name"];
    $ecapacity= $_POST["e_capacity"];
    $etype= $_POST["e_type"];
    $id_hall= $_POST["e_Hall_id"];

    if($eHall_name!=NULL||$ecapacity!=NULL||$etype!=NULL)
    {
        $conn = new mysqli("localhost", "root", "", "tmswebdb");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } 
     
     $sql = "UPDATE halls SET  Hall_name='$eHall_name',Capacity ='$ecapacity',Type ='$etype' 
        WHERE Hallid= '$id_hall' ";
     if ($conn->query($sql)===TRUE)
     {
        //echo "<script>alert('Data Updated!');</script>";
      echo "<script>window.location.replace(location);</script>";

     }
     else 
     {
        echo "<script>alert('Error : Mysql server Connection Error ');</script>";
     }
    $conn->close(); 
   }
   else
      {
      }
  } 
  else
  {

  }
///////////////////////////////////////////////////////////////////////////update hall details end

///////////////////////////////////////////////////////////////////////////delete hall details start

  if(isset($_POST['delete']))
  {
    $del_hall=$_POST["hall_del"];

    if($del_hall!=NULL)
    {
      $conn = new mysqli("localhost", "root", "", "tmswebdb");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } 
     
     $sql = "DELETE FROM halls WHERE Hall_name='$del_hall'";

     if ($conn->query($sql)=== TRUE)
     {
        //echo "<script>alert('Hall removed!');</script>";
         echo "<script>window.location.replace(location);</script>";
     }
     else 
     {
        
     }
    $conn->close(); 
   }
    }

///////////////////////////////////////////////////////////////////////////////////show hall details list 

  $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM halls";

$A_output='';
$ifblank ='';
$result = $conn->query($sql);
if ($result->num_rows > 0) {

      $A_output .= "<table id='dHall' style='overflow:auto;'>";

      $A_output .= "<tr class='t_header'>"; 
      $A_output .= "<th>Hall Name</th>";
      $A_output .= "<th>Capacity</th>";
      $A_output .= "<th>Type</th>";
      $A_output .= "</tr>";

    // output data of each row
    while($row = $result->fetch_assoc())
     {

      $A_output .= "<tbody>"; 
      $A_output .= "<tr>";
      $A_output .= "<td>" . $row["Hall_name"]. "</td>";
      $A_output .= "<td>" . $row["Capacity"]. "</td>";
      $A_output .= "<td> " . $row["Type"]. "</td>";
      $A_output .= "</tr>";
      $A_output .= "</tbody>"; 
     }

      $A_output .= "</table>";
}
 else {

     $ifblank .= '<table>';

     /*$ifblank .= '<tr>';
     $ifblank .= '<td><center><img src="../resources/nodata7.png"></center></td>';
     $ifblank .= '</tr>';*/

     $ifblank .= '<tr>';
     $ifblank .= '<td><center><br><br><h1>Add Some Hall Data...</h1><img src="../resources/phand.png"></center></td>';
     $ifblank .= '</tr>';

     $ifblank .= '</table>';

    }
$conn->close();

?>