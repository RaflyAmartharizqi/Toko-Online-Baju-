<?php

include '../connect.php';

$id = $_GET['id'];

$query = "DELETE FROM gambar WHERE id = '$id'";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num = 1)
{
    header("location:read.php");
} else {
    echo "Gagal hapus data <br>";
    echo "<a href ='read.php'>Lihat Data</a>";

}

?>