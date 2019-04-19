<?php

session_start();
include 'dbConfig.php';

//inisialisasi variabel
$idKonsumen = $_POST['idKonsumen'];
$idPesanan = $_SESSION['idPesanan'];
$output = '';
$jumlahTotal = 0;

//inisialisasi variabel

//ambil data pesanan dari database
$query = "SELECT * FROM pesanan WHERE idPesanan='$idPesanan' AND status='pesanDiteruskan'";
$sql = mysqli_query($dbConnect, $query);
$data = mysqli_fetch_array($sql);
$idWarung = $data['idWarung'];
$idKonsumen = $data['idKonsumen'];
$alamatTujuan = $data['alamatTujuan'];
$tanggal = $data['tanggal'];
$status = $data['status'];

//ambil data pesanan dari database
mysqli_data_seek( $sql, 0 );
//ambil data konsumen dari database
$cari = "SELECT nama FROM konsumen WHERE id='$idKonsumen'";
$dapat = mysqli_query($dbConnect, $cari);
$hasil = mysqli_fetch_array($dapat);
$nama = $hasil['nama'];
//ambil data konsumen dari database
mysqli_data_seek( $dapat, 0 );


$output .= ' <div class="card">
              <div class="card-body">
                <h4 class="card-title text-center">Pesanan</h4><hr>
                <h6 class="card-subtitle mb-2 text-muted">Atas Nama: '.$nama.'</h6>
                 <p class="card-text">Tanggal: '.$tanggal.'<br>
                 Alamat Tujuan:  '.$alamatTujuan.'</p>
                 <p class="card-text">Barang yang di beli: <br>';

while ($row = mysqli_fetch_assoc($sql)){
    //ambil data produk dari database
    $idProduk = $row['idProdukWarung'];
    $jumlah = $row['jumlah'];
    $l = "SELECT * FROM produk WHERE idProduk='$idProduk' AND idProdukWarung = '$idWarung'";
    $k = mysqli_query($dbConnect, $l);
    $hasil = mysqli_fetch_array($k);
    $namaProduk = $hasil['namaProduk'];
    $harga = $hasil['harga'];
    //ambil data produk dari database
    $output .= ' - '.$namaProduk.' : '.$jumlah.' <br>';
    $total = $jumlah * $harga;
    $jumlahTotal = $total + $jumlahTotal;
}

$jumlahTotal = $jumlahTotal + 1000;
$output .= '</p>
            <h6 class="card-subtitle mb-2 text-muted">Harga Total: '.$jumlahTotal.'</h6>
            <h6 class="card-subtitle mb-2 text-muted" id="statusPesanan">Status Pesanan: '.$status.'</h6>';
                

while ($row = mysqli_fetch_array($sql)){
    $output .= '<h6 class="card-subtitle mb-2 text-muted" id="statusPesanan">Status Pesanan: '.$row['status'].'</h6>';
}
echo $output;
?>