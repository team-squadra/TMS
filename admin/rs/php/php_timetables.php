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

//-------------------------------------start of the showdata function

if(isset($_POST["inputyear"])||isset($_POST["input_fake_month"])||isset($_POST["inputweeknum"])||isset($_POST["inputbatch"]))
{ 
    $year=$_POST["inputyear"];
    $month=$_POST["input_fake_month"];
    $week=$_POST["inputweeknum"];
    $batch=$_POST["inputbatch"];
    
    // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

//week1
{
//sunday
echo "<script>document.getElementById('w1_sun_h_1').value=''</script>";
echo "<script>document.getElementById('w1_sun_m_1').value=''</script>";
echo "<script>document.getElementById('w1_sun_l_1').value=''</script>";
echo "<script>document.getElementById('w1_sun_t_1').value=''</script>";

echo "<script>document.getElementById('w1_sun_h_2').value=''</script>";
echo "<script>document.getElementById('w1_sun_m_2').value=''</script>";
echo "<script>document.getElementById('w1_sun_l_2').value=''</script>";
echo "<script>document.getElementById('w1_sun_t_2').value=''</script>";

echo "<script>document.getElementById('w1_sun_h_3').value=''</script>";
echo "<script>document.getElementById('w1_sun_m_3').value=''</script>";
echo "<script>document.getElementById('w1_sun_l_3').value=''</script>";
echo "<script>document.getElementById('w1_sun_t_3').value=''</script>";

echo "<script>document.getElementById('w1_sun_h_4').value=''</script>";
echo "<script>document.getElementById('w1_sun_m_4').value=''</script>";
echo "<script>document.getElementById('w1_sun_l_4').value=''</script>";
echo "<script>document.getElementById('w1_sun_t_4').value=''</script>";
//monday
echo "<script>document.getElementById('w1_mon_h_1').value=''</script>";
echo "<script>document.getElementById('w1_mon_m_1').value=''</script>";
echo "<script>document.getElementById('w1_mon_l_1').value=''</script>";
echo "<script>document.getElementById('w1_mon_t_1').value=''</script>";

echo "<script>document.getElementById('w1_mon_h_2').value=''</script>";
echo "<script>document.getElementById('w1_mon_m_2').value=''</script>";
echo "<script>document.getElementById('w1_mon_l_2').value=''</script>";
echo "<script>document.getElementById('w1_mon_t_2').value=''</script>";

echo "<script>document.getElementById('w1_mon_h_3').value=''</script>";
echo "<script>document.getElementById('w1_mon_m_3').value=''</script>";
echo "<script>document.getElementById('w1_mon_l_3').value=''</script>";
echo "<script>document.getElementById('w1_mon_t_3').value=''</script>";

echo "<script>document.getElementById('w1_mon_h_4').value=''</script>";
echo "<script>document.getElementById('w1_mon_m_4').value=''</script>";
echo "<script>document.getElementById('w1_mon_l_4').value=''</script>";
echo "<script>document.getElementById('w1_mon_t_4').value=''</script>";
//tuesday
echo "<script>document.getElementById('w1_tue_h_1').value=''</script>";
echo "<script>document.getElementById('w1_tue_m_1').value=''</script>";
echo "<script>document.getElementById('w1_tue_l_1').value=''</script>";
echo "<script>document.getElementById('w1_tue_t_1').value=''</script>";

echo "<script>document.getElementById('w1_tue_h_2').value=''</script>";
echo "<script>document.getElementById('w1_tue_m_2').value=''</script>";
echo "<script>document.getElementById('w1_tue_l_2').value=''</script>";
echo "<script>document.getElementById('w1_tue_t_2').value=''</script>";

echo "<script>document.getElementById('w1_tue_h_3').value=''</script>";
echo "<script>document.getElementById('w1_tue_m_3').value=''</script>";
echo "<script>document.getElementById('w1_tue_l_3').value=''</script>";
echo "<script>document.getElementById('w1_tue_t_3').value=''</script>";

echo "<script>document.getElementById('w1_tue_h_4').value=''</script>";
echo "<script>document.getElementById('w1_tue_m_4').value=''</script>";
echo "<script>document.getElementById('w1_tue_l_4').value=''</script>";
echo "<script>document.getElementById('w1_tue_t_4').value=''</script>";
//wednesday
echo "<script>document.getElementById('w1_wed_h_1').value=''</script>";
echo "<script>document.getElementById('w1_wed_m_1').value=''</script>";
echo "<script>document.getElementById('w1_wed_l_1').value=''</script>";
echo "<script>document.getElementById('w1_wed_t_1').value=''</script>";

echo "<script>document.getElementById('w1_wed_h_2').value=''</script>";
echo "<script>document.getElementById('w1_wed_m_2').value=''</script>";
echo "<script>document.getElementById('w1_wed_l_2').value=''</script>";
echo "<script>document.getElementById('w1_wed_t_2').value=''</script>";

echo "<script>document.getElementById('w1_wed_h_3').value=''</script>";
echo "<script>document.getElementById('w1_wed_m_3').value=''</script>";
echo "<script>document.getElementById('w1_wed_l_3').value=''</script>";
echo "<script>document.getElementById('w1_wed_t_3').value=''</script>";

echo "<script>document.getElementById('w1_wed_h_4').value=''</script>";
echo "<script>document.getElementById('w1_wed_m_4').value=''</script>";
echo "<script>document.getElementById('w1_wed_l_4').value=''</script>";
echo "<script>document.getElementById('w1_wed_t_4').value=''</script>";
//thursday
echo "<script>document.getElementById('w1_thu_h_1').value=''</script>";
echo "<script>document.getElementById('w1_thu_m_1').value=''</script>";
echo "<script>document.getElementById('w1_thu_l_1').value=''</script>";
echo "<script>document.getElementById('w1_thu_t_1').value=''</script>";

echo "<script>document.getElementById('w1_thu_h_2').value=''</script>";
echo "<script>document.getElementById('w1_thu_m_2').value=''</script>";
echo "<script>document.getElementById('w1_thu_l_2').value=''</script>";
echo "<script>document.getElementById('w1_thu_t_2').value=''</script>";

echo "<script>document.getElementById('w1_thu_h_3').value=''</script>";
echo "<script>document.getElementById('w1_thu_m_3').value=''</script>";
echo "<script>document.getElementById('w1_thu_l_3').value=''</script>";
echo "<script>document.getElementById('w1_thu_t_3').value=''</script>";

echo "<script>document.getElementById('w1_thu_h_4').value=''</script>";
echo "<script>document.getElementById('w1_thu_m_4').value=''</script>";
echo "<script>document.getElementById('w1_thu_l_4').value=''</script>";
echo "<script>document.getElementById('w1_thu_t_4').value=''</script>";
//friday
echo "<script>document.getElementById('w1_fri_h_1').value=''</script>";
echo "<script>document.getElementById('w1_fri_m_1').value=''</script>";
echo "<script>document.getElementById('w1_fri_l_1').value=''</script>";
echo "<script>document.getElementById('w1_fri_t_1').value=''</script>";

echo "<script>document.getElementById('w1_fri_h_2').value=''</script>";
echo "<script>document.getElementById('w1_fri_m_2').value=''</script>";
echo "<script>document.getElementById('w1_fri_l_2').value=''</script>";
echo "<script>document.getElementById('w1_fri_t_2').value=''</script>";

echo "<script>document.getElementById('w1_fri_h_3').value=''</script>";
echo "<script>document.getElementById('w1_fri_m_3').value=''</script>";
echo "<script>document.getElementById('w1_fri_l_3').value=''</script>";
echo "<script>document.getElementById('w1_fri_t_3').value=''</script>";

echo "<script>document.getElementById('w1_fri_h_4').value=''</script>";
echo "<script>document.getElementById('w1_fri_m_4').value=''</script>";
echo "<script>document.getElementById('w1_fri_l_4').value=''</script>";
echo "<script>document.getElementById('w1_fri_t_4').value=''</script>";
//saturday
echo "<script>document.getElementById('w1_sat_h_1').value=''</script>";
echo "<script>document.getElementById('w1_sat_m_1').value=''</script>";
echo "<script>document.getElementById('w1_sat_l_1').value=''</script>";
echo "<script>document.getElementById('w1_sat_t_1').value=''</script>";

echo "<script>document.getElementById('w1_sat_h_2').value=''</script>";
echo "<script>document.getElementById('w1_sat_m_2').value=''</script>";
echo "<script>document.getElementById('w1_sat_l_2').value=''</script>";
echo "<script>document.getElementById('w1_sat_t_2').value=''</script>";

echo "<script>document.getElementById('w1_sat_h_3').value=''</script>";
echo "<script>document.getElementById('w1_sat_m_3').value=''</script>";
echo "<script>document.getElementById('w1_sat_l_3').value=''</script>";
echo "<script>document.getElementById('w1_sat_t_3').value=''</script>";

echo "<script>document.getElementById('w1_sat_h_4').value=''</script>";
echo "<script>document.getElementById('w1_sat_m_4').value=''</script>";
echo "<script>document.getElementById('w1_sat_l_4').value=''</script>";
echo "<script>document.getElementById('w1_sat_t_4').value=''</script>";
}
//week2
{
//sunday
echo "<script>document.getElementById('w2_sun_h_1').value=''</script>";
echo "<script>document.getElementById('w2_sun_m_1').value=''</script>";
echo "<script>document.getElementById('w2_sun_l_1').value=''</script>";
echo "<script>document.getElementById('w2_sun_t_1').value=''</script>";

echo "<script>document.getElementById('w2_sun_h_2').value=''</script>";
echo "<script>document.getElementById('w2_sun_m_2').value=''</script>";
echo "<script>document.getElementById('w2_sun_l_2').value=''</script>";
echo "<script>document.getElementById('w2_sun_t_2').value=''</script>";

echo "<script>document.getElementById('w2_sun_h_3').value=''</script>";
echo "<script>document.getElementById('w2_sun_m_3').value=''</script>";
echo "<script>document.getElementById('w2_sun_l_3').value=''</script>";
echo "<script>document.getElementById('w2_sun_t_3').value=''</script>";

echo "<script>document.getElementById('w2_sun_h_4').value=''</script>";
echo "<script>document.getElementById('w2_sun_m_4').value=''</script>";
echo "<script>document.getElementById('w2_sun_l_4').value=''</script>";
echo "<script>document.getElementById('w2_sun_t_4').value=''</script>";
//monday
echo "<script>document.getElementById('w2_mon_h_1').value=''</script>";
echo "<script>document.getElementById('w2_mon_m_1').value=''</script>";
echo "<script>document.getElementById('w2_mon_l_1').value=''</script>";
echo "<script>document.getElementById('w2_mon_t_1').value=''</script>";

echo "<script>document.getElementById('w2_mon_h_2').value=''</script>";
echo "<script>document.getElementById('w2_mon_m_2').value=''</script>";
echo "<script>document.getElementById('w2_mon_l_2').value=''</script>";
echo "<script>document.getElementById('w2_mon_t_2').value=''</script>";

echo "<script>document.getElementById('w2_mon_h_3').value=''</script>";
echo "<script>document.getElementById('w2_mon_m_3').value=''</script>";
echo "<script>document.getElementById('w2_mon_l_3').value=''</script>";
echo "<script>document.getElementById('w2_mon_t_3').value=''</script>";

echo "<script>document.getElementById('w2_mon_h_4').value=''</script>";
echo "<script>document.getElementById('w2_mon_m_4').value=''</script>";
echo "<script>document.getElementById('w2_mon_l_4').value=''</script>";
echo "<script>document.getElementById('w2_mon_t_4').value=''</script>";
//tuesday
echo "<script>document.getElementById('w2_tue_h_1').value=''</script>";
echo "<script>document.getElementById('w2_tue_m_1').value=''</script>";
echo "<script>document.getElementById('w2_tue_l_1').value=''</script>";
echo "<script>document.getElementById('w2_tue_t_1').value=''</script>";

echo "<script>document.getElementById('w2_tue_h_2').value=''</script>";
echo "<script>document.getElementById('w2_tue_m_2').value=''</script>";
echo "<script>document.getElementById('w2_tue_l_2').value=''</script>";
echo "<script>document.getElementById('w2_tue_t_2').value=''</script>";

echo "<script>document.getElementById('w2_tue_h_3').value=''</script>";
echo "<script>document.getElementById('w2_tue_m_3').value=''</script>";
echo "<script>document.getElementById('w2_tue_l_3').value=''</script>";
echo "<script>document.getElementById('w2_tue_t_3').value=''</script>";

echo "<script>document.getElementById('w2_tue_h_4').value=''</script>";
echo "<script>document.getElementById('w2_tue_m_4').value=''</script>";
echo "<script>document.getElementById('w2_tue_l_4').value=''</script>";
echo "<script>document.getElementById('w2_tue_t_4').value=''</script>";
//wednesday
echo "<script>document.getElementById('w2_wed_h_1').value=''</script>";
echo "<script>document.getElementById('w2_wed_m_1').value=''</script>";
echo "<script>document.getElementById('w2_wed_l_1').value=''</script>";
echo "<script>document.getElementById('w2_wed_t_1').value=''</script>";

echo "<script>document.getElementById('w2_wed_h_2').value=''</script>";
echo "<script>document.getElementById('w2_wed_m_2').value=''</script>";
echo "<script>document.getElementById('w2_wed_l_2').value=''</script>";
echo "<script>document.getElementById('w2_wed_t_2').value=''</script>";

echo "<script>document.getElementById('w2_wed_h_3').value=''</script>";
echo "<script>document.getElementById('w2_wed_m_3').value=''</script>";
echo "<script>document.getElementById('w2_wed_l_3').value=''</script>";
echo "<script>document.getElementById('w2_wed_t_3').value=''</script>";

echo "<script>document.getElementById('w2_wed_h_4').value=''</script>";
echo "<script>document.getElementById('w2_wed_m_4').value=''</script>";
echo "<script>document.getElementById('w2_wed_l_4').value=''</script>";
echo "<script>document.getElementById('w2_wed_t_4').value=''</script>";
//thursday
echo "<script>document.getElementById('w2_thu_h_1').value=''</script>";
echo "<script>document.getElementById('w2_thu_m_1').value=''</script>";
echo "<script>document.getElementById('w2_thu_l_1').value=''</script>";
echo "<script>document.getElementById('w2_thu_t_1').value=''</script>";

echo "<script>document.getElementById('w2_thu_h_2').value=''</script>";
echo "<script>document.getElementById('w2_thu_m_2').value=''</script>";
echo "<script>document.getElementById('w2_thu_l_2').value=''</script>";
echo "<script>document.getElementById('w2_thu_t_2').value=''</script>";

echo "<script>document.getElementById('w2_thu_h_3').value=''</script>";
echo "<script>document.getElementById('w2_thu_m_3').value=''</script>";
echo "<script>document.getElementById('w2_thu_l_3').value=''</script>";
echo "<script>document.getElementById('w2_thu_t_3').value=''</script>";

echo "<script>document.getElementById('w2_thu_h_4').value=''</script>";
echo "<script>document.getElementById('w2_thu_m_4').value=''</script>";
echo "<script>document.getElementById('w2_thu_l_4').value=''</script>";
echo "<script>document.getElementById('w2_thu_t_4').value=''</script>";
//friday
echo "<script>document.getElementById('w2_fri_h_1').value=''</script>";
echo "<script>document.getElementById('w2_fri_m_1').value=''</script>";
echo "<script>document.getElementById('w2_fri_l_1').value=''</script>";
echo "<script>document.getElementById('w2_fri_t_1').value=''</script>";

echo "<script>document.getElementById('w2_fri_h_2').value=''</script>";
echo "<script>document.getElementById('w2_fri_m_2').value=''</script>";
echo "<script>document.getElementById('w2_fri_l_2').value=''</script>";
echo "<script>document.getElementById('w2_fri_t_2').value=''</script>";

echo "<script>document.getElementById('w2_fri_h_3').value=''</script>";
echo "<script>document.getElementById('w2_fri_m_3').value=''</script>";
echo "<script>document.getElementById('w2_fri_l_3').value=''</script>";
echo "<script>document.getElementById('w2_fri_t_3').value=''</script>";

echo "<script>document.getElementById('w2_fri_h_4').value=''</script>";
echo "<script>document.getElementById('w2_fri_m_4').value=''</script>";
echo "<script>document.getElementById('w2_fri_l_4').value=''</script>";
echo "<script>document.getElementById('w2_fri_t_4').value=''</script>";
//saturday
echo "<script>document.getElementById('w2_sat_h_1').value=''</script>";
echo "<script>document.getElementById('w2_sat_m_1').value=''</script>";
echo "<script>document.getElementById('w2_sat_l_1').value=''</script>";
echo "<script>document.getElementById('w2_sat_t_1').value=''</script>";

echo "<script>document.getElementById('w2_sat_h_2').value=''</script>";
echo "<script>document.getElementById('w2_sat_m_2').value=''</script>";
echo "<script>document.getElementById('w2_sat_l_2').value=''</script>";
echo "<script>document.getElementById('w2_sat_t_2').value=''</script>";

echo "<script>document.getElementById('w2_sat_h_3').value=''</script>";
echo "<script>document.getElementById('w2_sat_m_3').value=''</script>";
echo "<script>document.getElementById('w2_sat_l_3').value=''</script>";
echo "<script>document.getElementById('w2_sat_t_3').value=''</script>";

echo "<script>document.getElementById('w2_sat_h_4').value=''</script>";
echo "<script>document.getElementById('w2_sat_m_4').value=''</script>";
echo "<script>document.getElementById('w2_sat_l_4').value=''</script>";
echo "<script>document.getElementById('w2_sat_t_4').value=''</script>";
}
//week3
{
//sunday
echo "<script>document.getElementById('w3_sun_h_1').value=''</script>";
echo "<script>document.getElementById('w3_sun_m_1').value=''</script>";
echo "<script>document.getElementById('w3_sun_l_1').value=''</script>";
echo "<script>document.getElementById('w3_sun_t_1').value=''</script>";

echo "<script>document.getElementById('w3_sun_h_2').value=''</script>";
echo "<script>document.getElementById('w3_sun_m_2').value=''</script>";
echo "<script>document.getElementById('w3_sun_l_2').value=''</script>";
echo "<script>document.getElementById('w3_sun_t_2').value=''</script>";

echo "<script>document.getElementById('w3_sun_h_3').value=''</script>";
echo "<script>document.getElementById('w3_sun_m_3').value=''</script>";
echo "<script>document.getElementById('w3_sun_l_3').value=''</script>";
echo "<script>document.getElementById('w3_sun_t_3').value=''</script>";

echo "<script>document.getElementById('w3_sun_h_4').value=''</script>";
echo "<script>document.getElementById('w3_sun_m_4').value=''</script>";
echo "<script>document.getElementById('w3_sun_l_4').value=''</script>";
echo "<script>document.getElementById('w3_sun_t_4').value=''</script>";
//monday
echo "<script>document.getElementById('w3_mon_h_1').value=''</script>";
echo "<script>document.getElementById('w3_mon_m_1').value=''</script>";
echo "<script>document.getElementById('w3_mon_l_1').value=''</script>";
echo "<script>document.getElementById('w3_mon_t_1').value=''</script>";

echo "<script>document.getElementById('w3_mon_h_2').value=''</script>";
echo "<script>document.getElementById('w3_mon_m_2').value=''</script>";
echo "<script>document.getElementById('w3_mon_l_2').value=''</script>";
echo "<script>document.getElementById('w3_mon_t_2').value=''</script>";

echo "<script>document.getElementById('w3_mon_h_3').value=''</script>";
echo "<script>document.getElementById('w3_mon_m_3').value=''</script>";
echo "<script>document.getElementById('w3_mon_l_3').value=''</script>";
echo "<script>document.getElementById('w3_mon_t_3').value=''</script>";

echo "<script>document.getElementById('w3_mon_h_4').value=''</script>";
echo "<script>document.getElementById('w3_mon_m_4').value=''</script>";
echo "<script>document.getElementById('w3_mon_l_4').value=''</script>";
echo "<script>document.getElementById('w3_mon_t_4').value=''</script>";
//tuesday
echo "<script>document.getElementById('w3_tue_h_1').value=''</script>";
echo "<script>document.getElementById('w3_tue_m_1').value=''</script>";
echo "<script>document.getElementById('w3_tue_l_1').value=''</script>";
echo "<script>document.getElementById('w3_tue_t_1').value=''</script>";

echo "<script>document.getElementById('w3_tue_h_2').value=''</script>";
echo "<script>document.getElementById('w3_tue_m_2').value=''</script>";
echo "<script>document.getElementById('w3_tue_l_2').value=''</script>";
echo "<script>document.getElementById('w3_tue_t_2').value=''</script>";

echo "<script>document.getElementById('w3_tue_h_3').value=''</script>";
echo "<script>document.getElementById('w3_tue_m_3').value=''</script>";
echo "<script>document.getElementById('w3_tue_l_3').value=''</script>";
echo "<script>document.getElementById('w3_tue_t_3').value=''</script>";

echo "<script>document.getElementById('w3_tue_h_4').value=''</script>";
echo "<script>document.getElementById('w3_tue_m_4').value=''</script>";
echo "<script>document.getElementById('w3_tue_l_4').value=''</script>";
echo "<script>document.getElementById('w3_tue_t_4').value=''</script>";
//wednesday
echo "<script>document.getElementById('w3_wed_h_1').value=''</script>";
echo "<script>document.getElementById('w3_wed_m_1').value=''</script>";
echo "<script>document.getElementById('w3_wed_l_1').value=''</script>";
echo "<script>document.getElementById('w3_wed_t_1').value=''</script>";

echo "<script>document.getElementById('w3_wed_h_2').value=''</script>";
echo "<script>document.getElementById('w3_wed_m_2').value=''</script>";
echo "<script>document.getElementById('w3_wed_l_2').value=''</script>";
echo "<script>document.getElementById('w3_wed_t_2').value=''</script>";

echo "<script>document.getElementById('w3_wed_h_3').value=''</script>";
echo "<script>document.getElementById('w3_wed_m_3').value=''</script>";
echo "<script>document.getElementById('w3_wed_l_3').value=''</script>";
echo "<script>document.getElementById('w3_wed_t_3').value=''</script>";

echo "<script>document.getElementById('w3_wed_h_4').value=''</script>";
echo "<script>document.getElementById('w3_wed_m_4').value=''</script>";
echo "<script>document.getElementById('w3_wed_l_4').value=''</script>";
echo "<script>document.getElementById('w3_wed_t_4').value=''</script>";
//thursday
echo "<script>document.getElementById('w3_thu_h_1').value=''</script>";
echo "<script>document.getElementById('w3_thu_m_1').value=''</script>";
echo "<script>document.getElementById('w3_thu_l_1').value=''</script>";
echo "<script>document.getElementById('w3_thu_t_1').value=''</script>";

echo "<script>document.getElementById('w3_thu_h_2').value=''</script>";
echo "<script>document.getElementById('w3_thu_m_2').value=''</script>";
echo "<script>document.getElementById('w3_thu_l_2').value=''</script>";
echo "<script>document.getElementById('w3_thu_t_2').value=''</script>";

echo "<script>document.getElementById('w3_thu_h_3').value=''</script>";
echo "<script>document.getElementById('w3_thu_m_3').value=''</script>";
echo "<script>document.getElementById('w3_thu_l_3').value=''</script>";
echo "<script>document.getElementById('w3_thu_t_3').value=''</script>";

echo "<script>document.getElementById('w3_thu_h_4').value=''</script>";
echo "<script>document.getElementById('w3_thu_m_4').value=''</script>";
echo "<script>document.getElementById('w3_thu_l_4').value=''</script>";
echo "<script>document.getElementById('w3_thu_t_4').value=''</script>";
//friday
echo "<script>document.getElementById('w3_fri_h_1').value=''</script>";
echo "<script>document.getElementById('w3_fri_m_1').value=''</script>";
echo "<script>document.getElementById('w3_fri_l_1').value=''</script>";
echo "<script>document.getElementById('w3_fri_t_1').value=''</script>";

echo "<script>document.getElementById('w3_fri_h_2').value=''</script>";
echo "<script>document.getElementById('w3_fri_m_2').value=''</script>";
echo "<script>document.getElementById('w3_fri_l_2').value=''</script>";
echo "<script>document.getElementById('w3_fri_t_2').value=''</script>";

echo "<script>document.getElementById('w3_fri_h_3').value=''</script>";
echo "<script>document.getElementById('w3_fri_m_3').value=''</script>";
echo "<script>document.getElementById('w3_fri_l_3').value=''</script>";
echo "<script>document.getElementById('w3_fri_t_3').value=''</script>";

echo "<script>document.getElementById('w3_fri_h_4').value=''</script>";
echo "<script>document.getElementById('w3_fri_m_4').value=''</script>";
echo "<script>document.getElementById('w3_fri_l_4').value=''</script>";
echo "<script>document.getElementById('w3_fri_t_4').value=''</script>";
//saturday
echo "<script>document.getElementById('w3_sat_h_1').value=''</script>";
echo "<script>document.getElementById('w3_sat_m_1').value=''</script>";
echo "<script>document.getElementById('w3_sat_l_1').value=''</script>";
echo "<script>document.getElementById('w3_sat_t_1').value=''</script>";

echo "<script>document.getElementById('w3_sat_h_2').value=''</script>";
echo "<script>document.getElementById('w3_sat_m_2').value=''</script>";
echo "<script>document.getElementById('w3_sat_l_2').value=''</script>";
echo "<script>document.getElementById('w3_sat_t_2').value=''</script>";

echo "<script>document.getElementById('w3_sat_h_3').value=''</script>";
echo "<script>document.getElementById('w3_sat_m_3').value=''</script>";
echo "<script>document.getElementById('w3_sat_l_3').value=''</script>";
echo "<script>document.getElementById('w3_sat_t_3').value=''</script>";

echo "<script>document.getElementById('w3_sat_h_4').value=''</script>";
echo "<script>document.getElementById('w3_sat_m_4').value=''</script>";
echo "<script>document.getElementById('w3_sat_l_4').value=''</script>";
echo "<script>document.getElementById('w3_sat_t_4').value=''</script>";
}
//week4
{
//sunday
echo "<script>document.getElementById('w4_sun_h_1').value=''</script>";
echo "<script>document.getElementById('w4_sun_m_1').value=''</script>";
echo "<script>document.getElementById('w4_sun_l_1').value=''</script>";
echo "<script>document.getElementById('w4_sun_t_1').value=''</script>";

echo "<script>document.getElementById('w4_sun_h_2').value=''</script>";
echo "<script>document.getElementById('w4_sun_m_2').value=''</script>";
echo "<script>document.getElementById('w4_sun_l_2').value=''</script>";
echo "<script>document.getElementById('w4_sun_t_2').value=''</script>";

echo "<script>document.getElementById('w4_sun_h_3').value=''</script>";
echo "<script>document.getElementById('w4_sun_m_3').value=''</script>";
echo "<script>document.getElementById('w4_sun_l_3').value=''</script>";
echo "<script>document.getElementById('w4_sun_t_3').value=''</script>";

echo "<script>document.getElementById('w4_sun_h_4').value=''</script>";
echo "<script>document.getElementById('w4_sun_m_4').value=''</script>";
echo "<script>document.getElementById('w4_sun_l_4').value=''</script>";
echo "<script>document.getElementById('w4_sun_t_4').value=''</script>";
//monday
echo "<script>document.getElementById('w4_mon_h_1').value=''</script>";
echo "<script>document.getElementById('w4_mon_m_1').value=''</script>";
echo "<script>document.getElementById('w4_mon_l_1').value=''</script>";
echo "<script>document.getElementById('w4_mon_t_1').value=''</script>";

echo "<script>document.getElementById('w4_mon_h_2').value=''</script>";
echo "<script>document.getElementById('w4_mon_m_2').value=''</script>";
echo "<script>document.getElementById('w4_mon_l_2').value=''</script>";
echo "<script>document.getElementById('w4_mon_t_2').value=''</script>";

echo "<script>document.getElementById('w4_mon_h_3').value=''</script>";
echo "<script>document.getElementById('w4_mon_m_3').value=''</script>";
echo "<script>document.getElementById('w4_mon_l_3').value=''</script>";
echo "<script>document.getElementById('w4_mon_t_3').value=''</script>";

echo "<script>document.getElementById('w4_mon_h_4').value=''</script>";
echo "<script>document.getElementById('w4_mon_m_4').value=''</script>";
echo "<script>document.getElementById('w4_mon_l_4').value=''</script>";
echo "<script>document.getElementById('w4_mon_t_4').value=''</script>";
//tuesday
echo "<script>document.getElementById('w4_tue_h_1').value=''</script>";
echo "<script>document.getElementById('w4_tue_m_1').value=''</script>";
echo "<script>document.getElementById('w4_tue_l_1').value=''</script>";
echo "<script>document.getElementById('w4_tue_t_1').value=''</script>";

echo "<script>document.getElementById('w4_tue_h_2').value=''</script>";
echo "<script>document.getElementById('w4_tue_m_2').value=''</script>";
echo "<script>document.getElementById('w4_tue_l_2').value=''</script>";
echo "<script>document.getElementById('w4_tue_t_2').value=''</script>";

echo "<script>document.getElementById('w4_tue_h_3').value=''</script>";
echo "<script>document.getElementById('w4_tue_m_3').value=''</script>";
echo "<script>document.getElementById('w4_tue_l_3').value=''</script>";
echo "<script>document.getElementById('w4_tue_t_3').value=''</script>";

echo "<script>document.getElementById('w4_tue_h_4').value=''</script>";
echo "<script>document.getElementById('w4_tue_m_4').value=''</script>";
echo "<script>document.getElementById('w4_tue_l_4').value=''</script>";
echo "<script>document.getElementById('w4_tue_t_4').value=''</script>";
//wednesday
echo "<script>document.getElementById('w4_wed_h_1').value=''</script>";
echo "<script>document.getElementById('w4_wed_m_1').value=''</script>";
echo "<script>document.getElementById('w4_wed_l_1').value=''</script>";
echo "<script>document.getElementById('w4_wed_t_1').value=''</script>";

echo "<script>document.getElementById('w4_wed_h_2').value=''</script>";
echo "<script>document.getElementById('w4_wed_m_2').value=''</script>";
echo "<script>document.getElementById('w4_wed_l_2').value=''</script>";
echo "<script>document.getElementById('w4_wed_t_2').value=''</script>";

echo "<script>document.getElementById('w4_wed_h_3').value=''</script>";
echo "<script>document.getElementById('w4_wed_m_3').value=''</script>";
echo "<script>document.getElementById('w4_wed_l_3').value=''</script>";
echo "<script>document.getElementById('w4_wed_t_3').value=''</script>";

echo "<script>document.getElementById('w4_wed_h_4').value=''</script>";
echo "<script>document.getElementById('w4_wed_m_4').value=''</script>";
echo "<script>document.getElementById('w4_wed_l_4').value=''</script>";
echo "<script>document.getElementById('w4_wed_t_4').value=''</script>";
//thursday
echo "<script>document.getElementById('w4_thu_h_1').value=''</script>";
echo "<script>document.getElementById('w4_thu_m_1').value=''</script>";
echo "<script>document.getElementById('w4_thu_l_1').value=''</script>";
echo "<script>document.getElementById('w4_thu_t_1').value=''</script>";

echo "<script>document.getElementById('w4_thu_h_2').value=''</script>";
echo "<script>document.getElementById('w4_thu_m_2').value=''</script>";
echo "<script>document.getElementById('w4_thu_l_2').value=''</script>";
echo "<script>document.getElementById('w4_thu_t_2').value=''</script>";

echo "<script>document.getElementById('w4_thu_h_3').value=''</script>";
echo "<script>document.getElementById('w4_thu_m_3').value=''</script>";
echo "<script>document.getElementById('w4_thu_l_3').value=''</script>";
echo "<script>document.getElementById('w4_thu_t_3').value=''</script>";

echo "<script>document.getElementById('w4_thu_h_4').value=''</script>";
echo "<script>document.getElementById('w4_thu_m_4').value=''</script>";
echo "<script>document.getElementById('w4_thu_l_4').value=''</script>";
echo "<script>document.getElementById('w4_thu_t_4').value=''</script>";
//friday
echo "<script>document.getElementById('w4_fri_h_1').value=''</script>";
echo "<script>document.getElementById('w4_fri_m_1').value=''</script>";
echo "<script>document.getElementById('w4_fri_l_1').value=''</script>";
echo "<script>document.getElementById('w4_fri_t_1').value=''</script>";

echo "<script>document.getElementById('w4_fri_h_2').value=''</script>";
echo "<script>document.getElementById('w4_fri_m_2').value=''</script>";
echo "<script>document.getElementById('w4_fri_l_2').value=''</script>";
echo "<script>document.getElementById('w4_fri_t_2').value=''</script>";

echo "<script>document.getElementById('w4_fri_h_3').value=''</script>";
echo "<script>document.getElementById('w4_fri_m_3').value=''</script>";
echo "<script>document.getElementById('w4_fri_l_3').value=''</script>";
echo "<script>document.getElementById('w4_fri_t_3').value=''</script>";

echo "<script>document.getElementById('w4_fri_h_4').value=''</script>";
echo "<script>document.getElementById('w4_fri_m_4').value=''</script>";
echo "<script>document.getElementById('w4_fri_l_4').value=''</script>";
echo "<script>document.getElementById('w4_fri_t_4').value=''</script>";
//saturday
echo "<script>document.getElementById('w4_sat_h_1').value=''</script>";
echo "<script>document.getElementById('w4_sat_m_1').value=''</script>";
echo "<script>document.getElementById('w4_sat_l_1').value=''</script>";
echo "<script>document.getElementById('w4_sat_t_1').value=''</script>";

echo "<script>document.getElementById('w4_sat_h_2').value=''</script>";
echo "<script>document.getElementById('w4_sat_m_2').value=''</script>";
echo "<script>document.getElementById('w4_sat_l_2').value=''</script>";
echo "<script>document.getElementById('w4_sat_t_2').value=''</script>";

echo "<script>document.getElementById('w4_sat_h_3').value=''</script>";
echo "<script>document.getElementById('w4_sat_m_3').value=''</script>";
echo "<script>document.getElementById('w4_sat_l_3').value=''</script>";
echo "<script>document.getElementById('w4_sat_t_3').value=''</script>";

echo "<script>document.getElementById('w4_sat_h_4').value=''</script>";
echo "<script>document.getElementById('w4_sat_m_4').value=''</script>";
echo "<script>document.getElementById('w4_sat_l_4').value=''</script>";
echo "<script>document.getElementById('w4_sat_t_4').value=''</script>";
}
//week5
{
//sunday
echo "<script>document.getElementById('w5_sun_h_1').value=''</script>";
echo "<script>document.getElementById('w5_sun_m_1').value=''</script>";
echo "<script>document.getElementById('w5_sun_l_1').value=''</script>";
echo "<script>document.getElementById('w5_sun_t_1').value=''</script>";

echo "<script>document.getElementById('w5_sun_h_2').value=''</script>";
echo "<script>document.getElementById('w5_sun_m_2').value=''</script>";
echo "<script>document.getElementById('w5_sun_l_2').value=''</script>";
echo "<script>document.getElementById('w5_sun_t_2').value=''</script>";

echo "<script>document.getElementById('w5_sun_h_3').value=''</script>";
echo "<script>document.getElementById('w5_sun_m_3').value=''</script>";
echo "<script>document.getElementById('w5_sun_l_3').value=''</script>";
echo "<script>document.getElementById('w5_sun_t_3').value=''</script>";

echo "<script>document.getElementById('w5_sun_h_4').value=''</script>";
echo "<script>document.getElementById('w5_sun_m_4').value=''</script>";
echo "<script>document.getElementById('w5_sun_l_4').value=''</script>";
echo "<script>document.getElementById('w5_sun_t_4').value=''</script>";
//monday
echo "<script>document.getElementById('w5_mon_h_1').value=''</script>";
echo "<script>document.getElementById('w5_mon_m_1').value=''</script>";
echo "<script>document.getElementById('w5_mon_l_1').value=''</script>";
echo "<script>document.getElementById('w5_mon_t_1').value=''</script>";

echo "<script>document.getElementById('w5_mon_h_2').value=''</script>";
echo "<script>document.getElementById('w5_mon_m_2').value=''</script>";
echo "<script>document.getElementById('w5_mon_l_2').value=''</script>";
echo "<script>document.getElementById('w5_mon_t_2').value=''</script>";

echo "<script>document.getElementById('w5_mon_h_3').value=''</script>";
echo "<script>document.getElementById('w5_mon_m_3').value=''</script>";
echo "<script>document.getElementById('w5_mon_l_3').value=''</script>";
echo "<script>document.getElementById('w5_mon_t_3').value=''</script>";

echo "<script>document.getElementById('w5_mon_h_4').value=''</script>";
echo "<script>document.getElementById('w5_mon_m_4').value=''</script>";
echo "<script>document.getElementById('w5_mon_l_4').value=''</script>";
echo "<script>document.getElementById('w5_mon_t_4').value=''</script>";
//tuesday
echo "<script>document.getElementById('w5_tue_h_1').value=''</script>";
echo "<script>document.getElementById('w5_tue_m_1').value=''</script>";
echo "<script>document.getElementById('w5_tue_l_1').value=''</script>";
echo "<script>document.getElementById('w5_tue_t_1').value=''</script>";

echo "<script>document.getElementById('w5_tue_h_2').value=''</script>";
echo "<script>document.getElementById('w5_tue_m_2').value=''</script>";
echo "<script>document.getElementById('w5_tue_l_2').value=''</script>";
echo "<script>document.getElementById('w5_tue_t_2').value=''</script>";

echo "<script>document.getElementById('w5_tue_h_3').value=''</script>";
echo "<script>document.getElementById('w5_tue_m_3').value=''</script>";
echo "<script>document.getElementById('w5_tue_l_3').value=''</script>";
echo "<script>document.getElementById('w5_tue_t_3').value=''</script>";

echo "<script>document.getElementById('w5_tue_h_4').value=''</script>";
echo "<script>document.getElementById('w5_tue_m_4').value=''</script>";
echo "<script>document.getElementById('w5_tue_l_4').value=''</script>";
echo "<script>document.getElementById('w5_tue_t_4').value=''</script>";
//wednesday
echo "<script>document.getElementById('w5_wed_h_1').value=''</script>";
echo "<script>document.getElementById('w5_wed_m_1').value=''</script>";
echo "<script>document.getElementById('w5_wed_l_1').value=''</script>";
echo "<script>document.getElementById('w5_wed_t_1').value=''</script>";

echo "<script>document.getElementById('w5_wed_h_2').value=''</script>";
echo "<script>document.getElementById('w5_wed_m_2').value=''</script>";
echo "<script>document.getElementById('w5_wed_l_2').value=''</script>";
echo "<script>document.getElementById('w5_wed_t_2').value=''</script>";

echo "<script>document.getElementById('w5_wed_h_3').value=''</script>";
echo "<script>document.getElementById('w5_wed_m_3').value=''</script>";
echo "<script>document.getElementById('w5_wed_l_3').value=''</script>";
echo "<script>document.getElementById('w5_wed_t_3').value=''</script>";

echo "<script>document.getElementById('w5_wed_h_4').value=''</script>";
echo "<script>document.getElementById('w5_wed_m_4').value=''</script>";
echo "<script>document.getElementById('w5_wed_l_4').value=''</script>";
echo "<script>document.getElementById('w5_wed_t_4').value=''</script>";
//thursday
echo "<script>document.getElementById('w5_thu_h_1').value=''</script>";
echo "<script>document.getElementById('w5_thu_m_1').value=''</script>";
echo "<script>document.getElementById('w5_thu_l_1').value=''</script>";
echo "<script>document.getElementById('w5_thu_t_1').value=''</script>";

echo "<script>document.getElementById('w5_thu_h_2').value=''</script>";
echo "<script>document.getElementById('w5_thu_m_2').value=''</script>";
echo "<script>document.getElementById('w5_thu_l_2').value=''</script>";
echo "<script>document.getElementById('w5_thu_t_2').value=''</script>";

echo "<script>document.getElementById('w5_thu_h_3').value=''</script>";
echo "<script>document.getElementById('w5_thu_m_3').value=''</script>";
echo "<script>document.getElementById('w5_thu_l_3').value=''</script>";
echo "<script>document.getElementById('w5_thu_t_3').value=''</script>";

echo "<script>document.getElementById('w5_thu_h_4').value=''</script>";
echo "<script>document.getElementById('w5_thu_m_4').value=''</script>";
echo "<script>document.getElementById('w5_thu_l_4').value=''</script>";
echo "<script>document.getElementById('w5_thu_t_4').value=''</script>";
//friday
echo "<script>document.getElementById('w5_fri_h_1').value=''</script>";
echo "<script>document.getElementById('w5_fri_m_1').value=''</script>";
echo "<script>document.getElementById('w5_fri_l_1').value=''</script>";
echo "<script>document.getElementById('w5_fri_t_1').value=''</script>";

echo "<script>document.getElementById('w5_fri_h_2').value=''</script>";
echo "<script>document.getElementById('w5_fri_m_2').value=''</script>";
echo "<script>document.getElementById('w5_fri_l_2').value=''</script>";
echo "<script>document.getElementById('w5_fri_t_2').value=''</script>";

echo "<script>document.getElementById('w5_fri_h_3').value=''</script>";
echo "<script>document.getElementById('w5_fri_m_3').value=''</script>";
echo "<script>document.getElementById('w5_fri_l_3').value=''</script>";
echo "<script>document.getElementById('w5_fri_t_3').value=''</script>";

echo "<script>document.getElementById('w5_fri_h_4').value=''</script>";
echo "<script>document.getElementById('w5_fri_m_4').value=''</script>";
echo "<script>document.getElementById('w5_fri_l_4').value=''</script>";
echo "<script>document.getElementById('w5_fri_t_4').value=''</script>";
//saturday
echo "<script>document.getElementById('w5_sat_h_1').value=''</script>";
echo "<script>document.getElementById('w5_sat_m_1').value=''</script>";
echo "<script>document.getElementById('w5_sat_l_1').value=''</script>";
echo "<script>document.getElementById('w5_sat_t_1').value=''</script>";

echo "<script>document.getElementById('w5_sat_h_2').value=''</script>";
echo "<script>document.getElementById('w5_sat_m_2').value=''</script>";
echo "<script>document.getElementById('w5_sat_l_2').value=''</script>";
echo "<script>document.getElementById('w5_sat_t_2').value=''</script>";

echo "<script>document.getElementById('w5_sat_h_3').value=''</script>";
echo "<script>document.getElementById('w5_sat_m_3').value=''</script>";
echo "<script>document.getElementById('w5_sat_l_3').value=''</script>";
echo "<script>document.getElementById('w5_sat_t_3').value=''</script>";

echo "<script>document.getElementById('w5_sat_h_4').value=''</script>";
echo "<script>document.getElementById('w5_sat_m_4').value=''</script>";
echo "<script>document.getElementById('w5_sat_l_4').value=''</script>";
echo "<script>document.getElementById('w5_sat_t_4').value=''</script>";
}
//week6
{
//sunday
echo "<script>document.getElementById('w6_sun_h_1').value=''</script>";
echo "<script>document.getElementById('w6_sun_m_1').value=''</script>";
echo "<script>document.getElementById('w6_sun_l_1').value=''</script>";
echo "<script>document.getElementById('w6_sun_t_1').value=''</script>";

echo "<script>document.getElementById('w6_sun_h_2').value=''</script>";
echo "<script>document.getElementById('w6_sun_m_2').value=''</script>";
echo "<script>document.getElementById('w6_sun_l_2').value=''</script>";
echo "<script>document.getElementById('w6_sun_t_2').value=''</script>";

echo "<script>document.getElementById('w6_sun_h_3').value=''</script>";
echo "<script>document.getElementById('w6_sun_m_3').value=''</script>";
echo "<script>document.getElementById('w6_sun_l_3').value=''</script>";
echo "<script>document.getElementById('w6_sun_t_3').value=''</script>";

echo "<script>document.getElementById('w6_sun_h_4').value=''</script>";
echo "<script>document.getElementById('w6_sun_m_4').value=''</script>";
echo "<script>document.getElementById('w6_sun_l_4').value=''</script>";
echo "<script>document.getElementById('w6_sun_t_4').value=''</script>";
//monday
echo "<script>document.getElementById('w6_mon_h_1').value=''</script>";
echo "<script>document.getElementById('w6_mon_m_1').value=''</script>";
echo "<script>document.getElementById('w6_mon_l_1').value=''</script>";
echo "<script>document.getElementById('w6_mon_t_1').value=''</script>";

echo "<script>document.getElementById('w6_mon_h_2').value=''</script>";
echo "<script>document.getElementById('w6_mon_m_2').value=''</script>";
echo "<script>document.getElementById('w6_mon_l_2').value=''</script>";
echo "<script>document.getElementById('w6_mon_t_2').value=''</script>";

echo "<script>document.getElementById('w6_mon_h_3').value=''</script>";
echo "<script>document.getElementById('w6_mon_m_3').value=''</script>";
echo "<script>document.getElementById('w6_mon_l_3').value=''</script>";
echo "<script>document.getElementById('w6_mon_t_3').value=''</script>";

echo "<script>document.getElementById('w6_mon_h_4').value=''</script>";
echo "<script>document.getElementById('w6_mon_m_4').value=''</script>";
echo "<script>document.getElementById('w6_mon_l_4').value=''</script>";
echo "<script>document.getElementById('w6_mon_t_4').value=''</script>";
//tuesday
echo "<script>document.getElementById('w6_tue_h_1').value=''</script>";
echo "<script>document.getElementById('w6_tue_m_1').value=''</script>";
echo "<script>document.getElementById('w6_tue_l_1').value=''</script>";
echo "<script>document.getElementById('w6_tue_t_1').value=''</script>";

echo "<script>document.getElementById('w6_tue_h_2').value=''</script>";
echo "<script>document.getElementById('w6_tue_m_2').value=''</script>";
echo "<script>document.getElementById('w6_tue_l_2').value=''</script>";
echo "<script>document.getElementById('w6_tue_t_2').value=''</script>";

echo "<script>document.getElementById('w6_tue_h_3').value=''</script>";
echo "<script>document.getElementById('w6_tue_m_3').value=''</script>";
echo "<script>document.getElementById('w6_tue_l_3').value=''</script>";
echo "<script>document.getElementById('w6_tue_t_3').value=''</script>";

echo "<script>document.getElementById('w6_tue_h_4').value=''</script>";
echo "<script>document.getElementById('w6_tue_m_4').value=''</script>";
echo "<script>document.getElementById('w6_tue_l_4').value=''</script>";
echo "<script>document.getElementById('w6_tue_t_4').value=''</script>";
}
        showdata($year,$month,$week,$batch,$conn);
}

function showdata($year,$month,$week,$batch,$conn)// find table according to batch name
{

    $sql = "SELECT * FROM `batches` WHERE id =1";
    $result = $conn->query($sql);

    if ($week == "W1")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";
                   showdataw1($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb2";
                   showdataw1($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "schb3";
                   showdataw1($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";
                   showdataw1($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                   showdataw1($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                   showdataw1($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                   showdataw1($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                   showdataw1($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                   showdataw1($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                   showdataw1($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                   showdataw1($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                   showdataw1($year,$month,$week,$tbn,$conn);
                }
                else{}
            }
        else
        {
            echo "Error";
        }
        } else {
            echo "0 results";
        }
    }
    elseif ($week == "W2")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";

                   showdataw2($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb2";
                   showdataw2($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "schb3";
                   showdataw2($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";

                   showdataw2($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                   showdataw2($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                   showdataw2($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                   showdataw2($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                   showdataw2($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                   showdataw2($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                   showdataw2($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                   showdataw2($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                   showdataw2($year,$month,$week,$tbn,$conn);
                }
                else{}
            }
            else
            {
                echo "Error";
            }
        } else {
            echo "0 results";
        }
    }
    elseif ($week == "W3")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";
                   showdataw3($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb2";
                   showdataw3($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "schb3";
                   showdataw3($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";
                   showdataw3($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                   showdataw3($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                   showdataw3($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                   showdataw3($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                   showdataw3($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                   showdataw3($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                   showdataw3($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                   showdataw3($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                   showdataw3($year,$month,$week,$tbn,$conn);
                }
                else{}
            }
        else
        {
            echo "Error";
        }
        } else {
            echo "0 results";
        }
    }
    elseif ($week == "W4")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";
                   showdataw4($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb2";
                   showdataw4($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "schb3";
                   showdataw4($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";
                   showdataw4($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                   showdataw4($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                   showdataw4($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                   showdataw4($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                   showdataw4($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                   showdataw4($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                   showdataw4($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                   showdataw4($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                   showdataw4($year,$month,$week,$tbn,$conn);
                }
                else{}
            }
        else
        {
            echo "Error";
        }
        } else {
            echo "0 results";
        }
    }
    elseif ($week == "W5")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";
                   showdataw5($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb2";
                   showdataw5($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "schb3";
                   showdataw5($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";
                   showdataw5($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                   showdataw5($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                   showdataw5($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                   showdataw5($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                   showdataw5($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                   showdataw5($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                   showdataw5($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                   showdataw5($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                   showdataw5($year,$month,$week,$tbn,$conn);
                }
                else{}
            }
        else
        {
            echo "Error";
        }
        } else {
            echo "0 results";
        }
    }
    elseif ($week == "W6")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";
                   showdataw6($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb3";
                   showdataw6($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "    schb2";
                   showdataw6($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";
                   showdataw6($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                   showdataw6($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                   showdataw6($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                   showdataw6($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                   showdataw6($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                   showdataw6($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                   showdataw6($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                   showdataw6($year,$month,$week,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                   showdataw6($year,$month,$week,$tbn,$conn);
                }
                else{}
            }
        else
        {
            echo "Error";
        }
        } else {
            echo "0 results";
        }
    }
    else{}
}


function showdataw1($year,$month,$week,$tbn,$conn)
{
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
//sunday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_sun_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_sun_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_sun_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_sun_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_sun_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_sun_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_sun_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_sun_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_sun_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_sun_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_sun_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_sun_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_sun_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_sun_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_sun_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_sun_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//monday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_mon_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_mon_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_mon_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_mon_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_mon_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_mon_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_mon_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_mon_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_mon_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_mon_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_mon_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_mon_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_mon_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_mon_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_mon_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_mon_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//tuesday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_tue_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_tue_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_tue_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_tue_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_tue_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_tue_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_tue_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_tue_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_tue_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_tue_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_tue_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_tue_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_tue_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_tue_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_tue_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_tue_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//wednesday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_wed_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_wed_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_wed_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_wed_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_wed_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_wed_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_wed_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_wed_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_wed_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_wed_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_wed_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_wed_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_wed_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_wed_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_wed_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_wed_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//thursday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_thu_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_thu_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_thu_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_thu_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_thu_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_thu_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_thu_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_thu_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_thu_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_thu_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_thu_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_thu_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_thu_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_thu_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_thu_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_thu_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//friday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_fri_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_fri_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_fri_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_fri_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_fri_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_fri_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_fri_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_fri_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_fri_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_fri_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_fri_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_fri_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_fri_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_fri_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_fri_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_fri_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//saturday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_sat_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_sat_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_sat_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_sat_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_sat_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_sat_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_sat_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_sat_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_sat_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_sat_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_sat_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_sat_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w1_sat_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w1_sat_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w1_sat_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w1_sat_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
$conn->close();
}
function showdataw2($year,$month,$week,$tbn,$conn)
{
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
//sunday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_sun_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_sun_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_sun_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_sun_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_sun_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_sun_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_sun_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_sun_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_sun_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_sun_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_sun_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_sun_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_sun_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_sun_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_sun_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_sun_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//monday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_mon_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_mon_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_mon_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_mon_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_mon_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_mon_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_mon_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_mon_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_mon_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_mon_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_mon_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_mon_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_mon_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_mon_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_mon_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_mon_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//tuesday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_tue_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_tue_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_tue_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_tue_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_tue_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_tue_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_tue_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_tue_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_tue_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_tue_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_tue_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_tue_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_tue_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_tue_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_tue_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_tue_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//wednesday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_wed_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_wed_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_wed_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_wed_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_wed_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_wed_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_wed_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_wed_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_wed_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_wed_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_wed_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_wed_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_wed_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_wed_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_wed_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_wed_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//thursday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_thu_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_thu_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_thu_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_thu_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_thu_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_thu_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_thu_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_thu_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_thu_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_thu_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_thu_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_thu_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_thu_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_thu_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_thu_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_thu_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//friday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_fri_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_fri_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_fri_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_fri_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_fri_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_fri_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_fri_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_fri_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_fri_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_fri_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_fri_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_fri_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_fri_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_fri_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_fri_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_fri_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//saturday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_sat_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_sat_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_sat_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_sat_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_sat_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_sat_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_sat_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_sat_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_sat_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_sat_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_sat_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_sat_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w2_sat_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w2_sat_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w2_sat_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w2_sat_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
$conn->close();
}

function showdataw3($year,$month,$week,$tbn,$conn)
{
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
//sunday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_sun_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_sun_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_sun_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_sun_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_sun_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_sun_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_sun_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_sun_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_sun_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_sun_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_sun_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_sun_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_sun_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_sun_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_sun_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_sun_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//monday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_mon_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_mon_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_mon_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_mon_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_mon_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_mon_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_mon_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_mon_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_mon_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_mon_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_mon_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_mon_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_mon_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_mon_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_mon_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_mon_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//tuesday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_tue_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_tue_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_tue_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_tue_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_tue_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_tue_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_tue_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_tue_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_tue_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_tue_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_tue_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_tue_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_tue_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_tue_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_tue_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_tue_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//wednesday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_wed_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_wed_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_wed_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_wed_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_wed_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_wed_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_wed_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_wed_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_wed_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_wed_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_wed_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_wed_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_wed_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_wed_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_wed_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_wed_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//thursday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_thu_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_thu_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_thu_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_thu_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_thu_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_thu_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_thu_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_thu_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_thu_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_thu_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_thu_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_thu_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_thu_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_thu_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_thu_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_thu_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//friday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_fri_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_fri_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_fri_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_fri_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_fri_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_fri_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_fri_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_fri_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_fri_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_fri_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_fri_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_fri_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_fri_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_fri_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_fri_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_fri_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//saturday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_sat_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_sat_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_sat_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_sat_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_sat_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_sat_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_sat_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_sat_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_sat_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_sat_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_sat_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_sat_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w3_sat_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w3_sat_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w3_sat_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w3_sat_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
$conn->close();
}

function showdataw4($year,$month,$week,$tbn,$conn)
{
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
//sunday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_sun_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_sun_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_sun_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_sun_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_sun_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_sun_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_sun_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_sun_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_sun_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_sun_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_sun_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_sun_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_sun_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_sun_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_sun_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_sun_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//monday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_mon_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_mon_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_mon_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_mon_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_mon_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_mon_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_mon_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_mon_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_mon_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_mon_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_mon_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_mon_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_mon_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_mon_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_mon_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_mon_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//tuesday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_tue_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_tue_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_tue_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_tue_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_tue_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_tue_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_tue_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_tue_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_tue_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_tue_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_tue_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_tue_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_tue_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_tue_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_tue_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_tue_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//wednesday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_wed_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_wed_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_wed_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_wed_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_wed_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_wed_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_wed_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_wed_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_wed_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_wed_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_wed_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_wed_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_wed_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_wed_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_wed_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_wed_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//thursday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_thu_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_thu_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_thu_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_thu_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_thu_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_thu_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_thu_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_thu_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_thu_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_thu_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_thu_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_thu_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_thu_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_thu_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_thu_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_thu_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//friday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_fri_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_fri_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_fri_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_fri_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_fri_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_fri_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_fri_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_fri_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_fri_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_fri_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_fri_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_fri_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_fri_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_fri_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_fri_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_fri_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//saturday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_sat_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_sat_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_sat_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_sat_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_sat_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_sat_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_sat_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_sat_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_sat_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_sat_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_sat_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_sat_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w4_sat_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w4_sat_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w4_sat_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w4_sat_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
$conn->close();
}

function showdataw5($year,$month,$week,$tbn,$conn)
{
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
//sunday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_sun_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_sun_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_sun_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_sun_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_sun_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_sun_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_sun_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_sun_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_sun_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_sun_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_sun_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_sun_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_sun_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_sun_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_sun_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_sun_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//monday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_mon_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_mon_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_mon_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_mon_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_mon_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_mon_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_mon_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_mon_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_mon_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_mon_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_mon_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_mon_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_mon_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_mon_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_mon_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_mon_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//tuesday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_tue_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_tue_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_tue_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_tue_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_tue_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_tue_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_tue_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_tue_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_tue_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_tue_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_tue_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_tue_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_tue_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_tue_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_tue_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_tue_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//wednesday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_wed_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_wed_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_wed_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_wed_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_wed_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_wed_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_wed_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_wed_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_wed_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_wed_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_wed_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_wed_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_wednesday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_wed_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_wed_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_wed_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_wed_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//thursday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_thu_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_thu_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_thu_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_thu_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_thu_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_thu_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_thu_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_thu_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_thu_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_thu_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_thu_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_thu_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_thursday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_thu_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_thu_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_thu_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_thu_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//friday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_fri_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_fri_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_fri_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_fri_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_fri_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_fri_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_fri_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_fri_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_fri_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_fri_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_fri_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_fri_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_friday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_fri_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_fri_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_fri_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_fri_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//saturday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_sat_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_sat_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_sat_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_sat_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_sat_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_sat_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_sat_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_sat_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_sat_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_sat_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_sat_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_sat_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_saturday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w5_sat_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w5_sat_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w5_sat_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w5_sat_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
$conn->close();
}

function showdataw6($year,$month,$week,$tbn,$conn)
{
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
//sunday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w6_sun_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w6_sun_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w6_sun_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w6_sun_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w6_sun_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w6_sun_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w6_sun_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w6_sun_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w6_sun_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w6_sun_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w6_sun_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w6_sun_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_sunday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w6_sun_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w6_sun_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w6_sun_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w6_sun_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//monday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w6_mon_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w6_mon_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w6_mon_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w6_mon_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w6_mon_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w6_mon_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w6_mon_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w6_mon_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w6_mon_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w6_mon_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w6_mon_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w6_mon_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_monday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w6_mon_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w6_mon_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w6_mon_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w6_mon_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
//tuesday 
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w6_tue_h_1').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w6_tue_m_1').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w6_tue_l_1').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w6_tue_t_1').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_2'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w6_tue_h_2').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w6_tue_m_2').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w6_tue_l_2').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w6_tue_t_2').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_3'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w6_tue_h_3').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w6_tue_m_3').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w6_tue_l_3').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w6_tue_t_3').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
{
    $sql = "SELECT * FROM $tbn WHERE ID= '".$year."_".$month."_".$week."_tuesday_4'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            echo "<script>document.getElementById('w6_tue_h_4').value='".$row["Hall_Lab"]."'</script>";
            echo "<script>document.getElementById('w6_tue_m_4').value='".$row["ModuleName_Code"]."'</script>";
            echo "<script>document.getElementById('w6_tue_l_4').value='".$row["Lecturer"]."'</script>";
            echo "<script>document.getElementById('w6_tue_t_4').value='".$row["Time"]."'</script>";
        }
    }
    else{echo "0 results";}
    
}
$conn->close();
}



//--------------------------------------end of the showdata function



if (isset($_POST['insert_or_update'])) {

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

$batch= $_POST["batch"];
$week= $_POST["week"];    
$month= $_POST["month"];
$year= $_POST["year"];


// week 1----------------------------------
$w1_sun_h_1 = $_POST["w1_sun_h_1"];$w1_sun_h_2 = $_POST["w1_sun_h_2"];$w1_sun_h_3 = $_POST["w1_sun_h_3"];$w1_sun_h_4 = $_POST["w1_sun_h_4"];
$w1_sun_m_1 = $_POST["w1_sun_m_1"];$w1_sun_m_2 = $_POST["w1_sun_m_2"];$w1_sun_m_3 = $_POST["w1_sun_m_3"];$w1_sun_m_4 = $_POST["w1_sun_m_4"];
$w1_sun_l_1 = $_POST["w1_sun_l_1"];$w1_sun_l_2 = $_POST["w1_sun_l_2"];$w1_sun_l_3 = $_POST["w1_sun_l_3"];$w1_sun_l_4 = $_POST["w1_sun_l_4"];
$w1_sun_t_1 = $_POST["w1_sun_t_1"];$w1_sun_t_2 = $_POST["w1_sun_t_2"];$w1_sun_t_3 = $_POST["w1_sun_t_3"];$w1_sun_t_4 = $_POST["w1_sun_t_4"];

$w1_mon_h_1 = $_POST["w1_mon_h_1"];$w1_mon_h_2 = $_POST["w1_mon_h_2"];$w1_mon_h_3 = $_POST["w1_mon_h_3"];$w1_mon_h_4 = $_POST["w1_mon_h_4"];
$w1_mon_m_1 = $_POST["w1_mon_m_1"];$w1_mon_m_2 = $_POST["w1_mon_m_2"];$w1_mon_m_3 = $_POST["w1_mon_m_3"];$w1_mon_m_4 = $_POST["w1_mon_m_4"];
$w1_mon_l_1 = $_POST["w1_mon_l_1"];$w1_mon_l_2 = $_POST["w1_mon_l_2"];$w1_mon_l_3 = $_POST["w1_mon_l_3"];$w1_mon_l_4 = $_POST["w1_mon_l_4"];
$w1_mon_t_1 = $_POST["w1_mon_t_1"];$w1_mon_t_2 = $_POST["w1_mon_t_2"];$w1_mon_t_3 = $_POST["w1_mon_t_3"];$w1_mon_t_4 = $_POST["w1_mon_t_4"];

$w1_tue_h_1 = $_POST["w1_tue_h_1"];$w1_tue_h_2 = $_POST["w1_tue_h_2"];$w1_tue_h_3 = $_POST["w1_tue_h_3"];$w1_tue_h_4 = $_POST["w1_tue_h_4"];
$w1_tue_m_1 = $_POST["w1_tue_m_1"];$w1_tue_m_2 = $_POST["w1_tue_m_2"];$w1_tue_m_3 = $_POST["w1_tue_m_3"];$w1_tue_m_4 = $_POST["w1_tue_m_4"];
$w1_tue_l_1 = $_POST["w1_tue_l_1"];$w1_tue_l_2 = $_POST["w1_tue_l_2"];$w1_tue_l_3 = $_POST["w1_tue_l_3"];$w1_tue_l_4 = $_POST["w1_tue_l_4"];
$w1_tue_t_1 = $_POST["w1_tue_t_1"];$w1_tue_t_2 = $_POST["w1_tue_t_2"];$w1_tue_t_3 = $_POST["w1_tue_t_3"];$w1_tue_t_4 = $_POST["w1_tue_t_4"];

$w1_wed_h_1 = $_POST["w1_wed_h_1"];$w1_wed_h_2 = $_POST["w1_wed_h_2"];$w1_wed_h_3 = $_POST["w1_wed_h_3"];$w1_wed_h_4 = $_POST["w1_wed_h_4"];
$w1_wed_m_1 = $_POST["w1_wed_m_1"];$w1_wed_m_2 = $_POST["w1_wed_m_2"];$w1_wed_m_3 = $_POST["w1_wed_m_3"];$w1_wed_m_4 = $_POST["w1_wed_m_4"];
$w1_wed_l_1 = $_POST["w1_wed_l_1"];$w1_wed_l_2 = $_POST["w1_wed_l_2"];$w1_wed_l_3 = $_POST["w1_wed_l_3"];$w1_wed_l_4 = $_POST["w1_wed_l_4"];
$w1_wed_t_1 = $_POST["w1_wed_t_1"];$w1_wed_t_2 = $_POST["w1_wed_t_2"];$w1_wed_t_3 = $_POST["w1_wed_t_3"];$w1_wed_t_4 = $_POST["w1_wed_t_4"];

$w1_thu_h_1 = $_POST["w1_thu_h_1"];$w1_thu_h_2 = $_POST["w1_thu_h_2"];$w1_thu_h_3 = $_POST["w1_thu_h_3"];$w1_thu_h_4 = $_POST["w1_thu_h_4"];
$w1_thu_m_1 = $_POST["w1_thu_m_1"];$w1_thu_m_2 = $_POST["w1_thu_m_2"];$w1_thu_m_3 = $_POST["w1_thu_m_3"];$w1_thu_m_4 = $_POST["w1_thu_m_4"];
$w1_thu_l_1 = $_POST["w1_thu_l_1"];$w1_thu_l_2 = $_POST["w1_thu_l_2"];$w1_thu_l_3 = $_POST["w1_thu_l_3"];$w1_thu_l_4 = $_POST["w1_thu_l_4"];
$w1_thu_t_1 = $_POST["w1_thu_t_1"];$w1_thu_t_2 = $_POST["w1_thu_t_2"];$w1_thu_t_3 = $_POST["w1_thu_t_3"];$w1_thu_t_4 = $_POST["w1_thu_t_4"];

$w1_fri_h_1 = $_POST["w1_fri_h_1"];$w1_fri_h_2 = $_POST["w1_fri_h_2"];$w1_fri_h_3 = $_POST["w1_fri_h_3"];$w1_fri_h_4 = $_POST["w1_fri_h_4"];
$w1_fri_m_1 = $_POST["w1_fri_m_1"];$w1_fri_m_2 = $_POST["w1_fri_m_2"];$w1_fri_m_3 = $_POST["w1_fri_m_3"];$w1_fri_m_4 = $_POST["w1_fri_m_4"];
$w1_fri_l_1 = $_POST["w1_fri_l_1"];$w1_fri_l_2 = $_POST["w1_fri_l_2"];$w1_fri_l_3 = $_POST["w1_fri_l_3"];$w1_fri_l_4 = $_POST["w1_fri_l_4"];
$w1_fri_t_1 = $_POST["w1_fri_t_1"];$w1_fri_t_2 = $_POST["w1_fri_t_2"];$w1_fri_t_3 = $_POST["w1_fri_t_3"];$w1_fri_t_4 = $_POST["w1_fri_t_4"];

$w1_sat_h_1 = $_POST["w1_sat_h_1"];$w1_sat_h_2 = $_POST["w1_sat_h_2"];$w1_sat_h_3 = $_POST["w1_sat_h_3"];$w1_sat_h_4 = $_POST["w1_sat_h_4"];
$w1_sat_m_1 = $_POST["w1_sat_m_1"];$w1_sat_m_2 = $_POST["w1_sat_m_2"];$w1_sat_m_3 = $_POST["w1_sat_m_3"];$w1_sat_m_4 = $_POST["w1_sat_m_4"];
$w1_sat_l_1 = $_POST["w1_sat_l_1"];$w1_sat_l_2 = $_POST["w1_sat_l_2"];$w1_sat_l_3 = $_POST["w1_sat_l_3"];$w1_sat_l_4 = $_POST["w1_sat_l_4"];
$w1_sat_t_1 = $_POST["w1_sat_t_1"];$w1_sat_t_2 = $_POST["w1_sat_t_2"];$w1_sat_t_3 = $_POST["w1_sat_t_3"];$w1_sat_t_4 = $_POST["w1_sat_t_4"];

$week_1_ary = array();

$week_1_ary[0]  = $w1_sun_h_1;  $week_1_ary[1]  = $w1_sun_m_1;  $week_1_ary[2]  = $w1_sun_l_1;  $week_1_ary[3]  = $w1_sun_t_1;
$week_1_ary[4]  = $w1_sun_h_2;  $week_1_ary[5]  = $w1_sun_m_2;  $week_1_ary[6]  = $w1_sun_l_2;  $week_1_ary[7]  = $w1_sun_t_2;
$week_1_ary[8]  = $w1_sun_h_3;  $week_1_ary[9]  = $w1_sun_m_3;  $week_1_ary[10] = $w1_sun_l_3;  $week_1_ary[11] = $w1_sun_t_3;
$week_1_ary[12] = $w1_sun_h_4;  $week_1_ary[13] = $w1_sun_m_4;  $week_1_ary[14] = $w1_sun_l_4;  $week_1_ary[15] = $w1_sun_t_4;

$week_1_ary[16]  = $w1_mon_h_1;  $week_1_ary[17]  = $w1_mon_m_1;  $week_1_ary[18]  = $w1_mon_l_1;  $week_1_ary[19]  = $w1_mon_t_1;
$week_1_ary[20]  = $w1_mon_h_2;  $week_1_ary[21]  = $w1_mon_m_2;  $week_1_ary[22]  = $w1_mon_l_2;  $week_1_ary[23]  = $w1_mon_t_2;
$week_1_ary[24]  = $w1_mon_h_3;  $week_1_ary[25]  = $w1_mon_m_3;  $week_1_ary[26]  = $w1_mon_l_3;  $week_1_ary[27]  = $w1_mon_t_3;
$week_1_ary[28]  = $w1_mon_h_4;  $week_1_ary[29]  = $w1_mon_m_4;  $week_1_ary[30]  = $w1_mon_l_4;  $week_1_ary[31]  = $w1_mon_t_4;

$week_1_ary[32]  = $w1_tue_h_1;  $week_1_ary[33]  = $w1_tue_m_1;  $week_1_ary[34]  = $w1_tue_l_1;  $week_1_ary[35]  = $w1_tue_t_1;
$week_1_ary[36]  = $w1_tue_h_2;  $week_1_ary[37]  = $w1_tue_m_2;  $week_1_ary[38]  = $w1_tue_l_2;  $week_1_ary[39]  = $w1_tue_t_2;
$week_1_ary[40]  = $w1_tue_h_3;  $week_1_ary[41]  = $w1_tue_m_3;  $week_1_ary[42]  = $w1_tue_l_3;  $week_1_ary[43]  = $w1_tue_t_3;
$week_1_ary[44]  = $w1_tue_h_4;  $week_1_ary[45]  = $w1_tue_m_4;  $week_1_ary[46]  = $w1_tue_l_4;  $week_1_ary[47]  = $w1_tue_t_4;

$week_1_ary[48]  = $w1_wed_h_1;  $week_1_ary[49]  = $w1_wed_m_1;  $week_1_ary[50]  = $w1_wed_l_1;  $week_1_ary[51]  = $w1_wed_t_1;
$week_1_ary[52]  = $w1_wed_h_2;  $week_1_ary[53]  = $w1_wed_m_2;  $week_1_ary[54]  = $w1_wed_l_2;  $week_1_ary[55]  = $w1_wed_t_2;
$week_1_ary[56]  = $w1_wed_h_3;  $week_1_ary[57]  = $w1_wed_m_3;  $week_1_ary[58]  = $w1_wed_l_3;  $week_1_ary[59]  = $w1_wed_t_3;
$week_1_ary[60]  = $w1_wed_h_4;  $week_1_ary[61]  = $w1_wed_m_4;  $week_1_ary[62]  = $w1_wed_l_4;  $week_1_ary[63]  = $w1_wed_t_4;

$week_1_ary[64]  = $w1_thu_h_1;  $week_1_ary[65]  = $w1_thu_m_1;  $week_1_ary[66]  = $w1_thu_l_1;  $week_1_ary[67]  = $w1_thu_t_1;
$week_1_ary[68]  = $w1_thu_h_2;  $week_1_ary[69]  = $w1_thu_m_2;  $week_1_ary[70]  = $w1_thu_l_2;  $week_1_ary[71]  = $w1_thu_t_2;
$week_1_ary[72]  = $w1_thu_h_3;  $week_1_ary[73]  = $w1_thu_m_3;  $week_1_ary[74]  = $w1_thu_l_3;  $week_1_ary[75]  = $w1_thu_t_3;
$week_1_ary[76]  = $w1_thu_h_4;  $week_1_ary[77]  = $w1_thu_m_4;  $week_1_ary[78]  = $w1_thu_l_4;  $week_1_ary[79]  = $w1_thu_t_4;

$week_1_ary[80]  = $w1_fri_h_1;  $week_1_ary[81]  = $w1_fri_m_1;  $week_1_ary[82]  = $w1_fri_l_1;  $week_1_ary[83]  = $w1_fri_t_1;
$week_1_ary[84]  = $w1_fri_h_2;  $week_1_ary[85]  = $w1_fri_m_2;  $week_1_ary[86]  = $w1_fri_l_2;  $week_1_ary[87]  = $w1_fri_t_2;
$week_1_ary[88]  = $w1_fri_h_3;  $week_1_ary[89]  = $w1_fri_m_3;  $week_1_ary[90]  = $w1_fri_l_3;  $week_1_ary[91]  = $w1_fri_t_3;
$week_1_ary[92]  = $w1_fri_h_4;  $week_1_ary[93]  = $w1_fri_m_4;  $week_1_ary[94]  = $w1_fri_l_4;  $week_1_ary[95]  = $w1_fri_t_4;

$week_1_ary[96]   = $w1_sat_h_1;  $week_1_ary[97]   = $w1_sat_m_1;  $week_1_ary[98]   = $w1_sat_l_1;  $week_1_ary[99]   = $w1_sat_t_1;
$week_1_ary[100]  = $w1_sat_h_2;  $week_1_ary[101]  = $w1_sat_m_2;  $week_1_ary[102]  = $w1_sat_l_2;  $week_1_ary[103]  = $w1_sat_t_2;
$week_1_ary[104]  = $w1_sat_h_3;  $week_1_ary[105]  = $w1_sat_m_3;  $week_1_ary[106]  = $w1_sat_l_3;  $week_1_ary[107]  = $w1_sat_t_3;
$week_1_ary[108]  = $w1_sat_h_4;  $week_1_ary[109]  = $w1_sat_m_4;  $week_1_ary[110]  = $w1_sat_l_4;  $week_1_ary[111]  = $w1_sat_t_4;


// week 2----------------------------------
$w2_sun_h_1 = $_POST["w2_sun_h_1"];$w2_sun_h_2 = $_POST["w2_sun_h_2"];$w2_sun_h_3 = $_POST["w2_sun_h_3"];$w2_sun_h_4 = $_POST["w2_sun_h_4"];
$w2_sun_m_1 = $_POST["w2_sun_m_1"];$w2_sun_m_2 = $_POST["w2_sun_m_2"];$w2_sun_m_3 = $_POST["w2_sun_m_3"];$w2_sun_m_4 = $_POST["w2_sun_m_4"];
$w2_sun_l_1 = $_POST["w2_sun_l_1"];$w2_sun_l_2 = $_POST["w2_sun_l_2"];$w2_sun_l_3 = $_POST["w2_sun_l_3"];$w2_sun_l_4 = $_POST["w2_sun_l_4"];
$w2_sun_t_1 = $_POST["w2_sun_t_1"];$w2_sun_t_2 = $_POST["w2_sun_t_2"];$w2_sun_t_3 = $_POST["w2_sun_t_3"];$w2_sun_t_4 = $_POST["w2_sun_t_4"];

$w2_mon_h_1 = $_POST["w2_mon_h_1"];$w2_mon_h_2 = $_POST["w2_mon_h_2"];$w2_mon_h_3 = $_POST["w2_mon_h_3"];$w2_mon_h_4 = $_POST["w2_mon_h_4"];
$w2_mon_m_1 = $_POST["w2_mon_m_1"];$w2_mon_m_2 = $_POST["w2_mon_m_2"];$w2_mon_m_3 = $_POST["w2_mon_m_3"];$w2_mon_m_4 = $_POST["w2_mon_m_4"];
$w2_mon_l_1 = $_POST["w2_mon_l_1"];$w2_mon_l_2 = $_POST["w2_mon_l_2"];$w2_mon_l_3 = $_POST["w2_mon_l_3"];$w2_mon_l_4 = $_POST["w2_mon_l_4"];
$w2_mon_t_1 = $_POST["w2_mon_t_1"];$w2_mon_t_2 = $_POST["w2_mon_t_2"];$w2_mon_t_3 = $_POST["w2_mon_t_3"];$w2_mon_t_4 = $_POST["w2_mon_t_4"];

$w2_tue_h_1 = $_POST["w2_tue_h_1"];$w2_tue_h_2 = $_POST["w2_tue_h_2"];$w2_tue_h_3 = $_POST["w2_tue_h_3"];$w2_tue_h_4 = $_POST["w2_tue_h_4"];
$w2_tue_m_1 = $_POST["w2_tue_m_1"];$w2_tue_m_2 = $_POST["w2_tue_m_2"];$w2_tue_m_3 = $_POST["w2_tue_m_3"];$w2_tue_m_4 = $_POST["w2_tue_m_4"];
$w2_tue_l_1 = $_POST["w2_tue_l_1"];$w2_tue_l_2 = $_POST["w2_tue_l_2"];$w2_tue_l_3 = $_POST["w2_tue_l_3"];$w2_tue_l_4 = $_POST["w2_tue_l_4"];
$w2_tue_t_1 = $_POST["w2_tue_t_1"];$w2_tue_t_2 = $_POST["w2_tue_t_2"];$w2_tue_t_3 = $_POST["w2_tue_t_3"];$w2_tue_t_4 = $_POST["w2_tue_t_4"];

$w2_wed_h_1 = $_POST["w2_wed_h_1"];$w2_wed_h_2 = $_POST["w2_wed_h_2"];$w2_wed_h_3 = $_POST["w2_wed_h_3"];$w2_wed_h_4 = $_POST["w2_wed_h_4"];
$w2_wed_m_1 = $_POST["w2_wed_m_1"];$w2_wed_m_2 = $_POST["w2_wed_m_2"];$w2_wed_m_3 = $_POST["w2_wed_m_3"];$w2_wed_m_4 = $_POST["w2_wed_m_4"];
$w2_wed_l_1 = $_POST["w2_wed_l_1"];$w2_wed_l_2 = $_POST["w2_wed_l_2"];$w2_wed_l_3 = $_POST["w2_wed_l_3"];$w2_wed_l_4 = $_POST["w2_wed_l_4"];
$w2_wed_t_1 = $_POST["w2_wed_t_1"];$w2_wed_t_2 = $_POST["w2_wed_t_2"];$w2_wed_t_3 = $_POST["w2_wed_t_3"];$w2_wed_t_4 = $_POST["w2_wed_t_4"];

$w2_thu_h_1 = $_POST["w2_thu_h_1"];$w2_thu_h_2 = $_POST["w2_thu_h_2"];$w2_thu_h_3 = $_POST["w2_thu_h_3"];$w2_thu_h_4 = $_POST["w2_thu_h_4"];
$w2_thu_m_1 = $_POST["w2_thu_m_1"];$w2_thu_m_2 = $_POST["w2_thu_m_2"];$w2_thu_m_3 = $_POST["w2_thu_m_3"];$w2_thu_m_4 = $_POST["w2_thu_m_4"];
$w2_thu_l_1 = $_POST["w2_thu_l_1"];$w2_thu_l_2 = $_POST["w2_thu_l_2"];$w2_thu_l_3 = $_POST["w2_thu_l_3"];$w2_thu_l_4 = $_POST["w2_thu_l_4"];
$w2_thu_t_1 = $_POST["w2_thu_t_1"];$w2_thu_t_2 = $_POST["w2_thu_t_2"];$w2_thu_t_3 = $_POST["w2_thu_t_3"];$w2_thu_t_4 = $_POST["w2_thu_t_4"];

$w2_fri_h_1 = $_POST["w2_fri_h_1"];$w2_fri_h_2 = $_POST["w2_fri_h_2"];$w2_fri_h_3 = $_POST["w2_fri_h_3"];$w2_fri_h_4 = $_POST["w2_fri_h_4"];
$w2_fri_m_1 = $_POST["w2_fri_m_1"];$w2_fri_m_2 = $_POST["w2_fri_m_2"];$w2_fri_m_3 = $_POST["w2_fri_m_3"];$w2_fri_m_4 = $_POST["w2_fri_m_4"];
$w2_fri_l_1 = $_POST["w2_fri_l_1"];$w2_fri_l_2 = $_POST["w2_fri_l_2"];$w2_fri_l_3 = $_POST["w2_fri_l_3"];$w2_fri_l_4 = $_POST["w2_fri_l_4"];
$w2_fri_t_1 = $_POST["w2_fri_t_1"];$w2_fri_t_2 = $_POST["w2_fri_t_2"];$w2_fri_t_3 = $_POST["w2_fri_t_3"];$w2_fri_t_4 = $_POST["w2_fri_t_4"];

$w2_sat_h_1 = $_POST["w2_sat_h_1"];$w2_sat_h_2 = $_POST["w2_sat_h_2"];$w2_sat_h_3 = $_POST["w2_sat_h_3"];$w2_sat_h_4 = $_POST["w2_sat_h_4"];
$w2_sat_m_1 = $_POST["w2_sat_m_1"];$w2_sat_m_2 = $_POST["w2_sat_m_2"];$w2_sat_m_3 = $_POST["w2_sat_m_3"];$w2_sat_m_4 = $_POST["w2_sat_m_4"];
$w2_sat_l_1 = $_POST["w2_sat_l_1"];$w2_sat_l_2 = $_POST["w2_sat_l_2"];$w2_sat_l_3 = $_POST["w2_sat_l_3"];$w2_sat_l_4 = $_POST["w2_sat_l_4"];
$w2_sat_t_1 = $_POST["w2_sat_t_1"];$w2_sat_t_2 = $_POST["w2_sat_t_2"];$w2_sat_t_3 = $_POST["w2_sat_t_3"];$w2_sat_t_4 = $_POST["w2_sat_t_4"];

$week_2_ary = array();

$week_2_ary[0]  = $w2_sun_h_1;  $week_2_ary[1]  = $w2_sun_m_1;  $week_2_ary[2]  = $w2_sun_l_1;  $week_2_ary[3]  = $w2_sun_t_1;
$week_2_ary[4]  = $w2_sun_h_2;  $week_2_ary[5]  = $w2_sun_m_2;  $week_2_ary[6]  = $w2_sun_l_2;  $week_2_ary[7]  = $w2_sun_t_2;
$week_2_ary[8]  = $w2_sun_h_3;  $week_2_ary[9]  = $w2_sun_m_3;  $week_2_ary[10] = $w2_sun_l_3;  $week_2_ary[11] = $w2_sun_t_3;
$week_2_ary[12] = $w2_sun_h_4;  $week_2_ary[13] = $w2_sun_m_4;  $week_2_ary[14] = $w2_sun_l_4;  $week_2_ary[15] = $w2_sun_t_4;

$week_2_ary[16]  = $w2_mon_h_1;  $week_2_ary[17]  = $w2_mon_m_1;  $week_2_ary[18]  = $w2_mon_l_1;  $week_2_ary[19]  = $w2_mon_t_1;
$week_2_ary[20]  = $w2_mon_h_2;  $week_2_ary[21]  = $w2_mon_m_2;  $week_2_ary[22]  = $w2_mon_l_2;  $week_2_ary[23]  = $w2_mon_t_2;
$week_2_ary[24]  = $w2_mon_h_3;  $week_2_ary[25]  = $w2_mon_m_3;  $week_2_ary[26]  = $w2_mon_l_3;  $week_2_ary[27]  = $w2_mon_t_3;
$week_2_ary[28]  = $w2_mon_h_4;  $week_2_ary[29]  = $w2_mon_m_4;  $week_2_ary[30]  = $w2_mon_l_4;  $week_2_ary[31]  = $w2_mon_t_4;

$week_2_ary[32]  = $w2_tue_h_1;  $week_2_ary[33]  = $w2_tue_m_1;  $week_2_ary[34]  = $w2_tue_l_1;  $week_2_ary[35]  = $w2_tue_t_1;
$week_2_ary[36]  = $w2_tue_h_2;  $week_2_ary[37]  = $w2_tue_m_2;  $week_2_ary[38]  = $w2_tue_l_2;  $week_2_ary[39]  = $w2_tue_t_2;
$week_2_ary[40]  = $w2_tue_h_3;  $week_2_ary[41]  = $w2_tue_m_3;  $week_2_ary[42]  = $w2_tue_l_3;  $week_2_ary[43]  = $w2_tue_t_3;
$week_2_ary[44]  = $w2_tue_h_4;  $week_2_ary[45]  = $w2_tue_m_4;  $week_2_ary[46]  = $w2_tue_l_4;  $week_2_ary[47]  = $w2_tue_t_4;

$week_2_ary[48]  = $w2_wed_h_1;  $week_2_ary[49]  = $w2_wed_m_1;  $week_2_ary[50]  = $w2_wed_l_1;  $week_2_ary[51]  = $w2_wed_t_1;
$week_2_ary[52]  = $w2_wed_h_2;  $week_2_ary[53]  = $w2_wed_m_2;  $week_2_ary[54]  = $w2_wed_l_2;  $week_2_ary[55]  = $w2_wed_t_2;
$week_2_ary[56]  = $w2_wed_h_3;  $week_2_ary[57]  = $w2_wed_m_3;  $week_2_ary[58]  = $w2_wed_l_3;  $week_2_ary[59]  = $w2_wed_t_3;
$week_2_ary[60]  = $w2_wed_h_4;  $week_2_ary[61]  = $w2_wed_m_4;  $week_2_ary[62]  = $w2_wed_l_4;  $week_2_ary[63]  = $w2_wed_t_4;

$week_2_ary[64]  = $w2_thu_h_1;  $week_2_ary[65]  = $w2_thu_m_1;  $week_2_ary[66]  = $w2_thu_l_1;  $week_2_ary[67]  = $w2_thu_t_1;
$week_2_ary[68]  = $w2_thu_h_2;  $week_2_ary[69]  = $w2_thu_m_2;  $week_2_ary[70]  = $w2_thu_l_2;  $week_2_ary[71]  = $w2_thu_t_2;
$week_2_ary[72]  = $w2_thu_h_3;  $week_2_ary[73]  = $w2_thu_m_3;  $week_2_ary[74]  = $w2_thu_l_3;  $week_2_ary[75]  = $w2_thu_t_3;
$week_2_ary[76]  = $w2_thu_h_4;  $week_2_ary[77]  = $w2_thu_m_4;  $week_2_ary[78]  = $w2_thu_l_4;  $week_2_ary[79]  = $w2_thu_t_4;

$week_2_ary[80]  = $w2_fri_h_1;  $week_2_ary[81]  = $w2_fri_m_1;  $week_2_ary[82]  = $w2_fri_l_1;  $week_2_ary[83]  = $w2_fri_t_1;
$week_2_ary[84]  = $w2_fri_h_2;  $week_2_ary[85]  = $w2_fri_m_2;  $week_2_ary[86]  = $w2_fri_l_2;  $week_2_ary[87]  = $w2_fri_t_2;
$week_2_ary[88]  = $w2_fri_h_3;  $week_2_ary[89]  = $w2_fri_m_3;  $week_2_ary[90]  = $w2_fri_l_3;  $week_2_ary[91]  = $w2_fri_t_3;
$week_2_ary[92]  = $w2_fri_h_4;  $week_2_ary[93]  = $w2_fri_m_4;  $week_2_ary[94]  = $w2_fri_l_4;  $week_2_ary[95]  = $w2_fri_t_4;

$week_2_ary[96]   = $w2_sat_h_1;  $week_2_ary[97]   = $w2_sat_m_1;  $week_2_ary[98]   = $w2_sat_l_1;  $week_2_ary[99]   = $w2_sat_t_1;
$week_2_ary[100]  = $w2_sat_h_2;  $week_2_ary[101]  = $w2_sat_m_2;  $week_2_ary[102]  = $w2_sat_l_2;  $week_2_ary[103]  = $w2_sat_t_2;
$week_2_ary[104]  = $w2_sat_h_3;  $week_2_ary[105]  = $w2_sat_m_3;  $week_2_ary[106]  = $w2_sat_l_3;  $week_2_ary[107]  = $w2_sat_t_3;
$week_2_ary[108]  = $w2_sat_h_4;  $week_2_ary[109]  = $w2_sat_m_4;  $week_2_ary[110]  = $w2_sat_l_4;  $week_2_ary[111]  = $w2_sat_t_4;

// week 3----------------------------------
$w3_sun_h_1 = $_POST["w3_sun_h_1"];$w3_sun_h_2 = $_POST["w3_sun_h_2"];$w3_sun_h_3 = $_POST["w3_sun_h_3"];$w3_sun_h_4 = $_POST["w3_sun_h_4"];
$w3_sun_m_1 = $_POST["w3_sun_m_1"];$w3_sun_m_2 = $_POST["w3_sun_m_2"];$w3_sun_m_3 = $_POST["w3_sun_m_3"];$w3_sun_m_4 = $_POST["w3_sun_m_4"];
$w3_sun_l_1 = $_POST["w3_sun_l_1"];$w3_sun_l_2 = $_POST["w3_sun_l_2"];$w3_sun_l_3 = $_POST["w3_sun_l_3"];$w3_sun_l_4 = $_POST["w3_sun_l_4"];
$w3_sun_t_1 = $_POST["w3_sun_t_1"];$w3_sun_t_2 = $_POST["w3_sun_t_2"];$w3_sun_t_3 = $_POST["w3_sun_t_3"];$w3_sun_t_4 = $_POST["w3_sun_t_4"];

$w3_mon_h_1 = $_POST["w3_mon_h_1"];$w3_mon_h_2 = $_POST["w3_mon_h_2"];$w3_mon_h_3 = $_POST["w3_mon_h_3"];$w3_mon_h_4 = $_POST["w3_mon_h_4"];
$w3_mon_m_1 = $_POST["w3_mon_m_1"];$w3_mon_m_2 = $_POST["w3_mon_m_2"];$w3_mon_m_3 = $_POST["w3_mon_m_3"];$w3_mon_m_4 = $_POST["w3_mon_m_4"];
$w3_mon_l_1 = $_POST["w3_mon_l_1"];$w3_mon_l_2 = $_POST["w3_mon_l_2"];$w3_mon_l_3 = $_POST["w3_mon_l_3"];$w3_mon_l_4 = $_POST["w3_mon_l_4"];
$w3_mon_t_1 = $_POST["w3_mon_t_1"];$w3_mon_t_2 = $_POST["w3_mon_t_2"];$w3_mon_t_3 = $_POST["w3_mon_t_3"];$w3_mon_t_4 = $_POST["w3_mon_t_4"];

$w3_tue_h_1 = $_POST["w3_tue_h_1"];$w3_tue_h_2 = $_POST["w3_tue_h_2"];$w3_tue_h_3 = $_POST["w3_tue_h_3"];$w3_tue_h_4 = $_POST["w3_tue_h_4"];
$w3_tue_m_1 = $_POST["w3_tue_m_1"];$w3_tue_m_2 = $_POST["w3_tue_m_2"];$w3_tue_m_3 = $_POST["w3_tue_m_3"];$w3_tue_m_4 = $_POST["w3_tue_m_4"];
$w3_tue_l_1 = $_POST["w3_tue_l_1"];$w3_tue_l_2 = $_POST["w3_tue_l_2"];$w3_tue_l_3 = $_POST["w3_tue_l_3"];$w3_tue_l_4 = $_POST["w3_tue_l_4"];
$w3_tue_t_1 = $_POST["w3_tue_t_1"];$w3_tue_t_2 = $_POST["w3_tue_t_2"];$w3_tue_t_3 = $_POST["w3_tue_t_3"];$w3_tue_t_4 = $_POST["w3_tue_t_4"];

$w3_wed_h_1 = $_POST["w3_wed_h_1"];$w3_wed_h_2 = $_POST["w3_wed_h_2"];$w3_wed_h_3 = $_POST["w3_wed_h_3"];$w3_wed_h_4 = $_POST["w3_wed_h_4"];
$w3_wed_m_1 = $_POST["w3_wed_m_1"];$w3_wed_m_2 = $_POST["w3_wed_m_2"];$w3_wed_m_3 = $_POST["w3_wed_m_3"];$w3_wed_m_4 = $_POST["w3_wed_m_4"];
$w3_wed_l_1 = $_POST["w3_wed_l_1"];$w3_wed_l_2 = $_POST["w3_wed_l_2"];$w3_wed_l_3 = $_POST["w3_wed_l_3"];$w3_wed_l_4 = $_POST["w3_wed_l_4"];
$w3_wed_t_1 = $_POST["w3_wed_t_1"];$w3_wed_t_2 = $_POST["w3_wed_t_2"];$w3_wed_t_3 = $_POST["w3_wed_t_3"];$w3_wed_t_4 = $_POST["w3_wed_t_4"];

$w3_thu_h_1 = $_POST["w3_thu_h_1"];$w3_thu_h_2 = $_POST["w3_thu_h_2"];$w3_thu_h_3 = $_POST["w3_thu_h_3"];$w3_thu_h_4 = $_POST["w3_thu_h_4"];
$w3_thu_m_1 = $_POST["w3_thu_m_1"];$w3_thu_m_2 = $_POST["w3_thu_m_2"];$w3_thu_m_3 = $_POST["w3_thu_m_3"];$w3_thu_m_4 = $_POST["w3_thu_m_4"];
$w3_thu_l_1 = $_POST["w3_thu_l_1"];$w3_thu_l_2 = $_POST["w3_thu_l_2"];$w3_thu_l_3 = $_POST["w3_thu_l_3"];$w3_thu_l_4 = $_POST["w3_thu_l_4"];
$w3_thu_t_1 = $_POST["w3_thu_t_1"];$w3_thu_t_2 = $_POST["w3_thu_t_2"];$w3_thu_t_3 = $_POST["w3_thu_t_3"];$w3_thu_t_4 = $_POST["w3_thu_t_4"];

$w3_fri_h_1 = $_POST["w3_fri_h_1"];$w3_fri_h_2 = $_POST["w3_fri_h_2"];$w3_fri_h_3 = $_POST["w3_fri_h_3"];$w3_fri_h_4 = $_POST["w3_fri_h_4"];
$w3_fri_m_1 = $_POST["w3_fri_m_1"];$w3_fri_m_2 = $_POST["w3_fri_m_2"];$w3_fri_m_3 = $_POST["w3_fri_m_3"];$w3_fri_m_4 = $_POST["w3_fri_m_4"];
$w3_fri_l_1 = $_POST["w3_fri_l_1"];$w3_fri_l_2 = $_POST["w3_fri_l_2"];$w3_fri_l_3 = $_POST["w3_fri_l_3"];$w3_fri_l_4 = $_POST["w3_fri_l_4"];
$w3_fri_t_1 = $_POST["w3_fri_t_1"];$w3_fri_t_2 = $_POST["w3_fri_t_2"];$w3_fri_t_3 = $_POST["w3_fri_t_3"];$w3_fri_t_4 = $_POST["w3_fri_t_4"];

$w3_sat_h_1 = $_POST["w3_sat_h_1"];$w3_sat_h_2 = $_POST["w3_sat_h_2"];$w3_sat_h_3 = $_POST["w3_sat_h_3"];$w3_sat_h_4 = $_POST["w3_sat_h_4"];
$w3_sat_m_1 = $_POST["w3_sat_m_1"];$w3_sat_m_2 = $_POST["w3_sat_m_2"];$w3_sat_m_3 = $_POST["w3_sat_m_3"];$w3_sat_m_4 = $_POST["w3_sat_m_4"];
$w3_sat_l_1 = $_POST["w3_sat_l_1"];$w3_sat_l_2 = $_POST["w3_sat_l_2"];$w3_sat_l_3 = $_POST["w3_sat_l_3"];$w3_sat_l_4 = $_POST["w3_sat_l_4"];
$w3_sat_t_1 = $_POST["w3_sat_t_1"];$w3_sat_t_2 = $_POST["w3_sat_t_2"];$w3_sat_t_3 = $_POST["w3_sat_t_3"];$w3_sat_t_4 = $_POST["w3_sat_t_4"];

$week_3_ary = array();

$week_3_ary[0]  = $w3_sun_h_1;  $week_3_ary[1]  = $w3_sun_m_1;  $week_3_ary[2]  = $w3_sun_l_1;  $week_3_ary[3]  = $w3_sun_t_1;
$week_3_ary[4]  = $w3_sun_h_2;  $week_3_ary[5]  = $w3_sun_m_2;  $week_3_ary[6]  = $w3_sun_l_2;  $week_3_ary[7]  = $w3_sun_t_2;
$week_3_ary[8]  = $w3_sun_h_3;  $week_3_ary[9]  = $w3_sun_m_3;  $week_3_ary[10] = $w3_sun_l_3;  $week_3_ary[11] = $w3_sun_t_3;
$week_3_ary[12] = $w3_sun_h_4;  $week_3_ary[13] = $w3_sun_m_4;  $week_3_ary[14] = $w3_sun_l_4;  $week_3_ary[15] = $w3_sun_t_4;

$week_3_ary[16]  = $w3_mon_h_1;  $week_3_ary[17]  = $w3_mon_m_1;  $week_3_ary[18]  = $w3_mon_l_1;  $week_3_ary[19]  = $w3_mon_t_1;
$week_3_ary[20]  = $w3_mon_h_2;  $week_3_ary[21]  = $w3_mon_m_2;  $week_3_ary[22]  = $w3_mon_l_2;  $week_3_ary[23]  = $w3_mon_t_2;
$week_3_ary[24]  = $w3_mon_h_3;  $week_3_ary[25]  = $w3_mon_m_3;  $week_3_ary[26]  = $w3_mon_l_3;  $week_3_ary[27]  = $w3_mon_t_3;
$week_3_ary[28]  = $w3_mon_h_4;  $week_3_ary[29]  = $w3_mon_m_4;  $week_3_ary[30]  = $w3_mon_l_4;  $week_3_ary[31]  = $w3_mon_t_4;

$week_3_ary[32]  = $w3_tue_h_1;  $week_3_ary[33]  = $w3_tue_m_1;  $week_3_ary[34]  = $w3_tue_l_1;  $week_3_ary[35]  = $w3_tue_t_1;
$week_3_ary[36]  = $w3_tue_h_2;  $week_3_ary[37]  = $w3_tue_m_2;  $week_3_ary[38]  = $w3_tue_l_2;  $week_3_ary[39]  = $w3_tue_t_2;
$week_3_ary[40]  = $w3_tue_h_3;  $week_3_ary[41]  = $w3_tue_m_3;  $week_3_ary[42]  = $w3_tue_l_3;  $week_3_ary[43]  = $w3_tue_t_3;
$week_3_ary[44]  = $w3_tue_h_4;  $week_3_ary[45]  = $w3_tue_m_4;  $week_3_ary[46]  = $w3_tue_l_4;  $week_3_ary[47]  = $w3_tue_t_4;

$week_3_ary[48]  = $w3_wed_h_1;  $week_3_ary[49]  = $w3_wed_m_1;  $week_3_ary[50]  = $w3_wed_l_1;  $week_3_ary[51]  = $w3_wed_t_1;
$week_3_ary[52]  = $w3_wed_h_2;  $week_3_ary[53]  = $w3_wed_m_2;  $week_3_ary[54]  = $w3_wed_l_2;  $week_3_ary[55]  = $w3_wed_t_2;
$week_3_ary[56]  = $w3_wed_h_3;  $week_3_ary[57]  = $w3_wed_m_3;  $week_3_ary[58]  = $w3_wed_l_3;  $week_3_ary[59]  = $w3_wed_t_3;
$week_3_ary[60]  = $w3_wed_h_4;  $week_3_ary[61]  = $w3_wed_m_4;  $week_3_ary[62]  = $w3_wed_l_4;  $week_3_ary[63]  = $w3_wed_t_4;

$week_3_ary[64]  = $w3_thu_h_1;  $week_3_ary[65]  = $w3_thu_m_1;  $week_3_ary[66]  = $w3_thu_l_1;  $week_3_ary[67]  = $w3_thu_t_1;
$week_3_ary[68]  = $w3_thu_h_2;  $week_3_ary[69]  = $w3_thu_m_2;  $week_3_ary[70]  = $w3_thu_l_2;  $week_3_ary[71]  = $w3_thu_t_2;
$week_3_ary[72]  = $w3_thu_h_3;  $week_3_ary[73]  = $w3_thu_m_3;  $week_3_ary[74]  = $w3_thu_l_3;  $week_3_ary[75]  = $w3_thu_t_3;
$week_3_ary[76]  = $w3_thu_h_4;  $week_3_ary[77]  = $w3_thu_m_4;  $week_3_ary[78]  = $w3_thu_l_4;  $week_3_ary[79]  = $w3_thu_t_4;

$week_3_ary[80]  = $w3_fri_h_1;  $week_3_ary[81]  = $w3_fri_m_1;  $week_3_ary[82]  = $w3_fri_l_1;  $week_3_ary[83]  = $w3_fri_t_1;
$week_3_ary[84]  = $w3_fri_h_2;  $week_3_ary[85]  = $w3_fri_m_2;  $week_3_ary[86]  = $w3_fri_l_2;  $week_3_ary[87]  = $w3_fri_t_2;
$week_3_ary[88]  = $w3_fri_h_3;  $week_3_ary[89]  = $w3_fri_m_3;  $week_3_ary[90]  = $w3_fri_l_3;  $week_3_ary[91]  = $w3_fri_t_3;
$week_3_ary[92]  = $w3_fri_h_4;  $week_3_ary[93]  = $w3_fri_m_4;  $week_3_ary[94]  = $w3_fri_l_4;  $week_3_ary[95]  = $w3_fri_t_4;

$week_3_ary[96]   = $w3_sat_h_1;  $week_3_ary[97]   = $w3_sat_m_1;  $week_3_ary[98]   = $w3_sat_l_1;  $week_3_ary[99]   = $w3_sat_t_1;
$week_3_ary[100]  = $w3_sat_h_2;  $week_3_ary[101]  = $w3_sat_m_2;  $week_3_ary[102]  = $w3_sat_l_2;  $week_3_ary[103]  = $w3_sat_t_2;
$week_3_ary[104]  = $w3_sat_h_3;  $week_3_ary[105]  = $w3_sat_m_3;  $week_3_ary[106]  = $w3_sat_l_3;  $week_3_ary[107]  = $w3_sat_t_3;
$week_3_ary[108]  = $w3_sat_h_4;  $week_3_ary[109]  = $w3_sat_m_4;  $week_3_ary[110]  = $w3_sat_l_4;  $week_3_ary[111]  = $w3_sat_t_4;

// week 4----------------------------------
$w4_sun_h_1 = $_POST["w4_sun_h_1"];$w4_sun_h_2 = $_POST["w4_sun_h_2"];$w4_sun_h_3 = $_POST["w4_sun_h_3"];$w4_sun_h_4 = $_POST["w4_sun_h_4"];
$w4_sun_m_1 = $_POST["w4_sun_m_1"];$w4_sun_m_2 = $_POST["w4_sun_m_2"];$w4_sun_m_3 = $_POST["w4_sun_m_3"];$w4_sun_m_4 = $_POST["w4_sun_m_4"];
$w4_sun_l_1 = $_POST["w4_sun_l_1"];$w4_sun_l_2 = $_POST["w4_sun_l_2"];$w4_sun_l_3 = $_POST["w4_sun_l_3"];$w4_sun_l_4 = $_POST["w4_sun_l_4"];
$w4_sun_t_1 = $_POST["w4_sun_t_1"];$w4_sun_t_2 = $_POST["w4_sun_t_2"];$w4_sun_t_3 = $_POST["w4_sun_t_3"];$w4_sun_t_4 = $_POST["w4_sun_t_4"];

$w4_mon_h_1 = $_POST["w4_mon_h_1"];$w4_mon_h_2 = $_POST["w4_mon_h_2"];$w4_mon_h_3 = $_POST["w4_mon_h_3"];$w4_mon_h_4 = $_POST["w4_mon_h_4"];
$w4_mon_m_1 = $_POST["w4_mon_m_1"];$w4_mon_m_2 = $_POST["w4_mon_m_2"];$w4_mon_m_3 = $_POST["w4_mon_m_3"];$w4_mon_m_4 = $_POST["w4_mon_m_4"];
$w4_mon_l_1 = $_POST["w4_mon_l_1"];$w4_mon_l_2 = $_POST["w4_mon_l_2"];$w4_mon_l_3 = $_POST["w4_mon_l_3"];$w4_mon_l_4 = $_POST["w4_mon_l_4"];
$w4_mon_t_1 = $_POST["w4_mon_t_1"];$w4_mon_t_2 = $_POST["w4_mon_t_2"];$w4_mon_t_3 = $_POST["w4_mon_t_3"];$w4_mon_t_4 = $_POST["w4_mon_t_4"];

$w4_tue_h_1 = $_POST["w4_tue_h_1"];$w4_tue_h_2 = $_POST["w4_tue_h_2"];$w4_tue_h_3 = $_POST["w4_tue_h_3"];$w4_tue_h_4 = $_POST["w4_tue_h_4"];
$w4_tue_m_1 = $_POST["w4_tue_m_1"];$w4_tue_m_2 = $_POST["w4_tue_m_2"];$w4_tue_m_3 = $_POST["w4_tue_m_3"];$w4_tue_m_4 = $_POST["w4_tue_m_4"];
$w4_tue_l_1 = $_POST["w4_tue_l_1"];$w4_tue_l_2 = $_POST["w4_tue_l_2"];$w4_tue_l_3 = $_POST["w4_tue_l_3"];$w4_tue_l_4 = $_POST["w4_tue_l_4"];
$w4_tue_t_1 = $_POST["w4_tue_t_1"];$w4_tue_t_2 = $_POST["w4_tue_t_2"];$w4_tue_t_3 = $_POST["w4_tue_t_3"];$w4_tue_t_4 = $_POST["w4_tue_t_4"];

$w4_wed_h_1 = $_POST["w4_wed_h_1"];$w4_wed_h_2 = $_POST["w4_wed_h_2"];$w4_wed_h_3 = $_POST["w4_wed_h_3"];$w4_wed_h_4 = $_POST["w4_wed_h_4"];
$w4_wed_m_1 = $_POST["w4_wed_m_1"];$w4_wed_m_2 = $_POST["w4_wed_m_2"];$w4_wed_m_3 = $_POST["w4_wed_m_3"];$w4_wed_m_4 = $_POST["w4_wed_m_4"];
$w4_wed_l_1 = $_POST["w4_wed_l_1"];$w4_wed_l_2 = $_POST["w4_wed_l_2"];$w4_wed_l_3 = $_POST["w4_wed_l_3"];$w4_wed_l_4 = $_POST["w4_wed_l_4"];
$w4_wed_t_1 = $_POST["w4_wed_t_1"];$w4_wed_t_2 = $_POST["w4_wed_t_2"];$w4_wed_t_3 = $_POST["w4_wed_t_3"];$w4_wed_t_4 = $_POST["w4_wed_t_4"];

$w4_thu_h_1 = $_POST["w4_thu_h_1"];$w4_thu_h_2 = $_POST["w4_thu_h_2"];$w4_thu_h_3 = $_POST["w4_thu_h_3"];$w4_thu_h_4 = $_POST["w4_thu_h_4"];
$w4_thu_m_1 = $_POST["w4_thu_m_1"];$w4_thu_m_2 = $_POST["w4_thu_m_2"];$w4_thu_m_3 = $_POST["w4_thu_m_3"];$w4_thu_m_4 = $_POST["w4_thu_m_4"];
$w4_thu_l_1 = $_POST["w4_thu_l_1"];$w4_thu_l_2 = $_POST["w4_thu_l_2"];$w4_thu_l_3 = $_POST["w4_thu_l_3"];$w4_thu_l_4 = $_POST["w4_thu_l_4"];
$w4_thu_t_1 = $_POST["w4_thu_t_1"];$w4_thu_t_2 = $_POST["w4_thu_t_2"];$w4_thu_t_3 = $_POST["w4_thu_t_3"];$w4_thu_t_4 = $_POST["w4_thu_t_4"];

$w4_fri_h_1 = $_POST["w4_fri_h_1"];$w4_fri_h_2 = $_POST["w4_fri_h_2"];$w4_fri_h_3 = $_POST["w4_fri_h_3"];$w4_fri_h_4 = $_POST["w4_fri_h_4"];
$w4_fri_m_1 = $_POST["w4_fri_m_1"];$w4_fri_m_2 = $_POST["w4_fri_m_2"];$w4_fri_m_3 = $_POST["w4_fri_m_3"];$w4_fri_m_4 = $_POST["w4_fri_m_4"];
$w4_fri_l_1 = $_POST["w4_fri_l_1"];$w4_fri_l_2 = $_POST["w4_fri_l_2"];$w4_fri_l_3 = $_POST["w4_fri_l_3"];$w4_fri_l_4 = $_POST["w4_fri_l_4"];
$w4_fri_t_1 = $_POST["w4_fri_t_1"];$w4_fri_t_2 = $_POST["w4_fri_t_2"];$w4_fri_t_3 = $_POST["w4_fri_t_3"];$w4_fri_t_4 = $_POST["w4_fri_t_4"];

$w4_sat_h_1 = $_POST["w4_sat_h_1"];$w4_sat_h_2 = $_POST["w4_sat_h_2"];$w4_sat_h_3 = $_POST["w4_sat_h_3"];$w4_sat_h_4 = $_POST["w4_sat_h_4"];
$w4_sat_m_1 = $_POST["w4_sat_m_1"];$w4_sat_m_2 = $_POST["w4_sat_m_2"];$w4_sat_m_3 = $_POST["w4_sat_m_3"];$w4_sat_m_4 = $_POST["w4_sat_m_4"];
$w4_sat_l_1 = $_POST["w4_sat_l_1"];$w4_sat_l_2 = $_POST["w4_sat_l_2"];$w4_sat_l_3 = $_POST["w4_sat_l_3"];$w4_sat_l_4 = $_POST["w4_sat_l_4"];
$w4_sat_t_1 = $_POST["w4_sat_t_1"];$w4_sat_t_2 = $_POST["w4_sat_t_2"];$w4_sat_t_3 = $_POST["w4_sat_t_3"];$w4_sat_t_4 = $_POST["w4_sat_t_4"];

$week_4_ary = array();

$week_4_ary[0]  = $w4_sun_h_1;  $week_4_ary[1]  = $w4_sun_m_1;  $week_4_ary[2]  = $w4_sun_l_1;  $week_4_ary[3]  = $w4_sun_t_1;
$week_4_ary[4]  = $w4_sun_h_2;  $week_4_ary[5]  = $w4_sun_m_2;  $week_4_ary[6]  = $w4_sun_l_2;  $week_4_ary[7]  = $w4_sun_t_2;
$week_4_ary[8]  = $w4_sun_h_3;  $week_4_ary[9]  = $w4_sun_m_3;  $week_4_ary[10] = $w4_sun_l_3;  $week_4_ary[11] = $w4_sun_t_3;
$week_4_ary[12] = $w4_sun_h_4;  $week_4_ary[13] = $w4_sun_m_4;  $week_4_ary[14] = $w4_sun_l_4;  $week_4_ary[15] = $w4_sun_t_4;

$week_4_ary[16]  = $w4_mon_h_1;  $week_4_ary[17]  = $w4_mon_m_1;  $week_4_ary[18]  = $w4_mon_l_1;  $week_4_ary[19]  = $w4_mon_t_1;
$week_4_ary[20]  = $w4_mon_h_2;  $week_4_ary[21]  = $w4_mon_m_2;  $week_4_ary[22]  = $w4_mon_l_2;  $week_4_ary[23]  = $w4_mon_t_2;
$week_4_ary[24]  = $w4_mon_h_3;  $week_4_ary[25]  = $w4_mon_m_3;  $week_4_ary[26]  = $w4_mon_l_3;  $week_4_ary[27]  = $w4_mon_t_3;
$week_4_ary[28]  = $w4_mon_h_4;  $week_4_ary[29]  = $w4_mon_m_4;  $week_4_ary[30]  = $w4_mon_l_4;  $week_4_ary[31]  = $w4_mon_t_4;

$week_4_ary[32]  = $w4_tue_h_1;  $week_4_ary[33]  = $w4_tue_m_1;  $week_4_ary[34]  = $w4_tue_l_1;  $week_4_ary[35]  = $w4_tue_t_1;
$week_4_ary[36]  = $w4_tue_h_2;  $week_4_ary[37]  = $w4_tue_m_2;  $week_4_ary[38]  = $w4_tue_l_2;  $week_4_ary[39]  = $w4_tue_t_2;
$week_4_ary[40]  = $w4_tue_h_3;  $week_4_ary[41]  = $w4_tue_m_3;  $week_4_ary[42]  = $w4_tue_l_3;  $week_4_ary[43]  = $w4_tue_t_3;
$week_4_ary[44]  = $w4_tue_h_4;  $week_4_ary[45]  = $w4_tue_m_4;  $week_4_ary[46]  = $w4_tue_l_4;  $week_4_ary[47]  = $w4_tue_t_4;

$week_4_ary[48]  = $w4_wed_h_1;  $week_4_ary[49]  = $w4_wed_m_1;  $week_4_ary[50]  = $w4_wed_l_1;  $week_4_ary[51]  = $w4_wed_t_1;
$week_4_ary[52]  = $w4_wed_h_2;  $week_4_ary[53]  = $w4_wed_m_2;  $week_4_ary[54]  = $w4_wed_l_2;  $week_4_ary[55]  = $w4_wed_t_2;
$week_4_ary[56]  = $w4_wed_h_3;  $week_4_ary[57]  = $w4_wed_m_3;  $week_4_ary[58]  = $w4_wed_l_3;  $week_4_ary[59]  = $w4_wed_t_3;
$week_4_ary[60]  = $w4_wed_h_4;  $week_4_ary[61]  = $w4_wed_m_4;  $week_4_ary[62]  = $w4_wed_l_4;  $week_4_ary[63]  = $w4_wed_t_4;

$week_4_ary[64]  = $w4_thu_h_1;  $week_4_ary[65]  = $w4_thu_m_1;  $week_4_ary[66]  = $w4_thu_l_1;  $week_4_ary[67]  = $w4_thu_t_1;
$week_4_ary[68]  = $w4_thu_h_2;  $week_4_ary[69]  = $w4_thu_m_2;  $week_4_ary[70]  = $w4_thu_l_2;  $week_4_ary[71]  = $w4_thu_t_2;
$week_4_ary[72]  = $w4_thu_h_3;  $week_4_ary[73]  = $w4_thu_m_3;  $week_4_ary[74]  = $w4_thu_l_3;  $week_4_ary[75]  = $w4_thu_t_3;
$week_4_ary[76]  = $w4_thu_h_4;  $week_4_ary[77]  = $w4_thu_m_4;  $week_4_ary[78]  = $w4_thu_l_4;  $week_4_ary[79]  = $w4_thu_t_4;

$week_4_ary[80]  = $w4_fri_h_1;  $week_4_ary[81]  = $w4_fri_m_1;  $week_4_ary[82]  = $w4_fri_l_1;  $week_4_ary[83]  = $w4_fri_t_1;
$week_4_ary[84]  = $w4_fri_h_2;  $week_4_ary[85]  = $w4_fri_m_2;  $week_4_ary[86]  = $w4_fri_l_2;  $week_4_ary[87]  = $w4_fri_t_2;
$week_4_ary[88]  = $w4_fri_h_3;  $week_4_ary[89]  = $w4_fri_m_3;  $week_4_ary[90]  = $w4_fri_l_3;  $week_4_ary[91]  = $w4_fri_t_3;
$week_4_ary[92]  = $w4_fri_h_4;  $week_4_ary[93]  = $w4_fri_m_4;  $week_4_ary[94]  = $w4_fri_l_4;  $week_4_ary[95]  = $w4_fri_t_4;

$week_4_ary[96]   = $w4_sat_h_1;  $week_4_ary[97]   = $w4_sat_m_1;  $week_4_ary[98]   = $w4_sat_l_1;  $week_4_ary[99]   = $w4_sat_t_1;
$week_4_ary[100]  = $w4_sat_h_2;  $week_4_ary[101]  = $w4_sat_m_2;  $week_4_ary[102]  = $w4_sat_l_2;  $week_4_ary[103]  = $w4_sat_t_2;
$week_4_ary[104]  = $w4_sat_h_3;  $week_4_ary[105]  = $w4_sat_m_3;  $week_4_ary[106]  = $w4_sat_l_3;  $week_4_ary[107]  = $w4_sat_t_3;
$week_4_ary[108]  = $w4_sat_h_4;  $week_4_ary[109]  = $w4_sat_m_4;  $week_4_ary[110]  = $w4_sat_l_4;  $week_4_ary[111]  = $w4_sat_t_4;


// week 5----------------------------------
$w5_sun_h_1 = $_POST["w5_sun_h_1"];$w5_sun_h_2 = $_POST["w5_sun_h_2"];$w5_sun_h_3 = $_POST["w5_sun_h_3"];$w5_sun_h_4 = $_POST["w5_sun_h_4"];
$w5_sun_m_1 = $_POST["w5_sun_m_1"];$w5_sun_m_2 = $_POST["w5_sun_m_2"];$w5_sun_m_3 = $_POST["w5_sun_m_3"];$w5_sun_m_4 = $_POST["w5_sun_m_4"];
$w5_sun_l_1 = $_POST["w5_sun_l_1"];$w5_sun_l_2 = $_POST["w5_sun_l_2"];$w5_sun_l_3 = $_POST["w5_sun_l_3"];$w5_sun_l_4 = $_POST["w5_sun_l_4"];
$w5_sun_t_1 = $_POST["w5_sun_t_1"];$w5_sun_t_2 = $_POST["w5_sun_t_2"];$w5_sun_t_3 = $_POST["w5_sun_t_3"];$w5_sun_t_4 = $_POST["w5_sun_t_4"];

$w5_mon_h_1 = $_POST["w5_mon_h_1"];$w5_mon_h_2 = $_POST["w5_mon_h_2"];$w5_mon_h_3 = $_POST["w5_mon_h_3"];$w5_mon_h_4 = $_POST["w5_mon_h_4"];
$w5_mon_m_1 = $_POST["w5_mon_m_1"];$w5_mon_m_2 = $_POST["w5_mon_m_2"];$w5_mon_m_3 = $_POST["w5_mon_m_3"];$w5_mon_m_4 = $_POST["w5_mon_m_4"];
$w5_mon_l_1 = $_POST["w5_mon_l_1"];$w5_mon_l_2 = $_POST["w5_mon_l_2"];$w5_mon_l_3 = $_POST["w5_mon_l_3"];$w5_mon_l_4 = $_POST["w5_mon_l_4"];
$w5_mon_t_1 = $_POST["w5_mon_t_1"];$w5_mon_t_2 = $_POST["w5_mon_t_2"];$w5_mon_t_3 = $_POST["w5_mon_t_3"];$w5_mon_t_4 = $_POST["w5_mon_t_4"];

$w5_tue_h_1 = $_POST["w5_tue_h_1"];$w5_tue_h_2 = $_POST["w5_tue_h_2"];$w5_tue_h_3 = $_POST["w5_tue_h_3"];$w5_tue_h_4 = $_POST["w5_tue_h_4"];
$w5_tue_m_1 = $_POST["w5_tue_m_1"];$w5_tue_m_2 = $_POST["w5_tue_m_2"];$w5_tue_m_3 = $_POST["w5_tue_m_3"];$w5_tue_m_4 = $_POST["w5_tue_m_4"];
$w5_tue_l_1 = $_POST["w5_tue_l_1"];$w5_tue_l_2 = $_POST["w5_tue_l_2"];$w5_tue_l_3 = $_POST["w5_tue_l_3"];$w5_tue_l_4 = $_POST["w5_tue_l_4"];
$w5_tue_t_1 = $_POST["w5_tue_t_1"];$w5_tue_t_2 = $_POST["w5_tue_t_2"];$w5_tue_t_3 = $_POST["w5_tue_t_3"];$w5_tue_t_4 = $_POST["w5_tue_t_4"];

$w5_wed_h_1 = $_POST["w5_wed_h_1"];$w5_wed_h_2 = $_POST["w5_wed_h_2"];$w5_wed_h_3 = $_POST["w5_wed_h_3"];$w5_wed_h_4 = $_POST["w5_wed_h_4"];
$w5_wed_m_1 = $_POST["w5_wed_m_1"];$w5_wed_m_2 = $_POST["w5_wed_m_2"];$w5_wed_m_3 = $_POST["w5_wed_m_3"];$w5_wed_m_4 = $_POST["w5_wed_m_4"];
$w5_wed_l_1 = $_POST["w5_wed_l_1"];$w5_wed_l_2 = $_POST["w5_wed_l_2"];$w5_wed_l_3 = $_POST["w5_wed_l_3"];$w5_wed_l_4 = $_POST["w5_wed_l_4"];
$w5_wed_t_1 = $_POST["w5_wed_t_1"];$w5_wed_t_2 = $_POST["w5_wed_t_2"];$w5_wed_t_3 = $_POST["w5_wed_t_3"];$w5_wed_t_4 = $_POST["w5_wed_t_4"];

$w5_thu_h_1 = $_POST["w5_thu_h_1"];$w5_thu_h_2 = $_POST["w5_thu_h_2"];$w5_thu_h_3 = $_POST["w5_thu_h_3"];$w5_thu_h_4 = $_POST["w5_thu_h_4"];
$w5_thu_m_1 = $_POST["w5_thu_m_1"];$w5_thu_m_2 = $_POST["w5_thu_m_2"];$w5_thu_m_3 = $_POST["w5_thu_m_3"];$w5_thu_m_4 = $_POST["w5_thu_m_4"];
$w5_thu_l_1 = $_POST["w5_thu_l_1"];$w5_thu_l_2 = $_POST["w5_thu_l_2"];$w5_thu_l_3 = $_POST["w5_thu_l_3"];$w5_thu_l_4 = $_POST["w5_thu_l_4"];
$w5_thu_t_1 = $_POST["w5_thu_t_1"];$w5_thu_t_2 = $_POST["w5_thu_t_2"];$w5_thu_t_3 = $_POST["w5_thu_t_3"];$w5_thu_t_4 = $_POST["w5_thu_t_4"];

$w5_fri_h_1 = $_POST["w5_fri_h_1"];$w5_fri_h_2 = $_POST["w5_fri_h_2"];$w5_fri_h_3 = $_POST["w5_fri_h_3"];$w5_fri_h_4 = $_POST["w5_fri_h_4"];
$w5_fri_m_1 = $_POST["w5_fri_m_1"];$w5_fri_m_2 = $_POST["w5_fri_m_2"];$w5_fri_m_3 = $_POST["w5_fri_m_3"];$w5_fri_m_4 = $_POST["w5_fri_m_4"];
$w5_fri_l_1 = $_POST["w5_fri_l_1"];$w5_fri_l_2 = $_POST["w5_fri_l_2"];$w5_fri_l_3 = $_POST["w5_fri_l_3"];$w5_fri_l_4 = $_POST["w5_fri_l_4"];
$w5_fri_t_1 = $_POST["w5_fri_t_1"];$w5_fri_t_2 = $_POST["w5_fri_t_2"];$w5_fri_t_3 = $_POST["w5_fri_t_3"];$w5_fri_t_4 = $_POST["w5_fri_t_4"];

$w5_sat_h_1 = $_POST["w5_sat_h_1"];$w5_sat_h_2 = $_POST["w5_sat_h_2"];$w5_sat_h_3 = $_POST["w5_sat_h_3"];$w5_sat_h_4 = $_POST["w5_sat_h_4"];
$w5_sat_m_1 = $_POST["w5_sat_m_1"];$w5_sat_m_2 = $_POST["w5_sat_m_2"];$w5_sat_m_3 = $_POST["w5_sat_m_3"];$w5_sat_m_4 = $_POST["w5_sat_m_4"];
$w5_sat_l_1 = $_POST["w5_sat_l_1"];$w5_sat_l_2 = $_POST["w5_sat_l_2"];$w5_sat_l_3 = $_POST["w5_sat_l_3"];$w5_sat_l_4 = $_POST["w5_sat_l_4"];
$w5_sat_t_1 = $_POST["w5_sat_t_1"];$w5_sat_t_2 = $_POST["w5_sat_t_2"];$w5_sat_t_3 = $_POST["w5_sat_t_3"];$w5_sat_t_4 = $_POST["w5_sat_t_4"];

$week_5_ary = array();

$week_5_ary[0]  = $w5_sun_h_1;  $week_5_ary[1]  = $w5_sun_m_1;  $week_5_ary[2]  = $w5_sun_l_1;  $week_5_ary[3]  = $w5_sun_t_1;
$week_5_ary[4]  = $w5_sun_h_2;  $week_5_ary[5]  = $w5_sun_m_2;  $week_5_ary[6]  = $w5_sun_l_2;  $week_5_ary[7]  = $w5_sun_t_2;
$week_5_ary[8]  = $w5_sun_h_3;  $week_5_ary[9]  = $w5_sun_m_3;  $week_5_ary[10] = $w5_sun_l_3;  $week_5_ary[11] = $w5_sun_t_3;
$week_5_ary[12] = $w5_sun_h_4;  $week_5_ary[13] = $w5_sun_m_4;  $week_5_ary[14] = $w5_sun_l_4;  $week_5_ary[15] = $w5_sun_t_4;

$week_5_ary[16]  = $w5_mon_h_1;  $week_5_ary[17]  = $w5_mon_m_1;  $week_5_ary[18]  = $w5_mon_l_1;  $week_5_ary[19]  = $w5_mon_t_1;
$week_5_ary[20]  = $w5_mon_h_2;  $week_5_ary[21]  = $w5_mon_m_2;  $week_5_ary[22]  = $w5_mon_l_2;  $week_5_ary[23]  = $w5_mon_t_2;
$week_5_ary[24]  = $w5_mon_h_3;  $week_5_ary[25]  = $w5_mon_m_3;  $week_5_ary[26]  = $w5_mon_l_3;  $week_5_ary[27]  = $w5_mon_t_3;
$week_5_ary[28]  = $w5_mon_h_4;  $week_5_ary[29]  = $w5_mon_m_4;  $week_5_ary[30]  = $w5_mon_l_4;  $week_5_ary[31]  = $w5_mon_t_4;

$week_5_ary[32]  = $w5_tue_h_1;  $week_5_ary[33]  = $w5_tue_m_1;  $week_5_ary[34]  = $w5_tue_l_1;  $week_5_ary[35]  = $w5_tue_t_1;
$week_5_ary[36]  = $w5_tue_h_2;  $week_5_ary[37]  = $w5_tue_m_2;  $week_5_ary[38]  = $w5_tue_l_2;  $week_5_ary[39]  = $w5_tue_t_2;
$week_5_ary[40]  = $w5_tue_h_3;  $week_5_ary[41]  = $w5_tue_m_3;  $week_5_ary[42]  = $w5_tue_l_3;  $week_5_ary[43]  = $w5_tue_t_3;
$week_5_ary[44]  = $w5_tue_h_4;  $week_5_ary[45]  = $w5_tue_m_4;  $week_5_ary[46]  = $w5_tue_l_4;  $week_5_ary[47]  = $w5_tue_t_4;

$week_5_ary[48]  = $w5_wed_h_1;  $week_5_ary[49]  = $w5_wed_m_1;  $week_5_ary[50]  = $w5_wed_l_1;  $week_5_ary[51]  = $w5_wed_t_1;
$week_5_ary[52]  = $w5_wed_h_2;  $week_5_ary[53]  = $w5_wed_m_2;  $week_5_ary[54]  = $w5_wed_l_2;  $week_5_ary[55]  = $w5_wed_t_2;
$week_5_ary[56]  = $w5_wed_h_3;  $week_5_ary[57]  = $w5_wed_m_3;  $week_5_ary[58]  = $w5_wed_l_3;  $week_5_ary[59]  = $w5_wed_t_3;
$week_5_ary[60]  = $w5_wed_h_4;  $week_5_ary[61]  = $w5_wed_m_4;  $week_5_ary[62]  = $w5_wed_l_4;  $week_5_ary[63]  = $w5_wed_t_4;

$week_5_ary[64]  = $w5_thu_h_1;  $week_5_ary[65]  = $w5_thu_m_1;  $week_5_ary[66]  = $w5_thu_l_1;  $week_5_ary[67]  = $w5_thu_t_1;
$week_5_ary[68]  = $w5_thu_h_2;  $week_5_ary[69]  = $w5_thu_m_2;  $week_5_ary[70]  = $w5_thu_l_2;  $week_5_ary[71]  = $w5_thu_t_2;
$week_5_ary[72]  = $w5_thu_h_3;  $week_5_ary[73]  = $w5_thu_m_3;  $week_5_ary[74]  = $w5_thu_l_3;  $week_5_ary[75]  = $w5_thu_t_3;
$week_5_ary[76]  = $w5_thu_h_4;  $week_5_ary[77]  = $w5_thu_m_4;  $week_5_ary[78]  = $w5_thu_l_4;  $week_5_ary[79]  = $w5_thu_t_4;

$week_5_ary[80]  = $w5_fri_h_1;  $week_5_ary[81]  = $w5_fri_m_1;  $week_5_ary[82]  = $w5_fri_l_1;  $week_5_ary[83]  = $w5_fri_t_1;
$week_5_ary[84]  = $w5_fri_h_2;  $week_5_ary[85]  = $w5_fri_m_2;  $week_5_ary[86]  = $w5_fri_l_2;  $week_5_ary[87]  = $w5_fri_t_2;
$week_5_ary[88]  = $w5_fri_h_3;  $week_5_ary[89]  = $w5_fri_m_3;  $week_5_ary[90]  = $w5_fri_l_3;  $week_5_ary[91]  = $w5_fri_t_3;
$week_5_ary[92]  = $w5_fri_h_4;  $week_5_ary[93]  = $w5_fri_m_4;  $week_5_ary[94]  = $w5_fri_l_4;  $week_5_ary[95]  = $w5_fri_t_4;

$week_5_ary[96]   = $w5_sat_h_1;  $week_5_ary[97]   = $w5_sat_m_1;  $week_5_ary[98]   = $w5_sat_l_1;  $week_5_ary[99]   = $w5_sat_t_1;
$week_5_ary[100]  = $w5_sat_h_2;  $week_5_ary[101]  = $w5_sat_m_2;  $week_5_ary[102]  = $w5_sat_l_2;  $week_5_ary[103]  = $w5_sat_t_2;
$week_5_ary[104]  = $w5_sat_h_3;  $week_5_ary[105]  = $w5_sat_m_3;  $week_5_ary[106]  = $w5_sat_l_3;  $week_5_ary[107]  = $w5_sat_t_3;
$week_5_ary[108]  = $w5_sat_h_4;  $week_5_ary[109]  = $w5_sat_m_4;  $week_5_ary[110]  = $w5_sat_l_4;  $week_5_ary[111]  = $w5_sat_t_4;

// week 6----------------------------------
$w6_sun_h_1 = $_POST["w6_sun_h_1"];$w6_sun_h_2 = $_POST["w6_sun_h_2"];$w6_sun_h_3 = $_POST["w6_sun_h_3"];$w6_sun_h_4 = $_POST["w6_sun_h_4"];
$w6_sun_m_1 = $_POST["w6_sun_m_1"];$w6_sun_m_2 = $_POST["w6_sun_m_2"];$w6_sun_m_3 = $_POST["w6_sun_m_3"];$w6_sun_m_4 = $_POST["w6_sun_m_4"];
$w6_sun_l_1 = $_POST["w6_sun_l_1"];$w6_sun_l_2 = $_POST["w6_sun_l_2"];$w6_sun_l_3 = $_POST["w6_sun_l_3"];$w6_sun_l_4 = $_POST["w6_sun_l_4"];
$w6_sun_t_1 = $_POST["w6_sun_t_1"];$w6_sun_t_2 = $_POST["w6_sun_t_2"];$w6_sun_t_3 = $_POST["w6_sun_t_3"];$w6_sun_t_4 = $_POST["w6_sun_t_4"];

$w6_mon_h_1 = $_POST["w6_mon_h_1"];$w6_mon_h_2 = $_POST["w6_mon_h_2"];$w6_mon_h_3 = $_POST["w6_mon_h_3"];$w6_mon_h_4 = $_POST["w6_mon_h_4"];
$w6_mon_m_1 = $_POST["w6_mon_m_1"];$w6_mon_m_2 = $_POST["w6_mon_m_2"];$w6_mon_m_3 = $_POST["w6_mon_m_3"];$w6_mon_m_4 = $_POST["w6_mon_m_4"];
$w6_mon_l_1 = $_POST["w6_mon_l_1"];$w6_mon_l_2 = $_POST["w6_mon_l_2"];$w6_mon_l_3 = $_POST["w6_mon_l_3"];$w6_mon_l_4 = $_POST["w6_mon_l_4"];
$w6_mon_t_1 = $_POST["w6_mon_t_1"];$w6_mon_t_2 = $_POST["w6_mon_t_2"];$w6_mon_t_3 = $_POST["w6_mon_t_3"];$w6_mon_t_4 = $_POST["w6_mon_t_4"];

$w6_tue_h_1 = $_POST["w6_tue_h_1"];$w6_tue_h_2 = $_POST["w6_tue_h_2"];$w6_tue_h_3 = $_POST["w6_tue_h_3"];$w6_tue_h_4 = $_POST["w6_tue_h_4"];
$w6_tue_m_1 = $_POST["w6_tue_m_1"];$w6_tue_m_2 = $_POST["w6_tue_m_2"];$w6_tue_m_3 = $_POST["w6_tue_m_3"];$w6_tue_m_4 = $_POST["w6_tue_m_4"];
$w6_tue_l_1 = $_POST["w6_tue_l_1"];$w6_tue_l_2 = $_POST["w6_tue_l_2"];$w6_tue_l_3 = $_POST["w6_tue_l_3"];$w6_tue_l_4 = $_POST["w6_tue_l_4"];
$w6_tue_t_1 = $_POST["w6_tue_t_1"];$w6_tue_t_2 = $_POST["w6_tue_t_2"];$w6_tue_t_3 = $_POST["w6_tue_t_3"];$w6_tue_t_4 = $_POST["w6_tue_t_4"];

$week_6_ary = array();

$week_6_ary[0]  = $w6_sun_h_1;  $week_6_ary[1]  = $w6_sun_m_1;  $week_6_ary[2]  = $w6_sun_l_1;  $week_6_ary[3]  = $w6_sun_t_1;
$week_6_ary[4]  = $w6_sun_h_2;  $week_6_ary[5]  = $w6_sun_m_2;  $week_6_ary[6]  = $w6_sun_l_2;  $week_6_ary[7]  = $w6_sun_t_2;
$week_6_ary[8]  = $w6_sun_h_3;  $week_6_ary[9]  = $w6_sun_m_3;  $week_6_ary[10] = $w6_sun_l_3;  $week_6_ary[11] = $w6_sun_t_3;
$week_6_ary[12] = $w6_sun_h_4;  $week_6_ary[13] = $w6_sun_m_4;  $week_6_ary[14] = $w6_sun_l_4;  $week_6_ary[15] = $w6_sun_t_4;

$week_6_ary[16]  = $w6_mon_h_1;  $week_6_ary[17]  = $w6_mon_m_1;  $week_6_ary[18]  = $w6_mon_l_1;  $week_6_ary[19]  = $w6_mon_t_1;
$week_6_ary[20]  = $w6_mon_h_2;  $week_6_ary[21]  = $w6_mon_m_2;  $week_6_ary[22]  = $w6_mon_l_2;  $week_6_ary[23]  = $w6_mon_t_2;
$week_6_ary[24]  = $w6_mon_h_3;  $week_6_ary[25]  = $w6_mon_m_3;  $week_6_ary[26]  = $w6_mon_l_3;  $week_6_ary[27]  = $w6_mon_t_3;
$week_6_ary[28]  = $w6_mon_h_4;  $week_6_ary[29]  = $w6_mon_m_4;  $week_6_ary[30]  = $w6_mon_l_4;  $week_6_ary[31]  = $w6_mon_t_4;

$week_6_ary[32]  = $w6_tue_h_1;  $week_6_ary[33]  = $w6_tue_m_1;  $week_6_ary[34]  = $w6_tue_l_1;  $week_6_ary[35]  = $w6_tue_t_1;
$week_6_ary[36]  = $w6_tue_h_2;  $week_6_ary[37]  = $w6_tue_m_2;  $week_6_ary[38]  = $w6_tue_l_2;  $week_6_ary[39]  = $w6_tue_t_2;
$week_6_ary[40]  = $w6_tue_h_3;  $week_6_ary[41]  = $w6_tue_m_3;  $week_6_ary[42]  = $w6_tue_l_3;  $week_6_ary[43]  = $w6_tue_t_3;
$week_6_ary[44]  = $w6_tue_h_4;  $week_6_ary[45]  = $w6_tue_m_4;  $week_6_ary[46]  = $w6_tue_l_4;  $week_6_ary[47]  = $w6_tue_t_4;



$sql = "SELECT * FROM `batches` WHERE id =1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    if($row = $result->fetch_assoc())
    {
        if ($batch == "")
        {
            echo "batchname is null";
        }
        else if ($row["B1"] == $batch)
        {
            $sql1 = "SELECT * FROM `schb1` WHERE `schb1`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                updatedata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
            else
            {
                insertdata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
        }
        else if ($row["B2"] == $batch)
        {
            $sql1 = "SELECT * FROM `schb2` WHERE `schb2`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                updatedata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
            else
            {
                insertdata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
        }
        else if ($row["B3"] == $batch)
        {
            $sql1 = "SELECT * FROM `schb3` WHERE `schb3`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                updatedata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
            else
            {
                insertdata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
        }
        else if ($row["B4"] == $batch)
        {
            $sql1 = "SELECT * FROM `schb4` WHERE `schb4`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                updatedata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
            else
            {
                insertdata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
        }
        else if ($row["B5"] == $batch)
        {
            $sql1 = "SELECT * FROM `schb5` WHERE `schb5`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                updatedata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
            else
            {
                insertdata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
        }
        else if ($row["B6"] == $batch)
        {
            $sql1 = "SELECT * FROM `schb6` WHERE `schb6`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                updatedata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
            else
            {
                insertdata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
        }
        else if ($row["B7"] == $batch)
        {
            $sql1 = "SELECT * FROM `schb7` WHERE `schb7`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                updatedata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
            else
            {
                insertdata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
        }
        else if ($row["B8"] == $batch)
        {
            $sql1 = "SELECT * FROM `schb8` WHERE `schb8`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                updatedata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
            else
            {
                insertdata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
        }
        else if ($row["B9"] == $batch)
        {
            $sql1 = "SELECT * FROM `schb9` WHERE `schb9`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                updatedata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
            else
            {
                insertdata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
        }
        else if ($row["B10"] == $batch)
        {
            $sql1 = "SELECT * FROM `schb10` WHERE `schb10`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                updatedata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
            else
            {
                insertdata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
        }
        else if ($row["B11"] == $batch)
        {
            $sql1 = "SELECT * FROM `schb11` WHERE `schb11`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                updatedata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
            else
            {
                insertdata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
        }
        else if ($row["B12"] == $batch)
        {
            $sql1 = "SELECT * FROM `schb12` WHERE `schb12`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                updatedata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
            else
            {
                insertdata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn);
            }
        }
        else
        {

        }

    }
}
                    
}


//START OF THE "insertdata" FUNCTION\\
function insertdata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn)// find table according to batch name
{
    $sql = "SELECT * FROM `batches` WHERE id =1";
    $result = $conn->query($sql);

    if ($week == "W1")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";
                    insertdataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb2";
                    insertdataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "schb3";
                    insertdataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";
                    insertdataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                    insertdataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                    insertdataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                    insertdataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                    insertdataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                    insertdataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                    insertdataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                    insertdataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                    insertdataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else{}
            }
        else
        {
            echo "Error";
        }
        } else {
            echo "0 results";
        }
    }
    elseif ($week == "W2")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";
                    insertdataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb2";
                    insertdataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "schb3";
                    insertdataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";
                    insertdataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                    insertdataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                    insertdataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                    insertdataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                    insertdataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                    insertdataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                    insertdataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                    insertdataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                    insertdataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else{}
            }
        else
        {
            echo "Error";
        }
        } else {
            echo "0 results";
        }
    }
    elseif ($week == "W3")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";
                    insertdataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb2";
                    insertdataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "schb3";
                    insertdataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";
                    insertdataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                    insertdataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                    insertdataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                    insertdataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                    insertdataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                    insertdataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                    insertdataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                    insertdataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                    insertdataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else{}
            }
        else
        {
            echo "Error";
        }
        } else {
            echo "0 results";
        }
    }
    elseif ($week == "W4")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";
                    insertdataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb2";
                    insertdataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "schb3";
                    insertdataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";
                    insertdataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                    insertdataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                    insertdataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                    insertdataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                    insertdataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                    insertdataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                    insertdataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                    insertdataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                    insertdataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else{}
            }
        else
        {
            echo "Error";
        }
        } else {
            echo "0 results";
        }
    }
    elseif ($week == "W5")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";
                    insertdataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb2";
                    insertdataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "schb3";
                    insertdataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";
                    insertdataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                    insertdataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                    insertdataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                    insertdataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                    insertdataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                    insertdataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                    insertdataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                    insertdataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                    insertdataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else{}
            }
        else
        {
            echo "Error";
        }
        } else {
            echo "0 results";
        }
    }
    elseif ($week == "W6")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";
                    insertdataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb3";
                    insertdataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "    schb2";
                    insertdataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";
                    insertdataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                    insertdataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                    insertdataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                    insertdataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                    insertdataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                    insertdataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                    insertdataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                    insertdataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                    insertdataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else{}
            }
        else
        {
            echo "Error";
        }
        } else {
            echo "0 results";
        }
    }
    else{}
}

 function insertdataw1($year,$month,$week,$week_1_ary,$tbn,$conn)
{
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = array(); 
    // sunday
    $sql[0] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_1', '$week_1_ary[0]', '$week_1_ary[1]','$week_1_ary[2]', '$week_1_ary[3]', 'sunday','$week', '$month', '$year');";
    $sql[1] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_2', '$week_1_ary[4]', '$week_1_ary[5]','$week_1_ary[6]', '$week_1_ary[7]', 'sunday','$week', '$month', '$year');";
    $sql[2] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_3', '$week_1_ary[8]', '$week_1_ary[9]','$week_1_ary[10]', '$week_1_ary[11]', 'sunday','$week', '$month', '$year');";
    $sql[3] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_4', '$week_1_ary[12]', '$week_1_ary[13]','$week_1_ary[14]', '$week_1_ary[15]', 'sunday','$week', '$month', '$year');";
    // monday
    $sql[4] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_1', '$week_1_ary[16]', '$week_1_ary[17]','$week_1_ary[18]', '$week_1_ary[19]', 'monday','$week', '$month', '$year');";
    $sql[5] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_2', '$week_1_ary[20]', '$week_1_ary[21]','$week_1_ary[22]', '$week_1_ary[23]', 'monday','$week', '$month', '$year');";
    $sql[6] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_3', '$week_1_ary[24]', '$week_1_ary[25]','$week_1_ary[26]', '$week_1_ary[27]', 'monday','$week', '$month', '$year');";
    $sql[7] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_4', '$week_1_ary[28]', '$week_1_ary[29]','$week_1_ary[30]', '$week_1_ary[31]', 'monday','$week', '$month', '$year');";
    // tuesday
    $sql[8] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_1', '$week_1_ary[32]', '$week_1_ary[33]','$week_1_ary[34]', '$week_1_ary[35]', 'tuesday','$week', '$month', '$year');";
    $sql[9] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_2', '$week_1_ary[36]', '$week_1_ary[37]','$week_1_ary[38]', '$week_1_ary[39]', 'tuesday','$week', '$month', '$year');";
    $sql[10] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_3', '$week_1_ary[40]', '$week_1_ary[41]','$week_1_ary[42]', '$week_1_ary[43]', 'tuesday','$week', '$month', '$year');";
    $sql[11] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_4', '$week_1_ary[44]', '$week_1_ary[45]','$week_1_ary[46]', '$week_1_ary[47]', 'tuesday','$week', '$month', '$year');";
    // wednesday
    $sql[12] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_1', '$week_1_ary[48]', '$week_1_ary[49]','$week_1_ary[50]', '$week_1_ary[51]', 'wednesday','$week', '$month', '$year');";
    $sql[13] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_2', '$week_1_ary[52]', '$week_1_ary[53]','$week_1_ary[54]', '$week_1_ary[55]', 'wednesday','$week', '$month', '$year');";
    $sql[14] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_3', '$week_1_ary[56]', '$week_1_ary[57]','$week_1_ary[58]', '$week_1_ary[59]', 'wednesday','$week', '$month', '$year');";
    $sql[15] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_4', '$week_1_ary[60]', '$week_1_ary[61]','$week_1_ary[62]', '$week_1_ary[63]', 'wednesday','$week', '$month', '$year');";
    // thursday
    $sql[16] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_1', '$week_1_ary[64]', '$week_1_ary[65]','$week_1_ary[66]', '$week_1_ary[67]', 'thursday','$week', '$month', '$year');";
    $sql[17] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_2', '$week_1_ary[68]', '$week_1_ary[69]','$week_1_ary[70]', '$week_1_ary[71]', 'thursday','$week', '$month', '$year');";
    $sql[18] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_3', '$week_1_ary[72]', '$week_1_ary[73]','$week_1_ary[74]', '$week_1_ary[75]', 'thursday','$week', '$month', '$year');";
    $sql[19] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_4', '$week_1_ary[76]', '$week_1_ary[77]','$week_1_ary[78]', '$week_1_ary[79]', 'thursday','$week', '$month', '$year');";
    // friday
    $sql[20] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_1', '$week_1_ary[80]', '$week_1_ary[81]','$week_1_ary[82]', '$week_1_ary[83]', 'friday','$week', '$month', '$year');";
    $sql[21] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_2', '$week_1_ary[84]', '$week_1_ary[85]','$week_1_ary[86]', '$week_1_ary[87]', 'friday','$week', '$month', '$year');";
    $sql[22] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_3', '$week_1_ary[88]', '$week_1_ary[89]','$week_1_ary[90]', '$week_1_ary[91]', 'friday','$week', '$month', '$year');";
    $sql[23] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_4', '$week_1_ary[92]', '$week_1_ary[93]','$week_1_ary[94]', '$week_1_ary[95]', 'friday','$week', '$month', '$year');";
    // saturday
    $sql[24] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_1', '$week_1_ary[96]', '$week_1_ary[97]','$week_1_ary[98]', '$week_1_ary[99]', 'saturday','$week', '$month', '$year');";
    $sql[25] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_2', '$week_1_ary[100]', '$week_1_ary[101]','$week_1_ary[102]', '$week_1_ary[103]', 'saturday','$week', '$month', '$year');";
    $sql[26] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_3', '$week_1_ary[104]', '$week_1_ary[105]','$week_1_ary[106]', '$week_1_ary[107]', 'saturday','$week', '$month', '$year');";
    $sql[27] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_4', '$week_1_ary[108]', '$week_1_ary[109]','$week_1_ary[110]', '$week_1_ary[111]', 'saturday','$week', '$month', '$year');";


    for ($i=0; $i < 28 ; $i++) { 
        if ($conn->query($sql[$i]) === TRUE) {
            
            
        } else {
            echo "Error: " . $sql[$i] . "<br>" . $conn->error;
        }
    }
    echo '<script>document.getElementById("insert_alert").innerHTML = "insetr kalrallllllllaaaa";</script>';
    $conn->close();
}
function insertdataw2($year,$month,$week,$week_2_ary,$tbn,$conn)
{
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = array(); 
    // sunday
    $sql[0] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_1', '$week_2_ary[0]', '$week_2_ary[1]','$week_2_ary[2]', '$week_2_ary[3]', 'sunday','$week', '$month', '$year');";
    $sql[1] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_2', '$week_2_ary[4]', '$week_2_ary[5]','$week_2_ary[6]', '$week_2_ary[7]', 'sunday','$week', '$month', '$year');";
    $sql[2] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_3', '$week_2_ary[8]', '$week_2_ary[9]','$week_2_ary[10]', '$week_2_ary[11]', 'sunday','$week', '$month', '$year');";
    $sql[3] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_4', '$week_2_ary[12]', '$week_2_ary[13]','$week_2_ary[14]', '$week_2_ary[15]', 'sunday','$week', '$month', '$year');";
    // monday
    $sql[4] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_1', '$week_2_ary[16]', '$week_2_ary[17]','$week_2_ary[18]', '$week_2_ary[19]', 'monday','$week', '$month', '$year');";
    $sql[5] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_2', '$week_2_ary[20]', '$week_2_ary[21]','$week_2_ary[22]', '$week_2_ary[23]', 'monday','$week', '$month', '$year');";
    $sql[6] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_3', '$week_2_ary[24]', '$week_2_ary[25]','$week_2_ary[26]', '$week_2_ary[27]', 'monday','$week', '$month', '$year');";
    $sql[7] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_4', '$week_2_ary[28]', '$week_2_ary[29]','$week_2_ary[30]', '$week_2_ary[31]', 'monday','$week', '$month', '$year');";
    // tuesday
    $sql[8] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_1', '$week_2_ary[32]', '$week_2_ary[33]','$week_2_ary[34]', '$week_2_ary[35]', 'tuesday','$week', '$month', '$year');";
    $sql[9] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_2', '$week_2_ary[36]', '$week_2_ary[37]','$week_2_ary[38]', '$week_2_ary[39]', 'tuesday','$week', '$month', '$year');";
    $sql[10] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_3', '$week_2_ary[40]', '$week_2_ary[41]','$week_2_ary[42]', '$week_2_ary[43]', 'tuesday','$week', '$month', '$year');";
    $sql[11] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_4', '$week_2_ary[44]', '$week_2_ary[45]','$week_2_ary[46]', '$week_2_ary[47]', 'tuesday','$week', '$month', '$year');";
    // wednesday
    $sql[12] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_1', '$week_2_ary[48]', '$week_2_ary[49]','$week_2_ary[50]', '$week_2_ary[51]', 'wednesday','$week', '$month', '$year');";
    $sql[13] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_2', '$week_2_ary[52]', '$week_2_ary[53]','$week_2_ary[54]', '$week_2_ary[55]', 'wednesday','$week', '$month', '$year');";
    $sql[14] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_3', '$week_2_ary[56]', '$week_2_ary[57]','$week_2_ary[58]', '$week_2_ary[59]', 'wednesday','$week', '$month', '$year');";
    $sql[15] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_4', '$week_2_ary[60]', '$week_2_ary[61]','$week_2_ary[62]', '$week_2_ary[63]', 'wednesday','$week', '$month', '$year');";
    // thursday
    $sql[16] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_1', '$week_2_ary[64]', '$week_2_ary[65]','$week_2_ary[66]', '$week_2_ary[67]', 'thursday','$week', '$month', '$year');";
    $sql[17] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_2', '$week_2_ary[68]', '$week_2_ary[69]','$week_2_ary[70]', '$week_2_ary[71]', 'thursday','$week', '$month', '$year');";
    $sql[18] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_3', '$week_2_ary[72]', '$week_2_ary[73]','$week_2_ary[74]', '$week_2_ary[75]', 'thursday','$week', '$month', '$year');";
    $sql[19] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_4', '$week_2_ary[76]', '$week_2_ary[77]','$week_2_ary[78]', '$week_2_ary[79]', 'thursday','$week', '$month', '$year');";
    // friday
    $sql[20] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_1', '$week_2_ary[80]', '$week_2_ary[81]','$week_2_ary[82]', '$week_2_ary[83]', 'friday','$week', '$month', '$year');";
    $sql[21] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_2', '$week_2_ary[84]', '$week_2_ary[85]','$week_2_ary[86]', '$week_2_ary[87]', 'friday','$week', '$month', '$year');";
    $sql[22] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_3', '$week_2_ary[88]', '$week_2_ary[89]','$week_2_ary[90]', '$week_2_ary[91]', 'friday','$week', '$month', '$year');";
    $sql[23] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_4', '$week_2_ary[92]', '$week_2_ary[93]','$week_2_ary[94]', '$week_2_ary[95]', 'friday','$week', '$month', '$year');";
    // saturday
    $sql[24] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_1', '$week_2_ary[96]', '$week_2_ary[97]','$week_2_ary[98]', '$week_2_ary[99]', 'saturday','$week', '$month', '$year');";
    $sql[25] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_2', '$week_2_ary[100]', '$week_2_ary[101]','$week_2_ary[102]', '$week_2_ary[103]', 'saturday','$week', '$month', '$year');";
    $sql[26] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_3', '$week_2_ary[104]', '$week_2_ary[105]','$week_2_ary[106]', '$week_2_ary[107]', 'saturday','$week', '$month', '$year');";
    $sql[27] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_4', '$week_2_ary[108]', '$week_2_ary[109]','$week_2_ary[110]', '$week_2_ary[111]', 'saturday','$week', '$month', '$year');";


    for ($i=0; $i < 28 ; $i++) { 
        if ($conn->query($sql[$i]) === TRUE) {
            
            
        } else {
            echo "Error: " . $sql[$i] . "<br>" . $conn->error;
        }
    }
    echo '<script>document.getElementById("insert_alert").innerHTML = "insetr kalrallllllllaaaa";</script>';
    $conn->close();
}
function insertdataw3($year,$month,$week,$week_3_ary,$tbn,$conn)
{
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = array(); 
    // sunday
    $sql[0] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_1', '$week_3_ary[0]', '$week_3_ary[1]','$week_3_ary[2]', '$week_3_ary[3]', 'sunday','$week', '$month', '$year');";
    $sql[1] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_2', '$week_3_ary[4]', '$week_3_ary[5]','$week_3_ary[6]', '$week_3_ary[7]', 'sunday','$week', '$month', '$year');";
    $sql[2] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_3', '$week_3_ary[8]', '$week_3_ary[9]','$week_3_ary[10]', '$week_3_ary[11]', 'sunday','$week', '$month', '$year');";
    $sql[3] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_4', '$week_3_ary[12]', '$week_3_ary[13]','$week_3_ary[14]', '$week_3_ary[15]', 'sunday','$week', '$month', '$year');";
    // monday
    $sql[4] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_1', '$week_3_ary[16]', '$week_3_ary[17]','$week_3_ary[18]', '$week_3_ary[19]', 'monday','$week', '$month', '$year');";
    $sql[5] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_2', '$week_3_ary[20]', '$week_3_ary[21]','$week_3_ary[22]', '$week_3_ary[23]', 'monday','$week', '$month', '$year');";
    $sql[6] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_3', '$week_3_ary[24]', '$week_3_ary[25]','$week_3_ary[26]', '$week_3_ary[27]', 'monday','$week', '$month', '$year');";
    $sql[7] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_4', '$week_3_ary[28]', '$week_3_ary[29]','$week_3_ary[30]', '$week_3_ary[31]', 'monday','$week', '$month', '$year');";
    // tuesday
    $sql[8] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_1', '$week_3_ary[32]', '$week_3_ary[33]','$week_3_ary[34]', '$week_3_ary[35]', 'tuesday','$week', '$month', '$year');";
    $sql[9] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_2', '$week_3_ary[36]', '$week_3_ary[37]','$week_3_ary[38]', '$week_3_ary[39]', 'tuesday','$week', '$month', '$year');";
    $sql[10] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_3', '$week_3_ary[40]', '$week_3_ary[41]','$week_3_ary[42]', '$week_3_ary[43]', 'tuesday','$week', '$month', '$year');";
    $sql[11] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_4', '$week_3_ary[44]', '$week_3_ary[45]','$week_3_ary[46]', '$week_3_ary[47]', 'tuesday','$week', '$month', '$year');";
    // wednesday
    $sql[12] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_1', '$week_3_ary[48]', '$week_3_ary[49]','$week_3_ary[50]', '$week_3_ary[51]', 'wednesday','$week', '$month', '$year');";
    $sql[13] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_2', '$week_3_ary[52]', '$week_3_ary[53]','$week_3_ary[54]', '$week_3_ary[55]', 'wednesday','$week', '$month', '$year');";
    $sql[14] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_3', '$week_3_ary[56]', '$week_3_ary[57]','$week_3_ary[58]', '$week_3_ary[59]', 'wednesday','$week', '$month', '$year');";
    $sql[15] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_4', '$week_3_ary[60]', '$week_3_ary[61]','$week_3_ary[62]', '$week_3_ary[63]', 'wednesday','$week', '$month', '$year');";
    // thursday
    $sql[16] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_1', '$week_3_ary[64]', '$week_3_ary[65]','$week_3_ary[66]', '$week_3_ary[67]', 'thursday','$week', '$month', '$year');";
    $sql[17] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_2', '$week_3_ary[68]', '$week_3_ary[69]','$week_3_ary[70]', '$week_3_ary[71]', 'thursday','$week', '$month', '$year');";
    $sql[18] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_3', '$week_3_ary[72]', '$week_3_ary[73]','$week_3_ary[74]', '$week_3_ary[75]', 'thursday','$week', '$month', '$year');";
    $sql[19] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_4', '$week_3_ary[76]', '$week_3_ary[77]','$week_3_ary[78]', '$week_3_ary[79]', 'thursday','$week', '$month', '$year');";
    // friday
    $sql[20] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_1', '$week_3_ary[80]', '$week_3_ary[81]','$week_3_ary[82]', '$week_3_ary[83]', 'friday','$week', '$month', '$year');";
    $sql[21] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_2', '$week_3_ary[84]', '$week_3_ary[85]','$week_3_ary[86]', '$week_3_ary[87]', 'friday','$week', '$month', '$year');";
    $sql[22] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_3', '$week_3_ary[88]', '$week_3_ary[89]','$week_3_ary[90]', '$week_3_ary[91]', 'friday','$week', '$month', '$year');";
    $sql[23] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_4', '$week_3_ary[92]', '$week_3_ary[93]','$week_3_ary[94]', '$week_3_ary[95]', 'friday','$week', '$month', '$year');";
    // saturday
    $sql[24] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_1', '$week_3_ary[96]', '$week_3_ary[97]','$week_3_ary[98]', '$week_3_ary[99]', 'saturday','$week', '$month', '$year');";
    $sql[25] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_2', '$week_3_ary[100]', '$week_3_ary[101]','$week_3_ary[102]', '$week_3_ary[103]', 'saturday','$week', '$month', '$year');";
    $sql[26] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_3', '$week_3_ary[104]', '$week_3_ary[105]','$week_3_ary[106]', '$week_3_ary[107]', 'saturday','$week', '$month', '$year');";
    $sql[27] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_4', '$week_3_ary[108]', '$week_3_ary[109]','$week_3_ary[110]', '$week_3_ary[111]', 'saturday','$week', '$month', '$year');";


    for ($i=0; $i < 28 ; $i++) { 
        if ($conn->query($sql[$i]) === TRUE) {
            
            
        } else {
            echo "Error: " . $sql[$i] . "<br>" . $conn->error;
        }
    }
    echo '<script>document.getElementById("insert_alert").innerHTML = "insetr kalrallllllllaaaa";</script>';
    $conn->close();
}
function insertdataw4($year,$month,$week,$week_4_ary,$tbn,$conn)
{
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = array(); 
    // sunday
    $sql[0] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_1', '$week_4_ary[0]', '$week_4_ary[1]','$week_4_ary[2]', '$week_4_ary[3]', 'sunday','$week', '$month', '$year');";
    $sql[1] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_2', '$week_4_ary[4]', '$week_4_ary[5]','$week_4_ary[6]', '$week_4_ary[7]', 'sunday','$week', '$month', '$year');";
    $sql[2] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_3', '$week_4_ary[8]', '$week_4_ary[9]','$week_4_ary[10]', '$week_4_ary[11]', 'sunday','$week', '$month', '$year');";
    $sql[3] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_4', '$week_4_ary[12]', '$week_4_ary[13]','$week_4_ary[14]', '$week_4_ary[15]', 'sunday','$week', '$month', '$year');";
    // monday
    $sql[4] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_1', '$week_4_ary[16]', '$week_4_ary[17]','$week_4_ary[18]', '$week_4_ary[19]', 'monday','$week', '$month', '$year');";
    $sql[5] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_2', '$week_4_ary[20]', '$week_4_ary[21]','$week_4_ary[22]', '$week_4_ary[23]', 'monday','$week', '$month', '$year');";
    $sql[6] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_3', '$week_4_ary[24]', '$week_4_ary[25]','$week_4_ary[26]', '$week_4_ary[27]', 'monday','$week', '$month', '$year');";
    $sql[7] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_4', '$week_4_ary[28]', '$week_4_ary[29]','$week_4_ary[30]', '$week_4_ary[31]', 'monday','$week', '$month', '$year');";
    // tuesday
    $sql[8] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_1', '$week_4_ary[32]', '$week_4_ary[33]','$week_4_ary[34]', '$week_4_ary[35]', 'tuesday','$week', '$month', '$year');";
    $sql[9] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_2', '$week_4_ary[36]', '$week_4_ary[37]','$week_4_ary[38]', '$week_4_ary[39]', 'tuesday','$week', '$month', '$year');";
    $sql[10] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_3', '$week_4_ary[40]', '$week_4_ary[41]','$week_4_ary[42]', '$week_4_ary[43]', 'tuesday','$week', '$month', '$year');";
    $sql[11] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_4', '$week_4_ary[44]', '$week_4_ary[45]','$week_4_ary[46]', '$week_4_ary[47]', 'tuesday','$week', '$month', '$year');";
    // wednesday
    $sql[12] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_1', '$week_4_ary[48]', '$week_4_ary[49]','$week_4_ary[50]', '$week_4_ary[51]', 'wednesday','$week', '$month', '$year');";
    $sql[13] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_2', '$week_4_ary[52]', '$week_4_ary[53]','$week_4_ary[54]', '$week_4_ary[55]', 'wednesday','$week', '$month', '$year');";
    $sql[14] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_3', '$week_4_ary[56]', '$week_4_ary[57]','$week_4_ary[58]', '$week_4_ary[59]', 'wednesday','$week', '$month', '$year');";
    $sql[15] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_4', '$week_4_ary[60]', '$week_4_ary[61]','$week_4_ary[62]', '$week_4_ary[63]', 'wednesday','$week', '$month', '$year');";
    // thursday
    $sql[16] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_1', '$week_4_ary[64]', '$week_4_ary[65]','$week_4_ary[66]', '$week_4_ary[67]', 'thursday','$week', '$month', '$year');";
    $sql[17] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_2', '$week_4_ary[68]', '$week_4_ary[69]','$week_4_ary[70]', '$week_4_ary[71]', 'thursday','$week', '$month', '$year');";
    $sql[18] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_3', '$week_4_ary[72]', '$week_4_ary[73]','$week_4_ary[74]', '$week_4_ary[75]', 'thursday','$week', '$month', '$year');";
    $sql[19] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_4', '$week_4_ary[76]', '$week_4_ary[77]','$week_4_ary[78]', '$week_4_ary[79]', 'thursday','$week', '$month', '$year');";
    // friday
    $sql[20] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_1', '$week_4_ary[80]', '$week_4_ary[81]','$week_4_ary[82]', '$week_4_ary[83]', 'friday','$week', '$month', '$year');";
    $sql[21] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_2', '$week_4_ary[84]', '$week_4_ary[85]','$week_4_ary[86]', '$week_4_ary[87]', 'friday','$week', '$month', '$year');";
    $sql[22] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_3', '$week_4_ary[88]', '$week_4_ary[89]','$week_4_ary[90]', '$week_4_ary[91]', 'friday','$week', '$month', '$year');";
    $sql[23] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_4', '$week_4_ary[92]', '$week_4_ary[93]','$week_4_ary[94]', '$week_4_ary[95]', 'friday','$week', '$month', '$year');";
    // saturday
    $sql[24] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_1', '$week_4_ary[96]', '$week_4_ary[97]','$week_4_ary[98]', '$week_4_ary[99]', 'saturday','$week', '$month', '$year');";
    $sql[25] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_2', '$week_4_ary[100]', '$week_4_ary[101]','$week_4_ary[102]', '$week_4_ary[103]', 'saturday','$week', '$month', '$year');";
    $sql[26] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_3', '$week_4_ary[104]', '$week_4_ary[105]','$week_4_ary[106]', '$week_4_ary[107]', 'saturday','$week', '$month', '$year');";
    $sql[27] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_4', '$week_4_ary[108]', '$week_4_ary[109]','$week_4_ary[11]', '$week_4_ary[111]', 'saturday','$week', '$month', '$year');";


    for ($i=0; $i < 28 ; $i++) { 
        if ($conn->query($sql[$i]) === TRUE) {

            
            
        } else {
            echo "Error: " . $sql[$i] . "<br>" . $conn->error;
        }
    }
    echo '<script>document.getElementById("insert_alert").innerHTML = "insetr kalrallllllllaaaa";</script>';
    $conn->close();
}
function insertdataw5($year,$month,$week,$week_5_ary,$tbn,$conn)
{
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = array(); 
    // sunday
    $sql[0] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_1', '$week_5_ary[0]', '$week_5_ary[1]','$week_5_ary[2]', '$week_5_ary[3]', 'sunday','$week', '$month', '$year');";
    $sql[1] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_2', '$week_5_ary[4]', '$week_5_ary[5]','$week_5_ary[6]', '$week_5_ary[7]', 'sunday','$week', '$month', '$year');";
    $sql[2] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_3', '$week_5_ary[8]', '$week_5_ary[9]','$week_5_ary[10]', '$week_5_ary[11]', 'sunday','$week', '$month', '$year');";
    $sql[3] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_4', '$week_5_ary[12]', '$week_5_ary[13]','$week_5_ary[14]', '$week_5_ary[15]', 'sunday','$week', '$month', '$year');";
    // monday
    $sql[4] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_1', '$week_5_ary[16]', '$week_5_ary[17]','$week_5_ary[18]', '$week_5_ary[19]', 'monday','$week', '$month', '$year');";
    $sql[5] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_2', '$week_5_ary[20]', '$week_5_ary[21]','$week_5_ary[22]', '$week_5_ary[23]', 'monday','$week', '$month', '$year');";
    $sql[6] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_3', '$week_5_ary[24]', '$week_5_ary[25]','$week_5_ary[26]', '$week_5_ary[27]', 'monday','$week', '$month', '$year');";
    $sql[7] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_4', '$week_5_ary[28]', '$week_5_ary[29]','$week_5_ary[30]', '$week_5_ary[31]', 'monday','$week', '$month', '$year');";
    // tuesday
    $sql[8] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_1', '$week_5_ary[32]', '$week_5_ary[33]','$week_5_ary[34]', '$week_5_ary[35]', 'tuesday','$week', '$month', '$year');";
    $sql[9] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_2', '$week_5_ary[36]', '$week_5_ary[37]','$week_5_ary[38]', '$week_5_ary[39]', 'tuesday','$week', '$month', '$year');";
    $sql[10] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_3', '$week_5_ary[40]', '$week_5_ary[41]','$week_5_ary[42]', '$week_5_ary[43]', 'tuesday','$week', '$month', '$year');";
    $sql[11] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_4', '$week_5_ary[44]', '$week_5_ary[45]','$week_5_ary[46]', '$week_5_ary[47]', 'tuesday','$week', '$month', '$year');";
    // wednesday
    $sql[12] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_1', '$week_5_ary[48]', '$week_5_ary[49]','$week_5_ary[50]', '$week_5_ary[51]', 'wednesday','$week', '$month', '$year');";
    $sql[13] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_2', '$week_5_ary[52]', '$week_5_ary[53]','$week_5_ary[54]', '$week_5_ary[55]', 'wednesday','$week', '$month', '$year');";
    $sql[14] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_3', '$week_5_ary[56]', '$week_5_ary[57]','$week_5_ary[58]', '$week_5_ary[59]', 'wednesday','$week', '$month', '$year');";
    $sql[15] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_wednesday_4', '$week_5_ary[60]', '$week_5_ary[61]','$week_5_ary[62]', '$week_5_ary[63]', 'wednesday','$week', '$month', '$year');";
    // thursday
    $sql[16] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_1', '$week_5_ary[64]', '$week_5_ary[65]','$week_5_ary[66]', '$week_5_ary[67]', 'thursday','$week', '$month', '$year');";
    $sql[17] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_2', '$week_5_ary[68]', '$week_5_ary[69]','$week_5_ary[70]', '$week_5_ary[71]', 'thursday','$week', '$month', '$year');";
    $sql[18] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_3', '$week_5_ary[72]', '$week_5_ary[73]','$week_5_ary[74]', '$week_5_ary[75]', 'thursday','$week', '$month', '$year');";
    $sql[19] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_thursday_4', '$week_5_ary[76]', '$week_5_ary[77]','$week_5_ary[78]', '$week_5_ary[79]', 'thursday','$week', '$month', '$year');";
    // friday
    $sql[20] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_1', '$week_5_ary[80]', '$week_5_ary[81]','$week_5_ary[82]', '$week_5_ary[83]', 'friday','$week', '$month', '$year');";
    $sql[21] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_2', '$week_5_ary[84]', '$week_5_ary[85]','$week_5_ary[86]', '$week_5_ary[87]', 'friday','$week', '$month', '$year');";
    $sql[22] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_3', '$week_5_ary[88]', '$week_5_ary[89]','$week_5_ary[90]', '$week_5_ary[91]', 'friday','$week', '$month', '$year');";
    $sql[23] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_friday_4', '$week_5_ary[92]', '$week_5_ary[93]','$week_5_ary[94]', '$week_5_ary[95]', 'friday','$week', '$month', '$year');";
    // saturday
    $sql[24] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_1', '$week_5_ary[96]', '$week_5_ary[97]','$week_5_ary[98]', '$week_5_ary[99]', 'saturday','$week', '$month', '$year');";
    $sql[25] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_2', '$week_5_ary[100]', '$week_5_ary[101]','$week_5_ary[102]', '$week_5_ary[103]', 'saturday','$week', '$month', '$year');";
    $sql[26] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_3', '$week_5_ary[104]', '$week_5_ary[105]','$week_5_ary[106]', '$week_5_ary[107]', 'saturday','$week', '$month', '$year');";
    $sql[27] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_saturday_4', '$week_5_ary[108]', '$week_5_ary[109]','$week_5_ary[11]', '$week_5_ary[111]', 'saturday','$week', '$month', '$year');";


    for ($i=0; $i < 28 ; $i++) { 
        if ($conn->query($sql[$i]) === TRUE) {
            
            
        } else {
            echo "Error: " . $sql[$i] . "<br>" . $conn->error;
        }
    }
    echo '<script>document.getElementById("insert_alert").innerHTML = "insetr kalrallllllllaaaa";</script>';
    $conn->close();
}
function insertdataw6($year,$month,$week,$week_6_ary,$tbn,$conn)
{
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = array(); 
    // sunday
    $sql[0] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_1', '$week_6_ary[0]', '$week_6_ary[1]','$week_6_ary[2]', '$week_6_ary[3]', 'sunday','$week', '$month', '$year');";
    $sql[1] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_2', '$week_6_ary[4]', '$week_6_ary[5]','$week_6_ary[6]', '$week_6_ary[7]', 'sunday','$week', '$month', '$year');";
    $sql[2] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_3', '$week_6_ary[8]', '$week_6_ary[9]','$week_6_ary[10]', '$week_6_ary[11]', 'sunday','$week', '$month', '$year');";
    $sql[3] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_sunday_4', '$week_6_ary[12]', '$week_6_ary[13]','$week_6_ary[14]', '$week_6_ary[15]', 'sunday','$week', '$month', '$year');";
    // monday
    $sql[4] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_1', '$week_6_ary[16]', '$week_6_ary[17]','$week_6_ary[18]', '$week_6_ary[19]', 'monday','$week', '$month', '$year');";
    $sql[5] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_2', '$week_6_ary[20]', '$week_6_ary[21]','$week_6_ary[22]', '$week_6_ary[23]', 'monday','$week', '$month', '$year');";
    $sql[6] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_3', '$week_6_ary[24]', '$week_6_ary[25]','$week_6_ary[26]', '$week_6_ary[27]', 'monday','$week', '$month', '$year');";
    $sql[7] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_monday_4', '$week_6_ary[28]', '$week_6_ary[29]','$week_6_ary[30]', '$week_6_ary[31]', 'monday','$week', '$month', '$year');";
    // tuesday
    $sql[8] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_1', '$week_6_ary[32]', '$week_6_ary[33]','$week_6_ary[34]', '$week_6_ary[35]', 'tuesday','$week', '$month', '$year');";
    $sql[9] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_2', '$week_6_ary[36]', '$week_6_ary[37]','$week_6_ary[38]', '$week_6_ary[39]', 'tuesday','$week', '$month', '$year');";
    $sql[10] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_3', '$week_6_ary[40]', '$week_6_ary[41]','$week_6_ary[42]', '$week_6_ary[43]', 'tuesday','$week', '$month', '$year');";
    $sql[11] = "INSERT INTO $tbn (`ID`, `Hall_Lab`, `ModuleName_Code`, `Lecturer`, `Time`, `Day`, `Week`, `Month`, `Year`)
    VALUES ('$year"."_$month"."_$week"."_tuesday_4', '$week_6_ary[44]', '$week_6_ary[45]','$week_6_ary[46]', '$week_6_ary[47]', 'tuesday','$week', '$month', '$year');";


    for ($i=0; $i < 12 ; $i++) { 
        if ($conn->query($sql[$i]) === TRUE) {

            
        } else {
            echo "Error: " . $sql[$i] . "<br>" . $conn->error;
        }
    }
    echo '<script>document.getElementById("insert_alert").innerHTML = "insetr kalrallllllllaaaa";</script>';
    $conn->close();
}
// end of insertdata function////////////////////////////




//START OF THE "updatedata" FUNCTION\\
function updatedata($year,$month,$week,$batch,$week_1_ary,$week_2_ary,$week_3_ary,$week_4_ary,$week_5_ary,$week_6_ary,$conn)// find table according to batch name
{
    $sql = "SELECT * FROM `batches` WHERE id =1";
    $result = $conn->query($sql);

    if ($week == "W1")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";
                    updatedataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb2";
                    updatedataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "schb3";
                    updatedataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";
                    updatedataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                    updatedataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                    updatedataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                    updatedataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                    updatedataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                    updatedataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                    updatedataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                    updatedataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                    updatedataw1($year,$month,$week,$week_1_ary,$tbn,$conn);
                }
                else{}
            }
        else
        {
            echo "Error";
        }
        } else {
            echo "0 results";
        }
    }
    elseif ($week == "W2")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";
                    updatedataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb2";
                    updatedataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "schb3";
                    updatedataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";
                    updatedataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                    updatedataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                    updatedataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                    updatedataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                    updatedataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                    updatedataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                    updatedataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                    updatedataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                    updatedataw2($year,$month,$week,$week_2_ary,$tbn,$conn);
                }
                else{}
            }
        else
        {
            echo "Error";
        }
        } else {
            echo "0 results";
        }
    }
    elseif ($week == "W3")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";
                    updatedataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb2";
                    updatedataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "schb3";
                    updatedataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";
                    updatedataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                    updatedataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                    updatedataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                    updatedataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                    updatedataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                    updatedataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                    updatedataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                    updatedataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                    updatedataw3($year,$month,$week,$week_3_ary,$tbn,$conn);
                }
                else{}
            }
        else
        {
            echo "Error";
        }
        } else {
            echo "0 results";
        }
    }
    elseif ($week == "W4")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";
                    updatedataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb2";
                    updatedataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "schb3";
                    updatedataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";
                    updatedataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                    updatedataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                    updatedataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                    updatedataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                    updatedataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                    updatedataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                    updatedataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                    updatedataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                    updatedataw4($year,$month,$week,$week_4_ary,$tbn,$conn);
                }
                else{}
            }
        else
        {
            echo "Error";
        }
        } else {
            echo "0 results";
        }
    }
    elseif ($week == "W5")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";
                    updatedataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb2";
                    updatedataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "schb3";
                    updatedataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";
                    updatedataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                    updatedataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                    updatedataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                    updatedataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                    updatedataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                    updatedataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                    updatedataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                    updatedataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                    updatedataw5($year,$month,$week,$week_5_ary,$tbn,$conn);
                }
                else{}
            }
        else
        {
            echo "Error";
        }
        } else {
            echo "0 results";
        }
    }
    elseif ($week == "W6")
    {
        if ($result->num_rows > 0) {

            if($row = $result->fetch_assoc()) 
            {
                if ($batch == "")
                {
                echo "batchname is null";
                }
                else if ($row["B1"] == $batch)
                {
                    $tbn = "schb1";
                    updatedataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B2"] == $batch)
                {
                    $tbn = "schb3";
                    updatedataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B3"] == $batch)
                {
                    $tbn = "    schb2";
                    updatedataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B4"] == $batch)
                {
                    $tbn = "schb4";
                    updatedataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B5"] == $batch)
                {
                    $tbn = "schb5";
                    updatedataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B6"] == $batch)
                {
                    $tbn = "schb6";
                    updatedataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B7"] == $batch)
                {
                    $tbn = "schb7";
                    updatedataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B8"] == $batch)
                {
                    $tbn = "schb8";
                    updatedataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B9"] == $batch)
                {
                    $tbn = "schb9";
                    updatedataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B10"] == $batch)
                {
                    $tbn = "schb10";
                    updatedataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B11"] == $batch)
                {
                    $tbn = "schb11";
                    updatedataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else if ($row["B12"] == $batch)
                {
                    $tbn = "schb12";
                    updatedataw6($year,$month,$week,$week_6_ary,$tbn,$conn);
                }
                else{}
            }
        else
        {
            echo "Error";
        }
        } else {
            echo "0 results";
        }
    }
    else{}
}

 function updatedataw1($year,$month,$week,$week_1_ary,$tbn,$conn)
{
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = array(); 
    // sunday
    $sql[0] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[0]', `ModuleName_Code` = '$week_1_ary[1]', `Lecturer` = '$week_1_ary[2]', `Time` = '$week_1_ary[3]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_1'";
    $sql[1] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[4]', `ModuleName_Code` = '$week_1_ary[5]', `Lecturer` = '$week_1_ary[6]', `Time` = '$week_1_ary[7]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_2'";
    $sql[2] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[8]', `ModuleName_Code` = '$week_1_ary[9]', `Lecturer` = '$week_1_ary[10]', `Time` = '$week_1_ary[11]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_3'";
    $sql[3] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[12]', `ModuleName_Code` = '$week_1_ary[13]', `Lecturer` = '$week_1_ary[14]', `Time` = '$week_1_ary[15]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_4'";
    // monday
    $sql[4] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[16]', `ModuleName_Code` = '$week_1_ary[17]', `Lecturer` = '$week_1_ary[18]', `Time` = '$week_1_ary[19]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
    $sql[5] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[20]', `ModuleName_Code` = '$week_1_ary[21]', `Lecturer` = '$week_1_ary[22]', `Time` = '$week_1_ary[23]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_2'";
    $sql[6] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[24]', `ModuleName_Code` = '$week_1_ary[25]', `Lecturer` = '$week_1_ary[26]', `Time` = '$week_1_ary[27]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_3'";
    $sql[7] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[28]', `ModuleName_Code` = '$week_1_ary[29]', `Lecturer` = '$week_1_ary[30]', `Time` = '$week_1_ary[31]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_4'";
    // tuesday
    $sql[8] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[32]', `ModuleName_Code` = '$week_1_ary[33]', `Lecturer` = '$week_1_ary[34]', `Time` = '$week_1_ary[35]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_1'";
    $sql[9] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[36]', `ModuleName_Code` = '$week_1_ary[37]', `Lecturer` = '$week_1_ary[38]', `Time` = '$week_1_ary[39]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_2'";
    $sql[10] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[40]', `ModuleName_Code` = '$week_1_ary[41]', `Lecturer` = '$week_1_ary[42]', `Time` = '$week_1_ary[43]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_3'";
    $sql[11] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[44]', `ModuleName_Code` = '$week_1_ary[45]', `Lecturer` = '$week_1_ary[46]', `Time` = '$week_1_ary[47]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_4'";
    // wednesday
    $sql[12] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[48]', `ModuleName_Code` = '$week_1_ary[49]', `Lecturer` = '$week_1_ary[50]', `Time` = '$week_1_ary[51]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_1'";
    $sql[13] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[52]', `ModuleName_Code` = '$week_1_ary[53]', `Lecturer` = '$week_1_ary[54]', `Time` = '$week_1_ary[55]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_2'";
    $sql[14] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[56]', `ModuleName_Code` = '$week_1_ary[57]', `Lecturer` = '$week_1_ary[58]', `Time` = '$week_1_ary[59]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_3'";
    $sql[15] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[60]', `ModuleName_Code` = '$week_1_ary[61]', `Lecturer` = '$week_1_ary[62]', `Time` = '$week_1_ary[63]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_4'";
    // thursday
    $sql[16] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[64]', `ModuleName_Code` = '$week_1_ary[65]', `Lecturer` = '$week_1_ary[66]', `Time` = '$week_1_ary[67]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_1'";
    $sql[17] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[68]', `ModuleName_Code` = '$week_1_ary[69]', `Lecturer` = '$week_1_ary[70]', `Time` = '$week_1_ary[71]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_2'";
    $sql[18] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[72]', `ModuleName_Code` = '$week_1_ary[73]', `Lecturer` = '$week_1_ary[74]', `Time` = '$week_1_ary[75]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_3'";
    $sql[19] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[76]', `ModuleName_Code` = '$week_1_ary[77]', `Lecturer` = '$week_1_ary[78]', `Time` = '$week_1_ary[79]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_4'";
    // friday
    $sql[20] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[80]', `ModuleName_Code` = '$week_1_ary[81]', `Lecturer` = '$week_1_ary[82]', `Time` = '$week_1_ary[83]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_1'";
    $sql[21] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[84]', `ModuleName_Code` = '$week_1_ary[85]', `Lecturer` = '$week_1_ary[86]', `Time` = '$week_1_ary[87]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_2'";
    $sql[22] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[88]', `ModuleName_Code` = '$week_1_ary[89]', `Lecturer` = '$week_1_ary[90]', `Time` = '$week_1_ary[91]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_3'";
    $sql[23] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[92]', `ModuleName_Code` = '$week_1_ary[93]', `Lecturer` = '$week_1_ary[94]', `Time` = '$week_1_ary[95]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_4'";
    // saturday
    $sql[24] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[96]', `ModuleName_Code` = '$week_1_ary[97]', `Lecturer` = '$week_1_ary[98]', `Time` = '$week_1_ary[99]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_1'";
    $sql[25] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[100]', `ModuleName_Code` = '$week_1_ary[101]', `Lecturer` = '$week_1_ary[102]', `Time` = '$week_1_ary[103]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_2'";
    $sql[26] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[104]', `ModuleName_Code` = '$week_1_ary[105]', `Lecturer` = '$week_1_ary[106]', `Time` = '$week_1_ary[107]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_3'";
    $sql[27] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_1_ary[108]', `ModuleName_Code` = '$week_1_ary[109]', `Lecturer` = '$week_1_ary[110]', `Time` = '$week_1_ary[111]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_4'";


    for ($i=0; $i < 28 ; $i++) { 
        if ($conn->query($sql[$i]) === TRUE) {
           
        } else {
            echo "Error: " . $sql[$i] . "<br>" . $conn->error;
        }
    }
    $conn->close();
}
function updatedataw2($year,$month,$week,$week_2_ary,$tbn,$conn)
{
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = array(); 
    // sunday
    $sql[0] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[0]', `ModuleName_Code` = '$week_2_ary[1]', `Lecturer` = '$week_2_ary[2]', `Time` = '$week_2_ary[3]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_1'";
    $sql[1] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[4]', `ModuleName_Code` = '$week_2_ary[5]', `Lecturer` = '$week_2_ary[6]', `Time` = '$week_2_ary[7]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_2'";
    $sql[2] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[8]', `ModuleName_Code` = '$week_2_ary[9]', `Lecturer` = '$week_2_ary[10]', `Time` = '$week_2_ary[11]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_3'";
    $sql[3] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[12]', `ModuleName_Code` = '$week_2_ary[13]', `Lecturer` = '$week_2_ary[14]', `Time` = '$week_2_ary[15]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_4'";
    // monday
    $sql[4] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[16]', `ModuleName_Code` = '$week_2_ary[17]', `Lecturer` = '$week_2_ary[18]', `Time` = '$week_2_ary[19]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
    $sql[5] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[20]', `ModuleName_Code` = '$week_2_ary[21]', `Lecturer` = '$week_2_ary[22]', `Time` = '$week_2_ary[23]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_2'";
    $sql[6] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[24]', `ModuleName_Code` = '$week_2_ary[25]', `Lecturer` = '$week_2_ary[26]', `Time` = '$week_2_ary[27]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_3'";
    $sql[7] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[28]', `ModuleName_Code` = '$week_2_ary[29]', `Lecturer` = '$week_2_ary[30]', `Time` = '$week_2_ary[31]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_4'";
    // tuesday
    $sql[8] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[32]', `ModuleName_Code` = '$week_2_ary[33]', `Lecturer` = '$week_2_ary[34]', `Time` = '$week_2_ary[35]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_1'";
    $sql[9] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[36]', `ModuleName_Code` = '$week_2_ary[37]', `Lecturer` = '$week_2_ary[38]', `Time` = '$week_2_ary[39]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_2'";
    $sql[10] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[40]', `ModuleName_Code` = '$week_2_ary[41]', `Lecturer` = '$week_2_ary[42]', `Time` = '$week_2_ary[43]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_3'";
    $sql[11] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[44]', `ModuleName_Code` = '$week_2_ary[45]', `Lecturer` = '$week_2_ary[46]', `Time` = '$week_2_ary[47]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_4'";
    // wednesday
    $sql[12] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[48]', `ModuleName_Code` = '$week_2_ary[49]', `Lecturer` = '$week_2_ary[50]', `Time` = '$week_2_ary[51]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_1'";
    $sql[13] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[52]', `ModuleName_Code` = '$week_2_ary[53]', `Lecturer` = '$week_2_ary[54]', `Time` = '$week_2_ary[55]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_2'";
    $sql[14] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[56]', `ModuleName_Code` = '$week_2_ary[57]', `Lecturer` = '$week_2_ary[58]', `Time` = '$week_2_ary[59]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_3'";
    $sql[15] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[60]', `ModuleName_Code` = '$week_2_ary[61]', `Lecturer` = '$week_2_ary[62]', `Time` = '$week_2_ary[63]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_4'";
    // thursday
    $sql[16] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[64]', `ModuleName_Code` = '$week_2_ary[65]', `Lecturer` = '$week_2_ary[66]', `Time` = '$week_2_ary[67]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_1'";
    $sql[17] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[68]', `ModuleName_Code` = '$week_2_ary[69]', `Lecturer` = '$week_2_ary[70]', `Time` = '$week_2_ary[71]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_2'";
    $sql[18] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[72]', `ModuleName_Code` = '$week_2_ary[73]', `Lecturer` = '$week_2_ary[74]', `Time` = '$week_2_ary[75]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_3'";
    $sql[19] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[76]', `ModuleName_Code` = '$week_2_ary[77]', `Lecturer` = '$week_2_ary[78]', `Time` = '$week_2_ary[79]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_4'";
    // friday
    $sql[20] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[80]', `ModuleName_Code` = '$week_2_ary[81]', `Lecturer` = '$week_2_ary[82]', `Time` = '$week_2_ary[83]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_1'";
    $sql[21] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[84]', `ModuleName_Code` = '$week_2_ary[85]', `Lecturer` = '$week_2_ary[86]', `Time` = '$week_2_ary[87]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_2'";
    $sql[22] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[88]', `ModuleName_Code` = '$week_2_ary[89]', `Lecturer` = '$week_2_ary[90]', `Time` = '$week_2_ary[91]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_3'";
    $sql[23] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[92]', `ModuleName_Code` = '$week_2_ary[93]', `Lecturer` = '$week_2_ary[94]', `Time` = '$week_2_ary[95]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_4'";
    // saturday
    $sql[24] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[96]', `ModuleName_Code` = '$week_2_ary[97]', `Lecturer` = '$week_2_ary[98]', `Time` = '$week_2_ary[99]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_1'";
    $sql[25] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[100]', `ModuleName_Code` = '$week_2_ary[101]', `Lecturer` = '$week_2_ary[102]', `Time` = '$week_2_ary[103]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_2'";
    $sql[26] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[104]', `ModuleName_Code` = '$week_2_ary[105]', `Lecturer` = '$week_2_ary[106]', `Time` = '$week_2_ary[107]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_3'";
    $sql[27] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_2_ary[108]', `ModuleName_Code` = '$week_2_ary[109]', `Lecturer` = '$week_2_ary[110]', `Time` = '$week_2_ary[111]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_4'";


    for ($i=0; $i < 28 ; $i++) { 
        if ($conn->query($sql[$i]) === TRUE) {
           echo "<script>window.location.replace(location);</script>";
        } else {
            echo "Error: " . $sql[$i] . "<br>" . $conn->error;
        }
    }
    $conn->close();
}
function updatedataw3($year,$month,$week,$week_3_ary,$tbn,$conn)
{
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = array(); 
    // sunday
    $sql[0] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[0]', `ModuleName_Code` = '$week_3_ary[1]', `Lecturer` = '$week_3_ary[2]', `Time` = '$week_3_ary[3]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_1'";
    $sql[1] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[4]', `ModuleName_Code` = '$week_3_ary[5]', `Lecturer` = '$week_3_ary[6]', `Time` = '$week_3_ary[7]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_2'";
    $sql[2] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[8]', `ModuleName_Code` = '$week_3_ary[9]', `Lecturer` = '$week_3_ary[10]', `Time` = '$week_3_ary[11]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_3'";
    $sql[3] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[12]', `ModuleName_Code` = '$week_3_ary[13]', `Lecturer` = '$week_3_ary[14]', `Time` = '$week_3_ary[15]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_4'";
    // monday
    $sql[4] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[16]', `ModuleName_Code` = '$week_3_ary[17]', `Lecturer` = '$week_3_ary[18]', `Time` = '$week_3_ary[19]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
    $sql[5] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[20]', `ModuleName_Code` = '$week_3_ary[21]', `Lecturer` = '$week_3_ary[22]', `Time` = '$week_3_ary[23]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_2'";
    $sql[6] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[24]', `ModuleName_Code` = '$week_3_ary[25]', `Lecturer` = '$week_3_ary[26]', `Time` = '$week_3_ary[27]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_3'";
    $sql[7] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[28]', `ModuleName_Code` = '$week_3_ary[29]', `Lecturer` = '$week_3_ary[30]', `Time` = '$week_3_ary[31]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_4'";
    // tuesday
    $sql[8] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[32]', `ModuleName_Code` = '$week_3_ary[33]', `Lecturer` = '$week_3_ary[34]', `Time` = '$week_3_ary[35]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_1'";
    $sql[9] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[36]', `ModuleName_Code` = '$week_3_ary[37]', `Lecturer` = '$week_3_ary[38]', `Time` = '$week_3_ary[39]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_2'";
    $sql[10] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[40]', `ModuleName_Code` = '$week_3_ary[41]', `Lecturer` = '$week_3_ary[42]', `Time` = '$week_3_ary[43]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_3'";
    $sql[11] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[44]', `ModuleName_Code` = '$week_3_ary[45]', `Lecturer` = '$week_3_ary[46]', `Time` = '$week_3_ary[47]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_4'";
    // wednesday
    $sql[12] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[48]', `ModuleName_Code` = '$week_3_ary[49]', `Lecturer` = '$week_3_ary[50]', `Time` = '$week_3_ary[51]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_1'";
    $sql[13] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[52]', `ModuleName_Code` = '$week_3_ary[53]', `Lecturer` = '$week_3_ary[54]', `Time` = '$week_3_ary[55]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_2'";
    $sql[14] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[56]', `ModuleName_Code` = '$week_3_ary[57]', `Lecturer` = '$week_3_ary[58]', `Time` = '$week_3_ary[59]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_3'";
    $sql[15] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[60]', `ModuleName_Code` = '$week_3_ary[61]', `Lecturer` = '$week_3_ary[62]', `Time` = '$week_3_ary[63]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_4'";
    // thursday
    $sql[16] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[64]', `ModuleName_Code` = '$week_3_ary[65]', `Lecturer` = '$week_3_ary[66]', `Time` = '$week_3_ary[67]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_1'";
    $sql[17] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[68]', `ModuleName_Code` = '$week_3_ary[69]', `Lecturer` = '$week_3_ary[70]', `Time` = '$week_3_ary[71]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_2'";
    $sql[18] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[72]', `ModuleName_Code` = '$week_3_ary[73]', `Lecturer` = '$week_3_ary[74]', `Time` = '$week_3_ary[75]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_3'";
    $sql[19] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[76]', `ModuleName_Code` = '$week_3_ary[77]', `Lecturer` = '$week_3_ary[78]', `Time` = '$week_3_ary[79]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_4'";
    // friday
    $sql[20] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[80]', `ModuleName_Code` = '$week_3_ary[81]', `Lecturer` = '$week_3_ary[82]', `Time` = '$week_3_ary[83]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_1'";
    $sql[21] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[84]', `ModuleName_Code` = '$week_3_ary[85]', `Lecturer` = '$week_3_ary[86]', `Time` = '$week_3_ary[87]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_2'";
    $sql[22] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[88]', `ModuleName_Code` = '$week_3_ary[89]', `Lecturer` = '$week_3_ary[90]', `Time` = '$week_3_ary[91]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_3'";
    $sql[23] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[92]', `ModuleName_Code` = '$week_3_ary[93]', `Lecturer` = '$week_3_ary[94]', `Time` = '$week_3_ary[95]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_4'";
    // saturday
    $sql[24] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[96]', `ModuleName_Code` = '$week_3_ary[97]', `Lecturer` = '$week_3_ary[98]', `Time` = '$week_3_ary[99]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_1'";
    $sql[25] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[100]', `ModuleName_Code` = '$week_3_ary[101]', `Lecturer` = '$week_3_ary[102]', `Time` = '$week_3_ary[103]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_2'";
    $sql[26] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[104]', `ModuleName_Code` = '$week_3_ary[105]', `Lecturer` = '$week_3_ary[106]', `Time` = '$week_3_ary[107]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_3'";
    $sql[27] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_3_ary[108]', `ModuleName_Code` = '$week_3_ary[109]', `Lecturer` = '$week_3_ary[110]', `Time` = '$week_3_ary[111]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_4'";


    for ($i=0; $i < 28 ; $i++) { 
        if ($conn->query($sql[$i]) === TRUE) {
           echo "<script>window.location.replace(location);</script>";
        } else {
            echo "Error: " . $sql[$i] . "<br>" . $conn->error;
        }
    }
    $conn->close();
}
function updatedataw4($year,$month,$week,$week_4_ary,$tbn,$conn)
{
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = array(); 
    // sunday
    $sql[0] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[0]', `ModuleName_Code` = '$week_4_ary[1]', `Lecturer` = '$week_4_ary[2]', `Time` = '$week_4_ary[3]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_1'";
    $sql[1] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[4]', `ModuleName_Code` = '$week_4_ary[5]', `Lecturer` = '$week_4_ary[6]', `Time` = '$week_4_ary[7]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_2'";
    $sql[2] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[8]', `ModuleName_Code` = '$week_4_ary[9]', `Lecturer` = '$week_4_ary[10]', `Time` = '$week_4_ary[11]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_3'";
    $sql[3] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[12]', `ModuleName_Code` = '$week_4_ary[13]', `Lecturer` = '$week_4_ary[14]', `Time` = '$week_4_ary[15]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_4'";
    // monday
    $sql[4] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[16]', `ModuleName_Code` = '$week_4_ary[17]', `Lecturer` = '$week_4_ary[18]', `Time` = '$week_4_ary[19]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
    $sql[5] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[20]', `ModuleName_Code` = '$week_4_ary[21]', `Lecturer` = '$week_4_ary[22]', `Time` = '$week_4_ary[23]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_2'";
    $sql[6] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[24]', `ModuleName_Code` = '$week_4_ary[25]', `Lecturer` = '$week_4_ary[26]', `Time` = '$week_4_ary[27]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_3'";
    $sql[7] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[28]', `ModuleName_Code` = '$week_4_ary[29]', `Lecturer` = '$week_4_ary[30]', `Time` = '$week_4_ary[31]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_4'";
    // tuesday
    $sql[8] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[32]', `ModuleName_Code` = '$week_4_ary[33]', `Lecturer` = '$week_4_ary[34]', `Time` = '$week_4_ary[35]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_1'";
    $sql[9] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[36]', `ModuleName_Code` = '$week_4_ary[37]', `Lecturer` = '$week_4_ary[38]', `Time` = '$week_4_ary[39]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_2'";
    $sql[10] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[40]', `ModuleName_Code` = '$week_4_ary[41]', `Lecturer` = '$week_4_ary[42]', `Time` = '$week_4_ary[43]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_3'";
    $sql[11] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[44]', `ModuleName_Code` = '$week_4_ary[45]', `Lecturer` = '$week_4_ary[46]', `Time` = '$week_4_ary[47]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_4'";
    // wednesday
    $sql[12] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[48]', `ModuleName_Code` = '$week_4_ary[49]', `Lecturer` = '$week_4_ary[50]', `Time` = '$week_4_ary[51]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_1'";
    $sql[13] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[52]', `ModuleName_Code` = '$week_4_ary[53]', `Lecturer` = '$week_4_ary[54]', `Time` = '$week_4_ary[55]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_2'";
    $sql[14] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[56]', `ModuleName_Code` = '$week_4_ary[57]', `Lecturer` = '$week_4_ary[58]', `Time` = '$week_4_ary[59]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_3'";
    $sql[15] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[60]', `ModuleName_Code` = '$week_4_ary[61]', `Lecturer` = '$week_4_ary[62]', `Time` = '$week_4_ary[63]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_4'";
    // thursday
    $sql[16] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[64]', `ModuleName_Code` = '$week_4_ary[65]', `Lecturer` = '$week_4_ary[66]', `Time` = '$week_4_ary[67]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_1'";
    $sql[17] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[68]', `ModuleName_Code` = '$week_4_ary[69]', `Lecturer` = '$week_4_ary[70]', `Time` = '$week_4_ary[71]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_2'";
    $sql[18] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[72]', `ModuleName_Code` = '$week_4_ary[73]', `Lecturer` = '$week_4_ary[74]', `Time` = '$week_4_ary[75]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_3'";
    $sql[19] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[76]', `ModuleName_Code` = '$week_4_ary[77]', `Lecturer` = '$week_4_ary[78]', `Time` = '$week_4_ary[79]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_4'";
    // friday
    $sql[20] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[80]', `ModuleName_Code` = '$week_4_ary[81]', `Lecturer` = '$week_4_ary[82]', `Time` = '$week_4_ary[83]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_1'";
    $sql[21] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[84]', `ModuleName_Code` = '$week_4_ary[85]', `Lecturer` = '$week_4_ary[86]', `Time` = '$week_4_ary[87]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_2'";
    $sql[22] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[88]', `ModuleName_Code` = '$week_4_ary[89]', `Lecturer` = '$week_4_ary[90]', `Time` = '$week_4_ary[91]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_3'";
    $sql[23] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[92]', `ModuleName_Code` = '$week_4_ary[93]', `Lecturer` = '$week_4_ary[94]', `Time` = '$week_4_ary[95]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_4'";
    // saturday
    $sql[24] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[96]', `ModuleName_Code` = '$week_4_ary[97]', `Lecturer` = '$week_4_ary[98]', `Time` = '$week_4_ary[99]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_1'";
    $sql[25] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[100]', `ModuleName_Code` = '$week_4_ary[101]', `Lecturer` = '$week_4_ary[102]', `Time` = '$week_4_ary[103]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_2'";
    $sql[26] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[104]', `ModuleName_Code` = '$week_4_ary[105]', `Lecturer` = '$week_4_ary[106]', `Time` = '$week_4_ary[107]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_3'";
    $sql[27] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_4_ary[108]', `ModuleName_Code` = '$week_4_ary[109]', `Lecturer` = '$week_4_ary[110]', `Time` = '$week_4_ary[111]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_4'";


    for ($i=0; $i < 28 ; $i++) { 
        if ($conn->query($sql[$i]) === TRUE) {
           echo "<script>window.location.replace(location);</script>";
        } else {
            echo "Error: " . $sql[$i] . "<br>" . $conn->error;
        }
    }
    $conn->close();
}
function updatedataw5($year,$month,$week,$week_5_ary,$tbn,$conn)
{
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = array(); 
    // sunday
    $sql[0] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[0]', `ModuleName_Code` = '$week_5_ary[1]', `Lecturer` = '$week_5_ary[2]', `Time` = '$week_5_ary[3]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_1'";
    $sql[1] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[4]', `ModuleName_Code` = '$week_5_ary[5]', `Lecturer` = '$week_5_ary[6]', `Time` = '$week_5_ary[7]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_2'";
    $sql[2] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[8]', `ModuleName_Code` = '$week_5_ary[9]', `Lecturer` = '$week_5_ary[10]', `Time` = '$week_5_ary[11]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_3'";
    $sql[3] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[12]', `ModuleName_Code` = '$week_5_ary[13]', `Lecturer` = '$week_5_ary[14]', `Time` = '$week_5_ary[15]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_4'";
    // monday
    $sql[4] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[16]', `ModuleName_Code` = '$week_5_ary[17]', `Lecturer` = '$week_5_ary[18]', `Time` = '$week_5_ary[19]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
    $sql[5] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[20]', `ModuleName_Code` = '$week_5_ary[21]', `Lecturer` = '$week_5_ary[22]', `Time` = '$week_5_ary[23]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_2'";
    $sql[6] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[24]', `ModuleName_Code` = '$week_5_ary[25]', `Lecturer` = '$week_5_ary[26]', `Time` = '$week_5_ary[27]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_3'";
    $sql[7] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[28]', `ModuleName_Code` = '$week_5_ary[29]', `Lecturer` = '$week_5_ary[30]', `Time` = '$week_5_ary[31]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_4'";
    // tuesday
    $sql[8] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[32]', `ModuleName_Code` = '$week_5_ary[33]', `Lecturer` = '$week_5_ary[34]', `Time` = '$week_5_ary[35]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_1'";
    $sql[9] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[36]', `ModuleName_Code` = '$week_5_ary[37]', `Lecturer` = '$week_5_ary[38]', `Time` = '$week_5_ary[39]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_2'";
    $sql[10] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[40]', `ModuleName_Code` = '$week_5_ary[41]', `Lecturer` = '$week_5_ary[42]', `Time` = '$week_5_ary[43]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_3'";
    $sql[11] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[44]', `ModuleName_Code` = '$week_5_ary[45]', `Lecturer` = '$week_5_ary[46]', `Time` = '$week_5_ary[47]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_4'";
    // wednesday
    $sql[12] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[48]', `ModuleName_Code` = '$week_5_ary[49]', `Lecturer` = '$week_5_ary[50]', `Time` = '$week_5_ary[51]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_1'";
    $sql[13] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[52]', `ModuleName_Code` = '$week_5_ary[53]', `Lecturer` = '$week_5_ary[54]', `Time` = '$week_5_ary[55]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_2'";
    $sql[14] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[56]', `ModuleName_Code` = '$week_5_ary[57]', `Lecturer` = '$week_5_ary[58]', `Time` = '$week_5_ary[59]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_3'";
    $sql[15] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[60]', `ModuleName_Code` = '$week_5_ary[61]', `Lecturer` = '$week_5_ary[62]', `Time` = '$week_5_ary[63]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_wednesday_4'";
    // thursday
    $sql[16] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[64]', `ModuleName_Code` = '$week_5_ary[65]', `Lecturer` = '$week_5_ary[66]', `Time` = '$week_5_ary[67]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_1'";
    $sql[17] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[68]', `ModuleName_Code` = '$week_5_ary[69]', `Lecturer` = '$week_5_ary[70]', `Time` = '$week_5_ary[71]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_2'";
    $sql[18] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[72]', `ModuleName_Code` = '$week_5_ary[73]', `Lecturer` = '$week_5_ary[74]', `Time` = '$week_5_ary[75]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_3'";
    $sql[19] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[76]', `ModuleName_Code` = '$week_5_ary[77]', `Lecturer` = '$week_5_ary[78]', `Time` = '$week_5_ary[79]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_thursday_4'";
    // friday
    $sql[20] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[80]', `ModuleName_Code` = '$week_5_ary[81]', `Lecturer` = '$week_5_ary[82]', `Time` = '$week_5_ary[83]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_1'";
    $sql[21] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[84]', `ModuleName_Code` = '$week_5_ary[85]', `Lecturer` = '$week_5_ary[86]', `Time` = '$week_5_ary[87]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_2'";
    $sql[22] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[88]', `ModuleName_Code` = '$week_5_ary[89]', `Lecturer` = '$week_5_ary[90]', `Time` = '$week_5_ary[91]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_3'";
    $sql[23] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[92]', `ModuleName_Code` = '$week_5_ary[93]', `Lecturer` = '$week_5_ary[94]', `Time` = '$week_5_ary[95]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_friday_4'";
    // saturday
    $sql[24] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[96]', `ModuleName_Code` = '$week_5_ary[97]', `Lecturer` = '$week_5_ary[98]', `Time` = '$week_5_ary[99]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_1'";
    $sql[25] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[100]', `ModuleName_Code` = '$week_5_ary[101]', `Lecturer` = '$week_5_ary[102]', `Time` = '$week_5_ary[103]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_2'";
    $sql[26] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[104]', `ModuleName_Code` = '$week_5_ary[105]', `Lecturer` = '$week_5_ary[106]', `Time` = '$week_5_ary[107]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_3'";
    $sql[27] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_5_ary[108]', `ModuleName_Code` = '$week_5_ary[109]', `Lecturer` = '$week_5_ary[110]', `Time` = '$week_5_ary[111]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_saturday_4'";


    for ($i=0; $i < 28 ; $i++) { 
        if ($conn->query($sql[$i]) === TRUE) {
           echo "<script>window.location.replace(location);</script>";
        } else {
            echo "Error: " . $sql[$i] . "<br>" . $conn->error;
        }
    }
    $conn->close();
}
function updatedataw6($year,$month,$week,$week_6_ary,$tbn,$conn)
{
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = array(); 
    // sunday
    $sql[0] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_6_ary[0]', `ModuleName_Code` = '$week_6_ary[1]', `Lecturer` = '$week_6_ary[2]', `Time` = '$week_6_ary[3]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_1'";
    $sql[1] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_6_ary[4]', `ModuleName_Code` = '$week_6_ary[5]', `Lecturer` = '$week_6_ary[6]', `Time` = '$week_6_ary[7]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_2'";
    $sql[2] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_6_ary[8]', `ModuleName_Code` = '$week_6_ary[9]', `Lecturer` = '$week_6_ary[10]', `Time` = '$week_6_ary[11]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_3'";
    $sql[3] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_6_ary[12]', `ModuleName_Code` = '$week_6_ary[13]', `Lecturer` = '$week_6_ary[14]', `Time` = '$week_6_ary[15]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_sunday_4'";
    // monday
    $sql[4] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_6_ary[16]', `ModuleName_Code` = '$week_6_ary[17]', `Lecturer` = '$week_6_ary[18]', `Time` = '$week_6_ary[19]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_1'";
    $sql[5] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_6_ary[20]', `ModuleName_Code` = '$week_6_ary[21]', `Lecturer` = '$week_6_ary[22]', `Time` = '$week_6_ary[23]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_2'";
    $sql[6] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_6_ary[24]', `ModuleName_Code` = '$week_6_ary[25]', `Lecturer` = '$week_6_ary[26]', `Time` = '$week_6_ary[27]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_3'";
    $sql[7] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_6_ary[28]', `ModuleName_Code` = '$week_6_ary[29]', `Lecturer` = '$week_6_ary[30]', `Time` = '$week_6_ary[31]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_monday_4'";
    // tuesday
    $sql[8] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_6_ary[32]', `ModuleName_Code` = '$week_6_ary[33]', `Lecturer` = '$week_6_ary[34]', `Time` = '$week_6_ary[35]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_1'";
    $sql[9] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_6_ary[36]', `ModuleName_Code` = '$week_6_ary[37]', `Lecturer` = '$week_6_ary[38]', `Time` = '$week_6_ary[39]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_2'";
    $sql[10] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_6_ary[40]', `ModuleName_Code` = '$week_6_ary[41]', `Lecturer` = '$week_6_ary[42]', `Time` = '$week_6_ary[43]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_3'";
    $sql[11] = "UPDATE `$tbn` SET `Hall_Lab` = '$week_6_ary[44]', `ModuleName_Code` = '$week_6_ary[45]', `Lecturer` = '$week_6_ary[46]', `Time` = '$week_6_ary[47]' WHERE `$tbn`.`ID` = '$year"."_$month"."_$week"."_tuesday_4'";


    for ($i=0; $i < 12 ; $i++) { 
        if ($conn->query($sql[$i]) === TRUE) {
           echo "<script>window.location.replace(location);</script>";
        } else {
            echo "Error: " . $sql[$i] . "<br>" . $conn->error;
        }
    }
    $conn->close();
}
// end of updatedata function////////////////////////////



function data()
{
    $data="ssfdsdsdascscsagcsdscg";
    echo $data;
    //echo "<script>document.getElementById('input_fake_month').value = $data </script>";
}

?>


