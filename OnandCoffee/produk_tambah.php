<?php
session_start();
if( !isset($_SESSION["login"]) ){
	header("Location: login.php");
	exit;
}
  include('config.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Produk</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;

    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Produk</h1>
      <center>
      <form method="POST" action="produk_proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label for="namaProduk">Nama Produk</label>
          <input type="text" id="namaProduk" name="namaProduk" autofocus="" required="" />
        </div>
        <div>
          <label for="jenisProduk">Jenis Produk</label>
          <select class="custom-select" name="jenisProduk" id="jenisProduk" required>
            <option value="">---</option>
            <option value="Biji Kopi">Biji Kopi</option>
            <option value="Minuman Panas">Minuman Panas</option>
            <option value="Minuman Panas/Dingin">Minuman Panas/Dingin</option>
          </select>
        </div>
        <div>
          <label for="hargaProduk">Harga</label>
         <input id="hargaProduk" type="text" placeholder="contoh: 20K / 22K" name="hargaProduk" />
        </div>
        <div>
          <label>Deskripsi Singkat</label>
         <input maxlength="200" type="text" name="deskripsiProduk" />
        </div>
        <div>
          <label>Gambar Produk</label>
         <input type="file" name="gambarProduk"  />
        </div>
        <div>
         <button type="submit">Simpan</button>
        </div>
        </section>
      </form>
  </body>
</html>