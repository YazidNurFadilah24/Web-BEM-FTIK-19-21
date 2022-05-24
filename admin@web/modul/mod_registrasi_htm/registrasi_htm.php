<?php
$aksi="modul/mod_registrasi_htm/aksi_registrasi_htm.php";
echo "
<aside class='right-side'>
	<!-- Content Header (Page header) -->
		<section class='content-header'>
			<h1>Data Master Registrasi Harga Tiket Masuk(HTM)</h1>
		</section>
		<!-- Main content -->
			<section class='content'>
				<div class='row'>
					<div class='col-xs-12'>
						<div class='box'>";
if (!isset($_GET['act'])) {
  // Tampil registrasi
  echo "
    <div class='box-header'>
			<h3 class='box-title'><input type=button class='btn btn-primary btn-lg' value='Tambah Peserta'
			onclick=\"window.location.href='?module=registrasi_htm&act=tambahregistrasi';\"></h3>
			<a href='modul/mod_registrasi/cetak.php' target=blank>
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
					<th>Nama Peserta</th>
					<th>Nomor Telp</th>
					<th>aksi</th>
				</tr>
		</thead><tbody>"; 
    $tampil=mysqli_query($koneksi,"SELECT * FROM registrasi WHERE pembayaran = 'HTM' ORDER BY nama_peserta ASC");
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
			 echo "<tr>
			 			<td>$no</td>
						<td>".$r['nama_peserta']."</td>
						<td>".$r['telp']."</td>
						<td>
							<a href='?module=registrasi_htm&act=editregistrasi&id=$r[id_registrasi]'>
								<input type='button' class='btn btn-warning btn-sm' value='edit'>
							</a>
							<a href='$aksi?module=registrasi_htm&act=hapus&id=$r[id_registrasi]'>
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
  
  // Form Tambah registrasi
  case "tambahregistrasi":
    echo "
		<section class='content'>
		<h3>Registrasi Peserta Seminar</h3>
		";
		if (isset($_GET['nama'])) {
			echo "<h4>Registrasi Peserta ".$_GET['nama']." Berhasil!</h4>";
		}
		echo "
		<form method=POST action='$aksi?module=registrasi_htm&act=input' enctype='multipart/form-data'>
			<input type=hidden name='id_registrasi'  size=15>
			<input type='hidden' name='pembayaran' value='HTM'>
			<table id='example1' class='table table-bordered table-hover'>
				<tr>
					<td>Nama Peserta <i>(huruf kapital)</i></td> 
					<td>
						<input type='text' name='nama_peserta' class='form-control' onkeyup='this.value = this.value.toUpperCase()'>
					</td>
				</tr>
				<tr>
					<td>Nomor Whatsapp</td> 
					<td><input type='text' name='telp' class='form-control' maxlength='15'></td>
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
  
  // Form Edit registrasi  
  case "editregistrasi":
    $edit=mysqli_query($koneksi,"SELECT * FROM registrasi WHERE id_registrasi='$_GET[id]'");
    $r=mysqli_fetch_array($edit);
    echo "
		<section class='content'>
		<h3>Edit registrasi</h3>
    <form method=POST action='$aksi?module=registrasi_htm&act=update' enctype='multipart/form-data'>
		<input type=hidden name='id'  value='$r[id_registrasi]'>
		<table id='example1' class='table table-bordered table-hover'>
		<tr>
			<td>Nama Peserta</td> 
			<td>
				<input type=text name='nama_peserta'  size=50 value='$r[nama_peserta]'>
			</td>
		</tr>
		<tr>
			<td>Nomor Whatsapp</td> 
			<td>
				<input type=text name='telp'  size=50 value='$r[telp]'>
			</td>
		</tr>
		<tr>
			<td>Pembayaran</td>
			<td>";
			if ($r['pembayaran'] == 'HTM') {
				echo "
					<p>
						<input type='radio' name='pembayaran' value='HTM' class='form-control' checked> HTM
					</p>
					<p>
						<input type='radio' name='pembayaran' value='OTS' class='form-control'> OTS
					</p>";
			} else {
				echo "
					<p>
						<input type='radio' name='pembayaran' value='HTM' class='form-control'> HTM
					</p>
					<p>
						<input type='radio' name='pembayaran' value='OTS' class='form-control' checked> OTS
					</p>";
			}
		echo "
		<tr>
			<td colspan=2>
				<input type='submit' value=Simpan class='btn btn-md btn-success'>
				<input type='submit' value=Batal onclick=self.history.back() class='btn btn-md btn-danger'>
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
