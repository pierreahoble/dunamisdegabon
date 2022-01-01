<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title') - Dunamis Development Gabon</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/favicon.jpg')}}" rel="icon">
  <link href="{{asset('img/favicon.jpg')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
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
  <link href="{{asset('assets/css/social.css')}}" rel="stylesheet">
  @yield('style')

  <!-- =======================================================
  * Template Name: Company - v2.0.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h3 class="logo mr-auto" style="font-size:14px;">
        @if (Auth::user()->roles == "Admin")
        <a href="{{route('tableau_de_bord')}}"><img src="{{asset('assets/img/logo.jpg')}}" class="img-fluid" /></a>
        @elseif (Auth::user()->roles == "Client")
        <a href="{{route('tableaudebord')}}"><img src="{{asset('assets/img/logo.jpg')}}" class="img-fluid" /></a>
        @else
        <a href="{{route('tb_de_bord')}}"><img src="{{asset('assets/img/logo.jpg')}}" class="img-fluid" /></a>
        @endif
      </h3>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active">
          </li>
          @auth
            <li class="drop-down"><a href="">
                MENU
              </a>
              <ul>
                @if(Auth::user()->roles == "Admin")
                <li><a href="{{route('liste-des-inscriptions')}}">Liste des inscriptions</a></li>
                <li><a href="{{route('liste_des_demandes')}}">Liste des demandes</a></li>
                <li><a href="{{route('nouveau_pub')}}">Enregistrer une pub</a></li>
                <li><a href="{{route('entreprise')}}">Enregistrer une Entreprise</a></li>
                <li><a href="{{route('abonnement')}}">Enregistrer un abonnement</a></li>
                <li><a href="{{route('nouveau_pub')}}">Toutes les pub</a></li>
                <li><a href="{{route('liste_des_entreprises')}}">Liste des entreprises</a></li>
                <li><a href="{{route('liste_des_clients')}}">Liste des clients</a></li>
                <li><a href="{{route('liste_des_abonnements')}}">Clients abonnés</a></li>
                <li><a href="{{route('ajouter_projet')}}">Nouveau projet</a></li>
                @endif
                @if(Auth::user()->roles == "Entreprise")
                <li><a href="{{route('achat')}}">Enregistrer un achat</a></li>
                @endif
                @if(Auth::user()->roles == "Entreprise")
                <li><a href="{{route('ajouter-catalogue')}}">Enregistrer une image catalogue</a></li>
                <a href="{{route('liste_des_achats')}}">Liste des achats enregistrés</a>
                @endif
                @if(Auth::user()->roles == "Client")
                <li class="text-center"><a href="{{route('inscription-operateur')}}">Devenir Operateur</a></li>
                @endif
                <li><a href="{{route('reinit')}}">Réinitialiser mon mot de passe</a></li>
                <li>
                  <form method="post" action="{{route('Deconnexion')}}">
                    {{csrf_field()}}
                    <button class="btn btn-default" type="submit"
                      style="margin-left:10px;font-size:14px;font-weight:700;width:100%;">
                      Déconnexion
                    </button>
                  </form>
                <li>
                </li>
              </ul>
            </li>
          @endauth
        </ul>
      </nav>
      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-user"></i>
          Bienvenue
          @auth
          @if(Auth::user()->roles == "Admin")
          {{Auth::user()->name}}
          @elseif (Auth::user()->roles == "Client")
          {{DB::table('compte')->where('users_id',Auth::user()->id)->first()->nom}}
          @else
          {{Auth::user()->name}}
          @endif
          @endauth
        </a>
      </div>
    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->

    @yield('content')
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
  <!-- Load Facebook SDK for JavaScript -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>DUNAMIS DEVELOPMENT GABON</span></strong>. Tous droits reservés.
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
  <script src="{{asset('assets/js/social.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>


  @stack('scripts')

</body>

</html>