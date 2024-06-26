<x-layout>
    <x-slot name="title">
         Reservas
    </x-slot>
    
    <x-nav url="{{ route('reservas.create') }}" />
        
    <div class="mx-8 mt-4 relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-green-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-4 py-2 text-center">ID</th>
                    <th class="px-4 py-2 text-center">Client</th>
                    <th class="px-4 py-2 text-center">Pis</th>
                    <th class="px-4 py-2 text-center">Data de la reserva</th>
                    <th class="px-4 py-2 text-center">Data fi gestió</th>
                    <th class="px-4 py-2 text-center">Estat</th>
                    <th class="px-4 py-2 text-center">Accions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $reserva->id }}</td>
                        <td class="px-4 py-2 text-gray-900 dark:text-white">{{ $reserva->client->nom }} {{ $reserva->client->cognom }}</td>
                        <td class="px-4 py-2 text-gray-900 dark:text-white">{{ $reserva->pis->nom_referencia }}</td>
                        <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $reserva->data_reserva }}</td>
                        <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $reserva->data_fi_gestio }}</td>
                        <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $reserva->estat }}</td>
                        <td class="px-4 py-2 text-center text-gray-900 dark:text-white">
                            <a href="{{ route('reservas.edit', $reserva->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                                <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" class="inline" onsubmit="return confirm('Estàs segur que vols eliminar aquesta reserva?');">
                                @csrf
                                @method("DELETE")
                                    <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline ml-2">Eliminar</button>
                                </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>