<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AFRILUB</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{URL::asset('assets/img/logo.gif')}}" rel="icon">


  <!-- Google Fonts   m3ach temes chay behi!!-->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{URL::asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <div class="logo me-auto me-lg-0"><a href="welcome.blade.php"><img src="{{URL::asset('assets/img/logo.png')}}"></a></div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="/#about">Qui Sommes-Nous</a></li>
          <li><a class="nav-link scrollto" href="/#services">Activités</a></li>
          <li class="dropdown"><a href="#"><span>Produit</span> <i class="bi bi-chevron-down"></i></a>
            
            <ul>
              <li class="dropdown"><a href="/produit/afrilub">Afrilub </a></li>
              <li class="dropdown"><a href="/produit/cimcool"><span>cimcool</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="/produit/cimcool">Produit</a></li>
                    <li><a href="{{URL::asset('assets/img/Produit/cimcool/tel.pdf')}}" target="_blank">Aerospace Approvals</a></li>
                  </ul>
                </li>
              </li>
             
              <li><a href="/produit/valvoline">Valvoline</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto " href="assets/img/map.jpeg" target="_blank">Distributeures</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/#contact" class="contact-btn scrollto">Contact</a>

    </div>
  </header><!-- End Header -->

  @yield('content')
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <img src="{{URL::asset('assets/img/logo.png')}}">
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
               <p>Route de Sousse Km 4 <br>
                   Mégrine Riadh - 2014 <br>
                  TUNISIA <br>
                  <strong>Tel:</strong>+216 29 704 452 <br>
                  <strong>Email:</strong> commercial@afrilub.com<br>
                 </p>
                <div class="social-links mt-3">
                  <a href="https://www.facebook.com/Afrique.Lubrifiant" target="_blank" class="facebook"><i
                           class="bx bxl-facebook"></i></a>
                  <a href="https://www.instagram.com/afriquelubrifiants/?hl=en" target="_blank" class="instagram"><i
                           class="bx bxl-instagram"></i></a>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 footer-links">
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#about">Qui Sommes-Nous</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">Activités</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#portfolio">Produit</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span> Afrilub</span></strong> All Rights Reserved
      </div>
      <div class="credits">Designed by <a href="https://www.facebook.com/profile.php?id=100072183115795">MetaPixel</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{URL::asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
   <!-- <script src="{{URL::asset('assets/vendor/php-email-form/validate.js')}}"></script>-->

  <!-- Template Main JS File -->
  <script src="{{URL::asset('assets/js/main.js')}}"></script>

</body>

</html>