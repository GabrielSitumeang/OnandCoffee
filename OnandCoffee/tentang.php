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
                                    <li class="nav-item ">
                                        <a href="home.php">Beranda</a>
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
                                    <li class="nav-item active">
                                        <a href="tentang.php">Tentang</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->
    </section>

    <!--====== HEADER PART ENDS ======-->
    
    <!--====== COFFEE PART START ======-->
    
    <!--====== ABOUT PART START ======-->


    <section id="about" class="about_area pt-90 pb-130">
        <div class="container"><br><br>
            <center>
                <h1>About</h1> <br>
                <div style="width:80%;">
                    <div class="visimisi">Onand Coffee merupakan salah satu UMKM yang berada di Kabupaten Toba, Sumatera Utara.UMKM ini berdiri pada tahun 2018. Meskin Onand Coffee sudah lama berdiri, UMKM ini dapat menyesuaikan setiap cita rasa dengan selera masyarakat saat ini.Onand Coffee menyediakan beragam produk minuman maupun biji kopi yang mampu membuat pembeli hanyut dengan rasa khas yang disediakan Onand Coffee</div>
                </div>
                <br><br><br>
                <div>
                    <img src="p_asset/images/ronny.jpg" width="255px" height="200px" alt="Ronny Manurung">
                    <div class="align-self-center"><br>
                        <h2>Ronny Manurung  </h2>
                        <h3 style="color:dimgrey;">Barista & Pemilik Onand Coffee</h3>
                    </div>
                </div>
                </center> 
                <br><br>
            <div class="d-flex row justify-content-between">
                <div class="about_content mt-45 ml-15 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="d-flex flex-row">
                        <div class="p-2"><img src="p_asset/images/poin.jpg" width="35px" alt="poin"></div>
                        <div class="p-2"><h3 style="color: saddlebrown;" class="subjudul"> Visi-Misi</h3></div>
                    </div><br>
                    <div class="visimisi"> Memperdayakan / menyejahterakan petani-petani kopi di daerah Sumatera karena Onand Coffee tidak memakai kopi diluar dari Sumatera. </div>   
                </div>
                <div class="about_content mt-45 ml-15 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
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
        </div> <!-- footer subscribe  -->
        
        </div> <!-- footer Widget -->
        
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
    
    <!--====== PART START ======-->


    <!--====== PART ENDS ======-->




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

