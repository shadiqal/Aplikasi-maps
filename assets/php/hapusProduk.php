<?php

include 'dbConfig.php';

$idWarung = $_POST['idWarung'];
$idProduk = $_POST['idProduk'];

$sql = "DELETE FROM produk WHERE idProduk='$idProduk'";

if(mysqli_query($dbConnect, $sql) === TRUE){
	echo 1;
}
else {
	echo 0; 
}


?>