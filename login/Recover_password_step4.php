<!-------------INCLUDING CSS AND PHP CODE--> 
<?php
include 'rs/css/css_Recover_password_step4.php';
include 'rs/php/php_Recover_password_step4.php';
?>
<!--------------> 



<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
<!--------------------------------------------------------------------------------------TITLE-START--> 
<title>Timetable Management System</title>
<link rel="icon" type="image/png" href="../resources/yy.ico">
<!--------------------------------------------------------------------------------------TITLE-END--> 
</head>


<!--------------------------------------------------------------------------------------BODY-START--> 
<body id="loginpage">
    <div class="recover">
    <img src="../resources/avatar3.png" class="avatar">

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
            <h1> Hi<br><br>Your Password <br>has been Successfully Changed <br><br><img src="../resources/pp.png" style="width: 50px;height: 50px;"></h1><br>
            <h1 id="h1_newacc">
            	<form action="" method="POST">
            		<button name="destroy">Back to Login</button>
            	</form>
            </h1>
        </form>
        
    </div>
</body>
<!---------------------<a href="login.php">Back to Login</a>-----------------------------------------------------------------BODY-START--> 
</head>
</html>






