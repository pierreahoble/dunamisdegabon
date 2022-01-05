@extends('layout2')
@section('title', 'Ajouter image produit')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbss">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><i class="icofont-file-jpg" style="font-size:25px;"></i> Ajouter image produit</h2>
          <ol>
			  @auth
				  
			  <li>
			  @if (Auth::user()->roles == "Admin") 
			  <a href="{{route('tableau_de_bord')}}"><i class="icofont-bank-alt" style="font-size:25px;"></i> Tableau de bord</a>
				  @elseif (Auth::user()->roles == "Client") 
					  <a href="{{route('tableaudebord')}}"><i class="icofont-bank-alt" style="font-size:25px;"></i> Tableau de bord</a>
				  @elseif (Auth::user()->roles == "Consultant") 
					  <a href="{{route('tableaudebordconsultant')}}"><i class="icofont-bank-alt" style="font-size:25px;"></i>Tableau de bord</a>
				  @else
					  <a href="{{route('tb_de_bord')}}"><i class="icofont-bank-alt" style="font-size:25px;"></i> Tableau de bord</a>
				  @endif
			  </li>
			  <li> Ajouter image produit</li>
			  @endauth
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row mt-12" data-aos="fade-up">
          <div class="col-lg-12">
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
		    <form method="post" action="{{route('ajoutcatalogue')}}" role="form" class="php-email-form" enctype="multipart/form-data">
            {{csrf_field()}}
			<br/>
			<div class="form-row">
				<div class="col-md-5 form-group">
				<label class="label-control">Importer votre photo passeport<font color="red">*</font></label>
                  <input type="file" name="photo" class="file-upload-default" required accept=".png,.jpg,.jpeg">
                </div>
                </div>
              <div class="form-row">
				<div class="col-md-12 form-group">
				<button type="submit" class="btn btn-primary">
						<i class="icofont-tick-mark"></i> Enregistrer
				</button>
				</div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
@endsection
