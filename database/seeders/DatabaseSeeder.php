<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create 3 Admins
        $admins = [
            ['name' => 'Admin One', 'email' => 'admin1@example.com'],
            ['name' => 'Admin Two', 'email' => 'admin2@example.com'],
            ['name' => 'Admin Three', 'email' => 'admin3@example.com'],
        ];

        foreach ($admins as $admin) {
            User::create([
                'name' => $admin['name'],
                'email' => $admin['email'],
                'password' => Hash::make('password'),
                'is_admin' => true,
            ]);
        }

        // Create 20 Regular Users
        $users = User::factory()->count(20)->create([
            'is_admin' => false,
        ]);

        // Get all users (admins + users)
        $allUsers = User::all();

        // Create 50 blog posts assigned to random users
        foreach (range(1, 50) as $i) {
            $author = $allUsers->random();

            Post::create([
                'title' => "Sample Post $i",
                'content' => fake()->paragraphs(3, true),
                'author_name' => $author->name,
                'author_id' => $author->id,
            ]);
        }
    }
}
