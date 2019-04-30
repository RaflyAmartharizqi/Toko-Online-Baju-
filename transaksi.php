<?php

include 'connect.php';
$id=$_GET['id'];
$query = "SELECT * FROM gambar WHERE id = $id";

$result = mysqli_query($connect,$query);
$data=mysqli_fetch_assoc($result);
?>
<html>
    <head>
    <title>Tumbas Online</title>
        <link rel="stylesheet" type="text/css" href="assets/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style-transaksi.css">
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
		  <li class="nav-item"><a href="index.php" class="nav-link">Beranda</a></li>
		  <li class="nav-item"><a href="data-transaksi.php" class="nav-link">Data Transaksi</a></li>
		  <?php
          session_start();
        if(!(isset($_SESSION['users'])))
        {
        echo "<li class='nav-item'><a href='form-login.php' style='margin-left:1050px;' class='nav-link'>Login</a></li>";
        } else {
            echo "<li class='nav-item'><a style='margin-left:950px;' class='nav-link'>Selamat Datang</a></li>";
        }
            ?>
		</ul>
	  </div>
    </nav>
    <form action="pembayaran.php?id=<?php echo $data['id']; ?>" method="post">
    <div class="kotak" >
        <img src="admin/images/<?php echo $data['nama']?>" alt="">

        <div class="deskripsi">
            <h1 align="left"><?php echo $data['nama_baju']?></h1>
            <hr width="95%">
            <input type="hidden"><h3>Rp.<?php echo$data['harga'] ?></h3>
            <hr width="95%">
           <input type="radio" value="S" name="ukuran" checked> 
           S
           <input type="radio" value="M" name="ukuran">
           M
           <input type="radio" value="L" name="ukuran">
           L
           <input type="radio" value="XL" name="ukuran">
           XL
           <input type="radio" value="XXL" name="ukuran">
           XXL
     <a href="pembayaran.php?id=<?php echo $data['id']; ?>"><input type="submit" class="tombol_login" value="BELI"></a>
        </div>
        
        <div class="yup">
            <h2 align="center">Alamat Pengiriman</h2>
       
			<label>Nama</label>
            <input type="text" name="nama" class="form_login"  placeholder="Nama">
            
            <label>Alamat</label>
			<input type="text" name="alamat" class="form_login"  placeholder="Alamat">

            <label>No. Telp</label>
            <input type="text" name="telp" class="form_login"  placeholder="Telepon">
            
           
 
        </div>
    </div>
    </form>
    </body>
</html>