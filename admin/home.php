<!-------------INCLUDING CSS AND PHP CODE--> 
<?php
include 'rs/all/css_all_public.php';
include 'rs/php/php_home.php';
include 'rs/css/css_home.php';
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
<body onload="move(),find_week_number()">

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



<div class="row"><!--row-->
  <div class="main"><!--main-->
    <div style="  background-color: white;width: auto;height: auto;margin: 20px 20px 20px 20px;padding: 0px 20px 20px 20px;"><!--container div-->
      <div style="width: auto;height: 90px;"><!--controler-->
<!--------------------------------------------------------------------------------------DAY-->
        <table id="controler_table" style="margin-top:35px;margin-right: 50px; ">
          <tr>
            <td><b>Day</b></td>
            <td style="border:  1px solid darkgrey; border-radius: 20px;">
              <select name="Month" id="inputday">
                <option value="<?php echo date("l");?>"><?php echo date("l");?></option>
                <option value="Sunday">Sunday</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
              </select>
            </td>
          </tr>
        </table>
<!--------------------------------------------------------------------------------------WEEK-->
        <table id="controler_table">
          <tr>
            <td></td>
            <td>
              <button onclick="week_up_function()" id="week_up_btn">
                <img  id="weekup" src="../resources/up_line.png" style="width: 25px;height: 25px;border: none;" onmouseover="week_up_func_in()" onmouseout="week_up_func_out()">
              </button>
            </td>
          </tr>
          <tr>
            <td><b>Week</b></td>
            <td style="border:  1px solid darkgrey; border-radius: 20px;"  >
              <input type="text" name="week"  id="inputweeknum"style="border: none; text-align: center; width: 100px;">
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <button onclick="week_down_function()" id="week_down_btn">
                <img  id="weekdown" src="../resources/down_line.png" style="width: 25px;height: 25px;border: none;" onmouseover="week_down_func_in()" onmouseout="week_down_func_out()">
              </button>
            </td>
          </tr>
        </table>
<!--------------------------------------------------------------------------------------MONTH-->
        <?php 
          $date=date("m");

          if ($date==1) {
            $datename ="January";
          }
          else if ($date==2) {
            $datename ="February";
          }
          else if ($date==3) {
            $datename ="March";
          }
          else if ($date==4) {
            $datename ="April";
          }
          else if ($date==5) {
            $datename ="May";
          }
          else if ($date==6) {
            $datename ="June";
          }
          else if ($date==7) {
            $datename ="July";
          }
          else if ($date==8) {
            $datename ="August";
          }
          else if ($date==9) {
            $datename ="September";
          }
          else if ($date==10) {
            $datename ="October";
          }
          else if ($date==11) {
            $datename ="November";
          }
          else if ($date==12) {
            $datename ="December";
          }
          else{
            $datename ="";
          }
        ?>
        <table id="controler_table" style="margin-top:35px; ">
          <tr>
            <td><b>Month</b></td>
            <td style="border:  1px solid darkgrey; border-radius: 20px;">
              <select name="month"  id="input_fake_month" >
                <option  style="display: none;" value="<?php echo "$datename"; ?>"><?php echo "$datename"; ?></option>
                  <option value="January">January</option>
                  <option value="February">February</option>
                  <option value="March">March</option>
                  <option value="April">April</option>
                  <option value="May">May</option>
                  <option value="June">June</option>
                  <option value="July">July</option>
                  <option value="August">August</option>
                  <option value="September">September</option>
                  <option value="October">October</option>
                  <option value="November">November</option>
                  <option value="December">December</option>
                </select>
            </td>
          </tr>
        </table>
<!--------------------------------------------------------------------------------------YEAR-->
        <table id="controler_table" >
          <tr>
            <td></td>
            <td>
              <button onclick="year_up_function()" id="year_up_btn">
                <img  id="yearup" src="../resources/up_line.png" style="width: 25px;height: 25px;border: none;"onmouseover="year_up_func_in()" onmouseout="year_up_func_out()">
              </button>
            </td>
          </tr>
          <tr>
            <td><b>Year</b></td>
            <td style="border:  1px solid darkgrey; border-radius: 20px;">
              <input type="text" name="year"  id="inputyear"style="border: none; text-align: center; width: 100px;"value="<?php echo date("Y");?>"/>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <button onclick="year_down_function()" id="year_down_btn">
                <img  id="yeardown" src="../resources/down_line.png" style="width: 25px;height: 25px;border: none;" onmouseover="year_down_func_in()" onmouseout="year_down_func_out()">
              </button>
            </td>
          </tr>
        </table>
<!--------------------------------------------------------------------------------------PAGE-NAME-->
        <table style="padding-top: 20px;">
          <tr>
            <td><img src="../resources/lec_schedule.png" style="width: 30px;height: 30px;"></td>
            <td style="font-size: 25px; color: dimgray;padding-left: 10px; font-family: Century Gothic;">Lecture Schedule</td>
          </tr>
        </table>
<!---------------------------------------------------------------------------------------->
      </div><!--controler-->
<!-----------------------------------------------------------------BATCH-->
      <div id="batch_div" style="padding: 20px 40px 40px 40px; position: relative; "><!--batch div-->
        
      </div><!--batch div-->
<!-----------------------------------------------------------------BATCH-->



    </div><!--container div-->
  </div><!--main-->
</div><!--row-->
  <!--------------------------------------------------------------------------------------div_result-->
  <div id="div_result" ></div>
<!--------------------------------------------------------------------------------------div_result-->

</body>
<!--------------------------------------------------------------------------------------BODY-END-->
</html>


<!--------------------------------------------------------------------------------------HOME-SCRIPT-START-->
<script type="text/javascript" src="rs/js/js_home3.js"></script>
<!--------------------------------------------------------------------------------------HOME-SCRIPT-END-->


<!--------------------------------------------------------------------------------------JS-START-->
<script  type="text/javascript" src="rs/all/js_all.js"></script>
<!--------------------------------------------------------------------------------------JS-END-->