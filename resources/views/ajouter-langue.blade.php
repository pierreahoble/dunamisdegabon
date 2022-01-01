@extends('layout2')
@section('title', 'Ajouter langue')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbss">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Ajouter langue</h2>
          <ol>
            <li>
			@if (Auth::user()->roles == "Admin") 
            <a href="{{route('tableau_de_bord')}}">Tableau de bord</a>
		@elseif (Auth::user()->roles == "Client") 
		    <a href="{{route('tableaudebord')}}">Tableau de bord</a>
		@elseif (Auth::user()->roles == "Consultant") 
		    <a href="{{route('tableaudebordconsultant')}}">Tableau de bord</a>
		@else
			<a href="{{route('tb_de_bord')}}">Tableau de bord</a>
		@endif
			</li>
            <li>Ajouter langue</li>
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
				<div class="col-md-5 form-group">
				<label class="label-control">Langue<font color="red">*</font></label>
                  <select id="niveau" type="text" class="form-control" name="langue[0][nom][]" required>
					<option value="">Veuillez sélectionner</option>
					<option value="Français">Français</option>
					<option value="Anglais">Anglais</option>
					<option value="Espanyol">Espanyol</option>
					<option value="Allemand">Allemand</option>
					<option value="Portugais">Portugais</option>
					<option value="Turc">Turc</option>
					<option value="Ruisse">Ruisse</option>
				  </select>
                </div>
				<div class="col-md-5 form-group">
				<label class="label-control">Niveau<font color="red">*</font></label>
                  <select id="niveau" type="text" class="form-control" name="langue[0][niveau][]" required>
					<option value=""></option>
					<option value="Faible">Faible</option>
					<option value="Moyen">Moyen</option>
					<option value="Excellent">Excellent</option>
				  </select>
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
				<button id="addlang" class="btn btn-primary">
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
                  
				   <div class="col-md-5 form-group">
					<label class="label-control">Compéténce<font color="red">*</font></label>
					 <select id="niveau" type="text" class="form-control" name="langue[`+ i +`][nom][]" required>
					<option value=""></option>
					<option value="Français">Français</option>
					<option value="Anglais">Anglais</option>
					<option value="Espanyol">Espanyol</option>
					<option value="Allemand">Allemand</option>
					<option value="Portugais">Portugais</option>
					<option value="Turc">Turc</option>
					<option value="Ruisse">Ruisse</option>
				  </select>
                    </div>
					<div class="col-md-5 form-group">
				<label class="label-control">Niveau<font color="red">*</font></label>
                  <select id="niveau" type="text" class="form-control" name="competence[`+ i +`][niveau][]" required>
					<option value=""></option>
					<option value="Faible">Faible</option>
					<option value="Moyen">Moyen</option>
					<option value="Excellent">Excellent</option>
				  </select>
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
        data.langue = [];

        $("[name*=langue]").each(function(index, element){
                if($(element).val() != ""){
                    data.langue.push($(element).val());
                }/*else{
                    toastr.error('Veuillez '+ $(element)[0].attributes[0].textContent, 'Error', {timeOut: 5000});
                   console.log($(element))
                    return false;
                }*/
         });

        data._token = "{{csrf_token()}}";

        if(data.langue){
            $.post("{{route('languePost')}}", data, function (result) {
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
