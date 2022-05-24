<?php
include "config/koneksi.php";
?>          
<!-- BEGIN NAVIGATION -->
<div class="collapse navbar-collapse mega-menu">
  <ul class="nav navbar-nav">
    <li><a href="media.php?module=home">HOME</a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" data-delay="0" data-close-others="false" data-target="#" href="#">
      PRODUK
      <i class="fa fa-angle-down"></i>
      </a>
      <!-- BEGIN DROPDOWN MENU -->
      <ul class="dropdown-menu">
        <li><a href="media.php?module=produk">Daftar Produk</a></li>
				  <li><a href="media.php?module=kategori">Daftar Kategori</a></li>
      </ul>
      <!-- END DROPDOWN MENU -->
    </li>
		<li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" data-delay="0" data-close-others="false" data-target="#" href="#">
			PESANAN
			<i class="fa fa-angle-down"></i></a>
		   <ul class="dropdown-menu">
        <li><a href="media.php?module=supplier">Supplier</a></li>
        <li><a href="media.php?module=keranjang">Keranjang Belanja</a></li>
      </ul>
		</li>	
		<li><a href="logout.php">LOGOUT</a></li>
  </ul>
</div>
<!-- END NAVIGATION -->
