<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create(['nom'=>'MEMBER']);
        Role::create(['nom'=>'ADMIN']);
        Role::create(['nom'=>'SUPERADMIN']);
        Role::create(['nom'=>'CANDIDATURES']);
        Role::create(['nom'=>'OFFRES']);
        Role::create(['nom'=>'EMPLOIS']);
        Role::create(['nom'=>'METIERS']);
        Role::create(['nom'=>'MESSAGES']);

    }
}
