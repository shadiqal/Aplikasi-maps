<?php 
include '../../assets/php/variabel.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
  <title>Warung Finder | Dekatkan kebutuhanmu</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" >
  <!-- Bootstrap core CSS -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../../assets/css/mdb.min.css" rel="stylesheet">
  <style type="text/css">
    
  </style>
  <!-- Your custom styles (optional) -->
  <link href="../../assets/css/style.css" rel="stylesheet">

</head>

<body class="white-skin" >
 <div style="height: 100vh">
        
    <!-- Navbar -->
    <div class ="container-fluid">
      <nav class="navbar navbar-light white justify-content-between">
        <a class="navbar-brand" href="../../index.php">
          <img src="../../assets/gambar/warungFinder/logoWarungFinder.png" height="30" alt="Warung Finder | Dekatkan kebutuhanmu">
        </a>
        <div class="form-inline my-1">
           <?php

           $btn1 = "window.location.href='../../assets/php/keluar.php'";
           $btn2 = "window.location.href='#'";
           $btn3 = "window.location.href='login.php'";
           
              if ($nama!= ''){
                echo '<button class="btn btn-outline-orange btn-sm my-0" onclick="'.$btn1.'">Keluar</button>';
              }
              else{
                echo '<div class="md-form form-sm my-0">
                       <button class="btn btn-outline-green btn-sm my-0" onclick="'.$btn2.'">Daftar</button> 
                      </div>
                     <button class="btn btn-outline-orange btn-sm my-0" onclick="'.$btn3.'">Masuk</button>';
                }
            ?>
          
           
        </div>
      </nav>
    </div>
    <br>
    <!-- Navbar -->

        <!-- body -->    
          <div class="container">
            
                  <section class="form-elegant">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 offset-md-3">

      <!--Form without header-->
      <div class="card">

        <div class="card-body mx-4">

          <!--Header-->
          <div class="text-center">
            <h3 class="dark-grey-text mb-5"><strong>Daftar akun</strong></h3>
          </div>
         
          <!--Body-->
          <div class="md-form">
            <h6>Email</h6>
            <input type="text" id="email" name="email" class="form-control" placeholder="contoh: shadiqalmughni12@gmail.com">
           
          </div>
           <a  id="pesan" class="badge badge-danger"></a>
    
          <div class="md-form">
            <h6>Nama Lengkap</h6>
            <input type="text" id="nama" name="nama" class="form-control">
           
          </div>
          <div class="md-form">
            <h6>Tanggal Lahir</h6>
            <input type="text" name="ttl" id="ttl" class="form-control" placeholder="Contoh: 23 Agustus 1997">
           
          </div>
          <div class="md-form">
            <h6>No Handphone</h6>
            <input type="text" name="noHp" id="noHp" class="form-control" placeholder="Contoh: 082216540312">
           
          </div>
          <div class="md-form">
             <h6>Password</h6>
            <input type="password" id="pass" name="pass" class="form-control">
            
          </div>
            <div class="md-form">
                <input type="checkbox" id="lihat" onclick="lihatPassword()"> Lihat Password
            </div>
          
          <br>
          
          <div class="text-center mb-3">
            <button type="submit" id="daftarBtn" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Daftar</button>
          </div>
          

        </div>

        <!--Footer-->
        <div class="modal-footer mx-5 pt-3 mb-1">
          <p class="font-small grey-text d-flex justify-content-end">Sudah punya akun?<a href="login.php" class="blue-text ml-1">
              masuk disini</a></p>
        </div>

      </div>
      <!--/Form without header-->

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
                
          </div>
          <br>
        <!-- body -->

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">
  <div class="container text-center text-md-left">
    <div class="row text-center text-md-left mt-3 pb-3">
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Warung finder</h6>
          <p>Warung finder adalah aplikasi marketplace untuk kebutuhan sehari-hari.</p>
      </div>
      <hr class="w-100 clearfix d-md-none">
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Warung Finder</h6>
          <p>
            <a href="tentangKami.php">Tentang kami</a>
          </p>
      </div>
      <hr class="w-100 clearfix d-md-none">
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Mitra</h6>
          <p>
            <a href="mitra.php">Mitra warung finder</a>
          </p>
                </div>
      <hr class="w-100 clearfix d-md-none">
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Kontak</h6>
          <p>
            <i class="fas fa-home mr-3"></i>Jl. Telekomunikasi no 1</p>
          <p>
            <i class="fas fa-envelope mr-3"></i>service@warungfinder.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i>+628 22 1654 0312</p>
          
        </div>
    </div>
      <hr>
      <div class="row d-flex align-items-center">
        <div class="col-md-7 col-lg-8">
          <p class="text-center text-md-left">© 2019 Copyright:
            <a href="https://warungfinder.com">
              <strong> Warung Finder</strong>
            </a>
          </p>
        </div>
        <div class="col-md-5 col-lg-4 ml-lg-0">
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer -->
   
  </div>

 <script type="text/javascript" src="../../assets/js/lihatPasswordController.js"></script>

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 
<script type="text/javascript" src="../../assets/js/daftarController.js"> </script>
 <script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
    

<script>
    
    </script>

</body>

</html>
