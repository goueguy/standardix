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
            $table->dateTime('date_edition');
            $table->dateTime('date_limite');
            $table->string('lieu')->nullable();
            $table->foreignIdFor(CategorieOffre::class)->nullable();
            $table->string('duree_contrat')->nullable();
            $table->string('profil');
            $table->text('avantages');
            $table->string('dossier_candidature');
            $table->text('description_offres');
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
