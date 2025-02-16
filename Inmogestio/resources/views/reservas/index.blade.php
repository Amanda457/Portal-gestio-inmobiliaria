<x-layout>
    <x-slot name="title">
        Reserves
    </x-slot>

    <x-nav url="{{ route('reservas.create') }}" title="Crear reserva" />

    <div class="mx-8 mt-4 relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-green-100 dark:bg-gray-700 dark:text-gray-400">
                @php
                $headers = [
                'ID',
                'Client',
                'Pis',
                'Data de la reserva',
                'Data fi gestió',
                'Estat',
                'Accions'
                ];
                @endphp

                <tr>
                    @foreach ($headers as $header)
                    <th class="px-4 py-2 text-center">{{ $header }}</th>
                    @endforeach
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