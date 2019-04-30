<?php
session_start();
include '../connect.php';

$usernameMember = $_POST['user'];
$passwordMember = $_POST['pass'];

if($usernameMember== "" || $passwordMember==""){
    header("location : form-login.php");
}
else 
{
    $query = "SELECT * FROM users WHERE username = '$usernameMember' AND password = '$passwordMember'";
    $result = mysqli_query($connect, $query);

    $num = mysqli_num_rows($result);

    if($num = 1)
    {
        header("location: ../index.php");
        $_SESSION['users'] = $usernameMember;
    }
    else
    {
        header("location: form-login.php");
    }
}

?>