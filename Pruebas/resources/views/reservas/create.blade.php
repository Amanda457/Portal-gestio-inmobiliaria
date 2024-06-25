<x-layout>
    <x-slot name="title">
        Nova reserva
      </x-slot>
<div class="bg-green-100 py-32 px-10 min-h-screen">

    <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto shadow-xl">
      <form method="POST" action="{{ route('reservas.store') }}">
        @csrf

        <div class="flex items-center mb-5">
          <label for="client_id" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Seleccionar Client:</label>
          <select name="client_id" id="client_id" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
            <option value="">Seleccionar Client</option>
            @foreach($clients as $client)
              <option value="{{ $client->id }}">{{ $client->nom }} {{ $client->cognom }}</option>
            @endforeach
          </select>
        </div>
        @error('client_id')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
  
        <div class="flex items-center mb-5">
          <label for="pis_id" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Seleccionar Pis:</label>
          <select name="pis_id" id="pis_id" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
            <option value="">Seleccionar Pis</option>
            @foreach($pisos as $pis)
              <option value="{{ $pis->id }}">{{ $pis->nom_referencia }}</option>
            @endforeach
          </select>
        </div>
        @error('pis_id')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
  
        <div class="flex items-center mb-5">
          <label for="data_reserva" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Data de Reserva:</label>
          <input type="text" id="data_reserva" name="data_reserva" value="{{ now()->toDateTimeString() }}" readonly class="flex-1 py-2 border-b-2 border-gray-400 text-gray-600 outline-none">
        </div>
  
        <div class="flex items-center mb-5">
          <label for="estat" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Estat:</label>
          <select name="estat" id="estat" disabled class="flex-1 py-2 border-b-2 border-gray-400 text-gray-600 outline-none">
            <option value="Per revisar" selected>Per revisar</option>
            <option value="Aprovada">Aprovada</option>
            <option value="Rebutjada">Rebutjada</option>
          </select>
          <input type="hidden" name="estat" value="Per revisar">
        </div>
        @error('estat')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
  
      <div class="text-right">
        <button type="submit" class="py-3 px-8 bg-green-700 text-white font-bold rounded-full hover:bg-green-500 transition duration-300">Guardar</button>
        <a href="{{ route('reservas.index') }}" class="ml-4 py-3 px-8 bg-gray-400 text-white font-bold rounded-full hover:bg-gray-500 transition duration-300">Cancelar</a>
      </div>
      </form>
    </div>
  </div>
</x-layout>