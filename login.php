<!-------------INCLUDING CSS AND PHP CODE--> 
<?php
include 'resources/css/css_login.php';
include 'resources/php/php_login.php';
?>
<!--------------> 



<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
<!--------------------------------------------------------------------------------------TITLE-START--> 
<title>Timetable Management System</title>
<link rel="icon" type="image/png" href="resources/assests/yy.ico">
<!--------------------------------------------------------------------------------------TITLE-END--> 
</head>


<!--------------------------------------------------------------------------------------HEADER-START-->  
    <header>
    <div><a href="index.php" class="btn" title="Go back">Back</a></div>
    </header>
<!--------------------------------------------------------------------------------------HEADER-END-->



<!--------------------------------------------------------------------------------------BODY-START--> 
<body>     
    <div class="loginbox">
    <img src="resources/assests/op.png" class="avatar">
        <h1>Login</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <p>Username</p>
            <input type="text" name="user" placeholder="Enter Your Username" required>
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Your Password" required>
            <span class="error"><?php echo $LOGINERR;?></span><br><br>
            <input type="submit"name="login" value="Login">
            <a href="Recover_password_step1.php">Forgot password?</a><br>
            <a href="signup.php">Don't have an account?</a>
        </form>

    </div>
</body>
<!--------------------------------------------------------------------------------------BODY-END--> 

</html>



