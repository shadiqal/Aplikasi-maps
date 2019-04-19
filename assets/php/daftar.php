<?php
$lifetime=6000;
  session_set_cookie_params($lifetime);
session_start();

require_once 'dbConfig.php';
$isiPesan = '';
$kode = mt_rand(100000,999999);
// mencari kode barang dengan nilai paling besar
$query = "SELECT max(id) as id FROM konsumen";
$hasil = mysqli_query($dbConnect,$query);
$data = mysqli_fetch_array($hasil);
$idUser = $data['id'];
 
// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'BRG001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($idUser, 3, 3);
 
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;
 
// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "ksm";
$kodeusr = $char . sprintf("%03s", $noUrut);




$status = 'belum';
$email = mysqli_real_escape_string($dbConnect,$_POST['email']);
$nama = mysqli_real_escape_string($dbConnect, $_POST['nama']);
$ttl = mysqli_real_escape_string($dbConnect, $_POST['ttl']);
$noHp = mysqli_real_escape_string($dbConnect, $_POST['noHp']);
$pass = mysqli_real_escape_string($dbConnect, $_POST['pass']);
$isiPesan .= 'Kode keamanan warung finder : 
'.$kode.' ';

    
$sql = "INSERT INTO konsumen (id, email, nama, ttl, noHP, pass, tipe_user, kode, status) VALUES ('$kodeusr', '$email', '$nama', '$ttl', '$noHp', '$pass','konsumen', '$kode', '$status')";
if (mysqli_query($dbConnect, $sql)){
	$_SESSION['id'] = $kodeusr;


}
 $email_api	= urlencode("email api kamu");
$passkey_api	= urlencode("passwor api kamu");
$no_hp_tujuan	= urlencode($noHp);
$isi_pesan	= urlencode($isiPesan);

$url	= "https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=".$email_api."&passkey=".$passkey_api."&no_tujuan=".$no_hp_tujuan."&pesan=".$isi_pesan;
$result = file_get_contents($url);
$data	= explode("~~~", $result);

echo $data[0]; 






?>
