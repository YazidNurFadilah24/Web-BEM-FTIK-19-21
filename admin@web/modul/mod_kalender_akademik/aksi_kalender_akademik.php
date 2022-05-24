<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../config/koneksi.php";
include "../../../config/fungsi_seo.php";

$module=$_GET['module'];
$act=$_GET['act'];

// Hapus kalender_akademik
if ($module=='kalender_akademik' AND $act=='hapus'){
	mysqli_query($koneksi, "DELETE FROM kalender_akademik WHERE id_kalender_akademik = '$_GET[id]'");
	header('location:../../media.php?module='.$module);
}

// Input kalender_akademik
elseif ($module=='kalender_akademik' AND $act=='input'){
  mysqli_query($koneksi,"INSERT INTO kalender_akademik (
																	id_kalender_akademik,
																	tanggal,
																	bulan,
																	tahun,
																	nama_kegiatan,
																	ket
																	) VALUES(
																	'$_POST[id_kalender_akademik]',
																	'$_POST[tanggal]',
																	'$_POST[bulan]',
																	'$_POST[tahun]',
																	'$_POST[nama_kegiatan]',
																	'$_POST[ket]'
																	)");

	header('location:../../media.php?module='.$module);
}

// Update kalender_akademik
elseif ($module=='kalender_akademik' AND $act=='update'){
  mysqli_query($koneksi, "UPDATE kalender_akademik SET
											id_kalender_akademik = '$_POST[id]',
											tanggal = '$_POST[tanggal_event]',
											bulan = '$_POST[bulan_event]',
											tahun = '$_POST[tahun_event]',
											nama_kegiatan = '$_POST[nama_kegiatan]',
											ket = '$_POST[ket]'
											WHERE id_kalender_akademik = '$_POST[id]'");
  
  header('location:../../media.php?module='.$module);
}
}
?>
