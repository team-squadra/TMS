<!-------------INCLUDING CSS AND PHP CODE--> 
<?php
include 'resources/css/css_all_public.php';
include 'resources/php/php_adminaccount.php';
include 'resources/css/css_adminaccount.php';
?>
<!--------------> 

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
<!--------------------------------------------------------------------------------------TITLE-START-->
<title>Timetable Management System</title>
<link rel="icon" type="image/png" href="resources/assests/yy.ico">
<!--------------------------------------------------------------------------------------TITLE-START-->
</head>


<!--------------------------------------------------------------------------------------HEADER-START-->  
<header>
  <div>
      <div class="logo">
            <table>
                <tr>
                    <td><img src="resources/assests/tms.png" style="width: 30px;height: 30px;"></td>
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
                        echo '<img  src="resources/assests/admin.png" style="width:30px;height:30px;">';
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
  <div class="row">

    <!--side 1-->
    <div class="side">
      <div style="  background-color: white;width: auto;height: 500px;margin: 20px 20px 20px 20px;">
        <a href="adminhome.php">home</a>
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
                    echo '<img  src="resources/assests/yyy.png">';
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
                <input id="sub" type="submit" name="save" value="Save" ></td>
              </form>
            </div>
          </center>
        </center>               
      </div>
    </div>


    <!--side 2-->
    <div class="side">
      <div style="  background-color: white;width: auto;height: 200px; margin: 20px 20px 20px 20px;"></div>
      <div style="  background-color: white;width: auto;height: 400px;margin: 20px 20px 20px 20px;"></div>
    </div>
    
  </div>
</body>
<!--------------------------------------------------------------------------------------BODY-END-->

</html>


