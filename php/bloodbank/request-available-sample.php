<!--
 * Author : Rohit Shakya
 * Date   : Oct-2020
 * Editor : Sublime text
 * Local server: Xampp
 * Title : Internshala Blood Bank Assignment  
 * Version: v1.2
 -->
<?php
session_start();
if(!isset($_SESSION['email']))
{
  header('Location: ../index.html');
}
if(!isset($_SESSION['var']))
{
  $_SESSION['var']="Request Sample";
}
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blood Bank | Internshala</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Call us now +1 5589 55488 55
      </div>
    </div>
  </div>

  <main id="main">
  	 <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Call us now +1 5589 55488 55
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="../index.html" class="logo mr-auto"><img src="../assets/img/logo.png" alt=""></a>

      <?php
        echo $_SESSION['email']; 
      ?>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="./rhome.php">Home</a></li>
          <li class="active"><a href="./request-available-sample.php">Request Sample</a></li>
          <li><a href="./logout.php">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    <a href="./view-available-sample.php"  class="appointment-btn scrollto" href="javascript:void(0)" onclick="scrollToDownload()"><span class="d-none d-md-inline">Available Blood Sample</span></a>
</div>
  </header><!-- End Header -->

  <main id="main">

      <div class="container" data-aos="fade-up">
        <br><br>
                                    <?php
                                      include('../config/dbconn.php');
                                      $query = "SELECT * FROM bloodsample";
                                      $result = mysqli_query($dbconn,$query);
                                      ?> 
                                      <br><br><br><br>
                                        <table id="" class="table table-condensed table-striped">
                                      <tr>
                                      <th>Serial</th>
                                      <th>Blood Type</th>
                                      <th>Hospital Name</th>
                                      <th></th>
                                      </tr>
                                    <?php
                                          if($result){
                                            while($res = mysqli_fetch_array($result)) { 
                                            $_SESSION['bloodsample']= $res['bloodsample_name'];
                                            $_SESSION['hospital_name']= $res['hospital_name'];
                                            
                                            if($res['bloodsample_name']===$_SESSION['bloodtype'])
                                            {
                                              echo "<tr>";
                                                echo "<td>".$res['bloodsample_id']."</td>";
                                                echo "<td>".$res['bloodsample_name']."</td>";
                                                echo "<td>".$res['hospital_name']."</td>";  
                                                echo "<td>"
                                            ?>

<button type="button" class="appointment-btn scrollto" id="btnHome" onClick="document.location.href='./requestinfo.php?link=1'" /><?php echo $_SESSION['var'];?></button> 
      <?php echo "</td>"; }}}?>
                                </table><br><br><br><br>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
<br><br><br><br>
  <div class="panel panel-success panel-size-custom">
      <div class="panel-body">
      </div>
    </section>

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

         <!--Additional content-->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Internshala</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://rohitshakya.github.io/">Rohit Shakya</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>
</html>