@extends('layouts.app')

@section('titre','Modification | index')

@section('contenu')

<div class="section trending py-5 bg-light">
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-body">
                <h1 class="text-center text-danger mb-4">Modification de {{$jeu->titre}}</h1>
                <form method="POST" action="{{ route('jeux.update',[$jeu]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label class="form-label fw-bold">Titre du jeu</label>
                        <input type="text" class="form-control" name="titre" required value="{{ old('nom', $jeu->titre) }}" placeholder="Entrez le titre du jeu">
                        @foreach ($errors->get('titre') as $error)
                            <div class="alert alert-danger mt-2">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>

            
                    <div class="mb-3">
                        <label class="form-label fw-bold">Catégorie de jeu</label>
                        <select name="categorie_id" id="categorie_id" class="form-control">
                            <option value="" disabled {{ old('categorie_id', $jeu->categorie_id) === null ? 'selected' : '' }}>Choisissez une catégorie</option>
                            @foreach($categories as $categorie)
                                <option value="{{ $categorie->id }}" 
                                    {{ old('categorie_id', $jeu->categorie_id) == $categorie->id ? 'selected' : '' }}>
                                    {{ $categorie->nom }}
                                </option>
                            @endforeach
                        </select>
                        @foreach ($errors->get('categorie_id') as $error)
                            <div class="alert alert-danger mt-2">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>

                    
                    <div class="mb-3">
                        <label class="form-label fw-bold">Equipe</label>
                        <select name="equipe_id" id="equipe_id" class="form-control">
                            <option value="" disabled {{ old('equipe_id') === null ? 'selected' : '' }}>Choisissez une equipe</option>
                            @foreach($equipes as $equipe)
                                <option value="{{ $equipe->id }}" 
                                    {{ old('equipe_id',$jeu->equipe_id) == $equipe->id ? 'selected' : '' }}>
                                    {{ $equipe->id }}(@foreach($equipe->usagers as $index => $usager)
                                    {{ $usager->nom }}@if(!$loop->last), @endif
                                @endforeach)
                                </option>
                            @endforeach
                        </select>
                        @foreach ($errors->get('equipe_id') as $error)
                            <div class="alert alert-danger mt-2">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>
                    
              
                
                    <div class="mb-3">
                        <label class="form-label fw-bold">Description du jeu</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Entrez une description" rows="4" required >{{ old('nom', $jeu->description) }}</textarea>
                        @foreach ($errors->get('description') as $error)
                        <div class="alert alert-danger mt-2">
                            {{ $error }}
                        </div>
                    @endforeach
                    </div>

             
                    <div class="mb-3">
                        <label class="form-label fw-bold">Tags</label>
                        <input type="text" class="form-control" name="tags" required value="{{ old('nom', $jeu->tags) }}" placeholder="Ex: action, aventure, stratégie">
                        @foreach ($errors->get('tags') as $error)
                        <div class="alert alert-danger mt-2">
                            {{ $error }}
                        </div>
                    @endforeach
                    </div>

                
                    <div class="mb-3">
                        <label class="form-label fw-bold">Année de sortie</label>
                        <input type="number" class="form-control" name="annee" required value="{{ old('nom', $jeu->annee) }}" placeholder="Ex: 2024">
                        @foreach ($errors->get('annee') as $error)
                        <div class="alert alert-danger mt-2">
                            {{ $error }}
                        </div>
                    @endforeach
                    </div>

               
                    <div class="mb-3">
                        <label class="form-label fw-bold">Plateformes</label>
                        <input type="text" class="form-control" name="platforms" required value="{{ old('nom', $jeu->platforms) }}" placeholder="Ex: PC, PS5, Xbox Series">
                        @foreach ($errors->get('platforms') as $error)
                        <div class="alert alert-danger mt-2">
                            {{ $error }}
                        </div>
                    @endforeach
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            <input type="checkbox" id="cacheImg" class="form-check-input"> Modifier les images
                        </label>
                    </div>
                     
                    <div id="images" style="display: none;">
                        <div class="mb-3">
                            <label for="imageID" class="form-label fw-bold">Sélectionner une image</label>
                            <input type="file" class="form-control-file" name="" id="cover" >
                            @foreach ($errors->get('cover') as $error)
                            <div class="alert alert-danger mt-2">
                                {{ $error }}
                            </div>
                        @endforeach
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Image 2</label>
                            <input type="file" class="form-control-file" name="" id="im2">
                            @foreach ($errors->get('im2') as $error)
                                <div class="alert alert-danger mt-2">{{ $error }}</div>
                            @endforeach
                        </div>
                
                        <div class="mb-3">
                            <label class="form-label fw-bold">Image 3</label>
                            <input type="file" class="form-control-file" name="" id="im3" >
                            @foreach ($errors->get('im3') as $error)
                                <div class="alert alert-danger mt-2">{{ $error }}</div>
                            @endforeach
                        </div>
                    </div>     
                
    

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-5 py-2">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('cacheImg').addEventListener('change', function() {
        const images = document.getElementById('images');
        const cover = document.getElementById('cover');
        const im2 = document.getElementById('im2');
        const im3 = document.getElementById('im3');
        const coverH = document.getElementById('coverH');
        const im2H = document.getElementById('im2H');
        const im3H = document.getElementById('im3H');
        if (this.checked) {
            images.style.display = 'block';
            cover.name = 'cover';
            im2.name = 'im2';
            im3.name = 'im3';
   
        } else {
            images.style.display = 'none';
            cover.name= "";
            im2.name= "";
            im3.name= "";
            cover.required = false;
            im2.required = false;
            im3.required = false;
        }
    });
</script>
<style>
    html,body{
        background-color: #0071f8;
    }

</style>
@endsection