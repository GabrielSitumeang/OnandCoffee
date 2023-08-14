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
    <title>Tambah Jam Operasi</title>
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
        <h1>Tambah jam Operasi</h1>
      <center>
      <form method="POST" action="jamoperasi_proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label for="hariOperasi">Hari</label>
          <select class="custom-select" name="hariOperasi" id="hariOperasi" required>
            <option value="">---</option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
            <option value="Sabtu">Sabtu</option>
            <option value="Minggu">Minggu</option>
          </select>
        </div>
        <div>
          <label for="jamBuka">Jam Buka</label>
         <input step="2" type="time" id="jamBuka" name="jamBuka" required/>
        </div>
        <div>
          <label for="jamTutup">Jam Tutup</label>
         <input step="2" type="time" id="jamTutup" name="jamTutup" required/>
        </div>
        <div>
         <button type="submit">Simpan</button>
        </div>
        </section>
      </form>
  </body>
</html>