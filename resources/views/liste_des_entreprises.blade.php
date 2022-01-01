@extends('layout2')
@section('title','Liste des entreprises ')
@section('content')
<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbss">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Liste des entreprises</h2>
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
            <li>Liste des entreprises</li>
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
             Liste des entreprises
            </h2>
			 <br>
            <div class="table-responsive table-hover container">
				<table class="table">
				    <thead>
						<tr>
							<th width="220px">N°</th>
							<th width="220px">Raison sociale</th>
							<th width="300px">Représentant</th>
							<th width="300px">Date entrée</th>
						</tr>
					</thead>
					<tbody>
					@foreach($ent as $ents)
					<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{DB::table('users')->where('id', $ents->users_id)->first()->name}}</td>
					<td>{{$ents->nom}} {{$ents->prenoms}}</td>
					<td>{{$ents->date_venue}}</td>
					</tr>
					@endforeach
					</tbody>
				</table>
			</div>	
            </div>
			<div class="blog-pagination">
              {{ $ent->links() }}
            </div>
	</div>
	      </div>
    </section>
@endsection