<?php

session_start();
include 'dbConfig.php';

$id = $_SESSION['id'];
$isiPesan = '';
$kode = mt_rand(100000, 999999);
$sql = "SELECT * FROM konsumen WHERE id='$id'";
$query = mysqli_query($dbConnect, $sql);
$data = mysqli_fetch_array($query);
$noHp = $data['noHP'];
$isiPesan .= 'Kode keamanan warung finder : 
'.$kode.' ';


$sql = "UPDATE konsumen SET kode='$kode' WHERE id='$id'";
if ($dbConnect->query($sql) === TRUE) {
         $email_api	= urlencode("email api kamu");
$passkey_api	= urlencode("password api kamu");
$no_hp_tujuan	= urlencode($noHp);
$isi_pesan	= urlencode($isiPesan);

$url	= "https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=".$email_api."&passkey=".$passkey_api."&no_tujuan=".$no_hp_tujuan."&pesan=".$isi_pesan;
$result = file_get_contents($url);
$data	= explode("~~~", $result);

    }
else {
    echo 0;
}




?>