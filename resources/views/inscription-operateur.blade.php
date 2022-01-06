@extends('layout2')
@section('title', 'Inscription opérateur')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<!-- End Breadcrumbs -->
<section id="contact" class="contact">




	{{-- @if (Session::has('error'))
	<div class="container-fluid">
		<div class="alert alert-danger alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>{{Session::get('error')}}</strong> <i class="fa fa-exclamation-triangle"></i>
		</div>
	</div>
	@endif --}}


	<meta name="_token" content="{{ csrf_token() }}" />
	<div class="container"><br /><br />
		<div style="background-color:#fff;padding:15px;">
			<h3 align="center"><i class="icofont-handshake-deal"></i> Inscription opérateur</h3>
		</div>

		@if ($errors->any())
		<div class="alert alert-danger mt-3">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif

		<br />
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
		<form method="post" role="form" class="php-email-form" action="{{ url('opPost') }}"
			enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="row mt-10 justify-content-center" data-aos="fade-up">
				<div class="row">
					<div class="col-lg-6">
						<br />
						<div class="form-row">
							<div class="col-md-6 form-group">
								<label class="label-control">RAISON SOCIALE <font color="red">*</font></label>
								<input id="raison_sociale" type="text" class="form-control" name="raison_sociale"
									placeholder="Nom de l'entreprise" required>
								<div class="validate"></div>
							</div>
							<div class="col-md-6 form-group">
								<label class="label-control">FORME JURIDIQUE <font color="red">*</font></label>
								<select id="forme_juridique" type="text" class="form-control" name="forme_juridique"
									required>
									<option value="">Sélectionner</option>
									<option value="Entreprise individuelle">Entreprise individuelle</option>
									<option value="Société">Société</option>

								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 form-group">
								<label class="label-control">REPRESENTANT LEGAL <font color="red">*</font></label>
								<input id="prenom_rep" type="text" class="form-control" name="nom_rep" placeholder=""
									required>
								<div class="validate"></div>
							</div>
							<div class="col-md-6 form-group">
								<label class="label-control">ADRESSE</label>
								<input id="adresse" type="text" class="form-control" name="adresse"
									placeholder="Veuillez saisir l'adresse">
								<div class="validate"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 form-group">
								<label class="label-control">VILLE <font color="red">*</font></label>
								<input id="adresse" type="text" class="form-control" name="ville"
									placeholder="Veuillez saisir votre ville" required>
								<div class="validate"></div>
							</div>
							<div class="col-md-6 form-group">
								<label class="label-control">DÉPARTEMENT</label>
								<select id="departement" type="text" class="form-control" name="departement" required>
									<option value="">Sélectionner</option>
									<option value="Libreville">Libreville</option>
									<option value="Lolo-Bouenguidi">Lolo-Bouenguidi</option>
									<option value="Lombo-Bouenguidi">Lombo-Bouenguidi</option>
									<option value="Lopé">Lopé</option>

								</select>
								<div class="validate"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 form-group">
								<label class="label-control">PROVINCE</label>
								<select id="province" type="text" class="form-control" name="province" required>
									<option value="">Sélectionner</option>
									<option value="Estuaire">Estuaire</option>
									<option value="Ogooué-Lolo">Ogooué-Lolo</option>
									<option value="Ogooué-Ivindo">Ogooué-Ivindo</option>
								</select>
							</div>
							<div class="col-md-6 form-group">
								<label class="label-control">TELEPHONE <font color="red">*</font></label>
								<input id="telephone" type="text" class="form-control" name="telephone"
									placeholder="Ex :77 81 67 37" required>
								<div class="validate"></div>
							</div>
						</div>
						{{-- <div class="form-row">

							<div class="col-md-6 form-group">
								<label class="label-control">Email <font color="red">*</font></label>
								<input id="email" type="email" class="form-control" name="email"
									placeholder="Votre email">
								<div class="validate"></div>
							</div>
							<div class="col-md-6 form-group">
								<label class="label-control">Password <font color="red">*</font></label>
								<input id="Password" type="Password" class="form-control" name="password" min-length="6"
									placeholder="Choisir un mot de passe" required>
								<div class="validate"></div>
							</div>
						</div> --}}
						<div class="form-row">
							<div class="col-md-12 form-group">
								<label class="label-control">Domaine d'activité</label>
								<input id="domaine" type="text" class="form-control" name="domaine"
									placeholder="Ex: Vente de matériaux de construction" required>
							</div>
							<div class="col-md-12 form-group">
								<label class="label-control">Description de votre activité <font color="red">*</font>
								</label>
								<textarea id="description" type="text" class="form-control" name="description"
									required></textarea>
								<div class="validate"></div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-12 form-group">
								<label class="label-control">Importer une image (Logo ou affiche) <font color="red">*
									</font></label>
								<input type="file" id="my-file" class="form-control" name="myfile"
									accept=".png,.jpg,.jpeg" required>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-12 form-group alert" id="message"
								style="display:none;font-size: 15px;color: white">
								<i class="ti-na"></i>
							</div>
							<br />
							<div class="col-md-6 form-group">
								<button type="reset" class="btn btn-danger" style="width:100%;">
									<i class="icofont-error"></i> Annuler
								</button>
							</div>
							<div class="col-md-6 form-group">
								<button type="submit" class="btn btn-primary" style="width:100%;" id="save">
									<i class="icofont-tick-mark"></i> Enregistrer
								</button>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<a href="#">
									Politique de confidentialité
								</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="#">
									Conditions d'utilisation
								</a>
							</div>
						</div>
		</form>
	</div>
	<div class="col-lg-6">
		<img src="{{asset('img/operateur.jpg')}}" class="img-fluid" style="border-radius:80px;">
	</div>
	</div>

	</div>
	</div>
</section><!-- End Contact Section -->
@push('scripts')


<script>
	$(document).ready(function(){
				$("#formulaire").on("submit", function(e) {
				e.preventDefault();
				
				var extension = $('#my-file').val().split('.').pop().toLowerCase();
				var file_data = $('#my-file').prop('files')[0];
				var raison_sociale = $("input[name=raison_sociale]").val();
				var forme_juridique = $("select[name=forme_juridique]").val();
				var nom_rep = $("input[name=nom_rep]").val();
				var adresse = $("input[name=adresse]").val();
				var ville = $("input[name=ville]").val();
				var departement = $("select[name=departement]").val();
				var province = $("select[name=province]").val();
				var telephone = $("input[name=telephone]").val();
				var email = $("input[name=email]").val();
				var password = $("input[name=password]").val();
				var domaine = $("input[name=domaine]").val();
				var description = $("textarea[name=description]").val();

			var form_data = new FormData();
			form_data.append('file', file_data);
			form_data.append('raison_sociale', raison_sociale);
			form_data.append('forme_juridique', forme_juridique);
			form_data.append('nom_rep', nom_rep);
			form_data.append('adresse', adresse);
			form_data.append('ville', ville);
			form_data.append('departement', departement);
			form_data.append('province', province);
			form_data.append('telephone', telephone);
			form_data.append('email', email);
			form_data.append('password', password);
			form_data.append('domaine', domaine);
			form_data.append('description', description);

				$.ajaxSetup({
				headers: {
					'X-CSRF-Token': $('meta[name=_token]').attr('content')
				}
			});
				$.ajax({
				url: "{{url('opPost')}}", // point to server-side PHP script
				data: form_data,
				type: 'POST',
				dataType: 'JSON',
				contentType: false, // The content type used when sending data to the server.
				cache: false, // To unable request pages to be cached
				processData: false,
				beforeSend: function(){
				    $("#save").attr("value", "Traitement en cours");
				},
				success: function(data) {
					if(data.type == 'error'){
						toastr.error(data.response, data.title, {timeOut: 15000})
					}else{
					
					     toastr.success(data.response, data.title, {timeOut: 15000})
						//window.location.reload();
						 //window.location.href = '/tableaudebord';
						 window.location.href = '/succes-inscription';
					}
				}
                })
				});
				});
			
</script>
@endpush
@endsection