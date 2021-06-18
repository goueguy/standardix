<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
class CreateCategoryOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_offres', function (Blueprint $table) {
            $table->id();
            $table->string('category_offre_title');
            $table->string('category_offre_desc')->nullable();
            $table->foreignIdFor(User::class)->nullable();
            $table->string('category_offre_slug')->nullable()->unique();
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
        Schema::dropIfExists('category_offres');
    }
}
