<!-------------INCLUDING CSS AND PHP CODE--> 
<?php
include 'rs/all/css_all_public.php';
include 'rs/all/all_php.php';
include 'rs/php/php_timetables.php';
include 'rs/css/css_timetables.php';

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
<body onload="move(),startup_func()" >

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
  <label style='color: white;padding-left: 10px; font-size: 50px;font-weight: 100;line-height: 1.2;'>Timetable</label>
</div>
<!-----------------------------------------------------------------BATCH-->
  <div class="row">
<form method="post" action="" >
    <!--main-->
    <div class="main" id="main_div">
      <div style="  background-color: white;width: auto;height: auto;margin: 20px 20px 20px 20px;position: relative;padding: 0px 20px 20px 20px;">
              <div style="width: auto;height: 90px;">
<!--------------------------------------------------------------------------------------BATCHNAME-->
            <table id="controler_table" style="margin-top:35px;margin-right: 50px; ">
              <tr>
                <td><b>Batch</b></td>
                <td style="border:  2px solid darkgrey; border-radius: 20px;">
                  <select name="batch" id="inputbatch">
                    <?php 
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    } 
                    $sql = "SELECT * FROM `batches` WHERE id =1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc())
                      {
                        if ($row["B1"]!='') {
                          echo "<option value='". $row["B1"]."'>". $row["B1"]."</option>";
                        }
                        if ($row["B2"]!='') {
                          echo "<option value='". $row["B2"]."'>". $row["B2"]."</option>";
                        }
                        if ($row["B3"]!='') {
                          echo "<option value='". $row["B3"]."'>". $row["B3"]."</option>";
                        }
                        if ($row["B4"]!='') {
                          echo "<option value='". $row["B4"]."'>". $row["B4"]."</option>";
                        }
                        if ($row["B5"]!='') {
                          echo "<option value='". $row["B5"]."'>". $row["B5"]."</option>";
                        }
                        if ($row["B6"]!='') {
                          echo "<option value='". $row["B6"]."'>". $row["B6"]."</option>";
                        }
                        if ($row["B7"]!='') {
                          echo "<option value='". $row["B7"]."'>". $row["B7"]."</option>";
                        }
                        if ($row["B8"]!='') {
                          echo "<option value='". $row["B8"]."'>". $row["B8"]."</option>";
                        }
                        if ($row["B9"]!='') {
                          echo "<option value='". $row["B9"]."'>". $row["B9"]."</option>";
                        }
                        if ($row["B10"]!='') {
                          echo "<option value='". $row["B10"]."'>". $row["B10"]."</option>";
                        }
                        if ($row["B11"]!='') {
                          echo "<option value='". $row["B11"]."'>". $row["B11"]."</option>";
                        }
                        if ($row["B12"]!='') {
                          echo "<option value='". $row["B12"]."'>". $row["B12"]."</option>";
                        }
                      }
                    }
                    else{}
                    ?>
                  </select>
                </td>
              </tr>
            </table>
<!--------------------------------------------------------------------------------------WEEK-->
            <table id="controler_table" style="margin-top:35px;display: none;">
              <tr>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td><b>Week</b></td>
                <td style="border:  2px solid darkgrey; border-radius: 20px;"  >
                  <input type="text" name="week"  id="inputweeknum"
                  style="border: none; text-align: center; width: 100px;"
                  >
                </td>
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
                <td style="border:  2px solid darkgrey; border-radius: 20px;">

                  <select name="month"  id="input_fake_month" 
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
            <td style="padding: 10px;">
              <a onclick="year_up_function()" id="year_up_btn">&#10096;</a>
            </td>
          </tr>
          <tr>
            <td><b>Year</b></td>
            <td style="border:  2px solid darkgrey; border-radius: 20px;">
              <input type="text" name="year"  id="inputyear"style="border: none; text-align: center; width: 100px;"value="<?php echo date("Y");?>"/>
            </td>
          </tr>
          <tr>
            <td></td>
            <td style="padding: 10px;">
              <a onclick="year_down_function()" id="year_down_btn">&#10097;</a>
            </td>
          </tr>
        </table>
<!--------------------------------------------------------------------------------------YEAR-->


<!--------------------------------------------------------------------------------------INSERT/BUTTON-->
  <input type="submit" value="insert/update"  name="insert_or_update"    id="insert_update"  /> 
<!--------------------------------------------------------------------------------------INSERT/BUTTON-->

<!---------------------------------------------------------------------------------------->
<datalist id="halllist">
<?php halldetails($conn); ?>
</datalist>
        </div>
        <!-----------------------------------------------------------------week_1-->
        <div id="week_1" style="padding: 0px 40px 40px 40px; position: relative;">

          <div class="div_btn next" onclick="w1_to_w2_btn()" id="w1_to_w2_btn">&#8250;</div>

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
            <td><input type="text" name="w1_sun_h_1" id="w1_sun_h_1" list="halllist"></td>
            <td><input type="text" name="w1_sun_m_1" id="w1_sun_m_1"></td>
            <td><input type="text" name="w1_sun_l_1" id="w1_sun_l_1"></td>
            <td><input type="text" name="w1_sun_t_1" id="w1_sun_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_sunday_2">
            <td><input type="text" name="w1_sun_h_2" id="w1_sun_h_2" list="halllist"></td>
            <td><input type="text" name="w1_sun_m_2" id="w1_sun_m_2"></td>
            <td><input type="text" name="w1_sun_l_2" id="w1_sun_l_2"></td>
            <td><input type="text" name="w1_sun_t_2" id="w1_sun_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_sunday_3">
            <td><input type="text" name="w1_sun_h_3" id="w1_sun_h_3" list="halllist"></td>
            <td><input type="text" name="w1_sun_m_3" id="w1_sun_m_3"></td>
            <td><input type="text" name="w1_sun_l_3" id="w1_sun_l_3"></td>
            <td><input type="text" name="w1_sun_t_3" id="w1_sun_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_sunday_4">
            <td><input type="text" name="w1_sun_h_4" id="w1_sun_h_4" list="halllist"></td>
            <td><input type="text" name="w1_sun_m_4" id="w1_sun_m_4"></td>
            <td><input type="text" name="w1_sun_l_4" id="w1_sun_l_4"></td>
            <td><input type="text" name="w1_sun_t_4" id="w1_sun_t_4"></td>
          </tr>
          <!----------------------------------------Monday-->
          <tr bgcolor="#f2f2f2" id="w1_monday_1">
            <td rowspan="4" id="w1_1"></td>
            <td rowspan="4">Monday</td>
            <td><input type="text" name="w1_mon_h_1" id="w1_mon_h_1" list="halllist"></td>
            <td><input type="text" name="w1_mon_m_1" id="w1_mon_m_1"></td>
            <td><input type="text" name="w1_mon_l_1" id="w1_mon_l_1"></td>
            <td><input type="text" name="w1_mon_t_1" id="w1_mon_t_1"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_monday_2">
            <td><input type="text" name="w1_mon_h_2" id="w1_mon_h_2" list="halllist"></td>
            <td><input type="text" name="w1_mon_m_2" id="w1_mon_m_2"></td>
            <td><input type="text" name="w1_mon_l_2" id="w1_mon_l_2"></td>
            <td><input type="text" name="w1_mon_t_2" id="w1_mon_t_2"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_monday_3">
            <td><input type="text" name="w1_mon_h_3" id="w1_mon_h_3" list="halllist"></td>
            <td><input type="text" name="w1_mon_m_3" id="w1_mon_m_3"></td>
            <td><input type="text" name="w1_mon_l_3" id="w1_mon_l_3"></td>
            <td><input type="text" name="w1_mon_t_3" id="w1_mon_t_3"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_monday_4">
            <td><input type="text" name="w1_mon_h_4" id="w1_mon_h_4" list="halllist"></td>
            <td><input type="text" name="w1_mon_m_4" id="w1_mon_m_4"></td>
            <td><input type="text" name="w1_mon_l_4" id="w1_mon_l_4"></td>
            <td><input type="text" name="w1_mon_t_4" id="w1_mon_t_4"></td>
          </tr>
          <!----------------------------------------Tuesday-->
          <tr bgcolor="#ddd" id="w1_tuesday_1">
            <td rowspan="4" id="w1_2"></td>
            <td rowspan="4">Tuesday</td>
            <td><input type="text" name="w1_tue_h_1" id="w1_tue_h_1" list="halllist"></td>
            <td><input type="text" name="w1_tue_m_1" id="w1_tue_m_1"></td>
            <td><input type="text" name="w1_tue_l_1" id="w1_tue_l_1"></td>
            <td><input type="text" name="w1_tue_t_1" id="w1_tue_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_tuesday_2">
            <td><input type="text" name="w1_tue_h_2" id="w1_tue_h_2" list="halllist"></td>
            <td><input type="text" name="w1_tue_m_2" id="w1_tue_m_2"></td>
            <td><input type="text" name="w1_tue_l_2" id="w1_tue_l_2"></td>
            <td><input type="text" name="w1_tue_t_2" id="w1_tue_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_tuesday_3">
            <td><input type="text" name="w1_tue_h_3" id="w1_tue_h_3" list="halllist"></td>
            <td><input type="text" name="w1_tue_m_3" id="w1_tue_m_3"></td>
            <td><input type="text" name="w1_tue_l_3" id="w1_tue_l_3"></td>
            <td><input type="text" name="w1_tue_t_3" id="w1_tue_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_tuesday_4">
            <td><input type="text" name="w1_tue_h_4" id="w1_tue_h_4" list="halllist"></td>
            <td><input type="text" name="w1_tue_m_4" id="w1_tue_m_4"></td>
            <td><input type="text" name="w1_tue_l_4" id="w1_tue_l_4"></td>
            <td><input type="text" name="w1_tue_t_4" id="w1_tue_t_4"></td>
          </tr>
          <!----------------------------------------Wednesday-->
          <tr bgcolor="#f2f2f2" id="w1_wednesday_1">
            <td rowspan="4" id="w1_3"></td>
            <td rowspan="4">Wednesday</td>
            <td><input type="text" name="w1_wed_h_1" id="w1_wed_h_1" list="halllist"></td>
            <td><input type="text" name="w1_wed_m_1" id="w1_wed_m_1"></td>
            <td><input type="text" name="w1_wed_l_1" id="w1_wed_l_1"></td>
            <td><input type="text" name="w1_wed_t_1" id="w1_wed_t_1"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_wednesday_2">
            <td><input type="text" name="w1_wed_h_2" id="w1_wed_h_2" list="halllist"></td>
            <td><input type="text" name="w1_wed_m_2" id="w1_wed_m_2"></td>
            <td><input type="text" name="w1_wed_l_2" id="w1_wed_l_2"></td>
            <td><input type="text" name="w1_wed_t_2" id="w1_wed_t_2"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_wednesday_3">
            <td><input type="text" name="w1_wed_h_3" id="w1_wed_h_3" list="halllist"></td>
            <td><input type="text" name="w1_wed_m_3" id="w1_wed_m_3"></td>
            <td><input type="text" name="w1_wed_l_3" id="w1_wed_l_3"></td>
            <td><input type="text" name="w1_wed_t_3" id="w1_wed_t_3"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_wednesday_4">
            <td><input type="text" name="w1_wed_h_4" id="w1_wed_h_4" list="halllist"></td>
            <td><input type="text" name="w1_wed_m_4" id="w1_wed_m_4"></td>
            <td><input type="text" name="w1_wed_l_4" id="w1_wed_l_4"></td>
            <td><input type="text" name="w1_wed_t_4" id="w1_wed_t_4"></td>
          </tr>
          <!----------------------------------------Thursday-->
          <tr bgcolor="#ddd" id="w1_thursday_1">
            <td rowspan="4" id="w1_4"></td>
            <td rowspan="4">Thursday</td>
            <td><input type="text" name="w1_thu_h_1" id="w1_thu_h_1" list="halllist"></td>
            <td><input type="text" name="w1_thu_m_1" id="w1_thu_m_1"></td>
            <td><input type="text" name="w1_thu_l_1" id="w1_thu_l_1"></td>
            <td><input type="text" name="w1_thu_t_1" id="w1_thu_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_thursday_2">
            <td><input type="text" name="w1_thu_h_2" id="w1_thu_h_2" list="halllist"></td>
            <td><input type="text" name="w1_thu_m_2" id="w1_thu_m_2"></td>
            <td><input type="text" name="w1_thu_l_2" id="w1_thu_l_2"></td>
            <td><input type="text" name="w1_thu_t_2" id="w1_thu_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_thursday_3">
            <td><input type="text" name="w1_thu_h_3" id="w1_thu_h_3" list="halllist"></td>
            <td><input type="text" name="w1_thu_m_3" id="w1_thu_m_3"></td>
            <td><input type="text" name="w1_thu_l_3" id="w1_thu_l_3"></td>
            <td><input type="text" name="w1_thu_t_3" id="w1_thu_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_thursday_4">
            <td><input type="text" name="w1_thu_h_4" id="w1_thu_h_4" list="halllist"></td>
            <td><input type="text" name="w1_thu_m_4" id="w1_thu_m_4"></td>
            <td><input type="text" name="w1_thu_l_4" id="w1_thu_l_4"></td>
            <td><input type="text" name="w1_thu_t_4" id="w1_thu_t_4"></td>
          </tr>
          <!----------------------------------------Friday-->
          <tr bgcolor="#f2f2f2" id="w1_friday_1">
            <td rowspan="4" id="w1_5"></td>
            <td rowspan="4">Friday</td>
            <td><input type="text" name="w1_fri_h_1" id="w1_fri_h_1" list="halllist"></td>
            <td><input type="text" name="w1_fri_m_1" id="w1_fri_m_1"></td>
            <td><input type="text" name="w1_fri_l_1" id="w1_fri_l_1"></td>
            <td><input type="text" name="w1_fri_t_1" id="w1_fri_t_1"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_friday_2">
            <td><input type="text" name="w1_fri_h_2" id="w1_fri_h_2" list="halllist"></td>
            <td><input type="text" name="w1_fri_m_2" id="w1_fri_m_2"></td>
            <td><input type="text" name="w1_fri_l_2" id="w1_fri_l_2"></td>
            <td><input type="text" name="w1_fri_t_2" id="w1_fri_t_2"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_friday_3">
            <td><input type="text" name="w1_fri_h_3" id="w1_fri_h_3" list="halllist"></td>
            <td><input type="text" name="w1_fri_m_3" id="w1_fri_m_3"></td>
            <td><input type="text" name="w1_fri_l_3" id="w1_fri_l_3"></td>
            <td><input type="text" name="w1_fri_t_3" id="w1_fri_t_3"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w1_friday_4">
            <td><input type="text" name="w1_fri_h_4" id="w1_fri_h_4" list="halllist"></td>
            <td><input type="text" name="w1_fri_m_4" id="w1_fri_m_4"></td>
            <td><input type="text" name="w1_fri_l_4" id="w1_fri_l_4"></td>
            <td><input type="text" name="w1_fri_t_4" id="w1_fri_t_4"></td>
          </tr>
          <!----------------------------------------Saturday-->
          <tr bgcolor="#ddd" id="w1_saturday_1">
            <td rowspan="4" id="w1_6"></td>
            <td rowspan="4">Saturday</td>
            <td><input type="text" name="w1_sat_h_1" id="w1_sat_h_1" list="halllist"></td>
            <td><input type="text" name="w1_sat_m_1" id="w1_sat_m_1"></td>
            <td><input type="text" name="w1_sat_l_1" id="w1_sat_l_1"></td>
            <td><input type="text" name="w1_sat_t_1" id="w1_sat_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_saturday_2"> 
            <td><input type="text" name="w1_sat_h_2" id="w1_sat_h_2" list="halllist"></td>
            <td><input type="text" name="w1_sat_m_2" id="w1_sat_m_2"></td>
            <td><input type="text" name="w1_sat_l_2" id="w1_sat_l_2"></td>
            <td><input type="text" name="w1_sat_t_2" id="w1_sat_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_saturday_3">
            <td><input type="text" name="w1_sat_h_3" id="w1_sat_h_3" list="halllist"></td>
            <td><input type="text" name="w1_sat_m_3" id="w1_sat_m_3"></td>
            <td><input type="text" name="w1_sat_l_3" id="w1_sat_l_3"></td>
            <td><input type="text" name="w1_sat_t_3" id="w1_sat_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w1_saturday_4">
            <td><input type="text" name="w1_sat_h_4" id="w1_sat_h_4" list="halllist"></td>
            <td><input type="text" name="w1_sat_m_4" id="w1_sat_m_4"></td>
            <td><input type="text" name="w1_sat_l_4" id="w1_sat_l_4"></td>
            <td><input type="text" name="w1_sat_t_4" id="w1_sat_t_4"></td>
          </tr>
        </table>
        </div>
        <!-----------------------------------------------------------------week_2-->
        <div id="week_2" style="padding: 0px 40px 40px 40px; position: relative;">

          <div class="div_btn next" onclick="w2_to_w3_btn()" id="w2_to_w3_btn">&#8250;</div>
          <div class="div_btn previous" onclick="w2_to_w1_btn()" id="w2_to_w1_btn">&#8249;</div>

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
          <tr bgcolor="#ddd" id="w2_sunday_1">
            <td rowspan="4" id="w2_0"></td>
            <td rowspan="4">Sunday</td>
            <td><input type="text" name="w2_sun_h_1" id="w2_sun_h_1" list="halllist">
            </td>
            <td><input type="text" name="w2_sun_m_1" id="w2_sun_m_1"></td>
            <td><input type="text" name="w2_sun_l_1" id="w2_sun_l_1"></td>
            <td><input type="text" name="w2_sun_t_1" id="w2_sun_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w2_sunday_2">
            <td><input type="text" name="w2_sun_h_2" id="w2_sun_h_2" list="halllist"></td>
            <td><input type="text" name="w2_sun_m_2" id="w2_sun_m_2"></td>
            <td><input type="text" name="w2_sun_l_2" id="w2_sun_l_2"></td>
            <td><input type="text" name="w2_sun_t_2" id="w2_sun_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w2_sunday_3">
            <td><input type="text" name="w2_sun_h_3" id="w2_sun_h_3" list="halllist"></td>
            <td><input type="text" name="w2_sun_m_3" id="w2_sun_m_3"></td>
            <td><input type="text" name="w2_sun_l_3" id="w2_sun_l_3"></td>
            <td><input type="text" name="w2_sun_t_3" id="w2_sun_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w2_sunday_4">
            <td><input type="text" name="w2_sun_h_4" id="w2_sun_h_4" list="halllist"></td>
            <td><input type="text" name="w2_sun_m_4" id="w2_sun_m_4"></td>
            <td><input type="text" name="w2_sun_l_4" id="w2_sun_l_4"></td>
            <td><input type="text" name="w2_sun_t_4" id="w2_sun_t_4"></td>
          </tr>
          <!----------------------------------------Monday-->
          <tr bgcolor="#f2f2f2" id="w2_monday_1">
            <td rowspan="4" id="w2_1"></td>
            <td rowspan="4">Monday</td>
            <td><input type="text" name="w2_mon_h_1" id="w2_mon_h_1" list="halllist"></td>
            <td><input type="text" name="w2_mon_m_1" id="w2_mon_m_1"></td>
            <td><input type="text" name="w2_mon_l_1" id="w2_mon_l_1"></td>
            <td><input type="text" name="w2_mon_t_1" id="w2_mon_t_1"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w2_monday_2">
            <td><input type="text" name="w2_mon_h_2" id="w2_mon_h_2" ></td>
            <td><input type="text" name="w2_mon_m_2" id="w2_mon_m_2"></td>
            <td><input type="text" name="w2_mon_l_2" id="w2_mon_l_2"></td>
            <td><input type="text" name="w2_mon_t_2" id="w2_mon_t_2"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w2_monday_3">
            <td><input type="text" name="w2_mon_h_3" id="w2_mon_h_3" list="halllist"></td>
            <td><input type="text" name="w2_mon_m_3" id="w2_mon_m_3"></td>
            <td><input type="text" name="w2_mon_l_3" id="w2_mon_l_3"></td>
            <td><input type="text" name="w2_mon_t_3" id="w2_mon_t_3"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w2_monday_4">
            <td><input type="text" name="w2_mon_h_4" id="w2_mon_h_4" list="halllist"></td>
            <td><input type="text" name="w2_mon_m_4" id="w2_mon_m_4"></td>
            <td><input type="text" name="w2_mon_l_4" id="w2_mon_l_4"></td>
            <td><input type="text" name="w2_mon_t_4" id="w2_mon_t_4"></td>
          </tr>
          <!----------------------------------------Tuesday-->
          <tr bgcolor="#ddd" id="w2_tuesday_1">
            <td rowspan="4" id="w2_2"></td>
            <td rowspan="4">Tuesday</td>
            <td><input type="text" name="w2_tue_h_1" id="w2_tue_h_1" list="halllist"></td>
            <td><input type="text" name="w2_tue_m_1" id="w2_tue_m_1"></td>
            <td><input type="text" name="w2_tue_l_1" id="w2_tue_l_1"></td>
            <td><input type="text" name="w2_tue_t_1" id="w2_tue_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w2_tuesday_2">
            <td><input type="text" name="w2_tue_h_2" id="w2_tue_h_2" list="halllist"></td>
            <td><input type="text" name="w2_tue_m_2" id="w2_tue_m_2"></td>
            <td><input type="text" name="w2_tue_l_2" id="w2_tue_l_2"></td>
            <td><input type="text" name="w2_tue_t_2" id="w2_tue_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w2_tuesday_3">
            <td><input type="text" name="w2_tue_h_3" id="w2_tue_h_3" list="halllist"></td>
            <td><input type="text" name="w2_tue_m_3" id="w2_tue_m_3"></td>
            <td><input type="text" name="w2_tue_l_3" id="w2_tue_l_3"></td>
            <td><input type="text" name="w2_tue_t_3" id="w2_tue_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w2_tuesday_4">
            <td><input type="text" name="w2_tue_h_4" id="w2_tue_h_4" list="halllist"></td>
            <td><input type="text" name="w2_tue_m_4" id="w2_tue_m_4"></td>
            <td><input type="text" name="w2_tue_l_4" id="w2_tue_l_4"></td>
            <td><input type="text" name="w2_tue_t_4" id="w2_tue_t_4"></td>
          </tr>
          <!----------------------------------------Wednesday-->
          <tr bgcolor="#f2f2f2" id="w2_wednesday_1">
            <td rowspan="4" id="w2_3"></td>
            <td rowspan="4">Wednesday</td>
            <td><input type="text" name="w2_wed_h_1" id="w2_wed_h_1" list="halllist"></td>
            <td><input type="text" name="w2_wed_m_1" id="w2_wed_m_1"></td>
            <td><input type="text" name="w2_wed_l_1" id="w2_wed_l_1"></td>
            <td><input type="text" name="w2_wed_t_1" id="w2_wed_t_1"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w2_wednesday_2">
            <td><input type="text" name="w2_wed_h_2" id="w2_wed_h_2" ></td>
            <td><input type="text" name="w2_wed_m_2" id="w2_wed_m_2"></td>
            <td><input type="text" name="w2_wed_l_2" id="w2_wed_l_2"></td>
            <td><input type="text" name="w2_wed_t_2" id="w2_wed_t_2"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w2_wednesday_3">
            <td><input type="text" name="w2_wed_h_3" id="w2_wed_h_3" list="halllist"></td>
            <td><input type="text" name="w2_wed_m_3" id="w2_wed_m_3"></td>
            <td><input type="text" name="w2_wed_l_3" id="w2_wed_l_3"></td>
            <td><input type="text" name="w2_wed_t_3" id="w2_wed_t_3"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w2_wednesday_4">
            <td><input type="text" name="w2_wed_h_4" id="w2_wed_h_4" list="halllist"></td>
            <td><input type="text" name="w2_wed_m_4" id="w2_wed_m_4"></td>
            <td><input type="text" name="w2_wed_l_4" id="w2_wed_l_4"></td>
            <td><input type="text" name="w2_wed_t_4" id="w2_wed_t_4"></td>
          </tr>
          <!----------------------------------------Thursday-->
          <tr bgcolor="#ddd" id="w2_thursday_1">
            <td rowspan="4" id="w2_4"></td>
            <td rowspan="4">Thursday</td>
            <td><input type="text" name="w2_thu_h_1" id="w2_thu_h_1" list="halllist"></td>
            <td><input type="text" name="w2_thu_m_1" id="w2_thu_m_1"></td>
            <td><input type="text" name="w2_thu_l_1" id="w2_thu_l_1"></td>
            <td><input type="text" name="w2_thu_t_1" id="w2_thu_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w2_thursday_2">
            <td><input type="text" name="w2_thu_h_2" id="w2_thu_h_2" list="halllist"></td>
            <td><input type="text" name="w2_thu_m_2" id="w2_thu_m_2"></td>
            <td><input type="text" name="w2_thu_l_2" id="w2_thu_l_2"></td>
            <td><input type="text" name="w2_thu_t_2" id="w2_thu_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w2_thursday_3">
            <td><input type="text" name="w2_thu_h_3" id="w2_thu_h_3" list="halllist"></td>
            <td><input type="text" name="w2_thu_m_3" id="w2_thu_m_3"></td>
            <td><input type="text" name="w2_thu_l_3" id="w2_thu_l_3"></td>
            <td><input type="text" name="w2_thu_t_3" id="w2_thu_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w2_thursday_4">
            <td><input type="text" name="w2_thu_h_4" id="w2_thu_h_4" list="halllist"></td>
            <td><input type="text" name="w2_thu_m_4" id="w2_thu_m_4"></td>
            <td><input type="text" name="w2_thu_l_4" id="w2_thu_l_4"></td>
            <td><input type="text" name="w2_thu_t_4" id="w2_thu_t_4"></td>
          </tr>
          <!----------------------------------------Friday-->
          <tr bgcolor="#f2f2f2" id="w2_friday_1">
            <td rowspan="4" id="w2_5"></td>
            <td rowspan="4">Friday</td>
            <td><input type="text" name="w2_fri_h_1" id="w2_fri_h_1" list="halllist"></td>
            <td><input type="text" name="w2_fri_m_1" id="w2_fri_m_1"></td>
            <td><input type="text" name="w2_fri_l_1" id="w2_fri_l_1"></td>
            <td><input type="text" name="w2_fri_t_1" id="w2_fri_t_1"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w2_friday_2">
            <td><input type="text" name="w2_fri_h_2" id="w2_fri_h_2" list="halllist"></td>
            <td><input type="text" name="w2_fri_m_2" id="w2_fri_m_2"></td>
            <td><input type="text" name="w2_fri_l_2" id="w2_fri_l_2"></td>
            <td><input type="text" name="w2_fri_t_2" id="w2_fri_t_2"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w2_friday_3">
            <td><input type="text" name="w2_fri_h_3" id="w2_fri_h_3" list="halllist"></td>
            <td><input type="text" name="w2_fri_m_3" id="w2_fri_m_3"></td>
            <td><input type="text" name="w2_fri_l_3" id="w2_fri_l_3"></td>
            <td><input type="text" name="w2_fri_t_3" id="w2_fri_t_3"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w2_friday_4">
            <td><input type="text" name="w2_fri_h_4" id="w2_fri_h_4" list="halllist"></td>
            <td><input type="text" name="w2_fri_m_4" id="w2_fri_m_4"></td>
            <td><input type="text" name="w2_fri_l_4" id="w2_fri_l_4"></td>
            <td><input type="text" name="w2_fri_t_4" id="w2_fri_t_4"></td>
          </tr>
          <!----------------------------------------Saturday-->
          <tr bgcolor="#ddd" id="w2_saturday_1">
            <td rowspan="4" id="w2_6"></td>
            <td rowspan="4">Saturday</td>
            <td><input type="text" name="w2_sat_h_1" id="w2_sat_h_1" list="halllist"></td>
            <td><input type="text" name="w2_sat_m_1" id="w2_sat_m_1"></td>
            <td><input type="text" name="w2_sat_l_1" id="w2_sat_l_1"></td>
            <td><input type="text" name="w2_sat_t_1" id="w2_sat_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w2_saturday_2"> 
            <td><input type="text" name="w2_sat_h_2" id="w2_sat_h_2" list="halllist"></td>
            <td><input type="text" name="w2_sat_m_2" id="w2_sat_m_2"></td>
            <td><input type="text" name="w2_sat_l_2" id="w2_sat_l_2"></td>
            <td><input type="text" name="w2_sat_t_2" id="w2_sat_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w2_saturday_3">
            <td><input type="text" name="w2_sat_h_3" id="w2_sat_h_3" list="halllist"></td>
            <td><input type="text" name="w2_sat_m_3" id="w2_sat_m_3"></td>
            <td><input type="text" name="w2_sat_l_3" id="w2_sat_l_3"></td>
            <td><input type="text" name="w2_sat_t_3" id="w2_sat_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w2_saturday_4">
            <td><input type="text" name="w2_sat_h_4" id="w2_sat_h_4" list="halllist"></td>
            <td><input type="text" name="w2_sat_m_4" id="w2_sat_m_4"></td>
            <td><input type="text" name="w2_sat_l_4" id="w2_sat_l_4"></td>
            <td><input type="text" name="w2_sat_t_4" id="w2_sat_t_4"></td>
          </tr>
        </table>
        </div>
                <!-----------------------------------------------------------------week_3-->
        <div id="week_3" style="padding: 0px 40px 40px 40px; position: relative;">

          <div class="div_btn next" onclick="w3_to_w4_btn()" id="w3_to_w4_btn">&#8250;</div>
          <div class="div_btn previous" onclick="w3_to_w2_btn()" id="w3_to_w2_btn">&#8249;</div>

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
          <tr bgcolor="#ddd" id="w3_sunday_1">
            <td rowspan="4" id="w3_0"></td>
            <td rowspan="4">Sunday</td>
            <td><input type="text" name="w3_sun_h_1" id="w3_sun_h_1" list="halllist"></td>
            <td><input type="text" name="w3_sun_m_1" id="w3_sun_m_1"></td>
            <td><input type="text" name="w3_sun_l_1" id="w3_sun_l_1"></td>
            <td><input type="text" name="w3_sun_t_1" id="w3_sun_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w3_sunday_2">
            <td><input type="text" name="w3_sun_h_2" id="w3_sun_h_2" list="halllist"></td>
            <td><input type="text" name="w3_sun_m_2" id="w3_sun_m_2"></td>
            <td><input type="text" name="w3_sun_l_2" id="w3_sun_l_2"></td>
            <td><input type="text" name="w3_sun_t_2" id="w3_sun_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w3_sunday_3">
            <td><input type="text" name="w3_sun_h_3" id="w3_sun_h_3" list="halllist"></td>
            <td><input type="text" name="w3_sun_m_3" id="w3_sun_m_3"></td>
            <td><input type="text" name="w3_sun_l_3" id="w3_sun_l_3"></td>
            <td><input type="text" name="w3_sun_t_3" id="w3_sun_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w3_sunday_4">
            <td><input type="text" name="w3_sun_h_4" id="w3_sun_h_4" list="halllist"></td>
            <td><input type="text" name="w3_sun_m_4" id="w3_sun_m_4"></td>
            <td><input type="text" name="w3_sun_l_4" id="w3_sun_l_4"></td>
            <td><input type="text" name="w3_sun_t_4" id="w3_sun_t_4"></td>
          </tr>
          <!----------------------------------------Monday-->
          <tr bgcolor="#f2f2f2" id="w3_monday_1">
            <td rowspan="4" id="w3_1"></td>
            <td rowspan="4">Monday</td>
            <td><input type="text" name="w3_mon_h_1" id="w3_mon_h_1" list="halllist"></td>
            <td><input type="text" name="w3_mon_m_1" id="w3_mon_m_1"></td>
            <td><input type="text" name="w3_mon_l_1" id="w3_mon_l_1"></td>
            <td><input type="text" name="w3_mon_t_1" id="w3_mon_t_1"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w3_monday_2">
            <td><input type="text" name="w3_mon_h_2" id="w3_mon_h_2" list="halllist"></td>
            <td><input type="text" name="w3_mon_m_2" id="w3_mon_m_2"></td>
            <td><input type="text" name="w3_mon_l_2" id="w3_mon_l_2"></td>
            <td><input type="text" name="w3_mon_t_2" id="w3_mon_t_2"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w3_monday_3">
            <td><input type="text" name="w3_mon_h_3" id="w3_mon_h_3" list="halllist"></td>
            <td><input type="text" name="w3_mon_m_3" id="w3_mon_m_3"></td>
            <td><input type="text" name="w3_mon_l_3" id="w3_mon_l_3"></td>
            <td><input type="text" name="w3_mon_t_3" id="w3_mon_t_3"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w3_monday_4">
            <td><input type="text" name="w3_mon_h_4" id="w3_mon_h_4" list="halllist"></td>
            <td><input type="text" name="w3_mon_m_4" id="w3_mon_m_4"></td>
            <td><input type="text" name="w3_mon_l_4" id="w3_mon_l_4"></td>
            <td><input type="text" name="w3_mon_t_4" id="w3_mon_t_4"></td>
          </tr>
          <!----------------------------------------Tuesday-->
          <tr bgcolor="#ddd" id="w3_tuesday_1">
            <td rowspan="4" id="w3_2"></td>
            <td rowspan="4">Tuesday</td>
            <td><input type="text" name="w3_tue_h_1" id="w3_tue_h_1" list="halllist"></td>
            <td><input type="text" name="w3_tue_m_1" id="w3_tue_m_1"></td>
            <td><input type="text" name="w3_tue_l_1" id="w3_tue_l_1"></td>
            <td><input type="text" name="w3_tue_t_1" id="w3_tue_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w3_tuesday_2">
            <td><input type="text" name="w3_tue_h_2" id="w3_tue_h_2" list="halllist"></td>
            <td><input type="text" name="w3_tue_m_2" id="w3_tue_m_2"></td>
            <td><input type="text" name="w3_tue_l_2" id="w3_tue_l_2"></td>
            <td><input type="text" name="w3_tue_t_2" id="w3_tue_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w3_tuesday_3">
            <td><input type="text" name="w3_tue_h_3" id="w3_tue_h_3" list="halllist"></td>
            <td><input type="text" name="w3_tue_m_3" id="w3_tue_m_3"></td>
            <td><input type="text" name="w3_tue_l_3" id="w3_tue_l_3"></td>
            <td><input type="text" name="w3_tue_t_3" id="w3_tue_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w3_tuesday_4">
            <td><input type="text" name="w3_tue_h_4" id="w3_tue_h_4" list="halllist"></td>
            <td><input type="text" name="w3_tue_m_4" id="w3_tue_m_4"></td>
            <td><input type="text" name="w3_tue_l_4" id="w3_tue_l_4"></td>
            <td><input type="text" name="w3_tue_t_4" id="w3_tue_t_4"></td>
          </tr>
          <!----------------------------------------Wednesday-->
          <tr bgcolor="#f2f2f2" id="w3_wednesday_1">
            <td rowspan="4" id="w3_3"></td>
            <td rowspan="4">Wednesday</td>
            <td><input type="text" name="w3_wed_h_1" id="w3_wed_h_1" list="halllist"></td>
            <td><input type="text" name="w3_wed_m_1" id="w3_wed_m_1"></td>
            <td><input type="text" name="w3_wed_l_1" id="w3_wed_l_1"></td>
            <td><input type="text" name="w3_wed_t_1" id="w3_wed_t_1"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w3_wednesday_2">
            <td><input type="text" name="w3_wed_h_2" id="w3_wed_h_2" list="halllist"></td>
            <td><input type="text" name="w3_wed_m_2" id="w3_wed_m_2"></td>
            <td><input type="text" name="w3_wed_l_2" id="w3_wed_l_2"></td>
            <td><input type="text" name="w3_wed_t_2" id="w3_wed_t_2"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w3_wednesday_3">
            <td><input type="text" name="w3_wed_h_3" id="w3_wed_h_3" list="halllist"></td>
            <td><input type="text" name="w3_wed_m_3" id="w3_wed_m_3"></td>
            <td><input type="text" name="w3_wed_l_3" id="w3_wed_l_3"></td>
            <td><input type="text" name="w3_wed_t_3" id="w3_wed_t_3"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w3_wednesday_4">
            <td><input type="text" name="w3_wed_h_4" id="w3_wed_h_4" list="halllist"></td>
            <td><input type="text" name="w3_wed_m_4" id="w3_wed_m_4"></td>
            <td><input type="text" name="w3_wed_l_4" id="w3_wed_l_4"></td>
            <td><input type="text" name="w3_wed_t_4" id="w3_wed_t_4"></td>
          </tr>
          <!----------------------------------------Thursday-->
          <tr bgcolor="#ddd" id="w3_thursday_1">
            <td rowspan="4" id="w3_4"></td>
            <td rowspan="4">Thursday</td>
            <td><input type="text" name="w3_thu_h_1" id="w3_thu_h_1" list="halllist"></td>
            <td><input type="text" name="w3_thu_m_1" id="w3_thu_m_1"></td>
            <td><input type="text" name="w3_thu_l_1" id="w3_thu_l_1"></td>
            <td><input type="text" name="w3_thu_t_1" id="w3_thu_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w3_thursday_2">
            <td><input type="text" name="w3_thu_h_2" id="w3_thu_h_2" list="halllist"></td>
            <td><input type="text" name="w3_thu_m_2" id="w3_thu_m_2"></td>
            <td><input type="text" name="w3_thu_l_2" id="w3_thu_l_2"></td>
            <td><input type="text" name="w3_thu_t_2" id="w3_thu_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w3_thursday_3">
            <td><input type="text" name="w3_thu_h_3" id="w3_thu_h_3" list="halllist"></td>
            <td><input type="text" name="w3_thu_m_3" id="w3_thu_m_3"></td>
            <td><input type="text" name="w3_thu_l_3" id="w3_thu_l_3"></td>
            <td><input type="text" name="w3_thu_t_3" id="w3_thu_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w3_thursday_4">
            <td><input type="text" name="w3_thu_h_4" id="w3_thu_h_4" list="halllist"></td>
            <td><input type="text" name="w3_thu_m_4" id="w3_thu_m_4"></td>
            <td><input type="text" name="w3_thu_l_4" id="w3_thu_l_4"></td>
            <td><input type="text" name="w3_thu_t_4" id="w3_thu_t_4"></td>
          </tr>
          <!----------------------------------------Friday-->
          <tr bgcolor="#f2f2f2" id="w3_friday_1">
            <td rowspan="4" id="w3_5"></td>
            <td rowspan="4">Friday</td>
            <td><input type="text" name="w3_fri_h_1" id="w3_fri_h_1" list="halllist"></td>
            <td><input type="text" name="w3_fri_m_1" id="w3_fri_m_1"></td>
            <td><input type="text" name="w3_fri_l_1" id="w3_fri_l_1"></td>
            <td><input type="text" name="w3_fri_t_1" id="w3_fri_t_1"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w3_friday_2">
            <td><input type="text" name="w3_fri_h_2" id="w3_fri_h_2" list="halllist"></td>
            <td><input type="text" name="w3_fri_m_2" id="w3_fri_m_2"></td>
            <td><input type="text" name="w3_fri_l_2" id="w3_fri_l_2"></td>
            <td><input type="text" name="w3_fri_t_2" id="w3_fri_t_2"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w3_friday_3">
            <td><input type="text" name="w3_fri_h_3" id="w3_fri_h_3" list="halllist"></td>
            <td><input type="text" name="w3_fri_m_3" id="w3_fri_m_3"></td>
            <td><input type="text" name="w3_fri_l_3" id="w3_fri_l_3"></td>
            <td><input type="text" name="w3_fri_t_3" id="w3_fri_t_3"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w3_friday_4">
            <td><input type="text" name="w3_fri_h_4" id="w3_fri_h_4" list="halllist"></td>
            <td><input type="text" name="w3_fri_m_4" id="w3_fri_m_4"></td>
            <td><input type="text" name="w3_fri_l_4" id="w3_fri_l_4"></td>
            <td><input type="text" name="w3_fri_t_4" id="w3_fri_t_4"></td>
          </tr>
          <!----------------------------------------Saturday-->
          <tr bgcolor="#ddd" id="w3_saturday_1">
            <td rowspan="4" id="w3_6"></td>
            <td rowspan="4">Saturday</td>
            <td><input type="text" name="w3_sat_h_1" id="w3_sat_h_1" list="halllist"></td>
            <td><input type="text" name="w3_sat_m_1" id="w3_sat_m_1"></td>
            <td><input type="text" name="w3_sat_l_1" id="w3_sat_l_1"></td>
            <td><input type="text" name="w3_sat_t_1" id="w3_sat_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w3_saturday_2"> 
            <td><input type="text" name="w3_sat_h_2" id="w3_sat_h_2" list="halllist"></td>
            <td><input type="text" name="w3_sat_m_2" id="w3_sat_m_2"></td>
            <td><input type="text" name="w3_sat_l_2" id="w3_sat_l_2"></td>
            <td><input type="text" name="w3_sat_t_2" id="w3_sat_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w3_saturday_3">
            <td><input type="text" name="w3_sat_h_3" id="w3_sat_h_3" list="halllist"></td>
            <td><input type="text" name="w3_sat_m_3" id="w3_sat_m_3"></td>
            <td><input type="text" name="w3_sat_l_3" id="w3_sat_l_3"></td>
            <td><input type="text" name="w3_sat_t_3" id="w3_sat_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w3_saturday_4">
            <td><input type="text" name="w3_sat_h_4" id="w3_sat_h_4" list="halllist"></td>
            <td><input type="text" name="w3_sat_m_4" id="w3_sat_m_4"></td>
            <td><input type="text" name="w3_sat_l_4" id="w3_sat_l_4"></td>
            <td><input type="text" name="w3_sat_t_4" id="w3_sat_t_4"></td>
          </tr>
        </table>
        </div>
        <!-----------------------------------------------------------------week_4-->
        <div id="week_4" style="padding: 0px 40px 40px 40px; position: relative;">

          <div class="div_btn next" onclick="w4_to_w5_btn()" id="w4_to_w5_btn">&#8250;</div>
          <div class="div_btn previous" onclick="w4_to_w3_btn()" id="w4_to_w3_btn">&#8249;</div>

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
          <tr bgcolor="#ddd" id="w4_sunday_1">
            <td rowspan="4" id="w4_0"></td>
            <td rowspan="4">Sunday</td>
            <td><input type="text" name="w4_sun_h_1" id="w4_sun_h_1" list="halllist"></td>
            <td><input type="text" name="w4_sun_m_1" id="w4_sun_m_1"></td>
            <td><input type="text" name="w4_sun_l_1" id="w4_sun_l_1"></td>
            <td><input type="text" name="w4_sun_t_1" id="w4_sun_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w4_sunday_2">
            <td><input type="text" name="w4_sun_h_2" id="w4_sun_h_2" list="halllist"></td>
            <td><input type="text" name="w4_sun_m_2" id="w4_sun_m_2"></td>
            <td><input type="text" name="w4_sun_l_2" id="w4_sun_l_2"></td>
            <td><input type="text" name="w4_sun_t_2" id="w4_sun_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w4_sunday_3">
            <td><input type="text" name="w4_sun_h_3" id="w4_sun_h_3" list="halllist"></td>
            <td><input type="text" name="w4_sun_m_3" id="w4_sun_m_3"></td>
            <td><input type="text" name="w4_sun_l_3" id="w4_sun_l_3"></td>
            <td><input type="text" name="w4_sun_t_3" id="w4_sun_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w4_sunday_4">
            <td><input type="text" name="w4_sun_h_4" id="w4_sun_h_4" list="halllist"></td>
            <td><input type="text" name="w4_sun_m_4" id="w4_sun_m_4"></td>
            <td><input type="text" name="w4_sun_l_4" id="w4_sun_l_4"></td>
            <td><input type="text" name="w4_sun_t_4" id="w4_sun_t_4"></td>
          </tr>
          <!----------------------------------------Monday-->
          <tr bgcolor="#f2f2f2" id="w4_monday_1">
            <td rowspan="4" id="w4_1"></td>
            <td rowspan="4">Monday</td>
            <td><input type="text" name="w4_mon_h_1" id="w4_mon_h_1" list="halllist"></td>
            <td><input type="text" name="w4_mon_m_1" id="w4_mon_m_1"></td>
            <td><input type="text" name="w4_mon_l_1" id="w4_mon_l_1"></td>
            <td><input type="text" name="w4_mon_t_1" id="w4_mon_t_1"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w4_monday_2">
            <td><input type="text" name="w4_mon_h_2" id="w4_mon_h_2" list="halllist"></td>
            <td><input type="text" name="w4_mon_m_2" id="w4_mon_m_2"></td>
            <td><input type="text" name="w4_mon_l_2" id="w4_mon_l_2"></td>
            <td><input type="text" name="w4_mon_t_2" id="w4_mon_t_2"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w4_monday_3">
            <td><input type="text" name="w4_mon_h_3" id="w4_mon_h_3" list="halllist"></td>
            <td><input type="text" name="w4_mon_m_3" id="w4_mon_m_3"></td>
            <td><input type="text" name="w4_mon_l_3" id="w4_mon_l_3"></td>
            <td><input type="text" name="w4_mon_t_3" id="w4_mon_t_3"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w4_monday_4">
            <td><input type="text" name="w4_mon_h_4" id="w4_mon_h_4" list="halllist"></td>
            <td><input type="text" name="w4_mon_m_4" id="w4_mon_m_4"></td>
            <td><input type="text" name="w4_mon_l_4" id="w4_mon_l_4"></td>
            <td><input type="text" name="w4_mon_t_4" id="w4_mon_t_4"></td>
          </tr>
          <!----------------------------------------Tuesday-->
          <tr bgcolor="#ddd" id="w4_tuesday_1">
            <td rowspan="4" id="w4_2"></td>
            <td rowspan="4">Tuesday</td>
            <td><input type="text" name="w4_tue_h_1" id="w4_tue_h_1" list="halllist"></td>
            <td><input type="text" name="w4_tue_m_1" id="w4_tue_m_1"></td>
            <td><input type="text" name="w4_tue_l_1" id="w4_tue_l_1"></td>
            <td><input type="text" name="w4_tue_t_1" id="w4_tue_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w4_tuesday_2">
            <td><input type="text" name="w4_tue_h_2" id="w4_tue_h_2" list="halllist"></td>
            <td><input type="text" name="w4_tue_m_2" id="w4_tue_m_2"></td>
            <td><input type="text" name="w4_tue_l_2" id="w4_tue_l_2"></td>
            <td><input type="text" name="w4_tue_t_2" id="w4_tue_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w4_tuesday_3">
            <td><input type="text" name="w4_tue_h_3" id="w4_tue_h_3" list="halllist"></td>
            <td><input type="text" name="w4_tue_m_3" id="w4_tue_m_3"></td>
            <td><input type="text" name="w4_tue_l_3" id="w4_tue_l_3"></td>
            <td><input type="text" name="w4_tue_t_3" id="w4_tue_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w4_tuesday_4">
            <td><input type="text" name="w4_tue_h_4" id="w4_tue_h_4" list="halllist"></td>
            <td><input type="text" name="w4_tue_m_4" id="w4_tue_m_4"></td>
            <td><input type="text" name="w4_tue_l_4" id="w4_tue_l_4"></td>
            <td><input type="text" name="w4_tue_t_4" id="w4_tue_t_4"></td>
          </tr>
          <!----------------------------------------Wednesday-->
          <tr bgcolor="#f2f2f2" id="w4_wednesday_1">
            <td rowspan="4" id="w4_3"></td>
            <td rowspan="4">Wednesday</td>
            <td><input type="text" name="w4_wed_h_1" id="w4_wed_h_1" list="halllist"></td>
            <td><input type="text" name="w4_wed_m_1" id="w4_wed_m_1"></td>
            <td><input type="text" name="w4_wed_l_1" id="w4_wed_l_1"></td>
            <td><input type="text" name="w4_wed_t_1" id="w4_wed_t_1"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w4_wednesday_2">
            <td><input type="text" name="w4_wed_h_2" id="w4_wed_h_2" list="halllist"></td>
            <td><input type="text" name="w4_wed_m_2" id="w4_wed_m_2"></td>
            <td><input type="text" name="w4_wed_l_2" id="w4_wed_l_2"></td>
            <td><input type="text" name="w4_wed_t_2" id="w4_wed_t_2"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w4_wednesday_3">
            <td><input type="text" name="w4_wed_h_3" id="w4_wed_h_3" list="halllist"></td>
            <td><input type="text" name="w4_wed_m_3" id="w4_wed_m_3"></td>
            <td><input type="text" name="w4_wed_l_3" id="w4_wed_l_3"></td>
            <td><input type="text" name="w4_wed_t_3" id="w4_wed_t_3"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w4_wednesday_4">
            <td><input type="text" name="w4_wed_h_4" id="w4_wed_h_4" list="halllist"></td>
            <td><input type="text" name="w4_wed_m_4" id="w4_wed_m_4"></td>
            <td><input type="text" name="w4_wed_l_4" id="w4_wed_l_4"></td>
            <td><input type="text" name="w4_wed_t_4" id="w4_wed_t_4"></td>
          </tr>
          <!----------------------------------------Thursday-->
          <tr bgcolor="#ddd" id="w4_thursday_1">
            <td rowspan="4" id="w4_4"></td>
            <td rowspan="4">Thursday</td>
            <td><input type="text" name="w4_thu_h_1" id="w4_thu_h_1" list="halllist"></td>
            <td><input type="text" name="w4_thu_m_1" id="w4_thu_m_1"></td>
            <td><input type="text" name="w4_thu_l_1" id="w4_thu_l_1"></td>
            <td><input type="text" name="w4_thu_t_1" id="w4_thu_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w4_thursday_2">
            <td><input type="text" name="w4_thu_h_2" id="w4_thu_h_2" list="halllist"></td>
            <td><input type="text" name="w4_thu_m_2" id="w4_thu_m_2"></td>
            <td><input type="text" name="w4_thu_l_2" id="w4_thu_l_2"></td>
            <td><input type="text" name="w4_thu_t_2" id="w4_thu_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w4_thursday_3">
            <td><input type="text" name="w4_thu_h_3" id="w4_thu_h_3" list="halllist"></td>
            <td><input type="text" name="w4_thu_m_3" id="w4_thu_m_3"></td>
            <td><input type="text" name="w4_thu_l_3" id="w4_thu_l_3"></td>
            <td><input type="text" name="w4_thu_t_3" id="w4_thu_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w4_thursday_4">
            <td><input type="text" name="w4_thu_h_4" id="w4_thu_h_4" list="halllist"></td>
            <td><input type="text" name="w4_thu_m_4" id="w4_thu_m_4"></td>
            <td><input type="text" name="w4_thu_l_4" id="w4_thu_l_4"></td>
            <td><input type="text" name="w4_thu_t_4" id="w4_thu_t_4"></td>
          </tr>
          <!----------------------------------------Friday-->
          <tr bgcolor="#f2f2f2" id="w4_friday_1">
            <td rowspan="4" id="w4_5"></td>
            <td rowspan="4">Friday</td>
            <td><input type="text" name="w4_fri_h_1" id="w4_fri_h_1" list="halllist"></td>
            <td><input type="text" name="w4_fri_m_1" id="w4_fri_m_1"></td>
            <td><input type="text" name="w4_fri_l_1" id="w4_fri_l_1"></td>
            <td><input type="text" name="w4_fri_t_1" id="w4_fri_t_1"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w4_friday_2">
            <td><input type="text" name="w4_fri_h_2" id="w4_fri_h_2" list="halllist"></td>
            <td><input type="text" name="w4_fri_m_2" id="w4_fri_m_2"></td>
            <td><input type="text" name="w4_fri_l_2" id="w4_fri_l_2"></td>
            <td><input type="text" name="w4_fri_t_2" id="w4_fri_t_2"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w4_friday_3">
            <td><input type="text" name="w4_fri_h_3" id="w4_fri_h_3" list="halllist"></td>
            <td><input type="text" name="w4_fri_m_3" id="w4_fri_m_3"></td>
            <td><input type="text" name="w4_fri_l_3" id="w4_fri_l_3"></td>
            <td><input type="text" name="w4_fri_t_3" id="w4_fri_t_3"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w4_friday_4">
            <td><input type="text" name="w4_fri_h_4" id="w4_fri_h_4" list="halllist"></td>
            <td><input type="text" name="w4_fri_m_4" id="w4_fri_m_4"></td>
            <td><input type="text" name="w4_fri_l_4" id="w4_fri_l_4"></td>
            <td><input type="text" name="w4_fri_t_4" id="w4_fri_t_4"></td>
          </tr>
          <!----------------------------------------Saturday-->
          <tr bgcolor="#ddd" id="w4_saturday_1">
            <td rowspan="4" id="w4_6"></td>
            <td rowspan="4">Saturday</td>
            <td><input type="text" name="w4_sat_h_1" id="w4_sat_h_1" list="halllist"></td>
            <td><input type="text" name="w4_sat_m_1" id="w4_sat_m_1"></td>
            <td><input type="text" name="w4_sat_l_1" id="w4_sat_l_1"></td>
            <td><input type="text" name="w4_sat_t_1" id="w4_sat_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w4_saturday_2"> 
            <td><input type="text" name="w4_sat_h_2" id="w4_sat_h_2" list="halllist"></td>
            <td><input type="text" name="w4_sat_m_2" id="w4_sat_m_2"></td>
            <td><input type="text" name="w4_sat_l_2" id="w4_sat_l_2"></td>
            <td><input type="text" name="w4_sat_t_2" id="w4_sat_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w4_saturday_3">
            <td><input type="text" name="w4_sat_h_3" id="w4_sat_h_3" list="halllist"></td>
            <td><input type="text" name="w4_sat_m_3" id="w4_sat_m_3"></td>
            <td><input type="text" name="w4_sat_l_3" id="w4_sat_l_3"></td>
            <td><input type="text" name="w4_sat_t_3" id="w4_sat_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w4_saturday_4">
            <td><input type="text" name="w4_sat_h_4" id="w4_sat_h_4" list="halllist"></td>
            <td><input type="text" name="w4_sat_m_4" id="w4_sat_m_4"></td>
            <td><input type="text" name="w4_sat_l_4" id="w4_sat_l_4"></td>
            <td><input type="text" name="w4_sat_t_4" id="w4_sat_t_4"></td>
          </tr>
        </table>
        </div>
                <!-----------------------------------------------------------------week_5-->
        <div id="week_5" style="padding: 0px 40px 40px 40px; position: relative;">

          <div class="div_btn next" onclick="w5_to_w6_btn()" id="w5_to_w6_btn">&#8250;</div>
          <div class="div_btn previous" onclick="w5_to_w4_btn()" id="w5_to_w4_btn">&#8249;</div>

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
            <td><input type="text" name="w5_sun_h_1" id="w5_sun_h_1" list="halllist"></td>
            <td><input type="text" name="w5_sun_m_1" id="w5_sun_m_1"></td>
            <td><input type="text" name="w5_sun_l_1" id="w5_sun_l_1"></td>
            <td><input type="text" name="w5_sun_t_1" id="w5_sun_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_sunday_2">
            <td><input type="text" name="w5_sun_h_2" id="w5_sun_h_2" list="halllist"></td>
            <td><input type="text" name="w5_sun_m_2" id="w5_sun_m_2"></td>
            <td><input type="text" name="w5_sun_l_2" id="w5_sun_l_2"></td>
            <td><input type="text" name="w5_sun_t_2" id="w5_sun_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_sunday_3">
            <td><input type="text" name="w5_sun_h_3" id="w5_sun_h_3" list="halllist"></td>
            <td><input type="text" name="w5_sun_m_3" id="w5_sun_m_3"></td>
            <td><input type="text" name="w5_sun_l_3" id="w5_sun_l_3"></td>
            <td><input type="text" name="w5_sun_t_3" id="w5_sun_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_sunday_4">
            <td><input type="text" name="w5_sun_h_4" id="w5_sun_h_4" list="halllist"></td>
            <td><input type="text" name="w5_sun_m_4" id="w5_sun_m_4"></td>
            <td><input type="text" name="w5_sun_l_4" id="w5_sun_l_4"></td>
            <td><input type="text" name="w5_sun_t_4" id="w5_sun_t_4"></td>
          </tr>
          <!----------------------------------------Monday-->
          <tr bgcolor="#f2f2f2" id="w5_monday_1">
            <td rowspan="4" id="w5_1"></td>
            <td rowspan="4">Monday</td>
            <td><input type="text" name="w5_mon_h_1" id="w5_mon_h_1" list="halllist"></td>
            <td><input type="text" name="w5_mon_m_1" id="w5_mon_m_1"></td>
            <td><input type="text" name="w5_mon_l_1" id="w5_mon_l_1"></td>
            <td><input type="text" name="w5_mon_t_1" id="w5_mon_t_1"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w5_monday_2">
            <td><input type="text" name="w5_mon_h_2" id="w5_mon_h_2" list="halllist"></td>
            <td><input type="text" name="w5_mon_m_2" id="w5_mon_m_2"></td>
            <td><input type="text" name="w5_mon_l_2" id="w5_mon_l_2"></td>
            <td><input type="text" name="w5_mon_t_2" id="w5_mon_t_2"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w5_monday_3">
            <td><input type="text" name="w5_mon_h_3" id="w5_mon_h_3" list="halllist"></td>
            <td><input type="text" name="w5_mon_m_3" id="w5_mon_m_3"></td>
            <td><input type="text" name="w5_mon_l_3" id="w5_mon_l_3"></td>
            <td><input type="text" name="w5_mon_t_3" id="w5_mon_t_3"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w5_monday_4">
            <td><input type="text" name="w5_mon_h_4" id="w5_mon_h_4" list="halllist"></td>
            <td><input type="text" name="w5_mon_m_4" id="w5_mon_m_4"></td>
            <td><input type="text" name="w5_mon_l_4" id="w5_mon_l_4"></td>
            <td><input type="text" name="w5_mon_t_4" id="w5_mon_t_4"></td>
          </tr>
          <!----------------------------------------Tuesday-->
          <tr bgcolor="#ddd" id="w5_tuesday_1">
            <td rowspan="4" id="w5_2"></td>
            <td rowspan="4">Tuesday</td>
            <td><input type="text" name="w5_tue_h_1" id="w5_tue_h_1" list="halllist"></td>
            <td><input type="text" name="w5_tue_m_1" id="w5_tue_m_1"></td>
            <td><input type="text" name="w5_tue_l_1" id="w5_tue_l_1"></td>
            <td><input type="text" name="w5_tue_t_1" id="w5_tue_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_tuesday_2">
            <td><input type="text" name="w5_tue_h_2" id="w5_tue_h_2" list="halllist"></td>
            <td><input type="text" name="w5_tue_m_2" id="w5_tue_m_2"></td>
            <td><input type="text" name="w5_tue_l_2" id="w5_tue_l_2"></td>
            <td><input type="text" name="w5_tue_t_2" id="w5_tue_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_tuesday_3">
            <td><input type="text" name="w5_tue_h_3" id="w5_tue_h_3" list="halllist"></td>
            <td><input type="text" name="w5_tue_m_3" id="w5_tue_m_3"></td>
            <td><input type="text" name="w5_tue_l_3" id="w5_tue_l_3"></td>
            <td><input type="text" name="w5_tue_t_3" id="w5_tue_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_tuesday_4">
            <td><input type="text" name="w5_tue_h_4" id="w5_tue_h_4" list="halllist"></td>
            <td><input type="text" name="w5_tue_m_4" id="w5_tue_m_4"></td>
            <td><input type="text" name="w5_tue_l_4" id="w5_tue_l_4"></td>
            <td><input type="text" name="w5_tue_t_4" id="w5_tue_t_4"></td>
          </tr>
          <!----------------------------------------Wednesday-->
          <tr bgcolor="#f2f2f2" id="w5_wednesday_1">
            <td rowspan="4" id="w5_3"></td>
            <td rowspan="4">Wednesday</td>
            <td><input type="text" name="w5_wed_h_1" id="w5_wed_h_1" list="halllist"></td>
            <td><input type="text" name="w5_wed_m_1" id="w5_wed_m_1"></td>
            <td><input type="text" name="w5_wed_l_1" id="w5_wed_l_1"></td>
            <td><input type="text" name="w5_wed_t_1" id="w5_wed_t_1"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w5_wednesday_2">
            <td><input type="text" name="w5_wed_h_2" id="w5_wed_h_2" list="halllist"></td>
            <td><input type="text" name="w5_wed_m_2" id="w5_wed_m_2"></td>
            <td><input type="text" name="w5_wed_l_2" id="w5_wed_l_2"></td>
            <td><input type="text" name="w5_wed_t_2" id="w5_wed_t_2"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w5_wednesday_3">
            <td><input type="text" name="w5_wed_h_3" id="w5_wed_h_3" list="halllist"></td>
            <td><input type="text" name="w5_wed_m_3" id="w5_wed_m_3"></td>
            <td><input type="text" name="w5_wed_l_3" id="w5_wed_l_3"></td>
            <td><input type="text" name="w5_wed_t_3" id="w5_wed_t_3"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w5_wednesday_4">
            <td><input type="text" name="w5_wed_h_4" id="w5_wed_h_4" list="halllist"></td>
            <td><input type="text" name="w5_wed_m_4" id="w5_wed_m_4"></td>
            <td><input type="text" name="w5_wed_l_4" id="w5_wed_l_4"></td>
            <td><input type="text" name="w5_wed_t_4" id="w5_wed_t_4"></td>
          </tr>
          <!----------------------------------------Thursday-->
          <tr bgcolor="#ddd" id="w5_thursday_1">
            <td rowspan="4" id="w5_4"></td>
            <td rowspan="4">Thursday</td>
            <td><input type="text" name="w5_thu_h_1" id="w5_thu_h_1" list="halllist"></td>
            <td><input type="text" name="w5_thu_m_1" id="w5_thu_m_1"></td>
            <td><input type="text" name="w5_thu_l_1" id="w5_thu_l_1"></td>
            <td><input type="text" name="w5_thu_t_1" id="w5_thu_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_thursday_2">
            <td><input type="text" name="w5_thu_h_2" id="w5_thu_h_2" list="halllist"></td>
            <td><input type="text" name="w5_thu_m_2" id="w5_thu_m_2"></td>
            <td><input type="text" name="w5_thu_l_2" id="w5_thu_l_2"></td>
            <td><input type="text" name="w5_thu_t_2" id="w5_thu_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_thursday_3">
            <td><input type="text" name="w5_thu_h_3" id="w5_thu_h_3" list="halllist"></td>
            <td><input type="text" name="w5_thu_m_3" id="w5_thu_m_3"></td>
            <td><input type="text" name="w5_thu_l_3" id="w5_thu_l_3"></td>
            <td><input type="text" name="w5_thu_t_3" id="w5_thu_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_thursday_4">
            <td><input type="text" name="w5_thu_h_4" id="w5_thu_h_4" list="halllist"></td>
            <td><input type="text" name="w5_thu_m_4" id="w5_thu_m_4"></td>
            <td><input type="text" name="w5_thu_l_4" id="w5_thu_l_4"></td>
            <td><input type="text" name="w5_thu_t_4" id="w5_thu_t_4"></td>
          </tr>
          <!----------------------------------------Friday-->
          <tr bgcolor="#f2f2f2" id="w5_friday_1">
            <td rowspan="4" id="w5_5"></td>
            <td rowspan="4">Friday</td>
            <td><input type="text" name="w5_fri_h_1" id="w5_fri_h_1" list="halllist"></td>
            <td><input type="text" name="w5_fri_m_1" id="w5_fri_m_1"></td>
            <td><input type="text" name="w5_fri_l_1" id="w5_fri_l_1"></td>
            <td><input type="text" name="w5_fri_t_1" id="w5_fri_t_1"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w5_friday_2">
            <td><input type="text" name="w5_fri_h_2" id="w5_fri_h_2" list="halllist"></td>
            <td><input type="text" name="w5_fri_m_2" id="w5_fri_m_2"></td>
            <td><input type="text" name="w5_fri_l_2" id="w5_fri_l_2"></td>
            <td><input type="text" name="w5_fri_t_2" id="w5_fri_t_2"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w5_friday_3">
            <td><input type="text" name="w5_fri_h_3" id="w5_fri_h_3" list="halllist"></td>
            <td><input type="text" name="w5_fri_m_3" id="w5_fri_m_3"></td>
            <td><input type="text" name="w5_fri_l_3" id="w5_fri_l_3"></td>
            <td><input type="text" name="w5_fri_t_3" id="w5_fri_t_3"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w5_friday_4">
            <td><input type="text" name="w5_fri_h_4" id="w5_fri_h_4" list="halllist"></td>
            <td><input type="text" name="w5_fri_m_4" id="w5_fri_m_4"></td>
            <td><input type="text" name="w5_fri_l_4" id="w5_fri_l_4"></td>
            <td><input type="text" name="w5_fri_t_4" id="w5_fri_t_4"></td>
          </tr>
          <!----------------------------------------Saturday-->
          <tr bgcolor="#ddd" id="w5_saturday_1">
            <td rowspan="4" id="w5_6"></td>
            <td rowspan="4">Saturday</td>
            <td><input type="text" name="w5_sat_h_1" id="w5_sat_h_1" list="halllist"></td>
            <td><input type="text" name="w5_sat_m_1" id="w5_sat_m_1"></td>
            <td><input type="text" name="w5_sat_l_1" id="w5_sat_l_1"></td>
            <td><input type="text" name="w5_sat_t_1" id="w5_sat_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_saturday_2"> 
            <td><input type="text" name="w5_sat_h_2" id="w5_sat_h_2" list="halllist"></td>
            <td><input type="text" name="w5_sat_m_2" id="w5_sat_m_2"></td>
            <td><input type="text" name="w5_sat_l_2" id="w5_sat_l_2"></td>
            <td><input type="text" name="w5_sat_t_2" id="w5_sat_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_saturday_3">
            <td><input type="text" name="w5_sat_h_3" id="w5_sat_h_3" list="halllist"></td>
            <td><input type="text" name="w5_sat_m_3" id="w5_sat_m_3"></td>
            <td><input type="text" name="w5_sat_l_3" id="w5_sat_l_3"></td>
            <td><input type="text" name="w5_sat_t_3" id="w5_sat_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w5_saturday_4">
            <td><input type="text" name="w5_sat_h_4" id="w5_sat_h_4" list="halllist"></td>
            <td><input type="text" name="w5_sat_m_4" id="w5_sat_m_4"></td>
            <td><input type="text" name="w5_sat_l_4" id="w5_sat_l_4"></td>
            <td><input type="text" name="w5_sat_t_4" id="w5_sat_t_4"></td>
          </tr>
        </table>
        </div>
        <!-----------------------------------------------------------------week_6-->
        <div id="week_6" style="padding: 0px 40px 40px 40px; position: relative;">

          <div class="div_btn previous" onclick="w6_to_w5_btn()" id="w6_to_w5_btn">&#8249;</div>

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
            <td rowspan="4" id="w6_0"></td>
            <td rowspan="4">Sunday</td>
            <td><input type="text" name="w6_sun_h_1" id="w6_sun_h_1" list="halllist"></td>
            <td><input type="text" name="w6_sun_m_1" id="w6_sun_m_1"></td>
            <td><input type="text" name="w6_sun_l_1" id="w6_sun_l_1"></td>
            <td><input type="text" name="w6_sun_t_1" id="w6_sun_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w6_sunday_2">
            <td><input type="text" name="w6_sun_h_2" id="w6_sun_h_2" list="halllist"></td>
            <td><input type="text" name="w6_sun_m_2" id="w6_sun_m_2"></td>
            <td><input type="text" name="w6_sun_l_2" id="w6_sun_l_2"></td>
            <td><input type="text" name="w6_sun_t_2" id="w6_sun_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w6_sunday_3">
            <td><input type="text" name="w6_sun_h_3" id="w6_sun_h_3" list="halllist"></td>
            <td><input type="text" name="w6_sun_m_3" id="w6_sun_m_3"></td>
            <td><input type="text" name="w6_sun_l_3" id="w6_sun_l_3"></td>
            <td><input type="text" name="w6_sun_t_3" id="w6_sun_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w6_sunday_4">
            <td><input type="text" name="w6_sun_h_4" id="w6_sun_h_4" list="halllist"></td>
            <td><input type="text" name="w6_sun_m_4" id="w6_sun_m_4"></td>
            <td><input type="text" name="w6_sun_l_4" id="w6_sun_l_4"></td>
            <td><input type="text" name="w6_sun_t_4" id="w6_sun_t_4"></td>
          </tr>
          <!----------------------------------------Monday-->
          <tr bgcolor="#f2f2f2" id="w6_monday_1">
            <td rowspan="4" id="w6_1"></td>
            <td rowspan="4">Monday</td>
            <td><input type="text" name="w6_mon_h_1" id="w6_mon_h_1" list="halllist"></td>
            <td><input type="text" name="w6_mon_m_1" id="w6_mon_m_1"></td>
            <td><input type="text" name="w6_mon_l_1" id="w6_mon_l_1"></td>
            <td><input type="text" name="w6_mon_t_1" id="w6_mon_t_1"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w6_monday_2">
            <td><input type="text" name="w6_mon_h_2" id="w6_mon_h_2" list="halllist"></td>
            <td><input type="text" name="w6_mon_m_2" id="w6_mon_m_2"></td>
            <td><input type="text" name="w6_mon_l_2" id="w6_mon_l_2"></td>
            <td><input type="text" name="w6_mon_t_2" id="w6_mon_t_2"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w6_monday_3">
            <td><input type="text" name="w6_mon_h_3" id="w6_mon_h_3" list="halllist"></td>
            <td><input type="text" name="w6_mon_m_3" id="w6_mon_m_3"></td>
            <td><input type="text" name="w6_mon_l_3" id="w6_mon_l_3"></td>
            <td><input type="text" name="w6_mon_t_3" id="w6_mon_t_3"></td>
          </tr>
          <tr bgcolor="#f2f2f2" id="w6_monday_4">
            <td><input type="text" name="w6_mon_h_4" id="w6_mon_h_4" list="halllist"></td>
            <td><input type="text" name="w6_mon_m_4" id="w6_mon_m_4"></td>
            <td><input type="text" name="w6_mon_l_4" id="w6_mon_l_4"></td>
            <td><input type="text" name="w6_mon_t_4" id="w6_mon_t_4"></td>
          </tr>
          <!----------------------------------------Tuesday-->
          <tr bgcolor="#ddd" id="w6_tuesday_1">
            <td rowspan="4" id="w6_2"></td>
            <td rowspan="4">Tuesday</td>
            <td><input type="text" name="w6_tue_h_1" id="w6_tue_h_1" list="halllist"></td>
            <td><input type="text" name="w6_tue_m_1" id="w6_tue_m_1"></td>
            <td><input type="text" name="w6_tue_l_1" id="w6_tue_l_1"></td>
            <td><input type="text" name="w6_tue_t_1" id="w6_tue_t_1"></td>
          </tr>
          <tr bgcolor="#ddd" id="w6_tuesday_2">
            <td><input type="text" name="w6_tue_h_2" id="w6_tue_h_2" list="halllist"></td>
            <td><input type="text" name="w6_tue_m_2" id="w6_tue_m_2"></td>
            <td><input type="text" name="w6_tue_l_2" id="w6_tue_l_2"></td>
            <td><input type="text" name="w6_tue_t_2" id="w6_tue_t_2"></td>
          </tr>
          <tr bgcolor="#ddd" id="w6_tuesday_3">
            <td><input type="text" name="w6_tue_h_3" id="w6_tue_h_3" list="halllist"></td>
            <td><input type="text" name="w6_tue_m_3" id="w6_tue_m_3"></td>
            <td><input type="text" name="w6_tue_l_3" id="w6_tue_l_3"></td>
            <td><input type="text" name="w6_tue_t_3" id="w6_tue_t_3"></td>
          </tr>
          <tr bgcolor="#ddd" id="w6_tuesday_4">
            <td><input type="text" name="w6_tue_h_4" id="w6_tue_h_4" list="halllist"></td>
            <td><input type="text" name="w6_tue_m_4" id="w6_tue_m_4"></td>
            <td><input type="text" name="w6_tue_l_4" id="w6_tue_l_4"></td>
            <td><input type="text" name="w6_tue_t_4" id="w6_tue_t_4"></td>
          </tr>
        </table>
        </div>

      </div>
    </div>
  </form>
  </div>
<!--------------------------------------------------------------------------------------div_result-->
  <div id="div_result" style="display: none;"></div>
<!--------------------------------------------------------------------------------------div_result-->

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

<div class="form-popup" id="online_Users_div"">
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

<footer>
  <div class="alert" id="insert_alert" style="display: none;" >
    <span class="closebtn">&times;</span>  
    Data Insert Success!
  </div>
  <div class="alert" id="update_alert" style="display: none;">
    <span class="closebtn">&times;</span>  
    Data Update Success!
  </div>
</footer>

</html>
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>

<!--------------------------------------------------------------------------------------HOME-SCRIPT-START-->
<script type="text/javascript" src="rs/js/js_timetable5.js"></script>
<!--------------------------------------------------------------------------------------HOME-SCRIPT-END-->




<!--------------------------------------------------------------------------------------JS-START-->
<script  type="text/javascript" src="rs/all/js_all.js"></script>
<!--------------------------------------------------------------------------------------JS-END-->

 
 
