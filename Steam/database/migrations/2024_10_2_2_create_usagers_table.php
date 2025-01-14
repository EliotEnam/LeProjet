<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usagers', function (Blueprint $table) {
            $table->id();
            $table->integer('matricule');
            $table->foreignId('groupe_id')->constrained();
            $table->string('password');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('nbPubli');
            $table->enum('statut',['professeur','etudiant','etudiantInfo'])->default('etudiant');
            $table->string('courriel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usagers');
    }
};
