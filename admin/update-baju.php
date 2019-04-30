<?php

include '../connect.php';

$id = $_POST['id'];
$gambar = $_POST['gambar'];
$nama_baju = $_POST['nama_baju'];

$query = "UPDATE gambar SET gambar = '$gambar', nama_baju='$nama_baju' WHERE id= $id";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num = 1)
{
    echo "Berhasil update data <br>";
} else {
    echo "Gagal update data <br>";
}
echo "<a href ='read.php'>Lihat Data</a>";
?>