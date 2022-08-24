<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Certificate;
use App\Models\Project;
use App\Models\Category;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        User::create([
            'name' => 'Fikri Dean Radityo',
            'username' => 'fikridean',
            'email' => 'deanradityo@gmail.com',
            'password' => bcrypt('password'),
            'image' => 'img/profile.png',
            'is_admin' => true
        ]);

        User::create([
            'name' => 'Sitta Vidyadevi',
            'username' => 'sitta',
            'email' => 'sitta@gmail.com',
            'password' => bcrypt('password'),
            'image' => 'img/profile.png',
            'is_admin' => false
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Competition',
            'slug' => 'competition',
        ]);

        Certificate::factory(30)->create();
        Project::factory(30)->create();
    }
}
