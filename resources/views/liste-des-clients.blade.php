@extends('layout2')
@section('title','Liste des clients ')
@section('content')
<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Liste des clients</h2>
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
            <li>Liste des clients</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
	     <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
	@if (session('status'))
		<div class="col-lg-12">
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
			</div>
        @endif
		
	<div class="col-lg-12 card">
	        <br>
			<h3>
             <i class="icofont-bars"></i> &nbsp;Liste des clients
            </h3>
			 <br>
            <div class="table-responsive table-hover container">
				<table border="1" style="width:1300px;">
				    <thead>
						<tr>
							<th width="220px" style="text-align:center;">N°</th>
							<th width="320px" style="text-align:center;">Nom</th>
							<th width="320px" style="text-align:center;">Prénoms</th>
							<th width="300px" style="text-align:center;">Téléphone</th>
							<th width="300px" style="text-align:center;">Email</th>
							<th width="300px" style="text-align:center;">Date inscription</th>
							<th width="300px" style="text-align:center;">Nombre d'amis invité</th>
							<th width="300px" style="text-align:center;">Actions</th>
						</tr>
					</thead>
					<tbody>
					@foreach($client as $clients)
					<tr>
					<td style="text-align:center;">{{$loop->iteration}}</td>
					<td style="text-align:center;">{{$clients->nom}}</td>
					<td style="text-align:center;">{{$clients->prenoms}}</td>
					<td style="text-align:center;">{{$clients->telephone}}</td>
					<td style="text-align:center;">{{DB::table('users')->where('id', $clients->users_id)->first()->email}}</td>
					<td style="text-align:center;">{{$clients->date_venue}}</td>
					<td style="text-align:center;">{{DB::table('parrainage')->where('parrain_id', $clients->users_id)->get()->count()}}</td>
					<td>
					</td>
					</tr>
					@endforeach
					</tbody>
				</table>
			</div>	
            </div>
			<div class="blog-pagination">
              {{ $client->links() }}
            </div>
	</div>
	      </div>
		  <div class="modal fade bd-example-modal-sm" id="Validermodal">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-body">
						<p>Etes-vous sûr de vouloir valider cette inscription ?<br/>
						Cela stipule qu'un compte sera généré automatiquement pour cet opérateur
						</p>
					</div>
					<div class="modal-footer" style="background-color:#ffffff" id="valider">
	
					</div>
				</div>
			</div>
	</div>
    </section>
	@push('scripts')
	<script>

           

            $(".data-valider").on('click', function () {
                    var id=$(this).data('id');
                    $.get('Operateurs/'+id, function (data) {
                    
                        var html = ` 
                        
                        <button type="button" class="btn btn-sm btn btn-primary" data-dismiss="modal">Non</button>
                            <form action="{{route('validercompte')}}" method="post" style="display: inline">
                                    {{csrf_field()}}
                                            <input type="hidden" value="`+data.operateurs.id+`" name="id" >
                            <button type="submit" class="btn btn-sm btn btn-danger">Oui</button>

                        </form>`
                        ;

                        $('#valider').html('').append(html);

                    })
                    $('#Validermodal').modal();
                });

    
    
    </script>
	@endpush
@endsection