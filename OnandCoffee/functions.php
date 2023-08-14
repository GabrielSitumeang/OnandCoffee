<?php
session_start();
if( !isset($_SESSION["login"]) ){
	header("Location: login.php");
	exit;
}
function tanggalIndo($waktu){
    $strt       = strtotime($waktu);
    $hariarr    = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
    $bulanarr   = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

    $hari       = $hariarr[date('w', $strt)];
    $bulan      = $bulanarr[date('n', $strt)-1];
    $tanggal    = date('j', $strt);
    $tahun      = date('Y', $strt);

    return "$hari, $tanggal $bulan $tahun";
}

?>