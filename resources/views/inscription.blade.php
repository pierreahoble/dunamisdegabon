@extends('layout3')
@section('title', 'Inscription')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="contact" class="contact">
	<div class="container">
		<br /><br />
		<div style="background-color:#fff;padding:15px;">
			<h3 align=""><i class="icofont-numbered"></i> Inscription client</h3>
		</div>
		<br />
		<form method="post" action="{{route('inscriptionPost')}}" role="form" class="php-email-form">
			{{csrf_field()}}
			<br />
			<div class="row mt-10" data-aos="fade-up">
				<div class="row" data-aos="fade-up">
					<div class="col-lg-6">
						@if (session('status'))
						<div class="alert alert-success"
							style="font-size: 15px; background-color: #328039; color: white">
							<i class="ti-check"></i> {{ session('status') }}
						</div>
						@endif

						@if (session('error'))
						<div class="alert alert-danger" style="font-size: 15px;color: white">
							<i class="ti-na"></i> {{ session('error') }}
						</div>
						@endif
						<div class="form-row">
							<div class="col-md-12 form-group">
								<label class="label-control"><b>Nom</b></label>
								<input id="nom" type="text" class="form-control" name="nom"
									placeholder="Veuillez saisir votre nom" required>
								<div class="validate"></div>
							</div>
							<div class="col-md-12 form-group">
								<label class="label-control"><b>Prénoms</b></label>
								<input id="prenoms" type="text" class="form-control" name="prenoms"
									placeholder="Veuillez saisir le(s) prénom(s)" required>
								<div class="validate"></div>
							</div>
							<div class="col-md-12 form-group">
								<label class="label-control"><b>Téléphone</b></label>
								<input id="telephone" type="text" class="form-control" name="telephone"
									placeholder="Ex : 77 81 67 37" required>
								<div class="validate"></div>
							</div>
							<div class="col-md-12 form-group">
								<label class="label-control"><b>Adresse E-mail</b></label>
								<input id="email" type="email" class="form-control" name="email"
									placeholder="Veuillez saisir votre email" required>
								<div class="validate"></div>
							</div>
							<div class="col-md-12 form-group">
								<label class="label-control"><b>Mot de passe</b></label>
								<input type="password" class="form-control" name="password"
									placeholder="Veuillez saisir un mot de passe" required>
								<div class="validate"></div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" class="btn btn-primary" style="width:100%;">
									<i class="icofont-sign-in"></i> S'inscrire
								</button>
							</div>
							<div class="col-md-12 form-group">
								<a href="#" style="width:100%;text-align:center;">
									<i class="icofont-notepad"></i> Conditions d'utilisation
								</a>
							</div>
						</div>
		</form>
	</div>
	<div class="col-lg-6">
		<img src="{{asset('img/client.jpg')}}" class="img-fluid" style="border-radius:80px;">
	</div>
	</div>
	</div>
	</div>
	</div>
</section><!-- End Contact Section -->
@endsection