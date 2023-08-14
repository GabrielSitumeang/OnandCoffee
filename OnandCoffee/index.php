<?php
session_start();
// Jika tidak bisa login maka balik ke login.php
// jika masuk ke halaman ini melalui url, maka langsung menuju halaman login
if (!isset($_SESSION['login'])) {
    header('location:home.php');
    exit;
}

require 'config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="assets/images/logo.png" type="image/ico" />

    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Happy+Monkey&family=Lato:wght@700&family=Patrick+Hand&family=Roboto:wght@100&family=Rokkitt:wght@100;400&family=Sriracha&display=swap" rel="stylesheet">

    <title>Admin</title>
</head>

<body class="nav-md" style="color:#222323; background-color:#222323;">
    <div class="container body"  style="background-color:#222323;">
      <div class="main_container"  style="background-color:#222323;">
        <div class="col-md-3 left_col"  style="background-color:#222323;">
          <div class="left_col scroll-view"  style="background-color:#222323;">
            <div class="navbar nav_title" style="border: 0; background-color:#222323;">
            <center>
            &nbsp; <div class="profile_pic">
               
              </div>
            </center>
            </div>

            <div class="clearfix" style="background-color:#222323;"></div>

            <!-- menu profile quick info -->
            <center>
            <div class="profile clearfix" style="background-color:#222323;">
              
              <div class="profile_info" style="background-color:#222323;">
            
                  <font size="4.95" color="white" face="Helvetica Neue"></font>
              </div>
            </div>
            </center>
            <!-- /menu profile quick info -->

            <br />
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" style="background-color:#222323;">
              <div class="menu_section" style="background-color:#222323;">
                <ul class="nav side-menu">
                  <li><a href="index.php?page=beranda" class="karakter"><i class="fa fa-home"></i> Beranda <span class="fa fa-chevron"></span></a>
                  </li>
                  <li><a href="#" class="karakter"><i class="fa fa-coffee"></i>  Produk <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="karakter"><a href="index.php?page=tampil_produk">Tampil Data</a></li>
                      <li class="karakter"><a href="index.php?page=tambah_produk">Tambah Data</a></li>
                    </ul>
                  </li>
                  <li class="karakter"><a href="#"><i class="fa fa-quote-left"></i> Cerita <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="karakter"><a href="index.php?page=tampil_cerita">Tampil Data</a></li>
                      <li class="karakter"><a href="index.php?page=tambah_cerita">Tambah Data</a></li>
                    </ul>
                  </li>
                  <li class="karakter"><a href="#"><i class="fa fa-star-o"></i> Masukan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="karakter"><a href="index.php?page=tampil_masukan">Tampil Data</a></li>
                      <li class="karakter"><a href="index.php?page=rating_masukan">Lihat Rating</a></li>
                    </ul>
                  </li>
                  <li class="karakter"><a href="#"><i class="fa fa-calendar-o"></i> Jam Operasi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="karakter"><a href="index.php?page=tampil_jamoperasi">Tampil Data</a></li>
                      <li class="karakter"><a href="index.php?page=tambah_jamoperasi">Tambah Data</a></li>
                    </ul>
                  </li>
                  <li class="karakter"><a href="#"><i class="fa fa-code-fork"></i> Media Pesanan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="karakter"><a href="index.php?page=tampil_mediapesanan">Tampil Data</a></li>
                      <li class="karakter"><a href="index.php?page=tambah_mediapesanan">Tambah Data</a></li>
                    </ul>
                  </li>
                  <li class="karakter"><a><i class="fa fa-gear"></i> Settings <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="karakter"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                  </li>

                  <li style="margin-top: 50px;"><a href="home.php" class="karakter"><i class="fa fa-desktop"></i> Website User <span class="fa fa-chevron"></span></a>
                  </li>
                </ul>
              </div>
            </div>
    <!-- /sidebar menu -->




    
   <!-- /menu footer buttons -->
   <div class="sidebar-footer hidden-small">
              
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav" style="background-color:#222323;">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content - HALAMAN UTAMA ISI DISINI -->
        <div class="right_col" role="main" >
        
      <?php
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'], $queries);
      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      switch ($queries['page']) {
      	case 'tampil_produk':
      		# code...
      		include 'produk_tampil.php';
      		break;

        case 'tambah_produk':
          include 'produk_tambah.php';
          break;
        
        case 'edit_produk':
          include 'produk_edit.php';
          break;

        case 'proses_tambah_produk':
          include 'produk_proses_tambah.php';
          break;  
          
        case 'proses_hapus_produk':
          include 'produk_proses_hapus.php';
          break;

        case 'produk-detail';
          include 'produk_detail.php';
        break;

        case 'tampil_cerita':
          include 'cerita_tampil.php';
          break;

        case 'tambah_cerita':
          include 'cerita_tambah.php';
          break;
        
        case 'proses_tambah_cerita':
          include 'cerita_proses_tambah.php';
          break;  
          
        case 'edit_cerita':
          include 'cerita_edit.php';
          break;
        
        case 'proses_hapus_cerita':
          include 'cerita_proses_hapus.php';
          break;

        case 'tampil_masukan':
      		# code...
      		include 'masukan_tampil.php';
      		break;

        case 'rating_masukan':
          # code...
          include 'masukan_rating.php';
          break;

        case 'tampil_masukan':
          # code...
          include 'masukan_tampil_detail.php';
          break; 

        case 'tampil_jamoperasi':
          include 'jamoperasi_tampil.php';
          break;

        case 'tambah_jamoperasi':
          include 'jamoperasi_tambah.php';
          break;
        
        case 'proses_tambah_jamoperasi':
          include 'jamoperasi_proses_tambah.php';
          break;  
          
        case 'edit_jamoperasi':
          include 'jamoperasi_edit.php';
          break;
        
        case 'proses_hapus_jamoperasi':
          include 'jamoperasi_proses_hapus.php';
          break;
        
        case 'tampil_mediapesanan':
      		# code...
      		include 'mediapesanan_tampil.php';
      		break;
        
        case 'tambah_mediapesanan':
          include 'mediapesanan_tambah.php';
          break;
        
        case 'proses_tambah_mediapesanan':
          include 'mediapesanan_proses_tambah.php';
          break;  
          
        case 'edit_mediapesanan':
          include 'mediapesanan_edit.php';
          break;
        
        case 'proses_hapus_mediapesanan':
          include 'mediapesanan_proses_hapus.php';
          break;  
          
        case 'beranda':
		      include 'beranda.php';
		      break;
        }

        ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <h6><a style="text-align: right;" class="nav-link karakter" href="logout.php">LOGOUT</a> </h6>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="assets/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="assets/skycons/skycons.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>

  </body>
</html>