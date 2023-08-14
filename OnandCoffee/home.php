<?php
include 'fungsi.php';

$jamoperasi =  query("SELECT * FROM jamoperasi");
$media = query("SELECT * FROM mediapesanan ORDER BY id DESC");
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Onand Coffee</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="p_asset/images/logo.png" type="image/png">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="p_asset/css/animate.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="p_asset/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="p_asset/css/LineIcons.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="p_asset/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="p_asset/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="p_asset/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt:wght@400;500&family=Rouge+Script&family=Source+Code+Pro:wght@600&family=Sriracha&display=swap" rel="stylesheet">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <!-- <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <section class="header_area">
        <div class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="">
                                <img src="p_asset/images/logo.png" height="70" width="80" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="home.php">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="product.php">Produk</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="story.php">Cerita</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="input.php">Masukan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tentang.php">Tentang</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->

        <div id="home" class="header_slider">
            <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url(p_asset/images/slider-1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="slider_content">
                                <h2><class="slider_title">Karena kami berada dihangat yang sama...</h2>
                                <h2><class="slider_title">Untuk segelas dan sepata kata</h2>
                                <h2><class="slider_title">mengisi penat hari...</h2>
                                <h2><class="slider_title">Menjadi sebuah cerita hangat dimalam hari</h2>
                                <a href="product.php" rel="nofollow" class="main-btn">Produk</a>
                            </div> <!-- slider content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->
        </div> <!-- header slider -->
    </section>

    <!--====== HEADER PART ENDS ======-->
    
    <!--====== COFFEE PART START ======-->
    
    <!--====== ABOUT PART START ======-->

    <section id="about" class="about_area pt-90 pb-130">
        <div class="container">
            <div class="d-flex row justify-content-between">
                <div class="about_content mt-45 ml-15 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h3 class="about_title" style="color: saddlebrown;">Onand Coffee</h3><br>
                    <div class="visimisi">Kita budayakan mengopi yang benar dan nyaman. </div>
                    <div class="visimisi">Katakan kepada kami ketika anda tidak  </div>
                    <div class="visimisi">nyaman, nanti kami nyamankan pokoknya </div>
                    <br>
                    <div class="visimisi">Jadikan kami tempat anda bernaung untuk berbagi cerita </div>
                    <div class="visimisi"> dengan sekitar anda sembari menikmati kopi untuk  </div>
                    <div class="visimisi">menghangatkan suasana</div>
                    <br>
                    <div class="visimisi">Karena ngopi sendiri itu bagaikan makan tanpa minum.</div>
                    <div class="visimisi">Kita hadir di Kota Balige...siap memberikan</div>
                    <div class="visimisi">asupan kafein di kota balige sebagai </div>
                    <div class="visimisi">pelengkap kehangatan hari hari anda...</div>
                    <div class="visimisi"></div>
                    <br>
                    <div class="visimisi">Jangan lupa mampir di kedai kita</div>
                    <div class="visimisi">Onand Coffee</div>
                </div>
                <div class="mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                    <table class="table table-borderless" style=" border: 1px solid black;display: inline-block;">
                        <thead>
                            <tr>
                                <th scope="col" colspan="3" style="font-family: 'Sriracha', cursive; font-size:25px;">Jam Operasi</th>
                            </tr>
                        </thead>
                        <?php foreach( $jamoperasi as $row) : ?>
                        <tbody>
                            <tr>
                                <td class="operasi"><?= $row["hariOperasi"]?></td>
                                <td class="operasi">&#10170</td>
                                <td class="operasi"><?= $row["jamBuka"]?></td>
                                <td class="operasi"><?= $row["jamTutup"]?></td>
                            </tr>
                        </tbody>
                        <?php endforeach; ?>
                        <tr><td></td></tr>
                    </table>
                </div> 
            </div>
            <div class="mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                <div> <!-- visi misi --->
                    <div class="d-flex flex-row">
                        <div class="p-2"><img src="p_asset/images/poin.jpg" width="35px" alt="poin"></div>
                        <div class="p-2"><h3 style="color: saddlebrown;" class="subjudul"> Visi-Misi</h3></div>
                    </div><br>
                    <div class="visimisi"> Memperdayakan/menyejahterakan petani-petani kopi di daerah Sumatera karena <br>Onand Coffee tidak memakai kopi diluar dari Sumatera. </div>
                </div>
                <br><br><br>
                <div> <!-- pemesanan --->
                    <div class="d-flex flex-row">
                        <div class="p-2"><img src="p_asset/images/poin.jpg" width="35px" alt="poin"></div>
                        <div class="p-2"><h3 style="color: saddlebrown;" class="subjudul"> Media Pemesanan</h3></div>
                    </div><br>
                    <div class="Pemesanan" >
                        <div class="Pemesanan">Take away, Dine in, delivery atau melalui aplikasi grab/gojek  </div>
                    </div><br>
                    <div>
                        <!-- ?php foreach( $media as $mp) : ?> -->
                            <?php foreach( $media as $row) : 
                                if($row['media'] == 'WhatsApp') { ?>
                                    <a href="https://api.whatsapp.com/send?phone=<?= $row['isiMedia']?>" class="iconpesanan"><img src="p_asset/images/whatsapp.png" height="25px" width="25px">  +<?= $row['isiMedia']?> </a>
                                <?php } else if($row['media'] == 'Instagram') { ?>
                                    <a href="https://www.instagram.com/<?= $row['isiMedia']?>/" class="iconpesanan"><img src="p_asset/images/instagram.png" height="25px" width="25px"> @<?= $row['isiMedia']?> </a>
                                <?php } else if ($row['media'] == 'Email' ) { ?>
                                    <a href="mailto:<?=$row['isiMedia']?>?subject=subject text" class="iconpesanan"><img src="p_asset/images/gmail.png" height="25Spx" width="25px">  <?= $row['isiMedia']?> </a>
                                <?php } else { ?> 
                                    <a href="#" class="iconpesanan"><img src="gambar/<?php echo $row['logoMedia']; ?>" height="25Spx" width="25px"> <?= $row['isiMedia']?> </a>
                                <?php } ?>  <br><br>
                            <?php endforeach;?>  
                    </div>
                </div>
                <br><br><br>
                <div> <!-- lokasi --->
                    <div class="d-flex flex-row">
                        <div class="p-2"><img src="p_asset/images/poin.jpg" width="35px" alt="poin"></div>
                        <div class="p-2"><h3 style="color: saddlebrown;" class="subjudul"> Lokasi</h3></div>
                    </div><br>
                    <div class="visimisi">Jl. Patuan Nagari No.89, Pardede Onan, Balige, Toba, Sumatera Utara</div><br>
                    <div class="gmap_canvas z-depth-1-half map-container" id="map-container-google-1" width="800" height="800"> 
                    <center>
                        <iframe class="lokasi" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.5094872551776!2d99.05930541469509!3d2.3336112982992607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e059b96d69615%3A0x46589a1dbc233e6d!2sOnand%20Coffee!5e0!3m2!1sid!2sid!4v1648401071529!5m2!1sid!2sid"  style="border:0; height:400px; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                   
                    </center>  
                </div>
            </div>
            
        </div> <!-- container -->
    </section>
    
    <!--====== FOOTER PART START ======-->

    <section id="footer" class="footer_area">
        <div class="footer"><center><br>
            <a href="login.php">
                <img src="p_asset/images/logo.png" height="70" width="80" alt="Logo">
            </a>
            <div class="jdlfooter">Onand Coffee</div><br>
            <div class="footer">Meminum kopi secara sederhana adalah cara terpantas untuk menilai keistimewaan dari kopi tersebut.  </div>
            <div>Apakah anda sudah mengenali kopi yang anda minum / yang anda seduh</div><br>
        </center>
        </div>
        <div class="footer_copyright">
            <div class="container">
                <div class="copyright text-center">
                    <p>copyright @2022 OnandCoffee.com All rights reserved <a href="" rel="nofollow"></a></p>
                </div> <!-- copyright -->
            </div> <!-- contact form -->
        </div> <!-- footer copyright -->
        
        <div class="footer_shape">
            <img src="p_asset/images/footer_shape.png" alt="footer shape">
        </div> <!-- footer shape -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== Jquery js ======-->
    <script src="p_asset/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="p_asset/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="p_asset/js/popper.min.js"></script>
    <script src="p_asset/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="p_asset/js/slick.min.js"></script>
    
    
    <!--====== Scrolling Nav js ======-->
    <script src="p_asset/js/jquery.easing.min.js"></script>
    <script src="p_asset/js/scrolling-nav.js"></script>
    
    <!--====== WOW js ======-->
    <script src="p_asset/js/wow.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="p_asset/js/main.js"></script>
    
</body>

</html>