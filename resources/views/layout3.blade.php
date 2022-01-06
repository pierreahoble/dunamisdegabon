<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') - Dunamis Développment Gabon</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{asset('img/favicon.jpg')}}" rel="icon">
  <link href="{{asset('img/favicon.jpg')}}" rel="apple-touch-icon">
  <link href="{{asset('assets/css/font-awesome/css/font-awesome.min.css')}}" rel="apple-touch-icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('toastr/toastr.min.css')}}" rel="stylesheet" type="text/css" />

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Company - v2.0.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  @yield('style')
</head>

<body>

  @include('pages.menu')

 
  
  <main id="main">


    @yield('content')
    <!-- Load Facebook SDK for JavaScript -->



    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/fr_FR/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Chat Plugin code -->
     <div class="fb-customerchat" attribution="install_email" page_id="106216461145622">
     </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Télécharger l'app mobile</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i><a href="#">
                  <img src="{{asset('assets/img/ps.png')}}" class="img-fluid" />
                </a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i><a href="{{route('apropos')}}">A propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Politique de confidentialité</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Termes & conditions</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('bureau-d-etude')}}">Bureau d'études et
                  conseils</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/incubateur-d-entreprise')}}">Incubateur
                  d'entreprises</a></li>
              <li><a href="{{route('e-dunamis')}}">Dunamis Club</a></li>
              <li><a href="{{route('boutique')}}">Plateforme E-dunamis</a></li </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>DUNAMIS DEVELOPMENT GABON</h4>
            <p>
              Libreville - GABON<br>
              Autres infos<br>
              <strong>Téléphone:</strong> +241 77 81 67 37<br>
              <strong>Email:</strong> info@dunamisdegabon.com<br>
            </p>
          </div>


        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>DUNAMIS DEVELOPMENT GABON</span></strong>. Tout droits reservés.
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          Réalisé par <a href="https://kbe-technologies.com">KBE TECHNOLOGIES</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a target="_blank" href="https://fb.me/dunamisdegabon" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('toastr/toastr.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  @stack('scripts')
</body>

</html>