<?php

include '../connect.php';
$status = $_POST['status'];

$id_transaksi=$_POST["id_transaksi"];

$query = "UPDATE transaksi SET status = '$status' WHERE id_transaksi = '$id_transaksi'"; 

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
    header("location:transaksi.php");
} else {
    echo "Gagal update data <br>";
    echo "<a href ='transaksi.php'>Lihat Data</a>";

}
?>