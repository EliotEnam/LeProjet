@extends('layouts.app')

@section('titre','accueil | index')

@section('contenu')

<div class="section trending py-5 bg-light">
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-body">
                <h1 class="text-center text-danger mb-4">Ajouter un usager</h1>
                <form method="POST" action="{{ route('usagers.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Matricule</label>
                        <input type="text" class="form-control" name="matricule" required value="{{ old('matricule') }}" placeholder="Entrez le matricule">
                        @foreach ($errors->get('matricule') as $error)
                            <div class="alert alert-danger mt-2">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>

                     
                    <div class="mb-3">
                        <label class="form-label fw-bold">Mot de passe</label>
                        <input type="text" class="form-control" name="password" required value="{{ old('password') }}" placeholder="Entrez le mot de passe">
                        @foreach ($errors->get('password') as $error)
                            <div class="alert alert-danger mt-2">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>

                
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nom</label>
                        <input type="text" class="form-control" name="nom" required value="{{ old('nom') }}" placeholder="Entrez un nom">
                        @foreach ($errors->get('nom') as $error)
                        <div class="alert alert-danger mt-2">
                            {{ $error }}
                        </div>
                    @endforeach
                    </div>

             
                    <div class="mb-3">
                        <label class="form-label fw-bold">Prénom</label>
                        <input type="text" class="form-control" name="prenom" required value="{{ old('prenom') }}" placeholder="Entrez un prénom">
                        @foreach ($errors->get('prenom') as $error)
                        <div class="alert alert-danger mt-2">
                            {{ $error }}
                        </div>
                    @endforeach
                    </div>
               
                    <div class="mb-3">
                        <label class="form-label fw-bold">Courriel</label>
                        <input type="text" class="form-control" name="courriel" required value="{{ old('courriel') }}" placeholder="Entrez une adresse courriel">
                        @foreach ($errors->get('courriel') as $error)
                        <div class="alert alert-danger mt-2">
                            {{ $error }}
                        </div>
                    @endforeach
                    </div>


                    <div class="mb-3">
                        <label class="form-label fw-bold">Statut de l'usager</label>
                        <select class="form-select" aria-label="Default select example" name="statut" aria-placeholder="select">
                            @if(Auth::check() && Auth::user()->statut == 'professeur')
                            <option  value="professeur">Professeur</option>
                            @endif
                            <option selected value="etudiant">Étudiant</option>
                            <option value="etudiantInfo">ÉtudiantInfo</option>
                          </select>
                        @foreach ($errors->get('statut') as $error)
                        <div class="alert alert-danger mt-2">
                            {{ $error }}
                        </div>
                    @endforeach
                    </div>
            
                    <input type="hidden" name="nbPubli" value="0">
                    <input type="hidden" name="equipe_id" value="1">

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-5 py-2">Ajouter l'usager</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    html,body{
        background-color: #0071f8;
    }

</style>
@endsection
