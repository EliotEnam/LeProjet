<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jeu;
use App\Models\Equipe;
use App\Models\Categorie;
use App\Models\Media;
use App\Models\Revue;
use App\Models\EquipeUsager;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\JeuRequest;
use App\Http\Requests\MediaRequest;
use App\Http\Requests\RevueRequest;
use Illuminate\Support\Facades\Auth;


class JeuxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //C'est le controlleur qui interroge la BD et qui passe les jeux à la vue
        $jeux = Jeu::all();
        $usager = Auth::user();
        // select pour aller chercher tous les jeux
        return View('jeux.index',compact('jeux','usager'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipes = Equipe::all();
        $categories = Categorie::all();
        return View('jeux.create',compact('equipes'),compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JeuRequest $request, MediaRequest $mediaRequest)
    {
        try{
            $jeu = new Jeu ();
            $jeu->equipe_id = $request->input('equipe_id');
            $jeu->description = $request->input('description');
            $jeu->categorie_id = $request->input('categorie_id');
            $jeu->titre = $request->input('titre');
            $jeu->tags = $request->input('tags');
            $jeu->nbTelech = $request->input('nbTelech');
            $jeu->note = $request->input('note');
            $jeu->annee = $request->input('annee');
            $jeu->platforms = $request->input('platforms');
            $uploadedFile = $request->file('cover');
            $nomUni = str_replace(' ','_',$jeu->titre). '-'. uniqid() . '.' . $uploadedFile->extension();
            try{
                $request->cover->move(public_path('assets/imgJeux'), $nomUni);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }
            $jeu->cover= $nomUni;
            $jeu->save();
            $media = new Media();
            $media->jeu_id = $jeu->id;
            $uploadedFile2 = $mediaRequest->file('im2');
            $nomUni2 = str_replace(' ','_',$jeu->titre). '-'. uniqid() . '.' . $uploadedFile2->extension();
            try{
                $mediaRequest->im2->move(public_path('assets/imgJeux'), $nomUni2);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }
            $uploadedFile3 = $mediaRequest->file('im3');
            $nomUni3 = str_replace(' ','_',$jeu->titre). '-'. uniqid() . '.' . $uploadedFile3->extension();
            try{
                $mediaRequest->im3->move(public_path('assets/imgJeux'), $nomUni3);
            }
            catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
            }
            $media->im2 = $nomUni2;
            $media->im3 = $nomUni3;
            $media->save();
            return redirect()->route('jeux.index')->with('success','ajout de ' . $jeu->titre. ' réussi!');
        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('jeux.index')->withErrors(['error','l\'ajout n\'a pas fonctionné']);
        }
         return redirect()->route('jeu.index');
      
    }



    /**
     * Display the specified resource.
     */
    public function show(Jeu $jeu)
    {
        $classement = Jeu::orderBy('note','desc')->get();
        
        return View('jeux.show',compact('jeu','classement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jeu $jeu)
    {
        $equipes = Equipe::all();
        $categories = Categorie::all();
        return View('jeux.modifier', compact('jeu','categories','equipes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JeuRequest $request, MediaRequest $mediaRequest, Jeu $jeu)
    {
        try{
            $jeu->equipe_id = $request->input('equipe_id');
            $jeu->description = $request->input('description');
            $jeu->categorie_id = $request->input('categorie_id');
            $jeu->titre = $request->input('titre');
            $jeu->tags = $request->input('tags');
            $jeu->annee = $request->input('annee');
            $jeu->platforms = $request->input('platforms');
            if($request->hasFile('cover')){
                $uploadedFile = $request->file('cover');
                $nomUni = str_replace(' ','_',$jeu->titre). '-'. uniqid() . '.' . $uploadedFile->extension();
                try{
                    $request->cover->move(public_path('assets/imgJeux'), $nomUni);
                }
                catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                    Log::error("Erreur lors du téléversement du fichier. ", [$e]);
                }
               
                $jeu->cover= $nomUni;
            }
            
            $jeu->save();
            $media = Media::firstOrNew(['jeu_id' => $jeu->id]);

            if($mediaRequest->hasFile('im2')){
                $uploadedFile2 = $mediaRequest->file('im2');
                $nomUni2 = str_replace(' ','_',$jeu->titre). '-'. uniqid() . '.' . $uploadedFile2->extension();
                try{
                    $mediaRequest->im2->move(public_path('assets/imgJeux'), $nomUni2);
                }
                catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                    Log::error("Erreur lors du téléversement du fichier. ", [$e]);
                }
                $media->im2 = $nomUni2;
            }
            if($mediaRequest->hasFile('im3')){
                $uploadedFile3 = $mediaRequest->file('im3');
                $nomUni3 = str_replace(' ','_',$jeu->titre). '-'. uniqid() . '.' . $uploadedFile3->extension();
                try{
                    $mediaRequest->im3->move(public_path('assets/imgJeux'), $nomUni3);
                }
                catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e){
                    Log::error("Erreur lors du téléversement du fichier. ", [$e]);
                }
                $media->im3 = $nomUni3;
            }
       
            $media->save();
            return redirect()->route('jeux.index')->with('success','Modification de ' . $jeu->titre. ' réussi!');
        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('jeux.index')->withErrors(['error','la modification n\'a pas fonctionné']);
        }
         return redirect()->route('jeu.index');

    }

    public function revues(RevueRequest $request){
        try{
            $revue = new Revue ($request->all());
            $revue->save();
            $jeu = Jeu::findOrFail($request->input('jeu_id'));
            $jeu->note = ($request->input('note') + $jeu->note)/2;
            $jeu->save();
            return redirect()->route('jeux.index')->with('success','Commentaire enregistré!');
        }
        catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->route('jeux.index')->withErrors(['error','Commentaire non enregistré!']);
        }
        return redirect()->route('jeu.index');
         
    }

    
    public function mesJeux(){
        $jeux = Jeu::whereIn('equipe_id', Auth::user()->equipes->pluck('id'))->get();
        return View('jeux.mesJeux',compact('jeux'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $jeu = Jeu::findOrFail($id);

            $jeu->revues()->delete();
    
            $jeu->media()->delete();
    
            $jeu->delete();

            return redirect()->route('jeux.index')->with('message', "Suppression de " . $jeu->titre. " réussi!");
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('jeux.index')->withErrors(['error','la supression n\'a pas fonctionné']);
        }
        return redirect()->route('jeu.index');
    }
}
