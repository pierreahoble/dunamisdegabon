@extends('layout3')
@section('title','Incubateur d\'entreprises ')
@section('description','Incubateur d\'entreprises ')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs img-fluid">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Incubateur d'entreprise</h2>
          <ol>
            <li><a href="{{url('/')}}">Accueil</a></li>
            <li>Incubateur d'entreprises</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <section id="about-us" class="about-us" style="background-color:#fff;">
      <div class="container" data-aos="fade-up">
        <div class="row content">
		<div class="col-lg-6" data-aos="fade-right">
			<img src="{{asset('assets/img/ic.jpg')}}" class="img-fluid">
          </div>
		<div class="col-lg-6" data-aos="fade-right" style="margin-top:-10px;">
            <h2>- Incubateur d'entreprises</h2>
			<p align="justify">Peu importe que vous vous questionniez sur votre avenir professionnel,
			que votre transition soit déjà entamée ou encore que vous ayez un business établi, vous découvrirez avec nous des 
			pépites qui vous permettront de créer de la richesse.</p>
			<ul>
              <li style="text-align:justify;"><i class="ri-check-double-line"></i> des banques de projets déjà conçus pour vous ;</li>
              <li style="text-align:justify;"><i class="ri-check-double-line"></i> d’assistance pour la création de votre entreprise ;</li>
              <li style="text-align:justify;"><i class="ri-check-double-line"></i> du financement au démarrage et au pilotage au besoin ;</li>
              <li style="text-align:justify;"><i class="ri-check-double-line"></i> de la recherche de clients pour assurer la commercialisation ;</li>
              <li style="text-align:justify;"><i class="ri-check-double-line"></i> de l’assistance pour la gestion comptable et financière ;</li>
			  <li style="text-align:justify;"><i class="ri-check-double-line"></i> Des coachings sur mesure ;</li>
              <li style="text-align:justify;"><i class="ri-check-double-line"></i> Plus de clients dès vos premiers mois d’activités ;</li>
              <li style="text-align:justify;"><i class="ri-check-double-line"></i> Plus d’impact avec ce que vous offrirez comme produit ou service ;</li>
              <li style="text-align:justify;"><i class="ri-check-double-line"></i> Plus de résultats pour améliorer la vie de vos clients et la vôtre…</li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- End About Us Section -->
	

<div class="container" style="background-color:#fff;">	
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" >
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="background-color:green;color:#fff;width:190px;">1. Etude d'opportunité</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="background-color:#4d4b4b;color:#fff;width:180px;">2. Etude de faisabilité</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" style="background-color:green;color:#fff;width:490px;">3. Recherche de partenaires commerciaux, techniques et financiers
</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact2" aria-selected="false" style="background-color:#4d4b4b;color:#fff;width:190px;">4.	Mission d’accompagnement</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				  <p style="line-height:2">
                  <div class="row">
                <div class="col-lg-6">
				 <h4 align="center" class="">Vos enjeux</h4>
					<ul style="line-height:1;text-align:justify;">
					<li><i class="ri-check-double-line"></i> Vérifier l’opportunité commerciale de votre projet d’investissement;</li>
					  <li><i class="ri-check-double-line"></i> Disposer d’un avis externe pour le montage de votre projet; </li>
					  <li><i class="ri-check-double-line"></i> Pré-évaluer la viabilité technique et économique de votre dossier;</li>
					  <li><i class="ri-check-double-line"></i> Bénéficier des éléments de décision pour la poursuite de l’étude de faisabilité de votre projet;</li>
			  </ul>
                </div>
				<div class="col-lg-6">
				<h4 align="center" class="">Notre méthodologie</h4>
					<ul style="line-height:1;text-align:justify;">
					<li><i class="ri-check-double-line"></i> Analyse du site et de l’environnement économique du projet;</li>
					<li><i class="ri-check-double-line"></i> Évaluation sommaire et examen des données du marché (offre, demande, concurrence); </li>
					<li><i class="ri-check-double-line"></i> Schématisation du projet : positionnement commercial et programmation synthétique;</li>
					<li><i class="ri-check-double-line"></i> Vérification des principaux ratios de base (marché potentiel, opportunité à saisir, investissements, financement). </li>
					</ul>
                </div>
				</div>
				<br/>
				<div class="row">
                <div class="col-lg-6">
				 <h4 align="center" class="">Livrables opérationnels</h4>
					<ul style="line-height:2;text-align:justify;">
					<li><i class="ri-check-double-line"></i> Un rapport d’étude d’opportunité synthétique déterminant clairement 
					le potentiel commercial, technique et économique de votre projet, ainsi que les investigations complémentaires
					à réaliser dans le cas d’un avis favorable</li>

			  </ul>
                </div>
				<div class="col-lg-6">
				<h4 align="center" class="">Moyens développés</h4>
					<ul style="line-height:1;text-align:justify;">
					<li><i class="ri-check-double-line"></i> Des consultants spécialisés par métier, bénéficiant d’une longue expérience, et un réseau d’experts référencés</li>
					<li><i class="ri-check-double-line"></i> Un répertoire unique de contacts identifiés auprès des institutionnels et d’organismes ressources </li>
					<li><i class="ri-check-double-line"></i> Des méthodes d’enquêtes innovantes</li>
					<li><i class="ri-check-double-line"></i> Notre base de données nationale et nos études sectorielles par métier</li>
					<li><i class="ri-check-double-line"></i> Des outils et méthodes éprouvés (matrices, ratios, chiffres-clés, etc.) </li>
					</ul>
                </div>
				</div>
                </p>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	<p style="line-height:2">
		<div class="row">
                <div class="col-lg-6">
				 <h4 align="center" class="">Vos enjeux</h4>
					<ul style="line-height:1;text-align:justify;">
					<li><i class="ri-check-double-line"></i> Vérifier l’opportunité commerciale de votre projet</li>
					  <li><i class="ri-check-double-line"></i> Définir le positionnement commercial de votre entreprise (marché, produit, prix, promotion) </li>
					  <li><i class="ri-check-double-line"></i> Déterminer le programme d’investissement et production correspondant (catégorie, capacité)</li>
					  <li><i class="ri-check-double-line"></i> Évaluer la faisabilité économique de votre projet sur la base de données économiques </li>
					  <li><i class="ri-check-double-line"></i> Identifier les meilleurs canaux de promotion et de commercialisation </li>
					  <li><i class="ri-check-double-line"></i> Disposer d’un dossier complet pour négocier les emprunts bancaires et solliciter des subventions </li>
			  </ul>
                </div>
				<div class="col-lg-6">
				<h4 align="center" class="">Notre méthodologie</h4>
					<ul style="line-height:1;text-align:justify;">
					<li><i class="ri-check-double-line"></i> Analyse détaillée du site et de l’environnement économique du projet</li>
					<li><i class="ri-check-double-line"></i> Évaluation et examen des données du marché (offre, demande, concurrence) </li>
					<li><i class="ri-check-double-line"></i> Enquêtes auprès des organismes ressources et des prescripteurs potentiels du projet</li>
					<li><i class="ri-check-double-line"></i> Proposition de positionnement commercial et de programmation</li>
					<li><i class="ri-check-double-line"></i> Prévisions de vente et élaboration des comptes prévisionnels (exploitation et trésorerie). </li>
					</ul>
                </div>
				</div>
				<br/>
				<div class="row">
                <div class="col-lg-6">
				 <h4 align="center" class="">Livrables opérationnels </h4>
					<ul style="line-height:1;text-align:justify;">
					<li><i class="ri-check-double-line"></i> Un rapport d’étude de faisabilité complet, clair et synthétique crédibilisant votre projet;</li>
					  <li><i class="ri-check-double-line"></i> Des annexes détaillées sur le marché, la concurrence, le programme et les bases de calcul des résultats. </li>
			  </ul>
                </div>
				<div class="col-lg-6">
				<h4 align="center" class="">Moyens développés</h4>
					<ul style="line-height:1;text-align:justify;">
					<li><i class="ri-check-double-line"></i> Des consultants spécialisés par métier, bénéficiant d’une longue expérience, et un réseau d’experts référencés;</li>
					<li><i class="ri-check-double-line"></i> Un répertoire unique de contacts identifiés auprès des institutionnels et d’organismes ressources; </li>
					<li><i class="ri-check-double-line"></i> Des méthodes d’enquêtes innovantes; </li>
					<li><i class="ri-check-double-line"></i> Notre base de données nationale et nos études sectorielles par métier; </li>
					<li><i class="ri-check-double-line"></i> Des outils et méthodes éprouvés (matrices, ratios, chiffres-clés, etc.). </li>
					</ul>
                </div>
				</div>
	</p>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
	                <p style="line-height:2">
                  <div class="row">
                <div class="col-lg-6">
				 <h4 align="center" class="">Vos enjeux</h4>
					<ul style="line-height:1;text-align:justify;">
					<li><i class="ri-check-double-line"></i> Rechercher un partenaire financier (dettes ou capital) pour démarrer votre projet ;</li>
					  <li><i class="ri-check-double-line"></i> Bénéficier du service de recherche pour acquérir votre ligne de production ou machines et équipements); </li>
					  <li><i class="ri-check-double-line"></i> Bénéficier d’un soutien dans vos démarches auprès  des tiers (banques, institutionnels, architectes, etc.);</li>
					  <li><i class="ri-check-double-line"></i> Orienter efficacement votre projet dans sa phase de réalisation (identification d’une assistance à maître d’ouvrage,…); </li>
					  <li><i class="ri-check-double-line"></i> Obtenir des commandes de vente de vos produits ou contrats de prestations). </li>
			  </ul>
                </div>
				<div class="col-lg-6">
				<h4 align="center" class="">Notre méthodologie</h4>
					<ul style="line-height:1;text-align:justify;">
					<li><i class="ri-check-double-line"></i> Prise de contact et analyse du cahier de charge;</li>
					<li><i class="ri-check-double-line"></i> Évaluation et examen des données de la mission; </li>
					<li><i class="ri-check-double-line"></i> Elaboration des cahiers d’opportunités d’affaires;</li>
					<li><i class="ri-check-double-line"></i> Identification et recherche des partenaires clés du projet;</li>
					<li><i class="ri-check-double-line"></i> Mise en relation d’affaires et formalisation du partenariat. </li>
					</ul>
                </div>
				</div>
				<br/>
				<div class="row">
                <div class="col-lg-6">
				 <h4 align="center" class="">Livrables opérationnels </h4>
					<ul style="line-height:1;text-align:justify;">
					<li><i class="ri-check-double-line"></i> Compte-rendu périodiques et rapport synthétique d’intervention comprenant les constats et les préconisations;</li>
					  <li><i class="ri-check-double-line"></i> Contrat de la mission : vente de produits ou services, contrat d’assistance technique ou contrat de prêt. </li>
			  </ul>
                </div>
				<div class="col-lg-6">
				<h4 align="center" class="">Moyens développés</h4>
					<ul style="line-height:1;text-align:justify;">
					<li><i class="ri-check-double-line"></i> Des consultants spécialisés par métier, bénéficiant d’une longue expérience, et un réseau d’experts référencés;</li>
					<li><i class="ri-check-double-line"></i> Un répertoire unique de contacts identifiés auprès des institutionnels et d’organismes ressources; </li>
					<li><i class="ri-check-double-line"></i> Des méthodes d’enquêtes innovantes; </li>
					<li><i class="ri-check-double-line"></i> Notre base de données nationale et nos études sectorielles par métier; </li>
					<li><i class="ri-check-double-line"></i> Des outils et méthodes éprouvés (matrices, ratios, chiffres-clés, etc.). </li>
					</ul>
                </div>
				</div>
				
                </p>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	                <p style="line-height:2">
					<div class="row">
                <div class="col-lg-6">
				 <h4 align="center" class="">Vos enjeux</h4>
					<ul style="line-height:1;text-align:justify;">
					<li><i class="ri-check-double-line"></i> Être accompagné dans vos réflexions concernant votre activité (création, acquisition, développement, repositionnement, cession, etc.);</li>
					  <li><i class="ri-check-double-line"></i> Profiter d’une expertise externe; </li>
					  <li><i class="ri-check-double-line"></i> Orienter efficacement votre projet dans sa phase de réalisation (assistance à maître d’ouvrage);</li>
					  <li><i class="ri-check-double-line"></i> Bénéficier d’un soutien dans vos démarches vis à
						vis des tiers (banques, institutionnels, architectes,  scénographes, etc.)</li>
			  </ul>
                </div>
				<div class="col-lg-6">
				<h4 align="center" class="">Notre méthodologie</h4>
					<ul style="line-height:1;text-align:justify;">
					<li><i class="ri-check-double-line"></i> Réunion de cadrage au démarrage;</li>
					<li><i class="ri-check-double-line"></i> Prise en compte des caractéristiques précises du projet ; </li>
					<li><i class="ri-check-double-line"></i> Analyse détaillée du site et de l’environnement économique du projet;</li>
					<li><i class="ri-check-double-line"></i> Évaluation et examen des données du marché (offre, demande, concurrence);</li>
					<li><i class="ri-check-double-line"></i> Enquêtes auprès des organismes ressources et des prescripteurs potentiels du projet; </li>
					<li><i class="ri-check-double-line"></i> Proposition de positionnement commercial et de programmation; </li>
					<li><i class="ri-check-double-line"></i> Prévisions de vente et élaboration des comptes prévisionnels (exploitation et trésorerie). </li>
					</ul>
                </div>
				</div>
				<br/>
				<div class="row">
                <div class="col-lg-6">
				 <h4 align="center" class="">Livrables opérationnels </h4>
					<ul style="line-height:1;text-align:justify;">
					<li><i class="ri-check-double-line"></i> Compte-rendu périodiques et rapport synthétique d’intervention comprenant les constats et les préconisations;</li>
					  <li><i class="ri-check-double-line"></i> Des documents techniques en fonction de la mission : stratégie, budget, plan d’actions commerciales, etc. </li>
			  </ul>
                </div>
				<div class="col-lg-6">
				<h4 align="center" class="ph4">Moyens développés</h4>
					<ul style="line-height:1;text-align:justify;">
					<li><i class="ri-check-double-line"></i> Des consultants spécialisés par métier, bénéficiant d’une longue expérience, et un réseau d’experts référencés;</li>
					<li><i class="ri-check-double-line"></i> Un répertoire unique de contacts identifiés auprès des institutionnels et d’organismes ressources; </li>
					<li><i class="ri-check-double-line"></i> Des méthodes d’enquêtes innovantes; </li>
					<li><i class="ri-check-double-line"></i> Notre base de données nationale et nos études sectorielles par métier; </li>
					<li><i class="ri-check-double-line"></i> Des outils et méthodes éprouvés (matrices, ratios, chiffres-clés, etc.). </li>
					</ul>
                </div>
				</div>
				
                </p>
  </div>
</div>
  </div>
	
     <!-- ======= Services Section ======= -->
	<!-- ======= Frequently Asked Questions Section ======= -->
   <!-- End Frequently Asked Questions Section -->
	<!-- ======= Clients Section ======= -->
    <section id="" class="cliento" style="background-color:#fff;">
      <div class="container">

        <div class="section-title">
          <h2>Nos projets</h2>
          <p>Nous mettons à votre disposition une banque de plus 300 projets.</p>
        </div>

        <div class="owl-carousel clients-carousel">
            @foreach($projet as $projets)
          <img src="{{asset("storage/".$projets->fichier)}}" alt="">
          @endforeach
        </div>

      </div>
    </section><!-- End Clients Section -->
	<!-- ======= Our Team Section ======= -->
	<section class="full-row bg-default padding-50">
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
@endsection