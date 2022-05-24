<?php
$aksi="modul/mod_kalender_akademik/aksi_kalender_akademik.php";

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
<aside class='right-side'>
	<!-- Content Header (Page header) -->
		<section class='content-header'>
			<h1>Data Master Kalender Akademik</h1>
		</section>
		<!-- Main content -->
			<section class='content'>
				<div class='row'>
					<div class='col-xs-12'>
						<div class='box'>";
if (!isset($_GET['act'])) {
  // Tampil kalender_akademik
  echo "
    <div class='box-header'>
			<h3 class='box-title'><input type=button class='btn btn-primary btn-lg' value='Tambah Kalender Akademik'
			onclick=\"window.location.href='?module=kalender_akademik&act=tambahkalender_akademik';\"></h3>
			<a href='modul/mod_kalender_akademik/cetak.php' target=blank>
				<h3 class='box-title'>
					<input type='button' class='btn btn-success btn-lg' value='Export Ke Excel'>
				</h3>
			</a>
			
		</div><!-- /.box-header -->
		<div class='box-body table-responsive'>
	    <table id='example1' class='table table-bordered table-striped'>
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Nama Kegiatan</th>
					<th>Keterangan</th>
					<th>aksi</th>
				</tr>
		</thead><tbody>"; 
    $tampil=mysqli_query($koneksi,"SELECT * FROM kalender_akademik");
    $no=1;
    while ($r=mysqli_fetch_array($tampil)) {
			 echo "<tr>
			 			<td>$no</td>
						<td>".$r['tanggal']."  ".$bulan[$r['bulan']]." ".$r['tahun']."</td>
						<td>".$r['nama_kegiatan']."</td>
						<td>".$r['ket']."</td>
						<td>
							<a href='?module=kalender_akademik&act=editkalender_akademik&id=$r[id_kalender_akademik]'>
								<input type='button' class='btn btn-warning btn-sm' value='edit'>
							</a>
							<a href='$aksi?module=kalender_akademik&act=hapus&id=$r[id_kalender_akademik]'>
								<input type='button' class='btn btn-danger btn-sm' value='delete'>
							</a>
						</td>
             		</tr>";
      $no++;
    }
    echo "</table>";
}
else {
	switch($_GET['act']){  
  case "tambahkalender_akademik":

    echo "
		<section class='content'>
		<h3>Tambah Kalender Akademik</h3>
		<form method=POST action='$aksi?module=kalender_akademik&act=input' enctype='multipart/form-data'>
			<input type=hidden name='id_kalender_akademik'  size=15>
			<table id='example1' class='table table-bordered table-hover'>
				<tr>
					<td>Tanggal / Bulan / Tahun</td> 
					<td>
						<select name='tanggal' class='form-control' value=13>
							<option value='' selected></option>";
						for ($i=1; $i <= 31; $i++) {
							echo ("
							<option value=".$i.">".$i."</option>");
						}
						echo "
						</select>
					</td>
					<td>
						<select name='bulan' class='form-control'>
							<option selected></option>";
							for ($i=0; $i <= 11; $i++) {
							echo "
							<option value='$i'>".$bulan[$i]."</option>";
							}
							echo "
							
						</select>
					</td>
					<td>
						<input type='text' name='tahun' class='form-control' maxlength='5' placeholder='tahun'> 
					</td>
				</tr>
				<tr>
					<td>Nama Kegiatan</td> 
					<td colspan=3>
						<input type='text' name='nama_kegiatan' class='form-control' maxlength='52' placeholder=''>
					</td>
				</tr>
				<tr>
					<td>Keterangan</td> 
					<td colspan=3>
						<input type='text' name='ket' class='form-control' maxlength='15' placeholder='keterangan'>
					</td>
				</tr>
				<tr>
					<td colspan=4>
		        		<input type='submit' value='Simpan' class='btn btn-primary btn-md'>	
					</td>
				</tr>
      		</table>
		</form>
		<br>
		<br>
		<br>
		</section>
    
          ";
     break;
  
  // Form Edit kalender_akademik  
  case "editkalender_akademik":
    $edit=mysqli_query($koneksi,"SELECT * FROM kalender_akademik WHERE id_kalender_akademik='$_GET[id]'");
	$r=mysqli_fetch_array($edit);
	
	// untuk value tanggal dan bulan kalender_akademik yang kemudian akan di update
	$query_selected = mysqli_query($koneksi, "SELECT 
												tanggal,
												bulan,
												tahun
											FROM kalender_akademik
											WHERE id_kalender_akademik = '$_GET[id]'");
	$selected = mysqli_fetch_array($query_selected);
	
    echo "
		<section class='content'>
		<h3>Edit kalender_akademik</h3>
    <form method=POST action='$aksi?module=kalender_akademik&act=update' enctype='multipart/form-data'>
		<input type=hidden name='id'  value='$r[id_kalender_akademik]'>
		<table id='example1' class='table table-bordered table-hover'>
			<tr>
			<td>Tanggal / Bulan / Tahun</td>";
			echo ("
			<td>
				<select name='tanggal_event' class='form-control' value=13>");
					for ($i=1; $i <= 31; $i++) {
						if ($i == $selected['tanggal']) {
							echo (" <option value=".$i." selected>".$i."</option>");
						} else {
							echo (" <option value=".$i.">".$i."</option>");
						}
						
					}
				echo "
				</select>
			</td>
			<td>
				<select name='bulan_event' class='form-control'>";
						for ($i=0; $i <= 11; $i++) {
							if ($bulan[$i] == $selected['bulan']) {
								echo "<option value='".$i."' selected>".$bulan[$i]."</option>";
							} else {
								echo "<option value='".$i."'>".$bulan[$i]."</option>";
							}
						}
					echo "
				</select>
			</td>
			<td>
				<input type='text' name='tahun_event' class='form-control' maxlength='5' placeholder='tahun' value='$r[tahun]'> 
			</td>
		</tr>
		<tr>
			<td>Nama Kegiatan</td> 
			<td colspan=3>
				<input type='text' name='nama_kegiatan' class='form-control' maxlength='15' placeholder='tempat event' value='$r[nama_kegiatan]'>
			</td>
		</tr>
		<tr>
			<td>Keterangan</td> 
			<td colspan=3>
				<input type='text' name='ket' class='form-control' placeholder='keterangan event' value='$r[ket]'>
			</td>
		</tr>
		<tr>
			<td colspan=4>
				<input type='submit' value='Simpan' class='btn btn-primary btn-md'>	
			</td>
		</tr>
      	</table>
		</form><br><br><br>
		</section>";
    break;  
	}
}
echo "
					</div><!-- /.box-body -->
				</div>
			</div>
		</section>
		<!-- /.content -->
	</aside><!-- /.right-side -->
</div><!-- ./wrapper -->";
        
?>
