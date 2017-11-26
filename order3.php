<?php 
      session_start(); 
      if(!isset($_SESSION['order'])){ 
            header("Location: order.php"); 
            die; 
      } 
      else if(!isset($_SESSION['order2'])){ 
            header("Location: order2.php"); 
            die; 
      } 
      else if(isset($_SESSION['order3'])){ 
            header("Location: order4.php"); 
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
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
              include "connect.php";
                $namadepan = explode(" ", $_POST['ordernama']);
                $potong = substr($namadepan[0], 0, 3);
                $kode=$potong."0".$_SESSION['id'];
                $query = "UPDATE `order` SET order_nama='$_POST[ordernama]' , order_kontak='$_POST[handphone]', order_kode = '$kode' where id = '$_SESSION[id]'";
                $sql = mysqli_query($db,$query) or die("Query fail : ".mysqli_error());
                $row = mysqli_fetch_array($sql);
                $_SESSION['order3']=1;
                header("Location: order4.php"); 
              }
            
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
        <h2 class="text-center">Order</h2>
        <hr class="star-primary">
        <h3 class="text-center" style="margin-bottom: 2em">Please Fill The Form Below<h3>
      </div>

      <div class="container">
      <div class="row">
        <div class="col-sm-4">
          
        </div>

        <div class="col-sm-4">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
          
            <div class="form-group">
              <label style="font-size: 2em">Nama</label>
              <br>
              <input type="text" class="form-control" name="ordernama">
            </div>
            <br>
            <div class="form-group">
              <br>
              <label style="font-size: 2em">No Handphone</label>
              <input type="text" class="form-control" name="handphone">
            </div>
            <br>
              <button class="btn btn-outline" type="submit" name="button-upload">Order</button>
        </form>
        </div>

        <div class="col-sm-4">
          
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
