@extends('layout3')
@section('title', 'Choix du profil')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbss">
	<div class="container">

		<div class="d-flex justify-content-between align-items-center">
			<h2>Choix du profil</h2>

		</div>

	</div>
</section>
<!-- ======= About Us Section ======= -->
<!-- End About Us Section -->
<section id="contact" class="contact">
	<div class="container">

		<div class="row justify-content-center" data-aos="fade-up">
			<div class="col-lg-12">
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
				<div class="row">
					<div class="col-md-6 form-group" style="text-align:center;">
						<a href="{{route('inscription')}}">
							<img src="{{asset('img/client.jpg')}}" class="img-fluid" style="border-radius:80px;">
							<p>Devenir client</p>
							<p style="text-align:justify;font-size:13px;color:gray;">En tant que client, vous ferez des
								achats auprès de nos opérateurs et vous bénéficierez des bonus sur chaque achat réalisé.
								Vous inviterez des amis à s'inscrire et vous aurez des
								bonus d'invitation que vous récupérerez quand vous voulez.</p>

						</a>
					</div>
					<div class="col-md-6 form-group" style="text-align:center;">
						<a href="{{route('inscription-operateur')}}">
							<img src="{{asset('img/operateur.jpg')}}" class="img-fluid" style="border-radius:80px;">
							<p>Devenir opérateur économique</p>
							<p style="text-align:justify;font-size:13px;color:gray;">En devenant un operateur économique
								de Dunamis, vous intégrez un vaste réseau d'operateurs vous permettant ainsi d'écouler
								vos produits ou d'acheter des produits dont
								votre entreprise a besoin.</p>
						</a>
						<!--<p align="center"><br><a href="{{asset('assets/doc/form_operateur.docx')}}">TÉLÉCHARGER FORMULAIRE OPÉRATEUR</a></p>-->
					</div>
{{-- 					
					<div class="col-md-3 form-group" style="text-align:center;">
						<a href="{{route('inscription-consultant')}}">
							<img src="{{asset('img/consultant.jpg')}}" class="img-fluid" style="border-radius:80px;">
							Devenir consultant
							<p style="text-align:justify;font-size:13px;color:gray;">
								Pour servir au mieux ses clients, Dunamis Développement dispose d’un vaste réseau de
								spécialistes et experts, passionnés et riches de plus de plusieurs d’expérience;
								A ce titre, elle est heureuse de vous compter parmi la plateforme des spécialistes et
								experts.
							</p>
						</a>
						<!--<p align="center"><br><a href="{{asset('assets/doc/form_consultant.docx')}}">TÉLÉCHARGER FORMULAIRE CONSULTANT</a></p>-->
					</div> --}}

					{{-- <div class="col-md-3 form-group" style="text-align:center;">
						<a href="{{route('inscription-partenaire')}}">
							<img src="{{asset('img/partenaire.jpg')}}" class="img-fluid" style="border-radius:80px;">
							Devenir partenaire
							<p style="text-align:justify;font-size:13px;color:gray;">En tant que partenaire de Dunamis,
								vous pouvez nous apporter vos conseils juridiques, financiers pour l'évolution de
								Dunamis, votre point de vue est vivement souhaité dans plusieurs domaines
								telles que la santé, l'agriculture...</p>
						</a>
						<!--<p align="center"><br><a href="{{asset('assets/doc/form_partenaire.docx')}}">TÉLÉCHARGER FORMULAIRE PARTENAIRE</a></p>-->
					</div> --}}
				</div>
			</div>
		</div>
	</div>
</section><!-- End Contact Section -->
@endsection