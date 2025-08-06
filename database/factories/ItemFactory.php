<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true),
            'description' => fake()->paragraph(),
            'price' => fake()->randomElement([50000, 100000, 1000000]),
            'category_id' => fake()->numberBetween(1, 2),
            'img' => fake()->randomElement([
                'https://images.unsplash.com/photo-1591325418441-ff678baf78ef',
                'https://images.unsplash.com/photo-1564489563601-c53cfc451e93',
                'https://images.unsplash.com/photo-1683315446874-e6a629087ef8'
            ]),
            'is_active' => fake()->boolean(),
        ];
    }
}
