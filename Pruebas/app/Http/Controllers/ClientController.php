<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Carbon\Carbon;


class ClientController extends Controller
{
    
    public function index()
    {
        $clients = Client::all();
        foreach ($clients as $client) {
            $client->data_naixement = Carbon::parse($client->data_naixement)->format('d-m-Y');
        }
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(StoreClientRequest $request)
    {
        $data = $request->validated();
        $data['data_naixement'] = Carbon::createFromFormat('d-m-Y', $data['data_naixement'])->format('Y-m-d');
        Client::create($data);
        return redirect()->route('clients.index');
    }

    public function show(Client $client)
    {
        //
    }

    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact ('client'));
    }

   
    public function update(UpdateClientRequest $request, string $id)
    {
        $data = $request->validated();
        $client = Client::findOrFail($id);
        $client->update($data);
        return redirect()->route('clients.index');
    }

    public function destroy(string $id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect()->route('clients.index');
    }
}
