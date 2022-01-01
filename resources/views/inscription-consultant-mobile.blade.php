@extends('layout4')
@section('title', 'Inscription consultant')
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
		  <h3 align="center">Inscription consultant</h3>
		  </div>
			<br/>
		    <form method="post" role="form" id="formulaire2" class="php-email-form" enctype="multipart/form-data">
            {{csrf_field()}}
			<br/>
				<div class="form-row">
				<div class="col-md-6 form-group">
				<label class="label-control">NOM & PRÉNOMS (Dans l'ordre sur votre CNI)<font color="red">*</font></label>
                  <input id="nom" type="text" class="form-control" name="nom" placeholder="Veuillez saisir le nom du représentant" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-6 form-group">
				<label class="label-control">Email <font color="red">*</font></label>
                  <input id="email" type="email" class="form-control" name="email" placeholder="Veuillez saisir l'adresse email" required>
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
				<label class="label-control">ADRESSE <font color="red">*</font></label>
                  <input id="adresse" type="text" class="form-control" name="adresse" placeholder="Veuillez saisir l'adresse">
				  <div class="validate"></div>
                </div>
                </div>
				<div class="form-row">
				<div class="col-md-4 form-group">
				<label class="label-control">NATIONALITÉ <font color="red">*</font></label>
                  <input id="nationalite" type="text" class="form-control" name="nationalite" placeholder="Veuillez saisir votre nationalité" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-4 form-group">
				<label class="label-control">DATE DE NAISSANCE <font color="red">*</font></label>
                  <input id="datenais" type="text" class="form-control" name="datenais" placeholder="10/10/1990" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-4 form-group">
				<label class="label-control">VILLE DE RÉSIDENCE <font color="red">*</font></label>
                  <input id="ville" type="text" class="form-control" name="ville" placeholder="Saisir votre ville" required>
				  <div class="validate"></div>
                </div>
                </div>
				<div class="form-row">
                   <div class="form-group col-lg-12">
				    <label class="label-control">DOMAINES DE COMPETENCE <font color="red">*</font></label>
                    <textarea class="form-control" name="competence" placeholder="Listez vos domaines de compétence" required></textarea>
					</div>
					<div class="form-group col-lg-12">
				    <label class="label-control">LANGUES <font color="red">*</font></label>
                    <textarea class="form-control" name="langue" placeholder="Listez les langues" required></textarea>
					</div>
					<div class="form-group col-lg-12">
				    <label class="label-control">EXPÉRIENCES PROFESSIONNELLES <font color="red">*</font></label>
                    <textarea class="form-control" name="experience" placeholder="Listez les langues" required></textarea>
					</div>
                </div> 
				<div class="form-row">
				<div class="col-md-12 form-group">
				<h3 class="label-control" align="center">Travaux illustrant le mieux mes principales compétences</h3>
                </div>
				<div class="col-md-6 form-group">
				<label class="label-control">CLIENT/SOCIÉTÉ <font color="red">*</font></label>
                  <input id="client" type="text" class="form-control" name="travaux[0][client][]" placeholder="Veuillez saisir le nom du client">
				  <div class="validate"></div>
                </div>
				<div class="col-md-6 form-group">
				<label class="label-control">MISSION <font color="red">*</font></label>
                  <input id="mission" type="text" class="form-control" name="travaux[0][mission][]" placeholder="Veuillez saisir la mission">
				  <div class="validate"></div>
                </div>
				<div class="col-md-6 form-group">
				<label class="label-control">ACTIVITÉS PRINCIPALES <font color="red">*</font></label>
                  <textarea id="activite_principale" class="form-control" name="travaux[0][activite_principale][]" placeholder="Listez les activités principales que vous avez eu à faire"></textarea>
				  <div class="validate"></div>
                </div>
				<div class="col-md-6 form-group">
				<label class="label-control">LES PERTINENTES <font color="red">*</font></label>
                  <textarea id="pertinente"  class="form-control" name="travaux[0][pertinente][]" placeholder="Listez les activités que vous avez trouvé pertinentes"></textarea>
				  <div class="validate"></div>
                </div>
				<div class="col-md-3 form-group">
				<label class="label-control">DATE/ANNÉE <font color="red">*</font></label>
                  <input id="date_travaux" type="text" class="form-control" name="travaux[0][date_travaux][]" placeholder="AAAA-MM-DD">
				  <div class="validate"></div>
                </div>
				<div class="col-md-3 form-group">
				<label class="label-control">LIEU <font color="red">*</font></label>
                  <input id="lieu" type="text" class="form-control" name="travaux[0][lieu][]" placeholder="Le lieu des travaux">
				  <div class="validate"></div>
                </div>
				<div class="col-md-6">
                        <div class="form-group">
                          <label>&nbsp;</label>
                          <button type="button"  class="btn btn-info form-control" id="addNewblock"><i class="fa fa-plus"> Ajouter</i></button>
                        </div>
                        <!-- /.form-group -->
                      </div>
                </div>
				<div class="addNouveau"></div>
				<div class="form-row">
				<div class="col-md-6 form-group">
				<label class="label-control">Importer votre photo passeport (Taille:400x400) <font color="red">*</font></label>
                  <input type="file" id="my-file" class="form-control" name="my-file">
                </div>
                </div>
				<div class="form-row">
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
		    <p style="text-align:center;"><center><a class="btn btn-info" href="{{route('inscription-mobile')}}"> Retour</a></center></p>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
	 @push('scripts')
	 <script>

         /*function initdate(i){
            calInit("calendarMainA"+i, "", "champ_dateA"+i, "jsCalendar", "day", "selectedDay");
            calInit("calendarMainB"+i, "", "champ_dateB"+i, "jsCalendar", "day", "selectedDay");
         }*/

         function removeBlock() {
				$(".deleteblock").on("click", function () {
							$(this).parent().parent().remove()
						})
		       }

               var i=0;

                $("#addNewblock").on("click", function () {
                    i++;
                    var html = `
                    <div class="form-row">
                <div class="col-md-12" >
                      <button type="button" style="float: right;margin-top: -20px; margin-bottom: -20px"  class="btn btn-danger deleteblock"><i class="fa fa-times"></i></button>
                </div>
            <div class="col-md-6 form-group">
				<label class="label-control">CLIENT/SOCIÉTÉ <font color="red">*</font></label>
                  <input id="client" type="text" class="form-control" name="travaux[`+ i +`][client][]" placeholder="Veuillez saisir le nom du client" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-6 form-group">
				<label class="label-control">MISSION <font color="red">*</font></label>
                  <input id="mission" type="text" class="form-control" name="travaux[`+ i +`][mission][]" placeholder="Veuillez saisir la mission" required>
				  <div class="validate"></div>
                </div>
				<div class="col-md-6 form-group">
				<label class="label-control">ACTIVITÉS PRINCIPALES <font color="red">*</font></label>
                  <textarea id="activite_principale" class="form-control" name="travaux[`+ i +`][activite_principale][]" placeholder="Listez les activités principales que vous avez eu à faire"></textarea>
				  <div class="validate"></div>
                </div>
				<div class="col-md-6 form-group">
				<label class="label-control">LES PERTINENTES <font color="red">*</font></label>
                  <textarea id="pertinente" class="form-control" name="travaux[`+ i +`][pertinente][]" placeholder="Listez les activités que vous avez trouvé pertinentes"></textarea>
				  <div class="validate"></div>
                </div>
				<div class="col-md-3 form-group">
				<label class="label-control">DATE/ANNÉE <font color="red">*</font></label>
                  <input id="date_travaux" type="text" class="form-control" name="travaux[`+ i +`][date_travaux][]" placeholder="AAAA-MM-DD">
				  <div class="validate"></div>
                </div>
				<div class="col-md-3 form-group">
				<label class="label-control">LIEU <font color="red">*</font></label>
                  <input id="lieu" type="text" class="form-control" name="travaux[`+ i +`][lieu][]" placeholder="Le lieu des travaux">
				  <div class="validate"></div>
                </div>

                </div>
                        `;

                    $('.addNouveau').append(html);
                    removeBlock();
                    initdate(i)

              });
     </script>
		<script>
				$("#formulaire2").on("submit", function(e) {
				e.preventDefault();
				
				
				var extension = $('#my-file').val().split('.').pop().toLowerCase();

			var file_data = $('#my-file').prop('files')[0];
			var nom = $("input[name=nom]").val();
				var email = $("input[name=email]").val();
				var adresse = $("input[name=adresse]").val();
				var ville = $("input[name=ville]").val();
				var nationalite = $("input[name=nationalite]").val();
				var datenais = $("input[name=datenais]").val();
				var competence = $("textarea[name=competence]").val();
				var langue = $("textarea[name=langue]").val();
				var experience = $("textarea[name=experience]").val();
				var telephone = $("input[name=telephone]").val();
			
			var form_data = new FormData();
			
				form_data.append('file', file_data);
				form_data.append('nom', nom);
				form_data.append('email', email);
				form_data.append('adresse', adresse);
				form_data.append('ville', ville);
				form_data.append('nationalite', nationalite);
				form_data.append('datenais', datenais);
				form_data.append('competence', competence);
				form_data.append('langue', langue);
				form_data.append('experience', experience);
				form_data.append('telephone', telephone);
				
				form_data.travaux = [];
				
				$("[name*=travaux]").each(function(index, element){
						if($(element).val() != ""){
							form_data.travaux.push($(element).val());
						}else{
							toastr.error('Veuillez renseigner le champ '+ $(element)[0].attributes[0].textContent, 'Error', {timeOut: 5000});
						   console.log($(element))
							return false;
						}
				 });
			$.ajaxSetup({
				headers: {
					'X-CSRF-Token': $('meta[name=_token]').attr('content')
				}
			});
  
			$.ajax({
				url: "{{url('opcPost')}}", // point to server-side PHP script
				data: form_data,
				type: 'POST',
				dataType: 'JSON',
				contentType: false, // The content type used when sending data to the server.
				cache: false, // To unable request pages to be cached
				processData: false,
				success: function(data) {
					if(data.type == 'error'){
						toastr.error(data.response, data.title, {timeOut: 5000})
					}else{
					
					     toastr.success(data.response, data.title, {timeOut: 15000})
						 //window.location.reload();
						 window.location.href = '/succes-inscription-consultant';
					}
				}
        });
				
				});
			
	    </script>
		@endpush
@endsection
