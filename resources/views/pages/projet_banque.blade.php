@extends('layout')
@section('title','Banque de projet ')
@section('description','Banque de projet ')
@section('content')
<!-- ======= About Us Section ======= -->
<!-- ======= Our Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Banque de <strong>projets</strong></h2>
            <p>Nous avons déjà à notre disposition plus de 300 idées de projets de création d'entreprise. Vous ne
                trouvez pas votre projet? Ecrivez-nous
                <a type="button" class="btn btn-success"
                    href="https://api.whatsapp.com/send?phone=0024177816737&text=Bonjour,%20j'ai%20une%20idée%20de%20projet%20que%20j'aimerais%20vous%20soumettre"
                    target="_blank"> <i class="icofont-whatsapp"></i> Par whatsapp</a>
                ou soummettre votre projet avec détails en remplissant le formulaire <a type="button"
                    class="btn btn-warning" href="{{route('demande-de-projet')}}" style="color:#fff"><i
                        class="icofont-aim"></i> Soumttre mon projet</a>
            </p>
        </div>

        

        <div id="project">

        </div>

       


        <div class="row" id="projetselectionner">
            <input type="hidden" value="" id="tousprojets">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" id="selectpro">

                <div class="member" data-aos="fade-up">
                    <div class="member-img">
                        <img src="" />
                        <div class="social">
                            <a type="button" class="btn btn-success"
                                href="https://api.whatsapp.com/send?phone=0024177816737&text=Bonjour,%20je suis%20interessé%20par%20le%20projet "
                                target="_blank" style="color:#fff;"> <i class="icofont-whatsapp"></i> En savoir plus</a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4></h4>
                        <span></span>
                    </div>
                </div>

            </div>

        </div>
        <div class="blog-pagination">

        </div>




    </div>
</section>











<section class="full-row bg-default">
    <div class="container">
        <div class="get-tch full-row">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h3 class="color-white no-margin">Vous êtes interessés par l'un de nos projets?</h3>
                </div>
                <div class="col-md-4 col-sm-4 box-right-middle">
                    <a class="btn btn-large" href="{{route('choisir-projet')}}">Soumettre votre projet</a>
                </div>
            </div>
        </div>
    </div>
</section>





@push('scripts')
<script src="{{ asset('js/app.js') }}"></script>


{{-- <script>
    $('#niveau').on("change", function (h) {

			var typeprojet = $(this).val();
			console.log(typeprojet)
			if(typeprojet != 0){
				$(".typeprojet").each(function (index, element) {
					$(element).removeClass("d-flex").hide();
				});
				$("[data-projet-id="+ typeprojet +"]").each(function (index, element) {
					$(element).addClass("d-flex").show();
				});
			}else{
				$(".typeprojet").show();
			}

		});

</script> --}}
@endpush
@endsection