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
    <h1 class="judul-admin">Kelola Media Pesanan </h1> </center>
<br>

<div class="container" style="margin-top:20px">
		<hr>
		<a href="index.php?page=tambah_mediapesanan"><button class='tombol btn btn-primary center-block float-right'>Tambahkan Media Pesanan</button></a>
		<center>	
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
      <thead>
        <tr>
          <th> </th>
          <th>Media</th>
          <th> </th>
          <th> </th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM mediapesanan ORDER BY media DESC, id DESC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
       //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
        <?php if( $row["logoMedia"] ) :?>
          <td class=" text-center align-middle"><img src="gambar/<?php echo $row["logoMedia"]; ?>" style="width: 60px;"></td>
        <?php else : ?>
          <td class=" text-center align-middle"><p> not set</p></td>
        <?php endif; ?>
          <td class="align-middle isi-konten"><?php echo $row['media']; ?></td>
          <td class="align-middle isi-konten"><?php echo $row['isiMedia']; ?></td>
          <td class="align-middle">
              <a class="tombol btn btn-sm btn btn-secondary" href="mediapesanan_edit.php?id=<?php echo $row['id']; ?>">Edit</a> 
              <a class="tombol btn btn-sm btn btn-danger" href="mediapesanan_proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
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