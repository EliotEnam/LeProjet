<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jeu;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;

class AcceuilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trending = Jeu::where('categorie_id','7')->get();
        $recents=Jeu::orderBy('id','desc')->take(6)->get();
        $tableau= array();
        $tableau[0] = Jeu::orderBy('nbTelech','desc')->take(5)->get();
        $tableau[1] = Categorie::orderBy('nbJeux','desc')->take(6)->get();
        $usager = Auth::user();
        $mieuNotes=Jeu::orderBy('note','desc')->take(4)->get();
     return View('acceuil.index',compact('trending','recents','mieuNotes','tableau'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    public function compte()
    {
        $usager = Auth::user();
        return View('acceuil.compte',compact('usager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
