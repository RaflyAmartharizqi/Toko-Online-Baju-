<?php

include '../connect.php';
$query = "SELECT * FROM baju ";
$query2 = "SELECT * FROM user";
$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);
?>
<html>
    <head>
        <title>Halaman Admin</title>
        <link rel="stylesheet" href="../assets/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
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
	</nav> <br><br>
            <div class="kiri">
                <img src="images/icon.png" alt="" style="margin-left:40px; border-radius:1100px; margin-top:30px;">
                <h2 style="color:white; margin-top:30px;" align="center" >Halo Admin !</h2>
            </div>

            <div class="kanan">
                <h1 style="padding:20px; font-family:'Courier new';">Barang</h1>
                <hr size="10px">
            <table class="table table-bordered table-hover" align="center" height="20%">
<thead>
<tr>
  <th>Id Baju</th>
  <th>Gambar</th>
  <th>Nama Baju</th>
  <th>Harga</th>
  <th>Aksi</th>

</tr>
</thead>
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
    echo "<td><a href='delete.php?id=". $data['id'] . "' onclick ='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a></td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
        
                </div>
                
            </div>
        </div>
            </div>
                                   
                    
    </body>
</html>