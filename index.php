<?php 
session_set_cookie_params(0,"/","",true,false);
include 'assets/php/variabel.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Warung Finder | Dekatkan kebutuhanmu</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="assets/css/mdb.min.css" rel="stylesheet">
  <style type="text/css">
      .labels {
     color: red;
     background-color: white;
     font-family: "Lucida Grande", "Arial", sans-serif;
     font-size: 10px;
     font-weight: bold;
     text-align: center;
     width: 40px;     
     border: 2px solid black;
     white-space: nowrap;
   }
  </style>
  <!-- Your custom styles (optional) -->
  <link href="assets/css/style.css" rel="stylesheet">

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK2hEI0hiioyqRWGBYGDork_37mBM2mmg&callback=initMap"
    async defer></script>

  

</head>

<body class="white-skin">
 <div style="height: 100vh">
        
        
    <!-- Navbar -->
    <div class ="container-fluid">
      <nav class="navbar navbar-light white justify-content-between">
        <a class="navbar-brand" href="#">
          <img src="assets/gambar/warungFinder/logoWarungFinder.png" height="30" alt="Warung Finder | Dekatkan kebutuhanmu">
        </a>
        <div class="form-inline my-1">
           <?php

           $btn1 = "window.location.href='assets/php/keluar.php'";
           $btn2 = "window.location.href='page/konsumen/daftar.php'";
           $btn3 = "window.location.href='page/konsumen/login.php'";
           
              if ($nama!= ''){
                echo '
                
                <div class="dropdown">
 
  <button type="button" class="btn btn-outline-green btn-sm my-0 dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" 
    aria-expanded="false"><i class="far fa-user-circle"></i> '.$nama.'
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  
  <div class="dropdown-menu">
    <a class="dropdown-item" href="page/konsumen/akun.php"><i class="far fa-user-circle"></i> Akun</a>
    <a class="dropdown-item" href="page/konsumen/riwayatPesanan.php"><i class="fas fa-history"></i> Riwayat Pesanan</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="assets/php/keluar.php"><i class="fas fa-sign-out-alt"></i> Keluar</a>
  </div>
</div>
  ';
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
            <div class="row">
                <div class="col-lg-3">
                  <form class="form-vertical" method="post" action="#" ><div class="form-group">
                    <p class="note note-info" ><strong>Info :</strong> Warung finder membutuhkan lokasi pengguna untuk dapat menampilkan warung yang berada di sekitaran anda, jika terjadi error dalam lokasi anda, harap cek pengaturan setelan situs anda, dan pilih akses lokasi kemudian pilih izinkan<br>-- Selamat menggunakan --</div>
                  </form>
                </div>
                <div class="col-lg-9">
                  <div id="map" class="z-depth-1-half map-container" style="height: 500px" style="width:100%; height:600px;"></div>
                </div>
              </div>
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
        <h6 class="text-uppercase mb-4 font-weight-bold">Warung finder</h6>
          <p>
            <a href="page/konsumen/tentangKami.php">Tentang kami</a>
          </p>
      </div>
      <hr class="w-100 clearfix d-md-none">
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Mitra</h6>
          <p>
            <a href="page/konsumen/mitra.php">Mitra warung finder</a>
          </p>
                </div>
      <hr class="w-100 clearfix d-md-none">
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Kontak</h6>
          <p>
            <i class="fas fa-home mr-3"></i> Bandung, Gedebage</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> warungfinder@gmail.com</p>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <script type="text/javascript" src="assets/js/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script src="maps.js" type="text/javascript">
        
        
    </script>
</body>

</html>
