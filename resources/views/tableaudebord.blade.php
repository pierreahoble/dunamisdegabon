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
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="icon-box">
          <i class="ri-store-line" style="color: #ffbb2c;"></i>
          <h3><a href="">Nom : {{DB::table('compte')->where('users_id',Auth::user()->id)->first()->nom}}
              {{DB::table('compte')->where('users_id',Auth::user()->id)->first()->prenoms}}</a></h3>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
          <h3><a href="">Mon statut : {{DB::table('users')->where('id',Auth::user()->id)->first()->roles}}</a></h3>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
          <h3><a href="">
              Code d'invitation :
              @php
              $code1 = DB::table('users')->where('id',Auth::user()->id)->first()->code_dinvitation;
              echo $code1;
              @endphp
            </a></h3>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <br>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
          <h3><a href="">Total de tous mes achats :
              {{DB::table('achat')->where('code_client',Auth::user()->code_dinvitation)->get()->sum('montant')}}
              F</a>&nbsp; <a href="{{route('liste_des_achats')}}" style="color:red;font-weight:200;"> Voir la liste
              >>></a></h3>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
          <h3><a href="">Commission sur les achats :
              {{DB::table('commision_client')->where('code_client',Auth::user()->code_dinvitation)->get()->sum('montant')}}
              F</a></h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
          <h3><a href=""> Bonus de parrainage :
              @php
              $d =
              \Illuminate\Support\Facades\DB::table('bonus_parrainage')->where('parrain_id',Auth::user()->id)->get()->sum('montant');
              $d = number_format($d, 0, ' ', ' ');
              echo $d."&nbsp;FCFA";
              @endphp</a></h3>
        </div>
      </div>
      <div class="col-lg-6 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-anchor-line" style="color: #b2904f;"></i>
          <h3><a href="">Bonus de fin d’année : </a></h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
          <h3><a href="">Total amis parrainés :
              {{DB::table('parrainage')->where('parrain_id',Auth::user()->id)->count()}}</a></h3>
        </div>
      </div>
    </div>
    
    <div class="row" >
      <div class="col-lg-12 col-md-4 mt-4">
        <div class="icon-box">
          <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
          <h3>Lien d'invitation :
            @php
            $code = route('inviter',['users_id'=>Str::limit(Crypt::encrypt(Auth::user()->id),10),'code_dinvitation'=>Auth::user()->code_dinvitation]);
            echo "<span id='tocopy'>Bonjour je vous invite à vous inscrire sur la plateforme dunamisdegabon; En devenant
              client DUNAMIS CLUB, nous vous donnons la possibilité,
              de disposer des revenus supplémentaires par vos simples achats. DUNAMIS DEVELOPPEMENT et les entreprises
              nationales se sont engagés dans une convention
              de partenariat pour amorcer ensemble un développement durable.
              - Des remises exceptionnelles sur vos achats dans le réseau DUNAMIS CLUB;
              - Un avantage intéressant pour bénéficier des meilleures conditions tarifaires pour vos achats dans les
              boutiques, supermarchés, acquisitions de matériels, vos séminaires, formations ou événements clients,
              location d’hôtels, frais de formation …;
              - Accès à une plateforme d'achats vous permettant d'obtenir des réductions sur des services B to B
              (réservations d'hôtels, de voitures, etc...);
              - Cet avantage est particulièrement destiné aux clients de DUNAMIS CLUB;
              - Tous les jours, 3% du montant de vos achats de biens et services auprès des entreprises du réseau sont
              crédités sur votre compte sans limitation;
              - Gagner des prix en fin d’année afin de réaliser vos rêves;
              voici mon lien d'invitation :".$code."</span>";
            echo "<input type='button' value='Copier' class='js-copy btn btn-primary' data-target='#tocopy'>";
            $description="Bonjour je vous invite à vous inscrire sur la plateforme dunamisdegabon; En devenant client
            DUNAMIS CLUB, nous vous donnons la possibilité,
            de disposer des revenus supplémentaires par vos simples achats. DUNAMIS DEVELOPPEMENT et les entreprises
            nationales se sont engagés dans une convention
            de partenariat pour amorcer ensemble un développement durable. voici mon lien d'invitation :".$code;
            @endphp


        </div>
      </div>
    </div>
  </div>
  <img src="{{asset('assets/img/logo.jpg')}}" class="img-fluid whatsImg" hidden>
  <input id="moncode" value="{{$code}}" hidden>
  </div>
</section>

<div class="share-btn-container">
  <a href="#" class="facebook-btn">
    <i class="fab fa-facebook"></i>
  </a>

  <a href="#" class="twitter-btn">
    <i class="fab fa-twitter"></i>
  </a>

  <a href="#" class="pinterest-btn">
    <i class="fab fa-pinterest"></i>
  </a>

  <a href="#" class="linkedin-btn">
    <i class="fab fa-linkedin"></i>
  </a>

  <a href="#" class="whatsapp-btn">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>

@push('scripts')
<script>
  var popupSize = {
        width: 780,
        height: 550
    };

    $(document).on('click', '.social-buttons > a', function(e){

        var
            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

        var popup = window.open($(this).prop('href'), 'social',
            'width='+popupSize.width+',height='+popupSize.height+
            ',left='+verticalPos+',top='+horisontalPos+
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

        if (popup) {
            popup.focus();
            e.preventDefault();
        }

    });
</script>



<script>
  var btncopy = document.querySelector('.js-copy');
if(btncopy) {
    btncopy.addEventListener('click', docopy);
}

function docopy() {
    var range = document.createRange();
    var target = this.dataset.target;
    var fromElement = document.querySelector(target);
    var selection = window.getSelection();

    range.selectNode(fromElement);
    selection.removeAllRanges();
    selection.addRange(range);

    try {
        var result = document.execCommand('copy');
        if (result) {
            // La copie a réussi
            alert('Copié !');
        }
    }
    catch(err) {
        // Une erreur est surevnue lors de la tentative de copie
        alert(err);
    }

    selection = window.getSelection();

    if (typeof selection.removeRange === 'function') {
        selection.removeRange(range);
    } else if (typeof selection.removeAllRanges === 'function') {
        selection.removeAllRanges();
    }
}
</script>
@endpush

@endsection