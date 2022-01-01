@extends('layout3')
@section('title', 'Nos consultants')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Nos consultants</h2>
          <ol>
            <li><a href="{{url('/choix-profil')}}">Accueil</a></li>
            <li>Nos consultants</li>
          </ol>
        </div>

      </div>
    </section>
	<!-- ======= About Us Section ======= -->
    
     <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Nos <strong>consultants</strong></h2>
          <p>Liste complète de tous nos consultants</p>
        </div>

        <div class="row">
		@foreach($consultant as $consultants)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="{{asset("storage/".$consultants->fichier)}}" class="img-fluid" alt="">
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
		<div class="blog-pagination">
              {{ $consultant->links() }}
            </div>
        </div>

      </div>
    </section><!-- End Our Team Section -->
@endsection
