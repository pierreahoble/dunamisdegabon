<!DOCTYPE html>
<html>

<head>
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <!-- Favicons -->
  <link href="{{asset('img/favicon.jpg')}}" rel="icon">
  <link href="{{asset('img/favicon.jpg')}}" rel="apple-touch-icon">
  <link href="{{asset('assets/css/font-awesome/css/font-awesome.min.css')}}" rel="apple-touch-icon">

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

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="{{url('/')}}"><img src="{{asset('assets/img/logo.jpg')}}" class="img-fluid"/></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

       <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('/')}}">Accueil</a></li>
		  <li><a href="{{url('/apropos')}}">A propos</a></li>
          <li class="drop-down"><a href="#">Principales activités</a>
            <ul>
              <li><a href="{{route('bureau-d-etude')}}">Bureau d’études </a></li>
              <li><a href="{{url('/incubateur-d-entreprise')}}">Incubateur d’entreprises </a></li>
              <li><a href="{{route('e-dunamis')}}">Dunamis Club</a></li>
              <li><a href="{{route('plateforme-affaire')}}">Plateforme E-dunamis</a></li>
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
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">
          
          <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{asset('assets/img/slide/slide33.jpg')}});background-position: center center;">
          <div class="container">
            <div class="carousel-content animated fadeInUp">
			<h2>Aux entreprises</h2>
              <p>Chefs d’entreprise, gérant de société, 
				vous avez la solution idéale en ligne 
				pour booster votre activité. C’est très 
				simple et gratuit. <br/>
				Votre pérennité fait notre réputation !!!
                  <br/>
				Contactez-nous pour plus d’informations
				</p>
            </div>
          </div>
        </div>

        <!-- Slide 1 -->
        <div class="carousel-item" style="background-image: url({{asset('assets/img/slide/slide-1.jpg')}});background-position: center center;">
          <div class="container">
            <div class="carousel-content animated fadeInUp">
			<h2>Aux entreprises</h2>
              <p>Chefs d’entreprise, gérant de société, 
				vous avez la solution idéale en ligne 
				pour booster votre activité. C’est très 
				simple et gratuit. <br/>
				Votre pérennité fait notre réputation !!!
                  <br/>
				Contactez-nous pour plus d’informations
				</p>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{asset('assets/img/slide/slide22.jpg')}});background-position: center center;">
          <div class="container">
            <div class="carousel-content animated fadeInUp">
              <h2>Aux clients</h2>
              <p>
			  Vous pouvez faire des achats et bénéficier des bonus de réduction que vous récupérerez ensuite. Invitez
			  vos amis de part les réseaux sociaux et bénéficier aussi des bonus en fonction du nombre d'amis invités et souscrits.
			  Vous économisez et vous gagnez facilement avec notre plateforme. Essayez et parlez autour de vous !
			  </p>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
       

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->
    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us" style="background-color:#fff;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Qui sommes-nous?</strong></h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
			<p align="justify" style="line-height:2">
				Dunamis Development est une entreprise de soutien et de conseil qui accompagne l’ensemble
			  des acteurs du développement économique et social du Gabon (privés et publics), en offrant
			  les meilleures prestations pour la réussite de leurs projets de bout en bout, de la stratégie
			  à la mise en œuvre, en passant par l’appui au financement. Pour servir au mieux ses clients, 
			  Dunamis Development dispose d’un vaste réseau de spécialistes et experts, passionnés et riches
			  de plusieurs années d’expérience...<br/>
			  <p align="center"><button class="btn btn-success"><a href="{{url('/apropos')}}" style="color:#fff;">En savoir plus</a></button></p>
			</p>
          </div>
          <div class="col-lg-6 pull-right" data-aos="fade-left" style="padding-left:5px;">
				<img src="{{asset('img/hv2.jpg')}}" />
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
   <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nos services</strong></h2>
          <p>Les trois (3) branches d'activités que nous offrons aux clients.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="icofont-architecture-alt"></i>
              </div>
              <h4><a href="">Bureau d'études et de conseils</a></h4>
              <p>Conseils aux entreprises : Externalisation des besoins en management de l’entreprise</p>
			  <p><a href="{{route('bureau-d-etude')}}">En savoir plus</a></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="icofont-handshake-deal"></i>
              </div>
              <h4><a href="">Incubateur d'entreprises</a></h4>
              <p>Centre de ressource économique et social pour le développement des provinces</p>
			  <p><a href="{{url('/incubateur-d-entreprise')}}">En savoir plus</a></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="icofont-money-bag"></i>
              </div>
              <h4><a href="">Plateforme de commerce en ligne</a></h4>
              <p>Une place de marchés disponible à tous les clients abonnés afin de bénéficier des produits des entreprises du réseau.</p>
			  <p><a href="{{route('e-dunamis')}}">En savoir plus</a></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
    <!-- ======= Portfolio Section ======= -->
    <!-- End Portfolio Section -->
	<!-- ======= Counts Section ======= -->
    <section id="counts" class="counts" style="background-color:#fff;margin-top:-90px;">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">{{$projet}}</span>
              <p align="center"><strong>Nombre total de demande de projets déjà enregistré.</strong></p>
            </div>
          </div>
			<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-users"></i>
              <span data-toggle="counter-up">{{$consultant}}</span>
              <p align="center"><strong>Nombre total de consultant déjà inscrit (Bureau d'étude et conseils)</strong></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">{{$operateur}}</span>
              <p><strong>Nombre total d'entreprise déjà inscrit (Incubateur d'entreprise)</strong></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">{{$ins}}</span>
              <p><strong>Nombre total de clients ayant rejoins DUNAMIS CLUB</strong></p>
            </div>
          </div>

        </div>

      </div>
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
    </section><!-- End Counts Section -->
 <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
		<div class="col-lg-4 col-md-6 footer-newsletter">
            <p>
			<img src="{{asset('assets/img/logo.jpg')}}" class="img-fluid"/>
			</p>
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
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/js/moi.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>