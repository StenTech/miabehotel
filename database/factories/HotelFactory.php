<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // lattitude and longitude have taken in Lomé, Togo city, with four digits after the decimal point
        //
        return [
            'name' => $this->faker->name,
            'longitude' => $this->faker->longitude(1.2, 1.5),
            'latitude' => $this->faker->latitude(6.1, 6.5),
            'description' => $this->faker->text(200),
            'stars' => $this->faker->numberBetween(1, 5),
        ];
    }
}
