@extends('layout3')
@section('title', 'Opérateurs de la Plateforme E-dunamis')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Opérateurs de la Plateforme E-dunamis</h2>
      <ol>
        <li><a href="{{url('/')}}">Accueil</a></li>
        <li>Opérateurs de la Plateforme E-dunamis</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog" style="background-color:#fff;">
  <div class="container">

    <div class="row">
      <div class="col-lg-8 entries">
        <h3 align="left" style="color:blue;"></h3><br />
        <div class="row">
          @foreach($operateur as $operateurs)
          <div class="col-lg-4">
            <article class="entry" data-aos="fade-up">

              <div class="entry-img">
                <img src="{{asset("storage/".$operateurs->fichier)}}" alt="" class="img-fluid"/>
                <!-- <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">-->
              </div>

              <h2 class="entry-title" style="text-align:center">
                <a href="{{route('operateur-info', ['id'=>$operateurs->id])}}"
                  style="text-align:center;font-size:13px;">Entreprise: {{$operateurs->raison_sociale}}</a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-businessman"></i> <a href="">
                      {{$operateurs->domaine}}</li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> Inscrit le :<a href=""><time
                        datetime="2020-01-01">{{$operateurs->dateins}}</time></a></li>
                </ul>
              </div>
              <div class="entry-content">
                <p style="text-align:center;font-size:13px;width:100%;">
                  <a href="{{route('operateur-info', ['id'=>$operateurs->id])}}"
                    style="text-align:center;font-size:12px;">
                    <center>En savoir plus</center>
                  </a>
                </p>
              </div>

            </article><!-- End blog entry -->
          </div>
          @endforeach
        </div>
        <div class="blog-pagination">
          {{ $operateur->links() }}
        </div>

      </div><!-- End blog entries list -->

      <div class="col-lg-4">

        <div class="sidebar" data-aos="fade-left">
          <h3 class="sidebar-title">Anciennement ajoutés</h3>
          <div class="sidebar-item recent-posts">
            @foreach($operateur2 as $operateur2)
            <div class="post-item clearfix">
              <img src="{{asset("public/storage/".$operateur2->fichier)}}" alt="">
              <h4><a href="#">{{$operateur2->raison_sociale}}</a>
                <br /><span>{{$operateur2->domaine}}</span>
                <br /><span>{{$operateur2->dateins}}</span>
              </h4>
            </div>
            @endforeach

          </div><!-- End sidebar recent posts-->

          <!-- End sidebar tags-->
          <br />
          <p align="center"><button class="btn btn-info"><a href="{{route('inscription-operateur')}}"
                style="color:#fff;"><i class="icofont-handshake-deal"></i> Rejoindre la plateforme affaire</a></button>
          </p>
        </div><!-- End sidebar -->

      </div><!-- End blog sidebar -->

    </div>
    <br />

  </div>
</section><!-- End Blog Section -->
@endsection