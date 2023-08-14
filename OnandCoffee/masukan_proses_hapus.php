<?php
session_start();
if( !isset($_SESSION["login"]) ){
	header("Location: login.php");
	exit;
}
include 'config.php';
$idMasukan = $_GET["idMasukan"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM masukan_customer WHERE idMasukan='$idMasukan' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='index.php?page=tampil_masukan';</script>";
}