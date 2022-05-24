<?php
include "../../../config/koneksi.php";
  
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Registrasi_Peserta.xlsx");

    echo "
      <h1>Daftar Registrasi Peserta On the Spot</h1>
      <hr>
      <br>
      <br>
      <table border=1 width=100%>
				<tr>
          <th>No</th>
          <th>Nama Peserta</th>
          <th>Nomor Whatsapp</th>
				</tr>"; 
    $tampil=mysqli_query($koneksi,"SELECT * FROM registrasi WHERE pembayaran = 'HTM' ORDER BY nama_peserta ASC");
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
       echo "
            <tr>
              <td>$no</td>
              <td>".$r['nama_peserta']."</td>
              <td>".$r['telp']."</td>
            </tr>";
      $no++;
    }
    echo "</table>";
