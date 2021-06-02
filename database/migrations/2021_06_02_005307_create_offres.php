<?php

use App\Models\CategorieOffre;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
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
            $table->string('lieu')->nullable();
            $table->foreignIdFor(CategorieOffre::class)->nullable();
            $table->string('duree_contrat')->nullable();
            $table->string('mission');
            $table->string('profil');
            $table->string('avantages');
            $table->string('dossier_candidature');
            $table->string('description_offres')->nullable();
            $table->foreignIdFor(User::class)->nullable();
            $table->string('slug')->nullable()->unique();
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
