<?php
include 'fungsi.php';

$cerita = query("SELECT * FROM cerita ORDER BY tanggalPost DESC");

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
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@600&family=Comfortaa:wght@600&family=Lato:wght@700&family=Open+Sans:ital,wght@0,700;1,600&family=Rammetto+One&family=Rokkitt:wght@400;500;600&family=Sonsie+One&family=Sriracha&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <style>
        .produk_judul hr{
            border:0;
            border-top: 2px solid rgba(73, 27, 10, 0.75);
        }
        .hot-cold{
            font-family: 'Sonsie One';
            font-weight: 900;
            font-size: 17px;
            font-style: italic;
        }
    </style>

</head>

<body>
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
                                    <li class="nav-item active">
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
    </section>

    <!--====== HEADER PART ENDS ======-->
    
    <!--====== COFFEE PART START ======-->
    
    <!--====== ABOUT PART START ======-->

    <section id="about" class="about_area pt-90 pb-130">
    <div class="slider_content"></div>
        <div class="container">
        <div class="baris">
        <?php
        foreach($cerita as $row){
        ?>
        <div class="card mb-3" >
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="gambar/<?= $row['gambarcerita']; ?>" class="img-fluid rounded-start" alt="image">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title"><?= $row['judulcerita']; ?></h5>
                    <p class="card-text">Diposting pada <?= tanggalIndo($row['tanggalpost']); ?></p>
                    <br>
                    <p class="card-text" style="display:inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 50ch;"><?= $row['deskripsicerita']; ?></p>
                    <br>
                    <button type="button" name="view_data" class=" view_data tombol btn btn-sm btn btn-light" id="<?php echo $row["id"]; ?>">Selengkapnya...</button>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>      
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


    <div id="dataModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #D7C9BE; ">
            <div class="modal-header">
                <h4 class="modal-title subjudul-admin" style="font-size:30px;">Detail Cerita</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body" id="story_detail">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default tombol" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).on('click', '.view_data', function(){
        var id = $(this).attr("id");
            $.ajax({
                url:"story_detail.php",
                method:"POST",
                data:{id:id},
                success:function(data){
                    $('#story_detail').html(data);
                    $('#dataModal').modal('show');
                }
            });
        });
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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