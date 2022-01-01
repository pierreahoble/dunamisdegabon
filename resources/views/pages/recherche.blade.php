@extends('layout3')


@section('title', 'Recherche')


@section('content')




<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>{{"Rechercher"}}</h2>
            <ol>
                <li><a href="{{url('/')}}">Accueil</a></li>
                <li><a href="{{route('plateforme-affaire')}}">Retour</a></li>
            </ol>
        </div>

    </div>
</section>



<div id="search">

   
</div>




@endsection


@push('scripts')
<script src="{{ asset('js/app.js') }}"></script>
@endpush