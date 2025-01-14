<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeuxController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\UsagerController;
use App\Http\Middleware\RoleMiddleware;


Route::get('/', function () {
    return view('welcome');
});

Route::get('usagers', 
[UsagerController::class, 'display'])->name('usagers.index')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::get('jeux', 
[JeuxController::class, 'index'])->name('jeux.index');

Route::get('login', 
[UsagerController::class, 'index'])->name('login');

Route::post('login', 
[UsagerController::class, 'login']);

Route::post('logout', 
[UsagerController::class, 'logout'])->name('logout');

Route::post('/jeux/revues', 
[JeuxController::class, 'revues'])->name('jeux.revues')->middleware(RoleMiddleware::class.':professeur,etudiant,etudiantInfo');

Route::get('jeux/mesJeux', 
[JeuxController::class, 'mesJeux'])->name('jeux.mesJeux')->middleware(RoleMiddleware::class.':etudiantInfo');

Route::get('accueil', 
[AcceuilController::class, 'index'])->name('accueil.index');

Route::get('compte', 
[AcceuilController::class, 'compte'])->name('accueil.compte');

Route::get('/jeux/{jeu}/modifier/',
[JeuxController::class, 'edit'])->name('jeux.edit')->middleware(RoleMiddleware::class.':professeur,etudiant,etudiantInfo');

Route::get('/usagers/{usager}/modifier/',
[UsagerController::class, 'edit'])->name('usagers.edit')->middleware(RoleMiddleware::class.':professeur,etudiant,etudiantInfo');

Route::patch('/usagers/{usager}/modifier',
[UsagerController::class, 'update'])->name('usagers.update')->middleware(RoleMiddleware::class.':professeur,etudiant,etudiantInfo');

Route::patch('/jeux/{jeu}/modifier',
[JeuxController::class, 'update'])->name('jeux.update')->middleware(RoleMiddleware::class.':professeur,etudiant,etudiantInfo');

Route::get('/jeux/create',
[JeuxController::class, 'create'])->name('jeux.create')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::get('/usagers/create',
[UsagerController::class, 'create'])->name('usager.create');

Route::post('/usagers',
[UsagerController::class, 'store'])->name('usagers.store')->middleware(RoleMiddleware::class.':professeur,etudiant,etudiantInfo');

Route::post('/usagers/createTeam',
[UsagerController::class, 'createTeam'])->name('usagers.createTeam')->middleware(RoleMiddleware::class.':professeur,etudiant,etudiantInfo');

Route::post('/jeux',
[JeuxController::class, 'store'])->name('jeux.store')->middleware(RoleMiddleware::class.':professeur,etudiant,etudiantInfo');

Route::post('/usager/equipe',
[UsagerController::class, 'addTeam'])->name('usagers.equipe')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::get('/jeux/{jeu}/',
[JeuxController::class, 'show'])->name('jeux.show');

Route::delete('/usagers/{id}',
[UsagerController::class, 'destroy'])->name('usagers.destroy')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::delete('/usagers/ajout/{id}',
[UsagerController::class, 'updateTeam'])->name('usagers.ajout')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::delete('/jeux/{id}',
[JeuxController::class, 'destroy'])->name('jeux.destroy')->middleware(RoleMiddleware::class.':professeur,etudiantInfo');

Route::get('contact', function () {
    return view('contact.contact');
})->middleware(RoleMiddleware::class.':professeur,etudiant,etudiantInfo');
