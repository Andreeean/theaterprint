<?php 
      session_start(); 
      if(!isset($_SESSION['loggedin'])){ 
            header("Location: login.php"); 
            die; 
      } 
?>
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
                $query = "SELECT * FROM `order` WHERE order_status='0'";
                $sql = mysqli_query($db,$query) or die("Query fail : ".mysqli_error());
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
              <a class="nav-link js-scroll-trigger" href="order_masuk.php">Pesanan Masuk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="order_selesai.php">Pesanan Selesai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Portfolio Grid Section -->
    <header class="masthead">
      <div class="container">
        <h1 class="text-center">Pesanan Masuk</h1>
        <hr class="star-primary" style="margin-bottom: 5em">
      </div>
      <div class="container">
      <div class="row">
        <div class="col-sm-12">
         <div class="table-responsive">
           <table class="table table-hover">
             <thead>
               <tr>
                 <th>Kode Order</th>
                 <th>Pilihan Kertas</th>
                 <th>Warna</th>
                 <th>Hal</th>
                 <th>Sampai</th>
                 <th>Copy</th>
                 <th>Tanggal Pengambilan</th>
                 <th>Keterangan Tambahan</th>
                 <th>File</th>
                 <th>Update Status</th>
               </tr>
             </thead>
               <tbody>
               <?php
                  while($row = mysqli_fetch_array($sql)){
                    $file = explode("/", $row['order_file']);
                    echo "
               <tr>
                 <td>".$row['order_kode']."</td>";
                 if ($row['order_kertas']==1){
                      echo "<td>A3</td>";
                    }
                    else if ($row['order_kertas']==2) {
                      echo "<td>A4</td>";
                    }
                    else if ($row['order_kertas']==3) {
                      echo "<td>A5</td>";
                    }
                    else{
                      echo "<td>F4</td>";
                    }
                  if($row['order_warna']==1){
                    echo "<td>Berwarna</td>";
                  }
                  else{
                    echo "<td>Hitam Putih</td>";
                  }
                    echo "
                 <td>".$row['order_hal']."</td>
                 <td>".$row['order_sampai']."</td>
                 <td>".$row['order_copy']."</td>
                 <td>".$row['ambil_tanggal']."</td>
                 <td>".$row['order_ket']."</td>
                 <td><a href='file/".$file[1]."' download style='color:white;'>".$file[1]."</a></td>";
                 if ($row['order_status']==1) {
                   echo "<td><a href='ubahstatus.php?id=".$row['id']."' style='color:white;'>DONE</a></td>";
                 }
                 else{
                  echo "<td><a href='ubahstatus.php?id=".$row['id']."' style='color:white;'>ON PROCESS</a></td>";
                 }
                 
                 echo"
               </tr>";
                  }
               ?>
             </tbody>
           </table>
         </div>
        </div>
      </div>
      </div>

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
