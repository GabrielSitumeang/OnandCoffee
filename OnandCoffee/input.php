<?php
include 'fungsi.php';

$masukan = query("SELECT * FROM masukan_customer m 
INNER JOIN rating r ON m.ratingID = r.ratingID ORDER BY m.tanggalPost DESC, m.idMasukan DESC");

if( isset($_POST["kirim"]) ){
	// cek apakah data berhasil ditambahkan atau tidak
	if( tambah($_POST) > 0 ){
		echo "
			<script>
				alert('data berhasil ditambahkan!');
                document.location.href = 'input.php';
			</script>";
	} else{
		echo "
			<script>
				alert('data gagal ditambahkan!');
                document.location.href = 'input.php';
			</script>";
	}

}

?>

<!doctype html>
<html class="no-js" lang="id">

<head>
    <meta charset="id_ID.utf-8">
    
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

    <!--====== Ini CSS ======-->
    <link rel="stylesheet" href="p_asset/css/o_css.css">

     <!--====== Font ======-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500&family=Patrick+Hand&family=Roboto:wght@100&family=Rokkitt:wght@100;400&family=Sriracha&family=Wendy+One&display=swap" rel="stylesheet">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

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
                                    <li class="nav-item active">
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
    </section>

    <!--====== HEADER PART ENDS ======-->
    
    <!--====== COFFEE PART START ======-->
    
    <!--====== ABOUT PART START ======-->

    <section id="tampilMasukan" class="about_area pt-120 pb-130">
        <div class="container">
            <div class="baris">
                <div class="d-flex justify-content-between" style="padding:20px 10px">
                    <h3 class="judul-masukan">Masukan Pelanggan</h3>
                    <button type="button" name="masukan" id="tombolKirim" data-bs-toggle="modal" data-bs-target="#masukan" class="btn btn-dark">Tulis Masukan</button>
                    <!-- <a href="insert.php" class="btn btn-dark" role="button">Tulis Masukan</a>     -->
                </div> 
                <br>
                <div id="tabel-masukan">
                    <?php foreach( $masukan as $row) : ?>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex baris1">
                                <ul class="point" style="background-image: url{'/p_asset/images/poin.jpg'}; background-size:10px;">
                                    <li class="nama_kus" style="font-size:25px;"><?= $row["namaCustomer"]?></li>
                                </ul>
                            </div>
                            <div class="d-flex baris1">
                                <div class="p-2 tgl">
                                    <?php echo tanggalIndo($row["tanggalPost"]);
                                        // $date = date_create();
                                        // echo date_format($date, "l, d F Y");
                                    ?>
                                </div>
                                <div class="p-2">
                                    <?php
                                        echo '<img src="data:image;base64,' .base64_encode($row["gambarRating"]). ' "alt=Image style="width:30px">' ; 
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="baris2">
                                <p><?= $row["masukanCustomer"]?></p>
                            </div>
                            <div  class="baris3">
                                <?php if( $row["gambarCustomer"] ):
                                    echo '<img src="data:image;base64,' .base64_encode($row["gambarCustomer"]). ' "alt=Image style="width:70px">' ; 
                                endif ?> 
                            </div>
                        </div>
                        <br><br><br>
                    <?php endforeach; ?>
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


    <!--====== POP UP START ======-->
    <div id="masukan" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"  style="background-color: #D7C9BE;">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title judul">Masukan</h4>
                    <button class="close" data-bs-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body" id="detail-masukan">
                    <form action="" method="POST" id="insert_form" enctype="multipart/form-data">
                        <div class="rating">
                            <p class="pengantar">Seberapa puas kamu dengan Onand Coffee?</p>
                            <div class="radio" id="radio">
                                <div >
                                    <label class="form-check-label" for="ck1">
                                    <input type="radio" class="form-check-input" id="ck1" name="ck" value="1">
                                        <img src="p_asset/images/rating/satu.png" alt="#" class="img-fluid" >
                                    </label>
                                </div>
                                <div >
                                    <label class="form-check-label" for="ck2">
                                    <input type="radio" class="form-check-input" id="ck2" name="ck" value="2">
                                        <img src="p_asset/images/rating/dua.png" alt="#" class="img-fluid">
                                    </label>
                                </div>
                                <div >
                                    <label class="form-check-label" for="ck3">
                                    <input type="radio" class="form-check-input" id="ck3" name="ck" value="3">
                                        <img src="p_asset/images/rating/tiga.png" alt="#" class="img-fluid">
                                    </label>
                                </div>
                                <div>
                                    <label class="form-check-label" for="ck4">
                                    <input type="radio" class="form-check-input" id="ck4" name="ck" value="4">
                                        <img src="p_asset/images/rating/empat.png" alt="#" class="img-fluid">
                                    </label>
                                </div>
                                <div>
                                    <label class="form-check-label" for="ck5">
                                    <input type="radio" class="form-check-input" id="ck5" name="ck" checked value="5">
                                        <img src="p_asset/images/rating/lima.png" alt="#" class="img-fluid">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="input-data">
                            <div class="form-group">
                                <label for="nama-kostumer">Nama</label>
                                   <input type="text" class="form-control" id="nama-kostumer" name="namaCustomer" placeholder="Nama" required> 
                            </div>
                            <div class="form-group">
                                <label for="email-kostumer">Email</label>
                                <input type="email" class="form-control" id="email-kostumer" aria-describedby="emailHelp" name="emailCustomer" placeholder="Email" required>
                                <small id="emailHelp" class="form-text text-muted">Kami tidak akan membagikan email Anda kepada orang lain.</small>
                            </div>
                            <div class="form-group">
                                <label for="komen-kostumer">Masukan</label>
                                <textarea maxlength="200" class="form-control" id="komen-kustomer" onkeyup="textCounter(this,'counter',200);" rows="3" name="masukanCustomer" placeholder="Beritahu kami komentarmu :)" required></textarea>
                                <div class="span">
                                    <span id="rchars" class="karakter-remainder">200</span> / 200
                                </div>       
                            </div><br>
                            <div class="mb-3">
                                <label for="gambarCustomer" class="form-label"></label>
                                <input class="form-control" type="file" id="gambarCustomer" name="gambarCustomer">
                            </div><br>
                            <button name="kirim" id="kirim" type="submit" class="kirim btn btn-lg btn-block" style="background: #777777; border: 1px solid #777777; color:#fff; font-family: 'Wendy One'; letter-spacing: 0.28em;">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====== POP UP ENDS ======-->


    <!--====== Jquery js ======-->
    <script src="p_asset/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="p_asset/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="p_asset/js/popper.min.js"></script>
    <script src="p_asset/js/bootstrap.min.js"></script>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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
<script type="text/javascript">
    var maxLength = 200;
    $('textarea').keyup(function() {
    var textlen = maxLength - $(this).val().length;
    $('#rchars').text(textlen);
    });
</script>
</html>
