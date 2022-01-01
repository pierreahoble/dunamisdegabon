@extends('layout4')
@section('title', 'Inscription')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
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
		  <div style="background-color:#fff;padding:15px;">
		  <h3 align="center">Inscription client</h3>
		  </div>
		  <br/>
		    <form method="post" action="{{route('inscriptionPost')}}" role="form" class="php-email-form">
            {{csrf_field()}}
			<br/>
              <div class="form-row">
				<div class="col-md-12 form-group">
				<label class="label-control">Nom <font color="red">*</font></label>
                  <input id="nom" type="text" class="form-control" name="nom" placeholder="Veuillez saisir votre nom" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control">Prénoms <font color="red">*</font></label>
                  <input id="prenoms" type="text" class="form-control" name="prenoms" placeholder="Veuillez saisir vos prénoms" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control">Téléphone(précédé de l'indicatif) <font color="red">*</font></label>
                  <input id="telephone" type="text" class="form-control" name="telephone" placeholder="Ex : +22890124578" required>
				  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
				<label class="label-control">Adresse E-mail <font color="red">*</font></label>
                  <input id="email" type="email" class="form-control" name="email" placeholder="Veuillez saisir votre email" required>
				  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
				<label class="label-control">Mot de passe <font color="red">*</font></label>
                  <input type="password" class="form-control" name="password" placeholder="Veuillez saisir le mot de passe" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
							<button type="submit" class="btn btn-primary" style="width:100%;">
                                    S'inscrire
                            </button>
							</div>
							<div class="col-md-12 form-group" style="text-align:center;">
								<p style="text-align:center;"><center><a class="btn btn-info" href="{{route('inscription-mobile')}}"> Retour</a></center></p>
							</div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
@endsection
