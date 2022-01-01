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
	  <h3 align="left" style="color:blue;"></h3><br/>
	        <div class="row">
			@foreach($pub as $pubs)
			<div class="col-lg-6">
            <article class="entry" data-aos="fade-up">

              <div class="entry-img">
			  <img src="{{asset("public/storage/".$pubs->images)}}" alt="" class="img-fluid"/>
               <!-- <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">-->
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{$pubs->titre}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="">{{DB::table('users')->where('id',$pubs->users_id)->first()->name}}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=""><time datetime="2020-01-01">{{$pubs->date2}}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  
                </p>
                <div class="read-more">
                  <a href="{{route('post', ['id'=>$pubs->id])}}" style="text-align:center">En savoir plus</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            </div>
			@endforeach
            </div>
            <div class="blog-pagination">
              {{ $pub->links() }}
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
	 <p align="center"><button class="btn btn-warning"><a href="{{route('inscription-operateur')}}" style="color:#fff;">Voulez-vous rejoindre la plateforme des commerçants? Inscrivez-vous!</a></button></p>
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>
		<br/>
	
      </div>
    </section><!-- End Blog Section -->
@endsection
