@extends('layout3')
@section('title', 'Succès inscription')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
   <!-- End Breadcrumbs --><br/><br/><br/><br/>
    <section id="contact" class="contact">
      <div class="container">

        <div class="row mt-10 justify-content-center" data-aos="fade-up">
          <div class="section-header text-center" style="padding-top: 50px">
		  @if (session('status'))
                        <div class="alert alert-success" style="font-size: 15px; background-color: #328039; color: white">
                            <i class="ti-check"></i> {{ session('status') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" style="font-size: 15px; background-color: #fb5757; color: white">
                            <i class="ti-na"></i> {{ session('error') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger" style="font-size: 15px; background-color: #fb5757; color: white" >
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> <i class="ti-na"></i> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
         
        </div>
		
		<div class="col-md-10" style="padding:20px;background-color:#dbdbdb;width:100%;height:400px;border:5px;">
		<br/><br/><br/><br/><br/><br/>
		<center><i class="fa fa-download"></i><a target="_blank" href="{{route('fiche-d-inscription-partenaire')}}" style="text-align:center;margin-top:50px;"> TÉLÉCHARGER UNE COPIE DE VOTRE FORMULAIRE</a></center>
        </div>
		</div>
      </div>
    </section><!-- End Contact Section -->
@endsection
