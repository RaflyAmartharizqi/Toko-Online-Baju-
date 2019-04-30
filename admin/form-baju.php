<html>
<head>
  <title>Form Upload Gambar</title>
</head>
<body>

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
        <link rel="stylesheet" href="style2.css">
    </head>

    <body>
    <nav class="navbar navbar-expand-md bg-danger navbar-dark fixed-top">
	 
	 
	  
	  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
	    <span class="navbar navbar-toggler-icon"></span>
	  </button>
	  
	  
	  
	  <div class="collapse navbar-collapse" id="menu">
	    <ul class="navbar-nav">
		  <li class="nav-item"><a href="read.php" class="nav-link">Beranda</a></li>
		  <li class="nav-item"><a href="form-baju" class="nav-link">Tambah Barang</a></li>
		  <li class="nav-item"><a href="transaksi.php" class="nav-link">Transaksi</a></li>
		 
          <li class='nav-item'><a href='logout.php' style='margin-left:880px;' class='nav-link'>Logout</a></li>
		</ul>
	  </div>
	</nav> <br><br>
           

            <div class="kanan" style="width:100%;">
                <h1 style="padding:20px; font-family:'Courier new';">Tambah Baju</h1>
                <hr size="10px">
                
                <section id="input-form">
  <form method="post" enctype="multipart/form-data" action="create-baju.php">
    
    <div class="form">
            <label>Nama Baju</label>
            <input id="nama_baju" type="text" name="nama_baju">
          </div>
          <div class="form">
            <label>Harga</label>
            <input id="harga" type="text" name="harga">
          </div>
          <div class="form">
            <label>Gambar</label>
            <input id="gambar" type="file" name="gambar">
          </div>
    <input type="submit" value="Upload">
  </form>
</section>
</div>
</div>
                    
    </body>
</html>

  
</body>
</html>