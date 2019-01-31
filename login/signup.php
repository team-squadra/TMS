<!-------------INCLUDING CSS AND PHP CODE--> 
<?php
include 'rs/css/css_signup.php';
include 'rs/php/php_signup.php';
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
<body>
    <div class="Create_account">
        <img src="../resources/op.png" class="avatar">
      
        <h1>Create an Account</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
            <p>First Name</p>
            <input type="text" name="new_First_Name" placeholder="Enter Your First Name">
            <span class="error">*<?php echo $newFirstNameErr;?></span>
            <br><br>
            <p>Last Name</p>
            <input type="text" name="new_Last_Name" placeholder="Enter Your Last Name">
            <span class="error">*<?php echo $newLastNameErr;?></span>
            <br><br>
            <p>Username</p>
            <input type="text" name="new_username" placeholder="Enter Your Username">
            <span class="error">*<?php echo $newusernameErr;?></span>
            <br><br>
            <p>New Password</p>
            <input type="password" name="new_password" placeholder="Enter Your New Password">
            <span class="error">*<?php echo $newpasswordErr;?></span>
            <br><br>
            <p>Email</p>
            <input type="text" name="new_email" placeholder="Enter Your Email">
            <span class="error">* <?php echo $newemailErr;?></span>
            <br><br>
            <input type="submit" name="SIGNUP" value="Sign Up">
            <h1 id="h1_newacc">Already have an account? <a href="login.php">Sign in</a>.</h1>
        </form>
    </div>
</body>
<!--------------------------------------------------------------------------------------BODY-END--> 

</html>

 


 