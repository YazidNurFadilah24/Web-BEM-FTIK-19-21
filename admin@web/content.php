<?php
include "../config/koneksi.php";
include "../config/library.php";
include "../config/fungsi_indotgl.php";
include "../config/fungsi_combobox.php";
include "../config/fungsi_rupiah.php";
echo "
<!-- Left side column. contains the logo and sidebar -->           
	<aside class='left-side sidebar-offcanvas'>
		<!-- sidebar: style can be found in sidebar.less -->
			<section class='sidebar'>
				<!-- Sidebar user panel -->
					<div class='user-panel'>
						<div class='pull-left image'>";
							$staff= $_SESSION['namauser'];                            
							$sq1 = mysqli_query($koneksi,"SELECT * from users where username='$staff'");
							$n1 = mysqli_fetch_array($sq1);
							echo "
							<img src='../foto_banner/$n1[foto]' class='img-circle' alt='$staff' />
                        </div>
                        <div class='pull-left info'>
                            <p>Hi Guys, $staff</p>";
                            echo "

                            <a href='#'><i class='fa fa-circle text-success'></i> Online</a>
                        </div>
                    </div>";
                   include "content-one.php"; 
                   echo " </section>
                <!-- /.sidebar -->
            </aside>"; 
                   
                   
            
if ($_GET['module']=='home'){
	?>
	 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>
<?php

// LEVEL USER ADMIN
if ($_SESSION['leveluser']=='admin'){
    $jam=date("H:i:s");
    $tgl=tgl_indo(date("Y m d")); 

	echo "     
               

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class='right-side'>
                <!-- Content Header (Page header) -->
                <section class='content-header'>
                    <h1>
                        Dashboard Control panel
                    </h1>
                    <ol class='breadcrumb'>
                        <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
                        <li class='active'>Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class='content'>

                    <!-- Small boxes (Stat box) -->
                    <div class='row'>

                    </div><!-- /.row -->
    <h4 class='page-header'>
                        Hai <b>$_SESSION[namalengkap]</b>, Welcome to Administrator Page
                        <small>Silahkan menggunakan menu di sebelah kiri untuk mengelola konten website</small>
                    </h4>
                    
                    <div class='box box-primary'>
                                <div class='box-header'>
                                    <i class='fa fa-th'></i>
                                    <h3 class='box-title'>Sistem Informasi Sekolah & Penjualan</h3>
                                    <div class='box-tools pull-right'>
                                        <button class='btn bg-teal btn-sm' data-widget='collapse'><i class='fa fa-minus'></i></button>
                                        <button class='btn bg-teal btn-sm' data-widget='remove'><i class='fa fa-times'></i></button>
                                    </div>
                                </div>
                                <div class='box-body border-radius-none'>";
                    ?>
<script src="js/jquery.min.js" type="text/javascript"></script>
<?php echo "	
                       
<img src=img/unitas.jpg width=100%>                         
                                                                
                                </div>
                                <!-- /.box-body -->
                                <div class='box-footer no-border'>";
                                $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
                                $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
                                $waktu   = time(); // 
                            echo "
                                
                                </div><!-- /.box-footer -->
                            </div><!-- /.box -->                            

                           
                                
                            </div>
                            
                    <!-- Main row -->
                    <div class='row'>
                        <!-- Left col -->
                        <section class='col-lg-7 connectedSortable'>                            


                            <!-- Custom tabs (Charts with tabs)-->
                           
                           <!-- /.nav-tabs-custom -->

                            <!-- Chat box -->
                            
                                       <!-- end chate -->                                              

                            <!-- TO DO List -->
                            

                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <!-- sing tengen -->
                        <section class='col-lg-5 connectedSortable'> 

                            <!-- Map box -->
                            
                            <!-- /.box -->

                            <!-- solid sales graph -->
                           <!-- /.box -->                            

                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->

            </aside>
            
            <!-- /.right-side -->";
}

if ($_SESSION['leveluser']=='user'){
    $jam=date("H:i:s");
    $tgl=tgl_indo(date("Y m d")); 

    echo "     
             

          <!-- Right side column. Contains the navbar and content of the page -->
          <aside class='right-side'>
              <!-- Content Header (Page header) -->
              <section class='content-header'>
                  <h1>
                      Dashboard Control panel
                  </h1>
                  <ol class='breadcrumb'>
                      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
                      <li class='active'>Dashboard</li>
                  </ol>
              </section>

              <!-- Main content -->
              <section class='content'>

                  <!-- Small boxes (Stat box) -->
                  <div class='row'>

                  </div><!-- /.row -->
<h4 class='page-header'>
                      Hai <b>$_SESSION[namalengkap]</b>, Welcome to USER Page
                      <small>Silahkan menggunakan menu di sebelah kiri untuk mengelola konten website</small>
                  </h4>
                  
                  <div class='box box-primary'>
                              <div class='box-header'>
                                  <i class='fa fa-th'></i>
                                  <h3 class='box-title'>Sistem Informasi Sekolah & Penjualan</h3>
                                  <div class='box-tools pull-right'>
                                      <button class='btn bg-teal btn-sm' data-widget='collapse'><i class='fa fa-minus'></i></button>
                                      <button class='btn bg-teal btn-sm' data-widget='remove'><i class='fa fa-times'></i></button>
                                  </div>
                              </div>
                              <div class='box-body border-radius-none'>";
                  ?>
<script src="js/jquery.min.js" type="text/javascript"></script>
<?php echo "	
                     
<img src=img/unitas.jpg width=100%>                         
                                                              
                              </div>
                              <!-- /.box-body -->
                              <div class='box-footer no-border'>";
                              $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
            $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
            $waktu   = time(); // 
            echo "
                              
                              </div><!-- /.box-footer -->
                          </div><!-- /.box -->                            

                         
                              
                          </div>
                          
                  <!-- Main row -->
                  <div class='row'>
                      <!-- Left col -->
                      <section class='col-lg-7 connectedSortable'>                            


                          <!-- Custom tabs (Charts with tabs)-->
                         
                         <!-- /.nav-tabs-custom -->

                          <!-- Chat box -->
                          
                                     <!-- end chate -->                                              

                          <!-- TO DO List -->
                          

                      </section><!-- /.Left col -->
                      <!-- right col (We are only adding the ID to make the widgets sortable)-->
                      <!-- sing tengen -->
                      <section class='col-lg-5 connectedSortable'> 

                          <!-- Map box -->
                          
                          <!-- /.box -->

                          <!-- solid sales graph -->
                         <!-- /.box -->                            

                      </section><!-- right col -->
                  </div><!-- /.row (main row) -->

              </section><!-- /.content -->

          </aside>
          
          <!-- /.right-side -->";
}

// LEVEL USER DOKTER
if ($_SESSION['leveluser']=='dokter'){
    $jam=date("H:i:s");
$tgl=tgl_indo(date("Y m d")); 

  echo "     
             

          <!-- Right side column. Contains the navbar and content of the page -->
          <aside class='right-side'>
              <!-- Content Header (Page header) -->
              <section class='content-header'>
                  <h1>
                      Dashboard Control panel
                  </h1>
                  <ol class='breadcrumb'>
                      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
                      <li class='active'>Dashboard</li>
                  </ol>
              </section>

              <!-- Main content -->
              <section class='content'>

                  <!-- Small boxes (Stat box) -->
                  <div class='row'>

                  </div><!-- /.row -->
<h4 class='page-header'>
                      Hai <b>$_SESSION[namalengkap]</b>, Welcome to Dokter Page
                      <small>Silahkan menggunakan menu di sebelah kiri untuk mengelola konten website</small>
                  </h4>
                  
                  <div class='box box-primary'>
                              <div class='box-header'>
                                  <i class='fa fa-th'></i>
                                  <h3 class='box-title'>Sistem Informasi Sekolah & Penjualan</h3>
                                  <div class='box-tools pull-right'>
                                      <button class='btn bg-teal btn-sm' data-widget='collapse'><i class='fa fa-minus'></i></button>
                                      <button class='btn bg-teal btn-sm' data-widget='remove'><i class='fa fa-times'></i></button>
                                  </div>
                              </div>
                              <div class='box-body border-radius-none'>";
                  ?>
<script src="js/jquery.min.js" type="text/javascript"></script>
<?php echo "	
                     
<img src=img/unitas.jpg width=100%>                         
                                                              
                              </div>
                              <!-- /.box-body -->
                              <div class='box-footer no-border'>";
                              $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
            $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
            $waktu   = time(); // 
            echo "
                              
                              </div><!-- /.box-footer -->
                          </div><!-- /.box -->                            

                         
                              
                          </div>
                          
                  <!-- Main row -->
                  <div class='row'>
                      <!-- Left col -->
                      <section class='col-lg-7 connectedSortable'>                            


                          <!-- Custom tabs (Charts with tabs)-->
                         
                         <!-- /.nav-tabs-custom -->

                          <!-- Chat box -->
                          
                                     <!-- end chate -->                                              

                          <!-- TO DO List -->
                          

                      </section><!-- /.Left col -->
                      <!-- right col (We are only adding the ID to make the widgets sortable)-->
                      <!-- sing tengen -->
                      <section class='col-lg-5 connectedSortable'> 

                          <!-- Map box -->
                          
                          <!-- /.box -->

                          <!-- solid sales graph -->
                         <!-- /.box -->                            

                      </section><!-- right col -->
                  </div><!-- /.row (main row) -->

              </section><!-- /.content -->

          </aside>
          
          <!-- /.right-side -->";
}

// Bagian Pelanggan
elseif ($_SESSION['leveluser']=='pelanggan'){
    $jam=date("H:i:s");
$tgl=tgl_indo(date("Y m d")); 

  echo "     
             

          <!-- Right side column. Contains the navbar and content of the page -->
          <aside class='right-side'>
              <!-- Content Header (Page header) -->
              <section class='content-header'>
                  <h1>
                      Dashboard Control panel
                  </h1>
                  <ol class='breadcrumb'>
                      <li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
                      <li class='active'>Dashboard</li>
                  </ol>
              </section>

              <!-- Main content -->
              <section class='content'>

                  <!-- Small boxes (Stat box) -->
                  <div class='row'>

                  </div><!-- /.row -->
<h4 class='page-header'>
                      Hai <b>$_SESSION[namalengkap]</b>, Welcome to Dokter Page
                      <small>Silahkan menggunakan menu di sebelah kiri untuk mengelola konten website</small>
                  </h4>
                  
                  <div class='box box-primary'>
                              <div class='box-header'>
                                  <i class='fa fa-th'></i>
                                  <h3 class='box-title'>Sistem Informasi Sekolah & Penjualan</h3>
                                  <div class='box-tools pull-right'>
                                      <button class='btn bg-teal btn-sm' data-widget='collapse'><i class='fa fa-minus'></i></button>
                                      <button class='btn bg-teal btn-sm' data-widget='remove'><i class='fa fa-times'></i></button>
                                  </div>
                              </div>
                              <div class='box-body border-radius-none'>";
                  ?>
<script src="js/jquery.min.js" type="text/javascript"></script>
<?php echo "	
                     
<img src=img/unitas.jpg width=100%>                         
                                                              
                              </div>
                              <!-- /.box-body -->
                              <div class='box-footer no-border'>";
                              $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
            $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
            $waktu   = time(); // 
            echo "
                              
                              </div><!-- /.box-footer -->
                          </div><!-- /.box -->                            

                         
                              
                          </div>
                          
                  <!-- Main row -->
                  <div class='row'>
                      <!-- Left col -->
                      <section class='col-lg-7 connectedSortable'>                            


                          <!-- Custom tabs (Charts with tabs)-->
                         
                         <!-- /.nav-tabs-custom -->

                          <!-- Chat box -->
                          
                                     <!-- end chate -->                                              

                          <!-- TO DO List -->
                          

                      </section><!-- /.Left col -->
                      <!-- right col (We are only adding the ID to make the widgets sortable)-->
                      <!-- sing tengen -->
                      <section class='col-lg-5 connectedSortable'> 

                          <!-- Map box -->
                          
                          <!-- /.box -->

                          <!-- solid sales graph -->
                         <!-- /.box -->                            

                      </section><!-- right col -->
                  </div><!-- /.row (main row) -->

              </section><!-- /.content -->

          </aside>
          
          <!-- /.right-side -->";
}

}
// Bagian Modul
elseif ($_GET['module']=='modul'){
    include "modul/mod_modul/modul.php";
}
// Bagian User
elseif ($_GET['module']=='user'){
    include "modul/mod_users/users.php";
}
 


// Bagian label Produk
elseif ($_GET['module']=='kategori'){
   if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_kategori/kategori.php";
  }
}  

// Bagian Password
elseif ($_GET['module']=='password'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_password/password.php";
  }
}


// Bagian Menu Utama
elseif ($_GET['module']=='menuutama'){
   if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_menuutama/menuutama.php";
  }
}

// Bagian Sub Menu
elseif ($_GET['module']=='submenu'){
   if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_submenu/submenu.php";
  }
}

elseif ($_GET['module']=='header'){
    include "modul/mod_header/header.php";
}

elseif ($_GET['module']=='event'){
    include "modul/mod_event/event.php";
}

elseif ($_GET['module']=='anggota'){
    include "modul/mod_anggota/anggota.php";
}

elseif ($_GET['module']=='aspirasi'){
    include "modul/mod_aspirasi/aspirasi.php";
}

elseif ($_GET['module']=='kalender_akademik'){
    include "modul/mod_kalender_akademik/kalender_akademik.php";
}

elseif ($_GET['module']=='kurikulum_prodi'){
    include "modul/mod_kurikulum_prodi/kurikulum_prodi.php";
}

elseif ($_GET['module']=='pesan'){
    include "modul/mod_pesan/pesan.php";
}

else{
  echo "<p><b>..............MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}		

?>   
