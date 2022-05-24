<?php
include "../../../config/koneksi.php";
  
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_event.xlsx");

  echo ("
    <h1 align='center'>
      Data Event
    </h1>");

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
while ($r=mysqli_fetch_array($tampil)) {
   echo "<tr>
          <td>$no</td>
          <td>".$r['nama_event']."</td>
          <td>".$r['tanggal_event']."  ".$bulan[$r['bulan_event']+1]." ".$r['tahun_event']."</td>
          <td>".$r['tempat_event']."</td>
          <td>".$r['ket_event']."</td>
        </tr>";
  $no++;
}
echo "</table>";