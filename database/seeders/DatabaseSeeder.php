<?php

namespace Database\Seeders;

use App\Models\User;
<<<<<<< HEAD
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> bff4f3e9c22a9cba560382400f339d3a2d793b44
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< HEAD
    use WithoutModelEvents;

=======
>>>>>>> bff4f3e9c22a9cba560382400f339d3a2d793b44
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
