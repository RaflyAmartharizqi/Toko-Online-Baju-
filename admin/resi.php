<?php

include '../connect.php';

$id_transaksi = $_POST['id_transaksi'];
$resi = $_POST['resi'];

$query = "UPDATE transaksi SET resi = '$resi' WHERE id_transaksi= $id_transaksi";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
    header("location: transaksi.php");
} else {
    echo "Gagal update data <br>";
}

?>