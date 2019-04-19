<?php 

// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'dbConfig.php';
 
// menangkap data yang dikirim dari form
$email = mysqli_real_escape_string($dbConnect, $_POST['email']);
$pass = mysqli_real_escape_string($dbConnect,$_POST['pass']);
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($dbConnect,"select * from konsumen where email='$email' and pass='$pass'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	
	$sql = "SELECT * FROM konsumen WHERE email = '$email' AND pass = '$pass'";
	$hasil = mysqli_query($dbConnect, $sql);
    $data = mysqli_fetch_array($hasil);
    if ($data['status'] == 'sudah'){
        $_SESSION['id'] = $data['id'];
        echo 1;
    }
    else {
        $_SESSION['id'] = $data['id'];
        echo 2;
    }
	
	
	}
	else{
		echo 0;
	}
	
	
    
?>