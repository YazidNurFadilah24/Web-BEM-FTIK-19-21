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

// Hapus pesan
if ($module=='pesan' AND $act=='hapus'){
	mysqli_query($koneksi,"DELETE FROM pesan WHERE id_pesan='$_GET[id]'");
	header('location:../../media.php?module='.$module);
}

// Input pesan
elseif ($module=='pesan' AND $act=='input'){
	mysqli_query($koneksi, "INSERT INTO pesan (
												id_pesan,
												nama,
												email,
												subjek,
												pesan
											) VALUE (
												'$_POST[id_pesan]',
												'$_POST[nama]',
												'$_POST[email]',
												'$_POST[subjek]',
												'$_POST[pesan]')");
	header('location:../../media.php?module='.$module);
}

// Update pesan
elseif ($module=='pesan' AND $act=='update'){
  mysqli_query($koneksi, "UPDATE pesan SET
											  id_pesan = '$_POST[id_pesan]',
											  nama = '$_POST[nama]',
											  email = '$_POST[email]',
											  subjek = '$_POST[subjek]',
											  pesan = '$_POST[pesan]'
										WHERE id_pesan = '$_POST[id_pesan]'");
  header('location:../../media.php?module='.$module);
}
}
?>
