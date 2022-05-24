<?php
$aksi="modul/mod_event/aksi_event.php";

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
			<h1>Data Master Event</h1>
		</section>
		<!-- Main content -->
			<section class='content'>
				<div class='row'>
					<div class='col-xs-12'>
						<div class='box'>";
if (!isset($_GET['act'])) {
  // Tampil event
  echo "
    <div class='box-header'>
			<h3 class='box-title'><input type=button class='btn btn-primary btn-lg' value='Tambah event'
			onclick=\"window.location.href='?module=event&act=tambahevent';\"></h3>
			<a href='modul/mod_event/cetak.php' target=blank>
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
					<th>Nama Event</th>
					<th>Tanggal</th>
					<th>Tempat</th>
					<th>Keterangan</th>
					<th>aksi</th>
				</tr>
		</thead><tbody>"; 
    $tampil=mysqli_query($koneksi,"SELECT * FROM events");
    $no=1;
    while ($r=mysqli_fetch_array($tampil)) {
			 echo "<tr>
			 			<td>$no</td>
						<td>".$r['nama_event']."</td>
						<td>".$r['tanggal_event']."  ".$bulan[$r['bulan_event']]." ".$r['tahun_event']."</td>
						<td>".$r['tempat_event']."</td>
						<td>".$r['ket_event']."</td>
						<td>
							<a href='?module=event&act=editevent&id=$r[id_event]'>
								<input type='button' class='btn btn-warning btn-sm' value='edit'>
							</a>
							<a href='$aksi?module=event&act=hapus&id=$r[id_event]'>
								<input type='button' class='btn btn-danger btn-sm' value='delete'>
							</a>
						</td>
             		</tr>";
      $no++;
    }
    echo "</table>";
} else {
	switch($_GET['act']){  
  case "tambahevent":

    echo "
		<section class='content'>
		<h3>Tambah Event</h3>
		<form method=POST action='$aksi?module=event&act=input' enctype='multipart/form-data'>
			<input type=hidden name='id_event'  size=15>
			<table id='example1' class='table table-bordered table-hover'>
				<tr>
					<td>Nama Event</td> 
					<td colspan=3>
						<input type='text' name='nama_event' class='form-control' maxlength='15' placeholder='nama event'>
					</td>
				</tr>
				<tr>
					<td>Tanggal / Bulan / Tahun</td> 
					<td>
						<select name='tanggal_event' class='form-control' value=13>
							<option value='' selected></option>";
						for ($i=1; $i <= 31; $i++) {
							echo ("
							<option value=".$i.">".$i."</option>");
						}
						echo "
						</select>
					</td>
					<td>
						<select name='bulan_event' class='form-control'>
							<option selected></option>";
							for ($i=0; $i <= 11; $i++) {
							echo "
							<option value='".$i."'>".$bulan[$i]."</option>";
							}
							echo "
							
						</select>
					</td>
					<td>
						<input type='text' name='tahun_event' class='form-control' maxlength='5' placeholder='tahun'> 
					</td>
				</tr>
				<tr>
					<td>Tempa Event</td> 
					<td colspan=3>
						<input type='text' name='tempat_event' class='form-control' maxlength='15' placeholder='tempat event'>
					</td>
				</tr>
				<tr>
					<td>Keterangan</td> 
					<td colspan=3>
						<input type='text' name='ket_event' class='form-control' maxlength='15' placeholder='keterangan event'>
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
  
  // Form Edit event  
  case "editevent":
    $edit=mysqli_query($koneksi,"SELECT * FROM events WHERE id_event='$_GET[id]'");
	$r=mysqli_fetch_array($edit);
	
	// untuk value tanggal dan bulan event yang kemudian akan di update
	$query_selected = mysqli_query($koneksi, "SELECT 
												tanggal_event,
												bulan_event
											FROM events
											WHERE id_event = '$_GET[id]'");
	$selected = mysqli_fetch_array($query_selected);
	
    echo "
		<section class='content'>
		<h3>Edit event</h3>
    <form method=POST action='$aksi?module=event&act=update' enctype='multipart/form-data'>
		<input type=hidden name='id'  value='$r[id_event]'>
		<table id='example1' class='table table-bordered table-hover'>

		<tr>
			<td>Nama Event</td> 
			<td colspan=3>
				<input type='text' name='nama_event' class='form-control' maxlength='15' placeholder='nama event' value='$r[nama_event]'>
			</td>
		</tr>
			<tr>
				<td>Tanggal / Bulan / Tahun</td>";
				echo ("
				<td>
					<select name='tanggal_event' class='form-control' value=13>");
						for ($i=1; $i <= 31; $i++) {
							if ($i == $selected['tanggal_event']) {
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
								if ($i === $selected['bulan_event']) {
									echo "<option value='".$i."' selected>".$bulan[$i]."</option>";
								} else {
									echo "<option value='".$i."'>".$bulan[$i]."</option>";
								}
							}
						echo "
					</select>
				</td>
				<td>
					<input type='text' name='tahun_event' class='form-control' maxlength='5' placeholder='tahun' value='$r[tahun_event]'> 
				</td>
			</tr>
			<tr>
				<td>Tempat Event</td> 
				<td colspan=3>
					<input type='text' name='tempat_event' class='form-control' maxlength='15' placeholder='tempat event' value='$r[tempat_event]'>
				</td>
			</tr>
			<tr>
				<td>Keterangan</td> 
				<td colspan=3>
					<input type='text' name='ket_event' class='form-control' placeholder='keterangan event' value='$r[ket_event]'>
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
