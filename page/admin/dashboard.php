<?php 
include '../../assets/php/variabel.php';
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
        <a class="navbar-brand" href="#">
          <img src="../../assets/gambar/warungFinder/logoWarungFinder.png" height="30" alt="Warung Finder | Dekatkan kebutuhanmu">
        </a>
        <div class="form-inline my-1">
           <?php

           $btn1 = "window.location.href='../../assets/php/keluar.php'";
           $btn2 = "window.location.href='daftar.php'";
           $btn3 = "window.location.href='#'";
           
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
         
        <!-- body -->


   
  </div>



  <script type="text/javascript" src="../../assets/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../../assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->

  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../../assets/js/mdb.min.js"></script>
</body>

</html>
