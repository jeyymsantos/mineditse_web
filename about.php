<?php

include 'includes/connection.php';

// Retrieves Information
$sql = "SELECT * FROM defaults";
$result = $connection->query($sql);
$row = $result->fetch_assoc();

$services = "SELECT * FROM services";
$result_services = $connection->query($services);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to <?= $row['name'] ?>!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= $row['logo'] ?>" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="<?= $row['logo'] ?>" alt="">
        <span><?= $row['name'] ?></span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="./index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="./index.php#values">Services</a></li>
          <li><a class="nav-link" href="products.php">Products</a></li>
          <li><a class="nav-link scrollto" href="./index.php#contact">Contact</a></li>
          <li><a class="nav-link active" href="about.php">About</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about mt-5">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Who We Are</h3>
              <h2>Mine Ditse is an online selling business based in Brgy. Santo Cristo, Baliwag, Bulacan,
                owned by Mrs. Mareschiel Santiago.

              </h2>
              <p>Mine Ditse offers wide range of affordable items like clothing - shirts, jeans, dresses,
                jackets; and even bags & sandals!

              </p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">

          </div>

        </div>
      </div>

    </section><!-- End About Section -->

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/landing_page/Logo.png" alt="">
              <span>Mine Ditse</span>
            </a>
            <p>
              Mine Ditse is an online selling business based in Brgy. Santo Cristo, Baliwag, Bulacan,
              owned by
              Mrs. Mareschiel Santiago. <br><br>
              We offer wide range of affordable items like clothing - shirts, jeans, dresses, jackets; and
              even bags & sandals!
            </p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/ditseziram/" target="_blank" class="facebook"><i
                  class="bi bi-facebook"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/login">Login</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/register">Register</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>OUR ITEMS</h4>
            <ul>
              <li></i> Shirts</li>
              <li></i> Jackets & Sweaters</li>
              <li></i> Polo</li>
              <li></i> Perfumes & Bags</li>
              <li></i> Sandals & more!</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Barangay Sto. Cristo,<br>
              Baliuag, Bulacan<br>
              Philippines <br><br>
              <strong>Phone:</strong> 0933 810 4290<br>
              <strong>Email:</strong> mineditse@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Mine Ditse</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>