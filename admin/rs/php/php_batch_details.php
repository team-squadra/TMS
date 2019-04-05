<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tmswebdb";
$conn = new mysqli($servername, $username, $password, $dbname);

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
//echo '<input type="color" name="" value="'.$row["B7"].'">';

/*_____________________________________________________________________________________________ show_batchdata*/
function show_batchdata($servername, $username, $password, $dbname)
{
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `batches`";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $b1 = array();
    $b2 = array();
    $b3 = array();
    $b4 = array();
    $b5 = array();
    $b6 = array();
    $b7 = array();
    $b8 = array();
    $b9 = array();
    $b10 = array();
    $b11 = array();
    $b12 = array();
    $i=0;
    while($row = $result->fetch_assoc()) {
      $b1[$i] = $row["B1"];
      $b2[$i] = $row["B2"];
      $b3[$i] = $row["B3"];
      $b4[$i] = $row["B4"];
      $b5[$i] = $row["B5"];
      $b6[$i] = $row["B6"];
      $b7[$i] = $row["B7"];
      $b8[$i] = $row["B8"];
      $b9[$i] = $row["B9"];
      $b10[$i] = $row["B10"];
      $b11[$i] = $row["B11"];
      $b12[$i] = $row["B12"];
      $i++;
    }
  } else {
      echo "0 results";
  }


echo "<table border='1' id='show_batches_table'>";
echo '<form action="" method="post">';
echo '<tr>
        <th>Batch ID</th>
        <th>Batch Name</th>
        <th>Head Count</th>
        <th>Batch Color</th>
      </tr>
    ';

if ($b1[0]!='') {
echo '
    <tr>
      <td><center>B1</center></td>
      <td><center><input type="text" name="b1_name" value="'.$b1[0].'" id="b1_name" disabled></center></td>
      <td><center><input type="text" name="b1_hc" value="'.$b1[1].' " id="b1_hc" disabled></center></td>
      <td><center><input type="color" name="b1_clr" value="'.$b1[2].'" id="b1_clr" disabled></center></td>

    </tr>
';
}
if ($b2[0]!='') {
echo '
    <tr>
      <td><center>B2</center></td>
      <td><center><input type="text" name="b2_name" value="'.$b2[0].'" id="b2_name" disabled></center></td>
      <td><center><input type="text" name="b2_hc" value="'.$b2[1].' " id="b2_hc" disabled></center></td>
      <td><center><input type="color" name="b2_clr" value="'.$b2[2].'" id="b2_clr" disabled></center></td>
    </tr>
';
}
if ($b3[0]!='') {
echo '
    <tr>
      <td><center>B3</center></td>
      <td><center><input type="text" name="b3_name" value="'.$b3[0].'" id="b3_name" disabled></center></td>
      <td><center><input type="text" name="b3_hc" value="'.$b3[1].' " id="b3_hc" disabled></center></td>
      <td><center><input type="color" name="b3_clr" value="'.$b3[2].'" id="b3_clr" disabled></center></td>
    </tr>
';
}
if ($b4[0]!='') {
echo '
    <tr>
      <td><center>B4</center></td>
      <td><center><input type="text" name="b4_name" value="'.$b4[0].'" id="b4_name" disabled></center></td>
      <td><center><input type="text" name="b4_hc" value="'.$b4[1].' " id="b4_hc" disabled></center></td>
      <td><center><input type="color" name="b4_clr" value="'.$b4[2].'" id="b4_clr" disabled></center></td>
    </tr>
';
}
if ($b5[0]!='') {
echo '
    <tr>
      <td><center>B5</center></td>
      <td><center><input type="text" name="b5_name" value="'.$b5[0].'" id="b5_name" disabled></center></td>
      <td><center><input type="text" name="b5_hc" value="'.$b5[1].' " id="b5_hc" disabled></center></td>
      <td><center><input type="color" name="b5_clr" value="'.$b5[2].'" id="b5_clr" disabled></center></td>
    </tr>
';
}
if ($b6[0]!='') {
echo '
    <tr>
      <td><center>B6</center></td>
      <td><center><input type="text" name="b6_name" value="'.$b6[0].'" id="b6_name" disabled></center></td>
      <td><center><input type="text" name="b6_hc" value="'.$b6[1].' " id="b6_hc" disabled></center></td>
      <td><center><input type="color" name="b6_clr" value="'.$b6[2].'" id="b6_clr" disabled></center></td>
    </tr>
';
}
if ($b7[0]!='') {
echo '
    <tr>
      <td><center>B7</center></td>
      <td><center><input type="text" name="b7_name" value="'.$b7[0].'" id="b7_name" disabled></center></td>
      <td><center><input type="text" name="b7_hc" value="'.$b7[1].' " id="b7_hc" disabled></center></td>
      <td><center><input type="color" name="b7_clr" value="'.$b7[2].'" id="b7_clr" disabled></center></td>
    </tr>
';
}
if ($b8[0]!='') {
echo '
    <tr>
      <td><center>B8</center></td>
      <td><center><input type="text" name="b8_name" value="'.$b8[0].'" id="b8_name" disabled></center></td>
      <td><center><input type="text" name="b8_hc" value="'.$b8[1].' " id="b8_hc" disabled></center></td>
      <td><center><input type="color" name="b8_clr" value="'.$b8[2].'" id="b8_clr" disabled></center></td>
    </tr>
';
}
if ($b9[0]!='') {
echo '
    <tr>
      <td><center>B9</center></td>
      <td><center><input type="text" name="b9_name" value="'.$b9[0].'" id="b9_name" disabled></center></td>
      <td><center><input type="text" name="b9_hc" value="'.$b9[1].' " id="b9_hc" disabled></center></td>
      <td><center><input type="color" name="b9_clr" value="'.$b9[2].'" id="b9_clr" disabled></center></td>
    </tr>
';
}
if ($b10[0]!='') {
echo '
    <tr>
      <td><center>B10</center></td>
      <td><center><input type="text" name="b10_name" value="'.$b10[0].'" id="b10_name" disabled></center></td>
      <td><center><input type="text" name="b10_hc" value="'.$b10[1].' " id="b10_hc" disabled></center></td>
      <td><center><input type="color" name="b10_clr" value="'.$b10[2].'" id="b10_clr" disabled></center></td>
    </tr>
';
}
if ($b11[0]!='') {
echo '
    <tr>
      <td><center>B11</center></td>
      <td><center><input type="text" name="b11_name" value="'.$b11[0].'" id="b11_name" disabled></center></td>
      <td><center><input type="text" name="b11_hc" value="'.$b11[1].' " id="b11_hc" disabled></center></td>
      <td><center><input type="color" name="b11_clr" value="'.$b11[2].'" id="b11_clr" disabled></center></td>
    </tr>
';
}
if ($b12[0]!='') {
echo '
    <tr>
      <td><center>B12</center></td>
      <td><center><input type="text" name="b12_name" value="'.$b12[0].'" id="b12_name" disabled></center></td>
      <td><center><input type="text" name="b12_hc" value="'.$b12[1].' " id="b12_hc" disabled></center></td>
      <td><center><input type="color" name="b12_clr" value="'.$b12[2].'" id="b12_clr" disabled></center></td>
    </tr>
';
}
$conn->close();

echo '
    <tr>
      <td colspan="4"><center><input type="submit" name="save" value=Save class="button"></center></td>
    </tr>
';
/*echo '
    <tr>
      <td colspan="4"><button>asfas</button></td>
    </tr>
';*/
echo '</form>';
echo "</table>";

}
/*_____________________________________________________________________________________________ show_batchdata*/

/*_____________________________________________________________________________________________ add_option_value*/
function add_option_value($servername, $username, $password, $dbname)
{
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `batches` WHERE id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if($row["B1"]==''){
        echo "<option>B1</option>";
      }
      if($row["B2"]==''){
        echo "<option>B2</option>";
      }
      if($row["B3"]==''){
        echo "<option>B3</option>";
      }
      if($row["B4"]==''){
        echo "<option>B4</option>";
      }
      if($row["B5"]==''){
        echo "<option>B5</option>";
      }
      if($row["B6"]==''){
        echo "<option>B6</option>";
      }
      if($row["B7"]==''){
        echo "<option>B7</option>";
      }
      if($row["B8"]==''){
        echo "<option>B8</option>";
      }
      if($row["B9"]==''){
        echo "<option>B9</option>";
      }
      if($row["B10"]==''){
        echo "<option>B10</option>";
      }
      if($row["B11"]==''){
        echo "<option>B11</option>";
      }
      if($row["B12"]==''){
        echo "<option>B12</option>";
      }
    }
} else {
    echo "0 results";
}
$conn->close();
}
/*_____________________________________________________________________________________________ add_option_value*/

/*_____________________________________________________________________________________________ Update batch details form*/
if (isset($_POST['update_batch'])) { 

$batch_id =$_POST["dropdown"];
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

    $sql = "UPDATE `batches` SET $batch_id='$BatchName' WHERE id=1";
    if ($conn->query($sql) === TRUE) 
    {
        $sql = "UPDATE `batches` SET $batch_id='$Headcount' WHERE id=2";
        if ($conn->query($sql) === TRUE) {

          $sql = "UPDATE `batches` SET $batch_id='$color' WHERE id=3";
          if ($conn->query($sql) === TRUE) {

              echo "<script>window.location.replace(location);</script>";

          } else {
              echo "Error updating record: " . $conn->error;
          }
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Error updating record: " . $conn->error;
    }

  }else{}

}else{}
/*_____________________________________________________________________________________________ Update batch details form*/



/*_____________________________________________________________________________________________ save batch details form*/

if (isset($_POST['save']))
{
  if (isset($_POST['b1_name'])){$b1_name =$_POST["b1_name"];}else{$b1_name='';}
  if (isset($_POST['b1_hc'])){$b1_hc =$_POST["b1_hc"];}else{$b1_hc='';}
  if (isset($_POST['b1_clr'])){$b1_clr =$_POST["b1_clr"];}else{$b1_clr='';}
  if (isset($_POST['b2_name'])){$b2_name =$_POST["b2_name"];}else{$b2_name='';}
  if (isset($_POST['b2_hc'])){$b2_hc =$_POST["b2_hc"];}else{$b2_hc='';}
  if (isset($_POST['b2_clr'])){$b2_clr =$_POST["b2_clr"];}else{$b2_clr='';}
  if (isset($_POST['b3_name'])){$b3_name =$_POST["b3_name"];}else{$b3_name='';}
  if (isset($_POST['b3_hc'])){$b3_hc =$_POST["b3_hc"];}else{$b3_hc='';}
  if (isset($_POST['b3_clr'])){$b3_clr =$_POST["b3_clr"];}else{$b3_clr='';}
  if (isset($_POST['b4_name'])){$b4_name =$_POST["b4_name"];}else{$b4_name='';}
  if (isset($_POST['b4_hc'])){$b4_hc =$_POST["b4_hc"];}else{$b4_hc='';}
  if (isset($_POST['b4_clr'])){$b4_clr =$_POST["b4_clr"];}else{$b4_clr='';}
  if (isset($_POST['b5_name'])){$b5_name =$_POST["b5_name"];}else{$b5_name='';}
  if (isset($_POST['b5_hc'])){$b5_hc =$_POST["b5_hc"];}else{$b5_hc='';}
  if (isset($_POST['b5_clr'])){$b5_clr =$_POST["b5_clr"];}else{$b5_clr='';}
  if (isset($_POST['b6_name'])){$b6_name =$_POST["b6_name"];}else{$b6_name='';}
  if (isset($_POST['b6_hc'])){$b6_hc =$_POST["b6_hc"];}else{$b6_hc='';}
  if (isset($_POST['b6_clr'])){$b6_clr =$_POST["b6_clr"];}else{$b6_clr='';}
  if (isset($_POST['b7_name'])){$b7_name =$_POST["b7_name"];}else{$b7_name='';}
  if (isset($_POST['b7_hc'])){$b7_hc =$_POST["b7_hc"];}else{$b7_hc='';}
  if (isset($_POST['b7_clr'])){$b7_clr =$_POST["b7_clr"];}else{$b7_clr='';}
  if (isset($_POST['b8_name'])){$b8_name =$_POST["b8_name"];}else{$b8_name='';}
  if (isset($_POST['b8_hc'])){$b8_hc =$_POST["b8_hc"];}else{$b8_hc='';}
  if (isset($_POST['b8_clr'])){$b8_clr =$_POST["b8_clr"];}else{$b8_clr='';}
  if (isset($_POST['b9_name'])){$b9_name =$_POST["b9_name"];}else{$b9_name='';}
  if (isset($_POST['b9_hc'])){$b9_hc =$_POST["b9_hc"];}else{$b9_hc='';}
  if (isset($_POST['b9_clr'])){$b9_clr =$_POST["b9_clr"];}else{$b9_clr='';}
  if (isset($_POST['b10_name'])){$b10_name =$_POST["b10_name"];}else{$b10_name='';}
  if (isset($_POST['b10_hc'])){$b10_hc =$_POST["b10_hc"];}else{$b10_hc='';}
  if (isset($_POST['b10_clr'])){$b10_clr =$_POST["b10_clr"];}else{$b10_clr='';}
  if (isset($_POST['b11_name'])){$b11_name =$_POST["b11_name"];}else{$b11_name='';}
  if (isset($_POST['b11_hc'])){$b11_hc =$_POST["b11_hc"];}else{$b11_hc='';}
  if (isset($_POST['b11_clr'])){$b11_clr =$_POST["b11_clr"];}else{$b11_clr='';}
  if (isset($_POST['b12_name'])){$b12_name =$_POST["b12_name"];}else{$b12_name='';}
  if (isset($_POST['b12_hc'])){$b12_hc =$_POST["b12_hc"];}else{$b12_hc='';}
  if (isset($_POST['b12_clr'])){$b12_clr =$_POST["b12_clr"];}else{$b12_clr='';}
  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "UPDATE `batches` SET B1='$b1_name',B2='$b2_name',B3='$b3_name',B4='$b4_name',B5='$b5_name',B6='$b6_name',B7='$b7_name',B8='$b8_name',B9='$b9_name',B10='$b10_name',B11='$b11_name',B12='$b12_name' WHERE id=1";
if ($conn->query($sql) === TRUE) {
    $sql = "UPDATE `batches` SET B1='$b1_hc',B2='$b2_hc',B3='$b3_hc',B4='$b4_hc',B5='$b5_hc',B6='$b6_hc',B7='$b7_hc',B8='$b8_hc',B9='$b9_hc',B10='$b10_hc',B11='$b11_hc',B12='$b12_hc' WHERE id=2";
    if ($conn->query($sql) === TRUE) {
        $sql = "UPDATE `batches` SET B1='$b1_clr',B2='$b2_clr',B3='$b3_clr',B4='$b4_clr',B5='$b5_clr',B6='$b6_clr',B7='$b7_clr',B8='$b8_clr',B9='$b9_clr',B10='$b10_clr',B11='$b11_clr',B12='$b12_clr' WHERE id=3";
        if ($conn->query($sql) === TRUE) {
             //echo "<script>window.location.replace(location);</script>";
        } else {
          echo "Error updating record: " . $conn->error;
        }
    } else {
      echo "Error updating record: " . $conn->error;
    } 
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
}

/*_____________________________________________________________________________________________ save batch details form*/

?>