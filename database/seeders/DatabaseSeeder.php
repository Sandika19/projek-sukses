<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Post::factory(5)->create();

        // Category::create([
        //     'name' => 'Software',
        //     'slug' => 'software'
        // ]);

        // Category::create([
        //     'name' => 'Jaringan',
        //     'slug' => 'jaringan'
        // ]);

        $userData = [
            [
                'name' => 'admin',
                'username' => 'admin1',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'password' => bcrypt('admin123')
            ],
            [
                'name' => 'adminbiroprek',
                'username' => 'admin2',
                'email' => 'admin@biroprek.com',
                'role' => 'biroprek',
                'password' => bcrypt('biroprek123')
            ],
            [
                'name' => 'usersatu',
                'username' => 'user1',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'password' => bcrypt('user123')
            ]
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }



        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



    }
}
