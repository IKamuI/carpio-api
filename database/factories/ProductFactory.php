<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'category_id' => Category::factory(),
      'full_name' => $this->faker->name,
      'short_name' => $this->faker->firstName,
      'description' => $this->faker->title,
      'price' => $this->faker->numerify,

    ];
  }
}
