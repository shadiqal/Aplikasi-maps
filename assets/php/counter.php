<?php
session_start();
$total = 0;
$counter = 0;
$idWarung = $_POST['idWarung'];
if (isset($_SESSION['keranjang'][$idWarung])){
foreach ($_SESSION['keranjang'][$idWarung] as $idProduk => $jumlah){
    $jumlah = $_SESSION['keranjang'][$idWarung][$idProduk]['jumlah'];
    
    $total = $jumlah + $total;
}
}
$counter = $total;

echo $counter;
?>