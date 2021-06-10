<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Offre;
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
            $table->string('objet');
            $table->string('label')->nullable();
            $table->text('contenu')->nullable();
            $table->text('candidats_id')->nullable();
            $table->foreignIdFor(User::class)->nullable();
            $table->foreignIdFor(Offre::class)->nullable();
            $table->string('slug')->nullable()->unique();
            $table->date('date_rendez_vous')->nullable();
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
