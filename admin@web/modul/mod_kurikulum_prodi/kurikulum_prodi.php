<?php
$aksi="modul/mod_kurikulum_prodi/aksi_kurikulum_prodi.php";

echo "
<aside class='right-side'>
	<!-- Content Header (Page header) -->
		<section class='content-header'>
			<h1>Data Master Kurikulum Program Studi</h1>
		</section>
		<!-- Main content -->
			<section class='content'>
				<div class='row'>
					<div class='col-xs-12'>
						<div class='box'>";
if (!isset($_GET['act'])) {
  // Tampil kurikulum_prodi
  echo "
    <div class='box-header'>
			<h3 class='box-title'><input type=button class='btn btn-primary btn-lg' value='Tambah Kalender Akademik'
			onclick=\"window.location.href='?module=kurikulum_prodi&act=tambahkurikulum_prodi';\"></h3>
			<a href='modul/mod_kurikulum_prodi/cetak.php' target=blank>
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
					<th>Semester</th>
					<th>Mata Kuliah</th>
					<th>SKS</th>
					<th>Keterangan</th>
					<th>aksi</th>
				</tr>
		</thead><tbody>"; 
    $tampil=mysqli_query($koneksi,"SELECT * FROM kurikulum_prodi ORDER BY semester ASC");
    $no=1;
    while ($r=mysqli_fetch_array($tampil)) {
			 echo "<tr>
			 			<td>$no</td>
						<td>".$r['semester']."</td>
						<td>".$r['matkul']."</td>
						<td>".$r['sks']."</td>
						<td>".$r['ket']."</td>
						<td>
							<a href='?module=kurikulum_prodi&act=editkurikulum_prodi&id=$r[id_kurikulum_prodi]'>
								<input type='button' class='btn btn-warning btn-sm' value='edit'>
							</a>
							<a href='$aksi?module=kurikulum_prodi&act=hapus&id=$r[id_kurikulum_prodi]'>
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
  case "tambahkurikulum_prodi":

    echo "
		<section class='content'>
		<h3>Tambah Kurikulum Program Studi</h3>
		<form method=POST action='$aksi?module=kurikulum_prodi&act=input' enctype='multipart/form-data'>
			<input type=hidden name='id_kurikulum_prodi'  size=15>
			<table id='example1' class='table table-bordered table-hover'>
				<tr>
					<td>Semester</td> 
					<td colspan=3>
						<input type='text' name='semester' class='form-control' maxlength='15' placeholder='semester'>
					</td>
				</tr>
				<tr>
					<td>Mata Kuliah</td> 
					<td colspan=3>
						<input type='text' name='matkul' class='form-control' maxlength='15' placeholder='matkul'>
					</td>
				</tr>
				<tr>
					<td>SKS</td> 
					<td colspan=3>
						<input type='text' name='sks' class='form-control' maxlength='15' placeholder='sks'>
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
  
  // Form Edit kurikulum_prodi  
  case "editkurikulum_prodi":
    $edit=mysqli_query($koneksi,"SELECT * FROM kurikulum_prodi WHERE id_kurikulum_prodi='$_GET[id]'");
	$r=mysqli_fetch_array($edit);
	
    echo "
	<section class='content'>
	<h3>Tambah Kurikulum Program Studi</h3>
	<form method=POST action='$aksi?module=kurikulum_prodi&act=update' enctype='multipart/form-data'>
		<input type=hidden name='id_kurikulum_prodi' value='$r[id_kurikulum_prodi]' size=15>
		<table id='example1' class='table table-bordered table-hover'>
			<tr>
				<td>Semester</td> 
				<td colspan=3>
					<input type='text' name='semester' value='$r[semester]' class='form-control' maxlength='15' placeholder='semester'>
				</td>
			</tr>
			<tr>
				<td>Mata Kuliah</td> 
				<td colspan=3>
					<input type='text' name='matkul' value='$r[matkul]'  class='form-control' maxlength='15' placeholder='matkul'>
				</td>
			</tr>
			<tr>
				<td>SKS</td> 
				<td colspan=3>
					<input type='text' name='sks' value='$r[sks]'  class='form-control' maxlength='15' placeholder='sks'>
				</td>
			</tr>
			<tr>
				<td>Keterangan</td> 
				<td colspan=3>
					<input type='text' name='ket'  value='$r[ket]' class='form-control' maxlength='15' placeholder='keterangan'>
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
