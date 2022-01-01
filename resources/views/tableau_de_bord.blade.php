@extends('layout2')
@section('title','Tableau de bord')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbss">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Tableau de bord</h2>
      <ol>
        <li>@if (Auth::user()->roles == "Admin")
          <a href="{{route('tableau_de_bord')}}"><i class="icofont-bank-alt" style="font-size:25px;"></i> Tableau de
            bord</a>
          @elseif (Auth::user()->roles == "Client")
          <a href="{{route('tableaudebord')}}"><i class="icofont-bank-alt" style="font-size:25px;"></i> Tableau de
            bord</a>
          @else
          <a href="{{route('tb_de_bord')}}"><i class="icofont-bank-alt" style="font-size:25px;"></i> Tableau de bord</a>
          @endif
        </li>
        <li>Tableau de bord</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Services Section ======= -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="icon-box">
          <i class="icofont-hand-right" style="color:green"></i>
          <h3 style="color:green">Gestion des inscriptions</h3>
        </div>
      </div>
    </div>
    <br />
    <div class="row">
      <div class="col-lg-3 col-md-3">
        <div class="icon-box">
          <i class="icofont-handshake-deal" style="color: #ffbb2c;"></i>
          <h3><a href="{{route('liste-des-operateurs')}}">Opérateur inscrit : {{DB::table('users')->where('roles',
              'Entreprise')->get()->count()}}</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-megaphone" style="color: #5578ff;"></i>
          <h3><a href="{{route('liste-des-clients')}}">Client inscrit : {{DB::table('users')->where('roles',
              'Client')->get()->count()}}</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-businessman" style="color: #e80368;"></i>
          <h3><a href="{{route('liste-des-consultants')}}">Consultant inscrit : {{DB::table('users')->where('roles',
              'Consultant')->get()->count()}}</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="icon-box">
          <i class="icofont-users" style="color: #ffbb2c;"></i>
          <h3><a href="{{route('liste-des-classements')}}">Parrainages : {{DB::table('parrainage')->get()->count()}}</a>
          </h3>
        </div>
      </div>
    </div>
    <br />
    <br />
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="icon-box">
          <i class="icofont-hand-right" style="color:green"></i>
          <h3 style="color:green">Gestion des demandes de projet</h3>
        </div>
      </div>
    </div>
    <br />
    <div class="row">
      <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-megaphone" style="color: #5578ff;"></i>
          <h3><a href="{{route('liste_des_demandes')}}">Total demande de projet :
              {{DB::table('demande_projet')->get()->count()}}</a></h3>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-businessman" style="color: #e80368;"></i>
          <h3><a href="{{route('liste_des_demandes_a_traiter')}}">Demande de projet à traiter :
              {{DB::table('demande_projet')->where('etat2', 0)->get()->count()}}</a></h3>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="icon-box">
          <i class="ri-store-line" style="color: #ffbb2c;"></i>
          <h3><a href="{{route('liste_des_demandes_en_cours')}}">Demande en cours de traitement :
              {{DB::table('demande_projet')->where('etat2', 1)->get()->count()}}</a></h3>
        </div>
      </div>
    </div>
    <br />
    <div class="row">
      <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-checked" style="color: green;"></i>
          <h3><a href="{{route('liste_des_demandes_validees')}}">Demandes traitée(s) & cloturée(s) :
              {{DB::table('demande_projet')->where('etat2', 3)->get()->count()}}</a></h3>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-close-squared-alt" style="color: red;"></i>
          <h3><a href="{{route('liste_des_demandes_fermees')}}">Demandes fermées :
              {{DB::table('demande_projet')->where('etat2', 2)->get()->count()}}</a></h3>
        </div>
      </div>
    </div>
    <br />
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="icon-box">
          <i class="icofont-hand-right" style="color:green"></i>
          <h3 style="color:green">Commissions & Chiffre d'affaires</h3>
        </div>
      </div>
    </div>
    <br />
    <div class="row">
      <div class="col-lg-6 col-md-12 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-money-bag" style="color: #e361ff;"></i>
          <h3><a href="">Commission sur chiffres d'affaire :
              @php
              $cd = \Illuminate\Support\Facades\DB::table('achat')->get()->sum('montant');
              $cd = $cd*0.05;
              $cd = number_format($cd, 0, ' ', ' ');
              echo $cd."&nbsp;FCFA";
              @endphp
            </a></h3>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-money-bag" style="color: #47aeff;"></i>
          <h3><a href="">Chiffre d’affaire réalisé avec les clients :
              @php
              $cd = \Illuminate\Support\Facades\DB::table('achat')->get()->sum('montant');
              $cd = number_format($cd, 0, ' ', ' ');
              echo $cd."&nbsp;FCFA";
              @endphp
            </a></h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 mt-12">
        <br>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-pie-chart" style="color: #ffa76e;"></i>
          <h3><a href="">Nombre total d'achat des clients :
              @php
              $cd = \Illuminate\Support\Facades\DB::table('achat')->count();
              echo $cd;
              @endphp
            </a>&nbsp; <a href="{{route('liste_des_achats')}}" style="color:red;font-weight:200;"> Voir la liste >>></a>
          </h3>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-coins" style="color: #11dbcf;"></i>
          <h3><a href="">Commission sur les achats :
              @php
              $cd = \Illuminate\Support\Facades\DB::table('commission')->get()->sum('montant');
              $cd = number_format($cd, 0, ' ', ' ');
              echo $cd."&nbsp;FCFA";
              @endphp
            </a></h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-4 mt-4">
        <div class="icon-box">
          <i class="icofont-chart-histogram" style="color: #4233ff;"></i>
          <h3><a href="">Bonus parrainage obtenu par les clients:
              @php
              $cd = \Illuminate\Support\Facades\DB::table('bonus_parrainage')->get()->sum('montant');
              echo $cd."&nbsp;FCFA";
              @endphp
            </a></h3>
        </div>
      </div>
      <div class="col-lg-6 col-md-4 mt-4">
        <div class="icon-box">
          <i class="icofont-chart-histogram" style="color: #b2904f;"></i>
          <h3><a href="">Bonus fin d’année : </a></h3>
        </div>
      </div>
      <!--<div class="col-lg-12 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-disc-line" style="color: #b20969;"></i>
              <h3 align="center"><a href="">Voir le classement des meilleurs clients</a></h3>
            </div>
          </div>
		  -->
    </div>

  </div>

  </div>
</section><!-- End Features Section -->
@endsection