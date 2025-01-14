@extends('layouts.app')

@section('titre','accueil | index')

@section('contenu')

<div class="section trending py-5 bg-light">
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-body">
                <h1 class="text-center text-danger mb-4">Modifier {{$usager->nom}} {{$usager->prenom}}</h1>
              
                <form method="POST" action="{{ route('usagers.update',[$usager]) }}">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label class="form-label fw-bold">Matricule</label>
                        <input type="text" class="form-control" name="matricule" required value="{{ old('matricule', $usager->matricule) }}" placeholder="Entrez le matricule">
                        @foreach ($errors->get('matricule') as $error)
                            <div class="alert alert-danger mt-2">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            <input type="checkbox" id="cachePass" class="form-check-input"> Changer le mot de passe
                        </label>
                    </div>
           
                    <div id="pass" style="display: none;">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Mot de passe</label>
                            <input type="text" class="form-control" name="" value="{{ old('password') }}" placeholder="Entrez le mot de passe" id="lepass">
                            @foreach ($errors->get('matricule') as $error)
                                <div class="alert alert-danger mt-2">
                                    {{ $error }}
                                </div>
                            @endforeach
                        </div>
                    </div>  
                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nom</label>
                        <input type="text" class="form-control" name="nom" required value="{{ old('nom', $usager->nom) }}" placeholder="Entrez un nom">
                        @foreach ($errors->get('nom') as $error)
                        <div class="alert alert-danger mt-2">
                            {{ $error }}
                        </div>
                    @endforeach
                    </div>

             
                    <div class="mb-3">
                        <label class="form-label fw-bold">Prénom</label>
                        <input type="text" class="form-control" name="prenom" required value="{{old('prenom', $usager->prenom)}}" placeholder="Entrez un prénom">
                        @foreach ($errors->get('prenom') as $error)
                        <div class="alert alert-danger mt-2">
                            {{ $error }}
                        </div>
                    @endforeach
                    </div>
               
                    <div class="mb-3">
                        <label class="form-label fw-bold">Courriel</label>
                        <input type="text" class="form-control" name="courriel" required value="{{ old('courriel', $usager->courriel) }}" placeholder="Entrez une adresse courriel">
                        @foreach ($errors->get('courriel') as $error)
                        <div class="alert alert-danger mt-2">
                            {{ $error }}
                        </div>
                    @endforeach
                    </div>


                    <div class="mb-3">
                        <label class="form-label fw-bold">Statut de l'usager</label>
                        <select class="form-select" aria-label="Default select example" name="statut">
                            @if(Auth::check() && Auth::user()->statut == 'professeur')
                            <option value="professeur" {{ old('statut', $usager->statut ?? '') == 'professeur' ? 'selected' : '' }}>Professeur</option>
                            @endif
                            <option value="etudiant" {{ old('statut', $usager->statut ?? '') == 'etudiant' ? 'selected' : '' }}>Étudiant</option>
                            <option value="etudiantInfo" {{ old('statut', $usager->statut ?? '') == 'etudiantInfo' ? 'selected' : '' }}>ÉtudiantInfo</option>
                        </select>
                        @foreach ($errors->get('statut') as $error)
                            <div class="alert alert-danger mt-2">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>
                    
            
                    <input type="hidden" name="nbPubli" value="{{$usager->nbPubli}}">

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-5 py-2">Modifier l'usager</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('cachePass').addEventListener('change', function() {
        const pass = document.getElementById('pass');
        const lepass = document.getElementById('lepass');
        if (this.checked) {
            pass.style.display = 'block';
            lepass.name='password'
            lepass.required = true;
      
   
        } else {
            pass.style.display = 'none';
            lepass.name=''
            lepass.required = false;
        }
    });
</script>
<style>

    html,body{
        background-color: #0071f8;
    }

</style>
@endsection
