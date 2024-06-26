<x-layout>
    <x-slot name="title">
        Editar pis
      </x-slot>

<div class="bg-green-100 py-28 px-10 min-h-screen">
    <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto shadow-xl">
      <div class="flex justify-center">
        <h1 class="text-2xl mb-8 text-gray-700 font-semibold ">Formulari edició de pisos</h1>
        </div>
      <form method="POST" action="{{ route('pisos.update', $pis->id) }}">
        @csrf
        @method('PUT')     

        <div class="flex items-center mb-5">
          <label for="nom_referencia" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Nom Referencia:</label>
          <input type="text" id="nom_referencia" name="nom_referencia" value="{{ old('nom_referencia', $pis->nom_referencia) }}" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
        </div>
        @error('nom_referencia')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <div class="flex items-center mb-5">
          <label for="tipus" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Tipus:</label>
          <select id="tipus" name="tipus" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
            <option value="">Seleccionar Tipus</option>
            <option value="Pis" {{ old('tipus', $pis->tipus) == 'Pis' ? 'selected' : '' }}>Pis</option>
            <option value="Casa" {{ old('tipus', $pis->tipus) == 'Casa' ? 'selected' : '' }}>Casa</option>
          </select>
        </div>
        @error('tipus')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <div class="flex items-center mb-5">
          <label for="direccio" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Direcció:</label>
          <input type="text" id="direccio" name="direccio" value="{{ old('direccio', $pis->direccio) }}" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
        </div>
        @error('direccio')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <div class="flex items-center mb-5">
          <label for="poblacio" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Població:</label>
          <input type="text" id="poblacio" name="poblacio" value="{{ old('poblacio', $pis->poblacio) }}" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
        </div>
        @error('poblacio')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <div class="flex items-center mb-5">
          <label for="m2" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">M2:</label>
          <input type="text" id="m2" name="m2" value="{{ old('m2', $pis->m2) }}" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
        </div>
        @error('m2')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <div class="flex items-center mb-5">
          <label for="habitacions" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Habitacions:</label>
          <input type="text" id="habitacions" name="habitacions" value="{{ old('habitacions', $pis->habitacions) }}" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
        </div>
        @error('habitacions')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <div class="flex items-center mb-5">
          <label for="lavabos" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Lavabos:</label>
          <input type="text" id="lavabos" name="lavabos" value="{{ old('lavabos', $pis->lavabos) }}" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
        </div>
        @error('lavabos')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <div class="flex items-center mb-5">
          <label for="tipus_cuina" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Tipus de cuina:</label>
          <select id="tipus_cuina" name="tipus_cuina" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
            <option value="">Seleccionar Tipus de cuina</option>
            <option value="Americana" {{ old('tipus_cuina', $pis->tipus_cuina) == 'Americana' ? 'selected' : '' }}>Americana</option>
            <option value="Oberta (sense barra/illa)" {{ old('tipus_cuina', $pis->tipus_cuina) == 'Oberta (sense barra/illa)' ? 'selected' : '' }}>Oberta (sense barra/illa)</option>
            <option value="Independent" {{ old('tipus_cuina', $pis->tipus_cuina) == 'Independent' ? 'selected' : '' }}>Independent</option>
          </select>
        </div>
        @error('tipus_cuina')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <div class="flex items-center mb-5">
          <label for="descripcio" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Descripció:</label>
          <input type="text" id="descripcio" name="descripcio" value="{{ old('descripcio', $pis->descripcio) }}" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
        </div>
        @error('descripcio')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <div class="flex items-center mb-5">
          <label for="ascensor" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Té ascensor?</label>
          <input type="hidden" name="ascensor" value="0">
          <input type="checkbox" id="ascensor" name="ascensor" value="1" {{ old('ascensor', $pis->ascensor) ? 'checked' : '' }} class="form-checkbox h-5 w-5 text-green-400">
          <span class="ml-2">Sí</span>
        </div>
        @error('ascensor')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <div class="flex items-center mb-5">
          <label for="estat" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Estat:</label>
          <select id="estat" name="estat" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
            <option value="">Seleccionar Estat</option>
            <option value="Per reformar" {{ old('estat', $pis->estat) == 'Per reformar' ? 'selected' : '' }}>Per reformar</option>
            <option value="Per entrar a viure" {{ old('estat', $pis->estat) == 'Per entrar a viure' ? 'selected' : '' }}>Per entrar a viure</option>
            <option value="Nou" {{ old('estat', $pis->estat) == 'Nou' ? 'selected' : '' }}>Nou</option>
          </select>
        </div>
        @error('estat')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <div class="flex items-center mb-5">
          <label for="preu" class="inline-block w-40 mr-6 text-right font-bold text-gray-600">Preu:</label>
          <input type="text" id="preu" name="preu" value="{{ old('preu', $pis->preu) }}" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 text-gray-600 outline-none">
        </div>
        @error('preu')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <div class="text-right">
          <button type="submit" class="py-3 px-8 bg-green-700 text-white font-bold rounded-full hover:bg-green-500 transition duration-300">Actualitzar</button>
          <a href="{{ route('pisos.index') }}" class="ml-4 py-3 px-8 bg-gray-400 text-white font-bold rounded-full hover:bg-gray-500 transition duration-300">Cancelar</a>
        </div>
      </form>
    </div>
  </div>
</x-layout>