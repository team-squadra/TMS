<!-------------INCLUDING CSS AND PHP CODE--> 
<?php
include 'rs/all/css_all_public.php';
include 'rs/php/php_my_profile.php';
include 'rs/css/css_my_profile.php';

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
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
                    if ($get_user_image!=null) 
                    {
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($get_user_image).'"style="width:30px;height:30px;border-radius: 5px;" />';
                    }
                    else
                    {
                        echo '<img  src="../resources/user.png" style="width:30px;height:30px;">';
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
                    <p><b><?php echo $get_user_name;?></b></p>
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
<body>

  <!-- hoverable side nav bar -->
          <div id="mySidenav" class="sidenav">
              <a href="home.php" id="home">Home<i class='far fa-calendar-alt'style=" font-size:32px;margin-left:93px;"></i></a>
               <a href="timetables.php" id="timetables">TimeTables<i class='fas fa-fax'style='font-size:29px;margin-left: 45px;'></i> </a>
               <a href="about_us.php" id="about">About Us<i class='far fa-comment-dots'style='font-size:32px;margin-left:65px;'></i></a>
         </div>

  <div class="row">

    <!--main-->
    <div class="main">
      <div style="  background-color: white;width: auto;height: 700px;margin: 20px 20px 20px 20px;">
        <center><br><br><br>

          <div class="pro_pic"><!--PROFILE PICTURE-->
                <?php
                  if ($get_user_image!=null) {
                    echo '<img src="data:image/jpeg;base64,'.base64_encode($get_user_image).'" style="border-radius:50%;"/>';
                  }
                  else
                  {
                    echo '<img  src="../resources/pro_pic_user.png">';
                  }
                ?>    
          </div><br>

          <p style="color: gray; font-size: 20px;"> <?php echo $get_user_name; ?></p><br><!--USERNAME-->

          <center>
            <div style="width: 500px;margin-top: 25px;">

              <form method="post" enctype="multipart/form-data" id="profile">
                <table>
                  <tr>
                    <td><img src="../resources/f.png"></td>
                    <td><input class="input" type="text" name="f_name" value="<?php echo $get_user_fname; ?>"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><img src="../resources/l.png"></td>
                    <td><input  class="input" type="text" name="l_name" value="<?php echo $get_user_lname; ?>"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><img src="../resources/mo.png"></td>
                    <td><input  class="input" type="text"  name="phone_no" value="<?php echo $get_user_phone_no; ?>"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><img src="../resources/gm.png"></td>
                    <td><input class="input"  type="text" name="e_mail" value="<?php echo $get_user_email; ?>" ></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><img src="../resources/pf.png"></td>
                    <td><center><input type="file" name="image" id="image" /></center></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><button id="sub" name="save"><img src="../resources/up.png"></button></td>
                  </tr>
                </table>
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


<!--------------------------------------------------------------------------------------FOOTER-START--> 
<footer>
  <a href="https://lmsnew.nsbm.lk/" target="blank"><div id="lms" title="Learning Management System" ></div></a>
</footer>
<!--------------------------------------------------------------------------------------FOOTER-END-->

</html>


