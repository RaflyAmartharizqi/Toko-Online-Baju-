<!DOCTYPE HTML>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="../assets/assets/css/bootstrap.min.css">
</head>
<body>
<h1 align="center">Register</h1>
<section id="input-form">
        <form action="register.php" method="POST">
          <div class="form">
            <label>Nama</label>
            <input id="inpNama" type="text" name="nama">
          </div>
          <div class="form">
            <label>Email</label>
            <input id="inpEmail" type="text" name="email">
          </div>
          <div class="form">
            <label>Telpon</label>
            <input id="inpTelp" type="text" name="telp">
          </div>
          <div class="form">
            <label>Username</label>
            <input id="inpUsername" type="text" name="username">
          </div>
          <div class="form">
            <label>Password</label>
            <input id="inpPassword" type="password" name="password">
          </div>
          <div class="form">
            <input type="submit" name="submit"
            value="Register" class="bg-blue">
            </div>
        </form>
      </section>
    
</body>
</html>