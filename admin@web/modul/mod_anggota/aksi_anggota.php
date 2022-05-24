<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../config/koneksi.php";
include "../../../config/fungsi_thumb.php";
$module=$_GET['module'];
$act=$_GET[act];

if ($module=='anggota' AND $act=='delcon'){
	
  mysqli_query($koneksi,"DELETE FROM anggota WHERE id_anggota='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}

// Input anggota
elseif ($module=='anggota' AND $act=='input'){
	 $lokasi_file = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file   = $_FILES['fupload']['name'];
  $pass=md5($_POST[password]);
if (!empty($lokasi_file)){
	UploadBanner($nama_file);
  mysqli_query($koneksi,"INSERT INTO anggota(
                                 id_anggota,
                                 nama_anggota,
                                 divisi,
                                 jabatan, 
                                 tahun_menjabat,
                                 foto,
                                 no_telp
                                 ) VALUES (
                                  '$_POST[id_anggota]',
                                  '$_POST[nama_anggota]',
                                  '$_POST[divisi]',
                                  '$_POST[jabatan]',
                                  '$_POST[tahun_menjabat]',
                                  '$nama_file',
                                  '$no_telp')"); 
header('location:../../media.php?module='.$module);
}

 else{
 	
mysqli_query($koneksi,"INSERT INTO anggota(
                                      id_anggota,
                                      nama_anggota,
                                      divisi,
                                      jabatan, 
                                      tahun_menjabat,
                                      no_telp
                                      ) VALUES (
                                      '$_POST[id_anggota]',
                                      '$_POST[nama_anggota]',
                                      '$_POST[divisi]',
                                      '$_POST[jabatan]',
                                      '$_POST[tahun_menjabat]',
                                      '$no_telp')");
  header('location:../../media.php?module='.$module); 	
}
}

// Update anggota
elseif ($module=='anggota' AND $act=='update'){
	 $lokasi_file = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file   = $_FILES['fupload']['name'];
   $pass=md5($_POST['password']);
   
  if (empty($lokasi_file)){  		
    mysqli_query($koneksi,"
    
    ");
header('location:../../media.php?module='.$module);
  }
  // Apabila password diubah
 elseif (!empty($lokasi_file)){
    $pass=md5($_POST[password]);
 UploadBanner($nama_file);
 mysqli_query($koneksi,"UPDATE anggota SET
                                      id_anggota   = '$_POST[id_anggota]',
                                      nama_anggota   = '$_POST[nama_anggota]',
                                      divisi   = '$_POST[divisi]',
                                      jabatan   = '$_POST[jabatan]',
                                      tahun_menjabat   = '$_POST[tahun_menjabat]',
                                      no_telp   = '$_POST[no_telp]',
                                      foto         = '$nama_file'
                                      WHERE  id_anggota     = '$_POST[id]'");
header('location:../../media.php?module='.$module);
  }
 elseif (empty($lokasi_file)){
 	 $pass=md5($_POST[password]);
    mysqli_query($koneksi,"UPDATE anggota SET
                                      id_anggota   = '$_POST[id_anggota]',
                                      nama_anggota   = '$_POST[nama_anggota]',
                                      divisi   = '$_POST[divisi]',
                                      jabatan   = '$_POST[jabatan]',
                                      tahun_menjabat   = '$_POST[tahun_menjabat]',
                                      no_telp   = '$_POST[no_telp]',
                                      foto         = '$nama_file'
                                      WHERE  id_anggota     = '$_POST[id]'");
 header('location:../../media.php?module='.$module);
}
elseif (!empty($lokasi_file)) {
  UploadBanner($nama_file);
  mysqli_query($koneksi,"UPDATE anggota SET
                                      id_anggota   = '$_POST[id_anggota]',
                                      nama_anggota   = '$_POST[nama_anggota]',
                                      divisi   = '$_POST[divisi]',
                                      jabatan   = '$_POST[jabatan]',
                                      tahun_menjabat   = '$_POST[tahun_menjabat]',
                                      no_telp   = '$_POST[no_telp]',
                                      foto         = '$nama_file'
                                      WHERE  id_anggota     = '$_POST[id]'");
header('location:../../media.php?module='.$module);
} else {
  UploadBanner($nama_file);
  mysqli_query($koneksi,"UPDATE anggota SET
                                      id_anggota   = '$_POST[id_anggota]',
                                      nama_anggota   = '$_POST[nama_anggota]',
                                      divisi   = '$_POST[divisi]',
                                      jabatan   = '$_POST[jabatan]',
                                      tahun_menjabat   = '$_POST[tahun_menjabat]',
                                      no_telp   = '$_POST[no_telp]',
                                      foto         = '$nama_file'
                                      WHERE  id_anggota     = '$_POST[id]'");
header('location:../../media.php?module='.$module);
}
                           
}
}

?>
