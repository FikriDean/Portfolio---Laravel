<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CertificateFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      "user_id" => 1,
      "category_id" => mt_rand(1, 3),
      "title" => $this->faker->sentence(mt_rand(3, 5)),
      "slug" => $this->faker->slug(),
      "image" => 'img/JavaScript Algorithms and Data Structures Certificate.png',
      "excerpt" => $this->faker->paragraph(),
      "body" => $this->faker->paragraph(mt_rand(5, 10)),
      "link" => $this->faker->url()
    ];
  }
}
