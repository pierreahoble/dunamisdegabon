<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') - Dunamis Development Gabon</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

   <!-- Favicons -->
  <link href="{{asset('img/favicon.jpg')}}" rel="icon">
  <link href="{{asset('img/favicon.jpg')}}" rel="apple-touch-icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Company - v2.0.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background-color:#fff;">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="{{url('/')}}"><img src="{{asset('assets/img/logo.jpg')}}" class="img-fluid"/></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('/')}}">Accueil</a></li>
		  <li><a href="{{url('/apropos')}}">A propos</a></li>
          <li class="drop-down"><a href="#">Principales activités</a>
            <ul>
              <li><a href="{{route('bureau-d-etude')}}">Bureau d’études </a></li>
              <li><a href="{{route('incubateur-d-entreprise')}}">Incubateur d’entreprises </a></li>
              <li><a href="{{route('e-dunamis')}}">Dunamis Club</a></li>
              <li><a href="{{route('boutique')}}">Plateforme E-dunamis</a></li>
            </ul>
          </li>
		  <li><a href="{{route('banque-de-projet')}}">Banque de projets</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->
       <div class="header-social-links">
        <a href="{{route('login')}}" class="twitter"><i class="icofont-user"></i> Connexion</a>
		<a href="{{url('/sinscrire')}}" class="twitter"><i class="icofont-login"></i> S'inscrire</a>
      </div>
    </div>
  </header><!-- End Header -->
  <main id="main">
        <div class="row">
		<div class="col-lg-12">
		<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs img-fluid">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>@yield('description') </h2>
          <ol>
            <li><a href="{{url('/')}}">Accueil</a></li>
            <li>@yield('description')</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
	</div></div>
	
	<section id="blog" class="blog">

	 <div class="container">
	 	<div class="row">
		<div class="col-lg-8 entries">
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
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
  attribution="install_email"
  page_id="106216461145622">
</div>
	</div>
	<div class="col-lg-4" style="margin-top:45px;">

            <div class="sidebar" data-aos="fade-left">

              <h3 class="sidebar-title">Menu second</h3>
              <!-- End sidebar search formn-->
				<ul>
				<li><a href="{{route('bureau-d-etude')}}">Bureau d’études </a></li>
				<li><a href="{{url('/incubateur-d-entreprise')}}">Incubateur d’entreprises </a></li>
				<li><a href="{{route('boutique')}}">E-dunamis</a></li>
				</ul>
              <h3 class="sidebar-title">Toutes les catégories</h3>
              <div class="sidebar-item categories">
                <ul>
				@foreach($categories as $categorie)
				<li><a href="#">{{$categorie->libelle}} <span>{{DB::table('pub')->where('categorie_id',$categorie->id)->count()}}</span></a></li>
				@endforeach
                </ul>

              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Anciennement postées</h3>
              <div class="sidebar-item recent-posts">
				@foreach($pub2 as $pub3)
                <div class="post-item clearfix">
                  <img src="{{asset("public/storage/".$pub3->images)}}" alt="">
                  <h4><a href="blog-single.html">{{$pub3->titre}}</a></h4>
                  <time datetime="2020-01-01">{{$pub3->date2}}</time>
                </div>
				@endforeach

              </div><!-- End sidebar recent posts-->

              <!-- End sidebar recent posts-->

              <!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->
	</div></div></div>
	</section>
	 
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
			  <img src="{{asset('assets/img/ps.png')}}" class="img-fluid"/>
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
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('bureau-d-etude')}}">Bureau d'études et conseils</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/incubateur-d-entreprise')}}">Incubateur d'entreprises</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('e-dunamis')}}">Plateforme de commerce</a></li>
            </ul>
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