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
      <div style="  background-color: white;width: auto;height: 700px;margin: 20px 20px 20px 20px;">
        <div style="width: auto;height: 90px;">

<!--------------------------------------------------------------------------------------DAY-->
            <table id="controler_table" style="margin-top:35px; ">
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
<!---------------------------------------------------------------------------------------->
        </div>
        <hr>
      </div>
    </div>

    <!--side-->
    <div class="sideright">
      <div style="  background-color: white;width: auto;height: 200px; margin: 20px 20px 20px 20px;">
        <p id="hh"></p>
      </div>
      <div style="  background-color: white;width: auto;height: 400px;margin: 20px 20px 20px 20px;"></div>
    </div>

  </div>
</body>
<!--------------------------------------------------------------------------------------BODY-END-->
</html>


<!--------------------------------------------------------------------------------------SCRIPT-START-->
<script>


//////////////////////////////////////////////////////////////////////////////
function year_up_function()
{var year_up_data = document.getElementById("inputyear").innerHTML;
  var year_up_data_value = +year_up_data+1;
  document.getElementById("inputyear").innerHTML = year_up_data_value;
}
function year_down_function()
{var year_down_data = document.getElementById("inputyear").innerHTML;
  var year_down_data_value = +year_down_data-1;
  document.getElementById("inputyear").innerHTML = year_down_data_value;
}
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
function week_up_function()
{var week_up_data = document.getElementById("inputweeknum").innerHTML;
var new_week_up_data;
  if (week_up_data=="W1")
   {
      new_week_up_data="W2";
   }
   else if(week_up_data=="W2")
   {
      new_week_up_data="W3";
   }
   else if(week_up_data=="W3")
   {
      new_week_up_data="W4";
   }
   else if(week_up_data=="W4")
   {
      new_week_up_data="W5";
   }
   else if(week_up_data=="W5")
   {
      new_week_up_data="W6";
   }
   else
   {
      new_week_up_data="W1";
   }
  document.getElementById("inputweeknum").innerHTML = new_week_up_data;
}
function week_down_function()
{var week_down_data = document.getElementById("inputweeknum").innerHTML;
var new_week_down_data;
  if (week_down_data=="W6")
   {
      new_week_down_data="W5";
   }
   else if(week_down_data=="W5")
   {
      new_week_down_data="W4";
   }
   else if(week_down_data=="W4")
   {
      new_week_down_data="W3";
   }
   else if(week_down_data=="W3")
   {
      new_week_down_data="W2";
   }
   else if(week_down_data=="W2")
   {
      new_week_down_data="W1";
   }
   else
   {
      new_week_down_data="W6";
   }
  document.getElementById("inputweeknum").innerHTML = new_week_down_data;
}
//////////////////////////////////////////////////////////////////////////////






//////////////////////////////////////////////////////////////////
function year_up_func_in()
{
  document.getElementById('yearup').src='../resources/up_full.png'
}
function year_up_func_out()
{
  document.getElementById('yearup').src='../resources/up_line.png'
}
///////
function year_down_func_in()
{
  document.getElementById('yeardown').src='../resources/down_full.png'
}
function year_down_func_out()
{
  document.getElementById('yeardown').src='../resources/down_line.png'
}
///////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////
function week_up_func_in()
{
  document.getElementById('weekup').src='../resources/up_full.png'
}
function week_up_func_out()
{
  document.getElementById('weekup').src='../resources/up_line.png'
}
///////
function week_down_func_in()
{
  document.getElementById('weekdown').src='../resources/down_full.png'
}
function week_down_func_out()
{
  document.getElementById('weekdown').src='../resources/down_line.png'
}
///////////////////////////////////////////////////////////////////

function find_week_number() 
{
  var inputyear = document.getElementById("inputyear").innerHTML;
  var inputmonth = document.getElementById("input_fake_month").value;

var dd = new Date(inputyear,inputmonth-1,1);
var day = dd.getDay();

var td_date =new Date();
var tdd = td_date.getDate();

var weeknum;
if (day == 0)
{

    if (tdd <= 7)
    {
        weeknum =  "W1";
    }
    else if (tdd <= 14)
    {
      weeknum =  "W2";
    }
    else if (tdd <= 21)
    {
        weeknum =  "W3";
    }
    else if (tdd <= 28)
    {
        weeknum =  "W4";
    }
    else
    {
      weeknum =  "W5";
    }

}
else if (day == 1)
{
  if (tdd <= 6)
    {
        weeknum =  "W1";
    }
    else if (tdd <= 13)
    {
      weeknum =  "W2";
    }
    else if (tdd <= 20)
    {
        weeknum =  "W3";
    }
    else if (tdd <= 27)
    {
        weeknum =  "W4";
    }
    else
    {
      weeknum =  "W5";
    }
}
else if (day == 2)
{
  if (tdd <= 5)
    {
        weeknum =  "W1";
    }
    else if (tdd <= 12)
    {
      weeknum =  "W2";
    }
    else if (tdd <= 19)
    {
        weeknum =  "W3";
    }
    else if (tdd <= 26)
    {
        weeknum =  "W4";
    }
    else
    {
      weeknum =  "W5";
    }
}
else if (day == 3)
{
  if (tdd <= 4)
    {
        weeknum =  "W1";
    }
    else if (tdd <= 11)
    {
      weeknum =  "W2";
    }
    else if (tdd <= 18)
    {
        weeknum =  "W3";
    }
    else if (tdd <= 25)
    {
        weeknum =  "W4";
    }
    else
    {
      weeknum =  "W5";
    }
}
else if (day == 4)
{
  if (tdd <= 3)
    {
        weeknum =  "W1";
    }
    else if (tdd <= 10)
    {
      weeknum =  "W2";
    }
    else if (tdd <= 17)
    {
        weeknum =  "W3";
    }
    else if (tdd <= 24)
    {
        weeknum =  "W4";
    }
    else
    {
      weeknum =  "W5";
    }
}
else if (day == 5)
{
  if (tdd <= 2)
    {
        weeknum =  "W1";
    }
    else if (tdd <= 9)
    {
      weeknum =  "W2";
    }
    else if (tdd <= 16)
    {
        weeknum =  "W3";
    }
    else if (tdd <= 23)
    {
        weeknum =  "W4";
    }
    else if (tdd  <= 30)
    {
        weeknum =  "W5";
    }
    else
    {
      weeknum =  "W6";
    }
}
else if (day == 6)
{
  if (tdd <= 1)
    {
        weeknum =  "W1";
    }
    else if (tdd <= 8)
    {
      weeknum =  "W2";
    }
    else if (tdd <= 15)
    {
        weeknum =  "W3";
    }
    else if (tdd <= 22)
    {
        weeknum =  "W4";
    }
    else if (tdd  <= 29)
    {
        weeknum =  "W5";
    }
    else
    {
      weeknum =  "W6";
    }
}
  document.getElementById("inputweeknum").innerHTML = weeknum;

}


</script>
<!--------------------------------------------------------------------------------------SCRIPT-END-->


<!--------------------------------------------------------------------------------------JS-START-->
<script  type="text/javascript" src="rs/all/js_all.js"></script>
<!--------------------------------------------------------------------------------------JS-END-->