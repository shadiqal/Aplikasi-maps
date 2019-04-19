<?php
date_default_timezone_set('Asia/Jakarta');
session_start();
include "dbConfig.php";
$no = 1;
$idWarung = $_POST['idWarung'];

$harga = 0;
$totalHarga = 0;
$data = '';
if (isset($_SESSION['keranjang'][$idWarung])){
    
    $data .= ' <div class="table-responsive" >
        <div class="">
        <table class="table">
                                        <thead>
                                          <tr>
                                            
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Harga</th>
                                              <th scope="col">Jumlah</th>
                                            <th scope="col"></th>
                                            
                                          </tr>
                                        </thead>
                                        <tbody id="keranjang">
    ';
                                         
                                        
                                     
    foreach ($_SESSION['keranjang'][$idWarung] as $idProduk => $jumlah){ 
    
    $sql = "SELECT * FROM produk WHERE idProduk = '$idProduk'";
                                                $hasil = mysqli_query($dbConnect, $sql);
                                              
                                                while ($row = mysqli_fetch_array($hasil)){
                                                    $harga = $row['harga'] * $_SESSION['keranjang'][$idWarung][$idProduk]['jumlah']; 
                                                $data .= '
                                                  <tr>
                                             
                                                    <td>'.$row['namaProduk'].'</td>
                                                    <td>'.$row['harga'].'</td>
                                                    <td>'.$_SESSION['keranjang'][$idWarung][$idProduk]['jumlah'].'</td>

                                                    <td><button type="submit"  onclick="hapus(\''.$idProduk.'\')" id="hapus" value="'.$row['idProduk'].'" class="btn btn-sm btn-danger btn-rounded btn-sm my-0">Hapus</button></td>

                                                   </tr>';
                                              }
  $no= $no + 1;
    $totalHarga = $totalHarga + $harga ;
   
}
    $data .= '</tbody>
                                      </table>
                                      
                                  </div></div><hr>
                                  <div class="modal-body"><div class="container row">
                                      <div class="col-md-12">
                                      <div class="text-right mb-3">
                                        <h6>Ongkos kirim: Rp. 1000<br><hr>
                                        Harga Total Belanja : <strong>Rp. '.number_format($totalHarga+1000).' </strong></h6></div>
                                      </div></div></div><br>
                                      <div class="container">
                                      <a  id ="pesan" class="badge badge-danger"></a>
                                      <a  id ="verif" class="badge badge-info" href="verifikasi.php"></a></div>
                        <div class="text-center mb-3">
                                              <button type="button" id="pesanBtn" onclick="pesan(\''.$idWarung.'\')" class="btn btn-md btn-info  btn-rounded z-depth-1a">Lanjutkan checkout</button>
                                            </div>';
    
    echo $data;
  
}
    else{
    $data .= '<div class="modal-body"><td>Maaf belum memasukkan data belanja</td></div>';
    echo $data;
}

 
   
?>


                                       
