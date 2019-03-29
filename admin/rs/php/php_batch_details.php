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

/*add batch details form*/

$BatchName ='';

if (isset($_POST['insert'])) { 

$BatchName= $_POST["Batch_name"];
$Headcount= $_POST["head_count"];
$color= $_POST["batch_col"];

if ($BatchName!=NULL||$Headcount!=NULL||$color!=NULL) 
{

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
//Query for insert details into halls table

$sql = "INSERT INTO `batches` (`Batch_name`,`Head_count`,`Batch_color`) VALUES ('$BatchName','$Headcount','$color');";

if ($conn->query($sql) === TRUE) 
{
   /* echo "<script>alert('Data inserted!');</script>";*/
   echo "<script>window.location.replace(location);</script>";
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
else{
    }

/*edit batch details*/




$get_exist_Batch_name=''; 
 $output = ''; 
 if(isset($_POST["Batch_name"]))  
 {  
    $name=$_POST["Batch_name"];

    $conn = new mysqli("localhost", "root", "", "tmswebdb");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } 

    $sql = "SELECT * FROM batches where Batch_name ='$name' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        // output data of each row
      while($row = $result->fetch_assoc()) 
      {
        $get_exist_Batch_id=$row["id"];
        $get_exist_Batch_name=$row["Batch_name"];
        $get_exist_Headcount=$row["Head_count"];
        $get_exist_Color=$row["Batch_color"];

        
        /*$output .='<label for="psw" style="display:none;">'."Edit Batch id :".'</label>';*/
        $output .='<input style="display:none;" type="text" name="e_batch_id" value="'.$get_exist_Batch_id.'">';

        $output .='<label class="edit_title">'."Edit Batch Name : ".'</label>';
        $output .='<input type="text"  name="e_batch_name" value="'.$get_exist_Batch_name.'">';
        
        $output .='<label class="edit_title">'."Edit Headcount : ".'</label>';
        $output .='<input type="text" name="e_head_count" value="'.$get_exist_Headcount.'">';

        $output .='<label class="edit_title">'."Edit Headcount : ".'</label>';
        $output .='<input type="color" id="col" name="e_batch_color" value="'.$get_exist_Color.'">';
        
        $output.='<br><br>';
        $output .=' <input type="submit" class="form_btn" name="edit" value="Edit">'; 

        echo $output;

      }
    } 
    else 
    {
    echo "<b><h3>PLz select a batch_name to retrive details !</h3><b>";
    }
$conn->close();
}

    $eBatch_name= '';
    $eHeadcount= '';
    $eBatch_color= '';
    $id_Batch= '';

if (isset($_POST['edit']))
{
    $eBatch_name= $_POST["e_batch_name"];
    $eHeadcount= $_POST["e_head_count"];
    $eBatch_color= $_POST["e_batch_color"];
    $id_Batch= $_POST["e_batch_id"];

    if($eBatch_name!=NULL||$eHeadcount!=NULL||$eBatch_color!=NULL)
    {
        $conn = new mysqli("localhost", "root", "", "tmswebdb");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } 
     
     $sql = "UPDATE batches SET  Batch_name='$eBatch_name',Head_count='$eHeadcount',Batch_color ='$eBatch_color' 
        WHERE id= '$id_Batch' ";
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

/*show all the batches*/

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM batches";

$A_output='';
$ifblank ='';
$result = $conn->query($sql);

/*$batch_col=$row["Batch_color"];*/
if ($result->num_rows > 0) {

      $A_output .= '<table id="dbatch">';

      $A_output .= '<tr class="t_header">';
      $A_output .= '<th>Batch Id</th>'; 
      $A_output .= '<th>Batch Name</th>';
      $A_output .= '<th>Headcount</th>';
      $A_output .= '<th>Batch_color</th>';
      $A_output .= '</tr>';

    // output data of each row
    while($row = $result->fetch_assoc())
     {

      $A_output .= '<tbody>'; 
      $A_output .= '<tr>';
      $A_output .= '<td>'.'B'. $row["id"]. '</td>';
      $A_output .= '<td>' . $row["Batch_name"]. '</td>';
      $A_output .= '<td>' . $row["Head_count"]. '</td>';
      $A_output .= '<td><input type="color" id="show_col" value="'.$row["Batch_color"].'" disabled></td>';
      $A_output .= '</tr>';
      $A_output .= '</tbody>'; 
     }

      $A_output .= '</table>';
}
 else {

     $ifblank .= '<table>';

     $ifblank .= '<tr>';
     $ifblank .= '<td><center><br><br><h1>Add Some Batch Data...</h1><img src="../resources/phand.png"></center></td>';
     $ifblank .= '</tr>';

     $ifblank .= '</table>';

    }
$conn->close();


?>