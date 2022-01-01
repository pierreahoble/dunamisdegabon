@extends('layout3')
@section('title', 'Inscription consultant')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
   <!-- End Breadcrumbs -->
    <section id="contact" class="contact">
      <div class="container">
	  <br/><br/>
	  <div style="background-color:#fff;padding:15px;">
		  <h3 align=""><i class="icofont-unique-idea"></i> Inscription consultant</h3>
		  </div>
			<br/>
		<form method="post" action="{{route('opcPost')}}" role="form" id="formulaire2" class="php-email-form" enctype="multipart/form-data">
            {{csrf_field()}}
        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
			@if (session('status'))
                        <div class="alert alert-success" style="font-size: 15px; background-color: #328039; color: white">
                            <i class="ti-check"></i> {{ session('status') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" style="font-size: 15px; background-color: #fb5757; color: white">
                            <i class="ti-na"></i> {{ session('error') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger" style="font-size: 15px; background-color: #fb5757; color: white" >
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> <i class="ti-na"></i> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
			<br/>
				<div class="form-row">
				<div class="col-md-12 form-group">
				<label class="label-control"><b>NOM</b><font color="red">*</font></label>
                  <input id="nom" type="text" class="form-control" name="nom" placeholder="Veuillez saisir votre nom" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control"><b>PRÉNOMS</b><font color="red">*</font></label>
                  <input id="nom" type="text" class="form-control" name="prenoms" placeholder="Veuillez saisir le(s) prénom(s)" required>
				  <div class="validate"></div>
                </div>
                </div>
				<div class="form-row">
				<div class="col-md-12 pd-telephone-input form-group">
				<label class="label-control"><b>TELEPHONE/MOBILE </b><font color="red">*</font></label>
                  <input id="phone" type="tel" class="form-control pd-telephone-input" name="telephone" placeholder="Ex :77 81 67 37" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control"><b>ADRESSE</b> <font color="red">*</font></label>
                  <input id="adresse" type="text" class="form-control" name="adresse" placeholder="Veuillez saisir l'adresse">
				  <div class="validate"></div>
                </div>
                </div>
				<div class="form-row">
				<div class="col-md-12 form-group">
				<label class="label-control"><b>NATIONALITÉ</b> <font color="red">*</font></label>
				  <select id="nationalite" type="text" class="form-control" name="nationalite" required>
					<option>Veuillez sélectionner</option>
					@foreach($pays as $payss)
					<option value="{{$payss->id}}">{{$payss->nom}}</option>
					@endforeach
				  </select>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control"><b>DATE DE NAISSANCE </b><font color="red">*</font></label>
                  <input id="datenais" type="date" class="form-control" name="datenais" placeholder="10/10/1990" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control"><b>VILLE DE RÉSIDENCE</b> <font color="red">*</font></label>
                  <input id="ville" type="text" class="form-control" name="ville" placeholder="Saisir votre ville" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control"><b>Email</b> <font color="red">*</font></label>
                  <input id="email" type="email" class="form-control" name="email" placeholder="Veuillez saisir l'adresse email" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control"><b>Mot de passe </b><font color="red">*</font></label>
                  <input id="password" type="password" class="form-control" name="password" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control"><b>Confirmer mot de passe</b> <font color="red">*</font></label>
                  <input id="confirm" type="password" class="form-control" name="confirm" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
                  <input id="accepter" type="checkbox" class="form-control" name="accepter" style="width:30px;height:30px;" required>
				  J'accepte les termes et conditions<div class="validate"></div>
                </div>
                </div>
				<div class="form-row">
				<div class="col-md-6 form-group">
				<button type="reset" class="btn btn-danger" style="width:100%;">
						<i class="icofont-reply-all"></i> Annuler
				</button>
				</div>
				<div class="col-md-6 form-group">
				<button type="submit" class="btn btn-primary" style="width:100%;">
						<i class="icofont-sign-in"></i> Enregistrer
				</button>
				</div>
				</div>
              <div class="row">
				<div class="col-md-12">
				<a href="#">
					   Politique de confidentialité
				</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#">
					   Conditions d'utilisation
            </a>
			</div>
		    </div>
            </form>
          </div>
		  <div class="col-lg-6">
			<img src="{{asset('img/consultant.jpg')}}" class="img-fluid" style="border-radius:80px;">
        </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
@endsection
