<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class WriterUserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $user_id = DB::table('users')->insertGetId([
            'name' => 'Pablo Picasso',
            'email' => 'pablo.picasso'.'@admin.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => $user_id,
            'user_type' => 'App\Models\User',
        ]);        
    }
}
