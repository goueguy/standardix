<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = false;


            DB::table('notifications')->insert([
                'id' => 1,
                'content'=>"entretien physique",
                'status'=>1,
                'user_id'=> 5,
                'created_at'=> date('Y-m-d h:i:s'),
                'updated_at'=> date('Y-m-d h:i:s')
            ]);

            DB::table('notifications')->insert([
                'id' => 2,
                'content'=>"entretienen présentiel",
                'status'=>0,
                'user_id'=> 5,
                'created_at'=> date('Y-m-d h:i:s'),
                'updated_at'=> date('Y-m-d h:i:s')
            ]);

            DB::table('notifications')->insert([
                'id' => 3,
                'content'=>"entretien en ligne",
                'status'=>0,
                'user_id'=> 5,
                'created_at'=> date('Y-m-d h:i:s'),
                'updated_at'=> date('Y-m-d h:i:s')
            ]);
    }
}
