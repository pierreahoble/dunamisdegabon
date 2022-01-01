@extends('layout2')
@section('title','Liste des demandes ')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css" integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbss">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><i class="icofont-folder-open"></i> Liste des demandes</h2>
          <ol>
            <li>
			@if (Auth::user()->roles == "Admin") 
            <a href="{{route('tableau_de_bord')}}"><i class="icofont-home"></i> Tableau de bord</a>
		@elseif (Auth::user()->roles == "Client") 
		    <a href="{{route('tableaudebord')}}"><i class="icofont-home"></i> Tableau de bord</a>
		@else
			<a href="{{route('tb_de_bord')}}"><i class="icofont-home"></i> Tableau de bord</a>
		@endif
			</li>
            <li>Liste des demandes</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
	     <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
	
	<div class="col-lg-12 card">
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
	        <br>
			<h2 align="center">
             Liste des demandes
            </h2>
			 <br>
            <div class="table-responsive table-hover container">
				<table border="1" style="width:1300px;" id="myTable">
				    <thead>
						<tr>
							<th width="220px">N°</th>
							<th width="220px">Nom & Prénoms</th>
							<th width="300px">Email</th>
							<th width="300px">Adresse</th>
							<th width="300px">Statut</th>
							<th width="300px">Téléphone</th>
							<th width="300px">Projet</th>
							<th width="300px">Etat</th>
							<th style="width:400px;">Actions</th>
						</tr>
					</thead>
					<tbody>
					@foreach($projet as $projets)
					@if($projets->etat2 == 0)
                            @php
                                $reponses = [
                                    'badge' => 'primary',
                                    'etat' => 'Non traitée',
                               ];
                            @endphp
						@elseif($projets->etat2 == 1)
							@php
                                $reponses = [
                                    'badge' => 'warning',
                                    'etat' => 'En traitement',
                               ];
                            @endphp
							@elseif($projets->etat2 == 2)
							@php
                                $reponses = [
                                    'badge' => 'danger',
                                    'etat' => 'Fermée',
                               ];
                            @endphp
					    @else
							@php
                        $reponses = [
                            'badge' => 'success',
                            'etat' => 'Validée et clôturée',
							];

                    @endphp
                    @endif
					<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$projets->nom_rep}}</td>
					<td>{{$projets->email}}</td>
					<td>{{$projets->adresse}}</td>
					<td>{{$projets->profil}} -
					@if ($projets->raison_sociale != "")
					{{$projets->raison_sociale}}
					@endif
					</td>
					<td>{{$projets->telephone}}</td>
					<td>
					@if ($projets->projet != 0)
					{{DB::table('projet')->where('id', $projets->projet)->first()->libelle}}
					@else
					{{$projets->autre}}
					@endif
					</td>
					<td style="text-align:center;">
						@if($reponses['etat'] == "Non traitée")
                                <span class="badge badge-primary"> Non traitée </span>
                        @elseif($reponses['etat'] == "En traitement")
                                <span class="badge badge-warning"> En traitement </span>
                        @else
                                <span class="badge badge-{{$reponses['badge']}}"> {{$reponses['etat']}} </span>
                        @endif
					</td>
					<td>
					<a target="_blank" class="" href="{{route('fiche-demande-projet', ['id' =>$projets->id])}}" style="color:blue;height:25px;width:25px;">
                                    <i class="icofont-eye" style="height:25px;width:25px;"></i>
                    </a>
					<a target="_blank" class="mx-2" href="{{url("storage/".$projets->fichier)}}" style="color:brown;">
                                    <i class="icofont-download"></i>
                    </a>
					@if($projets->etat2 == 0)
					<a class="data-traiter" data-id="{{$projets->id}}" href="#" style="color:yellow;">
                            <i class="icofont-close-squared-alt"></i>
                    </a>
					@endif
					@if($projets->etat2 == 0 || $projets->etat2 == 1)
					<a class="data-valider" data-id="{{$projets->id}}" href="#" style="color:green;">
                                    <i class="icofont-checked"></i>
                    </a>
					<a class="data-fermer" data-id="{{$projets->id}}" href="#" style="color:red;">
                                    <i class="icofont-close-squared-alt"></i>
                    </a>
					@endif
					</td>
					</tr>
					@endforeach
					</tbody>
				</table>
			</div>	
            </div>
			<div class="blog-pagination" style="margin-top:15px;">
              {{ $projet->links() }}
            </div>
	</div>
	      </div>
    </section>
	<div class="modal fade bd-example-modal-sm" id="Validermodal">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-body">
						<p>Etes-vous sûr de vouloir clôturer ce dossier ?</p>
					</div>
					<div class="modal-footer" style="background-color:#ffffff" id="valider">
	
					</div>
				</div>
			</div>
	</div>
	<div class="modal fade bd-example-modal-sm" id="Fermermodal">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-body">
						<p>Etes-vous sûr de vouloir fermer ce dossier ?</p>
					</div>
					<div class="modal-footer" style="background-color:#ffffff" id="fermer">
	
					</div>
				</div>
			</div>
	</div>
	<div class="modal fade bd-example-modal-sm" id="Traitermodal">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-body">
						<p>Etes-vous sûr de vouloir mettre en traitement ce dossier ?</p>
					</div>
					<div class="modal-footer" style="background-color:#ffffff" id="traiter">
	
					</div>
				</div>
			</div>
	</div>
	@push('scripts')

 <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.dataTables.min.js" integrity="sha512-fQmyZE5e3plaa6ADOXBM17WshoZzDIvo7sR4GC1VsmSKqm13Ed8cO2kPwFPAOoeF0RcdhuQQlPq46X/HnPmllg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js" integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script>
        $(document).ready( function () {
        $('#myTable').DataTable({
            language: {
            url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/French.json'
        }
        });
    } );
    </script>



    
    <script>

           

            $(".data-valider").on('click', function () {
                    var id=$(this).data('id');
                    $.get('Demandes/'+id, function (data) {
                    
                        var html = ` 
                        
                        <button type="button" class="btn btn-sm btn btn-primary" data-dismiss="modal">Non</button>
                            <form action="{{route('ValiderdPost')}}" method="post" style="display: inline">
                                    {{csrf_field()}}
                                            <input type="hidden" value="`+data.demandes.id+`" name="id" >
                            <button type="submit" class="btn btn-sm btn btn-danger">Oui</button>

                        </form>`
                        ;

                        $('#valider').html('').append(html);

                    })
                    $('#Validermodal').modal();
                });

    
    
    </script>
	<script>
            $(".data-fermer").on('click', function () {
                    var id=$(this).data('id');
                    $.get('Demandes/'+id, function (data) {
                    
                        var html = ` 
                        
                        <button type="button" class="btn btn-sm btn btn-primary" data-dismiss="modal">Non</button>
                            <form action="{{route('FermerdPost')}}" method="post" style="display: inline">
                                    {{csrf_field()}}
                                            <input type="hidden" value="`+data.demandes.id+`" name="id" >
                            <button type="submit" class="btn btn-sm btn btn-danger">Oui</button>

                        </form>`
                        ;

                        $('#fermer').html('').append(html);

                    })
                    $('#Fermermodal').modal();
                });
    </script>
	<script>
            $(".data-traiter").on('click', function () {
                    var id=$(this).data('id');
                    $.get('Demandes/'+id, function (data) {
                    
                        var html = ` 
                        
                        <button type="button" class="btn btn-sm btn btn-primary" data-dismiss="modal">Non</button>
                            <form action="{{route('TraiterdPost')}}" method="post" style="display: inline">
                                    {{csrf_field()}}
                                            <input type="hidden" value="`+data.demandes.id+`" name="id" >
                            <button type="submit" class="btn btn-sm btn btn-danger">Oui</button>

                        </form>`
                        ;

                        $('#traiter').html('').append(html);

                    })
                    $('#Traitermodal').modal();
                });
    </script>
	

      
    @endpush
@endsection