@extends('layout2')
@section('title','Espace consultant')
@section('content')
<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbss">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Espace consultant</h2>
          <ol>
            <li>@if (session('user')->roles == "Admin") 
            <a href="{{route('tableau_de_bord')}}">Tableau de bord</a>
		@elseif (session('user')->roles == "Client") 
		    <a href="{{route('tableaudebord')}}">Tableau de bord</a>
		@elseif (session('user')->roles == "Consultant") 
		    <a href="{{route('tableaudebordconsultant')}}">Tableau de bord</a>
		@else
			<a href="{{route('tb_de_bord')}}">Tableau de bord</a>
		@endif</li>
            <li>Tableau de bord</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
   
    <!-- ======= Features Section ======= -->
     <section id="features" class="features" style="font-size:17px;">
	 
      <div class="container" data-aos="fade-up">

        <div class="row">
		<div class="col-lg-12 col-md-12">
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
			</div>
			<div class="col-lg-3 col-md-3 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
				@php
				$f = DB::table('inscription_consultant')->where('email', session('user')->email)->first()->fichier;
				$id = DB::table('inscription_consultant')->where('email', session('user')->email)->first()->id;
				$langue = DB::table('langue_consultant')->where('inscription_id', $id)->get()->count();
				$lango = DB::table('langue_consultant')->where('inscription_id', $id)->get();
				$comp = DB::table('competence_consultant')->where('inscription_id', $id)->get()->count();
				$trav = DB::table('travaux_consultant')->where('inscription_id', $id)->get()->count();
				$compt = DB::table('competence_consultant')->where('inscription_id', $id)->get();
				$travau = DB::table('travaux_consultant')->where('inscription_id', $id)->get();
				if ($f=="") {
					$photo = 0;
				} else {
					$photo = 20;
				}
				if ($langue>0) {
					$languec = 20;
				} else {
					$languec = 0;
				}
				if ($comp>0) {
					$compc = 20;
				} else {
					$compc = 0;
				}
				if ($trav>0) {
					$travx = 20;
				} else {
					$travx = 0;
				}
				$total = $photo + $languec + $travx + $compc + 20;
				@endphp
				@if ($f =="")
                <img src="{{asset('assets/img/team/team0.jpg')}}" class="img-fluid" alt="">
				<a type="button" href="{{route('ajouter-photo')}}" class="btn btn-info" style="text-align:center;width:100%;color:#fff;">Ajouter une photo de profil</a>
				@else 
				<img src="{{asset("public/storage/".$f)}}" style="height:510;width:510;" class="img-fluid">
				<a type="button" href="{{route('ajouter-photo')}}" class="btn btn-info" style="text-align:center;width:100%;color:#fff;">Modifier photo de profil</a>
				@endif
              </div>
              <div class="member-info">
              </div>
            </div>
          </div>
		  <div class="col-lg-9 col-md-12 mt-4 mt-md-0">
            <div class="icon-box">
              <h3><a href="">
			  Nom & Prénoms : {{DB::table('compte')->where('users_id',session('user')->id)->first()->nom}} {{DB::table('compte')->where('users_id',session('user')->id)->first()->prenoms}}<br/><hr/>
			  Profil : {{DB::table('users')->where('id',session('user')->id)->first()->roles}}<br/><hr/>
			  Date de naissance : {{DB::table('inscription_consultant')->where('email',session('user')->email)->first()->datenais}}<br/><hr/>
			  Nationalité : {{DB::table('inscription_consultant')->where('email',session('user')->email)->first()->nationalite}}<br/><hr/>
			  Téléphone : {{DB::table('inscription_consultant')->where('email',session('user')->email)->first()->telephone}}<br/><hr/>
			  Ville : {{DB::table('inscription_consultant')->where('email',session('user')->email)->first()->ville}}<br/><hr/>
			  Email : {{DB::table('inscription_consultant')->where('email',session('user')->email)->first()->email}}<br/><hr/>
			  </a></h3>
            </div>
          </div>
          <div class="col-lg-12 col-md-9 mt-4 mt-md-0 skills-content">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href=""  style="color:red;">Votre profil est complèté à  : {{$total}} %</a></h3>
			 
			<br/>
			<br/>
            </div>
          </div>
		  <div class="col-lg-12 col-md-12 mt-4 mt-md-0">
			<div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="">Travaux illustrant le mieux mes compétences</a></h3>
			 
			<br/>
			<br/>
			
            </div>
			<div class="icon-box">
			<table border="1">
			<tr>
				<th style="width:200px;text-align:center" colspan="10">Travaux réalisés(Expérience)</th>
			</tr>
			<tr>
				<th style="width:200px;text-align:center">Client</th>
				<th style="width:200px;text-align:center">Profil</th>
				<th style="width:200px;text-align:center">Activité principale</th>
				<th style="width:200px;text-align:center">Début</th>
				<th style="width:200px;text-align:center">Année</th>
				<th style="width:200px;text-align:center">Fin</th>
				<th style="width:200px;text-align:center">Année</th>
				<th style="width:200px;text-align:center">Lieu</th>
				<th style="width:200px;text-align:center">Missions menées</th>
				<th style="width:200px;text-align:center">Actions</th>
			</tr>
			<tbody>
			@foreach($travau as $travaux)
			<tr>
				<td style="width:200px;text-align:center">{{$travaux->client}}</td>
				<td style="width:200px;text-align:center">{{$travaux->profil}}</td>
				<td style="width:200px;text-align:center">{{$travaux->activite_principale}}</td>
				<td style="width:200px;text-align:center">{{$travaux->moisdebut}}</td>
				<td style="width:200px;text-align:center">{{$travaux->anneedebut}}</td>
				<td style="width:200px;text-align:center">{{$travaux->moisfin}}</td>
				<td style="width:200px;text-align:center">{{$travaux->anneefin}}</td>
				<td style="width:200px;text-align:center">{{$travaux->lieu}}</td>
				<td style="width:200px;text-align:center">{{$travaux->mission}}</td>
				<td style="width:200px;text-align:center">
				<a href="{{route('travauxsupprimer',['id'=>$travaux->id])}}"><i class="icofont-close-squared-alt" style="color:red;font-size:15px;"></i></a>
				</td>
			</tr>
			@endforeach
			<tr>
			<td colspan="10" style="text-align:center;color:blue;"><a href="{{route('ajouter-travaux')}}">Ajouter</a></td>
			</tr>
			</tbody>
			</table>
		  </div>
		  </div>
		  <div class="col-lg-12 col-md-12 mt-4 mt-md-0">
			<div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="">Mes compétences</a></h3>
			 
			<br/>
			<br/>
			
            </div>
			<div class="icon-box">
			<table border="1">
			<tr>
				<th style="width:200px;text-align:center" colspan="5">Mes compétences</th>
			</tr>
			<tr>
				<th style="width:200px;text-align:center">Compétence</th>
				<th style="width:200px;text-align:center">Niveau</th>
				<th style="width:200px;text-align:center">Diplôme</th>
				<th style="width:200px;text-align:center">Fichier</th>
				<th style="width:200px;text-align:center">Actions</th>
			</tr>
			<tbody>
			@foreach($compt as $compts)
			<tr>
				<td style="width:200px;text-align:center">{{$compts->libelle}}</td>
				<td style="width:200px;text-align:center">{{$compts->niveau}}</td>
				<td style="width:200px;text-align:center">{{$compts->diplome}}</td>
				<td style="width:200px;text-align:center"></td>
				<td style="width:200px;text-align:center">
				<a href="{{route('competencesupPost',['id'=>$compts->id])}}"><i class="icofont-close-squared-alt" style="color:red;font-size:15px;"></i></a>
				</td>
			</tr>
			@endforeach
			<tr>
			<td colspan="5" style="text-align:center;color:blue;"><a href="{{route('ajouter-competence')}}">
			<i class="icofont-plus" style="font-size:15px;"></i>Ajouter</a></td>
			</tr>
			</tbody>
			</table>
		  </div>
		  </div>
		  <div class="col-lg-12 col-md-12 mt-4 mt-md-0">
			<div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="">Langues</a></h3>
			 
			<br/>
			<br/>
			
            </div>
			<div class="icon-box">
			<table border="1">
			<tr>
				<th style="width:200px;text-align:center" colspan="3">Mes langues</th>
			</tr>
			<tr>
				<th style="width:200px;text-align:center">Langue</th>
				<th style="width:200px;text-align:center">Niveau</th>
				<th style="width:200px;text-align:center">Actions</th>
			</tr>
			<tbody>
			@foreach($lango as $langos)
			<tr>
				<td style="width:200px;text-align:center">{{$langos->libelle}}</td>
				<td style="width:200px;text-align:center">{{$langos->niveau}}</td>
				<td style="width:200px;text-align:center">
				<a href="{{route('languesupPost',['id'=>$langos->id])}}"><i class="icofont-close-squared-alt" style="color:red;font-size:15px;"></i></a>
				</td>
			</tr>
			@endforeach
			<tr>
			<td colspan="3" style="text-align:center;color:blue;"><a href="{{route('ajouter-langue')}}">
			<i class="icofont-plus" style="font-size:15px;"></i>Ajouter</a></td>
			</tr>
			</tbody>
			</table>
		  </div>
		  </div>
		  
		  </div>
		  
		  <div class="row">
		  <div class="col-lg-12">
		    <br>
		  </div>
		  </div>
        </div>
      </div>
    </section>
@endsection
