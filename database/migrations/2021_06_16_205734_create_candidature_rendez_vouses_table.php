<?php

use App\Models\Candidature;
use App\Models\RendezVous;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatureRendezVousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidature_rendez_vouses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidature::class)->nullable();
            $table->foreignIdFor(RendezVous::class)->nullable();
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
        Schema::dropIfExists('candidature_rendez_vouses');
    }
}
