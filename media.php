<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
?>  
<head>
  <meta charset="utf-8">
  <title>BBPLK CEVEST</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">
  <link href="/favicon.ico" rel="SHORTCUT ICON" type="image/ico">

  <!-- Fonts START 
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">              
  <link href="assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/plugins/layerslider/css/layerslider.css" type="text/css">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css">
  <link href="assets/css/style.css" rel="stylesheet" type="text/css">
  <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css">  
  <link href="assets/css/custom.css" rel="stylesheet" type="text/css">
  <!-- Theme styles END -->
	<style>
		* { margin: 0; padding: 0; }
		
		html { 
			background: url(images/bg.png) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
	</style>
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body>
    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
           
        </div>        
    </div>
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
    <div role="navigation" class="navbar header no-margin">
        <div class="container">
            <div class="navbar-header" >
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->

                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <a href="media.php?module=home" class="navbar-brand">Toko Mitha</a><!-- LOGO -->

            </div >
            <?php
              include "menu.php";
            ?>
        </div>
    </div>
    <!-- END HEADER -->

    <div class="main">
      <div class="container">
          <div class="row margin-bottom-40 ">            
            <div class="sidebar col-md-12 col-sm-12">           
             <?php
             include "content.php";
             ?>
          </div>
         </div>
       </div>
    </div>      
    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h1>Balai Pelatihan</h1>
            <address class="margin-bottom-40">            
            </address>
          </div>
          <!-- END BOTTOM CONTACTS -->        
        </div>
        <hr>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer padding-top-15" style="margin-bottom:-100px;">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-6 col-sm-6 padding-top-10">
            ALL Rights Reserved. Developed by mithaameliya<br><br>
          </div>
          <!-- END COPYRIGHT -->
          <br>
        </div>
      </div>
    </div>
    <!-- END FOOTER -->
    
    

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->  
    <script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jQuery-slimScroll/jquery.slimscroll.min.js"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script type="text/javascript" src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script><!-- pop up -->
    <script type="text/javascript" src="assets/plugins/bxslider/jquery.bxslider.min.js"></script><!-- slider for products -->
    <script type="text/javascript" src='assets/plugins/zoom/jquery.zoom.min.js'></script><!-- product zoom -->
    <script src="assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->

    <!-- BEGIN LayerSlider -->
    <script src="assets/plugins/layerslider/jQuery/jquery-easing-1.3.js" type="text/javascript"></script>
    <script src="assets/plugins/layerslider/jQuery/jquery-transit-modified.js" type="text/javascript"></script>
    <script src="assets/plugins/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
    <script src="assets/plugins/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
    <!-- END LayerSlider -->

    <script type="text/javascript" src="assets/scripts/app.js"></script>
    <script type="text/javascript" src="assets/scripts/index.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();    
            App.initBxSlider();
            Index.initLayerSlider();
            App.initImageZoom();
            App.initTouchspin();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
<?php
}
?>