<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'product_name' => $this->faker->unique()->word(),
            'description' => $this->faker->optional()->sentence(),
            'unit_price' => $this->faker->randomFloat(2, 1, 100),
            'cost_price' => $this->faker->optional()->randomFloat(2, 1, 100),
            'is_active' => $this->faker->boolean(50),
            'supplier_id' => Supplier::factory(),
            'category_id' => Category::factory(),
        ];
    }
}
