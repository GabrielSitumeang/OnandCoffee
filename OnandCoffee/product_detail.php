<?php  
include('fungsi.php');
if(isset($_POST["id"]))
{
 $output = '';
 $query = "SELECT * FROM infoproduk WHERE id = '".$_POST["id"]."'";
 $result = mysqli_query($conn, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
        if( $row["gambarProduk"] ){
            $output .= '
            <tr>   
                <td colspan="2" class="align-middle" style="text-align: center;">
                    <img class="align-self-center" src="gambar/'. $row["gambarProduk"] .'" style="width: 120px;">
                </td>
            </tr>
            <tr>  
                <td class="isi-konten" width="30%"><label>Nama Produk</label></td>  
                <td class="masukan" width="70%">'.$row["namaProduk"] .'</td>  
            </tr>
            <tr>  
                <td class="isi-konten" width="30%"><label>Jenis Produk</label></td>  
                <td class="masukan" width="70%">'. $row["jenisProduk"] .'</td>  
            </tr>
            <tr>  
                <td class="isi-konten" width="30%"><label>Harga Produk</label></td>  
                <td class="masukan" width="70%">'. $row["hargaProduk"] .'</td>  
            </tr>
            <tr>  
                <td class="isi-konten" width="30%"><label>Deskripsi Singkat Produk</label></td>  
                <td class="masukan" width="70%">'. $row["deskripsiProduk"] .'</td>  
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
                <td class="isi-konten" width="30%"><label>Nama Produk</label></td>  
                <td class="masukan" width="70%">'.$row["namaProduk"] .'</td>  
            </tr>
            <tr>  
                <td class="isi-konten" width="30%"><label>Jenis Produk</label></td>  
                <td class="masukan" width="70%">'. $row["jenisProduk"] .'</td>  
            </tr>
            <tr>  
                <td class="isi-konten" width="30%"><label>Harga Produk</label></td>  
                <td class="masukan" width="70%">'. $row["hargaProduk"] .'</td>  
            </tr>
            <tr>  
                <td class="isi-konten" width="30%"><label>Deskripsi Singkat Produk</label></td>  
                <td class="masukan" width="70%">'. $row["deskripsiProduk"] .'</td>  
            </tr>
            ';
        }
    }
    $output .= '</table></div>';
    echo $output;
}
?>