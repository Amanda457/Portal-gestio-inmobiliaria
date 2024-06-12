<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Clients</title>
</head>
<body>
    <div>
        <a href="{{ route('clients.create') }}"><h1>Create</h1></a>
    </div>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">ID</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nom</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Cognom</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Telèfon</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Data de naixement</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Correu electrònic</th>
                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Accions</th>

            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $client->id }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $client->nom }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $client->cognom }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $client->telefon}}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $client->data_naixement }}</td>
                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $client->email }}</td>
                </tr>
            @endforeach
                
         </tbody>
    </table>
    
</body>
</html>
    