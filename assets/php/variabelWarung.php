<?php


include 'dbConfig.php';

    $idWarung = $_GET['idWarung'];
$_SESSION['idWarung'] = $_GET['idWarung'];

$cari = "SELECT * FROM warung WHERE id = '$idWarung'";
$cari2 = mysqli_query($dbConnect, $cari);
$data = mysqli_fetch_array($cari2);
$idWarung = $data['id'];
$namaWarung = $data['namaWarung'];
$alamat = $data['alamat'];
$noTelp = $data['noTelp'];
$fotoWarung = $data['fotoWarung']; 
$jamBuka = $data['jamBuka'];
$kategori = $data['kategori'];


?>