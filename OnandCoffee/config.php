<?php
//koneksi ke database mysql,
$koneksi = mysqli_connect("sql100.epizy.com", "epiz_31901152", "5w54vWVkXoN2tTU", "epiz_31901152_db_onandcoffee");

//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_error()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}

?>

