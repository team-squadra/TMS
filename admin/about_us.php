<!-------------INCLUDING CSS AND PHP CODE--> 
<?php
include 'rs/all/css_all_public.php';
include 'rs/all/all_php.php';
include 'rs/php/php_about_us.php';
include 'rs/css/css_about_us.php';

?>
<!--------------> 

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


<head>
<!--------------------------------------------------------------------------------------TITLE-START-->
<title>Timetable Management System</title>
<link rel="icon" type="image/png" href="../resources/yy.ico">
<!--------------------------------------------------------------------------------------TITLE-START-->
</head>


<!--------------------------------------------------------------------------------------HEADER-START-->  
<header>
  <div>
      <div class="logo">
            <table>
                <tr>
                  <td><img src="../resources/tms.png" style="width: 30px;height: 30px;"></td>
                  <td><div id="clock"></div></td>
                </tr>
            </table>
      </div>

      <div class="user"><!--user-->
        <div id="user_parent"><!--user_parent-->
          <table class="user_table">
            <tr>
              <td>
                <?php
                    if ($get_admin_image!=null) 
                    {
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($get_admin_image).'"style="width:30px;height:30px;border-radius: 5px;" />';
                    }
                    else
                    {
                        echo '<img  src="../resources/admin.png" style="width:30px;height:30px;">';
                    }
                ?>     
              </td>
            </tr>
          </table>
          <div id="user_child"><!--user_child-->
            <div class="dropdown"><!--dropdown-->
                <button class="dropbtn"></button>
                  <div class="dropdown-content"><!--dropdown-content-->
                    <div style="padding:10px;">
                    <p>Signed in as</p>
                    <p><b><?php echo $get_admin_name;?></b></p>
                    </div>
                    <hr>
                    <a href="my_profile.php">My Profile</a>
                    <a href="#">Settings</a>
                    <form action="" method="post">
                      <button name="signout" id="signout" 
                      style="">
                      Sign out
                      </button>
                    </form>
                  
                  </div><!--dropdown-content-->
            </div><!--dropdown-->
          </div><!--user_child-->
        </div><!--user_parent-->
      </div><!--user-->

  </div>
</header>
<!--------------------------------------------------------------------------------------HEADER-END-->



<!--------------------------------------------------------------------------------------BODY-START-->
<body onload="move()">

  <!-- page loader progress bar div start -->
     <div id="myProgress">
     <div id="myBar"></div>
     </div>
     <!-- page loader progress bar div end -->


   <!-- hoverable side nav bar -->
          <div id="mySidenav" class="sidenav">
              <a href="home.php" id="home">Home<i class='far fa-calendar-alt'style=" font-size:32px;margin-left:93px;"></i></a>
              <a href="hall_details.php" id="hall_details">Hall Details<i class='fas fa-chalkboard-teacher'style='font-size:25px;margin-left: 42px;'></i></a>
               <a href="batch_details.php" id="batch_details">Batch Details<i class='far fa-address-card'style='font-size:28px;margin-left: 30px;'></i> </a>
               <a href="timetables.php" id="timetables">TimeTables<i class='fas fa-fax'style='font-size:29px;margin-left: 45px;'></i> </a>
               <a href="new_account.php" id="new_account">New Account<i class='far fa-address-book'style='font-size:30px;margin-left:32px;'></i> </a>
               <a href="about_us.php" id="about">About Us<i class='far fa-comment-dots'style='font-size:32px;margin-left:65px;'></i></a>
         </div>
<!-----------------------------------------------------------------BATCH-->
<div style="background-color: transparent;margin-left: 80px;margin-right: 80px;margin-top: 10px;padding: 10px;">
  <label style='color: white;padding-left: 10px; font-size: 50px;font-weight: 100;line-height: 1.2;'>About us</label>
</div>
<!-----------------------------------------------------------------BATCH-->
  <div class="row">

    <!--main-->
    <div class="main">
      <div style="  background-color: white;width: auto;height: 700px;margin: 20px 20px 20px 20px;">
        <center>
          <img src="../resources/squadra.png" style="width: 600px;height: 600px;">
          <table>
            <tr>
              <td><center><img src="../resources/gmail.png" style="width: 40px;height: 40px;"></center></td>
              <td style="color: dimgray; padding-left: 20px;"><center><b>squadrasoftwares8@gmail.com</b></center></td>
            </tr>
          </table>
      </center>
      </div>
    </div>

  </div>
<!--------------------------------------------------------------------------------------Online_Users-->
<?php
  $con=mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $query = "SELECT * FROM signup WHERE activity ='active' && username !='$get_admin_name' ";

    if ($result=mysqli_query($con,$query))
    {
      $rowcount=mysqli_num_rows($result);
      
      mysqli_free_result($result);
    }
  mysqli_close($con);
?>
<button class="open-button" id="open_button">
  <table style="background-color: white;padding: 5px; border-top-right-radius: 10px;border-top-left-radius: 10px;">
    <tr>
      <td>
        <td><center>Online</center></td>
        <td><center>(<?php echo "$rowcount"; ?>)</center></td>
        <td><center>&#9650;</center></td>
    </tr>
  </table>
</button>

<div class="form-popup" id="online_Users_div">
  <?php show_online_users($servername,$username,$password,$dbname,$get_admin_name); ?>
</div>

<script>

  $(document).ready(function(){  
      $('#open_button').click(function(){  
          document.getElementById("online_Users_div").style.display = "block";
          document.getElementById("open_button").style.display = "none";
      });  
 });

  $(document).ready(function(){  
      $('#close_button').click(function(){  
          document.getElementById("online_Users_div").style.display = "none";
          document.getElementById("open_button").style.display = "block";
      });  
 });

</script>
<!--------------------------------------------------------------------------------------Online_Users-->

</body>
<!--------------------------------------------------------------------------------------BODY-END-->
</html>


<!--------------------------------------------------------------------------------------JS-START-->
<script  type="text/javascript" src="rs/all/js_all.js"></script>
<!--------------------------------------------------------------------------------------JS-END-->
