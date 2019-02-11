<!-------------INCLUDING CSS AND PHP CODE--> 
<?php
include 'rs/all/css_all_public.php';
include 'rs/php/php_timetables.php';
include 'rs/css/css_timetables.php';

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
<body onload="move(),startup_func()">

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

<!--------------------------------------------------------------------------------------BATCHNAME-->
            <table id="controler_table" style="margin-top:35px;margin-right: 50px; ">
              <tr>
                <td><b>Batch</b></td>
                <td style="border:  1px solid darkgrey; border-radius: 20px;">
                  <select name="Batch" id="inputbatch">
                    <option style="display: none;" value="17.2 plymouth">17.2 plymouth</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                  </select>
                </td>
              </tr>
            </table>
<!--------------------------------------------------------------------------------------WEEK-->
            <table id="controler_table" style="margin-top:35px; display: none;">
              <tr>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td><b>Week</b></td>
                <td style="border:  1px solid darkgrey; border-radius: 20px;" id="inputweeknum"></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
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

                  <select name="Month"  id="input_fake_month" 
                  onchange="year_and_month_change()">

                    <option  style="display: none;" value="<?php echo "$datename"; ?>" >
                      <?php echo "$datename"; ?>
                    </option>

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
                <td style="border:  1px solid darkgrey; border-radius: 20px;"  >
                  <input type="text" name=""  id="inputyear" onchange="year_and_month_change()" 
                  style="border: none; text-align: center; width: 100px;"
                  value="<?php echo date("Y");?>">
                </td>
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
        <td style="font-size: 25px; color: dimgray;padding-left: 10px; font-family: Century Gothic;">Timetable</td>
      </tr>
    </table>

<!---------------------------------------------------------------------------------------->
        </div>
        <!-----------------------------------------------------------------week_1-->
        <div id="week_1" style="padding: 0px 40px 40px 40px; position: relative;">

          <div class="div_btn next" onclick="w1_to_w2_btn()">&#8250;</div>

          <table class="lec_schedule">
            <caption style="margin-bottom: 20px;margin-top: 20px; font-size: 25px;">
              <b>1<sup>st</sup> Week</b>
            </caption>
          <tr>
            <th colspan="2" style="width: 300px;">Date</th>
            <th style="width: 350px;">Hall/Lab</th>
            <th style="width: 400px;">ModuleName/Code</th>
            <th style="width: 400px;">lecturer</th>
            <th style="width: 200px;">Time</th>
          </tr>
          <!----------------------------------------Sunday-->
          <tr bgcolor="#ddd" id="w1_sunday_1">
            <td rowspan="4" id="w1_0"></td>
            <td rowspan="4">Sunday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_sunday_2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_sunday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_sunday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Monday-->
          <tr bgcolor="#f2f2f2" id="w1_monday_1">
            <td rowspan="4" id="w1_1"></td>
            <td rowspan="4">Monday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_monday_2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_monday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_monday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Tuesday-->
          <tr bgcolor="#ddd" id="w1_tuesday_1">
            <td rowspan="4" id="w1_2"></td>
            <td rowspan="4">Tuesday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_tuesday_2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_tuesday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_tuesday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Wednesday-->
          <tr bgcolor="#f2f2f2" id="w1_wednesday_1">
            <td rowspan="4" id="w1_3"></td>
            <td rowspan="4">Wednesday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_wednesday_2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_wednesday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_wednesday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Thursday-->
          <tr bgcolor="#ddd" id="w1_thursday_1">
            <td rowspan="4" id="w1_4"></td>
            <td rowspan="4">Thursday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_thursday_2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_thursday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_thursday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Friday-->
          <tr bgcolor="#f2f2f2" id="w1_friday_1">
            <td rowspan="4" id="w1_5"></td>
            <td rowspan="4">Friday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_friday_2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_friday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_friday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Saturday-->
          <tr bgcolor="#ddd" id="w1_saturday_1">
            <td rowspan="4" id="w1_6"></td>
            <td rowspan="4">Saturday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_saturday_2"> 
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_saturday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_saturday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
        </table>
        </div>
        <!-----------------------------------------------------------------week_2-->
        <div id="week_2" style="padding: 0px 40px 40px 40px; position: relative;">

          <div class="div_btn next" onclick="w2_to_w3_btn()">&#8250;</div>
          <div class="div_btn previous" onclick="w2_to_w1_btn()">&#8249;</div>

          <table class="lec_schedule">
            <caption style="margin-bottom: 20px;margin-top: 20px; font-size: 25px;">
              <b>2<sup>nd</sup> Week</b>
            </caption>
          <tr>
            <th colspan="2" style="width: 300px;">Date</th>
            <th style="width: 350px;">Hall/Lab</th>
            <th style="width: 400px;">ModuleName/Code</th>
            <th style="width: 400px;">lecturer</th>
            <th style="width: 200px;">Time</th>
          </tr>
          <!----------------------------------------Sunday-->
          <tr bgcolor="#ddd">
            <td rowspan="4" id="w2_0"></td>
            <td rowspan="4">Sunday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Monday-->
          <tr bgcolor="#f2f2f2">
            <td rowspan="4" id="w2_1"></td>
            <td rowspan="4">Monday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Tuesday-->
          <tr bgcolor="#ddd">
            <td rowspan="4" id="w2_2"></td>
            <td rowspan="4">Tuesday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Wednesday-->
          <tr bgcolor="#f2f2f2">
            <td rowspan="4" id="w2_3"></td>
            <td rowspan="4">Wednesday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Thursday-->
          <tr bgcolor="#ddd">
            <td rowspan="4" id="w2_4"></td>
            <td rowspan="4">Thursday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Friday-->
          <tr bgcolor="#f2f2f2">
            <td rowspan="4" id="w2_5"></td>
            <td rowspan="4">Friday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Saturday-->
          <tr bgcolor="#ddd">
            <td rowspan="4" id="w2_6"></td>
            <td rowspan="4">Saturday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
        </table>
        </div>
                <!-----------------------------------------------------------------week_3-->
        <div id="week_3" style="padding: 0px 40px 40px 40px; position: relative;">

          <div class="div_btn next" onclick="w3_to_w4_btn()">&#8250;</div>
          <div class="div_btn previous" onclick="w3_to_w2_btn()">&#8249;</div>

          <table class="lec_schedule">
            <caption style="margin-bottom: 20px;margin-top: 20px; font-size: 25px;">
              <b>3<sup>rd</sup> Week</b>
            </caption>
          <tr>
            <th colspan="2" style="width: 300px;">Date</th>
            <th style="width: 350px;">Hall/Lab</th>
            <th style="width: 400px;">ModuleName/Code</th>
            <th style="width: 400px;">lecturer</th>
            <th style="width: 200px;">Time</th>
          </tr>
          <!----------------------------------------Sunday-->
          <tr bgcolor="#ddd">
            <td rowspan="4" id="w3_0"></td>
            <td rowspan="4">Sunday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Monday-->
          <tr bgcolor="#f2f2f2">
            <td rowspan="4" id="w3_1"></td>
            <td rowspan="4">Monday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Tuesday-->
          <tr bgcolor="#ddd">
            <td rowspan="4" id="w3_2"></td>
            <td rowspan="4">Tuesday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Wednesday-->
          <tr bgcolor="#f2f2f2">
            <td rowspan="4" id="w3_3"></td>
            <td rowspan="4">Wednesday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Thursday-->
          <tr bgcolor="#ddd">
            <td rowspan="4" id="w3_4"></td>
            <td rowspan="4">Thursday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Friday-->
          <tr bgcolor="#f2f2f2">
            <td rowspan="4" id="w3_5"></td>
            <td rowspan="4">Friday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Saturday-->
          <tr bgcolor="#ddd">
            <td rowspan="4" id="w3_6"></td>
            <td rowspan="4">Saturday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
        </table>
        </div>
        <!-----------------------------------------------------------------week_4-->
        <div id="week_4" style="padding: 0px 40px 40px 40px; position: relative;">

          <div class="div_btn next" onclick="w4_to_w5_btn()" id="w4_to_w5_btn">&#8250;</div>
          <div class="div_btn previous" onclick="w4_to_w3_btn()">&#8249;</div>

          <table class="lec_schedule">
            <caption style="margin-bottom: 20px;margin-top: 20px; font-size: 25px;">
              <b>4<sup>th</sup> Week</b>
            </caption>
          <tr>
            <th colspan="2" style="width: 300px;">Date</th>
            <th style="width: 350px;">Hall/Lab</th>
            <th style="width: 400px;">ModuleName/Code</th>
            <th style="width: 400px;">lecturer</th>
            <th style="width: 200px;">Time</th>
          </tr>
          <!----------------------------------------Sunday-->
          <tr bgcolor="#ddd">
            <td rowspan="4" id="w4_0"></td>
            <td rowspan="4">Sunday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Monday-->
          <tr bgcolor="#f2f2f2">
            <td rowspan="4" id="w4_1"></td>
            <td rowspan="4">Monday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Tuesday-->
          <tr bgcolor="#ddd">
            <td rowspan="4" id="w4_2"></td>
            <td rowspan="4">Tuesday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Wednesday-->
          <tr bgcolor="#f2f2f2">
            <td rowspan="4" id="w4_3"></td>
            <td rowspan="4">Wednesday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Thursday-->
          <tr bgcolor="#ddd">
            <td rowspan="4" id="w4_4"></td>
            <td rowspan="4">Thursday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Friday-->
          <tr bgcolor="#f2f2f2">
            <td rowspan="4" id="w4_5"></td>
            <td rowspan="4">Friday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Saturday-->
          <tr bgcolor="#ddd" id="w4_saturday_1">
            <td rowspan="4" id="w4_6"></td>
            <td rowspan="4">Saturday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w4_saturday_2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w4_saturday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w4_saturday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
        </table>
        </div>
                <!-----------------------------------------------------------------week_5-->
        <div id="week_5" style="padding: 0px 40px 40px 40px; position: relative;">

          <div class="div_btn next" onclick="w5_to_w6_btn()" id="w5_to_w6_btn">&#8250;</div>
          <div class="div_btn previous" onclick="w5_to_w4_btn()">&#8249;</div>

          <table class="lec_schedule">
            <caption style="margin-bottom: 20px;margin-top: 20px; font-size: 25px;">
              <b>5<sup>th</sup> Week</b>
            </caption>
          <tr>
            <th colspan="2" style="width: 300px;">Date</th>
            <th style="width: 350px;">Hall/Lab</th>
            <th style="width: 400px;">ModuleName/Code</th>
            <th style="width: 400px;">lecturer</th>
            <th style="width: 200px;">Time</th>
          </tr>
          <!----------------------------------------Sunday-->
          <tr bgcolor="#ddd" id="w5_sunday_1">
            <td rowspan="4" id="w5_0"></td>
            <td rowspan="4">Sunday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_sunday_2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_sunday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_sunday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Monday-->
          <tr bgcolor="#f2f2f2" id="w5_monday_1">
            <td rowspan="4" id="w5_1"></td>
            <td rowspan="4">Monday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w5_monday_2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2"id="w5_monday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w5_monday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Tuesday-->
          <tr bgcolor="#ddd" id="w5_tuesday_1">
            <td rowspan="4" id="w5_2"></td>
            <td rowspan="4">Tuesday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_tuesday_2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_tuesday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_tuesday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Wednesday-->
          <tr bgcolor="#f2f2f2" id="w5_wednesday_1">
            <td rowspan="4" id="w5_3"></td>
            <td rowspan="4">Wednesday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w5_wednesday_2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w5_wednesday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w5_wednesday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Thursday-->
          <tr bgcolor="#ddd" id="w5_thursday_1">
            <td rowspan="4" id="w5_4"></td>
            <td rowspan="4">Thursday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_thursday_2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_thursday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_thursday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Friday-->
          <tr bgcolor="#f2f2f2" id="w5_friday_1">
            <td rowspan="4" id="w5_5"></td>
            <td rowspan="4">Friday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w5_friday_2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w5_friday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w5_friday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Saturday-->
          <tr bgcolor="#ddd" id="w5_saturday_1">
            <td rowspan="4" id="w5_6"></td>
            <td rowspan="4">Saturday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr> 
          <tr bgcolor="#ddd" id="w5_saturday_2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_saturday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_saturday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
        </table>
        </div>
        <!-----------------------------------------------------------------week_6-->
        <div id="week_6" style="padding: 0px 40px 40px 40px; position: relative;">

          <div class="div_btn previous" onclick="w6_to_w5_btn()">&#8249;</div>

          <table class="lec_schedule">
            <caption style="margin-bottom: 20px;margin-top: 20px; font-size: 25px;">
              <b>6<sup>th</sup> Week</b>
            </caption>
          <tr>
            <th colspan="2" style="width: 300px;">Date</th>
            <th style="width: 350px;">Hall/Lab</th>
            <th style="width: 400px;">ModuleName/Code</th>
            <th style="width: 400px;">lecturer</th>
            <th style="width: 200px;">Time</th>
          </tr>
          <!----------------------------------------Sunday-->
          <tr bgcolor="#ddd" id="w6_sunday_1">
            <td rowspan="4" id="w6_0" ></td>
            <td rowspan="4">Sunday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w6_sunday_2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w6_sunday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd"id="w6_sunday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Monday-->
          <tr bgcolor="#f2f2f2" id="w6_monday_1">
            <td rowspan="4" id="w6_1"></td>
            <td rowspan="4">Monday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w6_monday_2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w6_monday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w6_monday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <!----------------------------------------Tuesday-->
          <tr bgcolor="#ddd" id="w6_tuesday_1">
            <td rowspan="4" id="w6_2"></td>
            <td rowspan="4">Tuesday</td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w6_tuesday_2">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w6_tuesday_3">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
          </tr>
          <tr bgcolor="#ddd" id="w6_tuesday_4">
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
            <td><input type="text" name=""></td>
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
<script type="text/javascript" src="rs/js/js_timetable2.js"></script>
<!--------------------------------------------------------------------------------------HOME-SCRIPT-END-->




<!--------------------------------------------------------------------------------------JS-START-->
<script  type="text/javascript" src="rs/all/js_all.js"></script>
<!--------------------------------------------------------------------------------------JS-END-->
