<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usager;
use App\Models\Equipe;
use App\Models\Groupe;
use App\Models\EquipeUsager;
use App\Http\Requests\UsagerRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;


class UsagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('login.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipes = Equipe::all();
        return View('usagers.create',compact('equipes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsagerRequest $request)
    {
        try{
            $usager = new Usager($request->all());
            $usager->password= Hash::make($request->password);
            $usager->save();
            return redirect()->route('usagers.index')->with('success','ajout de ' . $usager->nom. ' réussi!');
        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('usagers.index')->withErrors(['error','l\'ajout n\'a pas fonctionné']);
        }
         return redirect()->route('usagers.index');

    }


    public function addTeam(Request $request)
    {
        try{
            $equipe_usager = new EquipeUsager($request->all());
            $equipe_usager->save();
            return redirect()->route('usagers.index')->with('success','usagé ajouté!');
        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('usagers.index')->withErrors(['error','l\'ajout n\'a pas fonctionné']);
        }
         return redirect()->route('usagers.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usager $usager)
    {
        $equipes = Equipe::all();
        return View('usagers.modifier', compact('usager','equipes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsagerRequest $request, Usager $usager)
    {
        try{
            $usager->matricule= $request->matricule;
            if($request->password != null){
                $usager->password= Hash::make($request->password);
            }
            $usager->nom= $request->nom;
            $usager->prenom= $request->prenom;
            $usager->nbPubli= $request->nbPubli;
            $usager->statut= $request->statut;
            $usager->courriel= $request->courriel;
            $usager->save();
            if(Auth::user()->statut == 'etudiant')
            {
                return redirect()->route('jeux.index')->with('success','modification de ' . $usager->nom. ' réussi!');
            }
            elseif (Auth::user()->statut == 'professeur'){
                return redirect()->route('usagers.index')->with('success','modification de ' . $usager->nom. ' réussi!');
            }
            else{
                return redirect()->route('jeux.index')->with('success','modification de ' . $usager->nom. ' réussi!');
            }

        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('usagers.index')->withErrors(['error','la modification n\'a pas fonctionné']);
        }
         return redirect()->route('usagers.index');
    }
    public function display()
    {
        $usagers = Usager::all();
        $groupes = Groupe::all();
        $equipes = Equipe::all();
        return View('usagers.index',compact('usagers','groupes','equipes'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $usager = Usager::findOrFail($id);

    
            $usager->delete();

            return redirect()->route('usagers.index')->with('message', "Suppression de " . $usager->matricule. " réussi!");
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('usagers.index')->withErrors(['error','la supression n\'a pas fonctionné']);
        }
        return redirect()->route('usagers.index');
    }

    public function login(Request $request){
        $reussi = Auth::attempt(['matricule' => $request->matricule, 'password' => $request->password]);

        if($reussi){
            return redirect()->route('accueil.index') ->with('message', "Connexion réussie");
            $usager = Auth::user()->id;
            $request->session()->put('id', $usager);
        }
        else{
        return redirect()->route('login')->withErrors(['Informations invalides']); 
        }

    }

    public function createTeam(){
   
        try{
  
            $equipe = new Equipe();
            $equipe->numEquipe = $equipe->id + 1;
            $equipe->nbMembres = 0;
            $equipe->save();
            return redirect()->route('usagers.index')->with('success','modification de ' . $equipe->id. ' réussi!');
        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('usagers.index')->withErrors(['error','la modification n\'a pas fonctionné']);
        }
         return redirect()->route('usagers.index');
    }

    public function logout(Request $request)
    {
        $usager = Auth::user();

        Auth::logout();
        return redirect()->route('login')->with(['status','Vous êtes déconnectés']); 
    }
    public function updateTeam(UsagerRequest $request)
    {
        try{
            $usager = Usager::findOrFail($id);

            $usager->groupes()->detach();

    
            $usager->delete();

            return redirect()->route('usagers.index')->with('message', "Suppression de " . $usager->matricule. " réussi!");
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('usagers.index')->withErrors(['error','la supression n\'a pas fonctionné']);
        }
        return redirect()->route('usagers.index');
    }
}
