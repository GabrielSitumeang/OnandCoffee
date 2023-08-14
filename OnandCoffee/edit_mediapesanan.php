<?php include
session_start();
if( !isset($_SESSION["login"]) ){
	header("Location: login.php");
	exit;
}
('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['Media_Pesanan'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$Media_Pesanan = $_GET['Media_Pesanan'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM media_pesanan WHERE Media_Pesanan='$Media_Pesanan'") or die(mysqli_error($koneksi));

			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>

		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$Media_Pesanan	= $_POST['Media_Pesanan'];
			$Kategori	= $_POST['Kategori'];

			$sql = mysqli_query($koneksi, "UPDATE media_pesanan SET Media_Pesanan='$Media_Pesanan' WHERE Media_Pesanan='$Media_Pesanan'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=tampil_mhs";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="index.php?page=edit_mhs&Nim=<?php echo $Media_Pesanan; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Media Pesanan</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Media_Pesanan" class="form-control" size="4" value="<?php echo $data['Media_Pesanan']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Kategori</label>
				<div class="col-md-6 col-sm-6">
					<select name="Kategori" class="form-control" required>
						<option value="">Pilih Kategori</option>
						<option value="Whatsapp" <?php if($data['Kategori'] == 'Whatsapp'){ echo 'selected'; } ?>>Whatsapp</option>
						<option value="Instagram" <?php if($data['Kategori'] == 'Instagram'){ echo 'selected'; } ?>>Instagram</option>
						<option value="Gmail" <?php if($data['Kategori'] == 'Gmail'){ echo 'selected'; } ?>>Gmail</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=tampil_mhs" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
