@extends('layout2')
@section('title', 'Ajouter une entreprise')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbss">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Ajouter une entreprise</h2>
          <ol>
            <li>
			@if (Auth::user()->roles == "Admin") 
            <a href="{{route('tableau_de_bord')}}">Tableau de bord</a>
		@elseif (Auth::user()->roles == "Client") 
		    <a href="{{route('tableaudebord')}}">Tableau de bord</a>
		@else
			<a href="{{route('tb_de_bord')}}">Tableau de bord</a>
		@endif
			</li>
            <li>Ajouter une entreprise</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-6">
		  <div style="background-color:#fff;padding:15px;">
		  <h3 align="center">Ajouter une entreprise</h3>
		  </div>
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
			
			<br/>
		    <form method="post" action="{{route('entreprisePost')}}" role="form" class="php-email-form" enctype="multipart/form-data">
            {{csrf_field()}}
			<br/>
              <div class="form-row">
                <div class="col-md-12 form-group">
				<label class="label-control">Nom ou raison sociale</label>
                  <input id="raison_sociale" type="text" class="form-control" name="raison_sociale" placeholder="Veuillez saisir le nom de l'entreprise" required>
				  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
				<label class="label-control">Nom du représentant/gérant</label>
                  <input id="nom_rep" type="text" class="form-control" name="nom_rep" placeholder="Veuillez saisir le nom du représentant" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control">Prénoms du représentant/gérant</label>
                  <input id="prenom_rep" type="text" class="form-control" name="prenom_rep" placeholder="Veuillez saisir les prénoms du représentant" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control">Adresse Email</label>
                  <input id="email" type="email" class="form-control" name="email" placeholder="Veuillez saisir l'adresse email" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control">Téléphone</label>
                  <input id="telephone" type="text" class="form-control" name="telephone" placeholder="Veuillez saisir le telephone" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control">Adresse</label>
                  <input id="adresse" type="email" class="form-control" name="adresse" placeholder="Veuillez saisir l'adresse">
				  <div class="validate"></div>
                </div>
				<div class="col-md-6 form-group">
							<button type="reset" class="btn btn-danger" style="width:100%;">
                                    Annuler
                            </button>
							</div>
							<div class="col-md-6 form-group">
							<button type="submit" class="btn btn-primary" style="width:100%;">
                                    Enregistrer
                            </button>
							</div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
@endsection
