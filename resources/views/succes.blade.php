@extends('layout3')
@section('title', 'Succès inscription')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
   <!-- End Breadcrumbs --><br/><br/><br/><br/>
    <section id="contact" class="contact" style="background-color:#fff;">
      <div class="container">

        <div class="row mt-10 justify-content-center" data-aos="fade-up">
          <div class="section-header text-center" style="padding-top: 50px">
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
         
        </div>
		
		<div class="col-md-18">
		<br/>
		<div class="alert alert-success" style="font-size: 20px; color: white;background-color:green;text-align:center;">
		<br/><br/><br/>
                            <i class="ti-na"></i> Votre inscription s'est bien déroulé avec succès! <br/>Nous sommes heureux de vous compter parmi nous.<br/>
							Veuillez vous connecter à votre espace opérateur en cliquant sur le lien suivant <br/><br/>
							<a href="login" type="button" class="btn btn-danger" style="color:#fff">Connexion opérateur</a>
                        <br/><br/><br/><br/>
						</div>
        </div>
		</div>
      </div>
    </section><!-- End Contact Section -->
@endsection
