@extends('layout2')
@section('title', 'Liste des inscriptions')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbss">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Liste des inscriptions</h2>
          <ol>
            <li><a href="{{url('/choix-profil')}}">Accueil</a></li>
            <li>Liste des inscriptions</li>
          </ol>
        </div>

      </div>
    </section>
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
		        <div class="form-row">
				
				<div class="col-md-12 form-group">
				<a href="{{route('liste-des-consultants')}}" type="button" class="btn btn-danger" style="width:100%;">
						LISTE DES CONSULTANTS
				</a>
				</div>
				<div class="col-md-12 form-group">
				<a href="{{route('liste-des-partenaires')}}" type="button" class="btn btn-primary" style="width:100%;">
						LISTE DES PARTENAIRES
				</a>
				</div>
				<div class="col-md-12 form-group">
				<a href="{{route('liste-des-operateurs')}}" type="button" class="btn btn-warning" style="width:100%;">
						LISTE DES OPÉRATEURS
				</a>
				</div>	
              </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
@endsection
