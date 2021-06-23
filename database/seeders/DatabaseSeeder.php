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

        DB::table('domaine_emplois')->insert([
            'id'=>1,
            'nom' => "RESSOURCES HUMAINES ET COMMUNICATION",
        ]);
        DB::table('domaine_emplois')->insert([
            'id'=>2,
            'nom' => "RELATION CLIENTÈLE",
        ]);
        DB::table('domaine_emplois')->insert([
            'id'=>3,
            'nom' => "INFORMATIQUE DEVELOPPEMENT D'APPLICATIONS",
        ]);
        DB::table('users')->insert([
            'nom' => "David",
            'prenoms'=>'beckham',
            'email' => 'david.beckham@gmail.com',
            'role_id'=>1,
            'password'=>Hash::make("david0000"),
        ]);
        DB::table('users')->insert([
            'nom' => "John",
            'prenoms'=>'Doe',
            'email' => 'john@gmail.com',
            'role_id'=>3,
            'password'=>Hash::make("john0000"),
        ]);
        DB::table('users')->insert([
            'nom' => "Marc",
            'prenoms'=>'Zuckerberg',
            'email' => 'zuckerberg@gmail.com',
            'role_id'=>2,
            'password'=>Hash::make("marc0000"),
        ]);
        DB::table('users')->insert([
            'nom' => "Kouassi",
            'prenoms'=>'Konan',
            'email' => 'konan.kouassi@gmail.com',
            'role_id'=>1,
            'password'=>Hash::make("konan0000"),
        ]);
        DB::table('category_offres')->insert([
            'id' => 1,
            'category_offre_title'=>"CDI",
            'user_id'=>1
        ]);
        DB::table('category_offres')->insert([
            'id' => 2,
            'category_offre_title'=>"FREELANCE",
            'user_id'=>1
        ]);
        DB::table('category_offres')->insert([
            'id' => 3,
            'category_offre_title'=>"CDD",
            'user_id'=>2
        ]);
        DB::table('roles')->insert([
            'id' => 1,
            'nom'=>"MEMBER",
            'description'=>"Utilisateur Standard"
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'nom'=>"ADMIN",
            'description'=>"Modérateur"
        ]);
        DB::table('roles')->insert([
            'id' => 3,
            'nom'=>"SUPERADMIN",
            'description'=>"Super Admin"
        ]);

        DB::table('metiers')->insert([
            'id' => 1,
            'nom_metier'=>"TELECONSEILLER",
            'user_id'=>1
        ]);
        DB::table('metiers')->insert([
            'id' => 2,
            'nom_metier'=>"ASSISTANTE PARTICULIÈRE",
            'user_id'=>1
        ]);
        DB::table('metiers')->insert([
            'id' => 3,
            'nom_metier'=>"TELEVENDEUR COMMERCIAL",
            'user_id'=>1
        ]);
        DB::table('metiers')->insert([
            'id' => 4,
            'nom_metier'=>"COMMERCIAL FREELANCE",
            'user_id'=>1
        ]);
        DB::table('metiers')->insert([
            'id' => 5,
            'nom_metier'=>"COMMERCIAL TERRAIN",
            'user_id'=>1
        ]);


    }
}
