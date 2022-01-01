@extends('layout2')
@section('title', 'Ajouter une publication')
@section('content')
<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbss">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Nouvelle publicité</h2>
          <ol>
            <li>
			@if (session('user')->roles == "Admin") 
            <a href="{{route('tableau_de_bord')}}">Tableau de bord</a>
		@elseif (session('user')->roles == "Client") 
		    <a href="{{route('tableaudebord')}}">Tableau de bord</a>
		@else
			<a href="{{route('tb_de_bord')}}">Tableau de bord</a>
		@endif
			</li>
            <li>Nouvelle publicité</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-6">
		  <div style="background-color:#fff;padding:15px;">
		  <h3 align="center">Ajouter une nouvelle publication</h3>
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
		    <form method="post" action="{{route('pubPost')}}" role="form" class="php-email-form" enctype="multipart/form-data">
            {{csrf_field()}}
			<br/>
              <div class="form-row">
			  
				<div class="col-md-12 form-group">
				<label class="label-control">Sélectionner l'entreprise</label>
                  <select class="form-control" name="entreprise_id" required>
						<option value="">Sélectionner l'entreprise</option>
						@foreach($entreprises as $entreprise)
						<option value="{{$entreprise->id}}">{{$entreprise->name}}</option>
						@endforeach
					</select>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control">Catégorie</label>
                  <select class="form-control" name="categories_id" required>
						<option value="">Sélectionner une catégorie</option>
						@foreach($categories as $categorie)
						<option value="{{$categorie->id}}">{{$categorie->libelle}}</option>
						@endforeach
					</select>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control">Sélectionner une image de mise en avant</label>
                  <input type="file" class="form-control" name="image" required>
                </div>
                <div class="col-md-12 form-group">
				<label class="label-control">Titre de la publication</label>
                  <input id="titre" type="text" class="form-control" name="titre" placeholder="Veuillez saisir le titre" required>
				  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
				<label class="label-control">Contenu de la publication</label>
                  <textarea class="form-control" name="contenu" rows="10" data-rule="required" data-msg="Veuillez saisir le contenu"></textarea>
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
