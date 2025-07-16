<?php

namespace Database\Seeders;

use App\Models\BarberTestimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarberTestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BarberTestimonial::factory()->count(50)->create();
    }
}
