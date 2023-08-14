<?php
session_start();
if( !isset($_SESSION["login"]) ){
	header("Location: login.php");
	exit;
}
include('config.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
$query = "SELECT r.namaRating, COUNT(m.ratingID) AS jumlah FROM masukan_customer m 
RIGHT JOIN rating r ON m.ratingID = r.ratingID GROUP BY r.ratingID";
$result = mysqli_query($koneksi, $query);

  while($row = mysqli_fetch_assoc($result))
  {
      $dataPoints[] = array("label"=> $row['namaRating'], "y"=> $row['jumlah']);
  }
	
?>

<div class="container p-2" id="chartContainer" style="height: 370px; width: 90%; margin-top:50px;"></div>
<div class="p-2"><br>
<h3 class="subjudul-admin" style="font-size:25px;"> Keterangan</h3>
<div width="30%"><table class="table table-sm table-borderless table-hover" style="width:40%;">
	<tr>
		<td  class="align-middle">
			<img src="assets/images/rating/satu.png" alt="satu" class="img-rate">
		</td>
		<td  class="align-middle">
			<p>&#10170</p>
		</td>
		<td  class="align-middle">
			<p class="karakter">Bintang Satu</p>
		</td>
	</tr>
	<tr>
		<td  class="align-middle">
			<img src="assets/images/rating/dua.png" alt="dua" class="img-rate">
		</td>
		<td  class="align-middle">
			<p>&#10170</p>
		</td>
		<td  class="align-middle">
			<p class="karakter">Bintang Dua</p>
		</td>
	</tr>
	<tr>
		<td class="align-middle">
			<img src="assets/images/rating/tiga.png" alt="tiga" class="img-rate">
		</td>
		<td class="align-middle">
			<p>&#10170</p>
		</td>
		<td class="align-middle">
			<p class="karakter">Bintang Tiga</p>
		</td>
	</tr>
	<tr>
		<td class="align-middle">
			<img src="assets/images/rating/empat.png" alt="empat" class="img-rate">
		</td>
		<td class="align-middle">
			<p>&#10170</p>
		</td>
		<td class="align-middle">
			<p class="karakter">Bintang Empat</p>
		</td>
	</tr>
	<tr>
		<td class="align-middle">
			<img src="assets/images/rating/lima.png" alt="lima" class="img-rate">
		</td>
		<td class="align-middle">
			<p>&#10170</p>
		</td>
		<td class="align-middle">
			<p class="karakter">Bintang Lima</p>
		</td>
	</tr>
</table>

</div>
</div>

 
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Persentasi Masukan Pengunjung Kedai Onand Coffee"
	},
	subtitles: [{
		text: ""
	}],
	data: [{
		
		type: "pie",
		yValueFormatString: "#,#0",
		
		indexLabel: "Bintang {label} - ( {y} )",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		
	}]
});
chart.render();
 
}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


</body>
</html> 