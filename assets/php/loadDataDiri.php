<?php

session_start();
include 'dbConfig.php';
$idKonsumen = $_SESSION['id'];

$sql = "SELECT * FROM konsumen WHERE id='$idKonsumen'";
$query = mysqli_query($dbConnect, $sql);
$data = mysqli_fetch_array($query);
$nama = $data['nama'];
$ttl = $data['ttl'];
$email = $data['email'];
$noHP = $data['noHP'];
$pass = $data['pass'];
$output ='';


$output .= '<div class="card">
    <div class="col-md-12 mb-3">
      <label for="validationDefault01">Nama </label>
<input type="text" id="nama" class="form-control" placeholder="'.$nama.'" disabled>
    </div>
    <div class="col-md-12 mb-3">
      <label for="validationDefault02">Email</label>
     <input type="text" id="email" class="form-control" placeholder="'.$email.'"disabled>
    </div>
    <div class="col-md-12 mb-3">
      <label for="validationDefaultUsername">Tempat, Tanggal lahir</label>
      <div class="input-group">
        <div class="input-group-prepend">
         
        </div>
        <input type="text" id="ttl" placeholder="'.$ttl.'" class="form-control" disabled>
      </div>
    </div>


    <div class="col-md-12 ">
      <label for="validationDefault03">No Telepon</label> <span style="cursor:pointer;"class="badge badge-pill badge-info" data-toggle="modal" onclick="loadGantiNoHp()" data-target="#gantiNoHp">Ubah</span>
      <input type="text" class="form-control" id="validationDefault03" placeholder="'.$noHP.'" disabled>
    </div><br>
    <div class="col-md-12 mb-3">
      <label for="validationDefaultUsername">Password</label> <span style="cursor:pointer;"class="badge badge-pill badge-info" data-toggle="modal" onclick="loadGantiPassword()" data-target="#gantiPassword">Ubah</span>
      <div class="input-group">
        
        <input type="password" id="pass" class="form-control" value="'.$pass.'"disabled>
      </div>
    </div>
    <div class="col-md-12 mb-3">
  
 <input type="checkbox" id="lihat" onclick="lihatPassword()"> Lihat Password
    </div>
 

  </div>
  
  
  ';



echo $output;






?>