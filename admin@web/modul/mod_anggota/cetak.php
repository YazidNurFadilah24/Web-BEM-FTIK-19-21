<?php
include "../../../config/koneksi.php";
  
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_anggota.xlsx");

  echo ("
    <h1 align='center'>
      Data Anggota
    </h1>");
  
  $tampil=mysqli_query($koneksi,"SELECT * FROM anggota");
      echo "
    
    <table id='example1' class='table table-bordered table-striped'>
    <thead>";
    
    echo "   
        <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>divisi</th>
        <th>Jabatan</th>
        <th>Tahun Menjabat</th>
        <th>Telphone</th>
        </tr></thead><tbody>"; 
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
       echo "
      <tr>
        <td class='center' width='10'>$no</td>
        <td class='left'>$r[nama_anggota]</td>
        <td class='left'>$r[divisi]</td>
        <td class='left'>$r[jabatan]</td>
        <td>".$r['tahun_menjabat']." / ".($r['tahun_menjabat']+1)."</td>
        <td class='left'>$r[no_telp]</td>
      </tr>";
      $no++;
    }
    echo "</tbody></table>";