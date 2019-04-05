<!-------------INCLUDING CSS AND PHP CODE--> 
<?php
include 'rs/all/css_all_public.php';
include 'rs/all/all_php.php';
include 'rs/php/php_batch_details.php';
include 'rs/css/css_batch_details.php';

//function tht fill hall names to option menu    
 $connect = mysqli_connect("localhost", "root", "", "tmswebdb");  
 function fill_batches($connect)  
 {  
      $sql = "SELECT Batch_name FROM batches";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option class="dropdown" value="'.$row["Batch_name"].'">'.$row["Batch_name"].'</option>';  
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

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


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
<!-----------------------------------------------------------------BATCH-->
<div style="background-color: transparent;margin-left: 80px;margin-right: 80px;margin-top: 10px;padding: 10px;">
  <label style='color: white;padding-left: 10px; font-size: 50px;font-weight: 100;line-height: 1.2;'>Batch Details</label>
</div>
<!-----------------------------------------------------------------BATCH-->
  <div class="row">

    <!--main-->
    <div class="main">
      <div style="  background-color: white;width: auto;height: auto;margin: 20px 20px 20px 20px;">
        
       <!-- button table --> 
       <table>
        <tr>
         <td>
          <button class="button" onclick="document.getElementById('id01').style.display='block'"><span>Add New Batch</span></button>
          <!-- <button class="button" onclick="document.getElementById('id02').style.display='block'"><span>Edit Batch</span></button> -->
          <button class="button" id="edit_mode_btn"><span>Swith To Edit Mode</span></button>
        </td>
      </tr>
    </table>
    <!-- button table end-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div id="id01" class="modal"><!-- model start -->
  <form class="modal-content animate" method="POST">

     <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     </div>

 <div class="container"><!-- container start -->

  <label><b>Here is the batch id : </b></label>
  <select class="dropdown" name="dropdown">
  	<?php echo add_option_value($servername, $username, $password, $dbname); ?>
  </select>
    <br><br>
      
      <label for="psw"><b>Batch Name : </b></label>
      <input type="text" placeholder="Enter Batch Name.." name="Batch_name" title="batch name is compulsory" required>

      <label for="psw"><b>Enter Batch Headcount : </b></label>
      <input type="text" name="head_count" placeholder="Enter the head count.." title="headcount is compulsory" required>

      <label for="psw"><b>Choose the batch color : </b></label>
      <input type="color" id="col" name="batch_col"  required>
       <br><br> 

      <button type="submit" id="insert" class="form_btn" name="update_batch">Save</button>

 </div> <!-- container end -->

    <div class="container" style="background-color:transparent;">
      <button type="button"  onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>

  </form><!-- form end -->
</div><!-- model end -->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- <div id="id02" class="modal">
  <form class="modal-content animate" method="POST">

     <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
     </div>
<br>
 <div class="container">

    <div id="flip">
      <label for="psw"><b>Select batch name to update : </b></label>
      <select name="batch" id="batch" class="dropdown"> 
        <option class="dropdown">Select from here</option> 
          <?php echo fill_batches($connect); ?>  
        </select>

    </div> 
<br><br> 
  <div id="show_batches">
         
  </div> 

 </div>

    <div class="container" style="background-color:transparent;">
      <button type="button"  onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>

  </form>

</div> -->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->        
<center>
<div style="max-height: 600px;overflow: auto;">
	<?php echo show_batchdata($servername, $username, $password, $dbname); ?>
</div>
</center>

      </div><!-- main sub div end -->
    </div><!-- main div end -->

  </div><!-- row div end-->
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

<div class="form-popup" id="online_Users_div">
  <?php show_online_users($servername,$username,$password,$dbname,$get_admin_name); ?>
</div>

<script>
 // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Get the modal 2
/*var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}*/

/*edit batch*/

/* $(document).ready(function(){  
      $('#batch').change(function(){  
           var Batch_name = $(this).val();  
           $.ajax({  
                url:"rs/php/php_batch_details.php",  
                method:"POST",  
                data:{Batch_name:Batch_name},  
                success:function(data){  
                     $('#show_batches').html(data);  
                }   
           });  
      });  
 });*/
 
 /*online ppl*/
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
</html>

<!--------------------------------------------------------------------------------------JS-START-->
<script  type="text/javascript" src="rs/all/js_all.js"></script>
<!--------------------------------------------------------------------------------------JS-END-->
