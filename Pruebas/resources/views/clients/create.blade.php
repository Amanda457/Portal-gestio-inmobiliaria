<x-layout>
    <x-slot name="title">
        Nou client
      </x-slot>

<div class="bg-green-100 py-32 px-10 min-h-screen">
    <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto shadow-xl">
        <form method="POST" action="{{ route('clients.store') }}">
            {{-- Método de seguridad --}}
            @csrf

            <div class="flex items-center mb-5">
                <label for="nom" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Nom:</label>
                <input type="text" id="nom" name="nom" value="{{ old('nom') }}" placeholder="Introdueix el nom" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
            </div>
            @error('nom')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <div class="flex items-center mb-5">
                <label for="cognom" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Cognom:</label>
                <input type="text" id="cognom" name="cognom" value="{{ old('cognom') }}"  placeholder="Introdueix el cognom" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
            </div>
            @error('cognom')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <div class="flex items-center mb-5">
                <label for="telefon" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Telèfon:</label>
                <input type="text" id="telefon" name="telefon" value="{{ old('telefon') }}" placeholder="Número de telèfon" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
            </div>
            @error('telefon')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <div class="flex items-center mb-5">
                <label for="data_naixement" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Data de naixement:</label>
                <input type="text" id="data_naixement" name="data_naixement" value="{{ old('data_naixement') }}" placeholder="Format (DD-MM-AAAA)" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none required pattern="\d{2}-\d{2}-\d{4}">
            </div>
            @error('data_naixement')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <div class="flex items-center mb-5">
                <label for="email" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Correu electrònic:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Introdueix el correu electrònic" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
            </div>
            @error('email')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <div class="text-right">
                <button type="submit" class="py-3 px-8 bg-green-700 text-white font-bold rounded-full hover:bg-green-500 transition duration-300">Guardar</button>
                <a href="{{ route('clients.index') }}" class="ml-4 py-3 px-8 bg-gray-400 text-white font-bold rounded-full hover:bg-gray-500 transition duration-300">Cancelar</a>
              </div>
        </form>
    </div>
</div>
</x-layout>