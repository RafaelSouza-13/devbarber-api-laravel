<?php

namespace Database\Seeders;

use App\Models\Barber;
use App\Models\BarberAvailability;
use Database\Factories\BarberAvaliabilityFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarberAvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barber::all()->each(function($barber){
            BarberAvailability::factory()->count(4)->create([
                'barber_id' => $barber->id,
            ]);
        });
    }
}
