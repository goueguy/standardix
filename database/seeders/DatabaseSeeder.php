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
            'nom' => "CDI",
        ]);
        DB::table('users')->insert([
            'nom' => "marc",
            'prenoms'=>'louis',
            'email' => 'marc@gmail.com',
            'role_id'=>1,
            'password'=>Hash::make("marc0000"),
        ]);
        DB::table('users')->insert([
            'nom' => "Super",
            'prenoms'=>'Admin',
            'email' => 'superadmin@gmail.com',
            'role_id'=>3,
            'password'=>Hash::make("superadmin0802"),
        ]);
        DB::table('users')->insert([
            'nom' => "Admin",
            'prenoms'=>'Admin',
            'email' => 'admin@gmail.com',
            'role_id'=>2,
            'password'=>Hash::make("admin0802"),
        ]);
        DB::table('users')->insert([
            'nom' => "User",
            'prenoms'=>'User',
            'email' => 'user@gmail.com',
            'role_id'=>1,
            'password'=>Hash::make("user0802"),
        ]);
        DB::table('categories_offres')->insert([
            'id' => 1,
            'categorie_offre_title'=>"CDI",
            'user_id'=>1
        ]);
        DB::table('categories_offres')->insert([
            'id' => 2,
            'categorie_offre_title'=>"FREELANCE",
            'user_id'=>1
        ]);
        DB::table('categories_offres')->insert([
            'id' => 3,
            'categorie_offre_title'=>"CDD",
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

    }
}
