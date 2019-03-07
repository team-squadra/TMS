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

if(isset($_POST["inputyear"])||isset($_POST["input_fake_month"])||isset($_POST["inputweeknum"])||isset($_POST["inputday"]))
{

$year=$_POST["inputyear"];
$month=$_POST["input_fake_month"];
$week=$_POST["inputweeknum"];
$day=$_POST["inputday"];

echo '<table id="lec_schedule">';
echo '  <tr>
            <th style="width: 400px;">Batch</th>
            <th style="width: 500px;">Hall/Lab</th>
            <th style="width: 500px;">ModuleName/Code</th>
            <th style="width: 500px;">lecturer</th>
            <th style="width: 300px;">Time</th>
        </tr>';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

{
    $sql = "SELECT * FROM `batches` WHERE id =1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc())
        {
            $batch1 = $row["B1"];
            $batch2 = $row["B2"];
            $batch3 = $row["B3"];
            $batch4 = $row["B4"];
            $batch5 = $row["B5"];
            $batch6 = $row["B6"];
            $batch7 = $row["B7"];
            $batch8 = $row["B8"];
            $batch9 = $row["B9"];
            $batch10 = $row["B10"];
            $batch11 = $row["B11"];
            $batch12 = $row["B12"];
        }
    }
    else{}
}
{
    $batch_count=0;
    if ($batch1!='') {$batch_count++;}
    if ($batch2!='') {$batch_count++;}
    if ($batch3!='') {$batch_count++;}
    if ($batch4!='') {$batch_count++;}
    if ($batch5!='') {$batch_count++;}
    if ($batch6!='') {$batch_count++;}
    if ($batch7!='') {$batch_count++;}
    if ($batch8!='') {$batch_count++;}
    if ($batch9!='') {$batch_count++;}
    if ($batch10!='') {$batch_count++;}
    if ($batch11!='') {$batch_count++;}
    if ($batch12!='') {$batch_count++;}
}
{
    $sql = "SELECT * FROM `batches` WHERE id =3";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc())
        {
            $batch1_clr = $row["B1"];
            $batch2_clr = $row["B2"];
            $batch3_clr = $row["B3"];
            $batch4_clr = $row["B4"];
            $batch5_clr = $row["B5"];
            $batch6_clr = $row["B6"];
            $batch7_clr = $row["B7"];
            $batch8_clr = $row["B8"];
            $batch9_clr = $row["B9"];
            $batch10_clr = $row["B10"];
            $batch11_clr = $row["B11"];
            $batch12_clr = $row["B12"];
        }
    }
    else{}
}

 $batch_array = array($batch1,$batch2,$batch3,$batch4,$batch5,$batch6,$batch7,$batch8,$batch9,$batch10,$batch11,$batch12);
 $batch_clr_array = array($batch1_clr,$batch2_clr,$batch3_clr,$batch4_clr,$batch5_clr,$batch6_clr,$batch7_clr,$batch8_clr,$batch9_clr,$batch10_clr,$batch11_clr,$batch12_clr);  
 $db_batch_array = array('schb1','schb2','schb3','schb4','schb5','schb6','schb7','schb8','schb9','schb10','schb11','schb12');

 $zero_counter=0;


for ($i=0; $i <12 ; $i++) 
{ 


if ($batch_array[$i] !='')
{

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    {   $x =0;
        $sql = "SELECT * FROM {$db_batch_array[$i]} WHERE ID= '".$year."_".$month."_".$week."_".$day."_1'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {

                if ($row["Hall_Lab"]!='' || $row["ModuleName_Code"]!='' || $row["Lecturer"]!='' || $row["Time"]!='' ) {
                    $x++;
                }
            }
        } else {}
    }
    {
        $sql = "SELECT * FROM {$db_batch_array[$i]} WHERE ID= '".$year."_".$month."_".$week."_".$day."_2'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {

                if ($row["Hall_Lab"]!='' || $row["ModuleName_Code"]!='' || $row["Lecturer"]!='' || $row["Time"]!='' ) {
                    $x++;
                }
            }
        } else {}
    }
    {
        $sql = "SELECT * FROM {$db_batch_array[$i]} WHERE ID= '".$year."_".$month."_".$week."_".$day."_3'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {

                if ($row["Hall_Lab"]!='' || $row["ModuleName_Code"]!='' || $row["Lecturer"]!='' || $row["Time"]!='' ) {
                    $x++;
                }
            }
        } else {}
    }
    {
        $sql = "SELECT * FROM {$db_batch_array[$i]} WHERE ID= '".$year."_".$month."_".$week."_".$day."_4'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {

                if ($row["Hall_Lab"]!='' || $row["ModuleName_Code"]!='' || $row["Lecturer"]!='' || $row["Time"]!='' ) {
                    $x++;
                }
            }
        } else {}
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    if ($x!=0) {
    {   
        $sql = "SELECT * FROM {$db_batch_array[$i]} WHERE ID= '".$year."_".$month."_".$week."_".$day."_1'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {

                echo '<tr bgcolor="'.$batch_clr_array[$i].'">
                        <td rowspan="'.$x.'">'.$batch_array[$i].'</td>';

                if ($row["Hall_Lab"]!='' || $row["ModuleName_Code"]!='' || $row["Lecturer"]!='' || $row["Time"]!='' ) {
                    echo '
                        <td>'.$row["Hall_Lab"].'</td>
                        <td>'.$row["ModuleName_Code"].'</td>
                        <td>'.$row["Lecturer"].'</td>
                        <td>'.$row["Time"].'</td>
                    ';
                }
                echo "</tr>";
            }
        } else {}
    }
    {
        $sql = "SELECT * FROM {$db_batch_array[$i]} WHERE ID= '".$year."_".$month."_".$week."_".$day."_2'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {

                if ($row["Hall_Lab"]!='' || $row["ModuleName_Code"]!='' || $row["Lecturer"]!='' || $row["Time"]!='' ) {
                    echo '
                    <tr bgcolor="'.$batch_clr_array[$i].'">
                        <td>'.$row["Hall_Lab"].'</td>
                        <td>'.$row["ModuleName_Code"].'</td>
                        <td>'.$row["Lecturer"].'</td>
                        <td>'.$row["Time"].'</td>
                    </tr>';
                }
            }
        } else {}
    }
    {
        $sql = "SELECT * FROM {$db_batch_array[$i]} WHERE ID= '".$year."_".$month."_".$week."_".$day."_3'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {

                if ($row["Hall_Lab"]!='' || $row["ModuleName_Code"]!='' || $row["Lecturer"]!='' || $row["Time"]!='' ) {
                    echo '
                    <tr bgcolor="'.$batch_clr_array[$i].'">
                        <td>'.$row["Hall_Lab"].'</td>
                        <td>'.$row["ModuleName_Code"].'</td>
                        <td>'.$row["Lecturer"].'</td>
                        <td>'.$row["Time"].'</td>
                    </tr>';
                }
            }
        } else {}
    }
    {
        $sql = "SELECT * FROM {$db_batch_array[$i]} WHERE ID= '".$year."_".$month."_".$week."_".$day."_4'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {

                if ($row["Hall_Lab"]!='' || $row["ModuleName_Code"]!='' || $row["Lecturer"]!='' || $row["Time"]!='' ) {
                    echo '
                    <tr bgcolor="'.$batch_clr_array[$i].'">
                        <td>'.$row["Hall_Lab"].'</td>
                        <td>'.$row["ModuleName_Code"].'</td>
                        <td>'.$row["Lecturer"].'</td>
                        <td>'.$row["Time"].'</td>
                    </tr>';
                }
            }
        } else {}
    }  
    }
    else{$zero_counter++;}

}
else{}

}
    echo '</table>';
    if ($zero_counter==$batch_count) {
        echo '  <div style="">
                    <center>
                        <table>
                            <tr>
                                <td><center><img src="../resources/nothing_found.png"></center></td>
                            </tr>
                            <tr>
                                <td><center><h2 style="color:dimgray;">OOps! There is no data to display.</h2></center><br></td>
                            </tr>
                            <tr>
                                <td><center><a href="timetables.php" id="try_to_add_data">Add Some Data</a></center></td>
                            </tr>
                        </table>
                    </center>
                </div>';
    }
    $conn->close();
}


?>