<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Category;

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
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'in_stock' => $this->faker->numberBetween(1, 100), 
            'manufature_date' => $this->faker->date(),
            'main_image' => $this->faker->imageUrl(),
            'category_id' => Category::inRandomOrder()->first()->id, 
        ];
    }
}
