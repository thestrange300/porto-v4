<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Short;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'username' => 'test',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test1@example.com',
            'password' => bcrypt('password'),
        ]);

        Short::factory(30)->create();
    }
}
