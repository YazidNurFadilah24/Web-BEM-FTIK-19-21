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

// Hapus event
if ($module=='event' AND $act=='hapus'){
	mysqli_query($koneksi, "DELETE FROM events WHERE id_event = '$_GET[id]'");
	header('location:../../media.php?module='.$module);
}

// Input event
elseif ($module=='event' AND $act=='input'){
  mysqli_query($koneksi,"INSERT INTO events (
																	id_event,
																	nama_event,
																	tanggal_event,
																	bulan_event,
																	tahun_event,
																	tempat_event,
																	ket_event
																	) VALUES(
																	'$_POST[id_event]',
																	'$_POST[nama_event]',
																	'$_POST[tanggal_event]',
																	'$_POST[bulan_event]',
																	'$_POST[tahun_event]',
																	'$_POST[tempat_event]',
																	'$_POST[ket_event]'
																	)");

	header('location:../../media.php?module='.$module);
}

// Update event
elseif ($module=='event' AND $act=='update'){
  mysqli_query($koneksi, "UPDATE events SET
											id_event = '$_POST[id]',
											nama_event = '$_POST[nama_event]',
											tanggal_event = '$_POST[tanggal_event]',
											bulan_event = '$_POST[bulan_event]',
											tahun_event = '$_POST[tahun_event]',
											tempat_event = '$_POST[tempat_event]',
											ket_event = '$_POST[ket_event]'
											WHERE id_event = '$_POST[id]'");
  
  header('location:../../media.php?module='.$module);
}
}
?>
