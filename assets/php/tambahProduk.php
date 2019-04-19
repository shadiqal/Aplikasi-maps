<?php

include "dbConfig.php";

$query = "SELECT max(idProduk) as id FROM produk";
$hasil = mysqli_query($dbConnect,$query);
$data = mysqli_fetch_array($hasil);
$idUser = $data['id'];
$noUrut = (int) substr($idUser, 3, 3);
$noUrut++;
$char = "pro";
$kodeProduk = $char . sprintf("%03s", $noUrut);

$namaProduk = $_POST['namaProduk'];
$harga = $_POST['harga'];
$namaGambar = $_FILES['gambarProduk']['name'];
$idWarung = $_POST['idWarungku'];
$kategori = $_POST['kategori'];

move_uploaded_file($_FILES['gambarProduk']['tmp_name'], "../gambar/warung/fotoProduk/".$_FILES['gambarProduk']['name']);

$sql = "INSERT INTO produk (idProduk, idProdukWarung, kategori, namaProduk, harga, gambar) VALUES ('$kodeProduk', '$idWarung', '$kategori', '$namaProduk', '$harga', '$namaGambar')";

if (mysqli_query($dbConnect, $sql)){
	header('location: ../../mitra/page/dashboard.php');
}

?>