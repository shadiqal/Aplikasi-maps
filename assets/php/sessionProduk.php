<?php

session_start();



$idProduk = $_POST['idProduk'];
$idWarung = $_POST['idWarung'];

$output = '';

if (isset($_SESSION['keranjang'][$idWarung][$idProduk])){
  
    $_SESSION['keranjang'][$idWarung][$idProduk]['jumlah'] = $_SESSION['keranjang'][$idWarung][$idProduk]['jumlah'] + 1;
}
else {
    
    $_SESSION['keranjang'][$idWarung][$idProduk]['jumlah'] = 1;
}

$output .= "<pre>";
$output .= print_r($_SESSION['keranjang']);
$output .= "</pre>";
echo $output;

?>