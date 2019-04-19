<?php
session_start();
include 'dbConfig.php';
$idKonsumen = $_SESSION['id'];

$sql = "SELECT * FROM konsumen WHERE id='$idKonsumen'";
$query = mysqli_query($dbConnect, $sql);
$data = mysqli_fetch_array($query);

$noHP = $data['noHP'];

$output ='';

$output .= ' <br><div class="col-md-12 mb-3">
      <label for="">No Telepon lama</label>
<input type="text" id="noHpLama" class="form-control" placeholder="'.$noHP.'" disabled>
    </div>
    <div class="col-md-12 mb-3">
      <label for="validationDefault02">No Telepon baru</label>
     <input type="text" id="noHpBaru" class="form-control" required><br>
     <span id="infoNoHp" class="badge badge-pill badge-success"></span>
    </div>
    
    
    
    <div class="text-center">
        <button class="btn btn-success" id="gantiNoHp" onclick="gantiNoHp()">Ubah</button>
    </div>
    </div>
    ';





echo $output;



?>