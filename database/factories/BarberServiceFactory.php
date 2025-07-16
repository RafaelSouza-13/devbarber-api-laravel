<?php

namespace Database\Factories;

use App\Models\Barber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BarberService>
 */
class BarberServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $servicos = ['Corte', 'Barba', 'Sobrancelha', 'Pé', 'Luzes'];
        return [
            'barber_id' => Barber::inRandomOrder()->first()?->id ?? Barber::factory(),
            'name' => $this->faker->randomElement($servicos),
            'price' => $this->faker->randomFloat(2, 15, 100),
        ];
    }
}
