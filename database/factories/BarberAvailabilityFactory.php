<?php

namespace Database\Factories;

use App\Models\Barber;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BarberService>
 */
class BarberAvailabilityFactory extends Factory
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
            'weekday' => Carbon::createFromFormat('l', $this->faker->dayOfWeek(''))->translatedFormat('l'),
            'hours' => $this->faker->time('H:i'),
        ];
    }
}
