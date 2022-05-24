<?php
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_anggota/aksi_anggota.php";
echo "
<aside class='right-side'>
                <!-- Content Header (Page header) -->
                <section class='content-header'>
                    <h1>
                        Data
                        <small>anggota</small>
                    </h1>
                    <ol class='breadcrumb'>
                        <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
                        <li class='active'>Data anggota</li>
                       
                    </ol>
                </section>

                <!-- Main content -->
                <section class='content'>
                    <div class='row'>
                        <div class='col-xs-12'>
                   
<div class='box'>";
if (!isset($_GET['act'])) {
    if ($_SESSION['leveluser']=='admin'){
      $tampil = mysqli_query($koneksi,"SELECT * FROM anggota ORDER BY tahun_menjabat DESC");
      echo "
        <div class='box-header'>
        <h3 class='box-title'><input type=button class='btn btn-primary btn-lg' value='Tambah Anggota'
        onclick=\"window.location.href='?module=anggota&act=tambahanggota';\"></h3>
        <a href='modul/mod_anggota/cetak.php' target=blank>
            <h3 class='box-title'>
                <input type='button' class='btn btn-success btn-lg' value='Export Ke Excel'>
            </h3>
        </a>
        
        </div><!-- /.box-header -->
                                <div class='box-body table-responsive'>
    
    <table id='example1' class='table table-bordered table-striped'>
                                        <thead>
     
        ";
    }
    else{
      $tampil=mysqli_query($koneksi,"SELECT * FROM anggota");
      echo " <div class='box-header'>
                                    <h3 class='box-title'>
                                   Data anggota</h3>
                                </div><!-- /.box-header -->
                                <div class='box-body table-responsive'>
    
    <table id='example1' class='table table-bordered table-striped'>
                                        <thead><table id='example1' class='table table-bordered table-striped'>
                                        <thead>";
    }
    
    echo "           <tr>
        <th>No</th>
        <th>Foto anggota</th>
        <th>Nama Lengkap</th>
        <th>divisi</th>
        <th>Jabatan</th>
        <th>Tahun Menjabat</th>
        <th>Telphone</th>
        <th>Aksi</th>
        </tr></thead><tbody>"; 
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
       echo "
      <tr>
        <td class='center' width='10'>$no</td>
        <td class='left'><img src='../foto_banner/$r[foto]' width='100' height='100'></td>
        <td class='left'>$r[nama_anggota]</td>
        <td class='left'>$r[divisi]</td>
        <td class='left'>$r[jabatan]</td>
        <td>".$r['tahun_menjabat']." / ".($r['tahun_menjabat']+1)."</td>
        <td class='left'>$r[no_telp]</td>
        <td class='center'>
        <a class='btn btn-info' href='?module=anggota&act=editanggota&id=$r[id_anggota]'>
                            <i class='icon-edit icon-white'></i>  
                            Edit                                            
                        </a>
                        <a class='btn btn-danger' href='$aksi?module=anggota&act=delcon&id=$r[id_anggota]'>
                            <i class='icon-trash icon-white'></i> 
                            Delete
                        </a>
                    </td>
                </tr>";
      $no++;
    }
    echo "</tbody></table>";
}		
else {
switch($_GET['act']){
  
  case "tambahanggota":
    if ($_SESSION['leveluser']=='admin'){
    echo "
    <section class='content'>

                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='box box-info'>
                                <div class='box-header'>
                                    <h3 class='box-title'>Tambah <small>anggota</small></h3`    >
                                    <!-- tools box -->
                                    <div class='pull-right box-tools'>
                                        <button class='btn btn-info btn-sm' data-widget='collapse' data-toggle='tooltip' title='Collapse'><i class='fa fa-minus'></i></button>
                                        <button class='btn btn-info btn-sm' data-widget='remove' data-toggle='tooltip' title='Remove'><i class='fa fa-times'></i></button>
                                    </div><!-- /. tools -->
                                </div><!-- /.box-header -->
                                <div class='box-body pad'>
                                <form method=POST action='$aksi?module=anggota&act=input' enctype='multipart/form-data'>
                                    <input type='hidden' name='id_anggota'>
                                    <div class='form-group'>
                                        <label>Nama Lengkap</label>
                                        <input type='text' class='form-control' name='nama_anggota' placeholder='...'/>
                                    </div>
                                    <div class='form-group'>
                                        <label>Divisi</label>
                                        <select name='divisi' class='form-control' required>
                                            <option></option>
                                            <option value='bph'>Badan Pengurus Harian</option>
                                            <option value='kaderisasi'>Kaderisasi</option>
                                            <option value='litbang'> Penelitian dan Pengembangan</option>
                                            <option value='kominfo'>Komunikasi dan Informasi</option>
                                            <option value='kwh'>Kewirausahaan</option>
                                            <otion value='abdimas'>Abdi Masyarakat</option>
                                        </select>
                                    </div>
                                    <div class='form-group'>
                                        <label>Jabatan</label>
                                        <input type='text' class='form-control' name='jabatan' placeholder='ex: anggota/ketua'/>
                                    </div>
                                    <div class='form-group'>
                                        <label>Tahun Menjabat</label>
                                        <input type='text' class='form-control' name='tahun_menjabat' placeholder='...' required />
                                    </div>
                                    <div class='form-group'>
                                        <label>no_telp</label>
                                        <input type='text' class='form-control' name='no_telp' placeholder='...'/>
                                    </div>
                                    <div class='form-group'>
                                        <label for='exampleInputFile'>Foto</label>
                                        <input type='file' name='fupload' id='exampleInputFile'>
                                        <p class='help-block'><i>File gambar harus berekstention .JPG / PNG Resolusi Optimal 215 x 215</i></p>
                                    </div>
                                    <div class='form-group'>
                                        <input type=submit class='btn btn-primary btn-lg' value=Simpan>
                                        <input type=button class='btn btn-warning btn-lg' value=Batal onclick=self.history.back()>
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.box -->

                            
                        </div><!-- /.col-->
                    </div><!-- ./row -->
                                    </section>
    
    
    ";
    }
    else{
      echo "Anda tidak berhak mengakses halaman ini.";
    }
     break;
    
  case "editanggota":

    // inisialisasi divisi unituk dipanggil di perulangan
    $divisi = array("bph",
                    "litbang",
                    "kaderisasi",
                    "kominfo",
                    "kwh",
                    "abdimas");

    $selected_divisi = mysqli_query($koneksi, "SELECT divisi FROM anggota WHERE id_anggota = '$_GET[id]'");
    $selected = mysqli_fetch_array($selected_divisi);

    $edit=mysqli_query($koneksi,"SELECT * FROM anggota WHERE id_anggota='$_GET[id]'");
    $r=mysqli_fetch_array($edit);

    echo "
    <div class='row'>
    <div class='col-md-12'>
        <div class='box box-info'>
            <div class='box-header'>
                <h3 class='box-title'>Tambah <small>anggota</small></h3>
                <!-- tools box -->
                <div class='pull-right box-tools'>
                    <button class='btn btn-info btn-sm' data-widget='collapse' data-toggle='tooltip' title='Collapse'><i class='fa fa-minus'></i></button>
                    <button class='btn btn-info btn-sm' data-widget='remove' data-toggle='tooltip' title='Remove'><i class='fa fa-times'></i></button>
                </div><!-- /. tools -->
            </div><!-- /.box-header -->
            <div class='box-body pad'>
            <form method=POST action='$aksi?module=anggota&act=update' enctype='multipart/form-data'>
                <input type='hidden' name='id_anggota'>
                <div class='form-group'>
                    <label>Nama Lengkap</label>
                    <input type='text' class='form-control' name='nama_anggota' placeholder='...'/ value='$r[nama_anggota]'>
                </div>
                <div class='form-group'>
                    <label>Divisi</label>
                    <select name='divisi' class='form-control' required>
                        <option></option>";
                        for ($i=0; $i <= 5; $i++) {
                            if ($divisi[$i] == $selected['divisi']) {
                                echo "
                                <option value='".$divisi[$i]."' selected>".$divisi[$i]."</option>";
                            } else {
                                echo "
                                <option value='".$divisi[$i]."'>".$divisi[$i]."</option>";
                            }
                        }
                    echo "
                    </select>
                </div>
                <div class='form-group'>
                    <label>Jabatan</label>
                    <input type='text' class='form-control' name='jabatan' placeholder='ex: anggota/ketua' value='$r[jabatan]' />
                </div>
                <div class='form-group'>
                    <label>Tahun Menjabat</label>
                    <input type='text' class='form-control' name='tahun_menjabat' placeholder='...' required value='$r[tahun_menjabat]'/>
                </div>
                <div class='form-group'>
                    <label>Telphone</label>
                    <input type='text' class='form-control' name='no_telp' placeholder='...' value='$r[no_telp]' />
                </div>
                <div class='form-group'>
                    <label for='exampleInputFile'>Foto</label>
                    <input type='file' name='fupload' id='exampleInputFile' value='$r[foto]'>
                    <p class='help-block'><i>File gambar harus berekstention .JPG / PNG Resolusi Optimal 215 x 215</i></p>
                </div>
                <div class='form-group'>
                    <input type=submit class='btn btn-primary btn-lg' value=Simpan>
                    <input type=button class='btn btn-warning btn-lg' value=Batal onclick=self.history.back()>
                </div>
            </form>
        </div>
    </div><!-- /.box -->

        
    </div><!-- /.col-->
</div><!-- ./row -->
                                    </section>";     
}
}
}
echo "</div><!-- /.box-body -->
 </div>
                    </div>

                </section>
                <!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->";
?>
