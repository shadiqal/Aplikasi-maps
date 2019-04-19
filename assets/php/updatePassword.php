<?php

session_start();

include 'dbConfig.php';


$idKonsumen = $_SESSION['id'];
$passwordBaru = $_POST['passwordBaru'];

$sql = "UPDATE konsumen SET pass='$passwordBaru' WHERE id='$idKonsumen'";
if ($dbConnect->query($sql) === TRUE){
    echo 1;
}
else {
    echo 0;
}


?>