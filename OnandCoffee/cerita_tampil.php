<?php
session_start();
if( !isset($_SESSION["login"]) ){
	header("Location: login.php");
	exit;
}
//memasukkan file config.php
include('config.php');
include('functions.php');
?>

<center>
    <h1 class="judul-admin">Kelola Cerita </h1> </center>
<br>

<div class="container" style="margin-top:20px">
		<hr>
		<a href="index.php?page=tambah_cerita"><button class='tombol btn btn-primary center-block float-right'>Tambahkan Cerita</button></a>
		<center>	
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
      <thead>
        <tr style="background-color:#2D2E2E;">
          <th> </th>
          <th>Judul Cerita</th>
          <th> </th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM cerita ORDER BY id DESC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td class="align-middle" style="text-align: center;">
          <?php if ( $row['gambarcerita'] ) : ?>
          <img src="gambar/<?php echo $row['gambarcerita']; ?>" style="width: 120px;"></td>
          <?php else : ?>
            <p>not set</p>
          <?php endif; ?>
          <td class="isi-konten align-middle">
            <a style="font-size:18px; display:inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 30ch;"><?php echo $row['judulcerita']; ?></a>
            <p style="font-size:13px; color:#8D7461;">Diposting pada <?php echo tanggalIndo($row['tanggalpost']); ?><p>
          </td>
          <td class="align-middle text-right">
              <button type="button" name="view_data" class=" view_data tombol btn btn-sm btn btn-light" id="<?php echo $row["id"]; ?>"><i class="fa fa-eye"></i>Detail</button>
              <a class="tombol btn btn-sm btn btn-secondary" href="cerita_edit.php?id=<?php echo $row['id']; ?>">Edit</a> 
              <a class="tombol btn btn-sm btn btn-danger" href="cerita_proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
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
    <h4 class="modal-title subjudul-admin" style="font-size:30px;">Detail Cerita</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    
   </div>
   <div class="modal-body" id="cerita_detail">
     
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default tombol" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<script type="text/javascript">
 $(document).on('click', '.view_data', function(){
  var id = $(this).attr("id");
  $.ajax({
   url:"cerita_detail.php",
   method:"POST",
   data:{id:id},
   success:function(data){
    $('#cerita_detail').html(data);
    $('#dataModal').modal('show');
   }
  });
 });
</script>