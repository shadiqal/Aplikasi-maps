<?php

session_start();
include 'dbConfig.php';
$id = $_SESSION['id'];
$kode = $_POST['kode'];

$sql = "SELECT * FROM konsumen WHERE id='$id' AND kode='$kode'";
$query = mysqli_query($dbConnect, $sql);
$data = mysqli_num_rows($query);

if ($data > 0){
    
    $sql = "UPDATE konsumen SET status='sudah' WHERE id='$id' AND kode='$kode' ";
    if ($dbConnect->query($sql) === TRUE) {
        echo 1;
    }
}
else {
    echo 0;
}


?>