<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Warung Finder</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <title></title>
<style type="text/css">
  </style>
<script type="text/javascript" src="../../assets/js/jquery.js"></script>
</head>

<body>
<div class="container-fluid">

  <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- navbar logo-->  
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img alt="" src="...">
            <a class="navbar-brand" href="#">warungFinder</a>
          </a>
        </div>
        <!-- navbar logo-->
        <!-- navbar kanan-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <?php
              if ($nama!= ''){
                echo '<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$nama.'<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="assets/php/keluar.php">Keluar</a></li>
                </ul>
            </li>';
              }
              else{
                echo '<li><a href="page/daftar.php">Daftar</a></li>
            <li><a href="page/login.php">Masuk</a></li>';
              }
            ?>
          </ul>
        </div>
        <!-- navbar kanan-->
      </div>
    </nav>
<!-- header -->

  
  <div class="row">
    <div class="col-md-6">
      <div class="panel">
        <h4>monitoring user</h4>
        <hr>

      </div>
    </div>
  </div>
</div>

</body>


</html>