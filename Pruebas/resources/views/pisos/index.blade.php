<!-- resources/views/pisos/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Pisos</title>
</head>
<body>
    <div>
        <a href="{{ route('pisos.create') }}"><h1>Create</h1></a>
    </div>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">ID</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nom</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Tipus</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Direcció</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">M2</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Habitacions</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Lavabos</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Tipus de Cuina</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Descripció</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Ascensor</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Estat</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Preu</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Accions</th>

            </tr>
        </thead>
        <tbody>
            @foreach($pisos as $pis)
            <tr>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $pis->id }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $pis->nom_referencia }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $pis->tipus }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $pis->direccio }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $pis->m2 }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $pis->habitacions }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $pis->lavabos }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $pis->tipus_cuina }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $pis->descripcio }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $pis->ascensor }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $pis->estat }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $pis->preu }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">
                    <a href="{{ route('pisos.edit', $pis->id) }}">Editar</a>
                    <form action="{{ route('pisos.destroy', $pis->id) }}" method="POST" onclick="return confirm('Estàs segur que vols eliminar aquest pis?');">
                      @csrf
                      @method("DELETE")
                    <button type = "submit">Eliminar</button>
                    </form>
                </td>
                
                
            </tr>
            @endforeach
            
        </tbody>
    </table>




</body>
</html>
