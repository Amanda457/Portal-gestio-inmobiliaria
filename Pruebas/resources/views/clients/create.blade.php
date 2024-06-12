<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear client</title>
</head>
<body>
    <h1>Formulari client nou</h1>

    <form method="POST" action="{{ route('clients.store') }}">
        {{-- Metodo de seguridad --}}
        @csrf
        <label>Nom </label>
        <input name="nom" value="{{ old('nom') }}">
        @error('nom')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Cognom</label>
        <input name="cognom" value="{{ old('cognom') }}">
        @error('cognom')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Telèfon</label>
        <input name="telefon" value="{{ old('telefon') }}">
        @error('telefon')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Data de naixement</label>
        <input name="data_naixement" value="{{ old('data_naixement') }}">
        @error('data_naixement')
        <p>{{ $message }}</p>
        @enderror
    
        <label>Correu electrònic</label>
        <input name="email" value="{{ old('email') }}">
        @error('email')
        <p>{{ $message }}</p>
        @enderror
        
        <button type="submit">Guardar</button>
        <a href="{{ route('clients.index') }}">Cancelar</a>
      </form>
    
</body>
</html>