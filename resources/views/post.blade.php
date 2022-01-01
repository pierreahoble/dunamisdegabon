@extends('layout3')
@section('title', 'Post')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>{{$post->titre}}</h2>
          <ol>
            <li><a href="{{url('/')}}">Accueil</a></li>
            <li><a href="{{route('boutique')}}">Retour</a></li>
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

              <div class="entry-img">
                <img src="{{asset("public/storage/".$post->images)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{$post->titre}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="">Publié par {{DB::table('users')->where('id',$post->users_id)->first()->name}}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=""><time datetime="2020-01-01">Publié le {{$post->date2}}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p style="line-height:2;">
                  {{$post->contenu}}
                </p>
              </div>

              <div class="entry-footer clearfix">
                <div class="float-left">
                </div>

                <div class="float-right share">
                  <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                  <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                  <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                </div>

              </div>
			  </div>

          <div class="col-lg-4">

            <div class="sidebar" data-aos="fade-left">
              <h3 class="sidebar-title">Opérateurs récents</h3>
              <div class="sidebar-item recent-posts">
				@foreach($pub2 as $pub3)
                <div class="post-item clearfix">
                  <img src="{{asset("public/storage/".$pub3->images)}}" alt="" class="img-fluid">
                  <h4><a href="{{route('post', ['id'=>$pub3->id])}}">{{$pub3->titre}}</a></h4>
                  <time datetime="2020-01-01">{{$pub3->date2}}</time>
                </div>
				@endforeach

              </div><!-- End sidebar recent posts-->

              <!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->
@endsection
