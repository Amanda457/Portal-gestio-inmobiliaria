<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pis;
use App\Models\Client;
use App\Models\Reserva;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Pis::factory()->count(10)->create();
        Client::factory()->count(10)->create();  
        Reserva::factory()->count(10)->create();
    }
}
