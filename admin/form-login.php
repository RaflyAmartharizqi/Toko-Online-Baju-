<?php
include '../connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="container">
                <section class="login-box">
                <h2>Login Admin</h2>
            <form action = "login.php" method="post">
                Username :<input type="text" name="usernameAd"  placeholder="Username"><br>
                Password :<input type="password" name="passwordAd" placeholder="Password"><br>
                <input type="submit" name="submit" value="Login">
            </form>
            </div>
    
    
</body>
</html>