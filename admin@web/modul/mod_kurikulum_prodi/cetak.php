<?php
include "../../../config/koneksi.php";
  
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_kurikulum_prodi.xlsx");

  echo ("
    <h1 align='center'>
      Data Kurikulum Program Studi
    </h1>");
  
  $tampil=mysqli_query($koneksi,"SELECT * FROM kurikulum_prodi");
      echo "
    
    <table id='example1' class='table table-bordered table-striped'>
    <thead>";
    
    echo "   
    <tr>
      <th>No</th>
      <th>Semester</th>
      <th>Mata Kuliah</th>
      <th>SKS</th>
      <th>Keterangan</th>
    </tr>
  </thead><tbody>"; 
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
       echo "
      <tr>
        <td>$no</td>
        <td>".$r['semester']."</td>
        <td>".$r['matkul']."</td>
        <td>".$r['sks']."</td>
        <td>".$r['ket']."</td>
      </tr>";
      $no++;
    }
    echo "</tbody></table>";