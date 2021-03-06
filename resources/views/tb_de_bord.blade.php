@extends('layout2')
@section('title','Tableau de bord')

@section('style')
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css"
	integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbss">
	<div class="container">

		<div class="d-flex justify-content-between align-items-center">
			<h2><i class="icofont-bank-alt" style="font-size:25px;"></i> Tableau de bord</h2>
			<ol>
				<li>@if (Auth::user()->roles == "Admin")
					<a href="{{route('tableau_de_bord')}}"><i class="icofont-bank-alt" style="font-size:25px;"></i>
						Tableau de bord</a>
					@elseif (Auth::user()->roles == "Client")
					<a href="{{route('tableaudebord')}}"><i class="icofont-bank-alt" style="font-size:25px;"></i>
						Tableau de bord</a>
					@else
					<a href="{{route('tb_de_bord')}}"><i class="icofont-bank-alt" style="font-size:25px;"></i> Tableau
						de bord</a>
					@endif
				</li>
				<li>Tableau de bord</li>
			</ol>
		</div>

	</div>
</section><!-- End Breadcrumbs -->

<!-- ======= Services Section ======= -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">
	<div class="container" data-aos="fade-up">

		<div class="row">
			@php
			$f = DB::table('inscription_operateur')->where('email', Auth::user()->email)->first()->id;
			$img = DB::table('catalogue_operateur')->where('inscription_id', $f)->get()->count();
			@endphp
			<div class="col-lg-12 col-md-4 mt-4 mt-md-0">
				@if($img > 0)

				@else
				<div class="alert alert-danger" style="font-size: 15px; background-color: #fb5757; color: white">
					<i class="ti-na"></i> Veuillez ajouter 3 images au maximum de vos produits ou de votre entreprise
				</div>
				@endif
				@if (session('status'))
				<div class="alert alert-warning" style="font-size: 15px; background-color: #328039; color: white">
					<i class="fa fa-warning"></i> {{ session('status') }}
				</div>
				@endif

				@if (session('error'))
				<div class="alert alert-danger" style="font-size: 15px; background-color: #fb5757; color: white">
					<i class="ti-na"></i> {{ session('error') }}
				</div>
				@endif
				@if ($errors->any())
				<div class="alert alert-danger" style="font-size: 15px; background-color: #fb5757; color: white">
					<ul>
						@foreach ($errors->all() as $error)
						<li> <i class="ti-na"></i> {{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
			</div>
			<div class="col-lg-3 col-md-4 d-flex align-items-stretch">
				<div class="member" data-aos="fade-up">
					<div class="member-img">
						@php
						$f = DB::table('inscription_operateur')->where('email',Auth::user()->email)->first()->fichier;
						$id = DB::table('inscription_operateur')->where('email', Auth::user()->email)->first()->id;
						@endphp
						@if ($f =="")
						<img src="{{asset('assets/img/team/team0.jpg')}}" class="img-fluid" alt="">
						<a type="button" href="{{route('ajouter-photo-operateur')}}" class="btn btn-info"
							style="text-align:center;width:100%;color:#fff;">Mettre ?? jour mon image</a>
						@else
						<img src="{{asset("storage/".$f)}}" style="height:510;width:510;"
							class="img-fluid img-thumbnail mb-2">
						<a type="button" href="{{route('ajouter-photo-operateur')}}" class="btn btn-info"
							style="text-align:center;width:100%;color:#fff;">Mettre ?? jour mon image</a>
						@endif
					</div>
					<div class="member-info">
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-9">
				<div class="row">
					<div class="col-lg-6">
						<div class="icon-box">
							{{-- <i class="ri-store-line" style="color: #ffbb2c;"></i> --}}
							<i class="ri-store-line"></i>
							<h3><a href="#">Nom :
									{{DB::table('users')->where('id',Auth::user()->id)->first()->name}}</a><br />
								<hr />
								<a href="#">Raison sociale :
									{{DB::table('inscription_operateur')->where('email',Auth::user()->email)->first()->raison_sociale}}</a><br />
								<hr />
								<a href="#">D??partement :
									{{DB::table('inscription_operateur')->where('email',Auth::user()->email)->first()->departement}}</a><br />
								<hr />
								<a href="#">Province :
									{{DB::table('inscription_operateur')->where('email',Auth::user()->email)->first()->province}}</a><br />
								<hr />
								<a href="#">Mon statut :
									{{DB::table('users')->where('id',Auth::user()->id)->first()->roles}}</a>
							</h3>
						</div>
					</div>


					<div class="col-lg-6">
						<div class="icon-box">

							<h3>
								<a href="#">Code d'invitation :
									@php
									$code1 =
									DB::table('users')->where('id',Auth::user()->id)->first()->code_dinvitation;
									echo $code1;
									@endphp
								</a> <br>
								<hr>
								<a href="#">Total de tous mes achats :
									{{DB::table('achat')->where('code_client',Auth::user()->code_dinvitation)->get()->sum('montant')}}
									F</a>&nbsp; <a href="{{route('liste_des_achats')}}"
									style="color:red;font-weight:200;"> Voir la liste
									>>></a> <br>
								<hr>
								<a href="#"> Commission sur les achats :
									{{DB::table('commision_client')->where('code_client',Auth::user()->code_dinvitation)->get()->sum('montant')}}
									F</a> <br>
								<hr>

								<a href=""> 
									{{-- <i class="ri-price-tag-2-line" style="color: #4233ff; height: 3%;"></i> --}}
									Bonus de parrainage :
									@php
									$d =
									\Illuminate\Support\Facades\DB::table('bonus_parrainage')->where('parrain_id',Auth::user()->id)->get()->sum('montant');
									$d = number_format($d, 0, ' ', ' ');
									echo $d."&nbsp;FCFA";
									@endphp</a> <br>
								<hr>
								<a href="">Bonus de fin d???ann??e : </a> <br>
								<hr>
								<a href="">Total amis parrain??s :
									{{DB::table('parrainage')->where('parrain_id',Auth::user()->id)->count()}}</a> <br>
								<hr>


							</h3>

							</h3>

						</div>
					</div>



				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<br>
			</div>
			<div class="col-lg-12">
				<div class="icon-box">
					<table border="1" id="myTable">
						<tr>
							<th style="text-align:center;width:350px;height:25px;">Chiffre d'affaire r??alis?? </th>
							<th style="text-align:center;width:350px;height:25px;">Commission sur le chiffre d'affaire
							</th>
							<th style="text-align:center;width:350px;height:25px;">Bonus de fin d???ann??e </th>
						</tr>
						<tr>
							<td style="text-align:center;width:350px;height:25px;">
								@php
								$cd =
								\Illuminate\Support\Facades\DB::table('achat')->where('users_id',Auth::user()->id)->get()->sum('montant');
								$cd = number_format($cd, 0, ' ', ' ');
								echo $cd."&nbsp;FCFA";
								@endphp
							</td>
							<td style="text-align:center;width:350px;height:25px;">
								@php
								$cd =
								\Illuminate\Support\Facades\DB::table('achat')->where('users_id',Auth::user()->id)->get()->sum('montant');
								$comi= $cd*0.05;
								$comi = number_format($comi, 0, ' ', ' ');
								echo $comi."&nbsp;FCFA";
								@endphp
							</td>
							<td>

							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<br />
		<br />
		@php
		$i = DB::table('inscription_operateur')->where('email', Auth::user()->email)->first()->id;
		$ii = DB::table('catalogue_operateur')->where('inscription_id', $i)->get();
		@endphp
		<div class="row">
			<div class="icon-box">
				<table border="1" id="myTable">
					<tr>
						<th colspan="3" style="text-align:center;width:350px;height:25px;">Images de produits ajout??es
						</th>
					</tr>
					<tr>
						<th style="text-align:center;width:350px;height:25px;">N??</th>
						<th style="text-align:center;width:350px;height:25px;">Fichier</th>
						<th style="text-align:center;width:350px;height:25px;">Actions</th>
					</tr>
					<tbody>
						@foreach($ii as $images)
						<tr>
							<td style="text-align:center;width:350px;height:25px;">{{$loop->iteration}}</td>
							<td style="text-align:center;width:350px;height:25px;"><a href="{{url("storage/".$images->fichier)}}">{{$images->nom_fichier}}</a></td>
							<td style="text-align:center;width:350px;height:25px;"><a
									href="{{route('supimg',['id'=>$images->id])}}"><i class="icofont-close-squared-alt"
										style="color:red;font-size:15px;"></i></a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>

		</div>

		<div class="row" >
			<div class="col-lg-12 col-md-4 mt-4">
			  <div class="icon-box">
				{{-- <i class="ri-price-tag-2-line" style="color: #4233ff;"></i> --}}
				<h3 class="text-center">Lien d'invitation :
				  @php
				  $code = route('inviter',['users_id'=>Str::limit(Crypt::encrypt(Auth::user()->id),10),'code_dinvitation'=>Auth::user()->code_dinvitation]);
				  echo "<span id='tocopy'>Bonjour je vous invite ?? vous inscrire sur la plateforme dunamisdegabon; En devenant
					client DUNAMIS CLUB, nous vous donnons la possibilit??,
					de disposer des revenus suppl??mentaires par vos simples achats. DUNAMIS DEVELOPPEMENT et les entreprises
					nationales se sont engag??s dans une convention
					de partenariat pour amorcer ensemble un d??veloppement durable.
					- Des remises exceptionnelles sur vos achats dans le r??seau DUNAMIS CLUB;
					- Un avantage int??ressant pour b??n??ficier des meilleures conditions tarifaires pour vos achats dans les
					boutiques, supermarch??s, acquisitions de mat??riels, vos s??minaires, formations ou ??v??nements clients,
					location d???h??tels, frais de formation ???;
					- Acc??s ?? une plateforme d'achats vous permettant d'obtenir des r??ductions sur des services B to B
					(r??servations d'h??tels, de voitures, etc...);
					- Cet avantage est particuli??rement destin?? aux clients de DUNAMIS CLUB;
					- Tous les jours, 3% du montant de vos achats de biens et services aupr??s des entreprises du r??seau sont
					cr??dit??s sur votre compte sans limitation;
					- Gagner des prix en fin d???ann??e afin de r??aliser vos r??ves;
					voici mon lien d'invitation :".$code."</span>";
				  echo "<input type='button' value='Copier' class='js-copy btn btn-primary' data-target='#tocopy'>";
				  $description="Bonjour je vous invite ?? vous inscrire sur la plateforme dunamisdegabon; En devenant client
				  DUNAMIS CLUB, nous vous donnons la possibilit??,
				  de disposer des revenus suppl??mentaires par vos simples achats. DUNAMIS DEVELOPPEMENT et les entreprises
				  nationales se sont engag??s dans une convention
				  de partenariat pour amorcer ensemble un d??veloppement durable. voici mon lien d'invitation :".$code;
				  @endphp
	  
	  
			  </div>
			</div>
		  </div>
</section>


<div class="share-btn-container">
	<a href="#" class="facebook-btn">
	  <i class="fab fa-facebook"></i>
	</a>
  
	<a href="#" class="twitter-btn">
	  <i class="fab fa-twitter"></i>
	</a>
  
	<a href="#" class="pinterest-btn">
	  <i class="fab fa-pinterest"></i>
	</a>
  
	<a href="#" class="linkedin-btn">
	  <i class="fab fa-linkedin"></i>
	</a>
  
	<a href="#" class="whatsapp-btn">
	  <i class="fab fa-whatsapp"></i>
	</a>
  </div>


@push('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
	integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
	crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap.min.js"
	integrity="sha512-F0E+jKGaUC90odiinxkfeS3zm9uUT1/lpusNtgXboaMdA3QFMUez0pBmAeXGXtGxoGZg3bLmrkSkbK1quua4/Q=="
	crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.dataTables.min.js"
	integrity="sha512-fQmyZE5e3plaa6ADOXBM17WshoZzDIvo7sR4GC1VsmSKqm13Ed8cO2kPwFPAOoeF0RcdhuQQlPq46X/HnPmllg=="
	crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"
	integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A=="
	crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script>
	$(document).ready( function () {
    $('#myTable').DataTable({
		language: {
        url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/French.json'
    }
	});
} );
</script>

@endpush
@endsection