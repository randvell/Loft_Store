<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'category_id' => random_int(0, 5),
            'price' => random_int(50, 1500),
            'image' => 'game-' . random_int(1, 9) . '.jpg',
            'description' => $this->faker->text()
        ];
    }
}
