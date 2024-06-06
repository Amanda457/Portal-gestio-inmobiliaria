<?php

namespace App\Http\Controllers;

use App\Models\Pis;
use App\Http\Requests\StorePisRequest;
use App\Http\Requests\UpdatePisRequest;
use Illuminate\Validation\Rule;

class PisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pisos = Pis::all();
        echo "hola index pisos";
        return view('pisos.index', compact ('pisos'));
    }

    /**
     * Show the form for creating a new resource
     */
    public function create()
    {
        return view('pisos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePisRequest $request)
    {
        $request->validate([
            'nom_referencia' => 'required|string|min:3|max:50',
            'direccio' => 'required|string|min:3|max:70',
            'm2' => 'required|integer|between:30,999',
            'habitacions' => 'required|integer|between: 1,12',
            'lavabos' => 'required|integer|between: 1,12',
            'preu' => 'required|integer|between: 300,2000 ',
            'tipus_cuina' => ['required','string', Rule::in(['Americana', 'Oberta (sense barra/illa)', 'Indepenent'])],
            'estat' => ['required','string', Rule::in(['Per reformar', 'Per entrar a viure', 'Nou'])],
            'descripcio' => 'required|string|min:40',
            'ascensor' => 'required|boolean',                      

        ]);
    }

    /** 
     * Display the specified resource.
     */
    public function show(Pis $pis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pis $pis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePisRequest $request, Pis $pis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pis $pis)
    {
        //
    }
}
