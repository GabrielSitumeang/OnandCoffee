<?php

// koneksi ke databse
$conn = mysqli_connect("sql100.epizy.com", "epiz_31901152", "5w54vWVkXoN2tTU", "epiz_31901152_db_onandcoffee");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
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

function tambah($data){
	global $conn;

	// ambil data dari tiap elemen dalam form
	$namaCustomer = htmlspecialchars($data["namaCustomer"]);
    $emailCustomer = htmlspecialchars($data["emailCustomer"]);
    $masukanCustomer = htmlspecialchars($data["masukanCustomer"]);
    date_default_timezone_set('Asia/Jakarta');
	$tanggalPost=date("Y-m-d");
    // $date->tanggalPost;

    // gambar

    // $gambar = upload();
    $ratingID = $data["ck"];

    $namaFile = $_FILES['gambarCustomer']['name'];

    // Periksa ada tidaknya file gambar
    if( $namaFile != "" ){

        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensi= explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensi));
        $tmpName = $_FILES['gambarCustomer']['tmp_name'];

        // periksa ekstensiGamabr 
        if( in_array($ekstensiGambar, $ekstensiGambarValid) === true)
        {
            $namaFileBaru = uniqid() .'.'. $ekstensiGambar;
            $gambar = addslashes(file_get_contents($_FILES['gambarCustomer']['tmp_name']));
            // $namaFileBaru .= '.';
            // $namaFileBaru .= $ekstensiGambar;
            // $namaGambarBaru = base64_encode(file_get_contents(addslashes($namaGambarBaru)));
            $ukuranFile = $_FILES['gambarCustomer']['size'];
            if( $ukuranFile <= 2100000 ){
                $query = "INSERT INTO masukan_customer VALUES
				('', '$namaCustomer', '$emailCustomer', '$masukanCustomer', '$tanggalPost', '$gambar', '1', '$ratingID')
				";
                mysqli_query($conn, $query);  

	            return mysqli_affected_rows($conn);
            } else
            {
            echo "<script>
                alert('Ukuran gambar terlalu besar! Batas ukuran 3MB');
            </script>";
                return false;
            }

        } else{
            echo"<script>
                alert('File yang anda upload bukan gambar!<br>Upload file dalam bentuk .jpg, .jpeg, atau .png');
            </script>";
            return false;
        }
         
    } else{
        $query = "INSERT INTO masukan_customer VALUES
				('', '$namaCustomer', '$emailCustomer', '$masukanCustomer', '$tanggalPost', '$namaFile', '1', '$ratingID')
				";
        mysqli_query($conn, $query);  

	    return mysqli_affected_rows($conn);
    }

	// query insert data

        

}

// if(isset($_POST['id'])){
//     $result = $conn->query("SELECT * FROM infoProduk WHERE id = '".$_POST['id']."'");
//     $output = '';
//     foreach($result as $row){
//         if ( $row["gambarProduk"] ){
//             $output .= '
//         <p align="center"><img src="assets/images/'.$row["gambarProduk"].'" class="img-thumbnail" /></p>
//         ';
//         }
//         else{
//             $output .= '<p>Gambar tidak tersedia</p>';
//         }
        
//     }
    
//     echo $output;
// }


?>

