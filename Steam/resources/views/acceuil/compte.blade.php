@extends('layouts.app')

@section('titre','accueil | index')

@section('contenu')

<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>{{$usager->nom}} {{$usager->prenom}}</h3>
          <span class="breadcrumb"><a href="#">Maison</a> > Profil</span>
        </div>
      </div>
    </div>
  </div>
  <section class="w-100 px-4 py-5" style="border-radius: .5rem .5rem 0 0;">
    <div class="row d-flex justify-content-center">
      <div class="col col-md-9 col-lg-7 col-xl-6">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex">
              <div class="flex-shrink-0">
                <img src="{{ asset('assets/images/user.png')}}"
                  alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-1">{{$usager->nom}} {{$usager->prenom}}</h5>
                <p class="mb-2 pb-1">{{$usager->statut}}</p>
                <div class="d-flex justify-content-start rounded-3 p-2 mb-2 bg-body-tertiary">
                  <div>
                    <p class="small text-muted mb-1 text-center">Groupe</p>
                    <p class="mb-0 text-center">{{$usager->groupe->nomCours}}</p>
                  </div>
                  <div class="px-3">
                    <p class="small text-muted mb-1 text-center">Adresse</p>
                    <p class="mb-0 text-center">{{$usager->courriel}}</p>
                  </div>
                  <div>
                    <p class="small text-muted mb-1">Matricule</p>
                    <p class="mb-0 text-center">{{$usager->matricule}}</p>
                  </div>
                </div>
                <div class="d-flex pt-1">
                  <a href="{{route('usagers.edit',[$usager])}}" class="mr-5"><button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary me-1 flex-grow-1">Modifier</button></a>
                  <form method="POST" action="{{route('usagers.destroy',[$usager->id])}}">
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
                            Voulez-vous vraiment supprimer votre compte ?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Annuler</button>
                            <button type="submit" class="btn btn-danger"> Supprimer</button>    
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<style>
    h1{
        color: black
    }
</style>
@endsection