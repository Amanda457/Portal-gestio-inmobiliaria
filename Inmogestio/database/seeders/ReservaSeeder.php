<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reserva;
use App\Models\Client;
use App\Models\Pis;
use Carbon\Carbon;

class ReservasSeeder extends Seeder
{
    public function run()
    {
        $clientIds = Client::pluck('id')->toArray();
        $pisIds = Pis::pluck('id')->toArray();

        for ($i = 1; $i <= 10; $i++) {
            $client_id = $clientIds[array_rand($clientIds)];
            $pis_id = $pisIds[array_rand($pisIds)];

            Reserva::create([
                'client_id' => $client_id,
                'pis_id' => $pis_id,
                'data_reserva' => Carbon::now()->addDays(rand(1, 30)), 
                'estat' => ['Per revisar', 'Aprovada', 'Rebutjada'][rand(0, 2)],
                'data_fi_gestio' => null, 
            ]);
        }
    }
}
