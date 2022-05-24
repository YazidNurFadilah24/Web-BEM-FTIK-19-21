<?php
include "../../../config/koneksi.php";
  
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=data_pesan.xlsx");

  echo ("
    <h1 align='center'>
      Data Pesan
    </h1>");
  
  $tampil=mysqli_query($koneksi,"SELECT * FROM pesan");
      echo "
    
    <table id='example1' class='table table-bordered table-striped'>
    <thead>";
    
    echo "   
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Subjek</th>
      <th>Pesan</th>
    </tr>
        </thead><tbody>"; 
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
       echo "
       <tr>
       <td>$no</td>
      <td>".$r['nama']."</td>
      <td>".$r['email']."</td>
      <td>".$r['subjek']."</td>
      <td>".$r['pesan']."</td>
           </tr>";
      $no++;
    }
    echo "</tbody></table>";