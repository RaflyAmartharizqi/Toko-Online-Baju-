<?php
session_start();
include '../connect.php';

$username_adm = $_POST['usernameAd'];
$password_adm = $_POST['passwordAd'];

if($username_adm == "" || $password_adm == "")
{
    header("location :form-login.php");
} 
else 
{
    $query = "SELECT * FROM admin WHERE username_admin = '$username_adm' AND password_admin = '$password_adm'";
    $result = mysqli_query($connect, $query);
    $num = mysqli_num_rows($result);
    if($num >0)
    {
        header("location: read.php");
        $_SESSION['admin'] = $username_admin;
    }
    else
    {
        header("location: form-login.php");
    }
}

?>