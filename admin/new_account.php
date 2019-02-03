<!-------------INCLUDING CSS AND PHP CODE--> 
<?php
include 'rs/all/css_all_public.php';
include 'rs/php/php_new_account.php';
include 'rs/css/css_new_account.php';

?>
<!--------------> 

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>



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
              <td style="color: white;font-size: 12px;"><i class="fa fa-caret-down"></i></td>
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

  <div class="row">

    <!--main-->
    <div class="main">
      <div style="  background-color: white;width: auto;height: 700px;margin: 20px 20px 20px 20px;" class="Create_account">

        <div style=" width: 100%;">
          
          <table style="color: dimgray; padding:20px;font-size: 30px;">
            <tr>
              <td style="padding: 10px;"><img src="../resources/op.png" class="avatar"> </td>
              <td style="padding: 10px;">Create Account</td>
            </tr>
          </table>
        </div>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
          <center>

          <table style="width: 100%; padding: 20px;">
            <tr>
              <td><p>First Name</p></td>
              <td><p>Email</p></td>
            </tr>
            <tr>
              <td><input type="text" name="new_First_Name" placeholder="Enter Your First Name"></td>
              <td><input type="text" name="new_email" placeholder="Enter Your Email"></td>
            </tr>
            <tr>
              <td><span class="error">*<?php echo $newFirstNameErr;?></span><br><br></td>
              <td><span class="error">* <?php echo $newemailErr;?></span><br><br></td>
            </tr>
            <tr>
              <td><p>Last Name</p></td>
              <td><p>Statues</p></td>
            </tr>
            <tr>
              <td><input type="text" name="new_Last_Name" placeholder="Enter Your Last Name"></td>
              <td>
                <select name="new_statues">
                  <option value="user" style="color: black; background-color: #ddd;">User</option>
                  <option value="admin" style="color: black; background-color: #ddd;">Admin</option>
                </select>
              </td>
            </tr>
            <tr>
              <td><span class="error">*<?php echo $newLastNameErr;?></span><br><br></td>
            </tr>
            <tr>
              <td><p>Username</p></td>
            </tr>
            <tr>
              <td><input type="text" name="new_username" placeholder="Enter Your Username"></td>
            </tr>
            <tr>
              <td><span class="error">*<?php echo $newusernameErr;?></span><br><br></td>
            </tr>
            <tr>
              <td><p>New Password</p></td>
            </tr>
            <tr>
              <td><input type="password" name="new_password" placeholder="Enter Your New Password"></td>
            </tr>
            <tr>
              <td><span class="error">*<?php echo $newpasswordErr;?></span><br><br></td>
            </tr>
            <tr>
              <td><input type="submit" name="SIGNUP" value="Create account"></td>
            </tr>            
          </table>

        </center>
        </form>

      </div>
    </div>

    <!--side-->
    <div class="sideright">
      <div style="  background-color: white;width: auto;height: 200px; margin: 20px 20px 20px 20px;">

      </div>
      <div style="  background-color: white;width: auto;height: 400px;margin: 20px 20px 20px 20px;"></div>
    </div>

  </div>

      <script>
function move() {
  var elem = document.getElementById("myBar");   
  var width = 0;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    }
     else 
     {
      width++; 
      elem.style.width = width + '%'; 
    }
     if(width==100){
      elem.style.width = 0;
    }
  }
}
</script>

</body>
<!--------------------------------------------------------------------------------------BODY-END-->

</html>


<!--------------------------------------------------------------------------------------JS-START-->
<script  type="text/javascript" src="rs/all/js_all.js"></script>
<!--------------------------------------------------------------------------------------JS-END-->
