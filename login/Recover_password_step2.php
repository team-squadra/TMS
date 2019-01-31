<!-------------INCLUDING CSS AND PHP CODE--> 
<?php
include 'rs/css/css_Recover_password_step2.php';
include 'rs/php/php_Recover_password_step2.php';
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
            <form action="" method="POST">
                <?php echo "<h1>Hi $user_name </h1><br><br>";?>
                <h2> Your Recover Code has been Successfully Send to Your Email <br><img src="../resources/pp.png" style="width: 50px;height: 50px;"></h2>
                <p>Enter Your Code :</p>
                <center><input type="password" name="reccode" required></center>
                <input type="submit"name="verify" value="Verify">
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






