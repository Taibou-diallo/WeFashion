<?php

namespace Database\Factories;

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
            //

            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat(2, 20, 300),
            'visibility' => $this->faker->randomElement([
                'publish',
                'no publish'
            ]),
            'state' => $this->faker->randomElement([
                'sale',
                'standard'
            ]),
            'reference' => $this->faker->numerify('ref-####'),

            // 'category_id' => rand(1, 2),
        ];
    }
}
