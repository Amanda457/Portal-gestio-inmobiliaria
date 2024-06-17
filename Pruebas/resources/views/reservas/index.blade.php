<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Reservas</title>
</head>
<body>
    <div>
        <a href="{{ route('reservas.create') }}"><h1>Create</h1></a>
    </div>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">ID</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Client</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Pis</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Data de la reserva</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Data fi gestió</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Estat</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Accions</th>

            </tr>
        </thead>
        <tbody>
            @foreach($reservas as $reserva)
            <tr>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $reserva->id }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $reserva->client_id }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $reserva->pis_id }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $reserva->data_reserva }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $reserva->data_fi_gestio }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $reserva->estat }}</td>
                
                </tr>
            @endforeach
                
         </tbody>
    </table>
    
</body>
</html>
    