<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Sliders;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create an admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Example password hashing
            'role' => 'admin', // Assign admin role
        ]);
        
        $this->call([
            AboutUsSeeder::class,
            ContactSeeder::class,
            NewsSeeder::class,
            ServiceSeeder::class,
            TeamsSeeder::class,
            SlidersSeeder::class,
        ]);
    }
}
