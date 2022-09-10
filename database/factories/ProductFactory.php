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
        $ids = Category::all()->pluck('id')->toArray();
        return [
            'name' => fake()->word(),
            'description' => fake()->text(255),
            'price' => fake()->randomDigit(),
            'image' => fake()->imageUrl(500, 500),
            'active' => fake()->boolean(20),
            'category_id' => fake()->randomElement($ids)
        ];
    }
}
