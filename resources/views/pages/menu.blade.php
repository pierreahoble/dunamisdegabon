<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto"><a href="{{url('/')}}"><img src="{{asset('assets/img/logo.jpg')}}"
                    class="img-fluid" /></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{url('/')}}">Accueil</a></li>
                <li><a href="{{url('/apropos')}}">A propos</a></li>
                <li class="drop-down"><a href="">Principales activités</a>
                    <ul>
                        <li><a href="{{route('bureau-d-etude')}}">Bureau d’études </a></li>
                        <li><a href="{{url('/incubateur-d-entreprise')}}">Incubateur d’entreprises </a></li>
                        <li><a href="{{route('e-dunamis')}}">Dunamis Club</a></li>
                        <li><a href="{{route('plateforme-affaire')}}">Plateforme E-dunamis</a></li>
                    </ul>
                </li>
                <li><a href="{{route('projet-de-banque')}}">Banque de projets</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li><a href="{{ url('rechercher') }}" class="twitter"><i class="icofont-search-2"></i> </a></li>
                @auth
                @if (Auth::user()->roles == "Admin")
                @include('pages.menu_admin')
                @elseif ((Auth::user()->roles == "Entreprise"))
                @include('pages.menu_operateur')
                @elseif ((Auth::user()->roles == "Client"))
                @include('pages.menu_client')
                @endif
                @endauth
            </ul>


        </nav><!-- .nav-menu -->


        @if (!Auth::check())
        <div class="header-social-links">
            <a href="{{route('login')}}" class="twitter"><i class="icofont-user"></i> Connexion</a>
            <a href="{{url('/inscription')}}" class="twitter"><i class="icofont-login"></i> S'inscrire</a>
        </div>
        @endif

    </div>
</header><!-- End Header -->