<!-------------INCLUDING CSS AND PHP CODE--> 
<?php
include 'resources/css/css_adminhome.php';
include 'resources/php/php_adminhome.php';
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
                  <td><img src="resources/assests/tt.png" style="width: 30px;height: 30px;"></td>

                  <td><img src="resources/assests/mm.png" style="width: 30px;height: 30px;"></td>

                  <td><img src="resources/assests/ss.png" style="width: 30px;height: 30px;"></td>
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
                    <a href="login.php">Sign out</a>
                  
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

    <!--main-->
    <div class="main">
      <div style="  background-color: white;width: auto;height: 700px;margin: 20px 20px 20px 20px;">
      </div>
    </div>

    <!--side-->
    <div class="side">
      <div style="  background-color: white;width: auto;height: 200px; margin: 20px 20px 20px 20px;"></div>
      <div style="  background-color: white;width: auto;height: 400px;margin: 20px 20px 20px 20px;"></div>
    </div>

  </div>

</body>
<!--------------------------------------------------------------------------------------BODY-END-->

</html>



