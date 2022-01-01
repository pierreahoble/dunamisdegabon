@extends('layout2')
@section('title','Liste des achats ')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css" integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbss">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Liste des achats</h2>
            <ol>
                <li>
                    @if (Auth::user()->roles == "Admin")
                    <a href="{{route('tableau_de_bord')}}">Tableau de bord</a>
                    @elseif (Auth::user()->roles == "Client")
                    <a href="{{route('tableaudebord')}}">Tableau de bord</a>
                    @else
                    <a href="{{route('tb_de_bord')}}">Tableau de bord</a>
                    @endif
                </li>
                <li>Liste des achats</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->
<section id="features" class="features">
    <div class="container" data-aos="fade-up">

        <div class="row">
            @if (session('status'))
            <div class="alert alert-warning" style="font-size: 15px; background-color: #328039; color: white">
                <i class="fa fa-warning"></i> {{ session('status') }}
            </div>
            @endif

            @if (session('error'))
            <div class="alert alert-danger" style="font-size: 15px; background-color: #fb5757; color: white">
                <i class="ti-na"></i> {{ session('error') }}
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger" style="font-size: 15px; background-color: #fb5757; color: white">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li> <i class="ti-na"></i> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="col-lg-12 card">
                <br>
                <p align="center">
                    Liste des achats
                </p>
                <br>
                <div class="table-responsive table-hover container">
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th width="220px">N°</th>
                                <th width="220px">Article acheté</th>
                                <th width="300px">Montant</th>
                                <th width="300px">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($achat as $achats)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$achats->article_achete}}</td>
                                <td>{{$achats->montant}}</td>
                                <td>{{$achats->date_achat2}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


@push('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap.min.js" integrity="sha512-F0E+jKGaUC90odiinxkfeS3zm9uUT1/lpusNtgXboaMdA3QFMUez0pBmAeXGXtGxoGZg3bLmrkSkbK1quua4/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.dataTables.min.js" integrity="sha512-fQmyZE5e3plaa6ADOXBM17WshoZzDIvo7sR4GC1VsmSKqm13Ed8cO2kPwFPAOoeF0RcdhuQQlPq46X/HnPmllg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js" integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script>
$(document).ready( function () {
$('#myTable').DataTable({
    language: {
    url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/French.json'
}
});
} );
</script>
@endpush


@endsection