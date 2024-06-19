<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Http\Requests\StoreReservaRequest;
use App\Http\Requests\UpdateReservaRequest;
use App\Models\Client;
use App\Models\Pis;

class ReservaController extends Controller
{

    public function index()
    {
        $reservas = Reserva::all();
        //dd($reservas);
        return view('reservas.index', compact('reservas'));
    }


    public function create()
    {
        $clients = Client::all();
        $pisos = Pis::all();

        return view('reservas.create', ['clients' => $clients], ['pisos' => $pisos]);
    }


    public function store(StoreReservaRequest $request)
    {
        $data = $request->validated();
        $data['client_id'] = $request->input('client_id');
        $data['pis_id'] = $request->input('pis_id');
        $data['data_reserva'] = now();
        $data['estat'] = 'Per revisar';
        Reserva::create($data);
        return redirect()->route('reservas.index');
    }


    public function show(Reserva $reserva)
    {
        //
    }

    public function edit(string $id)
    {
        $clients = Client::all();
        $pisos = Pis::all();
        $reserva = Reserva::findOrFail($id);
        return view('reservas.edit', compact('reserva', 'clients', 'pisos'));
    }

    public function update(UpdateReservaRequest $request, string $id)
    {
        $data = $request->validated();
        $reserva = Reserva::findOrFail($id);
        
        if (in_array($data['estat'], ['Aprovada', 'Rebutjada'])) {
            $data['data_fi_gestio'] = now();
        } else {
            $data['data_fi_gestio'] = null;
        }

        $reserva->update($data);
        return redirect()->route('reservas.index');
    }

    public function destroy(Reserva $reserva)
    {
        //
    }
}
