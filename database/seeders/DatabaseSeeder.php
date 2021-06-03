<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // DB::table('inscriptions')->insert([
        //     'nom' => "goueguy",
        //     'prenoms'=>'jean-louis',
        //     'email' => 'jlagoueguy@gmail.com',
        //     'contact'=>"09162396",
        //     'lieu_habitation'=>'Cocody Blockhauss',
        //     'password' => Hash::make('Jeanloouis@1234'),
        //     'id_domaine'=>1
        // ]);
        // DB::table('users')->insert([
        //     'nom' => "yoboue",
        //     'prenoms'=>'ruben',
        //     'email' => 'rubenyoboue@gmail.com',
        //     'niveau_acces'=>1,
        //     'password'=>Hash::make("rubicod"),

        // ]);

        // DB::table('categories_offres')->insert([
        //     'id' => 1,
        //     'nom'=>"CDI",
        // ]);
        // DB::table('categories_offres')->insert([
        //     'id' => 2,
        //     'nom'=>"CDD",
        // ]);
        // DB::table('categories_offres')->insert([
        //     'id' => 3,
        //     'nom'=>"FREELANCE",
        // ]);
        // DB::table('categories_offres')->insert([
        //     'id' => 4,
        //     'nom'=>"STAGE",
        // ]);
        // DB::table('categories_offres')->insert([
        //     'id' => 5,
        //     'nom'=>"ALTERNANCE",
        // ]);
    }
}
