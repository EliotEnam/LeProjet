@extends('layouts.app')

@section('titre','details | index')

@section('contenu')

@if (isset($jeu))



  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>{{$jeu->titre}}</h3>
          <span class="breadcrumb"><a href="/accueil">Maison</a>  >  <a href="/jeux">Jeux</a>> {{$jeu->titre}}</span>
        </div>
      </div>
    </div>
  </div>




  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
         
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('assets/imgJeux/'. $jeu->cover)}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('assets/imgJeux/'. $jeu->media->im2)}}" class="d-block w-100" alt="{{$jeu->titre}}">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('assets/imgJeux/'. $jeu->media->im3)}}" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <h4>{{$jeu->titre}}({{$jeu->annee}})</h4>
         
          <span class="price">Classé numéro <span id="span">
            @foreach($classement as $compte => $class) 
            @if($class->id == $jeu->id) {{ $compte + 1 }} @break @endif @endforeach</span>  avec la note de <span id="span">{{$jeu->note}}</span>/5</span>
          <p>{{$jeu->description}}</p>
          @auth
          <form id="qty" action="#">
            <button type="submit"><i class="fa fa-download"></i> Telecharger</button>
          </form>
          @endauth
          @if(Auth::check() && in_array(Auth::user()->statut, ['professeur']))
          <form method="POST" action="{{route('jeux.destroy',[$jeu->id])}}">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Supprimer
            </button>
            
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation de suppression</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Voulez-vous vraiment supprimer le jeu {{$jeu->titre}} ?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Annuler</button>
                    <button type="submit" class="btn btn-danger"> Supprimer</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          @endif
          <ul>
            <li>
              <span>Créateur(s):</span>
              @foreach($jeu->equipe->usagers as $index => $usager)
                  {{ $usager->nom }}({{$usager->groupe->nomCours}})@if(!$loop->last), @endif
             
              @endforeach
          </li>
          
            <li><span>Categorie:</span> {{$jeu->categorie->nom}}</li>
            <li><span>Multi-tags:</span>{{$jeu->tags}}</li>
            <li><span>Platforms:</span>{{$jeu->platforms}}</li>
            <li>
              <span>Nbr de telech..:</span>{{$jeu->nbTelech}}
            
          </li>
          <li><span>Professeur:</span>
            @foreach($jeu->equipe->usagers as $index => $usager)
            @if($usager->statut == 'professeur')
            {{$usager->nom}} {{$usager->prenom}}
            @endif
            @endforeach
          </li>
          
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="sep"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="more-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Revues ({{count($jeu->revues)}})</button>
                  </li>
                </ul>
              </div>            
       
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                  <p>{{$jeu->description}}</p>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab"> 
                  @auth
                  <form class="col-5 m-3" action="{{ route('jeux.revues') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <textarea class="form-control" placeholder="Entrez votre commentaire" name="avis" required>{{ old('avis') }}</textarea>
                        @foreach ($errors->get('avis') as $error)
                            <div class="alert alert-danger mt-2">{{ $error }}</div>
                        @endforeach
                    </div>
                
                    <div class="mb-3">
                        <input type="number" class="form-control" name="note" placeholder="Votre note (/5)" min="0" max="5" required value="{{ old('note') }}">
                        @foreach ($errors->get('note') as $error)
                            <div class="alert alert-danger mt-2">{{ $error }}</div>
                        @endforeach
                    </div>
      
                    <input type="hidden" name="jeu_id" value="{{ $jeu->id }}">
                
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
                @endauth
                <div class="reviews-section mt-5">
                  @if(count($jeu->revues) > 0)
                  @foreach($jeu->revues as $revue)
                      <div class="review-item mb-4">
                          <div class="row align-items-center">
                              <div class="col-auto">
                                  <img src="{{ asset('assets/images/user.png') }}" alt="user" class="img-fluid rounded-circle" style="width: 50px; height: 50px;">
                              </div>
                              <div class="col">
                                  <div class="review-content">
                                      <div class="d-flex justify-content-between align-items-center">
                                          <span class="review-note badge bg-danger text-white">Note : {{$revue->note}}</span>
                                          <small class="text-muted">{{ $revue->created_at->format('d/m/Y') }}</small>
                                      </div>
                                      <p class="mt-2 mb-0 text-secondary">{{$revue->avis}}</p>
                                  </div>
                              </div>
                          </div>
                          <hr class="mt-3">
                      </div>
                  @endforeach
                  @endif
              </div>
              

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="section categories related-games">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Action</h6>
            <h2>Jeux similaires</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.html">View All</a>
          </div>
        </div>
        @foreach($jeu->categorie->jeux as $lejeu)
          @if($lejeu->titre != $jeu->titre)
            <div class="col-lg-2 col-md-6 col-sm-6">
              <div class="item">
                <div class="thumb">
                  <a href="{{route('jeux.show',[$lejeu])}}"><img src="{{ asset('assets/imgJeux/'. $lejeu->cover)}}" alt="" height="120"></a>
                </div>
                <div class="down-content">
                    <span class="category">{{$lejeu->type}}</span>
                    <h4>{{$lejeu->titre}}</h4>
                    <a href="{{route('jeux.show',[$lejeu])}}">Explorer</a>
                </div>
              </div>
            </div>

            
          @endif
        @endforeach

      </div>
    </div>
  </div>
  <style>
   #span{
      color: #e91506
    }
  </style>
  @else 
  <p>FAULEIN</p>
  @endif

@endsection