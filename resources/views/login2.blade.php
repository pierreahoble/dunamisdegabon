@extends('layout4')
@section('title', 'Authentification')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
    <!-- End Breadcrumbs -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-6">
		  <div style="background-color:#fff;padding:15px;">
		  <h3 align="center">Connexion</h3>
		  </div>
		  <br/>
		  @if (session('status'))
				<div class="alert alert-success" style="font-size: 15px; background-color: #328039; color: white">
					<i class="ti-check"></i> {{ session('status') }}
				</div>
			@endif

			@if (session('error'))
				<div class="alert alert-danger" style="font-size: 15px;color: white">
					<i class="ti-na"></i> {{ session('error') }}
				</div>
			@endif
		    <form method="post" action="{{route('ConnexionPost')}}" role="form" class="php-email-form">
            {{csrf_field()}}
			<br/>
              <div class="form-row">
                <div class="col-md-12 form-group">
                  <input id="email" type="email" class="form-control" name="email" placeholder="Veuillez saisir votre email" required>
				  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                  <input type="password" class="form-control" name="password" placeholder="Veuillez saisir le mot de passe" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
							<button type="submit" class="btn btn-primary" style="width:100%;">
                                    Se connecter
                            </button>
							</div>
							<div class="col-md-12 form-group" style="text-align:center;">
								<p style="text-align:center;"><center><a style="width:100%;" class="btn btn-primary" href="{{route('dashbord')}}"> Retour</a></center></p>
							</div>
              </div>
			  
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
@endsection
