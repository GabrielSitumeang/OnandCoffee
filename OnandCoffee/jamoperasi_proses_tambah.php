<?php
session_start();
if( !isset($_SESSION["login"]) ){
	header("Location: login.php");
	exit;
}
include 'config.php';

	// membuat variabel untuk menampung data dari form
  $hariOperasi        = $_POST['hariOperasi'];
  $jamBuka         = $_POST['jamBuka'];
  $jamTutup      = $_POST['jamTutup'];


  $cek = "SELECT * from jamoperasi WHERE hariOperasi = '$hariOperasi' ";
  $hub = mysqli_query($koneksi, $cek);
  if( mysqli_num_rows($hub) > 0 ){
    echo "<script>alert('Gagal menambah hari. Hari sudah tersedia');window.location='index.php?page=tampil_jamoperasi';</script>";
  }else{
// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO jamoperasi (hariOperasi,jamBuka, jamTutup) VALUES ('$hariOperasi','$jamBuka', '$jamTutup')";
$result = mysqli_query($koneksi, $query);
                // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php?page=tampil_jamoperasi';</script>";
                  }
    }
?>

 
