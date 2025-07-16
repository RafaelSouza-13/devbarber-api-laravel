<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(39)->create();

        User::factory()->create([
            'name' => 'Rafa',
            'email' => 'rafa@example.com',
            'password' => bcrypt('senha123'),
        ]);
        $this->call([
            BarberSeeder::class,
            BarberServiceSeeder::class,
            BarberTestimonialSeeder::class,
            BarberAvailabilitySeeder::class,
        ]);
    }
}
