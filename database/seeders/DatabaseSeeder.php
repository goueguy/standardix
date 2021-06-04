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
            'niveau_acces'=>0,
            'password'=>Hash::make("marc0000"),

        ]);
        DB::table('users')->insert([
            'nom' => "Super Admin",
            'prenoms'=>'Super Admin',
            'email' => 'superadmin@gmail.com',
            'niveau_acces'=>2,
            'password'=>Hash::make("superadmin0802"),

        ]);
        DB::table('users')->insert([
            'nom' => "Admin",
            'prenoms'=>'Admin',
            'email' => 'admin@gmail.com',
            'niveau_acces'=>1,
            'password'=>Hash::make("admin0802"),

        ]);
        DB::table('users')->insert([
            'nom' => "Admin",
            'prenoms'=>'Admin',
            'email' => 'superadmin@gmail.com',
            'niveau_acces'=>2,
            'password'=>Hash::make("superadmin0802"),

        ]);

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
