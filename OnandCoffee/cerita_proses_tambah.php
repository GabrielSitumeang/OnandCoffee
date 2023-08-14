<?php
session_start();
if( !isset($_SESSION["login"]) ){
	header("Location: login.php");
	exit;
}
include 'config.php';

	// membuat variabel untuk menampung data dari form
  $judulcerita          = htmlspecialchars($_POST['judulcerita']);
  $deskripsicerita      = htmlspecialchars($_POST['deskripsicerita']);
  $gambarcerita         = $_FILES['gambarcerita']['name'];
  date_default_timezone_set('Asia/Jakarta');
	$tanggalPost=date("Y-m-d");


//cek dulu jika ada gambar produk jalankan coding ini
if($gambarcerita != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambarcerita); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambarcerita']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambarcerita; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO cerita (judulcerita, deskripsicerita, gambarcerita, tanggalpost) VALUES ('$judulcerita', '$deskripsicerita', '$nama_gambar_baru', '$tanggalPost')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php?page=tampil_cerita';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='index.php?page=tambah_cerita';</script>";
            }
} else {
   $query = "INSERT INTO cerita (judulcerita, deskripsicerita, gambar_produk, tanggalpost) VALUES ('$judulcerita', '$deskripsicerita', null, '$tanggalPost')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php?page=tampil_cerita';</script>";
                  }
}

 
