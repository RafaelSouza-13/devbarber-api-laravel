<?php

namespace Database\Factories;

use App\Models\Barber;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BarberService>
 */
class BarberTestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barber_id' => Barber::inRandomOrder()->first()?->id ?? Barber::factory(),
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'rate' => $this->faker->numberBetween(1, 5),
            'body' => $this->faker->realText(100),
        ];
    }
}
