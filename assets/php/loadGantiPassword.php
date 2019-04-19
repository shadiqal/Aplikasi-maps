<?php
session_start();
include 'dbConfig.php';
$idKonsumen = $_SESSION['id'];

$sql = "SELECT * FROM konsumen WHERE id='$idKonsumen'";
$query = mysqli_query($dbConnect, $sql);
$data = mysqli_fetch_array($query);

$pass = $data['pass'];

$output ='';

$output .= ' <br><div class="col-md-12 mb-3">
      <label for="">Password lama</label>
<input type="text" id="passwordLama" class="form-control" placeholder="'.$pass.'" disabled>
    </div>
    <div class="col-md-12 mb-3">
      <label for="validationDefault02">Password baru</label>
     <input type="text" id="passwordBaru" class="form-control" ><br>
     <span id="infoPassword" class="badge badge-pill badge-success"></span>
    </div>
    
    <div class="col-md-12 mb-3">
    <div class="text-center">
        <button class="btn btn-success" id="gantiPassword" onclick="gantiPassword()" >Ubah</button>
    </div>
    </div>
    ';





echo $output;



?>