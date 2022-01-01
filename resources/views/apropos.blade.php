@extends('layout')
@section('title','A propos ')
@section('description','A propos ')
@section('content')
    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us" style="background-color:#fff;">
      <div class="container" data-aos="fade-up">
		<div class="section-title">
          <h2>Présentation</h2>
        </div>
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
			<p align="justify" style="line-height:2;">
              Dunamis Development est une entreprise de soutien et de conseil qui accompagne 
			  l’ensemble des acteurs du développement économique et social du Gabon (privés et publics), 
			  en offrant les meilleures prestations pour la réussite de leurs projets de bout en bout, de 
			  la stratégie à la mise en œuvre, en passant par l’appui au financement.
			Pour servir au mieux ses clients, Dunamis Development dispose d’un vaste réseau de spécialistes
			et experts, passionnés et riches de plusieurs années d’expérience. <br/><br/>
			Elle a construit un réseau dense sur le terrain et jouit d’un excellent savoir-faire
			pour mettre en relation et aligner les différentes parties prenantes d’un projet (public/privé, 
			développeurs de projets/ financeurs, bailleurs de fonds, ONG,..).
            </p>
          </div>
          <div class="col-lg-6 pull-right" data-aos="fade-left">
				<img src="{{asset('img/ap.jpg')}}" />
          </div>
          <div class="col-lg-12 pt-4 pt-lg-0" data-aos="fade-left">
            <p align="justify" style="line-height:2;">
              Dunamis Development déploie des actions marketing pour fidéliser les clients, booster le chiffre
			  d’affaires par l’effet de volume, auprès des entreprises du réseau. Ce programme de fidélité, 
			  permettra aux clients de bénéficier des avantages exclusifs.
            </p>
            <div class="section-title">
          <h2>Notre mission</h2>
        </div>
			<div class="row">
			    <div class="col-lg-4 pt-4 pt-lg-0">
			        <p align="center"><img src="{{asset('img/mission.png')}}" /></p>
				    	<p align="justify">Offrir des services de soutien et de conseils pour le développement des entreprises à travers : </p>
				</div>
				<div class="col-lg-4 pt-4 pt-lg-0">
				<ul>
					<li><i class="ri-check-double-line"></i> Analyse des marchés</li>
              <li><i class="ri-check-double-line"></i> Etudes de faisabilités </li>
              <li><i class="ri-check-double-line"></i> Recherche de financement</li>
              <li><i class="ri-check-double-line"></i> Assistance technique aux projets</li>
              <li><i class="ri-check-double-line"></i> Accès aux opportunités d’affaires </li>
			  </ul>
				</div>	
				<div class="col-lg-4 pt-4 pt-lg-0">
					<ul>
              <li><i class="ri-check-double-line"></i> Formation</li>
              <li><i class="ri-check-double-line"></i> Mise en relation d’affaires</li>
              <li><i class="ri-check-double-line"></i> Information - communication</li>
              <li><i class="ri-check-double-line"></i> Etudes & recherches </li>
            </ul>
				</div>	
			</div>
            
          </div>
		  
        </div>

      </div>
    </section><!-- End About Us Section -->
	<!-- ======= Our Clients Section ======= -->
    <!-- End Our Clients Section -->
    <!-- ======= Our Team Section ======= -->
    

    <!-- ======= Our Skills Section ======= -->
    <!-- End Our Skills Section -->

    <!-- ======= Our Clients Section ======= -->
    <!-- End Our Clients Section -->
@endsection