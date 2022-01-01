@extends('layout2')
@section('title', 'Nouvel achat')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
 <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbss">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2><i class="icofont-money-bag" style="font-size:25px;"></i> Nouvel achat</h2>
          <ol>
            <li>@if (Auth::user()->roles == "Admin") 
            <a href="{{route('tableau_de_bord')}}"><i class="icofont-reply-all" style="font-size:25px;"></i> Retourner au tableau de bord</a>
			@elseif (Auth::user()->roles == "Client") 
		    <a href="{{route('tableaudebord')}}"><i class="icofont-reply-all" style="font-size:25px;"></i> Retourner au tableau de bord</a>
			@else
			<a href="{{route('tb_de_bord')}}"><i class="icofont-reply-all" style="font-size:25px;"></i> Retourner au tableau de bord</a>
			@endif</li>
            <li>Tableau de bord</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
   <!-- End Breadcrumbs -->
    <section id="contact" class="contact">
      <div class="container">
		<div style="background-color:#fff;padding:15px;margin-top:-45px;">
		  <h3 align="center"><i class="icofont-money-bag"></i> Ajouter un nouvel achat</h3>
		  </div>
		  <form method="post" action="{{route('achatPost')}}" role="form" class="php-email-form" enctype="multipart/form-data">
            {{csrf_field()}}
			<br/>
        <div class="row mt-2 justify-content-center" data-aos="fade-up">
          <div class="row col-lg-10">
          <div class="col-lg-5">
		  @if (session('status'))
				<div class="alert alert-success" style="font-size: 15px; background-color: #328039; color: white">
					<i class="ti-check"></i> {{ session('status') }}
				</div>
			@endif

			@if (session('error'))
				<div class="alert alert-danger" style="font-size: 15px;color: white;background-color:red;">
					<i class="ti-na"></i> {{ session('error') }}
				</div>
			@endif
			
			<br/>
		    
              <div class="form-row">
                <div class="col-md-12 form-group">
				<label class="label-control">Code du client</label>
                  <input id="code_client" type="text" class="form-control" name="code_client" placeholder="Veuillez saisir le code du client" required>
				  <div class="validate"></div>
                </div>
                <div class="col-md-12 form-group">
				<label class="label-control">Article acheté</label>
                  <input id="article_achete" type="text" class="form-control" name="article_achete" placeholder="Veuillez saisir l'article acheté" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control">Montant</label>
                  <input id="montant" type="text" class="form-control" name="montant" placeholder="Veuillez saisir le montant" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-6 form-group">
							<button type="reset" class="btn btn-danger" style="width:100%;">
                                    <i class="icofont-reply-all"></i> Annuler
                            </button>
							</div>
							<div class="col-md-6 form-group">
							<button type="submit" class="btn btn-primary" style="width:100%;">
                                    <i class="icofont-tick-mark"></i> Enregistrer
                            </button>
							</div>
              </div>
            </form>
          </div>
		  <div class="col-lg-5">
			<img src="{{asset('img/operateur.jpg')}}" class="img-fluid" style="border-radius:80px;">
          </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
@endsection
