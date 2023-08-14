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
    <h1 class="judul-admin">Kelola Produk </h1> </center>
<br>

<div class="container" style="margin-top:20px">
		<hr>
		<a href="index.php?page=tambah_produk" ><button class='tombol btn btn-primary center-block float-right'>Tambahkan Produk</button></a>
		<center>	
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
      <thead>
        <tr class="align-middle">
          <th><center>Gambar Produk</center></th>
          <th>Nama Produk</th>
          <th>Jenis Produk</th>
          <th>Harga</th>
          <th></th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM infoproduk ORDER BY jenisProduk, id DESC ";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

     
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td class="align-middle"style="text-align: center;">
          <?php if( $row['gambarProduk'] ){?>
            <img src="gambar/<?php echo $row['gambarProduk']; ?>" style="width: 120px;"></td>
          <?php }else {?>
            <p>not set</p>
          <?php } ?>
          <td class="isi-konten align-middle"><?php echo $row['namaProduk']; ?></td>
          <td class="isi-konten align-middle"><?= $row['jenisProduk'];?></td>
          <td class="isi-konten align-middle"><?php echo $row['hargaProduk']; ?></td>
          <td class="text-right">
              <button type="button" name="view_data" class=" view_data tombol btn btn-sm btn btn-light" id="<?php echo $row["id"]; ?>"><i class="fa fa-eye"></i>Detail</button> 
              <a class="tombol btn btn-sm btn btn-secondary" href="produk_edit.php?id=<?php echo $row['id']; ?>">Edit</a> 
              <a class="tombol btn btn-danger btn-sm" href="produk_proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
      }
      ?>
    </tbody>
    </table>
        </div>
    </div>
  </body>
</html>

<div id="dataModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content" style="background-color: #D7C9BE; ">
   <div class="modal-header">
    <h4 class="modal-title subjudul-admin" style="font-size:30px;">Detail Produk</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    
   </div>
   <div class="modal-body" id="produk_detail">
     
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default tombol" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<script type="text/javascript">
  //Begin Tampil Detail Karyawan
 $(document).on('click', '.view_data', function(){
  var id = $(this).attr("id");
  $.ajax({
   url:"produk_detail.php",
   method:"POST",
   data:{id:id},
   success:function(data){
    $('#produk_detail').html(data);
    $('#dataModal').modal('show');
   }
  });
 });
</script>