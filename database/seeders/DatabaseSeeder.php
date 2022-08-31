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

        Certificate::create([
            "user_id" => 1,
            "category_id" => mt_rand(1, 3),
            "title" => 'ini judul',
            "slug" => "ini slug",
            "image" => 'img/JavaScript Algorithms and Data Structures Certificate.png',
            "excerpt" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium et dolore earum enim mollitia soluta atque, ipsum facere suscipit repellendus necessitatibus. Porro hic quasi sint illo fugiat nulla earum incidunt magnam, explicabo asperiores commodi eaque neque repellendus facere. Cum quae beatae debitis amet minima provident maiores deserunt labore quidem inventore.",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus in rem et adipisci aut, debitis ea, natus nobis iusto pariatur quas distinctio, necessitatibus officia iste sed. Est quos necessitatibus sit sed non magnam exercitationem amet ratione, enim ut! Voluptatum, saepe eius culpa, libero earum beatae exercitationem quas sed nesciunt doloribus amet vitae tempora non fugit sint, laborum eum iusto totam. Eius laudantium, consequuntur, fugit impedit dolores totam fuga distinctio laborum modi cumque et cum veritatis quam sit error quisquam ipsam necessitatibus corporis. Voluptatibus tempore enim libero deserunt, vel nulla debitis ullam, minima vero necessitatibus et sunt placeat labore nesciunt impedit."
        ]);

        // Certificate::factory(30)->create();
        // Project::factory(30)->create();
    }
}
