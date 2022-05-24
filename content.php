<?php
//session_start(); 
include "config/koneksi.php";
if ($_GET['module']=='home'){
  ?>
  
               <!-- BLOCK START-->
                <div class='panel panel-default'>   
                    <div class='panel-body'>
										<center> <?php echo "<img src=foto_banner/$_SESSION[foto] width=100%><br><br>
										Welcome<br>$_SESSION[namalengkap]";?>	</center>							 
                   </div>
                </div>
               <!-- BLOCK END-->                           

    <?php
}


// Bagian User
elseif ($_GET['module']=='obat'){
    include "modul/mod_obat/obat.php";
}

// Bagian User
elseif ($_GET['module']=='karyawan'){
    include "modul/mod_karyawan/karyawan.php";
}

// Bagian User
elseif ($_GET['module']=='barang'){
    include "modul/mod_barang/barang.php";
}
elseif ($_GET['module']=='produk'){
    include "modul/mod_produk/produk.php";
}
elseif ($_GET['module']=='kategori'){
    include "modul/mod_kategori/kategori.php";
}
elseif ($_GET['module']=='supplier'){
    include "modul/mod_supplier/supplier.php";
}
elseif ($_GET['module']=='keranjang'){
    include "modul/mod_keranjang/keranjang.php";
}

// Apabila modul tidak ditemukan
else{
  echo "<b>UNDER CONSTRUCTION</b>";
}
?>
