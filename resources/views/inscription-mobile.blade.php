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
		  <h3 align="center">Choix du profil</h3>
		  </div>
		  <br/>
		    <div class="col-md-12 form-group" style="text-align:center;">
					<p style="text-align:center;"><center><a class="btn btn-primary" href="{{route('inscription2')}}" style="width:100%;">  CLIENT</a></center></p>
				</div>
				<div class="col-md-12 form-group" style="text-align:center;">
					<p style="text-align:center;"><center><a class="btn btn-success" href="{{route('inscription-operateur-mobile')}}" style="width:100%;">  OPERATEUR</a></center></p>
				</div>
				<div class="col-md-12 form-group" style="text-align:center;">
					<p style="text-align:center;"><center><a class="btn btn-warning" href="{{route('inscription-consultant-mobile')}}" style="width:100%;">  CONSULTANT</a></center></p>
				</div>
				<div class="col-md-12 form-group" style="text-align:center;">
					<p style="text-align:center;"><center><a class="btn btn-danger" href="{{route('inscription-partenaire-mobile')}}" style="width:100%;">  PARTENAIRE</a></center></p>
				</div>
				<div class="col-md-12 form-group" style="text-align:center;">
					<p style="text-align:center;"><center><a class="btn btn-info" href="{{route('dashbord')}}"> Retourner à l'accueil</a></center></p>
				</div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
@endsection
