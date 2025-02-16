<x-layout>
    <x-slot name="title">
        Clients
    </x-slot>

    <x-nav url="{{ route('clients.create') }}" title="Crear client" />
    <div class="mx-8 mt-4 relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-green-100 dark:bg-gray-700 dark:text-gray-400">
                @php
                $headers = [
                'ID',
                'Nom',
                'Cognom',
                'Telèfon',
                'Data de naixement',
                'Correu electrònic',
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
                @foreach($clients as $client)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $client->id }}</td>
                    <td class="px-4 py-2 text-gray-900 dark:text-white">{{ $client->nom }}</td>
                    <td class="px-4 py-2 text-gray-900 dark:text-white">{{ $client->cognom }}</td>
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $client->telefon }}</td>
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">{{ $client->data_naixement }}</td>
                    <td class="px-4 py-2 text-gray-900 dark:text-white">{{ $client->email }}</td>
                    <td class="px-4 py-2 text-center text-gray-900 dark:text-white">
                        <a href="{{ route('clients.edit', $client->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="inline" onsubmit="return confirm('Estàs segur que vols eliminar aquest client?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline ml-2">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>