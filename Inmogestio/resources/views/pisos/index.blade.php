<x-layout>
    <x-slot name="title">
        Pisos
    </x-slot>

    <x-nav url="{{ route('pisos.create') }}" title="Crear inmoble" />

    <div class="mx-8 mt-4 relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-auto w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-green-100 dark:bg-gray-700 dark:text-gray-400">
                @php
                $headers = [
                'ID',
                'Nom',
                'Tipus',
                'Direcció',
                'Població',
                'M²',
                'Habs',
                'WC',
                'Cuina',
                'Descripció',
                'Ascensor',
                'Estat',
                'Preu',
                'Accions'
                ];
                @endphp

                <tr>
                    @foreach ($headers as $header)
                    <th scope="col" class="px-2 py-1 text-center">{{ $header }}</th>
                    @endforeach
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
<script>
    $(document).ready( function () {
    $('#pisosTable').DataTable({
        info: false,
        lenghtChange: false,

    });
});
</script>