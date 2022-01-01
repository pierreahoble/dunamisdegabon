@extends('layout2')
@section('title', 'Réinitialiser mot de passe')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbss">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Réinitialiser mot de passe</h2>
          <ol>
            <li>
			@if (session('user')->roles == "Admin") 
            <a href="{{route('tableau_de_bord')}}">Tableau de bord</a>
		@elseif (session('user')->roles == "Client") 
		    <a href="{{route('tableaudebord')}}">Tableau de bord</a>
		@elseif (session('user')->roles == "Consultant") 
		    <a href="{{route('tableaudebordconsultant')}}">Tableau de bord</a>
		@else
			<a href="{{route('tb_de_bord')}}">Tableau de bord</a>
		@endif
			</li>
            <li>Réinitialiser mot de passe</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
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
		  <h3 align="center">Réinitialiser le mot de passe</h3>
		  <br/>
		    <form method="post" action="{{route('reinitPost')}}" role="form" class="php-email-form">
            {{csrf_field()}}
			<br/>
              <div class="form-row">
                <div class="col-md-12 form-group">
                  <input id="password1" type="password" class="form-control" name="password1" placeholder="Veuillez saisir le nouveau mot de passe" required>
				  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
                  <input type="password" class="form-control" name="password2" placeholder="Veuillez confirmer le nouveau mot de passe" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
							<button type="submit" class="btn btn-primary" style="width:100%;">
                                    Se connecter
                            </button>
							</div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
@endsection
