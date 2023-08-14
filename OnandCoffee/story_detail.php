<?php  
include('fungsi.php');
if(isset($_POST["id"]))
{
 $output = '';
 $query = "SELECT * FROM cerita WHERE id = '".$_POST["id"]."'";
 $result = mysqli_query($conn, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
        if( $row["gambarcerita"] ){
            $output .= '
            <tr>   
                <td class="masukan" width="70%">'. $row["judulcerita"] .'</td>  
            </tr>
            <tr> 
                    <center><img class="align-self-center" src="gambar/'. $row["gambarcerita"] .'" style="width: 120px;"></center>
                </td>
            </tr>
            <tr>    
                <td class="masukan" width="70%">'. tanggalIndo($row['tanggalpost']) .'</td>  
            </tr>
            
            <tr>  
                <td class="masukan" width="70%">'. $row["deskripsicerita"] .'</td>  
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
                <td class="masukan" width="70%">'.tanggalIndo($row['tanggalpost']) .'</td>  
            </tr>
            <tr>  
                <td class="isi-konten" width="30%"><label>Judul Cerita</label></td>  
                <td class="masukan" width="70%">'. $row["judulcerita"] .'</td>  
            </tr>
            <tr>  
                <td class="isi-konten" width="30%"><label>Deskripsi Cerita</label></td>  
                <td class="masukan" width="70%">'. $row["deskripsicerita"] .'</td>  
            </tr>
            ';
        }
    }
    $output .= '</table></div>';
    echo $output;
}
?>