<?php
$aksi="modul/mod_pesan/aksi_pesan.php";
echo "
<aside class='right-side'>
	<!-- Content Header (Page header) -->
		<section class='content-header'>
			<h1>Data Master Pesan & Aspirasi</h1>
		</section>
		<!-- Main content -->
			<section class='content'>
				<div class='row'>
					<div class='col-xs-12'>
						<div class='box'>";
if (!isset($_GET['act'])) {
	
  echo "
    <div class='box-header'>
			<h3 class='box-title'><input type=button class='btn btn-primary btn-lg' value='Tambah Pesan'
			onclick=\"window.location.href='?module=pesan&act=tambahpesan';\"></h3>
			<a href='modul/mod_pesan/cetak.php' target=blank>
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
					<th>Nama</th>
					<th>Email</th>
					<th>Subjek</th>
					<th>Pesan</th>
					<th>Aksi</th>
				</tr>
		</thead><tbody>"; 
    $tampil=mysqli_query($koneksi,"SELECT * FROM pesan");
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
			 echo "<tr>
			 			<td>$no</td>
						<td>".$r['nama']."</td>
						<td>".$r['email']."</td>
						<td>".$r['subjek']."</td>
						<td>".$r['pesan']."</td>
						<td>
							<a href='?module=pesan&act=editpesan&id=$r[id_pesan]'>
								<input type='button' class='btn btn-warning btn-sm' value='edit'>
							</a>
							<a href='$aksi?module=pesan&act=hapus&id=$r[id_pesan]'>
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
  
  // Form Tambah pesan
  case "tambahpesan":
    echo "
		<section class='content'>
		<h3>pesan Peserta</h3>
		";
		echo "
		<form method=POST action='$aksi?module=pesan&act=input' enctype='multipart/form-data'>
			<input type=hidden name='id_pesan'  size=15>
			<table id='example1' class='table table-bordered table-hover'>
				<tr>
					<td>Nama Pengirim</td>
					<td><input type='text' name='nama' class='form-control'></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type='email' name='email' class='form-control'></td>
				</tr>
				<tr>
					<td>Subjeck</td>
					<td><input type='text' name='subjek' class='form-control'></td>
				</tr>
				<tr>
					<td>Pesan / Aspirasi</td>
					<td><input type='text' name='pesan' class='form-control'></td>
				</tr>
				<tr>
					<td colspan=2>
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
  
  // Form Edit pesan  
  case "editpesan":
    $edit=mysqli_query($koneksi,"SELECT * FROM pesan WHERE id_pesan='$_GET[id]'");
    $r=mysqli_fetch_array($edit);
	
	echo "
		<section class='content'>
		<h3>pesan Peserta</h3>
		";
		echo "
		<form method=POST action='$aksi?module=pesan&act=update' enctype='multipart/form-data'>
			<input type=hidden name='id_pesan' size=15 value='$r[id_pesan]'>
			<table id='example1' class='table table-bordered table-hover'>
				<tr>
					<td>Nama Pengirim</td>
					<td><input type='text' name='nama' class='form-control' value='$r[nama]'></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type='email' name='email' class='form-control' value='$r[email]'></td>
				</tr>
				<tr>
					<td>Subjeck</td>
					<td><input type='text' name='subjek' class='form-control' value='$r[subjek]'></td>
				</tr>
				<tr>
					<td>Pesan / Aspirasi</td>
					<td><input type='text' name='pesan' class='form-control' value='$r[pesan]'></td>
				</tr>
				<tr>
					<td colspan=2>
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
