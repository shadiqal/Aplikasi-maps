<?php
$lifetime=6000;
  session_set_cookie_params($lifetime);
session_start();

include "dbConfig.php";

if (isset($_SESSION['id']))
{
$id = $_SESSION['id'];
$sql = "SELECT * FROM konsumen WHERE id = '$id'";
$hasil = mysqli_query($dbConnect, $sql);
$data = mysqli_fetch_array($hasil);
$idKonsumen = $data['id'];
$nama = $data['nama'];
$noHp= $data['noHP'];
$status = $data['status'];
}
else{
    $idKonsumen = '';
	$nama = '';
	$noHp = '';
	$status = '';
}




?>