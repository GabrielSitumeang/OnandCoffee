<?php
include('FUNCTIONS.php');
if(isset($_POST['id'])){
    $result = $conn->query("SELECT * FROM infoProduk WHERE id = '".$_POST['id']."'");
    $output = '';
    foreach($result as $row){
        if ( $row["gambarProduk"] ){
            $output .= '
        <p align="center"><img src="assets/images/'.$row["gambarProduk"].'" class="img-thumbnail" /></p>
        ';
        }
        else{
            $output .= '<p>Gambar tidak tersedia</p>';
        }
        
    }
    echo $output;
}

?>