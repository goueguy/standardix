<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $member = User::create([
            'nom' => "yao",
            'prenoms'=>'martial',
            'email' => 'martial.yao@gmail.com',
            'password'=>Hash::make("martial0000")
        ]);

        $admin = User::create([
            'nom' => "aboke",
            'prenoms'=>'benjamin',
            'email' => 'benjamin.aboke@gmail.com',
            'password'=>Hash::make("benjamin0000")
        ]);

        $superadmin =User::create([
            'nom' => "goueguy",
            'prenoms'=>'jean-louis',
            'email' => 'jlagoueguy@yahoo.fr',
            'password'=>Hash::make("jean0000")
        ]);

        $memberRole = Role::where('nom','MEMBER')->first();
        $adminRole = Role::where('nom','ADMIN')->first();
        $superadminRole = Role::where('nom','SUPERADMIN')->first();

        $admin->roles()->attach($adminRole);
        $member->roles()->attach($memberRole);
        $superadmin->roles()->attach($superadminRole);
    }
}
