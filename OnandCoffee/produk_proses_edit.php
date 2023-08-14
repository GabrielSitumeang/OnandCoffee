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
  $namaProduk   = $_POST['namaProduk'];
  $jenisProduk = $_POST['jenisProduk'];
  $hargaProduk   = $_POST['hargaProduk'];
  $deskripsiProduk     = $_POST['deskripsiProduk'];
  $gambarProduk = $_FILES['gambarProduk']['name'];
  //cek dulu jika merubah gambar produk jalankan coding ini
  if($gambarProduk != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambarProduk); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambarProduk']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambarProduk; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE infoproduk SET jenisProduk = '$jenisProduk', namaProduk = '$namaProduk', hargaProduk = '$hargaProduk', deskripsiProduk = '$deskripsiProduk', gambarProduk = '$nama_gambar_baru'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='index.php?page=tampil_produk';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='index.php?page=tambah_produk';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE infoproduk SET jenisProduk = '$jenisProduk', namaProduk = '$namaProduk', hargaProduk = '$hargaProduk', deskripsiProduk = '$deskripsiProduk'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='index.php?page=tampil_produk';</script>";
      }
    }