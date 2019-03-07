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
<body onload="move()">

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

  <div class="row" style="background-image: ">

    <!--main-->
    <div class="main">
      <div style="  background-color: white;width: auto;height: 85%;margin: 20px 25% 20px 50px;">

         <div>
          <table style="color: dimgray; padding:5px;font-size: 24px;">
            <tr>
              <td style="padding: 15px;"><img src="../resources/ih.png" style="width: 30px;height: 30px;"></td>
              <td style="padding: 5px;"><b>Hall Details List</b></td>
            </tr>
          </table>
          </div>
          <center>

            <!-- Hall details search bar -->
            <input type="text" id="myInput" onkeyup="searchHalls()" placeholder="Search By Hall Name......">
            <!-- Hall details search bar -->

          <!-- show hall details in a table -->
          <?php echo $A_output ?>
          <!-- show hall details in a table -->

          </center>  
      </div>
    </div>

     <!--side-->
    <div class="sideright">
      <!------------------------------------------------------------INPUT HALL DETAILS FORM DIV START-------------------------->

          <div style="  background-color:white;width: auto;height: 28%; margin: 36px 20px 20px -100%;" class="input_hdetails">
         <div>
          <table style="color: dimgray; padding:5px;font-size: 18px;">
            <tr>
              <td style="padding: 5px;"><img src="../resources/ih.png" style="width: 30px;height: 30px;"></td>
              <td style="padding: 5px;"><b>Input Hall Details</b></td>
            </tr>
          </table>
          </div>
       <div id="input_form">      
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <center>
          <div id="panel3">
          <table style="width: auto;">
                <center>
                <tr>
                    <div class="input-container">
                    <td><i class="fa fa-key icon"></i>
                      <input type="text" class="input-field" name="new_Hall_Name" placeholder="Enter Hall Name"></td>
                      </div>
                </tr>
              </center>

              <tr>
                <td><?php echo $HallNameErr;?></td>
              </tr>

                <tr>
                    <div class="input-container">
                     <td><i class="fa fa-key icon"></i>
                      <input type="text" class="input-field" name="new_Hall_Capacity" placeholder="Enter Hall capacity"></td>
                    </div>
                </tr>
                <tr>
                  <td><?php echo $HallCapacityErr;?></td>
                </tr>

                <tr>
                      <div class="input-container">
                      <td><i class="fa fa-key icon"></i>
                         <select name="new_Hall_Type" class="input-field">
                            <option value="Lecture Hall" style="color: black; background-color: #ddd;">Lecture Hall</option>
                            <option value="Lab" style="color: black; background-color: #ddd;">Lab</option>
                         </select>
                     </td>
                   </div>
                </tr>
    
                <tr>
                     <td><input type="submit" name="insert" class="btn" value="Insert"></td>
               </tr>

          </table>
        </div>
        </center> 
      </form>
    </div>
  </div>

  <!------------------------------------------------------------------------------------------INPUT HALL DETAILS FORM DIV END-->



  <!----------------------------------------------------------------------------------------UPDATE HALL DETAILS DIV START-->


      <div style="background-color: white;width: auto;height: 57%;margin: 20px 20px 10px -100%;">


        
         <div>
          <table style="color: dimgray; padding:5px;font-size: 18px;">
            <tr>
              <td style="padding: 10px;"><img src="../resources/ih.png" style="width: 30px;height: 30px;"></td>
              <td style="padding: 5px; padding-right: 60px;"><b>Update Hall Details</b></td>
            </tr>
          </table>
          </div>

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
        </center>                      
                                  
                               <div>
                                 <table style="color: dimgray; padding:5px;font-size: 18px;">
                                   <tr>
                                     <td style="padding: 10px;"><img src="../resources/ih.png" style="width: 30px;height: 30px;"></td>
                                     <td style="padding: 5px; padding-right: 60px;"><b>Remove a Hall</b></td>
                                   </tr>
                                 </table>
                               </div>

          <center>
                              <!--REmove a hall  form start--> 
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
                  <!--REmove a hall form end--> 

          </table>
        </center>
      </div>
        
    </div>

      <!--------------------------------------------------------------------------------------UPDATE HALL DETAILS  DIV END-->

    </div>

  </div>

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

$(document).ready(function(){
  $("#hall").change(function(){
    $("#show_halls").css("display","block");
    $("#panel").slideDown("slow");
  });
});

 </script>

</body>
<!--------------------------------------------------------------------------------------BODY-END-->

</html>


<!--------------------------------------------------------------------------------------JS-START-->
<script  type="text/javascript" src="rs/all/js_all.js"></script>
<!--------------------------------------------------------------------------------------JS-END