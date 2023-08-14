<?php
session_start();
if( !isset($_SESSION["login"]) ){
	header("Location: login.php");
	exit;
}
?>
<img src="assets/images/logo.png" width="100px" height="90px" align="right" /> <br>
<center><br>
<font Size="6" face="Comfortaa">Selamat Datang Admin!</font> <br>
<font class="subjudul-admin" style="color:#545555;" Size="4">Lakukan pengeditan terhadap Website Kedai Onand Coffee</font>
</center><br><br>

<center>
<div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="well">
                        <center>
                        <i class="fa fa-coffee" style="font-size:48px;"></i> <br>
                        <button type="button" class="tombol align-middle btn btn-dark btn-md" style="background-color:#2D2E2E;"onclick="window.location.href='index.php?page=tampil_produk'">Produk</button>
                        </center>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="well">
                    <center>
                    <i class="fa fa-quote-left" aria-hidden="true" style="font-size:48px;"></i> <br>
                        <button type="button" class="tombol align-middle btn btn-dark btn-md" style="background-color:#2D2E2E;" onclick="window.location.href='index.php?page=tampil_cerita'">Cerita</button>
                        </center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="well">
                        <center>
                        <i class="fa fa-star-o" aria-hidden="true" style="font-size:48px"></i> <br>
                        <button type="button" class="tombol align-middle btn btn-dark btn-md" style="background-color:#2D2E2E;" onclick="window.location.href='index.php?page=tampil_masukan'">Masukan</button>
                        </center>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well">
                    <center>
                    <i class="fa fa-calendar-o" style="font-size:48px"></i> <br>
                        <button type="button" class="tombol align-middle btn btn-dark btn-md" style="background-color:#2D2E2E;" onclick="window.location.href='index.php?page=tampil_jamoperasi'">Jam Operasi</button>
                        </center>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well">
                    <center>
                    <i class="fa fa-code-fork" style="font-size:48px" ></i> <br>
                        <button type="button" class="tombol align-middle btn btn-dark btn-md" style="background-color:#2D2E2E;" onclick="window.location.href='index.php?page=tampil_mediapesanan'" >Media Pesanan</button>
                        </center>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</center>
