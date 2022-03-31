<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'created_at' => now(),
            'updated_at' => now(),
            'thumbnail' => $this->faker->imageUrl(640, 640, 'cats'),
            'origin' => $this->faker->country(),
            'date' => $this->faker->dateTimeThisCentury('now', null),
            'price' => rand(10, 50) * .1,
            'calendar_id' => '1'
        ];
    }
}
