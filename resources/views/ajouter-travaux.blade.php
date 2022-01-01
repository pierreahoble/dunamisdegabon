@extends('layout2')
@section('title', 'Ajouter expérience professionnelles')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbss">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Ajouter expérience professionnelles</h2>
          <ol>
            <li>
			@if (session('user')->roles == "Admin") 
            <a href="{{route('tableau_de_bord')}}">Tableau de bord</a>
		@elseif (session('user')->roles == "Client") 
		    <a href="{{route('tableaudebord')}}">Tableau de bord</a>
		@elseif (session('user')->roles == "Consultant") 
		    <a href="{{route('tableaudebordconsultant')}}">Tableau de bord</a>
		@else
			<a href="{{route('tb_de_bord')}}">Tableau de bord</a>
		@endif
			</li>
            <li>Ajouter expérience professionnelles</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row mt-12" data-aos="fade-up">
          <div class="col-lg-12">
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
		    <form method="post" role="form" class="php-email-form">
            {{csrf_field()}}
			<br/>
			<div class="form-row">
				<div class="col-md-3 form-group">
				<label class="label-control">Client<font color="red">*</font></label>
                  <input id="client" type="text" class="form-control" name="travaux[0][client][]" required>
                </div>
				<div class="col-md-3 form-group">
				<label class="label-control">Profil<font color="red">*</font></label>
                  <select id="niveau" type="text" class="form-control" name="travaux[0][profil][]" required>
					<option value=""></option>
					<option value="Faible">Employé</option>
					<option value="Moyen">Stagiaire</option>
					<option value="Excellent">Prestataire</option>
				  </select>
                </div>
				<div class="col-md-3 form-group">
				<label class="label-control">Activités principales<font color="red">*</font></label>
                  <input id="activite" type="text" class="form-control" name="travaux[0][activite][]" required>
                </div>
				<div class="col-md-3 form-group">
				<label class="label-control">Lieu<font color="red">*</font></label>
                  <input id="lieu" type="text" class="form-control" name="travaux[0][lieu][]" required>
                </div>
				<div class="col-md-3 form-group">
				<label class="label-control">Mois début<font color="red">*</font></label>
                  <select id="niveau" type="text" class="form-control" name="travaux[0][moisdebut][]" required>
					<option value=""></option>
					<option value="Janvier">Janvier</option>
					<option value="Février">Février</option>
					<option value="Mars">Mars</option>
					<option value="Avril">Avril</option>
					<option value="Mai">Mai</option>
					<option value="Juin">Juin</option>
					<option value="Juillet">Juillet</option>
					<option value="Août">Août</option>
					<option value="Septembre">Septembre</option>
					<option value="Octobre">Octobre</option>
					<option value="Novembre">Novembre</option>
					<option value="Décembre">Décembre</option>
				  </select>
                </div>
				<div class="col-md-3 form-group">
				<label class="label-control">Année <font color="red">*</font></label>
                  <input id="anneedebut" type="text" class="form-control" name="travaux[0][anneedebut][]" required>
                </div>
				<div class="col-md-3 form-group">
				<label class="label-control">Mois fin<font color="red">*</font></label>
                  <select id="niveau" type="text" class="form-control" name="travaux[0][moisfin][]" required>
					<option value=""></option>
					<option value="Janvier">Janvier</option>
					<option value="Février">Février</option>
					<option value="Mars">Mars</option>
					<option value="Avril">Avril</option>
					<option value="Mai">Mai</option>
					<option value="Juin">Juin</option>
					<option value="Juillet">Juillet</option>
					<option value="Août">Août</option>
					<option value="Septembre">Septembre</option>
					<option value="Octobre">Octobre</option>
					<option value="Novembre">Novembre</option>
					<option value="Décembre">Décembre</option>
				  </select>
                </div>
				<div class="col-md-3 form-group">
				<label class="label-control">Année <font color="red">*</font></label>
                  <input id="anneefin" type="text" class="form-control" name="travaux[0][anneefin][]" required>
                </div>
				<div class="col-md-6 form-group">
				<label class="label-control">Missions/Tâches réalisées<font color="red">*</font></label>
                  <textarea id="mission" type="text" class="form-control" name="travaux[0][mission][]" required></textarea>
                </div>
				<div class="col-md-2 form-group">
					<label class="label-control">&nbsp;</label>
					<button data-toggle="tooltip" data-placement="bottom" title="Ajouter" type="button" 
					class="btn btn-icon btn-warning form-control" id="addNewblock" style="color:#fff;">
					<i class="icofont-plus"></i> Ajouter</button>
                </div>
                </div>
				<div class="addNouveau"></div>
              <div class="form-row">
				<div class="col-md-12 form-group">
				<button id="addlang" class="btn btn-success">
						<i class="icofont-tick-mark"></i> Enregistrer
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
            function removeBlock() {
               $(".deleteblock").on("click", function () {
                           $(this).parent().parent().remove()
                       })
              }

              var i=0;
               $("#addNewblock").on("click", function ()
                {
                   i++;
                   var html = `
				   
				   <div class="form-row">
                  
				   <div class="col-md-3 form-group">
					<label class="label-control">Client<font color="red">*</font></label>
					<input id="client" type="text" class="form-control" name="travaux[`+ i +`][client][]" required>
                    </div>
					<div class="col-md-3 form-group">
				<label class="label-control">Profil<font color="red">*</font></label>
                  <select id="niveau" type="text" class="form-control" name="travaux[`+ i +`][profil][]" required>
					<option value=""></option>
					<option value="Faible">Employé</option>
					<option value="Moyen">Stagiaire</option>
					<option value="Excellent">Prestataire</option>
				  </select>
                </div>
				<div class="col-md-3 form-group">
				<label class="label-control">Activités principales<font color="red">*</font></label>
                  <input id="activite" type="text" class="form-control" name="travaux[`+ i +`][activite][]" required>
                </div>
				<div class="col-md-3 form-group">
				<label class="label-control">Lieu<font color="red">*</font></label>
                  <input id="lieu" type="text" class="form-control" name="travaux[`+ i +`][lieu][]" required>
                </div>
				<div class="col-md-3 form-group">
				<label class="label-control">Mois début<font color="red">*</font></label>
                  <select id="niveau" type="text" class="form-control" name="travaux[`+ i +`][moisdebut][]" required>
					<option value=""></option>
					<option value="Janvier">Janvier</option>
					<option value="Février">Février</option>
					<option value="Mars">Mars</option>
					<option value="Avril">Avril</option>
					<option value="Mai">Mai</option>
					<option value="Juin">Juin</option>
					<option value="Juillet">Juillet</option>
					<option value="Août">Août</option>
					<option value="Septembre">Septembre</option>
					<option value="Octobre">Octobre</option>
					<option value="Novembre">Novembre</option>
					<option value="Décembre">Décembre</option>
				  </select>
                </div>
				<div class="col-md-3 form-group">
				<label class="label-control">Année <font color="red">*</font></label>
                  <input id="anneedebut" type="text" class="form-control" name="travaux[`+ i +`][anneedebut][]" required>
                </div>
				<div class="col-md-3 form-group">
				<label class="label-control">Mois fin<font color="red">*</font></label>
                  <select id="niveau" type="text" class="form-control" name="travaux[`+ i +`][moisfin][]" required>
					<option value=""></option>
					<option value="Janvier">Janvier</option>
					<option value="Février">Février</option>
					<option value="Mars">Mars</option>
					<option value="Avril">Avril</option>
					<option value="Mai">Mai</option>
					<option value="Juin">Juin</option>
					<option value="Juillet">Juillet</option>
					<option value="Août">Août</option>
					<option value="Septembre">Septembre</option>
					<option value="Octobre">Octobre</option>
					<option value="Novembre">Novembre</option>
					<option value="Décembre">Décembre</option>
				  </select>
                </div>
				<div class="col-md-3 form-group">
				<label class="label-control">Année <font color="red">*</font></label>
                  <input id="anneefin" type="text" class="form-control" name="travaux[`+ i +`][anneefin][]" required>
                </div>
				<div class="col-md-6 form-group">
				<label class="label-control">Missions/Tâches réalisées<font color="red">*</font></label>
                  <textarea id="mission" type="text" class="form-control" name="travaux[`+ i +`][mission][]" required></textarea>
                </div>
				<div class="col-md-2 form-group">
					<label class="label-control">&nbsp;</label>
					<button data-toggle="tooltip" data-placement="bottom" title="Ajouter" type="button" 
					class="btn btn-icon btn-danger form-control deleteblock" style="color:#fff;">
					<i class="close-line"></i> Supprimer</button>
                </div>
				
					
		 </div>
				  
                       `;

                   $('.addNouveau').append(html);
                   removeBlock();

             });
    </script>
	<script>
        $( "#addlang").on('click', function( e ) {
        e.preventDefault();
        var data = {};
        data.travaux = [];

        $("[name*=travaux]").each(function(index, element){
                if($(element).val() != ""){
                    data.travaux.push($(element).val());
                }else{
                    toastr.error('Veuillez '+ $(element)[0].attributes[0].textContent, 'Error', {timeOut: 5000});
                   console.log($(element))
                    return false;
                }
         });

        data._token = "{{csrf_token()}}";

        if(data.travaux){
            $.post("{{route('travauxpost')}}", data, function (result) {
            if(result.type == 'error'){
                toastr.error(result.response, result.title, {timeOut: 5000})
            }else{

                toastr.success(result.response, result.title, {timeOut: 10000})
                 location.reload();
            }

            })
        }
        });
</script>
	@endpush
@endsection
