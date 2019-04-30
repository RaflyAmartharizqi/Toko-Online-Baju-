<?php

include '../connect.php';

$id_transaksi = $_GET['id'];

$query = "DELETE FROM transaksi WHERE id_transaksi = '$id_transaksi'";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num = 1)
{
    echo "Berhasil hapus data <br>";
} else {
    echo "Gagal hapus data <br>";
}
echo "<a href ='read.php'>Lihat Data</a>";

?>