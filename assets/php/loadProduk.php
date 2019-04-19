    
                                      <?php
include "dbConfig.php";
$idWarung = $_POST['idWarung'];
$mulai = $_POST['mulai'];

 
$batas = 5;
if ($mulai > 1){
   $start = ($mulai - 1) * $batas;
 
}
else{
    $start = 1;
}


$page = (isset($_POST['mulai']))? $_POST['mulai'] : 1;
          
          $limit = 5; // Jumlah data per halamannya
          
          // Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
          $limit_start = ($page - 1) * $limit;
          
          
$output = '';



$output .= '<table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col"></th>
                                            
                                          </tr>
                                        </thead>
                                        <tbody> ';

                                        $con = "SELECT * FROM produk WHERE idProdukWarung='$idWarung'  LIMIT $limit_start, $batas";
                                        $dapat = mysqli_query($dbConnect, $con);
                                    
                                        
                                        while ($row = mysqli_fetch_array($dapat)){
                                        $id = "";  
                                        $id = $row['idProduk'];
                                         $output .= '
                                          <tr>
						      			<td><img src="../../assets/gambar/warung/fotoProduk/'.$row['gambar'].'" alt="..." class="img-rounded" style="max-width: 20%;min-width: 20%;max-height: 50px;min-height: 50px;"> '.$row['namaProduk'].'</td>
                                            <td>Rp. '.$row['harga'].'</td>
                                            <td>
                                                                                           
                                             
                                            <td><button type="submit" onclick="send(\''.$id.'\')" placeholder="" id="idProduk" value="'.$row['idProduk'].'" class="btn btn-sm btn-outline-success">Tambah</button></td>
                                                
                                           </tr>';
                                        } 

$output .= '</tbody>
                                          
                                      </table>
                                      <div class="text-center mb-2">
                                  <div class="test" style="">
                                      ';

 $con = "SELECT * FROM produk WHERE idProdukWarung='$idWarung'";
                                        $dapat2 = mysqli_query($dbConnect, $con);
                                        $jumlah = mysqli_num_rows($dapat2);
$pages = ceil($jumlah/$batas); 
for ($i=1;$i<=$pages;$i++){
            
                                                        if ($i == $mulai){
                                                            $output .= '<a class="active" href="#" onclick="pages(\''.$i.'\')">'.$i.'</a>';
                                                        }else{
                                                            $output .= '<a  onclick="pages(\''.$i.'\')">'.$i.'</a>';
                                                        }                         
                                                          
                                                          
                                            ;
}

$output .= '</div></div>';



echo $output;
?>