<?php

include 'connect.php';

$query = "SELECT * FROM gambar ";
$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);
?>
<html>
    <head>
        <title>Tumbas Online</title>
        <link rel="stylesheet" type="text/css" href="assets/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
	    <script type="text/javascript" src="assets/assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/assets/js/jquery.js"></script>
        <script src="assets/assets/js/jquery.min.js"></script>
    <script src="assets/assets/js/popper.min.js"></script>
    <script src="assets/assets/js/bootstrap.js"></script>
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
		  <li class="nav-item"><a href="data-transaksi.php" class="nav-link">Data-transaksi</a></li>
		  <?php
          session_start();
        if(!(isset($_SESSION['users'])))
        {
        echo "<li class='nav-item'><a href='user/form-login.php' style='margin-left:1050px;' class='nav-link'>Login</a></li>";
        } else {
            echo "<li class='nav-item'><a style='margin-left:950px;' class='nav-link'></a></li>";
        }
            ?>
		</ul>
	  </div>
	</nav>
   
<br><br><br><br>
<div class="hiya">
        <h2 align="center">Beli Bajumu Disini</h2><hr width="300px" color="peru">
        <h6 align="center" style="color:lightslategrey;">Baju Murah hanya disini</h6>
        <br>
</div>
<div class="container">
      <div class="carousel slide" data-ride="carousel" id="slide">
        <!-- indikator slide -->
        <ul class="carousel-indicators">
          <li data-target="#slide" data-slide-to="0" class="active"></li>
          <!-- class active berarti elemen tersebut yang pertama kali ditampilkan saat Load halaman -->
          <li data-target="#slide" data-slide-to="1"></li>
          <li data-target="#slide" data-slide-to="2"></li>
        </ul>

        <!-- gambar slide -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="belanja1.jpg" width="100%" height="500" alt="">
          </div>
          <div class="carousel-item">
            <img src="img/belanja2.jpg" width="100%" height="500" alt="">
          </div>
          <div class="carousel-item">
            <img src="img/belanja3.jpg" width="100%" height="500" alt="">
          </div>
        </div>

        <!-- navigasi slide -->
        <a href="#slide" data-slide="prev" class="carousel-control-prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slide" data-slide="next" class="carousel-control-next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div><br><br>
<div class="Beranda">
      <h3 align="center">Baju Hypebeast</h3>  <hr width="350px" color="peru">
      <h5 align="center" style="color:lightslategrey;">Murah-murah Lho...</h5>
</div>
<form action="transaksi.php"></form>
<div class="container" >
    <div class="row">
        <form action="transaksi.php"></form>
    <?php
                    if($num > 0)
                    {
                        $no = 1;
                        while($data = mysqli_fetch_assoc($result))
                        {
                           
                            echo "<div class='card col-sm-3' style='margin-left:70px; margin-top:30px;'> ";
                            echo "<div class='card-header bg-primary text-white'> <a align='center'>" . $data['nama_baju']. "</a></div>";
                            echo "<div class='card-body'><img src='admin/images/".$data['nama']."' width='150px' height='150px' style='margin-left:30px;'></div>";
                            echo "<div class='card-footer'>
                            <a href='transaksi.php?id=". $data['id'] . "' '><input type='submit' class='btn btn-sm btn-primary' value='Beli'></input></a>
                            <button type='button' class='btn btn-sm btn-primary'>Rp. ".$data['harga']."</button>
                          </div>";
                            echo "</div>";
                           
                            $no++;
                        }
                    }
                    else
                    {
                        echo "<td colspan='3'> Aga</td>";
                    }
                ?>
        
                </div>
                </div>
                </form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </body>
</html>