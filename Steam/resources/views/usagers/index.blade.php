@extends('layouts.app')

@section('titre','accueil | index')

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



  <div class="section most-played">
    <div class="container">
   
     @if(Auth::user()->statut == 'professeur')

     <h1 class="text-center mb-3">Liste des usagers</h1>
     <a href="/usagers/create"> <button style="--clr:#B72727 " class="lebtn mb-4" ><span> Ajouter un usager</span><i></i></button></a>
        <div class="row">
            @if(count($usagers))
              @foreach($usagers as $usager)
            
      <div class="col-lg-2 col-md-6 align-self-center mb-3 trending-items col-md-6 adv">
        <div class="item">
          <div class="thumb">
            <a href=""><img src="{{ asset('assets/images/use.png')}}" alt="" ></a>
          
          </div>
          <div class="down-content">
            <span class="category">{{$usager->statut}}</span>
            <h4>{{$usager->prenom}}  {{$usager->nom}}</h4>
            <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
            <a href="{{route('usagers.edit',[$usager])}}"><i class="fa-solid fa-pen-nib"></i></a>
            <form method="POST" action="{{ route('usagers.destroy', [$usager->id]) }}">
              @csrf
              @method('DELETE')
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$usager->id}}">
                  Supprimer
              </button>
              <div class="modal fade" id="exampleModal{{$usager->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation de suppression</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              Voulez-vous vraiment supprimer l'usager {{$usager->prenom}} {{$usager->nom}} ?
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annuler</button>
                              <button type="submit" class="btn btn-danger"> Supprimer</button>    
                          </div>
                      </div>
                  </div>
              </div>
          </form>
          
            <ul>
              <li>{{$usager->nbPubli}}  jeu(x) publiés</li>
              <li>{{$usager->courriel}}</li>
    
            </ul>
          </div>
        </div>
      </div>
      @endforeach
            @else
    @endif 
    </div>
    @endif

@if(Auth::user()->statut == 'professeur')
<hr>
    <div class="row">
      @if(count($groupes))
        @foreach($groupes as $groupe)
      
<div class="col-lg-2 col-md-6 align-self-center mb-3 trending-items col-md-6 adv">
  <div class="item">
    <div class="thumb">
      <a href=""><img src="{{ asset('assets/images/team.png')}}" alt=""  ></a>
    
    </div>
    <div class="down-content">
      <span class="category"> Cours: {{$groupe->nomCours}} </span>
      <h4><span id="span">{{$groupe->nbEtud}} </span>étudiants</h4>
     

    
    </div>
  </div>
</div>

@endforeach
      @else
@endif 
</div>
@endif
<hr>
<form method="POST" action="{{ route('usagers.createTeam') }}" >
  @csrf
   <a href="/usagers/create"> <button type="submit" style="--clr:#B72727 " class="lebtn mb-4"><span>Ajouter une equipe</span></button></a>
       </form>
    <div class="row">
      @if(count($equipes))
        @foreach($equipes as $equipe)
    
<div class="col-lg-3 col-md-6 align-self-center mb-3 trending-items col-md-6 adv">
  <div class="item">
    <div class="thumb">
      <a href=""><img src="{{ asset('assets/images/team.png')}}" alt="" ></a>
    
    </div>
    <div class="down-content">
      <span class="category">{{count($equipe->usagers)}} membre(s)</span>
      <h4>Équipe numéro <span id="span">{{$equipe->id}}</span></h4>

      @if(Auth::user()->statut == 'professeur')
      <div class="my-3">
        <label class="form-label fw-bold">
            <input type="checkbox" id="cachePass" class="form-check-input letruc" data-id="{{ $equipe->id }}"> <span style="color: #00a6e7">Ajouter un usager</span>
        </label>
    </div>
      <form action="{{route('usagers.equipe')}}" method="POST" id="form{{$equipe->id}}" style="display: none">
        @csrf
        <div class="mb-3">
          <select name="usager_id" id="usager_id" class="form-control" required>
              <option value="" disabled {{ old('usager_id') === null ? 'selected' : '' }}>Choisissez un usager</option>
              @foreach($usagers as $usager)
                  <option value="{{ $usager->id }}" 
                      {{ old('usager_id') == $usager->id ? 'selected' : '' }}>
                      {{ $usager->nom }} {{$usager->prenom}}({{$usager->statut}})
                  </option>
              @endforeach
          </select>
          @foreach ($errors->get('usager_id') as $error)
              <div class="alert alert-danger mt-2">
                  {{ $error }}
              </div>
          @endforeach
      </div>
      <input type="hidden" name="equipe_id" id="" value="{{$equipe->id}}">
      <div class="text-center">
        <button type="submit" class="btn btn-primary px-5 py-2">Ajouter l'usager</button>
    </div>
      </form>
      @endif
    </div>
  </div>
</div>



@endforeach
      @else
@endif 
</div>
  </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
        const checks = document.querySelectorAll('.letruc');

        checks.forEach(check => {
          check.addEventListener('change', function() {
                const formId = `form${this.dataset.id}`;
                const form = document.getElementById(formId);
                document.querySelectorAll('form[id^="form"]').forEach(f => {
                    f.style.display = 'none';
                });
                if (this.checked) {
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                }
            });
        });
    });
</script>

  <style>
    html,body{
        background-color: #0071f8;
    }

    #span{
      color: #e91506
    }
.lebtn {
  position: relative;
  background: #444;
  color: #00a6e7;
  text-decoration: none;
  text-transform: uppercase;
  border: none;
  letter-spacing: 0.1rem;
  font-size: 1rem;
  padding: 1rem 3rem;
  transition: 0.2s;
}

.lebtn:hover {
  letter-spacing: 0.2rem;
  padding: 1.1rem 3.1rem;
  background: var(--clr);
  color: var(--clr);
  /* box-shadow: 0 0 35px var(--clr); */
  animation: box 3s infinite;
}

.lebtn::before {
  content: "";
  position: absolute;
  inset: 2px;
  background: #272822;
}

.lebtn span {
  position: relative;
  z-index: 1;
}
.lebtn i {
  position: absolute;
  inset: 0;
  display: block;
}

.lebtn i::before {
  content: "";
  position: absolute;
  width: 10px;
  height: 2px;
  left: 80%;
  top: -2px;
  border: 2px solid var(--clr);
  background: #272822;
  transition: 0.2s;
}

.lebtn:hover i::before {
  width: 15px;
  left: 20%;
  animation: move 3s infinite;
}

.lebtn i::after {
  content: "";
  position: absolute;
  width: 10px;
  height: 2px;
  left: 20%;
  bottom: -2px;
  border: 2px solid var(--clr);
  background: #272822;
  transition: 0.2s;
}

.lebtn:hover i::after {
  width: 15px;
  left: 80%;
  animation: move 3s infinite;
}

@keyframes move {
  0% {
    transform: translateX(0);
  }
  50% {
    transform: translateX(5px);
  }
  100% {
    transform: translateX(0);
  }
}

@keyframes box {
  0% {
    box-shadow: #27272c;
  }
  50% {
    box-shadow: 0 0 25px var(--clr);
  }
  100% {
    box-shadow: #27272c;
  }
}
</style>

@endsection


