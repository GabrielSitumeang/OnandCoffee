<?php
session_start();
if( !isset($_SESSION["login"]) ){
	header("Location: login.php");
	exit;
}
//memasukkan file config.php
include('config.php');
?>

<center>
    <h1 class="judul-admin">Kelola Jam Operasi </h1> </center>
<br>

<div class="container" style="margin-top:20px">
		<hr>
		<a href="index.php?page=tambah_jamoperasi"><button class='tombol btn btn-primary center-block float-right'>Tambahkan Jam Operasi</button></a>
		<center>	
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
      <thead>
        <tr class="text-right">
          <th> Hari </th>
          <th> Jam Buka </th>
          <th> Jam Tutup </th>
          <th> </th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM jamoperasi ORDER BY FIELD(hariOperasi, 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu')";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }


      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td class="align-middle isi-konten text-right"><?php echo $row['hariOperasi']; ?></td>
          <td class="align-middle isi-konten text-right"><?php echo $row['jamBuka']; ?></td>
          <td class="align-middle isi-konten text-right"><?php echo $row['jamTutup']; ?></td>
          <td class="text-center">
              <a class="tombol btn btn-sm btn btn-secondary" href="jamoperasi_edit.php?id=<?php echo $row['id']; ?>">Edit</a> 
              <a class="tombol btn btn-sm btn btn-danger" href="jamoperasi_proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
        </div>
    </div>
  </body>
</html>