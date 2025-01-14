
<!DOCTYPE html>
<html lang="fr-ca">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>@yield('titre')</title>
    <!-- Bootstrap core CSS -->
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/templatemo-lugx-gaming.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.css')}}">
{{-- <link rel="stylesheet" href="{{ asset('assets/css/carrousel.css')}}"> --}}
<link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
<link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>



<!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky background-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a hrelf="/accueil" class="logo">
                        <img src="{{ asset('assets/images/logo.png')}}" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="/accueil" class="{{ \Illuminate\Support\Facades\Request::is('accueil') ? 'active' : '' }}">Accueil</a></li>
                      <li><a href="/jeux" class="{{ \Illuminate\Support\Facades\Request::is('jeux') ? 'active' : '' }}">Jeux</a></li>
                      <li><a href="/jeux/1" class="{{ \Illuminate\Support\Facades\Request::is('jeux/1') ? 'active' : '' }}">Détails Jeu</a></li>
                      @auth
                      @if(in_array(Auth::user()->statut, ['professeur', 'etudiantInfo']))
                          <li><a href="{{ route('jeux.create') }}" class="{{ \Illuminate\Support\Facades\Request::is('jeux/create') ? 'active' : '' }}">Ajouter</a></li>
                      @endif
                          @if(Auth::user()->statut == 'professeur')
                              <li><a href="/usagers" class="{{\Illuminate\Support\Facades\Request::is('usagers') ? 'active' : '' }}">Usagers</a></li>
                          @endif
                          @if(Auth::user()->statut == 'etudiantInfo')
                              <li><a href="/jeux/mesJeux" class="{{ \Illuminate\Support\Facades\Request::is('mesJeux') ? 'active' : '' }}">Mes jeux</a></li>
                              <li><a href="/usagers" class="{{ \Illuminate\Support\Facades\Request::is('usagers') ? 'active' : '' }}">Équipes</a></li>
                          @endif
                          <li><a href="/contact">Contactez-nous</a></li>
                          <li><a href="/compte">Compte</a></li>
                          <li>
                              <form method="POST" action="{{ route('logout') }}">
                                  @csrf
                                  <button type="submit" class="btn btn-danger">Déconnexion</button>
                              </form>
                          </li>
                      @else
                          <li>
                              <form method="POST" action="{{ route('login') }}">
                                  @csrf
                                  <button type="submit" class="btn btn-primary">Se connecter</button>
                              </form>
                          </li>
                      @endauth
                  </ul>
                   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->



@yield('contenu')

<footer>
  <div class="container">
    <div class="col-lg-12">
      <p>Copyright © 2048 LUGX Gaming Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
    </div>
  </div>
</footer>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/isotope.min.js')}}"></script>
<script src="{{ asset('assets/js/owl-carousel.js')}}"></script>
<script src="{{ asset('assets/js/counter.js')}}"></script>
<script src="{{ asset('assets/js/custom.js')}}"></script>
{{-- <script src="{{ asset('assets/js/carrousel.js')}}"></script> --}}
</body>
</html>
