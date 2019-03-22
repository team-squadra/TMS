
<?php
include('rs/all/db_details.php');

function show_online_users($servername,$username,$password,$dbname,$get_admin_name)
{
   // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $x=0;
    $sql1 = "SELECT * FROM signup WHERE activity ='active' && username !='$get_admin_name' ";
    $result1 = $conn->query($sql1);
    if ($result1->num_rows > 0) 
    {
        while($row1 = $result1->fetch_assoc()) 
        {
          $x++;
        }
    } else {}

    //echo "<script>document.getElementById('open_btn_cunt').innerHTML='".$x."'</script>";
    //echo "<script>document.getElementById('close_btn_cunt').innerHTML='".$x."'</script>";

    $sql = "SELECT * FROM signup WHERE activity ='active' && username !='$get_admin_name'  ORDER BY loged_in_time DESC ";
    $result = $conn->query($sql);

    echo '<div style="max-height: 100px;overflow:auto;">
          <table>';
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<tr>';

                  if ($row["image"]!=null) {
                    echo '<td><img src="data:image/jpeg;base64,'.base64_encode($row["image"]).'"
                        style="width:25px;height:25px;border-radius:50%;border: 1px solid black;;margin:5px;margin-right:10px;"/></td>';
                  }
                  else
                  {
                    echo '<td><img  src="../resources/admin2.png" style="width:25px;height:25px;border-radius:50%;border: 1px solid black;;margin:5px;margin-right:10px;"></td>';
                  }


            echo '            
                        <td><lable style="margin-right:10px;">'. $row["firstname"].' '. $row["lastname"].'</lable></td>
                        <td><div style="background-color: LimeGreen;width:10px;height:10px;border-radius:50%;"></div></td>
                    </tr>
                ';
        }
    } else {
        echo "
        <tr>
            <td colspan='3'><center><b>Just you</b></center></td>
          </tr>
        ";
    }
    echo "</div>
          </table>";

    echo '

    <button class="close-button"  id="close_button">
      <table style="background-color: white;padding: 5px;">
        <tr>
          <td><center>Online</center></td>
          <td>('.$x.')</td>
          <td><center>&#9660;</center></td>
        </tr>
      </table>
    </button>
    ';
    $conn->close();
}

?>