<?php

include '../connect.php'

$query = "SELECT id_transaksi, nama_pembeli , alamat, telp, status,resi, gambar.nama,gambar.nama_baju
            FROM transaksi LEFT JOIN gambar
            USING (id)";

$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);
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
                <table class="table table-bordered table-hover" align="center" height="20%">
                    <thead>
                    <tr>
            <th>No.</th>
            <th>Pembeli</th>
            <th>alamat</th>
            <th>telp</th>
            <th>Gambar Baju</th>
            <th>Telp</th>
            <th>Nama Barang</th>
            <th>Status</th>
            <th>Update Status</th>
                        <th>Aksi</th>
        </tr>
                    </thead>
        

        <?php
    if($num > 0)
    {
        $no = 1;
        while($data = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data['nama_pembeli'];?></td>
                <td><?php echo $data['alamat'];?></td>
                <td><?php echo $data['telp'];?></td>
                <td><?php echo "<td><img src='images/".$data['nama']."' width='100' height='100'></td>";?></td>                
                <td><?php echo $data['alamat'];?></td>
                <td><?php echo $data['nama_baju'];?></td>
                <td><?php echo $data['status'];?></td>
                <td>
                <form action="edit.php" method="POST"><br>
               Tunggu <br><input type="radio" name="status" value="tunggu" style="float:left"><br>
               Pengiriman<input type="radio" name="status" value="pengiriman" ><br>
               Selesai <br><input type="radio" name="status" value="selesai" style="float:left"><br>
               <input type="hidden" name="id_transaksi" value="<?php echo $data['id_transaksi']?>">
            <input type="submit" value="update">
            </form>
            </td>
           
<?php
echo "<td><a href='delete-transaksi.php?id=". $data['id_transaksi'] . "' onclick ='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a></td>";
           ?>
             

            </tr>
            <?php
            $no++;
        }

    } else {
        echo "<tr> <td colspan='7'> Tidak ada data <td> </tr>";
    }
    
?></div>