@extends('layout3')
@section('title', 'Demande de projet')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
   <!-- End Breadcrumbs -->
    <section id="contact" class="contact">
	<meta name="_token" content="{{ csrf_token() }}" />
      <div class="container">
        <div class="row mt-10 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
              <br/><br/><br/>
		  <div style="background-color:#fff;padding:15px;">
		  <h3 align="center">Demande de projet</h3>
		  </div>
			<br/>
		    <form method="post" role="form" id="formulaire" class="php-email-form" enctype="multipart/form-data">
            {{csrf_field()}}
			<br/>
			<div class="form-row">
                   <div class="form-group col-lg-12">
                    <select class="form-control" name="profil" id="profil" required>
						<option value="" >Sélectionner votre profil (Préciser si vous êtes une entreprise ou un particulier)</option>
						<option value="Entreprise">Entreprise</option>
						<option value="Particulier">Particulier</option>
					</select>
					</div>
                </div> 
              <div class="form-row" id="entreprise">
                <div class="col-md-6 form-group">
				<label class="label-control">RAISON SOCIALE <font color="red">*</font></label>
                  <input id="raison_sociale" type="text" class="form-control" name="raison_sociale" placeholder="Veuillez saisir le nom de l'entreprise">
				  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
				<label class="label-control">FORME JURIDIQUE <font color="red">*</font></label>
                  <input id="nom_rep" type="text" class="form-control" name="forme_juridique">
				  <div class="validate"></div>
                </div>
				</div>
				<div class="form-row">
				<div class="col-md-6 form-group">
				<label class="label-control">NOM <font color="red">*</font></label>
                  <input id="prenom_rep" type="text" class="form-control" name="nom_rep" placeholder="Veuillez saisir votre nom" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-6 form-group">
				<label class="label-control">ADRESSE</label>
                  <input id="adresse" type="text" class="form-control" name="adresse" placeholder="Veuillez saisir l'adresse">
				  <div class="validate"></div>
                </div>
                </div>
				<div class="form-row">
				<div class="col-md-6 form-group">
				<label class="label-control">TELEPHONE/MOBILE <font color="red">*</font></label>
                  <input id="telephone" type="text" class="form-control" name="telephone" placeholder="Veuillez saisir le telephone" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-6 form-group">
				<label class="label-control">Email <font color="red">*</font></label>
                  <input id="email" type="email" class="form-control" name="email" placeholder="Veuillez saisir l'adresse email">
				  <div class="validate"></div>
                </div>
                </div>
				<div class="form-row">
				<div class="col-md-6 form-group">
				<label class="label-control">Intitulé du projet <font color="red">*</font></label>
                  <input id="intitule" type="text" class="form-control" name="intitule" placeholder="Veuillez saisir l'intitulé du projet" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-6 form-group">
				<label class="label-control">Joindre un document décrivant votre projet <font color="red">*</font></label>
                  <input type="file" id="my-file" class="form-control" name="my-file">
                </div>
                </div>	
				<div class="form-row">
				<div class="col-md-12 form-group alert" id="message" style="display:none;font-size: 15px;color: white">
					<i class="ti-na"></i>
				</div>
				<br/>
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
			$(document).ready(function(){
				$('#entreprise').hide();
				
			$('select[name="profil"]').change(function(){
				var valeur = $(this).val();
				if (valeur != ''){
					if (valeur == 'Entreprise'){
						$('#entreprise').show();
					} else {
						$('#entreprise').hide();
					}
				}
			});

				$("#formulaire").on("submit", function(e) {
				e.preventDefault();
				
				var extension = $('#my-file').val().split('.').pop().toLowerCase();
				var file_data = $('#my-file').prop('files')[0];
				var raison_sociale = $("input[name=raison_sociale]").val();
				var forme_juridique = $("input[name=forme_juridique]").val();
				var nom_rep = $("input[name=nom_rep]").val();
				var adresse = $("input[name=adresse]").val();
				var telephone = $("input[name=telephone]").val();
				var email = $("input[name=email]").val();
				var intitule = $("input[name=intitule]").val();
				var profil = $("select[name=profil]").val();
				
				

			var form_data = new FormData();
			form_data.append('file', file_data);
			form_data.append('raison_sociale', raison_sociale);
			form_data.append('forme_juridique', forme_juridique);
			form_data.append('nom_rep', nom_rep);
			form_data.append('adresse', adresse);
			form_data.append('telephone', telephone);
			form_data.append('email', email);
			form_data.append('intitule', intitule);
			form_data.append('profil', profil);
	        	
				$.ajaxSetup({
				headers: {
					'X-CSRF-Token': $('meta[name=_token]').attr('content')
				}
			});
				$.ajax({
				url: "{{url('demPost')}}", // point to server-side PHP script
				data: form_data,
				type: 'POST',
				dataType: 'JSON',
				contentType: false, // The content type used when sending data to the server.
				cache: false, // To unable request pages to be cached
				processData: false,
				success: function(data) {
					if(data.type == 'error'){
						toastr.error(data.response, data.title, {timeOut: 15000})
					} else {
					
					     toastr.success(data.response, data.title, {timeOut: 15000})
						//window.location.reload();
						window.location.href = '/succes-demande';
					}
				}
                })
				});
				});
			
	    </script>
		@endpush
@endsection
