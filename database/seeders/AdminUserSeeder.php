<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $user_id = DB::table('users')->insertGetId([
            'name' => 'Square One',
            'email' => 'blog'.'@admin.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => $user_id,
            'user_type' => 'App\Models\User',
        ]);        
    }
}
