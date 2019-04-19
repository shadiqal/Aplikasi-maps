<?php
session_start();
$idWarung = $_SESSION['idWarung'];
unset($_SESSION['keranjang'][$idWarung]);

?>