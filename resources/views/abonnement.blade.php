@extends('layout2')
@section('title', 'Nouvel abonnement')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbss">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Abonnement</h2>
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
            <li>Abonnement</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-6">
		  <div style="background-color:#fff;padding:15px;">
		  <h3 align="center">Ajouter un nouvel abonnement</h3>
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
		    <form method="post" action="{{route('abonnementPost')}}" role="form" class="php-email-form" enctype="multipart/form-data">
            {{csrf_field()}}
			<br/>
              <div class="form-row">
			  
				<div class="col-md-12 form-group">
				<label class="label-control">Code du client</label>
                  <select class="form-control" name="compte_id" required>
						<option value="">Sélectionner le code client</option>
						@foreach($cli as $clis)
						<option value="{{$clis->users_id}}">Code : {{DB::table('users')->where('id', $clis->users_id)->first()->code_dinvitation}}/ {{$clis->nom}} {{$clis->prenoms}}</option>
						@endforeach
					</select>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control">Durée</label>
                  <select class="form-control" name="duree" required>
						<option value="">Sélectionner une durée</option>
						<option value="1 an">1 an</option>
						<option value="2 ans">2 ans</option>
						<option value="3 ans">3 ans</option>
					</select>
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
