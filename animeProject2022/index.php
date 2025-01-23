<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Store</title>
    <!--link to css-->
		<link rel="stylesheet" type="text/css" href="styles.css">

	<!--code for favicon-->
		<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
        <link rel="manifest" href="favicon_io/site.webmanifest">
</head>
<body bgcolor="#d3d3d3" style="background-image: linear-gradient(#03e8fc, #0373fc); overflow:hidden;">
    <?php
    session_destroy();
    ?>
    <!--account page-->
    <div class="headd">
        <div id="logofoot">
                <img src="images/fafflLogo.png" width="80px">
        </div>
        <center><h1 id="heading"> Anime Store</h1></center>
    </div>
    
    <div class="account-page">
        <div class="form-container">
            <div class="form-btn">
                <span onclick="login()">Login</span>
                <span onclick="register()">Register</span>
                <hr id="move-line" style="background:blue">
            </div>

            <form id="loginForm" action="validation.php" method="post">
                <input type="text" name="user_name" placeholder="Username">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" class="btn" name="login" style="background-image: linear-gradient(#1877F2,blue); color:white">Login</button>
                <a href="#">Forgot Password?</a>            
            </form>

            <form id="regForm" action="registration.php" method="post">
                <input type="text" name="user_name" placeholder="Username">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" class="btn" name="register" style="color:white; background-image: linear-gradient(#008131,green);">Register</button>
            </form>

        </div>
    </div>

    <!-- Javascript -->
    <script>
        /* toggle form */
            var regForm = document.getElementById("regForm");
            var loginForm = document.getElementById("loginForm");
            var indicator = document.getElementById("move-line");
            
            function login(){
                regForm.style.transform = "translateX(300px)";
                loginForm.style.transform = "translateX(300px)";
                indicator.style.transform = "translateX(0px)";
            }
            function register(){
                regForm.style.transform = "translateX(0px)";
                loginForm.style.transform = "translateX(0px)";
                indicator.style.transform = "translateX(100px)";
            }
    </script>
    <?php
    if(isset($_GET['success']) && $_GET['success']){
        echo '<script type="text/javascript"> alert("Registration Success"); </script>';
    }
    elseif(isset($_GET['success']) && !$_GET['success']){
        echo '<script type="text/javascript"> alert("LOGIN/REGISTRATION Failed"); </script>';
    }
    ?>
    
</body>
</html>