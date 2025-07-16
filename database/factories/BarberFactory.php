<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barber>
 */
class BarberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'stars' => $this->faker->numberBetween(1, 5),
            'latitude' => $this->faker->latitude(-1.5, -1.3), 
            'longitude' => $this->faker->longitude(-48.5, -48.3),
            'avatar' => 'avatar-' .$this->faker->numberBetween(1, 4). '.png',
        ];
    }
}
