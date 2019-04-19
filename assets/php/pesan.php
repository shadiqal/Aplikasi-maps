<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'dbConfig.php';
 
// menangkap data yang dikirim dari form
$pesan = $_POST['pesan'];
$idWarung = $_POST['idWarung'];
$no = $_POST['no'];
$alamatTujuan = $_POST['alamatTujuan'];
$nama = $_POST['nama'];
$noTelp = $_POST['noTelp'];
$isi_pesan ='';
$isi_pesan .= 'Warung Finder : Pesanan atas nama '.$nama.' dengan alamat tujuan '.$alamatTujuan.' , no telepon pemesan : '. $no .' pesanan: ... '.$pesan .' ...Terima kasih';
// menyeleksi data admin dengan username dan password yang sesuai
$email_api	= urlencode("shadiqalmughni12@gmail.com");
$passkey_api	= urlencode("Hm123123");
$no_hp_tujuan	= urlencode($noTelp);
$isi_pesan	= urlencode($isi_pesan);

$url	= "https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=".$email_api."&passkey=".$passkey_api."&no_tujuan=".$no_hp_tujuan."&pesan=".$isi_pesan;
$result = file_get_contents($url);
$data	= explode("~~~", $result);

echo $data[0]; //1=SUKSES, selain itu GAGAL

?>