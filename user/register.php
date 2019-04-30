<link rel="stylesheet" href="../assets/assets/css/bootstrap.min.css">

<?php

    include '../connect.php';

    
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO users(nama, email, telp, username, password ) VALUES ('$nama','$email','$telp','$username','$password')";
    $result = mysqli_query($connect,$query);

    $num = mysqli_affected_rows($connect);

    if($num > 0){ 
        echo "<div class='alert alert-success'><strong>Register Berhasil!</strong><a href= 'form-login.php'> Silahkan Login </a></div>"; 
    } else { 
        echo "Gagal tambah data "; 
    }

    

?>
