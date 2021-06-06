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
            'nom' => "RESSOURCES HUMAINES ET COMMUNICATION",
        ]);
        DB::table('domaine_emplois')->insert([
            'nom' => "RELATION CLIENTÈLE",
        ]);
        DB::table('domaine_emplois')->insert([
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
        DB::table('offres')->insert([
        'titre' => 'Formateur Sénior billingue',
        'date_edition' => date('Y-m-d H:i:s'),
        'date_limite' => date('Y-m-d H:i:s'),
        'lieu' => 'Abidjan',
        'categorie_offre_id' => 1,
        'duree_contrat' => 6,
        'description_offres' => "

        Dans le cadre d’un programme stratégique de développement de nos activités, nous recrutons un développeur web et mobile.

        Profil du poste

            * Avoir un Bac+3 au moins
            * Avoir mis en ligne un site web ou une application mobile
            * Maitrisé le Framework Flutter est un atout

        Délai: 15 Mai 2021

        * Dossier de candidature

        * Veuillez faire parvenir votre CV à l’adresse e-mail suivante : contact@iatecole.com.
        ",
        'profil' => 'Bac + 2',
        'avantages' => 'Déclaration cnps',
        'dossier_candidature' => 'cv, lettre de motivation',
        'user_id' => 4,
        'slug' => Str::slug("Formateur Sénior billingue")

        ]);

    }
}
