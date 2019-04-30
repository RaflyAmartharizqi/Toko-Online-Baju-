<?php
include '../connect.php';
?>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
                <section class="login-box">
                <h2>Login</h2>
            <form action = "login.php" method="POST">
                Username :<input type="text" name="user"  placeholder="Username" width="100%"><br>
                Password :<input type="password" name="pass" placeholder="Password"><br>
                <input type="submit" name="submit" value="Login">
                <h4 align="center">Belum punya akun ? <a href="form-register.php">Sign Up</a></h4>
            </form>
</section>
            </div>
    
    
</body>
</html>