<?php

include 'connect.php';

$query = "SELECT id_transaksi, nama_pembeli , alamat, telp, status,resi, gambar.nama,gambar.nama_baju
            FROM transaksi LEFT JOIN gambar
            USING (id)
            ";

$result = mysqli_query($connect, $query);

$num = mysqli_num_rows($result);
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
		  <li class="nav-item"><a href="index.php" class="nav-link">Beranda</a></li>
		  <li class="nav-item"><a href="data-transaksi.php" class="nav-link">Data Transaksi</a></li>
		  
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
    </nav> <br><br>
    <table class="table table-striped" align="center" height="20%">
        <tr>
            <th>No.</th>
            <th>Nama Pembeli</th>
            <th>Tujuan</th>
            <th>Nama Barang</th>
            <th>Barang</th>
            <th>Status</th>
            <th>Resi</th>
        </tr>

        <?php
    if($num > 0)
    {
        $no = 1;
        while($data = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data['nama_pembeli']?></td>
                <td><?php echo $data['alamat']?></td>
                <td><?php echo $data['nama_baju']?></td>
                <?php echo "<td><img src='admin/images/".$data['nama']."' width='100' height='100'></td>"?>                
                <td><?php echo $data['status']?></td>
                <td><?php echo $data['resi']?></td>
            </tr>
            <?php
            $no++;
        }

    } else {
        echo "<tr> <td colspan='7'> Tidak ada data <td> </tr>";
    }
?>