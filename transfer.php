<?php

include 'connect.php';

$nama_file = $_FILES['bukti']['name'];
$ukuran_file = $_FILES['bukti']['size'];
$tipe_file = $_FILES['bukti']['type'];
$tmp_file = $_FILES['bukti']['tmp_name'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$namaP=$_POST['nama_pem'];
$status=$_POST['status'];
$size=$_POST['size'];
$id = $_POST['id'];
$path = "trans/".$nama_file;
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ 
  if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database
      $query = "INSERT INTO transaksi(bukti,ukuran,tipe,alamat,telp,size,status,nama_pembeli,id) VALUES('".$nama_file."','".$ukuran_file."','".$tipe_file."','".$alamat."','".$telp."','".$size."','".$status."','".$namaP."','".$id."')";
      $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: data-transaksi.php"); // Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='form.php'>Kembali Ke Form</a>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='form.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
    echo "<br><a href='form.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
  echo "<br><a href='form.php'>Kembali Ke Form</a>";
}
?>
?>