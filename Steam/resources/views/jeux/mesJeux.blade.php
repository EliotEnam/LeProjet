@extends('layouts.app')

@section('titre','mes jeux')

@section('contenu')


@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

@if(session('errors') && $errors->any())
<div class="alert alert-danger">
@foreach($errors->all() as $error)
<p>{{$error}}</p>
@endforeach
</div>
@endif

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Mes jeux</h3>
          <span class="breadcrumb"><a href="#">Maison</a> > Mes jeux</span>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <ul class="trending-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Adventure</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Strategy</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Racing</a>
        </li>
      </ul>
      <div class="row">
              @if(count($jeux))
                @foreach($jeux as $jeu)
              
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adv">
          <div class="item">
            <div class="thumb">
              <a href="{{route('jeux.show',[$jeu])}}"><img src="{{ asset('assets/imgJeux/'. $jeu->cover)}}" alt="" width="250px" height="220px"></a>
            
            </div>
            <div class="down-content">
              <span class="category">{{$jeu->categorie->nom}}</span>
              <h4>{{$jeu->titre}}</h4>
              @auth
                   <a href="{{route('jeux.edit',[$jeu])}}"><i class="fa-solid fa-pen-nib"></i></a>
              @endauth
             
              <ul>
                <li><i class="fa fa-star"></i> {{$jeu->note}}</li>
                <li><i class="fa fa-download"></i> {{$jeu->nbTelech}}</li>
                <form method="POST" action="{{route('jeux.destroy',[$jeu->id])}}">
                  @csrf
                  @method('DELETE')
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$jeu->id}}">
                    Supprimer
                  </button>
                  
                  <div class="modal fade" id="exampleModal{{$jeu->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              </ul>
            </div>
          </div>
        </div>
        @endforeach
              @else
      @endif 
      </div>
      </div>

     
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
          <li><a href="#"> &lt; </a></li>
            <li><a href="#">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"> &gt; </a></li>
          </ul>
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
  #delete{
    font-size: 20px
  }
</style>


@endsection