<?php
session_start();
include 'dbConfig.php';
$output = '';
$idKonsumen = $_SESSION['id'];

$output .= '';

$sql = "SELECT * FROM pesanan WHERE idKonsumen = '$idKonsumen' GROUP BY idPesanan";
$query = mysqli_query($dbConnect, $sql);
$jumlah = mysqli_num_rows($query);
if ($jumlah == 0){
   $output .= '<div class="text-center"><br>
    <h5>Maaf tidak ada riwayat pemesanan anda</h5><br>
    </div>';
    echo $output;
}
else{
    
$output .= '<table class="table table-hover">
                                        <thead>
                                          <tr>
                                            
                                            <th scope="col">Nama Warung</th>
                                            <th scope="col">Tanggal Pemesanan</th>
                                              
                                            <th scope="col"></th>
                                            
                                          </tr>
                                        </thead>
                                        <tbody id="">
                                            
                                            
            ';
while ($row = mysqli_fetch_array($query)){
$idWarung = $row['idWarung'];
$cari = "SELECT * FROM warung WHERE id='$idWarung'";
$dapat = mysqli_query($dbConnect, $cari);
$data = mysqli_fetch_array($dapat);
$namaWarung = $data['namaWarung'];
    $output .= '<tr>
                                     
<td>'.$namaWarung.'</td>
<td>'.$row['tanggal'].'</td>


<td><button type="submit"  onclick="detail(\''.$row['idPesanan'].'\')" data-toggle="modal"  data-target="#centralModalLGInfoDemo" class="btn btn-sm btn-warning btn-rounded btn-sm my-0">Lihat</button></td>
</tr>';

}
$output .= '</tbody>
            </table>';
echo $output;
}


?>