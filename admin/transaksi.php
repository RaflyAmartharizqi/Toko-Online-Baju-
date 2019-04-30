<?php

include '../connect.php';

$query = "SELECT id_transaksi, nama_pembeli , size,alamat, telp, status,resi, nama,nama_baju
            FROM transaksi LEFT JOIN gambar
            USING (id)
            ORDER BY id_transaksi";
$result = mysqli_query($connect,$query);
$num = mysqli_fetch_assoc($result);
?>

<head>
        <title>Halaman Admin</title>
        <link rel="stylesheet" href="../assets/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="style-trans.css">
    </head>

<nav class="navbar navbar-expand-md bg-danger navbar-dark fixed-top">
	 
	 
	  
	  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
	    <span class="navbar navbar-toggler-icon"></span>
	  </button>
	  
	  
	  
	  <div class="collapse navbar-collapse" id="menu">
	    <ul class="navbar-nav">
		  <li class="nav-item"><a href="read.php" class="nav-link">Beranda</a></li>
		  <li class="nav-item"><a href="form-baju.php" class="nav-link">Tambah Barang</a></li>
		  <li class="nav-item"><a href="transaksi.php" class="nav-link">Transaksi</a></li>
		 
          <li class='nav-item'><a href='logout.php' style='margin-left:880px;' class='nav-link'>Logout</a></li>
		</ul>
	  </div>
      </nav><br><br>
     
            <div class="kanan">
                <h1 style="padding:20px; font-family:'Courier new';">Transaksi</h1>
                <hr size="10px">
                <table class="table table-striped" align="center" height="20%">
        <tr>
            <th>No.</th>
            <th>Nama Pembeli</th>
            <th>Tujuan</th>
            <th>Nama Barang</th>
            <th>Barang</th>
            <th>Size</th>
            <th>Status</th>
            <th>Update Status</th>
            <th>Resi</th>
            <th>Update Resi</th>
            <th>Delete</th>
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
                <?php echo "<td><img src='images/".$data['nama']."' width='100' height='100'></td>"?>     
                <td><?php echo $data['size']?></td>           
                <td><?php echo $data['status']?></td>
                <td>
                <form action="edit.php" method="post">
                Tunggu<input type="radio" value="tunggu" style="float:right" name="status"><br>
                Pengiriman<input type="radio" value="pengiriman" style="float:right" name="status"><br>
                Selesai<input type="radio" value="selesai" style="float:right" name="status"><br>
                <input type="hidden" value="<?php echo $data['id_transaksi']?>" name="id_transaksi">
                <input type="submit" value="update">
                </form>
                </td>
                <td><?php echo $data['resi']?></td>
                <td>
                <form action="resi.php" method="POST">
                <input type="text" name="resi">
                <input type="hidden" value="<?php echo $data['id_transaksi']?>" name="id_transaksi"><br>
                <input type="submit" value="Masukkan">
                </form>
                </td>
                <?php
    echo "<td><a href='delete.php?id=". $data['id_transaksi'] . "' onclick ='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a></td>";
    ?>
            </tr>
            <?php
            $no++;
        }

    } else {
        echo "<tr> <td colspan='7'> Tidak ada data <td> </tr>";
    }
?>
</div>