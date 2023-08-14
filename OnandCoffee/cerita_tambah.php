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
    <title>Tambah</title>
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
      width: 100%;
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
        <h1>Tambah Cerita</h1>
      <center>
      <form method="POST" action="cerita_proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label for="judulcerita">Judul Cerita</label>
          <input type="text" id="judulcerita" name="judulcerita" autofocus="" required />
        </div>
        <div>
          <label for="deskripsicerita">Deskripsi</label>
          <textarea maxlength="700" class="form-control" id="deskripsicerita" rows="5" name="deskripsicerita" placeholder="maks 700 karakter" required></textarea>
        </div>
        <div>
          <label>Gambar Produk</label>
         <input type="file" name="gambarcerita" required="" />
        </div>
        <div>
         <button type="submit">Simpan</button>
        </div>
        </section>
      </form>
  </body>
</html>