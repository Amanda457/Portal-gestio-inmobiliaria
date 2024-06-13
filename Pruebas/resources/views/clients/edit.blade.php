<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar client</title>
</head>
<body>
    <h1>Formulari editar client</h1>

    <form method="POST" action="{{ route('clients.update', $client->id) }}">
        {{-- Metodo de seguridad --}}
        @csrf
        @method('PUT')

        <label>Nom </label>
        <input name="nom" value="{{ old('nom', $client->nom) }}">
        @error('nom')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Cognom</label>
        <input name="cognom" value="{{ old('cognom', $client->cognom) }}">
        @error('cognom')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Telèfon</label>
        <input name="telefon" value="{{ old('telefon', $client->telefon) }}">
        @error('telefon')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Data de naixement</label>
        <input name="data_naixement" value="{{ old('data_naixement', $client->data_naixement) }}">
        @error('data_naixement')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Correu electrònic</label>
        <input name="email" value="{{ old('email', $client->email) }}">
        @error('email')
        <p>{{ $message }}</p>
        @enderror
        
        <button type="submit">Actualitzar</button>
        <a href="{{ route('clients.index') }}">Cancelar</a>
      </form>
    
</body>
</html>