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
        Schema::create('medias', function (Blueprint $table) {
            $table->id();
            $table->string('cover')->nullable()->default(null);
            $table->foreignId('jeu_id')->constrained('jeux');
            $table->string('im1',500)->nullable()->default(null);
            $table->string('im2',500)->nullable()->default(null);
            $table->string('im3',500)->nullable()->default(null);
            $table->string('im4')->nullable()->default(null);
            $table->string('video',500)->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medias');
    }
};
