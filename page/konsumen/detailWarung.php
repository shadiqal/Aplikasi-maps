<?php 


include '../../assets/php/variabel.php';
include '../../assets/php/variabelWarung.php';

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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Material Design Bootstrap -->
  <link href="../../assets/css/mdb.min.css" rel="stylesheet">
  <style type="text/css">
    .test  {
  display: inline-block;
}

.test a {
  color: black;

  padding: 8px 16px;
  text-decoration: none;
}

.test a.active {
  background-color: #4CAF50;
  color: white;
  border-radius: 5px;
}

.test a:hover:not(.active) {
  background-color: #ddd;
  border-radius: 5px;
}
  </style>
  <!-- Your custom styles (optional) -->
  <link href="../../assets/css/style.css" rel="stylesheet">


</head>

<body class="white-skin">
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
           $btn2 = "window.location.href='daftar.php'";
           $btn3 = "window.location.href='login.php'";
           
              if ($nama!= ''){
                echo '<div class="dropdown">
 
  <button type="button" class="btn btn-outline-green btn-sm my-0 dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" 
    aria-expanded="false"><i class="far fa-user-circle"></i> '.$nama.'
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  
  <div class="dropdown-menu">
    <a class="dropdown-item" href="akun.php"><i class="far fa-user-circle"></i> Akun</a>
    <a class="dropdown-item" href="riwayatPesanan.php"><i class="fas fa-history"></i> Riwayat Pesanan</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="../../assets/php/keluar.php"><i class="fas fa-sign-out-alt"></i> Keluar</a>
  </div>
</div>';
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
<div class="container-fluid">
                  
                <div class="row">
                          
                            <!-- Bio warung --> 
                            <div class="col-md-5">
                             <div class="card">
                             <div class=""><br>
                                  <div class="container-fluid">
                                    <div class="row">
                                      <div class="col-md-4">
                                        <div class="view overlay rounded z-depth-2 mb-lg-0 mb-3">
                                          <img class="img-fluid" src="../../assets/gambar/warung/fotoWarung/<?php echo $fotoWarung; ?>" alt="Sample image">
                                        </div>
                                      </div>
                                      <div class="col-md-8">
                                        <a href="#!" class="indigo-text">
                                          <br><h6 class="font-weight-bold mb-2"><i class="fas fa-store pr-2"></i><?php echo $kategori;?></h6>
                                        </a>
                                        <h5 class="font-weight-bold mb-3"><strong><?php echo $namaWarung; ?> </strong></h5>
                                        
                                        <h6 style="text-align: justify;"><i class="fas fa-address-book pr-2 text-info"> </i> Alamat: <?php echo $alamat?></h6>
                                        <span class="badge badge-pill badge-success">TerVerifikasi</span>
                                      </div>
                                    </div>
                                    <hr>
                                  </div>
                              </div>
                            </div><br>
                            </div>
                            <!-- Bio warung --> 
                          
                            
                    <!-- List Produk -->              
                    <div class="col-md-7" onload="">
                      <div class="card">
                         <div class="row">
                            <div class="col-md-12">
                              <br>
                              <div class="container-fluid">
<button type="submit" class="btn btn-sm btn-info" id="lihatKeranjang" data-toggle="modal" onclick="listKeranjang()" data-target="#centralModalLGInfoDemo"><i class="fas fa-2x fa-shopping-cart" aria-hidden="true"></i><span id="counter" onload="counter()" class="badge badge-danger ml-2">0</span></button>
                                  <div class="input-group md-form form-sm form-1 pl-0" >
                                      <div class="input-group-prepend">
                                        <span class="input-group-text purple lighten-3" id="basic-text1"><i class="fas fa-search text-white"
                                            aria-hidden="true"></i></span>
                                      </div>
                                      <input class="form-control my-0 py-1" type="text" id="keyword" placeholder="Cari Produk" aria-label="Search">
                                    </div>
                              <div class="row">
                                <div class="table-responsive" id="caris">
                                      
                                        
                                          
                                            
                                        
                                    
                                  </div>
                                  

                               </div>
                                  
                              </div>
                            </div>
                          </div> 
                        </div>
                      </div>
                     <!-- List Produk --> 
        </div>
     </div>

     
<!-- Central Modal Medium Success -->
<div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Barang dimasukkan ke keranjang </p>

        
      </div>

     

      <!--Footer-->
      
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Medium Success-->               
     
<section>
  <!-- Central Modal Large Info-->
              <div class="modal fade" id="centralModalLGInfoDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-notify modal-success" role="document">
                  <!--Content-->
                  <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                      <p class="heading lead"><strong>Keranjang</strong></p>

                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                      </button>
                    </div>

                    <!--Body-->
                    <div class="" id="keranjang" onload="">
                      
                        
                                            
                    </div>

                  </div>
                  <!--/.Content-->
                </div>
              </div>
              <!-- Central Modal Large Info-->

</section>
  

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
    
    <script src="../../assets/js/cari.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 
  <script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/detailWarungController.js" type="text/javascript"> </script> 
<script type="text/javascript">
    var idWarung = '<?php echo $idWarung; ?>';
    var idKonsumen = '<?php echo $idKonsumen; ?>';
    var status = '<?php echo $status; ?>';
     produk(idWarung);
    counter();
    
    </script>

   

  
  
</body>

</html>
