<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Category::factory(6)->create();
        \App\Models\Product::factory(30)->create();

        // Create Default Admin
        DB::table('users')->insert([
            'name' => 'Sajad Kolahchi',
            'email' => 'sajad@sdp.test',
            'password' => Hash::make('12345678'),
            'user_type' => 'admin'
        ]);

        //Create Some Users ( Team Members )
        DB::table('users')->insert(['name' => 'Mohadese Rastegaar', 'email' => 'mohadese@sdp.test', 'password' => Hash::make('12345678'), 'user_type' => 'customer']);
        DB::table('users')->insert(['name' => 'Sajad Zahedi', 'email' => 'sjzahedi@sdp.test', 'password' => Hash::make('12345678'), 'user_type' => 'customer']);
    }
}
