<!-------------INCLUDING CSS AND PHP CODE--> 
<?php
include 'resources/css/css_Recover_password_step1.php';
include 'resources/php/php_Recover_password_step1.php';
?>
<!--------------> 



<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
<!--------------------------------------------------------------------------------------TITLE-START--> 
<title>Timetable Management System</title>
<link rel="icon" type="image/png" href="resources/assests/yy.ico">
<!--------------------------------------------------------------------------------------TITLE-END--> 
</head>


<!--------------------------------------------------------------------------------------BODY-START--> 
<body id="loginpage">
    <div class="recover">
        <img src="resources/assests/avatar2.png" class="avatar">
        <h1>Enter  Your Email address to Recover the Password</h1><br><br>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <p>Email Address</p>
            <input type="text" name="email" placeholder="Enter Your Email Address"><br><br>
            <span class="error"><?php echo $LOGINERR;?></span><br><br>
            <input type="submit"name="login" value="Recover Password">
            <h1 id="h1_newacc"><a href="login.php">Back to Login</a></h1>
        </form>
        
    </div>
</body>
<!--------------------------------------------------------------------------------------BODY-START--> 

</html>

