<?php

namespace Database\Seeders;

use App\Models\Barber;
use App\Models\BarberService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarberServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barber::all()->each(function($barber){
            BarberService::factory()->count(3)->create([
                'barber_id' => $barber->id,
            ]);
        });
    }
}
