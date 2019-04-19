<?php

session_start();

include 'dbConfig.php';


$idKonsumen = $_SESSION['id'];
$noHpBaru = $_POST['noHpBaru'];

$sql = "UPDATE konsumen SET noHP='$noHpBaru' WHERE id='$idKonsumen'";
if ($dbConnect->query($sql) === TRUE){
    echo 1;
}
else {
    echo 0;
}


?>