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

// Hapus registrasi
if ($module=='registrasi_htm' AND $act=='hapus'){
	mysqli_query($koneksi,"DELETE FROM registrasi WHERE id_registrasi='$_GET[id]'");
	header('location:../../media.php?module='.$module);
}

// Input registrasi
elseif ($module=='registrasi_htm' AND $act=='input'){
  mysqli_query($koneksi,"INSERT INTO registrasi(
																	id_registrasi,
																	nama_peserta,
																	telp,
																	pembayaran
																	) VALUES(
																	'$_POST[id_registrasi]',
																	'$_POST[nama_peserta]',
																	'$_POST[telp]',
																	'$_POST[pembayaran]'
																	)");

	  header('location:../../media.php?act=tambahregistrasi&nama='.$_POST['nama_peserta'].'&module='.$module);
}

// Update registrasi
elseif ($module=='registrasi_htm' AND $act=='update'){
  mysqli_query($koneksi,"UPDATE registrasi SET 
																id_registrasi = '$_POST[id]',
																nama_peserta = '$_POST[nama_peserta]',
																telp = '$_POST[telp]',
																pembayaran = '$_POST[pembayaran]'
																WHERE id_registrasi = '$_POST[id]' ");
  header('location:../../media.php?module='.$module);
}
}
?>
