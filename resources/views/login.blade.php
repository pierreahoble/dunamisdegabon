@extends('layout3')
@section('title', 'Authentification')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<!-- End Breadcrumbs -->
<section id="contact" class="contact">
	<div class="container">
		<br />
		<br />
		<div style="background-color:#fff;padding:15px;">
			<h3 align="center"><i class="icofont-unlock"></i> Connexion</h3>
		</div>
		<br />
		<form method="post" action="{{route('ConnexionPost')}}" role="form" class="php-email-form">
			{{csrf_field()}}
			<div class="row" data-aos="fade-up">
				<div class="col-lg-6">
					<img src="{{asset('img/login.jpg')}}" class="img-fluid" style="border-radius:80px;">
				</div>
				<div class="col-lg-6">
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

					<br />
					<div class="form-row">
						<div class="col-md-12 form-group">
							<label class="label-control"><b>Votre email</b></label>
							<input id="email" type="email" class="form-control" name="email"
								placeholder="Veuillez saisir votre email" required>
							<div class="validate"></div>
						</div>
						<div class="col-md-12 form-group">
							<label class="label-control"><b>Mot de passe</b></label>
							<input type="password" class="form-control" name="password"
								placeholder="Veuillez saisir le mot de passe" required>
							<div class="validate"></div>
						</div>
						<div class="col-md-12 form-group">
							<button type="submit" class="btn btn-primary" style="width:100%;">
								<i class="icofont-unlocked"></i> Se connecter
							</button>
						</div>
					</div>
					<div class="form-group row">

						<div class="col-md-12 form-group" style="text-align:center;">
							<p style="text-align:center;">
								<center>Vous n'avez pas de compte? <a href="{{url('sinscrire')}}" style="color:red;">
										<b>S'inscrire <i class="icofont-login"></i> </b></a></center>
							</p>
						</div>

					</div>
		</form>
	</div>

	</div>
	</div>
	</div>
</section><!-- End Contact Section -->
@endsection