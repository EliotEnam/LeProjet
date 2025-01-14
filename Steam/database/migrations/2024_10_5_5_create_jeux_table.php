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
        Schema::create('jeux', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipe_id')->constrained();
            $table->foreignId('categorie_id')->constrained();
            $table->text('description');
            $table->string('titre');
            $table->string('tags');
            $table->string('platforms');
            $table->integer('annee');
            $table->string('cover',500);
            $table->integer('nbTelech');
            $table->float('note');
            //createdAT
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jeux');
    }
};
