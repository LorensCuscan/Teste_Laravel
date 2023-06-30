<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        //$this->call(UserTableSeeder::class);
        \App\Models\User::factory(1000)->create();
=======
        $this->call(UserTableSeeder::class);
        // \App\Models\User::factory(10)->create();
>>>>>>> 2ffffecf59e4b599398bdb648105f5d5c53ef700

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
