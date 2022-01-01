@extends('layout4')
@section('title', 'Inscription opérateur')
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
		  <h3 align="center">Inscription opérateur</h3>
		  </div>
			<br/>
		    <form method="post" role="form" id="formulaire" class="php-email-form" enctype="multipart/form-data">
            {{csrf_field()}}
			<br/>
              <div class="form-row">
                <div class="col-md-6 form-group">
				<label class="label-control">RAISON SOCIALE <font color="red">*</font></label>
                  <input id="raison_sociale" type="text" class="form-control" name="raison_sociale" placeholder="Veuillez saisir le nom de l'entreprise" required>
				  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
				<label class="label-control">FORME JURIDIQUE <font color="red">*</font></label>
                  <input id="nom_rep" type="text" class="form-control" name="forme_juridique" required>
				  <div class="validate"></div>
                </div>
				</div>
				<div class="form-row">
				<div class="col-md-6 form-group">
				<label class="label-control">NOM REPRESENTANT LEGAL <font color="red">*</font></label>
                  <input id="prenom_rep" type="text" class="form-control" name="nom_rep" placeholder="Ex : +241 77 81 67 37" required>
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
				<label class="label-control">VILLE <font color="red">*</font></label>
                  <input id="adresse" type="text" class="form-control" name="ville" placeholder="Veuillez saisir votre ville" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-6 form-group">
				<label class="label-control">DÉPARTEMENT</label>
                  <input id="adresse" type="text" class="form-control" name="departement" placeholder="Veuillez saisir votre département">
				  <div class="validate"></div>
                </div>
                </div>
				<div class="form-row">
				<div class="col-md-6 form-group">
				<label class="label-control">PROVINCE</label>
                  <input id="adresse" type="text" class="form-control" name="province" placeholder="Veuillez saisir votre province">
				  <div class="validate"></div>
                </div>
				<div class="col-md-6 form-group">
				<label class="label-control">QUARTIER</label>
                  <input id="adresse" type="text" class="form-control" name="quartier" placeholder="Veuillez saisir votre quartier">
				  <div class="validate"></div>
                </div>
                </div>
				<div class="form-row">
				<div class="col-md-6 form-group">
				<label class="label-control">TELEPHONE/MOBILE <font color="red">*</font></label>
                  <input id="telephone" type="text" class="form-control" name="telephone" placeholder="Ex : +241 77 81 67 37" required>
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
				<label class="label-control">Importer une image (banière ou catalogue) <font color="red">*</font></label>
                  <input type="file" id="my-file" class="form-control" name="my-file">
                </div>
                </div>
				
				<div class="form-row">
                   <div class="form-group col-lg-3">
                    <div class="inputGroup">
						<input id="option1" name="domaine" type="checkbox" value="Commercial">
						<label for="option1">Commercial</label>
					</div>
					</div>
					<div class="form-group col-lg-3">
					<div class="inputGroup">
						<input id="option2" name="domaine" type="checkbox" value="Technique"/>
						<label for="option2">Technique</label>
					</div>
					</div>
					<div class="form-group col-lg-3">
					<div class="inputGroup">
						<input id="option3" name="domaine" type="checkbox" value="Financier"/>
						<label for="option3">Financier</label>
					</div>
                  </div>
				  <div class="form-group col-lg-3">
					<div class="inputGroup">
						<input id="option4" name="domaine" type="checkbox" value="Management"/>
						<label for="option4">Management</label>
					</div>
                  </div>
                </div>  
				<div class="form-row">
					<div class="form-group col-lg-12" id="commercial_info">
					<p>
						Décrire ce que l’entreprise veut vendre ou acheter 
					</p>
                  </div>
				  <div class="form-group col-lg-12" id="commercial_details">
                    <textarea class="form-control" name="commercial_details" placeholder="Décrire ce que l’entreprise veut vendre ou acheter "></textarea>
                    <div class="validation"></div>
                  </div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-12" id="technique_info">
					<p>
						Décrire le savoir-faire (technique ou technologie) que votre entreprise souhaite offrir  aux partenaires
						o	J’ai un problème technique et je recherche une solution  (expression du besoin.)
						o	J’offre mon savoir-faire technique ou technologie (il est considéré dans ce cas comme 

					</p>
                  </div>
				  <div class="form-group col-lg-12" id="technique_details">
                    <textarea class="form-control" name="technique_details" placeholder="Décrire ce que l’entreprise veut vendre ou acheter "></textarea>
                    <div class="validation"></div>
                  </div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-12" id="financier_info">
					<p>
						Décrire les offres de services financiers  que votre entreprise souhaite offrir  aux partenaires
							J’ai besoin de financement :<br/>
							o	Equity /capital : ouverture du capital à d’autres investisseurs;<br/> 
							o	Dettes : financer investissement (acquisition) ou Fonds de roulement;<br/>
							o	Mezzanine : je suis déjà endetté et je ne veux pas ouvrir mon capital mais je veux du financement pour développer les affaires;<br/> 
							o	Autres : prière précisé autres besoins.
					</p>
                  </div>
				  <div class="form-group col-lg-12" id="financier_details">
                    <textarea class="form-control" name="financier_details" placeholder="Décrire les offres de services financiers  que votre entreprise souhaite offrir  aux partenaires"></textarea>
                    <div class="validation"></div>
                  </div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-12" id="management_info">
					<p>
						J’ai besoin d’une assistance dans la gestion (administrative, commerciale, comptables financiers etc…..) des activités de l’entreprise 
					</p>
                  </div>
				  <div class="form-group col-lg-12" id="management_details">
                    <textarea class="form-control" name="management_details" placeholder="Description"></textarea>
                    <div class="validation"></div>
                  </div>
				  <textarea class="form-control" name="domaine1" id="domaine1" hidden></textarea>
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
            <p style="text-align:center;"><center><a class="btn btn-info" href="{{route('inscription-mobile')}}"> Retour</a></center></p>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
	 @push('scripts')
		<script>
			$(document).ready(function(){
				$('#commercial_info').hide();
				$('#commercial_details').hide();
				$('#technique_info').hide();
				$('#technique_details').hide();
				$('#financier_info').hide();
				$('#financier_details').hide();
				$('#management_info').hide();
				$('#management_details').hide();
				
				$('input[type="checkbox"]').click(function(){
				  var val = $(this).attr("value");
				  if (val == "Commercial"){
					   $('#commercial_info').show();
					   $('#commercial_details').show();
					   $('#technique_info').hide();
						$('#technique_details').hide();
						$('#financier_info').hide();
						$('#financier_details').hide();
						$('#management_info').hide();
						$('#management_details').hide();	   
				  } else if (val == "Technique"){
					   $('#commercial_info').hide();
					   $('#commercial_details').hide();
					   $('#technique_info').show();
						$('#technique_details').show();
						$('#financier_info').hide();
						$('#financier_details').hide();
						$('#management_info').hide();
						$('#management_details').hide();
				  } else if (val == "Financier"){
					   $('#commercial_info').hide();
					   $('#commercial_details').hide();
					   $('#technique_info').hide();
						$('#technique_details').hide();
						$('#financier_info').show();
						$('#financier_details').show();
						$('#management_info').hide();
						$('#management_details').hide();
				  } else {
					  $('#commercial_info').hide();
					   $('#commercial_details').hide();
					   $('#technique_info').hide();
						$('#technique_details').hide();
						$('#financier_info').hide();
						$('#financier_details').hide();
						$('#management_info').show();
						$('#management_details').show();
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
				var ville = $("input[name=ville]").val();
				var departement = $("input[name=departement]").val();
				var province = $("input[name=province]").val();
				var quartier = $("input[name=quartier]").val();
				var telephone = $("input[name=telephone]").val();
				var email = $("input[name=email]").val();
				var commercial_details = $("textarea[name=commercial_details]").val();
				var technique_details = $("textarea[name=technique_details]").val();
				var financier_details = $("textarea[name=financier_details]").val();
				var management_details = $("textarea[name=management_details]").val();
			
			var array = []; 
			$("input:checkbox[name=domaine]:checked").each(function() { 
				array.push($(this).val()); 
			}); 
			var domaine1 = $('#domaine1').text(array); 
			var domaine = $("textarea[name=domaine1]").val();

			var form_data = new FormData();
			form_data.append('file', file_data);
			form_data.append('raison_sociale', raison_sociale);
			form_data.append('forme_juridique', forme_juridique);
			form_data.append('nom_rep', nom_rep);
			form_data.append('adresse', adresse);
			form_data.append('ville', ville);
			form_data.append('departement', departement);
			form_data.append('province', province);
			form_data.append('quartier', quartier);
			form_data.append('telephone', telephone);
			form_data.append('email', email);
			form_data.append('commercial_details', commercial_details);
			form_data.append('technique_details', technique_details);
			form_data.append('financier_details', financier_details);
			form_data.append('management_details', management_details);
	        
			form_data.append('domaine', domaine);	
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
				success: function(data) {
					if(data.type == 'error'){
						toastr.error(data.response, data.title, {timeOut: 15000})
					}else{
					
					     toastr.success(data.response, data.title, {timeOut: 15000})
						//window.location.reload();
						 window.location.href = '/succes-inscription';
					}
				}
                })
				});
				});
			
	    </script>
		@endpush
@endsection
