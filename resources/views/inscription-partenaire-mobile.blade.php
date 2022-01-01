@extends('layout4')
@section('title', 'Inscription partenaire')
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
		  <h3 align="center">Inscription partenaire</h3>
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
                  <input id="prenom_rep" type="text" class="form-control" name="nom_rep" placeholder="Veuillez saisir le nom du représentant" required>
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
				<label class="label-control">Importer votre signature <font color="red">*</font></label>
                  <input type="file" id="my-file" class="form-control" name="my-file">
                </div>
                </div>
				
				<div class="form-row">
                   <div class="form-group col-lg-3">
                    <div class="inputGroup">
						<input id="option1" name="domaine" type="checkbox" value="STRUCTURATION ET ORGANISATION">
						<label for="option1" style="font-size:10px;">STRUCTURATION ET ORGANISATION</label>
					</div>
					</div>
					<div class="form-group col-lg-3">
					<div class="inputGroup">
						<input id="option2" name="domaine" type="checkbox" value="ETUDE ET CONCEPTION"/>
						<label for="option2" style="font-size:10px;">ETUDE ET CONCEPTION  </label>
					</div>
					</div>
					<div class="form-group col-lg-3">
					<div class="inputGroup">
						<input id="option3" name="domaine" type="checkbox" value="MOBILISATION DES RESSOURCES"/>
						<label for="option3" style="font-size:10px;">MOBILISATION DES RESSOURCES </label>
					</div>
                  </div>
				  <div class="form-group col-lg-3">
					<div class="inputGroup">
						<input id="option4" name="domaine" type="checkbox" value="REALISATION DES PROJETS"/>
						<label for="option4" style="font-size:10px;">REALISATION DES PROJETS</label>
					</div>
                  </div>
                </div>  
				<div class="form-row">
					<div class="form-group col-lg-12" id="struc_orga_info">
					<p>
						<ul style="list-style-type:none;">
							<li>1 - Organisation et structuration des programmes</li>
							<li>2 - Elaboration de procédures et manuels de gestion </li>
						</ul>
					</p>
                  </div>
				  <div class="form-group col-lg-12" id="struc_orga_details">
                    <textarea class="form-control" name="struc_orga_details" placeholder="Décrire ce que l’entreprise veut vendre ou acheter "></textarea>
                    <div class="validation"></div>
                  </div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-12" id="etud_concep_info">
					<p>
						<ul style="list-style-type:none;">
							<li>1 - Stratégie locale ou régionale </li>
							<li>2 - Plan de Développement  </li>
							<li>3 - Conception de programmes de développement économiques intégré  </li>
							<li>4 - Prise en compte des différentes composantes (Juridiques, financières, techniques, public, RSE)  </li>
						</ul>

					</p>
                  </div>
				  <div class="form-group col-lg-12" id="etud_concep_details">
                    <textarea class="form-control" name="etud_concep_details" placeholder="Décrire ce que l’entreprise veut vendre ou acheter "></textarea>
                    <div class="validation"></div>
                  </div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-12" id="mobi_ress_info">
					<p>
						<ul style="list-style-type:none;">
							<li>1 - Recherche de partenaires stratégiques, techniques, financiers</li>
							<li>2 - Partenariats Publics Privés </li>
							<li>3 - Appui aux négociations </li>
							<li>4 - Mise en relation d’affaires </li>
						</ul>
					</p>
                  </div>
				  <div class="form-group col-lg-12" id="mobi_ress_details">
                    <textarea class="form-control" name="mobi_ress_details" placeholder="Décrire les offres de services financiers  que votre entreprise souhaite offrir  aux partenaires"></textarea>
                    <div class="validation"></div>
                  </div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-12" id="rea_pro_info">
					<p>
						<ul style="list-style-type:none;">
							<li>1 - Mise en place et accompagnement de Project Management Offices</li>
							<li>2 - Coaching des dirigeants dans l’implémentation de la stratégie </li>
							<li>3 - Elaboration et suivi d’outils de reporting (financier, social, environnemental) </li>
							<li>4 - Suivi technique et budgétaire de projets </li>
							<li>5 - Suivi de l’impact social, environnemental et économique des projets </li>
							<li>6 - Communication opérationnelle </li>
						</ul> 
					</p>
                  </div>
				  <div class="form-group col-lg-12" id="rea_pro_details">
                    <textarea class="form-control" name="rea_pro_details" placeholder="Description"></textarea>
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
				$('#struc_orga_info').hide();
				$('#struc_orga_details').hide();
				$('#etud_concep_info').hide();
				$('#etud_concep_details').hide();
				$('#mobi_ress_info').hide();
				$('#mobi_ress_details').hide();
				$('#rea_pro_info').hide();
				$('#rea_pro_details').hide();
				
				$('input[type="checkbox"]').click(function(){
				  var val = $(this).attr("value");
				  if (val == "STRUCTURATION ET ORGANISATION"){
					   $('#struc_orga_info').show();
					   $('#struc_orga_details').show();
					   $('#etud_concep_info').hide();
						$('#etud_concep_details').hide();
						$('#mobi_ress_info').hide();
						$('#mobi_ress_details').hide();
						$('#rea_pro_info').hide();
						$('#rea_pro_details').hide();	   
				  } else if (val == "ETUDE ET CONCEPTION"){
					   $('#struc_orga_info').hide();
					   $('#struc_orga_details').hide();
					   $('#etud_concep_info').show();
						$('#etud_concep_details').show();
						$('#mobi_ress_info').hide();
						$('#mobi_ress_details').hide();
						$('#rea_pro_info').hide();
						$('#rea_pro_details').hide();
				  } else if (val == "MOBILISATION DES RESSOURCES"){
					   $('#struc_orga_info').hide();
					   $('#struc_orga_details').hide();
					   $('#etud_concep_info').hide();
						$('#etud_concep_details').hide();
						$('#mobi_ress_info').show();
						$('#mobi_ress_details').show();
						$('#rea_pro_info').hide();
						$('#rea_pro_details').hide();
				  } else {
					  $('#struc_orga_info').hide();
					   $('#struc_orga_details').hide();
					   $('#etud_concep_info').hide();
						$('#etud_concep_details').hide();
						$('#mobi_ress_info').hide();
						$('#mobi_ress_details').hide();
						$('#rea_pro_info').show();
						$('#rea_pro_details').show();
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
				var struc_orga_details = $("textarea[name=struc_orga_details]").val();
				var etud_concep_details = $("textarea[name=etud_concep_details]").val();
				var mobi_ress_details = $("textarea[name=mobi_ress_details]").val();
				var rea_pro_details = $("textarea[name=rea_pro_details]").val();
			
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
			form_data.append('struc_orga_details', struc_orga_details);
			form_data.append('etud_concep_details', etud_concep_details);
			form_data.append('mobi_ress_details', mobi_ress_details);
			form_data.append('rea_pro_details', rea_pro_details);
	        
			form_data.append('domaine', domaine);	
				$.ajaxSetup({
				headers: {
					'X-CSRF-Token': $('meta[name=_token]').attr('content')
				}
			});
				$.ajax({
				url: "{{url('oppPost')}}", // point to server-side PHP script
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
						 window.location.href = '/succes-inscription-partenaire';
					}
				}
                })
				});
				});
			
	    </script>
		@endpush
@endsection
