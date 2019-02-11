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

  <div class="row">

    <!--main-->
    <div class="main">
      <div style="  background-color: white;width: auto;height: auto;margin: 20px 20px 20px 20px;
      padding: 0px 20px 20px 20px;">
              <div style="width: auto;height: 90px;">

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
                  <button onclick="week_up_function()">
                    <img  id="weekup" src="../resources/up_line.png" style="width: 25px;height: 25px;border: none;" 
                        onmouseover="week_up_func_in()" onmouseout="week_up_func_out()">
                  </button>
                </td>
              </tr>
              <tr>
                <td><b>Week</b></td>
                <td style="border:  1px solid darkgrey; border-radius: 20px;" id="inputweeknum"></td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <button onclick="week_down_function()">
                    <img  id="weekdown" src="../resources/down_line.png" style="width: 25px;height: 25px;border: none;" 
                        onmouseover="week_down_func_in()" onmouseout="week_down_func_out()">
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
                       else
                       {
                         $datename ="";

                       }
                      ?>
            <table id="controler_table" style="margin-top:35px; ">
              <tr>
                <td><b>Month</b></td>
                <td style="border:  1px solid darkgrey; border-radius: 20px;">
                  <input type="" name="" style="display: none;" value="<?php echo "$date"; ?>" id="input_fake_month">
                  <select name="Month" >
                    <option value="<?php echo "$datename"; ?>"><?php echo "$datename"; ?></option>
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
                  <button onclick="year_up_function()">
                    <img  id="yearup" src="../resources/up_line.png" style="width: 25px;height: 25px;border: none;" 
                        onmouseover="year_up_func_in()" onmouseout="year_up_func_out()">
                  </button>
                </td>
              </tr>
              <tr>
                <td><b>Year</b></td>
                <td style="border:  1px solid darkgrey; border-radius: 20px;" id="inputyear"><?php echo date("Y");?></td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <button onclick="year_down_function()">
                    <img  id="yeardown" src="../resources/down_line.png" style="width: 25px;height: 25px;border: none;" 
                        onmouseover="year_down_func_in()" onmouseout="year_down_func_out()">
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
        </div>
        <!-----------------------------------------------------------------BATCH SECTER 01-->
        <div id="secter_01" style="padding: 0px 40px 40px 40px; position: relative;">

          <button style="position: absolute;bottom: 330px; right: 10px; background-color: transparent; border: none; cursor: pointer;"
              onclick="secter_02_show_func()" onmouseover="sec01_to_sec02_func_in()" onmouseout="sec01_to_sec02_func_out()">
            <img id="sec01_to_sec02" src="../resources/right_lite.png" style="width: 25px;height: 25px;border: none;" >
          </button>

          <table id="lec_schedule">
          <tr>
            <th style="width: 400px;">Batch</th>
            <th style="width: 500px;">Hall/Lab</th>
            <th style="width: 500px;">ModuleName/Code</th>
            <th style="width: 500px;">lecturer</th>
            <th style="width: 300px;">Time</th>
          </tr>
          <!----------------------------------------BATCH 01-->
          <tr bgcolor="#ffeoco">
            <td rowspan="4">batch 01</td>
            <td>adas</td>
            <td>sdasd</td>
            <td>dasd</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffeoco">
            <td>sdas</td>
            <td>dasd</td>
            <td>sdsa</td>
            <td>sdasd</td>
          </tr>
          <tr bgcolor="#ffeoco">
            <td>dasd</td>
            <td>sda</td>
            <td>sdas</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffeoco">
            <td>sda</td>
            <td>sdas</td>
            <td>asda</td>
            <td>asd</td>
          </tr>
          <!----------------------------------------BATCH 02-->
          <tr bgcolor="#ffco8o">
            <td rowspan="4">batch 02</td>
            <td>adas</td>
            <td>sdasd</td>
            <td>dasd</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffco8o">
            <td>sdas</td>
            <td>dasd</td>
            <td>sdsa</td>
            <td>sdasd</td>
          </tr>
          <tr bgcolor="#ffco8o">
            <td>dasd</td>
            <td>sda</td>
            <td>sdas</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffco8o">
            <td>sda</td>
            <td>sdas</td>
            <td>asda</td>
            <td>asd</td>
          </tr>
          <!----------------------------------------BATCH 03-->
          <tr bgcolor="#ffffco">
            <td rowspan="4">batch 03</td>
            <td>adas</td>
            <td>sdasd</td>
            <td>dasd</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffffco">
            <td>sdas</td>
            <td>dasd</td>
            <td>sdsa</td>
            <td>sdasd</td>
          </tr>
          <tr bgcolor="#ffffco">
            <td>dasd</td>
            <td>sda</td>
            <td>sdas</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffffco">
            <td>sda</td>
            <td>sdas</td>
            <td>asda</td>
            <td>asd</td>
          </tr>
          <!----------------------------------------BATCH 04-->
          <tr bgcolor="#coffco">
            <td rowspan="4">batch 04</td>
            <td>adas</td>
            <td>sdasd</td>
            <td>dasd</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#coffco">
            <td>sdas</td>
            <td>dasd</td>
            <td>sdsa</td>
            <td>sdasd</td>
          </tr>
          <tr bgcolor="#coffco">
            <td>dasd</td>
            <td>sda</td>
            <td>sdas</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#coffco">
            <td>sda</td>
            <td>sdas</td>
            <td>asda</td>
            <td>asd</td>
          </tr>
        </table>
        </div>
        <!-----------------------------------------------------------------BATCH SECTER 02-->
        <div id="secter_02" style="padding: 0px 40px 40px 40px; position: relative; display: none;">

          <button style="position: absolute;bottom: 330px; left: 10px; background-color: transparent; border: none; cursor: pointer;"
             onclick="secter_01_show_func()" onmouseover="sec02_to_sec01_func_in()" onmouseout="sec02_to_sec01_func_out()">
            <img  id="sec02_to_sec01" src="../resources/left_lite.png" style="width: 25px;height: 25px;border: none;" >
          </button>
          <button style="position: absolute;bottom: 330px; right: 10px; background-color: transparent; border: none; cursor: pointer;"
            onclick="secter_03_show_func()" onmouseover="sec02_to_sec03_func_in()" onmouseout="sec02_to_sec03_func_out()">
            <img  id="sec02_to_sec03"  src="../resources/right_lite.png" style="width: 25px;height: 25px;border: none;" >
          </button>

          <table id="lec_schedule">
          <tr>
            <th style="width: 400px;">Batch</th>
            <th style="width: 500px;">Hall/Lab</th>
            <th style="width: 500px;">ModuleName/Code</th>
            <th style="width: 500px;">lecturer</th>
            <th style="width: 300px;">Time</th>
          </tr>
          <!----------------------------------------BATCH 05-->
          <tr bgcolor="#ffeoco">
            <td rowspan="4">batch 05</td>
            <td>adas</td>
            <td>sdasd</td>
            <td>dasd</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffeoco">
            <td>sdas</td>
            <td>dasd</td>
            <td>sdsa</td>
            <td>sdasd</td>
          </tr>
          <tr bgcolor="#ffeoco">
            <td>dasd</td>
            <td>sda</td>
            <td>sdas</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffeoco">
            <td>sda</td>
            <td>sdas</td>
            <td>asda</td>
            <td>asd</td>
          </tr>
          <!----------------------------------------BATCH 06-->
          <tr bgcolor="#ffco8o">
            <td rowspan="4">batch 06</td>
            <td>adas</td>
            <td>sdasd</td>
            <td>dasd</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffco8o">
            <td>sdas</td>
            <td>dasd</td>
            <td>sdsa</td>
            <td>sdasd</td>
          </tr>
          <tr bgcolor="#ffco8o">
            <td>dasd</td>
            <td>sda</td>
            <td>sdas</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffco8o">
            <td>sda</td>
            <td>sdas</td>
            <td>asda</td>
            <td>asd</td>
          </tr>
          <!----------------------------------------BATCH 07-->
          <tr bgcolor="#ffffco">
            <td rowspan="4">batch 07</td>
            <td>adas</td>
            <td>sdasd</td>
            <td>dasd</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffffco">
            <td>sdas</td>
            <td>dasd</td>
            <td>sdsa</td>
            <td>sdasd</td>
          </tr>
          <tr bgcolor="#ffffco">
            <td>dasd</td>
            <td>sda</td>
            <td>sdas</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffffco">
            <td>sda</td>
            <td>sdas</td>
            <td>asda</td>
            <td>asd</td>
          </tr>
          <!----------------------------------------BATCH 08-->
          <tr bgcolor="#coffco">
            <td rowspan="4">batch 08</td>
            <td>adas</td>
            <td>sdasd</td>
            <td>dasd</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#coffco">
            <td>sdas</td>
            <td>dasd</td>
            <td>sdsa</td>
            <td>sdasd</td>
          </tr>
          <tr bgcolor="#coffco">
            <td>dasd</td>
            <td>sda</td>
            <td>sdas</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#coffco">
            <td>sda</td>
            <td>sdas</td>
            <td>asda</td>
            <td>asd</td>
          </tr>
        </table>
        </div>
        <!-----------------------------------------------------------------BATCH SECTER 03-->
        <div id="secter_03" style="padding: 0px 40px 40px 40px; position: relative; display: none;">

          <button style="position: absolute;bottom: 330px; left: 10px; background-color: transparent; border: none; cursor: pointer;"
             onclick="secter_02_show_func()" onmouseover="sec03_to_sec02_func_in()" onmouseout="sec03_to_sec02_func_out()">
            <img id="sec03_to_sec02"  src="../resources/left_lite.png" style="width: 25px;height: 25px;border: none;" >
          </button>

          <table id="lec_schedule">
          <tr>
            <th style="width: 400px;">Batch</th>
            <th style="width: 500px;">Hall/Lab</th>
            <th style="width: 500px;">ModuleName/Code</th>
            <th style="width: 500px;">lecturer</th>
            <th style="width: 300px;">Time</th>
          </tr>
          <!----------------------------------------BATCH 09-->
          <tr bgcolor="#ffeoco">
            <td rowspan="4">batch 09</td>
            <td>adas</td>
            <td>sdasd</td>
            <td>dasd</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffeoco">
            <td>sdas</td>
            <td>dasd</td>
            <td>sdsa</td>
            <td>sdasd</td>
          </tr>
          <tr bgcolor="#ffeoco">
            <td>dasd</td>
            <td>sda</td>
            <td>sdas</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffeoco">
            <td>sda</td>
            <td>sdas</td>
            <td>asda</td>
            <td>asd</td>
          </tr>
          <!----------------------------------------BATCH 10-->
          <tr bgcolor="#ffco8o">
            <td rowspan="4">batch 10</td>
            <td>adas</td>
            <td>sdasd</td>
            <td>dasd</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffco8o">
            <td>sdas</td>
            <td>dasd</td>
            <td>sdsa</td>
            <td>sdasd</td>
          </tr>
          <tr bgcolor="#ffco8o">
            <td>dasd</td>
            <td>sda</td>
            <td>sdas</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffco8o">
            <td>sda</td>
            <td>sdas</td>
            <td>asda</td>
            <td>asd</td>
          </tr>
          <!----------------------------------------BATCH 11-->
          <tr bgcolor="#ffffco">
            <td rowspan="4">batch 11</td>
            <td>adas</td>
            <td>sdasd</td>
            <td>dasd</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffffco">
            <td>sdas</td>
            <td>dasd</td>
            <td>sdsa</td>
            <td>sdasd</td>
          </tr>
          <tr bgcolor="#ffffco">
            <td>dasd</td>
            <td>sda</td>
            <td>sdas</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#ffffco">
            <td>sda</td>
            <td>sdas</td>
            <td>asda</td>
            <td>asd</td>
          </tr>
          <!----------------------------------------BATCH 12-->
          <tr bgcolor="#coffco">
            <td rowspan="4">batch 12</td>
            <td>adas</td>
            <td>sdasd</td>
            <td>dasd</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#coffco">
            <td>sdas</td>
            <td>dasd</td>
            <td>sdsa</td>
            <td>sdasd</td>
          </tr>
          <tr bgcolor="#coffco">
            <td>dasd</td>
            <td>sda</td>
            <td>sdas</td>
            <td>dsad</td>
          </tr>
          <tr bgcolor="#coffco">
            <td>sda</td>
            <td>sdas</td>
            <td>asda</td>
            <td>asd</td>
          </tr>
        </table>
        </div>

      </div>
    </div>
  </div>
</body>
<!--------------------------------------------------------------------------------------BODY-END-->
</html>


<!--------------------------------------------------------------------------------------HOME-SCRIPT-START-->
<script type="text/javascript" src="rs/js/js_home.js"></script>
<!--------------------------------------------------------------------------------------HOME-SCRIPT-END-->


<!--------------------------------------------------------------------------------------JS-START-->
<script  type="text/javascript" src="rs/all/js_all.js"></script>
<!--------------------------------------------------------------------------------------JS-END-->