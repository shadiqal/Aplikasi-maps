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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../../assets/css/mdb.min.css" rel="stylesheet">
  <style type="text/css">
    
  </style>
  <!-- Your custom styles (optional) -->
  <link href="../../assets/css/style.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


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

           $btn1 = "window.location.href='assets/php/keluar.php'";
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
          <div class="container">
         <section>

        <h3 class="h3 text-center mb-5">Tentang Warung Finder</h3>

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-6 col-md-12 px-4">

            <!--First row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-code fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Marketplace jual beli kebutuhan sehari-hari</h5>
                <p class="grey-text">Warung finder berkomitmen untuk membantu masyarakat atau pemilik warung dan UKM untuk membantu mereka dalam melakukan pengembangan dan inovasi dalam penjualan mereka ke arah digital.</p>
              </div>
            </div>
            <!--/First row-->

            <div style="height:30px"></div>

            <!--Second row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-book fa-2x blue-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Perintis warung online di Indonesia</h5>
                <p class="grey-text">Warung finder mempunyai tujuan untuk membantu memudahkan para masyarakat dalam berbelanja kebutuhan sehari-hari secara digital, sehingga para masyarakat bisa menjadi lebih efektif dalam melakukan kegiatan mereka dalam sehari-hari. 
                </p>
              </div>
            </div>
            <!--/Second row-->

            <div style="height:30px"></div>


          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-lg-6 col-md-12">

            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bSQeUkLj_1I&t=32s" allowfullscreen></iframe>
            </div>
          </div>
          <!--/Grid column-->

        </div>
        <!--/Grid row-->

      </section>   
     <hr>             <!-- Section: Team v.1 -->
<section class="team-section text-center my-5">

  <!-- Section heading -->
  <h3 class="h3-responsive font-weight-bold my-5">Tim Warung Finder</h3>
  <!-- Section description -->
  

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
      <div class="avatar mx-auto">
        <img src="../../assets/gambar/warungFinder/tim/shadiq.jpg" style="width:200px;height:200px;" class="rounded-circle z-depth-1"
          alt="Sample avatar">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3">Shadiq al mughni</h5>
      <p class="text-uppercase blue-text"><strong>Business development</strong></p>
      <p class="grey-text">Seorang dengan hobby bermain catur dan senang untuk memjelajahi manfaat sebuah software untuk kebutuhan hidup sehari-hari.</p>
      <ul class="list-unstyled mb-0">
        <!-- Facebook -->
        <a class="p-2 fa-lg fb-ic">
          <i class="fab fa-facebook-f blue-text"> </i>
        </a>
        <!-- Twitter -->
        <a class="p-2 fa-lg tw-ic">
          <i class="fab fa-twitter blue-text"> </i>
        </a>
        <!-- Instagram -->
        <a class="p-2 fa-lg ins-ic">
          <i class="fab fa-instagram blue-text"> </i>
        </a>
      </ul>
    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
      <div class="avatar mx-auto">
        <img src="../../assets/gambar/warungFinder/tim/gilang.jpg" style="width:200px;height:200px;" class="rounded-circle z-depth-1"
          alt="Sample avatar">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3">Gilang arievanda</h5>
      <p class="text-uppercase blue-text"><strong>Software Engineering</strong></p>
      <p class="grey-text">Kreatif dan inovatif adalah identitas dari sebuah karya anak muda.</p>
      <ul class="list-unstyled mb-0">
        <!-- Facebook -->
        <a class="p-2 fa-lg fb-ic">
          <i class="fab fa-facebook-f blue-text"> </i>
        </a>
        <!-- Github -->
        <a class="p-2 fa-lg ins-ic">
          <i class="fab fa-github blue-text"> </i>
        </a><br>
      </ul>
    </div>
    <!-- Grid column -->
    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
      <div class="avatar mx-auto">
        <img src="../../assets/gambar/warungFinder/tim/islan.jpg" style="width:200px;height:200px;" class="rounded-circle z-depth-1"
          alt="Sample avatar">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3">Islahudin</h5>
      <p class="text-uppercase blue-text"><strong>Marketing and branding</strong></p>
      <p class="grey-text">Bekerja keras dan belajar keras akan terbayar di esok hari dengan menikmati masa tua di sebuah kampung yang indah dan sejuk.</p>
      <ul class="list-unstyled mb-0">
        <!-- Facebook -->
        <a class="p-2 fa-lg fb-ic">
          <i class="fab fa-facebook-f blue-text"> </i>
        </a>
        <!-- Instagram -->
        <a class="p-2 fa-lg ins-ic">
          <i class="fab fa-instagram blue-text"> </i>
        </a>
      </ul>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-md-0 mb-5">
      <div class="avatar mx-auto">
        <img src="../../assets/gambar/warungFinder/tim/juwita.jpg" style="width:200px;height:200px;" class="rounded-circle z-depth-1"
          alt="Sample avatar">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3">Ratna Juwita fauziah</h5>
      <p class="text-uppercase blue-text"><strong>Marketing and branding</strong></p>
      <p class="grey-text">Apapun yang kau putuskan lakukan dengan maksimal.</p>
      <ul class="list-unstyled mb-0">
        <!-- Facebook -->
        <a class="p-2 fa-lg fb-ic">
          <i class="fab fa-facebook-f blue-text"> </i>
        </a>
        <!-- Instagram -->
        <a class="p-2 fa-lg ins-ic">
          <i class="fab fa-instagram blue-text"> </i>
        </a>
        <!-- Dribbble -->
        <a class="p-2 fa-lg ins-ic">
          <i class="fab fa-dribbble blue-text"> </i>
        </a>
      </ul>
    </div>
    <!-- Grid column -->

    
    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-md-0 mb-5 offset-md-3">
      <div class="avatar mx-auto">
        <img src="../../assets/gambar/warungFinder/tim/gading.jpg" style="width:200px;height:200px;" class="rounded-circle z-depth-1"
          alt="Sample avatar">
      </div>
      <h5 class="font-weight-bold mt-4 mb-3">Gading isyanto</h5>
      <p class="text-uppercase blue-text"><strong>UI and UX designer</strong></p>
      <p class="grey-text">Mendesain bukanlah tentang seberapa bagus hasilnya namun yang sebenernya adalah makna dan arti dari desain tersebut.</p>
      <ul class="list-unstyled mb-0">
        <!-- Facebook -->
        <a class="p-2 fa-lg fb-ic">
          <i class="fab fa-facebook-f blue-text"> </i>
        </a>
        <!-- Instagram -->
        <a class="p-2 fa-lg ins-ic">
          <i class="fab fa-instagram blue-text"> </i>
        </a>
        <!-- Dribbble -->
        <a class="p-2 fa-lg ins-ic">
          <i class="fab fa-dribbble blue-text"> </i>
        </a>
      </ul>
    </div>
    <!-- Grid column -->
      
  </div>
  <!-- Grid row -->

</section>
<!-- Section: Team v.1 -->
                
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
            <a href="#">Tentang kami</a>
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

  <script >
 
</script>


  <script type="text/javascript" src="../../assets/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../../assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../../assets/js/mdb.min.js"></script>
</body>

</html>
