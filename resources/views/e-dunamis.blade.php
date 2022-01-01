@extends('layout3')
@section('title', 'Plateforme E-dunamis')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Plateforme E-dunamis</h2>
          <ol>
            <li><a href="{{url('/')}}">Accueil</a></li>
            <li>Plateforme E-dunamis</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
	
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog" style="background-color:#fff;">
      <div class="container">

        <div class="row">
 
          <div class="col-lg-8 entries">
		  <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="col-lg-12 pt-4 pt-lg-0" data-aos="fade-left">
		  <h3 align="left" style="color:blue;">Plateforme E-dunamis</h3><br/>
            <p align="justify" style="line-height:2">
			<img src="{{asset('assets/img/cm.jpg')}}" class="img-fluid"/>
			<br/><br/>
              Chez DUNAMIS CLUB, vous ne faites pas que simple achat de biens et services. En devenant client DUNAMIS CLUB, nous vous donnons la
			possibilité, de disposer des revenus supplémentaires par vos simples achats.
			DUNAMIS DEVELOPPEMENT et les entreprises nationales se sont engagés dans une convention de partenariat pour amorcer ensemble un
			développement durable. DUNAMIS DEVELOPPEMENT inaugure le redéploiement des actions marketing pour fidéliser les clients,
			booster le chiffre d'affaires par l’effet de volume, auprès des entreprises du réseau. Ce programme de fidélité, permettra aux clients
			de bénéficier d'avantages exclusifs comme:
<br/>

            </p>
            <ul style="list-style-type:none;line-height:2">
              <li style="text-align:justify;"><i class="ri-check-double-line"></i> Des remises exceptionnelles sur vos achats dans le réseau DUNAMIS CLUB;</li>
              <li style="text-align:justify;"><i class="ri-check-double-line"></i> Un avantage intéressant pour bénéficier des meilleures conditions tarifaires pour vos achats dans les boutiques, supermarchés, acquisitions de matériels, vos séminaires, formations ou événements clients, location d’hôtels, frais de formation …;</li>
              <li style="text-align:justify;"><i class="ri-check-double-line"></i> Accès à une plateforme d'achats vous permettant d'obtenir des réductions sur des services B to B (réservations d'hôtels, de voitures, etc...);</li>
              <li style="text-align:justify;"><i class="ri-check-double-line"></i> Cet avantage est particulièrement destiné aux clients de DUNAMIS CLUB;</li>
              <li style="text-align:justify;"><i class="ri-check-double-line"></i> Tous les jours, 3% du montant de vos achats de biens et services auprès des entreprises du réseau sont crédités sur votre compte sans limitation;</li>
              <li style="text-align:justify;"><i class="ri-check-double-line"></i> Gagner des prix en fin d’année afin de réaliser vos rêves;</li>
              <li style="text-align:justify;"><i class="ri-check-double-line"></i> Gagner des prix en fin d’année afin de réaliser vos rêves;</li>
            </ul>
			<p>
			  Vous êtes impatient de devenir Client de DUNAMIS CLUB  et profiter de ces avantages uniques ?  <a href="{{route('inscription')}}" style="color:red;">Inscrivez-vous sans plus tarder !</a>
              </p>
			  
			  <br/>
	 <p align="center"><button class="btn btn-primary"><a href="{{route('boutique')}}" style="color:#fff;">Commerçants de la plateforme</a></button></p>
          </div>
        </div>
      </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar" data-aos="fade-left">
              <h3 class="sidebar-title">Opérateurs récents</h3>
              <div class="sidebar-item recent-posts">
				@foreach($pub2 as $pub3)
                <div class="post-item clearfix">
                  <img src="{{asset("public/storage/".$pub3->images)}}" alt="">
                  <h4><a href="blog-single.html">{{$pub3->titre}}</a></h4>
                  <time datetime="2020-01-01">{{$pub3->date2}}</time>
                </div>
				@endforeach
              </div><!-- End sidebar recent posts-->

              <!-- End sidebar tags-->
				 <br/>
	 <p align="center"><button class="btn btn-primary"><a href="{{route('inscription-operateur')}}" style="color:#fff;">Voulez-vous rejoindre la plateforme des commerçants? Inscrivez-vous!</a></button></p>
	 <br/>
	 <p align="center"><button class="btn btn-success"><a href="{{route('boutique')}}" style="color:#fff;">Visiter la plateforme des commerçants</a></button></p>
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>
		<br/>
	
      </div>
    </section><!-- End Blog Section -->
@endsection
