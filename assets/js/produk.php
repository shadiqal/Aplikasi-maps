<?php
$lifetime=6000;
  session_set_cookie_params($lifetime);
session_start();
include "../php/dbConfig.php";

$idWarung = $_SESSION['idWarung'];
$keyword = mysqli_real_escape_string($dbConnect, $_GET['keyword']);



$mulai = 1;
$batas = 5;
if ($mulai > 1){
   $start = ($mulai * $batas) - $mulai;
 
}
else{
    $start = 0;
}
$output = '';


if ($keyword == ''){
    $output .= '<table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col"></th>
                                            
                                          </tr>
                                        </thead>
                                        <tbody> ';

						      			$con = "SELECT * FROM produk WHERE idProdukWarung='$idWarung' 
                                        LIMIT $start, $batas

						      			";
						      			$dapat = mysqli_query($dbConnect, $con);
						      			
						      			while ($row = mysqli_fetch_array($dapat)){
                                            $id = $row['idProduk'];
						      				$output .= '
                                          <tr>
						      			<td><img src="../../assets/gambar/warung/fotoProduk/'.$row['gambar'].'" alt="..." class="img-rounded" style="max-width: 20%;min-width: 20%;max-height: 50px;min-height: 50px;"> '.$row['namaProduk'].'</td>
                                            <td>Rp. '.$row['harga'].'</td>
                                            <td>
                                                                                           
                                             
                                            <td><button type="submit" onclick="send(\''.$id.'\')" placeholder="" id="idProduk" value="'.$row['idProduk'].'" class="btn btn-sm btn-success">Tambah</button></td>
                                                
                                           </tr>';}
        $output .= '</tbody></table><div class="text-center mb-2">
                                  <div class="test" style="">';
}
else{
 $output .= '<table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col"></th>
                                            
                                          </tr>
                                        </thead>
                                        <tbody> ';

						      			$con = "SELECT * FROM produk WHERE idProdukWarung='$idWarung' && 
						      			namaProduk LIKE '%$keyword%' or harga LIKE '%$keyword%'
                                        LIMIT $start, $batas

						      			";
						      			$dapat = mysqli_query($dbConnect, $con);
						      			
						      			while ($row = mysqli_fetch_array($dapat)){
                                            $id = $row['idProduk'];
						      				$output .= '
                                          <tr>
						      			<td><img src="../../assets/gambar/warung/fotoProduk/'.$row['gambar'].'" alt="..." class="img-rounded" style="max-width: 20%;min-width: 20%;max-height: 50px;min-height: 50px;"> '.$row['namaProduk'].'</td>
                                            <td>Rp. '.$row['harga'].'</td>
                                            <td>
                                                                                           
                                             
                                            <td><button type="submit" onclick="send(\''.$id.'\')" placeholder="" id="idProduk" value="'.$row['idProduk'].'" class="btn btn-sm btn-success">Tambah</button></td>
                                                
                                           </tr>';}
        $output .= '</tbody></table><div class="text-center mb-2">
                                  <div class="test" style="">';   
}


if ($keyword == ''){
     $con = "SELECT * FROM produk WHERE idProdukWarung='$idWarung' ";
}
else{
    $con = "SELECT * FROM produk WHERE idProdukWarung='$idWarung' && 
						      			namaProduk LIKE '%$keyword%' or harga LIKE '%$keyword%'";
}

                                        
                                        $dapat2 = mysqli_query($dbConnect, $con);
                                        $jumlah = mysqli_num_rows($dapat2);
$pages = ceil($jumlah/$batas); 
for ($i=1;$i<=$pages;$i++){
            
                                                        if ($i == $mulai){
                                                            $output .= '<a class="active" href="#" onclick="pages(\''.$i.'\')">'.$i.'</a>';
                                                        }else{
                                                            $output .= '<a  href="#" onclick="pages(\''.$i.'\')">'.$i.'</a>';
                                                        }                         
                                                          
                                                          
                                            ;
}

$output .= '</div></div>';

    echo $output;
						      		?>