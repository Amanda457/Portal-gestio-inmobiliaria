<x-layout>
    <x-slot name="title">
        Pisos
    </x-slot>

    <x-nav url="{{ route('pisos.create') }}" />

    <div class="mx-8 mt-4 overflow-hidden shadow-md sm:rounded-lg">
        <table class="table-auto w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-green-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-2 py-1 text-center">ID</th>
                    <th scope="col" class="px-2 py-1 text-center">Nom</th>
                    <th scope="col" class="px-2 py-1 text-center">Tipus</th>
                    <th scope="col" class="px-2 py-1 text-center">Direcció</th>
                    <th scope="col" class="px-2 py-1 text-center">Població</th>
                    <th scope="col" class="px-2 py-1 text-center">M2</th>
                    <th scope="col" class="px-2 py-1 text-center">Habs</th>
                    <th scope="col" class="px-2 py-1 text-center">WC</th>
                    <th scope="col" class="px-2 py-1 text-center">Cuina</th>
                    <th scope="col" class="px-2 py-1 text-center">Descripció</th>
                    <th scope="col" class="px-2 py-1 text-center">Ascensor</th>
                    <th scope="col" class="px-2 py-1 text-center">Estat</th>
                    <th scope="col" class="px-2 py-1 text-center">Preu</th>
                    <th scope="col" class="px-2 py-1 text-center">Accions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pisos as $pis)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-2 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">{{ $pis->id }}</th>
                    <td class="px-2 py-1">{{ $pis->nom_referencia }}</td>
                    <td class="px-2 py-1 text-center">{{ $pis->tipus }}</td>
                    <td class="px-2 py-1">{{ $pis->direccio }}</td>
                    <td class="px-2 py-1 text-center">{{ $pis->poblacio }}</td>
                    <td class="px-2 py-1 text-center">{{ $pis->m2 }}</td>
                    <td class="px-2 py-1 text-center">{{ $pis->habitacions }}</td>
                    <td class="px-2 py-1 text-center">{{ $pis->lavabos }}</td>
                    <td class="px-2 py-1 text-center">{{ $pis->tipus_cuina }}</td>
                    <td class="px-2 py-1">{{ $pis->descripcio }}</td>
                    <td class="px-2 py-1 text-center">{{ $pis->ascensor ? 'Sí' : 'No' }}</td>
                    <td class="px-2 py-1 text-center">{{ $pis->estat }}</td>
                    <td class="px-2 py-1 text-center">{{ $pis->preu }}</td>
                    <td class="px-2 py-1 text-right">
                        <div class="flex space-x-2"> 
                        <a href="{{ route('pisos.edit', $pis->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        <form action="{{ route('pisos.destroy', $pis->id) }}" method="POST" class="inline" onsubmit="return confirm('Estàs segur que vols eliminar aquest pis?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline ml-2">Eliminar</button>
                        </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
{{-- <x-layout>
    <x-slot name="title">
        Pisos
    </x-slot>

    <x-nav url="{{ route('pisos.create') }}" />

    <div class="mx-8 mt-4 overflow-hidden shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-green-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-2 text-center">ID</th>
                    <th scope="col" class="px-4 py-2 text-center">Nom</th>
                    <th scope="col" class="px-4 py-2 text-center">Tipus</th>
                    <th scope="col" class="px-4 py-2 text-center">Direcció</th>
                    <th scope="col" class="px-4 py-2 text-center">Població</th>
                    <th scope="col" class="px-4 py-2 text-center">M2</th>
                    <th scope="col" class="px-4 py-2 text-center">Habs</th>
                    <th scope="col" class="px-4 py-2 text-center">WC</th>
                    <th scope="col" class="px-4 py-2 text-center">Cuina</th>
                    <th scope="col" class="px-4 py-2 text-center">Descripció</th>
                    <th scope="col" class="px-4 py-2 text-center">Ascensor</th>
                    <th scope="col" class="px-4 py-2 text-center">Estat</th>
                    <th scope="col" class="px-4 py-2 text-center">Preu</th>
                    <th scope="col" class="px-4 py-2 text-center">Accions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pisos as $pis)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $pis->id }}</td>
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $pis->nom_referencia }}</td>
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $pis->tipus }}</td>
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $pis->direccio }}</td>
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $pis->poblacio }}</td>
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $pis->m2 }}</td>
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $pis->habitacions }}</td>
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $pis->lavabos }}</td>
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $pis->tipus_cuina }}</td>
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $pis->descripcio }}</td>
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $pis->ascensor ? 'Si' : 'No' }}</td>
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $pis->estat }}</td>
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $pis->preu }}</td>
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">
                        <div class="flex justify-center items-center">
                            <a href="{{ route('pisos.edit', $pis->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                            <form action="{{ route('pisos.destroy', $pis->id) }}" method="POST" class="inline ml-2" onsubmit="return confirm('Estàs segur que vols eliminar aquest pis?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout> --}}
