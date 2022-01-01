<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') - Dunamis Development Gabon</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

   <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
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
 <!-- ======= Breadcrumbs ======= -->
    <!-- End Breadcrumbs -->
    <section id="contact" class="contact" style="margin-top:-105px;">
      <div class="container">
        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-6">
		  <div style="background-color:#fff;padding:15px;">
		  <h3 align="center">Bienvenue !</h3>
		  </div>
		  <div style="background-color:#fff;padding:15px;">
		  <div class="col-md-12 form-group" style="text-align:center;">
					<p style="text-align:center;"><center>
		  <img src="{{asset('assets/img/logo.jpg')}}" class="img-fluid"/>
		    </center></p>
				</div>
				<br/>
				<div class="col-md-12 form-group" style="text-align:center;">
					<p style="text-align:center;">La meilleur plateforme pour vendre, acheter et économiser.</p>
				</div>
							
				<div class="col-md-12 form-group" style="text-align:center;">
					<p style="text-align:center;"><center><a class="btn btn-success" href="{{route('login2')}}" style="width:100%;"> <img src="{{asset('assets/img/connect.png')}}" class="img-fluid"/> Connexion</a></center></p>
				</div>
				<div class="col-md-12 form-group" style="text-align:center;">
					<p style="text-align:center;"><center><a class="btn btn-default" href="{{route('inscription-mobile')}}" style="width:100%;background-color:gray;"><img src="{{asset('assets/img/register.png')}}" class="img-fluid"/> Inscription</a></center></p>
				</div>
              </div>
              </div>
			  
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
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

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  @stack('scripts')
</body>
</html>
