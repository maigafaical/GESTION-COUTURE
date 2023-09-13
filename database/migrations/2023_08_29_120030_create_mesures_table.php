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
        Schema::create('mesures', function (Blueprint $table) {
            $table->id();
            $table->Integer('poitrine');
            $table->Integer('taille_robe');
            $table->Integer('bassins');
            $table->Integer('longueur');
            $table->Integer('genoux');
            $table->Integer('manches');
            $table->Integer('hanches');
            $table->Integer('epaules');
            $table->Integer('poignets');
            $table->Integer('tour_ventre');
            $table->Integer('longueur_veste');
            $table->date('date_');
           
            $table->unsignedBigInteger('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('modeles_id')->unsigned();
            $table->foreign('modeles_id')->references('id')->on('modeles')->onDelete('cascade')->onUpdate('cascade');

             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesures');
    }
};
