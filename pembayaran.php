<?php

session_start();
if(!(isset($_SESSION['user'])))
{
    header("location: user/form-login.php");
}

include 'connect.php';
$id=$_GET['id'];
$query = "SELECT * FROM gambar WHERE id = $id";
$result = mysqli_query($connect,$query);
$data=mysqli_fetch_assoc($result);

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$ukuran = $_POST['ukuran'];
?>

<html>
    <head>
    <title>Tumbas Online</title>
        <link rel="stylesheet" type="text/css" href="assets/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style-tansaksi.css">
        <link rel="stylesheet" href="style-pembayaran.css">
        <link rel="stylesheet" href="style.css">
	    <script type="text/javascript" src="assets/assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/assets/js/jquery.js"></script>
    </head>

    <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" style="position:fixed;">
	 <a href="#">
	  </a>
	  
	  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
	    <span class="navbar navbar-toggler-icon"></span>
	  </button>
	  
	    <div class="collapse navbar-collapse" id="menu">
	    <ul class="navbar-nav">
		  <li class="nav-item"><a href="#" class="nav-link">Beranda</a></li>
		  <li class="nav-item"><a href="#" class="nav-link">Data Transaksi</a></li>
		  
		  <?php
          session_start();
        if(!(isset($_SESSION['users'])))
        {
        echo "<li class='nav-item'><a href='form-login.php' style='margin-left:1050px;' class='nav-link'>Login</a></li>";
        } else {
            echo "<li class='nav-item'><a style='margin-left:950px;' class='nav-link'></a></li>";
        }
            ?>
		</ul>
	  </div>
    </nav> <br><br><br><br><br><br>
    
        <form action="transfer.php" method="POST" enctype="multipart/form-data">
        <table>
    <tr>
    <td>Nama Baju</td>
    <td>:</td>
    <td><input type="text" name="nama_baju" id="nama" value="<?php echo $data['nama_baju']?>" disabled></td>
    </tr>
    <tr>
    <td><td></td></td>
    <td><img src="admin/images/<?php echo $data['nama']?>" alt="" width="100px" height="100px"></td>
    </tr>
    <tr>
    <td>Harga harus dibayar </td>
    <td>:</td>
    <td><input type="text" name="harga" id="harga" value="Rp.<?php echo $data['harga']?>" readonly></td>
    </tr>
    <tr>
    <td>Bayar ke No. Rekening </td>
    <td>:</td>
    <td><b><a>BNI : 01982309830 a/n Rafly Amartharizqi</a></b></td>
    </tr>
    <tr>
    <td>Ukuran</td>
    <td>:</td>
    <td><input type="text" name="size" id="ukuran" value="<?php echo $ukuran ?>" readonly></td>
    </tr>
    
    
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama_pem" value="<?php echo $nama; ?>" readonly></td>
    </tr>
    <tr>
    <td>Telepon</td>
    <td>:</td>
    <td><input type="text" name="telp" value="<?php echo $alamat; ?>" readonly></td>
    </tr>
    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" name="alamat" value="<?php echo $telp; ?>" readonly></td>
    </tr>
    <tr>
    <td>Upload Bukti</td>
    <td>:</td>
    <td><input type="file"  name="bukti"></td>
    </tr>
    
    
    <tr>
    <td><input type="hidden" value="tunggu" name="status"></td>
    <td><input type="hidden" name="id" value="<?php echo $data['id']; ?>"></td>
    <td><input type="submit" name="submit" value="Selesai"></td>
    </tr>
    
    </form>
      </table>
    </body>
    </html>