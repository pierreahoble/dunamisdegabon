@extends('layout2')
@section('title', 'Nouvel projet')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbss">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Ajouter un nouveau projet</h2>
          <ol>
            <li>
			@if (session('user')->roles == "Admin") 
            <a href="{{route('tableau_de_bord')}}">Tableau de bord</a>
		@elseif (session('user')->roles == "Client") 
		    <a href="{{route('tableaudebord')}}">Tableau de bord</a>
		@else
			<a href="{{route('tb_de_bord')}}">Tableau de bord</a>
		@endif
			</li>
            <li>Ajouter un nouveau projet</li>
          </ol>
        </div>

      </div>
    </section>
   <!-- End Breadcrumbs -->
    <section id="contact" class="contact">
	<meta name="_token" content="{{ csrf_token() }}" />
      <div class="container">

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-6">
		  <div style="background-color:#fff;padding:15px;">
		  <h3 align="center">Ajouter un nouveau projet</h3>
		  </div>
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
			
			<br/>
		    <form method="post" role="form" class="php-email-form" id="formulairep" enctype="multipart/form-data">
            {{csrf_field()}}
			<br/>
              <div class="form-row">
				<div class="col-md-12 form-group">
				<label class="label-control">Type de projet</label>
                  <select class="form-control" name="typepro" required>
						<option value="">Sélectionner le type de projet</option>
						<option value="Agriculture">Agriculture</option>
						<option value="Élevage">Élevage</option>
						<option value="Autres">Autres</option>
					</select>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control">Nom du projet <font color="red">*</font></label>
                  <input id="nom" type="text" class="form-control" name="nom" placeholder="Veuillez saisir le nom du projet" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-12 form-group">
				<label class="label-control">Importer une image <font color="red">*</font></label>
                  <input type="file" id="my-file" class="form-control" name="my-file">
                </div>
				<div class="col-md-6 form-group">
				<button type="reset" class="btn btn-danger" style="width:100%;">
						Annuler
				</button>
				</div>
				<div class="col-md-6 form-group">
				<button type="submit" class="btn btn-primary" style="width:100%;">
						Enregistrer
				</button>
				</div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
	@push('scripts')
		<script>
				$("#formulairep").on("submit", function(e) {
				e.preventDefault();
				
				var extension = $('#my-file').val().split('.').pop().toLowerCase();
				var file_data = $('#my-file').prop('files')[0];
				var nom = $("input[name=nom]").val();
				var typepro = $("select[name=typepro]").val();
				
			var form_data = new FormData();
			form_data.append('file', file_data);
			form_data.append('nom', nom);
			form_data.append('typepro', typepro);
			
				$.ajaxSetup({
				headers: {
					'X-CSRF-Token': $('meta[name=_token]').attr('content')
				}
			});
				$.ajax({
				url: "{{url('ajouterPost')}}", // point to server-side PHP script
				data: form_data,
				type: 'POST',
				dataType: 'JSON',
				contentType: false, // The content type used when sending data to the server.
				cache: false, // To unable request pages to be cached
				processData: false,
				success: function(data) {
					if(data.type == 'error'){
						toastr.error(data.response, data.title, {timeOut: 15000})
					}else{
					
					     toastr.success(data.response, data.title, {timeOut: 15000})
						 window.location.reload();
						 //window.location.href = '/succes-inscription';
					}
				}
                })
				});
			
	    </script>
		@endpush
@endsection
