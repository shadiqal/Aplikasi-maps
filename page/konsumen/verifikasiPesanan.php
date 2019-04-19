<?php 
$idKonsumen = $_GET['idKonsumen'];
$idWarung = $_GET['idWarung'];

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
           $btn3 = "window.location.href='#'";
           
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
            
                  <section class="form-elegant" id="form">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 offset-md-3">

      <!--Form without header-->
      <div class="card">

        <div class="card-body mx-4">

          <!--Header-->
          <div class="text-center">
            <h3 class="dark-grey-text mb-5"><strong>Form alamat pengantaran</strong></h3>
          </div>

          <!--Body-->
          <div class="md-form">
            <h6>alamat (Wajib)</h6>
            <input type="text" id="alamatTujuan" class="form-control">
           
          </div>

          
          <a  id ="pesan" class="badge badge-danger"></a>
          <br>
          <br>
          
          <div class="text-center mb-3">
            <button type="button" id="pesanBtn" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Pesan</button>
          </div>
          

        </div>

        

      </div>
      <!--/Form without header-->

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
              
<!-- Central Modal Medium Success -->
<div class="modal fade" id="centralModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Info </p>

        
      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="text-center">
          <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
          <p>Pesanan anda telah terkirim</p>
        </div>
      </div>

      <!--Footer-->
      
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Medium Success-->          
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

  <script type="text/javascript"> 
   function terimaKasih(){
          $('#centralModalInfo').modal({
              fadeDuration: 1000,
                fadeDelay: 0.50
          });
      }
  $(document).ready(function(){
      var delay = 2000;
    $('#pesanBtn').click(function(){
        var idKonsumen = '<?php echo $idKonsumen; ?>';
      var idWarung = '<?php echo $idWarung; ?>';
        var noHP = $('#noHP').val();
        var alamatTujuan = $('#alamatTujuan').val();
        
   
				var link = 'idWarung='+idWarung+'&idKonsumen='+idKonsumen+'&noHP=' + noHP +'&alamatTujuan='+alamatTujuan;
				$.ajax({
					data: link,
					type: 'POST',
					url:"../../assets/php/pesan2.php",
					success: function(hasil){
						$.ajax({
                            url:"../../assets/php/unset.php",
                            success:function(){
                                terimaKasih();
                                setTimeout(function() {
                                    window.location = "status.php";
                                }, delay);
                                
                            }
                        })
					}
				});

			
		});
  });
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
