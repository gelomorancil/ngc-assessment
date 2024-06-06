<?php
    $root = "http://".$_SERVER['HTTP_HOST']; //returns localhost or host name
    $root .= preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME'])).'/';
    $base_url = $root;
    
    require_once('C:\xampp\htdocs\ngc_assessment_exam\db_connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Morancil_NGC Assessment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>GOVPH</h1>
      </a>

      <div class="position-relative">
        <button onclick="window.location.href='signup.php'" type="button" class="btn btn-success rounded-pill">REGISTER NOW</button>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/slider-1.jpg');">
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/slider-2.jpg');">
                  </a>
                </div>
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Slider Section -->


    <!-- ======= News and Updates Section ======= -->
    <section>
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>News and Updates</h2>
        </div>
        <div class="row">
          <div class="col-12 text-center mb-5">
          </div>
              <div class="col-lg-4">
                <div class="card">
                  <img src="assets/img/news1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">                    
                    <h5 class="card-title">YUHUM VILLAGE, IN PROGRESS</h5>
                    <p class="card-text">The on-site housing project, a flagship program of Mayor Albee Benitez for informal settlers of Bacolod City, is under way with Department of Human Settlement and Urban... </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <img src="assets/img/news2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">BACOLOD CITY HOUSING PROJECT</h5>
                    <p class="card-text">The First Pambansang Pabahay Program in the country will now commence in Bacolod City. Contract has been signed with WRS Holdings, Pag-Ibig and the City of Bacolod.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <img src="assets/img/news3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">GENERAL HOSPITAL PARA SA MGA BACOLODNON</h5>
                    <p class="card-text">Groundbreaking sang Bacolod City General Hospital gin patigayon subong nga adlaw, Setyembre nuebe, sa Brgy. Vista... </p>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </section>
</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">

        <div class="row g-5">
          <div class="col-lg-5">
            <h3 class="footer-heading">About Bacolod City</h3>
            <p>Bacolod is the highly urbanized capital, communication, trade and service center of the Province of Negros Occidental, one of the twin provinces of Negros Island in the cluster of the Visayan Islands in the heart of the Philippine Archipelago.</p>
          </div>
          <div class="col-6 col-lg-3">
            <h3 class="footer-heading">Quicklinks</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="index.html"><i class="bi bi-chevron-right"></i> Home</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-3">
            <h3 class="footer-heading">Categories</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="category.html"><i class="bi bi-chevron-right"></i> News and Updates</a></li>

            </ul>
          </div>

        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>