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

// Hapus kurikulum_prodi
if ($module=='kurikulum_prodi' AND $act=='hapus'){
	mysqli_query($koneksi, "DELETE FROM kurikulum_prodi WHERE id_kurikulum_prodi = '$_GET[id]'");
	header('location:../../media.php?module='.$module);
}

// Input kurikulum_prodi
elseif ($module=='kurikulum_prodi' AND $act=='input'){
  mysqli_query($koneksi,"INSERT INTO kurikulum_prodi (
																	id_kurikulum_prodi,
																	semester,
																	matkul,
																	sks,
																	ket
																	) VALUES(
																	'$_POST[id_kurikulum_prodi]',
																	'$_POST[semester]',
																	'$_POST[matkul]',
																	'$_POST[sks]',
																	'$_POST[ket]'
																	)");

	header('location:../../media.php?module='.$module);
}

// Update kurikulum_prodi
elseif ($module=='kurikulum_prodi' AND $act=='update'){
  mysqli_query($koneksi, "UPDATE kurikulum_prodi SET
											id_kurikulum_prodi = '$_POST[id_kurikulum_prodi]',
											semester = '$_POST[semester]',
											matkul = '$_POST[matkul]',
											sks = '$_POST[sks]',
											ket = '$_POST[ket]'
										WHERE id_kurikulum_prodi = '$_POST[id_kurikulum_prodi]'");
  
  header('location:../../media.php?module='.$module);
}
}
?>
