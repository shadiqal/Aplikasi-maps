<?php

	include "dbConfig.php";

	$email = $_POST['email'];

	$sql = "SELECT * FROM warung WHERE email = '$email'";
	$query = mysqli_query($dbConnect, $sql);
	$cek = mysqli_num_rows($query);

	if ($cek == 0)
		{
			$sql = "SELECT * FROM konsumen WHERE email = '$email'";
			$query = mysqli_query($dbConnect, $sql);
			$cek = mysqli_num_rows($query);

			if ($cek > 0 ){
				echo 1;
			}
			else {
				echo 0;
			}
		}

	else{
		echo 1;
	}
?>