<?php  
session_start();
if( !isset($_SESSION["login"]) ){
	header("Location: login.php");
	exit;
}
include('config.php');
include('functions.php');
if(isset($_POST["idMasukan"]))
{
 $output = '';
 $query = "SELECT * FROM masukan_customer WHERE idMasukan = '".$_POST["idMasukan"]."'";
 $result = mysqli_query($koneksi, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
        if( $row["gambarCustomer"] ){
            $output .= '
            <tr>   
                <td colspan="2" class="align-middle" style="text-align: center;">
                    <img class="align-self-center" src="data:image;base64,' .base64_encode($row["gambarCustomer"]).'" style="width: 120px;">
                </td>
            </tr>
            <tr>  
                <td class="isi-konten" width="30%"><label>Tanggal Post</label></td>  
                <td class="masukan" width="70%">'. tanggalIndo($row['tanggalPost']) .'</td>  
            </tr>
            <tr>  
                <td class="isi-konten" width="30%"><label>Nama Pengunjung</label></td>  
                <td class="masukan" width="70%">'. $row["namaCustomer"] .'</td>  
            </tr>
            <tr>  
                <td class="isi-konten" width="30%"><label>Email Pengunjung</label></td>  
                <td class="masukan" width="70%">'. $row["emailCustomer"] .'</td>  
            </tr>
            <tr>  
                <td class="isi-konten" width="30%"><label>Masukan Pengunjung</label></td>  
                <td class="masukan" width="70%">'. $row["masukanCustomer"] .'</td>  
            </tr>
            ';
        }else {
            $output .= '
            <tr>   
                <td colspan="2" class="align-middle" style="text-align: center;">
                    <p class="align-self-center">Image not set</p>
                </td>
            </tr>
            <tr>  
                <td class="isi-konten" width="30%"><label>Tanggal Post</label></td>  
                <td class="masukan" width="70%">'. tanggalIndo($row['tanggalPost']) .'</td>  
            </tr>
            <tr>  
                <td class="isi-konten" width="30%"><label>Nama Pengunjung</label></td>  
                <td class="masukan" width="70%">'. $row["namaCustomer"] .'</td>  
            </tr>
            <tr>  
                <td class="isi-konten" width="30%"><label>Email Pengunjung</label></td>  
                <td class="masukan" width="70%">'. $row["emailCustomer"] .'</td>  
            </tr>
            <tr>  
                <td class="isi-konten" width="30%"><label>Masukan Pengunjung</label></td>  
                <td class="masukan" width="70%">'. $row["masukanCustomer"] .'</td>  
            </tr>
            ';
        }
    }
    $output .= '</table></div>';
    echo $output;
}

?>