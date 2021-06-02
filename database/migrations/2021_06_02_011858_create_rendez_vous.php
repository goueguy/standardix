<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendezVous extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendez_vous', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_inscrit');
            $table->foreign('id_inscrit')->references('id')->on('inscriptions');
            $table->unsignedBigInteger('id_offre');
            $table->foreign('id_offre')->references('id')->on('offres');
            $table->date('date_rendez_vous');
            $table->string('objet');
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
        Schema::dropIfExists('rendez_vous');
    }
}
