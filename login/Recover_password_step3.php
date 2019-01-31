<!-------------INCLUDING CSS AND PHP CODE--> 
<?php
include 'rs/css/css_Recover_password_step3.php';
include 'rs/php/php_Recover_password_step3.php';
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
    <img src="../resources/avatar2.png" class="avatar">

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
            <h1>Change Password</h1><br><br>
            <p>New Password :</p>
            <center><input type="password" name="new_password" placeholder="New Password" required></center>
            <p>Confirm password :</p>
            <center><input type="password" name="r_password" placeholder="Confirm Password" required></center>
            <span class="error"><?php echo $passwordErr;?></span><br><br>
            <input type="submit"name="confirm" value="Confirm">
            <h1 id="h1_newacc">
                <form action="" method="POST">
                    <button name="destroy">Back to Login</button>
                </form>
            </h1>
        </form>

    </div>
</body>
<!--------------------------------------------------------------------------------------BODY-END--> 

</html>






