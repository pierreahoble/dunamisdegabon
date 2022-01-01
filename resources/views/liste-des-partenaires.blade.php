@extends('layout2')
@section('title','Liste des partenaires ')
@section('content')
<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Liste des partenaires</h2>
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
            <li>Liste des partenaires</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
	     <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
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
            <div class="alert alert-danger" style="font-size: 15px; background-color: #fb5757; color: white" >
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> <i class="ti-na"></i> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
	<div class="col-lg-12 card">
	        <br>
			<h2 align="center">
             Liste des partenaires
            </h2>
			 <br>
            <div class="table-responsive table-hover container">
				<table class="table">
				    <thead>
						<tr>
							<th width="220px">N°</th>
							<th width="220px">Raison sociale</th>
							<th width="220px">Représentant</th>
							<th width="300px">Email</th>
							<th width="300px">Forme juridique</th>
							<th width="300px">Téléphone</th>
							<th width="300px">Domaine</th>
							<th width="300px">Actions</th>
						</tr>
					</thead>
					<tbody>
					@foreach($partenaire as $partenaires)
					<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$partenaires->raison_sociale}}</td>
					<td>{{$partenaires->nom_rep}}</td>
					<td>{{$partenaires->email}}</td>
					<td>{{$partenaires->forme_juridique}}</td>
					<td>{{$partenaires->telephone}}</td>
					<td>{{$partenaires->domaine}}</td>
					<td><a target="_blank" href="{{route('fichepartenaire', ['id'=>$partenaires->id])}}"><i class="fa fa-info"></i> Voir fiche</a></td>
					</tr>
					@endforeach
					</tbody>
				</table>
			</div>	
            </div>
			<div class="blog-pagination">
              {{ $partenaire->links() }}
            </div>
	</div>
	      </div>
    </section>
@endsection