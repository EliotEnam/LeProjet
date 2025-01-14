@extends('layouts.app')

@section('titre','accueil | index')

@section('contenu')

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->



  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h6>Welcome to lugx</h6>
            <h2>BEST GAMING SITE EVER!</h2>
            <p>LUGX Gaming is free Bootstrap 5 HTML CSS website template for your gaming websites. You can download and use this layout for commercial purposes. Please tell your friends about TemplateMo.</p>
            <div class="search-input">
              <form id="search" action="#">
                <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                <button role="button">Search Now</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="right-image">
           
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-01.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Free Storage</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-02.png" alt="" style="max-width: 44px;">
              </div>
              <h4>User More</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-03.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Reply Ready</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-04.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Easy Layout</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>En tendance</h6>
            <h2>Les mieux notés</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="jeux">View All</a>
          </div>
        </div>
        @if(count($mieuNotes))
                @foreach($mieuNotes as $mieuNote)
                <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adv">
                  <div class="item">
                    <div class="thumb">
                      <a href="{{route('jeux.show',[$mieuNote])}}"><img src="{{ asset('assets/imgJeux/'. $mieuNote->cover)}}" alt="" width="250px" height="220px"></a>
                    
                    </div>
                    <div class="down-content">
                      <span class="category">{{$mieuNote->categorie->nom}}</span>
                      <h4>{{$mieuNote->titre}}</h4>
                      <a href="{{route('jeux.show',[$mieuNote])}}"><i class="fa-solid fa-magnifying-glass"></i></a>
                      <ul>
                        <li><i class="fa fa-star"></i> {{$mieuNote->note}}</li>
                        <li><i class="fa fa-download"></i> {{$mieuNote->nbTelech}}</li>
                      </ul>
                    </div>
                  </div>
                </div>
        @endforeach
              @else
      @endif 
      </div>
    </div>
  </div>

  <div class="section most-played">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Découvrez</h6>
            <h2>Récemment ajoutés</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="jeux">View All</a>
          </div>
        </div>

        @if(count($recents))
                @foreach($recents as $rec)
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="{{route('jeux.show',[$rec])}}"><img src="{{ asset('assets/imgJeux/'. $rec->cover)}}" alt="" height="120"></a>
            </div>
            <div class="down-content">
                <span class="category">{{$rec->categorie->nom}}</span>
                <h4>{{$rec->titre}}</h4>
                <a href="{{route('jeux.show',[$rec])}}">Explorer</a>
            </div>
          </div>
        </div>
        @endforeach
              @else
      @endif 
      </div>
    </div>
  </div>

  <div class="section categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Ces jeux sont appréciés</h6>
            <h2>Les plus téléchargés</h2>
          </div>
        </div>
        @if(count($tableau[0]))
                @foreach($tableau[0] as $jeux)
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>{{$jeux->titre}}</h4>
            <div class="thumb">
              <a href="{{route('jeux.show',[$jeux])}}"><img src="{{ asset('assets/imgJeux/'. $jeux->cover)}}" alt="" height="130"></a>

            </div>
          </div>
        </div>
        @endforeach
        @else
@endif 
      </div>
    </div>
  </div>

  
  <div class="section trending">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Temblez</h6>
            <h2>Jeux d'horreur</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="jeux">View All</a>
          </div>
        </div>
        @if(count($trending))
                @foreach($trending as $jeu)
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="{{route('jeux.show',[$jeu])}}"><img src="{{ asset('assets/imgJeux/'. $jeu->cover)}}" alt="" height="220"></a>
            </div>
            <div class="down-content">
              <h4>{{$jeu->titre}}</h4>
              <a href="{{route('jeux.show',[$jeu])}}"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        @endforeach
              @else
      @endif 
      </div>
    </div>
  </div>

  <div class="section most-played">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Favoris</h6>
            <h2>Catégories les plus aimées</h2>
          </div>
        </div>
              @if(count($tableau[1]))
              @foreach($tableau[1] as $cat)
            <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="item">
            <div class="thumb">
            <a href="/jeux"><img src="{{$cat->image}}" alt="" height="120"></a>
            </div>
            <div class="down-content">
              <h4>{{$cat->nom}}</h4>
              <a href="/jeux">Explorer</a>
            </div>
            </div>
            </div>
            @endforeach
            @else
            @endif 
          </div>
        </div>
      </div>
              
  <div class="section cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="shop">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Our Shop</h6>
                  <h2>Go Pre-Order Buy & Get Best <em>Prices</em> For You!</h2>
                </div>
                <p>Lorem ipsum dolor consectetur adipiscing, sed do eiusmod tempor incididunt.</p>
                <div class="main-button">
                  <a href="shop.html">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-2 align-self-end">
          <div class="subscribe">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>NEWSLETTER</h6>
                  <h2>Get Up To $100 Off Just Buy <em>Subscribe</em> Newsletter!</h2>
                </div>
                <div class="search-input">
                  <form id="subscribe" action="#">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email...">
                    <button type="submit">Subscribe Now</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  


  <style>
    .fa-star{
      color: #94370B
    }
    .fa-download{
      color: #113192
    }

  </style>

@endsection