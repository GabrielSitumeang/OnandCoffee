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
    <h1 class="judul-admin">Kelola Masukan </h1> </center>
<br>

    <div class="container" style="margin-top:20px">
		  <hr>
		  <a href="index.php?page=rating_masukan"><button class='tombol btn btn-primary center-block float-right'>Lihat Rating</button></a>
		  <center>	
      <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr>
              <th height="50"> </th>
              <th> </th>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <?php
            // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
            $query = "SELECT * FROM masukan_customer ORDER BY tanggalPost DESC ";
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
                  <td class="align-middle"><?php
                  if ( $row['gambarCustomer'] != '' ){
                      echo '<center><img src="data:image;base64,' .base64_encode($row["gambarCustomer"]). ' "alt=Image style="width:100px"></center>' ; 
                  }
                  ?></td>
                  <td class="align-middle">
                      <a type="button" class="masukan" data-toggle="modal" name="detail" data-bs-target="<?= $row['idMasukan'];?>" data-popup="tooltip" data-placement="top" style="display:inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 40ch;">
                        <?= $row["masukanCustomer"]; ?>
                      </a>
                      <?php echo '<p class="customer">Oleh : ' .$row["namaCustomer"]; '</p>'?>
                  </td>
                  <td class="align-middle">
                    <button type="button" name="view_data" class=" view_data tombol btn btn-sm btn btn-light" id="<?php echo $row["idMasukan"]; ?>"><i class="fa fa-eye"></i>Detail</button>
                    <a class="tombol align-middle btn btn-danger btn-sm" href="masukan_proses_hapus.php?idMasukan=<?php echo $row['idMasukan']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                </td>
            </tr>
              
            <?php
              // $no++; //untuk nomor urut terus bertambah 1
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
    <h4 class="modal-title subjudul-admin" style="font-size:30px;">Detail Masukan</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    
   </div>
   <div class="modal-body" id="masukan_detail">
     
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
   url:"masukan_detail.php",
   method:"POST",
   data:{idMasukan:id},
   success:function(data){
    $('#masukan_detail').html(data);
    $('#dataModal').modal('show');
   }
  });
 });
</script>