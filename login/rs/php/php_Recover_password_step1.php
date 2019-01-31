<?php
session_start();
include('/../../../all/db_details.php');
$_SESSION['usernamestep1']=NULL;


if (isset($_POST['destroy']))
{
    $_SESSION =array();
    session_destroy();
    header('location:login.php');

}


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$LOGINERR=NULL;
$email= NULL;

function test($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if (isset($_POST['login'])) {

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["email"])) {
    $LOGINERR = "Email is required";
  } else {
    $email = test($_POST["email"]);
    // check if email address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $LOGINERR = "Invalid email format"; 
    }
  }
}


if($LOGINERR==NULL)
{
$email= $_POST["email"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sqlquery = mysqli_query($conn,"SELECT * FROM signup WHERE email='{$email}'");
$count =  mysqli_num_rows($sqlquery);
$row = mysqli_fetch_array($sqlquery);

if ($count > 0) 
{


date_default_timezone_set("Asia/Colombo");
$xtime =date("h:i:sa");
$xusername =$row['username'];
$xid =$row['id'];
$xemail=$email;
$xxxx=$xusername.$xtime.$xid.$xemail;

$xmd5= md5($xxxx);
$xshal= Sha1($xmd5);
$xcrypt= crypt($xshal,"st");

$sql = "UPDATE signup SET recover_code='$xcrypt' WHERE id=$xid";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();




//echo "<script>alert('Login Successful ');</script>";
$LOGINERR = "<font color=l#a9c12d>Email Confirmed</font>";
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'timetable.management.system43@gmail.com';                 // SMTP username
    $mail->Password = 'ttmusr@123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('timetable.management.system43@gmail.com', 'TMS');
    $mail->addAddress($email, $email);     // Add a recipient
    
    //Attachments
    $mail->AddEmbeddedImage("../resources/yy.ico", 1001, '../resources/yy.ico');

    //Contentemailpng
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Recover Password';
    $mail->Body    = "
        <table style='font-family:Century Gothic'>
          <tr>
            <td style='padding: 20px 20px 20px 20px; color: dimgray;'><h1>Hi, <b><i>{$row['username']}..........</i></b></h1></td>
          </tr>
          <tr>
            <td style='padding: 20px 20px 20px 20px;'>Your Code is <b style='font-family:Courier New; font-size: 20px;'>{$xcrypt}</b></td>
          </tr>
          <tr>
            <td style='padding: 20px 20px 20px 20px;'><img src='cid:1001' width='100' height='100'></td>
          </tr>
        </table>
                      ";

    $mail->AltBody = "Hi,{$row['username']}<br> Your Password is {$row['password']}";
    $LOGINERR = "<font color=#a9c12d>Sending Email....</font>";
    $mail->send();
    $xx=$row['username'];
    
    $_SESSION['usernamestep1']=$xx;
    
    header('location: Recover_password_step2.php');
    

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

} 
else 
{
//echo "<script>alert('Username or Password is Wrong ');</script>";
$LOGINERR = "Email Address is Not Found";

}
$conn->close();
}
 else {
    
}

}
else
{

}
?>