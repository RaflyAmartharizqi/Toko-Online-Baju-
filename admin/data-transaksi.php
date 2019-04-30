<?php

include '../connect.php';

$query = "SELECT kode, nama_matkul, sks, semester, nama_dosen
            FROM matakuliah LEFT JOIN dosen
            USING (id_dosen)
            ORDER BY kode";



?>
<!DOCTYPE html>
<html>
<head>
    <title>Tabel</title>
</head>
<body>
    
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Kode</th>
            <th>Mata kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Dosen Pengajar</th>
            <th>Aksi</th>
        </tr>
        <?php
include "../connect.php";
$query = "SELECT * FROM gambar"; 
$sql = mysqli_query($connect, $query); 
$row = mysqli_num_rows($sql); 
if($row > 0){ 
  while($data = mysqli_fetch_array($sql)){ 
    echo "<tr>";
    echo "<td>".$data['id']."</td>";
    echo "<td><img src='images/".$data['nama']."' width='100' height='100'></td>";
    echo "<td>".$data['nama_baju']."</td>";
    echo "<td>".$data['harga']."</td>";
    echo "<td><a href='form-update.php?id=" .$data['id']."'>Edit</a> ";
    echo "<td><a href='delete.php?id=". $data['id'] . "' onclick ='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a></td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='4'>Data tidak ada</td></tr>";

?>
            <?php
            $no++;
        }

 
?>

    </table>
</body>
</html>
