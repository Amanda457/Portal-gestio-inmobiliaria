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

        return view('reservas.create', ['clients' => $clients], ['pisos' => $pisos] );
    
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

    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservaRequest $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserva $reserva)
    {
        //
    }
}
