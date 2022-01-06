@extends('layout3')
@section('title', 'Opérateur info')

@section('style')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel="stylesheet" href="{{ asset('slide/style.css') }}">
@endsection

@section('content')
<!-- ======= Breadcrumbs ======= -->
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>{{$operateur->raison_sociale}}</h2>
      <ol>
        <li><a href="{{url('/')}}">Accueil</a></li>
        <li><a href="{{route('plateforme-affaire')}}">Retour</a></li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->


<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container">

    <div class="row">

      <div class="col-lg-8 entries">

        <article class="entry entry-single" data-aos="fade-up">

          <div class="card">
            <img class="card-img-top" src="{{asset("storage/".$operateur->fichier)}}" alt="Card image cap"
            style="width:30;" >
            <div class="card-body">
              <h5 class="card-title"> <i class="icofont-ui-home"></i> Nom de l'entreprise :
                {{$operateur->raison_sociale}}</h5>
              <p class="card-text"> <i class="icofont-location-pin"></i> <b>Adresse : </b>{{$operateur->adresse}} </p>
              <p><i class="icofont-ui-cell-phone"></i> <b>Téléphone :</b> {{$operateur->telephone}}</p>
              <p> <i class="icofont-wall-clock"></i> <time datetime="2020-01-01"><b>Inscrit le : </b>
                  {{$operateur->dateins}}</time></p>
              <p>
                <b><i class="icofont-briefcase-2"></i> Nos services/produits/prestations :
                </b><br />{{$operateur->description}}
              </p>
            </div>
          </div>

          {{-- <div class="entry-img">
            <img src="{{asset("storage/".$operateur->fichier)}}" alt="" class="img-fluid"
            style="height:400px;width:600px;">
          </div> --}}

          {{-- <h2 class="entry-title">
            <a href="#"><i class="icofont-ui-home"></i> Nom de l'entreprise : {{$operateur->raison_sociale}}</a>
          </h2> --}}

          {{-- <div class="entry-meta">
            <ul>
              <li class="d-flex align-items-center"><i class="icofont-location-pin"></i> <a href=""><b>Adresse :</b>
                  {{$operateur->adresse}}</a></li><br />
              <li class="d-flex align-items-center"><i class="icofont-ui-cell-phone"></i> <a href=""><b>Téléphone :</b>
                  {{$operateur->telephone}}</a></li><br />
              <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=""><time
                    datetime="2020-01-01"><b>Inscrit le</b> {{$operateur->dateins}}</time></a></li>
            </ul>
          </div> --}}

          {{-- <div class="entry-content">
            <p style="line-height:2;">
              <b><i class="icofont-briefcase-2"></i> Nos services/produits/prestations :
              </b><br />{{$operateur->description}}
            </p>
          </div> --}}

          <div class="entry-footer clearfix">
            <div class="float-left">
            </div>

            <div class="float-right share">
              <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
              <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
              <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
            </div>

          </div>
          <br />


          <section id="portfolio" class="portfolio">




            <div class="container">
              <div class="section-title">
                <h2>Notre catalogue</h2>
                <p>Images de nos produits ou promotions.</p>
              </div>



              <div class="row portfolio-container">
                @foreach($catalogue as $catalogue)
                <div class="col-sm-4 portfolio-item">
                  <img src="{{asset("storage/".$catalogue->fichier)}}" alt="" class="img-fluid"
                  style="height:200px;width:200px;">
                  <div class="portfolio-info">
                    <center>
                      <a href="{{url("storage/".$catalogue->fichier)}}" data-gall="portfolioGallery" class="venobox
                        preview-link" title="Agrandir" style="text-align:center;"><i class="bx bx-plus"></i></a>
                    </center>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </section>

      </div>

      <div class="col-lg-4">

        <div class="sidebar" data-aos="fade-left">
          <h3 class="sidebar-title">Opérateurs récents</h3>
          <div class="sidebar-item recent-posts">
            @foreach($operateur2 as $operateur2)
            <div class="post-item clearfix">
              <img src="{{asset("storage/".$operateur2->fichier)}}" alt="" class="img-fluid">
              <h4><a href="{{route('operateur-info', ['id'=>$operateur2->id])}}">{{$operateur2->raison_sociale}}</a>
              </h4>
              <time datetime="2020-01-01">{{$operateur2->dateins}}</time>
            </div>
            @endforeach

          </div><!-- End sidebar recent posts-->

          <!-- End sidebar tags-->

        </div><!-- End sidebar -->

      </div><!-- End blog sidebar -->

    </div>

  </div>


</section>



@push('scripts')
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js'></script>

@endpush

@endsection