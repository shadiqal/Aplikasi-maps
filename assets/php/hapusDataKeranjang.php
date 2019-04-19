
<?php

/*cache: false,
contentType: false,
processData: false,*/
session_start();

$idProduk = $_POST['idProduk'];
$idWarung = $_POST['idWarung'];



unset($_SESSION['keranjang'][$idWarung][$idProduk]['jumlah']);

unset($_SESSION['keranjang'][$idWarung][$idProduk]);




?>