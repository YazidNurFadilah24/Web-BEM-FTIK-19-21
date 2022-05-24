<?php
include "../../../config/koneksi.php";
  
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_kalender_akademik.xlsx");

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


  echo ("
    <h1 align='center'>
      Data Kalender Akademik
    </h1>");
  
  $tampil=mysqli_query($koneksi,"SELECT * FROM kalender_akademik");
      echo "
    
    <table id='example1' class='table table-bordered table-striped'>
    <thead>";
    
    echo "   
    <tr>
      <th>No</th>
      <th>Tanggal</th>
      <th>Nama Kegiatan</th>
      <th>Keterangan</th>
    </tr>
  </thead><tbody>"; 
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
       echo "
      <tr>
        <td>$no</td>
        <td>".$r['tanggal']."  ".$bulan[$r['bulan']]." ".$r['tahun']."</td>
        <td>".$r['nama_kegiatan']."</td>
        <td>".$r['ket']."</td>
      </tr>";
      $no++;
    }
    echo "</tbody></table>";