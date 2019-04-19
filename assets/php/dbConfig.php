<?php

$dbHost = 'localhost';
$dbUser = 'Database username';
$dbPass = 'Password kamu';
$dbName = 'Nama Database kamu';
$dbConnect = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if ($dbConnect->connect_error){
	die("Error mengkoneksi". $dbConnect->connect_error);
}

?>