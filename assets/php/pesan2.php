<?php 
// mengaktifkan session php
session_start();
date_default_timezone_set('Asia/Jakarta');
// menghubungkan dengan koneksi
include 'dbConfig.php';
$totalHarga = 0;
$isiPesan = "";
$idWarung = $_POST['idWarung'];
$idKonsumen = $_POST['idKonsumen'];
$alamat = $_POST['alamatTujuan'];
$noHP = $_POST['noHP'];
$tanggal = date("d/m/Y h:i:s");


//ID Pesanan
$cari = "SELECT max(idPesanan) as id from pesanan";
$hasilCari = mysqli_query($dbConnect, $cari);
$id = mysqli_fetch_array($hasilCari);
$idPesanan = $id['id'];

$noUrut = (int) substr($idPesanan, 3, 3);
$noUrut++;
$char = "IDP";
$idPesan = $char . sprintf("%3s", $noUrut);
//ID Pesanan


$query = "SELECT * FROM warung WHERE id='$idWarung'";
$k = mysqli_query($dbConnect, $query);
$data = mysqli_fetch_array($k);
$noHpWarung = $data['noTelp'];


$sql = "SELECT * FROM konsumen WHERE id = '$idKonsumen'";
    $hasil = mysqli_query($dbConnect, $sql);
    $data = mysqli_fetch_array($hasil);
    $noTelepon = $data['noHP'];
    $nama = $data['nama'];
    $idPesanan = $data['idPesanan'];

if ($noHP == ''){
    $noHP = $noTelepon;
}



//Inisiasi Id Pesanan


//Inisiasi Id Pesanan



 $isiPesan .= 
'Warung Finder

Pesanan atas nama : '.$nama.'
Tanggal : '.$tanggal.'
alamat : '.$alamat.'
No Telepon : '.$noHP.'

Pesanan :  
';


 foreach ($_SESSION['keranjang'][$idWarung] as $idProduk => $jumlah){ 
    
$sql = "SELECT * FROM produk WHERE idProduk = '$idProduk'";
$hasil = mysqli_query($dbConnect, $sql);
                                              
 while ($row = mysqli_fetch_array($hasil)){

//Masukkan pesanan kedalam database
$cari = "SELECT max(kodePesanan) as id from pesanan";
$hasilCari = mysqli_query($dbConnect, $cari);
$id = mysqli_fetch_array($hasilCari);
$idPesanan = $id['id'];

$noUrut = (int) substr($idPesanan, 3, 3);
$noUrut++;
$char = "KOD";
$kodePesanan = $char . sprintf("%3s", $noUrut);

$hargaProduk = $row['harga'];
$jumlah = $_SESSION['keranjang'][$idWarung][$idProduk]['jumlah'];
$sql="INSERT INTO pesanan (idPesanan, kodePesanan, tanggal, alamatTujuan, idKonsumen, idWarung, idProdukWarung, jumlah, harga, status) VALUES ('$idPesan', '$kodePesanan', '$tanggal', '$alamat', '$idKonsumen','$idWarung', '$idProduk', '$jumlah', '$hargaProduk', 'pesanDiteruskan')";
if(mysqli_query($dbConnect, $sql)){
    
}
//Masukkan pesanan kedalam database
     
$harga = $row['harga'] * $_SESSION['keranjang'][$idWarung][$idProduk]['jumlah'];      
$isiPesan .= 
'
'.$row['namaProduk'].', harga: '.$row['harga'].', Jumlah: '.$_SESSION['keranjang'][$idWarung][$idProduk]['jumlah'].' ';

 }

    $totalHarga = $totalHarga + $harga;
   
}
$totalHarga = $totalHarga + 1000;
$isiPesan .= 
'
Ongkos Kirim : 1000
Total Harga: '.$totalHarga;



$email_api	= urlencode("email api kamu");
$passkey_api	= urlencode("password api kamu");
$no_hp_tujuan	= urlencode($noHpWarung);
$isi_pesan	= urlencode($isiPesan);

$url	= "https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=".$email_api."&passkey=".$passkey_api."&no_tujuan=".$no_hp_tujuan."&pesan=".$isi_pesan;
$result = file_get_contents($url);
$data	= explode("~~~", $result);

$_SESSION['idPesanan'] = $idPesan;
echo $idPesanan;









?>