<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>THEATER PRINT</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
          <?php
                include "connect.php";
                $query = "SELECT order_kode, order_status, order_harga FROM `order` WHERE order_kode = '$_POST[kode]'";
                $sql = mysqli_query($db,$query) or die("Query fail : ".mysqli_error());
                $row = mysqli_fetch_array($sql);
          ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">Theater Print</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="order.php">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="checkorder.php">Check Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="admin.php">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Portfolio Grid Section -->
    <header class="masthead">
      <div class="container">
        <h2 class="text-center">Check Order</h2>
        <hr class="star-primary" style="margin-bottom: 5em">
      </div>

      <div class="container" style="margin-bottom: 3em">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-4">
            
          </div>
          
          <div class="col-sm-4">
            <div class="form-group">
              <input type="text" name="kode" class="form-control">
              <button class="btn btn-lg btn-outline">Check Order</button>
            </div>
          </div>
       
          <div class="col-sm-4">
            
          </div>
        </div>
         </form>
      </div>

      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && mysqli_num_rows($sql)>0){
          if ($row['order_status'] == 1){
            echo"<div class='container' style='margin-top: 2em;'>
          <div class='row'>
            <div class='col-sm-4'>
                <label class='text-center' style='font-size: 2em'>Kode Order</label>
                <h4 class='text-center'>".$row['order_kode']."</h4>
            </div>
            <div class='col-sm-4'>
                <label class='text-center' style='font-size: 2em'>Status Pemesanan</label>
                <h4 class='text-center'>Done</h4>
            </div>
            <div class='col-sm-4'>
                <label class='text-center' style='font-size: 2em'>Estimasi Harga</label>
                <h4 class='text-center'>".$row['order_harga']."</h4>
            </div>
          </div>
        </div>";
          }
          else{
            echo "<div class='container' style='margin-top: 2em;'>
          <div class='row'>
            <div class='col-sm-4'>
                <label class='text-center' style='font-size: 2em'>Kode Order</label>
                <h4 class='text-center'>".$row['order_kode']."</h4>
            </div>
            <div class='col-sm-4'>
                <label class='text-center' style='font-size: 2em'>Status Pemesanan</label>
                <h4 class='text-center'>On Process</h4>
            </div>
            <div class='col-sm-4'>
                <label class='text-center' style='font-size: 2em'>Estimasi Harga</label>
                <h4 class='text-center'>".$row['order_harga']."</h4>
            </div>
          </div>
        </div>";
          }
        }
      ?>

    </header>

    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3>Location</h3>
              <p>ITS, Keputih
                <br>Surabaya, Indonesia</p>
            </div>
            <div class="footer-col col-md-4">
              <h3>Around the Web</h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-google-plus"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-dribbble"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <h3>About Print Theater</h3>
              <p>Theater Print is a place where you can order printing anywhere and anytime.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; Theater Print 2017
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
