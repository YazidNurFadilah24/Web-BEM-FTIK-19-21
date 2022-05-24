<?php
	include "config/koneksi.php"
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
					<li><a href="#home" class="smoothScroll">Home</a></li>
					<li><a href="#about" class="smoothScroll">About</a></li>
					<li><a href="struktural.php?div=bph" class="smoothScroll">Struktural</a></li>
					<li><a class="smoothScroll" href="kurikulum_prodi.php">Kurikulum Prodi</a></li>
					<li><a class="smoothScroll" href="kalender_akademik.php">Kalender akademik</a></li>
					<li><a href="event.php">Event</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact / Aspiration</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- start home -->
	<section id="home">
		<div class="overlay">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<img src="images/slider/1.jpg" alt="Slide 1">
						<div class="slider-caption">
							<div class="templatemo_homewrapper">
								<h1 class="wow bounceIn">UNIT AKTIVITAS</h1> <br>
								<h2 class="wow bounce">INFORMATIKA</h2>
								<h3>Work on all modern</h3>
								<a href="#about" class="smoothScroll templatemo-slider-btn btn btn-default">Lihat Profil</a>
							</div>
						</div>
					</li>
					<li>
						<img src="images/slider/2.jpg" alt="Slide 2">
						<div class="slider-caption">
							<div class="templatemo_homewrapper">
								<h2>
									<span class="wow fadeIn" data-wow-delay="0.3s">UNIVERSITAS</span>
									<span class="wow fadeIn" data-wow-delay="0.6s"> INDRAPRASTA</span> <br>
									<span class="wow fadeIn" data-wow-delay="0.9s"> PGRI</span>
								</h2>

								<a href="https://unindra.ac.id" class="smoothScroll templatemo-slider-btn btn btn-default">Meet Our Team</a>	
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end home -->

	
	<!-- start service -->
	<section id="service">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow bounceIn">
					<h2>Services</h2>
					<hr>
					<h4>we specialize in organizing</h4>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="media">
						<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
							<i class="fa fa-calendar"></i>
						</div>
						<div class="media-body">
							<h3 class="media-heading">Event Menarik</h3>
							<p>Berbagai jenis event baik yang bersifat kokurikuler maupun organizer seperti seminar, workshop, pelatihan, dan praktek keilmuan.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="media">
						<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
							<i class="fa fa-comment"></i>
						</div>
						<div class="media-body">
							<h3 class="media-heading">Penampung Aspirasi</h3>
							<p>Sebagai tempat penampung <a href="#contact">aspirasi</a> mahasiswa informatika yang akan kaji oleh divisi penelitian dan pengembangan UNITAS TI dan akan di tindak lanjut</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="media">
						<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
							<i class="fa fa-info-circle"></i>
						</div>
						<div class="media-body">
							<h3 class="media-heading">Informasi Perkuliahan</h3>
							<p>Info-info tentang perkuliahan di unindra seperti jadwal kalender akademik, jadwal mata kuliah, dan info-info lainnya</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="media">
						<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
							<i class="fa fa-laptop"></i>
						</div>
						<div class="media-body">
							<h3 class="media-heading">Coding Bersama</h3>
							<p>UNITAS TI juga merupakan tempat belajar dan mengajar dalam ruang lingkup informatika</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end service -->

	<!-- start about -->
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wow bounceIn">
					<h2>About</h2>
					<hr>
					<h4>Siapa Kami?</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 wow fadeInLeft templatemo-about-left" data-wow-delay="0.3s">
					<h3 class="about-title">UNITAS TI</h3>
					<p>Unit Aktivitas Mahasiswa Teknik Informatika (UNITAS TI) adalah Organisasi Mahasiswa di Universitas Indraprasta PGRI Tingkat Program Studi dan berada di dalam ruang lingkup Badan Eksekutif Mahasiswa Fakultas Teknik dan Ilmu Komputer (BEM FTIK).</p>
					<br>
					<h3 class="about-title">KBM Unindra</h3>
                    <p>UNITAS termasuk dalam Keluarga Besar Mahasiswa Unindra (KBM U) yaitu wadah kesatuan organisasi kemahasiswaan oleh dan untuk mahasiswa, yang dibuntuk pada tingkat Universitas, Fakultas, Program Studi dan Unit Kegiatan Mahasiswa, sebagai penampung serta penyalur aspirasi mahasiswa, dan pembinaan serta pengembangan kreativitas mahasiswa berupa kemampuan penalaran, minat bakat dalam melanjutkat kesinambungan pembangunan nasional</p>
				</div>
				<div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0.3s">
					<h3 class="about-title">VISI</h3>
					<p>Menjadikan UNITAS Teknik Informatika sebagai organisasi yang visioner dan berintegritas dengan kegiatan yang berdasar dari disiplin ilmu yang dipelajari.</p>
					<br>
					<h3 class="about-title">MISI</h3>
					<ol>
						<li>Menjadi garda terdepan dalam pelayanan mehasiswa program studi informatika.</li>
						<li>Menumbuhkan sikap kritis, kreatif, dan soluktif kepada mahasiswa program studi informatika.</li>
						<li>Mengoptimalkan kinerja pengurus unitas teknik informatika.</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<!-- end about -->

	<!-- start divider -->
	<div class="divider">
		<div class="overlay">
			<div class="container">
				<div class="row">
					<div class="divider-des">
						<h3 class="text-uppercase">UNITAS TI</h3>
						<p>Unit Aktivitas Mahasiswa Teknik Informatika</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end divider -->
	
	<!-- start contact -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wow bounceIn">
						<h2 class="wow bounceIn">Contact / Aspirasi Mahasiswa</h2>
						<hr>
						<h4>Talk to us for more assistance...</h4>
					</div>					
					<form action="" method="POST" role="form">
						<input type="hidden" name="id">
						<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
							<input type="text" placeholder="Name" class="form-control" name="nama">
						</div>
						<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
							<input type="email" placeholder="Email" class="form-control" name="email">
						</div>
						<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
							<input type="text" placeholder="Subject" class="form-control" name="subjek">
						</div>
						<div class="col-md-12 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
							<textarea class="form-control" rows="5" placeholder="Message" name="pesan" required></textarea>
						</div>
						<div class="col-md-offset-3 col-sm-offset-3 col-sm-6 col-md-6 wow fadeIn" data-wow-delay="0.3s">
							<input type="submit" value="Send Message" class="form-control">
						</div>
                    </form>
				</div>
			</div>
		</div>
	</section>
	<!-- end contact -->
	
	<?php
		if (isset($_POST['pesan'])) {
			mysqli_query($koneksi, "INSERT INTO db_unitas.pesan 
													(
														id_pesan,
														nama,
														email,
														subjek,
														pesan
													) VALUE (
														'$_POST[id]',
														'$_POST[nama]',
														'$_POST[email]',
														'$_POST[subjek]',
														'$_POST[pesan]'
													)
													");
		echo "<script> alert (\"Pesan Berhsil Di Kirim ;) \"); </script>";
		}

	?>

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