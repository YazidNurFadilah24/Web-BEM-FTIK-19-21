<?php
	include "config/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		UNITAS TI UNINDRA
	</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">		
	<link rel="stylesheet" href="css/templatemo-style.css">
	<!-- icon -->
	<link rel="shortcut icon" type="image/jpg" href="images/unitas.jpg">
</head>

<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<footer></footer>
	
<div class="preloader">
		<div class="sk-spinner sk-spinner-rotating-plane"></div>
	</div>
	<nav class="navbar navbar-fixed-top custom-navbar" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">
					UNITAS TI
				</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php#home" class="smoothScroll">Home</a></li>
					<li><a href="index.php#about" class="smoothScroll">About</a></li>
					<li><a href="struktural.php?div=bph" class="smoothScroll">Struktural</a></li>
					<li><a class="smoothScroll" href="kurikulum_prodi.php">Kurikulum Prodi</a></li>
					<li><a class="smoothScroll" href="kalender_akademik.php">Kalender akademik</a></li>
					<li><a href="event.php">Event</a></li>
                    <li><a href="index.php#contact" class="smoothScroll">Contact / Aspiration</a></li>
				</ul>
			</div>
		</div>
	</nav>
    
	<!-- start contact -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wow bounceIn">
						<h2 class="wow bounceIn">Event</h2>
						<hr>
						<h4>Time Line Event</h4>
					</div>					
					
		<!-- Main content -->
			<section class='content'>
				<div class='row'>
					<div class='col-xs-12'>
						<div class='box'>

<?php

	$bulan = array("Januari", 
					"Februari",
					"Maret",
					"April",
					"Mei",
					"Juni",
					"Juli",
					"Agustus",
					"September",
					"Oktober",
					"November",
					"Desember");
  echo "
    <div class='box-header'>
			
		<div class='box-body table-responsive'>
	    <table id='example1' class='table table-bordered table-striped'>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Event</th>
					<th>Tanggal</th>
					<th>Tempat</th>
					<th>Keterangan</th>
				</tr>
		</thead><tbody>"; 
    $tampil=mysqli_query($koneksi,"SELECT * FROM events");
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
			 echo "<tr>
			 			<td>$no</td>
						<td>".$r['nama_event']."</td>
						<td>".$r['tanggal_event']."  ".$bulan[$r['bulan_event']+1]." ".$r['tahun_event']."</td>
						<td>".$r['tempat_event']."</td>
						<td>".$r['ket_event']."</td>
             		</tr>";
      $no++;
    }
	echo "</tbody></table></div></div></div>";
	?>


				</div>
			</div>
		</div>
	</section>
	<!-- end contact -->
	
	<!-- START FOOTER -->
		<?php	include "footer.php"; ?>
	<!-- END FOOTER -->

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/imagesloaded.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>