@extends('layout3')
@section('title','Bureau d\'étude ')
@section('description','Bureau d\'étude ')
@section('content')
    <section id="breadcrumbs" class="breadcrumbs img-fluid">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Bureau d'études et de conseils</h2>
          <ol>
            <li><a href="{{url('/')}}">Accueil</a></li>
            <li>Bureau d'études et de conseils</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <section id="about-us" class="about-us" style="background-color:#fff;">
      <div class="container" data-aos="fade-up">
		
        <div class="row content">
		<div class="col-lg-6" data-aos="fade-right">
			<img src="{{asset('assets/img/2862.jpg')}}" class="img-fluid">
          </div>
		<div class="col-lg-6" data-aos="fade-right">
            <h2>- Bureau d'études et de conseils</h2>
			<p align="justify" style="line-height:2;">Quel que soit votre secteur, nos offres prennent en compte vos spécificités. Que vous soyez, commerçant, profession
			libérale, PME-PMI, artisan, association, agriculteur, professionnel de l’immobilier ou de la restauration,
			nous avons développé des services spécifiques pour améliorer votre gestion et favoriser le développement commercial de
			 votre activité.<br/> Présent de la création à la gestion quotidienne de votre entreprise, nous sommes également à vos
			 côtés pour réussir avec vous vos projets de
			développement et de transmission le moment venu.</p>
          </div>
        </div>
		<div class="row content">
		<div class="col-lg-6" data-aos="fade-right">
			<ul>
              <li style="text-align:justify;"><i class="ri-check-double-line"></i> <b>Des offres spécialement conçues pour vous :</b>comptabilité, paie, conseils juridiques, patrimoine, formation… Dunamis Développement a développé des offres
adaptées à votre activité en prenant en compte vos obligations légales, votre environnement concurrentiel et vos contraintes métier.</li>
            </ul>
          </div>
		  <div class="col-lg-6" data-aos="fade-right">
			<ul>
<li style="text-align:justify;"><i class="ri-check-double-line"></i> <b>Des spécialistes de votre activité :</b>au contact de nos clients provenant de différents secteurs d’activité, nous avons construit des équipes
expérimentées qui maitrisent parfaitement vos problématiques spécifiques</li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- End About Us Section -->
    <!-- ======= Portfolio Section ======= 
    <section id="portfolio" class="portfolio" style="margin-top:-80px;">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Projets réalisés</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tout</li>
              <li data-filter=".filter-app">Développement des chaînes de valeur agricole</li>
              <li data-filter=".filter-card">Métiers de la transformation</li>
              <li data-filter=".filter-web">Infrastructures et services sociaux</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{asset('assets/img/dev/agri.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Production agricole</h4>
              <p>Agriculture</p>
              <a href="{{asset('assets/img/dev/agri.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Production agricole"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{asset('assets/img/iss/infra.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Infrastructures</h4>
              <p>Infrastructures</p>
              <a href="{{asset('assets/img/iss/infra.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Infrastructures"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{asset('assets/img/dev/commerce.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Commerce</h4>
              <p>Commerce</p>
              <a href="{{asset('assets/img/dev/commerce.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Commerce"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{asset('assets/img/mt/agroind.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Agro-industrie</h4>
              <p>Agro-industrie</p>
              <a href="{{asset('assets/img/mt/agroind.png')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Agro-industrie"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{asset('assets/img/iss/education.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Education</h4>
              <p>Education</p>
              <a href="{{asset('assets/img/iss/education.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Education"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{asset('assets/img/dev/transport.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Transports & Logistique</h4>
              <p>Transports</p>
              <a href="{{asset('assets/img/dev/transport.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Transports & Logistique"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{asset('assets/img/mt/energie.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Energie</h4>
              <p>Energie</p>
              <a href="{{asset('assets/img/mt/energie.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Energie"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{asset('assets/img/mt/materiaux.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Matériaux</h4>
              <p>Matériaux</p>
              <a href="{{asset('assets/img/mt/materiaux.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Matériaux"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{asset('assets/img/iss/sante.jpeg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Santé</h4>
              <p>Santé</p>
              <a href="{{asset('assets/img/iss/sante.jpeg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Santé"><i class="bx bx-plus"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
	 <!-- ======= Our Team Section ======= 
    <section id="team" class="team section-bg" style="margin-top:-80px;">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Nos <strong>consultants</strong></h2>
          <p>Liste complète de nos consultants</p>
        </div>

        <div class="row">
		@foreach($consultant as $consultants)
          <div class="col-lg-3 col-md-12 col-xs-12 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img  src="{{asset("storage/".$consultants->fichier)}}" class="img-fluid" alt="">
                <div class="social" style="font-size:11px;">
                  {{$consultants->email}}
                </div>
              </div>
              <div class="member-info">
                <h4 style="font-size:12px;"><a target="_blank" href="{{route('profil', ['id'=>$consultants->id])}}">{{$consultants->nom}}</a></h4>
                <span>{{$consultants->competence}}</span>
              </div>
            </div>
          </div>
		@endforeach
        </div>
		<br/>
		<a href="{{route('nos-consultants')}}" class="pull-right"> >>>Voir tous nos consultants>>> </a>
	 <br/>
	 <p align="center"><button class="btn btn-danger"><a href="{{route('demande-de-projet')}}" style="color:#fff;">Soumettre votre demande/projet</a></button></p>
      </div>
    </section><!-- End Our Team Section -->
	<!-- Get In Touch Section Start -->
	<section class="full-row bg-default padding-50">
		<div class="container">
			
				<div class="get-tch full-row">
				<div class="row">
					<div class="col-md-8 col-sm-8">
						<h3 class="color-white no-margin">Avez-vous besoin de financement, de formation, de conseil, 
						d’assistance? Merci de soumettre votre demande ou projet.</h3>
					</div>
					<div class="col-md-4 col-sm-4 box-right-middle">
						<a class="btn btn-large" href="{{route('choisir-projet')}}">Soumettre votre projet</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Get In Touch Section End -->
@endsection