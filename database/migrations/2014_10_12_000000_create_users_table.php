<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\DomaineEmploi;
use App\Models\Metier;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('prenoms')->nullable();
            $table->string('nom_entreprise')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('contact')->nullable();
            $table->string('lieu_habitation')->nullable();
            $table->foreignIdFor(DomaineEmploi::class)->nullable();
            $table->foreignIdFor(Metier::class)->nullable();
            $table->string('cv')->nullable();
            $table->text('motivation')->nullable();
            $table->string('google_id')->nullable();

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
        Schema::dropIfExists('users');
    }
}
