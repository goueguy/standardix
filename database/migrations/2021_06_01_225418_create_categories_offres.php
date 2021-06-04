<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesOffres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_offres', function (Blueprint $table) {
            $table->id();
            $table->string('categorie_offre_title');
            $table->string('categorie_offre_desc')->nullable();
            $table->foreignIdFor(User::class)->nullable();
            $table->string('categorie_offre_slug')->nullable()->unique();
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
        Schema::dropIfExists('categories_offres');
    }
}
