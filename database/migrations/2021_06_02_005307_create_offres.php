<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('description');
            $table->dateTime('date_edition');
            $table->dateTime('date_limite');
            $table->string('lieu')->default();
            $table->unsignedBigInteger('id_categorie');
            $table->foreign('id_categorie')->references('id')->on('categories_offres');
            $table->string('duree_contrat')->nullable();
            $table->string('mission');
            $table->string('profil');
            $table->string('avantages');
            $table->string('dossier_candidature');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offres');
    }
}
