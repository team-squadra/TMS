<!-----------INCLUDING CSS AND PHP CODE--> 
<?php
include 'rs/all/css_all_public.php';
include 'rs/php/php_hall_details.php';
include 'rs/css/css_hall_details.php';

//function tht fill hall names to option menu    
 $connect = mysqli_connect("localhost", "root", "", "tmswebdb");  
 function fill_hallname($connect)  
 {  
      $sql = "SELECT Hall_name FROM halls";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["Hall_name"].'">'.$row["Hall_name"].'</option>';  
      }  
      return $output;  
 } 

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--------------------------------------------------------------------------------------TITLE-START--> 
<script>

</script> 
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
<body onload="move()">

  <!-- page loader progress bar div start -->
     <div id="myProgress">
     <div id="myBar"></div>
     </div>
     <!-- page loader progress bar div end -->


   <!-- hoverable side nav bar -->
<div id="mySidenav" class="sidenav">
  <table>

    <tr>
      <td>
         <a href="home.php" id="home">Home<i class='far fa-calendar-alt'style=" font-size:32px;margin-left:93px;"></i></a>
      </td>
     </tr>

    <tr>
    <td>
      <a href="hall_details.php" id="hall_details">Hall Details<i class='fas fa-chalkboard-teacher'style='font-size:25px;margin-left: 42px;'></i></a>
    </td>
  </tr>

    <tr>
     <td>          
       <a href="batch_details.php" id="batch_details">Batch Details<i class='far fa-address-card'style='font-size:28px;margin-left: 30px;'></i> </a>
     </td>
      </tr> 


    <tr>
     <td>    
       <a href="timetables.php" id="timetables">TimeTables<i class='fas fa-fax'style='font-size:29px;margin-left: 45px;'></i> </a>
    </td>
   </tr> 
   
   <tr>
    <td> 
      <a href="new_account.php" id="new_account">New Account<i class='far fa-address-book'style='font-size:30px;margin-left:32px;'></i> </a>
      </td>
   </tr> 
 
   <tr>
    <td>
               <a href="about_us.php" id="about">About Us<i class='far fa-comment-dots'style='font-size:32px;margin-left:65px;'></i></a>
      </td>
   </tr> 
  </table>        
         </div>

<!-----------------------------------------------------------------BATCH-->
<div style="background-color: transparent;margin-left: 80px;margin-right: 80px;margin-top: 10px;padding: 10px;">
  <label style='color: white;padding-left: 10px; font-size: 50px;font-weight: 100;line-height: 1.2;'>Hall Details</label>
</div>
<!-----------------------------------------------------------------BATCH-->

<div class="row">

    <!--main-->
    <div class="main" style=" background-color: black;">
      <div style="  background-color: white;width: auto;height:750px;margin: 20px 20px 20px 20px;">
        <center>

          <table  style="width: 100%;">
            <tr>
              <td>
<!----------------------------------------------------------------------------------------VIEW HAll DETAILS DIV START-->
<div style="  background-color: transparent;width:100%;height: 100%; max-height: 700px;overflow: auto; ">
  <center>
    <!-- Hall details search bar -->
    <input type="text" id="myInput" onkeyup="searchHalls()" placeholder="Search By Hall Name......" style="margin: 20px;">
    <!-- Hall details search bar -->

      <!-- show hall details in a table -->
      <div><?php echo $A_output ?></div>
      <!-- show hall details in a table -->
  
      <!-- show a msg if no hall data is added -->
      <?php echo $ifblank ?>
      <!-- show a msg if no hall data is added -->
  </center>
</div>
<!----------------------------------------------------------------------------------------VIEW HAll DETAILS DIV END-->
              </td>

              <td id="side" style="max-width:800px;">
 <div style="  background-color: transparent; max-height: 700px;overflow: auto; ">  
              
<!------------------------------------------------------------INPUT HALL DETAILS FORM DIV START-------------------------->
<div style="background-color:transparent;width:100%;height: 100%;" class="input_hdetails">

  <div class="form_header">
    <table style="color: dimgray; padding:5px;font-size: 18px; background-color: transparent;">
      <tr class="cs_header">
        <td><img src="../resources/ih.png" style="width: 30px;height: 30px;"></td>
        <td><b>Input Hall Details</b></td>
      </tr>
    </table>
  </div>

  <br>

  <div id="input_form">      
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
      <center>
        <div id="panel3">
          <table style="width: 100%;">

            <tr>
                <td>
                  <center>
                    <i class="fa fa-key icon"></i>
                    <input type="text" class="input-field" name="new_Hall_Name" placeholder="Enter Hall Name" required name="">
                  </center>
                </td>
            </tr>
              
            <tr>
              <td>
                <center>
                  <i class="fa fa-key icon"></i>
                  <input type="text" class="input-field" name="new_Hall_Capacity" placeholder="Enter Hall capacity" required name="">
                </center>
              </td>
            </tr>

            <tr>
              <td>
                <center>
                  <i class="fa fa-key icon"></i>
                  <select name="new_Hall_Type" class="input-field">
                    <option value="Lecture Hall" style="color: black; background-color: #ddd;">Lecture Hall</option>
                    <option value="Lab" style="color: black; background-color: #ddd;">Lab</option>
                  </select>
                </center>
              </td>
            </tr>

            <tr>
              <td><center><input id="myBtn" type="submit" name="insert" class="btn" value="Insert"></center></td>
            </tr>

          </table>

        </div><!--panel 3-->
      </center> 
    </form>
  </div><!--input form-->

</div><!--input_hdetails-->
<!------------------------------------------------------------------------------------------INPUT HALL DETAILS FORM DIV END-->

<!----------------------------------------------------------------------------------------UPDATE HALL DETAILS DIV START-->
<div style="background-color:transparent;width: auto;height: 57%;margin: 20px 0% 10px;">

  <div class="form_header">
    <table style="color: dimgray; padding:5px;font-size: 18px;">
      <tr class="cs_header">
        <td><img src="../resources/ih.png" style="width: 30px;height: 30px;"></td>
        <td><b>Update Hall Details</b></td>
      </tr>
    </table>
  </div>

  <br>
  <center>
    <div id="flip">
      <select name="hall" id="hall"> 
        <option> Select Hall Name To Update</option> 
          <?php echo fill_hallname($connect); ?>  
        </select>
    </div> 

    <!--update hall details form start-->
    <form method="POST" enctype="multipart/form-data" id="input">
      <div id="panel">
        <center>
          <div id="show_halls">
            <!--the div that shows the hall details when user select a hall name-->
          </div>
        </center>  
      </div>
    </form>

    <!--update hall details form end-->

   <br>
    <!-- remove hall  div start --> 
    </center>                         
      <div class="form_header">
        <table style="color: dimgray; padding:5px;font-size: 18px;">
          <tr class="cs_header">
            <td><img src="../resources/ih.png" style="width: 30px;height: 30px;"></td>
            <td><b>Remove a Hall</b></td>
          </tr>
        </table>
      </div>
    <center>
  <br>
    <form method="POST" enctype="multipart/form-data">
      <div id="flip2">
        <select name="hall_del" id="hall"> 
          <option> Select Hall Name To Remove</option> 
            <?php echo fill_hallname($connect); ?>  
        </select> 
      </div>

      <div id="panel2">
        <button id="removebtn" name="delete">Remove Hall</button>
      </div>      
    </form>

  </center>
</div>
</div>
<!--------------------------------------------------------------------------------------UPDATE HALL DETAILS  DIV END-->
              </td>
            </tr>
          </table>
        </center>
      </div>
    </div>

</div>
</body>
<!--------------------------------------------------------------------------------------BODY-END-->

</html>

<script>  
 $(document).ready(function(){  
      $('#hall').change(function(){  
           var Hall_name = $(this).val();  
           $.ajax({  
                url:"rs/php/php_hall_details.php",  
                method:"POST",  
                data:{Hall_name:Hall_name},  
                success:function(data){  
                     $('#show_halls').html(data);  
                }   
           });  
      });  
 });
///////////////////////////////////////hall details search bar function
 function searchHalls() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dHall");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

$(document).ready(function(){
  $("#hall").change(function(){
     $("#side").width(800);
  });
});

 </script>

<!--------------------------------------------------------------------------------------JS-START-->
<script  type="text/javascript" src="rs/all/js_all.js"></script>
<!--------------------------------------------------------------------------------------JS-END