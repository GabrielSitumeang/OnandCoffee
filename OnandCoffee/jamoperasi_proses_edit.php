<?php
session_start();
if( !isset($_SESSION["login"]) ){
	header("Location: login.php");
	exit;
}
// memanggil file koneksi.php untuk melakukan koneksi database
include 'config.php';

	// membuat variabel untuk menampung data dari form
  $id = $_POST['id'];
  $hariOperasi   = $_POST['hariOperasi'];
  $jamBuka   = $_POST['jamBuka'];
  $jamTutup     = $_POST['jamTutup'];
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE jamoperasi SET hariOperasi = '$hariOperasi', jamBuka = '$jamBuka', jamTutup = '$jamTutup'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='index.php?page=tampil_jamoperasi';</script>";
      }
?>