<!-------------INCLUDING CSS AND PHP CODE--> 
<?php
include '/../all/css_all_public.php';
include 'rs/php/php_adminaccount.php';
include 'rs/css/css_adminaccount.php';
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
                    <a href="adminaccount.php">My Profile</a>
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
<body>

  <!-- hoverable side nav bar -->
          <div id="mySidenav" class="sidenav">
              <a href="adminhome.php" id="lec_schedule">Home<i class='far fa-calendar-alt'style=" font-size:32px;margin-left:93px;"></i></a>
              <a href="hall_details.php" id="hall_details">Hall Details<i class='fas fa-chalkboard-teacher'style='font-size:25px;margin-left: 42px;'></i></a>
               <a href="batch_details.php" id="batch_details">Batch Details<i class='far fa-address-card'style='font-size:28px;margin-left: 30px;'></i> </a>
               <a href="timetables.php" id="timetables">TimeTables<i class='fas fa-fax'style='font-size:29px;margin-left: 45px;'></i> </a>
               <a href="new_account.php" id="new_account">New Account<i class='far fa-address-book'style='font-size:30px;margin-left:32px;'></i> </a>
               <a href="about_us.php" id="about">About Us<i class='far fa-comment-dots'style='font-size:32px;margin-left:65px;'></i></a>
         </div>

  <div class="row">

    <!--side 1-->
    <div class="sideleft">
      <div style="  background-color: white;width: auto;height: 500px;margin: 20px 20px 20px 20px;">
        
      </div>
    </div>

    <!--main-->
    <div class="main">
      
      <div style="  background-color: white;width: auto;height: 700px;margin: 20px 20px 20px 20px;">
        <center><br><br><br>

          <div class="pro_pic"><!--PROFILE PICTURE-->
            <div id="parent2">
                <?php
                  if ($get_admin_image!=null) {
                    echo '<img src="data:image/jpeg;base64,'.base64_encode($get_admin_image).'"/>';
                  }
                  else
                  {
                    echo '<img  src="../resources/yyy.png">';
                  }
                ?>    
                <div id="child2">
                  <input type="submit" name="edit" value="&#9998Edit" >
                </div>
            </div>
          </div><br>

          <p style="color: gray; font-size: 20px;"> <?php echo $get_admin_name; ?></p><br><!--USERNAME-->

          <center>
            <div style="width: 500px;margin-top: 25px;">

              <form action="" method="POST">
                <table id="account_table">
                  <tr>
                    <th>Firstname</th>
                    <td><input class="input" type="text" name="f_name" value="<?php echo $get_admin_fname; ?>"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Lastname</th>
                    <td><input  class="input" type="text" name="l_name" value="<?php echo $get_admin_lname; ?>"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td><input class="input" type="text" name="e_mail" value="<?php echo $get_admin_email; ?>"></td>
                  </tr>
                </table>
                <input id="sub" type="submit" name="save" value="Update Profile" ></td>
              </form>
            </div>
          </center>
        </center>               
      </div>
    </div>


    <!--side 2-->
    <div class="sideright">
      <div style="  background-color: white;width: auto;height: 200px; margin: 20px 20px 20px 20px;"></div>
      <div style="  background-color: white;width: auto;height: 400px;margin: 20px 20px 20px 20px;"></div>
    </div>
    
  </div>
</body>
<!--------------------------------------------------------------------------------------BODY-END-->

</html>


