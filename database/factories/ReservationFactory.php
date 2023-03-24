<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hotel_id' => $this->faker->numberBetween(1, 10),
            'user_id' => $this->faker->numberBetween(1, 10),
            'gestionnaire_id' => $this->faker->numberBetween(1, 10),
            'date_debut' => $this->faker->date(),
            'date_fin' => $this->faker->date(),
            'prix_total' => $this->faker->randomFloat(2, 0, 1000),
            'description' => $this->faker->text(),
            'status' => $this->faker->randomElement(['pending', 'accepted', 'refused']),
        ];
    }
}
