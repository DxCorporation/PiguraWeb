<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="user/img/favicon.png" rel="icon">
    <link href="user/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="user/vendor/aos/aos.css" rel="stylesheet">
    <link href="user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="user/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="user/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="user/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="user/css/style.css" rel="stylesheet">
    @yield('css')

    <!-- =======================================================
  * Template Name: Knight
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h3 href="{{ url('/') }}#about" class="font"><img src="user/img/piguralogo.png" alt=""
                        class="img-fluid"> Ridwan Pigura</h3>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ url('/') }}#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/') }}#about">Profil</a></li>
                    <li><a class="nav-link scrollto " href="{{ url('/Produk') }}#produk">Produk</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/petunjuk') }}#services">Petunjuk</a></li>
                    <li><a class="nav-link scrollto " href="{{ url('/Estimasi') }}#estimasi"> Estimasi</a></li>

                    <li><a class="nav-link scrollto" href="{{ url('/Developer') }}#team">Pengembang</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/admin/dashboard') }}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('content')
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">

            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <a href="#header" class="scrollto footer-logo"><img src="user/img/piguralogo.png"
                                alt=""></a>
                        <h1 class="font">Ridwan Pigura</h1>
                        <p>Kami Memberikan Sentuhan Elegan Pada Setiap Cerita</p>
                        <small>Jl. Anggrek Jl. Sagan No.20, Sagan, Caturtunggal, Depok,Sleman, Yogyakarta</small>
                    </div>
                </div>



                <div class="social-links">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>

            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Knight</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/knight-free-bootstrap-theme/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="user/vendor/aos/aos.js"></script>
    <script src="user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="user/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="user/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="user/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="user/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="user/js/main.js"></script>

</body>

</html>
